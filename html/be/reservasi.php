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
    $pemesan = $_POST['pemesan'];
    $kategori = $_POST['kategori'];
    $jumlah = $_POST['jumlah'];
    $insertTiket = mysqli_query($conn, "INSERT INTO tb_beli VALUES (
                        null, 
                        '" . $pemesan . "',
                        '" . $kategori . "',
                        '" . $jumlah . "'
                        ) ");

    $response = [
        "status" => "ok"
    ];

    if ($insertTiket) {
        echo json_encode($response);
    }
}
