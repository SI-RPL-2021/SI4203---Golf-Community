@extends('layout.main')

@section('content')
    <div style="background-image:url('https://pcpm35rekrutmenbi.id/assets/images/bacground_white.jpg')">
        <div class="container py-5" style="min-height: 100vh">
            <h1 class="">
                List Pertandingan
            </h1>
            <p style="max-width: 600px">

            </p>
            <a class="btn btn-secondary mb-3" href='{{ route('pertandingans.create') }}'>Buat Pertandingan</a>
            <div class="row">
                @if (!$games->isEmpty())
                    @foreach ($games as $key => $game)
                        <div class="col-md-3">
                            <div class="card" style="width: 100%;">
                                <img src="{{ $game->image_path }}" class="card-img-top" alt="{{ $game->title }}"
                                    style="object-fit: cover; height: 200px;">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $game->nama }}</h5>
                                    <p class="card-text">
                                        @if (strlen($game->deskripsi) > 100)
                                            {{ substr($game->deskripsi, 0, 100) . '...' }}
                                        @else
                                            {{ $game->deskripsi }}
                                        @endif
                                    </p>
                                    <p class ="card-text">Rp. {{ $game ->harga}} </p>
                                    <div class="d-flex">
                                        <a class="btn btn-warning" href='{{ route('pertandingans.show', $game->id) }}'>
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
    </div>
@endsection
