<?php
include 'koneksi.php';
    $fasilitas = mysqli_query($conn, "SELECT * FROM tb_fasilitas WHERE id_fasilitas = '".$_GET['id']."' ");
    $k = mysqli_fetch_object($fasilitas);
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
            <h1>Edit Data Fasilitas</h1>
            <div class="box">
            <form action="" method="POST" enctype="multipart/form-data">
                <input type="text" name="nama" placeholder="Nama Fasilitas" class="input-control" 
                value="<?php echo $k -> nama_fasilitas ?>" required><br>
                <img src="terupload/<?php echo $k->foto_fasilitas ?>"width="130px">
                <input type="hidden" name="foto" value="<?php echo $k->foto_fasilitas ?>">
                <input type="file" name="foto_fasilitas" class="input-control">
                <input type="submit" name="submit" value="Tambah" class="btn">
            </form>
            <?php
          if(isset($_POST['submit'])){

            //data inputan dari form
            $nama = $_POST['nama'];
            $foto_fasilitas = $_POST['foto'];

            $filename = $_FILES['foto_fasilitas']['name'];
            $tmp_name = $_FILES['foto_fasilitas']['tmp_name'];

                $tipe1 = explode('.',$filename);
                $tipe2 = $tipe1[1];
                $newname = 'fasilitas'.time().'.'.$tipe2;

                //menampung data format file yang diizinkan
                $tipe_diizinkan = array('jpg','png');

                //jika ganti gambar
                if($filename != ''){
                    if(!in_array($tipe2, $tipe_diizinkan)){
                    //jika format tidak ada tipe diizinkan
                    echo '<script>alert("format file tidak diizinkan")</script>';
                    }else{
                        unlink('terupload/'.$foto_fasilitas);
                        move_uploaded_file($tmp_name, 'terupload/'.$newname);
                        $namagambar = $newname;
                    }
                }else{
                    //jika admin tidak ganti gambar
                    $namagambar = $foto_fasilitas;
                }
           

            //query update data user
            $update = mysqli_query($conn, "UPDATE tb_fasilitas SET 
            nama_fasilitas = '".$nama."',
            foto_fasilitas = '".$namagambar."'
            WHERE id_fasilitas = '".$k->id_fasilitas."' ");

        if($update){
            echo '<script>alert("Edit data berhasil")</script>';
            echo '<script>window.location="?page=datafasilitas"</script>';
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
