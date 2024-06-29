<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Cache;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'f_name',
        'm_name',
        'l_name',
        'username',
        'email',
        'contact',
        'cover_photo',
        'avatar',
        'country',
        'yob',
        'biography',
        'password'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    public function isOnline(){
        return Cache::has('is-online'.$this->id);
    }
    public function enrolls(){
        return $this->hasMany(Enroll::class, 'user_id','id');
    }
}
