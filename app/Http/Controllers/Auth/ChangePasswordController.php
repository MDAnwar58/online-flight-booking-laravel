<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChangePasswordController extends Controller
{
    function changePassword()
    {
        return view('pages.frontend.change_password.index');
    }
}
