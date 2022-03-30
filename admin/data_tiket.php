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
            <h1>Data Tiket</h1>
            <div class="">
            <div class="card-tools">
                  <a href="?page=tambahtiket" class="btn btn-sm btn-info float-right"><i class="fa fa-plus"></i> Tambah Data</a>
                </div>
                <br>
                <table border="1" cellspacing="0" id="datatabel" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center" width = "60px">No</th>
                            <th class="text-center">Kategori Tiket</th>
                            <th class="text-center">Harga</th>
                            <th class="text-center">Jadwal</th>
                            <th class="text-center" width = "150px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        function rupiah($angka){
                            $hasil_rupiah = "Rp " . number_format($angka,0,',','.');
                            return $hasil_rupiah;
                        }
                        $no = 1;
                        $tiket = mysqli_query($conn, "SELECT * FROM tb_tiket ORDER BY id_tiket DESC");
                        if(mysqli_num_rows($tiket) > 0){
                        WHILE($row = mysqli_fetch_array($tiket)){
                        ?>
                        <tr>
                            <td class="text-center"><?php echo $no++ ?></td>
                            <td><?php echo $row['kategori_tiket'] ?></td>
                            <td><?php echo rupiah($row['harga_tiket']) ?></td>
                            <td><?php echo $row['jadwal'] ?></td>
                            <td class="text-center">
                              <a class="btn btn-info btn-s text-white" href="?page=edittiket&id=<?= $row['id_tiket'] ?>"><i class="fa fa-edit"></i></a>
                              <a class="btn btn-danger btn-s text-white" href="?page=hapustiket&idk=<?= $row['id_tiket'] ?>" onclick="return confirm('Yakin Ingin Menghapus ?')"><i class="fa fa-trash"></i></a>
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