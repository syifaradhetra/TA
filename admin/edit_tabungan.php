<?php
include 'koneksi.php';
    $rek = mysqli_query($conn, "SELECT * FROM tb_rekening WHERE id_rek = '".$_GET['id']."' ");
    $r = mysqli_fetch_object($rek);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Museum Trinil</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href="<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body>
    <!--header-->
   
<!-- content-->
<div>
    <div class="section">
        <div class="container">
            <h1>Edit Data Tabungan</h1>
            <div class="box">
            <form action="" method="POST">
                <input type="text" name="jenis" placeholder="Jenis Tabungan" class="input-control" 
                value="<?php echo $r -> jenis_rek ?>" required>
                <input type="text" name="norek" placeholder="No Rekening" class="input-control" 
                value="<?php echo $r -> no_rek ?>" required>
                <input type="text" name="atasnama" placeholder="Atas Nama" class="input-control" 
                value="<?php echo $r -> atas_nama ?>" required>
                <input type="submit" name="submit" value="Tambah" class="btn">
            </form>
            <?php
            if(isset($_POST['submit'])){
                $jenis = ucwords($_POST['jenis']);
                $norek = ucwords($_POST['norek']);
                $atasnama = ucwords($_POST['atasnama']);

                $update = mysqli_query($conn, "UPDATE tb_rekening SET
                jenis_rek = '".$jenis."',
                no_rek = '".$norek."',
                atas_nama = '".$atasnama."'
                WHERE id_rek = '".$r->id_rek."' ");

                if($update){
                    echo '<script>alert("Edit data berhasil")</script>';
                    echo '<script>window.location="?page=datatabungan"</script>';
                }else{
                    echo 'Gagal' .mysqli_error($conn);
                }
            }
            ?>
</div>
</div>
</div>
<!--footer-->

</body>
</html>