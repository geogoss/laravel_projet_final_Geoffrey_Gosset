<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
    use HasFactory;

        public function user () {
            return $this->hasOne(User::class);
        }

        public function country () {
            return $this->belongsTo(Country::class);
        }
        public function state () {
            return $this->belongsTo(State::class);
        }
        public function city () {
            return $this->belongsTo(City::class);
        }

}
