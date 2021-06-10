@extends('utama')
@section('judul_halaman', 'Digital Wallet')
@section('konten')
<div class="container">
    
    @php   
    $dw = DB::table('digital_wallets')->where('id_user', Auth::user()->id)-> get();
    @endphp
    
    <div class="col-md-12 my-5">
        <h3 class="text-center">Digital Wallet</h3>
        <div class="card text-center">
            <div class="card-header">
              Saldo Anda
            </div>
            <div class="card-body">
              <h2 class="card-title">
                Rp
                    @if (!$dw->isEmpty())
                    @foreach ($dw as $key => $p)
                    {{$p->saldo}}
                    
                    @endforeach
                    @else
                    {{ '-' }}
                    @endif
              </h2>
              
            </div>
            <div class="card-footer text-muted">
                <a href="digitalwallet/topup" class="btn btn-primary"><i class="fa fa-plus-square"></i> Top up</a>
                <a href="digitalwallet/transfer" class="btn btn-success"><i class="fa fa-share"></i> Transfer</a>
                <a href="digitalwallet/histori" class="btn btn-dark"><i class="fa fa-history"></i> Histori</a>
            </div>
          </div>
          <hr>
          <h4 class="text-center">Rekomendasi Tiket Pertandingan</h4>

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


</div>

@endsection