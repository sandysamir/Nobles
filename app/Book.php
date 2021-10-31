<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Wishlist;
use App\User;
class Book extends Model
{
    protected $fillable = [
        'bookname', 'description', 'image','price','author','pdf'
    ];
    
    public function users()
    {
        return $this->belongsToMany(User::class,'wishlists','book_id','user_id'); //bktb esm l pivot table lw mghyrah w bktb gmbo id mnhena w id l relatd user.
    }
    public function addToCart()
    {
        return $this->belongsToMany(User::class,'carts','book_id','user_id'); //bktb esm l pivot table lw mghyrah w bktb gmbo id mnhena w id l relatd user.
    }
    
}
