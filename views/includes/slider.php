
<aside class="app-sidebar sidebar-scroll">
    <div class="main-sidebar-header active">
        <a class="desktop-logo logo-light active" href="index.html"><img src="<?=DIR?>assets/img/brand/logo.png" class="main-logo" alt="logo"></a>
        <a class="desktop-logo logo-dark active" href="index.html"><img src="<?=DIR?>assets/img/brand/logo-white.png" class="main-logo dark-theme" alt="logo"></a>
        <a class="logo-icon mobile-logo icon-light active" href="index.html"><img src="<?=DIR?>assets/img/brand/favicon.png" class="logo-icon" alt="logo"></a>
        <a class="logo-icon mobile-logo icon-dark active" href="index.html"><img src="<?=DIR?>assets/img/brand/favicon-white.png" class="logo-icon dark-theme" alt="logo"></a>
    </div>
    <div class="main-sidemenu">
        <?php
        $userInfo = \_classes\Personnels::selectPersonne($_SESSION['fitness']['emailUsers']);
        if(isset($userInfo) AND !empty($userInfo)):?>
        <?php foreach ($userInfo as $get):?>
            <div class="app-sidebar__user clearfix">
                <div class="dropdown user-pro-body">
                    <div class="">
                        <img alt="user-img" class="avatar avatar-xl brround" src="<?=DIR?>assets/img/users/<?=ucfirst($get->photoPersonnels);?>"><span class="avatar-status profile-status bg-green"></span>
                    </div>
                    <div class="user-info">
                        <h4 class="font-weight-semibold  mt-2 mb-1"><?=ucfirst($get->prenomPersonnels)." ".strtoupper($get->nomPersonnels)?></h4>
                        <span class="mb-0 text-muted"><?=ucfirst($get->roleUsers);?></span>
                    </div>
                </div>
            </div>
            <?php endforeach;?>
        <?php endif;?>
        <ul class="side-menu ">
            <li><h3>Accueil</h3></li>
            <li class="slide">
                <a class="side-menu__item" href="<?=DIR.'tableau_de_bord'?>"><i class="side-menu__icon ti-home"></i><span class="side-menu__label">Tableau de bord</span><span class="badge badge-primary side-badge">1</span></a>
            </li>
            <li><h3>Gestion du Personnel</h3></li>
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon ti-user"></i><span class="side-menu__label">Employés</span><i class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="<?=DIR.'nouveau_employe'?>">Nouveau Employés</a></li>
                    <li><a class="slide-item" href="<?=DIR.'liste_des_employes'?>">Liste des Employés</a></li>
                    <li><a class="slide-item" href="<?=DIR.'paiment_employe'?>">Paiement des employés</a></li>
                    <li><a class="slide-item" href="<?=DIR.'liste_des_paiments'?>">Liste des Paiements</a></li>
                </ul>
            </li>
            <li><h3>Inscriptions</h3></li>
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon ti-unlink"></i><span class="side-menu__label">Clients</span><i class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="<?=DIR.'verification'?>">Vérification</a></li>
                    <li><a class="slide-item" href="<?=DIR.'nouveau_client'?>">Nouveau Clients</a></li>
                    <li><a class="slide-item" href="<?=DIR.'liste_des_clients'?>">Liste des Clients</a></li>
                    <li><a class="slide-item" href="<?=DIR.'reinscription_clients'?>">Réinscription Clients</a></li>
                    <li><a class="slide-item" href="<?=DIR.'liste_des_reinscriptions'?>">Liste des Réinscrits</a></li>
                    <li><a class="slide-item" href="<?=DIR.'historiques'?>">Historique des paiments</a></li>
                </ul>
            </li>
            <li><h3>Gestion des fournisseurs</h3></li>
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon ti-wallet"></i><span class="side-menu__label">Fournisseurs</span><i class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="<?=DIR.'nouveau_fournisseur'?>">Nouveau Fournisseur</a></li>
                    <li><a class="slide-item" href="<?=DIR.'liste_des_fournisseurs'?>">Liste des Fournisseurs</a></li>
                </ul>
            </li>
            <li><h3>Ventes</h3></li>
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon ti-money"></i><span class="side-menu__label">Vente de Produit</span><i class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="<?=DIR.'categories'?>">Gestion des catégories</a></li>
                    <li><a class="slide-item" href="<?=DIR.'nouveau_produit'?>">Nouveau Produit</a></li>
                    <li><a class="slide-item" href="<?=DIR.'liste_des_produits'?>">Liste des produits</a></li>
                    <li><a class="slide-item" href="<?=DIR.'ventes'?>">Liste des ventes</a></li>
                </ul>
            </li>
        </ul>
    </div>
</aside>
