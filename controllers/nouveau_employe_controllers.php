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
    if (isset($prenom) AND empty($prenom)) {
        array_push($warnings, 'Veuillez saisir le prenom');
    }
    if (isset($nom) AND empty($nom)) {
        array_push($warnings, 'Veuillez saisir le nom');
    }
    if (isset($etat) AND empty($etat)) {
        array_push($warnings, 'Veuillez selectionner l\'etat');
    }
    if (isset($identifient) AND empty($identifient)) {
        array_push($warnings, 'Veuillez saisir un identifient');
    }
    if (isset($idfonction) AND empty($idfonction)) {
        array_push($warnings, 'Veuillez séléctionner la fonction');
    }
    if (isset($idprofession) AND empty($idprofession)) {
        array_push($warnings, 'Veuillez séléctionner la profession');
    }
    if (isset($sexe) AND empty($sexe)) {
        array_push($warnings, 'Veuillez séléctionner le sexe');
    }
    if (isset($typecontrat) AND empty($typecontrat)) {
        array_push($warnings, 'Veuillez séléctionner le type de contrat');
    }
    if (isset($dateembauche) AND empty($dateembauche)) {
        array_push($warnings, 'Veuillez séléctionner la date d\'embauche');
    }
    if (isset($role) AND empty($role)) {
        array_push($warnings, 'Veuillez séléctionner le role');
    }
    if (isset($adresse) AND empty($adresse)) {
        array_push($warnings, 'Veuillez saisir l\'adresse');
    }
    if (isset($salaire) AND empty($salaire)) {
        array_push($warnings, 'Veuillez saisir le salaire de basse');
    }
    if (isset($email) AND empty($email)) {
        array_push($warnings, 'Veuillez saisir l\'email');
    }
    if(isset($_FILES) AND !empty($_FILES)) {
        extract($_FILES);
        $AvatarName        = $_FILES['photo']['name'];
        $AvatarSize        = $_FILES['photo']['size'];
        $AvatarError       = $_FILES['photo']['error'];
        $AvatarTmp         = $_FILES['photo']['tmp_name'];
        $AvatarExe         = pathinfo($AvatarName, PATHINFO_EXTENSION);

        $allow                  = ['jpg', 'png', 'gif', 'bmp', 'jpeg','JPG', 'PNG', 'GIF', 'BMP', 'JPEG'];


        if (empty($AvatarName)) {
            array_push($errors, 'Veillez sélectionner la photo une photo.');
        }elseif($AvatarSize > 5266515){
            array_push($errors,'Ce fichier est trop lourd');
        }elseif(!in_array($AvatarExe,$allow)){
            array_push($errors,'Ce fichier n\'est une image');
        }
        $uniqAvatarName = uniqid().$AvatarName;
        move_uploaded_file($AvatarTmp,'assets/img/users/'.$uniqAvatarName);
    }
    if(\_classes\Users::verifyUsers($email,$identifient)==1){
        array_push($errors,"Erreur : {$identifient}/{$email} cet identifient est déjà utilisé");
    }

    if(\_classes\Personnels::verifyPersonne($email)==1){
        array_push($errors,"Erreur : {$email} cet identifient est déjà utilisé");
    }
    if (count($warnings)==0 AND count($errors)==0) {
       \_classes\Personnels::addPersonnel($nom,$prenom,$sexe,$identifient,$uniqAvatarName,$adresse,$idfonction,$idprofession,$typecontrat,$dateembauche,$salaire,$email);
       \_classes\Users::addUSers($identifient,$email,hashpassword(PASSWORD),$role,$etat);
        array_push($success,"Personnel : {$prenom} {$nom} employé");
    }
}
$getAllFonctions = \_classes\Fonctions::getAllFonction();
$getAllProfessions = \_classes\Professions::getAllProfession();