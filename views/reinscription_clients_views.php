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
                    <h4 class="content-title mb-0 my-auto"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Gestion des Clients</font></font></h4>
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
                            <h6 class="card-title mb-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Recherche du Client</font></font></h6>
                            <p class="text-muted card-sub-title">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Veuillez saisir correctement les données du client.
                                    </font>
                                </font>
                            </p>
                        </div>
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-lg-6 col-xl-6 col-md-6">
                                    <div class="form-group">
                                        <label class="mg-b-10">Matricule</label>
                                        <input class="form-control" required="" value="" type="text" placeholder="Numéro matricule" name="matricule">
                                    </div>
                                    <div class="row row-xs wd-xl-80p">
                                        <div class="col-sm-6 col-md-3">
                                            <button name="Recherche" value="Recherche" class="btn btn-indigo btn-with-icon btn-block"><i class="typcn typcn-refresh"></i> Rechercher</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <?php if(isset($getRecherche) AND !empty($getRecherche)):?>
                    <?php foreach ($getRecherche as $get):?>
                        <div class="card">
                            <div class="card-body">
                                <div>
                                    <h6 class="card-title mb-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nouveau Client</font></font></h6>
                                    <p class="text-muted card-sub-title">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Veuillez saisir correctement les données du client.
                                            </font>
                                        </font>
                                    </p>
                                </div>
                                <form action="" method="post">
                                    <div class="row">
                                        <div class="col-lg-6 col-xl-6 col-md-6">
                                            <div class="form-group">
                                                <label class="mg-b-10">Matricule</label>
                                                <input class="form-control" required="" readonly value="<?=$get->matriculeClients?>" type="text" placeholder="Numéro matricule" name="matricule">
                                            </div>
                                            <div class="form-group">
                                                <label class="mg-b-10">Nom</label>
                                                <?php global $nom?>
                                                <input class="form-control" required="" readonly value="<?=$get->nomClients?>" type="text" placeholder="Veuillez saisir le nom" name="nom">
                                            </div>
                                            <div class="form-group">
                                                <label class="mg-b-10">Prénom</label>
                                                <?php global $prenom?>
                                                <input class="form-control" required="" readonly value="<?=$get->prenomClients?>" type="text" placeholder="Veuillez saisir le prénom" name="prenom">
                                            </div>
                                            <div class="form-group">
                                                <label class="mg-b-10">Date de Naissance</label>
                                                <?php global $datenaissance?>
                                                <input class="form-control" required="" type="date" readonly value="<?=$get->dateNaissClients?>" placeholder="Veillez séléctionner la date de naissance" name="datenaissance">
                                            </div>
                                            <div class="form-group">
                                                <label class="mg-b-10">Téléphone</label>
                                                <?php global $telephone?>
                                                <input class="form-control" required="" readonly value="<?=$get->telephoneClients?>" type="number" placeholder="Veuillez saisir le numéro" name="telephone">
                                            </div>
                                            <div class="row row-xs wd-xl-80p">
                                                <div class="col-sm-6 col-md-3">
                                                    <button name="Enregistrer" value="Enregistrer" class="btn btn-indigo btn-with-icon btn-block"><i class="typcn typcn-input-checked"></i> Enregistrer</button>
                                                </div>
                                                <div class="col-sm-6 col-md-3 mg-t-10 mg-sm-t-0">
                                                    <button class="btn btn-primary btn-with-icon btn-block"><i class="typcn typcn-arrow-back-outline"></i> Annuller</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-xl-6 col-md-6">
                                            <div class="form-group">
                                                <label class="mg-b-10">CIN</label>
                                                <?php global $cin?>
                                                <input class="form-control" required="" readonly value="<?=$get->cinClients?>"  type="text" placeholder="Veuillez saisir le numéro de la carte nationnal" name="cin">
                                            </div>
                                            <div class="form-group">
                                                <label class="mg-b-10">Lieu de Naissance</label>
                                                <?php global $lieu?>
                                                <input class="form-control" required="" readonly value="<?=$get->lieuClients?>" type="text" placeholder="Veuillez saisir le lieu de naissance" name="lieu">
                                            </div>
                                            <div class="form-group">
                                                <label class="mg-b-10">Email</label>
                                                <?php global $email?>
                                                <input class="form-control" required="" readonly value="<?=$get->emailClients?>" type="text" placeholder="Veuillez sairir l'adresse email" name="email">
                                            </div>
                                            <div class="form-group">
                                                <label class="mg-b-10">Sport</label>
                                                <select class="form-control" name="sport" id="">
                                                    <option value="">Veuillez séléctionner le type de sport</option>
                                                    <option value="Aerobie">Aerobie</option>
                                                    <option value="Yoga">Yoga</option>
                                                    <option value="Zumba">Zumba</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="mg-b-10">Frais d'inscription</label>
                                                <?php global $frais?>
                                                <input class="form-control" value="<?=$frais?>" required="" type="text" placeholder="Veuillez saisir le frais" name="frais">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    <?php endforeach;?>
                <?php endif;?>
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