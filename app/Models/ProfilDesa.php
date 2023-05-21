<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilDesa extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'article'
    ];

    public function comments(){
        return $this->hasMany(ProfilComment::class);
    }
}
