@extends('layouts.admin.index')
@include('sweetalert::alert')
@section('markTests')

        <div class="mb-5 inner-two">

            <div class="col-md-8">
                <div class="title text-center">
                    <div class="row">
                        <div class="col-md-5 my-auto">
                            <span class="line"></span>
                        </div>
                        <div class="col-md-2">
                            <h2>الاختبارات</h2>
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
                <div>اضافة / تعديل موعد</div>
            </div>
        </div>
        <!-- <div class="col-md-3 bg-light">

    </div> -->
        <div class="col-md-9">
            <section class="table-teacher">

                    <form action="{{ url('home/admin/tests') }}" method="post">
                    @csrf
                    @method('POST')

                    <table class="table table-hover table-bordered text-center" style="margin-left: 10cm;">
                    <thead class="main-color-bg text-white">
                    <tr>
                        <th scope="col">اسم الطالب</th>
                        <th scope="col" class="test-input align-middle text-white">اسم الاختبار</th>
                        <th scope="col" class="test-input align-middle text-white">تاريخ الاختبار</th>
                        <th scope="col" class="test-input align-middle text-white">رقم الجزء</th>
                        <th scope="col" class="test-input align-middle text-white">عدد الاجزاء التي أتم حفظها</th>
                        <th scope="col" class="test-input align-middle text-white">العلامة</th>
                    </tr>
                    </thead>
                        <tbody class="bg-light">
                                <tr>
                                    <td>
                                        <select name="std_ids" id="std_ids">
                                            @foreach($allStd as $std)
                                                <option value="{{ $std->id }}">
                                                            {{ $std->name }}
                                                </option>
                                            @endforeach

                                        </select>
                                    </td>
                                    <td><input name="names" type="text"></td>
                                    <td><input name="task_times" type="date"></td>
                                    <td><input name="joz_nums" type="text"></td>
                                    <td><input name="joz_counts" type="text"></td>
                                    <td><input name="marks" class="test-input" type="number"></td>
                                </tr>
                        </tbody>
                    </table>
                    <button class="btn btn-lg btn-toolbar text-center btn-success mx-auto px-5 py-0" type="submit">حفظ</button>
                </form>

            </section>
        </div>
@endsection
