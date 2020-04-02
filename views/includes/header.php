<div class="main-header sticky side-header nav nav-item">
    <div class="container-fluid">
        <div class="main-header-left ">
            <div class="responsive-logo">
                <a href="<?=DIR.'tableau_de_bord'?>"><img src="<?=DIR?>assets/img/brand/logo.png" class="logo-1" alt="logo"></a>
                <a href="<?=DIR.'tableau_de_bord'?>"><img src="<?=DIR?>assets/img/brand/logo-white.png" class="dark-logo-1" alt="logo"></a>
                <a href="<?=DIR.'tableau_de_bord'?>"><img src="<?=DIR?>assets/img/brand/favicon.png" class="logo-2" alt="logo"></a>
                <a href="<?=DIR.'tableau_de_bord'?>"><img src="<?=DIR?>assets/img/brand/favicon-white.png" class="dark-logo-2" alt="logo"></a>
            </div>
            <div class="app-sidebar__toggle" data-toggle="sidebar">
                <a class="open-toggle" href="#"><i class="header-icon fe fe-align-left" ></i></a>
                <a class="close-toggle" href="#"><i class="header-icons fe fe-x"></i></a>
            </div>
            <div class="main-header-center ml-3 d-sm-none d-md-none d-lg-block">
                <input class="form-control" placeholder="Rechercher..." type="search"> <button class="btn"><i class="fas fa-search d-none d-md-block"></i></button>
            </div>
        </div>
        <div class="main-header-right">
            <div class="nav nav-item  navbar-nav-right ml-auto">
                <div class="nav-link" id="bs-example-navbar-collapse-1">
                    <form class="navbar-form" role="search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-btn">
											<button type="reset" class="btn btn-default">
												<i class="fas fa-times"></i>
											</button>
											<button type="submit" class="btn btn-default nav-link resp-btn">
												<i class="fe fe-search"></i>
											</button>
                            </span>
                        </div>
                    </form>
                </div>
                <div class="dropdown nav-item main-header-message ">
                    <a class="new nav-link" href="#" ><i class="fe fe-mail"></i><span class=" pulse-danger"></span></a>
                    <div class="dropdown-menu">
                        <div class="menu-header-content bg-primary text-left d-flex">
                            <div class="">
                                <h6 class="menu-header-title text-white mb-0">5 Messages</h6>
                            </div>
                            <div class="my-auto ml-auto">
                                <span class="badge badge-pill badge-warning float-right">Marqué comme lu</span>
                            </div>
                        </div>
                        <div class="main-message-list chat-scroll">
                            <a href="#" class="p-3 d-flex border-bottom">
                                <div class="  drop-img  cover-image  " data-image-src="<?=DIR?>assets/img/faces/3.jpg">
                                    <span class="avatar-status bg-teal"></span>
                                </div>

                                <div class="wd-90p">
                                    <div class="d-flex">
                                        <h5 class="mb-1 name">Paul Molive</h5>
                                        <p class="time mb-0 text-right ml-auto float-right">10 min ago</p>
                                    </div>
                                    <p class="mb-0 desc">I'm sorry but i'm not sure how...</p>
                                </div>
                            </a>
                        </div>
                        <div class="text-center dropdown-footer">
                            <a href="text-center">Voir tous</a>
                        </div>
                    </div>
                </div>
                <div class="dropdown nav-item main-header-notification">
                    <a class="new nav-link" href="#"><i class="fe fe-bell"></i><span class=" pulse"></span></a>
                    <div class="dropdown-menu">
                        <div class="menu-header-content bg-primary text-left d-flex">
                            <div class="">
                                <h6 class="menu-header-title text-white mb-0">7 Notifications</h6>
                            </div>
                            <div class="my-auto ml-auto">
                                <span class="badge badge-pill badge-warning float-right">Marqué comme lu</span>
                            </div>
                        </div>
                        <div class="main-notification-list Notification-scroll">
                            <a class="d-flex p-3 border-bottom" href="#">
                                <div class="notifyimg bg-success-transparent">
                                    <i class="la la-shopping-basket text-success"></i>
                                </div>
                                <div class="ml-3">
                                    <h5 class="notification-label mb-1">New Order Received</h5>
                                    <div class="notification-subtext">1 hour ago</div>
                                </div>
                                <div class="ml-auto" >
                                    <i class="las la-angle-right text-right text-muted"></i>
                                </div>
                            </a>
                        </div>
                        <div class="dropdown-footer">
                            <a href="">Voir tous</a>
                        </div>
                    </div>
                </div>
                <div class="nav-item full-screen fullscreen-button">
                    <a class="new nav-link full-screen-link" href="#"><i class="fe fe-maximize-2"></i></a>
                </div>
                <?php
                $userInfo = \_classes\Personnels::selectPersonne($_SESSION['fitness']['emailUsers']);
                if(isset($userInfo) AND !empty($userInfo)):?>
                    <?php foreach ($userInfo as $get):?>
                        <div class="dropdown main-profile-menu nav nav-item nav-link">
                            <a class="profile-user d-flex" href=""><img alt="" src="<?=DIR?>assets/img/users/<?=$get->photoPersonnels;?>">
                                <div class="p-text">
                                    <span class="p-name font-weight-bold"><?=$get->prenomPersonnels.' '.$get->nomPersonnels;?></span>
                                    <small class="p-sub-text"><?=$get->nameFonctions;?></small>
                                </div>
                            </a>
                            <div class="dropdown-menu">
                                <div class="main-header-profile header-img">
                                    <div class="main-img-user"><img alt="" src="<?=DIR?>assets/img/users/<?=$get->photoPersonnels;?>"></div>
                                    <h6><?=$get->prenomPersonnels.' '.$get->nomPersonnels;?></h6>
                                    <span><?=$get->nameFonctions;?></span>
                                </div>
                                <a class="dropdown-item" href="<?=DIR.'mon_compte'?>"><i class="far fe fe-user"></i> Mon Compte</a>
                                <a class="dropdown-item" href="<?=DIR.'mes_historiques'?>"><i class="far fe fe-clock"></i> Historique</a>
                                <a class="dropdown-item" href="<?=DIR.'veroullage'?>"><i class="fas fe fe-log-in"></i> Véroullage</a>
                                <a class="dropdown-item" href="<?=DIR.'deconnexion'?>"><i class="fas fe fe-log-out"></i> Déconnexion</a>
                            </div>
                        </div>
                        <div class="dropdown main-header-message right-toggle">
                            <a class="nav-link pr-0" data-toggle="sidebar-right" data-target=".sidebar-right">
                                <i class="ion ion-md-menu tx-20 bg-transparent"></i>
                            </a>
                        </div>
                    <?php endforeach;?>
                <?php endif;?>
            </div>
        </div>
    </div>
</div>