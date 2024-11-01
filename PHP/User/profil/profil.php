<?php
    $pageName = "Profil";
    $rootPath = "../../";

    require_once(__DIR__ . '/../validations/controller.php');
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
                                <label for="mainColor">Main color : </label><input type="color" name="mainColor" value="#960151"><br>
                            </div>
                            <div class="accordion-color">
                                <label for="subColor">Secondary color : </label><input type="color" name="subColor" value="#FFEAFD">
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