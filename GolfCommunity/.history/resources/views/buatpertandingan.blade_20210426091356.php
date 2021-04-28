@extends('utama')
@section('judul_halaman', 'Buat Pertandingan')
@section('konten')

<div class="container">
    <h2 class="mt-4 text-center">List Pertandingan</h2>
        <a href="{{ url('/pertandingan/buatpertandingan') }}" class="btn btn-success">Buat Pertandingan</a>
        <div class="row row-cols-1 row-cols-md-2 g-4 my-4">
        </div>
</div>

@endsection