<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Encounter;

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

      $encounter->note = $request['note'];
      $encounter->save();

      return response(200);
    }

}
