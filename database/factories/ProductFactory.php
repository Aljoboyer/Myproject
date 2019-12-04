<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Product::class, function (Faker $faker) {
	 $categories = App\Category::pluck('id')->toArray();
    return [
        
    	'name' => Str::random(10),
    	'price' => $faker->numberBetween($min = 5000, $max = 10000),
    	'category_id' => $faker->randomElement($categories)
    ];
});
