<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clubs extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'clubs';

    public function user(){
        return $this->belongsToMany(User::class , 'user_clubs' , 'club_id' , 'user_id');
    }
}
