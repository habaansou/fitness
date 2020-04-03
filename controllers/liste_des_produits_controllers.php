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
    if(isset($id) AND !empty($id)){
        \_classes\Produits::deleteProduit($id);
        array_push($success,"Suppression éfféctuée avec succès");
    }
}
$getProduits = \_classes\Produits::getAllProduits();