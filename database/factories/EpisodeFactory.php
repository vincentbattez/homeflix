<?php

use Faker\Generator as Faker;

$i = 0;

$factory->define(App\Episode::class, function (Faker $faker) {
    return [
        'n'       => $i,
        'current' => rand(0,1),
        'id_saison' => App\Saison::all(['id'])->random()
    ];

    $i++;
});
