<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(App\models\Empresa::class, function (Faker $faker) {
    return [
        'title' =>$faker->title,
        'remenber_token' => str::random(10),
        
       

                
            

        
    ];
});
