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
        // Validate the request data
        $request->validate([
            'product_id' => 'required',
            'price' => 'required',
            'item_weight' => 'required',
            'cake_type' => 'required',
            'input_cake_weight' => 'required',
            'input_cake_type' => 'required',
            'message_on_cake' => 'nullable|string|max:30',
            'rating' => 'nullable|integer',
            'feedbacks' => 'nullable|string',
            'review' => 'nullable|string',
        ]);


        // Create a new order record
        $order = Order::create([
            'ProductID' => $request->product_id,
            'Price' => $request->price,
            'Item_weight' => $request->item_weight,
            'Cake_type' => $request->cake_type,
            'Input_Cake_Weight' => $request->input_cake_weight,
            'Input_Cake_Type' => $request->input_cake_type,
            'Message_on_cake' => $request->message_on_cake,
            'Rating' => $request->rating,
            'Feedbacks' => $request->feedbacks,
            'Review' => $request->review,
        ]);

        // Flash a success message to the session
        session()->flash('success', 'Order created successfully');

        // Redirect to the cart page
        return redirect()->route('customer.cart.overview');
    }
}
