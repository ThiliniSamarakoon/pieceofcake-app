<!DOCTYPE html>
<html>
<head>
    <title>Birthday Cakes</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles_birthday-cakes-page.css') }}">
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/script_birthday-cakes.js') }}"></script>
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
                <i class="fas fa-shopping-cart" onclick="window.location.href = '{{ route('customer.cart.overview') }}';" title="My Cart" ></i>
                <i class="fas fa-user"></i>
                <i class="fas fa-search"></i>
            </li>
        </ul>
    </div>

    <?php
    //Heading
    ?>
    <h1 class="heading">Birthday Cakes</h1>

     <?php
    // Sort by label and dropdown
    ?>
    <div class="sort-by">
        <label for="sort-select">Filter by:</label>
        <select id="sort-select" onchange="filterImages()">
            <option value="All">All</option>
            <option value="Cakes for Girls" >Cakes for Girls</option>
            <option value="Cakes for Boys" >Cakes for Boys</option>
            <option value="Cakes for Mothers" >Cakes for Mothers</option>
            <option value="Cakes for Fathers" >Cakes for Fathers</option>
            <option value="Common" >Common</option>
        </select>
    </div>

 <div class="image-grid" id="image-grid">
        <?php
        // Include the Product model
        use App\Models\Product;

        // Retrieve products from the database
        $products = Product::getProducts();

        // Display the products
        foreach ($products as $product) {
            echo '<div class="column ' . $product->data_category . '">';
            echo '<form id="cake-details-form' . $product->id . '" action="' . route('customer.cake-details') . '" method="POST">';
            echo '<input type="hidden" name="_token" value="' . csrf_token() . '">';
            echo '<input type="hidden" name="product_id" value="' . $product->id . '">';
            echo '<img src="' . $product->image . '" alt="' . $product->item_name . '" class="rounded-image" data-category="' . $product->data_category . '">';
            echo '<button type="submit" class="show-details-button">Show Details <i class="fas fa-arrow-right"></i></button>';
            //echo 'Show Details <i class="fas fa-arrow-right"></i>';
            echo '</form>';
            echo '</div>';
        }
        ?>
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
