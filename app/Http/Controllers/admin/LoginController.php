<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {

        
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::guard('pilot')->attempt($request->only('email', 'password'))) {
              if (Auth::guard('pilot')->user()->usertype == 1) {
            return redirect()->route('pilot.dashboard');   
      
                }else{
                    Auth::guard('pilot')->logout();
                    return back()->withErrors(['email' => 'Access denied. Not allowed user type']);
                }
            
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function logout(Request $request)
    {
       
        Auth::guard('pilot')->logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect()->route('pilot.login');
    }
}
