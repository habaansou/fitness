<?php


namespace _classes;


class Connexions
{
    public static function connexionVerify(string $loginUsers, string $emailUsers):int{
        global $db;
        $req=$db->prepare('SELECT * FROM users WHERE identifientUsers = ? AND passwordUsers = ?;');
        $req->execute([strscr($loginUsers), strscr($emailUsers)]);
        $req->closeCursor();
        return  $req->rowCount();
    }
    public static function verifyLogin(string $loginUsers, string $passwordUsers):int{
        global $db;
        $req=$db->prepare('SELECT * FROM users WHERE identifientUsers =? AND passwordUsers = ?');
        $req->execute([strscr($loginUsers), strscr($passwordUsers)]);
        $req->closeCursor();
        return  $req->rowCount();
    }
    public static function loginUsers(string $loginUsers, string $passwordUsers):array {
        global $db;
        $req=$db->prepare('SELECT * FROM users WHERE identifientUsers =? AND passwordUsers = ?');
        $req->execute([strscr($loginUsers), strscr($passwordUsers)]);
        $resultats = [];
        while($data = $req->fetchObject()){
            array_push($resultats,$data);
        }
        $req->closeCursor();
        return  $resultats;
    }
}