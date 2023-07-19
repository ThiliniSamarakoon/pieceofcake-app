<!DOCTYPE html>
<html>
<head>
    <title>Wedding Structures</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles_wedding-structures.css') }}">
    <script src="{{ asset('js/script.js') }}"></script>
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
                <i class="fas fa-shopping-cart"  title="My Cart" ></i>
                <i class="fas fa-user"></i>
                <i class="fas fa-search"></i>
            </li>
        </ul>
    </div>

    <?php
    //Heading
    ?>
    <h1 class="heading">Wedding Structures</h1>

    <?php
    // Images with buttons
    ?>
    <div class="image-grid">
        <div class="column">
            <img src="{{ asset('images/Wedding_Structures/image1.jpg') }}" alt="Image 1" class="rounded-image" >
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Wedding_Structures/image2.jpg') }}" alt="Image 2" class="rounded-image" >
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Wedding_Structures/image3.jpg') }}" alt="Image 3" class="rounded-image" >
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Wedding_Structures/image4.jpg') }}" alt="Image 4" class="rounded-image" >
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
    </div>
    <div class="image-grid">
        <div class="column">
            <img src="{{ asset('images/Wedding_Structures/image5.jpg') }}" alt="Image 5" class="rounded-image" >
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Wedding_Structures/image6.jpg') }}" alt="Image 6" class="rounded-image" >
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Wedding_Structures/image7.jpg') }}" alt="Image 7" class="rounded-image" >
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Wedding_Structures/image8.jpg') }}" alt="Image 8" class="rounded-image" >
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
    </div>
    <div class="image-grid">
        <div class="column">
            <img src="{{ asset('images/Wedding_Structures/image9.jpg') }}" alt="Image 9" class="rounded-image" >
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
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

<!-- HTML attribute method -->
<div id="error-message" data-error-message="{{ session('errorMessage') }}"></div> 

<!-- Hidden input field method -->
<input type="hidden" id="error-message-input" value="{{ session('errorMessage') }}">

</body>
</html>
