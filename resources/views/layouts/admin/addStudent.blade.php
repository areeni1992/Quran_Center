@extends('layouts.admin.index')

@section('addStudent')
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
        <div class="container">
            <h1 style="text-align:center ;">إضافة  طالب</h1>
            <div class="row">
                <div class="inputs-field">
                    <label>اسم الطالب </label>
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
                <div class="inputs-field">
                    <label>مكان الميلاد </label>
                    <input type="text" placeholder="تاريخ الميلاد" name="place_barth">
                    @if ($errors->has('place_barth'))
                        <span class="text-danger">{{ $errors->first('place_barth') }}</span>
                    @endif
                    <label>تاريخ الميلاد </label>
                    <input type="datetime-local" placeholder="مكان الميلاد" name="barth_date">
                    @if ($errors->has('barth_date'))
                        <span class="text-danger">{{ $errors->first('barth_date') }}</span>
                    @endif
                </div>
                <br>
                <div class="inputs-field">
                    <label>هوية الطالب  </label>
                    <input type="text" placeholder="هوية الطالب " name="card_id">
                    @if ($errors->has('card_id'))
                        <span class="text-danger">{{ $errors->first('card_id') }}</span>
                    @endif
                    <label>هوية الاب </label>
                    <input type="text" placeholder="هوية الاب" name="father_card_id">
                    @if ($errors->has('father_card_id'))
                        <span class="text-danger">{{ $errors->first('father_card_id') }}</span>
                    @endif
                </div>
                <div class="inputs-field">
                    <label> الايميل </label>
                    <input type="text" placeholder="الايميل" name="email">
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                    <label>كلمة المرور </label>
                    <input type="password" placeholder="كلمة المرور" name="password">
                    @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                <div class="inputs-field">
                    <label> الحلقة </label>
                    <select name="clas_id" id="halaqah">
                        @foreach($classess as $clas)
                            <option value="{{ $clas->id }}"> {{ $clas->name }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('clas_id'))
                        <span class="text-danger">{{ $errors->first('clas_id') }}</span>
                    @endif
                </div>
                <input type="hidden" name="user_type_id" value="3">
            </div>
            <button type="submit" class="btn btn-success my-3" style="margin-right: 85px;">تأكيد إضافة طالب</button>
        </div>
    </form>
@endsection
