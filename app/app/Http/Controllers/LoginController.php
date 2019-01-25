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


      $username = $request['username'];
      $password = $request['password'];

      if (Auth::attempt(['username' => $username, 'password' => $password, 'active' => true])) {
        return redirect('/provider');
      }

      return redirect()->back()->with('error','Invalid credentials.');
    }

    public function logout() {

      Auth::logout();

      return redirect('/');
    }



}
