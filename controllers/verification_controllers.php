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
if(isset($_POST) AND !empty($_POST) AND $_POST['Recherche']=="Recherche"){
    extract($_POST);
        $getRecherche = \_classes\Clients::getByMatricule($matricule);
        $getInfoUsers = \_classes\Verifications::verifyClient($matricule);
        array_push($success,"Chargement des données du client en cours ...");
}