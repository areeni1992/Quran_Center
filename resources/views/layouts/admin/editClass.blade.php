@extends('layouts.admin.index')

@section('editClass')
    <!-- Success Alert -->
    @if(session('status'))
        <div class="alert alert-success alert-dismissible d-flex align-items-center fade show">
            <i class="bi-check-circle-fill"></i>
            <strong class="mx-2">Success!</strong> {{ session('status') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif
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
        <form action="{{ url('home/admin/classes/update/'.$singleClass->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="tetcer">
                <div class="col-md-12">
                    <div style="margin-right: 75px;">
                        <h1 style="text-align:center ;">تعديل حلقة</h1>
                        <label>إسم الحلقة  </label>
                        <input type="text" placeholder="إسم الحلقة" name="name" value="{{ $singleClass->name }}">
                        <label>إسم المحفظ </label>
                        <select name="teacher" id="">
                            @foreach($teachers as $t)
                                <option value="{{ $t->id }}" @if($t->clas_id == $singleClass->id) selected @endif> {{ $t->name  }}</option>
                            @endforeach
                        </select>
                    </div>
                    <br>
                    <div style="margin-right: 45px;">
                        <label>المرحلة </label>
                        <input type="text" placeholder="المرحلة" name="marahalah" value="{{ $singleClass->marahalah }}">
                        <div>
                            <label>إضافة طلاب للحلقة </label>
                        </div>
                        @foreach($students as $std)
                            <div class="form-check">
                                @if($std->user_type_id == 3)
                                    <input  @if($std->clas_id == $singleClass->id) checked @endif name="students[]" class="form-check-input" type="checkbox" @if($std->user_type_id == 3) value="{{ $std->id }}" @endif id="flexCheckDefault">
                                    <label class="form-check-label" for="{{ $std->name }}">
                                        {{ $std->name }}
                                    </label>
                                @endif
                            </div>
                        @endforeach
                    </div>

                </div>
                <button type="submit" class="btn btn-success" style="margin-right: 280px;">تأكيد تعديل حلقة</button>
            </div>
        </form>

    </div>

@endsection
