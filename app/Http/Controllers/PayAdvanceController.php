<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PayAdvanceController extends Controller
{

    public function index()
{
        // Get the latest order
        $latestOrder = Cart::latest()->first();

        // Get the total price of the latest order
        $totalPrice = $latestOrder->total_price;

        // Store the total price in the session
        session()->put('totalPrice', $totalPrice);

        // Return the view
        return view('html.pay-advance-page', with('totalPrice', $totalPrice));
}


}

