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
    <!--header-->
  
<!-- content-->
<div>
    <div class="section">
        <div class="container">
            <h1>Data Fosil</h1>
            <div class="">
            <div class="card-tools">
                  <a href="?page=tambahfosil" class="btn btn-sm btn-info float-right"><i class="fa fa-plus"></i> Tambah Data</a>
                </div>
                <br>
                <table border="1" cellspacing="0" id="datatabel" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center" width = "60px">No</th>
                            <th class="text-center">Nama Fosil</th>
                            <th class="text-center">Jenis Fosil</th>
                            <th class="text-center">Sejarah</th>
                            <th class="text-center">Foto</th>
                            <th class="text-center" width = "150px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $fosil = mysqli_query($conn, "SELECT * FROM tb_fosil ORDER BY id_fosil DESC");
                        if(mysqli_num_rows($fosil) > 0){
                        WHILE($row = mysqli_fetch_array($fosil)){
                        ?>
                        <tr>
                            <td class="text-center"><?php echo $no++ ?></td>
                            <td><?php echo $row['nama_fosil'] ?>
                            <td><?php echo $row['jenis_fosil'] ?>
                            <td><?php echo $row['sejarah_fosil'] ?>
                            <td class="text-center"><?php echo "<img src='terupload/$row[foto_fosil]' width='100' height='100' />"?>
                        </td>
                        <td class="text-center">
                              <a class="btn btn-info btn-s text-white" href="?page=editfosil&id=<?= $row['id_fosil'] ?>"><i class="fa fa-edit"></i></a>
                              <a class="btn btn-danger btn-s text-white" href="?page=hapusfosil&idk=<?= $row['id_fosil'] ?>" onclick="return confirm('Yakin Ingin Menghapus ?')"><i class="fa fa-trash"></i></a>
                          </a></td>
                        </tr>
                        <?php }}else{ ?>
                            <tr>
                            <td colspan="3">Tidak ada Produk</td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
</div>
</div>
</div>
<!--footer-->

</body>
</html>