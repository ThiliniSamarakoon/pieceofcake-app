<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();

        return view('html.birthday-cakes-page', compact('products'));
    }


    public function store(Request $request)
    {

        // Retrieve the selected category from the form
        $category = $request->input('category');

         // Define the folder based on the selected category
        $folder = '';

        if ($category === 'Birthday_Cakes') {
            $folder = 'Birthday_Cakes';
        } elseif ($category === 'Wedding_Structures') {
            $folder = 'Wedding_Structures';
        } elseif ($category === 'Cup_cakes') {
            $folder = 'Cup_cakes';
        } elseif ($category === 'Wedding_cakes') {
            $folder = 'Wedding_cakes';
        } elseif ($category === 'Celebration_cakes') {
            $folder = 'Celebration_cakes';
        } elseif ($category === 'Gift_packs') {
            $folder = 'Gift_packs';
        }

        // Store the image in the selected folder
        $imagePath = $request->file('image')->store('public/images/' . $folder);
        $imagePath = str_replace('public/', '', $imagePath);

        $product = new Product();

        $product->ProductID = $request->input('ProductID');
        $product->price = $request->input('price');
        $product->category = $request->input('category');
        $product->item_name = $request->input('item_name');
        $product->item_weight = $request->input('item_weight');
        $product->cake_type = $request->input('cake_type');
        $product->icing_type = $request->input('icing_type');
        $product->rating = $request->input('rating',0);
        $product->feedbacks = $request->input('feedbacks', null);
        $product->data_category = $request->input('data_category');
        //$product->alt_text = $request->input('alt_text');
        $product->image = $imagePath;


     

       

        // Store the image in the selected folder
        //$imagePath = $request->file('image')->store('images/' . $folder, 'public');
        //$product->image = $imagePath;

         

        $product->save();

        return redirect()->back()->with('success', 'Product added successfully.');

        // Fetch all products from the database
        //$products = Product::all();

         // Pass the products to the view
        //return view('html.birthday-cakes-page.blade.php', compact('products'))->with('success', 'Product added successfully.');
    }



}
