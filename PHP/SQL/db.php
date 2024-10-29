<?php
require_once 'UserManager.php';

try {
    $mysqlClient = new PDO(
        'mysql:host=localhost;dbname=nakos_playground;charset=utf8', 
        'root', 
        '',
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],
    );
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

$userManager = new UserManager($mysqlClient);

?>