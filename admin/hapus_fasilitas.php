<?php
include 'koneksi.php';

if(isset($_GET['idk'])){
    $fasilitas = mysqli_query($conn, "SELECT foto_fasilitas FROM tb_fasilitas WHERE id_fasilitas = '".$_GET['idk']."' ");
    $k = mysqli_fetch_object($fasilitas);

    unlink('terupload/' .$k->foto_fasilitas);

    $delete = mysqli_query($conn, "DELETE FROM tb_fasilitas WHERE id_fasilitas = '".$_GET['idk']."' ");
    echo '<script>window.location="?page=datafasilitas"</script>';
}
?>