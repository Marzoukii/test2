<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Administrateurs;
use Faker\Generator as Faker;

$factory->define(Administrateurs::class, function (Faker $faker) {
    return [
        'login'=> $faker->userName,
        'password'=> $faker->password,
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
