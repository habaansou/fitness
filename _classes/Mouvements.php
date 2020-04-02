<?php


namespace _classes;


class Mouvements
{
    public static function entreeMouvements(string $dateMouvements, string $typeMouvements, string $montantMouvements, string $receptionnisteMouvements, string $projetMouvements, string $siteMouvements, string $pieceMouvements, string $referenceMouvements, string $descriptionMouvements, string $modedepaiementMouvements, string $typedetravauxMouvements, string $usersMouvements):void{
        global $db;
        $req=$db->prepare('INSERT INTO mouvements (dateMouvements, typeMouvements, montantMouvements, receptionnisteMouvements, projetMouvements, siteMouvements, pieceMouvements, referenceMouvements, descriptionMouvements, modedepaiementMouvements, typedetravauxMouvements, usersMouvements) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);');
        $req->execute([strscr($dateMouvements), strscr($typeMouvements), strscr($montantMouvements), strscr($receptionnisteMouvements), strscr($projetMouvements), strscr($siteMouvements), strscr($pieceMouvements), strscr($referenceMouvements), strscr($descriptionMouvements), strscr($modedepaiementMouvements), strscr($typedetravauxMouvements), strscr($usersMouvements)]);
        $req->closeCursor();
    }
    public static function sortieMouvements(string $dateMouvements, string $typeMouvements, string $montantMouvementsRecettes, string $receptionnisteMouvements, string $pieceMouvements, string $referenceMouvements, string $descriptionMouvements, string $modedepaiementMouvements, string $sourcedefondMouvements, string $usersMouvementsd):void{
        global $db;
        $req=$db->prepare('INSERT INTO mouvements (dateMouvements, typeMouvements, montantMouvementsRecettes, receptionnisteMouvements, pieceMouvements, referenceMouvements, descriptionMouvements, modedepaiementMouvements, sourcedefondMouvements, usersMouvements) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);');
        $req->execute([strscr($dateMouvements), strscr($typeMouvements), strscr($montantMouvementsRecettes), strscr($receptionnisteMouvements), strscr($pieceMouvements), strscr($referenceMouvements), strscr($descriptionMouvements), strscr($modedepaiementMouvements), strscr($sourcedefondMouvements), strscr($usersMouvementsd)]);
        $req->closeCursor();
    }
    public static function verifyMouvementsReference(string $referenceMouvements):int{
        global $db;
        $req=$db->prepare('SELECT * FROM mouvements WHERE referenceMouvements = ?');
        $req->execute([strscr($referenceMouvements)]);
        return $req->rowCount();
        $req->closeCursor();
    }
    public static function getAllMouvements():array {
        global $db;
        $req=$db->prepare('SELECT * FROM mouvements ORDER BY idMouvements DESC');
        $req->execute();
        $resultats = [];
        while($data = $req->fetchObject()){
            array_push($resultats,$data);
        }
        $req->closeCursor();
        return $resultats;
    }
}