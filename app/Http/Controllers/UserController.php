<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users_type;
use App\Models\User;
class UserController extends Controller
{

    public function index()
    {
        $users = auth()->user()->user_type_id;

        return view('home')->with('users',$users);
    }
}
