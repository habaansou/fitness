<?php


namespace _classes;


class Clients
{
    public static function addClients(string $matriculeClients, string $nomClients, string $prenomClients, string $dateNaissClients, string $telephoneClients, string $cinClients, string $lieuClients, string $emailClients, string $sportClients, string $fraisClients):void{
        global $db;
        $req=$db->prepare("INSERT INTO clients (matriculeClients, nomClients, prenomClients, dateNaissClients, telephoneClients, cinClients, lieuClients, emailClients, sportClients, fraisClients) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);");
        $req->execute([strscr($matriculeClients), strscr($nomClients), strscr($prenomClients), strscr($dateNaissClients), strscr($telephoneClients), strscr($cinClients), strscr($lieuClients), strscr($emailClients), strscr($sportClients), strscr($fraisClients)]);
        $req->closeCursor();
    }
    public static function getAllClients():array {
        global $db;
        $req=$db->prepare("SELECT * FROM clients ORDER BY idClients DESC");
        $req->execute();
        $resultats = [];
        while($data = $req->fetchObject()){
            array_push($resultats,$data);
        }
        $req->closeCursor();
        return $resultats;
    }
    public static function deleteClient(int $id):void{
        global $db;
        $req=$db->prepare("DELETE FROM clients WHERE idClients = ?");
        $req->execute([strscr($id)]);
        $req->closeCursor();
    }
    public static function getByMatricule(string $matricule):array {
        global $db;
        $req=$db->prepare("SELECT * FROM clients WHERE matriculeClients = ?;");
        $req->execute([strscr($matricule)]);
        $resultats = [];
        while($data = $req->fetchObject()){
            array_push($resultats,$data);
        }
        $req->closeCursor();
        return $resultats;
    }
}