<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    $product = $faker->unique()->sentence;

    return [
        'sku' => $faker->numberBetween(1111111, 999999),
        'name' => $product,
        'description' => $faker->paragraph,
        'quantity' => $faker->randomDigitNotNull(1, 50),
        'active' => (bool)random_int(0,1),
        'brand_id' => function(){
            return Brand::all()->random();
        },

    ];
   
});
