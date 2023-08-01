<!DOCTYPE html>
<html>
<head>
    <title>Product Catalog</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles_admin-product-catalog.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles_admin-home.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
                    <td>
                        <span>{{ $product->price }}</span>
                    </td>
                    <td>
                        <span>{{ $product->category }}</span>
                    </td>
                    <td>
                        <span>{{ $product->item_name }}</span>
                    </td>
                    
                     <td><button class="updateBtn"  type="button" id="updateBtn">Update</button></td>
                     <td><button class="deleteBtn" type="submit">Delete</button></td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>

    
  {!! $footer !!}

  <script>
    // JavaScript function to handle the click event and redirect to the Update Product page
    function redirectToUpdateProduct(productId) {
        window.location.href = "{{ route('product.update', ['productId' => '__productId__']) }}".replace('__productId__', productId);
    }
</script>
  
</body>
</html>
