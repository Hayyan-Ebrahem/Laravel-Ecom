<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Option;
use Faker\Generator as Faker;

$factory->define(Option::class, function (Faker $faker) {
    $name = $faker->unique()->randomElement([
        'Color',
        'Size',
        'Weight',
        'Material',
    ]);

    return [
        'value' => $name,
    ];
});
