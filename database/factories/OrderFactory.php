<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Order::class, function (Faker $faker) {
    return [
        'id'=>$faker->randomNumber(4),
        'CustomerID'=>$faker->randomNumber(8),
        'OrderData'=>$faker->dateTime,
        'RequiredDate'=>$faker->dateTime,
        'ShippedDate'=>$faker->dateTime,
        'Status'=>$faker->randomNumber(1),
        'Comments'=>$faker->sentence

    ];
});
