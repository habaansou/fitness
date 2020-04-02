<?php


namespace _classes;


class Professions
{
    public static function addProfession(string $professions):void{
        global $db;
        $req=$db->prepare('INSERT INTO professions (nameProfessions) VALUES (?);');
        $req->execute([strscr($professions)]);
        $req->closeCursor();
    }
    public static function verifyProfession(string $professions):int{
        global $db;
        $req=$db->prepare('SELECT * FROM professions WHERE nameProfessions = ?;');
        $req->execute([strscr($professions)]);
        $req->closeCursor();
        return $req->rowCount();
    }
    public static function deleteProfession(int $id):void{
        global $db;
        $req=$db->prepare('DELETE FROM professions WHERE idProfessions = ?;');
        $req->execute([strscr($id)]);
        $req->closeCursor();
    }
    public static function editProfession(string $professions,int $id):void{
        global $db;
        $req=$db->prepare('UPDATE professions SET nameProfessions = ? WHERE idProfessions =?;');
        $req->execute([strscr($professions),strscr($id)]);
        $req->closeCursor();
    }
    public static function getByIdProfession(int $id):array {
        global $db;
        $req=$db->prepare('SELECT * FROM professions WHERE idProfessions = ?');
        $req->execute([strscr($id)]);
        $resultats = [];
        while($data = $req->fetchObject()){
            array_push($resultats,$data);
        }
        $req->closeCursor();
        return $resultats;
    }
    public static function getAllProfession():array {
        global $db;
        $req=$db->prepare('SELECT * FROM professions');
        $req->execute();
        $resultats = [];
        while($data = $req->fetchObject()){
            array_push($resultats,$data);
        }
        $req->closeCursor();
        return $resultats;
    }
}