<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Patient;
use App\Diagnosis;

class Medication extends Model
{


    public function patient() {
      return $this->hasOne('App\Patient','id','patient_id');
    }

    public function provider() {
      return $this->hasOne('App\User','id','provider_id');
    }

    public function diagnosis() {
      return $this->hasOne('App\Diagnosis','id','diagnosis_id');
    }

    public function isActive() {
      return $this->active;
    }

    public function disable() {
      $this->active = false;
    }

    public function enable() {
      $this->active = true;
    }

    protected $fillable = ['patient_id','provider_id','diagnosis_id'];
}
