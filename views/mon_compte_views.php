<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require_once("includes/head.php");?>
</head>

<body class="main-body light-theme app sidebar-mini">

<!-- Loader -->
<?php require_once("includes/loader.php");?>
<!-- /Loader -->

<!-- main-sidebar -->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<?php require_once("includes/slider.php");?>
<!-- main-sidebar -->

<!-- main-content -->
<div class="main-content app-content">

    <!-- main-header -->
    <?php require_once("includes/header.php");?>
    <!-- /main-header -->
    <?php
    if(isset($getProfile) AND !empty($getProfile)):?>
    <?php foreach ($getProfile as $get):?>
    <!-- container -->
    <div class="container-fluid">

        <!-- breadcrumb -->
        <div class="breadcrumb-header justify-content-between">
            <div class="left-content">
                <h4 class="content-title mb-2">Bienvenue, M.<?=ucfirst($_SESSION['fitness']['loginUsers']);?></h4>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Tableau de bord</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Profil Utilisateur</li>
                    </ol>
                </nav>
            </div>
            <div class="d-flex my-auto right-content">
                <div class="pr-1 mb-3 mb-xl-0">
                    <button type="button" class="btn btn-info btn-icon mr-2"><i class="mdi mdi-filter-variant"></i></button>
                </div>
                <div class="pr-1 mb-3 mb-xl-0">
                    <button type="button" class="btn btn-danger btn-icon mr-2"><i class="mdi mdi-star"></i></button>
                </div>
                <div class="pr-1 mb-3 mb-xl-0">
                    <button type="button" class="btn btn-warning  btn-icon mr-2"><i class="mdi mdi-refresh"></i></button>
                </div>
                <div class="mb-3 mb-xl-0">
                    <div class="btn-group dropdown">
                        <button type="button" class="btn btn-primary"><?=date('d/m/Y');?></button>
                        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" id="dropdownMenuDate" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /breadcrumb -->
        <!-- row opened -->
        <div class="col-xl-12 col-md-12 col-sm-12">
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
        </div>
        <div class="row row-sm row-deck">
            <div class="col-md-12 col-lg-12 col-xl-4">
                <div class="card stats">
                    <div class="card-body">
                        <div class="text-center">
                                <img alt="user-img" class="avatar avatar-xxl brround" src="<?=DIR?>assets/img/users/<?=$get->photoPersonnels;?>" class="ht-136 wd-230">
                        </div>
                        <div class="row mt-0">
                            <div class="col-12">
                                <div class="py-4 d-flex border-bottom">
											<span class="icon border-primary-light bg-primary-transparent mt-1">
												<i class="fa fa-user-secret tx-primary"></i>
											</span>
                                    <div class="ml-3">
                                        <h5 class="mb-0">Prénom : </h5>
                                        <h5 class="mb-0" style="color: #0fb2fc"><?=$get->prenomPersonnels?></h5>
                                    </div>
                                </div>
                                <div class="py-4 d-flex border-bottom">
											<span class="icon border-primary-light bg-primary-transparent mt-1">
												<i class="fa fa-user tx-primary"></i>
											</span>
                                    <div class="ml-3">
                                        <h5 class="mb-0">Nom : </h5>
                                        <h5 class="mb-0" style="color: #0fb2fc"><?=$get->nomPersonnels?></h5>
                                    </div>
                                </div>
                                <div class="py-4 d-flex border-bottom">
											<span class="icon border-primary-light bg-primary-transparent mt-1">
												<i class="ion ion-md-unlock tx-primary"></i>
											</span>
                                    <div class="ml-3">
                                        <h5 class="mb-0">Fonction : </h5>
                                        <h5 class="mb-0" style="color: #0fb2fc"><?=$get->nameFonctions?></h5>
                                    </div>
                                </div>
                                <div class="py-4 d-flex border-bottom">
											<span class="icon border-primary-light bg-primary-transparent mt-1">
												<i class="fa fa-desktop tx-primary"></i>
											</span>
                                    <div class="ml-3">
                                        <h5 class="mb-0">Profession : </h5>
                                        <h5 class="mb-0" style="color: #0fb2fc"><?=$get->roleUsers?> </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-12 col-xl-8">
                <div class="card card-table-two">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mb-1">Modifier votre profil</h4>
                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                    </div>
                    <span class="tx-12 tx-gray-500 mb-3">Suivez les mouvements des Inscriptions et Réinscription.</span>
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-lg-6 col-xl-6 col-md-6">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label class="mg-b-10">Identifient</label>
                                        <input type="text" class="form-control" readonly name="pseudo" value="<?=$get->identifientPersonnels?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <label class="mg-b-10">Nom</label>
                                        <input type="text" value="<?=$get->nomPersonnels?>"  class="form-control" id="nom" name="nom" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <label class="mg-b-10">Prénom</label>
                                        <input type="text" value="<?=$get->prenomPersonnels?>"  class="form-control" name="prenom" id="prenom" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <label class="mg-b-10">Adresse</label>
                                        <input type="text" value="<?=$get->adressePersonnels?>"  class="form-control" name="adresse" id="adresse" required="">
                                    </div>
                                </div>
                                <div class="row row-xs wd-xl-80p">
                                    <div class="col-sm-6 col-md-3">
                                        <button name="Valider" value="Valider" class="btn btn-indigo btn-with-icon btn-block"><i class="typcn typcn-input-checked"></i> Valider</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-6 col-md-6">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label class="mg-b-10">Salaire de base</label>
                                        <input type="text" readonly value="<?=number_format($get->salairePersonnels,'2','.',',').' GNF'?>" class="form-control" name="salaire" id="salaire" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <label class="mg-b-10">Date d'embauche</label>
                                        <input type="text" value="<?=date_format(date_create($get->dateDembausePersonnels),'d/m/Y')?>" readonly class="form-control" name="datedembauche" id="datedembauche" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <label class="mg-b-10">Nouveau Mot de passe</label>
                                        <input type="password" class="form-control" name="password1" id="password" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <label class="mg-b-10">Confirmation</label>
                                        <input type="password" class="form-control" name="password2" id="confirmation" required="">
                                    </div>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- Container closed -->
</div>
<?php endforeach;?>
<?php endif;?>
<!-- main-content closed -->

<!-- Sidebar-right-->
<?php require_once("includes/sidebar.php");?>
<!--/Sidebar-right-->

<!-- Message Modal -->
<?php require_once("includes/messages.php");?>

<!--Video Modal -->
<?php require_once("includes/videos.php");?>
<!-- modal -->

<!-- Audio Modal -->
<?php require_once("includes/audios.php");?>
<!-- modal -->

<!-- Footer opened -->
<?php require_once ("includes/footer.php");?>
<!-- Footer closed -->

<!-- Back-to-top -->
<a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>

<?php require_once ("includes/foot.php");?>

</body>
</html>