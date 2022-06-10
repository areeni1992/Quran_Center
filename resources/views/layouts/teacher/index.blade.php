
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
    <link rel="stylesheet" href="{{ asset('css/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}css/animate.css">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fancybox.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <title>الطلاب</title>
</head>

<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class=" container">
            <a class="navbar-brand" href="#"><img class=" w-20" src="{{ asset('./images/centerLogo.png') }}" alt="">مركز التقوى لتعليم
                القرآن الكريم </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item bg-icon">
                        <a class="nav-link" href="#"><i class="fas fa-cog"></i></a>
                    </li>
                    <li class="nav-item bg-icon mr-3">
                        <a class="nav-link" href="./form-login.html"><i class="fas fa-user-alt"></i></a>
                    </li>

                </ul>
            </div>
        </div>

    </nav>
</header>
<main class=" container parent my-5">
    <div class="navi">
        <div class="user">
            <div class="image">
                <img src="{{ asset('./images/user-imag22.png') }}" alt="not found">
            </div>
            <div class="hello">
                أهلاً  {{ $super->name }} ...
            </div>
        </div>

        <nav>
            <ul>
                <li class="active">
                    <div><img src="{{ asset('./images/image 26.png') }}" alt="not found"></div>
                    <a href="{{ url('home/teacher/students') }}">الطلاب</a>
                </li>
                <li>
                    <div><img src="{{ asset('./images/image 26.png') }}" alt="not found"></div>
                    <a href="tests.html">الاختبارات</a>
                </li>
                <li>
                    <div><img src="{{ asset('./images/image 26.png') }}" alt="not found"></div>
                    <a href="#">التقارير</a>
                </li>
            </ul>
        </nav>
    </div>
    <div class=" inner">
        @if(url('home/teacher/students'))
            @yield('students')
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
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('js/smtp.js') }}"></script>
</body>

</html>
