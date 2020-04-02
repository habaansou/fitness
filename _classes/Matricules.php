<?php


namespace _classes;


class Matricules
{
    public static function addMatricule():void{
        global $db;
        $req=$db->prepare("INSERT INTO matricule (id) VALUES (NULL);");
        $req->execute();
        $req->closeCursor();
    }
    public static function getCountMatricule():int{
        global $db;
        $req=$db->prepare("SELECT * FROM matricule");
        $req->execute();
        $req->closeCursor();
        return $req->rowCount();
    }
}