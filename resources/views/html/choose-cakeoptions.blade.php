<!DOCTYPE html>
<html>
<head>
    <title>Choose Cake Options</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles_choose-cakeoptions.css') }}">
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/script_choose-cakeoptions.js') }}"></script>
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
            <!-- <li><button type="button" id="login-button" onclick="window.location.href = '{{ route('customer.register') }}';"  >Register / Login</button></li> -->
            <li class="top-right">
                <i class="fas fa-shopping-cart"  title="My Cart" ></i>
                <i class="fas fa-user"></i>
                <i class="fas fa-search"></i>
            </li>
        </ul>
    </div>

    <?php
    //Heading
    ?>
    <h1 class="custom-order-heading">Custom Cake Order Form</h1>
    <p style="color:red; text-align:center;"><b>Click the Submit button after selecting desired cake options and send the downloaded pdf to the owner along with image</b></p>

    <form class="custom-order-form" action="{{ route('submit.custom.order') }}" method="POST" enctype="multipart/form-data">
        @csrf
    <!-- Column 1 -->
<div class="custom-order-column">
    <h3>Choose a Cake</h3>
    <label><input type="checkbox" name="cake_options[]" value="Chocolate"> Chocolate</label><br>
    <label><input type="checkbox" name="cake_options[]" value="Butter"> Butter</label><br>
    <label><input type="checkbox" name="cake_options[]" value="Sponge"> Sponge</label><br>
    <label><input type="checkbox" name="cake_options[]" value="Red Velvet"> Red Velvet</label><br>
    <label><input type="checkbox" name="cake_options[]" value="Ribbon"> Ribbon</label><br>
    <label><input type="checkbox" name="cake_options[]" value="Carrot"> Carrot</label><br>
    <label><input type="checkbox" name="cake_options[]" value="Fruit"> Fruit</label><br>
    <label><input type="checkbox" name="cake_options[]" value="Cheese Cake"> Cheese Cake</label><br>
    <label><input type="checkbox" name="cake_options[]" value="Pound Cake"> Pound Cake</label><br>
</div>


       <!-- Column 2 -->
<div class="custom-order-column">
    <h3>Choose the icing</h3>
    <label><input type="checkbox" name="icing_options[]" value="Buttercream Icing"> Buttercream Icing</label><br>
    <label><input type="checkbox" name="icing_options[]" value="Vanilla"> Vanilla</label><br>
    <label><input type="checkbox" name="icing_options[]" value="Chocolate"> Chocolate</label><br>
    <label><input type="checkbox" name="icing_options[]" value="Fondant"> Fondant</label><br>
    <label><input type="checkbox" name="icing_options[]" value="Cream Cheese"> Cream Cheese</label><br>
</div>

        <!-- Column 3 -->
<div class="custom-order-column">
    <h3>Cake board Shape</h3>
    <label><input type="checkbox" name="board_shape[]" value="Round"> Round</label><br>
    <label><input type="checkbox" name="board_shape[]" value="Square"> Square</label><br>
    <label><input type="checkbox" name="board_shape[]" value="Rectangle"> Rectangle</label><br>
    <label><input type="checkbox" name="board_shape[]" value="Heart-Shaped"> Heart-Shaped</label><br>
    <label><input type="checkbox" name="board_shape[]" value="Oval"> Oval</label><br>
</div>


        <!-- Quantity -->
        <div class="custom-order-column">
            <h3>Quantity</h3>
            <label><input type="number" name="quantity" min="1"></label>
        </div>

        <!-- Weight -->
        <div class="custom-order-column">
            <h3>Weight</h3>
            <label>
                <select name="weight">
                    <option value="1kg">0.5 kg</option>
                    <option value="1kg">1 kg</option>
                    <option value="1.5kg">1.5 kg</option>
                    <option value="2kg">2 kg</option>
                    <option value="2.5kg">2.5 kg</option>
                    <option value="3kg">3 kg</option>
                </select>
            </label>
            <br>
            <label><input type="checkbox" name="other-weight"> Other:</label>
            <input type="text" name="other-weight-input">
        </div>

        <!-- Description -->
        <div class="custom-order-column">
            <h3>Message on the Cake: </h3>
            <textarea name="description"></textarea>
        </div>

    <!-- Submit Button -->
    <div class="custom-order-submit">
        <div class="submit-container">
            <input type="submit" value="Submit">
        </div>
    </div>
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
