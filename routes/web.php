<?php

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('get-user', 'UserController@getAll');

Route::get('users', 'Form\\TestController@getAllUsers')->name('users.getAll');

Route::get('users/{user}', 'Form\\TestController@getUser')->name('users.getAll');