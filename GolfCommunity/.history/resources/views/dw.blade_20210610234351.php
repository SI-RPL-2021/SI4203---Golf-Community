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
          <h4 class="tex-center">Rekomendasi Tiket Pertandingan</h4>
    </div>


</div>

@endsection