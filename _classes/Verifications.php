<?php


namespace _classes;


class Verifications
{
    public static function verifyClient(string $matricule):array {
        global $db;
        $req=$db->prepare("SELECT * FROM inscriptions WHERE matriculeClients = ?");
        $req->execute([strscr($matricule)]);
        $resultats = [];
        while($data = $req->fetchObject()){
            array_push($resultats,$data);
        }
        $req->closeCursor();
        return $resultats;
    }
}