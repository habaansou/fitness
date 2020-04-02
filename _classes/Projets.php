<?php


namespace _classes;


class Projets
{
    public static function addProjets(string $intituleProjets, string $typeProjets, string $dateDemarrageProjets, string $datePrevisionnelleDemarrage, string $dateFinProjets, string $datePrevissionnelleFinProjets, string $idClientProjets, string $nomChefprojetClientProjets, string $bonCommandeProjets, string $idSite, string $telephoneChetProjetsClient, string $adresseChetProjetsClient, string $nomSuppervisseurProjetClient, string $telephoneSuppervisseurProjetClient, string $adresseSuppervisseurClientProjets, string $nomChefProjetsGuitratel, string $nomSuppervisseurProjetGuitratel, string $montantBCProjets, string $users):void{
        global $db;
        $req=$db->prepare('INSERT INTO projets (intituleProjets, typeProjets, dateDemarrageProjets, datePrevisionnelleDemarrage, dateFinProjets, datePrevissionnelleFinProjets, idClientProjets, nomChefprojetClientProjets, bonCommandeProjets, idSite, telephoneChetProjetsClient, adresseChetProjetsClient, nomSuppervisseurProjetClient, telephoneSuppervisseurProjetClient, adresseSuppervisseurClientProjets, nomChefProjetsGuitratel, nomSuppervisseurProjetGuitratel, montantBCProjets, users) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?);');
        $req->execute([strscr($intituleProjets), strscr($typeProjets), strscr($dateDemarrageProjets), strscr($datePrevisionnelleDemarrage), strscr($dateFinProjets), strscr($datePrevissionnelleFinProjets), strscr($idClientProjets), strscr($nomChefprojetClientProjets), strscr($bonCommandeProjets), strscr($idSite), strscr($telephoneChetProjetsClient) , strscr($adresseChetProjetsClient), strscr($nomSuppervisseurProjetClient), strscr($telephoneSuppervisseurProjetClient), strscr($adresseSuppervisseurClientProjets), strscr($nomChefProjetsGuitratel), strscr($nomSuppervisseurProjetGuitratel) , strscr($montantBCProjets), strscr($users)]);
        $req->closeCursor();
    }
    public static function getAllProjets():array {
        global $db;
        $req=$db->prepare('SELECT * FROM projets');
        $req->execute();
        $resultats = [];
        while($data = $req->fetchObject()){
            array_push($resultats,$data);
        }
        $req->closeCursor();
        return $resultats;
    }
}