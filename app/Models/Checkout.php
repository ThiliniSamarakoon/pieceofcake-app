<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;

    protected $table = 'checkout';

    protected $fillable = [
        'order_id',
        'name',
        'contact_no',
        'street_address',
        'city',
        'payment_method',
        'payment_option',
        'delivery_note',
    ];

    // Define the inverse relationship with Cart model
    public function cart()
    {
        return $this->belongsTo(Cart::class, 'order_id', 'order_id');
    }
}
