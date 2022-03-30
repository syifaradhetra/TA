<?php
include 'koneksi.php';

if(isset($_GET['idk'])){
    $delete = mysqli_query($conn, "DELETE FROM tb_tiket WHERE id_tiket = '".$_GET['idk']."' ");
    echo '<script>window.location="?page=datatiket"</script>';
}
?>