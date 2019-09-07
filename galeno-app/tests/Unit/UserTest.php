<?php

namespace Tests\Unit;

use Facades\Tests\Arrangements\CreateUser;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_user_has_roles()
    {
        $user = CreateUser::withRoles('nurse');

        $this->assertTrue($user->hasRole('nurse'));
    }

    /** @test */
    public function a_user_can_be_assigned_a_role()
    {
        $user = CreateUser::create();

        $user->assignRole('staff');

        $this->assertTrue($user->roles->count() == 1);

        $user->assignRole('nurse');

        $user->refresh();

        $this->assertTrue($user->roles->count() == 2);
    }

    /** @test */
    public function a_user_can_have_multiple_roles()
    {
        $this->withoutExceptionHandling();
        $user = CreateUser::withRoles(['admin', 'nurse']);

        $this->assertTrue($user->roles->count() == 2);
    }

    /** @test */
    public function a_user_can_have_assigned_patients()
    {
        $user = CreateUser::withRoles('physician');

        $patients = factory('App\Patient', 3)->create();

        foreach ($patients as $patient) {
            $patient->assign($user);
        }

        $this->assertTrue($user->patients->count() == 3);
    }
}
