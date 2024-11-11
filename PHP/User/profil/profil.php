<?php
    $pageName = "Profil";
    $rootPath = "../../";
?>

<?php require_once($rootPath . 'Globals/config.php'); 
echo '<pre>';
print_r($_SESSION);
echo '</pre>';
?>

<!DOCTYPE html>
<html lang="<?php echo htmlspecialchars($lang); ?>">
    <?php require_once(__DIR__ . '/' . $rootPath . 'Inclusions/head.php'); ?>

    <body>
        <?php require_once(__DIR__ . '/' . $rootPath . 'Inclusions/header.php'); ?>

        <main>
        <div class="toCenterContent">
            <div>
                <form action="../validations/update_language_validation.php" method="POST">
                    <div class="accordion">
                        <div class="accordion-header"><?php echo t('title_language') ?></div>
                        <div class="accordion-content">
                            <div>
                                <input type="radio" name="language" id="en" value="en" checked>
                                <label for="en">English</label>
                            </div>
                            <div>
                                <input type="radio" name="language" id="fr" value="fr">
                                <label for="fr">Français</label>
                            </div>
                            <button type="submit" class="save-btn"><?php echo t('save') ?></button>
                        </div>
                    </div>
                </form>

                <form action="../validations/update_colors_validation.php" method="POST">
                    <div class="accordion">
                        <div class="accordion-header"><?php echo t('title_color') ?></div>
                        <div class="accordion-content">
                            <div class="accordion-color">
                                <div>
                                    <input type="radio" name="colorOption" id="personalized" value="personalized" checked>
                                    <label for="personalized"><?php echo t('personalized') ?></label>
                                </div>
                                <div>
                                    <input type="radio" name="colorOption" id="default" value="default">
                                    <label for="default"><?php echo t('default') ?></label>
                                </div>
                            </div>

                            <div class="accordion-color">
                                <label for="mainColor"><?php echo t('main') ?></label>
                                <input type="color" id="mainColor" name="mainColor" value="<?php echo $_SESSION['userColors']['mainColor'] ?? '#960151'; ?>">
                            </div>

                            <div class="accordion-color">
                                <label for="subColor"><?php echo t('secondary') ?></label>
                                <input type="color" id="subColor" name="subColor" value="<?php echo $_SESSION['userColors']['subColor'] ?? '#FFEAFD'; ?>">
                            </div>

                            <button type="submit" class="save-btn"><?php echo t('save') ?></button>
                        </div>
                    </div>
                </form>

                <form action="../validations/update_profilIMG_validation.php" method="POST" enctype="multipart/form-data">
                    <div class="accordion">
                        <div class="accordion-header"><?php echo t('title_img') ?></div>
                        <div class="accordion-content">
                            <div class="file-upload-container">
                                <input type="file" name="profileImage" id="profileImage" accept="image/*">
                                <label for="profileImage" id="overlayButton"><?php echo t('img_button') ?></label>
                            </div>

                            <div class="toCenterContent">
                                <img id="imagePreview" src="#" alt="Image preview">
                            </div>


                            <button type="submit" class="save-btn"><?php echo t('save') ?></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        

        </main>

        <?php require_once(__DIR__ . '/' . $rootPath . 'Inclusions/footer.php'); ?>
    </body>
</html>