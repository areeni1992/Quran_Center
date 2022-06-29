@extends('layouts.teacher.index')

@section('editReport')
    <!-- Success Alert -->
    @if(session('status'))
        <div class="alert alert-success alert-dismissible d-flex align-items-center fade show">
            <i class="bi-check-circle-fill"></i>
            <strong class="mx-2">Success!</strong> {{ session('status') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

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

    </div>
    <!-- <div class="col-md-3 bg-light">

</div> -->
    <div class="col-md-9">
        <section class="table-teacher">
            <form action="{{ url('home/teacher/reports/update/'.$report->id) }}" method="post">
                @method('PUT')
                @csrf
                <input type="hidden" value="{{ $super['id'] }}">
                <table class="table table-hover table-bordered reports-table text-center">
                    <thead class="main-color-bg text-white">
                    <tr>
                        <th class="double" scope="col" rowspan="2" colspan="2"> اسم الطالب /ة</th>
                        <th scope="col" colspan="2">بداية الحفظ</th>
                        <th scope="col" colspan="2">نهاية الحفظ</th>
                        <th class="double" scope="col" rowspan="2" colspan="2">عدد صفحات المراجعة </th>
                        <th class="double" scope="col" rowspan="2" colspan="2">اخر اختبار</th>
                        <th class="double" scope="col" rowspan="2" colspan="2">التقييم الشهري</th>
                    </tr>
                    <tr>

                        <th scope="col">السورة</th>
                        <th scope="col">الاية</th>
                        <th scope="col">السورة</th>
                        <th scope="col">الاية</th>
                    </tr>
                    </thead>
                    <tbody class="bg-light re-body">
                    @if(isset($report))
                        <tr>
                            <td class="double" colspan="2">
                                {{ $student }}
                            </td>
                            <td scope="col">
                                <input value="{{ $report->sorah_start }}" name="sorah_start" type="text" style="width: 70px;" placeholder="السورة">
                            </td>
                            <td scope="col">
                                <input value="{{ $report->ayah_start }}" name="ayah_start" type="text" style="width: 70px;" placeholder="الاية">
                            </td>

                            <td scope="col">
                                <input value="{{ $report->sorah_end }}" name="sorah_end" type="text" style="width: 70px;" placeholder="السورة">
                            </td>

                            <td scope="col">
                                <input value="{{ $report->ayah_end }}" name="ayah_end" type="text" style="width: 70px;" placeholder="الاية">
                            </td>
                            <td class="col" colspan="2">
                                <input value="{{ $report->page_revision_count }}" name="page_revision_count" style="width: 70px;" type="text" placeholder="العدد">
                            </td>
                            <td class="col" colspan="2">
                                <input value="{{ $report->latest_test }}" name="latest_test" type="date" style="width: 70px;" placeholder="test">
                            </td>
                            <td class="col" colspan="2">
                                <input value="{{ $report->monthly_rate }}" name="monthly_rate" type="number" style="width: 70px;" placeholder="التقييم">
                            </td>
                        </tr>
                    @endif
                    </tbody>

                </table>
                <button class="btn btn-success" type="submit">حفظ</button>
            </form>
        </section>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/js/toastr.js"></script>
@endsection
