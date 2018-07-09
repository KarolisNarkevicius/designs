<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'book' => factory(App\Book::class)->make(),
        'books' => factory(App\Book::class, 3)->make(),
        'textarea' => $faker->name,
        'radio' => 'radio',
        'checkbox' => $faker->boolean,
        'date' => $faker->date('Y-m-d'),
        'datetime' => $faker->dateTime('now')->format('Y-m-d H:i:s'),
        'time' => $faker->time('H:i:s'),
        'file' => 'file',
        'photo' => 'photo',
        'money' => $faker->randomNumber(),
        'number' => $faker->randomNumber(),
        'float' => $faker->randomNumber(),
        'enum' => 'enum',
        'location_address' => $faker->randomNumber(),
    ];
});
