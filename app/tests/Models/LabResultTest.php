<?php

namespace Tests\Models;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\LabResult;
use App\Patient;
use Carbon\Carbon;

class LabResultTest extends TestCase
{

  use RefreshDatabase;

  protected $patient;
  protected $labResult;

  public function setUp() {

    parent::setUp();

    $this->patient = factory('App\Patient')->create([
      'id' => 10
    ]);

    $this->labResult = factory('App\LabResult')->create([
      'patient_id' => 10,
      'origin' => 'Precision Diagnostics',
      'date' => new Carbon('July 15, 2018'),
      'contents' => 'Fasting blood sugar 120 mg/dL',
    ]);

  }

  /** @test */
  public function a_result_has_a_patient() {

    $this->assertTrue($this->labResult->patient->id == 10);
  }


  /** @test */
  public function a_result_has_a_date() {
    $this->assertTrue($this->labResult->date == new Carbon('July 15, 2018'));
  }


  /** @test */
  public function a_result_has_a_formatted_date() {
    $string = $this->labResult->formattedDate();

    $this->assertTrue($string == '07/15/2018');
  }


  /** @test */
  public function a_result_has_an_origin() {

    $this->assertTrue($this->labResult->origin == 'Precision Diagnostics');
  }



  /** @test */
  public function a_result_has_contents() {
    $this->assertTrue($this->labResult->contents == 'Fasting blood sugar 120 mg/dL');
  }
}
