<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KomentarBerita extends Model
{
    use HasFactory;

    protected $fillable = [
        'comment', 
        'user_id',
        'news_id'
    ];


    public function news(){
        return $this->belongsTo(News::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
