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
        @if(session('status'))
            <div class="alert alert-success alert-dismissible d-flex align-items-center fade show">
                <i class="bi-check-circle-fill"></i>
                <strong class="mx-2">Success!</strong> {{ session('status') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif
        <div class="col-md-9">
            <h3 class="text-danger font-weight-bold my-3 text-center border border-1 border-secondary rounded-1 p-1"> <span class="text-secondary">   تاريخ اليوم / </span>{{ date("Y/m/d h:i:sa") }} </h3>
            <section class="table-teacher">
                <form action="{{ url('home/admin/teachers/attendance') }}" method="post" class="text-center">
                    @csrf
                    <table class="table table-hover table-bordered text-center">
                    <thead class="main-color-bg text-white">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">اسم المعلم</th>
                        <th scope="col">اسم الحلقة</th>
                        <th scope="col">عدد الطلاب</th>
                        <th scope="col">رقم الجوال</th>
                        <th scope="col">عمليات</th>
                        <th scope="col">الحضور</th>
                    </tr>
                    </thead>
                        @csrf
                        <tbody class="bg-light">
                            <?php $i=1; ?>
                            @foreach($data as $row)
                                @foreach($row['user'] as $user)
                                    @if($user['user_type_id'] == 2)
                                        <tr id="{{ $user['id'] }}">
                                            <td>{{ $i++ }} -</td>
                                            <td> {{ $user['name'] }}</td>
                                            <td>{{ $row['name'] }}</td>
                                            <td>{{ $row['students'] }}</td>
                                            <td> {{ $user['phone'] }} </td>
                                            <td>
                                                <a class="btn btn-sm btn-success" rel="stylesheet" href="{{ url('home/admin/teachers/edit/'.$user['id']) }}">تعديل</a>
                                           </td>
                                            <td>
                                                @if(isset($user['attendance']))
                                                    <input type="checkbox" name="attandance[]" value="{{ $user['id'] }}"
                                                     @if($user['attendance']['attendance_date'] == date('Y-m-d') && $user['attendance']['attendance_status'] == 1 && $user['attendance']['user_id'] == $user['id'])
                                                        disabled checked
                                                     @endif >
                                                @else
                                                        <input type="checkbox" name="attandance[]" value="{{ $user['id'] }}"
                                                @endif
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endforeach
                        </tbody>
                </table>
                    <button class="btn btn-success px-5" type="submit">حفظ</button>
                </form>
            </section>
        </div>
@endsection
