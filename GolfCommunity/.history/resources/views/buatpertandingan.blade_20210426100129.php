@extends('utama')
@section('judul_halaman', 'Buat Pertandingan')
@section('konten')

<div class="container">
    <h2 class="mt-4 text-center">Buat Pertandingan</h2>
    <a href="{{ url('/pertandingan/listpertandingan') }}" class="btn btn-primary">List Pertandingan</a>
    <div class="row row-cols-1 row-cols-md-2 g-4 my-4">
        <form name="buatpertandingan" id="buatpertandingan" method="post" action="{{url('/pertandingan/form-pertandingan')}}">
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
                <textarea name="alamat" id="inputalamat"></textarea>
            </div>

            <div class="form-group">
                <label for="inputtgl_mulai">Tanggal Mulai</label>
                <input type="date" name="tgl_mulai" id="inputtgl_mulai">
            </div>

            <div class="form-group">
                <label for="inputtgl_selesai">Tanggal Selesai</label>
                <input type="date" name="tgl_selesai" id="inputtgl_selesai">
            </div>

            <div class="form-group">
                <label for="inputharga_tiket">Harga Tiket</label>
                <input type="number" name="harga_tiket" id="inputharga_tiket">
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
                <label for="inputdeskripsi"></label>
                <input type="text" name="deskripsi" id="inputdeskripsi">
            </div>

            <div class="form-group">
                <label for="input"></label>
                <input type="text" name="" id="input">
            </div>
     
             <button type="submit" class="btn btn-primary">Submit</button>
           </form>
    </div>
</div>

@endsection