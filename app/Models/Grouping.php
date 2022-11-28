<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grouping extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'grouping';

    public function color()
    {
        return $this->hasMany(Clubs::class);
    }
}
