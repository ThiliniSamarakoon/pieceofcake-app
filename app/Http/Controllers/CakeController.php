<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CakeController extends Controller
{
    public function showCakeDetails(Request $request)
{
    if ($request->isMethod('post')) {
        // Handle POST request
        // Retrieve the submitted form data
        $formData = $request->all();
        $productId = $request->input('product_id');

        // Get the product ID from the form data
        $productId = $formData['product_id'];

        // Retrieve the product details from the database
        $product = Product::find($productId);

        // Display the product details
        return view('html.cake-details', ['product' => $product]);

    } else {
        // Handle GET request
        // You can add any necessary logic for the GET request here
        // For example, if you want to display a form to input the product ID
        return view('customer.cake-details');

    }
}

}
