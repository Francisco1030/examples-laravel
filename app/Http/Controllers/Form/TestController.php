<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class TestController extends Controller
{
    public function getAllUsers() 
    {
        $users = User::all();
       // dd($users);

        return view('list-users', [
            'users' => $users
        ]);

    }

    public function create()
    {
        $user = new User();
        $user->name = "Costa Lima";
        $user->email = "costal@gmail.com";
        $user->password = Hash::make("123");
        $user->save();
    }

    public function getUser(User $user) 
    {
       // var_dump($user);
       return view('list-user', [
            'user' => $user
       ]);

    }

    public function createUser() 
    {
        return view('create-user');
    }
}
