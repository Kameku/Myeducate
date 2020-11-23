<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Enquiry;
use Faker\Generator as Faker;

$factory->define(Enquiry::class, function (Faker $faker) {
    return [
        'first_name' => $this->faker->firstname,
        'last_name' => $this->faker->lastname,
        'home_phone' => $this->faker->phoneNumber,
        'adress' => $this->faker->address,
        'suburb' => $this->faker->citySuffix,
        'post_code' => $this->faker->postcode,
        'date_of_birth' => $this->faker->date($format = "Y-m-d"),
        'language_home' => $this->faker->country,
        'parent_name' => $this->faker->name,
        'parent_mobile' => $this->faker->phoneNumber,
        'parent_email' => $this->faker->email,
        'parent_adress' => $this->faker->address,
        'status' => $this->faker->randomElement(['active','disable']),

    ];
});
