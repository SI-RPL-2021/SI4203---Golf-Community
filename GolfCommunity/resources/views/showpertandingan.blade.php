@extends('utama')
@section('judul_halaman', 'Show Pertandingan')
@section('konten')


{{-- <div class="container py-5 d-flex align-items-center" style="min-height: 100vh">
    <div class="row">
        <div class="col-md-4">
            <img src="{{ URL::asset('images/upload/') }}/{{ $game->gambar }}" class="card-img-top" alt="{{$game->nama}}"
                style="object-fit: cover;">
        </div>
        <div class="col-md-8 d-flex">
            <div class="my-auto">
                <h1 class="card-title">{{ $game->title }}</h1>
                <h6>Due Date : {{ $game->tgl_mulai }}, Kuota dibutuhkan : {{ $game->kuota_pemain }} Orang</h6>
                <hr />
                <p class="card-text">
                    {{ $game->deskripsi_singkat }}
                </p>
                <div class="mb-3">

                    @if ($user)
                        <a class="btn btn-warning " href="{{ route('showpertandingan', $game->id) }}">
                            Apply Now
                        </a>
                    @else
                        <a class="btn btn-warning " href="{{ route('auth.login') }}">
                            Apply Now
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@if ($user && $user->type == 'admin')
    <div class="container mb-5 pb-5">
        <h1 class="fs-1 mb-4">
            Data Pendaftar
        </h1>

    </div>
@endif --}}



      @if (!$pertandingans->isEmpty())
      @foreach ($pertandingans as $key => $game)

                  <img src="{{ URL::asset('images/upload/') }}/{{ $game->gambar }}" class="card-img-top" alt="{{$game->nama}}" style="object-fit: cover; height: 200px;">
            {{$game->nama}}<br>
            {{$game->lapangan}}<br>
            {{$game->alamat}}<br>
            {{$game->tgl_mulai}}<br>
            {{$game->tgl_selesai}}<br>
            {{$game->harga_tiket}}<br>
            {{$game->cabang}}<br>
            {{$game->level}}<br>
            {{$game->detail}}<br>
            {{$game->deskripsi_singkat}}<br>
            {{$game->jumlah_pemain}}<br>
            {{$game->jenis}}<br>
            {{$game->kuota_pemain}}<br>

@endforeach
@endif
@endsection
