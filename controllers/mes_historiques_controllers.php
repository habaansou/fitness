<?php


/**
 * Created by PhpStorm.
 * User: David Ansoumane HABA
 * Date: 21/01/20
 * Time: 17:00
 */
security();
$success = [];
$warnings = [];
$errors = [];
if(isset($_SESSION['fitness']['roleUsers']) AND !empty($_SESSION['fitness']['roleUsers']) AND $_SESSION['fitness']['roleUsers']=="Administrateur"){
    $getClient = \_classes\Historiques::getAllHistorique();
}else{
    $getClient = \_classes\Historiques::getAllHistoriqueByEmail($_SESSION['fitness']['emailUsers']);
}

