<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Patient;
use App\User;
use App\Visit;

class UserViewControllerTest extends TestCase
{
    use RefreshDatabase;


    /** @test */
    public function a_user_should_see_all_patients_in_the_dashboard()
    {
      $nurse = $this->nurse();
      $patients = factory('App\Patients',5);

      $this->actingAs($nurse)->get('/app')
              ->assertViewIs('user.main')
              ->assertViewHas('patients');

    }

    /** @test */
    public function a_nurse_and_staff_should_see_all_visits_in_the_dashboard()
    {
      $nurse = $this->nurse();
      $staff = $this->staff();

      $visits = factory('App\Visit', 15)->create();

      $this->actingAs($nurse)->get('/app')
            ->assertViewIs('user.main')
            ->assertViewHas('visits');
    }

}
