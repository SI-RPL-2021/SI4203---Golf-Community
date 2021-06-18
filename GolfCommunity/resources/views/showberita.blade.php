@extends('utama')              
@section('judul_halaman', 'Berita Seputar Golf')

@section('konten')
<div class="container">
@foreach ($news as $berita)
<div class="col-md-4 col-sm-12 mt-4">
    <div class="card">
        <img src=" " class="card-img-top" alt="gambar" >
        <div class="card-body">
            <h5 class="card-title">{{$berita->judul}}</h5>
            <span class="timestamp">{{$berita->created_at}}</span><br><br>
            <a href="/detailberita/{{$berita->id}}" class="btn btn-primary">Lihat Berita</a>
        </div>
    </div>
</div>
<br>
@endforeach
</div>
@endsection