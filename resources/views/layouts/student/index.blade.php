<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="copyright" content="" />


    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap-rtl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fancybox.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.14.0/sweetalert2.min.css" integrity="sha512-A374yR9LJTApGsMhH1Mn4e9yh0ngysmlMwt/uKPpudcFwLNDgN3E9S/ZeHcWTbyhb5bVHCtvqWey9DLXB4MmZg==" crossorigin="anonymous" />

    <title>الاعدادات</title>
</head>

<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class=" container">
            <a class="navbar-brand" href="{{ url('/') }}"><img class=" w-20" src="{{ asset('images/centerLogo.png') }}" alt="">مركز التقوى لتعليم
                القرآن الكريم </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end p-1" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item py-0" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>

                </ul>
            </div>

        </div>

    </nav>
</header>
<main class="container parent my-5">
    <div class="navi">
        <div class="user">
            <div class="image">
                <img src="{{ asset('./images/user-imag22.png') }}" alt="not found">
            </div>
            <div class="hello">
                أهلاً   {{ auth()->user()->name }}
            </div>
        </div>

        <nav>
            <ul>

{{--                <li>--}}
{{--                    <div><img src="{{ asset('/images/image 26.png') }}" alt="not--}}
{{--                                    found"></div>--}}
{{--                    <a href="./tests.html">الاختبارات</a>--}}
{{--                </li>--}}

                <li class="active">
                    <div><img src="{{ asset('/images/image 26.png') }}" alt="not
                                    found"></div>
                    <a href="./matloob.html">متابعة الحفظ</a>
                </li>

            </ul>
        </nav>
    </div>
    <div class="inner">
        <div class="mb-5 inner-two">

            <div class="col-md-8">
                <div class="title text-center">
                    <div class="row">
                        <div class="col-md-5 my-auto">
                            <span class="line"></span>
                        </div>
                        <div class="col-md-2">
                            <h2>الرئيسية</h2>
                        </div>
                        <div class="col-md-5 my-auto pr-5">
                            <span class="line"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab">
            @if(isset($ayats))
                <table class="m-auto mb-3 text-center">
                    <tbody>
                    <tr class="">
                        <td>اسم الطالب/ة</td>
                        <td>اسم الحلقة</td>
                        <td>عدد ايات الحفظ</td>
                        <td>عدد صفحات الحفظ</td>
                        <td>عدد ايات المراجعة</td>
                        <td>أخر اختبار</td>
                    </tr>
                    @if(isset($userData))
                        @foreach($userData['tasks'] as $data)
                        <tr>
                            <td>{{ auth()->user()->name }}</td>
                            <td>{{ $userData['clas']['name'] }}</td>
                            <td>test</td>
                            <td>عدد صفحات الحفظ</td>
                            <td>عدد ايات المراجعة</td>
                            <td>{{ $data['latest_task'] }}</td>
                        </tr>
                        @endforeach
                    @endif

                    </tbody>
                </table>
                <br>
                <table class="text-center" style="font-size: 20px;">
                    <tbody>
                    <tr>
                        <td>الحفظ المطلوب: {{ $surahName->title }}</td>
                        <td>بسم الله الرحمن الرحيم</td>
                    </tr>

                    <tr>
                        <td>{{ $ayats->ayat }}</td>
                    </tr>
                    </tbody></table>
            @endif
        </div>
    </div>




</main>

<div class="line2"></div>
<footer class="container">
    <div class="row mt-5">
        <div class="col-md-8 ">
            <div class="item-text-footer">
                <h2>مركزالتقوى لتعليم القران الكريم</h2>
            </div>
            <div class="row mt-4">
                <div class="col-md-3">
                    <span><i class="fas fa-map-marker-alt ml-1 main-color"></i>غزة فلسطين</span>
                </div>
                <div class="col-md-3">
                    <span><i class="fas fa-phone-alt ml-1 main-color"></i>0592421537</span>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-1 col-1 pl-0">
                    <a href=""> <span><i class="fas fa-phone-alt main-color"></i></span></a>
                </div>
                <div class="col-md-1 col-1 p-0">
                    <a href=""> <span><i class="fab fa-instagram main-color"></i></span></a>
                </div>
                <div class="col-md-1 col-1 p-0">
                    <a href=""> <span><i class="fab fa-pinterest main-color"></i></span></a>
                </div>
                <div class="col-md-1 col-1 p-0">
                    <a href=""> <span><i class="fab fa-google-plus-g main-color"></i></span></a>
                </div>
                <div class="col-md-1 col-1 p-0">
                    <a href=""> <span><i class="fab fa-youtube main-color"></i></span></a>
                </div>
                <div class="col-md-1 col-1 p-0">
                    <a href=""> <span><i class="fab fa-linkedin main-color"></i></span></a>
                </div>
                <div class="col-md-1 col-1 p-0">
                    <a href=""> <span><i class="fab fa-twitter main-color"></i></span></a>
                </div>
                <div class="col-md-1 col-1 p-0">
                    <a href=""> <span><i class="fab fa-facebook-square main-color"></i></span></a>
                </div>

                <div class="col-md-4 col-12  pl-0">
                    <span>مركزالتقوى لتعليم القران الكريم</span>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt--2">
            <div class="img-footer" style="display: flex;
                align-items: end;
                justify-content: end;">
                <img class=" w-75" src="{{ asset('./images/centerLogo.png') }}" alt="">
            </div>
        </div>
    </div>
    <hr>
    <!-- <p class=" text-center"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquid, tenetur.</p> -->
</footer>

<script src="{{ asset('js/anime.min.js') }}"></script>
<script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/wow.min.js') }}"></script>
<script src="{{ asset('js/fancybox.umd.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/scrollreveal.min.js') }}"></script>
<script src="{{ asset('js/scrollIt.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('js/smtp.js') }}"></script>
<script>
    jQuery(function ($) {
        $("ul a")
            .click(function(e) {
                var link = $(this);

                var item = link.parent("li");

                if (item.hasClass("active")) {
                    item.removeClass("active").children("a").removeClass("active");
                } else {
                    item.addClass("active").children("a").addClass("active");
                }

                if (item.children("ul").length > 0) {
                    var href = link.attr("href");
                    link.attr("href", "#");
                    setTimeout(function () {
                        link.attr("href", href);
                    }, 300);
                    e.preventDefault();
                }
            })
            .each(function() {
                var link = $(this);
                if (link.get(0).href === location.href) {
                    link.addClass("active").parents("li").addClass("active");
                    return false;
                }
            });
    });
</script>

</body>

</html>
