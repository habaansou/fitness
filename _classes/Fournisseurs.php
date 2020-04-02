<?php


namespace _classes;


class Fournisseurs
{
    public static function addFournisseurs(string $intituleFournisseurs, string $matriculeFournisseurs, string $typeFournisseurs, string $telephoneFournisseurs, string $adresseFournisseurs, string $emailFournisseurs):void{
    global $db;
    $req=$db->prepare("INSERT INTO fournisseurs (intituleFournisseurs, matriculeFournisseurs, typeFournisseurs, telephoneFournisseurs, adresseFournisseurs, emailFournisseurs) VALUES (?, ?, ?, ?, ?, ?);");
    $req->execute([strscr($intituleFournisseurs), strscr($matriculeFournisseurs), strscr($typeFournisseurs), strscr($telephoneFournisseurs), strscr($adresseFournisseurs), strscr($emailFournisseurs)]);
    $req->closeCursor();
    }
    public static function getAllFournisseurs(string $type):array {
        global $db;
        $req=$db->prepare("SELECT * FROM fournisseurs WHERE typeFournisseurs = ?;");
        $req->execute([strscr($type)]);
        $resultats = [];
        while($data = $req->fetchObject()){
            array_push($resultats,$data);
        }
        $req->closeCursor();
        return $resultats;
    }
    public static function deleteFournisseursById(int $id):void {
        global $db;
        $req=$db->prepare('DELETE FROM fournisseurs WHERE idFournisseurs = ?;');
        $req->execute([strscr($id)]);
        $req->closeCursor();
    }


}