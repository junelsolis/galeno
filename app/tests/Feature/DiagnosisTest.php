<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\User;
use App\Patient;
use App\Diagnosis;

class DiagnosisTest extends TestCase
{

  use RefreshDatabase;

  protected $diagnosis;

  public function setUp() {
    parent::setUp();

    $this->diagnosis = factory('App\Diagnosis')->create([
      'patient_id' => factory('App\Patient')->create()->id,
      'provider_id' => factory('App\User')->create()->id,
    ]);


  }

  /** @test */
  public function a_diagnosis_belongs_to_a_patient() {

    $this->assertTrue($this->diagnosis->patient()->count() == 1);
  }

  /** @test */
  public function a_diagnosis_has_one_provider() {

    $this->assertTrue($this->diagnosis->provider()->count() == 1);
  }


  /** @test */
  public function a_diagnosis_can_be_activated() {
    $this->diagnosis->activate();

    $this->assertTrue($this->diagnosis->active == true);
  }

  /** @test */
  public function a_diagnosis_can_be_deactivated() {

    $this->diagnosis->deactivate();

    $this->assertTrue($this->diagnosis->active == false);
  }

  /** @test */
  public function a_diagnosis_has_a_status() {

    $this->diagnosis->activate();

    $this->assertTrue($this->diagnosis->isActive() == true);
  }

}
