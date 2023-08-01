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

    <h1 class="heading">Checkout</h1>

    <form method="POST" id="checkoutForm" action="{{ route('checkout.store') }}">
      @csrf
       <div class="left-section">
        <label for="email"><b>Email:</b></label>
        <input type="email" id="email" name="email"  required>
        <br>

        <label for="contactNo"><b>Contact No:</b></label>
        <input type="text" id="contactNo" name="contactNo" required>
        <br>

        <label for="deliveryAddress"><b>Delivery Address:</b></label><br>
        <label for="streetAddress" style="font-weight:lighter;">Street Address:</label>
        <textarea id="streetAddress" name="streetAddress"></textarea><br>
        <label for="city">City:</label>
        <select id="city" name="city" >
            <option value="">Select City</option>
            <option value="Homagama">Homagama</option>
            <option value="Kesbewa">Kesbewa</option>
            <option value="Maharagama">Maharagama</option>
            <option value="Moratuwa">Moratuwa</option>
            <option value="Piliyandala">Piliyandala</option>
            <option value="Kottawa">Kottawa</option>
        </select><br>
        <label for="country">Country:</label>
        <select id="country" name="country">
            <option value="">Select a Country</option>
            <option value="Sri Lanka">Sri Lanka</option>
        </select>
        <br>
        <br>
       </div>
       <div class="right-section">
        <label for="Payment_Method"><b>Payment Method:</b></label>
        <br>
        <label for="debitCreditCard">
            <input type="radio" id="debitCreditCard" name="paymentMethod" value="debitCreditCard"  >
            <span style="font-weight:lighter;">Debit/Credit Card</span>
        </label>
        <label for="cashOnDelivery">
            <input type="radio" id="cashOnDelivery" name="paymentMethod" value="cashOnDelivery" >
            <span style="font-weight:lighter;">Cash on Delivery</span>
        </label>
        <label for="bankDeposit">
            <input type="radio" id="bankDeposit" name="paymentMethod" value="bankDeposit" >
            <span style="font-weight:lighter;">Bank Deposit</span>
        </label>
        <br><br>

        <label><b>Payment Option:</b></label>
        <br>
        <label for="payAdvance">
            <input type="radio" id="payAdvance" name="paymentOption" value="payAdvance" >
            <span style="font-weight:lighter;">Pay Advance</span> <span style="color:red;">(This option is only available for Online Payment Users)</span></label>
        <label for="payFullPayment">
            <input type="radio" id="payFullPayment" name="paymentOption" value="payFullPayment" >
            <span style="font-weight:lighter;">Pay Full Payment</span></label>
        <br><br>

        <label for="deliveryNote"><b>Delivery Note:</b></label>
        <textarea id="deliveryNote" name="deliveryNote"></textarea>
        <button type="submit" id="confirmOrderButton">Confirm Order</button>

        <br>
        </div>
    </form>

    <!-- <div class="bankAccDetails">
        <h3>Bank Account Details:</h3>
        <br>
        <p>Account Name: D.S.B. Fernando</p>
        <p>Account No :0430-35372791-101</p>
        <p>Bank Name : Seylan Bank</p>
        <p>Branch Name : Homagama</p>
        <br> 
        <img src="{{ asset('images/QR_Code.png') }}" alt="qr_code" style="width:50px; height:50px; margin-left:100px;">
    </div> -->


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
