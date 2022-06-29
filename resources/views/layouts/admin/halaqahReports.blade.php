@extends('layouts.admin.index')

@section('halaqahReports')


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
    <div class="under-title">
        <div class="right">
            <div>حلقة المعلم / هاشم هاني</div>
            <div>المرحلة / جامعي</div>
        </div>

    </div>
    <!-- <div class="col-md-3 bg-light">

</div> -->
    <div class="col-md-9">
        <section class="table-teacher">
            <input type="hidden" value="2">
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
                @foreach($reports as $row)
                    @foreach($students as $std)
                        @if($std['id'] == $row['student_name'])
                        <tr>
                            <td class="double" colspan="2">
                                {{ $std['name'] }}
                            </td>
                            <td scope="col">
                                {{ $row['sorah_start'] }}
                            </td>
                            <td scope="col">
                                {{ $row['ayah_start'] }}
                            </td>

                            <td scope="col">
                                {{ $row['sorah_end'] }}
                            </td>
                            <td scope="col">
                                {{ $row['ayah_end'] }}
                            </td>
                            <td class="col" colspan="2">
                                {{ $row['page_revision_count'] }}
                            </td>
                            <td class="col" colspan="2">
                                {{ $row['latest_test'] }}
                            </td>
                            <td class="col" colspan="2">
                                {{ $row['monthly_rate'] }}
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
