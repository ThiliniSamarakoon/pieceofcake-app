<!DOCTYPE html>
<html>
<head>
    <title>Product Catalog</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles_admin-product-catalog.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles_admin-home.css') }}">
</head>
<body>
     {!! $header !!}

    <h1>Product Catalog</h1>
    <table>
        <thead>
            <tr>
                <th>Product ID</th>
                <th>Image</th>
                <th>Price</th>
                <th>Category</th>
                <th>Item Name</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->ProductID }}</td>
                    <td><img src="{{ asset($product->image) }}" alt="Product Image" width="100" height="100"></td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->category }}</td>
                    <td>{{ $product->item_name }}</td>
                    
                     <td><button onclick="updateProduct({{ $product->ProductID }})" class="updateBtn">Update</button></td>
                     <td><button onclick="deleteProduct({{ $product->ProductID }})" class="deleteBtn">Delete</button></td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>

    <script>
        // JavaScript functions for update and delete actions
        function updateProduct(productId) {
            console.log('Update product with ID:', productId);
        }

        function deleteProduct(productId) {
            console.log('Delete product with ID:', productId);
        }
    </script>

  {!! $footer !!}
</body>
</html>
