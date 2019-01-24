<?php

use Faker\Generator as Faker;
use App\User;
use App\Patient;
use App\Encounter;

$factory->define(App\Vitals::class, function (Faker $faker) {
    return [
        'patient_id' => factory('App\Patient')->create()->id,
        'provider_id' => factory('App\Provider')->create()->id,
        'encounter_id' => factory('App\Encounter')->create()->id,
        'date' => $faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now', $timezone = null),
        'celsius_temperature' => rand(340,410) / 10,
        'pulse' => rand(60, 140),
        'respiratory_rate' => rand(12, 30),
        'systolic_pressure' => rand(90,180),
        'diastolic_pressure' => rand(60,100),
    ];
});
