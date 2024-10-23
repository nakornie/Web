<?php
    if (isset($_SESSION['error'])) {
        echo '<script>console.log("' . addslashes($_SESSION['error']) . '");</script>';
        unset($_SESSION['error']);
    }

    $pageName = "Login";
    $rootPath = "../";
?>

<!DOCTYPE HTML>
<html lang="fr">
    <?php require_once(__DIR__ . '/' . $rootPath . 'Inclusions/head.php'); ?>

    <body>
        <?php require_once(__DIR__ . '/' . $rootPath . 'Inclusions/header.php'); ?>

        <main>
            <div class="toCenterContent">
                <form id="authMode" action="validations/login_validation.php" method="POST" onsubmit="return validateForm()">
                    <fieldset class="authMode">
                        <label>
                            <input type="radio" name="authMode" value="login" checked onclick="toggleRegistrationMode()"> Login
                        </label>
                        <label>
                            <input type="radio" name="authMode" value="register" onclick="toggleRegistrationMode()"> Create account
                        </label>
                    </fieldset>

                    <fieldset>
                    <label for="username">Username :</label><br>
                    <input type="text" id="username" name="username" required>
                    </fieldset>

                    <fieldset>
                    <label for="password">Password :</label><br>
                    <input type="password" id="password" name="password" required>
                    </fieldset>

                    <fieldset id="confirmPasswordField" style="display:none;">
                        <label for="confirmPassword">Confirm Password :</label><br>
                        <input type="password" id="confirmPassword" name="confirmPassword">
                    </fieldset>
                    <button type="submit">Validate</button>
                </form>
            </div>
        </main>

        <?php require_once(__DIR__ . '/' . $rootPath . 'Inclusions/footer.php'); ?>
    </body>
</html>