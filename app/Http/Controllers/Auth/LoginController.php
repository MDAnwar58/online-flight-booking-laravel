<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function loginPage()
    {
        return view('pages.auth.login');
    }
    function loginRequest(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('admin.dashboard');
        }else{
            return back();
        }
    }
    function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
