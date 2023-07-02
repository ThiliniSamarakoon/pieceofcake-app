<!DOCTYPE html>
<html>
<head>
    <title>Piece of Cake</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
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
            <li><button id="home-button" type="button" onclick="scrollToSection('#piece-of-cake')">Home</button></li>
            <li><button type="button" onclick="scrollToSection('#cake-categories')">Cake Categories</button></li>
            <li><button type="button" onclick="window.location.href = '{{ route('login.customized.orders') }}';">Customized Orders</button></li>
            <li><button type="button" onclick="scrollToSection('#About-Us-Section')">About Us</button></li>
            <li><button type="button" onclick="scrollToSection('#Contact-Us-Section')">Contact Us</button></li>
            <li><button type="button" id="login-button" onclick="window.location.href = '{{ route('customer.register') }}';" >Register</button></li>
            <li class="top-right">
                <i class="fas fa-shopping-cart" onclick="window.location.href = '{{ route('customer.cart.overview') }}';" title="My Cart" ></i>
                <i class="fas fa-user"></i>
                <i class="fas fa-search"></i>
            </li>
        </ul>
    </div>
    <?php
    //Shop Name
    ?>
    <div class="center-content">
            <h1 id="piece-of-cake">Piece Of Cake</h1>
            <p class="tagline"> SWEETEST SLICE OF PARADISE </P>
    </div>

    <?php
    //Slideshow container
    ?>
    <div class="slideshow-container">
        <img class="slide active" src="{{ asset('images/cake-slide1.jpg') }}" alt="Image 1">
        <img class="slide" src="{{ asset('images/cake-slide2.jpg') }}" alt="Image 2">
        <img class="slide" src="{{ asset('images/cake-slide3.jpg') }}" alt="Image 3" >
        <img class="slide" src="{{ asset('images/cake-slide4.jpg') }}" alt="Image 4">
        <img class="slide" src="{{ asset('images/cake-slide5.jpg') }}" alt="Image 5">
        <img class="slide" src="{{ asset('images/cake-slide6.jpg') }}" alt="Image 6">
    </div>
    <br><br>

    <?php
    //Cake Categories text
    ?>
    <div>
        <h2 id="cake-categories">Cake Categories</h2>
    </div>

    <?php
    //Cake Category container
    ?>
    <div class="category-container">
        <div class="category-item">
            <img class="category-image" src="{{ asset('images/cake-slide1.jpg') }}" alt="Category 1">
            <h3 class="category-name">Birthday Cakes</h3>
            <p class="category-description">Discover our extensive cake selection and make your loved one's birthday an
            extraordinary and unforgettable occasion with a delectable cake from our exquisite selection.</p>
            <div class="category-button">
                <button type="button" onclick="window.location.href = '{{ route('customer.birthday-cakes') }}';">Select Cake</button>
            </div>
        </div>
        <div class="category-item">
            <img class="category-image" src="{{ asset('images/cake-slide2.jpg') }}" alt="Category 2">
            <h3 class="category-name">Wedding Structures</h3>
            <p class="category-description">To make your wedding even more special,we offer a range of colors and decorations
            to match your wedding theme and create a beautiful and personalized cake that will leave a lasting
            impression on your guests.</p>
            <div class="category-button">
                <button type="button">Select Cake</button>
            </div>
        </div>
        <div class="category-item">
            <img class="category-image" src="{{ asset('images/cake-slide3.jpg') }}" alt="Category 3">
            <h3 class="category-name">Cup Cakes</h3>
            <p class="category-description">With a delightful array of frostings like buttercream,
            cream cheese, and whipped cream, personalize your cupcakes with a choice of colors and decorations to suit your event.</p>
            <div class="category-button">
                <button type="button">Select Cake</button>
            </div>
        </div>
        <div class="category-item">
            <img class="category-image" src="{{ asset('images/cake-slide4.jpg') }}" alt="Category 4">
            <h3 class="category-name">Wedding Cakes</h3>
            <p class="category-description">We offer a stunning selection of beautiful and delicious wedding cakes to make
            your special day even more memorable! You can choose from a range of designs to match your wedding theme.</p>
            <div class="category-button">
                <button type="button">Select Cake</button>
            </div>
        </div>
        <div class="category-item">
            <img class="category-image" src="{{ asset('images/cake-slide5.jpg') }}" alt="Category 5">
            <h3 class="category-name">Celebration Cakes</h3>
            <p class="category-description">We offer a range of beautiful and delicious cakes to make any occasion extra special!
            We offer a range of celebration cakes including anniversaries, graduations, baby showers, and much more.</p>
            <div class="category-button">
                <button type="button">Select Cake</button>
            </div>
        </div>
        <div class="category-item">
            <img class="category-image" src="{{ asset('images/cake-slide6.jpg') }}" alt="Category 6">
            <h3 class="category-name">Gift Packs</h3>
            <p class="category-description">Discover our beautifully curated gift packs for all occasions! Available in various sizes and include a selection of our delicious treats that are perfect for gifting to your loved ones
            or for indulging yourself.</p>
            <div class="category-button">
                <button type="button">Select Cake</button>
            </div>
        </div>
    </div>

    <?php
    //About Us section
    ?>
    <div class="about-container">
        <div class="logo-container">
            <img src="{{ asset('images/piece_of_cake_logo.jpeg') }}" alt="Logo Icon" width="150" height="150">
            <h3>Our Partners</h3>
            <p>Florists: +94 717494067</p>
            <p>Event Organizers: +94 770661671</p>
        </div>
        <div class="description-section">
            <h1 id="About-Us-Section">About Us</h1>
            <p style="line-height:40px;"><b>Welcome to Piece Of Cake</b>, your premier online cake supply shop! We specialize in providing a wide variety
            of delicious cakes, including birthday cakes, wedding cakes, cupcakes, celebration cakes, gift packs, and even
            customized and personalized creations. As a sole proprietorship, we have been proudly serving our loyal customers since 2015.
            In keeping up with technological developments and consumer demand, we have been continually modernising our processes
            and provide computer based systems and online services. So, we ensure our service blends smoothly with any event. 
            We are open from 7:00am to 10:00pm every day for online orders.
            Thank you for choosing Piece Of Cake - Sweetest slice of Paradise!</p>
        </div>
    </div>

    <?php
    //Contact Us section
    ?>
    <br>
    <h1 id="Contact-Us-Section">Contact Us</h1>
    <div class="contact-container">
        <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.629460360957!2d79.95740807456913!3d6.814843019710036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae24fd59828c2eb%3A0x8b5885d795041241!2s109%20Pubudu%20Mawatha%2C%20Pannipitiya!5e0!3m2!1sen!2slk!4v1685206284079!5m2!1sen!2slk"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="reach-us-section">
                <h4>Reach Us:</h4>
                <ul class="contact-details-list">
                    <li><span>Contact No</span>: +94 71 492 5742</li>
                    <li><span>Address</span>: 109/A Pubudu Mawatha, Siddamulla, Piliyandala</li>
                    <li><span>Facebook Page</span>: <a href="https://www.facebook.com/Cakes.by.Shiranthi.DeSeram">https://www.facebook.com/Cakes.by.Shiranthi.DeSeram</a></li>
                    <li><span>Instagram Page</span>: <a href="https://instagram.com/piece.of.cake.20?igshid=YmMyMTA2M2Y">https://instagram.com/piece.of.cake.20?igshid=YmMyMTA2M2Y</a></li>
                </ul>
            </div>
        </div>
        <div class="contact-details">
            <div class="form-container">
                <form id="contact-form">
                    <label for="name">Your Name:</label>
                    <input type="text" id="name" name="name" required>

                    <label for="email">Your Email:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="contact">Your Contact No:</label>
                    <input type="tel" id="contact" name="contact" required>

                    <label for="comments">Comments:</label>
                    <textarea id="comments" name="comments"></textarea>

                    <button type="submit">Submit</button>
                </form>
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
