<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $table = 'product_order_item';
    protected $primaryKey = 'id_order_item';
}
