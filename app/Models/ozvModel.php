<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ozvModel extends Model
{
    use HasFactory;

    protected $guarded = ['user_id' , 'club_id' , 'amount' , 'created_at'];
    protected $table = 'user_clubs';
}
