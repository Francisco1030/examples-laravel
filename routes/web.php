<?php

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

//Listar diretamente do metodo controller
Route::get('list-user', 'UserController@getAll');

Route::get('list-user', 'UserController@getAll');