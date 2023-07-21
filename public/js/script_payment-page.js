document.getElementById('contactNo').addEventListener('input', function () {
    const contactNoInput = this.value.trim();
    const isValid = /^\+?[1-9]\d{9,14}$/.test(contactNoInput);
    if (!isValid) {
        this.setCustomValidity(''); // Clear any previous custom validity message
        alert('Error: Please enter a valid phone number with at least 10 digits.');
    } else {
        this.setCustomValidity('');
    }
});

document.getElementById('checkoutForm').addEventListener('submit', function (event) {
    const contactNoInput = document.getElementById('contactNo').value.trim();
    const isValidContactNo = /^\+?[1-9]\d{9,14}$/.test(contactNoInput);
    if (!isValidContactNo) {
        alert('Error: Please enter a valid phone number with at least 10 digits.');
        event.preventDefault(); // Prevent form submission
    }


});

