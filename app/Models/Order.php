<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function customer()
    {
        return $this->belongsTo('App\Models\Customer', 'customer_id', 'id');
    }

    public function payment()
    {
        return $this->belongsTo('App\Models\Payment', 'payment_id', 'id');
    }

    public function order_detail()
    {
        return $this->hasMany('App\Models\OrderDetail', 'order_id', 'id');
    }

    public function shipping()
    {
        return $this->belongsTo('App\Models\Shipping', 'shipping_id', 'id');
    }
}
