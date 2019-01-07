<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UserTest extends TestCase
{

  use RefreshDatabase;

  private $user;

  public function setUp() {
    parent::setUp();

    $this->user = factory('App\User')->create([
      'id' => 33
    ]);
  }

  /** @test */
  public function a_user_has_roles() {

    DB::table('user_roles')->insert([
      'user_id' => '33',
      'role' => 'physician'
    ]);

    $this->assertTrue(count($this->user->roles()) == 1);

    DB::table('user_roles')->insert([
      'user_id' => '33',
      'role' => 'clinician'
    ]);

    $this->assertTrue(count($this->user->roles()) == 2);

  }

  /** @test */
  public function a_user_can_be_disabled() {}

}
