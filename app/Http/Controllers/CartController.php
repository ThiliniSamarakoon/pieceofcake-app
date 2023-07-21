<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function showCartPage(Request $request)
    {
    // Retrieve orders from the database 
    $latestOrderID = Order::with('product')->latest('OrderID')->first();

    // Retrieve the current order from the session
    $currentOrder = $request->session()->get('currentOrder');

    // Retrieve all orders from the session
    $orders = $request->session()->get('orders', []);

    // Filter out the deleted order from the orders collection
    $orders = collect($orders)->filter(function ($order) use ($currentOrder) {
        return $order !== $currentOrder;
    });

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

    public function proceedToCheckout(Request $request)
    {
        // Retrieve data from the request
        $orderId = $request->input('order_id');
        $imagePath = $request->input('image_path');
        $price = $request->input('price');
        $quantity = $request->input('quantity');
        $weight = $request->input('weight');
        $orderDate = $request->input('order_date');
        $delivery = $request->input('delivery', 0);
        $userName = $request->input('user_name');
        $registered = $request->input('registered', 0);
        $totalPrice = $request->input('total_price');


        // Save the data in the "cart" table
        DB::table('cart')->insert([
            'order_id' => $orderId,
            'image_path' => $imagePath,
            'price' => $price,
            'quantity' => $quantity,
            'weight' => $weight,
            'order_date' => $orderDate,
            'delivery' => $delivery,
            'user_name' => $userName,
            'registered' => $registered,
            'total_price' => $totalPrice,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Redirect back to the cart page or to the checkout page
        return redirect()->route('cart.page')->with('success', 'Order has been added to cart.');
    }

        public function deleteOrder($orderId)
    {
        $order = Order::find($orderId);
        if (!$order) {
            return Redirect::back()->with('error', 'Order not found.');
        }

        // If the order exists, delete it
        $deleted = $order->delete();
        if ($deleted) {
            return Redirect::back()->with('success', 'Order deleted successfully.');
        } else {
            return Redirect::back()->with('error', 'Failed to delete the order.');
        }
    }
}
