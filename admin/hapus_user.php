<?php
include 'koneksi.php';

if(isset($_GET['idu'])){
    $admin = mysqli_query($conn, "SELECT foto FROM tb_admin WHERE id_admin = '".$_GET['idu']."' ");
    $u = mysqli_fetch_object($admin);

    unlink('img/' .$u->foto);

    $delete = mysqli_query($conn, "DELETE FROM tb_admin WHERE id_admin = '".$_GET['idu']."' ");
    echo '<script>window.location="?page=user"</script>';
}
?>