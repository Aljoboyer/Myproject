<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'name' => $faker->name('male'|'female'),
        'email' =>$faker->email,
        'birth_date' =>$faker->date($format = 'Y-m-d', $max = 'now'),
        'city'=>$faker->city  
    ];
});
