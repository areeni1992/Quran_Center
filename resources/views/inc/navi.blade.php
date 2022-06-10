@extends('layouts.admin.index')

@section('navi')
    <main class=" container parent my-5">
        <div class="navi">
            <div class="user">
                <div class="image">
                    <img src="{{ asset('images/user-imag22.png') }}" alt="not found" href="./index.html">
                </div>
                <div class="hello">
                    اهلا ..{{ $user->name }}
                </div>
            </div>

            <nav>
                <ul>
                    <li>
                        <div><img src="{{ asset('./images/image 26.png') }}" alt="not found"></div>
                        <a href="./classes.html">الحلقات</a>
                    </li>
                    <li class="active">
                        <div><img src="{{ asset('./images/image 26.png') }}" alt="not found"></div>
                        <a href="./index.html">المعلمين</a>
                    </li>
                    <li>
                        <div><img src="{{ asset('./images/image 26.png') }}" alt="not found"></div>
                        <a href="#">التقارير</a>
                    </li>
                    <li>
                        <div><img src="{{ asset('./images/image 26.png') }}" alt="not found"></div>
                        <a href="./giab.html">الغياب</a>
                    </li>
                    <li class="">
                        <div><img src="{{ asset('./images/image 26.png') }}" alt="not found"></div>
                        <a href="studand.html">الطلاب</a>
                    </li>
                    <li>
                        <div><img src="{{ asset('./images/image 26.png') }}" alt="not found"></div>
                        <a href="./tests.html">الاختبارات</a>
                    </li>
                    <li>
                        <div><img src="{{ asset('./images/image 26.png') }}" alt="not found"></div>
                        <a href="#">تقييم الحلقات</a>
                    </li>
                    <li>
                        <div><img src="{{ asset('./images/image 26.png') }}" alt="not found"></div>
                        <a href="">اعدادات</a>
                    </li>

                </ul>
            </nav>
        </div>

@endsection
