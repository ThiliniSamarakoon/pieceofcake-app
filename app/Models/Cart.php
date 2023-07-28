<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $table = 'cart';

    protected $fillable = [
        'order_id',
        'order_qty',
        'delivery',
        //'user_name',
        //'registered',
        'total_price',
        'image',
        'price',
        'order_date',
        'weight',

    ];

     public function order()
    {
        return $this->belongsTo(Order::class);
    }

    // Define the relationship with Checkout model
    public function checkout()
    {
        return $this->hasOne(Checkout::class, 'order_id', 'order_id');
    }
}
