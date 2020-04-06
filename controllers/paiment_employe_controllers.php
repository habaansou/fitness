<?php
/**
 * Created by PhpStorm.
 * User: David Ansoumane HABA
 * Date: 21/01/20
 * Time: 17:00
 */
//security();
$success = [];
$warnings = [];
$errors = [];
if(isset($_POST) AND !empty($_POST)){
    extract($_POST);
    if(isset($matricule) AND empty($matricule)){
        array_push($warnings,"Veuillez séléctionner le matricule d'un employé");
    }
    if(isset($date) AND empty($date)){
        array_push($warnings,"Veuillez séléctionner la date de payement");
    }
    if(isset($nom) AND empty($nom)){
        array_push($warnings,"Veuillez séléctionner le matricule d'un employé");
    }
    if(isset($prenom) AND empty($prenom)){
        array_push($warnings,"Veuillez séléctionner le matricule d'un employé");
    }
    if(isset($salaire) AND empty($salaire)){
        array_push($warnings,"Veuillez séléctionner le matricule d'un employé");
    }
    if(isset($fonction) AND empty($fonction)){
        array_push($warnings,"Veuillez séléctionner le matricule d'un employé");
    }
    if(count($warnings)==0 AND count($errors)==0){
        setlocale(LC_TIME,'fr');
        //echo strftime('%B'),strftime('%Y');
        //echo substr($salaire, -3);
        $dateConvert = date_format(date_create($date),'Y-m-d');
        $mois = strftime('%B');
        $annee = strftime('%Y');
        \_classes\Paiements::addPaiements($matricule,$salaire,$date,$mois,$annee);
        array_push($success,"Paiement de : {$prenom} {$nom} éfféctué avec succès");
    }


}
