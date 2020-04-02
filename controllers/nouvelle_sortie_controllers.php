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
    if(isset($date) AND empty($date)){
        array_push($warnings,"Veuillez selectionner la date");
    }
    if(isset($typeoperation) AND empty($typeoperation)){
        array_push($warnings,"Veuillez selectionner le type d\'opération");
    }
    if(isset($montant) AND empty($montant)){
        array_push($warnings,"Veuillez saisir le montant");
    }
    if(isset($recepetion) AND empty($recepetion)){
        array_push($warnings,"Veuillez saisir le nom du récéptionniste");
    }
    if(isset($etat) AND empty($etat)){
        array_push($warnings,"Veuillez séléctionner l\'etat");
    }
    if(isset($reference) AND empty($reference)){
        array_push($warnings,"Veuillez saisir la référence");
    }
    if(isset($source) AND empty($source)){
        array_push($warnings,"Veuillez saisir la source");
    }
    if(isset($typedepaiement) AND empty($typedepaiement)){
        array_push($warnings,"Veuillez séléctionner le type paiement");
    }
    if(isset($description) AND empty($description)){
        array_push($warnings,"Veuillez saisir la description");
    }
    if(isset($_FILES) AND !empty($_FILES) AND !empty($_FILES['piece']['name'])){
        extract($_FILES);
        $guitratelFileName        = $_FILES['piece']['name'];
        $guitratelFileSize        = $_FILES['piece']['size'];
        $guitratelFileError       = $_FILES['piece']['error'];
        $guitratelFileTmp         = $_FILES['piece']['tmp_name'];
        $guitratelFileExe         = pathinfo($guitratelFileName, PATHINFO_EXTENSION);

        $allow                  = ['jpg', 'png', 'gif', 'bmp', 'jpeg','JPG', 'PNG', 'GIF', 'BMP', 'JPEG'];


        if(empty($guitratelFileName)) {
            array_push($errors, 'Veillez sélectionner la pièce.');
        }elseif($guitratelFileSize > 5266515){
            array_push($errors,'Cet pièce est trop lourde');
        }elseif(!in_array($guitratelFileExe,$allow)){
            array_push($errors,'Cet pièce n\'est pas autorisée');
        }
        $piece = uniqid().$guitratelFileName;
    }else{
        $piece="";
    }
    if(\_classes\Mouvements::verifyMouvementsReference($reference)==1){
        array_push($errors,'Cette référence a déjà été ajoutée');
    }
    if(count($warnings)==0 AND count($errors)==0){
        \_classes\Mouvements::sortieMouvements($date,$typeoperation,$montant,$recepetion,$piece,$reference,$description,$typedepaiement,$source,$_SESSION['guitratel']['emailUsers']);
        array_push($success,"Nouvelle Sortié enregistrée avec succès");
    }

}

