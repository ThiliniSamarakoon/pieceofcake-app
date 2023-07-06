<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'Price',
        'Rating',
        'Description',
        'Weight',
        'Cake_type',
        'Message_on_cake',
        'Review',
    ];
}
