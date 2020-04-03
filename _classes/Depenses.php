<?php


namespace _classes;


class Depenses
{
    public static function addDepenses(string $libelleDepenses, string $dateDepenses, string $descriptionDepenses, string $montantDepenses, string $usersDepenses, string $depensesPar, string $refenceDepenses):void{
        global $db;
        $req=$db->prepare("INSERT INTO depenses (libelleDepenses, dateDepenses, descriptionDepenses, montantDepenses, usersDepenses, depensesPar, refenceDepenses) VALUES (?, ?, ?, ?, ?, ?, ?);");
        $req->execute([strscr($libelleDepenses), strscr($dateDepenses), strscr($descriptionDepenses), strscr($montantDepenses), strscr($usersDepenses), strscr($depensesPar), strscr($refenceDepenses)]);
        $req->closeCursor();
    }
    public static function getAllDepenses():array {
        global $db;
        $req=$db->prepare("SELECT * FROM depenses INNER JOIN personnels ON personnels.emailPersonnels=depenses.usersDepenses");
        $req->execute();
        $resultats = [];
        while($data = $req->fetchObject()){
            array_push($resultats,$data);
        }
        $req->closeCursor();
        return $resultats;

    }
    public static function deleteDepense(string $id):void{
        global $db;
        $req=$db->prepare("DELETE FROM depenses WHERE idDepenses = ? ");
        $req->execute([strscr($id)]);
        $req->closeCursor();
    }
    public static function getCountDepenses():int {
        global $db;
        $req=$db->prepare("SELECT SUM(montantDepenses) as montant FROM depenses");
        $req->execute();
        return $req->fetchColumn();
    }
    public static function getCountDepenseDay(string $date):array {
        global $db;
        $req=$db->prepare("SELECT SUM(montantDepenses) as montant FROM depenses WHERE dateDepenses = ? ;");
        $req->execute([strscr($date)]);
        $resultats = [];
        while($data = $req->fetchObject()){
            array_push($resultats,$data);
        }
        $req->closeCursor();
        return $resultats;
    }

}