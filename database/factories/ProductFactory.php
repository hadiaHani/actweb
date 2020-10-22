<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Product::class, function (Faker $faker) {
    return [

        'code'=>$faker->randomNumber(4),
        'Name'=>$faker->word,
        'Scale'=>$faker->randomDigit,
        'vendor'=>$faker->name,
        'PdtDescription'=>$faker->sentence,
        'QtyInStock'=>$faker->randomDigit,
        'BuyPrice'=>$faker->randomDigit,
        'MSRP'=>$faker->word
    ];
});
