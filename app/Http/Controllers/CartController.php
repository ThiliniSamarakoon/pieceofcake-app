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
    $latestOrderID = Order::latest('OrderID')->first();

    if ($latestOrderID) {
        // Retrieve the product associated with the latest order
         $product = $latestOrderID->product;

        if ($product) {
            // Get the image path of the product
            $imagePath = asset($product->image);

            

        } else {
            // Default image path if product is not found
            $imagePath = asset('images/default.jpeg');

            
        }
    }
    else {
        // Default image path if order is not found
        $imagePath = asset('images/default2.jpeg');

        
    }

         // Retrieve the user's quantity input
        $quantity = request('quantity', 1);


        // Pass the latest order's OrderID to the view
        return view('html.cart-page', compact('latestOrderID','imagePath'));
    }

}
