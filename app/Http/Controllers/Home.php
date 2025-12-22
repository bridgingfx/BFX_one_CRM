<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DemoAccount;
use App\Models\Ib1;
use App\Models\LiveAccount;
use App\Models\TournamentLiveAccount;
use App\Models\WalletDeposit;
use App\Models\WalletWithdraw;
use DB;
use Illuminate\Support\Facades\Auth;

class Home extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function dashboard()
    {
        $email                    = $email                    = auth()->user()->email;
        $walletBalance            = $this->getWalletBalance($email);
        $totalDeposit             = $this->getTotalDeposit($email);
        $totalWithdrawal          = $this->getTotalWithdrawal($email);
        $liveAccounts             = $this->getLiveAccountCount($email);
        $liveAccountDetails       = $this->getLiveAccountDetails($email);
        $demoAccountDetails       = $this->getDemoAccountDetails($email);
        $tournamentAccountDetails = $this->getTournamentAccountDetails($email);
        $ibResult                 = $this->getIb1Details($email);
        return view('dashboard', [
            'walletBalance'            => $walletBalance,
            'totalDeposit'             => $totalDeposit,
            'totalWithdrawal'          => $totalWithdrawal,
            'liveAccounts'             => $liveAccounts,
            'liveAccountDetails'       => $liveAccountDetails,
            'demoAccountDetails'       => $demoAccountDetails,
            'tournamentAccountDetails' => $tournamentAccountDetails,
            'ibResult'                 => $ibResult,
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
    public function getLiveAccountCount($email)
    {
        $liveAccountsCount = LiveAccount::where('email', $email)->count();
        return $liveAccountsCount;
    }
    public function getLiveAccountDetails($email)
    {
        $liveaccount_details = LiveAccount::with(['accountType:ac_index,ac_name,ac_group'])
            ->where('email', $email)
            ->orderBy('id', 'desc')
            ->get(['leverage', 'currency', 'balance', 'equity', 'id as id', 'trade_id', 'tradePlatform', 'Registered_Date', 'account_type']);
        return $liveaccount_details;
    }
    public function getDemoAccountDetails($email)
    {
        $demoaccount_details = DemoAccount::with(['accountType:ac_index,ac_name,ac_group'])
            ->where('email', $email)
            ->orderBy('id', 'desc')
            ->get(['leverage', 'currency', 'balance', 'equity', 'id as id', 'trade_id', 'tradePlatform', 'Registered_Date', 'account_type']);
        return $demoaccount_details;
    }
    public function getTournamentAccountDetails($email)
    {
        $tournamentaccount_details = TournamentLiveAccount::with('accountType')
            ->where('email', $email)
            ->orderBy('id', 'desc')
            ->get(['leverage', 'currency', 'balance', 'equity', 'id as id', 'trade_id', 'tradePlatform', 'Registered_Date']);
        return $tournamentaccount_details;
    }
    public function getIb1Details($email)
    {
        $ibResult = Ib1::where('email', $email)
            ->where('status', 1)
            ->first();
        return $ibResult;
    }
}
