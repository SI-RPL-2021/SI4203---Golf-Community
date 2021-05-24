@extends('utama')
@section('judul_halaman', 'Tiket')
@section('konten')

@php
$idnya = $_GET['id_pertandingan'];    
$total = $_GET['banyak_tiket'] * $_GET['harga_tiket']; 
$kodetiket = bin2hex(random_bytes(5));
@endphp


<div class="container">
    <h2 class="mt-4 mb-4 text-center">Pembayaran Tiket</h2>
    Anda membeli tiket pertandingan <b> {{$_GET['nama']}} </b> <br> dengan jumlah sebanyak <b> {{$_GET['banyak_tiket']}} </b> tiket.
    <hr>
    Total Harga: <br>
    <h4>Rp{{$total}}</h4>
    
    <form action="tiket/hasiltiket" method="POST">
        <input type="hidden" value="{{Auth::user()->id}}" name="id_user">
        <input type="hidden" value="{{$_GET['id_pertandingan']}}" name="id_pertandingan">
        <input type="hidden" value="{{date("Y/m/d")}}" name="tgl_beli">
        <input type="hidden" value="{{$_GET['banyak_tiket']}}" name="jumlah">
        <input type="hidden" value="{{$total}}" name="total_harga">
        <input type="hidden" value="{{$kodetiket}}" name="kode">
        <input type="hidden" value="OK" name="status">
        <input type="hidden" value="{{$_GET['nama']}}" name="nama">
        <button type="submit" class="btn btn-success">
            Bayar
        </button>
    </form>
    
      
    
</div>
@endsection