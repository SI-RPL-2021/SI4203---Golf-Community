@extends('utama')
@section('judul_halaman', 'Tiket')
@section('konten')
<div class="container">
    <h2 class="mt-4 text-center">List Pertandingan</h2>
    <a href="{{ url('/pertandingan/buatp') }}" class="btn btn-success">Buat Pertandingan</a>
    <div class="row row-cols-1 row-cols-md-2 g-4 my-4">

      @if (!$pertandingans->isEmpty())
      @foreach ($pertandingans as $key => $game)
      <div class="col-md-3">
              <div class="card" style="width: 100%;">
                  <img src="{{ URL::asset('images/upload/') }}/{{ $game->gambar }}" class="card-img-top" alt="{{$game->nama}}"

                      style="object-fit: cover; height: 200px;">
                  <div class="card-body">
                      <h5 class="card-title">{{ $game->nama }}</h5>
                      <p class="card-text">
                          @if (strlen($game->deskripsi_singkat) > 100)
                              {{ substr($game->deskripsi_singkat, 0, 100) . '...' }}
                          @else
                              {{ $game->deskripsi_singkat }}
                          @endif
                      </p>
                      <p class ="card-text">Rp. {{ $game ->harga_tiket}} </p>
                      <div class="d-flex">
                          <a class="btn btn-warning" href='{{ url('/pertandingan/showpertandingan', $game->id_pertandingan) }}'>
                              See Details
                          </a>
                      </div>
                  </div>
              </div>
      </div>
      @endforeach
  @endif
    </div>
</div>

@endsection