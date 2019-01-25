<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Patient;
use App\User;
use App\Diagnosis;
use App\Medication;


class Encounter extends Model
{
    public function patient() {
      return $this->hasOne('App\Patient','id','patient_id');
    }

    public function provider() {
      return $this->hasOne('App\User','id','provider_id');
    }

    public function medications() {
      return $this->hasMany('App\Medication');
    }

    public function diagnoses() {
      return $this->hasMany('App\Diagnosis');
    }

    public function vitals() {
      return $this->hasOne('App\Vitals','encounter_id');
    }

    public function sign() {
      $this->signed = true;
    }

    public function unsign() {
      $this->signed = false;
    }


}
