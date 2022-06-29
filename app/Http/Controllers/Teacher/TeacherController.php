<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Clas;
use App\Models\Report;
use Devtical\Quran\Models\Ayah;
use Devtical\Quran\Models\Surah;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

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

    public function reports()
    {
        $super = auth()->user();
        $reports = Report::all();
        foreach ($reports as $row)
        {
            $studentsName = DB::table('users')->where('user_type_id', 3)->get();

        }
//        dd($studentsName);
        return view('layouts.teacher.reports', compact('reports', 'super', 'studentsName'));
    }

    public function addReportsPage()
    {
        $super = auth()->user()->load('clas')->toArray();
        $students = DB::table('users')->where('user_type_id', 3)->where('clas_id', $super['clas']['id'])->get()->toArray();

        return view('layouts.teacher.addReportsPage', compact('super', 'students'));
    }

    public function addReport(Request $request)
    {
        $super = auth()->user()->load('clas')->toArray();

        $valid = $request->validate([
            'student_name' => 'string',
            'clas_name' => 'string',
            'sorah_start' => 'string',
            'ayah_start' => 'string',
            'sorah_end' => 'string',
            'ayah_end' => 'string',
            'page_revision_count' => 'string',
            'report_date' => 'string',
            'monthly_rate' => 'string'
        ]);

        if ($valid)
        {
            $report = new Report;
            $report->student_name = $request->student_name;
            $report->clas_name = $request->clas_name;
            $report->sorah_start = $request->sorah_start;
            $report->ayah_start = $request->ayah_start;
            $report->sorah_end = $request->sorah_end;
            $report->ayah_end = $request->ayah_end;
            $report->page_revision_count = $request->page_revision_count;
            $report->latest_test = $request->latest_test;
            $report->clas_id = $super['clas']['id'];
            $report->clas_name = $super['clas']['name'];
            $report->user_id = $super['id'];
            $report->monthly_rate = $request->monthly_rate;

            if ($report->save()) {


                Alert::success('تم', 'تم التعديل بنجاح');
                Alert::toast('You\'ve Successfully Registered', 'success');
                return back()->with('status', 'success');
            } else {
                Alert::error('error');
                return back()->with('status' , 'error');
            }
        }
    }

    public function editReport(Request $request, $id)
    {
        $super = auth()->user()->load('clas')->toArray();

        $report = Report::find($id);
        $student = DB::table('users')->where('user_type_id', 3)->where('id', $report->student_name)->pluck('name')->first();


        return view('layouts.teacher.editReport', compact('super', 'report', 'student'));
    }

    public function updateReport(Request $request, $id)
    {
        $valid = $request->validate([
            'student_name' => 'string',
            'clas_name' => 'string',
            'sorah_start' => 'string',
            'ayah_start' => 'string',
            'sorah_end' => 'string',
            'ayah_end' => 'string',
            'page_revision_count' => 'string',
            'report_date' => 'string',
            'monthly_rate' => 'string'
        ]);

        if ($valid)
        {
            $report = Report::find($id);

            $report->clas_name = $request->clas_name;
            $report->sorah_start = $request->sorah_start;
            $report->sorah_end = $request->sorah_end;
            $report->ayah_start = $request->ayah_start;
            $report->ayah_end = $request->ayah_end;
            $report->page_revision_count = $request->page_revision_count;
            $report->report_date = $request->report_date;
            $report->monthly_rate = $request->monthly_rate;

            $report->update();
            return redirect()->back()->with('status', 'success');
        }

    }

    public function showReport($id)
    {
        $super = auth()->user()->load('clas')->toArray();
        $report = Report::find($id);
        $student = DB::table('users')->where('user_type_id', 3)->where('id', $report->student_name)->pluck('name')->first();

        return view('layouts.teacher.showReport', compact('super', 'report', 'student'));

    }

    public function quran()
    {
        return view('layouts.teacher.quran');
    }
    public function juz()
    {

    }
    public function surahs($id)
    {
        $ayah = Ayah::all()->load('surah')->where('juz', $id)->pluck('surah')->toArray();
        $surahs = array_unique($ayah, SORT_REGULAR);

        return view('layouts.teacher.quran', compact('surahs'));
    }

    public function ayahs($id)
    {
        $super = auth()->user()->load('clas')->toArray();
        $students = DB::table('users')->where('user_type_id', 3)->where('clas_id', $super['clas']['id'])->get()->toArray();
        $ayahs = Surah::find($id)->ayahs;
//        dd($students);
        return view('layouts.teacher.quran', compact('ayahs', 'students'));

    }

}
