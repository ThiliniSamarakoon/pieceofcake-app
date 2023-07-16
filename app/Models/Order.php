<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'OrderID',
        'ProductID',
        'Cake_Name',
        'Price',
        'Item_Weight',
        'Cake_Type',
        'Icing_Type',
        'Input_Cake_Weight',
        'Input_Cake_Type',
        'Message_on_cake',
        'Rating',
        'Feedbacks',
        'Reviews',
    ];
}
