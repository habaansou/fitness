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
    public static function addCategories(string $categorie):void{
        global $db;
        $req=$db->prepare("INSERT INTO categories (nameCategories) VALUES (?);");
        $req->execute([strscr($categorie)]);
        $req->closeCursor();
    }
    public static function deleteCategories(string $id):void{
        global $db;
        $req=$db->prepare("DELETE FROM categories WHERE idCategories = ? ");
        $req->execute([strscr($id)]);
        $req->closeCursor();
    }
    public static function verifyCategories(string $categorie):int{
        global $db;
        $req=$db->prepare("DELETE FROM categories WHERE nameCategories = ? ");
        $req->execute([strscr($categorie)]);
        $req->closeCursor();
        return $req->rowCount();
    }
}