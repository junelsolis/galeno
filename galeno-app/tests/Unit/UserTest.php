<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_user_has_roles()
    {
        $user = $this->nurse();

        $this->assertTrue($user->hasRole('nurse'));
    }

    /** @test */
    public function a_user_can_be_assigned_a_role()
    {
        $user = $this->user()->assignRoles('staff');

        $this->assertTrue($user->roles->count() == 1);

        $user->assignRoles('nurse');

        $user->refresh();

        $this->assertTrue($user->roles->count() == 2);
    }

    /** @test */
    public function a_user_can_have_multiple_roles()
    {
        $user = $this->user()->assignRoles(['admin', 'nurse']);

        $this->assertTrue($user->roles->count() == 2);
    }

    /** @test */
    public function a_user_can_set_a_password()
    {
        $user = $this->staff();

        $user->setPassword('someGreatPassword');

        $this->assertTrue(\Hash::check('someGreatPassword', $user->password));
    }

    /** @test */
    public function a_user_can_have_assigned_patients()
    {
        $user = $this->physician();

        $patients = factory('App\Patient', 3)->create();

        foreach ($patients as $patient) {
            $patient->assign($user);
        }

        $this->assertTrue($user->patients->count() == 3);
    }
}
