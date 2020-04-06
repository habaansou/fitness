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
            <div class="left-content">
                <h4 class="content-title mb-2">Bienvenue, M.<?=ucfirst($_SESSION['fitness']['loginUsers']);?></h4>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Tableau de bord</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Analyses &amp; Statistiques</li>
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

        <!-- row -->
        <div class="row row-sm">
            <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                <div class="card overflow-hidden sales-card">
                    <div class="p-3 pt-0">
                        <div class="">
                            <h6 class="mb-1">INSCRIPTION D'AUJOURD'HUI</h6>
                        </div>
                        <div class="pb-0 mt-0">
                            <p class="mb-3 tx-12 text-muted">Montant Récolté</p>
                            <div class="d-flex">
                                <h4 class="tx-22 font-weight-bold mb-1">
                                    <?php
                                    $d = date('Y-m-d');
                                    if(!empty($getMontantDuJour = \_classes\Historiques::getCountHistoriquesDay($d)))
                                    {
                                        foreach ($getMontantDuJour as $item){
                                            if($item->montant!=null){
                                                echo number_format($item->montant,'2','.',',').' GNF';
                                            }else{
                                                echo "0,00 GNF";
                                            }

                                        }
                                    };
                                    ?>
                                </h4>
                                <span class="float-right my-auto ml-auto">
											<i class="fas fa-arrow-circle-up text-success"></i>
											<span class="text-muted"> +427</span>
                                </span>
                            </div>
                            <i class="ion ion-md-basket  sales-icon f-30 text-primary bg-primary-transparent"></i>
                        </div>
                    </div>
                    <span id="compositeline" class="pt-1">5,9,5,6,4,12,18,14,10,15,12,5,8,5,12,5,12,10,16,12</span>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                <div class="card overflow-hidden sales-card">
                    <div class="p-3 pt-0">
                        <div class="">
                            <h6 class="mb-1">TOTAL DES DEPENSES DU JOUR</h6>
                        </div>
                        <div class="pb-0 mt-0">
                            <p class="mb-3 tx-12 text-muted">Information des dépenses</p>
                            <div class="d-flex">
                                <h4 class="tx-22 font-weight-bold mb-1">
                                    <?php
                                    $d = date('Y-m-d');
                                    if(!empty($getMontantDepenseDuJour = \_classes\Depenses::getCountDepenseDay($d)))
                                    {
                                        foreach ($getMontantDepenseDuJour as $item){
                                            if($item->montant!=null){
                                                echo number_format($item->montant,'2','.',',').' GNF';
                                            }else{
                                                echo "0,00 GNF";
                                            }

                                        }
                                    };
                                    ?>
                                </h4>
                                <span class="float-right my-auto ml-auto">
											<i class="fas fa-arrow-circle-down text-danger"></i>
											<span class="text-muted"> -23.09%</span>
										</span>
                            </div>
                            <i class="ion ion-md-wallet sales-icon f-30 text-secondary bg-secondary-transparent"></i>
                        </div>
                    </div>
                    <span id="compositeline2" class="pt-1">3,2,4,6,12,14,8,7,14,16,12,7,8,4,3,2,2,5,6,7</span>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                <div class="card overflow-hidden sales-card">
                    <div class="p-3 pt-0">
                        <div class="">
                            <h6 class="mb-1">TOTALS INSCRIPTIONS</h6>
                        </div>
                        <div class="pb-0 mt-0">
                            <p class="mb-3 tx-12 text-muted">Montant mensuel</p>
                            <div class="d-flex">
                                <h4 class="tx-22 font-weight-bold mb-1">
                                    <?php
                                    $d = date('Y-m-d');
                                    if(!empty($getMontantInscriptionDuJour = \_classes\Historiques::getCountHistoriquesDay($d)))
                                    {
                                        foreach ($getMontantInscriptionDuJour as $item){
                                            if($item->montant!=null){
                                                echo number_format($item->montant,'2','.',',').' GNF';
                                            }else{
                                                echo "0,00 GNF";
                                            }

                                        }
                                    };
                                    ?>
                                </h4>
                                <span class="float-right my-auto ml-auto">
											<i class="fas fa-arrow-circle-up text-success"></i>
											<span class="text-muted"> 52.09%</span>
										</span>
                            </div>
                            <i class="ion ion-md-cash sales-icon f-30 text-info bg-info-transparent"></i>
                        </div>
                    </div>
                    <span id="compositeline3" class="pt-1">5,10,5,20,22,12,15,18,20,15,8,12,22,5,10,12,22,15,16,10</span>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                <div class="card overflow-hidden sales-card">
                    <div class="p-3 pt-0">
                        <div class="">
                            <h6 class="mb-1">TOTALS REINSCRIPTIONS</h6>
                        </div>
                        <div class="pb-0 mt-0">
                            <p class="mb-3 tx-12 text-muted">Information du mois</p>
                            <div class="d-flex">
                                <h4 class="tx-22 font-weight-bold mb-1">
                                    <?php
                                    $d = date('Y-m-d');
                                    if(!empty($getMontantReinscriptionDuJour = \_classes\Historiques::getCountHistoriquesReinscriptionDay($d)))
                                    {
                                        foreach ($getMontantReinscriptionDuJour as $item){
                                            if($item->montant!=null){
                                                echo number_format($item->montant,'2','.',',').' GNF';
                                            }else{
                                                echo "0,00 GNF";
                                            }

                                        }
                                    };
                                    ?>
                                </h4>
                                <span class="float-right my-auto ml-auto">
											<i class="fas fa-arrow-circle-down text-danger"></i>
											<span class="text-muted"> -152.3</span>
										</span>
                            </div>
                            <i class="ion ion-md-cart sales-icon f-30 text-success bg-success-transparent"></i>
                        </div>
                    </div>
                    <span id="compositeline4" class="pt-1">5,9,5,6,4,12,18,14,10,15,12,5,8,5,12,5,12,10,16,12</span>
                </div>
            </div>
        </div>
        <!-- row closed -->
        <!-- row opened -->

        <div class="row row-sm row-deck">
            <div class="col-md-12 col-lg-12 col-xl-4">
                <div class="card stats">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="<?=DIR?>assets/img/svgicons/sales-revenue.svg" class="ht-136 wd-230" alt="">
                        </div>
                        <div class="row mt-0">
                            <div class="col-12">
                                <div class="py-4 d-flex border-bottom">
											<span class="icon border-primary-light bg-primary-transparent mt-1">
												<i class="ion ion-md-pint tx-primary"></i>
											</span>
                                    <div class="ml-3">
                                        <p class="mb-1">SOLDE</p>
                                        <h5 class="mb-0"><?php
                                            if(isset($montant) AND !empty($montant)){
                                            echo  number_format($montant,'2','.',',').' GNF';
                                            }else{
                                                echo "0,0 GNF";
                                            }
                                           ?></h5>
                                    </div>
                                    <div class="ml-auto"><i class="icon-arrow-down-circle tx-danger"></i><span class="text-muted ml-2">2.12 %</span></div>
                                </div>
                                <div class="pt-4 pb-1 d-flex">
											<span class="icon border-secondary-light bg-secondary-transparent mt-1">
												<i class="ion ion-md-cart text-secondary"></i>
											</span>
                                    <div class="ml-3">
                                        <p class="mb-1">Entrées</p>
                                        <h5 class="mb-0">
                                            <?php
                                                if(isset($montantHistorique) AND !empty($montantHistorique)):
                                                    foreach ($montantHistorique as $get){
                                                        if(isset($get->montant) AND !empty($get->montant)){
                                                            echo  number_format($get->montant,'2','.',',').' GNF';
                                                        }else{
                                                            echo "0,0 GNF";
                                                        }
                                                    }
                                                endif;
                                        ?>
                                        </h5>
                                    </div>
                                    <div class="ml-auto"><i class="icon-arrow-up-circle tx-success"></i><span class="text-muted ml-2">3.45 %</span></div>
                                </div>
                                <div class="py-4 d-flex border-bottom">
											<span class="icon border-primary-light bg-primary-transparent mt-1">
												<i class="ion ion-md-wallet tx-primary"></i>
											</span>
                                    <div class="ml-3">
                                        <p class="mb-1">Sortiées</p>
                                        <h5 class="mb-0">
                                            <?php
                                                if(isset($montantDepenses) AND !empty($montantDepenses)):
                                                    foreach ($montantDepenses as $get){
                                                        if(isset($get->montant) AND !empty($get->montant)){
                                                            echo  number_format($get->montant,'2','.',',').' GNF';
                                                        }else{
                                                            echo "0,0 GNF";
                                                        }
                                                    }
                                                endif;
                                            ?>
                                        </h5>
                                    </div>
                                    <div class="ml-auto"><i class="icon-arrow-down-circle tx-danger"></i><span class="text-muted ml-2">2.12 %</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-12 col-xl-8">
                <div class="card card-table-two">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mb-1">Historiques des opérations</h4>
                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                    </div>
                    <span class="tx-12 tx-gray-500 mb-3">Suivez les mouvements des Inscriptions et Réinscription.</span>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered mb-0 text-sm-nowrap text-lg-nowrap text-xl-nowrap">
                            <thead>
                            <tr>
                                <th class="wd-lg-25p">Dates</th>
                                <th class="wd-lg-25p tx-right">Utilisateurs</th>
                                <th class="wd-lg-25p tx-right">Types</th>
                                <th class="wd-lg-25p tx-right">Montants</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if(isset($getHistoriques) AND !empty($getHistoriques)):?>
                            <?php foreach($getHistoriques as $get):?>
                            <tr>
                                <td><?='Du '.date_format(date_create($get->dateInscriptions),'d/m/Y').' au '.date_format(date_create($get->dateExpirations),'d/m/Y')?></td>
                                <td class="tx-right tx-medium tx-inverse"><?=ucfirst($get->prenomClients).' '.ucfirst($get->nomClients)?></td>
                                <td class="tx-right tx-medium tx-inverse"><?php $n = $get->stat; if($n=='1'){echo "<p class='badge badge-primary-transparent'>Inscription</p>";}else{echo "<p class='badge badge-success-transparent'>Réinscription</p>";}?></td>
                                <td class="tx-right tx-medium tx-danger"><?=number_format($get->frais,'2','.',',').' GNF'?></td>
                            </tr>
                            <?php endforeach; ?>
                            <?php endif; ?>
                            </tbody>
                        </table>
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