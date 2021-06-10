@extends('utama')
@section('judul_halaman', 'Histori Digital Wallet')
@section('konten')
<div class="container">
    <h2 class="mt-4 mb-4 text-center">Histori Digital Wallet</h2>

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

      @if (!$pembeliantiket->isEmpty())
      @foreach ($pembeliantiket as $key => $p)
 

        <tr>
          <th scope="row">{{$nomor++}}</th>
          <td>{{$p->nama}}</td>
          <td>{{$p->jumlah}}</td>
          <td>{{$p->tgl_beli}}</td>
          <td>{{$p->total_harga}}</td>
          <td class="text-uppercase">{{$p->kode}}</td>
          <td><a href="printtiket?id={{$p->id_pembeliantiket}}" class="btn btn-primary">Cetak</a></td>
        </tr>
        @endforeach
        @endif
        </tbody>
        </table>
    
</div>

@endsection