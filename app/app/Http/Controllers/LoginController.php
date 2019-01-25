<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{

    public function username() {
      return 'username';
    }

    public function showLogin() {
      return view('login');
    }

    public function login(Request $request) {

      $credentials = $request->only('email','password');

      if (Auth::attempt($credentials)) {
        return redirect('/provider');
      }

      return redirect('/');
    }



}
