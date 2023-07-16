<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Customer;

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
        /*$request->validate([
            'product_id' => 'required',
            'cake-name'=> 'required',
            'price' => 'required',
            'item_weight' => 'required',
            'cake_type' => 'required',
            'icing_type' => 'required',
            'cake-weight' => 'required',
            'cake-type' => 'required',
            'message_on_cake' => 'nullable|string|max:30',
            'rating' => 'nullable|integer',
            'feedbacks' => 'nullable|string',
            'review' => 'nullable|string',
        ]);*/

        

        // Create a new order record
       
        $order = new Order();
        //dd($request->input('product_id'));
        $order->ProductID = $request->input('product_id');
        $order->Cake_Name = $request->input('cake-name');
        $order->Price = $request->input('price');
        $order->Item_Weight = $request->input('item_weight');
        $order->Cake_Type = $request->input('cake_type');
        $order->Icing_Type = $request->input('icing_type');
        $order->UserName = $request->input('user_name');
        $order->Input_Cake_Weight = $request->input('cake-weight');
        $order->Input_Cake_Type = $request->input('cake-type');
        $order->Message_on_cake = $request->input('message_on_cake');
        $order->Rating = $request->input('rating');
        $order->Feedbacks = $request->input('feedbacks');
        $order->Reviews = $request->input('review');
        //$order->save();

         // Check if the username exists in the customer table
         //$customer = Customer::where('UserName', $request->input('user_name'))->first();
         $customer = Customer::where('UserName', $request->input('user_name'))->first();

         if (!$customer) {
            // Username does not exist, handle the error by storing the error message in the session
            $errorMessage = 'Invalid username. Please enter a valid username.';
            session()->flash('error', $errorMessage);
            echo "<script>alert('$errorMessage');</script>";
            dd('Invalid User Name');
            return redirect()->back();
}
         // Redirect to the cart page
        //return redirect()->route('customer.cart.overview');

        if ($order->save()) {
        // Success message or redirect
            return redirect()->route('customer.cart.overview')->with('success', 'Order added to cart successfully!');
        }
        else {
        // Error message or redirect back with error
        return redirect()->back()->with('error', 'Failed to add order to cart.');
        }
        
    }
}
