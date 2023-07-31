<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Checkout;
use App\Models\Installment;
use Illuminate\Support\Facades\DB;

class CustomerProfileController extends Controller
{
    public function processCustomerProfile(Request $request)
    {
        // Retrieve the email from the form submission
        $email = $request->input('email');

        // Check the Checkout table's email column for matching emails
        $checkouts = Checkout::where('email', $email)->get();

        if ($checkouts->isEmpty()) {
            // No matching email in the Checkout table
            return redirect()->back()->with('error', 'No matching email in the Checkout table');
        }

        // Initialize an array to store the order IDs
        $orderIds = [];

        // Loop through each matching checkout record
        foreach ($checkouts as $checkout) {
            // Check the payment_option column for "payAdvance"
            if ($checkout->payment_option === 'payAdvance') {
                // If payment_option is "payAdvance", get the relevant order_id
                $orderIds[] = $checkout->order_id;

            }
        }

        if (count($orderIds) > 0) {
            // If there are "payAdvance" orders, pass the array of order IDs to the view
            return view('html.second-installment-pay', ['orderIds' => $orderIds]);
        } else {
            // If none of the checkouts had "payAdvance" payment_option
            return redirect()->back()->with('error', 'Payment option is not payAdvance');
    }
  }
}

