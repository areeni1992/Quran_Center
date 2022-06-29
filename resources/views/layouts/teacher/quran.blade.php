<!doctype html>
<html lang="en">

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
        <div class="container">
            <a class="navbar-brand" href="#"><img class="w-20" src="{{ asset('images/تبرع 1.png') }}" alt="">مركز التقوى لتعليم القرآن الكريم </a>
            <button class="navbar-toggler" type="button"
                    data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item bg-icon">
                        <a class="nav-link" href="./settings.html"><i class="fas fa-cog"></i></a>
                    </li>
                    <li class="nav-item bg-icon mr-3">
                        <a class="nav-link" href="./form-login.html"><i class="fas fa-user-alt"></i></a>
                    </li>

                </ul>
            </div>
        </div>

    </nav>
</header>
<div class="container">
    <div class="row">
        <a href="{{ url('home/teacher') }}" class="btn btn-success float-left mr-auto"> الرجوع للخلف </a>
    </div>
</div>
<main class="container parent my-5">

    <nav class="nav1">
        <div class="cont">
            <div class="image">
                <img src="{{ asset('images/holy-quran.jpg') }}" alt="">
            </div>
            <p>مركز  التقوى</p>
        </div>
        <div class="buttons">
            <button>الأجزاء</button>
            <button>السور</button>
            <button>الاية</button>
        </div>
        <div class="linkss">
            @if(isset($surahs))
            <form action="" method="get">
                    @csrf
                    <ul class="quran-menu">
                        @foreach($surahs as $surah)
                            <li><a href="{{ url('home/teacher/quran/surahs/ayahs/'.$surah['id']) }}"> {{ $surah['title'] }}</a></li>
                        @endforeach
                    </ul>
                </form>
            @else

            <form action="" method="get">
                @csrf
                <ul class="quran-menu">
                    @for($i = 1; $i <= 30; $i++)
                        <li style="color: #0A7237; background: lightslategray"><a href="{{ url('home/teacher/quran/surahs/'.$i) }}" style="color: #ffffff"> الجزء{{ $i }}</a></li>
                    @endfor
                </ul>
            </form>
                @endif
        </div>
    </nav>
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
        <div style="height: 750px; overflow-y: scroll;" class="tab mx-2 container">
            <table class="text-center">
                @if(isset($ayahs))
                    <tr style="background-color: #224926;">
                            <td style="width: 55%; justify-content: center !important;">بسم الله الرحمن الرحيم</td>
                        @foreach($ayahs as $row)
                            <td style="width: 95%; justify-content: center !important; font-family: initial; font-size: 19px">
                                {{  $row->content  }}
                                <label for="ayahs">
                                    <span class="text-danger"> ({{ $row->number }}) </span>
                                    <span class="check"><input name="ayahs[{{ $row->number }}]" id="ayahs" type="checkbox"></span>
                                </label>
                            </td>
                         @endforeach
                    </tr>
                @endif

            </table>

        </div>
        @if(isset($students))
        <div class="container">
            <div class="row d-flex">
                <table class="text-center col-md-3 align-content-center justify-content-center">
                    <tr class="">
                        <td>إختر الطالب\ة</td>
                    </tr>
                    <tr>
                        <td>
                            <select name="students" id="students">
                                @foreach($students as $row)
                                    <option value="{{ $row->id }}"> {{ $row->name }} </option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                </table>
                <button class="mx-auto btn btn-success col-md-2 h-25 mt-5">إرسال المطلوب</button>
            </div>
        </div>
        @endif


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
