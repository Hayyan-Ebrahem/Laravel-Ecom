<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\models\Option;
use App\models\OptionValue;
use Faker\Generator as Faker;

$factory->define(OptionValue::class, function (Faker $faker) {

    return [
        'value' => $faker->unique()->word,
        'option_id' => function(){
            return Option::all()->random();
        }
    ];
});
