<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['authMode'])) {
        require_once(__DIR__ . '/login_validation.php');
    } elseif (isset($_POST['profilIMG'])) {
        require_once(__DIR__ . '/upload_validation.php');
    }
}
?>
