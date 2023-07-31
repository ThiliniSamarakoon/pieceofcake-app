<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class AdminReportsController extends Controller
{
    public function dailyTransactionReports(Request $request)
    {
        // Get the 'from_date' and 'to_date' inputs from the request
        $fromDate = $request->input('from_date');
        $toDate = $request->input('to_date');

        // Fetch the $header content from the view
        $header = view('html.admin-header')->render();
        $footer = view('html.admin-footer')->render();

        // Retrieve orders within the specified date range with their associated cart data
        $orders = Order::whereHas('cart', function ($query) use ($fromDate, $toDate) {
                $query->whereBetween('order_date', [$fromDate, $toDate]);
               })
               ->with(['cart'])
               ->get();

        return view('html.daily-transaction-reports', compact('orders','header', 'footer'));
    }
}
