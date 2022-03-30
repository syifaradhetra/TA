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
            <h1>Tambah Data Fasilitas</h1>
            <div class="box">
            <form action="" method="POST" enctype="multipart/form-data">
                <input type="text" name="namafasilitas" placeholder="Nama Fasilitas" class="input-control" required>
                <input type="file" name="foto_fasilitas" class="input-control" placeholder="" required>
                <input type="submit" name="upload" value="Tambah" class="btn">
            </form>
            <?php
            if(isset($_POST['upload'])){
                $namafasilitas = $_POST['namafasilitas'];
                
                $filename = $_FILES['foto_fasilitas']['name'];
                $tmp_name = $_FILES['foto_fasilitas']['tmp_name'];

                $tipe1 = explode('.',$filename);
                $tipe2 = $tipe1[1];
                $newname = 'fasilitas'.time().'.'.$tipe2;
                //menampung data format file yang diizinkan
                $tipe_diizinkan = array('jpg','png');
                //validasi format file
                if(!in_array($tipe2, $tipe_diizinkan)){
                    //jika format tidak ada tipe diizinkan
                    echo '<script>alert("format file tidak diizinkan")</script>';
                }else{
                    //jika format sesuai dengan array
                    //proses apload file sekaligus insert database
                    move_uploaded_file($tmp_name, 'terupload/'.$newname);

                    $insert = mysqli_query($conn, "INSERT INTO tb_fasilitas VALUES (
                        null,
                        '".$namafasilitas."',
                        '".$newname."'
                        )");

                        if($insert){
                            echo '<script>alert("Tambah data berhasil")</script>';
                            echo '<script>window.location="?page=datafasilitas"</script>';
                        }else{
                            echo 'Gagal'.mysqli_error($conn);
                        }
                
                      }
            }
        
            ?>
</div>
</div>
</div>
<!--footer-->
</body>
</html>