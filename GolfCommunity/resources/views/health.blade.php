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
                      <h5 class="card-title">%SPO2 : {{ $h->spo2 }} %</h5>
                      @php $kondisi1='';
                       if($h->spo2 >= 95 && $h->spo2 <= 100) {
                        $kondisi1 = 'Baik';
                        }  else {
                        $kondisi1='Kurang Baik';
                        }
                        echo $kondisi1;
                        @endphp
                      <h5 class="card-title">BPM : {{ $h->bpm }}</h5>
                      @php $kondisi2='';
                       if($h->bpm <= 65) {
                        $kondisi2 = 'Baik';
                        } else if($h->bpm >65 && $h->bpm <= 72 ){
                        $kondisi2 = 'Cukup Baik';
                        } else if($h->bpm > 72 && $h->bpm <= 90) {
                        $kondisi2 = 'Cukup';
                        } else {
                        $kondisi2='Kurang Baik';
                        }
                        echo $kondisi2;
                        @endphp
                      <h5 class="card-title">Temperature : {{ $h->temperature }} C</h5>
                        @php $kondisi3='';
                       if($h->temperature <= 33) {
                        $kondisi3 = 'Kurang Baik';
                        } else if($h->temperature >33 && $h->temperature <= 34 ){
                        $kondisi3 = 'Cukup Baik';
                        } else if($h->temperature > 34 && $h->temperature <= 37) {
                        $kondisi3 = 'Baik';
                        } else {
                        $kondisi3='Kurang Baik';
                        }
                        echo $kondisi3;
                        @endphp
                      <h5 class="card-title">Diabetes : {{ $h->diabetes }} mg/dl</h5>
                      @php $kondisi4='';
                        if($h->diabetes >=70 && $h->diabetes <= 100 ){
                        $kondisi4 = 'Baik';
                        } else if($h->diabetes >= 101 && $h->diabetes <= 125) {
                        $kondisi4 = 'Cukup Baik';
                        } else {
                        $kondisi4='Kurang Baik';
                        }
                        echo $kondisi4;
                        @endphp
                      <h5 class="card-title">Blood Pressure : {{$h->bloodpress}} / {{$h->bloodpress2}}</h5>
                      @php $kondisi5='';
                       if($h->bloodpress < 80 && $h->bloodpress2 < 60) {
                        $kondisi5 = 'Kurang Baik';
                        } else if($h->bloodpress >=80 && $h->bloodpress <= 120 && $h->bloodpress2 >=60 && $h->bloodpress2 <= 80 ){
                        $kondisi5 = 'Baik';
                        } else if($h->bloodpress >120 && $h->bloodpress <= 140 && $h->bloodpress2 >80 && $h->bloodpress2 <= 90) {
                        $kondisi5 = 'Cukup Baik';
                        } else if($h->bloodpress >140 && $h->bloodpress <= 159 && $h->bloodpress2 >90 && $h->bloodpress2 <= 99) {
                        $kondisi5 = 'Kurang Baik';
                        }else if($h->bloodpress >=160 && $h->bloodpress <= 180 && $h->bloodpress2 >=100 && $h->bloodpress2 <= 110) {
                        $kondisi5 = 'Kurang';
                        }else {
                        $kondisi5='Kurang';
                        }
                        echo $kondisi5;
                        @endphp
                      <h5 class="card-title">Health Score : {{ $h->score }}</h5>
                      @php $kondisi6='';
                       if($h->score == 100) {
                        $kondisi6 = 'Kondisi kesehatan anda saat ini terlihat Sangat Baik';
                        } else if($h->score >=95 && $h->score < 100 ){
                        $kondisi6 = 'Kondisi kesehatan anda saat ini terlihat Baik';
                        } else if($h->score >=90 && $h->score < 95) {
                        $kondisi6 = 'Kondisi kesehatan anda saat ini terlihat Cukup Baik';
                        } else if($h->score >=85 && $h->score < 90) {
                        $kondisi6 = 'Kondisi kesehatan anda saat ini terlihat Kurang Baik, disarankan untuk menjaga pola hidup sehat dan istirahat yang cukup';
                        } else if($h->score >=80 && $h->score < 85) {
                        $kondisi6 = 'Kondisi kesehatan anda saat ini terlihat Kurang, disarankan untuk konsultasi ke dokter agar mendapat penanganan medis';
                        }else {
                        $kondisi6='Kondisi kesehatan anda saat ini sedang kritis, dimohon segera dilakukan tindakan medis segera';
                        }
                        echo $kondisi6;
                        @endphp
                  </div>
              </div>
      </div>
      @endforeach
  @endif
    </div>
</div>

@endsection
