<?php
    require_once 'libs/Router.php';

    define('DB_HOST','localhost');
    define('DB_USER','root');
    define('DB_PASS','a');
    define('DB_SCHEMA','ultradevdb');

    define('PTR_LINK',$_SERVER['SERVER_NAME']);
    define('DEVMODE',true);

    if(DEVMODE != true){
        ini_set('display_errors', 0 );
        error_reporting(0);
    }
