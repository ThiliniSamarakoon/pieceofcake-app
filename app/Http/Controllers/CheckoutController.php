<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form inputs
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'contactNo' => 'required|string|max:15',
            'deliveryAddress' => 'nullable|string',
            'paymentMethod' => 'required|string',
            'paymentOption' => 'required|string',
            'deliveryNote' => 'nullable|string',
        ]);

        // Retrieve the relevant OrderID from the cart table
        $cartData = Cart::latest('order_id')->first();

        if ($cartData) {
            DB::table('checkout')->insert([
                'order_id' => $cartData->order_id,
                'name' => $validatedData['name'],
                'contact_no' => $validatedData['contactNo'],
                'delivery_address' => $validatedData['deliveryAddress'],
                'payment_method' => $validatedData['paymentMethod'],
                'payment_option' => $validatedData['paymentOption'],
                'delivery_note' => $validatedData['deliveryNote'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            return back()->with('success', 'Order confirmed successfully!');
        }
            return back()->with('error', 'Error occurred during checkout. Please try again.');
    }
}
