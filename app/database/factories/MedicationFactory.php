<?php

use Faker\Generator as Faker;
use App\User;
use App\Patient;
use App\Diagnosis;

$factory->define(App\Medication::class, function (Faker $faker) {

    $meds = [
      'Vicodin',
      'Synthroid',
      'Levoxyl',
      'Amoxil',
      'Glucophage',
      'Zestril',
      'Neurontin',
      'Delason',
      'Lipitor',
      'Norvasc',
      'Zithromax',
      'hydrochlorothiazide',
      'Nexium',
      'Singulair',
      'Crestol',
    ];

    return [
        'patient_id' => factory('App\Patient')->create()->id,
        'provider_id' => factory('App\User')->create()->id,
        'diagnosis_id' => factory('App\Diagnosis')->create()->id,
        'name' => $meds[array_rand($meds)],
        'active' => true
    ];
});
