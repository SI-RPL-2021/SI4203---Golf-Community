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

            <form name="buatpertandingan" id="buatpertandingan" method="post" enctype="multipart/form-data" action="{{url('/pertandingan/form-pertandingan')}}">
                {{ csrf_field() }}
        
                <div class="form-group mb-2">
                <label for="inputnama">Nama Pertandingan</label>
                <input type="text" id="inputnama" name="nama" class="form-control" required="">
                </div>
        
                <div class="form-group mb-2">
                <label for="inputlapangan">Nama Lapangan Golf</label>
                <input type="text" id="inputlapangan" name="lapangan" class="form-control" required="">
                </div>

                <div class="form-group mb-2">
                    <label for="inputalamat">Alamat Lapangan Golf</label>
                    <textarea name="alamat" id="inputalamat" class="form-control"></textarea>
                </div>

                <div class="form-group mb-2">
                    <label for="inputtgl_mulai">Tanggal Mulai</label>
                    <input type="date" name="tgl_mulai" id="inputtgl_mulai" class="form-control">
                </div>

                <div class="form-group mb-2">
                    <label for="inputtgl_selesai">Tanggal Selesai</label>
                    <input type="date" name="tgl_selesai" id="inputtgl_selesai" class="form-control">
                </div>

                <div class="form-group mb-2">
                    <label for="inputharga_tiket">Harga Tiket</label>    
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text">Rp</div>
                        </div>
                        <input type="number" name="harga_tiket" id="inputharga_tiket" min="0" class="form-control">
                      </div>
                    
                </div>

  
                <div class="form-group mb-2">
                    <label for="inputcabang">Cabang</label>
                    <select class="form-control" id="inputcabang" name="cabang" class="form-control">
                        <option value="Stroke play">Stroke play</option>
                        <option value="Match play">Match play</option>
                        <option value="Foursome">Foursome</option>
                        <option value="Four ball">Four ball</option>
                        <option value="Stableford">Stableford</option>
                        <option value="Bogey and Par Competitions">Bogey and Par Competitions</option>
                        <option value="Scramble">Scramble</option>
                        <option value="Ambrose">Ambrose</option>
                        <option value="Texas Scramble">Texas Scramble</option>
                        <option value="Skins">Skins</option>
                        <option value="Greensome">Greensome</option>
                        <option value="Patsome">Patsome</option>
                        <option value="Chapman">Chapman</option>
                        <option value="String">String</option>
                        <option value="Flag tournaments">Flag tournaments</option>
                    </select>
                </div>

                <div class="form-group mb-2">
                    <label for="inputlevel">Level</label>
                    <select name="level" class="form-control" id="inputlevel" class="form-control">
                        <option value="0">Level 0 - Fun Games</option>
                        <option value="1">Level 1 - Mini Tours and State Opens</option>
                        <option value="2">Level 2 - Early Developmental Tours</option>
                        <option value="3">Level 3 - Penultimate Tours</option>
                        <option value="4">Level 4 - Premier Tours</option>
                    </select>
                </div>

                <div class="form-group mb-2">
                    <label for="inputdetail">Detail</label>
                    <textarea name="detail" id="inputdetail" class="form-control"></textarea>
                </div>

                <div class="form-group mb-2">
                    <label for="inputdeskripsi_singkat">Deskripsi Singkat</label>
                    <input type="text" name="deskripsi_singkat" id="inputdeskripsi_singkat" class="form-control">
                </div>

                <div class="form-group mb-2">
                    <label for="inputjumlah_pemain">Jumlah Pemain</label>
                    <input type="number" name="jumlah_pemain" id="inputjumlah_pemain" min="1" class="form-control">
                </div>

                <div class="form-group mb-2">
                    <label for="inputgambar">Gambar Pertandingan</label><br>
                    <input type="file" class="form-control-file" id="inputgambar" name="image" class="form-control">
                </div>

                <div class="form-group mb-2">
                    <label for="inputjenis">Jenis</label>
                    <select name="jenis" class="form-control" id="inputjenis" class="form-control">
                        <option value="Kompetisi">Kompetisi</option>
                        <option value="Persahabatan">Persahabatan</option>
                    </select>
                </div>

                <div class="form-group mb-2">
                    <label for="inputkuota_pemain">Kuota Pemain</label>
                    <input type="number" min="1" name="kuota_pemain" id="inputkuota_pemain" class="form-control">
                </div>
        
                <button type="submit" class="btn btn-primary">Submit</button>
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
            {{ $p->saldo }}
            
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