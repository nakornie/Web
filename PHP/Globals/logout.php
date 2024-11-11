<?php
session_start();

$url = isset($_SESSION['redirectAfterLogout']) ? $_SESSION['redirectAfterLogout'] : 'login.php';

foreach ($_SESSION as $key => $value) {
    unset($_SESSION[$key]);
}

session_destroy();

echo '<script>window.location.href = "' . $url . '";</script>';
?>
