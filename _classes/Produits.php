<?php


namespace _classes;


class Produits
{
    public static function addProduits(string $referenceProduits, string $nomProduits, string $etatProduits, string $photo1Produits, string $photo2Produits, string $photo3Produits, string $idCategories, string $dateProduits, string $prixProduits, string $descriptionsProduits):void{
        global $db;
        $req=$db->prepare("INSERT INTO produits (referenceProduits, nomProduits, etatProduits, photo1Produits, photo2Produits, photo3Produits, idCategories, dateProduits, prixProduits, descriptionsProduits) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);");
        $req->execute([strscr($referenceProduits), strscr($nomProduits), strscr($etatProduits), strscr($photo1Produits), strscr($photo2Produits), strscr($photo3Produits), strscr($idCategories), strscr($dateProduits), strscr($prixProduits), strscr($descriptionsProduits)]);
        $req->closeCursor();
    }
    public static function getAllProduits():array {
        global $db;
        $req=$db->prepare("SELECT * FROM produits INNER JOIN categories ON produits.idCategories = categories.idCategories");
        $req->execute();
        $resultats = [];
        while($data = $req->fetchObject()){
            array_push($resultats,$data);
        }
        $req->closeCursor();
        return $resultats;
    }
    public static function verifyProduit(string $libelle):int{
        global $db;
        $req=$db->prepare("SELECT * FROM produits WHERE referenceProduits = ?");
        $req->execute([strscr($libelle)]);
        $req->closeCursor();
        return $req->rowCount();
    }
    public static function deleteProduit(string $id):void{
        global $db;
        $req=$db->prepare("DELETE FROM produits WHERE idProduits = ?");
        $req->execute([strscr($id)]);
        $req->closeCursor();
    }
}