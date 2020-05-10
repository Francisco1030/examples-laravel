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

    public function storeUser(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('users.getAll');
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
