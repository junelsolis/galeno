<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use App\User;
use App\Patient;
use App\Encounter;

class Vitals extends Model
{
  public function patient() {
    return $this->hasOne('App\Patient','id','patient_id');
  }

  public function provider() {
    return $this->hasOne('App\User','id','provider_id');
  }

  public function encounter() {
    return $this->hasOne('App\Encounter','id','encounter_id');
  }

  public function formattedDate() {}


  public function fahrenheitTemperature() {

    $celsius = $this->celsius_temperature;

    $fahrenheit = ($celsius * 9/5) + 32;

    return $fahrenheit;
  }


  public function bloodPressure() {
    $systolic = $this->systolic_pressure;
    $diastolic = $this->diastolic_pressure;

    return $systolic . '/' . $diastolic;
  }


}
