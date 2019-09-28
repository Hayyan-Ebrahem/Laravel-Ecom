<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\models\Option;
use Faker\Generator as Faker;

$factory->define(Option::class, function (Faker $faker) {
    $name = $faker->unique()->randomElement([
        'Color',
        'Size',
        'Weight',
        'Material',
    ]);

    return [
        'name' => $name,
    ];
});
