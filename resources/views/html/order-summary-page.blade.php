<!DOCTYPE html>
<html>
<head>
    <title>Order Summary</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles_order-summary.css') }}">
    <script src="{{ asset('js/script.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        document.getElementById('orderForm').addEventListener('submit', function (event) {
            event.preventDefault();

            var paymentMethod = document.querySelector('input[name="paymentMethod"]:checked').value;
            document.getElementById('selectedPaymentMethod').value = paymentMethod;

            if (paymentMethod === 'debitCreditCard') {
                // Redirect to the Online Payment Gateway page
                window.location.href = "{{ route('online.payment.gateway') }}";
            } else {
                // Submit the form to generate PDF
                this.submit();
                alert('Order submitted successfully.');
            }
        });
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

    <h1 class="heading">Order Summary</h1>

<div class="order-summary">
    <form id="orderForm" action="{{ route('process.order') }}" method="POST">
      @csrf
        <label for="orderID">Order ID:</label>
        <input type="text" id="orderID" value="{{ $latestOrderId }}" readonly>

        <label for="productID">Product ID:</label>
        <input type="text" id="productID" value="{{ $latestProductId }}" readonly>

        <label for="name">Email:</label>
        <input type="text" id="name" value="{{ $latestName }}" readonly>

        <label for="image">Image:</label>
        <img src="{{ $latestImage }}" alt="Product Image">

        <label for="cakeType">Cake Type:</label>
        <input type="text" id="cakeType" value="{{ $latestCakeType }}" readonly>

        <label for="quantity">Quantity:</label>
        <input type="text" id="quantity" value="{{ $latestQuantity }}" readonly>

        <label for="weight">Weight:</label>
        <input type="text" id="weight" value="{{ $latestWeight }}" readonly>

          <label for="price">Grand Total:</label>
         <input type="text" id="price" value="{{ $latestPrice }}" readonly>

         <label for="OrderDate">Order Date:</label>
         <input type="text" id="OrderDate" value="{{ $latestOrderDate }}" readonly>

         <label for="Next_Payment_Date">Next Payment Date:</label>
         <input type="text" id="Next_Payment_Date" value="{{ $latestNextPaymentDate }}" readonly>

         <label for="Remaining_Amount">Next Payment Amount:</label>
         <input type="text" id="Remaining_Amount" value="{{ $latestRemainingAmount }}" readonly>

         <label for="Payment_Method">Payment Method:</label>
         <input type="text" id="Payment_Method" value="{{ $latestPaymentMethod }}" readonly>
         <input type="hidden" name="selectedPaymentMethod" id="selectedPaymentMethod" value="">

         <label for="Payment_Option">Payment Option:</label>
         <input type="text" id="Payment_Option" value="{{  $latestPaymentOption }}" readonly>

 
        <button type="submit" class="confirmBtn">Confirm Order</button><br>
    </form>
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



</body>
</html>
