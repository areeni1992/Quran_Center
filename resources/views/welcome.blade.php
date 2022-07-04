<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
{{--    <link rel="stylesheet" href="{{ asset('css/all.css') }}">--}}
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fancybox.css') }}">
{{--    <link rel="stylesheet" href="{{ asset('css/main.css') }}">--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.14.0/sweetalert2.min.css" integrity="sha512-A374yR9LJTApGsMhH1Mn4e9yh0ngysmlMwt/uKPpudcFwLNDgN3E9S/ZeHcWTbyhb5bVHCtvqWey9DLXB4MmZg==" crossorigin="anonymous" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>الاعدادات</title>
</head>

<body>
        <header class="">
            <div class="containerr flex justify-between items-center px-5 w-[90%] mx-auto">
                <div class="logo w-[150px]"><img class="w-full h-full" src="{{ asset('./images/تبرع 1.png') }}" alt="logo"></div>
                <nav class="home-nav">
                    <ul class="flex gap-20 font-bold nn">
                        <li class="no hover:text-purple-500 duration-150"><a href="">الرئيسية</a></li>
                        <li class="no hover:text-purple-500 duration-150"><a href="">عن الجمعية</a></li>
                        <li class="no hover:text-purple-500 duration-150"><a href="">المشاريع</a></li>
                        <li class="no hover:text-purple-500 duration-150"><a href="">فيديوهات</a></li>
                        <li class="no hover:text-purple-500 duration-150"><a href="">اتصل بنا</a></li>
                    </ul>
                </nav>
                <div>
                    @if (Route::has('login'))
                            <div class="hidden top-0 right-0 px-6 py-4 sm:block">
                                @auth
                                    <a href="{{ url('/') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">الرئيسية</a>
                                @else
                                    <a href="{{ route('login') }}" class="text-sm text-gray-700 text-white btn btn-success">تسجيل الدخول</a>
                                @endauth
                            </div>
                        @endif
                </div>

            </div>
        </header>
        <main>
            <div class="w-[90%] mx-auto h-[576px] bg-purple-400 rounded-3xl mt-5 relative flex flex-col p-10 text-white  items-start">
                <h1 class="font-bold text-5xl mt-[100px]">مركزالتقوى</h1>
                <h1 class="font-bold text-5xl mt-[50px]">لتعليم القرآن الكريم والسنة</h1>

                <div class="image w-[500px] absolute bottom-[50px] left-[20px]"><img src="./images/WhatsApp_Image_2022-06-25_at_8.05.18_PM-removebg-preview.png" alt="not found"></div>
            </div>
        </main>

        <section class="my-[50px]">
            <div class="w-[90%] mx-auto grid grid-cols-2 gap-[50px]">

                <div class="right">
                    <div>
                        <h1 class="mb-5 font-semibold">Lorem ipsum dolor sit amet.</h1>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto, cum blanditiis labore mollitia quis cumque beatae animi suscipit voluptatem eius praesentium neque? Sapiente facere voluptate similique eveniet veniam alias adipisci, ratione temporibus molestias aliquam at omnis velit odio molestiae tenetur distinctio quam. Culpa harum perferendis voluptates at sunt repudiandae exercitationem.</p>
                    </div>
                    <div class="mt-16">
                        <h1 class="mb-5 font-semibold">Lorem ipsum dolor sit amet.</h1>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto, cum blanditiis labore mollitia quis cumque beatae animi suscipit voluptatem eius praesentium neque? Sapiente facere voluptate similique eveniet veniam alias adipisci, ratione temporibus molestias aliquam at omnis velit odio molestiae tenetur distinctio quam. Culpa harum perferendis voluptates at sunt repudiandae exercitationem.</p>
                    </div>
                </div>
                <div class="relative self-center object-cover h-full w-[80%] mx-auto rounded-lg overflow-hidden">
                    <img class="w-full h-full" src="{{ asset('images/asd.jpeg') }}" alt="not found">
                    <div class="bg-white absolute text-gray-500 w-[50%] bottom-0 right-0 py-3 text-sm">
                        <h4 class="font-bold mb-2 text-black text-lg">مركزالتقوى لتحفيظ القران</h4>
                        <p class="mb-4">محافظة الوسطى</p>
                        <p class="mb-2">تحفيظ القرآن الكريم</p>
                        <p>مركز التقوى</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="my-[50px]">
            <div class="w-[80%] flex items-center gap-[5%] mx-auto">
                <div class="h-[3px] bg-purple-400 flex-grow rounded"></div>
                <h1 class="text-purple-400 text-2xl font-bold">أنجازات مركز التقوى</h1>
                <div class="h-[3px] bg-purple-400 flex-grow rounded"></div>
            </div>
            <div class="cards w-[70%] mx-auto grid grid-cols-4 gap-[10px] mt-10">
                <div class="relative h-[300px] rounded-lg overflow-hidden w-[80%] m-auto">
                    <img class="object-cover w-full h-full" src="{{ asset('./images/test.jpg') }}" alt="">
                    <div class="absolute top-3 left-[50%] -translate-x-[50%] font-bold text-center text-lg">
                        <p>الدور النسائية</p>
                        <p>444</p>
                    </div>
                </div>
                <div class="relative h-[300px] rounded-lg overflow-hidden w-[80%] m-auto">
                    <img class="object-cover w-full h-full" src="{{ asset('./images/test.jpg') }}" alt="">
                    <div class="absolute top-3 left-[50%] -translate-x-[50%] font-bold text-center text-lg">
                        <p>الدور النسائية</p>
                        <p>444</p>
                    </div>
                </div>
                <div class="relative h-[300px] rounded-lg overflow-hidden w-[80%] m-auto">
                    <img class="object-cover w-full h-full" src="{{ asset('./images/test.jpg') }}" alt="">
                    <div class="absolute top-3 left-[50%] -translate-x-[50%] font-bold text-center text-lg">
                        <p>الدور النسائية</p>
                        <p>444</p>
                    </div>
                </div>
                <div class="relative h-[300px] rounded-lg overflow-hidden w-[80%] m-auto">
                    <img class="object-cover w-full h-full" src="{{ asset('./images/test.jpg') }}" alt="">
                    <div class="absolute top-3 left-[50%] -translate-x-[50%] font-bold text-center text-lg">
                        <p>الدور النسائية</p>
                        <p>444</p>
                    </div>
                </div>
            </div>
            <div class="w-[70%] mx-auto">
                <div class="my-[30px] text-purple-500 flex gap-2 items-center"><div class="w-[100px] h-[1px] bg-purple-400"></div> <p>اهم المقالات</p></div>
                <div class="  grid grid-cols-3 gap-[15px] mt-10">
                    <div>
                        <div class="image rounded-md object-cover h-[200px] overflow-hidden"><img class="w-full h-full" src="{{ asset('./images/test.jpg') }}" alt=""></div>
                        <h1 class="text-purple-500 mt-5">اهم المقالات</h1>
                        <p class="mt-2 text-sm">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit, quidem?</p>
                    </div>
                    <div>
                        <div class="image rounded-md object-cover h-[200px] overflow-hidden"><img class="w-full h-full" src="{{ asset('./images/test.jpg') }}" alt=""></div>
                        <h1 class="text-purple-500 mt-5">اهم المقالات</h1>
                        <p class="mt-2 text-sm">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit, quidem?</p>
                    </div>
                    <div>
                        <div class="image rounded-md object-cover h-[200px] overflow-hidden"><img class="w-full h-full" src="{{ asset('./images/test.jpg') }}" alt=""></div>
                        <h1 class="text-purple-500 mt-5">اهم المقالات</h1>
                        <p class="mt-2 text-sm">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit, quidem?</p>
                    </div>
                </div>
            </div>
        </section>
        <div class="w-full mt-[100px] h-[3px] bg-green-600"></div>
        <footer class="container w-[80%] mx-auto  text-green-600">
            <div class="row mt-5 flex-nowrap">
                <div class="col-md-9">
                    <div class="item-text-footer ">
                        <h2 class="text-black text-4xl">مركزالتقوى لتعليم القران الكريم</h2>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-3">
                        <span class="text-black"><i class="fas fa-map-marker-alt ml-1
                                main-color text-green-600"></i>غزة فلسطين</span>
                        </div>
                        <div class="col-md-3">
                            <span class="text-black"><i class="text-green-600 fas fa-phone-alt ml-1 main-color"></i>0592421537</span>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-1 col-1 pl-0">
                            <a href=""> <span><i class="fas fa-phone-alt
                                    main-color"></i></span></a>
                        </div>
                        <div class="col-md-1 col-1 p-0">
                            <a href=""> <span><i class="fab fa-instagram
                                    main-color"></i></span></a>
                        </div>
                        <div class="col-md-1 col-1 p-0">
                            <a href=""> <span><i class="fab fa-pinterest
                                    main-color"></i></span></a>
                        </div>
                        <div class="col-md-1 col-1 p-0">
                            <a href=""> <span><i class="fab fa-google-plus-g
                                    main-color"></i></span></a>
                        </div>
                        <div class="col-md-1 col-1 p-0">
                            <a href=""> <span><i class="fab fa-youtube
                                    main-color"></i></span></a>
                        </div>
                        <div class="col-md-1 col-1 p-0">
                            <a href=""> <span><i class="fab fa-linkedin
                                    main-color"></i></span></a>
                        </div>
                        <div class="col-md-1 col-1 p-0">
                            <a href=""> <span><i class="fab fa-twitter
                                    main-color"></i></span></a>
                        </div>
                        <div class="col-md-1 col-1 p-0">
                            <a href=""> <span><i class="fab fa-facebook-square
                                    main-color"></i></span></a>
                        </div>

                        <div class="col-md-4 col-12 pl-0">
                            <span class="text-black font-semibold">مركزالتقوى لتعليم القران الكريم</span>
                        </div>
                    </div>
                </div>
                <div class=" mt--2">
                    <div class="img-footer" style="display: flex;
                    align-items: end;
                    justify-content: end;">
                        <img class="w-75" src="{{ asset('./images/تبرع 1.png') }}" alt="">
                    </div>
                </div>
            </div>
            <hr>
            <!-- <p class=" text-center"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquid, tenetur.</p> -->
        </footer>
    </body>
</html>
