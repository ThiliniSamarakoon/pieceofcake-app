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
        'user_name',
        'registered',
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
}
