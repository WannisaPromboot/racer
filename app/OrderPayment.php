<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderPayment extends Model
{
    protected $table = 'product_order_payment';
    protected $primaryKey = 'id';
}
