<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomizedOrder;

class CustomizedOrderController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form input
        $validatedData = $request->validate([
            'UserName' => 'required',
            'Email' => 'required|email',
            'Password' => 'required',
        ]);

        // Create a new CustomizedOrder instance
        $customizedOrder = new CustomizedOrder();
        $customizedOrder->UserName = $request->input('UserName');
        $customizedOrder->Email = $request->input('Email');
        $customizedOrder->Password = $request->input('Password');

        // Save the CustomizedOrder to the database
        $customizedOrder->save();

        // Redirect the user to a success page or perform any other actions
        return redirect()->route('customer.customized_orders');
    }

    public function success()
    { 
        // Return the view for the customized.orders  page
        return view('customer.customized_orders');
    }
}

