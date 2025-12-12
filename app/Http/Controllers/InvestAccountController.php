<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class InvestAccountController extends Controller
{	
	public function investPlan(Request $request): View
    {
		$pageTitle = "Investment Planning";
        return view('client.investment.investplan', [
            'user' => $request->user(),
			'pageTitle' => $pageTitle,
        ]);
    }
	
	public function myInvest(Request $request): View
    {
		$pageTitle = "My Investment";
        return view('client.investment.investplan', [
            'user' => $request->user(),
			'pageTitle' => $pageTitle,
        ]);
    }
}
