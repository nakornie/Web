<?php
$typePage = isset($pageName) && $pageName === 'Home' 
            ? 'Home' 
            : ((strpos($pageName, 'Connexion') !== false || strpos($pageName, 'Profil') !== false) 
                ? 'Login' 
                : 'Game');
?>

<header>
    <?php if ($typePage === 'Home') : ?>
        <h1>Bienvenue !</h1>
        <h2>Choisissez un jeu, et amusez vous !</h2>
    <?php endif; ?>
    
    <?php if ($typePage != 'Home') : ?>
        <h1><?php echo isset($pageName) ? $pageName : 'Jeu X'; ?></h1>
    <?php endif; ?>

    <nav>
        <ul>
            <?php if ($typePage != 'Home') : ?>
                <li><a href="<?php echo $rootPath; ?>index.php">Accueil</a></li>
            <?php endif; ?>

            <?php if ($typePage === 'Game') : ?>
                <li><a href="#règles">Règles</a></li>
            <?php endif; ?>

            <?php if ($typePage != 'Login') : ?>
                <li><a href="<?php echo $rootPath; ?>/User/connexion.php">Connexion</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</header>
