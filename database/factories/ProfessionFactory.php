<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Profession;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Profession::class, function (Faker $faker) {
    return [
        'title' =>Profession::all()->random()->id,
        'remenber_token' => str::random(10),
    ];
});
