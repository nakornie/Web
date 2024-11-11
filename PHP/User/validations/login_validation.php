<?php
session_start();
include_once __DIR__ . '/../../SQL/db.php';
include_once __DIR__ . '/../../SQL/UserManager.php';

$errors = [];
$userName = $_POST['userName'] ?? '';
$password = $_POST['password'] ?? '';

if (isset($_POST['authMode'])) {
    $authMode = $_POST['authMode'];

    if ($authMode === 'register') {
        // Verifies the validity of the user name
        if (empty(trim($userName))) {
            $errors[] = "Invalide user name.";
        }
        
        // Verifies the disponibility of the user name
        if ($userManager->getUserByName($userName)) {
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
            $userManager->addUser($userName, $hashedPassword);
        }

    } elseif ($authMode === 'login') {
        $user = $userManager->getUserByName($userName);
        if (!$user || !password_verify($password, $user['user_password'])) {
            $errors[] = "User name or password incorrect.";
        }
    }

    // Redirecting according to the verifications' results
    if (empty($errors)) {
        $_SESSION['userLogged'] = true;
        $_SESSION['userName'] = $userName;

        $userPreferences = $userName ? $userManager->getUserColors($userName) : [];
        $primaryColor = $userPreferences['user_main_color'] ?? '#960151';
        $secondaryColor = $userPreferences['user_secondary_color'] ?? '#FFEAFD';
        $_SESSION['userColors'] = [
            'mainColor' => $primaryColor,
            'subColor' => $secondaryColor
        ];

        $img = $userManager->getUserImage($userName);
        $_SESSION['userImage'] = $img['user_img'];

        header("Location: ../profil/profil.php");
    } else {
        $_SESSION['error'] = implode('<br>', $errors);
        header("Location: ../login/login.php");
    }
    exit();
} else {
    echo "Error : no identification mode selected !";
}
