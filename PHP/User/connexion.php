<?php
    $pageName = "Connexion";
    $rootPath = "../";
?>

<!DOCTYPE HTML>
<html lang="fr">
    <?php require_once(__DIR__ . '/' . $rootPath . 'Inclusions/head.php'); ?>

    <body>
        <?php require_once(__DIR__ . '/' . $rootPath . 'Inclusions/header.php'); ?>

        <main>
            <div class="toCenterContent">
                <form id="authMode" action="profil.php" method="POST">
                    <fieldset class="authMode">
                        <label>
                            <input type="radio" name="authMode" value="login" checked onclick="toggleRegistrationMode()"> Connexion
                        </label>
                        <label>
                            <input type="radio" name="authMode" value="register" onclick="toggleRegistrationMode()"> Créer un compte
                        </label>
                    </fieldset>

                    <fieldset>
                    <label for="username">Nom d'utilisateur :</label><br>
                    <input type="text" id="username" name="username" required>
                    </fieldset>

                    <fieldset>
                    <label for="password">Mot de passe :</label><br>
                    <input type="password" id="password" name="password" required>
                    </fieldset>

                    <fieldset id="confirmPasswordField" style="display:none;">
                        <label for="confirmPassword">Confirmez mot de passe :</label><br>
                        <input type="password" id="confirmPassword" name="confirmPassword">
                    </fieldset>
                    <button type="submit">Valider</button>
                </form>
            </div>
        </main>

        <?php require_once(__DIR__ . '/' . $rootPath . 'Inclusions/footer.php'); ?>
    </body>
</html>