<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use ResetsPasswords;

    public function main()
    {
        return view('main');
    }

    public function login(Request $request)
    {
        Auth::attempt(
          [
              'email'    => $request->input('email'),
              'password' => $request->input('password'),
              'active'   => 1,
          ], true
        );

        if (Auth::check()) {
            $user = Auth::user();

            return $request->expectsJson()
                          ? response()->json(['status' => 'OK', 'message' => 'Login successful.'])
                          : redirect('/app');
        } else {
            return $request->expectsJson()
                      ? response()->json(['status' => 'Error', 'message' => 'Sorry, invalid credentials.'])
                      : back()->with(['status' => 'Error', 'message' => 'Sorry, invalid credentials.']);
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }

    public function showResetPassword()
    {
        return view('reset-password');
    }

    public function processResetPassword(Request $request)
    {
        $request->validate(['email' => 'email|required']);
    }

    public function showCheckEmailReset()
    {
        return view('check-email-password-reset');
    }
}
