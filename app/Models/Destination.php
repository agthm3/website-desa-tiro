<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'image',
        'article',
        'kategori',
        'user_id'
    ];

    public function destination_comments(){
        return $this->hasMany(DestinationComment::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
