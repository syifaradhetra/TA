<?php
include 'koneksi.php';
    $tiket = mysqli_query($conn, "SELECT * FROM tb_tiket WHERE id_tiket = '".$_GET['id']."' ");
    $t = mysqli_fetch_object($tiket);
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
            <h1>Edit Data Tiket</h1>
            <div class="box">
            <form action="" method="POST">
                <input type="text" name="kategori_tiket" placeholder="Kategori Tiket" class="input-control" 
                value="<?php echo $t -> kategori_tiket ?>" required>
                <input type="text" name="harga" placeholder="Harga Tiket" class="input-control" 
                value="<?php echo $t -> harga_tiket ?>" required>
                <input type="text" name="jadwal" placeholder="Jadwal" class="input-control" 
                value="<?php echo $t -> jadwal ?>" required>
                <input type="submit" name="submit" value="Tambah" class="btn">
            </form>
            <?php
            if(isset($_POST['submit'])){
                $kategori_tiket = ucwords($_POST['kategori_tiket']);
                $harga = ucwords($_POST['harga']);
                $jadwal = ucwords($_POST['jadwal']);

                $update = mysqli_query($conn, "UPDATE tb_tiket SET
                kategori_tiket = '".$kategori_tiket."',
                harga_tiket = '".$harga."',
                jadwal = '".$jadwal."'
                WHERE id_tiket = '".$t->id_tiket."' ");

                if($update){
                    echo '<script>alert("Edit data berhasil")</script>';
                    echo '<script>window.location="?page=datatiket"</script>';
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