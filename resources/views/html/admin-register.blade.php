<!DOCTYPE html>
<html>
<head>
    <title>Admin Register</title>
    <link rel="stylesheet" href="{{ asset('css/styles_admin-register.css') }}">
    <script src="{{ asset('js/script_admin-register.js') }}"></script>

</head>
<body>
    <?php
    //Admin Register Form
    ?>
    <div class="admin-register-form" id="admin-register-form">
        <h2>Registration Form</h2>
        <form id="admin-register" method="POST" action="{{ route('admin.register.submit') }}">
            @csrf
            <label for="AdminName">Admin Name:</label>
            <input type="text" id="AdminName" name="AdminName" placeholder="Enter your username" required>

            <label for="AdminRole">Admin Role:</label>
            <select id="AdminRole" name="AdminRole" required>
                <option value="">Select Role</option>
                <option value="owner">Owner</option>
                <option value="deliveryRider">Delivery Rider</option>
                <option value="socialMediaAdmin">Social Media Admin</option>
            </select>

            <label for="Email">Email:</label>
            <input type="text" id="Email" name="Email" placeholder="Enter your email" required>

            @error('Email')
                <span class="error">{{ $message }}</span>
            @enderror

            <label for="Password">Password:</label>
            <input type="password" id="Password" name="Password" placeholder="Enter your password" required>

            <label for="ContactNo">Contact Number:</label>
            <input type="tel" id="ContactNo" name="ContactNo" placeholder="Enter Your Contact Number" required>

            <div id="error-messages"></div> 
            <button type="submit">Register</button>
      
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
