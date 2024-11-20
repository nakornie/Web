<?php
session_start();
include_once __DIR__ . '/../../../SQL/db.php';
include_once __DIR__ . '/../../../SQL/AzertypeManager.php';

// Vérifie si les données ont été envoyées
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données JSON du corps de la requête
    $data = json_decode(file_get_contents('php://input'), true);

    // Vérifier que les données sont bien décodées
    if ($data === null) {
        http_response_code(400);
        echo json_encode(['error' => 'Invalid JSON']);
        exit;
    }

    // Récupérer les valeurs
    $userName = $_SESSION['userName'] ?? 'Guest';
    $timer = $data['timer'] ?? 0;
    $score = $data['score'] ?? 0;
    $ratio = $data['ratio'] ?? 0;
    $difficulty = $data['difficulty'] ?? '';

    // Préparer et exécuter la requête
    if ($userName !== 'Guest') {
        $AzertypeManager->addScore($userName, $timer, $score, $ratio, $difficulty);
    }

    // Réponse JSON
    echo json_encode(['success' => true]);
    exit;
}

// Si la requête n'est pas POST, retourner une erreur
http_response_code(400);
echo json_encode(['error' => 'Invalid request']);
?>
