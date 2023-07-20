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
       
        // Create a new order record
       
        $order = new Order();
        $order->ProductID = $request->input('product_id');
        $order->Cake_Name = $request->input('cake-name');
        $order->Price = $request->input('price');
        $order->Item_Weight = $request->input('item_weight');
        $order->Cake_Type = $request->input('cake_type');
        $order->Icing_Type = $request->input('icing_type');
        $order->UserName = $request->input('user_name', null);
        $order->Input_Cake_Weight = $request->input('cake-weight');
        $order->Input_Cake_Type = $request->input('input_cake_type');
        $order->Message_on_cake = $request->input('message_on_cake');
        $order->Rating = $request->input('rating',0);
        $order->Feedbacks = $request->input('feedbacks');
        $order->Reviews = $request->input('review', null);
 

         // Check if the username exists in the customer table
         $username = $request->input('user_name');
         if ($username) {
              $customer = Customer::where('UserName', $username)->first();

         if (!$customer) {
            // Username does not exist, handle the error by storing the error message in the session
            $errorMessage = 'Invalid username. Please enter a valid username.';
            session()->flash('error', $errorMessage);
            return redirect()->back()->withInput();
            }
          }

         
         // Save the order
        if ($order->save()) {
            // Success message or further processing
            session()->flash('success', 'Order saved successfully!');
            return redirect()->route('cart.page');
        } else {
            // Error message or redirect back with error
            $errorMessage = $order->getConnection()->getPdo()->errorInfo();
            return back()->withErrors(['error' => 'Failed to add order to cart. Please try again.']);
        }
    }

    public function deleteOrder($orderId)
    {
        // Find the order by ID
        $order = Order::find($orderId);

        if (!$order) {
            // If the order with the provided ID doesn't exist, return an error response
            return response()->json(['message' => 'Order not found'], 404);
        }

        // Delete the order
        $order->delete();

        // Return a success response
        return response()->json(['message' => 'Order deleted successfully']);
    }
}
