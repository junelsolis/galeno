<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Visit extends Model
{
    public function patient()
    {
      return $this->belongsTo('App\Patient');
    }

    public function creator()
    {
      return $this->belongsTo('App\User', 'creator_id');
    }

    public function attending()
    {
      return $this->belongsTo('App\User', 'attending_id');
    }

    public function signatory()
    {
      return $this->belongsTo('App\User', 'signatory_id');
    }

    public function isOpen()
    {
      return $this->signed;
    }

    public function signedBy(User $user)
    {
      $this->signatory_id = $user->id;
      $this->signed = true;
      $this->save();

      return $this;
    }


}
