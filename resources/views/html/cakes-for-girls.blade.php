<!DOCTYPE html>
<html>
<head>
    <title>Cakes for Girls</title>
    <link rel="stylesheet" href="{{ asset('css/styles_cakes-for-girls.css') }}">
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/script_cakes-for-girls.js') }}"></script>
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
            <li><button type="button" id="login-button" onclick="window.location.href = '{{ route('customer.register') }}';">Register</button></li>
            <li class="top-right">
                <i class="fas fa-shopping-cart" onclick="window.location.href = '{{ route('customer.cart.overview') }}';" title="My Cart" ></i>
                <i class="fas fa-user"></i>
                <i class="fas fa-search"></i>
            </li>
        </ul>
    </div>

<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Slideshow Container-->
  <div class="mySlides fade active">
    <img src="{{ asset('images/Birthday_Cakes/image1.jpg') }}" style="width:50%" alt="image 1" class="image">
  </div>

  <div class="mySlides fade">
    <img src="{{ asset('images/Cakes-for-girls/image1-1.jpg') }}" style="width:50%" alt="image 2" class="image">
  </div>

  <div class="mySlides fade">
    <img src="{{ asset('images/Cakes-for-girls/image1-2.jpg') }}" style="width:50%" alt="image 3" class="image">
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>
<div class="feedback-label">
  <label class="feedbacks">Feedbacks:</label></div>
<div class="reviews">
<a href="https://www.facebook.com/Cakes.by.Shiranthi.DeSeram/posts/pfbid02VkGeUKP7H7de7KqZbjYwLtz9W2KqhbQ1KjD1UtF77iDyKXP2EJSsPk9s75nakTevl" target="_blank">Please click on this link to access the feedbacks shared on Facebook.</a>
</div>

<!-- Image details section -->
<form method="POST" action="{{ route('customer.orders.store') }}">
    @csrf
    <div class="image-details">
        <div><label class="label">Price:</label>
        <span class="text-input" style="font-size:18px;">Rs.4,200.00</span>
        <input type="hidden" name="price" value="4200.00"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  <div><label class="label">Rating:</label></div>
    <div class="rating">
        <input type="radio" id="star5" name="rating" value="5"><label for="star5"></label>
        <input type="radio" id="star4" name="rating" value="4"><label for="star4"></label>
        <input type="radio" id="star3" name="rating" value="3"><label for="star3"></label>
        <input type="radio" id="star2" name="rating" value="2"><label for="star2"></label>
        <input type="radio" id="star1" name="rating" value="1"><label for="star1"></label>
    </div> 
</div><br>

 <div><label class="label">Description:</label></div>
 <textarea style="width:50%; height:50px; border: none; outline: none;" name="description">
   Weight: 1 kg
   Cake type: Butter Cake
   Icing: Fondant
   </textarea>

 <div><label class="label">Weight:</label>
        <select class="dropdown" style="width:100px; margin-left:25px;" name="weight">
            <option value="0.5 kg" name="weight">0.5 kg</option>
            <option value="1 kg" name="weight">1 kg</option>
            <option value="1.5 kg" name="weight">1.5 kg</option>
            <option value="2 kg" name="weight">2 kg</option>
        </select>
    </div><br>

<div><label class="label">Cake Type:</label>
  <select class="dropdown" style="width:200px;" name="cake_type">
    <option value="butter" name="cake_type">Butter</option>
    <option value="chocolate" name="cake_type">Chocolate</option>
    <option value="ribbon" name="cake_type">Ribbon</option>
  </select>
</div><br>

<div><label class="label">Message on the Cake:</label></div>
      <textarea class="text-area" style="width:200px; height:50px;" maxlength="30" name="message_on_cake"></textarea>
<br>

<div><label class="label">Write a Review: </label></div>
<textarea class="text-area" style="width:400px; height:100px;" name="review"></textarea><br>

<button type="submit" class="add-to-cart-button">Add to Cart</button>

</form>
@if (session('success'))
    <div class="success-message">
        {{ session('success') }}
    </div>
@endif

<hr style="color: purple; border: 1px solid purple; width:100%;">


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
