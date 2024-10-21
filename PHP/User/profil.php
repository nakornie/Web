<?php
    $pageName = "Profil";
    $rootPath = "../";

    if (isset($_POST['authMode'])) {
        $authMode = $_POST['authMode'];

        // Verifies validity of username
        if (isset($_POST['username'] ) 
            && !empty($_POST['username'])
            && trim($_POST['username']) != " "
        ) {
            $username = htmlspecialchars($_POST['username']);
        }
        else {
            echo ('Username invalid or not defined');
        }

        // Verifies validity of password
        if (isset($_POST['password'] ) 
            && !empty($_POST['password'])
            && trim($_POST['password']) != " "
        ) {
            $password = htmlspecialchars($_POST['password']);
        }
        else {
            echo ('Password invalid or not defined');
        }

        // If the user registers for the first time, checks if its password has been successfully confirmed
        if ($authMode === 'register') {
            $confirmPassword = $_POST['confirmPassword'];
            
            // Check if passwords match
            if ($password === $confirmPassword) {
                // Insert user into database, etc.
            } else {
                echo "Passwords do not match!";
            }
        }
    } else {
        echo "Error: No authentication mode selected!";
    }
?>

<!DOCTYPE HTML>
<html lang="fr">
    <?php require_once(__DIR__ . '/' . $rootPath . 'Inclusions/head.php'); ?>

    <body>
        <?php require_once(__DIR__ . '/' . $rootPath . 'Inclusions/header.php'); ?>

        <main>

        </main>

        <?php require_once(__DIR__ . '/' . $rootPath . 'Inclusions/footer.php'); ?>
    </body>
</html>