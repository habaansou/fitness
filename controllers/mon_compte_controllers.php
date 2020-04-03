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
if(isset($_POST) AND !empty($_POST) AND $_POST['Valider']=="Valider"){
    extract($_POST);
    if(isset($pseudo) AND empty($pseudo)){
        array_push($warnings,"Veuillez vous reconnecter");
    }
    if(isset($nom) AND empty($nom)){
        array_push($warnings,"Veuillez saisir le nom");
    }
    if(isset($prenom) AND empty($prenom)){
        array_push($warnings,"Veuillez saisir le prenom");
    }
    if(isset($adresse) AND empty($adresse)){
        array_push($warnings,"Veuillez saisir l'adresse");
    }
    if(isset($password1) AND empty($password1)){
        array_push($warnings,"Veuillez saisir le premier mot de passe");
    }
    if(isset($password2) AND empty($password2)){
        array_push($warnings,"Veuillez saisir le second mot de passe");
    }
    if(isset($password2) AND !empty($password2)  AND $password2!=$password1){
        array_push($errors,"Les deux mot de passe ne sont pas identique");

    }
    if(count($warnings)==0 AND count($errors)==0){

        array_push($success,"Information de : {$prenom} {$nom} modifiée avec succès");
    }


}


$getProfile = \_classes\Personnels::getUsersByEmail($_SESSION['fitness']['emailUsers']);
