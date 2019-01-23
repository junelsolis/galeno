<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use DB;

class UserTest extends TestCase
{

  use RefreshDatabase;

  private $user;

  public function setUp() {
    parent::setUp();

    $this->user = factory('App\User')->create([
      'id' => 33,
      'password' => 'This is a password.',
    ]);
  }

  /** @test */
  public function a_user_has_roles() {

    DB::table('user_roles')->insert([
      'user_id' => '33',
      'role' => 'physician'
    ]);

    $this->assertTrue($this->user->roles()->count() == 1);

    DB::table('user_roles')->insert([
      'user_id' => '33',
      'role' => 'clinician'
    ]);

    $this->assertTrue($this->user->roles()->count() == 2);

  }

  /** @test */
  public function a_user_can_be_disabled() {

    $this->user->disable();

    $this->assertTrue($this->user->active == false);
  }

  /** @test */
  public function a_user_can_be_enabled() {

    $this->user->enable();

    $this->assertTrue($this->user->active == true);
  }


  /** @test */
  public function a_user_has_a_status() {

    $this->user->enable();
    $this->assertTrue($this->user->isActive() == true);
  }



}
