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
                    <h4 class="content-title mb-0 my-auto">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Mes historiques</font>
                        </font>
                    </h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">
                </div>
            </div>
            <div class="d-flex my-auto breadcrumb-right">
                <button class="btn btn-outline-primary mr-3">
                    <span class="icon-label"><i class="typcn typcn-edit"></i></span> <span class="btn-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Email</font></font></span></button> <button class="btn btn-outline-danger mr-3"><span class="icon-label"><i class="typcn typcn-printer"></i></span> <span class="btn-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Impression</font></font></span></button> <button class="btn btn-success mr-3"><span class="icon-label"><i class="typcn typcn-download"></i></span> <span class="btn-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Exportation</font></font></span></button>
            </div>
        </div>
        <!-- breadcrumb -->
        <!-- row opened -->
        <div class="row">
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
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title mg-b-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">HISTORIQUES DES INSCRIPTIONS ET REINSCRIPTIONS</font></font></h4>
                            <i class="mdi mdi-dots-horizontal text-gray"></i>
                        </div>
                        <p class="tx-12 tx-gray-500 mb-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ceci est la liste détailles des clients avec les options modifier et supprimer. </font></font><a href="#"><font style="vertical-align: inherit;"></font></a></p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table text-md-nowrap" id="example1">
                                <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Matricules</font></font></th>
                                    <th class="wd-15p border-bottom-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Prénoms</font></font></th>
                                    <th class="wd-15p border-bottom-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nom de famille</font></font></th>
                                    <th class="wd-15p border-bottom-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dates d'inscription</font></font></th>
                                    <th class="wd-15p border-bottom-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dates de fin</font></font></th>
                                    <th class="wd-10p border-bottom-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Frais</font></font></th>
                                    <th class="wd-25p border-bottom-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Notifications</font></font></th>
                                    <?php if(isset($_SESSION['fitness']['roleUsers']) AND !empty($_SESSION['fitness']['roleUsers']) AND $_SESSION['fitness']['roleUsers']=="Administrateur"):?>
                                        <th class="wd-25p border-bottom-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Actions</font></font></th>
                                    <?php endif;?>
                                </tr>
                                </thead>
                                <tbody>
                                <?php if(isset($getClient) AND !empty($getClient)):?>
                                    <?php foreach($getClient as $get):?>
                                        <tr>
                                            <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?=$get->matriculeClients?></font></font></td>
                                            <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?=$get->prenomClients?></font></font></td>
                                            <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?=$get->nomClients?></font></font></td>
                                            <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?=date_format(date_create($get->dateIncrisClients),'d/m/Y')?></font></font></td>
                                            <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?=date_format(date_create($get->dateExpirations),'d/m/Y')?></font></font></td>
                                            <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?=number_format($get->fraisClients,'2','.',',').' GNF'?></font></font></td>
                                            <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                        <h3 class="badge badge-primary-transparent">
                                                            <?php
                                                            if($get->stat=="1"){echo "Inscription";};
                                                            if($get->stat=="2"){echo "Réinscription";};
                                                            ?>
                                                        </h3>
                                                    </font>
                                                </font>
                                            </td>
                                            <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                        <div class="btn-icon-list wd-xl-80p">
                                                            <a href="<?=DIR.'plugins/pdf/recu_inscription.php?id='.$get->idInscriptions?>"><button class="btn btn-success btn-icon"><i class="typcn typcn-printer"></i></button></a>
                                                            <?php if(isset($_SESSION['fitness']['roleUsers']) AND !empty($_SESSION['fitness']['roleUsers']) AND $_SESSION['fitness']['roleUsers']=="Administrateur"):?>
                                                                <a href="<?=DIR.'modification_client/'.$get->idClients?>"><button class="btn btn-indigo btn-icon"><i class="typcn typcn-edit"></i></button></a>
                                                                <a  data-effect="effect-rotate-bottom" data-toggle="modal" data-href="<?=DIR.'liste_des_clients/'.$get->idClients?>" href="#modaldemo1" id="modale">
                                                                    <button class="btn btn-danger btn-icon"><i class="typcn typcn-trash"></i>
                                                                    </button>
                                                                </a>
                                                            <?php endif;?>
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
            <!--/div-->
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