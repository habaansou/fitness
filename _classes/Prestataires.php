<?php


namespace _classes;


class Prestataires
{
    public static function addPrestataires(string $intitule, string $adresse, string $telephone, string $typedeprestataire, string $siteweb, string $email):void{
    global $db;
    $req=$db->prepare('INSERT INTO prestataires (intitule, adresse, telephone, typedeprestataire, siteweb, email) VALUES (?, ?, ?, ?, ?, ?);');
    $req->execute([strscr($intitule), strscr($adresse), strscr($telephone), strscr($typedeprestataire), strscr($siteweb), strscr($email)]);
    $req->closeCursor();
    }
    public static function getAllPrestataires():array {
        global $db;
        $req=$db->prepare('SELECT * FROM prestataires;');
        $req->execute();
        $resultats = [];
        while($data = $req->fetchObject()){
            array_push($resultats,$data);
        }
        $req->closeCursor();
        return $resultats;
    }
    public static function getPrestatairesByName(string $intitule,string $type):int {
        global $db;
        $req=$db->prepare('SELECT * FROM prestataires WHERE intitule = ? AND typedeprestataire = ?;');
        $req->execute([strscr($intitule),strscr($type)]);
        $req->closeCursor();
        return $req->rowCount();
    }
    public static function deletePrestatairesById(int $id):void {
        global $db;
        $req=$db->prepare('DELETE FROM prestataires WHERE idprestataire = ?;');
        $req->execute([strscr($id)]);
        $req->closeCursor();
    }
    public static function getAllPartenaire(string $type):array {
        global $db;
        $req=$db->prepare('SELECT * FROM prestataires WHERE typedeprestataire = ?;');
        $req->execute([strscr($type)]);
        $resultats = [];
        while($data = $req->fetchObject()){
            array_push($resultats,$data);
        }
        $req->closeCursor();
        return $resultats;
    }

}