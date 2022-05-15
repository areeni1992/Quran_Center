<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class admin extends Controller
{
    public function index() {
        $user = auth()->user();
        return view('admin.index', compact('user', $user));
    }
}
