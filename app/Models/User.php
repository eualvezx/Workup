<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Auth\Events\Registered;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable, HasApiTokens, HasFactory, Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string , date>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'cpf',
        'dt',
        'estado',
        'cidade',
        'profissao',
        'typecont',
        'seguidores',
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
        'password' => 'hashed',
    ];

    public function publica(){
        return $this->hasMany(Pub::class,'user_id','id');
    }

    public function publicou(){
        return $this->hasMany(Proj::class,'user_id','id');
    }


    public function followings(){
        return $this->belongsToMany(User::class,'follower_user', 'follower_id', 'user_id')->withTimestamps();

    }


    public function followers(){
        return $this->belongsToMany(User::class,'follower_user', 'user_id', 'follower_id')->withTimestamps();


    }

    public function follows (User $user){
        return $this->followings()->where('user_id',$user->id)->exists();
    }



}