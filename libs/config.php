<?php
    require_once 'libs/Router.php';

    define('DB_HOST','localhost');
    define('DB_USER','root');
    define('DB_PASS','root');
    define('DB_SCHEMA','');

    define('PTR_LINK',$_SERVER['SERVER_NAME']);
    define('DEVMODE',true);

    if(DEVMODE != true){
        ini_set('display_errors', 0 );
        error_reporting(0);
    }
