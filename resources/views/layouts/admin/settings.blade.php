@extends('layouts.admin.index')
@section('settings')
    <div class="mb-5 inner-two">

        <div class="col-md-8">
            <div class="title text-center">
                <div class="row">
                    <div class="col-md-5 my-auto">
                        <span class="line"></span>
                    </div>
                    <div class="col-md-2">
                        <h2>الاعدادات</h2>
                    </div>
                    <div class="col-md-5 my-auto pr-5">
                        <span class="line"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <nav>
        <ul>
            <li>
                <a href="{{ url('home/admin/settings/addstudent') }}">اضافة طاب</a>
            </li>
            <li>
                <a href="{{ url('home/admin/settings/editstudent') }}">تعديل بيانات طاب</a>
            </li>
            <li>
                <a href="{{ url('home/admin/settings/addteacher') }}">اضافة معلم </a>
            </li>
            <li>
                <a href="edit-tetcher.html">تعديل بيانات معلم</a>
            </li>
            <li>
                <a href="{{ url('home/admin/settings/addhalaqah') }}">اضافة حلقة</a>
            </li>
            <li>
                <a href="#">تعديل بيانات حلقة</a>
            </li>

            <li>
                <a href="./add-admin.html">اضافة مشرف</a>
            </li>

            <li>
                <a href="./settings.html">تعديل بيانات مشرف</a>
            </li>

        </ul>
    </nav>
@endsection
