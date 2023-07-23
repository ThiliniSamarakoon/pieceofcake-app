<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Checkout;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CheckoutController extends Controller
{

    public function store(Request $request)
    {
    
        // Validate the form inputs
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'contactNo' => 'required|string|max:15',
            'streetAddress' => 'nullable|string',
            'city' => 'nullable|string',
            'paymentMethod' => 'required|string|max:255',
            'paymentOption' => 'required|string|max:255',
            'deliveryNote' => 'nullable|string',
        ]);

     try {
        // Retrieve the relevant OrderID from the cart table
        $cartData = Cart::latest('order_id')->first();
        if ($cartData) {
            $checkout = new Checkout([
                'order_id' => $cartData->order_id,
                'name' => $validatedData['name'],
                'contact_no' => $validatedData['contactNo'],
                'street_address' => $validatedData['streetAddress'],
                'city' => $validatedData['city'],
                'payment_method' => $validatedData['paymentMethod'],
                'payment_option' => $validatedData['paymentOption'],
                'delivery_note' => $validatedData['deliveryNote'],

            ]);

            // Save the Checkout instance to the database
            $checkout->save();

            // Redirect to the appropriate view based on the payment method and payment option
            if ($validatedData['paymentMethod'] === 'debitCreditCard' && $validatedData['paymentOption'] === 'payAdvance') {
                // Pay Advance and Debit/Credit Card selected, redirect to Pay Advance view
                return $this->payAdvance($request);
            } else {
                // Other cases, redirect to Order Summary view
                return $this->orderSummary($request);
            }

        }else {
                // Handle the case when cart data is not found
                return back()->with('error', 'Cart data not found. Please try again.');
            }
    }catch (\Exception $e) {

        return back()->with('error', 'Error occurred during checkout. Please try again.');
        }

  }


    public function payAdvance(Request $request)
    {
        return view('html.pay-advance-page');
    }

    public function orderSummary(Request $request)
    {
        return view('html.order-summary-page');
    }
}
