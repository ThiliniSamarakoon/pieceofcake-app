let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
    showSlides(slideIndex += n);
}


// Thumbnail image controls
function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    if (n > slides.length) {
        slideIndex = 1;
    }
    if (n < 1) {
        slideIndex = slides.length;
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[slideIndex - 1].style.display = "block";
}

//Direct to each section when clicked on the menu bar buttons
function scrollToSection(sectionId) {
    const section = document.querySelector(sectionId);
    if (section) {
        section.scrollIntoView({ behavior: 'smooth' });
    }
}

function updatePrice() {
    let weight = document.getElementById("weight").value;
    let cakeType = document.getElementById("cake_type").value;
    let basePrice = 0;

    // Define the base price for each weight option
    if (weight === "0.5 kg") {
        basePrice = 2100.00;
    } else if (weight === "1 kg") {
        basePrice = 4200.00;
    } else if (weight === "1.5 kg") {
        basePrice = 6300.00;
    } else if (weight === "2 kg") {
        basePrice = 8400.00;
    }

    let price = basePrice;

    // Add additional cost for 'Chocolate' cake type
    if (cakeType === "chocolate") {
        price += 300.00;
    }

    // Update the hidden input field and the displayed price with the new price
    document.getElementById("price").value = price.toFixed(2);
    document.getElementById("displayPrice").textContent = "Rs." + price.toFixed(2);
}















