<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once ("includes/head.php");?>
</head>
<body class="main-body">

<!-- Loader -->
<?php require_once ("includes/loader.php");?>
<!-- /Loader -->

<!-- main-signin-wrapper -->
<?php
$userInfo = \_classes\Personnels::selectPersonne($_SESSION['fitness']['emailUsers']);
if(isset($userInfo) AND !empty($userInfo)):
?>
<?php foreach ($userInfo as $get):?>
<div class="my-auto page main-signin-wrapper">
    <div class="text-center mb-2">
        <img src="<?=DIR?>assets/img/brand/favicon-white.png" class="header-brand-img" alt="logo">
        <div class="main-signin-wrapper">
            <div class="main-card-signin d-md-flex ">
                <div class="p-5">
                    <div class="main-signin-header">
                        <div class="avatar avatar-xxl avatar-xxl mx-auto text-center mb-2"><img alt="" class="rounded-circle" src="<?=DIR?>assets/img/users/<?=$get->photoPersonnels?>"></div>
                        <div class="mx-auto text-center mt-4 mg-b-30">
                            <h5 class="mg-b-10 tx-16"><?=WEBSITE_NAME?></h5>
                            <h5 class="mg-b-10 tx-16"><?=$get->prenomPersonnels.' '.$get->nomPersonnels?></h5>
                            <p class="tx-13">Veuillez saisir votre mot de passe correctement</p>
                        </div>
                        <form action="">
                            <div class="form-group">
                                <input class="form-control" placeholder="Votre mot de passe" type="password" value="">
                            </div>
                            <button class="btn btn-main-primary btn-block">Déveroullé</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endforeach;?>
<?php endif;?>
<?php require_once ("includes/foot.php");?>
</html>