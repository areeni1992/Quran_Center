<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Clas;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class admin extends Controller
{
    public function index()
    {
        $userAuth = auth()->user();

        return view('layouts.admin.index', compact('userAuth', $userAuth));
    }

    public function classes()
    {
        $userAuth = auth()->user();
        $classes = Clas::all();
        $users = User::all();

        $teachers = $users->where('user_type_id', 2)->load('clas');
        return view('layouts.admin.classes')
            ->with('classes', $classes)
            ->with('teachers', $teachers)
            ->with('userAuth', $userAuth)
            ->with('users', $users);
    }

    public function settings()
    {
        $userAuth = auth()->user();

        return view('layouts.admin.settings', compact('userAuth', $userAuth));
    }

    public function addStudentPage()
    {
        $userAuth = auth()->user();
        $classess = Clas::all();
        return view('layouts.admin.addStudent', compact('userAuth', $userAuth, 'classess', $classess));
    }
    public function addStudent(Request $request)
    {
        $valid = $request->validate([
            'name' => 'required',
            'phone' => 'required|min:8',
            'barth_date' => 'required|date',
            'place_barth' => 'required',
            'father_card_id' => 'required',
            'card_id' => 'required',
            'user_type_id'=> 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if ($valid)
        {
           $userTabel = new User;
           $userTabel->name = $request->name;
           $userTabel->phone = $request->phone;
           $userTabel->barth_date = $request->barth_date;
           $userTabel->father_card_id = $request->father_card_id;
           $userTabel->card_id = $request->card_id;
           $userTabel->user_type_id = $request->user_type_id;
           $userTabel->email = $request->email;
           $userTabel->place_barth = $request->place_barth;
           $userTabel->password = Hash::make($request->password);
           $userTabel->clas_id = $request->clas_id;

           $userTabel->save();
        }
        return back()->with('status', 'تم إضافة الطالب بنجاح');
    }
    public function editStudentPage()
    {
        $userAuth = auth()->user();
        $classess = Clas::all();
        return view('layouts.admin.editStd', compact('userAuth', $userAuth, 'classess', $classess));
    }
//    public function editStudentPage
    public function addHalaqahPage()
    {
        $userAuth = auth()->user();
        $students = DB::table('users')
            ->where('clas_id', null)
            ->where('user_type_id', 3)->get();
        $teachers = DB::table('users')
            ->where('user_type_id', 2)->get();
        return view('layouts.admin.addHalaqah', compact('userAuth', $userAuth, 'students', $students, 'teachers', $teachers));
    }


    public function addHalaqah(Request $request)
    {
        $valid = $request->validate([
            'name' => 'required',
            'teacher' => 'required',
            'marahalah' => 'string',
            'students' => 'required'
        ]);
        if ($valid) {

            $users = new User;
            $clas = new Clas;
            $clas->name = $request->name;
            $clas->marahalah = $request->marahalah;
            $students = $request->students;
            $teatcher = $request->teacher;
            $clas->save();
            $clas_id = DB::getPdo()->lastInsertId();

            for ($i = 0; $i < count($students); $i++)
            {
                $student_class = [
                  'clas_id' => $students[$i],
                ];
                DB::table('users')
                    ->where('user_type_id', 3)
                    ->where('id', $students[$i])
                    ->where('clas_id', null)->update([
                        'clas_id' => $clas_id
                    ]);
            }
            DB::table('users')
                ->where('user_type_id', 2)
                ->where('clas_id', null)
                ->where('id', $teatcher)->update([
                    'clas_id' => $clas_id,
                ]);
            return back()->with('status' , 'success');
        }
    }


    public function addTeatcherPage()
    {
        $userAuth = auth()->user();
        $user = User::all();
        return view('layouts.admin.addTeacher', compact('user', $user, 'userAuth', $userAuth));
    }

    public function addTeacher(Request $request)
    {
        $userAuth = auth()->user();
        $valid = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'barth_date' => 'required|date',
            'place_barth' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'user_type_id'=> 'required',
        ]);

        if ($valid)
        {
            $newTeacher = new User;
            $newTeacher->name = $request->name;
            $newTeacher->phone = $request->phone;
            $newTeacher->barth_date = $request->barth_date;
            $newTeacher->place_barth = $request->place_barth;
            $newTeacher->email = $request->email;
            $newTeacher->password = Hash::make($request->password);
            $newTeacher->user_type_id = $request->user_type_id;

            $newTeacher->save();
            return back()->with('status' , 'success');
        }
    }

}
