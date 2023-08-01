<!DOCTYPE html>
<html>
<head>
    <title>Update Product</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles_admin-home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles_admin-update-product.css') }}">
</head>
<body>
    {!! $header !!}

    <h1>Update Product</h1>

    <form id="updateProductForm" action="{{ route('product.update.submit') }}" method="post">
        @csrf
        <input type="hidden" name="productId" value="{{ $product->ProductID }}">
        <label for="updatedPrice">Update Price:</label>
        <input type="text" step="0.01" name="updatedPrice" id="updatedPrice" value="{{ $product->price }}">
        <br>
        <label for="updatedCategory">Update Category:</label>
        <select id="cake-categories" name="category">
            <option value="Birthday_Cakes" data-category="Birthday_Cakes">Birthday Cakes</option>
            <option value="Wedding_Structures" data-category="Wedding_Structures">Wedding Structures</option>
            <option value="Cup_Cakes" data-category="Cup_Cakes">Cup Cakes</option>
            <option value="Wedding_Cakes" data-category="Wedding_Cakes">Wedding Cakes</option>
            <option value="Celebration_Cakes" data-category="Celebration_Cakes">Celebration Cakes</option>
            <option value="Gift_Packs" data-category="Gift_Packs">Gift Packs</option>
        </select>
        <br>
        <label for="updatedImage">Update Image:</label>
        <input type="file" name="updatedImage" id="updatedImage">
        <br><br>
        <label for="updatedItemName">Update Item Name:</label>
        <input type="text" name="updatedItemName" id="updatedItemName" value="{{ $product->item_name }}">
        <br>
        <button type="submit">Update</button>
    </form>

    {!! $footer !!}
</body>
</html>
