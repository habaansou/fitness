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
if(isset($_POST) AND !empty($_POST) AND $_POST['Envoyer']=="Envoyer") {
    extract($_POST);
    if(isset($reference) AND empty($reference)){
        array_push($warnings,"Veuillez saisir la référence");
    }
    if(isset($intitule) AND empty($intitule)){
        array_push($warnings,"Veuillez saisir le libélle");
    }
    if(isset($date) AND empty($date)){
        array_push($warnings,"Veuillez séléctionner la date");
    }
    if(isset($montant) AND empty($montant)){
        array_push($warnings,"Veuillez saisir le montant");
    }
    if(isset($part) AND empty($part)){
        array_push($warnings,"Veuillez saisir le nom de la personne qui a effectué la transaction");
    }
    if(isset($description) AND empty($description)){
        array_push($warnings,"Veuillez saisir la description");
    }
    if(count($warnings)==0 AND count($errors)==0){
        \_classes\Depenses::addDepenses($intitule,$date,$description,$montant,$_SESSION['fitness']['emailUsers'],$part,$reference);
        array_push($success,"Dépense : {$intitule} enregistrée avec succès");
    }
}
