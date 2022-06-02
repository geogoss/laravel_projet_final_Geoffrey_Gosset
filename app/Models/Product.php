<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

        public function image () {
            return $this->hasMany(Image::class);
        }

        public function type () {
            return $this->belongsTo(Type::class);
        }

        public function size () {
            return $this->belongsTo(Size::class);
        }

        public function note () {
            return $this->hasMany(Note::class);
        }

        public function user () {
            return $this->belongsTo(User::class);
        }

        public function card () {
            return $this->belongsToMany(Card::class);
        }
    
        public function cardproduct () {
            return $this->hasMany(CardProduct::class);
        }
    

}
