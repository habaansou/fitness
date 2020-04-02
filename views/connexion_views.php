
<!DOCTYPE html>
<html lang="fr">


<head>
<?php require_once ("includes/head.php");?>
</head>

<body class="main-body bg-light">

<!-- Loader -->
<?php require_once ("includes/loader.php");?>
<!-- /Loader -->

<!-- main-signin-wrapper -->
<div class="my-auto page page-h">
    <div class="main-signin-wrapper">
        <div class="main-card-signin d-md-flex wd-100p">
            <div class="wd-md-50p login d-none d-md-block page-signin-style p-5 text-white" >
                <div class="my-auto authentication-pages">
                    <div>
                        <img src="<?=DIR?>assets/img/brand/logo.png" class=" m-0 mb-4" alt="logo">
                        <h5 class="mb-4">Application de gestion sécurisée et optimale</h5>
                        <p class="mb-5">Cette application est la propriété de FITNESS-ONE tout droit réservés aux utilisateurs et au propriétaire de la plateforme.</p>
                        <a href="<?=DIR.'connexion'?>" class="btn btn-danger">Lire la suite</a>
                    </div>
                </div>
            </div>
            <div class="p-5 wd-md-50p">
                <div class="main-signin-header">
                    <?php if(isset($warnings) AND !empty($warnings)):?>
                        <?php foreach($warnings as $get):?>
                            <div class="alert alert-warning alert-dismissible fade show message" role="alert" id="message">
                                <strong>Information :</strong> <?=$get?>.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php endforeach;?>
                    <?php endif;?>
                    <?php if(isset($success) AND !empty($success)):?>
                        <?php foreach($success as $get):?>
                            <div class="alert alert-success alert-dismissible fade show message" role="alert" id="message">
                                <strong>Information :</strong> <?=$get?>.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php endforeach;?>
                    <?php endif;?>
                    <?php if(isset($errors) AND !empty($errors)):?>
                        <?php foreach($errors as $get):?>
                            <div class="alert alert-danger alert-dismissible fade show message" role="alert" id="message">
                                <strong>Information :</strong> <?=$get?>.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php endforeach;?>
                    <?php endif;?>

                    <h2>Bienvenue !</h2>
                    <h4>Dans la page de connexion</h4>
                    <form action="" method="post">
                        <div class="form-group">
                            <?php global $identifient?>
                            <label>Identifient</label><input class="form-control" value="<?=$identifient?>" name="identifient" placeholder="Votre identifient" type="text">
                        </div>
                        <div class="form-group">
                            <label>Mot de passe</label> <input class="form-control" placeholder="Votre mot de passe" name="password" type="password" >
                        </div>
                        <button class="btn btn-main-primary btn-block ">Connexion</button>
                    </form>
                </div>
                <div class="main-signin-footer mt-3 mg-t-5">
                    <p><a href="#">Mot de passe oublié ?</a></p>
                    <p>J'ai pas de compte ? <a href="<?=DIR.'inscription'?>">Création de compte</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /main-signin-wrapper -->
<?php require_once ("includes/foot.php");?>

</body>

</html>