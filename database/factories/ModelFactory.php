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
$factory->define(App\Cost::class, function (Faker\Generator $faker) {
    return [
    ];
});

$factory->define(App\Restaurant::class, function (Faker\Generator $faker) {
    return [
    ];
});

$factory->define(App\Plan::class, function (Faker\Generator $faker) {
    return [
    ];
});

$factory->define(App\Transport::class, function (Faker\Generator $faker) {
    return [
    ];
});

$factory->define(App\TourGuide::class, function (Faker\Generator $faker) {
    return [
    ];
});

$factory->define(App\Group::class, function (Faker\Generator $faker) {
    return [
        'group_title' => $faker->word,
        'group_desc' => $faker->text,
        'start-date' => $faker->date(),
        'end-date' => $faker->date(),
        'time_until' => $faker->randomNumber(),
        'time_remaining' => $faker->randomNumber(),
        'group_profile_pic' => $faker->word,
    ];
});

$factory->define(App\GuideExpertise::class, function (Faker\Generator $faker) {
    return [
    ];
});

$factory->define(App\Update::class, function (Faker\Generator $faker) {
    return [
    ];
});

$factory->define(App\Place::class, function (Faker\Generator $faker) {
    return [
    ];
});

$factory->define(App\Hotel::class, function (Faker\Generator $faker) {
    return [
    ];
});

$factory->define(App\RoomsAvailable::class, function (Faker\Generator $faker) {
    return [
    ];
});

$factory->define(App\Flight::class, function (Faker\Generator $faker) {
    return [
    ];
});

