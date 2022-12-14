<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>noName - Projeto Integrado</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->

        <link href="assets/libs/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/jquery-toast/jquery.toast.min.css" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.css" rel="stylesheet" type="text/css" />

    </head>

    <body class="left-side-menu-dark">
        <header>
            <div id="wrapper">
                <!-- Topbar Start -->
                <div class="navbar-custom">
                    <ul class="list-unstyled topnav-menu float-right mb-0">

                        <li class="d-none d-sm-block">
                            <form class="app-search">
                                <div class="app-search-box">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search...">
                                        <div class="input-group-append">
                                            <button class="btn" type="submit">
                                                <i class="fe-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </li>
            
                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle  waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="fe-bell noti-icon"></i>
                               <!-- <span class="badge badge-danger rounded-circle noti-icon-badge">2</span>-->
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="m-0">
                                        <span class="float-right">
                                            <a href="" class="text-dark">
                                                <small style="color: #fff">Clear All</small>
                                            </a>
                                        </span>Notification
                                    </h5>
                                </div>

                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                    View all
                                    <i class="fi-arrow-right"></i>
                                </a>

                            </div>
                        </li>
                    </ul>

                    <!-- LOGO -->
                    <div class="logo-box">
                        <a href="index.php" class="logo text-center">
                            <span class="logo-lg">
                            <!--<img src="assets/images/logo-light.png" alt="" height="18">-->
                                <span class="logo-lg-text-light">no Name</span>
                            </span>
                        </a>
                    </div>

                </div>
                <!-- end Topbar -->

                <!-- ========== Left Sidebar Start ========== -->
                <div class="left-side-menu">

                    <div >

                        <!-- User box -->
                        <div class="user-box text-center">
                            <img src="assets/images/users/user-4.jpg" alt="user-img" title="Mat Helme" class="rounded-circle avatar-md">
                            
                            <a href="javascript: void(0);" class="text dropdown-toggle h5 mt-2 mb-1 d-block">
                            <?php if(isset($_SESSION['login'])){ ?>
                                    <?php echo $_SESSION['nome'].' '.$_SESSION['sobrenome']; ?> 
                            <?php } ?>
                            </a>
                            <?php if(isset($_SESSION['login'])){ ?>
                                <?php if($_SESSION['tipousuario'] == 2){
                                    echo '<p class="text-muted">Aluno</p>';
                                 } else if($_SESSION['tipousuario'] == 3){
                                    echo '<p class="text-muted">Professor</p>';
                                 } else{
                                    echo '<p class="text-muted">Administrador</p>';
                                 }?> 
                            <?php } ?>
                        </div>

                        <!--- Sidemenu -->
                        <div id="sidebar-menu">

                            <ul class="metismenu" id="side-menu">

                                <li class="menu-title"><b>Menu</b></li>

                                <li>
                                    <a href="?pagina=praticas2">
                                        <i class="fe-home"></i>
                                        <span class="badge badge-success badge-pill float-right"></span>
                                        <span> Home </span>
                                    </a>
                                    <a href="?pagina=reservas">
                                        <i class="fe-calendar"></i>
                                        <span class="badge badge-success badge-pill float-right"></span>
                                        <span> Agendamentos</span>
                                    </a>
                                    <a href="?pagina=acompanhamento">
                                        <i class="fe-clipboard"></i>
                                        <span class="badge badge-success badge-pill float-right"></span>
                                        <span> Acompanhamento</span>
                                    </a>
                                    <a href="javascript: void(0);">
                                        <i class="fe-user"></i>
                                        <span class="badge badge-success badge-pill float-right"></span>
                                        <span> Conta </span>
                                    </a>

                                    <a href="login/logout.php">
                                        <i class="fe-log-out"></i>
                                        <span class="badge badge-success badge-pill float-right"></span>
                                        <span> Logout </span>
                                    </a>
                                    
                                </li>
                            </ul>

                        </div>
                        <!-- End Sidebar -->

                        <div class="clearfix"></div>

                    </div>
                    <!-- Sidebar -left -->

                </div>
                <!-- Left Sidebar End -->
            </div>
	    </header>


            
        