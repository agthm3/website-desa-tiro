<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemerintahComment extends Model
{
    use HasFactory;

    protected $fillable = [
        'comment',
        'user_id',
        'pemerintah_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function pemerintah_desa(){
        return $this->belongsTo(PemerintahDesa::class);
    }
}
