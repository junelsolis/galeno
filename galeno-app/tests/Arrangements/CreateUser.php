<?php

namespace Tests\Arrangements;

use Tests\TestCase;
use App\User;
use App\Role;
use Hash;


class CreateUser
{

  public $user = null;
  public $physician = null;
  public $nurse = null;
  public $staff = null;
  public $admin = null;


  public function __construct()
  {

    $this->user = factory('App\User')->create();

    $this->physician = Role::updateOrCreate(['name' => 'physician']);
    $this->nurse = Role::updateOrCreate(['name' => 'nurse']);
    $this->staff = Role::updateOrCreate(['name' => 'staff']);
    $this->admin = Role::updateOrCreate(['name' => 'admin']);

    return $this;

  }

  public function withRoles($roles = null)
  {

    if (is_string($roles)) {

      $this->user->roles()->attach($this->{$roles}->id);

    }

    if (is_array($roles)) {

      foreach ($roles as $role) {
        $this->user->roles()->attach($this->{$role}->id);

      }
    }

    if (empty($roles)) {

      $roles = ['physician', 'nurse', 'staff', 'admin'];

      $role = $roles[array_rand($roles)];

      $this->user->roles()->attach($this->{$role}->id);

    }



    return $this->user;

  }


  public function withPassword(String $password)
  {
    $this->user->password = Hash::make($password);
    $this->user->save();




    return $this;
  }




  public function role(String $role = null)
  {

    return $this->{$role};

  }



}






?>
