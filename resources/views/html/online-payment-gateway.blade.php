<!DOCTYPE html>
<html>
<head>
    <title>Online Payment Gateway</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles_online-payment-gateway.css') }}">
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
            <li><button type="button" id="home-button" onclick="window.location.href = '{{ route('cake-shop') }}';">Home</button></li>
            <li><button type="button" onclick="window.location.href = '{{ route('cake-shop') }}#cake-categories'">Cake Categories</button></li>
            <li><button type="button" onclick="window.location.href = '{{ route('login.customized.orders') }}';">Customized Orders</button></li>
            <li><button type="button" onclick="window.location.href = '{{ route('cake-shop') }}#About-Us-Section'">About Us</button></li>
            <li><button type="button" onclick="window.location.href = '{{ route('cake-shop') }}#Contact-Us-Section'">Contact Us</button></li>
            <!-- <li><button type="button" id="login-button" onclick="window.location.href = '{{ route('customer.register') }}';">Register / Login</button></li> -->
            <li class="top-right">
                <i class="fas fa-shopping-cart"  title="My Cart" ></i>
                <i class="fas fa-user"></i>
                <i class="fas fa-search"></i>
            </li>
        </ul>
    </div>

    <div class="container">
        <div class="left-section">
        <h2>Order Details</h2><br>
     <form>
       @csrf
        <div class="order-details">
            <label class="order-details">Order ID:</label>
            <span class="value">{{ $latestOrderId }}</span><br>
        </div><br>
        <div class="order-details">
            <label class="order-details">Grand Total:</label>
            <span class="value">{{ $latestGrandTotal }}</span>
            <hr>
        </div><br>
        <div class="order-details">
            @if($latestPayAmount !== null)
                <label class="order-details">Pay Amount:</label>
                <span class="value">{{ $latestPayAmount }}</span>
            @endif
        </div><br>
        <div class="order-details">
            @if($latestRemainingAmount !== null)
                <label class="order-details">Remaining Amount:</label>
                <span class="value">{{ $latestRemainingAmount }}</span>
            @endif
        </div><br>
        <div class="order-details">
            @if($latestNextPaymentDate !== null)
                <label class="order-details">Next Payment Date:</label>
                <span class="value">{{ $latestNextPaymentDate }}</span>
            @endif
         </div>                 
        </form>
        </div>

        <div class="right-section">
            <h2>Payment Details</h2>
          <form  method="POST" action="{{ route('pay-now') }}">
           @csrf
            <label for="cardNumber">Card Number:</label>
            <input type="text" id="cardNumber" name="cardNumber" placeholder="Enter your card number" >

            <label for="expiryDate">Expiry Date:</label>
            <input type="text" id="expiryDate" name="expiryDate" placeholder="MM / YY" >

            <label for="cvv">CVV:</label>
            <input type="text" id="cvv" name="cvv" placeholder="CVV" >

            <label for="cardHolderName">Cardholder Name:</label>
            <input type="text" id="cardHolderName" name="cardHolderName" placeholder="Enter cardholder name" >

            <label for="payAmount">Pay Amount:</label>
            @if($latestPayAmount !== null)
                <!-- Display Pay Amount -->
                <input type="text" id="payAmount" name="payAmount" placeholder="Enter Pay Amount" value="{{ $latestPayAmount }}" readonly>
            @else
                <!-- Display Grand Total -->
                <input type="text" id="payAmount" name="payAmount" placeholder="Enter Pay Amount" value="{{ $latestGrandTotal }}" readonly>
            @endif
            <input type="hidden" name="order_id" value="{{ $latestOrderId }}">
            <button type="submit">Pay Now</button>
        </form>
        </div>
    </div>

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
