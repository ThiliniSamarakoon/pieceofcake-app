<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use Illuminate\Support\Facades\View;
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
        //$latestDeliveryStatus = Cart::latest()->value('delivery');

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

        // If the latest payment option is "Pay Full Payment" 
        if ($latestPaymentOption === 'payFullPayment') {
            // Set the "Next payment date" to null and "Remaining amount" to Rs. 0.00
            $latestNextPaymentDate = null;
            $latestRemainingAmount = 0.00;
        } else {
            // Retrieve the latest Next payment date from the installments table
            $latestNextPaymentDate = Installment::latest()->value('next_payment_date');

            // Retrieve the latest remaining amount from the installments table
            $latestRemainingAmount = Installment::latest()->value('remaining_amount');
        }

        // Pass the latest order ID to the view
        return view('html.order-summary-page', compact('latestOrderId',
        'latestProductId',
        'latestOrderId',
        'latestName',
        'latestImage',
        'latestCakeType',
        'latestQuantity',
        'latestWeight',
        'latestPrice',
        'latestOrderDate',
        'latestNextPaymentDate',
        'latestRemainingAmount',
        'latestPaymentMethod',
        'latestPaymentOption'));
    }

    public function processOrder(Request $request)
    {
        // Retrieve the data that want to include in the PDF
        $latestOrderId = Cart::latest()->value('order_id');
        $latestProductId = Order::latest()->value('ProductID');
        $latestName = Checkout::latest()->value('name');
        $latestWeight = Order::latest()->value('Input_Cake_Weight');
        $latestPrice = Cart::latest()->value('total_price');
        $latestOrderDate = Cart::latest()->value('order_date');
        $latestNextPaymentDate = Installment::latest()->value('next_payment_date');
        $latestRemainingAmount = Installment::latest()->value('remaining_amount');
        $latestPaymentMethod = Checkout::latest()->value('payment_method');
        $latestPaymentOption = Checkout::latest()->value('payment_option');

        // Retrieve the latest payment method from the checkout table
        $latestPaymentMethod = Checkout::latest()->value('payment_method');

        if ($latestPaymentMethod === 'debitCreditCard') {
            // Redirect to the Online Payment Gateway page
            return redirect()->route('online.payment.gateway');
        } else {
            // Load the view with the retrieved data
           $html = View::make('pdf.order-summary-pdf', compact(
                'latestName',
                'latestOrderDate',
                'latestOrderId',
                'latestPaymentMethod',
                'latestNextPaymentDate',
                'latestRemainingAmount',
                'latestProductId',
                'latestWeight',
                'latestPrice',
                'latestPaymentOption'
            ))->render();

            // Create a new DOMPDF instance
            $dompdf = new Dompdf();

            // Load the HTML into DOMPDF
            $dompdf->loadHtml($html);

            // (Optional) Set PDF options (e.g., paper size, orientation, etc.)
            $dompdf->setPaper('A4', 'portrait');

            // Render the PDF
            $dompdf->render();

            // Output the generated PDF to the browser
            //return $dompdf->stream('order_summary.pdf');

             // Output the generated PDF to the browser
            $pdfContent = $dompdf->output();
        
            // Display an alert message to the user
            echo "<script>alert('Order submitted successfully.');</script>";

            // Return the PDF content as a response to download the PDF
            return response($pdfContent)
                ->header('Content-Type', 'application/pdf')
                ->header('Content-Disposition', 'inline; filename="order_summary.pdf"');
    }
  }
}
