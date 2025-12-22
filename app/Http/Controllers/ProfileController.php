<?php
namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\KycUpdate;
use App\Models\WalletDeposit;
use App\Models\WalletWithdraw;
use App\Services\MailService as MailService;
use App\Services\PusherService;
use DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class ProfileController extends Controller
{
    protected $pusherService;

    public function __construct(PusherService $pusherService, MailService $mailService)
    {
        $this->pusherService = $pusherService;
        $this->mailService   = $mailService;
        // $this->settings      = settings();
    }
    /**
     * Display the user's profile form.
     */
    public function dashboard(Request $request): View
    {
        $email           = $email           = auth()->user()->email;
        $walletBalance   = $this->getWalletBalance($email);
        $totalDeposit    = $this->getTotalDeposit($email);
        $totalWithdrawal = $this->getTotalWithdrawal($email);
        // $liveAccounts             = $this->getLiveAccountCount($email);
        // $liveAccountDetails       = $this->getLiveAccountDetails($email);
        // $demoAccountDetails       = $this->getDemoAccountDetails($email);
        // $tournamentAccountDetails = $this->getTournamentAccountDetails($email);
        // $ibResult                 = $this->getIb1Details($email);

        $pageTitle = "Dashboard";
        return view('client.dashboard', [
            'walletBalance'   => $walletBalance,
            'totalDeposit'    => $totalDeposit,
            'totalWithdrawal' => $totalWithdrawal,
            'user'            => $request->user(),
            'pageTitle'       => $pageTitle,
        ]);
    }

    public function getWalletBalance($email)
    {
        $totalDeposit = WalletDeposit::where('email', $email)
            ->where('status', 1)
            ->sum('deposit_amount');
        $totalWithdraw = WalletWithdraw::where('email', $email)
            ->where('status', 1)
            ->sum('withdraw_amount');
        $walletBalance = $totalDeposit - $totalWithdraw;
        return $walletBalance;
    }

    public function getTotalDeposit($email)
    {
        $sql           = "select COALESCE(SUM(trs.deposit_amount), 0) as deposit from trade_deposit trs WHERE trs.status=1 and trs.email='" . $email . "' and trs.deposit_type NOT IN('Wallet Transfer')";
        $trade_deposit = DB::select($sql)[0];

        $sql            = "select COALESCE(SUM(trs.deposit_amount), 0) as deposit from wallet_deposit trs WHERE trs. status=1 and trs.email='" . $email . "'";
        $wallet_deposit = DB::select($sql)[0];

        $totalDeposit = $trade_deposit->deposit + $wallet_deposit->deposit;
        return $totalDeposit;
    }
    public function getTotalWithdrawal($email)
    {
        $sql              = "select COALESCE(SUM(trs.withdrawal_amount), 0) as withdraw from trade_withdrawal trs WHERE trs.status=1 and  trs.email='" . $email . "' and  trs.withdraw_type NOT IN('Wallet Withdrawal')";
        $trade_withdrawal = DB::select($sql)[0];

        $sql               = "select COALESCE(SUM(trs.withdraw_amount), 0) as withdraw from wallet_withdraw  trs WHERE trs.status=1 and trs.email='" . $email . "'";
        $wallet_withdrawal = DB::select($sql)[0];

        $totalWithdrawal = $trade_withdrawal->withdraw + $wallet_withdrawal->withdraw;
        return $totalWithdrawal;
    }

    public function edit(Request $request): View
    {
        $email   = auth()->user()->email;
        $idProof = KycUpdate::where('email', $email)
            ->where('kyc_type', 'ID Proof')
            ->orderBy('id', 'desc')
            ->first();

        $addressProof = KycUpdate::where('email', $email)
            ->where('kyc_type', 'Address Proof')
            ->orderBy('id', 'desc')
            ->first();
        $verf_docs = KycUpdate::where('email', $email)->orderBy('id', 'desc')->get();
        $pageTitle = 'Profile';
        return view('profile.edit', [
            'user'         => $request->user(),
            'idProof'      => $idProof,
            'addressProof' => $addressProof,
            'verf_docs'    => $verf_docs,
            'pageTitle'    => $pageTitle,
        ]);
    }

    public function documentUpload()
    {
        $pageTitle = 'Document Upload';
        return view('profile.kyc-upload', [
            'user'      => auth()->user(),
            'pageTitle' => $pageTitle,
        ]);
    }
    public function uploadDocument(Request $request)
    {
        // dd($request->all());
        $time    = time() . "_";
        $email   = session('clogin');
        $folder  = 'public/_docs/';
        $dist    = '/storage/_docs/';
        $allowed = ['jpeg', 'png', 'jpg'];

        // Validate all 3 files
        $validator = Validator::make($request->all(), [
            'image'  => 'required|file|mimes:' . implode(',', $allowed) . '|max:2048',
            'image1' => 'required|file|mimes:' . implode(',', $allowed) . '|max:2048',
            'image2' => 'required|file|mimes:' . implode(',', $allowed) . '|max:2048',
        ], [
            'image.max'  => 'The front side image must not be greater than 2MB.',
            'image1.max' => 'The back side image must not be greater than 2MB.',
            'image2.max' => 'The address proof image must not be greater than 2MB.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with("error", $validator->errors()->first());
        }

        try {
            // ID Proof - Front
            $imagePath = $request->file('image')->storeAs($folder, $time . $request->file('image')->getClientOriginalName());
            // ID Proof - Back
            $image1Path = $request->file('image1')->storeAs($folder, $time . $request->file('image1')->getClientOriginalName());
            // Address Proof
            $image2Path = $request->file('image2')->storeAs($folder, $time . $request->file('image2')->getClientOriginalName());

            // Confirm all file paths
            if (! $imagePath || ! $image1Path || ! $image2Path) {
                return redirect()->back()->with("error", "File upload failed. Please try again.");
            }

            // Save ID Proof
            KycUpdate::create([
                'email'         => $email,
                'kyc_type'      => 'ID Proof',
                'kyc_frontside' => $dist . basename($imagePath),
                'kyc_backside'  => $dist . basename($image1Path),
            ]);

            $this->pusherService->sendPusherMessage([
                'type'    => 'Document Upload',
                'message' => 'A new KYC Document - ID Proof has been uploaded by ' . session('user')['fullname'],
                'link'    => "/admin/kyc_details?id=" . md5($email),
                'enc_id'  => md5($email),
            ]);

            // Save Address Proof
            KycUpdate::create([
                'email'       => $email,
                'kyc_type'    => 'Address Proof',
                'front_image' => $dist . basename($image2Path),
            ]);

            $this->pusherService->sendPusherMessage([
                'type'    => 'Document Upload',
                'message' => 'A new KYC Document - Address Proof has been uploaded by ' . session('user')['fullname'],
                'link'    => "/admin/kyc_details?id=" . md5($email),
                'enc_id'  => md5($email),
            ]);
            $settings     = settings();
            $emailSubject = $settings['admin_title'] . ' - KYC ';
            $content      = '<div>We are pleased to inform you that your KYC has been successfully submitted your account..</div>';
            $templateVars = [
                'name'           => session('user')['fullname'],
                'site_link'      => $settings['copyright_site_name_text'],
                "btn_text"       => "Go To Dashboard",
                'email'          => $settings['email_from_address'],
                "content"        => $content,
                "title_right"    => "KYC",
                "subtitle_right" => "KYC Document",
            ];
            $this->mailService->sendEmail($email, $emailSubject, '', '', $templateVars);

            return redirect()->to('/user-profile')->with("success", "KYC Documents successfully uploaded.");
        } catch (\Exception $e) {
            dd($e);
            return redirect()->back()->with("error", "Upload failed: " . $e->getMessage());
        }
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
