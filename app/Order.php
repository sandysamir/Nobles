<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'order_no', 'client_id', 'book_id','bank_transaction_id'
    ];

}
