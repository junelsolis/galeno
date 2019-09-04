<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Auth;


class LoginController extends Controller
{


    use ResetsPasswords;

    // protected $redirectTo = ['/app'];


    public function main()
    {

        return view('main');

    }


    public function login(Request $request)
    {

        Auth::attempt(
          [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'active' => 1
          ], true
        );

        if (Auth::check()) {

          $user = Auth::user();

          if ($user->roles->count() > 1) {

            return redirect('app/switcher');
          }

          else {

            $roleName = $user->roles->first()->name;

            return redirect('app/' . $roleName);

          }

        }

        else {

          return back()->with([
            'status' => 'Error',
            'message' => 'Sorry, invalid credentials.'
          ]);

        }


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
