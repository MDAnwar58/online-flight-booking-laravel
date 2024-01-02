<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ContactInfo;
use App\Models\PersonalInfo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    function profile()
    {
        $user = Auth::user();
        $personalInfo = PersonalInfo::where('user_id', $user->id)->first();
        $contactInfo = ContactInfo::where('user_id', $user->id)->first();
        return view('pages.frontend.profile.index', compact('personalInfo', 'contactInfo'));
    }
    function profileUpdate(Request $request)
    {
        User::updateOrCreate(['id' => Auth::user()->id], 
        [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
        ]);
        
        ContactInfo::updateOrCreate(['user_id' => Auth::user()->id],
        [
            'phone' => $request->phone,
            'date_of_birth' => $request->date_of_birth,
            'address' => $request->address,
            'city' => $request->city,
            'country' => $request->country,
            'frequent_flyer_number' => $request->frequent_flyer_number
        ]);

        PersonalInfo::updateOrCreate(['user_id' => Auth::user()->id],
        [
            'passport_number' => $request->passport_number,
            'port_expiry_date' => $request->port_expiry_date
        ]);

        return back()->with('success', 'Profile Updated!');
    }
    function passwordUpdate(Request $request)
    {
        $request->validate([
            'password' => 'required|confirmed',
        ]);

        $user = User::where('email', $request->email)->first();
        $user->update([
            'password' => Hash::make($request->password),
        ]);

        return back()->with('success', 'Password Updated!');
    }
}
