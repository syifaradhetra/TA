<?php

include 'koneksi.php';
$no=1;
$tiket = mysqli_query($conn, "SELECT * FROM tb_tiket ORDER BY id_tiket DESC");
                        if(mysqli_num_rows($tiket) > 0){
                        WHILE($row = mysqli_fetch_assoc($tiket)){
                          // var_dump($row); die;
                          $data[] = $row;
                          // var_dump($data);
                        }
                      }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Museum Trinil</title>

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/fancybox/css/jquery.fancybox.css">

  <link rel="stylesheet" href="../assets/css/theme.css">

</head>

<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <div class="top-bar">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-8">
            <div class="d-inline-block">
              <span class="mai-mail fg-primary"></span> <a href="mailto:contact@mail.com">contact@mail.com</a>
            </div>
            <div class="d-inline-block ml-2">
              <span class="mai-call fg-primary"></span> <a href="tel:+0011223495">+0011223495</a>
            </div>
          </div>
          <div class="col-md-4 text-right d-none d-md-block">
            <div class="social-mini-button">
              <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-twitter"></span></a>
              <a href="#"><span class="mai-logo-youtube"></span></a>
              <a href="#"><span class="mai-logo-linkedin"></span></a>
            </div>
          </div>
        </div>
      </div> <!-- .container -->
    </div> <!-- .top-bar -->

    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a href="index.php" class="navbar-brand">Museum<span class="text-primary"> Trinil</span></a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarContent">
          <ul class="navbar-nav ml-auto pt-3 pt-lg-0">
            <li class="nav-item">
              <a href="index.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="about.php" class="nav-link">Tentang</a>
            </li>
            <li class="nav-item">
            <a href="fosil.php" class="nav-link">Fosil</a>
            </li>
            <li class="nav-item">
              <a href="fasilitas.php" class="nav-link">Fasilitas</a>
            </li>
            <li class="nav-item active">
              <a href="tiket.php" class="nav-link">Tiket</a>
            </li>
            <li class="nav-item">
              <a href="reservasi.php" class="nav-link">Reservasi</a>
            </li>
          </ul>
        </div>
      </div> <!-- .container -->
    </nav> <!-- .navbar -->

    <div class="page-banner bg-img bg-img-parallax overlay-dark"
      style="background-image: url(../assets/img/patung_purba.png);">
      <div class="container h-100">
        <div class="row justify-content-center align-items-center h-100">
          <div class="col-lg-8">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tiket</li>
              </ol>
            </nav>
            <h1 class="fg-white text-center">Tiket</h1>
          </div>
        </div>
      </div>
    </div> <!-- .page-banner -->
  </header>
</div> <!-- .page-section -->

<div class="page-section">
  <div class="container">
    <div class="text-center">
      <div class="subhead">Harga & Jadwal</div>
      <h2 class="title-section">Tiket</h2>
    </div>

    <div class="team-content">
      <?php for ($i=0; $i < count($data); $i++) { 
        // var_dump($data[$i]["nama_fosil"]); die;
        ?>
      <table border="1" cellspacing="0" class="table table-striped table-bordered">
        <thead>
          <tr>
          <th class="text-center" width = "60px">No</th>
          <th class="text-center">Kategori Tiket</th>
          <th class="text-center">Harga</th>
          <th class="text-center">Jadwal</th>
          </tr>
        </thead> 
        <tbody>
          <tr>
          <td class="text-center"><?= $no++ ?></td>
          <td class="text-center"><?= $data[$i]["kategori_tiket"] ?></td>
          <td class="text-center"><?= $data[$i]["harga_tiket"] ?></td>
          <td class="text-center"><?= $data[$i]["jadwal"] ?></td>               
          </tr>
        </tbody>   
        </table>
        <?php } ?>
      </div>
    </div> <!-- .container-fluid -->
    </div> <!-- .page-section -->
  </main>
  <footer class="page-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 py-3">
          <h3>Museum<span class="fg-primary">Trinil</span></h3>
        </div>
        <div class="col-lg-3 py-3">
          <h5>Alamat</h5>
          <p>Pilang, Wonokerto, Pilang, Kawu, Kec. Kedunggalar, Kabupaten Ngawi, Jawa Timur 63254</p>
        </div>
        <div class="col-lg-3 py-3">
        <h5>Kota</h5>
          <ul class="footer-menu">
          <li><a href="#">Ngawi Ramah</a></li>
          </ul>
        </div>
        <div class="col-lg-3 py-3">
          <h5>Sosmed</h5>
          <div class="sosmed-button">
            <a href="#"><span class="mai-logo-facebook-f"></span></a>
            <a href="#"><span class="mai-logo-twitter"></span></a>
            <a href="#"><span class="mai-logo-youtube"></span></a>
            <a href="#"><span class="mai-logo-linkedin"></span></a>
          </div>
        </div>
        
      </div>

      <hr>

      <div class="row mt-4">
        <div class="col-md-6">
          <p>Copyright 2021.</p>
        </div>
      </div>
    </div>
  </footer>


  <script src="../assets/js/jquery-3.5.1.min.js"></script>

  <script src="../assets/js/bootstrap.bundle.min.js"></script>

  <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

  <script src="../assets/vendor/wow/wow.min.js"></script>

  <script src="../assets/vendor/fancybox/js/jquery.fancybox.min.js"></script>

  <script src="../assets/vendor/isotope/isotope.pkgd.min.js"></script>

  <script src="../assets/js/google-maps.js"></script>

  <script src="../assets/js/theme.js"></script>

</body>

</html>