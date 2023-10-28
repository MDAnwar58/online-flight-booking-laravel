<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    function registerPage()
    {
        return view('pages.auth.register');
    }
    function registerRequest(Request $request)
    {
        User::create($request->all());

        return redirect()->route('login')->with('success', 'Create Your Account!');
    }
}
