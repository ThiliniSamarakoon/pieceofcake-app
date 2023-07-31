<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecondInstallmentController extends Controller
{
    public function processSecondInstallment(Request $request)
    {
        // Retrieve the orderId from the form submission
        $orderId = $request->input('orderId');

        
        return view('html.online-payment-gateway', ['orderId' => $orderId]);
    }
}
