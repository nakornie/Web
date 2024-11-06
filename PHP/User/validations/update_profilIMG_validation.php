<?php
session_start();
include_once __DIR__ . '/../../SQL/db.php';
include_once __DIR__ . '/../../SQL/UserManager.php';

if (isset($_FILES['profileImage']) && $_FILES['profileImage']['error'] == 0) {
    // Verifies that the file doesn't exceed 2 Mo
    if ($_FILES['profileImage']['size'] > 2000000) {
        echo "Upload failed, image size too large";
        return;
    }

    // Verifies that the file is an image
    $fileInfo = pathinfo($_FILES['profileImage']['name']);

    $extension = strtolower($fileInfo['extension']); // lower case to ensure the absence of case conflicts
    $allowedExtensions = ['jpg', 'jpeg', 'gif', 'png'];
    if (!in_array($extension, $allowedExtensions)) {
        echo "Upload failes, extension {$extension} isn't autorized";
        return;
    }

    
    $path = __DIR__ . '/../profilImages';

    if (!is_dir($path)) {
        echo "Directory /profilImages/ missing with path {$path}";
        return;
    }
    
    $userName =  $_SESSION['userName'];
    $filename = $userName . '_profil_IMG.' . $extension;
    $filePath = $path . '/' . $filename;

    if (is_uploaded_file($_FILES['profileImage']['tmp_name'])) {
        if (move_uploaded_file($_FILES['profileImage']['tmp_name'], $filePath)) {
            $userManager->setUserImage($userName, $filename);
            $_SESSION['userImage'] = $filename;
        } else {
            echo "Échec lors du déplacement du fichier.";
        }
    } else {
        echo "Échec : le fichier temporaire n'existe pas.";
    }
    
}

header("Location: ../profil/profil.php");
exit();
?>
