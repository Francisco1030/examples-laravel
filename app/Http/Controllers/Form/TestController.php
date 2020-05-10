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

    
    public function editUser(User $user, Request $request)
    {
        $user->name = $request->name;

        if(filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
            $user->email = $request->email;
        }
        if(!empty($request->password)) {
            $user->password = Hash::make($request->password);
        }
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

    public function formCreateUser() 
    {
        return view('create-user');
    }

    public function formEditUser(User $user) 
    {
        return view('edit-user', [
            'user' => $user
       ]);
    }

    public function deleteUser(User $user)
    {
        $user->delete();
        return redirect()->route('users.getAll');
    }
}
