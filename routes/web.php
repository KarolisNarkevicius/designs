<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Carbon\Carbon;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/v2', function () {
    return view('adminltev2.app', [
        'name' => 'John',
        'user_id' => 2,
        'email' => 'john@mail.com',
        'textarea' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi dicta dignissimos exercitationem fugiat obcaecati provident quod repellat reprehenderit sed, sit. Itaque maiores maxime molestiae nesciunt nostrum, provident repellendus sit vero!',
        'radio' => 1,
        'checkbox' => 1,
        'date' => Carbon::now(),
        'datetime' => Carbon::now(),
        'time' => Carbon::now(),
        'number' => 1234,
        'money' => 1234,
        'float' => 1.232,
        'enum' => 'enum2',
        'location' => '54.731394, 25.269598',

        'users' => [
            ['name' => 'Test', 'id' => 1],
            ['name' => 'Test2', 'id' => 2],
            ['name' => 'Test3', 'id' => 3],
            ['name' => 'Test4', 'id' => 4],
        ],
        'enums' => [
            'enum1',
            'enum2',
            'enum3'
        ]
    ]);
});

Route::get('/v3', function () {
    return view('adminltev3.app', [
        'name' => 'John',
        'user_id' => 2,
        'email' => 'john@mail.com',
        'textarea' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi dicta dignissimos exercitationem fugiat obcaecati provident quod repellat reprehenderit sed, sit. Itaque maiores maxime molestiae nesciunt nostrum, provident repellendus sit vero!',
        'radio' => 1,
        'checkbox' => 1,
        'date' => Carbon::now(),
        'datetime' => Carbon::now(),
        'time' => Carbon::now(),
        'number' => 1234,
        'money' => 1234,
        'float' => 1.232,
        'enum' => 'enum2',
        'location' => '54.731394, 25.269598',

        'users' => [
            ['name' => 'Test', 'id' => 1],
            ['name' => 'Test2', 'id' => 2],
            ['name' => 'Test3', 'id' => 3],
            ['name' => 'Test4', 'id' => 4],
        ],
        'enums' => [
            'enum1',
            'enum2',
            'enum3'
        ]
    ]);
});
