<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Clas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
    public function index()
    {
        $super = auth()->user();
        return view('layouts.teacher.index', compact('super', $super));
    }

    public function allStudents()
    {
        $super = auth()->user('user')->load('clas')->toArray();
        $students = DB::table('users')->where('user_type_id', 3)->where('clas_id', $super['clas']['id'])->get()->toArray();

        return view('layouts.teacher.students', compact('super', 'students'));
    }

}
