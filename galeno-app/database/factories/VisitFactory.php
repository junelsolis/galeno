<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Visit;
use Faker\Generator as Faker;

$factory->define(Visit::class, function (Faker $faker) {
    $patient = factory('App\Patient')->create();
    $nurse = factory('App\User')->create()->assignRoles('nurse');
    $physician = factory('App\User')->create()->assignRoles('physician');

    return [
        'patient_id'   => $patient->id,
        'creator_id'   => $nurse->id,
        'attending_id' => $physician->id,
        'cc'           => $faker->sentence(7),
        'pmh'          => $faker->paragraph(7),
        'diagnosis'    => $faker->sentence(3),
        'treatment'    => $faker->sentence(5),
        'notes'        => $faker->paragraph(3),
    ];
});
