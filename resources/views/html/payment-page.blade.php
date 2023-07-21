<!DOCTYPE html>
<html>
<head>
    <title>Checkout</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles_payment-page.css') }}">
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/script_payment-page.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
            <li><button type="button" id="login-button" onclick="window.location.href = '{{ route('customer.register') }}';"  >Register</button></li>
            <li class="top-right">
                <i class="fas fa-shopping-cart" onclick="window.location.href = '{{ route('cart.page') }}';" title="My Cart" ></i>
                <i class="fas fa-user"></i>
                <i class="fas fa-search"></i>
            </li>
        </ul>
    </div>

    <h1 class="heading">Checkout</h1>

    <form method="POST" action="{{ route('checkout.store') }}">
      @csrf
        <label for="name"><b>Name:</b></label>
        <input type="text" id="name" name="name" pattern="[A-Za-z ]+" required><!-- Allow only letters and spaces in the Name field.-->
        <br>

        <label for="contactNo"><b>Contact No:</b></label>
        <input type="text" id="contactNo" name="contactNo" required>
        <br>

        <label for="deliveryAddress"><b>Delivery Address:</b></label>
        <textarea id="deliveryAddress" name="deliveryAddress" ></textarea>
        <br>

        <label><b>Payment Method:</b></label>
        <br>
        <label for="debitCreditCard">
            <input type="radio" id="debitCreditCard" name="paymentMethod" value="debitCreditCard" >
            Debit/Credit Card
        </label>
        <label for="cashOnDelivery">
            <input type="radio" id="cashOnDelivery" name="paymentMethod" value="cashOnDelivery" >
            Cash on Delivery
        </label>
        <label for="bankDeposit">
            <input type="radio" id="bankDeposit" name="paymentMethod" value="bankDeposit" >
            Bank Deposit
        </label>
        <br>

        <label><b>Payment Option:</b></label>
        <br>
        <label for="payAdvance">
            <input type="radio" id="payAdvance" name="paymentOption" value="payAdvance" >
            Pay Advance <span style="color:red;">(This option is only available for Online Payment Users)</span></label>
        <label for="payFullPayment">
            <input type="radio" id="payFullPayment" name="paymentOption" value="payFullPayment" >
            Pay Full Payment</label>
        <br>

        <label for="deliveryNote"><b>Delivery Note:</b></label>
        <textarea id="deliveryNote" name="deliveryNote"></textarea>
        <br>

        <button type="submit" id="confirmOrderButton">Confirm Order</button>
    </form>

    <div class="bankAccDetails">
        <h3>Bank Account Details:</h3>
        <br>
        <label>Account No: 1234567890</label>
        <br>
        <label>Account Name: S.M.T. Bhagya</label>
        <br>
        <label>Bank Name: ABC Bank</label>
        <br>
        <label>Branch Name: Colombo Branch</label>
        <br>
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
