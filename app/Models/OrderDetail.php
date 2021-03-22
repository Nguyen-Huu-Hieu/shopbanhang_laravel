<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    public function order()
    {
        $this->belongsTo('App\Models\Order', 'order_id', 'id');
    }
}
