<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DestinationComment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'comment',
        'destination_id'
    ];


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }
}
