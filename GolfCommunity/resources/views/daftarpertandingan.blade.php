@extends('utama')
@section('judul_halaman', 'Pertandingan')
@section('konten')

<div class="container">
    <h2 class="mt-4 mb-4 text-center">Pertandingan Saya</h2>

    @php
     $nomor =1;
    @endphp

    <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Pertandingan</th>
            <th scope="col">Alamat Pertandingan</th>
            <th scope="col">Tanggal Pertandingan</th>
            <th scope="col">Cabang</th>
            <th scope="col">Jenis</th>
            <th scope="col">Level</th>
            <th scope="col">Harga Tiket</th>

          </tr>
        </thead>
        <tbody>

      @if (!$pertandingans->isEmpty())
      @foreach ($pertandingans as $key => $p)


        <tr>
          <th scope="row">{{$nomor++}}</th>
          <td>{{$p->nama}}</td>
          <td>{{$p->alamat}}</td>
          <td>{{$p->tgl_mulai}} s/d {{$p->tgl_selesai}}</td>
          <td>{{$p->cabang}}</td>
          <td>{{$p->jenis}}</td>
          <td>{{$p->level}}</td>
          <td>{{$p->harga_tiket}}</td>
        </tr>
        @endforeach
        @endif
        </tbody>
        </table>

</div>


@endsection
