function toggleRegistrationMode() {
    const registerMode = document.querySelector('input[name="authMode"]:checked').value === 'register';
    const confirmPasswordField = document.getElementById('confirmPasswordField');
    
    if (registerMode) {
        confirmPasswordField.style.display = 'block'; // Show confirm password field
        document.getElementById('confirmPassword').setAttribute('required', 'true'); // Add required attribute
    } else {
        confirmPasswordField.style.display = 'none'; // Hide confirm password field
        document.getElementById('confirmPassword').removeAttribute('required'); // Remove required attribute
    }
}