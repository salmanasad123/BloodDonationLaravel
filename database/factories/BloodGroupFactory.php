<?php

use Faker\Generator as Faker;

$factory->define(App\BloodGroup::class, function (Faker $faker) {
    return [
        'bloodtype'=>$faker->randomElement($array = array ('A+','A-','B+','B-','O+','O-'))
    ];
});
