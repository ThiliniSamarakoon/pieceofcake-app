<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

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

    /*public function updateProduct(Request $request)
    {
        $productId = $request->input('productId');
        $product = Product::find($productId);

        if (!$product) {
            return response()->json(['error' => 'Product not found'], 404);
        }

        $product->price = $request->input('updatedPrice');
        $product->category = $request->input('updatedCategory');
        $product->item_name = $request->input('updatedItemName');

        // Check if a new image was uploaded
        if ($request->hasFile('image')) {
            $category = $request->input('updatedCategory');
            $folder = '';

            // Define the folder based on the selected category
            switch ($category) {
                case 'Birthday_Cakes':
                    $folder = 'Birthday_Cakes';
                    break;
                case 'Wedding_Structures':
                    $folder = 'Wedding_Structures';
                    break;
                case 'Cup_cakes':
                    $folder = 'Cup_cakes';
                    break;
                case 'Wedding_cakes':
                    $folder = 'Wedding_cakes';
                    break;
                case 'Celebration_cakes':
                    $folder = 'Celebration_cakes';
                    break;
                case 'Gift_packs':
                    $folder = 'Gift_packs';
                    break;
                default:
                    break;
            }

            // Store the image in the selected folder
            $imagePath = $request->file('image')->store('public/images/' . $folder);
            $imagePath = str_replace('public/', '', $imagePath);

            // Update the product's image field with the new image path
            $product->image = $imagePath;
        }

        $product->save();

        return redirect('/product-catalog')->with('success', 'Product updated successfully');
    }*/

    public function showUpdateProductForm($productId)
    {
        $header = view('html.admin-header')->render();
        $footer = view('html.admin-footer')->render();
        $product = Product::find($productId);

        if (!$product) {
        return response()->json(['error' => 'Product not found'], 404);
    }

        return view('html.admin-update-product', compact('header', 'footer', 'product','productId'));
        }

}
