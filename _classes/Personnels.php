<?php


namespace _classes;


class Personnels
{
    public static function addPersonnel(string $nomPersonnels, string $prenomPersonnels, string $sexePersonnels, string $identifientPersonnels, string $photoPersonnels, string $adressePersonnels, string $idFonctions, string $idProfessions, string $contratPersonnels, string $dateDembausePersonnels, string $salairePersonnels, string $emailPersonnels):void{
        global $db;
        $req=$db->prepare('INSERT INTO personnels (nomPersonnels, prenomPersonnels, sexePersonnels, identifientPersonnels, photoPersonnels, adressePersonnels, idFonctions, idProfessions, contratPersonnels, dateDembausePersonnels, salairePersonnels, emailPersonnels) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);');
        $req->execute([strscr($nomPersonnels), strscr($prenomPersonnels), strscr($sexePersonnels), strscr($identifientPersonnels), strscr($photoPersonnels), strscr($adressePersonnels), strscr($idFonctions), strscr($idProfessions), strscr($contratPersonnels), strscr($dateDembausePersonnels), strscr($salairePersonnels), strscr($emailPersonnels)]);
        $req->closeCursor();
    }
    public static function verifyPersonne(string $email):int{
        global $db;
        $req=$db->prepare('SELECT * FROM personnels WHERE emailPersonnels = ?');
        $req->execute([strscr($email)]);
        $req->closeCursor();
        return $req->rowCount();
    }
    public static function selectPersonne(string $email):array {
        global $db;
        $req=$db->prepare("SELECT * FROM personnels INNER JOIN users INNER JOIN fonctions INNER JOIN professions WHERE users.emailUsers=personnels.emailPersonnels AND personnels.idFonctions=fonctions.idFonctions AND personnels.idProfessions=professions.idProfessions AND emailPersonnels = ?;");
        $req->execute([strscr($email)]);
        $resultats = [];
        while($data = $req->fetchObject()){
            array_push($resultats,$data);
        }
        $req->closeCursor();
        return $resultats;
    }
    public static function getAllPersonnels():array {
        global $db;
        $req=$db->prepare('SELECT * FROM personnels INNER JOIN fonctions INNER JOIN professions ON personnels.idFonctions=fonctions.idFonctions AND personnels.idProfessions=professions.idProfessions;');
        $req->execute();
        $resultats = [];
        while($data = $req->fetchObject()){
            array_push($resultats,$data);
        }
        $req->closeCursor();
        return $resultats;
    }
    public static function deletePersonnels(string $id):void{
        global $db;
        $req=$db->prepare("DELETE FROM personnels WHERE idPersonnels = ?");
        $req->execute([strscr($id)]);
        $req->closeCursor();
    }
    public static function getAllPersonnelsById(string $id):array {
        global $db;
        $req=$db->prepare("SELECT * FROM personnels INNER JOIN fonctions INNER JOIN professions ON personnels.idFonctions=fonctions.idFonctions AND personnels.idProfessions=professions.idProfessions WHERE personnels.idPersonnels = ?");
        $req->execute([strscr($id)]);
        $resulats = [];
        while($data = $req->fetchObject()){
            array_push($resulats,$data);
        }
        $req->closeCursor();
        return $resulats;
    }
    public static function getUsersByEmail(string $email):array {
        global $db;
        $req=$db->prepare("SELECT * FROM personnels INNER JOIN users INNER JOIN fonctions INNER JOIN professions WHERE users.emailUsers=personnels.emailPersonnels AND personnels.idFonctions=fonctions.idFonctions AND personnels.idProfessions=professions.idProfessions AND emailPersonnels = ?;");
        $req->execute([strscr($email)]);
        $resultats = [];
        while($data = $req->fetchObject()){
            array_push($resultats,$data);
        }
        $req->closeCursor();
        return $resultats;
    }
}