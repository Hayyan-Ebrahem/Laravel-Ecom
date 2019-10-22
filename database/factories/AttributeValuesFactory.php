<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Attribute;
use App\Models\AttributeValue;
use Faker\Generator as Faker;

$factory->define(AttributeValue::class, function (Faker $faker) {

    return [
        'value' => $faker->unique()->word,
        'Attribute_id' => function(){
            return Attribute::all()->random();
        }
    ];
});
