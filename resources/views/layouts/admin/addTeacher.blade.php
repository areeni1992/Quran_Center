@extends('layouts.admin.index')

@section('addTeacher')
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
    <!-- Success Alert -->
    @if(session('status'))
        <div class="alert alert-success alert-dismissible d-flex align-items-center fade show">
            <i class="bi-check-circle-fill"></i>
            <strong class="mx-2">Success!</strong> {{ session('status') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif
    <form action="" method="post">
        @csrf
        <div class="tetcer">
            <input type="hidden" value="2" name="user_type_id">
            <div class="col-md-12">
                <div style="margin-right: 75px;">
                    <h1 style="text-align:center ;">إضافة معلم</h1>
                    <label>الاسم </label>
                    <input type="text" placeholder="الاسم" name="name">
                    @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                    <label>رقم الهاتف </label>
                    <input type="number" placeholder="رقم الهاتف" name="phone">
                    @if ($errors->has('phone'))
                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                    @endif
                </div>
                <br>

                <div style="margin-right: 45px;">
                    <label>مكان الميلاد </label>
                    <input type="text" placeholder="مكان الميلاد" name="place_barth">
                    @if ($errors->has('place_barth'))
                        <span class="text-danger">{{ $errors->first('place_barth') }}</span>
                    @endif
                    <label>تاريخ الميلاد </label>
                    <input type="datetime-local" placeholder="تاريخ الميلاد" name="barth_date">
                    @if ($errors->has('barth_date'))
                        <span class="text-danger">{{ $errors->first('barth_date') }}</span>
                    @endif
                </div>
                <br>
                <div style="margin-right: 30px;">
                    <label for="email">إيميل </label>
                    <input type="email" placeholder="إيميل" name="email">
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                    <label for="password">كلمة المرور</label>
                    <input type="password" name="password">
                    @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                <br>
                <div style="margin-right: 30px;">
                    <label for="halaqah">إختر حلقة</label>
                    <select name="halaqah" id="">
                        <option value=""></option>
                    </select>
                    @if ($errors->has('halaqah'))
                        <span class="text-danger">{{ $errors->first('halaqah') }}</span>
                    @endif
                </div>
            </div>
            <button type="submit" class="btn btn-success"
                    style="margin-right: 280px;">تأكيد إضافة معلم</button>
        </div>
    </form>
    </div>
@endsection
