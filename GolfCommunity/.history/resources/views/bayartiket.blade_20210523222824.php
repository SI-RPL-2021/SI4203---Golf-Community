@extends('utama')
@section('judul_halaman', 'Tiket')
@section('konten')

@php
$idnya = $_GET['id_pertandingan'];    
$total = $_GET['banyak_tiket'] * $_GET['harga_tiket']; 
$kodetiket = random_string([$type = 'alnum'[8]]);
@endphp


<div class="container">
    <h2 class="mt-4 mb-4 text-center">Pembayaran Tiket</h2>
    Anda membeli tiket pertandingan <b> {{$_GET['nama']}} </b> <br> dengan jumlah sebanyak <b> {{$_GET['banyak_tiket']}} </b> tiket.
    <hr>
    Total Harga: <br>
    <h4>Rp{{$total}}</h4>
    
    <form action="post">
        <input type="text" value="{{Auth::user()->id}}">
        <input type="text" value="{{$_GET['id_pertandingan']}}">
        <input type="text" value="{{date("Y/m/d")}}">
        <input type="text" value="{{$total}}">
        <input type="text" value="{{$kodetiket}}">
        <input type="text" value="{{$_GET['nama']}}">
        <button type="submit" class="btn btn-success">
            Bayar
        </button>
    </form>
    
      
    
</div>
@endsection