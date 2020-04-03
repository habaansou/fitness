<?php


namespace _classes;


class Ventes
{
    public static function addVente():void{
        global $db;
        $req=$db->prepare("");
        $req->execute([]);
        $req->closeCursor();

    }
    public static function deleteVente():void{
        global $db;
        $req=$db->prepare("");
        $req->execute([]);
        $req->closeCursor();
    }

}