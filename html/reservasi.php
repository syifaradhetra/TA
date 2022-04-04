<?php
include("koneksi.php");
session_start();
//get previous data
$data = null;
if (isset($_SESSION['no_ktp'])) {
  $pemesan = "SELECT * FROM tb_pemesanan LEFT JOIN tb_rekening ON tb_pemesanan.jenis_rek = tb_rekening.id_rek
  WHERE tb_pemesanan.no_ktp='" . $_SESSION['no_ktp'] . "'";
  $result = mysqli_query($conn, $pemesan);
  while ($dataPemesan = mysqli_fetch_assoc($result)) {
    $data = $dataPemesan;
  }
}
// var_dump($data); die;
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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

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

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
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
            <li class="nav-item">
              <a href="tiket.php" class="nav-link">Tiket</a>
            </li>
            <li class="nav-item active">
              <a href="reservasi.php" class="nav-link">Reservasi</a>
            </li>
          </ul>
        </div>
      </div> <!-- .container -->
    </nav> <!-- .navbar -->

    <div class="page-banner bg-img bg-img-parallax overlay-dark" style="background-image: url(../assets/img/gapura_trinil.jpg);">
      <div class="container h-100">
        <div class="row justify-content-center align-items-center h-100">
          <div class="col-lg-8">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Reservasi</li>
              </ol>
            </nav>
            <h1 class="fg-white text-center">Reservasi</h1>
          </div>
        </div>
      </div>
    </div> <!-- .page-banner -->
  </header>

  <main>
    <div class="page-section">
      <div class="container">
        <div class="text-center">
          <h2 class="title-section mb-3">Reservasi Tiket</h2>
          <p>Lakukan Pemesanan Tiket Secara Online dengan Mengisi Form Berikut</p>
        </div>
        <div class="row justify-content-center mt-5">
          <div class="col-lg-8">
            <form action="#" class="form-contact" enctype="multipart/form-data" method="POST">
              <div class="row">
                <div class="col-12 py-2">
                  <label for="nama" class="fg-grey">Nama</label>
                  <input type="text" name="nama" value="<?php echo ($data != null) ? $data["nama_pemesan"] : ''; ?>" placeholder="Enter name.." class="form-control" required>
                </div>
                <div class="col-12 py-2">
                  <label for="no ktp" class="fg-grey">No KTP</label>
                  <input type="text" name="no_ktp" value="<?php echo ($data != null) ? $data["no_ktp"] : ''; ?>" placeholder="No KTP.." class="form-control" required>
                </div>
                <div class="col-12 py-2">
                  <label for="no hp" class="fg-grey">No HP</label>
                  <input type="text" name="no_hp" value="<?php echo ($data != null) ? $data["no_hp"] : ''; ?>" placeholder="No HP.." class="form-control" required>
                </div>
                <div class="col-12 py-2">
                  <label for="alamat" class="fg-grey">Alamat</label>
                  <textarea id="text" rows="8" name="alamat" class="form-control" placeholder="Enter text.."><?php echo ($data != null) ? $data["alamat"] : ''; ?></textarea>
                </div>
                <div class="col-sm-6 py-2">
                  <label for="tanggal" class="fg-grey">Tanggal</label>
                  <input type="date" name="tanggal" value="<?php echo ($data != null) ? $data["tanggal"] : ''; ?>" placeholder="" class="form-control" required>
                </div>
                <div class="col-sm-6 py-2">
                  <label for="total tiket" class="fg-grey">Total</label>
                  <input type="combo-box" id="totalHarga" value="<?php echo ($data != null) ? $data["total_harga"] : ''; ?>" name="total" placeholder="" class="form-control">
                </div>
                <div class="col-12 py-2">
                  <label for="jenis rekening" class="fg-grey">Jenis Rekening</label>
                  <br>
                  <SELECT class="input-control" name="tabungan" required>
                    <option value="">---PILIH---</option>
                    <?php if ($data != null) { ?>
                      <option selected value="<?php echo $data["jenis_rek"]; ?>">-</option>
                    <?php } ?>
                    <?php
                    $tabungan = mysqli_query($conn, "SELECT * FROM tb_rekening ORDER BY jenis_rek DESC");
                    while ($r = mysqli_fetch_array($tabungan)) {
                    ?>
                      <option value="<?php echo $r['id_rek'] ?>"><?php echo $r['jenis_rek'] ?>-</option>
                    <?php } ?>
                  </SELECT>
                </div>
                <div class="col-12 mt-3">
                  <input type="submit" name="submit" value="Simpan" class="nav-link">
                </div>
                <?php
                if (isset($_POST['submit'])) {
                  $nama = $_POST['nama'];
                  $no_ktp = $_POST['no_ktp'];
                  $no_hp = $_POST['no_hp'];
                  $alamat = $_POST['alamat'];
                  $tanggal = $_POST['tanggal'];
                  $total = $_POST['total'];
                  $tabungan = $_POST['tabungan'];
                  $_SESSION['no_ktp'] = $no_ktp;
                  // var_dump($_SESSION['no_ktp']); die;
                  if (isset($_SESSION['no_ktp'])) {
                    $sql = "UPDATE tb_pemesanan SET total_harga='$total' WHERE no_ktp='$no_ktp'";

                    if ($conn->query($sql) === TRUE) {
                      $_POST = array();

                      // echo "Record updated successfully";
                      echo "<script>window.location='reservasi.php'</script>";
                      // header('location:'.$_SERVER['REQUEST_URI'].'');
                    } else {
                      echo "Error updating record: " . $conn->error;
                    }
                  } else {
                    // $nama = $_POST['nama'];
                    // $no_ktp = $_POST['no_ktp'];
                    // $no_hp = $_POST['no_hp'];
                    // $alamat = $_POST['alamat'];
                    // $tanggal = $_POST['tanggal'];
                    // $total = $_POST['total'];
                    // $tabungan = $_POST['tabungan'];

                    $insert = mysqli_query($conn, "INSERT INTO tb_pemesanan VALUES (
                     null, 
                     '" . $nama . "',
                     '" . $no_ktp . "',
                     '" . $no_hp . "',
                     '" . $alamat . "',
                     '" . $tanggal . "',
                     '" . $total . "',
                     '" . $tabungan . "'
                     ) ");

                    if ($insert) {
                      echo '<script>alert("Data anda sudah tersimpan")</script>';
                      // echo '<script>window.location="?page=reservasi.php"</script>';
                    } else {
                      echo 'Gagal' . mysqli_error($conn);
                    }
                  }
                }
                ?>

            </form>
          </div>
        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section -->


    <div class="page-section">
      <div class="container">
        <div class="text-center">
          <h2 class="title-section mb-3">Pilih Tiket Anda</h2>
          <p>Lakukan berulang jika lebih dari 1 tiket</p>
        </div>
        <div class="row justify-content-center mt-5">
          <div class="col-lg-8">
            <!-- <form action="#" class="form-contact" enctype="multipart/form-data" method="POST"> -->
            <div class="row">
              <div class="col-sm-6 py-2">
                <label for="pemesan" class="fg-grey">Pemesan</label><br>
                <SELECT id="pemesan" class="input-control" name="pemesan" required>
                  <!-- <option value="">---PILIH---</option> -->
                  <option value="<?php echo ($data != null) ? $data["id_pemesanan"] : ''; ?>"><?php echo ($data != null) ? $data["nama_pemesan"] : ''; ?></option>
                </SELECT>
              </div>
              <div class="col-sm-6 py-2">
                <label for="kategori tiket" class="fg-grey">Kategori Tiket</label><br>
                <SELECT class="input-control" name="kategori1" id="kategori" required>
                  <option value="">---PILIH---</option>
                  <?php
                  $kategori1 = mysqli_query($conn, "SELECT * FROM tb_tiket ORDER BY id_tiket DESC");
                  while ($r = mysqli_fetch_array($kategori1)) {
                  ?>
                    <option value="<?php echo $r['id_tiket'] ?>"><?php echo $r['kategori_tiket'] ?>-</option>
                  <?php } ?>
                </SELECT>
              </div>
              <div class="col-sm-6 py-2">
                <label for="jumlah tiket" class="fg-grey">Jumlah</label>
                <input type="number" id="jumlah" name="jumlah1" placeholder="Enter jumlah.." class="form-control" required>
              </div>

              <div class="col-12 mt-3">
                <input type="submit" id="btnSimpan" name="submit" value="Simpan" class="nav-link">
              </div>
              <?php
              
              ?>
            </div>
            <!-- </form> -->
          </div>
        </div>
      </div> <!-- .container -->
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

  <script>
    $("#btnSimpan").click(function() {
      var nama = $("#nama").val()
      var no_ktp = $("#no_ktp").val()
      var no_hp = $("#no_hp").val()
      var alamat = $("#alamat").val()
      var total = $("#total").val()
      var tanggal = $("#tanggal").val()
      var tabungan = $("#tabungan").val()

      var pemesan = $("#pemesan").val()
      var jumlah = $("#jumlah").val()
      var kategori = $("#kategori").val()
      $.post("be/reservasi.php", {
          // nama: nama,
          // no_ktp: no_ktp,
          // no_hp: no_hp,
          // alamat: alamat,
          // tanggal: tanggal,
          // total: total,
          // tabungan: tabungan
          pemesan: pemesan,
          jumlah: jumlah,
          kategori: kategori
        },
        function(data, status) {
          // alert("Data: " + data + "\nStatus: " + status);
          console.log(data)
          console.log(status)
          if (status == "success") {
            var totalLama = $("#totalHarga").val()
            console.log(totalLama)
            var harga = 5000;
            var totalHarga = jumlah * harga
            var totalAkhir = parseInt(totalHarga) + parseInt(totalLama)
            // console.log('ok')
            // if(harga != 0) {
            $("#totalHarga").val("")
            $("#totalHarga").val(totalAkhir)
            // }
          }
        });
    });
  </script>

</body>

</html>