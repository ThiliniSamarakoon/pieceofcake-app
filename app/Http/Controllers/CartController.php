<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;


class CartController extends Controller
{
    public function showCartPage()
{
    // Retrieve orders from the database 
    $latestOrderID = Order::with('product')->latest('OrderID')->first();

    if ($latestOrderID) {
        // Retrieve the product associated with the latest order
         $product = $latestOrderID->product;

        if ($product) {
            // Get the image path of the product
            $imagePath = asset($product->image);

            // Get the price of the latest order
            $price = $latestOrderID->Price;
            

        } else {
            // Default image path if product is not found
            $imagePath = asset('images/default.jpeg');

            // Default price if product is not found
            $price = 0;
            
        }
    }
    else {
        // Default image path if order is not found
        $imagePath = asset('images/default2.jpeg');

        // Default price if order is not found
        $price = 0;
        
    }


        // Pass the latest order's OrderID to the view
        return view('html.cart-page', compact('latestOrderID','imagePath','price'));
    }

}
