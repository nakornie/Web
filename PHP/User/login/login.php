<?php
    if (isset($_SESSION['error'])) {
        echo '<script>console.log("' . addslashes($_SESSION['error']) . '");</script>';
        unset($_SESSION['error']);
    }

    $pageName = "Login";
    $rootPath = "../../";
?>

<?php require_once($rootPath . 'Globals/config.php'); ?>

<!DOCTYPE html>
<html lang="<?php echo htmlspecialchars($lang); ?>">
    <?php require_once(__DIR__ . '/' . $rootPath . 'Inclusions/head.php'); ?>

    <body>
        <?php require_once(__DIR__ . '/' . $rootPath . 'Inclusions/header.php'); ?>

        <main>
            <div class="toCenterContent">
                <form id="authMode" action="../validations/login_validation.php" method="POST" onsubmit="return validateForm()">
                    <fieldset class="authMode">
                        <label>
                            <input type="radio" name="authMode" value="login" checked onclick="toggleRegistrationMode()"><?php echo t('login') ?>
                        </label>
                        <label>
                            <input type="radio" name="authMode" value="register" onclick="toggleRegistrationMode()"><?php echo t('register') ?>
                        </label>
                    </fieldset>

                    <fieldset>
                    <label for="userName"><?php echo t('username') ?></label><br>
                    <input type="text" id="userName" name="userName" required>
                    </fieldset>

                    <fieldset>
                    <label for="password"><?php echo t('password') ?></label><br>
                    <input type="password" id="password" name="password" required>
                    </fieldset>

                    <fieldset id="confirmPasswordField" style="display:none;">
                        <label for="confirmPassword"><?php echo t('confirm') ?></label><br>
                        <input type="password" id="confirmPassword" name="confirmPassword">
                    </fieldset>
                    <button type="submit"><?php echo t('validate') ?></button>
                </form>
            </div>
        </main>

        <?php require_once(__DIR__ . '/' . $rootPath . 'Inclusions/footer.php'); ?>
    </body>
</html>