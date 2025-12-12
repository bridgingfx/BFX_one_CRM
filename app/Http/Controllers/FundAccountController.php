<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class FundAccountController extends Controller
{	
	public function funddeposit(Request $request): View
    {
		$pageTitle = "Fund Your Trading Account / Wallet";
        return view('client.funds.funddeposit', [
            'user' => $request->user(),
			'pageTitle' => $pageTitle,
        ]);
    }
	
	public function fundwithdrawal(Request $request): View
    {
		$pageTitle = "Withdraw Your Funds";
        return view('client.funds.fundwithdrawal', [
            'user' => $request->user(),
			'pageTitle' => $pageTitle,
        ]);
    }
	
	public function fundtransfer(Request $request): View
    {
		$pageTitle = "Transfer Between MT5 Accounts";
        return view('client.funds.fundtransfer', [
            'user' => $request->user(),
			'pageTitle' => $pageTitle,
        ]);
    }
	
	public function fundp2p(Request $request): View
    {
		$pageTitle = "P2P";
        return view('client.funds.fundp2p', [
            'user' => $request->user(),
			'pageTitle' => $pageTitle,
        ]);
    }
	
	public function fundhistory(Request $request): View
    {
		$pageTitle = "Financial Transactions";
        return view('client.funds.fundhistory', [
            'user' => $request->user(),
			'pageTitle' => $pageTitle,
        ]);
    }
	
	public function fundprophistory(Request $request): View
    {
		$pageTitle = "Challenge Purchase";
        return view('client.funds.fundprophistory', [
            'user' => $request->user(),
			'pageTitle' => $pageTitle,
        ]);
    }
	
	
}
