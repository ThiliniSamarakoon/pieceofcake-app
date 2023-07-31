<?php

namespace App\Models;
use App\Models\Customer;
use App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $primaryKey = 'OrderID';
    protected $table = 'orders';

    protected $fillable = [
        'OrderID',
        'ProductID',
        'Cake_Name',
        'Price',
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
       //return $this->hasOne(Cart::class);
       return $this->hasOne(Cart::class, 'order_id', 'OrderID');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'ProductID','ProductID');
    }

    /*public function checkout()
    {
        return $this->belongsTo(Checkout::class, 'order_id', 'OrderID');
    }*/

    /*public function installment()
    {
        return $this->hasOne(Installment::class, 'order_id');
    }*/

    /*public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }

    public function installment()
    {
        return $this->hasOne(Installment::class, 'order_id', 'OrderID');
    }

    public function checkout()
    {
        return $this->hasOne(Checkout::class, 'order_id', 'OrderID');
    }*/

    public function checkout()
    {
        return $this->hasOne(Checkout::class, 'order_id', 'OrderID');
    }


}


