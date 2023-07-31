<!DOCTYPE html>
<html>
<head>
    <title>Admin Products</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles_admin-home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles_admin-products.css') }}">

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
            <li><button type="button">Products</button></li>
            <li><button type="button" onclick="window.location.href = '{{ route('admin.orders') }}';">Orders</button></li>
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
            <h1 id="Admin-Panel">Add Products</h1>
    </div>

<?php
//Form
?>
<form method="POST"  action="{{ route('admin.products.store') }}" enctype="multipart/form-data">
    @csrf

    <label for="ProductID">Enter Product ID:</label>
    <input type="text" name="ProductID" id="ProductID">

    <label for="image">Enter Image:</label>
    <input type="file" name="image" id="image">

     <label for="price">Enter Price:</label>
    <input type="text" name="price" id="price">

    <label for="category">Enter Category:</label>
    <select id="cake-categories" name="category">
            <option value="Birthday_Cakes" data-category="Birthday_Cakes">Birthday Cakes</option>
            <option value="Wedding_Structures" data-category="Wedding_Structures">Wedding Structures</option>
            <option value="Cup_Cakes" data-category="Cup_Cakes">Cup Cakes</option>
            <option value="Wedding_Cakes" data-category="Wedding_Cakes">Wedding Cakes</option>
            <option value="Celebration_Cakes" data-category="Celebration_Cakes">Celebration Cakes</option>
            <option value="Gift_Packs" data-category="Gift_Packs">Gift Packs</option>
        </select>

    <label for="item_name">Enter Cake Item Name:</label>
    <input type="text" name="item_name" id="item_name">

    <label for="item_weight">Enter Item Weight:</label>
    <input type="text" name="item_weight" id="item_weight">

    <label for="cake_type">Enter Cake Type:</label>
    <select id="cake-type" name="cake_type">
            <option value="Chocolate" >Chocolate</option>
            <option value="Butter" >Butter</option>
            <option value="Coffee_Cake" >Coffee Cake</option>
            <option value="Sponge" >Sponge</option>
            <option value="Red_Velvet" >Red Velvet</option>
            <option value="Ribbon" >Ribbon</option>
            <option value="Carrot" >Carrot</option>
            <option value="Fruit" >Fruit</option>
            <option value="Cheese_Cake">Cheese Cake</option>
            <option value="Pound_Cake" >Pound Cake</option>
        </select>

    <label for="icing_type">Enter Icing Type:</label>
    <select id="icing_type" name="icing_type">
            <option value="Buttercream_Icing" >Buttercream Icing</option>
            <option value="Vanilla" >Vanilla</option>
            <option value="Chocolate" >Chocolate</option>
            <option value="Fondant" >Fondant</option>
            <option value="Cream_Cheese" >Cream Cheese</option>
            <option value="Buttercream_Icing" >Buttercream Icing/Fondant</option>
        </select>

    <!-- <label for="rating">Rating:</label>
    <div class="rating" name="rating">
        <input type="radio" id="star5" name="rating" value="5"><label for="star5"></label>
        <input type="radio" id="star4" name="rating" value="4"><label for="star4"></label>
        <input type="radio" id="star3" name="rating" value="3"><label for="star3"></label>
        <input type="radio" id="star2" name="rating" value="2"><label for="star2"></label>
        <input type="radio" id="star1" name="rating" value="1"><label for="star1"></label>
    </div> 

    <label for="feedbacks">Enter Feedbacks:</label>
    <textarea class="text-area" name="feedbacks" id="feedbacks"></textarea> -->

    <label for="data_category">Enter Data Category:</label>
    <select id="data_category" name="data_category">
            <option value="Cakes for Girls" data-category="girls">Cakes for Girls</option>
            <option value="Cakes for Boys" data-category="boys">Cakes for Boys</option>
            <option value="Cakes for Mothers" data-category="mothers">Cakes for Mothers</option>
            <option value="Cakes for Fathers" data-category="fathers">Cakes for Fathers</option>
            <option value="Common" data-category="common">Common</option>
            <option value="Cakes for Girls/Mothers" data-category="girls mothers">Cakes for Girls/Mothers</option>
            <option value="Cakes for Boys/Fathers" data-category="fathers boys">Cakes for Boys/Fathers</option>
            <option value="Cakes for Girls/Boys" data-category="girls boys">Cakes for Girls/Boys</option>
        </select>

   <!--  <label for="alt_text">Alt Text:</label>
    <input type="text" name="alt_text" id="alt_text"> -->

    <button type="submit">Add Product</button>
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
