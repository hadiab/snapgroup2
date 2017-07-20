<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/members', 'AuthController@register');


Route::get('/user/1', function() {
        return response()->json([
        "user_id" => 1,
        "name" => "John Smith Junior", 
        "created_at" => "13:27, July 17, 2017",
        "title" => "group_assistant" 
        ]);
});

/* ------------------------Individual Groups -------------------------------- */

// group 1 
Route::get('/groups/1', function() {
        return response()->json([
        "group" =>
        [
        "group_id" => 1,
        "name" => "Saint Zohar Group", 
        "starting_time" => "02/08",
        "trip_length" => 10,
        "time_remaining" => "12 Days 8 Hours",
        "members" => 19,
        "rating" => 5,
        "reviews" => 1264,
        "route" => "London to Israel",
        "latest_news" => "We're all set, just need a tour guide",
        "plan" => [
                    ['name' => 'Jerusalem', 'lat' => 31.771959, 'long' => 35.217018], 
                    ['name' => 'Tel-Aviv', 'lat' => 32.109333, 'long' => 34.855499],
                    ['name' => 'Nahariya', 'lat' => 33.01135, 'long' => 35.09467],
                    ['name' => 'Zichron Yaakov', 'lat' => 32.573905, 'long' =>  35.47319],
                    ['name' => 'Dead Sea', 'lat' => 31.55903, 'long' => -73.623974]
                   ]
        ]
        ]);
});

//group 2
Route::get('/groups/2', function() {
        return response()->json([
        "group" =>
      [
        "group_id" => 2,
        "name" => "Westminister School", 
        "starting_time" => "02/08",
        "trip_length" => 7,
        "time_remaining" => "3 Days 3 Hours",
        "members" => 97,
        "rating" => 3,
        "reviews" => 53,
        "route" => "London to Israel",  
        "latest_news" => "We're all set, just need a tour guide",
        "plan" => [
                    ['name' => 'Jerusalem', 'lat' => 31.771959, 'long' => 35.217018], 
                    ['name' => 'Tel-Aviv', 'lat' => 32.109333, 'long' => 34.855499],
                    ['name' => 'Nahariya', 'lat' => 33.01135, 'long' => 35.09467],
                    ['name' => 'Zichron Yaakov', 'lat' => 32.573905, 'long' =>  35.47319],
                    ['name' => 'Dead Sea', 'lat' => 31.55903, 'long' => -73.623974]
                   ]
        ]
        ]);
});
//group 3 
Route::get('/groups/3', function() {
        return response()->json([
             "group" =>
       [
        "group_id" => 3,
        "name" => "University College of London", 
        "starting_time" => "02/08",
        "trip_length" => 3,
        "time_remaining" => "122 Days 8 Hours",
        "members" => 18,
        "rating" => 2,
        "reviews" => 522,
        "route" => "London to Israel",
        "plan" => [
                    ['name' => 'Jerusalem', 'lat' => 31.771959, 'long' => 35.217018], 
                    ['name' => 'Tel-Aviv', 'lat' => 32.109333, 'long' => 34.855499],
                    ['name' => 'Nahariya', 'lat' => 33.01135, 'long' => 35.09467],
                    ['name' => 'Zichron Yaakov', 'lat' => 32.573905, 'long' =>  35.47319],
                    ['name' => 'Dead Sea', 'lat' => 31.55903, 'long' => -73.623974]
                   ] 
        ]
        ]);
});

//group 4
Route::get('/groups/4', function() {
        return response()->json([
        "group" =>
      [
        "group_id" => 4,
        "name" => "Tour of Israel Clubs", 
        "starting_time" => "02/08",
        "trip_length" => 4,
        "time_remaining" => "39 Days 3 Hours",
        "members" => 18,
        "rating" => 5,
        "reviews" => 522,
        "route" => "London to Israel", 
        "plan" => [
                    ['name' => 'Jerusalem', 'lat' => 31.771959, 'long' => 35.217018], 
                    ['name' => 'Tel-Aviv', 'lat' => 32.109333, 'long' => 34.855499],
                    ['name' => 'Nahariya', 'lat' => 33.01135, 'long' => 35.09467],
                    ['name' => 'Zichron Yaakov', 'lat' => 32.573905, 'long' =>  35.47319],
                    ['name' => 'Dead Sea', 'lat' => 31.55903, 'long' => -73.623974]
                   ]
        ]
        ]);
});

//group 5
Route::get('/groups/5', function() {
        return response()->json([
        "group" =>
        [
        "group_id" => 5,
        "name" => "Families and Children", 
        "starting_time" => "02/08",
        "trip_length" => 22,
        "time_remaining" => "5 Days 1 Hour",
        "members" => 68,
        "rating" => 5,
        "reviews" => 35,
        "route" => "London to Israel",  
        "latest_news" => "We're all set, just need a tour guide",
        "plan" => [
                    ['name' => 'Jerusalem', 'lat' => 31.771959, 'long' => 35.217018], 
                    ['name' => 'Tel-Aviv', 'lat' => 32.109333, 'long' => 34.855499],
                    ['name' => 'Nahariya', 'lat' => 33.01135, 'long' => 35.09467],
                    ['name' => 'Zichron Yaakov', 'lat' => 32.573905, 'long' =>  35.47319],
                    ['name' => 'Dead Sea', 'lat' => 31.55903, 'long' => -73.623974]
                   ]
        ]

        ]);
});

/* ---------------------------------End Individual Group Listing -----------------------------*/

Route::get('/groups', function() {
        return response()->json([
       
        [
        "group" => 
        [
        "group_id" => 1,
        "name" => "Saint Zohar Group",
        "team_leader" => "Grace Hopper",
        "first_admin" => "Rasmus Lerdorf",
        "second_admin" => "Linus Torvalds",
        "third_admin" => "Taylor Otwell", 
        "starting_time" => "02/08",
        "trip_length" => 10,
        "time_remaining" => "12 Days 8 Hours",
        "members" => 19,
        "rating" => 5,
        "reviews" => 1264,
        "route" => "London to Israel",
        "latest_news" => "We're all set, just need a tour guide",
        "plan" => [
                    ['name' => 'Jerusalem', 'lat' => 31.771959, 'long' => 35.217018], 
                    ['name' => 'Tel-Aviv', 'lat' => 32.109333, 'long' => 34.855499],
                    ['name' => 'Nahariya', 'lat' => 33.01135, 'long' => 35.09467],
                    ['name' => 'Zichron Yaakov', 'lat' => 32.573905, 'long' =>  35.47319],
                    ['name' => 'Dead Sea', 'lat' => 31.55903, 'long' => -73.623974]
                   ]
        ]],

        [
        "group" => 
        [
        "group_id" => 2,
        "name" => "Westminister School", 
        "team_leader" => "Grace Hopper",
        "first_admin" => "Rasmus Lerdorf",
        "second_admin" => "Linus Torvalds",
        "third_admin" => "Taylor Otwell",
        "starting_time" => "02/08",
        "trip_length" => 7,
        "time_remaining" => "3 Days 3 Hours",
        "members" => 97,
        "rating" => 3,
        "reviews" => 53,
        "route" => "London to Israel",  
        "latest_news" => "We're all set, just need a tour guide",
        "plan" => [
                    ['name' => 'Jerusalem', 'lat' => 31.771959, 'long' => 35.217018], 
                    ['name' => 'Tel-Aviv', 'lat' => 32.109333, 'long' => 34.855499],
                    ['name' => 'Nahariya', 'lat' => 33.01135, 'long' => 35.09467],
                    ['name' => 'Zichron Yaakov', 'lat' => 32.573905, 'long' =>  35.47319],
                    ['name' => 'Dead Sea', 'lat' => 31.55903, 'long' => -73.623974]
                   ]
        ]],

        [
        "group" => 
        [
        "group_id" => 3,
        "name" => "University College of London",
        "team_leader" => "Grace Hopper",
        "first_admin" => "Rasmus Lerdorf",
        "second_admin" => "Linus Torvalds",
        "third_admin" => "Taylor Otwell", 
        "starting_time" => "02/08",
        "trip_length" => 3,
        "time_remaining" => "122 Days 8 Hours",
        "members" => 18,
        "rating" => 2,
        "reviews" => 522,
        "route" => "London to Israel",
        "plan" => [
                    ['name' => 'Jerusalem', 'lat' => 31.771959, 'long' => 35.217018], 
                    ['name' => 'Tel-Aviv', 'lat' => 32.109333, 'long' => 34.855499],
                    ['name' => 'Nahariya', 'lat' => 33.01135, 'long' => 35.09467],
                    ['name' => 'Zichron Yaakov', 'lat' => 32.573905, 'long' =>  35.47319],
                    ['name' => 'Dead Sea', 'lat' => 31.55903, 'long' => -73.623974]
                   ] 
        ]],
        
        [
        "group" => 
        [
        "group_id" => 4,
        "name" => "Tour of Israel Clubs",
        "team_leader" => "Grace Hopper",
        "first_admin" => "Rasmus Lerdorf",
        "second_admin" => "Linus Torvalds",
        "third_admin" => "Taylor Otwell", 
        "starting_time" => "02/08",
        "trip_length" => 4,
        "time_remaining" => "39 Days 3 Hours",
        "members" => 18,
        "rating" => 5,
        "reviews" => 522,
        "route" => "London to Israel", 
        "plan" => [
                     ['name' => 'Jerusalem', 'lat' => 31.771959, 'long' => 35.217018], 
                     ['name' => 'Tel-Aviv', 'lat' => 32.109333, 'long' => 34.855499],
                     ['name' => 'Nahariya', 'lat' => 33.01135, 'long' => 35.09467],
                     ['name' => 'Zichron Yaakov', 'lat' => 32.573905, 'long' =>  35.47319],
                     ['name' => 'Dead Sea', 'lat' => 31.55903, 'long' => -73.623974]
                   ]
        ]],

        [
        "group" => 
        [
        "group_id" => 5,
        "name" => "Families and Children",
        "team_leader" => "Grace Hopper",
        "first_admin" => "Rasmus Lerdorf",
        "second_admin" => "Linus Torvalds",
        "third_admin" => "Taylor Otwell", 
        "starting_time" => "02/08",
        "trip_length" => 22,
        "time_remaining" => "5 Days 1 Hour",
        "members" => 68,
        "rating" => 5,
        "reviews" => 35,
        "route" => "London to Israel",  
        "latest_news" => "We're all set, just need a tour guide",
        "plan" => [
                    ['name' => 'Jerusalem', 'lat' => 31.771959, 'long' => 35.217018], 
                    ['name' => 'Tel-Aviv', 'lat' => 32.109333, 'long' => 34.855499],
                    ['name' => 'Nahariya', 'lat' => 33.01135, 'long' => 35.09467],
                    ['name' => 'Zichron Yaakov', 'lat' => 32.573905, 'long' =>  35.47319],
                    ['name' => 'Dead Sea', 'lat' => 31.55903, 'long' => -73.623974]
                   ]
        ]]
        
        ]);
});