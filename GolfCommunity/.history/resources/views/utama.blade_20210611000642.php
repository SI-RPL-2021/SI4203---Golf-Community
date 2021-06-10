<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('judul_halaman')</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('images/logo_small.png') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/vendor/vendor.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/plugins/plugins.min.css') }}">
    <style>
        .avatar {
            vertical-align: middle;
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }
        .right {
            text-align: right;
            float: right;
        }
        .forum {
            border: 0px solid black;
        }
        .color {
            border: 1px solid white;
            padding: 15px;
            background: lightgray;
            background-clip: border-box;
        }
    </style>

    <link rel="stylesheet" href="{{ URL::asset('css/style.min.css') }}">
    <link href="{{ URL::asset('css/custom.css') }}" rel="stylesheet">
</head>
<body>
    @if ($message = Session::get('success'))
	  <div class="alert alert-success alert-block">
		<button type="button" class="btn-close" aria-label="Close" data-dismiss="alert"></button>
		  <strong>{{ $message }}</strong>
	  </div>
	@endif

	@if ($message = Session::get('error'))
	  <div class="alert alert-danger alert-block">
	    <button type="button" class="btn-close" aria-label="Close" data-dismiss="alert"></button>
		<strong>{{ $message }}</strong>
	  </div>
	@endif

	@if ($message = Session::get('warning'))
	  <div class="alert alert-warning alert-block">
		<button type="button" class="btn-close" aria-label="Close" data-dismiss="alert"></button>
		<strong>{{ $message }}</strong>
	</div>
	@endif

	@if ($message = Session::get('info'))
	  <div class="alert alert-info alert-block">
	    <button type="button" class="btn-close" aria-label="Close" data-dismiss="alert"></button>
		<strong>{{ $message }}</strong>
	  </div>
	@endif

	@if ($errors->any())
	  <div class="alert alert-danger">
		<button type="button" class="btn-close" aria-label="Close" data-dismiss="alert"></button>
		Please check the form below for errors
	</div>
	@endif
    <div class="main-wrapper">

        <header class="main-header_area position-relative">
            <div class="header-top py-6 py-lg-3" data-bg-color="#eaf5ff">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="offset-xl-2 offset-lg-3 col-xl-4 col-lg-5 d-none d-lg-block">
                            <div class="header-top-left ml-8">
                                Komunitas golf terbesar di Indonesia!
                            </div>
                        </div>
                        <div class="col-sm-6 d-block d-lg-none">
                            <div class="header-logo d-flex">
                                <a href="{{URL::to('/')}}">
                                    <img src="{{ URL::asset('images/logo/dark.png') }}" alt="Header Logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-xl-5 col-lg-4 col-sm-6">
                            <div class="header-top-right">
                                <ul class="hassub-item">
                                    <li class="login-info">
                                        @if (Route::has('login'))
                                            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                                @auth
                                                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">{{ Auth::user()->name }}</a>
                                                @else
                                                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a> |

                                                    @if (Route::has('register'))
                                                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                                                    @endif
                                                @endauth
                                            </div>
                                        @endif
                                    </li>
                                    <li class="search-wrap hassub d-block d-lg-none">
                                        <a href="#" class="search-btn">
                                            <i class="fa fa-search"></i>
                                        </a>
                                        <ul class="hassub-body search-body">
                                            <li>
                                                <form class="search-form" action="#">
                                                    <div class="form-field">
                                                        <input class="input-field" type="search" placeholder="Search">
                                                    </div>
                                                    <div class="form-btn_wrap">
                                                        <button type="submit" value="submit" id="submit" class="btn btn-secondary btn-primary-hover rounded-0" name="submit">
                                                            <i class="fa fa-search"></i>
                                                        </button>
                                                    </div>
                                                </form>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="mobile-menu_wrap d-block d-lg-none">
                                        <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn pl-0">
                                            <i class="fa fa-navicon"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-header header-sticky" data-bg-color="#00225a">
                <div class="container">
                    <div class="main-header_nav">
                        <div class="row align-items-center">
                            <div class="offset-xl-2 col-xl-10 d-none d-lg-block">
                                <div class="main-menu text-center">
                                    <nav class="main-nav">
                                        <ul>
                                            <li class="drop-holder">
                                                <a href="{{URL::to('/')}}"><span>Home</span></a>
                                            </li>
                                            <li class="drop-holder">
                                                <a href="{{URL::to('/pertandingan/listpertandingan')}}"><span>Pertandingan</span></a>
                                                <ul class="drop-menu">
                                                    <li>
                                                        <a href="{{URL::to('/pertandingan/listpertandingan')}}"><span>List Pertandingan</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{URL::to('/pertandingan/buatp')}}">Buat Pertandingan</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{URL::to('/pertandingan/daftarpertandingansaya')}}">Pertandingan Saya</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="{{URL::to('/tiket')}}"><span>Tiket</span></a>
                                            </li>
                                            <li>
                                                <a href="{{URL::to('/forum')}}"><span>Forum</span></a>
                                            </li>
                                            <li>
                                                <a href="{{URL::to('/cabang')}}"><span>Cabang</span></a>
                                            </li>
                                            <li>
                                                <a href="{{URL::to('/health')}}"><span>Health Monitor</span></a>
                                            </li>
                                            <li class="separator">
                                                <a href="{{URL::to('/cuaca')}}"><span>Cuaca</span></a>
                                            </li>
                                            <li class="hassub-item-wrap d-none d-lg-inline-flex">
                                                <ul class="hassub-item">
                                                    <li class="search-wrap hassub">
                                                        <a href="#" class="search-btn">
                                                            <i class="fa fa-search"></i>
                                                        </a>
                                                        <ul class="hassub-body search-body">
                                                            <li>
                                                                <form class="search-form" action="#">
                                                                    <div class="form-field">
                                                                        <input class="input-field" type="search" name="Search" value="Search" onblur="if(this.value==''){this.value='Search'}" onfocus="if(this.value=='Search'){this.value=''}">
                                                                    </div>
                                                                    <div class="form-btn_wrap">
                                                                        <button class="btn btn-secondary btn-primary-hover rounded-0">
                                                                            <i class="fa fa-search"></i>
                                                                        </button>
                                                                    </div>
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-logo-wrap d-none d-lg-flex">

                        <div class="header-fixed-logo">
                            <a href="/">
                                <img src="{{ URL::asset('images/logo/dark.png') }}" alt="Header Logo">
                            </a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="mobile-menu_wrapper" id="mobileMenu">
                <div class="offcanvas-body">
                    <div class="inner-body">
                        <div class="offcanvas-top">
                            <a href="#" class="button-close"><i class="ion-ios-close-empty"></i></a>
                        </div>
                        <div class="offcanvas-menu_area">
                            <nav class="offcanvas-navigation">
                                <ul class="mobile-menu">
                                    <li>
                                        <a href="{{URL::to('/')}}">
                                            <span class="mm-text">Home</span>
                                        </a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">
                                            <span class="mm-text">Pertandingan
                                            <i class="ion-ios-arrow-down"></i>
                                        </span>
                                        </a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="{{URL::to('/listpertandingan')}}">
                                                    <span class="mm-text">List Pertandingan</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{URL::to('/buatp')}}">
                                                    <span class="mm-text">Buat Pertandingan</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{URL::to('/tiket')}}">
                                            <span class="mm-text">Tiket</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{URL::to('/forum')}}">
                                            <span class="mm-text">Forum</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{URL::to('/cabang')}}">
                                            <span class="mm-text">Cabang</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{URL::to('/cuaca')}}">
                                            <span class="mm-text">Cuaca</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="global-overlay"></div>
        </header>
        @yield('konten')

    <div class="footer-area">
        <div class="footer-top pt-100 pb-80" data-bg-image="{{ URL::asset('images/footer/bg/1-1-1920x454.png') }}">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3">
                        <div class="widget-item text-hawkes-blue">
                            <div class="footer-logo pb-5">
                                <a href="#">
                                    <img src="{{ URL::asset('images/logo/white.png') }}" alt="Logo">
                                </a>
                            </div>
                            <p class="short-desc font-size-16 mb-5">Construction of itself, because it is are <br>
                        but because some proper style design is occur in toil and pain pleasure</p>
                            <div class="inquary">
                                <h5 class="text-primary">For inquary</h5>
                                <a href="tel://+12345-879-854">+12345 879 854</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-2 col-sm-6 pl-xl-80 pt-8 pt-lg-0">
                        <div class="widget-item">
                            <h3 class="heading text-white mb-6">Information</h3>
                            <ul class="widget-list-item text-hawkes-blue">
                                <li>
                                    <a href="#">About us</a>
                                </li>
                                <li>
                                    <a href="#">Our Services</a>
                                </li>
                                <li>
                                    <a href="#">Recent Projects</a>
                                </li>
                                <li>
                                    <a href="#">Our Team</a>
                                </li>
                                <li>
                                    <a href="#">Contact us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-sm-6 ps-lg-10 pt-8 pt-lg-0">
                        <div class="widget-item">
                            <h3 class="heading text-white mb-6">Quick Links</h3>
                            <ul class="widget-list-item text-hawkes-blue">
                                <li>
                                    <a href="#">Support Center</a>
                                </li>
                                <li>
                                    <a href="#">Offers & Promotion</a>
                                </li>
                                <li>
                                    <a href="#">Terms & Conditions</a>
                                </li>
                                <li>
                                    <a href="#">Payment Method</a>
                                </li>
                                <li>
                                    <a href="#">Clients & Reviews</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 pt-8 pt-lg-0">
                        <div class="widget-item">
                            <h3 class="heading text-white mb-6">Contact Info</h3>
                            <div class="widget-list-item text-hawkes-blue">
                                <div class="widget-address pb-5">
                                    <p class="mb-1">215 Central Road, North Street Central Park,
                                        <span class="text-primary">New York, USA</span>
                                    </p>
                                    <span>+12345 698 745 / +32145 852 785</span>
                                </div>
                                <div class="widget-address">
                                    <p class="mb-1">75, Victoriya Street, New Town Park Road,
                                        <span class="text-primary">Sydney, Australia</span>
                                    </p>
                                    <span>+98745 258 102 / +98745 612 301</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom py-3 text-hawkes-blue" data-bg-color="#00225a">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-4">
                        <ul class="social-link">
                            <li class="facebook">
                                <a href="#" data-tippy="Facebook" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li class="twitter">
                                <a href="#" data-tippy="Twitter" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li class="instagram">
                                <a href="#" data-tippy="Instagram" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-sm-8 align-self-center">
                        <div class="copyright">
                            <span class="copyright-text">© 2021 Kelompok F | SI 42 03 with <i class="fa fa-heart text-danger"></i> </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <a class="scroll-to-top" href="#">
        <i class="ion-android-arrow-up"></i>
    </a>
</body>
    <script src="{{ URL::asset('js/vendor.min.js') }}"></script>
    <script src="{{ URL::asset('js/plugins.min.js')  }}"></script>

    <script src="{{ URL::asset('js/main.min.js') }}"></script>
    <script src="{{ URL::asset('js/app.js') }}"></script>
</html>
