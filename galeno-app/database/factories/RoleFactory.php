<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Role;
use Faker\Generator as Faker;

$factory->define(Role::class, function (Faker $faker) {

    $array = ['physician','nurse','staff','admin'];

    return [
        'name' => $array[array_rand($array)]
    ];
});
