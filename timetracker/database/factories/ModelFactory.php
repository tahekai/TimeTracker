<?php

use Carbon\Carbon;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Alldata::class, function ($faker) {
    return [
        'chipcode' => $faker->ean8,
        'startingnumber' => $faker->numberBetween($min = 1, $max = 1000),
        'fullname' => $faker->name,
        'corridore_time' => Carbon::now('Europe/Tallinn'),
        //'finish_time' => Carbon::now('Europe/Tallinn')->addSeconds($faker->numberBetween($min = 1, $max = 15)),
        
    ];
});
