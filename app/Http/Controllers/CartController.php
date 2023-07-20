<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;


class CartController extends Controller
{
    public function showCartPage(Request $request)
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

            // Get the weight of the latest order
            $weight = $latestOrderID->Input_Cake_Weight;

        } else {
            // Default image path if product is not found
            $imagePath = asset('images/default.jpeg');

            // Default price if product is not found
            $price = 0;

            // Default weight if product is not found
            $weight = 0;
            
        }
        // Get the user name from the latest order
        $userName = $latestOrderID->UserName;

        // Get user input quantity from the request
        //$quantity = request('quantity', 1);
        $quantity = (int)$request->input('quantity', 1);

        // Calculate the total price by multiplying the Price with Quantity
        $totalPrice = $price * $quantity;

        // Check if the delivery checkbox is checked and add 200 to the total price if it is
            if ($request->has('delivery')) {
                $totalPrice += 200;
            }

        // Check if the user name field is filled
        if ($userName) {
            // Check if the same user has made 3 orders and apply discount if needed
            $userOrdersCount = Order::where('UserName', $userName)->count();
            if ($userOrdersCount >= 3) {
                // Reduce 10% from the total price
                $discountedPrice = $totalPrice * 0.1;
                $totalPrice -= $discountedPrice;
            }
        }
    }
        else {
            // Default image path if order is not found
            $imagePath = asset('images/default2.jpeg');

            // Default price if order is not found
            $price = 0;

            // Default weight if order is not found
            $weight = 0;

            // Default user name if order is not found
            $userName = 'Unknown User';

            // Default total price if order is not found
            $totalPrice = 0;
        
    }


        // Pass the latest order's OrderID to the view
        return view('html.cart-page', compact('latestOrderID','imagePath','price','weight','userName','totalPrice'));
    }

}
