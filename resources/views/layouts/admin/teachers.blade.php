@extends('layouts.admin.index')

@section('teachers')
        <div class="mb-5 inner-two">

            <div class="col-md-8">
                <div class="title text-center">
                    <div class="row">
                        <div class="col-md-5 my-auto">
                            <span class="line"></span>
                        </div>
                        <div class="col-md-2">
                            <h2>المعلمين</h2>
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
                <div>اضافة / تعديل معلم</div>
            </div>
        </div>
        <!-- <div class="col-md-3 bg-light">

    </div> -->
        <div class="col-md-9">
            <section class="table-teacher">
                <table class="table table-hover table-bordered text-center">
                    <thead class="main-color-bg text-white">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">اسم المعلم</th>
                        <th scope="col">اسم الحلقة</th>
                        <th scope="col">عدد الطلاب</th>
                        <th scope="col">رقم الجوال</th>

                        <th scope="col">عمليات</th>
                    </tr>
                    </thead>
                    <tbody class="bg-light">
                    <?php $i=1; ?>
                    @foreach($countStudents as $count)
                        @foreach($teachers as $t)
                            @if($t->clas_id == $count->id)
                                <tr id="{{ $count->id }}">
                                    <td>{{ $i++ }} -</td>
                                    <td> {{ $t->name }}</td>
                                    <td>{{ $count->name }}</td>
                                    <td>{{ $count->students }}</td>
                                    <td> {{ $t->phone }} </td>
                                    <td>
                                        <a class="btn btn-sm btn-success" rel="stylesheet" href="{{ url('home/admin/teachers/edit/'.$t->id) }}">تعديل</a>
                                        <a class="btn btn-sm btn-danger" rel="stylesheet" href="">حذف</a>
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
