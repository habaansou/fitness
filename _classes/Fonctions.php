<?php


namespace _classes;


class Fonctions
{
    public static function addFonction(string $fonctions):void{
        global $db;
        $req=$db->prepare('INSERT INTO fonctions (nameFonctions) VALUES (?);');
        $req->execute([strscr($fonctions)]);
        $req->closeCursor();
    }
    public static function verifyFonction(string $fonctions):int{
        global $db;
        $req=$db->prepare('SELECT * FROM fonctions WHERE nameFonctions = ?;');
        $req->execute([strscr($fonctions)]);
        $req->closeCursor();
        return $req->rowCount();
    }
    public static function deleteFonction(int $id):void{
        global $db;
        $req=$db->prepare('DELETE FROM fonctions WHERE idFonctions = ?;');
        $req->execute([strscr($id)]);
        $req->closeCursor();
    }
    public static function editFonction(string $fonctions,int $id):void{
        global $db;
        $req=$db->prepare('UPDATE fonctions SET nameFonctions = ? WHERE idFonctions =?;');
        $req->execute([strscr($fonctions),strscr($id)]);
        $req->closeCursor();
    }
    public static function getByIdFonction(int $id):array {
        global $db;
        $req=$db->prepare('SELECT * FROM fonctions WHERE idFonctions = ?');
        $req->execute([strscr($id)]);
        $resultats = [];
        while($data = $req->fetchObject()){
            array_push($resultats,$data);
        }
        $req->closeCursor();
        return $resultats;
    }
    public static function getAllFonction():array {
        global $db;
        $req=$db->prepare('SELECT * FROM fonctions');
        $req->execute();
        $resultats = [];
        while($data = $req->fetchObject()){
            array_push($resultats,$data);
        }
        $req->closeCursor();
        return $resultats;
    }
}