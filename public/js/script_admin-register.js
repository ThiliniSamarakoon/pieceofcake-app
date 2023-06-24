const form = document.getElementById('admin-register');
const errorMessages = document.getElementById('error-messages');

form.addEventListener('submit', function (event) {
    // Clear previous error messages
    errorMessages.innerHTML = '';

    // Admin Name validation
    const adminNameInput = document.getElementById('AdminName');
    const adminNameValue = adminNameInput.value.trim();
    const adminNameRegex = /^[A-Za-z0-9\s]+$/;

    if (!adminNameRegex.test(adminNameValue)) {
        event.preventDefault();
        const errorMessage = document.createElement('p');
        errorMessage.innerText = 'Admin Name cannot contain only numeric characters.';
        errorMessages.appendChild(errorMessage);
    }

    // Email validation
    const emailInput = document.getElementById('Email');
    const emailValue = emailInput.value.trim();
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!emailRegex.test(emailValue)) {
        event.preventDefault();
        const errorMessage = document.createElement('p');
        errorMessage.innerText = 'Invalid email address.';
        errorMessages.appendChild(errorMessage);
    }

    // Password validation
    const passwordInput = document.getElementById('Password');
    const passwordValue = passwordInput.value.trim();
    const passwordRegex = /^(?=.*[A-Za-z])(?=.*\d|[^\w\s]).*$/;

    if (passwordValue.length < 5 || !passwordRegex.test(passwordValue)) {
        event.preventDefault();
        const errorMessage = document.createElement('p');
        errorMessage.innerText = 'Password should be at least 5 characters long and contain at least one alphabetic letter.';
        errorMessages.appendChild(errorMessage);
    }

    // Contact Number validation
    const contactNoInput = document.getElementById('ContactNo');
    const contactNoValue = contactNoInput.value.trim();
    const contactNoRegex = /^(?:\+94|0)[1-9]\d{8}$/;

    if (!contactNoRegex.test(contactNoValue)) {
        event.preventDefault();
        const errorMessage = document.createElement('p');
        errorMessage.innerText = 'Invalid contact number.';
        errorMessages.appendChild(errorMessage);
    }
});
