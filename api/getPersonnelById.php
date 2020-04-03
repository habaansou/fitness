<?php
header('Content-Type: text/html; charset=UTF-8');
require_once ('../_config/config.php');
require_once ('../_functions/fonctions.php');
require_once ('../_config/db.php');
require_once ('../_classes/Personnels.php');
    if(isset($_GET) AND !empty($_GET)){
        extract($_GET);
        $getPersonnelById = \_classes\Personnels::getAllPersonnelsById($id);
        echo json_encode($getPersonnelById);
    }
?>