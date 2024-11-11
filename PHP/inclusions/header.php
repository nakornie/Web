<?php
$typePage = isset($pageName) && $pageName === 'Home' 
            ? 'Home' 
            : ((strpos($pageName, 'Login') !== false || strpos($pageName, 'Profil') !== false) 
                ? 'Login' 
                : 'Game');

if (!isset($_SESSION['userLogged'])) {$_SESSION['userLogged'] = false;}
?>

<?php require_once(__DIR__ . '/../Globals/config.php'); ?>

<header>
    <?php if ($typePage === 'Home' && !$_SESSION['userLogged']) : ?>
        <h1><?php echo t('welcome') ?></h1>
        <h2><?php echo t('home_title') ?></h2>
    <?php endif; ?>
    
    <?php if ($typePage != 'Home') : ?>
        <h1><?php echo isset($pageName) ? $pageName : 'Game X'; ?></h1>
    <?php endif; ?>

    <?php
    if (isset($_SESSION['userImage'])) :
        $imagePath = $rootPath . '/User/profilImages/' . $_SESSION['userImage'] . '?' . time();
        echo '<div class="toCenterContent"><div class="profil-image-container"><img src="' . $imagePath . '" alt="' . $_SESSION['userImage'] . '" class="profil-image"></div></div>';
     endif; 
    ?>

    <?php 
    if ($_SESSION['userLogged']) :
        echo '<h1> '. $_SESSION['userName'] .'</h1>';
    endif;    
    ?>

    <nav>
        <ul>
            <?php if ($typePage != 'Home') : ?>
                <li><a href="<?php echo $rootPath; ?>/index.php"><?php echo t('home') ?></a></li>
            <?php endif; ?>

            <?php if ($typePage === 'Game') : ?>
                <li><a href="#rules"><?php echo t('rules') ?></a></li>
            <?php endif; ?>

            <?php 
            if ($_SESSION['userLogged'] && $pageName != "Profil") :
                echo '<li><a href="' . $rootPath . '/User/profil/profil.php">' . t('profile') . '</a></li>';
            endif; 
            ?>

            <?php 
            if ($pageName != 'Login') {
                if (!$_SESSION['userLogged']){
                    echo '<li><a href="' . $rootPath . '/User/login/login.php">' . t('login') . '</a></li>';
                } else {
                    if ($pageName === 'Profil') {
                        $_SESSION['redirectAfterLogout'] = $rootPath . '/index.php';
                    } else {
                        $_SESSION['redirectAfterLogout'] = $_SERVER['REQUEST_URI'];
                    }
                    echo '<li><a href="' . $rootPath . '/Globals/logout.php">' . t('logout') . '</a></li>';
                }
            }
            ?>
        </ul>
    </nav>
</header>
