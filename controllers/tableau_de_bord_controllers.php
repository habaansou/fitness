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

$getHistoriques = \_classes\Historiques::getHistoriques();
$d = date('Y-d-m');
$getHistoriqueDay = \_classes\Historiques::getCountHistoriquesDay($d);

//$getDepenseDay = \_classes\Depenses::getCountDepenseDay($d);


//$getInscriptionDay = \_classes\Historiques::getCountHistoriquesDay($d);


//$getRinscriptionDay = \_classes\Historiques::getCountHistoriquesDay($d);



global $montantDepense;
$depense = \_classes\Depenses::getCountDepenses();
foreach ($depense as $get){
    $montantDepense=$get->montant;
}

global $montantPayementEmployer;
$montantPayement = \_classes\Paiements::getCountPayement();
foreach ($montantPayement as $get){
  $montantPayementEmployer=$get->montant;
}


global $montantEntreClient;
$entres = \_classes\Historiques::getCountHistoriques();
foreach ($entres as $get){
    $montantEntreClient=$get->montant;
}

if($montantPayementEmployer==null AND $montantDepense==null AND $montantEntreClient==null){
    $montantPayementEmployer=0;
    $montantDepense=0;
    $montantEntreClient=0;
    $montant = 0.0;
}else{
    $montant = $montantEntreClient-($montantPayementEmployer+$montantDepense);
}


$montantHistorique = \_classes\Historiques::getCountHistoriques();


$montantDepenses = \_classes\Depenses::getCountDepenses();

