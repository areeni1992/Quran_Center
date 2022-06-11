@extends('layouts.admin.index')

@section('classes')
    <div class="mb-5 inner-two">

        <div class="col-md-8">
            <div class="title text-center">
                <div class="row">
                    <div class="col-md-5 my-auto">
                        <span class="line"></span>
                    </div>
                    <div class="col-md-2">
                        <h2>الحلقات </h2>
                    </div>
                    <div class="col-md-5 my-auto pr-5">
                        <span class="line"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="under-title">
        <div class="right">
            <div>حلقة المعلم / خليل يونس</div>
            <div>المرحلة / براعم</div>
        </div>
        <div class="left">
            <div><a class="btn btn-md py-0" href="{{ url('home/admin/settings/addhalaqah') }}">اضافة حلقة</a></div>
        </div>
    </div>

    <div class="col-md-10">
        <section class="table-teacher">
            <table class="table table-hover table-bordered text-center">
                <thead class="main-color-bg text-white">
                <tr>
                    <th scope="col">اسم المعلم</th>
                    <th scope="col">اسم الحلقة</th>
                    <th scope="col">جوال المعلم</th>
                    <th scope="col">المرحلة</th>
                    <th scope="col">عمليات</th>

                </tr>
                </thead>
                <tbody class="bg-light">
                @foreach($classes as $clas)
                    @foreach($teachers as $t)
                        @if($clas->id == $t->clas_id)
                            <tr>
                                <td>{{ $t->name }}</td>
                                <td>{{ $clas->name }}</td>
                                <td>{{ $t->phone }}</td>
                                <td>{{ $clas->marahalah }}</td>
                                <td>
                                    <a class="btn btn-sm btn-success" rel="stylesheet" href="{{ url('home/admin/classes/edit/'.$clas->id) }}" id="">تعديل</a>
                                    <a class="btn btn-sm btn-danger" rel="stylesheet" href="">حذف</a>
                                    <a class="btn btn-sm btn-info" rel="stylesheet" href="{{ url('home/admin/classes/show/'. $clas->id) }}">عرض</a>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                @endforeach
                </tbody>
            </table>
        </section>
    </div>
@endsection
