<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PatientTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_patient_has_an_age()
    {
        $patient = factory('App\Patient')->create([
        'dob' => now()->subYears(35),
      ]);

        $this->assertTrue($patient['age'] == 35);
    }

    /** @test */
    public function a_patient_can_be_assigned_to_a_user()
    {
        $user = $this->physician();

        $patient = factory('App\Patient')->create();
        $patient->assign($user);
        $patient->refresh();

        $this->assertTrue($patient->physicians()->first()->name == $user->name);
    }
}
