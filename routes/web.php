<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::controller(App\Http\Controllers\Admin\admin::class)
    ->middleware('admin')
    ->prefix('home/admin')
    ->as('admin.')
    ->group(function () {
        Route::get('/', 'index')->name('index');

        // Routes For Classes Section
        Route::get('/classes', 'classes');
        Route::get('/classes/edit/{id}', 'editClass');
        Route::put('/classes/update/{id}', 'updateClass');
        Route::get('/classes/show/{id}', 'showClass');

        // Routes For Teachers Section
        Route::get('/teachers', 'teachers');
        Route::post('/teachers/attendance', 'attendance');
        Route::get('/teachers/edit/{id}', 'editTeacher');
        Route::get('/teachers/upsent', 'upsent');

        // Routes For Tests Section
        Route::get('/tests', 'markTest');
        Route::post('/tests', 'addTestMark');

        // Routs For Students Section
        Route::get('/allstudents', 'allStudents');

        // Routes For Settings Section
        Route::get('/settings', 'settings');
        Route::get('/settings/addstudent', 'addStudentPage');
        Route::post('/settings/addstudent', 'addStudent');
        Route::get('/settings/editstudent', 'editStudentPage');
        Route::get('/settings/addhalaqah', 'addHalaqahPage');
        Route::post('/settings/addhalaqah', 'addHalaqah');
        Route::get('/settings/addteacher', 'addTeatcherPage');
        Route::post('/settings/addteacher', 'addTeacher');
    });

Route::controller(App\Http\Controllers\Teacher\TeacherController::class)
    ->middleware('teacher')
    ->prefix('home/teacher')
    ->as('teacher.')
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/students', 'allStudents');
        Route::get('/reports', 'reports');
    });
