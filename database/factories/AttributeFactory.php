<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Attribute;
use Faker\Generator as Faker;

$factory->define(Attribute::class, function (Faker $faker) {
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
