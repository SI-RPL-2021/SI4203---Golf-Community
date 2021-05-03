@extends('utama')
@section('judul_halaman', 'List Pertandingan')
@section('konten')

<div class="container">
    <h2 class="mt-4 text-center">List Pertandingan</h2>
    <a href="{{ url('/pertandingan/buatp') }}" class="btn btn-success">Buat Pertandingan</a>
    <div class="row row-cols-1 row-cols-md-2 g-4 my-4">
      
		@foreach ($pertandingans as $p)
        
        <div class="col">
          <div class="card">
            <img src="{{ URL::asset('images/upload/') }}/{{ $p->gambar }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $p->nama }}</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
      
      @endforeach
    </div>
</div>

@endsection