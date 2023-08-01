<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Product;
use App\Models\Order;

class DashboardController extends Controller
{
    public function dashboard()
    {
    $customerCount = Customer::count();
    $productCount = Product::count();
    $orderCount = Order::count();

    return view('html.admin-home', compact('customerCount', 'productCount','orderCount'));
    }
}
