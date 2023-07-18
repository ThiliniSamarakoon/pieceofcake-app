<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;

class CartController extends Controller
{
    public function store(Request $request)
    {   
         // Retrieve the order details from the database based on the provided order_id
        $order = Order::find($request->input('order_id'));

        if (!$order) {
            // Handle the case when the order is not found
            
            return redirect()->back()->with('error', 'Order not found.');
     }

        // Access the order ID
        $orderID = $order->OrderID;

        // Create a new cart record
        $cart = new Cart();
        $cart->order_id = $orderID;
        $cart->order_qty = $request->input('order_qty');
        $cart->delivery = $request->input('delivery');
        $cart->user_name = $request->input('user_name');
        $cart->registered = $request->input('registered');
        $cart->total_price = $request->input('total_price');
        $cart->image = $request->input('image');
        $cart->price = $request->input('price');
        $cart->order_date = $request->input('order_date');
        $cart->weight = $request->input('weight');

        if ($cart->save()) {
            // Pass the newly added cart item to the view
            return view('html.cart-overview', compact('cart'));
        } else {
             // Error message or redirect back with error
             return redirect()->back()->with('error', 'Failed to add cart item.');
        }
    }
    /*public function index()
    {
        // Retrieve the orders from the database
        $orders = Order::all();

        // Pass the orders to the view
        return view('cart.index', ['orders' => $orders]);
    }

    public function cart()
    {
        // Retrieve orders from the database
        $orders = Order::all();

        // Pass the orders to the view
        return view('html.cart-overview', ['orders' => $orders]);
    }*/
}
