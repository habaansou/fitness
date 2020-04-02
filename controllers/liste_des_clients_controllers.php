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
if(isset($_GET) AND !empty($_GET)){
    extract($_GET);
    if(isset($id) AND !empty($id)){
        try {
            \_classes\Clients::deleteClient($id);
            array_push($success,"Suppression éffectuée avec succès");
        }catch (PDOException $e){
            array_push($warnings,"Erreur de suppression");
        }
    }
}
$getClient = \_classes\Clients::getAllClients();

