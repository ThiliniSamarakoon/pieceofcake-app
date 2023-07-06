<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function store(Request $request)
    {
        $order = new Order();
        $order->Price = $request->input('price');
        $order->Rating = $request->input('rating', 0); // Assuming a default value of 0
        $order->Description = $request->input('description');
        $order->Weight = $request->input('weight');
        $order->Cake_type = $request->input('cake_type');
        $order->Message_on_cake = $request->input('message_on_cake', 'No message'); // Assuming a default value of 'No message' when empty
        $order->Review = $request->input('review');
        $order->save();

        // Flash a success message to the session
        session()->flash('success', 'Order created successfully');

        // Redirect to the cart page
        return redirect()->route('customer.cart.overview');
    }
}
