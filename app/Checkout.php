<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    protected $fillable = [
        'country', 'email', 'phone','first_name','last_name','address','post_code','note'
    ];
}
