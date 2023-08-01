<!DOCTYPE html>
<html>
<head>
    <title>My Cart</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles_cart-page.css') }}">
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/script_cart-page.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>
        // Define a global variable to hold the route URL for deleting the order
        const deleteOrderRoute = '{{ route('cart.delete', ['orderId' => '__orderId__']) }}';
    </script>

</head>
<body>
    <?php
    //Menu bar
    ?>
    <div class="navbar">
        <ul>
            <li><img src="{{ asset('images/piece_of_cake_logo.jpeg') }}" alt="Logo Icon" width="50" height="50" style="margin-top: 5px;">
            <li><button id="home-button" type="button" onclick="window.location.href = '{{ route('cake-shop') }}';" >Home</button></li>
            <li><button type="button" onclick="window.location.href = '{{ route('cake-shop') }}#cake-categories'">Cake Categories</button></li>
            <li><button type="button" onclick="window.location.href = '{{ route('login.customized.orders') }}';">Customized Orders</button></li>
            <li><button type="button" onclick="window.location.href = '{{ route('cake-shop') }}#About-Us-Section'">About Us</button></li>
            <li><button type="button" onclick="window.location.href = '{{ route('cake-shop') }}#Contact-Us-Section'">Contact Us</button></li>
           <!-- <li><button type="button" id="login-button" onclick="window.location.href = '{{ route('customer.register') }}';"  >Register / Login</button></li> -->
            <li class="top-right">
                <i class="fas fa-shopping-cart" onclick="window.location.href = '{{ route('cart.page') }}';" title="My Cart" ></i>
                <i class="fas fa-user"></i>
                <i class="fas fa-search"></i>
            </li>
        </ul>
    </div>

    <?php
    //Heading
    ?>
    <h1 style="text-align:center; margin-top:10px;">My Cart</h1>

<form id="checkoutForm" method="POST" action="{{ route('cart.proceedToCheckout') }}">
   @csrf
     <div class="cart-container">
     <table>
            <thead>
                <tr>
                    <th>OrderID</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Weight</th>
                    <th>Order Date</th>
                    <th>Delivery<br>(Rs.200.00)</th>
                    <!-- <th>User Name<br><span style="color:red;">(Enjoy a 10% discount for registered accounts after every 3 orders)</span></th> -->
                    <!-- <th>Registered/Not</th> -->
                    <th>Total Price</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
            
                <tr data-order-id="{{ $latestOrderID->OrderID }}">
                    <td><input type="text" name="order_id" value="{{ $latestOrderID->OrderID }}" style="border:none;width:50px;" readonly></td>
                    <input type="hidden" name="image_path" value="{{ $imagePath }}">
                    <td>
                        @if ($imagePath)
                            <img src="{{ $imagePath }}" alt="Order Image" width="225" height="225">
                        @else
                            <img src="{{ asset('images/default.jpeg') }}" alt="Default Image" width="500" height="500">
                        @endif
                    </td>
                    <td><input type="text" name="price" id="priceInput" style="border:none; display: none;" value="{{ $price }}">Rs.{{ number_format($price, 2) }}</td>
                    <td>
                        <input type="number" name="quantity" id="quantityInput" onchange="updateTotalPrice()" value="1" min="1" style="width: 50px;">
                    </td>
                    <td><input type="text" name="weight" value="{{ $weight }}" style="border:none;" readonly></td>
                    <td>
                        <input type="date" name="order_date" min="{{ date('Y-m-d', strtotime('+2 day')) }}" max="{{ date('Y-m-d', strtotime('+90 day')) }}" required>
                     </td>
                     <td><input type="checkbox" name="delivery" value="1" onchange="updateTotalPrice()"></td>

                     <td>
                        <span><input type="text" name="total_price" id="totalPriceInput" data-original-total="{{ $totalPrice }}" value="Rs.{{ $totalPrice }}.00" style="border:none;"  readonly></span>
                     </td>
                      <td><button type="button" class="reset-icon" onclick="deleteOrder({{ $latestOrderID->OrderID }})" ><i class="fas fa-trash"></i></button></td>
                     </tr>
            </tbody>
    </table>
   </div>
        <button type="submit" id="proceedButton">Proceed to Checkout</button>
</form>


     <?php
    //Footer Section
    ?>
 <footer>
  <div class="footer-left">
    <img src="{{ asset('images/piece_of_cake_logo.jpeg') }}" alt="Logo">
  </div>
  <div class="footer-center">
    <p>&copy;2023 Piece Of Cake - All Rights Reserved</p>

  </div>
  <div class="footer-right">
    <p>Feedbacks</p>
    <a href="https://www.facebook.com/Cakes.by.Shiranthi.DeSeram"><i class="fab fa-facebook"></i></a>
    <a href="https://instagram.com/piece.of.cake.20?igshid=YmMyMTA2M2Y"><i class="fab fa-instagram"></i></a>
    <a href="https://wa.me/+94714925742"><i class="fab fa-whatsapp"></i></a>
  </div>
</footer>



<script>
    function deleteOrder(orderId) {
        // Send a DELETE request using AJAX
        fetch(`/cart/${orderId}`, {
            method: 'DELETE',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        })
        .then(response => response.json())
        .then(data => {
            // Process the response data (e.g., show a success message, update the cart view, etc.)
            console.log(data.message);
            // Reload the page to update the cart view
            location.reload();
        })
        .catch(error => {
            // Handle any errors that occur during the request
            console.error('Error:', error);
        });
    }
</script>


</body>
</html>
