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
                        <button type="button" class="btn btn-primary">14 Aug 2019</button>
                        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" id="dropdownMenuDate" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate" data-x-placement="bottom-end">
                            <a class="dropdown-item" href="#">2015</a>
                            <a class="dropdown-item" href="#">2016</a>
                            <a class="dropdown-item" href="#">2017</a>
                            <a class="dropdown-item" href="#">2018</a>
                        </div>
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
                            <h6 class="mb-1">TODAY ORDERS</h6>
                        </div>
                        <div class="pb-0 mt-0">
                            <p class="mb-3 tx-12 text-muted">Compared to last week</p>
                            <div class="d-flex">
                                <h4 class="tx-22 font-weight-bold mb-1">$5,74.12</h4>
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
                            <h6 class="mb-1">TODAY EARNINGS</h6>
                        </div>
                        <div class="pb-0 mt-0">
                            <p class="mb-3 tx-12 text-muted">Compared to last week</p>
                            <div class="d-flex">
                                <h4 class="tx-22 font-weight-bold mb-1">$1,230.17</h4>
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
                            <h6 class="mb-1">TOTAL EARNINGS</h6>
                        </div>
                        <div class="pb-0 mt-0">
                            <p class="mb-3 tx-12 text-muted">Compared to last week</p>
                            <div class="d-flex">
                                <h4 class="tx-22 font-weight-bold mb-1">$7,125.70</h4>
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
                            <h6 class="mb-1">PRODUCT SOLD</h6>
                        </div>
                        <div class="pb-0 mt-0">
                            <p class="mb-3 tx-12 text-muted">Compared to last week</p>
                            <div class="d-flex">
                                <h4 class="tx-22 font-weight-bold mb-1">$4,820.50</h4>
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
        <div class="row row-sm">
            <div class="col-md-12 col-xl-5">
                <div class="card">
                    <div class="card-header bg-transparent pd-b-0 pd-t-20 bd-b-0">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title mg-b-10">Sessions by Countries</h4>
                            <i class="mdi mdi-dots-horizontal text-gray"></i>
                        </div>
                        <p class="tx-12 tx-gray-500 mb-0">session by country mean that the user is from the stated country or that the session is originating in the stated country. <a href="">Learn more</a></p>
                    </div>
                    <div class="card-body">
                        <ul class="sales-session mb-0">
                            <li>
                                <div class="d-flex justify-content-between">
                                    <h6>1. United States </h6>
                                    <p class="font-weight-semibold mb-2">$273.12 <span class="text-muted font-weight-normal">(2.17%)</span></p>
                                </div>
                                <div class="progress  ht-5">
                                    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" class="progress-bar wd-60p bg-primary" role="progressbar"></div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex justify-content-between">
                                    <h6>2. United kingdom</h6>
                                    <p class="font-weight-semibold mb-2">$423.10 <span class="text-muted font-weight-normal">(12.43%)</span></p>
                                </div>
                                <div class="progress  ht-5">
                                    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" class="progress-bar wd-70p bg-info" role="progressbar"></div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex justify-content-between">
                                    <h6>3. Australia</h6>
                                    <p class="font-weight-semibold mb-2">$547.18 <span class="text-muted font-weight-normal">(3.14%)</span></p>
                                </div>
                                <div class="progress  ht-5">
                                    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" class="progress-bar wd-60p bg-danger" role="progressbar"></div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex justify-content-between">
                                    <h6>4. Canada</h6>
                                    <p class="font-weight-semibold mb-2">$728.32 <span class="text-muted font-weight-normal">(7.23%)</span></p>
                                </div>
                                <div class="progress  ht-5">
                                    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" class="progress-bar wd-50p bg-warning" role="progressbar"></div>
                                </div>
                            </li>
                            <li class="mb-0 pb-1">
                                <div class="d-flex justify-content-between">
                                    <h6>5. Russia</h6>
                                    <p class="font-weight-semibold mb-2">$843.19 <span class="text-muted font-weight-normal">(1.83%)</span></p>
                                </div>
                                <div class="progress mb-0 ht-5">
                                    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" class="progress-bar wd-40p bg-success" role="progressbar"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-xl-7 col-lg-12 col-md-12">
                <div class="card sales-report-country">
                    <div class="card-header bg-transparent pd-b-0 pd-t-20 bd-b-0">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title mg-b-10">Sales Performance by Country</h4>
                            <i class="mdi mdi-dots-horizontal text-gray"></i>
                        </div>
                        <p class="tx-12 tx-gray-500 mb-0">session by country mean that the user is from the stated country or that the session is originating in the stated country. <a href="">Learn more</a></p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-3 col-lg-4">
                                <div class="pb-xl-2 pl-0">
                                    <h3 class="font-weight-bold mb-0">138,574</h3>
                                    <p class="text-muted">+25 since last year</p>
                                </div>
                                <div class="row">
                                    <div class="pb-3 col-sm-12 col-xl-12 ">
                                        <p class="mb-1">Activations</p>
                                        <h3 class="tx-22 font-weight-bold mb-1 text-primary ">135,476</h3>
                                        <p class="text-muted mb-0 tx-13">Last Month</p>
                                    </div>
                                    <div class="pt-xl-3 pb-md-4 pb-xl-0 col-sm-6 col-xl-12 sales-activity">
                                        <p class="mb-1">Net Revenue</p>
                                        <h3 class="tx-22 font-weight-bold mb-1 text-info">245,382</h3>
                                        <p class="text-muted pb-0 mb-0 tx-13">Last Month</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-8">
                                <div class="ht-250  wd-100p " id="vmap"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row closed -->

        <!-- row opened -->
        <div class="row row-sm">
            <div class="col-xl-12 ">
                <div class="card total-revenue">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title mg-b-10">THIS YEAR'S TOTAL REVENUE</h4>
                            <i class="mdi mdi-dots-horizontal text-gray"></i>
                        </div>
                        <div class="row">
                            <div class="col-xl-4 col-md-12 total-revenue">
                                <p class="tx-12 tx-gray-500 mb-4">Total revenue in economics refers to the total receipts from sales of a given quantity of goods or services. <a href="">Learn more</a></p>
                                <div class="aligner-wrapper">
                                    <canvas id="chart-donut" class=""></canvas>
                                    <div class="wrapper d-flex flex-column justify-content-center absolute absolute-center">
                                        <h3 class="text-center font-weight-medium mb-0">54%</h3>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center mt-4 mb-0 ">
                                    <div class="wrapper d-flex flex-column align-items-center mr-4 pr-4">
                                        <p class="text-muted mb-0 font-weight-normal d-flex"><span class="legend bg-primary"></span>Total Visits</p>
                                        <h4 class="mb-1 font-weight-medium">3642</h4>
                                        <span class=" tx-12 text-success"> <strong>13%</strong><i class="mdi mdi-arrow-up"></i> <span class="text-muted tx-12 ml-0 mt-1">increased</span></span>
                                    </div>
                                    <div class="wrapper d-flex flex-column align-items-center">
                                        <p class="text-muted mb-0 font-weight-normal d-flex"><span class="legend bg-danger"></span>Total Leads</p>
                                        <h4 class="mb-0 font-weight-medium">1688</h4>
                                        <span class=" tx-12 text-danger"> <strong>-5%</strong><i class="mdi mdi-arrow-down"></i> <span class="text-muted tx-12 ml-0 mt-1">decrease</span></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-8 col-md-12 md-t-20 mg-md-t-0">
                                <div class="row  mb-0">
                                    <div class="col">
                                        <div class="media">
                                            <div class="media-body">
                                                <label class="mb-1">Online Revenue</label>
                                                <h4 class="tx-22 font-weight-bold mb-1 ">3,375</h4><span><strong>10.5%</strong><span class="text-muted tx-12 ml-1"> of 20,000 Total</span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="media">
                                            <div class="media-body">
                                                <label class="mb-1">Offline revenue</label>
                                                <h4 class="tx-22 font-weight-bold mb-1">16,625</h4><span><strong>89.5%</strong><span class="text-muted tx-12 ml-1"> of 20,000 Total</span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="media">
                                            <div class="media-body">
                                                <label class="mb-1">Net Revenue</label>
                                                <h4 class="tx-22 font-weight-bold mb-1"><span>$</span>20,832</h4><span><strong>3.4%</strong><span class="text-muted tx-12 ml-1">  of Sales Avg.</span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sales-flot pb-3">
                                    <div class="chart-legend mt-4">
                                        <div>
                                            <span class="bg-indigo"></span> Online Revenue
                                        </div>
                                        <div>
                                            <span class="bg-danger"></span>Offline revenue
                                        </div>
                                    </div>
                                    <div class="flot-chart  ht-230 wd-100p" id="flotChart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row close -->

        <!-- row opened -->
        <div class="row row-sm row-deck">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div id="carousel-indicator" class="carousel slide dashboard-carousel" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="d-flex flex-column">
                                        <div class="">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h4 class="card-title mb-2">Product Sale</h4>
                                                <div class="btn-group border-0">
                                                    <button type="button" class="btn btn-icons btn-square btn-inverse-info mr-2">
                                                        <i class="mdi mdi-chevron-left"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-icons btn-square btn-inverse-info">
                                                        <i class="mdi mdi-chevron-right"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <h4 class="font-weight-bold tx-22 mb-1"><span>$</span>645,32.70</h4><label><span class="text-success">12.5% </span> higher vs previous month</label>
                                            <div class="row mg-t-10">
                                                <div class="col-6">
                                                    <h4 class="font-weight-bold">1,500</h4><span>Total Expensive</span>
                                                    <div class="progress mg-t-5 ht-5 mb-1">
                                                        <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" class="progress-bar wd-70p" role="progressbar"></div>
                                                    </div><small>80% of your goals</small>
                                                </div>
                                                <div class="col-6">
                                                    <h4 class="font-weight-bold">991</h4><span>New Leads</span>
                                                    <div class="progress mg-t-5 ht-5 mb-1">
                                                        <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" class="progress-bar wd-50p bg-teal" role="progressbar"></div>
                                                    </div><small>50% of your goals</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item carousel slide dashboard-carousel" data-ride="carousel">
                                    <div class="d-flex flex-column">
                                        <div class="">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h4 class="card-title mb-2">New Orders</h4>
                                                <div class="btn-group border-0">
                                                    <button type="button" class="btn btn-icons btn-square  btn-light btn-inverse-info mr-2">
                                                        <i class="mdi mdi-chevron-left"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-icons btn-square btn-inverse-info">
                                                        <i class="mdi mdi-chevron-right"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <h4 class="font-weight-bold tx-22 mb-1"><span>$</span>23,342</h4><label><span class="text-danger">12.3% </span>higher vs previous month</label>
                                            <div class="row mg-t-10">
                                                <div class="col-6">
                                                    <h4 class="font-weight-bold">1,500</h4><span>Total Expensive</span>
                                                    <div class="progress mg-t-5 ht-5 mb-1">
                                                        <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" class="progress-bar wd-80p bg-pink" role="progressbar"></div>
                                                    </div><small>63% of your goals</small>
                                                </div>
                                                <div class="col-6">
                                                    <h4 class="font-weight-bold">991</h4><span>New Leads</span>
                                                    <div class="progress mg-t-5 ht-5 mb-1">
                                                        <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" class="progress-bar wd-60p bg-warning" role="progressbar"></div>
                                                    </div><small>23% of your goals</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carousel-indicator" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carousel-indicator" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title mg-b-10">Earnings</h4>
                            <i class="mdi mdi-dots-horizontal text-gray"></i>
                        </div>
                        <div class="sales-dash-header">
                            <h3 class="font-weight-bold mb-1">59.5% <span class="text-success h6">0.20%<i class="mdi mdi-arrow-up"></i></span></h3>
                            <small class="main-content-text">Total Earnings Of the Month</small>
                        </div>
                        <div class="sales-bar-chart">
                            <canvas id="chartBar1" class=""></canvas>
                        </div>
                    </div>
                </div>
            </div>

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
												<i class="ion ion-md-wallet tx-primary"></i>
											</span>
                                    <div class="ml-3">
                                        <p class="mb-1">My Balance</p>
                                        <h5 class="mb-0">$4357.00</h5>
                                    </div>
                                    <div class="ml-auto"><i class="icon-arrow-down-circle tx-danger"></i><span class="text-muted ml-2">2.12 %</span></div>
                                </div>
                                <div class="pt-4 pb-1 d-flex">
											<span class="icon border-secondary-light bg-secondary-transparent mt-1">
												<i class="ion ion-md-cart text-secondary"></i>
											</span>
                                    <div class="ml-3">
                                        <p class="mb-1">Sales Revenue</p>
                                        <h5 class="mb-0">25,582.00</h5>
                                    </div>
                                    <div class="ml-auto"><i class="icon-arrow-up-circle tx-success"></i><span class="text-muted ml-2">3.45 %</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-12 col-xl-8">
                <div class="card card-table-two">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mb-1">Your Most Recent Earnings</h4>
                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                    </div>
                    <span class="tx-12 tx-gray-500 mb-3">This is your most recent earnings for today's date.</span>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered mb-0 text-sm-nowrap text-lg-nowrap text-xl-nowrap">
                            <thead>
                            <tr>
                                <th class="wd-lg-25p">Date</th>
                                <th class="wd-lg-25p tx-right">Sales Count</th>
                                <th class="wd-lg-25p tx-right">Earnings</th>
                                <th class="wd-lg-25p tx-right">Tax Witheld</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>05 Dec 2019</td>
                                <td class="tx-right tx-medium tx-inverse">34</td>
                                <td class="tx-right tx-medium tx-inverse">$658.20</td>
                                <td class="tx-right tx-medium tx-danger">-$45.10</td>
                            </tr>
                            <tr>
                                <td>06 Dec 2019</td>
                                <td class="tx-right tx-medium tx-inverse">26</td>
                                <td class="tx-right tx-medium tx-inverse">$453.25</td>
                                <td class="tx-right tx-medium tx-danger">-$15.02</td>
                            </tr>
                            <tr>
                                <td>07 Dec 2019</td>
                                <td class="tx-right tx-medium tx-inverse">34</td>
                                <td class="tx-right tx-medium tx-inverse">$653.12</td>
                                <td class="tx-right tx-medium tx-danger">-$13.45</td>
                            </tr>
                            <tr>
                                <td>08 Dec 2019</td>
                                <td class="tx-right tx-medium tx-inverse">45</td>
                                <td class="tx-right tx-medium tx-inverse">$546.47</td>
                                <td class="tx-right tx-medium tx-danger">-$24.22</td>
                            </tr>
                            <tr>
                                <td>09 Dec 2019</td>
                                <td class="tx-right tx-medium tx-inverse">31</td>
                                <td class="tx-right tx-medium tx-inverse">$425.72</td>
                                <td class="tx-right tx-medium tx-danger">-$25.01</td>
                            </tr>
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