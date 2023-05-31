<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 
        'image',
        'article',
        'user_id'
    ];

    public function announcement_comments(){
        return $this->hasMany(AnnouncementComment::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }

}
