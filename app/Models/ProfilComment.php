<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilComment extends Model
{
    use HasFactory;

    protected $fillable = [
        'comment',
        'user_id',
        'profil_id'
    ];

    public function profil(){
        return $this->belongsTo(ProfilDesa::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
