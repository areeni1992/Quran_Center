@extends('layouts.teacher.index')


@section('reports')

    <div class="mb-5 inner-two">

        <div class="col-md-8">
            <div class="title text-center">
                <div class="row">
                    <div class="col-md-5 my-auto">
                        <span class="line"></span>
                    </div>
                    <div class="col-md-2">
                        <h2>التقارير</h2>
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
            <div>حلقة المعلم / {{ $super['name'] }}</div>
            <div>المرحلة / {{ $super['clas']['marahalah'] }}</div>
        </div>
        <div>
            <a class="btn btn-success" href="{{ url('home/teacher/reports/add-report') }}">اضافة تقرير</a>
        </div>
    </div>
    <!-- <div class="col-md-3 bg-light">

    </div> -->
    <div class="col-md-9">
        <section class="table-teacher">
            <table class="table table-hover table-bordered text-center">
                <thead class="main-color-bg text-white">
                <tr>
                    <th scope="col">تاريخ التقرير</th>
                    <th scope="col">اسم الطالب </th>
                    <th scope="col">التقييم الشهري</th>
                    <th scope="col">الإجراءات</th>
                </tr>
                    </thead>
                <tbody class="bg-light">
                    @foreach($reports as $row)
                        @if($row->user_id == $super->id)
                        @foreach($studentsName as $name)
                            @if($name->id == $row->student_name)
                                <tr href="">
                                    <td>{{ $row->created_at->format('Y-m-d')  }}</td>
                                    <td>{{ $name->name }}</td>
                                    <td>{{ $row->monthly_rate }}</td>
                                    <td>
                                        <a class="btn btn-warning" rel="stylesheet" href="{{ url('home/teacher/reports/edit/'. $row->id) }}">تعديل</a>
                                        <a class="btn btn-warning" rel="stylesheet" href="{{ url('home/teacher/reports/show/'. $row->id) }}">عرض</a>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                        @endif
                    @endforeach
                </tbody>
            </table>
        </section>
    </div>

@endsection
