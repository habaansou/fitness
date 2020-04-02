<?php

$success = [];
$warnings = [];
$errors = [];
if(isset($_POST) AND !empty($_POST)){

    extract($_POST);
    if(isset($identifient) AND empty($identifient)){
        array_push($warnings,'Veuillez saisir votre identifient');
    }
    if(isset($password) AND empty($password)){
        array_push($warnings,'Veuillez saisir votre mot de passe');
    }
    if(count($warnings)==0 AND count($errors)==0){
        try {
            if(\_classes\Connexions::connexionVerify($identifient,hashpassword($password))==1){
                $login = \_classes\Connexions::loginUsers($identifient,hashpassword($password));
                foreach ($login as $getLogin){
                    if($getLogin->etatUsers=="Desactive"){
                        array_push($warnings,'Votre compte est désactivé par l\'administrateur');
                    }else{
                        $_SESSION['fitness']['idUsers']=$getLogin->idUsers;
                        $_SESSION['fitness']['loginUsers']=$getLogin->identifientUsers;
                        $_SESSION['fitness']['emailUsers']=$getLogin->emailUsers;
                        $_SESSION['fitness']['roleUsers']=$getLogin->roleUsers;
                        $_SESSION['fitness']['etatUsers']=$getLogin->etatUsers;
                        header('Location:'.DIR.'tableau_de_bord');
                    }
                }
            }else{
                array_push($warnings,'Erreur d\'identification');
            }

        }catch (PDOException $e){
            array_push($errors,'Erreur de connexion');
        }
    }
}