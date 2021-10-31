<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rate extends Model
{
    
    protected $fillable = [
        'user_id', 'book_id', 'rate',
    ];
}
