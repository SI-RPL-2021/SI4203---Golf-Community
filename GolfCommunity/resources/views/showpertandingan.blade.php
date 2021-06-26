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
<div class="container  py-5 d-flex align-items-center" style="min-height: 100vh">

    <form name="daftarpertandingan" id="daftarpertandingan" method="post" enctype="multipart/form-data" action="{{url('/daftarpertandingan/store')}}">
    {{ csrf_field() }}

      @if (!$pertandingans->isEmpty())
      @foreach ($pertandingans as $key => $game)

                  <img src="{{ URL::asset('images/upload/') }}/{{ $game->gambar }}" class="card-img-top" alt="{{$game->nama}}" style="object-fit: cover; height: 500px;">
            <div class="card">
            <div class="card-body">
            <h4 class="card-title">{{ $game->nama }}</h4>
            <p class="card-text">Nama Lapangan Golf : {{$game->lapangan}}</p>
            <p class="card-text">Alamat Lapangan Golf : {{$game->alamat}}</p>
            <p class="card-text">Tanggal Mulai : {{$game->tgl_mulai}}</p>
            <p class="card-text">Tanggal Selesai : {{$game->tgl_selesai}}</p>
            <p class="card-text">Harga Tiket : Rp. {{$game->harga_tiket}}</p>





                <p class="card-text">Cabang : {{$game->cabang}}</p>
                <p class="card-text">Jenis Permainan : {{$game->jenis}}</p>
                <p class="card-text">Level : {{$game->level}}</p>
                <p class="card-text">Detail : {{$game->detail}}</p>
                <p class="card-text">Deskripsi : {{$game->deskripsi_singkat}}</p>
                <p class="card-text">Jumlah Pemain : {{$game->jumlah_pemain}}</p>

                <p class="card-text">Kuota Pemain : {{$game->kuota_pemain}}</p>
            </div>
        </div>
        <div class="text-center">
    </form>
        <form method="post" action="{{ url('/pertandingan/daftarpertandingan') }}">
            {{ csrf_field() }}
            <input type="hidden" name="id_daftarpertandingan" value="{{$game->id_pertandingan}}">
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
            <input type="hidden" name="nama" value="{{$game->nama}}">
            <input type="hidden" name="alamat" value="{{$game->alamat}}">
            <input type="hidden" name="tgl_mulai" value="{{$game->tgl_mulai}}">
            <input type="hidden" name="tgl_selesai" value="{{$game->tgl_selesai}}">
            <input type="hidden" name="cabang" value="{{$game->cabang}}">
            <input type="hidden" name="jenis" value="{{$game->jenis}}">
            <input type="hidden" name="level" value="{{$game->level}}">
            <input type="hidden" name="harga_tiket" value="{{$game->harga_tiket}}">


            @if ($game->kuota_pemain > 0)
                <button type="submit" class="btn btn-warning mt-3 " >
                    Daftar Pertandingan
                </button>
            @endif



        </form>
    </div>
    @endforeach
    @endif

</div>

@endsection
