<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Facades\Tests\Arrangements\CreateUser;


class UserTest extends TestCase
{

    use RefreshDatabase;


    /** @test */
    public function a_user_has_roles() {

      $user = CreateUser::withRole('nurse');


      $user->roles()->sync(CreateUser::role('nurse')->id);


      $this->assertTrue($user->roles->first()->name == 'nurse');

    }


    /** @test */
    public function a_user_can_have_multiple_roles() {


      $user = CreateUser::withRole('admin');

      $user->roles()->attach(CreateUser::role('nurse')->id);

      $this->assertTrue($user->roles->count() == 2);

    }


    /** @test */
    public function a_user_can_have_assigned_patients() {


      $user = CreateUser::withRole('physician');

      $patients = factory('App\Patient', 3)->create();

      foreach ($patients as $patient) {
        $patient->assign($user);
      }

      $this->assertTrue($user->patients->count() == 3);

    }
}
