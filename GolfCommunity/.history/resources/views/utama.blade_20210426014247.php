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
                                    <img src="{{ URL::asset('images/header/icon/phone.png') }}" alt="Phone Icon">
                                    <a href="tel://01225-265-847">01225 265 847</a>
                                </div>
                                <div class="time-schedule">
                                    <img src="{{ URL::asset('images/header/icon/clock.png') }}" alt="Clock Icon">
                                    <span>9.00 am - 11.00 pm</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 d-block d-lg-none">
                            <div class="header-logo d-flex">
                                <a href="index.html">
                                    <img src="{{ URL::asset('images/logo/dark.png') }}" alt="Header Logo">
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
                            <span class="copyright-text">© 2021 OxyBuild Made with <i class="fa fa-heart text-danger"></i> by <a href="https://hasthemes.com/" rel="noopener" target="_blank">HasThemes</a> </span>
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