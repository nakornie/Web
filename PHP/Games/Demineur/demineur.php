<?php 
    $pageName = "Démineur";
    $rootPath = "../../";
?>

<!DOCTYPE html>
<html lang="fr">
    <?php require_once(__DIR__ . '/' . $rootPath . 'Inclusions/head.php'); ?>

    <body>
    <?php require_once(__DIR__ . '/' . $rootPath . 'Inclusions/header.php'); ?>
        
        <main>
            <img src="../../Images/demineur.png" alt="Démineur" title="Bientôt utilisable" class="remplacement">
            <h1 id="règles" class="banniere">Règles du jeu</h1>
            <h2 class="banniere">But du jeu</h2>
            <h2 class="banniere">Déroulement du jeu</h2>
        </main>

        <?php require_once(__DIR__ .  '/' . $rootPath . 'Inclusions/footer.php'); ?>
    </body>
</html>