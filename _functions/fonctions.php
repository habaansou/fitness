<?php
/**
 * Created by PhpStorm.
 * User: David Ansoumane HABA
 * Date: 01/04/2019
 * Time: 01:26
 */
function strscr(string $string) : string{
    return trim(htmlspecialchars($string));
}
function debug($var) : void{
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
}
function dateAddDay(string $date, string $njour):string {
    global $db;
    $req=$db->prepare("SELECT ADDDATE( ? , ?)");
    $req->execute([strscr($date),strscr($njour)]);
    return $req->fetchColumn();
}
function dateDifdateEnDay(string $datefin, string $datedebut):string {
    global $db;
    $req=$db->prepare("SELECT DATEDIFF(?,?)");
    $req->execute([strscr($datefin),strscr($datedebut)]);
    return $req->fetchColumn();
}
function getUserLanguage() : string{
    if(isset($_GET['lang']) AND !empty($_GET['lang'])){
        $lang=strscr(strtolower($_GET['lang']));
        $avalaibleLanguage=['fr','en'];
        return (in_array($lang,$avalaibleLanguage)) ? $lang : DEFAULT_LANGUAGE;
    }else{
        return ((isset($_SESSION['lang']) AND !empty($_SESSION['lang']))) ? $_SESSION['lang'] : DEFAULT_LANGUAGE;
    }
}

if (!function_exists('get_gravatar_url')) {

    /**
     *
     * @param string $email
     * @param int $size
     * @return string
     */
    function get_gravatar_url(string $email) : string {
        return "http://gravatar.com/avatar/" . md5(strtolower(trim($email)))
            . "?s=50&"
            . 'd=http://www.archibtp.fr/sites/default/files/user_avatar_unknown.png';
    }

}

if (!function_exists('security')) {
    function security() {
        if (isset($_SESSION['fitness']['idUsers']) AND !empty($_SESSION['fitness']['idUsers'])){

        } else {
            header('Location: '.DIR.'connexion');
        }
    }
}

if(!function_exists('image_default')){
    function image_default() {
        return DIR.'assets/images/users/default/avatardefault.png';
    }
}

if(!function_exists('hashpassword')){
        function hashpassword(string $password):string {
        return hash('sha256',$password);
        }
}


