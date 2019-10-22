<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Category;
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
        'Grocery',
        'Gear1',
        'Clothing1',
        'Shoes1',
        'Diapering1',
        'Feeding1',
        'Bath1',
        'Toys1',
        'Nursery1',
        'Household1',
        'Grocery1'
    ]);
 
    return [
        'name' => $name,
        'slug' => Str::slug($name),
        'description' => $faker->paragraph,
        'status' => $faker->numberBetween(0,1),
        'parent_id' => $faker->numberBetween(0,20)
    ];
});
