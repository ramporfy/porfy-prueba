<?php

use Faker\Generator as Faker;

$factory->define(App\Puerta::class, function (Faker $faker) {
    return [
        //
        //aqui se crea la estructura para crear datos falsos
        
        'name'=>$faker->sentence,
        'description'=>$faker->sentence,
    ];
});
