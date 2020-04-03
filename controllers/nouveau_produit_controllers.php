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
    if(isset($reference) AND empty($reference)){
        array_push($warnings,"Veuillez saisir la référence");
    }
    if(isset($intitule) AND empty($intitule)){
        array_push($warnings,"Veuillez saisir l'intitule");
    }
    if(isset($etat) AND empty($etat)){
        array_push($warnings,"Veuillez séléctionner l'état");
    }
    if(isset($idcategorie) AND empty($idcategorie)){
        array_push($warnings,"Veuillez séléctionnez la catégorie");
    }
    if(isset($datearrive) AND empty($datearrive)){
        array_push($warnings,"Veuillez séléctionner la date d'arrivée");
    }
    if(isset($prix) AND empty($prix)){
        array_push($warnings,"Veuillez saisir le prix");
    }
    if(isset($description) AND empty($description)){
        array_push($warnings,"Veuillez saisir la description");
    }
    if(isset($_FILES) AND !empty($_FILES)){
        extract($_FILES);
        //---------------------------------------------------
        $AvatarName1        = $_FILES['photo1']['name'];
        $AvatarSize1        = $_FILES['photo1']['size'];
        $AvatarError1       = $_FILES['photo1']['error'];
        $AvatarTmp1         = $_FILES['photo1']['tmp_name'];
        $AvatarExe1         = pathinfo($AvatarName1, PATHINFO_EXTENSION);

        $allow                  = ['jpg', 'png', 'gif', 'bmp', 'jpeg','JPG', 'PNG', 'GIF', 'BMP', 'JPEG'];


        if (empty($AvatarName1)) {
            array_push($errors, 'Veillez sélectionner la photo une photo.');
        }elseif($AvatarSize1 > 5266515){
            array_push($errors,'Ce fichier est trop lourd');
        }elseif(!in_array($AvatarExe1,$allow)){
            array_push($errors,'Ce fichier n\'est une image');
        }
        $uniqAvatarName1 = uniqid().$AvatarName1;
        move_uploaded_file($AvatarTmp1,'assets/img/products/'.$uniqAvatarName1);
        //--------------------------------------------------------

        //---------------------------------------------------
        $AvatarName2        = $_FILES['photo2']['name'];
        $AvatarSize2        = $_FILES['photo2']['size'];
        $AvatarError2       = $_FILES['photo2']['error'];
        $AvatarTmp2         = $_FILES['photo2']['tmp_name'];
        $AvatarExe2         = pathinfo($AvatarName2, PATHINFO_EXTENSION);

        $allow                  = ['jpg', 'png', 'gif', 'bmp', 'jpeg','JPG', 'PNG', 'GIF', 'BMP', 'JPEG'];


        if (empty($AvatarName2)) {
            array_push($errors, 'Veillez sélectionner la photo une photo.');
        }elseif($AvatarSize2 > 5266515){
            array_push($errors,'Ce fichier est trop lourd');
        }elseif(!in_array($AvatarExe2,$allow)){
            array_push($errors,'Ce fichier n\'est une image');
        }
        $uniqAvatarName2 = uniqid().$AvatarName2;
        move_uploaded_file($AvatarTmp2,'assets/img/products/'.$uniqAvatarName2);
        //--------------------------------------------------------
        //---------------------------------------------------
        $AvatarName3        = $_FILES['photo3']['name'];
        $AvatarSize3        = $_FILES['photo3']['size'];
        $AvatarError3       = $_FILES['photo3']['error'];
        $AvatarTmp3         = $_FILES['photo3']['tmp_name'];
        $AvatarExe3         = pathinfo($AvatarName3, PATHINFO_EXTENSION);

        $allow                  = ['jpg', 'png', 'gif', 'bmp', 'jpeg','JPG', 'PNG', 'GIF', 'BMP', 'JPEG'];


        if (empty($AvatarName3)) {
            array_push($errors, 'Veillez sélectionner la photo une photo.');
        }elseif($AvatarSize3 > 5266515){
            array_push($errors,'Ce fichier est trop lourd');
        }elseif(!in_array($AvatarExe3,$allow)){
            array_push($errors,'Ce fichier n\'est une image');
        }
        $uniqAvatarName3 = uniqid().$AvatarName3;
        move_uploaded_file($AvatarTmp3,'assets/img/products/'.$uniqAvatarName3);
        //--------------------------------------------------------
    }
    if(\_classes\Produits::verifyProduit($reference)=='0'){
        array_push($errors,"Erreur : {$reference} existe déjà");
    }
    if(count($warnings)==0 AND count($errors)==0){
        \_classes\Produits::addProduits($reference,$intitule,$etat,$uniqAvatarName1,$uniqAvatarName2,$uniqAvatarName3,$idcategorie,$datearrive,$prix,$description);
        array_push($success,"Produit {$intitule} enregistré avec succès");
    }

}
$getCategories = \_classes\Categories::getAllCategories();
