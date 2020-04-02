<?php
/**
 * Created by PhpStorm.
 * User: David Ansoumane HABA
 * Date: 01/04/2019
 * Time: 01:26
 */
    try {
        $db = new PDO('mysql:host='.DATABASE_HOST.';port='.DATABASE_PORT.';dbname='.DATABASE_NAME.';charset='.DATABASE_CHARSET,DATABASE_USER,DATABASE_PASSWORD);
    }catch (Exception $e){
            die("Erreur de connexion a la DB :".$e->getMessage());
    }

