<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Nobles Library</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/img/favicon.png')}}">

    <!-- all css here -->
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('/css/pe-icon-7-stroke.css')}}">
    <link rel="stylesheet" href="{{asset('/css/meanmenu.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/bundle.css')}}">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('/css/responsive.css')}}">
    <script src="{{asset('/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>
  
    <!-- header start -->
    <header class="res-header-sm">
        <div class="header-top-wrapper theme-bg-2">
            <div class="container">
                <div class="header-top">
                    <div class="header-info">
                        <span>Contact us - 00 221 225 123-30  or  <a href="#">info@domain.com</a></span>
                    </div>
                    <div class="book-login-register d-flex">
                        <!-- <ul>
                            <li><a href=""><i class="ti-user"></i>login</a></li>
                            <li><a href=""><i class="ti-settings"></i>register</a></li>
                        </ul> -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('nobleslogin')}}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('noblesregister')}}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
                                <li class="p-2"><a href="{{route('wishlist')}}"><i class="ti-heart"></i>wishlist</a></li>

                            </li>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom clearfix">
            <div class="container">
                <div class="header-bottom-wrapper">
                    <div class="logo-2 ptb-40">
                        <a href="{{route('index')}}">
                            <img src="{{asset('/img/logo/2.png')}}" alt="">
                        </a>
                    </div>
                    <div class="menu-style-2 book-menu menu-hover">
                        <nav>
                            <ul>
                                <li><a href="{{route('index')}}">Home</a>
                                </li>
                                <li><a href="{{route('index')}}#about">About Us</a>
                                   
                                </li>
                                <li><a href="{{route('shop')}}">Shop</a>
                                </li>
                                <li><a href="{{route('index')}}#pricing">Pricing</a>
                                </li>
                                <li><a href="{{route('index')}}#contact">contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- header cart start -->
                    <div class="header-cart-2">
                        <a class="icon-cart" href="cart">
                            <i class="ti-shopping-cart"></i>
                            
                        </a>
                         
                    </div>
                    <!-- header cart end -->
                </div>
                <div class="row">
                    <div class="mobile-menu-area d-md-block col-md-12 col-lg-12 col-12 d-lg-none d-xl-none">
                        <div class="mobile-menu">
                            <nav id="mobile-menu-active">
                                <ul class="menu-overflow">
                                    <li><a href="{{route('index')}}">Home</a>
                                    </li>
                                    <li><a href="#about">About Us</a>
                                       
                                    </li>
                                    <li><a href="{{route('shop')}}">Shop</a>
                                    </li>
                                    <li><a href="#pricing">Pricing</a>
                                    </li>
                                    <li><a href="#contact">contact</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->
    <!-- <div class="breadcrumb-area pt-205 pb-210" style="background-image: url({{asset('/img/bg/breadcrumb.jpg')}})"> -->

@yield('content')
	<!-- all js here -->
    <script src="{{asset('/js/vendor/jquery-1.12.0.min.js')}}"></script>
        <script src="{{asset('/js/popper.js')}}"></script>
        <script src="{{asset('/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('/js/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('/js/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{asset('/js/jquery.counterup.min.js')}}"></script>
        <script src="{{asset('/js/waypoints.min.js')}}"></script>
        <script src="{{asset('/js/ajax-mail.js')}}"></script>
        <script src="{{asset('/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('/js/plugins.js')}}"></script>
        <script src="{{asset('/js/main.js')}}"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
@yield('script')
</body>
</html>