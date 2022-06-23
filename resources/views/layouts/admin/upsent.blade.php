@extends('layouts.admin.index')

@section('upsent')

    <div class="mb-5 inner-two">

        <div class="col-md-8">
            <div class="title text-center">
                <div class="row">
                    <div class="col-md-5 my-auto">
                        <span class="line"></span>
                    </div>
                    <div class="col-md-2">
                        <h2>الغياب </h2>
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
            <div>المعلمين</div>
            <div>كشف الحضور</div>
        </div>
{{--        <div class="left">--}}
{{--            <div>اضافة / تعديل موعد</div>--}}
{{--        </div>--}}
    </div>
    <!-- <div class="col-md-3 bg-light">

</div> -->
    <div class="col-md-9">
        <section class="table-teacher">
            <table class="table table-hover table-bordered text-center">
                <thead class="main-color-bg text-white">
                <tr>
                    <th scope="col">اسم المعلم</th>
                    <th scope="col">اسم الحلقة</th>
                    <th scope="col">عدد أيام الحضور</th>
                    <th scope="col">إنذار</th>
                </tr>
                </thead>
                <tbody class="bg-light">
                @foreach($data as $row)
                    <tr>
                            <td>{{ $row['name'] }}</td>
                            <td>{{ $row['clas']['name'] }}</td>
                        @if(isset($row['attendance']))
                            <td> {{ $row['exiset'] }}</td>
                        @else
                            <td>0</td>
                        @endif
                        <td>
                            <div class="send">ارسل</div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </section>
    </div>


@endsection
