<!DOCTYPE html>
<html>
<head>
    <title>Admin Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles_admin-home.css') }}">

</head>

<body>
    <?php
    //Admin Menu bar
    ?>
    <div class="navbar">
        <ul>
            <li><img src="{{ asset('images/piece_of_cake_logo.jpeg') }}" alt="Logo Icon" width="50" height="50" style="margin-top: 5px;">
            <li><button id="dashboard-button" type="button" onclick="window.location.href = '{{ route('admin.home') }}';">Dashboard</button></li>
            <li><button type="button" >Inventory</button></li>
            <li><button type="button" onclick="window.location.href = '{{ route('admin.admin-products') }}';">Products</button></li>
            <li><button type="button" >Orders</button></li>
            <li><button type="button" >Delivery</button></li>
            <li><button type="button" >Reports</button></li>
            <li><button type="button" >Accounts</button></li>
            <li><button type="button" >Messages</button></li>

            <li class="top-right">
                <input type="text" placeholder="Search..." style="height:20px" >
                <img src="{{ asset('images/profile_icon.png') }}" alt="Profile Icon" width="30" height="30" onclick="window.location.href = '{{ route('admin.register') }}';">
            </li>
        </ul>
    </div>
    <?php
    //Heading
    ?>
    <div class="center-content">
            <h1 id="Admin-Panel">Admin Panel</h1>
    </div>

    <?php
    //Dashboard
    ?>
        <div class="box-container">
            <div class="box-row">
                <div class="box">
                    <div class="inner-square">
                        <input type="text" class="textbox">
                    </div>
                    <button class="rounded-button">See Accounts</button>
                </div>
                <div class="box">
                    <div class="inner-square">
                        <input type="text" class="textbox">
                    </div>
                    <button class="rounded-button">See Pending Orders</button>
                </div>
                <div class="box">
                    <div class="inner-square">
                        <input type="text" class="textbox">
                    </div>
                    <button class="rounded-button">See Completed Orders</button>
                </div>
                <div class="box">
                    <div class="inner-square">
                        <input type="text" class="textbox">
                    </div>
                    <button class="rounded-button">See Delivered Orders</button>
                </div>
            </div>
            <div class="box-row">
                <div class="box">
                    <div class="inner-square">
                        <input type="text" class="textbox">
                    </div>
                    <button class="rounded-button">See Products</button>
                </div>
                <div class="box">
                    <div class="inner-square">
                        <input type="text" class="textbox">
                    </div>
                    <button class="rounded-button">See Total Orders</button>
                </div>
                <div class="box">
                    <div class="inner-square">
                        <input type="text" class="textbox">
                    </div>
                    <button class="rounded-button">See Inventory</button>
                </div>
                <div class="box">
                    <div class="inner-square">
                        <input type="text" class="textbox">
                    </div>
                    <button class="rounded-button">See Messages</button>
                </div>
            </div>
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

</body>
</html>
