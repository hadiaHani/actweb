<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Order_Product::class, function (Faker $faker) {
    return [


        'id'=>$faker->randomNumber(4),
        'OrderID'=>$faker->randomNumber(4),
        'ProductCode'=>$faker->randomNumber(4),
        'Qty'=>$faker->randomNumber(2),
        'PriceEach'=>$faker->randomNumber(1)

    ];
});
