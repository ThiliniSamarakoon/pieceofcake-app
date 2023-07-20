<!DOCTYPE html>
<html>
<head>
    <title>My Cart</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles_cart-page.css') }}">
    <script src="{{ asset('js/script.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

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
            <li><button type="button" id="login-button" onclick="window.location.href = '{{ route('customer.register') }}';"  >Register</button></li>
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
    <h1 style="text-align:center;">My Cart</h1>

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
                    <th>Delivery</th>
                    <th>User Name</th>
                    <th>Registered/Not</th>
                    <th>Total Price</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $latestOrderID->OrderID }}</td>
                    <td>
                        @if ($imagePath)
                            <img src="{{ $imagePath }}" alt="Order Image" width="100" height="100">
                        @else
                            <img src="{{ asset('images/default.jpeg') }}" alt="Default Image" width="500" height="500">
                        @endif
                    </td>
                    <td>Rs.{{ number_format($price, 2) }}</td>
                    <td>
                        <input type="number" name="quantity" value="1" min="1" style="width: 50px;">
                    </td>
                </tr>
            </tbody>
    </table>
    </div>
    <button type="submit">Proceed to Checkout</button>

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
  
</body>
</html>
