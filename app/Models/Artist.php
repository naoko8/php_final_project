<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    public function album(){
        return $this->belongsToMany(Album::class);
    }
    public function genre(){
        return $this->belongsToMany(Genre::class);
    }
}
