<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

<<<<<<< HEAD
use App\Brand;
=======
use App\Models\Brand;
>>>>>>> master
use Faker\Generator as Faker;

$factory->define(Brand::class, function (Faker $faker) {

    return [
        'name' => $faker->company,
    ];
});
