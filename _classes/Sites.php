<?php


namespace _classes;


class Sites
{
    public static function addSites(string $intitule, string $dateCreation, string $description):void{
        global $db;
        $req=$db->prepare('INSERT INTO sites (intitule, dateCreation, description) VALUES (?, ?, ?);');
        $req->execute([strscr($intitule), strscr($dateCreation), strscr($description)]);
        $req->closeCursor();
    }
    public static function getAllSites():array {
        global $db;
        $req=$db->prepare('SELECT * FROM sites;');
        $req->execute();
        $resultats = [];
        while($data = $req->fetchObject()){
            array_push($resultats,$data);
        }
        $req->closeCursor();
        return $resultats;
    }
    public static function deleteSites(int $id):void{
        global $db;
        $req=$db->prepare('DELETE FROM sites WHERE idsite = ?');
        $req->execute([strscr($id)]);
        $req->closeCursor();
    }
}