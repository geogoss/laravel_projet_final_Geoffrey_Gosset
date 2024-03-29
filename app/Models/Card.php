<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    public function product () {
        return $this->belongsToMany(Product::class);
    }

    public function cardproduct () {
        return $this->belongsToMany(CardProduct::class);
    }

    public function user () {
        return $this->belongsTo(User::class);
    }

}
