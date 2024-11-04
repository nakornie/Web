<?php
session_start();
include_once __DIR__ . '/../../SQL/db.php';
include_once __DIR__ . '/../../SQL/UserManager.php';

$errors = [];
$colorOption = $_POST['colorOption'];
$mainColor = $_POST['mainColor'] ?? '';
$subColor = $_POST['subColor'] ?? '';

$userName = $_SESSION['userName'];

if ($colorOption === "default") {
    $userManager->setUserColors($userName, '#960151', '#FFEAFD');
    $_SESSION['userColors'] = [
        'mainColor' => '#960151',
        'subColor' => '#FFEAFD'
    ];
    header("Location: ../profil/profil.php");
    exit();

} elseif ($colorOption === "personalized") {
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
        $_SESSION['userColors'] = [
            'mainColor' => $mainColor,
            'subColor' => $subColor
        ];
    } else {
        $_SESSION['error'] = implode('<br>', $errors);
    }

    header("Location: ../profil/profil.php");
    exit();
} else {
    $errors[] = "Invalide color choise";
}
?>