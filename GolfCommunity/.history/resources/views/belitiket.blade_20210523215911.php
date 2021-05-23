@extends('utama')
@section('judul_halaman', 'Tiket')
@section('konten')

@php
$no = $_GET['no'];    
$pertandingans = DB::table('pertandingans')->where('id_pertandingan', $no)-> get();
@endphp

<div class="container">
    <h2 class="mt-4 mb-4 text-center">Beli Tiket Pertandingan</h2>
      @if (!$pertandingans->isEmpty())
      @foreach ($pertandingans as $key => $p)

      <div class="row my-4">
        <div class="col-md-6">

            <form name="bayartiket" id="bayartiket" method="post" action="{{url('/tiket/bayar')}}">
                {{ csrf_field() }}
                
                <input type="hidden" value="{{$p->id_pertandingan}}">

                <div class="form-group mb-2">
                <label for="inputnama">Nama Pertandingan</label>
                <input type="text" id="inputnama" name="nama" value="{{$p->nama}}" class="form-control" readonly>
                </div>
        
                <div class="form-group mb-2">
                <label for="inputlapangan">Nama Lapangan Golf</label>
                <input type="text" id="inputlapangan" value="{{$p->lapangan}}" name="lapangan" class="form-control" readonly>
                </div>

                <div class="form-group mb-2">
                    <label for="inputalamat">Alamat Lapangan Golf</label>
                    <textarea name="alamat" id="inputalamat" class="form-control" readonly>{{$p->alamat}}</textarea>
                </div>

                <div class="form-group mb-2">
                    <label for="inputtgl_mulai">Tanggal Mulai</label>
                    <input type="date" name="tgl_mulai" id="inputtgl_mulai" class="form-control" value="{{$p->tgl_mulai}}" readonly>
                </div>

                <div class="form-group mb-2">
                    <label for="inputtgl_selesai">Tanggal Selesai</label>
                    <input type="date" name="tgl_mulai" id="inputtgl_mulai" class="form-control" value="{{$p->tgl_selesai}}" readonly>
                </div>

                <div class="form-group mb-2">
                    <label for="inputharga_tiket">Harga Tiket</label>    
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text">Rp</div>
                        </div>
                        <input type="number" name="harga_tiket" id="inputharga_tiket" value="{{$p->harga_tiket}}" class="form-control" readonly>
                      </div>
                    
                </div>

                <div class="form-group mb-2">
                    <label for="inputkuota_pemain">Banyak Tiket</label>
                    <input type="number" min="1" name="banyak_tiket" id="inputbanyak_tiket" value="1" class="form-control" autofocus>
                </div>
                <button type="submit" class="btn btn-primary w-100">Beli Sekarang</button>
            </form> 
        </div>
        @endforeach
        @endif
        <div class="col-md-6">
                        
            @php   
            $dw = DB::table('digital_wallets')->where('id_user', Auth::user()->id)-> get();
            @endphp
            
            <img src="{{ URL::asset('images/upload/') }}/{{ $p->gambar }}" alt="Beli Tiket" class="mw-100 p-8">
            <hr>
            <h3 class="text-center">Dompet Digital Anda</h3>
            <br>
            Akun: <b>{{ Auth::user()->name }}</b>
            <br>
            
            Saldo: Rp<b>
            @if (!$dw->isEmpty())
            @foreach ($dw as $key => $p)
            {{$p->saldo}}
            
            @endforeach
            @else
            {{ '-' }}
            @endif
            </b>
            <br>
            <a class="btn btn-success mt-2 w-100" href="{{URL::to('/digitalwallet/topup')}}">Top Up Saldo</a>

            <hr>
        </div></div>

      
    
</div>
@endsection