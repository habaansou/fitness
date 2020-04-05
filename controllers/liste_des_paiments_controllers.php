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
    try {
        \_classes\Paiements::deletePaiment($id);
        array_push($success,"Suppression éffectuée avec succès");
    }catch (PDOException $e){
        array_push($warnings,"Erreur de suppression");
    }
}
$getPaiements = \_classes\Paiements::getAllPaiments();
