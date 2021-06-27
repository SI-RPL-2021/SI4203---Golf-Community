<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    use HasFactory;
    protected $table = 'komentar';
    protected $primaryKey = 'id_komentar';
    protected $fillable = [
        'id_komentar',
        'konten',
        'user_id',
        'forum_id_forum',
        'created_at',
        'updated_at'
    ];


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function forum(){
        return $this->belongsTo(Forum::class);
    }
}
