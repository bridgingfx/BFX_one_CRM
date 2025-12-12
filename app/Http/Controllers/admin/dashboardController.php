<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class dashboardController extends Controller
{
    public function dashboard(Request $request): View
    {
        $pageTitle = "Dashboard";
		return view('admin.dashboard', [
            'user' => $request->user(),
			'pageTitle' => $pageTitle,
        ]);
    }
}
