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



    } 
}
}
