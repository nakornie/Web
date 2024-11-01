<?php
session_start();
include_once __DIR__ . '/../../SQL/db.php';
include_once __DIR__ . '/../../SQL/UserManager.php';

$errors = [];
$mainColor = $_POST['mainColor'] ?? '';
$subColor = $_POST['subColor'] ?? '';

$userName = $_SESSION['username'];

// Verifies the validity of the main color
if (empty(trim($mainColor)) || !preg_match('/^#[0-9A-Fa-f]{6}$/', $mainColor)) {
    $errors[] = "Invalide main color";
}

// Verifies the validity of the secondary color
if (empty(trim($subColor)) || !preg_match('/^#[0-9A-Fa-f]{6}$/', $mainColor)) {
    $errors[] = "Invalide secondary color";
}

if (empty($errors)) {
    $userManager->setUserColors($userName, $mainColor, $subColor);
} else {
    $_SESSION['error'] = implode('<br>', $errors);
}

header("Location: ../profil/profil.php");
exit();

?>