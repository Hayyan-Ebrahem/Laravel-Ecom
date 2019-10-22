<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Models\CategoryProduct;
use App\Models\Category;
use App\Models\Product;

$factory->define(CategoryProduct::class, function (Faker $faker) {
    return [
        'product_id' => function(){
            return Product::all()->random();
        },
        'category_id' => function(){
            return Category::all()->random();
        },

    ];
});
