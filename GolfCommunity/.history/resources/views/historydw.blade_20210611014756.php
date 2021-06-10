@extends('utama')
@section('judul_halaman', 'Histori Digital Wallet')
@section('konten')
<div class="container">
    <h2 class="mt-4 mb-4 text-center">Histori Digital Wallet {{ Auth::user()->name }}</h2>

    @php
     $nomor =1;   
    @endphp

    <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Catatan</th>
            <th scope="col">Nominal</th>
            <th scope="col">Tanggal</th>
          </tr>
        </thead>
        <tbody>

      @if (!$historidw->isEmpty())
      @foreach ($historidw as $key => $p)
 

        <tr>
          <th scope="row">{{$nomor++}}</th>
          <td>{{$p->catatan}}</td>
          <td>{{$p->nominal}}</td>
          <td>{{$p->tgl}}</td>
        </tr>
        @endforeach
        @endif
        </tbody>
        </table>
    
</div>

@endsection