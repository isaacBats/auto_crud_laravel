<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Media::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'type' => 'image',
        'source' => $faker->randomElement($array = array('1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg', '6.jpg', '7.jpg', '8.jpg', '9.jpg', '10.jpg', '11.jpg', '12.jpg', '13.jpg', '1.png', '2.png', '3.png', '4.png'))
    ];
});

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->Name,
        'username' => $faker->userName,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'about' => $faker->text,
        'avatar_id' => $faker->numberBetween($min = 1, $max = 40),
        'address1' => $faker->streetName,
        'city' => $faker->city,
        'postal_code' => $faker->postcode,
        'country' => $faker->country,
        'state' => $faker->state,
        'gender' => $faker->randomElement($array = array('male', 'female', 'other')),
        'verification_code' => str_random(18),
        'email_verified' => 1,
        'remember_token' => str_random(10)
    ];
});
