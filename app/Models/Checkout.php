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
        'email',
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

    public function installments()
    {
        //hasMany method specifies that an order can have multiple installments
        return $this->hasMany(Installment::class, 'order_id');

    }

    public function installment()
    {
        return $this->hasOne(Installment::class, 'order_id', 'id');
    }

    /*public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }*/

    /*public function order()
    {
        return $this->belongsTo(Order::class, 'order_id', 'OrderID');
    }*/
}
