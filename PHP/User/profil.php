<?php
    $pageName = "Profil";
    $rootPath = "../";

    require_once(__DIR__ . '/validations/controller.php');
?>

<!DOCTYPE HTML>
<html lang="fr">
    <?php require_once(__DIR__ . '/' . $rootPath . 'Inclusions/head.php'); ?>

    <body>
        <?php require_once(__DIR__ . '/' . $rootPath . 'Inclusions/header.php'); ?>

        <main>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="submitProfilIMG">
                    <label for="screenshot">Profil Image</label>
                    <input type="file" id="profilIMG" name="profilIMG" />
                </div>
                <button type="submit" class="btn btn-primary">Validate</button>
            </form>
        </main>

        <?php require_once(__DIR__ . '/' . $rootPath . 'Inclusions/footer.php'); ?>
    </body>
</html>