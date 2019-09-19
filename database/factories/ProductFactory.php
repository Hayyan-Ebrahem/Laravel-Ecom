<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Brand;
use App\Category;
use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    $product = $faker->unique()->sentence;

    return [
        'sku' => $faker->numberBetween(1111111, 999999),
        'name' => $product,
        'description' => $faker->paragraph,
        'quantity' => $faker->randomDigitNotNull(1, 50),
        'price' => $faker->randomDigitNotNull(1.00, 500.00),
        'status' => $faker->numberBetween(0,1),
        'category_id' => function(){
            return Category::all()->random();
        },

        'brand_id' => function(){
            return Brand::all()->random();
        }
    ];
   
});
