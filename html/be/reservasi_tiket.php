<?php
include("../koneksi.php");

session_start();
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
    // if (isset($_SESSION['no_ktp'])) {
    //   $sql = "UPDATE tb_pemesanan SET total_harga='$total' WHERE no_ktp='$no_ktp'";
  
    //   if ($conn->query($sql) === TRUE) {
    //     $_POST = array();
  
    //     // echo "Record updated successfully";
    //     echo "<script>window.location='reservasi.php'</script>";
    //     // header('location:'.$_SERVER['REQUEST_URI'].'');
    //   } else {
    //     echo "Error updating record: " . $conn->error;
    //   }
    // } else {
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
        // echo '<script>alert("Data anda sudah tersimpan")</script>';
        echo '<script>window.location="../reservasi.php"</script>';
      } else {
        echo 'Gagal' . mysqli_error($conn);
      }
    // }
  }