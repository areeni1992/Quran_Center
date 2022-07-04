<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Clas;
use App\Models\Quran;
use App\Models\Task;
use App\Models\User;
use Devtical\Quran\Models\Surah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index()
    {
        $studentAuth = auth()->user();
        $ayats = DB::table('qurans')->where('student_id', auth()->user()->id)->latest()->first();
        $surahName = Surah::find($ayats->surah_id);
        $userData = User::with('tasks')->with('clas')->where('id', auth()->user()->id)->first();
//        dd($userData);
        return view('layouts.student.index', compact('studentAuth', 'ayats', 'surahName', 'userData'));
    }
}
