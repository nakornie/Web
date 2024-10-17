<?php
    $pageName = "Home";
    // Pour PHP (inclure des fichiers)
    $fileRootPath = __DIR__ . '/';  // Chemin de fichiers, basé sur le dossier actuel
    // Pour les URLs HTML (liens)
    $rootPath = '/webgames/';  // Chemin relatif pour les liens HTML
?>

<!DOCTYPE html>
<html lang="fr">
    <?php require_once($fileRootPath . 'Inclusions/head.php'); ?>

    <body>
        <?php require_once($fileRootPath . 'Inclusions/header.php'); ?>

        <main>
            <h1 id="jeux_solo">Jeux Solo</h1>
            <div class="icones_row">
                <a href="Games/AzerType/azertype.php">
                    <img src="Images/azerType.png" alt="AzerType" title="Solo, Mots" class="icone">
                </a>
                <a href="Games/Demineur/demineur.php">
                    <img src="Images/demineur.png" alt ="Démineur" title="Solo, Réflexion" class="icone">
                </a>
            </div>

            <h1 id="jeux_multijoueurs">Jeux Multijoueurs</h1>
            <div class="icones_row">
                <a href="Games/Morpion/morpion.php">
                    <img src="Images/morpion.jpeg" alt="Morpion" title="Multijoueur, Réflexion" class="icone">
                </a>
            </div>

            <h1 id="jeux_de_mots">Jeux de Mots</h1>
            <div class="icones_row">
                <a href="Games/AzerType/azertype.php">
                    <img src="Images/azerType.png" alt="AzerType" title="Solo, Mots" class="icone">
                </a>
            </div>

            <h1 id="jeux_de_reflexion">Jeux de Réflexion</h1>
            <div class="icones_row">
                <a href="Games/Morpion/morpion.php">
                    <img src="Images/morpion.jpeg" alt="Morpion" title="Multijoueur, Réflexion" class="icone">
                </a>
                <a href="Games/Demineur/demineur.php">
                    <img src="Images/demineur.png" alt ="Démineur" title="Solo, Réflexion" class="icone">
                </a>
                <a href="Games/Morpion/morpion.php">
                    <img src="Images/morpion.jpeg" alt="Morpion" title="Multijoueur, Réflexion" class="icone">
                </a>
                <a href="Games/Demineur/demineur.php">
                    <img src="Images/demineur.png" alt ="Démineur" title="Solo, Réflexion" class="icone">
                </a>
                <a href="Games/Morpion/morpion.php">
                    <img src="Images/morpion.jpeg" alt="Morpion" title="Multijoueur, Réflexion" class="icone">
                </a>
                <a href="Games/Demineur/demineur.php">
                    <img src="Images/demineur.png" alt ="Démineur" title="Solo, Réflexion" class="icone">
                </a>
            </div>
        </main>

        <?php require_once($fileRootPath . 'Inclusions/footer.php'); ?>
    </body>
</html>