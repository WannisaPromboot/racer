<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Popular extends Model
{
    protected $table = 'product_popular';
    protected $primaryKey = 'id_popular';
}
