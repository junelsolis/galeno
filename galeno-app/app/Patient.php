<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
      'name', 'gender', 'date_of_birth', 'occupation', 'phone',
      'email', 'address', 'city', 'guardian_name', 'guardian_phone',
      'nhif_number', 'nhif_owner', 'profile_image_url',
    ];

    protected $appends = ['age', 'profile_image_path'];

    public function physicians()
    {
        return $this->belongsToMany('App\User');
    }

    public function assign(User $user)
    {
        $this->physicians()->attach($user->id);
    }

    public function age()
    {
        // return $this->dob->diff(now())->format('%y Y');
        return now()->diffInYears($this->dob) . ' Y';
    }

    public function profileImagePath()
    {
        return 'https://www.gravatar.com/avatar/' .md5($this->email). '?d=mp';
    }

    public function getAgeAttribute()
    {
        return $this->age();
    }

    public function getProfileImagePathAttribute()
    {
        return $this->profileImagepath();
    }
}
