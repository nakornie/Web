<?php
    $pageName = "Profil";
    $rootPath = "../../";
?>

<!DOCTYPE HTML>
<html lang="en">
    <?php require_once(__DIR__ . '/' . $rootPath . 'Inclusions/head.php'); ?>

    <body>
        <?php require_once(__DIR__ . '/' . $rootPath . 'Inclusions/header.php'); ?>

        <main>
        <div class="toCenterContent">
            <div>
                <form action="../validations/update_language_validation.php" method="POST">
                    <div class="accordion">
                        <div class="accordion-header">Language</div>
                        <div class="accordion-content">
                            <select name="language">
                                <option value="fr">French</option>
                                <option value="en">English</option>
                                <option value="de">German</option>
                            </select>
                            <button type="submit" class="save-btn">Save</button>
                        </div>
                    </div>
                </form>

                <form action="../validations/update_colors_validation.php" method="POST">
                    <div class="accordion">
                        <div class="accordion-header">Website Color</div>
                        <div class="accordion-content">
                            <div class="accordion-color">
                                <div>
                                    <input type="radio" name="colorOption" id="personalized" value="personalized" checked>
                                    <label for="personalized">Personalized colors</label>
                                </div>
                                <div>
                                    <input type="radio" name="colorOption" id="default" value="default">
                                    <label for="default">Default colors</label>
                                </div>
                            </div>

                            <div class="accordion-color">
                                <label for="mainColor">Main color : </label>
                                <input type="color" id="mainColor" name="mainColor" value="<?php echo $_SESSION['userColors']['mainColor'] ?? '#960151'; ?>">
                            </div>

                            <div class="accordion-color">
                                <label for="subColor">Secondary color : </label>
                                <input type="color" id="subColor" name="subColor" value="<?php echo $_SESSION['userColors']['subColor'] ?? '#FFEAFD'; ?>">
                            </div>

                            <button type="submit" class="save-btn">Save</button>
                        </div>
                    </div>
                </form>

                <form action="../validations/update_profilIMG_validation.php" method="POST" enctype="multipart/form-data">
                    <div class="accordion">
                        <div class="accordion-header">Profil Image</div>
                        <div class="accordion-content">
                            <input type="file" id="profileImage" accept="image/*">

                            <div class="toCenterContent">
                            <img id="imagePreview" src="#" alt="Image preview">
                            </div>
                            <button type="submit" class="save-btn">Save</button>
                        </div>
                    </div>
                    </div>
                </form>
        </div>

        

        </main>

        <?php require_once(__DIR__ . '/' . $rootPath . 'Inclusions/footer.php'); ?>
    </body>
</html>