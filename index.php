<?php
require_once 'libs/loader.php';

$router = new Router();

$json_routerList = file_get_contents('libs/routerlist.json');
$routerList = json_decode($json_routerList,true);

$IDlink =  $router->Controller();
if($router->Action() != ''){
    $IDlink .= "/".$router->Action();
}
if(!$routerList[$IDlink]){
    header('location:http://'.PTR_LINK.'/404.php?history='.$IDlink.'&answer=Page-doesent-exist');
}else{
    include_once $routerList[$IDlink];
}



