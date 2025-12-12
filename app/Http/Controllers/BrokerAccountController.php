<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class BrokerAccountController extends Controller
{
	public function createaccount(Request $request): View
    {
		$pageTitle = "Create New Account";
        return view('client.broker.createAccount', [
            'user' => $request->user(),
			'pageTitle' => $pageTitle,
        ]);
    }
	
	public function liveaccount(Request $request): View
    {
		$pageTitle = "My Trading Live Accounts";
        return view('client.broker.liveAccount', [
            'user' => $request->user(),
			'pageTitle' => $pageTitle,
        ]);
    }
	
	public function demoaccount(Request $request): View
    {
		$pageTitle = "My Trading Demo Accounts";
        return view('client.broker.demoAccount', [
            'user' => $request->user(),
			'pageTitle' => $pageTitle,
        ]);
    }
	
	public function accountdetails(Request $request): View
    {
		$pageTitle = "Account Details";
        return view('client.broker.accountDetails', [
            'user' => $request->user(),
			'pageTitle' => $pageTitle,
        ]);
    }
}
