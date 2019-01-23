<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Diagnosis;
use App\User;
use App\Patient;
use App\Medication;

class MedicationTest extends TestCase
{
    use RefreshDatabase;


    protected $user;
    protected $diagnosis;
    protected $patient;
    protected $medication;


    public function setUp() {
      parent::setUp();


      $this->user = factory('App\User')->create([
        'id' => 22,
      ]);
      $this->patient = factory('App\Patient')->create([
        'id' => 33,
        'provider_id' => $this->user->id
      ]);
      $this->diagnosis = factory('App\Diagnosis')->create([
        'id' => 44,
        'patient_id' => $this->patient->id,
        'provider_id' => $this->user->id
      ]);

      $this->medication = factory('App\Medication')->create([
        'patient_id' => $this->patient->id,
        'provider_id' => $this->user->id,
        'diagnosis_id' => $this->diagnosis->id,
        'name' => 'lisinopril',
        'dosage' => '10 mg PO qd',
        'active' => true
      ]);

    }



    /** @test */
    public function a_medication_has_a_patient() {
      $patient = $this->medication->patient;

      $this->assertTrue($patient->id == 33);
    }



    /** @test */
    public function a_medication_has_a_provider() {

      $provider = $this->medication->provider;

      $this->assertTrue($provider->id == 22);
    }





    /** @test */
    public function a_medication_has_a_diagnosis() {
      $diagnosis = $this->medication->diagnosis;

      $this->assertTrue($diagnosis->id == 44);
    }




    /** @test */
    public function a_medication_has_a_name() {
      $this->assertTrue($this->medication->name == 'lisinopril');
    }



    /** @test */
    public function a_medication_has_a_dosage() {
      $this->assertTrue($this->medication->dosage == '10 mg PO qd');
    }



    /** @test */
    public function a_medication_has_a_status() {

      $this->medication->enable();
      $this->assertTrue($this->medication->isActive() == true);
    }



    /** @test */
    public function a_medication_can_be_disabled() {
      $this->medication->disable();

      $this->assertTrue($this->medication->isActive() == false);
    }




    /** @test */
    public function a_medication_can_be_enabled() {
      $this->medication->enable();

      $this->assertTrue($this->medication->isActive() == true);
    }





}
