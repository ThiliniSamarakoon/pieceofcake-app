<!DOCTYPE html>
<html>
<head>
    <title>Customized Orders</title>
    <link rel="stylesheet" href="{{ asset('css/styles_customized_orders.css') }}">
    <script src="{{ asset('js/script_customized-orders.js') }}"></script>
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
            <li><button type="button" id="login-button" onclick="window.location.href = '{{ route('customer.register') }}';"  >Register / Login</button></li>
            <li class="top-right">
                <i class="fas fa-shopping-cart"  title="My Cart" ></i>
                <i class="fas fa-user"></i>
                <i class="fas fa-search"></i>
            </li>
        </ul>
    </div>

    <?php
    //heading
    ?>
    <div class="header">
        <h1 class="customized-cake-heading">Customized Cake</h1>
        <p class="para1">Transform your cake into a masterpiece with our vast selection of elements!</p>
        <p style="text-align:center; color:red;"><b>Click on Save Button to Send the Order to the Owner</b></p>
        <button class="button-choose-options" title="Choose your favourite Cake type, frostings, shapes and others" onclick="window.location.href = '{{ route('customer.choose-cakeoptions') }}';">Choose Options</button>
        <button class="button-add-to-cart" title="Please click on this after owner accept the order via SMS" onclick="window.location.href = '{{ route('cart.page') }}';">Add to Cart</button>
    </div>
    </div>

<?php
//Canvas
?>   
        <canvas id="myCanvas"></canvas>
        <div class="wrapper" id="wrapper">
            <div class="icon color">
                <div class="tooltip">
                    Select
                </div>
                <span><i><input type="color" id="colorChange"></i></span>
            </div>
                <div class="tooltip">
                    <h4>Pen Size</h4>
                </div>
                <span><i><input type="range" id="penSize" step="2" min="2" max="150" value="5"></i></span>
    
         <div class="icon Pencil">
            <div class="tooltip">
                Pencil
            </div>
            <button  id="btnPencil">
            <span><i class="fa fa-pencil-alt"></i></span>
             </button>
        </div>
        
        <div class="icon Bucket">
            <div class="tooltip">
                Fill
            </div>
            <button  id="btnBucket">
            <span><i class="fa fa-fill-drip"></i></span>
             </button>
        </div>

        <div class="icon Eraser">
            <div class="tooltip">
                Eraser
            </div>
            <button  id="btnEraser">
            <span><i class="fa fa-eraser"></i></span>
             </button>
        </div>
        
        <div class="icon Clear">
            <div class="tooltip">
                Clear
            </div>
            <button  id="btnClear">
            <span><i class="fa fa-broom"></i></span>
             </button>
        </div>

        <div class="icon Undo">
            <div class="tooltip">
                Undo
            </div>
             <button  id="btnUndo">
            <span><i class="fa fa-undo"></i></span>
             </button>
        </div>

         <div class="icon upload">
            <div class="tooltip">
                Upload
            </div>
                <button  id="btnUpload">
                <span><i class="fas fa-upload"></i></span>
                <input type="file" id="uploadImage" style="display: none;">
                </button>
         </div>
<form id="saveForm" method="POST" action="{{ route('customized.orders.store') }}"  enctype="multipart/form-data">
    @csrf
        <div class="icon save">
            <div class="tooltip">
                Save
            </div>
            <input type="hidden" id="imageData" name="image" value="">
             <button  id="btnSave" type="submit">
            <span><i class="fas fa-save"></i></span>
             </button>
        </div>
</form> 
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
