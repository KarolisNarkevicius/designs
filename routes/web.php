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
use Yajra\DataTables\Facades\DataTables;

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

Route::get('/users', function () {
    $table = Datatables::of(factory(App\User::class, 50)->make());

    $table->addColumn('actions', '&nbsp;');

    $table->editColumn('actions', function ($row) {
        return view('adminltev2.datatables.actions');
    });

    $table->editColumn('name', function ($row) {
        return $row->name ? $row->name : '';
    });
    $table->editColumn('book.name', function ($row) {
        return $row->book ? $row->book->name : '';
    });
    $table->editColumn('books.name', function ($row) {
        return view('adminltev2.datatables.belongsToManyField', ['items' => $row->books, 'key' => 'name'])->render();
    });
    $table->editColumn('email', function ($row) {
        return $row->email ? $row->email : '';
    });
    $table->editColumn('textarea', function ($row) {
        return $row->textarea ? $row->textarea : '';
    });
    $table->editColumn('radio', function ($row) {
        return $row->radio ? $row->radio : '';
    });
    $table->editColumn('checkbox', function ($row) {
        return view('adminltev2.datatables.checkbox', ['checked' => $row->checkbox]);
    });
    $table->editColumn('date', function ($row) {
        return $row->date ? $row->date : '';
    });
    $table->editColumn('datetime', function ($row) {
        return $row->datetime ? $row->datetime : '';
    });
    $table->editColumn('time', function ($row) {
        return $row->time ? $row->time : '';
    });
    $table->editColumn('file', function ($row) {
        return view('adminltev2.datatables.file', ['path' => $row->file]);
    });
    $table->editColumn('photo', function ($row) {
        return view('adminltev2.datatables.photo', ['path' => $row->photo, 'thumb' => $row->photo_thumb]);
    });
    $table->editColumn('password', function ($row) {
        return '----';
    });
    $table->editColumn('money', function ($row) {
        return $row->money ? $row->money : '';
    });
    $table->editColumn('number', function ($row) {
        return $row->number ? $row->number : '';
    });
    $table->editColumn('float', function ($row) {
        return $row->float ? $row->float : '';
    });
    $table->editColumn('enum', function ($row) {
        return $row->enum ? $row->enum : '';
    });
    $table->editColumn('location', function ($row) {
        return $row->location ? $row->location : '';
    });

    $table->rawColumns(['actions', 'books.name', 'checkbox', 'file', 'photo']);

    return $table->make(true);
})->name('users.index');

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

Route::get('/users2', function () {
    $table = Datatables::of(factory(App\User::class, 50)->make());

    $table->addColumn('actions', '&nbsp;');

    $table->editColumn('actions', function ($row) {
        return view('adminltev3.datatables.actions');
    });

    $table->editColumn('name', function ($row) {
        return $row->name ? $row->name : '';
    });
    $table->editColumn('book.name', function ($row) {
        return $row->book ? $row->book->name : '';
    });
    $table->editColumn('books.name', function ($row) {
        return view('adminltev3.datatables.belongsToManyField', ['items' => $row->books, 'key' => 'name'])->render();
    });
    $table->editColumn('email', function ($row) {
        return $row->email ? $row->email : '';
    });
    $table->editColumn('textarea', function ($row) {
        return $row->textarea ? $row->textarea : '';
    });
    $table->editColumn('radio', function ($row) {
        return $row->radio ? $row->radio : '';
    });
    $table->editColumn('checkbox', function ($row) {
        return view('adminltev3.datatables.checkbox', ['checked' => $row->checkbox]);
    });
    $table->editColumn('date', function ($row) {
        return $row->date ? $row->date : '';
    });
    $table->editColumn('datetime', function ($row) {
        return $row->datetime ? $row->datetime : '';
    });
    $table->editColumn('time', function ($row) {
        return $row->time ? $row->time : '';
    });
    $table->editColumn('file', function ($row) {
        return view('adminltev3.datatables.file', ['path' => $row->file]);
    });
    $table->editColumn('photo', function ($row) {
        return view('adminltev3.datatables.photo', ['path' => $row->photo, 'thumb' => $row->photo_thumb]);
    });
    $table->editColumn('password', function ($row) {
        return '----';
    });
    $table->editColumn('money', function ($row) {
        return $row->money ? $row->money : '';
    });
    $table->editColumn('number', function ($row) {
        return $row->number ? $row->number : '';
    });
    $table->editColumn('float', function ($row) {
        return $row->float ? $row->float : '';
    });
    $table->editColumn('enum', function ($row) {
        return $row->enum ? $row->enum : '';
    });
    $table->editColumn('location', function ($row) {
        return $row->location ? $row->location : '';
    });

    $table->rawColumns(['actions', 'books.name', 'checkbox', 'file', 'photo']);

    return $table->make(true);
})->name('users2.index');

Route::get('/users3', function () {
    $table = Datatables::of(factory(App\User::class, 50)->make());

    $table->addColumn('actions', '&nbsp;');

    $table->editColumn('actions', function ($row) {
        return view('coreUI.datatables.actions');
    });

    $table->editColumn('name', function ($row) {
        return $row->name ? $row->name : '';
    });
    $table->editColumn('book.name', function ($row) {
        return $row->book ? $row->book->name : '';
    });
    $table->editColumn('books.name', function ($row) {
        return view('coreUI.datatables.belongsToManyField', ['items' => $row->books, 'key' => 'name'])->render();
    });
    $table->editColumn('email', function ($row) {
        return $row->email ? $row->email : '';
    });
    $table->editColumn('textarea', function ($row) {
        return $row->textarea ? $row->textarea : '';
    });
    $table->editColumn('radio', function ($row) {
        return $row->radio ? $row->radio : '';
    });
    $table->editColumn('checkbox', function ($row) {
        return view('coreUI.datatables.checkbox', ['checked' => $row->checkbox]);
    });
    $table->editColumn('date', function ($row) {
        return $row->date ? $row->date : '';
    });
    $table->editColumn('datetime', function ($row) {
        return $row->datetime ? $row->datetime : '';
    });
    $table->editColumn('time', function ($row) {
        return $row->time ? $row->time : '';
    });
    $table->editColumn('file', function ($row) {
        return view('coreUI.datatables.file', ['path' => $row->file]);
    });
    $table->editColumn('photo', function ($row) {
        return view('coreUI.datatables.photo', ['path' => $row->photo, 'thumb' => $row->photo_thumb]);
    });
    $table->editColumn('password', function ($row) {
        return '----';
    });
    $table->editColumn('money', function ($row) {
        return $row->money ? $row->money : '';
    });
    $table->editColumn('number', function ($row) {
        return $row->number ? $row->number : '';
    });
    $table->editColumn('float', function ($row) {
        return $row->float ? $row->float : '';
    });
    $table->editColumn('enum', function ($row) {
        return $row->enum ? $row->enum : '';
    });
    $table->editColumn('location', function ($row) {
        return $row->location ? $row->location : '';
    });

    $table->rawColumns(['actions', 'books.name', 'checkbox', 'file', 'photo']);

    return $table->make(true);
})->name('users3.index');

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

Route::get('/coreui', function () {
    return view('coreUI.app', [
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
