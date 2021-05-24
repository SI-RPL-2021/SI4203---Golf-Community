@extends('utama')
@section('judul_halaman', 'Tiket')
@section('konten')

@php
$idnya = $_GET['id_pertandingan'];    
@endphp
<div class="container">
    <h2 class="mt-4 mb-4 text-center">Pembayaran Tiket</h2>
    
{{$idnya}}
    
      
    
</div>
@endsection