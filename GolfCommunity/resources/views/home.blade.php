@extends('layout.main')

@section('content')
    <div class="vh-100 d-flex justify-content-center align-items-center flex-column"
        style="background-image: url('{{ URL::asset('images/golfback.jpg') }}'); background-size: cover">
        <div style="max-width: 1000px; text-align: center;" class="text-white">
            <h1 class="font-weight-normal text-white" style="font-size: 70px; max-width: 1000px; text-align: center">

            </h1>
            <h5 class="my-3">

            </h5>

        </div>
    </div>
    <div id='about' style="background-image:url('https://pcpm35rekrutmenbi.id/assets/images/bacground_white.jpg')"
        class="py-5">
        <div class="container py-5">
            <h1 class="fs-1 text-center">
                Visi PT Golf Indonesia
            </h1>
            <div class="bg-warning rounded mb-2" style="padding: 2px">
            </div>
            <p>
                Menjadi pelopor terbentuknya komunitas golf terbaik.
            </p>
            <h1 class="fs-1 text-center mt-5">
                Misi PT Golf Indonesia
            </h1>
            <div class="bg-warning rounded mb-2" style="padding: 2px">
            </div>
            <p>
                Menjadi pelopor terbentuknya komunitas golf terbaik.
            </p>
        </div>
        <div class="container my-5">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <h5 class="card-header">Trending</h5>
                        <div class="card-body">
                            <h5 class="card-title">Cek Pertandingann</h5>
                            <p class="card-text">Terdapat 3 pertandingan yang tersedia.
                            </p>
                            <a href="/lowongan" class="btn btn-warning">Cek Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <h5 class="card-header">Trending</h5>
                        <div class="card-body">
                            <h5 class="card-title">Cek Komunitas</h5>
                            <p class="card-text">Terdapat 5 komunitas yang tersedia.
                            </p>
                            <a href="" class="btn btn-warning">Dashboard</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
