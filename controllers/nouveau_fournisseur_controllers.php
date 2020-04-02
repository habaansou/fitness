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
if(isset($_POST) AND !empty($_POST) AND $_POST['Envoyer']=="Envoyer"){
    extract($_POST);
    if(isset($matricule) AND empty($matricule)){
        array_push($warnings,"Veuillez saisir le numéro matricule");
    }
    if(isset($intitule) AND empty($intitule)){
        array_push($warnings,"Veuillez saisir l'intitule");
    }
    if(isset($adresse) AND empty($adresse)){
        array_push($warnings,"Veuillez saisir l'adresse email");
    }
    if(isset($type) AND empty($type)){
        array_push($warnings,"Veuillez séléctionner le type");
    }
    if(isset($telephone) AND empty($telephone)){
        array_push($warnings,"Veuillez saisir le numéro de téléphone");
    }
    if(isset($email) AND empty($email)){
        array_push($warnings,"Veuillez saisir l'adresse email");
    }

    if(count($warnings)==0 AND count($errors)==0){
        \_classes\Fournisseurs::addFournisseurs($intitule,$matricule,$type,$telephone,$adresse,$email);
        \_classes\Matricules::addMatricule();
        array_push($success,"Nouveau : {$type} {$intitule} enregistre avec succès");
    }

}

