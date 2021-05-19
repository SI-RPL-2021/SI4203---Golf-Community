@extends('utama')
@section('judul_halaman', 'Tiket')
@section('konten')
<div class="container">
    <h2 class="mt-4 mb-4 text-center">Beli Tiket Pertandingan</h2>

      @if (!$pertandingans->isEmpty())
      @foreach ($pertandingans as $key => $p)
 
      <div class="card mb-3">
        <div class="row no-gutters">
          <div class="col-md-3">
            <img src="{{ URL::asset('images/upload/') }}/{{ $p->gambar }}" class="card-img img-fluid" style="object-fit: cover; max-height: 220px;" alt="{{$p->nama}}">
          </div>
          <div class="col-md-9">
            <div class="card-body">
              <h5 class="card-title">{{ $p->nama }}</h5>
              <p class="card-text">Rp{{ $p ->harga_tiket}}</p>
              <p class="card-text">
                  <small class="text-muted">
                      <i class="fa fa-calendar"></i> {{ $p->tgl_mulai }} | 
                    </small>
                </p>
              <div class="card-text">
                  <a href="#" class="btn btn-success float-end px-8 mb-2">Beli</a>
                </div>
            </div>
          </div>
        </div>
      </div>

      @endforeach
  @endif


  

    
</div>

@endsection