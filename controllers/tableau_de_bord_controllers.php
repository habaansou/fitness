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

 if(isset($_POST) AND !empty($_POST) AND $_POST['Valider']=="Valider"){
     extract($_POST);
     debug($_POST);
 }


