<?php

use Faker\Generator as Faker;
use App\Patient;
use App\User;


$factory->define(App\Encounter::class, function (Faker $faker) {

    $chief_complaints = [
      'Chest pain',
      'Shortness of breath',
      'Abdominal pain',
      'Back pain',
      'Flank pain',
      'Headache',
      'Joint pain',
      'Coughing',
      'Runny nose',
      'Sore throat',
      'Diarrhea',
      'Constipation',
      'Painful urination',
      'Fatigue',
      'Headaches',
      'Ear pain'
    ];

    return [
      'patient_id' => factory('App\Patient')->create()->id,
      'provider_id' => factory('App\User')->create()->id,
      'date' => $faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now', $timezone = null),
      'chief_complaint' => $chief_complaints[array_rand($chief_complaints)],
      'reminder' => $faker->sentence($nbWords = 6, $variableNbWords = true),
    ];
});
