<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertandingan extends Model
{
    use HasFactory;

    protected $table = 'pertandingans';
    protected $primarykey = 'id_pertandingan';

    protected $fillable = [
        'nama',
        'lapangan',
        'alamat',
        'tgl_mulai',
        'tgl_selesai',
        'harga_tiket',
        'cabang',
        'level',
        'detail',
        'deskripsi_singkat',
        'jumlah_pemain',
        'gambar',
        'jenis',
        'kuota_pemain'
    ];

    function image()
    {
        if ($this->image && file_exists(public_path('images/upload/' . $this->image)))
            return asset('images/upload/' . $this->image);
        else
            return asset('images/no_image.png');
    }
}
