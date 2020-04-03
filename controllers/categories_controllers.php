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
    \_classes\Categories::deleteCategories($id);
    array_push($success,"Catégorie supprimée avec succès");
}

if(isset($_POST) AND !empty($_POST) AND $_POST['Envoyer']=="Envoyer"){
    extract($_POST);
    if(isset($libelle) AND empty($libelle)){
        array_push($warnings,"Veuillez saisir le libélle");
    }
    if(\_classes\Categories::verifyCategories($libelle)==1){
        array_push($errors,"Erreur : {$libelle} existe déjà");
    }
    if(count($warnings)==0 AND count($errors)==0){
        \_classes\Categories::addCategories($libelle);
        array_push($success,"Catégorie : {$libelle} ajouter avec succès");
    }

}

$getAllCategories = \_classes\Categories::getAllCategories();