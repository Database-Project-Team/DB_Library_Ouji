<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $table = "orders";
    public $incrementing = false;
    public $timestamps = false;
}
