<?php

use Faker\Generator as Faker;

$factory->define(App\SchoolFactory::class, function (Faker $faker) {
    return [
        'school_name' => $faker->school_name
    ];
});
