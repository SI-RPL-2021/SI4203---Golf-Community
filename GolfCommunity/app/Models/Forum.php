<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Forum extends Model
{
    
    use HasFactory;
    protected $table = 'forum';
    protected $primaryKey = 'id_forum';
    protected $fillable = [
        'id_forum',
        'judul',
        'konten',
        'user_id',
        'created_at',
        'updated_at'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function komentar(){
        return $this->hasMany(Komentar::class);
    }

}
