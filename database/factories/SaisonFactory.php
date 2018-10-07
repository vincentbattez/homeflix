<?php

use Faker\Generator as Faker;

$i = 0;

$factory->define(App\Saison::class, function (Faker $faker) {
    return [
        'n'        => $i,
        'id_serie' => App\Serie::all(['id'])->random(),
    ];

    $i++;
});
