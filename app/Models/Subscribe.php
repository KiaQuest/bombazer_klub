<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscribe extends Model
{
    use HasFactory;
    protected $guarded = ['subscribe_id'];

    // public function user(){
    //     return $this->belongsTo(User::class,'subscribe_user_id');
    // }
}