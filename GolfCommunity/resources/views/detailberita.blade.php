@extends('utama')

@section('title')
{{$news->judul}}
@endsection

@section('konten')
<div class="container">
<br>
<div class="right">
   
        <a href="/berita"> 
            <button class="btn btn-info text-white w-100">Kembali</button> 
        </a>
    
</div>

<div class="col-md-10 col-sm-7 mb-5 bg-white p-0">
    <img src=" " class="card-img-top" alt="gambar" >
    <div class="p-4">
        <h2>{{ $news->judul }}</h2>
        <span class="timestamp">{{$news->created_at}}</span>
        <p class="mt-5">{{ $news->deskripsi }}</p>
    </div>
</div>
</div>
@endsection
