<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Checkout;
use App\Models\Cart;
use App\Models\Installment;
use App\Models\Order;

class OnlinePaymentGatewayController extends Controller
{
    public function showOrderSummary()
    {

    $latestOrderId = Checkout::latest()->value('order_id');

    // Retrieve the Grand Total from the Cart table based on the matching OrderID
    $latestGrandTotal = Order::where('OrderID', $latestOrderId)
        ->join('cart', 'orders.OrderID', '=', 'cart.order_id')
        ->value('cart.total_price');

    // Retrieve Pay Amount, Remaining Amount, and Next Payment Date from the Installment table
    $latestInstallment = Installment::latest()->first();

    $latestPayAmount = $latestInstallment ? $latestInstallment->pay_amount : null;
    $latestRemainingAmount = $latestInstallment ? $latestInstallment->remaining_amount : null;
    $latestNextPaymentDate = $latestInstallment ? $latestInstallment->next_payment_date : null;

    // Retrieve the latest checkout record's id from the Checkout table
    $latestCheckoutId = Checkout::latest()->value('id');

     // Retrieve Pay Amount, Remaining Amount, and Next Payment Date from the Installment table based on the matching Checkout id
     $latestInstallment = Installment::where('order_id', $latestCheckoutId)->latest()->first();

     $latestPayAmount = $latestInstallment ? $latestInstallment->pay_amount : null;
     $latestRemainingAmount = $latestInstallment ? $latestInstallment->remaining_amount : null;
     $latestNextPaymentDate = $latestInstallment ? $latestInstallment->next_payment_date : null;

    // Pass the retrieved data to the view
    return view('html.online-payment-gateway', compact(
        'latestOrderId',
        'latestGrandTotal',
        'latestPayAmount',
        'latestRemainingAmount',
        'latestNextPaymentDate'
    ));
    }

    public function payNow(Request $request)
    {
        // Retrieve the order ID from the form submission
        $orderId = $request->input('order_id');

        // Retrieve the payment_option from the Checkout table for the relevant order ID
        $paymentOption = Checkout::where('order_id', $orderId)->value('payment_option');

        // Update the PaymentStatus based on payment_option 
        if ($paymentOption === 'payAdvance') {
            // Payment_option is payAdvance, update PaymentStatus to "1st_Installment"
            Order::where('OrderID', $orderId)->update(['PaymentStatus' => '1st_Installment']);
        } else {
            // For any other case, update PaymentStatus to "Completed"
            Order::where('OrderID', $orderId)->update(['PaymentStatus' => 'Completed']);
        }

        // Redirect back to the order summary page 
        return redirect()->route('thank-you.page')->with('success', 'Payment successful!');
        }

     
}
