<?php

namespace Tests\Models;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Patient;
use App\Users;
use Carbon\Carbon;
use App\Encounter;
use App\Diagnsosis;
use App\Vitals;
use App\Medication;

class PatientTest extends TestCase
{

  use RefreshDatabase;
  use WithFaker;

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
      'gender' => 'M',
      'provider_id' => factory('App\User')->create(['name' => 'James Bond'])->id,
      'date_of_birth' => $this->faker->dateTimeBetween($startDate = '-35 years', $endDate = '-35 years', $timezone = null)
    ]);
  }

  /** @test */
  public function a_patient_has_a_provider() {

    $this->assertTrue($this->patient->provider()->name == 'James Bond');
  }

  /** @test */
  public function a_patient_has_a_formatted_date_of_birth() {

    $patient = factory('App\Patient')->create([
      'date_of_birth' => new Carbon('July 23, 1995')
    ]);
    
    $date = $patient['formattedDateOfBirth'];

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


  /** @test */
  public function a_patient_has_details() {

    $this->assertTrue($this->patient->details() == 'M 35 y');
  }


  /** @test */
  public function a_patient_has_encounters() {

    factory('App\Encounter',3)->create([
      'patient_id' => 10
    ]);


    $this->assertTrue($this->patient->encounters->count() == 3);
  }


  /** @test */
  public function a_patient_has_diagnoses() {

    factory('App\Diagnosis',5)->create([
      'patient_id' => 10
    ]);

    $this->assertTrue($this->patient->diagnoses->count() == 5);
  }



  /** @test */
  public function a_patient_has_vitals() {

    factory('App\Vitals',7)->create([
      'patient_id' => 10
    ]);

    $this->assertTrue($this->patient->vitals->count() == 7);
  }



  /** @test */
  public function a_patient_has_medications() {

    factory('App\Medication',10)->create([
      'patient_id' => 10
    ]);

    $this->assertTrue($this->patient->medications->count() == 10);

  }

}
