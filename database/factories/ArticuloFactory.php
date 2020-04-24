<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Articulo;
use Faker\Generator as Faker;

$factory->define(Articulo::class, function (Faker $faker) {
    return [
    	'titulo' => $faker->sentence($nbWords = 6, $variableNbWords = true),
    	'cuerpo' => $faker->text($maxNbChars = 200)
        //
    ];
});
