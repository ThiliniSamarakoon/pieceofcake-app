//Automatic Slideshow
document.addEventListener("DOMContentLoaded", function (event) {
    var slides = document.getElementsByClassName("slide");
    var currentSlide = 0;

    function showSlide(n) {
        if (n < 0) {
            currentSlide = slides.length - 1;
        } else if (n >= slides.length) {
            currentSlide = 0;
        }

        for (var i = 0; i < slides.length; i++) {
            slides[i].classList.remove("active");
        }

        slides[currentSlide].classList.add("active");
    }

    function nextSlide() {
        currentSlide++;
        showSlide(currentSlide);
    }

    slides[currentSlide].classList.add("active");
    setInterval(nextSlide, 3000); 
});

//Direct to each sections when click on the menu bar buttons
function scrollToSection(sectionId) {
    const section = document.querySelector(sectionId);
    if (section) {
        section.scrollIntoView({ behavior: 'smooth' });
    }
}

//Contact Us Form Validation

window.addEventListener('DOMContentLoaded', function () {
    var form = document.getElementById('contact-form');
    var nameInput = document.getElementById('name');
    var emailInput = document.getElementById('email');
    var contactInput = document.getElementById('contact');

    var namePattern = /^[a-zA-Z\s\-']+$/;
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    var contactPattern = /^(\+?\d{1,3}[-.\s]?)?\(?\d{3}\)?[-.\s]?\d{3}[-.\s]?\d{4}$/;

    form.addEventListener('submit', function (event) {
        var isValid = true;

        if (!namePattern.test(nameInput.value)) {
            nameInput.setCustomValidity('Please enter a valid name without numbers.');
            isValid = false;
        } else {
            nameInput.setCustomValidity('');
        }

        if (!emailPattern.test(emailInput.value)) {
            emailInput.setCustomValidity('Please enter a valid email address.');
            isValid = false;
        } else {
            emailInput.setCustomValidity('');
        }

        if (!contactPattern.test(contactInput.value)) {
            contactInput.setCustomValidity('Please enter a valid contact number.');
            isValid = false;
        } else {
            contactInput.setCustomValidity('');
        }

        if (!isValid) {
            event.preventDefault(); // Prevent form submission if there are validation errors
        }
    });
});

// Redirect to login page
var loginButton = document.getElementById('login-button');
loginButton.addEventListener('click', function () {
    window.location.href = '/login';
});


