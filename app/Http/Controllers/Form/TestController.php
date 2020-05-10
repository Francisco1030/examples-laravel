<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

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

    public function getUser(User $user) 
    {
        var_dump($user);

    }
}
