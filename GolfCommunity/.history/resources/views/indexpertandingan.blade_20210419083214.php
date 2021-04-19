@extends('layout.main')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12-md">
            <h2 class="text-center py-3">Daftar Pertandingan</h2>
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
                        <td>
                            {{-- <a href="/pertandingan/edit/[[$p->pertandingan_id}}">Edit</a>
                            <a href="/pertandingan/hapus/[[$p->pertandingan_id}}">Hapus</a> --}}
                            <a href="/pertandingan/pesan/[[$p->pertandingan_id}}" class="btn btn-primary">Pesan</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>



@endsection
