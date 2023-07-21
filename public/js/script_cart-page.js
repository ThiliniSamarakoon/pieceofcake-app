
function updateTotalPrice() {
    // Get the input elements
    const quantityInput = document.getElementById('quantityInput');
    const deliveryCheckbox = document.getElementsByName('delivery')[0];
    const totalPriceInput = document.getElementById('totalPriceInput');

    // Get the values from the input elements
    const quantity = parseInt(quantityInput.value);

    //const totalPrice = parseFloat(totalPriceInput.value.replace('Rs.', '').replace(',', ''));
    const originalTotalPrice = parseFloat(totalPriceInput.dataset.originalTotal); // Get the original total price

    // Calculate the delivery cost
    const deliveryCost = deliveryCheckbox.checked ? 200 : 0;

    // Calculate the updated total price based on the original total price
    const updatedTotalPrice = (quantity * originalTotalPrice) + deliveryCost;

    // Display the updated total price
    totalPriceInput.value = `Rs.${updatedTotalPrice.toFixed(2)}`;
}

// Call the updateTotalPrice function on page load to initialize the total price
updateTotalPrice();







   




