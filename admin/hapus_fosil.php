<?php
include 'koneksi.php';

if(isset($_GET['idk'])){
    $fosil = mysqli_query($conn, "SELECT foto_fosil FROM tb_fosil WHERE id_fosil = '".$_GET['idk']."' ");
    $k = mysqli_fetch_object($fosil);

    unlink('terupload/' .$k->foto_fosil);
    
    $delete = mysqli_query($conn, "DELETE FROM tb_fosil WHERE id_fosil = '".$_GET['idk']."' ");
    echo '<script>window.location="?page=datafosil"</script>';
}
?>