@include('layouts.app')
@include('sweetalert::alert')
<main class=" container parent my-5">

    <div class="navi">
        <div class="user">
            <div class="image">
                <img src="{{ asset('images/user-imag22.png') }}" alt="not found" href="./index.html">
            </div>
            <div class="hello">
                اهلا ..{{ $userAuth->name }}
            </div>
        </div>

        <nav>
            <ul>
                <li class="off">
                    <div><img src="{{ asset('./images/image 26.png') }}" alt="not found"></div>
                    <a href="{{ url('home/admin/classes') }}">الحلقات</a>
                </li>
                <li class="off">
                    <div><img src="{{ asset('./images/image 26.png') }}" alt="not found"></div>
                    <a href="{{ url('home/admin/teachers') }}">المعلمين</a>
                </li>
                <li class="off">
                    <div><img src="{{ asset('./images/image 26.png') }}" alt="not found"></div>
                    <a href="#">التقارير</a>
                </li>
                <li class="off">
                    <div><img src="{{ asset('./images/image 26.png') }}" alt="not found"></div>
                    <a href="./giab.html">الغياب</a>
                </li>
                <li class="off">
                    <div><img src="{{ asset('./images/image 26.png') }}" alt="not found"></div>
                    <a href="{{ url('home/admin/allstudents') }}">الطلاب</a>
                </li>
                <li class="off">
                    <div><img src="{{ asset('./images/image 26.png') }}" alt="not found"></div>
                    <a href="./tests.html">الاختبارات</a>
                </li>
                <li class="off">
                    <div><img src="{{ asset('./images/image 26.png') }}" alt="not found"></div>
                    <a href="#">تقييم الحلقات</a>
                </li>
                @if($userAuth->user_type_id == 1)
                    <li class="off">
                        <div><img src="{{ asset('./images/image 26.png') }}" alt="not found"></div>
                        <a href="{{ url('home/admin/settings') }}">اعدادات</a>
                    </li>
                @endif
            </ul>
        </nav>
    </div>

    <div class=" inner">
        @if( url('home/admin/classes') )
            @yield('classes')
        @endif
        @if(url('home/admin/classes/edit/{id}'))
                @yield('editClass')
        @endif
        @if(url('home/admin/teachers'))
            @yield('teachers')
        @endif
        @if(url('home/admin/teachers/edit/{id}'))
            @yield('editTeacher')
        @endif
        @if(url('home/admin/allstudents'))
            @yield('allStudents')
        @endif
        @if( url('home/admin/classes/show/{id}') )
            @yield('singleClass')
        @endif
        @if(url('home/admin/settings'))
            @yield('settings')
        @endif
        @if( url('home/admin/settings/addstudent') )
            @yield('addStudent')
        @endif
        @if( url('home/admin/settings/editStudent') )
            @yield('editStudent')
        @endif
        @if( url('home/admin/settings/addhalaqah') )
            @yield('addHalaqah')
        @endif
        @if( url('home/admin/settings/addteacher') )
            @yield('addTeacher')
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
