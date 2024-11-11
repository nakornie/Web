<?php
header("Content-Type: text/css; charset=UTF-8");
session_start();
include_once '../SQL/db.php';
include_once '../SQL/UserManager.php';

// Define default color if user not logged
$userName = $_SESSION['userName'] ?? '';
$userPreferences = $userName ? $userManager->getUserColors($userName) : [];
$primaryColor = $userPreferences['user_main_color'] ?? '#960151';
$secondaryColor = $userPreferences['user_secondary_color'] ?? '#FFEAFD';

?>

:root {
    --primary-color: <?php echo $primaryColor; ?>;
    --secondary-color: <?php echo $secondaryColor; ?>;
}
