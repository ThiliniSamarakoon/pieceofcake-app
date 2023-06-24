// Function to validate alphabetic letters
function validateAlphabeticInput(input) {
    var regex = /^[A-Za-z]+$/;
    return regex.test(input);
}

// Function to validate email
function validateEmail(email) {
    var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    return regex.test(email);
}

// Function to validate contact number
function validateContactNumber(contactNumber) {
    var contactPattern = /^(\+?\d{1,3}[-.\s]?)?\(?\d{3}\)?[-.\s]?\d{3}[-.\s]?\d{4}$/;
    return contactPattern.test(contactNumber);
}

// Function to validate password
function validatePassword(password) {
    // Password should be more than 5 characters and include at least one special character or number
    var pw = /^(?=.*[a-zA-Z])(?=.*[!@#$%^&*0-9])[a-zA-Z0-9!@#$%^&*]{6,}$/;
    return pw.test(password);
}

// Function to validate re-enter password
function validateReEnterPassword(password, reEnterPassword) {
    return password === reEnterPassword;
}

// Function to handle form submission
function handleSubmit(event) {
    // Get form inputs
    var firstName = document.getElementById("first-name").value;
    var lastName = document.getElementById("last-name").value;
    var email = document.getElementById("email").value;
    var contactNumber = document.getElementById("contact-number").value;
    var password = document.getElementById("password").value;
    var reEnterPassword = document.getElementById("confirm-password").value;

    // Perform validations
    if (!validateAlphabeticInput(firstName)) {
        alert("Please enter a valid first name (only alphabetic characters).");
        event.preventDefault(); // Prevent form submission
        return;
    }

    if (!validateAlphabeticInput(lastName)) {
        alert("Please enter a valid last name (only alphabetic characters).");
        event.preventDefault(); // Prevent form submission
        return;
    }

    if (!validateEmail(email)) {
        alert("Please enter a valid email address.");
        event.preventDefault(); // Prevent form submission
        return;
    }

    if (!validateContactNumber(contactNumber)) {
        alert("Please enter a valid contact number.");
        event.preventDefault(); // Prevent form submission
        return;
    }

    if (!validatePassword(password)) {
        alert("Please enter a valid password (more than 5 characters and include at least one special character or number).");
        event.preventDefault(); // Prevent form submission
        return;
    }

    if (!validateReEnterPassword(password, reEnterPassword)) {
        alert("Passwords do not match. Please re-enter the password.");
        event.preventDefault(); // Prevent form submission
        return;
    }
}
