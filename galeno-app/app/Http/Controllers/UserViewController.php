<?php

namespace App\Http\Controllers;

use App\Patient;
use App\Visit;

class UserViewController extends Controller
{
    public function app()
    {
        if (auth()->user()->hasRole('nurse')) {
            $patients = Patient::paginate(6);
            $visits = Visit::paginate(6);

            return view('user.main')
                ->with('patients', $patients)
                ->with('visits', $visits);
        }
    }
}
