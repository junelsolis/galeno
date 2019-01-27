<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Physician extends Controller
{
    public function main() {
      return view('provider.main');
    }
}
