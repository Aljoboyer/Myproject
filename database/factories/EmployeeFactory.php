<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
         'name' => $faker->name('male'|'female'),
        'email' =>$faker->email,
        'address' =>$faker->address,
        'birth_date' =>$faker->date($format = 'Y-m-d', $max = 'now'),
        'city'=>$faker->city,
        'salary'=>$faker->numberBetween($min = 1000, $max = 3000),
        'credit_card_no'=>$faker->creditCardNumber 
    ];
});
