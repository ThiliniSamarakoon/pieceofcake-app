<!DOCTYPE html>
<html>
<head>
    <title>Birthday Cakes</title>
    <link rel="stylesheet" href="{{ asset('css/styles_customized_orders.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles_birthday-cakes-page.css') }}">
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
        <select id="sort-select">
            <option value="Select" data-category="all">All</option>
            <option value="low price to high" data-category="girls">Cakes for Girls</option>
            <option value="high price to low" data-category="boys">Cakes for Boys</option>
            <option value="popularity" data-category="mothers">Cakes for Mothers</option>
            <option value="latest" data-category="fathers">Cakes for Fathers</option>
            <option value="latest" data-category="common">Common</option>
        </select>
    </div>

    <?php
    // Images with buttons
    ?>
    <div class="image-grid">
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image1.jpg') }}" alt="Image 1" class="rounded-image" data-category="girls">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image2.jpg') }}" alt="Image 2" class="rounded-image" data-category="boys">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image3.jpg') }}" alt="Image 3" class="rounded-image" data-category="boys">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image4.jpg') }}" alt="Image 4" class="rounded-image" data-category="common">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
    </div>
    <div class="image-grid">
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image5.jpg') }}" alt="Image 5" class="rounded-image" data-category="common">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image6.jpg') }}" alt="Image 6" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image7.jpg') }}" alt="Image 7" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image8.jpg') }}" alt="Image 8" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
    </div>
    <div class="image-grid">
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image9.jpg') }}" alt="Image 9" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image10.jpg') }}" alt="Image 10" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image11.jpg') }}" alt="Image 11" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image12.jpg') }}" alt="Image 12" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
    </div>
    <div class="image-grid">
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image13.jpg') }}" alt="Image 13" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image14.jpg') }}" alt="Image 14" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image15.jpg') }}" alt="Image 15" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image16.jpg') }}" alt="Image 16" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
    </div>
    <div class="image-grid">
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image17.jpg') }}" alt="Image 17" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image18.jpg') }}" alt="Image 18" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image19.jpg') }}" alt="Image 19" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image20.jpg') }}" alt="Image 20" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
    </div>
    <div class="image-grid">
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image21.jpg') }}" alt="Image 21" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image22.jpg') }}" alt="Image 22" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image23.jpg') }}" alt="Image 23" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image24.jpg') }}" alt="Image 24" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
    </div>
    <div class="image-grid">
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image25.jpg') }}" alt="Image 25" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image26.jpg') }}" alt="Image 26" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image27.jpg') }}" alt="Image 27" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image28.jpg') }}" alt="Image 28" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
    </div>
    <div class="image-grid">
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image29.jpg') }}" alt="Image 29" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image30.jpg') }}" alt="Image 30" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image31.jpg') }}" alt="Image 31" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image32.jpg') }}" alt="Image 32" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
    </div>
    <div class="image-grid">
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image33.jpg') }}" alt="Image 34" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image35.jpg') }}" alt="Image 35" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image36.jpg') }}" alt="Image 36" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image37.jpg') }}" alt="Image 37" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
    </div>
    <div class="image-grid">
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image38.jpg') }}" alt="Image 38" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image39.jpg') }}" alt="Image 39" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image40.jpg') }}" alt="Image 40" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image41.jpg') }}" alt="Image 41" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
    </div>
    <div class="image-grid">
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image42.jpg') }}" alt="Image 42" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image43.jpg') }}" alt="Image 43" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image44.jpg') }}" alt="Image 44" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image45.jpg') }}" alt="Image 45" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
    </div>
    <div class="image-grid">
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image46.jpg') }}" alt="Image 46" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image47.jpg') }}" alt="Image 47" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image48.jpg') }}" alt="Image 48" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image49.jpg') }}" alt="Image 49" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
    </div>
    <div class="image-grid">
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image50.jpg') }}" alt="Image 50" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image51.jpg') }}" alt="Image 51" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image52.jpg') }}" alt="Image 52" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image53.jpg') }}" alt="Image 53" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
    </div>
    <div class="image-grid">
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image54.jpg') }}" alt="Image 54" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image55.jpg') }}" alt="Image 55" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image56.jpg') }}" alt="Image 56" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image57.jpg') }}" alt="Image 57" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
    </div>
    <div class="image-grid">
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image58.jpg') }}" alt="Image 58" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image59.jpg') }}" alt="Image 59" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image60.jpg') }}" alt="Image 60" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image61.jpg') }}" alt="Image 61" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
    </div>
    <div class="image-grid">
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image62.jpg') }}" alt="Image 62" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image63.jpg') }}" alt="Image 63" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image64.jpg') }}" alt="Image 64" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image65.jpg') }}" alt="Image 65" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
    </div>
    <div class="image-grid">
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image66.jpg') }}" alt="Image 66" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image67.jpg') }}" alt="Image 67" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image68.jpg') }}" alt="Image 68" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image69.jpg') }}" alt="Image 69" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
    </div>
    <div class="image-grid">
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image70.jpg') }}" alt="Image 70" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image71.jpg') }}" alt="Image 71" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image72.jpg') }}" alt="Image 72" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image73.jpg') }}" alt="Image 73" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
    </div>
    <div class="image-grid">
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image74.jpg') }}" alt="Image 74" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image75.jpg') }}" alt="Image 75" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image76.jpg') }}" alt="Image 76" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image77.jpg') }}" alt="Image 77" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
    </div>
    <div class="image-grid">
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image78.jpg') }}" alt="Image 78" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image79.jpg') }}" alt="Image 79" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image80.jpg') }}" alt="Image 80" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image81.jpg') }}" alt="Image 81" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
    </div>
    <div class="image-grid">
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image82.jpg') }}" alt="Image 82" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image83.jpg') }}" alt="Image 83" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image84.jpg') }}" alt="Image 84" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image85.jpg') }}" alt="Image 85" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
    </div>
    <div class="image-grid">
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image86.jpg') }}" alt="Image 86" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image87.jpg') }}" alt="Image 87" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image88.jpg') }}" alt="Image 88" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image89.jpg') }}" alt="Image 89" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
    </div>
    <div class="image-grid">
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image90.jpg') }}" alt="Image 90" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image91.jpg') }}" alt="Image 91" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image92.jpg') }}" alt="Image 92" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image93.jpg') }}" alt="Image 93" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
    </div>
    <div class="image-grid">
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image94.jpg') }}" alt="Image 94" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image95.jpg') }}" alt="Image 95" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image96.jpg') }}" alt="Image 96" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image97.jpg') }}" alt="Image 97" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
    </div>
    <div class="image-grid">
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image98.jpg') }}" alt="Image 98" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image99.jpg') }}" alt="Image 99" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image100.jpg') }}" alt="Image 100" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image101.jpg') }}" alt="Image 101" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
    </div>
    <div class="image-grid">
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image102.jpg') }}" alt="Image 102" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image103.jpg') }}" alt="Image 103" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image104.jpg') }}" alt="Image 104" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image105.jpg') }}" alt="Image 105" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
    </div>
    <div class="image-grid">
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image106.jpg') }}" alt="Image 106" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image107.jpg') }}" alt="Image 107" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image108.jpg') }}" alt="Image 108" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image109.jpg') }}" alt="Image 109" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
    </div>
    <div class="image-grid">
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image110.jpg') }}" alt="Image 110" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image111.jpg') }}" alt="Image 111" class="rounded-image">
            <button class="show-details-button">
                Show Details <i class="fas fa-arrow-right"></i>
            </button>
        </div>
        <div class="column">
            <img src="{{ asset('images/Birthday_Cakes/image112.jpg') }}" alt="Image 112" class="rounded-image">
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
  
</body>
</html>
