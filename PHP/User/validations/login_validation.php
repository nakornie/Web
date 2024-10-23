<?php
session_start();

$hasError = false;
if (isset($_POST['authMode'])) {
    $authMode = $_POST['authMode'];

    // Verifies validity of username
    if (isset($_POST['username'] ) 
        && !empty($_POST['username'])
        && trim($_POST['username']) != " "
    ) {
        $username = htmlspecialchars($_POST['username']);
    }
    else {
        $_SESSION['error'] = "Invalide username";
        $hasError = true;
    }

    // Verifies validity of password
    if (isset($_POST['password'] ) 
        && !empty($_POST['password'])
        && trim($_POST['password']) != " "
    ) {
        $password = htmlspecialchars($_POST['password']);
    }
    else {
        $_SESSION['error'] = "Invalide password";
        $hasError = true;
    }

    // If the user registers for the first time, checks if its password has been successfully confirmed
    if ($authMode === 'register') {
        $confirmPassword = $_POST['confirmPassword'];
        
        // Check if passwords match
        if ($password === $confirmPassword) {
            // Insert user into database, etc.
        } else {
            $_SESSION['error'] = "Passwords do not match";
            $hasError = true;
        }
    }

    if (!$hasError) {
        $_SESSION['userLogged'] = true;
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;

        header("Location: ../profil.php");
        exit();
    } else {
        header("Location: ../login.php");
        exit();
    }
} else {
    echo "Error: No authentication mode selected!";
}
?>