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
            <h1>Data Pemesan</h1>
            <div class="">
                <p><a href="?page=tambahkategori">Tambah Data</a></p>
                <table border="1" cellspacing="0" id="datatabel" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th width = "60px">No</th>
                            <th>Nama</th>
                            <th>No KTP</th>
                            <th>No HP</th>
                            <th>Alamat</th>
                            <th>Tanggal</th>
                            <th>Total Harga</th>
                            <th>Jenis Tabungan</th>
                            <th width = "150px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $pemesanan = mysqli_query($conn, "SELECT * FROM tb_pemesanan ORDER BY id_pemesanan DESC");
                        if(mysqli_num_rows($pemesanan) > 0){
                        WHILE($row = mysqli_fetch_array($pemesanan)){
                        ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $row['nama_pemesan'] ?></td>
                            <td><?php echo $row['no_ktp'] ?></td>
                            <td><?php echo $row['no_hp'] ?></td>
                            <td><?php echo $row['alamat'] ?></td>
                            <td><?php echo $row['tanggal'] ?></td>
                            <td><?php echo $row['total_harga'] ?></td>
                            <td><?php echo $row['jenis_rek'] ?></td>
                            <td>
                                <a href="?page=konfirmasipemesan&id=<?php echo $row['id_pemesanan']?>">Kofirmasi</a> || <a href="?page=cancelpemesan&idk=<?php echo $row['id_pemesanan']?>" onclick="return confirm('Yakin Ingin Menghapus ?')">Cancel</a>
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