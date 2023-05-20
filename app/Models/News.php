<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 
        'article',
        'image'
    ];

    public function comment(){
        return $this->hasMany(KomentarBerita::class);
    }
}
