<?php
include 'koneksi.php';
    $id = $_SESSION['id'];
    $query = mysqli_query($conn, "SELECT * FROM tb_admin WHERE id_admin = '".$_SESSION['id']."' ");
    $d = mysqli_fetch_object($query);
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
            <h1>Profil</h1>
            <div class="box">
            <form action="" method="POST">
                <img src="img/<?= $d->foto ?>"width="200px" style="margin-bottom: 20px;">
                <input type="hidden" name="foto" class="input-control" 
                value="<?php echo $d->foto ?>" required>
                <input type="text" name="nama" placeholder="Nama Lengkap" class="input-control"
                value="<?php echo $d->nama_admin ?>" required>
                <input type="text" name="user" placeholder="Username" class="input-control"
                value="<?php echo $d->username ?>" required>
                <input type="text" name="jabatan" placeholder="Jabatan" class="input-control"
                value="<?php echo $d->jabatan ?>" required>
                <input type="text" name="telp" placeholder="No Telp" class="input-control"
                value="<?php echo $d->no_telp ?>" required>
                <input type="text" name="email" placeholder="Email" class="input-control"
                value="<?php echo $d->email ?>" required>
                <input type="text" name="alamat" placeholder="Alamat" class="input-control"
                value="<?php echo $d->alamat ?>" required>
                <input type="submit" name="submit" value="Ubah Profil" class="btn">
                </form>
                <?php
                if(isset($_POST['submit'])){
                    $nama = $_POST['nama'];
                    $user = $_POST['user'];
                    $jabatan = $_POST['jabatan'];
                    $telp = $_POST['telp'];
                    $email = $_POST['email'];
                    $alamat = $_POST['alamat'];

                    $update = mysqli_query($conn, "UPDATE tb_admin SET
                                nama_admin = '".$nama."',
                                username = '".$user."',
                                jabatan = '".$jabatan."',
                                no_telp = '".$telp."',
                                email = '".$email."',
                                alamat = '".$alamat."'
                                WHERE id_admin = '".$d->id_admin."' ");

                            if($update){
                                echo '<script>alert("Ubah Profil Berhasil")</script>';
                                echo '<script>window.location="?page=profil"</script>';
                            }else{
                                echo 'gagal' .mysqli_error($conn);
                            }
                }
                ?>
</div>
<h1>Ubah Password</h1>
            <div class="box">
            <form action="" method="POST">
                <input type="password" name="pass1" placeholder="Password baru" class="input-control" required>
                <input type="password" name="pass2" placeholder="konfirmasi password" class="input-control" required>
                <input type="submit" name="ubah_password" value="Ubah Password" class="btn">
            </form>
            <?php
            if(isset($_POST['ubah_password'])){
                $pass1 = $_POST['pass1'];
                $pass2 = $_POST['pass2'];

                if($pass2 != $pass1){
                    echo '<script>alert("Konfirmasi password baru tidak sesuai")</script>';
                }else{
                    $u_pass = mysqli_query($conn, "UPDATE tb_admin SET 
                    pass = '".MD5($pass1)."'
                    WHERE id_admin ='".$d->id_admin."' ");
                    if($u_pass){
                        echo'<script>alert("Ubah data berhasil")</script>';
                        echo'<script>window.location="?page=profil"</script>';
                    }else{
                        echo'gagal'.mysqli_error($conn);
                    }
                }

            }
            ?>
</div>
</div>
<!--footer-->

</body>
</html>