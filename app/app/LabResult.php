<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Patient;
use Carbon\Carbon;

class LabResult extends Model
{
    public function patient() {
      return $this->belongsTo('App\Patient','patient_id');
    }

    public function formattedDate() {
      $date = $this->date;

      $formatted = new Carbon();
      $formatted = $date->format('m/d/Y');
      return $formatted;
    }


    protected $table = 'lab_results';
}
