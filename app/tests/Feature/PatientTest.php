<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Patient;
use App\Users;
use Carbon\Carbon;

class PatientTest extends TestCase
{

  use RefreshDatabase;

  protected $patient;
  public function setUp() {
    parent::setUp();

    $this->patient = factory('App\Patient')->create([
      'id' => 10,
      'title' => 'Mr.',
      'name' => 'Alan',
      'middle_initial' => 'J',
      'surname' => 'Turing',
      'suffix' => 'Jr.',
      'provider_id' => factory('App\User')->create(['name' => 'James Bond'])->id,
      'date_of_birth' => new Carbon('July 23, 1995')
    ]);
  }

  /** @test */
  public function a_patient_has_a_provider() {

    $this->assertTrue($this->patient->provider()->name == 'James Bond');
  }

  /** @test */
  public function a_patient_has_a_formatted_date_of_birth() {

    $date = $this->patient['formattedDateOfBirth'];

    $this->assertTrue($date == '07/23/1995');
  }

  /** @test */
  public function a_patient_has_a_full_name() {

    $fullname = $this->patient['formattedName']['fullname'];


    $this->assertTrue($fullname == 'Mr. Alan J. Turing Jr.');
  }

  /** @test */
  public function a_patient_has_initials() {
    $initials = $this->patient['formattedName']['initials'];

    $this->assertTrue($initials == 'AJT');
  }

}
