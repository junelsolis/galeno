<?php

use Faker\Generator as Faker;
use App\Patient;
use Carbon\Carbon;

$factory->define(App\LabResult::class, function (Faker $faker) {
    return [
        'patient_id' => factory('App\Patient')->create()->id,
        'date' => Carbon::now(),
        'origin' => $faker->company,
        'contents' => $faker->text,
    ];
});
