window.addEventListener('DOMContentLoaded', function () {
    var loginForm = document.getElementById('login-form');
    var usernameInput = document.getElementById('username');
    var emailInput = document.getElementById('email');
    var passwordInput = document.getElementById('password');

    var usernamePattern = /^(?=.*[a-zA-Z])[a-zA-Z0-9]+$/;
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    var passwordPattern = /^(?=.*[A-Za-z])(?=.*\d|\W).{5,}$/;

    loginForm.addEventListener('submit', function (event) {
        var isValid = loginForm.checkValidity();

        if (!usernamePattern.test(usernameInput.value)) {
            usernameInput.setCustomValidity('Name cannot contain only numbers');
            isValid = false;
        } else {
            usernameInput.setCustomValidity('');
        }

        if (!emailPattern.test(emailInput.value)) {
            emailInput.setCustomValidity('Please enter a valid email address.');
            isValid = false;
        } else {
            emailInput.setCustomValidity('');
        }

        if (!passwordPattern.test(passwordInput.value)) {
            passwordInput.setCustomValidity('Password must be at least 5 characters long and include at least one alphabetic letter and special characters or numbers');
            isValid = false;
        } else {
            passwordInput.setCustomValidity('');
        }

        if (!isValid) {
            event.preventDefault(); // Prevent form submission if there are validation errors

            var errorMessages = '';
            var errorElements = loginForm.querySelectorAll(':invalid');

            errorElements.forEach(function (element) {
                errorMessages += '- ' + element.validationMessage + '\n';
            });

            alert('Validation errors:\n' + errorMessages);
        
        }
    });

    var errorMessageElement = document.getElementById('error-message');
    var errorMessage = errorMessageElement.dataset.errorMessage;

    if (errorMessage) {
        alert(errorMessage);
        errorMessageElement.value = ''; // Clear the error message after displaying it
    }
});

function scrollToSection(sectionId) {
    window.location.href = sectionId;
}

