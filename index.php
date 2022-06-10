<?php
spl_autoload_register(function ($className) {
    require './classes/' . $className . '.php';
});

require_once './functions/autoLoadFunction.php';



date_default_timezone_set('Europe/Paris');


require_once './includes/head.php';
require_once './includes/main.php';
require_once './includes/footer.php';
