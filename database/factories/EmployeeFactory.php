<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Employee::class, function (Faker $faker) {
    return [
       'id'=>$faker->randomNumber(6),
       'OfficeCode'=>$faker->randomNumber(5),
       'reportsTo'=>$faker->randomDigit,
       'LastName'=>$faker->name,
       'FirstName'=>$faker->name,
       'Extension'=>$faker->word,
       'Email'=>$faker->email,
       'JobTitle'=>$faker->jobTitle
   ];

});
