<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class PropfirmAccountController extends Controller
{
	public function createchallenges(Request $request): View
    {
		$pageTitle = "New Challenge";
        return view('client.propfirm.challengeAccount', [
            'user' => $request->user(),
			'pageTitle' => $pageTitle,
        ]);
    }
	
	public function buychallenges(Request $request): View
    {
		$pageTitle = "Buy Challenge";
        return view('client.propfirm.buyAccount', [
            'user' => $request->user(),
			'pageTitle' => $pageTitle,
        ]);
    }
	
	public function mychallenges(Request $request): View
    {
		$pageTitle = "My Challenge";
        return view('client.propfirm.mychallenge', [
            'user' => $request->user(),
			'pageTitle' => $pageTitle,
        ]);
    }
	
	public function challengesDetails(Request $request): View
    {
		$pageTitle = "Overview Challenge";
        return view('client.propfirm.accountDetails', [
            'user' => $request->user(),
			'pageTitle' => $pageTitle,
        ]);
    }
	
	public function contests(Request $request): View
    {
		$pageTitle = "Contests";
        return view('client.propfirm.contestsAccount', [
            'user' => $request->user(),
			'pageTitle' => $pageTitle,
        ]);
    }
	
}
