<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Cart;
use App\Models\Checkout;

class AdminOrdersController extends Controller
{
    public function displayOrders()
    {
    // Fetch all orders with their associated cart and checkout data
    $orders = Order::with(['cart', 'checkout'])->get();

    // Fetch the $header content from the view
    $header = view('html.admin-header')->render();
    $footer = view('html.admin-footer')->render();

    return view('html.admin-orders-page', compact('orders','header', 'footer'));
    }

    public function updatePaymentStatus(Request $request, Order $order)
        {
            // Validate the form data, if necessary

            // Update the payment status
            //$order->update(['PaymentStatus' => $request->payment_status]);

            // Update the payment status
            $order->PaymentStatus = $request->payment_status;
            $order->save();


            // Redirect back to the orders page with a success message, if desired
            return redirect()->route('admin.orders')->with('success', 'Payment status updated successfully.');
        }
}
