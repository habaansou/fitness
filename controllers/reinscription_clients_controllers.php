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
}


if(isset($_POST) AND !empty($_POST) AND $_POST['Enregistrer']=="Enregistrer"){
    extract($_POST);
    $getRecherche = \_classes\Clients::getByMatricule($matricule);
    if(isset($matricule) AND empty($matricule)){
        array_push($warnings,"Veuillez saisir le matricule");
    }
    if(isset($sport) AND empty($sport)){
        array_push($warnings,"Veuillez selectionner le sport");
    }
    if(isset($frais) AND empty($frais)){
        array_push($warnings,"Veuillez saisir les frais");
    }
    if(isset($prenomClients) AND empty($nomClients)){
        array_push($warnings,"Veuillez saisir le matricule");
    }
    if(count($warnings)==0 AND count($errors)==0){
        \_classes\Inscriptions::editInscription(date('Y-m-d'),dateAddDay(date('Y-m-d'),'30'),'1','2',$frais,$sport,$matricule);
        \_classes\Historiques::addhistoriques($matricule,date('Y-m-d'),dateAddDay(date('Y-m-d'),'30'),'1','2',$frais,$sport);
        array_push($success,"Réinscription :{$prenomClients} {$nomClients} éfféctuée avec succès");
    }


}
