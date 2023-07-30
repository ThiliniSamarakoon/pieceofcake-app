<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Installment extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'next_payment_date',
        'due_amount',
        'pay_amount',
        'remaining_amount',
    ];

    public function checkout()
    {
        return $this->belongsTo(Checkout::class, 'order_id', 'id');
    }
}
