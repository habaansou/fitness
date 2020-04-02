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
if(isset($_POST) AND !empty($_POST)){
    extract($_POST);
    if(isset($matricule) AND empty($matricule)){
        array_push($warnings,"Veuillez saisir le matricule");
    }
    if(isset($nom) AND empty($nom)){
        array_push($warnings,"Veuillez saisir le nom");
    }
    if(isset($prenom) AND empty($prenom)){
        array_push($warnings,"Veuillez saisir le prénom");
    }
    if(isset($datenaissance) AND empty($datenaissance)){
        array_push($warnings,"Veuillez saisir la date de naissance");
    }
    if(isset($telephone) AND empty($telephone)){
        array_push($warnings,"Veuillez saisir le numéro de téléphone");
    }
    if(isset($cin) AND empty($cin)){
        array_push($warnings,"Veuillez saisir le numéro de la carte nationnal");
    }
    if(isset($lieu) AND empty($lieu)){
        array_push($warnings,"Veuillez saisir le lieu de naissance");
    }
    if(isset($email) AND empty($email)){
        array_push($warnings,"Veuillez saisir l'adresse e-mail");
    }
    if(isset($sport) AND empty($sport)){
        array_push($warnings,"Veuillez séléctionner le sport de son choix");
    }
    if(isset($frais) AND empty($frais)){
        array_push($warnings,"Veuillez saisir les frais d'inscription");
    }
    if(count($warnings)==0 AND count($errors)==0){
        try {
            \_classes\Clients::addClients($matricule,$nom,$prenom,$datenaissance,$telephone,$cin,$lieu,$email,$sport,$frais);
            \_classes\Matricules::addMatricule();
            \_classes\Inscriptions::addInscription($matricule,date('Y-m-d'),dateAddDay(date('Y-m-d'),'30'),'1','1',$frais,$sport);
            \_classes\Historiques::addhistoriques($matricule,date('Y-m-d'),dateAddDay(date('Y-m-d'),'30'),'1','1',$frais,$sport);
            array_push($success,"Client : {$prenom} {$nom} inscrit avec succès");
        }catch (PDOException $e){
            array_push($errors,"Erreur d'inscriton : {$prenom} {$nom}");
        }

    }

}
