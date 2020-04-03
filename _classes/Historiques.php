<?php


namespace _classes;


use Cassandra\Date;

class Historiques
{
    public static function addhistoriques(string $matriculeClients, string $dateInscriptions, string $dateExpirations, string $mois,string $stat, string $frais, string $sports):void{
        global $db;
        $req=$db->prepare("INSERT INTO historiques (matriculeClients, dateInscriptions, dateExpirations, mois, stat, frais, sports) VALUES (?, ?, ?, ?, ?, ?, ?);");
        $req->execute([strscr($matriculeClients), strscr($dateInscriptions), strscr($dateExpirations), strscr($mois), strscr($stat),strscr($frais), strscr($sports)]);
        $req->closeCursor();
    }
    public static function getAllHistorique():array {
        global $db;
        $req=$db->prepare("SELECT * FROM historiques INNER JOIN clients WHERE historiques.matriculeClients=clients.matriculeClients");
        $req->execute();
        $resultats = [];
        while($data = $req->fetchObject()){
            array_push($resultats,$data);
        }
        return $resultats;
    }
    public static function getAllHistoriqueByEmail(string $email):array {
        global $db;
        $req=$db->prepare("SELECT * FROM historiques INNER JOIN clients INNER JOIN personnels WHERE historiques.matriculeClients=clients.matriculeClients AND personnels.emailPersonnels=historiques.users AND personnels.emailPersonnels= ?");
        $req->execute();
        $resultats = [];
        while($data = $req->fetchObject()){
            array_push($resultats,$data);
        }
        return $resultats;
    }
    public static function getHistoriques():array {
        global $db;
        $req=$db->prepare("SELECT * FROM historiques INNER JOIN clients WHERE historiques.matriculeClients=clients.matriculeClients ORDER BY 	idInscriptions LIMIT 5");
        $req->execute();
        $resultats = [];
        while($data = $req->fetchObject()){
            array_push($resultats,$data);
        }
        return $resultats;
    }
    public static function getCountHistoriques():int {
        global $db;
        $req=$db->prepare("SELECT SUM(frais) as montants FROM historiques");
        $req->execute();
        return $req->fetchColumn();
    }
    public static function getCountHistoriquesDay(string $date):array {
        global $db;
        $req=$db->prepare("SELECT SUM(frais) as montant FROM historiques WHERE dateInscriptions = ? AND stat = '1';");
        $req->execute([strscr($date)]);
        $resultats = [];
        while ($data = $req->fetchObject()){
            array_push($resultats,$data);
        }
        $req->closeCursor();
        return $resultats;
    }
    public static function getCountHistoriquesReinscriptionDay(string $date):array {
        global $db;
        $req=$db->prepare("SELECT SUM(frais) as montant FROM historiques WHERE dateInscriptions = ? AND stat = '2';");
        $req->execute([strscr($date)]);
        $resultats = [];
        while ($data = $req->fetchObject()){
            array_push($resultats,$data);
        }
        $req->closeCursor();
        return $resultats;
    }
    public static function getHistoriqueById(string $id):array {
        global $db;
        $req=$db->prepare("SELECT * FROM historiques INNER JOIN clients ON historiques.matriculeClients=clients.matriculeClients WHERE idInscriptions = ?;");
        $req->execute([(int)($id)]);
        $resultats = [];
        while ($data = $req->fetchObject()){
            array_push($resultats,$data);
        }
        $req->closeCursor();
        return $resultats;
    }
}