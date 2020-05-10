<?php

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('get-user', 'UserController@getAll');

Route::get('users', 'Form\\TestController@getAllUsers')->name('users.getAll');

Route::get('users/new', 'Form\\TestController@createUser')->name('users.createUser');

Route::get('users/{user}', 'Form\\TestController@getUser')->name('users.getUser');

Route::post('users/store', 'Form\\TestController@storeUser')->name('users.storeUser');