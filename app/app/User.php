<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use DB;

class User extends Authenticatable
{
    use Notifiable;

    public function roles() {
      $roles = DB::table('user_roles')->where('user_id', $this->id)->get();

      return $roles->pluck('role');
    }

    public function disable() {
      $this->active = false;
    }

    public function enable() {
      $this->active = true;
    }

    public function isActive() {
      return $this->active;
    }

    public function getFormattedNameAttribute() {

      $array = array();


      // initials
      $names = explode(" ",$this->name);

      $string = '';
      foreach ($names as $i) {
        $string = $string . $i[0];

        $array['firstname'] = $names[0];
        $array['lastname'] = $names[1];
      }


      $array['initials'] = $string;


      return $array;

    }

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

}
