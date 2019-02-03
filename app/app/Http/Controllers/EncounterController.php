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
      $diagnosis = new Diagnosis;

      $diagnosis->encounter_id = $encounter->id;
      $diagnosis->patient_id = $patient->id;
      $diagnosis->provider_id = $provider->id;
      $diagnosis->active = true;
      $diagnosis->icd_10_code = $request['code'];
      $diagnosis->name = $request['name'];

      $diagnosis->save();


      return response(200);


    }

}
