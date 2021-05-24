@extends('utama')
@section('judul_halaman', 'Tiket')
@section('konten')
<div class="container">
    <h2 class="mt-4 mb-4 text-center">Tiket Saya</h2>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">Nama Pertandingan</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Tanggal Beli</th>
            <th scope="col">Total Harga</th>
            <th scope="col">Kode Tiket</th>
          </tr>
        </thead>
        <tbody>

      @if (!$pertandingans->isEmpty())
      @foreach ($pertandingans as $key => $p)
 

        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td colspan="2">Larry the Bird</td>
          <td>@twitter</td>
        </tr>
        @endforeach
        @endif
        </tbody>
        </table>
    
</div>

@endsection