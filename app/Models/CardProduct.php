<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardProduct extends Model
{
    use HasFactory;
    protected $table = 'card_product';

    public function product () {
        return $this->belongsTo(Product::class);
    }

    public function card () {
        return $this->belongsTo(Card::class);
    }
}
