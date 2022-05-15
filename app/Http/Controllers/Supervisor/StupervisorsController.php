<?php

namespace App\Http\Controllers\Supervisor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StupervisorsController extends Controller
{
    public function index() {
        $super = auth()->user();
        return view('supervisors.index', compact('super', $super));
    }
}
