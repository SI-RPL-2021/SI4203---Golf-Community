@extends('utama')
@section('judul_halaman', 'Tiket')
@section('konten')
<div class="container">
    <h2 class="mt-4 mb-4 text-center">Beli Tiket Pertandingan {{ request()->route('no') }}</h2>
      @if (!$pertandingans->isEmpty())
      @foreach ($pertandingans as $key => $p)
 
      <div class="card mb-3">
        <div class="row no-gutters">
          <div class="col-md-3">
            <img src="{{ URL::asset('images/upload/') }}/{{ $p->gambar }}" class="card-img img-fluid" style="object-fit: cover; max-height: 140px;" alt="{{$p->nama}}">
          </div>
          <div class="col-md-6">
            <div class="card-body">
              <h5 class="card-title">{{ $p->nama }}</h5>
              <p class="card-text">Rp{{ $p ->harga_tiket}}</p>
              <p class="card-text">
                  <small class="text-muted">
                      <i class="fa fa-calendar"></i> {{ $p->tgl_mulai }} | <i class="fa fa-map-marker"></i> {{ $p->lapangan }}
                    </small>
                </p>
            </div>
          </div>
          <div class="col-md-3 d-flex justify-content-end">
            <a href="tiket/beli?no={{$p->id_pertandingan}}" class="d-inline-flex align-self-center btn btn-success m-2 px-8">Beli</a>
          </div>
        </div>
      </div>

      @endforeach
  @endif
    
</div>

@endsection