<?php

namespace App\Http\Controllers\Clas;

use App\Http\Controllers\Controller;
use App\Models\Clas;
use App\Models\Task;
use Illuminate\Http\Request;
use mysql_xdevapi\TableDelete;

class ClassesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $task = Task::find(1)->load('classes');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\m  $m
     * @return \Illuminate\Http\Response
     */
    public function show(m $m)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\m  $m
     * @return \Illuminate\Http\Response
     */
    public function edit(m $m)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\m  $m
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, m $m)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\m  $m
     * @return \Illuminate\Http\Response
     */
    public function destroy(m $m)
    {
        //
    }
}
