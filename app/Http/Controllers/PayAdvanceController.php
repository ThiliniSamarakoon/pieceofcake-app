<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PayAdvanceController extends Controller
{
    /*public function showPayAdvanceForm()
    {
         // Retrieve the latest order from the cart table by order_id
        $latestOrder = Cart::orderBy('order_id', 'desc')->first();

        // Check if the latest order exists
        if ($latestOrder) {
            // Retrieve the order date from the latest order
            $orderDate = $latestOrder->order_date;

            // Get the total price from the latest order
            $totalPrice = $latestOrder->total_price;

        }else {
            // If no orders found, set default values
            $orderDate = date('Y-m-d', strtotime('+30 day'));
            $totalPrice = 0;

        }

         // Pass the data to the Pay Advance form view
        return view('html.pay-advance-page', compact('orderDate', 'totalPrice'));

    }*/

    public function index()
{
        // Get the latest order
        $latestOrder = Cart::latest()->first();

        // Get the total price of the latest order
        $totalPrice = $latestOrder->total_price;

        // Store the total price in the session
        session()->put('totalPrice', $totalPrice);

        // Return the view
        return view('html.pay-advance-page', with('totalPrice', $totalPrice));
}


}

