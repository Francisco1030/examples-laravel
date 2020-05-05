<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create()
    {
        $user = new User();
        $user->name = "Francisco Viana";
        $user->email = "fcoviana@gmail.com";
        $user->password = Hash::make("123");
        $user->save();
    }

    public function getAll()
    {
        $user = new User();
        $user->name = "Francisco Viana";
        $user->email = "fcoviana@gmail.com";
        $user->password = Hash::make("123");
        $user->save();
        
        echo "<h1> Listagem de usuarios</h1>";        
    }
}
