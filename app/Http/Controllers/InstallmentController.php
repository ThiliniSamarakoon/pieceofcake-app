<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Installment;
use Illuminate\Support\Facades\Redirect;
use App\Models\Checkout;
use App\Models\Cart;

class InstallmentController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nextPaymentDate' => 'required|date',
            'payAmount' => 'required|numeric|min:500',
            'remainingAmount' => 'required|numeric',
        ]);

        // Get the latest order from the Checkout table
        $latestOrder = Checkout::latest('order_id')->first();

        // Check if the latest order ID exists in the Cart table
        $cart = Cart::where('order_id', $latestOrder->order_id)->first();

        if ($cart) {
            // Fetch the total price from the Cart table
            $totalPrice = $cart->total_price;
        } else {
            $totalPrice = 0;
        }

        $installment = new Installment([
            'order_id' => $latestOrder->id,
            'next_payment_date' => $validatedData['nextPaymentDate'],
            'due_amount' => $totalPrice, 
            'pay_amount' => $validatedData['payAmount'],
            'remaining_amount' => $validatedData['remainingAmount'],
        ]);

        $installment->save();

        // Redirect to the order summary page
        return Redirect::route('order.summary');
    }
}
