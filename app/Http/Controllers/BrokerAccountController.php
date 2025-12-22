<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class BrokerAccountController extends Controller
{
    public function createDemoaccount(Request $request): View
    {
        $pageTitle = "Create Demo Account";
        return view('client.broker.createDemoAccount', [
            'user'      => $request->user(),
            'pageTitle' => $pageTitle,
        ]);
    }
    public function createLiveaccount(Request $request): View
    {
        $pageTitle = "Create Live Account";
        return view('client.broker.createLiveAccount', [
            'user'      => $request->user(),
            'pageTitle' => $pageTitle,
        ]);
    }

    public function liveaccount(Request $request): View
    {
        $pageTitle = "My Trading Live Accounts";
        return view('client.broker.liveAccount', [
            'user'      => $request->user(),
            'pageTitle' => $pageTitle,
        ]);
    }

    public function demoaccount(Request $request): View
    {
        $pageTitle = "My Trading Demo Accounts";
        return view('client.broker.demoAccount', [
            'user'      => $request->user(),
            'pageTitle' => $pageTitle,
        ]);
    }

    public function accountdetails(Request $request): View
    {
        $pageTitle = "Account Details";
        return view('client.broker.accountDetails', [
            'user'      => $request->user(),
            'pageTitle' => $pageTitle,
        ]);
    }
}
