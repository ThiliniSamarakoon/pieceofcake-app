<!DOCTYPE html>
<html>
<head>
    <title>Pay Advance</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles_pay-advance.css') }}">
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/script_pay-advance.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


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

    <h1 class="heading">Pay Advance Form</h1>

    <form id="paymentForm" method="POST">
      @csrf

        <div class="form-group">
            <label for="nextPaymentDate">Next Payment Date:</label>
            <input type="date" id="nextPaymentDate" name="nextPaymentDate" min="{{ date('Y-m-d', strtotime('+1 day')) }}"  max="{{ date('Y-m-d', strtotime('+30 day')) }}"  required>
        </div>

        <div class="form-group">
            <label for="dueAmount">Due Amount:</label><br>
            <span id="dueAmount" name="dueAmount">
                <?php
                // Include the Product model
                use App\Models\Cart;

                // Get the latest order ID
                $latestOrderId = Cart::latest()->first()->id;

                // Get the total price of the latest order
                $totalPrice = Cart::where('id', $latestOrderId)->get()->first()->total_price;

                // Display the total price in the due amount
                echo $totalPrice;
                ?>
            </span>
        </div>

        <div class="form-group">
            <label for="payAmount">Pay Amount:</label>
            <input type="number" id="payAmount" name="payAmount" min="500" step="any" required>
        </div>

        <div class="form-group">
            <label for="remainingAmount">Remaining Amount:</label>
            <input type="text" id="remainingAmount" name="remainingAmount" required>
        </div>

        <button type="submit" id="confirmButton" onclick="calculateRemainingAmount()">Confirm</button>
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



</body>
</html>
