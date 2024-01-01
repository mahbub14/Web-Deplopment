function submitForm() {
    // Bug #1 - Broken Form Validation
    alert("Form submitted successfully!");
    return false; // To prevent form submission
}

function showAlert() {
    // Bug #2 - Unexpected Alert
    alert("This button has a bug that triggers an unexpected alert.");
}
