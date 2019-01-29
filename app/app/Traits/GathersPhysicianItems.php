<?php

namespace App\Traits;

use App\Patient;
use App\Encounter;
use App\LabResult;
use Auth;
use Carbon\Carbon;

trait GathersPhysicianItems {


  protected $doctor;

  protected function patientsToday() {
    $this->doctor = Auth::user();

    $patientIds = Patient::where('provider_id', $this->doctor->id)->pluck('id')->toArray();
    $encounters = Encounter::whereIn('patient_id', $patientIds)->orderBy('date')->get()->load('patient');

    foreach ($encounters as $key => $i) {
      $date = new Carbon($i->date);

      if ($date->isSameDay(Carbon::now())) {}
      else {
        $encounters->forget($key);
      }
    }

    return $encounters;

  }
}


?>
