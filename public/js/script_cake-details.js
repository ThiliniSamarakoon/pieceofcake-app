//Direct to each section when clicked on the menu bar buttons
function scrollToSection(sectionId) {
    const section = document.querySelector(sectionId);
    if (section) {
        section.scrollIntoView({ behavior: 'smooth' });
    }
}

function updatePrice(storedCakeType) {
    var weightSelect = document.getElementById("cake-weight");
    var priceDisplay = document.getElementById("displayPrice");
    var cakeTypeSelect = document.getElementById("cake-type");

    var selectedWeight = parseFloat(weightSelect.value);
    var basePrice = parseFloat(weightSelect.options[weightSelect.selectedIndex].getAttribute("data-price"));
    var updatedPrice = basePrice * selectedWeight;

    // Check if the stored cake type is not equal to the user-selected cake type
    if (cakeTypeSelect.value !== storedCakeType) {
        // Adjust prices based on cake types
        if (cakeTypeSelect.value === "chocolate") {
            updatedPrice += 300.00; // Add 300.00 for chocolate cake
        } else if (cakeTypeSelect.value === "red_velvet") {
            updatedPrice += 400.00; // Add 400.00 for red velvet cake
        } else if (cakeTypeSelect.value === "cheese_cake" || cakeTypeSelect.value === "coffee_cake") {
            updatedPrice += 200.00; // Add 200.00 for cheese cake or coffee cake
        }
    }

    // Display the updated price
    priceDisplay.value = updatedPrice.toFixed(2);
}


