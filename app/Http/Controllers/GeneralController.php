<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class GeneralController extends Controller
{	
	public function webTerminal(Request $request): View
    {
		$pageTitle = "MetaTrader 5 Web Terminal";
        return view('client.general.webterminal', [
            'user' => $request->user(),
			'pageTitle' => $pageTitle,
        ]);
    }
	
	public function helpFiles(Request $request): View
    {
		$pageTitle = "CRM Resources";
        return view('client.general.helpfiles', [
            'user' => $request->user(),
			'pageTitle' => $pageTitle,
        ]);
    }
	
	public function helpDesk(Request $request): View
    {
		$pageTitle = "Help Desk";
        return view('client.general.helpdesk', [
            'user' => $request->user(),
			'pageTitle' => $pageTitle,
        ]);
    }
	
	public function createTicket(Request $request): View
    {
		$pageTitle = "Help Desk";
        return view('client.general.createTicket', [
            'user' => $request->user(),
			'pageTitle' => $pageTitle,
        ]);
    }
	
	public function openTicket(Request $request): View
    {
		$pageTitle = "Help Desk";
        return view('client.general.openticket', [
            'user' => $request->user(),
			'pageTitle' => $pageTitle,
        ]);
    }
	
	public function closedTicket(Request $request): View
    {
		$pageTitle = "Help Desk";
        return view('client.general.closedticket', [
            'user' => $request->user(),
			'pageTitle' => $pageTitle,
        ]);
    }

    public function bonus(Request $request): View
    {
		$pageTitle = "Bonus";
        return view('client.general.bonus', [
            'user' => $request->user(),
			'pageTitle' => $pageTitle,
        ]);
    }
}
