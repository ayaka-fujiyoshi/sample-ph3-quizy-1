<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\BigQuestion;

$factory->define(BigQuestion::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
