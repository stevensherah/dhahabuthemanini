<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\user;

class usersController extends Controller
{
    //
    public function getUsers()
    {
        $users = User::latest()->get();

        return view('admin.users')->with('users', $users);
    }
}
