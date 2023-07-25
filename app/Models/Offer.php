<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $fillable = [
        'product_name',
        'monthly_cost',
        'additional_cost',
        'internet_package_quantity',
        'sms_quantity',
        'mms_quantity',
        'calls_quantity',
        'internet_speed',
        'roaming_available'
    ];
}
