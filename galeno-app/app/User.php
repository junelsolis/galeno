<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'phone', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * [roles description].
     *
     * @return [type] [description]
     */
    public function roles()
    {
        return $this->belongsToMany('App\Role');
    }

    public function assignRole($name)
    {
        $role = Role::where('name', $name)->first();

        $this->roles()->syncWithoutDetaching($role->id);

        return $this;
    }

    public function hasRole($name)
    {
        $roles = $this->roles;

        foreach ($roles as $role) {
            if ($role->name == $name) {
                return true;
            } else {
                return false;
            }
        }
    }

    public function patients()
    {
        return $this->belongsToMany('App\Patient');
    }

    // public function sendPasswordResetNotification($token)
    // {
    //     $this->notify(new ResetPasswordNotification($token));
    // }
}
