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




