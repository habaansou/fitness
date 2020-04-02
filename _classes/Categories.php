<?php


namespace _classes;


class Categories
{
    public static function getAllCategories():array {
        global $db;
        $req=$db->prepare("SELECT * FROM categories");
        $req->execute();
        $resultats = [];
        while($data = $req->fetchObject()){
            array_push($resultats,$data);
        }
        $req->closeCursor();
        return $resultats;
    }
}