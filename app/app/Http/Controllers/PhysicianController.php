<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\Traits\GathersPhysicianItems;

class PhysicianController extends Controller
{

    use GathersPhysicianItems;

    public function main() {

      $data = array();

      $data['patientsToday'] = $this->patientsToday();

      return view('physician.main')->with([
        'data' => $data,
      ]);
    }

    public function patient(Request $request) {

      $patient = Patient::find($request['id']);

      $data['patient'] = $patient;
      $data['patientsToday'] = $this->patientsToday();

      return view('physician.patient')->with([
        'data' => $data
      ]);
    }
}
