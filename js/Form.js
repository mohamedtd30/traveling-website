// Define a flag to track form validity
var isFormValid = false;

// Function to validate individual fields
function validateField(inputId, errorId, validationFunction) {
    const input = document.getElementById(inputId);
    const errorElement = document.getElementById(errorId);
    const value = input.value.trim();

    if (!value) {
        errorElement.innerText = "This field is required";
        errorElement.style.display = "block";
        return false;
    } else if (!validationFunction(value)) {
        errorElement.innerText = "Invalid input";
        errorElement.style.display = "block";
        return false;
    } else {
        errorElement.style.display = "none";
        return true;
    }
}

// Function to validate the entire form
function validateForm() {
    const addressValid = validateField("address", "addressError", validateAddress);
    const emailValid = validateField("mail", "emailError", validateEmail);
    const idValid = validateField("NationalID", "idError", validateNationalID);
    const tripValid = validateField("Trip", "tripError", validateAddress);
    const dateValid = validateField("birthdate", "dateError", validateAddress);
    const ticketValid = validateField("ticketNo", "ticketError", validateAddress);

    // Update the form validity flag
    isFormValid = addressValid && emailValid && idValid && tripValid && dateValid && ticketValid;

    return isFormValid;
}

// Event listeners for input fields
document.getElementById("address").addEventListener("input", function () {
    validateField("address", "addressError", validateAddress);
});

document.getElementById("mail").addEventListener("input", function () {
    validateField("mail", "emailError", validateEmail);
});

document.getElementById("NationalID").addEventListener("input", function () {
    validateField("NationalID", "idError", validateNationalID);
});

document.getElementById("Trip").addEventListener("input", function () {
    validateField("Trip", "tripError", validateAddress);
});

document.getElementById("birthdate").addEventListener("input", function () {
    validateField("birthdate", "dateError", validateAddress);
});

document.getElementById("ticketNo").addEventListener("input", function () {
    validateField("ticketNo", "ticketError", validateAddress);
});

// Event listener for the submit button
// document.getElementById("next").addEventListener("click", function (event) {
//     // Validate the form before allowing submission
//     if (!isFormValid || !validateForm()) {
//         event.preventDefault();
//     }
//     // Form is valid, proceed with submission
//     // You can add additional logic here if needed
// });




// Function to validate individual fields
function validateField(inputId, errorId, validationFunction) {
    const input = document.getElementById(inputId);
    const errorElement = document.getElementById(errorId);
    const value = input.value.trim();

    if (!value) {
        errorElement.innerText = "This field is required";
        errorElement.style.display = "block";
        return false;
    } else if (!validationFunction(value)) {
        errorElement.innerText = "Invalid input";
        errorElement.style.display = "block";
        return false;
    } else {
        errorElement.style.display = "none";
        return true;
    }
}

// Event listener for the submit button
document.getElementById("next").addEventListener("click", function (event) {
    // Validate the form before allowing submission
    const addressValid = validateField("address", "addressError", validateAddress);
    const emailValid = validateField("mail", "emailError", validateEmail);
    const idValid = validateField("NationalID", "idError", validateNationalID);
    const tripValid = validateField("Trip", "tripError", validateAddress);
    const dateValid = validateField("birthdate", "dateError", validateAddress);
    const ticketValid = validateField("ticketNo", "ticketError", validateAddress);

    // Update the form validity flag
    const isFormValid = addressValid && emailValid && idValid && tripValid && dateValid && ticketValid;

    // Prevent form submission if validation fails
    if (!isFormValid) {
        event.preventDefault();
    }
});
