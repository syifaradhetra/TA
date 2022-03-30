<?php session_start(); ?>
<!doctype html>
<html lang="en">

<head>
    <title>Museum Trinil</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendor/linearicons/style.css">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/main.css">
    <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
    <link rel="stylesheet" href="css/demo.css">
    
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <!-- ICONS -->
    <!-- <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png"> -->
    
    <!-- <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png"> -->
   
    
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="scripts/klorofil-common.js"></script>

</head>

<body>

    <!-- WRAPPER -->
    <div id="wrapper">
        <!-- NAVBAR -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="brand"><h3>MUSEUM TRINIL</h3>
            </div>
            <div class="container-fluid">
                <div class="navbar-btn">
                    <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
                </div>
                <div id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="" class="icon-menu"  aria-expanded="true">
                                <i class="lnr lnr-alarm"></i>
                                <span class="badge bg-danger"></span>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="../img/akun.jpg" class="img-circle" alt="Avatar"> <span></span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#" data-toggle="modal" data-target="#modal_logout"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- END NAVBAR -->
        <!-- LEFT SIDEBAR -->
        <div id="sidebar-nav" class="sidebar">
            <div class="sidebar-scroll">
                <nav>
                    <ul class="nav putih">
                        <li><a href="?page=dashboard" class=""><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
                        <li><a href="?page=profil" class=""><i class="lnr lnr-users"></i> <span>Profil</span></a></li>
                        <li><a href="?page=datafosil" class=""><i class="lnr lnr-tag"></i> <span>Data Fosil</span></a></li>
                        <li><a href="?page=datafasilitas" class=""><i class="lnr lnr-tag"></i> <span>Data Fasilitas</span></a></li>
                        <li><a href="?page=datatiket" class=""><i class="lnr lnr-tag"></i> <span>Data Tiket</span></a></li>
                        <li><a href="?page=datatabungan" class=""><i class="lnr lnr-tag"></i> <span>Data Bank</span></a></li>
                        <li><a href="?page=datapemesan" class=""><i class="lnr lnr-tag"></i> <span>Data Pemesan</span></a></li>
                        <li><a href="?page=databelitiket" class=""><i class="lnr lnr-tag"></i> <span>Data Tiket Pembelian</span></a></li>
                        <li><a href="?page=user" class=""><i class="lnr lnr-users"></i> <span>Pengaturan User</span></a></li>
                       
                    </ul>
                </nav>
            </div>
        </div>
        <!-- END LEFT SIDEBAR -->
        <!-- MAIN -->
        <div class="main">
            <!-- MAIN CONTENT -->
            <?php
            if(@$_GET["page"] == 'dashboard' || @$_GET["page"] == '') {
                include "dashboard.php";
            }else if(@$_GET["page"] == 'profil') {
                include "profil.php";
            }else if(@$_GET["page"] == 'datafosil') {
                include "data_fosil.php";
            }else if(@$_GET["page"] == 'datafasilitas') {
                include "data_fasilitas.php";
            }else if(@$_GET["page"] == 'datatiket') {
                include "data_tiket.php";
            }else if(@$_GET["page"] == 'datatabungan') {
                include "data_tabungan.php";
            }else if(@$_GET["page"] == 'datapemesan') {
                include "data_pemesan.php";
            }else if(@$_GET["page"] == 'user') {
                include "user.php";
            }else if(@$_GET["page"] == 'tambahfosil') {
                include "tambah_fosil.php";
            }else if(@$_GET["page"] == 'hapusfosil') {
                include "hapus_fosil.php";
            }else if(@$_GET["page"] == 'editfosil') {
                include "edit_fosil.php";
            }else if(@$_GET["page"] == 'tambahtabungan') {
                include "tambah_tabungan.php";
            }else if(@$_GET["page"] == 'hapustabungan') {
                include "hapus_tabungan.php";
            }else if(@$_GET["page"] == 'edittabungan') {
                include "edit_tabungan.php";
            }else if(@$_GET["page"] == 'tambahfasilitas') {
                include "tambah_fasilitas.php";
            }else if(@$_GET["page"] == 'hapusfasilitas') {
                include "hapus_fasilitas.php";
            }else if(@$_GET["page"] == 'editfasilitas') {
                include "edit_fasilitas.php";
            }else if(@$_GET["page"] == 'edittiket') {
                include "edit_tiket.php";
            }else if(@$_GET["page"] == 'tambahtiket') {
                include "tambah_tiket.php";
            }else if(@$_GET["page"] == 'hapustiket') {
                include "hapus_tiket.php";
            }else if(@$_GET["page"] == 'logout') {
                include "logout.php";
            }else if(@$_GET["page"] == 'reservasi') {
                include "reservasi.php";
            }else if(@$_GET["page"] == 'tambahuser') {
                include "tambah_user.php";
            }else if(@$_GET["page"] == 'edituser') {
                include "edit_user.php";
            }else if(@$_GET["page"] == 'hapususer') {
                include "hapus_user.php";
            }else if(@$_GET["page"] == 'databelitiket') {
                include "data_beli_tiket.php";
            }
            ?>
            <!-- END MAIN CONTENT -->
        </div>
        <!-- END MAIN -->
        <div class="clearfix"></div>
        <footer>
            <div class="container-fluid">
                <p class="copyright">&copy; 2022 <a href="https://www.themeineed.com" target="_blank">Admin I </a>Museum Trinil.</p>
            </div>
        </footer>
    </div>
    <!-- END WRAPPER -->
    <div id="modal_logout" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Log Out</h4>
      </div>
          <div class="modal-body">
                <p>Apakah anda yakin ingin keluar ?</p>
          </div>
          <div class="modal-footer">
            <a href="logout.php" type="submit" class="btn btn-danger" name="submit" >YA</a>
            <button type="button" class="btn btn-default" data-dismiss="modal">TIDAK</button>
          </div>
   
    </div>
  </div>
</div>
</body>

</html>