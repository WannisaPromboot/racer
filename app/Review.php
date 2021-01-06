<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'product_review';
    protected $primaryKey = 'id';
}
