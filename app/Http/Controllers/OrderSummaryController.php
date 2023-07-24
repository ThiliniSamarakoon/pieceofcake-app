<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Cart;
use App\Models\Checkout;
use App\Models\Installment;

class OrderSummaryController extends Controller
{
    public function showOrderSummary()
    {
       // Retrieve the latest order ID from the Cart table
        $latestOrderId = Cart::latest()->value('order_id');

        // Retrieve the latest product ID from the orders table
        $latestProductId = Order::latest()->value('ProductID');

        // Retrieve the latest name from the checkout table
        $latestName = Checkout::latest()->value('name');

        // Retrieve the latest image from the cart table
        $latestImage = Cart::latest()->value('image_path');

        // Retrieve the latest cake type from the orders table
        $latestCakeType = Order::latest()->value('Input_Cake_Type');

        // Retrieve the latest quantity from the cart table
        $latestQuantity = Cart::latest()->value('quantity');

        // Retrieve the latest weight from the orders table
        $latestWeight = Order::latest()->value('Input_Cake_Weight');

        // Retrieve the latest delivery status from the cart table
        $latestDeliveryStatus = Cart::latest()->value('delivery');

        // Retrieve the latest price from the cart table
        $latestPrice = Cart::latest()->value('total_price');

        // Retrieve the latest order date from the cart table
        $latestOrderDate = Cart::latest()->value('order_date');

        // Retrieve the latest Next payment date from the installments table
        $latestNextPaymentDate = Installment::latest()->value('next_payment_date');

        // Retrieve the latest remaining amount from the installments table
        $latestRemainingAmount = Installment::latest()->value('remaining_amount');

        // Retrieve the latest payment method from the checkout table
        $latestPaymentMethod = Checkout::latest()->value('payment_method');

        // Retrieve the latest payment option from the checkout table
        $latestPaymentOption = Checkout::latest()->value('payment_option');

        // Pass the latest order ID to the view
        return view('html.order-summary-page', compact('latestOrderId',
        'latestProductId',
        'latestName',
        'latestImage',
        'latestCakeType',
        'latestQuantity',
        'latestWeight',
        'latestDeliveryStatus',
        'latestPrice',
        'latestOrderDate',
        'latestNextPaymentDate',
        'latestRemainingAmount',
        'latestPaymentMethod',
        'latestPaymentOption'));
    }
}
