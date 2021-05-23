@extends('utama')
@section('judul_halaman', 'Tiket')
@section('konten')
<div class="container">
    <h2 class="mt-4 mb-4 text-center">Tiket Saya</h2>

    @php
     $nomor =1;   
    @endphp

    <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Pertandingan</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Tanggal Beli</th>
            <th scope="col">Total Harga</th>
            <th scope="col">Kode Tiket</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>

      @if (!$pertandingans->isEmpty())
      @foreach ($pertandingans as $key => $p)
 

        <tr>
          <th scope="row">{{$nomor++}}</th>
          <td>{{}}</td>
        </tr>
        @endforeach
        @endif
        </tbody>
        </table>
    
</div>

@endsection