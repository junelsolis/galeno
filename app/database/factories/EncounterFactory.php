<?php

use Faker\Generator as Faker;
use App\Patient;
use App\User;


$factory->define(App\Encounter::class, function (Faker $faker) {

    $chief_complaints = [
      'chest pain',
      'shortness of breath',
      'abdominal pain',
      'back pain',
      'flank pain',
      'headache',
      'joint pain',
      'coughing',
      'runny nose',
      'sore throat',
      'diarrhea',
      'constipation',
      'painful urination',
      'fatigue',
      'headaches',
      'ear pain'
    ];

    return [
      'patient_id' => factory('App\Patient')->create()->id,
      'provider_id' => factory('App\User')->create()->id,
      'date' => $faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now', $timezone = null),
      'chief_complaint' => $chief_complaints[array_rand($chief_complaints)],
      'reminder' => $faker->sentence($nbWords = 6, $variableNbWords = true),
    ];
});
