<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('judul_halaman')</title>
    <link rel="stylesheet" href="{{ URL::asset('css/vendor/vendor.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/plugins/plugins.min.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('css/style.min.css') }}">
    <link href="{{ URL::asset('css/custom.css') }}" rel="stylesheet">
</head>
<body>
    <div class="main-wrapper">
        
        <header class="main-header_area position-relative">
            <div class="header-top py-6 py-lg-3" data-bg-color="#eaf5ff">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="offset-xl-2 offset-lg-3 col-xl-4 col-lg-5 d-none d-lg-block">
                            <div class="header-top-left ml-8">
                                <div class="contact-number">
                                    <img src="assets/images/header/icon/phone.png" alt="Phone Icon">
                                    <a href="tel://01225-265-847">01225 265 847</a>
                                </div>
                                <div class="time-schedule">
                                    <img src="assets/images/header/icon/clock.png" alt="Clock Icon">
                                    <span>9.00 am - 11.00 pm</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 d-block d-lg-none">
                            <div class="header-logo d-flex">
                                <a href="index.html">
                                    <img src="assets/images/logo/dark.png" alt="Header Logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-xl-5 col-lg-4 col-sm-6">
                            <div class="header-top-right">
                                <ul class="hassub-item">
                                    <li class="login-info">
                                        <a href="login-register.html">Login<span>/ Register</span></a>
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
                                                <a href="index.html"><span>Home</span></a>
                                            </li>
                                            <li>
                                                <a href="about.html"><span>About Us</span></a>
                                            </li>
                                            <li class="drop-holder">
                                                <a href="service.html"><span>Services</span></a>
                                                <ul class="drop-menu">
                                                    <li>
                                                        <a href="single-service.html">Single Service</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="drop-holder">
                                                <a href="project.html"><span>Project</span></a>
                                                <ul class="drop-menu">
                                                    <li>
                                                        <a href="project-2-column.html">Project 2 Column</a>
                                                    </li>
                                                    <li>
                                                        <a href="project-gallery.html">Project Gallery</a>
                                                    </li>
                                                    <li>
                                                        <a href="project-slider.html">Project Slider</a>
                                                    </li>
                                                    <li>
                                                        <a href="project-detail.html">Project Detail</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="drop-holder">
                                                <a href="#"><span>Pages</span></a>
                                                <ul class="drop-menu">
                                                    <li>
                                                        <a href="our-clients.html">Our Clients</a>
                                                    </li>
                                                    <li>
                                                        <a href="our-team.html">Our Team</a>
                                                    </li>
                                                    <li>
                                                        <a href="our-working-process.html">Our Working Process</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="drop-holder">
                                                <a href="blog.html"><span>Blog</span></a>
                                                <ul class="drop-menu">
                                                    <li>
                                                        <a href="blog-leftsidebar.html">Blog Left Sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a href="blog-rightsidebar.html">Blog Right Sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a href="blog-detail.html">Blog Detail</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="drop-holder">
                                                <a href="shop.html"><span>Shop</span></a>
                                                <ul class="drop-menu">
                                                    <li>
                                                        <a href="shop-leftsidebar.html">Shop Left Sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-rightsidebar.html">Shop Right Sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a href="product-detail.html">Product Detail</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="separator">
                                                <a href="contact.html"><span>Contact</span></a>
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
                            <a href="index.html">
                                <img src="assets/images/logo/dark.png" alt="Header Logo">
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
                                        <a href="index.html">
                                            <span class="mm-text">Home</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="about.html">
                                            <span class="mm-text">About Us</span>
                                        </a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">
                                            <span class="mm-text">Services 
                                            <i class="ion-ios-arrow-down"></i>
                                        </span>
                                        </a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="service.html">
                                                    <span class="mm-text">Services</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="single-service.html">
                                                    <span class="mm-text">Single Service</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">
                                            <span class="mm-text">Project 
                                            <i class="ion-ios-arrow-down"></i>
                                        </span>
                                        </a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="project.html">
                                                    <span class="mm-text">Project Default</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="project-2-column.html">
                                                    <span class="mm-text">Project 2 Column</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="project-gallery.html">
                                                    <span class="mm-text">Project Gallery</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="project-slider.html">
                                                    <span class="mm-text">Project Slider</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="project-detail.html">
                                                    <span class="mm-text">Project Detail</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">
                                            <span class="mm-text">Pages 
                                            <i class="ion-ios-arrow-down"></i>
                                        </span>
                                        </a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="our-clients.html">
                                                    <span class="mm-text">Our Clients</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="our-team.html">
                                                    <span class="mm-text">Our Team</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="our-working-process.html">
                                                    <span class="mm-text">Our Working Process</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">
                                            <span class="mm-text">Blog 
                                            <i class="ion-ios-arrow-down"></i>
                                        </span>
                                        </a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="blog.html">
                                                    <span class="mm-text">Blog Default</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="blog-leftsidebar.html">
                                                    <span class="mm-text">Blog Left Sidebar</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="blog-rightsidebar.html">
                                                    <span class="mm-text">Blog Right Sidebar</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="blog-detail.html">
                                                    <span class="mm-text">Blog Detail</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">
                                            <span class="mm-text">Shop 
                                            <i class="ion-ios-arrow-down"></i>
                                        </span>
                                        </a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="shop.html">
                                                    <span class="mm-text">Shop Default</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="shop-leftsidebar.html">
                                                    <span class="mm-text">Shop Left Sidebar</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="shop-rightsidebar.html">
                                                    <span class="mm-text">Shop Right Sidebar</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="product-detail.html">
                                                    <span class="mm-text">Product Detail</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="contact.html">
                                            <span class="mm-text">Contact</span>
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

    </div>
</body>
    <script src="{{ URL::asset('js/vendor.min.js') }}"></script>
    <script src="{{ URL::asset('js/plugins.min.js')  }}"></script>

    <script src="{{ URL::asset('js/main.min.js') }}"></script>
    <script src="{{ URL::asset('js/app.js') }}"></script>
</html>