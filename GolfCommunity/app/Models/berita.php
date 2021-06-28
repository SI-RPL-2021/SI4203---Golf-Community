<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    use HasFactory;
    protected $table = 'berita';
    protected $fillable = [
        'id',
        'judul',
        'deskripsi',
        'user_id',
        'gambar',
        'created_at',
        'updated_at'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
