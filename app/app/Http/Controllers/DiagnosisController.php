<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Diagnosis;


class DiagnosisController extends Controller
{
    public function disable(Request $request) {

      // retrieve diagnosis object
      $diagnosis = Diagnosis::find($request['id']);

      $diagnosis->deactivate();

      return response(200);

    }

    public function delete(Request $request) {

      // retrieve diagnosis object
      $diagnosis = Diagnosis::find($request['id']);

      $diagnosis->delete();

      return response(200);
    }
}
