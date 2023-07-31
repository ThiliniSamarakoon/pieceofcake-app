<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\Order;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'ProductID',
        'image',
        'price',
        'category',
        'item_name',
        'item_weight',
        'cake_type',
        'icing_type',
        'rating',
        'feedbacks',
        'data_category',
        //'alt_text',
    ];

    // Method to retrieve products from the database
    public static function getProducts()
    {
        $products = DB::table('products')->get();
        return $products;
    }

    public function orders()
    {
        return $this->hasMany(Order::class, 'ProductID','ProductID');
    }

}


