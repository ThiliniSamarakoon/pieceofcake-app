<!DOCTYPE html>
<html>
<head>
    <title>Cake Details</title>
    <link rel="stylesheet" href="{{ asset('css/styles_cakes-for-girls.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles_cake-details.css') }}">
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/script_cake-details.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>

<body>
    <?php
    //Menu bar
    ?>
    <div class="navbar">
        <ul>
            <li><img src="{{ asset('images/piece_of_cake_logo.jpeg') }}" alt="Logo Icon" width="50" height="50" style="margin-top: 5px;"></li>
            <li><button type="button" id="home-button" onclick="window.location.href = '{{ route('cake-shop') }}';">Home</button></li>
            <li><button type="button" onclick="window.location.href = '{{ route('cake-shop') }}#cake-categories'">Cake Categories</button></li>
            <li><button type="button" onclick="window.location.href = '{{ route('login.customized.orders') }}';">Customized Orders</button></li>
            <li><button type="button" onclick="window.location.href = '{{ route('cake-shop') }}#About-Us-Section'">About Us</button></li>
            <li><button type="button" onclick="window.location.href = '{{ route('cake-shop') }}#Contact-Us-Section'">Contact Us</button></li>
            <li><button type="button" id="login-button" onclick="window.location.href = '{{ route('customer.register') }}';">Register</button></li>
            <li class="top-right">
                <i class="fas fa-shopping-cart" onclick="window.location.href = '{{ route('customer.cart.overview') }}';" title="My Cart" ></i>
                <i class="fas fa-user"></i>
                <i class="fas fa-search"></i>
            </li>
        </ul>
    </div>
<form action="{{ route('customer.orders.store') }}" method="POST">
   @csrf

    <div class="cake-details">
      <h2 class="cake-name"><input type="text" name="cake-name" value="{{ $product->item_name }}" style="border:none; font-size:26px; font-weight:bold; width:600px;" ></h2>
      <div class="cake-image-container">
        <img src="{{ $product->image }}" alt="{{ $product->item_name }}" class="cake-image">
        <div class="product-details">
                <p class="product-id" >Product ID&nbsp;&nbsp;&nbsp;   :<input type="text" name="product_id" value="{{ $product->ProductID }}" style="border:none;"></p>
                <!-- <p class="price">Price &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;            : ${{ $product->price }}</p>-->
                <p class="price">Price:&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;:Rs.<input type="text" id="displayPrice" name="price" style="border:none;" value="{{ $product->price }}"></p>

                <p class="item-weight">Item Weight&nbsp; :<input type="text" name="item_weight" value="{{ $product->item_weight }}" style="border:none;"></p>
                <p class="cake-type">Cake Type&nbsp;&nbsp;&nbsp;     :<input type="text" name="cake_type" value="{{ $product->cake_type }}" style="border:none;"></p>
                <p class="icing-type">Icing Type&nbsp;&nbsp;&nbsp;   :<input type="text" name="icing_type" value="{{ $product->icing_type }}" style="border:none;"></p>
                <!-- <p class="rating">Rating&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;           : {{ $product->rating }}</p>-->
                
                <p class="feedbacks">Feedbacks&nbsp;&nbsp;&nbsp;&nbsp;:<input type="text" name="feedbacks" value="{{ $product->feedbacks }}" style="border:none;"><a href="['id' => $product->id]) }}"></a></p>

                
                <p class="rating-stars label" style="font-weight:lighter;">Rating&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</p>
  <div class="rating">
    <input type="radio" id="star5" name="rating" value="5" {{ $product->rating == 5 ? 'checked' : '' }}>
    <label for="star5"></label>
    <input type="radio" id="star4" name="rating" value="4" {{ $product->rating == 4 ? 'checked' : '' }}>
    <label for="star4"></label>
    <input type="radio" id="star3" name="rating" value="3" {{ $product->rating == 3 ? 'checked' : '' }}>
    <label for="star3"></label>
    <input type="radio" id="star2" name="rating" value="2" {{ $product->rating == 2 ? 'checked' : '' }}>
    <label for="star2"></label>
    <input type="radio" id="star1" name="rating" value="1" {{ $product->rating == 1 ? 'checked' : '' }}>
    <label for="star1"></label>
</div><br>
<div class="user_name">
    <label for="user_name">User Name&nbsp;&nbsp;&nbsp;:</label>
    <input id="user_name" name="user_name"><br><span style="color:red;">(Please enter if you have a registered account. You will receive 10% discount for every 3 Orders)</span>
</div><br>
<!-- Cake Weight -->
<div class="weight">
    <label for="cake-weight">Cake Weight:</label>
    <select id="cake-weight" name="cake-weight" onchange="updatePrice()">
        <option >Select Weight</option>
        <option value="0.5 kg" data-weight="0.5" data-price="{{ $product->price }}">0.5 kg</option>
        <option value="1 kg" data-weight="1" data-price="{{ $product->price }}">1 kg</option>
        <option value="1.5 kg" data-weight="1.5" data-price="{{ $product->price }}">1.5 kg</option>
        <option value="2 kg" data-weight="2" data-price="{{ $product->price }}">2 kg</option>
        <option value="2.5 kg" data-weight="2.5" data-price="{{ $product->price }}">2.5 kg</option>
        <option value="3 kg" data-weight="3" data-price="{{ $product->price }}">3 kg</option>
    </select>
</div>
<!-- Cake Type -->
<div class="cake_type"><br>
    <label for="cake-type">Cake Type&nbsp;&nbsp;&nbsp;:</label>
    <select id="cake-type" name="cake-type" onchange="updatePrice()">
        <option >Select Cake Type</option>
        <option value="butter" id="butter_cake_type">Butter</option>
        <option value="chocolate"  id="chocolate_cake_type">Chocolate</option>
        <option value="ribbon"  id="ribbon_cake_type">Ribbon</option>
        <option value="red_velvet"  id="red-velvet_cake_type">Red Velvet</option>
        <option value="cheese_cake"  id="cheese-cake_cake_type">Cheese Cake</option>
        <option value="coffee_cake"  id="coffee-cake_cake_type">Coffee Cake</option>
    </select>
</div><br>
<!-- Message on Cake -->
<div class="message">
    <label for="message-on-cake">Message on Cake:</label>
    <textarea class="text-area" style="width:200px; height:50px;" maxlength="30" name="message_on_cake"></textarea>
</div><br>
<!-- Review -->
    <label for="review">Write a review&nbsp;&nbsp;&nbsp;&nbsp;:</label>
    <textarea id="review" name="review" style="width:400px; height:100px;" ></textarea>

    <!-- Add to Cart button -->
    <button type="submit" class="add-to-cart-button" name="add_to_cart_btn">Add to Cart</button>
    </div>
   </div>
  </div>
</form>
   @if (session('error'))
        <div class="error-message">
            {{ session('error') }}
        </div>
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
