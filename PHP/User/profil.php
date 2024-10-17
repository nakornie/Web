<?php
    $pageName = "Profil";
    $rootPath = "../";
?>

<!DOCTYPE HTML>
<html lang="fr">
    <?php require_once(__DIR__ . '/' . $rootPath . 'Inclusions/head.php'); ?>

    <body>
        <?php require_once(__DIR__ . '/' . $rootPath . 'Inclusions/header.php'); ?>

        <main>
        <?php
        // Check if 'authMode' is set
        if (isset($_POST['authMode'])) {
            $authMode = $_POST['authMode'];  // 'login' or 'register'
            
            $username = $_POST['username'];
            $password = $_POST['password'];
            
            // If user selected "Login"
            if ($authMode === 'login') {
                // Process the login (you can add your login logic here)
                echo "Logging in as: $username";
                // Add password validation, database query, etc.
            }
            
            // If user selected "Create Account"
            else if ($authMode === 'register') {
                $confirmPassword = $_POST['confirmPassword'];
                
                // Check if passwords match
                if ($password === $confirmPassword) {
                    // Process account creation (add registration logic here)
                    echo "Creating account for: $username";
                    // Insert user into database, etc.
                } else {
                    echo "Passwords do not match!";
                }
            }
        } else {
            echo "Error: No authentication mode selected!";
        }
?>

        </main>

        <?php require_once(__DIR__ . '/' . $rootPath . 'Inclusions/footer.php'); ?>
    </body>
</html>