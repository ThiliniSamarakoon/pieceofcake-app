<!DOCTYPE html>
<html>
<head>
    <title>Customized Orders</title>
    <link rel="stylesheet" href="{{ asset('css/styles_customized_orders.css') }}">
    <script src="{{ asset('js/script_customized-orders.js') }}"></script>
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
                <i class="fas fa-shopping-cart"></i>
                <i class="fas fa-user"></i>
                <i class="fas fa-search"></i>
            </li>
        </ul>
    </div>

    <?php
    //heading
    ?>
    <div class="header">
        <h1 class="customized-cake-heading">Customized Cake</h1>
        <p class="para1">Transform your cake into a masterpiece with our vast selection of elements, <br>cake shapes, text boxes, fill buckets and others!</p>
        <p class="note1"><b>(Please note that to make a customized order first you should have a registered account)</b></p>
        <button id="chooseOptionButton">Choose Options</button>
    </div>

    <?php
    //canvas
    ?>
    <canvas id="canvas"></canvas>
    <input type="color" id="colorPicker">
    <label for="uploadImage" id="uploadImageLabel">
        <img src="{{ asset('images/uploadImage_icon.png') }}" alt="Image">
    </label>
    <input type="file" id="uploadImage" style="display: none">

    <div class="button-container">
        <button id="downloadButton">Download</button>
        <button id="saveButton">Save</button>
        <button id="clearButton" type="reset">Clear</button>
    </div>

    <br>
        <button id="checkout">Checkout</button>
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
