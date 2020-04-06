<?php


namespace _classes;


class Paiements
{
    public static function addPaiements(string $idPersonnels, string $montantPaiements, string $datePaiements, string $moisPaiements, string $anneePaiements):void{
        global $db;
        $req=$db->prepare("INSERT INTO paiements (idPersonnels, montantPaiements, datePaiements, moisPaiements, anneePaiements) VALUES (?, ?, ?, ?, ?);");
        $req->execute([strscr($idPersonnels), strscr($montantPaiements), strscr($datePaiements), strscr($moisPaiements), strscr($anneePaiements)]);
        $req->closeCursor();
    }
    public static function getAllPaiments():array {
        global $db;
        $req=$db->prepare("SELECT * FROM paiements INNER JOIN personnels INNER JOIN fonctions INNER JOIN professions WHERE paiements.idPersonnels=personnels.idPersonnels AND personnels.idFonctions=fonctions.idFonctions AND personnels.idProfessions=professions.idProfessions ORDER BY idPaiements DESC");
        $req->execute();
        $resultats = [];
        while($data = $req->fetchObject()){
            array_push($resultats,$data);
        }
        $req->closeCursor();
        return $resultats;
    }
    public static function getCountPayement():array {
        global $db;
        $req=$db->prepare("SELECT SUM(montantPaiements) as montant FROM paiements");
        $req->execute();
        $resultats = [];
        while($data = $req->fetchObject()){
            array_push($resultats,$data);
        }
        $req->closeCursor();
        return $resultats;
    }
    public static function deletePaiment(string $id):void {
        global $db;
        $req=$db->prepare("DELETE FROM paiements WHERE idPaiements = ?");
        $req->execute([strscr($id)]);
        $req->closeCursor();
    }
}