<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Patient;
use App\Encounter;

class Diagnosis extends Model
{

    public function patient() {
      return $this->belongsTo('App\Patient', 'patient_id');
    }

    public function provider() {
      return $this->belongsTo('App\User', 'provider_id');
    }

    public function encounter() {
      return $this->belongsTo('App\Encounter','encounter_id');
    }

    public function activate() {
      $this->active = true;
    }

    public function deactivate() {
      $this->active = false;
    }

    public function isActive() {
      return $this->active;
    }

    protected $table = 'diagnoses';

    protected $fillable = [
      'encounter_id',
      'patient_id',
      'provider_id',
      'active',
      'name',
      'icd_10_code'
    ];
}
