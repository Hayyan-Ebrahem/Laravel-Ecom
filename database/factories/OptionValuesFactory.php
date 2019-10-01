<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

<<<<<<< HEAD:database/factories/OptionValuesFactory.php
use App\Option;
use App\OptionValue;
=======
use App\Models\Option;
use App\Models\OptionValue;
>>>>>>> master:database/factories/OptionValuesFactory.php
use Faker\Generator as Faker;

$factory->define(OptionValue::class, function (Faker $faker) {

    return [
        'value' => $faker->unique()->word,
        'option_id' => function(){
            return Option::all()->random();
        }
    ];
});
