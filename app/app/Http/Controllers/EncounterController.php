<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Encounter;
use App\Provider;
use App\Patient;
use App\Diagnosis;
use Auth;

class EncounterController extends Controller
{
    public function getChiefComplaint() {

      return 'Get Chief Complaint';
    }

    public function editChiefComplaint(Request $request) {

      $encounter = Encounter::find($request['id']);

      $encounter->chief_complaint = $request['value'];
      $encounter->save();

      return response(200);
    }

    public function getNote() {
      return 'Get Note';
    }

    public function editNote(Request $request) {
      $encounter = Encounter::find($request['id']);

      $encounter->note = $request['value'];
      $encounter->save();

      return response(200);
    }



    public function addDiagnosis(Request $request) {

      // retrieve encounter
      $encounter = Encounter::find($request['id']);

      // retrieve patient
      $patient = $encounter->patient;

      // retrieve provider
      $provider = Auth::user();

      // create new diagnosis
      $diagnosis = Diagnosis::create([
        'encounter_id' => $encounter->id,
        'patient_id' => $patient->id,
        'provider_id' => $provider->id,
        'active' => true,
        'name' => $request['name'],
        'icd_10_code' => $request['code'],
      ]);

      return response()->json([
        'id' => $diagnosis->id
      ]);


    }

}
