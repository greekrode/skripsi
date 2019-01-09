<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function search()
    {
        $users = User::all();
        return view('pages.search')->with('users', $users);
    }
}
