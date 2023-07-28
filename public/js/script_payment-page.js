document.addEventListener('DOMContentLoaded', function () {
    const streetAddressInput = document.getElementById('streetAddress');
    const citySelect = document.getElementById('city');
    const countrySelect = document.getElementById('country');
    //const payAdvanceOption = document.getElementById('payAdvance');
    //const paymentMethodRadios = document.querySelectorAll('input[name="paymentMethod"]');

    streetAddressInput.addEventListener('input', function () {
        // Check if the Street Address field has a value
        const streetAddressValue = streetAddressInput.value.trim();

        if (streetAddressValue) {
            // If the Street Address has a value, make City and Country required
            citySelect.setAttribute('required', 'required');
            countrySelect.setAttribute('required', 'required');
        } else {
            // If the Street Address is empty, remove required attribute from City and Country
            citySelect.removeAttribute('required');
            countrySelect.removeAttribute('required');
        }
    });


// Add event listener for form submission
        document.getElementById('checkoutForm').addEventListener('submit', function (event) {
            // Get the value of the contactNo input
            const contactNoInput = document.getElementById('contactNo').value.trim();
            const streetAddressValue = streetAddressInput.value.trim();
            const cityValue = citySelect.value.trim();
            const countryValue = countrySelect.value.trim();

            // Validate the contact number using regular expression
            const isValidContactNo = /^\+?[1-9]\d{9,14}$/.test(contactNoInput);

            // Check if the user filled city or country without filling the street address
            if ((cityValue || countryValue) && !streetAddressValue) {
                alert('Error: Please fill the Street Address when providing City or Country.');
                event.preventDefault(); // Prevent form submission
            }


            // If the contact number is not valid, show an alert and prevent form submission
            if (!isValidContactNo) {
                alert('Error: Please enter a valid phone number with at least 10 digits.');
            } else {
                alert('Order submitted Successfully');
            }

            // Get the selected payment method and payment option
            const paymentMethod = document.querySelector('input[name="paymentMethod"]:checked');
            const paymentOption = document.querySelector('input[name="paymentOption"]:checked');

            // Check if the selected payment method is debit/credit card and the selected payment option is pay advance
            if (paymentMethod && paymentOption && paymentMethod.value === 'debitCreditCard' && paymentOption.value === 'payAdvance') {
                // Redirect the user to the pay advance page
                window.location.href = payAdvanceUrl;
            }

        });

    });







