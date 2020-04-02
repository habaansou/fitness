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
    if(isset($intitule) AND empty($intitule)) {
        array_push($warnings,"Veuillez saisir l'intitule");
    }
    if(isset($adresse) AND empty($adresse)) {
        array_push($warnings,"Veuillez saisir l'adresse");
    }
    if(isset($telephone) AND empty($telephone)) {
        array_push($warnings,"Veuillez saisir le numéro de téléphone");
    }
    if(isset($type) AND empty($type)) {
        array_push($warnings,"Veuillez séléctionner le type de prestataire/client");
    }
    if(isset($site) AND empty($site)) {
        array_push($warnings,"Veuillez saisir le lien du site");
    }
    if(isset($email) AND empty($email)) {
        array_push($warnings,"Veuillez saisir l'adresse e-mail'");
    }
    if(\_classes\Fournisseurs::getPrestatairesByName($intitule,$type)==1){
        array_push($errors,"Cet Intitule :{$intitule}  a déjà été utiliseé");
    }
    if(count($warnings)==0 AND count($errors)==0){
        \_classes\Fournisseurs::addPrestataires($intitule,$adresse,$telephone,$type,$site,$email);
        array_push($success,'Nouveau Prestataire enregistré avec succès');
    }



}
