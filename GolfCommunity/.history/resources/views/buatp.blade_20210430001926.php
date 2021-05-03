@extends('utama')
@section('judul_halaman', 'Buat Pertandingans')
@section('konten')

<div class="container">
    <h2 class="mt-4 text-center">Buat Pertandingan</h2>
    <a href="{{ url('/pertandingan/listpertandingan') }}" class="btn btn-primary">List Pertandingan</a>
    <div class="row my-4">
        <div class="col-md-6">

            <form name="buatpertandingan" id="buatpertandingan" method="post" enctype="multipart/form-data" action="{{url('/pertandingan/form-pertandingan')}}">
                {{ csrf_field() }}
        
                <div class="form-group mb-2">
                <label for="inputnama">Nama Pertandingan</label>
                <input type="text" id="inputnama" name="nama" class="form-control" required="">
                </div>
        
                <div class="form-group mb-2">
                <label for="inputlapangan">Lokasi Lapangan Golf</label>
                <input type="text" id="inputlapangan" name="lapangan" class="form-control" required="">
                </div>

                <div class="form-group mb-2">
                    <label for="inputalamat">Kota Lapangan Golf</label>
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
                    <input type="number" name="harga_tiket" id="inputharga_tiket" minlength="0" class="form-control" style="text-align: right">
                </div>

                <div class="form-group mb-2">
                    <label for="inputcabang">Cabang</label>
                    <select class="form-control" id="inputcabang" name="cabang" class="form-control">
                        <option value="1">1</option>
                        <option value="1">2</option>
                        <option value="1">3</option>
                        <option value="1">4</option>
                        <option value="1">5</option>
                    </select>
                </div>

                <div class="form-group mb-2">
                    <label for="inputlevel">Level</label>
                    <select name="level" class="form-control" id="inputlevel" class="form-control">
                        <option value="1">1</option>
                        <option value="1">2</option>
                        <option value="1">3</option>
                        <option value="1">4</option>
                        <option value="1">5</option>
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
                    <input type="number" name="jumlah_pemain" id="inputjumlah_pemain" minlength="1" class="form-control">
                </div>

                <div class="form-group mb-2">
                    <label for="inputlevel">Level</label>
                    <select name="level" class="form-control" id="inputlevel" class="form-control">
                        <option value="1">1</option>
                        <option value="1">2</option>
                        <option value="1">3</option>
                        <option value="1">4</option>
                        <option value="1">5</option>
                    </select>
                </div>

                <div class="form-group mb-2">
                    <label for="inputgambar">Gambar</label><br>
                    <input type="file" class="form-control-file" id="inputgambar" name="image" class="form-control">
                </div>

                <div class="form-group mb-2">
                    <label for="inputjenis">Jenis</label>
                    <select name="jenis" class="form-control" id="inputjenis" class="form-control">
                        <option value="1">1</option>
                        <option value="1">2</option>
                        <option value="1">3</option>
                        <option value="1">4</option>
                        <option value="1">5</option>
                    </select>
                </div>

                <div class="form-group mb-2">
                    <label for="inputkuota_pemain">Kuota Pemain</label>
                    <input type="number" minlength="1" name="kuota_pemain" id="inputkuota_pemain" class="form-control">
                </div>
        
                <button type="submit" class="btn btn-primary">Submit</button>
            </form> 
        </div>
        <div class="col-md-6">
            <img src="{{ URL::asset('images/buatp.jpg') }}" alt="Buat Pertandingan" class="mw-100">
        </div></div>
</div>

<script type="text/javascript">
		
    var rupiah = document.getElementById('inputharga_tiket');
    rupiah.addEventListener('keyup', function(e){
        rupiah.value = formatRupiah(this.value, 'Rp. ');
    });

    /* Fungsi formatRupiah */
    function formatRupiah(angka, prefix){
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
        split   		= number_string.split(','),
        sisa     		= split[0].length % 3,
        rupiah     		= split[0].substr(0, sisa),
        ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);

        // tambahkan titik jika yang di input sudah menjadi angka ribuan
        if(ribuan){
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }

        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }
</script>

@endsection