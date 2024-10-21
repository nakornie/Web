<?php
$typePage = isset($pageName) && $pageName === 'Home' 
            ? 'Home' 
            : ((strpos($pageName, 'Login') !== false || strpos($pageName, 'Profil') !== false) 
                ? 'Login' 
                : 'Game');
?>

<header>
    <?php if ($typePage === 'Home') : ?>
        <h1>Welcome !</h1>
        <h2>Chose a game and have fun !</h2>
    <?php endif; ?>
    
    <?php if ($typePage != 'Home') : ?>
        <h1><?php echo isset($pageName) ? $pageName : 'Game X'; ?></h1>
    <?php endif; ?>

    <nav>
        <ul>
            <?php if ($typePage != 'Home') : ?>
                <li><a href="<?php echo $rootPath; ?>/index.php">Home</a></li>
            <?php endif; ?>

            <?php if ($typePage === 'Game') : ?>
                <li><a href="#rules">Rules</a></li>
            <?php endif; ?>

            <?php if ($typePage != 'Login') : ?>
                <li><a href="<?php echo $rootPath; ?>/User/login.php">Login</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</header>
