<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Customer::class, function (Faker $faker) {
    return [
        'id'=>$faker->randomNumber(6),
        'salesRepEmployeeNum'=>$faker->randomNumber(2),
        'Name'=>$faker->name,
        'FirstName'=>$faker->name,
        'LastName'=>$faker->name,
        'City'=>$faker->city,
        'Phone'=>$faker->phoneNumber,
        'Address1'=>$faker->address,
        'Address2'=>$faker->address,
        'Country'=>$faker->country,
        'PostalCode'=>$faker->randomNumber(8),
        'CreditLimit'=>$faker->creditCardNumber

    ];

});
