<?php

namespace App\Models;
use App\Models\Customer;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $primaryKey = 'OrderID';

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

 /*  public function customer()
{
    return $this->belongsTo(Customer::class, 'CustomerID');
}*/

   public function cart()
    {
       return $this->hasOne(Cart::class);
    }

}
