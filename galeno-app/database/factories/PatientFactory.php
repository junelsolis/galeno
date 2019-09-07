<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Patient;
use Faker\Generator as Faker;

$factory->define(Patient::class, function (Faker $faker) {
    $gender = ['M', 'F'];

    return [
        'name'              => $faker->firstName.' '.$faker->lastName,
        'gender'            => $gender[array_rand($gender)],
        'dob'               => now()->subYears(rand(18, 70)),
        'occupation'        => $faker->word,
        'phone'             => $faker->phoneNumber,
        'email'             => $faker->safeEmail,
        'address'           => $faker->streetAddress,
        'city'              => $faker->city,
        'guardian_name'     => $faker->name,
        'guardian_phone'    => $faker->phoneNumber,
        'nhif_number'       => strtoupper(Str::random(10)),
        'nhif_owner'        => $faker->name,
        'profile_image_url' => $faker->imageUrl,

    ];
});
