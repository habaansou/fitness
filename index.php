<?php
/**
 * Created by PhpStorm.
 * User: David Ansoumane HABA
 * Date: 31/03/2019
 * Time: 22:40
 */
header("Content-Type: text/html; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
require_once ('_config/config.php');
require_once ('_functions/fonctions.php');
require_once ('_config/db.php');
require_once ('_classes/Autoload.php');


\_classes\Autoload::resister();

$token = hashpassword("fitness");

if(isset($_GET['page']) AND !empty($_GET['page'])){
    $page=strtolower(trim(htmlspecialchars($_GET['page'])));
}else{
    $page="connexion";
}


$allPages=scandir("controllers/");
if(in_array($page.'_controllers.php',$allPages)){
    require_once ('controllers/'.$page.'_controllers.php');
    require_once ('models/'.$page.'_models.php');
    require_once ('views/'.$page.'_views.php');
}else{
    $page='erreur';
    require_once ('views/'.$page.'_views.php');
}
