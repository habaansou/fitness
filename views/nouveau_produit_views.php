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

    <!-- container -->
    <div class="container-fluid">

        <!-- breadcrumb -->
        <div class="breadcrumb-header justify-content-between">
            <div class="my-auto">
                <div class="d-flex">
                    <h4 class="content-title mb-0 my-auto"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Gestion des produits</font></font></h4>
                </div>
            </div>
            <div class="d-flex my-auto breadcrumb-right">
                <button class="btn btn-outline-primary mr-3">
                    <span class="icon-label"><i class="typcn typcn-edit"></i></span> <span class="btn-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Email</font></font></span></button> <button class="btn btn-outline-danger mr-3"><span class="icon-label"><i class="typcn typcn-printer"></i></span> <span class="btn-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Impression</font></font></span></button> <button class="btn btn-success mr-3"><span class="icon-label"><i class="typcn typcn-download"></i></span> <span class="btn-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Exportation</font></font></span></button>
            </div>
        </div>
        <!-- breadcrumb -->
        <!-- row -->
        <div class="row">
            <div class="col-lg-12 col-xl-12 col-md-12">
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
                <div class="card">
                    <div class="card-body">
                        <div>
                            <h6 class="card-title mb-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nouveau Produit</font></font></h6>
                            <p class="text-muted card-sub-title">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Veuillez saisir correctement les données du produit.
                                    </font>
                                </font>
                            </p>
                        </div>
                        <div class="box box-default">
                            <form action="" method="post" enctype="multipart/form-data">
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label for="prenom">Référence</label>
                                                    <?php global $reference?>
                                                    <input type="text" class="form-control" value="<?=$reference?>" name="prenom" id="prenom" placeholder="Veuillez saisir la référence" required="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label for="prenom">Nom Produit</label>
                                                    <?php global $intitule?>
                                                    <input type="text" class="form-control" value="<?=$intitule?>" name="intitule" id="intitule" placeholder="Veuillez saisir l'intitule" required="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Etat</label>
                                                <select class="form-control select2" name="etat" style="width: 100%;" required="">
                                                    <option value="">Veuillez séléctionner l'etat</option>
                                                    <option value="Active">Activé</option>
                                                    <option value="Désactivé">Désactivé</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label for="photo">Photo</label>
                                                    <input type="file" class="form-control" name="photo" id="photo" placeholder="Veuillez séléctionner sa photo" required="">
                                                </div>
                                            </div>
                                            <div class="row row-xs wd-xl-80p">
                                                <div class="col-sm-6 col-md-3">
                                                    <button name="Envoyer" value="Envoyer" class="btn btn-indigo btn-with-icon btn-block"><i class="typcn typcn-input-checked"></i> Enregistrer</button>
                                                </div>
                                                <div class="col-sm-6 col-md-3 mg-t-10 mg-sm-t-0">
                                                    <button class="btn btn-primary btn-with-icon btn-block"><i class="typcn typcn-arrow-back-outline"></i> Annuller</button>
                                                </div>
                                            </div>
                                            <!-- /.form-group -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label>Fonction</label>
                                                    <select class="form-control select2" name="idcategorie" style="width: 100%;" required="">
                                                        <option value="">Veuillez séléctionner la catégorie</option>
                                                        <?php if(isset($getCategories) AND !empty($getCategories)):?>
                                                            <?php foreach ($getCategories as $get):?>
                                                                <option value="<?=$get->idCategories?>"><?=$get->nameCategories?></option>
                                                            <?php endforeach;?>
                                                        <?php endif;?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Date d'arrivée</label>
                                                    <?php global $datearrive?>
                                                    <input type="date" value="<?=$datearrive?>" class="form-control" name="datearrive" id="exampleInputEmail1" required="">
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Email</label>
                                                        <?php global $email?>
                                                        <input type="email" class="form-control" value="<?=$email?>" name="email" id="email" placeholder="Veuillez saisir son email" required="">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->
                                </div></form>
                            <!-- /.box-body -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- Container closed -->
</div>
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