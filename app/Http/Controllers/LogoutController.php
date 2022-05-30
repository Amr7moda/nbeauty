<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function logout()
    {
        Auth::logout();
        return redirect('/home');
    }

    public function resetpassword(Request $request)
    {
        return view('auth.reset-password', compact('request'));
    }
}
