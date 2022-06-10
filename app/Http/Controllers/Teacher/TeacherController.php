<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $super = auth()->user();
        return view('layouts.teacher.index', compact('super', $super));
    }

    public function allStudents()
    {
        $super = auth()->user();
        return view('layouts.teacher.students', compact('super', $super));
    }

}
