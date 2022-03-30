<?php
include 'koneksi.php';
    $fosil = mysqli_query($conn, "SELECT * FROM tb_fosil WHERE id_fosil = '".$_GET['id']."' ");
    $k = mysqli_fetch_object($fosil);
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
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
</head>
<body>
    <!--header-->
   
<!-- content-->
<div>
    <div class="section">
        <div class="container">
            <h1>Edit Data Fosil</h1>
            <div class="box">
            <form action="" method="POST" enctype="multipart/form-data">
                <input type="text" name="nama" placeholder="Nama Fosil" class="input-control" 
                value="<?php echo $k -> nama_fosil ?>" required>
                <input type="text" name="jenis" placeholder="Jenis Fosil" class="input-control" 
                value="<?php echo $k -> jenis_fosil ?>" required>
                <textarea class="input-control" name="sejarah" placeholder="Sejarah"><?php echo $k -> sejarah_fosil ?></textarea><br>
                <img src="terupload/<?php echo $k->foto_fosil ?>"width="130px">
                <input type="hidden" name="foto" value="<?php echo $k->foto_fosil ?>">
                <input type="file" name="gambar" class="input-control">
                <input type="submit" name="submit" value="Tambah" class="btn">
            </form>
            <?php
          if(isset($_POST['submit'])){

            //data inputan dari form
            $nama = $_POST['nama'];
            $jenis = $_POST['jenis'];
            $sejarah = $_POST['sejarah'];
            $gambar = $_POST['foto'];

            $filename = $_FILES['gambar']['name'];
            $tmp_name = $_FILES['gambar']['tmp_name'];

                $tipe1 = explode('.',$filename);
                $tipe2 = $tipe1[1];
                $newname = 'fosil'.time().'.'.$tipe2;

                //menampung data format file yang diizinkan
                $tipe_diizinkan = array('jpg','png');

                //jika ganti gambar
                if($filename != ''){
                    if(!in_array($tipe2, $tipe_diizinkan)){
                    //jika format tidak ada tipe diizinkan
                    echo '<script>alert("format file tidak diizinkan")</script>';
                    }else{
                        unlink('terupload/'.$gambar);
                        move_uploaded_file($tmp_name, 'terupload/'.$newname);
                        $namagambar = $newname;
                    }
                }else{
                    //jika admin tidak ganti gambar
                    $namagambar = $gambar;
                }
           

            //query update data user
            $update = mysqli_query($conn, "UPDATE tb_fosil SET 
            nama_fosil = '".$nama."',
            jenis_fosil = '".$jenis."',
            sejarah_fosil = '".$sejarah."',
            foto_fosil = '".$namagambar."'
            WHERE id_fosil = '".$k->id_fosil."' ");

        if($update){
            echo '<script>alert("Edit data berhasil")</script>';
            echo '<script>window.location="?page=datafosil"</script>';
        }else{
         echo 'Gagal'.mysqli_error($conn);
}

        }
        ?>
</div>
</div>
</div>
<!--footer-->

</body>
</html>
<script>
                CKEDITOR.replace( 'sejarah' );
                </script>
</body>
</html>