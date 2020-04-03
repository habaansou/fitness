<?php


namespace _classes;


class Users
{
    public static function addUSers(string $identifientUsers, string $emailUsers, string $passwordUsers, string $roleUsers, string $etatUsers):void{
        global $db;
        $req=$db->prepare('INSERT INTO users (identifientUsers, emailUsers, passwordUsers, roleUsers, etatUsers) VALUES (?, ?, ?, ?, ?);');
        $req->execute([strscr($identifientUsers), strscr($emailUsers), strscr($passwordUsers), strscr($roleUsers), strscr($etatUsers)]);
        $req->closeCursor();
    }
    public static function verifyUsers(string $email, string $login):int{
        global $db;
        $req=$db->prepare('SELECT * FROM users WHERE  emailUsers = ? AND loginUsers = ?');
        $req->execute([strscr($email),strscr($login)]);
        $req->closeCursor();
        return $req->rowCount();
    }
    public static function updateUsers(string $password, string $login):void{
        global $db;
        $req=$db->prepare("UPDATE users SET passwordUsers = ? WHERE identifientUsers = ?;");
        $req->execute([strscr($password),strscr($login)]);
        $req->closeCursor();
    }

}