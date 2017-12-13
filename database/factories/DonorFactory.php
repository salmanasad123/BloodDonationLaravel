<?php

use Faker\Generator as Faker;
use App\Donor;

$factory->define(App\Donor::class, function (Faker $faker) {
    return [

        'blood_group_id'=> random_int(1,10),
        'first_name'=>$faker->name,
        'last_name'=>$faker->name,
        'phone_number'=>$faker->randomDigit,
        'age'=>$faker->numberBetween($min = 18, $max = 40),
        'email'=>$faker->email,
        'blood_group'=>$faker->randomElement($array = array ('A+','A-','B+','B-','O+','O-'))

    ];
});
