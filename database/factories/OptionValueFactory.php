<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\OptionValue;
use Faker\Generator as Faker;

$factory->define(OptionValue::class, function (Faker $faker) {

    $value = $faker->unique()->randomElement([
        'Color',
        'Size',
        'Weight',
        'Material',
    ]);

    return [
        'value' => $value,
        'option_id' => function(){
            return Option::all()->random();
        }
    ];
});
