<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    function success(Request $request)
    {
        return view('pages.frontend.payment.success');
    }
    function fail()
    {
        return view('pages.frontend.payment.fail');
    }
    function cancel()
    {
        return redirect()->route('home');
    }
}
