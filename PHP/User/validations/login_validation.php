<?php
session_start();
include_once __DIR__ . '/../../SQL/db.php';
include_once __DIR__ . '/../../SQL/UserManager.php';

$errors = [];
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if (isset($_POST['authMode'])) {
    $authMode = $_POST['authMode'];

    if ($authMode === 'register') {
        // Verifies the validity of the user name
        if (empty(trim($username))) {
            $errors[] = "Invalide user name.";
        }
        
        // Verifies the disponibility of the user name
        if ($userManager->getUserByName($username)) {
            $errors[] = "User name already used.";
        }

        // Verifies the validity of the password
        if (empty(trim($password))) {
            $errors[] = "Invalid password.";
        }

        // Verifies that the password and its confirmation matche
        if ($password !== ($_POST['confirmPassword'] ?? '')) {
            $errors[] = "Les mots de passe ne correspondent pas.";
        }

        // If no error, add the user to the database
        if (empty($errors)) {
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $userManager->addUser($username, $hashedPassword);
        }

    } elseif ($authMode === 'login') {
        $user = $userManager->getUserByName($username);
        if (!$user || !password_verify($password, $user['user_password'])) {
            $errors[] = "User name or password incorrect.";
        }
    }

    // Redirecting according to the verifications' results
    if (empty($errors)) {
        $_SESSION['userLogged'] = true;
        $_SESSION['username'] = $username;
        header("Location: ../profil.php");
    } else {
        $_SESSION['error'] = implode('<br>', $errors);
        header("Location: ../login.php");
    }
    exit();
} else {
    echo "Error : no identification mode selected !";
}
