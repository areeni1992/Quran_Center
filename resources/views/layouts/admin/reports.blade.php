@extends('layouts.admin.index')

@section('reports')
    <div class=" inner">
        <div class="mb-5 inner-two">

            <div class="col-md-8">
                <div class="title text-center">
                    <div class="row">
                        <div class="col-md-5 my-auto">
                            <span class="line"></span>
                        </div>
                        <div class="col-md-2">
                            <h2 class="">تقارير الحلقات </h2>
                        </div>
                        <div class="col-md-5 my-auto pr-5">
                            <span class="line"></span>
                        </div>
                    </div>
                </div>
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
                    @if(isset($teachers))
                        @foreach($teachers as  $row)
                            @if(isset($row['reports']) && !empty($row['reports']))
                            <tr>
                                <td>{{ $row['name'] }}</td>
                                <td>{{ $row['clas']['name'] }}</td>
                                <td>{{ $row['phone'] }}</td>
                                <td>{{ $row['clas']['marahalah'] }}</td>
                                <td>
                                    <a class="btn btn-sm btn-info left text-white" rel="stylesheet" href="{{ url('home/admin/reports/halaqahReports/'.$row['clas']['id']) }}">عرض تقارير الحلقة</a>
                                </td>
                            </tr>
                            @endif
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </section>
        </div>

    </div>
@endsection
