@extends('utama')
@section('judul_halaman', 'Buat Pertandingans')
@section('konten')

<div class="container">
    <h2 class="mt-4 text-center">Buat Pertandingan</h2>
    <a href="{{ url('/pertandingan/listpertandingan') }}" class="btn btn-primary">List Pertandingan</a>
    <div class="row row-cols-1 row-cols-md-2 g-4 my-4">
        <form name="buatpertandingan" id="buatpertandingan" method="post" enctype="multipart/form-data" action="{{url('/pertandingan/form-pertandingan')}}">
            @csrf
     
             <div class="form-group">
               <label for="inputnama">Nama Pertandingan</label>
               <input type="text" id="inputnama" name="nama" class="form-control" required="">
             </div>
     
             <div class="form-group">
               <label for="inputlapangan">Lapangan</label>
               <input type="text" id="inputlapangan" name="lapangan" class="form-control" required="">
            </div>

            <div class="form-group">
                <label for="inputalamat">Alamat</label>
                <textarea name="alamat" id="inputalamat" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label for="inputtgl_mulai">Tanggal Mulai</label>
                <input type="date" name="tgl_mulai" id="inputtgl_mulai" class="form-control">
            </div>

            <div class="form-group">
                <label for="inputtgl_selesai">Tanggal Selesai</label>
                <input type="date" name="tgl_selesai" id="inputtgl_selesai">
            </div>

            <div class="form-group">
                <label for="inputharga_tiket">Harga Tiket</label>
                <input type="number" name="harga_tiket" id="inputharga_tiket" minlength="0">
            </div>

            <div class="form-group">
                <label for="inputcabang">Cabang</label>
                <select class="form-control" id="inputcabang">
                    <option value="1">1</option>
                    <option value="1">2</option>
                    <option value="1">3</option>
                    <option value="1">4</option>
                    <option value="1">5</option>
                </select>
            </div>

            <div class="form-group">
                <label for="inputlevel">Level</label>
                <select name="level" class="form-control" id="inputlevel">
                    <option value="1">1</option>
                    <option value="1">2</option>
                    <option value="1">3</option>
                    <option value="1">4</option>
                    <option value="1">5</option>
                </select>
            </div>

            <div class="form-group">
                <label for="inputdetail">Detail</label>
                <textarea name="detail" id="inputdetail"></textarea>
            </div>

            <div class="form-group">
                <label for="inputdeskripsi_singkat">Deskripsi Singkat</label>
                <input type="text" name="deskripsi_singkat" id="inputdeskripsi_singkat">
            </div>

            <div class="form-group">
                <label for="inputjumlah_pemain">Jumlah Pemain</label>
                <input type="number" name="jumlah_pemain" id="inputjumlah_pemain" minlength="1">
            </div>

            <div class="form-group">
                <label for="inputlevel">Level</label>
                <select name="level" class="form-control" id="inputlevel">
                    <option value="1">1</option>
                    <option value="1">2</option>
                    <option value="1">3</option>
                    <option value="1">4</option>
                    <option value="1">5</option>
                </select>
            </div>

            <div class="form-group">
                <label for="inputgambar">Gambar</label>
                <input type="file" class="form-control-file" id="inputgambar" name="gambar">
                @error('image')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="inputjenis">Jenis</label>
                <select name="jenis" class="form-control" id="inputjenis">
                    <option value="1">1</option>
                    <option value="1">2</option>
                    <option value="1">3</option>
                    <option value="1">4</option>
                    <option value="1">5</option>
                </select>
            </div>

            <div class="form-group">
                <label for="inputkuota_pemain"></label>
                <input type="number" minlength="1" name="kuota_pemain" id="inputkuota_pemain">
            </div>
     
             <button type="submit" class="btn btn-primary">Submit</button>
           </form>
    </div>
</div>

@endsection