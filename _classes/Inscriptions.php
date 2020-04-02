<?php


namespace _classes;


class Inscriptions
{
    public static function addInscription(string $matriculeClients, string $dateInscriptions, string $dateExpirations, string $mois,string $stat, string $frais, string $sports):void{
        global $db;
        $req=$db->prepare("INSERT INTO inscriptions (matriculeClients, dateInscriptions, dateExpirations, mois, stat, frais, sports) VALUES (?, ?, ?, ?, ?, ?, ?);");
        $req->execute([strscr($matriculeClients), strscr($dateInscriptions), strscr($dateExpirations), strscr($mois), strscr($stat),strscr($frais), strscr($sports)]);
        $req->closeCursor();
    }
    public static function editInscription(string $dateInscriptions, string $dateExpirations , string $mois , string $stat, string $frais, string $sports, string $matriculeClients):void{
        global $db;
        $req=$db->prepare("UPDATE inscriptions SET dateInscriptions = ?, dateExpirations = ?, mois = ?, stat = ?, frais, sports = ? WHERE  matriculeClients = ?;");
        $req->execute([strscr($dateInscriptions), strscr($dateExpirations), strscr($mois), strscr($stat), strscr($frais), strscr($sports), strscr($matriculeClients)]);
        $req->closeCursor();
    }
    public static function getAllInscription():array {
        global $db;
        $req=$db->prepare("SELECT * FROM inscriptions INNER JOIN clients ON inscriptions.matriculeClients=clients.matriculeClients");
        $req->execute();
        $resultats = [];
        while($data = $req->fetchObject()){
            array_push($resultats,$data);
        }
        $req->closeCursor();
        return $resultats;
    }

}