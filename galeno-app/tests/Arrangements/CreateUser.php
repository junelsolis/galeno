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

    $this->user = factory('App\User')->create(['active' => 1]);

    if (Role::where('name', 'physician')->count() == 0) {
      Role::create(['name' => 'physician']);
    }

    if (Role::where('name', 'nurse')->count() == 0) {
      Role::create(['name' => 'nurse']);
    }

    if (Role::where('name', 'staff')->count() == 0) {
      Role::create(['name' => 'staff']);
    }

    if (Role::where('name', 'admin')->count() == 0) {
      Role::create(['name' => 'admin']);
    }


    return $this;

  }

  public function withRoles($roles = null)
  {

    if (is_string($roles)) {

      $this->user->assignRole($roles);

    }

    if (is_array($roles)) {

      foreach ($roles as $role) {

        $this->user->assignRole($role);

      }
    }

    if (empty($roles)) {

      // $roles = ['physician', 'nurse', 'staff', 'admin'];
      //
      // $role = $roles[array_rand($roles)];
      //
      // $this->user->roles->attach($this->{$role}->id);

    }



    return $this->user;

  }


  public function withPassword(String $password)
  {
    $this->user->password = Hash::make($password);
    $this->user->save();




    return $this;
  }


  public function create()
  {

      return $this->user;

  }




  // public function role(String $role = null)
  // {
  //
  //   return $this->{$role};
  //
  // }



}






?>
