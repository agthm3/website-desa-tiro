<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function comment(){
        return $this->hasMany(KomentarBerita::class);
    }

    public function announcement(){
        return $this->hasMany(Announcement::class);
    }

    public function destination(){
        return $this->hasMany(Destination::class);
    }

    public function news(){
        return $this->hasMany(News::class);
    }

    public function announcement_comments(){
        return $this->hasMany(AnnouncementComment::class);
    }

    public function destination_comments(){
        return $this->hasMany(DestinationComment::class);
    }

    public function profil_comments(){
        return $this->hasMany(ProfilComment::class);
    }

    public function pemerintah_comments(){
        return $this->hasMany(PemerintahDesa::class);
    }
}
