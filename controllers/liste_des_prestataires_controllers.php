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
    \_classes\Fournisseurs::deletePrestatairesById($id);
        array_push($success,"Préstataire supprimé avec succès");
}
$getAllPrestataires = \_classes\Fournisseurs::getAllPrestataires();
