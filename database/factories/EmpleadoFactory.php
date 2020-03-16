<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\models\Empleado;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\models\Empresa;

$factory->define(Empleado::class, function (Faker $faker) {
    return [
        'name' =>$faker->name,
        'email' =>$faker->unique()->safeEmail,
        'password' => Hash::make('password'),
        'empresa_id' =>Empresa::all()->random()->id
        

    ];
});
