<?php
session_start();
include_once __DIR__ . '/../../SQL/db.php';
include_once __DIR__ . '/../../SQL/UserManager.php';

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $selectedLanguage = $_POST['language'] ?? 'en';

    if (in_array($selectedLanguage, ['en', 'fr'])) {
        $userManager->setUserLanguage($userName, $selectedLanguage);
        $_SESSION['lang'] = $selectedLanguage;

    } else {
        $errors = "Unvalide language {$selectedLanguage}.";
    }

    header("Location: ../profil/profil.php");
    exit();
}

?>