<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id',
        'order_date',
        'payment_end_date',
        'payment_method',
        'offer_id'
    ];


}
