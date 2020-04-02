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
if(isset($_GET) AND !empty($_GET) AND $_GET['id']>0){
    extract($_GET);
    $get = \_classes\Fonctions::deleteFonction($id);
    array_push($success,"Fonction supprimer avec succès");
}

if(isset($_POST) AND !empty($_POST) AND $_POST['Valider']=="Valider"){
    extract($_POST);
    if(isset($fonction) AND empty($fonction)){
        array_push($warnings,"Veuillez saisir le nom de la fonction");
    }
    if(\_classes\Fonctions::verifyFonction($fonction)==1){
        array_push($warnings,"Fonction : {$fonction} existe déjà");
    }
    if(count($warnings)==0 AND count($errors)==0){
        \_classes\Fonctions::addFonction($fonction);
        array_push($success,"Fonction : {$fonction} ajouter avec succès");
    }

}
$getAllFonctins = \_classes\Fonctions::getAllFonction();
