<?php

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('get-user', 'UserController@getAll');

Route::get('users', 'Form\\TestController@getAllUsers')->name('users.getAll');

Route::get('users/new', 'Form\\TestController@formCreateUser')->name('users.createUser');

Route::get('users/edit/{user}', 'Form\\TestController@formEditUser')->name('users.formEditUser');

Route::get('users/{user}', 'Form\\TestController@getUser')->name('users.getUser');

Route::post('users/store', 'Form\\TestController@storeUser')->name('users.storeUser');

Route::put('users/edit/{user}', 'Form\\TestController@editUser')->name('users.editUser');