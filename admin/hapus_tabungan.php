<?php
include 'koneksi.php';

if(isset($_GET['idk'])){
    $delete = mysqli_query($conn, "DELETE FROM tb_rekening WHERE id_rek = '".$_GET['idk']."' ");
    echo '<script>window.location="?page=datatabungan"</script>';
}
?>