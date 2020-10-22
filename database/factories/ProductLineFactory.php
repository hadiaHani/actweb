<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\ProductLine::class, function (Faker $faker) {
    return array(

        'id'=>$faker->randomNumber(4),
        'DescInText'=>$faker->word,
        'DescInHTML'=>$faker->word,
        'image'=>$faker->word

    );
});
