<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles_login.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/script_login.js') }}"></script>
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
            <li><button type="button" id="login-button" onclick="window.location.href = '{{ route('customer.register') }}';">Register / Login</button></li>
            <li class="top-right">
                <i class="fas fa-shopping-cart"  title="My Cart" ></i>
                <i class="fas fa-user"></i>
                <i class="fas fa-search"></i>
            </li>
        </ul>
    </div>

    <?php
    //Login Form
    ?>
    <div class="login-form" id="login-form">
        <h2>Login</h2>
        <form id="login" method="POST" action="{{ route('user.login.submit') }}">
            @csrf

            <label for="UserName">User Name:</label>
            <input type="text" id="UserName" name="UserName" placeholder="Enter your username" required>

            <label for="Email">Email:</label>
            <input type="text" id="Email" name="Email" placeholder="Enter your email" required>

            <label for="Password">Password</label>
            <input type="password" id="Password" name="Password" placeholder="Enter your password" required>

            <div id="error-messages"></div> 
            <button type="submit">Login</button>
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

<!-- HTML attribute method -->
<div id="error-message" data-error-message="{{ session('errorMessage') }}"></div>

<!-- Hidden input field method -->
<input type="hidden" id="error-message-input" value="{{ session('errorMessage') }}">

<div id="error-messages">
  @if(session('errorMessage'))
    <p class="error-message">{{ session('errorMessage') }}</p>
  @endif
</div>


</body>
</html>
