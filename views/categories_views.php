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
                    <h4 class="content-title mb-0 my-auto"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Gestion des catégories</font></font></h4>
                </div>
            </div>
            <div class="d-flex my-auto breadcrumb-right">
                <button class="btn btn-outline-primary mr-3">
                    <span class="icon-label"><i class="typcn typcn-edit"></i></span> <span class="btn-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Email</font></font></span></button> <button class="btn btn-outline-danger mr-3"><span class="icon-label"><i class="typcn typcn-printer"></i></span> <span class="btn-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Impression</font></font></span></button> <button class="btn btn-success mr-3"><span class="icon-label"><i class="typcn typcn-download"></i></span> <span class="btn-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Exportation</font></font></span></button>
            </div>
        </div>
        <!-- breadcrumb -->

        <!-- row opened -->
        <div class="row row-sm">
            <div class="col-sm-12">
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
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Nouvelle Catégorie</h5>
                        <form action="" method="post">
                            <div class="form-group">
                                <label class="mg-b-10">Libélle</label>
                                <?php global  $libelle;?>
                                <input class="form-control" required="" value="<?=$libelle;?>" type="libelle" placeholder="Veuillez saisir le libélle" name="libelle">
                            </div>
                            <div class="row row-xs wd-xl-80p">
                                <div class="col-sm-6 col-md-3">
                                    <button name="Envoyer" value="Envoyer" class="btn btn-indigo btn-with-icon btn-block"><i class="typcn typcn-refresh"></i> Valider</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Liste des catégories</h5>
                        <p class="card-text">Ceci est la gestion de catégories avec possibilité d'ajouter, modifier et supprimer.</p>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table text-md-nowrap" id="example1">
                                    <thead>
                                    <tr>
                                        <th class="wd-15p border-bottom-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Id</font></font></th>
                                        <th class="wd-15p border-bottom-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Catégories</font></font></th>
                                        <th class="wd-15p border-bottom-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Date Création</font></font></th>
                                        <th class="wd-15p border-bottom-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Actions</font></font></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(isset($getAllCategories) AND !empty($getAllCategories)):?>
                                        <?php foreach($getAllCategories as $get):?>
                                            <tr>
                                                <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?=$get->idCategories?></font></font></td>
                                                <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?=$get->nameCategories?></font></font></td>
                                                <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?=date_format(date_create($get->dateCategories),'d/m/Y')?></font></font></td>
                                                <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                            <div class="btn-icon-list wd-xl-80p">
                                                                <a href="<?=DIR.'categories/'.$get->idCategories?>"><button class="btn btn-indigo btn-icon"><i class="typcn typcn-edit"></i></button></a>
                                                                <a  data-effect="effect-rotate-bottom" data-toggle="modal" data-href="<?=DIR.'categories/'.$get->idCategories?>" href="#modaldemo1" id="modale">
                                                                    <button class="btn btn-danger btn-icon"><i class="typcn typcn-trash"></i>
                                                                    </button>
                                                                </a>
                                                            </div>
                                                        </font>
                                                    </font>
                                                </td>
                                            </tr>
                                        <?php endforeach;?>
                                    <?php endif;?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row closed -->
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