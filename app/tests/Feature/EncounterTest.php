<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\User;
use App\Patient;
use App\Medication;
use App\Diagnosis;
use App\Encounter;

class EncounterTest extends TestCase
{
    use RefreshDatabase;

    protected $provider;
    protected $patient;
    protected $medication;
    protected $diagnosis;
    protected $encounter;

    public function setUp() {
      parent::setUp();

      $this->patient = factory('App\Patient')->create(['id' => 22]);
      $this->provider = factory('App\User')->create(['id' => 33]);
      $this->encounter = factory('App\Encounter')->create([
        'id' => 66,
        'patient_id' => $this->patient->id,
        'provider_id' => $this->provider->id,
      ]);
      $this->diagnosis = factory('App\Diagnosis')->create([
        'patient_id' => $this->patient->id,
        'provider_id' => $this->provider->id,
        'encounter_id' => 66,
      ]);
      $this->medication = factory('App\Medication')->create([
        'id' => 44,
        'encounter_id' => 66
      ]);

      factory('App\Medication',7)->create([
        'encounter_id' => 66
      ]);



    }


    /** @test */
    public function an_encounter_has_a_patient() {

      $this->assertTrue($this->encounter->patient->id == 22);

    }



    /** @test */
    public function an_encounter_has_a_provider() {

      $this->assertTrue($this->encounter->provider->id == 33);
    }


    /** @test */
    public function an_encounter_has_medications() {

      $this->assertTrue($this->encounter->medications->count() == 8);
    }



    /** @test */
    public function an_encounter_has_diagnoses() {
      $this->assertTrue($this->encounter->diagnoses->count() == 1);
    }



    /** @test */
    public function an_encounter_has_vital_signs() {
      $this->assertTrue($this->encounter->vitals->count() == 1);
    }



    /** @test */
    public function an_encounter_has_lab_results() {}



    /** @test */
    public function an_encounter_has_imaging_resuls() {}



    /** @test */
    public function an_encounter_can_be_signed() {

      $this->encounter->signed = false;
      $this->encounter->save();

      $this->encounter->sign();
      $this->encounter->fresh();
      $this->assertTrue($this->encounter->signed == true);
    }



    /** @test */
    public function an_encounter_can_be_unsigned() {

      $this->encounter->signed = true;
      $this->encounter->save();

      $this->encounter->unsign();
      $this->encounter->fresh();

      $this->assertTrue($this->encounter->signed == false);

    }
}
