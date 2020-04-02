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
                        <h4 class="content-title mb-0 my-auto"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Vérification d'abonnement</font></font></h4>
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
                                <h6 class="card-title mb-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Paiement de l'employé</font></font></h6>
                                <p class="text-muted card-sub-title">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Veuillez saisir correctement les données des employés.
                                        </font>
                                    </font>
                                </p>
                            </div>
                            <form action="" method="post">
                                <div class="row">
                                    <div class="col-lg-6 col-xl-6 col-md-6">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label class="mg-b-10">Matricule</label>
                                                <select class="form-control" name="matricule" id="matriculeselect">
                                                    <?php $getPersonnels = \_classes\Personnels::getAllPersonnels();
                                                    if(isset($getPersonnels) AND !empty($getPersonnels)):?>
                                                        <option value="0">Veuillez séléctionner le numéro matricule</option>
                                                        <?php foreach ($getPersonnels as $get):?>
                                                            <option value="<?=$get->idPersonnels?>"><?='FITNESS-'.$get->idPersonnels?></option>
                                                        <?php endforeach;?>
                                                    <?php endif;?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label class="mg-b-10">Nom</label>
                                                <input type="text" readonly class="form-control" id="nom" name="nom" required="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label class="mg-b-10">Prénom</label>
                                                <input type="text" readonly class="form-control" name="prenom" id="prenom" required="">
                                            </div>
                                        </div>
                                        <div class="row row-xs wd-xl-80p">
                                            <div class="col-sm-6 col-md-3">
                                                <button name="Payer" value="Payer" class="btn btn-indigo btn-with-icon btn-block"><i class="typcn typcn-refresh"></i> Payer</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-6 col-md-6">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label class="mg-b-10">Salaire de base</label>
                                                <input type="text" readonly class="form-control" name="salaire" id="salaire" required="">
                                                <input type="text" readonly class="form-control"  name="salaire" id="salaire2" required="" hidden>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label class="mg-b-10">Fonction</label>
                                                <input type="text" readonly class="form-control" name="fonction" id="fonction" required="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label class="mg-b-10">Date Paiement</label>
                                                <input type="date" readonly class="form-control" name="date" id="date" required="">
                                            </div>
                                        </div>
                                    </div>
                            </form>
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