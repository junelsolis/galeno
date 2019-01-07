<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Patient;


class Diagnosis extends Model
{

    public function patient() {
      return $this->belongsTo('App\Patient', 'patient_id');
    }

    public function provider() {
      return $this->belongsTo('App\User', 'provider_id');
    }

    public function activate() {
      $this->active = true;
    }

    public function deactivate() {
      $this->active = false;
    }

    protected $table = 'diagnoses';
}
