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

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
