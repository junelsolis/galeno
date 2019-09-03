<?php

namespace Tests\Arrangements;

use Tests\TestCase;
use App\User;
use App\Role;


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

  public function withRole(String $role = null)
  {

    $this->user->roles()->sync($this->{$role});

    return $this->user;

  }


  public function role(String $role = null)
  {

    return $this->{$role};

  }



}






?>
