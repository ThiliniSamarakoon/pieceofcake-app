<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductCatalogController extends Controller
{
    public function showProductCatalog()
    {

        // Fetch the $header content from the view
        $header = view('html.admin-header')->render();
        $footer = view('html.admin-footer')->render();
        $products = Product::all();

        

        return view('html.admin-product-catalog', compact('header', 'footer', 'products'));
    }
}
