<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'product_order';
    protected $primaryKey = 'id_order';
}
