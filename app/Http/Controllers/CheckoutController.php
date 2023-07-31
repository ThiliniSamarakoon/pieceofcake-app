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
            'email' => 'required|string|max:255',
            'contactNo' => 'required|string|max:15',
            'streetAddress' => 'nullable|string',
            'city' => 'nullable|string',
            'paymentMethod' => 'required|string|max:255',
            'paymentOption' => 'required|string|max:255',
            'deliveryNote' => 'nullable|string',
        ]);

     
        // Retrieve the relevant OrderID from the cart table
        $cartData = Cart::latest('order_id')->first();
        if ($cartData) {
            $checkout = new Checkout([
                'order_id' => $cartData->order_id,
                'email' => $validatedData['email'],
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
                return redirect()->route('checkout.pay-advance');
            } elseif ($validatedData['paymentMethod'] === 'debitCreditCard' && $validatedData['paymentOption'] === 'payFullPayment') {
                // Debit/Credit Card and Pay Full Payment selected, redirect to Online Payment Gateway view
                return redirect()->route('online.payment.gateway');
            } else {
                // Other payment options, redirect to Order Summary view
                return redirect()->route('order.summary');
            }


        }else {
                // Handle the case when cart data is not found
                return back()->with('error', 'Cart data not found. Please try again.');
            }
    }
  

    public function payAdvance(Request $request)
    {
        return view('html.pay-advance-page');
    }

    public function orderSummary(Request $request)
    {

        // Retrieve the latest order ID from the Cart table
        $latestOrderId = Cart::latest()->value('order_id');

        // Retrieve the latest product ID from the orders table
        $latestProductId = Order::where('order_id', $latestOrderId)->value('ProductID');

        // Retrieve the latest email from the checkout table
        $latestName = Checkout::where('order_id', $latestOrderId)->value('email');

        // Retrieve the latest image from the cart table
        $latestImage = Cart::where('order_id', $latestOrderId)->value('image_path');

        // Retrieve the latest cake type from the orders table
        $latestCakeType = Order::where('order_id', $latestOrderId)->value('Input_Cake_Type');

        // Retrieve the latest quantity from the cart table
        $latestQuantity = Cart::where('order_id', $latestOrderId)->value('quantity');

        // Retrieve the latest weight from the orders table
        $latestWeight = Order::where('order_id', $latestOrderId)->value('Input_Cake_Weight');

        // Retrieve the latest delivery status from the cart table
        $latestDeliveryStatus = Cart::where('order_id', $latestOrderId)->value('delivery');

        // Retrieve the latest price from the cart table
        $latestPrice = Cart::where('order_id', $latestOrderId)->value('total_price');

        // Retrieve the latest order date from the cart table
        $latestOrderDate = Cart::where('order_id', $latestOrderId)->value('order_date');

        // Retrieve the latest Next payment date from the installments table
        //$latestNextPaymentDate = Installment::where('order_id', $latestOrderId)->latest()->value('next_payment_date');

        // Retrieve the latest remaining amount from the installments table
        //$latestRemainingAmount = Installment::where('order_id', $latestOrderId)->latest()->value('remaining_amount');

        // Retrieve the latest payment method from the checkout table
        $latestPaymentMethod = Checkout::where('order_id', $latestOrderId)->value('payment_method');

        // Retrieve the latest payment option from the checkout table
        $latestPaymentOption = Checkout::where('order_id', $latestOrderId)->value('payment_option');

        // Pass the data to the view
        return view('html.order-summary-page', compact(
            'latestOrderId',
            'latestProductId',
            'latestName',
            'latestImage',
            'latestCakeType',
            'latestQuantity',
            'latestWeight',
            'latestDeliveryStatus',
            'latestPrice',
            'latestOrderDate',
            //'latestNextPaymentDate',
            //'latestRemainingAmount',
            'latestPaymentMethod',
            'latestPaymentOption'
        ));
    }
}
