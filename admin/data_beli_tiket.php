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
            <h1>Data Tiket Pembelian</h1>
            <div class="">
                <p><a href="?page=tambahkategori">Tambah Data</a></p>
                <table border="1" cellspacing="0" id="datatabel" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th width = "60px">No</th>
                            <th>Id Pembelian</th>
                            <th>Id Pemesan</th>
                            <th>Kategori Tiket</th>
                            <th>Jumlah Tiket</th>
                            <th width = "150px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $beli = mysqli_query($conn, "SELECT * FROM tb_beli ORDER BY id_beli DESC");
                        if(mysqli_num_rows($beli) > 0){
                        WHILE($row = mysqli_fetch_array($beli)){
                        ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $row['id_beli'] ?></td>
                            <td><?php echo $row['id_pemesan'] ?></td>
                            <td><?php echo $row['kategori_tiket'] ?></td>
                            <td><?php echo $row['jumlah_tiket'] ?></td>
                            
                            <td>
                                <a href="?page=konfirmasitiketpembelian&id=<?php echo $row['id_beli']?>">Kofirmasi</a> || <a href="?page=cancelpembelian&idk=<?php echo $row['id_beli']?>" onclick="return confirm('Yakin Ingin Menghapus ?')">Cancel</a>
                            </td>
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