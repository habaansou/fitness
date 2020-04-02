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
    $get = \_classes\Professions::deleteProfession($id);
    array_push($success,"Profession supprimer avec succès");
}
if(isset($_POST) AND !empty($_POST) AND $_POST['Valider']=="Valider"){
    extract($_POST);
    if(isset($profession) AND empty($profession)){
        array_push($warnings,"Veuillez saisir le nom de la profession");
    }
    if(\_classes\Professions::verifyProfession($profession)==1){
        array_push($warnings,"Profession : {$profession} existe déjà");
    }
    if(count($warnings)==0 AND count($errors)==0){
        \_classes\Professions::addProfession($profession);
        array_push($success,"Profession : {$profession} ajouter avec succès");
    }

}
$getAllProfessions = \_classes\Professions::getAllProfession();
