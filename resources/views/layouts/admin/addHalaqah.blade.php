@extends('layouts.admin.index')

@section('addHalaqah')
    <div class="inner">
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


        <br>
        <form action="" method="post">
            @csrf
            <div class="tetcer">
                <div class="col-md-12">
                    <div style="margin-right: 75px;">
                        <h1 style="text-align:center ;">إضافة حلقة</h1>
                        <label>إسم الحلقة  </label>
                        <input type="text" placeholder="إسم الحلقة" name="name">
                        <label>إسم المحفظ </label>
                        <select name="teacher" id="">
                            @foreach($teachers as $t)
                                <option value="{{ $t->id }}"> {{ $t->name  }}</option>
                            @endforeach
                        </select>
                    </div>
                    <br>
                    <div style="margin-right: 45px;">
                        <label>المرحلة </label>
                        <input type="text" placeholder="المرحلة" name="marahalah">
                        <div>
                            <label>إضافة طلاب للحلقة </label>
                        </div>
                        @foreach($students as $std)
                        <div class="form-check">
                            <input name="students[]" class="form-check-input" type="checkbox" value="{{ $std->id }}" id="flexCheckDefault">
                            <label class="form-check-label" for="{{ $std->name }}">
                                {{ $std->name }}
                            </label>
                        </div>
                        @endforeach
                    </div>

                </div>
                <button type="submit" class="btn btn-success"
                        style="margin-right: 280px;">تأكيد إضافة حلقة</button>
            </div>
        </form>

    </div>

@endsection
