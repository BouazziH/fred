<?php
//pour demarer une session
session_start(); 
//ajout de la fonction autoload de vendor
require './vendor/autoload.php';
//pour tester  la fonction dump de symfony
dump($_SESSION);
spl_autoload_register(function($className) {
    require './classes/' . $className . '.php';
});

date_default_timezone_set('Europe/Paris');

require_once './functions/autoLoadFunction.php';

require_once './includes/head.php';
require_once './includes/main.php';
require_once './includes/footer.php';
//pour incrementer la seesion achaque fois qu'on actualise 
/* $_SESSION['count'] = ($_SESSION['count'] ?? 0) + 1;
print_r($_SESSION); */