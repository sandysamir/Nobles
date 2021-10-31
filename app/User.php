<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Book;
use App\Wishlist;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function books()
    {
        return $this->belongsToMany(Book::class,'wishlists','user_id','book_id'); //bktb esm l pivot table lw mghyrah w bktb gmbo id mnhena w id l relatd user.
    }
    public function addToCart()
    {
        return $this->belongsToMany(Book::class,'carts','user_id','book_id'); //bktb esm l pivot table lw mghyrah w bktb gmbo id mnhena w id l relatd user.
    }
    
}
