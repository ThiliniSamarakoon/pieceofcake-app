<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="{{ asset('css/styles_admin-login.css') }}">
    <title>Admin Login</title>
</head>
<body>
    <div class="login-form" id="admin-login-form">
        <h2>Admin Login</h2>
        <form id="admin-login" name="admin-login" method="POST" action="{{ route('admin.login.submit') }}" >
           @csrf
            <label for="AdminName">Admin Name:</label>
            <input type="text" id="AdminName" name="AdminName" placeholder="Enter your Admin Name" required>

            <label for="Email">Email:</label>
            <input type="email" id="Email" name="Email" placeholder="Enter your email" required>

            <label for="Password">Password:</label>
            <input type="password" id="Password" name="Password" placeholder="Enter your password" required>

            <button type="submit">Login</button>

     <div class="or-text">OR</div>
        <button type="submit" class="admin-register-button" id="admin-register-button" onclick="window.location.href = '{{ route('admin.register') }}';">Register</button>
        <p>(If you don't have a Registered Account, Please Register first)</p>
    </div>
        </form>
    </div>

    @if(Session::has('error'))
    <script>
        alert("{{ Session::get('error') }}");
    </script>
    @endif

    <?php
    //Footer Section
    ?>
<br><br><br>
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
