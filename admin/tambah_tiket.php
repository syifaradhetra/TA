<?php include("koneksi.php") ?>
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
<!-- content-->
<div>
    <div class="section">
        <div class="container">
            <h1>Tambah Data Tiket</h1>
            <div class="box">
            <form action="" method="POST">
                <input type="text" name="kategori_tiket" placeholder="Kategori Tiket" class="input-control" required>
                <input type="text" name="harga" placeholder="Harga Tiket" class="input-control" required>
                <input type="text" name="jadwal" placeholder="Jadwal" class="input-control" required>
                <input type="submit" name="submit" value="Tambah" class="btn">
            </form>
            <?php
            if(isset($_POST['submit'])){
                $kategori_tiket = $_POST['kategori_tiket'];
                $harga = $_POST['harga'];
                $jadwal = $_POST['jadwal'];
                

                $insert = mysqli_query($conn, "INSERT INTO tb_tiket VALUES (
                     null, 
                     '".$kategori_tiket."',
                     '".$harga."',
                     '".$jadwal."'
                     ) ");

                if($insert){
                    echo '<script>alert("Tambah data berhasil")</script>';
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