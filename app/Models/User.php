<?php

namespace App\Models;

use App\Http\Controllers\in\Club;
use Illuminate\Contracts\Auth\MustVerifyEmail;
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
    // protected $fillable = [
    //     'name',
    //     'email',
    //     'password',
    // ];

    protected $guarded = ['id'];

    protected $table = 'users';
    // use HasFactory;
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'pass',
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

    // public function subscribes(){

    //     return $this->hasMany(Subscribe::class , 'subscribe_id');
    // }
    // public function payments(){

    //     // return $this->hasMany(Subscribe::class , 'subscribe_id')
    // }
    public function clubs(){

        return $this->belongsToMany(Club::class , 'user_clubs' , 'user_id' , 'club_id')
        // ->withPivot(['amount','created_at'])
        ;
    }
    public function setPasswordAttribute($value){

        $this->attributes['password'] = md5($value);
    }
    // public function getPasswordAttribute($value){

    //     $this->attributes['password'] = bcrypt($value);
    // }
    public function tokens()
    {
        return $this->hasMany(Token::class);
    }
}
