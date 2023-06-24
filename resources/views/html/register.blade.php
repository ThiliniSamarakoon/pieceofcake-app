<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles_login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles_register.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/script_login.js') }}"></script>
    <script src="{{ asset('js/script_register.js') }}"></script>
</head>
<body>
    <?php
    //Menu bar
    ?>
    <div class="navbar">
        <ul>
            <li><img src="{{ asset('images/piece_of_cake_logo.jpeg') }}" alt="Logo Icon" width="50" height="50" style="margin-top: 5px;">
            <li><button type="button" id="home-button" onclick="window.location.href = '{{ route('cake-shop') }}';">Home</button></li>
            <li><button type="button" onclick="window.location.href = '{{ route('cake-shop') }}#cake-categories';">Cake Categories</button></li>
            <li><button type="button" onclick="window.location.href = '{{ route('customized.orders') }}';">Customized Orders</button></li>
            <li><button type="button" onclick="window.location.href = '{{ route('cake-shop') }}#About-Us-Section';">About Us</button></li>
            <li><button type="button" onclick="window.location.href = '{{ route('cake-shop') }}#Contact-Us-Section';">Contact Us</button></li>
            <li><button type="button" id="login-button" onclick="window.location.href = '{{ route('customer.login') }}';" >Login</button></li>
            <li class="top-right">
                <img src="{{ asset('images/cart_icon.png') }}" alt="Cart Icon" width="30" height="30">
                <img src="{{ asset('images/profile_icon.png') }}" alt="Profile Icon" width="30" height="30">
                <input type="text" placeholder="Search..." style="height: 20px" >
            </li>
        </ul>
    </div>

    <?php
    //Registration Form
    ?>
    <div class="registration-form" >
        <h2>Registration Form</h2>
        <form id="registration-form" onsubmit="handleSubmit(event)"  method="POST" action="{{ route('customer.register.submit') }}">
            @csrf
            <label for="first-name">First Name:</label>
            <input type="text" id="first-name" name="first-name" required>

            <label for="last-name">Last Name:</label>
            <input type="text" id="last-name" name="last-name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="contact-number">Contact Number:</label>
            <input type="tel" id="contact-number" name="contact-number" required>

            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>

            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="">Select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>

            <label for="username">User Name:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="confirm-password">Re-type Password:</label>
            <input type="password" id="confirm-password" name="confirm-password" required>

            <div class="button-group">
                <button type="submit">Register</button>
                <button type="reset">Reset</button>
            </div>
        </form>
    </div>

@if(session('success'))
    <script>
        // Display an alert box with the success message
        alert('{{ session('success') }}');
    </script>
@endif

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
