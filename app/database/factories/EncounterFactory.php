<?php

use Faker\Generator as Faker;
use App\Patient;
use App\User;


$factory->define(App\Encounter::class, function (Faker $faker) {
    return [
      'patient_id' => factory('App\Patient')->create()->id,
      'provider_id' => factory('App\User')->create()->id,
      'date' => $faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now', $timezone = null)
    ];
});
