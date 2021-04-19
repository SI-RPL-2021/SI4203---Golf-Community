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
                    <th>Opsi</th>
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
        </div>
    </div>
</div>



@endsection
