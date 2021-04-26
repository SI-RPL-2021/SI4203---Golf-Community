@extends('utama')

@section('judul_halaman', 'Halaman Home')
@section('konten')


<div class="slider-area">

    <!-- Main Slider -->
    <div class="swiper-container main-slider swiper-arrow with-bg_white">
        <div class="swiper-wrapper">
            <div class="swiper-slide animation-style-01">
                <div class="slide-inner bg-height" data-bg-image="{{ URL::asset('images/slider/bg/1-1.jpg') }}">
                    <div class="container">
                        <div class="slide-content">
                            <span class="sub-title mb-1">Sejak 1995</span>
                            <h2 class="title mb-3">Menghubungkan <br> seluruh <span>Member</span></h2>
                            <p class="short-desc-2 font-size-20 mb-7">Menghubungkan dalam satu aplikasi website Golf Community Indonesia.</p>
                            <div class="button-wrap">
                                <a class="btn btn-custom btn-secondary btn-white-hover me-3" href="project.html">Learn more</a>
                                <a class="btn btn-custom btn-primary btn-white-hover" href="contact.html">Contact us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide animation-style-01">
                <div class="slide-inner bg-height" data-bg-image="{{ URL::asset('images/slider/bg/1-2.jpg') }}">
                    <div class="container">
                        <div class="slide-content text-white">
                            <span class="sub-title mb-1">Sejak 1995</span>
                            <h2 class="title white-stroke mb-3">Seluruh Atlet<br> Indonesia <span>Tergabung</span></h2>
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

@endsection