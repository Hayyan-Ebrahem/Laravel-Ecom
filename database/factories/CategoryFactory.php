<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {

    $name = $faker->unique()->randomElement([
        'Gear',
        'Clothing',
        'Shoes',
        'Diapering',
        'Feeding',
        'Bath',
        'Toys',
        'Nursery',
        'Household',
        'Grocery'
    ]);
 
    return [
        'name' => $name,
        'slug' => Str::slug($name),
        'description' => $faker->paragraph,
        'status' => $faker->numberBetween(0,1)
    ];
});
