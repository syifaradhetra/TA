<?php

include("../koneksi.php");

//fungsi simpan tiket dan update pemesanan
if (isset($_POST['pemesan']) || isset($_POST['nama'])) {
    // $nama = $_POST['nama'];
    // $no_ktp = $_POST['no_ktp'];
    // $no_hp = $_POST['no_hp'];
    // $alamat = $_POST['alamat'];
    // $tanggal = $_POST['tanggal'];
    // $total = $_POST['total'];
    // $tabungan = $_POST['tabungan'];

    // $insert = mysqli_query($conn, "INSERT INTO tb_pemesanan VALUES (
    //                  null, 
    //                  '" . $nama . "',
    //                  '" . $no_ktp . "',
    //                  '" . $no_hp . "',
    //                  '" . $alamat . "',
    //                  '" . $tanggal . "',
    //                  '" . $total . "',
    //                  '" . $tabungan . "'
    //                  ) ");
    $idPemesan = $_POST['id_pemesan'];
    $pemesan = $_POST['pemesan'];
    $kategori = $_POST['kategori'];
    $jumlah = $_POST['jumlah'];
    $insertTiket = mysqli_query($conn, "INSERT INTO tb_beli VALUES (
                        null, 
                        '" . $pemesan . "',
                        '" . $kategori . "',
                        '" . $jumlah . "'
                        ) ");
    //update pemesanan
    $get = "SELECT total_harga FROM tb_pemesanan WHERE id_pemesanan='$idPemesan'";
    $resultGet = mysqli_query($conn, $get);
    $dataTotalSebelumnya = null;
    while ($dataGet = mysqli_fetch_assoc($resultGet)) {
        $dataTotalSebelumnya[] = $dataGet;
    }
    //get harga tiket
    $getKategori = "SELECT harga_tiket FROM tb_tiket WHERE id_tiket='$kategori'";
    $resultKategori = mysqli_query($conn, $getKategori);
    $dataKategori = null;
    while ($dataKategoriGet = mysqli_fetch_assoc($resultKategori)) {
        $dataKategori[] = $dataKategoriGet;
    }
    $hargaTiket = $dataKategori[0]["harga_tiket"];
    //perhitungan
    $totalSebelumnya = $dataTotalSebelumnya[0]["total_harga"];
    $totalSekarang  = $jumlah * $hargaTiket;
    $totalHarga = $totalSebelumnya + $totalSekarang;

    $update = "UPDATE tb_pemesanan SET total_harga='$totalHarga' WHERE id_pemesanan='$idPemesan'";
    mysqli_query($conn, $update);
    //insert tiket
    $data = null;
    $result = mysqli_query($conn, "SELECT * 
    FROM tb_beli
        INNER JOIN tb_pemesanan ON tb_beli.id_pemesan = tb_pemesanan.id_pemesanan
        INNER JOIN tb_tiket ON tb_beli.kategori_tiket = tb_tiket.id_tiket 
    WHERE id_pemesan='$idPemesan'");
    while ($dataPemesan = mysqli_fetch_assoc($result)) {
        $data[] = $dataPemesan;
    }
    $response = [
        "status" => "ok",
        "data" => $data,
    ];

    // if ($insertTiket) {
        header("Content-Type: application/json");
        echo json_encode($response);
    // }
}
