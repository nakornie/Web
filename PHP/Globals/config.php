<?php
session_start(); // Démarrage de la session

// Détecte la langue à partir de la session ou utilise une langue par défaut
$lang = $_SESSION['lang'] ?? 'fr';
$langFile = __DIR__ . "/../languages/$lang.php";

// Charge le fichier de langue
if (file_exists($langFile)) {
    $translations = include($langFile);
} else {
    $translations = include(__DIR__ . "/../languages/en.php"); // Fallback en anglais
}

// Fonction de traduction
function t($key) {
    global $translations;
    return $translations[$key] ?? $key;
}
?>
