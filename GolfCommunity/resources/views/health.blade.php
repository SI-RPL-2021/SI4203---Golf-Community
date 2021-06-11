@extends('utama')
@section('judul_halaman', 'List Pertandingan')
@section('konten')

<div class="container">
    <h2 class="mt-4 text-center">Health Monitor</h2>
    <a href="{{ url('/health/create') }}" class="btn btn-success">Hitung Health Score</a>
    <a href="{{ url('health/riwayat') }}" class="btn btn-success" style="float: right;">Riwayat Saya</a>
    <div class="row row-cols-1 row-cols-md-2 g-4 my-4">

      @if (!$health->isEmpty())
      @foreach ($health as $key => $h)
      <div class="col-md-3 text-center">
              <div class="card" style="width: 100%;">

                  <div class="card-body">
                      <h5 class="card-title"> Tanggal Input : {{ $h->date }}</h5>
                      <h5 class="card-title">%SPO2 : {{ $h->spo2 }}</h5>
                      <h5 class="card-title">BPM : {{ $h->bpm }}</h5>
                      <h5 class="card-title">Temperature : {{ $h->temperature }} C</h5>
                      @php $kondisi='';
                       if($h->temperature <= 33) {
            $kondisi = 'kurang sehat';
        } else if($h->temperature >33 && $h->temperature <= 34 ){
            $kondisi = 'lumayan';
        } else if($h->temperature > 34 && $h->temperature <= 37) {
            $kondisi = 'sehat';
        } else {
            $kondisi='mati';
        }
        echo $kondisi;
                      @endphp

                      <h5 class="card-title">Diabetes : {{ $h->diabetes }} mg/dl</h5>
                      <h5 class="card-title">Blood Pressure : {{$h->bloodpress}} / {{$h->bloodpress2}}</h5>
                      <h5 class="card-title">Health Score : {{ $h->score }}</h5>

                  </div>
              </div>
      </div>
      @endforeach
  @endif
    </div>
</div>

@endsection
