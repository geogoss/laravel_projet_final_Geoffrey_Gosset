<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


    public function billing () {
        return $this->belongsTo(Billing::class);
    }

    public function avatar () {
        return $this->belongsTo(Avatar::class);
    }

    public function role () {
        return $this->belongsTo(Role::class);
    }

    public function article () {
        return $this->hasMany(Article::class);
    }

    public function product () {
        return $this->hasMany(Product::class);
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

    public function comment () {
        return $this->hasMany(Comment::class);
    }

    public function note () {
        return $this->hasMany(Note::class);
    }
    
    public function card () {
        return $this->hasOne(Card::class);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'avatar_id',
        'billing_id',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
