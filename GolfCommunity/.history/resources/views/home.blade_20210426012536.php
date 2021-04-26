@extends('utama')

@section('judul_halaman', 'Halaman Home')
@section('konten')

<div class="main-wrapper">

    <!-- Begin Main Header Area -->
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
                                <li class="minicart-wrap">
                                    <a href="#miniCart" class="minicart-btn toolbar-btn">
                                        <div class="minicart-count">
                                            <img src="assets/images/header/icon/cart.png" alt="Cart Icon">
                                            <span class="quantity">3</span>
                                        </div>
                                    </a>
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
        <div class="offcanvas-minicart_wrapper" id="miniCart">
            <div class="offcanvas-body">
                <div class="minicart-content">
                    <div class="minicart-heading">
                        <h4 class="mb-0">Shopping Cart</h4>
                        <a href="#" class="button-close"><i class="ion-ios-close-empty"></i></a>
                    </div>
                    <ul class="minicart-list">
                        <li class="minicart-product">
                            <a class="product-item_remove" href="#"><i
                                class="ion-ios-close-empty"></i></a>
                            <div class="product-item_img">
                                <img class="img-full" src="assets/images/product/small-size/1-1-100x103.jpg" alt="Product Image">
                            </div>
                            <div class="product-item_content">
                                <a class="product-item_title" href="shop.html">Cutting Pliers</a>
                                <span class="product-item_quantity">1 x $80.00</span>
                            </div>
                        </li>
                        <li class="minicart-product">
                            <a class="product-item_remove" href="#"><i
                                class="ion-ios-close-empty"></i></a>
                            <div class="product-item_img">
                                <img class="img-full" src="assets/images/product/small-size/1-2-100x103.jpg" alt="Product Image">
                            </div>
                            <div class="product-item_content">
                                <a class="product-item_title" href="shop.html">Safety Helmet</a>
                                <span class="product-item_quantity">1 x $120.00</span>
                            </div>
                        </li>
                        <li class="minicart-product">
                            <a class="product-item_remove" href="#"><i
                                class="ion-ios-close-empty"></i></a>
                            <div class="product-item_img">
                                <img class="img-full" src="assets/images/product/small-size/1-3-100x103.jpg" alt="Product Image">
                            </div>
                            <div class="product-item_content">
                                <a class="product-item_title" href="shop.html">Jack Hammer Drill</a>
                                <span class="product-item_quantity">1 x $230.00</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="minicart-item_total">
                    <span>Subtotal</span>
                    <span class="ammount">$91.05</span>
                </div>
                <div class="group-btn_wrap d-grid gap-2">
                    <a href="cart.html" class="btn btn-secondary btn-primary-hover">View Cart</a>
                    <a href="checkout.html" class="btn btn-secondary btn-primary-hover">Checkout</a>
                </div>
            </div>
        </div>
        <div class="global-overlay"></div>
    </header>
    <!-- Main Header Area End Here -->

    <!-- Begin Slider Area -->
    <div class="slider-area">

        <!-- Main Slider -->
        <div class="swiper-container main-slider swiper-arrow with-bg_white">
            <div class="swiper-wrapper">
                <div class="swiper-slide animation-style-01">
                    <div class="slide-inner bg-height" data-bg-image="assets/images/slider/bg/1-1.jpg">
                        <div class="container">
                            <div class="slide-content">
                                <span class="sub-title mb-1">Since 1995</span>
                                <h2 class="title mb-3">We Construct <br> your <span>Dream</span></h2>
                                <p class="short-desc-2 font-size-20 mb-7">Construction of itself, because it is pain, but because some proper style design occur in which toil and pain pleasure.</p>
                                <div class="button-wrap">
                                    <a class="btn btn-custom btn-secondary btn-white-hover me-3" href="project.html">Learn more</a>
                                    <a class="btn btn-custom btn-primary btn-white-hover" href="contact.html">Contact us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide animation-style-01">
                    <div class="slide-inner bg-height" data-bg-image="assets/images/slider/bg/1-2.jpg">
                        <div class="container">
                            <div class="slide-content text-white">
                                <span class="sub-title mb-1">Since 1995</span>
                                <h2 class="title white-stroke mb-3">We Construct <br> your <span>Dream</span></h2>
                                <p class="short-desc-2 font-size-20 mb-7">Construction of itself, because it is pain, but because some proper style design occur in which toil and pain pleasure.</p>
                                <div class="button-wrap">
                                    <a class="btn btn-custom btn-secondary btn-white-hover me-3" href="project.html">Learn more</a>
                                    <a class="btn btn-custom btn-primary btn-white-hover" href="contact.html">Contact us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination with-bg d-md-none"></div>

            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

    </div>
    <!-- Slider Area End Here -->

    <!-- Begin Banner Area -->
    <div class="banner pt-140">
        <div class="container">
            <div class="row g-lg-9">
                <div class="col-lg-4 col-md-6">
                    <div class="banner-item text-white" data-bg-image="assets/images/banner/inner-bg/1-1.png">
                        <div class="banner-content">
                            <h3 class="title mb-3">Top Rated</h3>
                            <p class="short-desc mb-0">Top rated construction packages we
                                provide page editors now use Lorem as their default model text</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pt-6 pt-md-0">
                    <div class="banner-item text-white" data-bg-image="assets/images/banner/inner-bg/1-2.png">
                        <div class="banner-content">
                            <h3 class="title mb-3">Best Quality</h3>
                            <p class="short-desc mb-0">Quality is the construction packages we provide page editors now use Lorem as
                                their default model text</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pt-6 pt-lg-0">
                    <div class="banner-item text-white" data-bg-image="assets/images/banner/inner-bg/1-3.png">
                        <div class="banner-content">
                            <h3 class="title mb-3">Low Price</h3>
                            <p class="short-desc mb-0">Pricing is the construction packages we provide page editors now use Lorem as
                                their default model text</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End Here -->

    <!-- Begin About Area -->
    <div class="about-area py-130">
        <div class="container">
            <div class="section-title-area style-01 pb-70">
                <div class="section-title-wrap">
                    <div class="section-title with-border text-lg-end">
                        <span>ABOUT US</span>
                        <h2 class="mb-0">We Construct your needs</h2>
                    </div>
                    <div class="section-desc">
                        <p class="font-size-20 mb-0">Construction of itself, because it is pain, but <br> because some proper style design occur in toil and pain pleasure we have expert team</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-img-wrap">
                        <div class="about-pattern">
                            <img src="assets/images/about/pattern.png" alt="Pattern">
                        </div>
                        <div class="about-img">
                            <img class="img-full" src="assets/images/about/1-1.jpg" alt="About Banner">
                        </div>
                        <div class="experience text-white">
                            <span class="year">20</span>
                            <h5 class="">Years of <span>Experience</span></h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="about-content">
                        <h3 class="sub-title text-secondary mb-4">Provide the best Constructing services
                            for our client with their satisfaction</h3>
                        <p class="short-desc mb-7">Construction of itself, because it is pain, but because some are
                            proper style design occur in toil and pain pleasure we have a expert team some of the main features..</p>
                        <ul class="list-item">
                            <li>
                                <div class="list-icon">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="list-text">
                                    <span>Construction of itself, because it is pain, but because
                                proper style design occur in toil and pain pleasure</span>
                                </div>
                            </li>
                            <li>
                                <div class="list-icon">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="list-text">
                                    <span>Construction of itself, because it is pain, but because
                                proper style design occur in toil and pain pleasure</span>
                                </div>
                            </li>
                            <li>
                                <div class="list-icon">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="list-text">
                                    <span>Construction of itself, because it is pain, but because
                                proper style design occur in toil and pain pleasure</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Area End Here -->

    <!-- Begin Project Area -->
    <div class="project-area ">
        <div class="project-inner" data-bg-image="assets/images/project/bg/1-1.png">
            <div class="button-wrap text-end">
                <a class="btn btn-project" href="project.html"><span>view more</span></a>
            </div>
            <div class="container-fluid p-0">
                <div class="project-with-title">
                    <div class="section-title-area text-white h-100">
                        <div class="title-with-arrow">
                            <div class="section-title-wrap style-02">
                                <div class="section-title">
                                    <span>PROJECTS</span>
                                    <h2 class="mb-0">Our Recent <br> Projects</h2>
                                </div>
                            </div>
                            <!-- Add Arrows -->
                            <div class="project-button-wrap">
                                <div class="project-button-prev">
                                    <i class="ion-chevron-left"></i>
                                </div>
                                <div class="project-button-next">
                                    <i class="ion-chevron-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-container project-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="project-item">
                                    <a class="project-img" href="project.html">
                                        <img src="assets/images/project/medium-size/1-1-405x474.jpg" alt="Project Image">
                                    </a>
                                    <div class="project-content">
                                        <span class="sub-title">CONSTRUCTION</span>
                                        <h3 class="title mb-0"><a href="project.html">Calton Bridge</a></h3>
                                        <span>Duration: 24 month</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="project-item">
                                    <a class="project-img" href="project.html">
                                        <img src="assets/images/project/medium-size/1-2-405x474.jpg" alt="Project Image">
                                    </a>
                                    <div class="project-content">
                                        <span class="sub-title">ARCHITECTURE</span>
                                        <h3 class="title mb-0"><a href="project.html">Zelixe de Villa</a></h3>
                                        <span>Duration: 29 month</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="project-item">
                                    <a class="project-img" href="project.html">
                                        <img src="assets/images/project/medium-size/1-3-405x474.jpg" alt="Project Image">
                                    </a>
                                    <div class="project-content">
                                        <span class="sub-title">CONSTRUCTION</span>
                                        <h3 class="title mb-0"><a href="project.html">Midland Highway</a></h3>
                                        <span>Duration: 08 month</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="project-item">
                                    <a class="project-img" href="project.html">
                                        <img src="assets/images/project/medium-size/1-4-405x474.jpg" alt="Project Image">
                                    </a>
                                    <div class="project-content">
                                        <span class="sub-title">ARCHITECTURE</span>
                                        <h3 class="title mb-0"><a href="project.html">Duplex House</a></h3>
                                        <span>Duration: 24 month</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="project-item">
                                    <a class="project-img" href="project.html">
                                        <img src="assets/images/project/medium-size/1-5-405x474.jpg" alt="Project Image">
                                    </a>
                                    <div class="project-content">
                                        <span class="sub-title">CONSTRUCTION</span>
                                        <h3 class="title mb-0"><a href="project.html">Railway Tunnel</a></h3>
                                        <span>Duration: 36 month</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="project-item">
                                    <a class="project-img" href="project.html">
                                        <img src="assets/images/project/medium-size/1-6-405x474.jpg" alt="Project Image">
                                    </a>
                                    <div class="project-content">
                                        <span class="sub-title">ARCHITECTURE</span>
                                        <h3 class="title mb-0"><a href="project.html">Pink Garden</a></h3>
                                        <span>Duration: 6 month</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Project Area ENd Here -->

    <!-- Begin Brand Area -->
    <div class="brand-area pt-140 pb-6" data-bg-image="assets/images/brand/bg/1-1.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="swiper-container brand-slider">
                        <div class="swiper-wrapper align-items-center">
                            <div class="swiper-slide">
                                <a class="brand-item" href="#">
                                    <img src="assets/images/brand/1.png" alt="Brand Image">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="brand-item" href="#">
                                    <img src="assets/images/brand/2.png" alt="Brand Image">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="brand-item" href="#">
                                    <img src="assets/images/brand/3.png" alt="Brand Image">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="brand-item" href="#">
                                    <img src="assets/images/brand/4.png" alt="Brand Image">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="brand-item" href="#">
                                    <img src="assets/images/brand/5.png" alt="Brand Image">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="brand-item" href="#">
                                    <img src="assets/images/brand/6.png" alt="Brand Image">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="brand-item" href="#">
                                    <img src="assets/images/brand/7.png" alt="Brand Image">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="brand-item" href="#">
                                    <img src="assets/images/brand/8.png" alt="Brand Image">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="brand-item" href="#">
                                    <img src="assets/images/brand/9.png" alt="Brand Image">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="brand-item" href="#">
                                    <img src="assets/images/brand/10.png" alt="Brand Image">
                                </a>
                            </div>
                        </div>
                        <!-- Add Pagination -->
                        <div class="brand-pagination d-md-none"></div>

                        <!-- Add Arrows -->
                        <div class="brand-button-next"></div>
                        <div class="brand-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand Area End Here -->

    <!-- Begin Service Area -->
    <div class="service-area py-140">
        <div class="container">
            <div class="section-title-area pb-70">
                <div class="section-title with-border pb-5 pb-lg-0">
                    <span>SERVICES</span>
                    <h2 class="mb-0 font-size-50">Provide Unique <br> & Quality Service</h2>
                </div>
                <div class="section-banner text-white align-self-center p-7" data-bg-image="assets/images/service/bg/1-1.png">
                    <h2 class="info mb-0">Do you have projects? <span>+98745 214 785</span></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="custom-arrow-holder position-relative">
                        <!-- Add Arrows -->
                        <div class="custom-button-wrap d-none d-md-flex">
                            <div class="custom-button-prev">
                                <i class="ion-chevron-left"></i>
                            </div>
                            <div class="custom-button-next">
                                <i class="ion-chevron-right"></i>
                            </div>
                        </div>
                        <div class="swiper-container service-slider swiper-arrow with-bg_white">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="service-item">
                                        <div class="service-img">
                                            <a href="service.html">
                                                <img src="assets/images/service/medium-size/1-1-371x254.jpg" alt="Service Image">
                                            </a>
                                            <div class="add-action text-white">
                                                <h2 class="title mb-0"><a href="single-service.html">Construction</a></h2>
                                                <div class="icon">
                                                    <a class="text-lowercase" href="mailto://info@example.com">
                                                        <i class="ion-ios-plus-empty"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="service-item">
                                        <div class="service-img">
                                            <a href="service.html">
                                                <img src="assets/images/service/medium-size/1-2-371x254.jpg" alt="Service Image">
                                            </a>
                                            <div class="add-action text-white">
                                                <h2 class="title mb-0"><a href="single-service.html">Renovation</a></h2>
                                                <div class="icon">
                                                    <a class="text-lowercase" href="mailto://info@example.com">
                                                        <i class="ion-ios-plus-empty"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="service-item">
                                        <div class="service-img">
                                            <a href="service.html">
                                                <img src="assets/images/service/medium-size/1-3-371x254.jpg" alt="Service Image">
                                            </a>
                                            <div class="add-action text-white">
                                                <h2 class="title mb-0"><a href="single-service.html">Architecture</a></h2>
                                                <div class="icon">
                                                    <a class="text-lowercase" href="mailto://info@example.com">
                                                        <i class="ion-ios-plus-empty"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service Area End Here -->

    <!-- Begin Banner Area -->
    <div class="banner-style-2 position-relative " data-bg-image="assets/images/banner/bg/2-1.png">
        <div class="container-fluid p-0 overflow-hidden">
            <div class="row g-0">
                <div class="col-lg-6">
                    <div class="banner-img">
                        <img src="assets/images/banner/medium-size/2-1-939x666.jpg" alt="Banner">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="banner-with-sticker">
                        <div class="banner-content text-white">
                            <span>EXPLORE</span>
                            <h2 class="title mb-7">Full Project <br> management</h2>
                            <p class="desc font-size-20 mb-8">Construction of itself, because it is pain, but because
                                some proper style design occur in toil and pain pleasure we have expert team some master plan fo the </p>
                            <div class="button-wrap">
                                <a class="btn btn-custom btn-primary btn-white-hover" href="project.html">Learn more</a>
                            </div>
                        </div>
                        <div class="banner-sticker">
                            <img src="assets/images/banner/sticker/1.png" alt="Banner Sticker">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Banner Area End Here -->

    <!-- Begin Counter Area -->
    <div class="counter-area pt-140">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-item">
                        <h3 class="count mb-0" data-counterup-time="1500">985</h3>
                        <h2 class="count-inner-text mb-0">985</h2>
                        <h4 class="count-title mb-0">Projects</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-item">
                        <h3 class="count mb-0" data-counterup-time="2000">527</h3>
                        <h2 class="count-inner-text mb-0">527</h2>
                        <h4 class="count-title mb-0">Clients</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-item">
                        <h3 class="count mb-0" data-counterup-time="2500">856</h3>
                        <h2 class="count-inner-text mb-0">856</h2>
                        <h4 class="count-title mb-0">Success</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-item">
                        <h3 class="count mb-0" data-counterup-time="3000">120</h3>
                        <h2 class="count-inner-text mb-0">120</h2>
                        <h4 class="count-title mb-0">Awards</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Counter Area End Here -->

    <!-- Begin Team Area -->
    <div class="team-area py-140">
        <div class="container">
            <div class="section-title-area pb-70">
                <div class="section-title-wrap style-01">
                    <div class="section-title with-border text-start text-lg-end">
                        <span>Team</span>
                        <h2 class="mb-0">Our Talented Team members</h2>
                    </div>
                    <div class="section-desc">
                        <p class="font-size-20 mb-0">Construction of itself, because it is pain, but <br>
                    because some proper style design occur in toil and pain pleasure we have expert team</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="swiper-container team-member-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="team-item">
                                    <div class="team-img">
                                        <img class="img-full" src="assets/images/team/medium-size/1-1-210x341.jpg" alt="Team Member">
                                        <ul class="add-action text-white">
                                            <li class="team-social-link-wrap">
                                                <a href="#">
                                                    <i class="fa fa-share-alt"></i>
                                                </a>
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
                                            </li>
                                            <li class="mail-wrap">
                                                <a class="text-lowercase" href="mailto://info@example.com">
                                                    <i class="ion-ios-plus-empty"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="team-content">
                                        <h3 class="title mb-1">Stephen <br> Fleming</h3>
                                        <span class="occupation">Chief Engineer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team-item">
                                    <div class="team-img">
                                        <img class="img-full" src="assets/images/team/medium-size/1-2-210x341.jpg" alt="Team Member">
                                        <ul class="add-action text-white">
                                            <li class="team-social-link-wrap">
                                                <a href="#">
                                                    <i class="fa fa-share-alt"></i>
                                                </a>
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
                                            </li>
                                            <li class="mail-wrap">
                                                <a class="text-lowercase" href="mailto://info@example.com">
                                                    <i class="ion-ios-plus-empty"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="team-content">
                                        <h3 class="title mb-1">Jonti <br> Rodes</h3>
                                        <span class="occupation">Chief Plamber</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team-item">
                                    <div class="team-img">
                                        <img class="img-full" src="assets/images/team/medium-size/1-3-210x341.jpg" alt="Team Member">
                                        <ul class="add-action text-white">
                                            <li class="team-social-link-wrap">
                                                <a href="#">
                                                    <i class="fa fa-share-alt"></i>
                                                </a>
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
                                            </li>
                                            <li class="mail-wrap">
                                                <a class="text-lowercase" href="mailto://info@example.com">
                                                    <i class="ion-ios-plus-empty"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="team-content">
                                        <h3 class="title mb-1">Robarto <br> Carlos</h3>
                                        <span class="occupation">Chief Architect</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team-item">
                                    <div class="team-img">
                                        <img class="img-full" src="assets/images/team/medium-size/1-4-210x341.jpg" alt="Team Member">
                                        <ul class="add-action text-white">
                                            <li class="team-social-link-wrap">
                                                <a href="#">
                                                    <i class="fa fa-share-alt"></i>
                                                </a>
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
                                            </li>
                                            <li class="mail-wrap">
                                                <a class="text-lowercase" href="mailto://info@example.com">
                                                    <i class="ion-ios-plus-empty"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="team-content">
                                        <h3 class="title mb-1">Shan <br> Williams</h3>
                                        <span class="occupation">Juniro Engineer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team-item">
                                    <div class="team-img">
                                        <img class="img-full" src="assets/images/team/medium-size/1-5-210x341.jpg" alt="Team Member">
                                        <ul class="add-action text-white">
                                            <li class="team-social-link-wrap">
                                                <a href="#">
                                                    <i class="fa fa-share-alt"></i>
                                                </a>
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
                                            </li>
                                            <li class="mail-wrap">
                                                <a class="text-lowercase" href="mailto://info@example.com">
                                                    <i class="ion-ios-plus-empty"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="team-content">
                                        <h3 class="title mb-1">Michel <br> Stuart</h3>
                                        <span class="occupation">Head of Architect</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team-item">
                                    <div class="team-img">
                                        <img class="img-full" src="assets/images/team/medium-size/1-6-210x341.jpg" alt="Team Member">
                                        <ul class="add-action text-white">
                                            <li class="team-social-link-wrap">
                                                <a href="#">
                                                    <i class="fa fa-share-alt"></i>
                                                </a>
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
                                            </li>
                                            <li class="mail-wrap">
                                                <a class="text-lowercase" href="mailto://info@example.com">
                                                    <i class="ion-ios-plus-empty"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="team-content">
                                        <h3 class="title mb-1">Farhan <br> Ferdous</h3>
                                        <span class="occupation">Electric Mistri</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team-item">
                                    <div class="team-img">
                                        <img class="img-full" src="assets/images/team/medium-size/1-7-210x341.jpg" alt="Team Member">
                                        <ul class="add-action text-white">
                                            <li class="team-social-link-wrap">
                                                <a href="#">
                                                    <i class="fa fa-share-alt"></i>
                                                </a>
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
                                            </li>
                                            <li class="mail-wrap">
                                                <a class="text-lowercase" href="mailto://info@example.com">
                                                    <i class="ion-ios-plus-empty"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="team-content">
                                        <h3 class="title mb-1">Silver <br> Smith</h3>
                                        <span class="occupation">Chief Architect</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team-item">
                                    <div class="team-img">
                                        <img class="img-full" src="assets/images/team/medium-size/1-8-210x341.jpg" alt="Team Member">
                                        <ul class="add-action text-white">
                                            <li class="team-social-link-wrap">
                                                <a href="#">
                                                    <i class="fa fa-share-alt"></i>
                                                </a>
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
                                            </li>
                                            <li class="mail-wrap">
                                                <a class="text-lowercase" href="mailto://info@example.com">
                                                    <i class="ion-ios-plus-empty"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="team-content">
                                        <h3 class="title mb-1">Garry <br> Carston</h3>
                                        <span class="occupation">Heavy Equipmet Driver</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Add Pagination -->
                        <div class="team-pagination d-md-none"></div>

                        <!-- Add Arrows -->
                        <div class="team-button-next"></div>
                        <div class="team-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team Area End Here -->

    <!-- Begin Testimonial Area -->
    <div class="testimonial-area ">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6 pb-6 pb-lg-0">
                    <div class="section-title-wrap-2">
                        <div class="section-title border-0">
                            <span>TESTIMONIALS</span>
                            <h2 class="mb-7">Reviews from happy client</h2>
                        </div>
                        <div class="section-desc pb-4">
                            <p class="font-size-20 mb-0">Construction of itself, because it is pain some <br> some proper
                        style design occur in toil and pain we have expert team some master</p>
                        </div>
                        <div class="button-wrap pt-2 pb-5 pb-md-0">
                            <a class="btn btn-link with-underline text-secondary font-size-25 p-0" href="#">view more</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6">
                    <div class="swiper-container testimonial-slider">
                        <div class="swiper-wrapper testimonial-flex-direction">
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="testimonial-content">
                                        <p class="short-desc mb-3"><i class="quotation direction-left">“</i>Publishing
                                            packages and web page now use Lorem Ipsum as their mel text, and a search for
                                            lorem more than one articel a is very important which can be help us for
                                            building a beauiful construction design...<i
                                        class="quotation direction-right">”</i></p>
                                        <div class="user-info">
                                            <div class="user-img">
                                                <img src="assets/images/testimonial/avatar/1-1-46x46.png" alt="Avatar">
                                            </div>
                                            <div class="user-content">
                                                <h5 class="user-name text-primary mb-0">Christoper Luis</h5>
                                                <span class="user-occupation">CEO, Octafact Group</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="testimonial-content">
                                        <p class="short-desc mb-3"><i class="quotation direction-left">“</i>Publishing
                                            packages and web page now use Lorem Ipsum as their mel text, and a search for
                                            lorem more than one articel a is very important which can be help us for
                                            building a beauiful construction design...<i
                                        class="quotation direction-right">”</i></p>
                                        <div class="user-info">
                                            <div class="user-img">
                                                <img src="assets/images/testimonial/avatar/1-2-46x46.png" alt="Avatar">
                                            </div>
                                            <div class="user-content">
                                                <h5 class="user-name text-primary mb-0">Rehana Williams</h5>
                                                <span class="user-occupation">CEO, Xerox LTd.</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Add Pagination -->
                        <div class="testimonial-pagination d-md-none"></div>

                        <!-- Add Arrows -->
                        <div class="testimonial-button-next"></div>
                        <div class="testimonial-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial Area End Here -->

    <!-- Begin Blog Area -->
    <div class="blog-area py-140">
        <div class="container">
            <div class="section-title-area style-01 pb-70">
                <div class="section-title-wrap">
                    <div class="section-title with-border different-width text-start text-lg-end">
                        <span>OUR BLOG</span>
                        <h2 class="mb-0">Latest Post Form Blog</h2>
                    </div>
                    <div class="section-desc">
                        <p class="font-size-20 mb-0">Construction of itself, because it is pain, but because some proper
                            style design occur in toil and pain pleasure we have expert team</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="swiper-container blog-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="blog-item">
                                    <a class="blog-img" href="blog.html">
                                        <img class="img-full" src="assets/images/blog/medium-size/1-1-370x260.jpg" alt="Blog Image">
                                    </a>
                                    <div class="blog-content">
                                        <span class="blog-meta">SMITH - 25 AUGUST - CONSTRUCTION</span>
                                        <h3 class="title mb-2"><a href="blog.html">Construction Technology</a></h3>
                                        <p class="mb-4">Construction of itself, because it is pain because some proper style
                                            design</p>
                                        <ul class="blog-button-wrap">
                                            <li>
                                                <a class="btn btn-link p-0" href="blog.html">Read more</a>
                                            </li>
                                            <li>
                                                <a href="#">35 Comments</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="blog-item">
                                    <a class="blog-img" href="blog.html">
                                        <img class="img-full" src="assets/images/blog/medium-size/1-2-370x260.jpg" alt="Blog Image">
                                    </a>
                                    <div class="blog-content">
                                        <span class="blog-meta">DEVID - 20 AUGUST - ARCHITECTURE</span>
                                        <h3 class="title mb-2"><a href="blog.html">Construction Technology</a></h3>
                                        <p class="mb-4">Construction of itself, because it is pain because some proper style
                                            design</p>
                                        <ul class="blog-button-wrap">
                                            <li>
                                                <a class="btn btn-link p-0" href="blog.html">Read more</a>
                                            </li>
                                            <li>
                                                <a href="#">35 Comments</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="blog-item">
                                    <a class="blog-img" href="blog.html">
                                        <img class="img-full" src="assets/images/blog/medium-size/1-3-370x260.jpg" alt="Blog Image">
                                    </a>
                                    <div class="blog-content">
                                        <span class="blog-meta">ETHAN - 18 AUGUST - RENOVATION</span>
                                        <h3 class="title mb-2"><a href="blog.html">Construction Technology</a></h3>
                                        <p class="mb-4">Construction of itself, because it is pain because some proper style
                                            design</p>
                                        <ul class="blog-button-wrap">
                                            <li>
                                                <a class="btn btn-link p-0" href="blog.html">Read more</a>
                                            </li>
                                            <li>
                                                <a href="#">35 Comments</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Add Pagination -->
                        <div class="blog-pagination d-md-none"></div>

                        <!-- Add Arrows -->
                        <div class="blog-button-next"></div>
                        <div class="blog-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Area End Here -->

    <!-- Begin Newsletter Area -->
    <div class="newsletter-area pt-9 pb-8" data-bg-image="assets/images/newsletter/bg/1-1-1920x198.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="newsletter-item text-white">
                        <div class="newsletter-content">
                            <h2 class="title text-lg-end text-center mb-0">Subscribe our Newsletter</h2>
                        </div>
                        <div class="newsletter-form_wrap align-self-center">
                            <form class="newsletter-form mt-5" id="mc-form" action="#">
                                <div class="form-field">
                                    <input class="input-field" id="mc-email" type="email" autocomplete="off" name="To get update, enter your email" value="To get update, enter your email" onblur="if(this.value==''){this.value='To get update, enter your email'}" onfocus="if(this.value=='To get update, enter your email'){this.value=''}">
                                </div>
                                <div class="form-btn_wrap">
                                    <button class="btn btn-secondary btn-secondary-hover btn-lg rounded-0" id="mc-submit">Subscribe now</button>
                                </div>
                            </form>
                            <!-- Mailchimp Alerts -->
                            <div class="mailchimp-alerts text-centre pt-5">
                                <div class="mailchimp-submitting"></div>
                                <div class="mailchimp-success"></div>
                                <div class="mailchimp-error"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter Area End Here -->

    <!-- Begin Footer Area -->
    <div class="footer-area">
        <div class="footer-top pt-100 pb-80" data-bg-image="assets/images/footer/bg/1-1-1920x454.png">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3">
                        <div class="widget-item text-hawkes-blue">
                            <div class="footer-logo pb-5">
                                <a href="#">
                                    <img src="assets/images/logo/white.png" alt="Logo">
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
    <!-- Footer Area End Here -->

    <!-- Begin Scroll To Top -->
    <a class="scroll-to-top" href="#">
        <i class="ion-android-arrow-up"></i>
    </a>
    <!-- Scroll To Top End Here -->

</div>
@endsection