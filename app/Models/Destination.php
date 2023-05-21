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
        'article'
    ];

    public function destination_comments(){
        return $this->hasMany(DestinationComment::class);
    }
}
