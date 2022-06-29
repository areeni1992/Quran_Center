@extends('layouts.teacher.index')

@section('showReport')

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
                                {{ $report->sorah_start }}
                            </td>
                            <td scope="col">
                                {{ $report->ayah_start }}
                            </td>

                            <td scope="col">
                                {{ $report->sorah_end }}
                            </td>

                            <td scope="col">
                                {{ $report->ayah_end }}
                            </td>
                            <td class="col" colspan="2">
                                {{ $report->page_revision_count }}
                            </td>
                            <td class="col" colspan="2">
                                {{ $report->latest_test }}
                            </td>
                            <td class="col" colspan="2">
                                {{ $report->monthly_rate }}
                            </td>
                        </tr>
                    @endif
                    </tbody>
                </table>
        </section>
    </div>

@endsection
