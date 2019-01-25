<?php

namespace Tests\Models;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Vitals;
use Carbon\Carbon;

class VitalsTest extends TestCase
{
    use RefreshDatabase;


    protected $patient;
    protected $provider;
    protected $encounter;
    protected $vitals;


    public function setUp() {
      parent::setUp();

      $this->provider = factory('App\User')->create([
        'id' => 10,
        'name' => 'Thomas Jefferson',
      ]);
      $this->patient = factory('App\Patient')->create([
        'provider_id' => 10,
        'name' => 'Benjamin'
      ]);
      $this->encounter = factory('App\Encounter')->create([
        'id' => 33,
        'patient_id' => $this->patient->id,
        'provider_id' => 10,
      ]);

      $this->vitals = factory('App\Vitals')->create([
        'patient_id' => $this->patient->id,
        'provider_id' => $this->provider->id,
        'encounter_id' => $this->encounter->id,
        'date' => new Carbon('July 31, 2015'),
      ]);


    }


    /** @test */
    public function vitals_have_a_patient() {
      $this->assertTrue($this->vitals->patient->name == 'Benjamin');
    }



    /** @test */
    public function vitals_have_a_provider() {
      $this->assertTrue($this->vitals->provider->name == 'Thomas Jefferson');
    }




    /** @test */
    public function vitals_have_an_encounter() {
      $this->assertTrue($this->vitals->encounter->id == 33);
    }



    /** @test */
    public function vitals_have_a_date() {
      $this->assertTrue($this->vitals->date == new Carbon('July 31, 2015'));
    }



    /** @test */
    public function vitals_have_a_celsius_temperature() {
      $this->vitals->celsius_temperature = 36.8;
      $this->vitals->save();

      $this->assertTrue($this->vitals->celsius_temperature == 36.8);
    }


    /** @test */
    // public function vitals_have_a_fahrenheit_temperature() {
    //
    //   $this->vitals->celsius_temperature = 37.8;
    //   $this->vitals->save();
    //
    //   echo $this->vitals->fahrenheitTemperature();
    //   $this->assertTrue($this->vitals->fahrenheitTemperature() == 100.04);
    // }



    /** @test */
    public function vitals_have_a_pulse() {
      $this->vitals->pulse = 80;
      $this->vitals->save();

      $this->assertTrue($this->vitals->pulse == 80);
    }



    /** @test */
    public function vitals_have_respiratory_rate() {
      $this->vitals->respiratory_rate = 20;
      $this->vitals->save();

      $this->assertTrue($this->vitals->respiratory_rate == 20);
    }



    /** @test */
    public function vitals_have_a_systolic_pressure() {
      $this->vitals->systolic_pressure = 120;
      $this->vitals->save();

      $this->assertTrue($this->vitals->systolic_pressure == 120);
    }



    /** @test */
    public function vitals_have_a_diastolic_presssure() {

      $this->vitals->diastolic_pressure = 80;
      $this->vitals->save();

      $this->assertTrue($this->vitals->diastolic_pressure == 80);
    }



    /** @test */
    public function vitals_have_a_blood_pressure() {

      $this->vitals->systolic_pressure = 120;
      $this->vitals->diastolic_pressure = 80;
      $this->vitals->save();

      $this->assertTrue($this->vitals->bloodPressure() == '120/80');
    }




}
