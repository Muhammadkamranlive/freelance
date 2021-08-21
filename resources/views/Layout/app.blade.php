<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>freelance</title>
    <script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js')}}" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/boostrap.css')}}">
    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css')}}" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('css/font.css')}}">

    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/boostrap.js')}}"></script>
    <script src="{{asset('js/pluginboostrap.js')}}">


    </script>

    <link rel="stylesheet" href="{{asset('https://unpkg.com/swiper/swiper-bundle.css')}}" />
    <link rel="stylesheet" href="{{asset('https://unpkg.com/swiper/swiper-bundle.min.css')}}" />

    <script src="{{asset('https://unpkg.com/swiper/swiper-bundle.js')}}"></script>
    <script src="{{asset('https://unpkg.com/swiper/swiper-bundle.min.js')}}"></script>
</head>
<body>
<!-- Start Navigation -->
<nav class="navbar navbar-default navbar-fixed navbar-light white bootsnav">

    <div class="container">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
            <i class="fa fa-bars"></i>
        </button>
        <!-- Start Header Navigation -->
        <div class="navbar-header">
            <a class="navbar-brand" href="/">
                <img src="{{asset('img/logo.png')}}" class="logo logo-scrolled" alt="">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav navbar-left" data-in="fadeInDown" data-out="fadeOutUp">
                <li class="active">
                    <form action="/search" method="get">
                        @csrf
                        <input type="text" name="search" class="form-control" placeholder="Find Freelancer">

                    </form>
                </li>
                 <li>
                     <a href="/">Home</a>
                 </li>
                <li >
                    <a href="/projects">Job</a>
                </li>

                <li class="dropdown megamenu-fw ">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Brows
                        <i class="fas fa-angle-down" ></i>
                    </a>
                    <ul class="dropdown-menu megamenu-content" role="menu">
                        <li>
                            <div class="row">
                                <div class="col-menu col-md-3">
                                    <h6 class="title">Main Pages</h6>
                                    <div class="content">
                                        <ul class="menu-col">
                                            <li><a href="/login">Login</a></li>
                                            <li><a href="/register">Sign Up</a></li>

                                        </ul>
                                    </div>
                                </div><!-- end col-3 -->
                                <div class="col-menu col-md-3">
                                    <h6 class="title">For buyers</h6>
                                    <div class="content">
                                        <ul class="menu-col">
                                            @auth
                                            <li><a href="/orders/{{\Illuminate\Support\Facades\Auth::user()->email}}">Your Orders</a></li>
                                                @endauth
                                                <li><a href="/createproject">Create Jobs</a></li>
                                            <li><a href="/projects">Jobs</a></li>
                                            <li><a href="/buyerprojects">Your Own Posted Jobs</a></li>
                                            <li><a href="/freelancer">Hire Freelancers</a></li>
                                        </ul>
                                    </div>
                                </div><!-- end col-3 -->
                                <div class="col-menu col-md-3">
                                    <h6 class="title">For Employer</h6>
                                    <div class="content">
                                        <ul class="menu-col">
                                            <li><a href="/cprofile">Create Profile Gig</a></li>
                                            <li><a href="/projects">Jobs</a></li>
                                            <li><a href="/freelancer">Freelancers</a></li>
                                            <li><a href="/seller">Dashboard</a></li>
                                            @auth
                                            <li><a href="/orders/{{\Illuminate\Support\Facades\Auth::user()->email}}">Won Jobs</a></li>
                                            @endauth
                                        </ul>
                                    </div>
                                </div>

                            </div><!-- end row -->
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                @guest
                    @if (Route::has('login'))
                        <li class="">
                            <a class="" href="{{ route('login') }}">{{ __('Sign In') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="">
                            <a class="signin shadow" href="{{ route('register') }}">{{ __('Sign Up') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown signin" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
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
        </div><!-- /.navbar-collapse -->
    </div>
</nav>

<!-- End Navigation -->
<!-- Slider main container -->


<!-- Main Banner Section Start -->

<div class="clearfix"></div>
<!-- Main Banner Section End -->
   @yield('register')
    @yield('login')
    @yield('content')
    @yield('freelancer')
    @yield('detailprofile')
    @yield('profile')
    @yield('project')
   @yield('clients')
   @yield('detail')
   @yield('buyer')
   @yield('projectdetailbuyer')
   @yield('orders')
 @yield('dashboard')
@yield('update')
@yield('search')

<footer class="dark-footer skin-dark-footer">


    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6 col-md-6">
                    <p class="mb-0">© 2021 Muhammad Kamran Designed By| NTU  All Rights Reserved</p>
                </div>



            </div>
        </div>
    </div>
</footer>
<script>
    var swiper = new Swiper('.swiper-container', {
        // Optional parameters

        loop: true,

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },
        autoplay: {
            delay: 2500,
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },


    });
</script>
</body>
</html>
