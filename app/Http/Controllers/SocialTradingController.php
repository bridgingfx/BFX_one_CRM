<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class SocialTradingController extends Controller
{	
	public function coiperstrategies(Request $request): View
    {
		$pageTitle = "Browse Strategies";
        return view('client.copier.strategies', [
            'user' => $request->user(),
			'pageTitle' => $pageTitle,
        ]);
    }
	
	public function coipermycopies(Request $request): View
    {
		$pageTitle = "My Copies";
        return view('client.copier.copies', [
            'user' => $request->user(),
			'pageTitle' => $pageTitle,
        ]);
    }
	
	public function copierperformance(Request $request): View
    {
		$pageTitle = "Performance";
        return view('client.copier.performance', [
            'user' => $request->user(),
			'pageTitle' => $pageTitle,
        ]);
    }
	
	public function socialleaderboard(Request $request): View
    {
		$pageTitle = "Leaderboard";
        return view('client.social.leaderboard', [
            'user' => $request->user(),
			'pageTitle' => $pageTitle,
        ]);
    }
	
	public function socialmyaccounts(Request $request): View
    {
		$pageTitle = "My Accounts";
        return view('client.social.myaccounts', [
            'user' => $request->user(),
			'pageTitle' => $pageTitle,
        ]);
    }
	
	public function socialtransfer(Request $request): View
    {
		$pageTitle = "Transfer";
        return view('client.social.transfer', [
            'user' => $request->user(),
			'pageTitle' => $pageTitle,
        ]);
    }
	
	public function socialtransferhistory(Request $request): View
    {
		$pageTitle = "Transfer History";
        return view('client.social.transferhistory', [
            'user' => $request->user(),
			'pageTitle' => $pageTitle,
        ]);
    }
	
	public function sociallegaldocs(Request $request): View
    {
		$pageTitle = "Legal Documents";
        return view('client.social.legaldocs', [
            'user' => $request->user(),
			'pageTitle' => $pageTitle,
        ]);
    }
	
	public function pammmanagers(Request $request): View
    {
		$pageTitle = "Browse Managers";
        return view('client.pamm.managers', [
            'user' => $request->user(),
			'pageTitle' => $pageTitle,
        ]);
    }
	
	public function pammmyinvestment(Request $request): View
    {
		$pageTitle = "My Investments";
        return view('client.pamm.investment', [
            'user' => $request->user(),
			'pageTitle' => $pageTitle,
        ]);
    }
	
	public function pammperformance(Request $request): View
    {
		$pageTitle = "Performance";
        return view('client.pamm.performance', [
            'user' => $request->user(),
			'pageTitle' => $pageTitle,
        ]);
    }
	
}
