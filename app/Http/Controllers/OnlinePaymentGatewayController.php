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
}
