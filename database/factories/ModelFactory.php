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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Member::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'first_name' => $faker->name,
        'last_name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'profile_image' => 'noimg.png',
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Group::class, function (Faker\Generator $faker) {
    return [
        'group_title' => $faker->sentence,
        'group_desc' => $faker->text,
        'start_date' => $faker->date(),
        'end_date' => $faker->date(),
        'origin' => $faker->city,
        'destination' => $faker->city,
        'group_image' => $faker->imageUrl($width = 640, $height = 480),
    ];
});


