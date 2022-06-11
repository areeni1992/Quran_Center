@extends('layouts.admin.index')

@section('singleClass')
        <div class="mb-5 inner-two">

            <div class="col-md-8">
                <div class="title text-center">
                    <div class="row">
                        <div class="col-md-5 my-auto">
                            <span class="line"></span>
                        </div>
                        <div class="col-md-2">
                            <h2>الطلاب </h2>
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

                <div>حلقة المعلم / {{ $teacher->name }}</div>

                <div>المرحلة / {{ $singleClass->marahalah }}</div>

            </div>
{{--            <div class="left">--}}
{{--                <div>اضافة / تعديل موعد</div>--}}
{{--            </div>--}}
        </div>
        <div class="col-md-10">
            <section class="table-teacher">
                <table class="table table-hover table-bordered text-center">
                    <thead class="main-color-bg text-white">
                    <tr>
                        <th scope="col">اسم الطالب</th>
                        <th scope="col">عدد الأيات </th>
                        <th scope="col">عدد الصفحات</th>
                        <th scope="col">عدد أيات المراجعة</th>
                        <th scope="col">أخر إختبار</th>
                        <th scope="col">اسم الجزء</th>
                    </tr>
                    </thead>
                    <tbody class="bg-light">
                    @foreach($students as $std)
                        <tr>
                            <td>{{ $std->name }}</td>
                            <td>12</td>
                            <td>الاحقاف</td>
                            <td>12/5</td>
                            <td>إنذار</td>
                            <td>النبأ</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </section>
        </div>
@endsection
