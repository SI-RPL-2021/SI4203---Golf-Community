@extends('layout.main')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12-md">
            <h2 class="text-center py-3">Pesan Pertandingan</h2>
            {{-- <a href="/pertandingan/tambah" class="btn btn-success">+ Tambah Pertandingan</a> --}}
            <br><br>
            <table class="table table-bordered">
                <tr>
                    <th>Nama Pertandingan</th>
                    <th>Kelas</th>
                    <th>Kuota</th>
                    <th>Lokasi</th>
                </tr>
                @foreach ($pertandingan as $p)
                    <tr>
                        <td>{{$p->pertandingan_nama}}</td>
                        <td>{{$p->pertandingan_jabatan}}</td>
                        <td>{{$p->pertandingan_umur}}</td>
                        <td>{{$p->pertandingan_alamat}}</td>
                    </tr>
                @endforeach
            </table>
            <hr>
            <br>
            <h4>Form Data Pemesan</h4>
            <form>
                {{ csrf_field() }}
                <div class="form-group">
                  <label for="name">Nama Lengkap</label>
                  <input type="text" class="form-control" id="name" placeholder="Nama Lengkap">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" placeholder="Email">
                </div>
                <div class="form-group">
                  <label for="jumlah">Jumlah Tiket</label>
                  <input type="number" class="form-control" id="jumlah">
                </div>
                <button type="submit" class="btn btn-primary">Checkout</button>
              </form>
        </div>
    </div>
</div>



@endsection
