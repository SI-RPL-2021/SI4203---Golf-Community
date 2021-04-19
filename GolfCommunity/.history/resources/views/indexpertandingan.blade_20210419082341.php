@extends('layout.main')

@section('content')
<a href="/pertandingan/tambah">+ Tambah Pertandingan</a>
<br><br>
<table>
    <tr>
        <th>Nama</th>
        <th>Jabatan</th>
        <th>Umur</th>
        <th>Alamat</th>
        <th>Opsi</th>
    </tr>
    @foreach ($pertandingan as $p)
        <tr>
            <td>{{$p->pertandingan_nama}}</td>
            <td>{{$p->pertandingan_jabatan}}</td>
            <td>{{$p->pertandingan_umur}}</td>
            <td>{{$p->pertandingan_alamat}}</td>
            <td>
                <a href="/pertandingan/edit/[[$p->pertandingan_id}}">Edit</a>
                <a href="/pertandingan/hapus/[[$p->pertandingan_id}}">Hapus</a>
            </td>
        </tr>
    @endforeach
</table>
@endsection
