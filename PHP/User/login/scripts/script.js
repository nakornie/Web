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

function validateForm() {
    const username = document.getElementById('username').value.trim();
                const password = document.getElementById('password').value.trim();
                const confirmPasswordField = document.getElementById('confirmPasswordField');
                const authMode = document.querySelector('input[name="authMode"]:checked').value;
                
                // Validation du nom d'utilisateur
                if (username === "") {
                    alert("Username required.");
                    return false;
                }

                // Validation du mot de passe
                if (password === "") {
                    alert("Password required.");
                    return false;
                }

                // Si l'utilisateur crée un compte, valider la confirmation du mot de passe
                if (authMode === "register") {
                    const confirmPassword = document.getElementById('confirmPassword').value.trim();
                    if (confirmPassword === "") {
                        alert("Please confirm your password.");
                        return false;
                    }
                    if (password !== confirmPassword) {
                        alert("Passwords do not match.");
                        return false;
                    }
                }

                // Si toutes les validations passent, soumettre le formulaire
                return true;
}