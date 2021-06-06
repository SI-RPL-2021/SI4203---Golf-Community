@extends('utama')
@section('judul_halaman', 'Pertandingan')
@section('konten')

<div class="container">
    <h2 class="mt-4 mb-4 text-center">Riwayat Saya</h2>


    @php
     $nomor =1;
    @endphp

    <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Tanggal Input</th>
            <th scope="col">%SPO2</th>
            <th scope="col">BPM</th>
            <th scope="col">Temperature</th>
            <th scope="col">Diabetes</th>
            <th scope="col">Blood Pressure</th>
            <th scope="col">Health Score</th>


          </tr>
        </thead>
        <tbody>

      @if (!$health->isEmpty())
      @foreach ($health as $key => $h)


        <tr>
          <th scope="row">{{$nomor++}}</th>
          <td>{{$h->date}}</td>
          <td>{{$h->spo2}}</td>
          <td>{{$h->bpm}}</td>
          <td>{{$h->temperature}} C</td>
          <td>{{$h->diabetes}} mg/dl</td>
          <td>{{$h->bloodpress}} / {{$h->bloodpress2}} </td>
          <td>{{$h->score}}</td>
        </tr>
        @endforeach
        @endif
        </tbody>
        </table>

</div>


@endsection
