<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    use HasFactory;

    public function note () {
        return $this->hasMany(Note::class);
    }

    public function comment () {
        return $this->hasMany(Comment::class);
    }

    public function team () {
        return $this->hasOne(Team::class);
    }

}
