-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Mar 2022 pada 16.52
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trinil`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama_admin`, `username`, `pass`, `jabatan`, `no_telp`, `email`, `alamat`, `foto`) VALUES
(1, 'Syifara Dhetra', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'manager', '082313374864', 'syifaradhetra@gmail.com', 'Ngawi', 'user1647498708.png'),
(10, 'ayu', 'ayu', 'fae38bd94701cdf2a9d114425cb40292', 'pegawai', '089778998766', 'ayuningsih@gmail.com', 'Surakarta', 'user1647612655.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_beli`
--

CREATE TABLE `tb_beli` (
  `id_beli` int(100) NOT NULL,
  `id_pemesan` int(100) NOT NULL,
  `kategori_tiket` int(200) NOT NULL,
  `jumlah_tiket` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_beli`
--

INSERT INTO `tb_beli` (`id_beli`, `id_pemesan`, `kategori_tiket`, `jumlah_tiket`) VALUES
(1, 2, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_fasilitas`
--

CREATE TABLE `tb_fasilitas` (
  `id_fasilitas` int(25) NOT NULL,
  `nama_fasilitas` varchar(100) NOT NULL,
  `foto_fasilitas` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_fasilitas`
--

INSERT INTO `tb_fasilitas` (`id_fasilitas`, `nama_fasilitas`, `foto_fasilitas`) VALUES
(23, 'Replika Gajah', 'fasilitas1647566185.jpg'),
(24, 'Pendopo', 'fasilitas1647669804.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_fosil`
--

CREATE TABLE `tb_fosil` (
  `id_fosil` int(100) NOT NULL,
  `nama_fosil` varchar(100) NOT NULL,
  `jenis_fosil` varchar(100) NOT NULL,
  `sejarah_fosil` text NOT NULL,
  `foto_fosil` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_fosil`
--

INSERT INTO `tb_fosil` (`id_fosil`, `nama_fosil`, `jenis_fosil`, `sejarah_fosil`, `foto_fosil`) VALUES
(16, 'Tengkorak', 'a', 'aaaa', 'fosil1647671048.jpg'),
(18, 'gading gajah', 'hewan purba', 'ditemukan di pesisir bengawan solo', 'fosil1647568169.png'),
(22, 'abc', 'hewan purba', '<p>hgakgugdhgksadg</p>\r\n', 'fosil1647778810.jpg'),
(23, 'tengkorak', 'hewan purba', '<p>hgafhadjamgsjag</p>\r\n', 'fosil1647779264.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pemesanan`
--

CREATE TABLE `tb_pemesanan` (
  `id_pemesanan` int(50) NOT NULL,
  `nama_pemesan` varchar(50) NOT NULL,
  `no_ktp` int(100) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `tanggal` date NOT NULL,
  `total_harga` int(255) NOT NULL,
  `jenis_rek` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pemesanan`
--

INSERT INTO `tb_pemesanan` (`id_pemesanan`, `nama_pemesan`, `no_ktp`, `no_hp`, `alamat`, `tanggal`, `total_harga`, `jenis_rek`) VALUES
(2, 'sari', 2147483647, '089778898226', 'ngawi', '2022-05-12', 10000, 5),
(12, 'agus', 2147483647, '089768556171', 'Ngawi', '2022-05-12', 25000, 5),
(13, 'diki', 2147483647, '089778898226', 'Blitar', '2022-09-12', 25000, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rekening`
--

CREATE TABLE `tb_rekening` (
  `id_rek` int(50) NOT NULL,
  `jenis_rek` varchar(100) NOT NULL,
  `no_rek` int(255) NOT NULL,
  `atas_nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_rekening`
--

INSERT INTO `tb_rekening` (`id_rek`, `jenis_rek`, `no_rek`, `atas_nama`) VALUES
(5, 'Pembayaran Langsung (Tunai)', 0, '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tiket`
--

CREATE TABLE `tb_tiket` (
  `id_tiket` int(50) NOT NULL,
  `kategori_tiket` varchar(25) NOT NULL,
  `harga_tiket` varchar(200) NOT NULL,
  `jadwal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_tiket`
--

INSERT INTO `tb_tiket` (`id_tiket`, `kategori_tiket`, `harga_tiket`, `jadwal`) VALUES
(1, 'Dewasa', '10000', 'Selasa-Jumat (08.00-15.30)'),
(2, 'Anak', '5000', 'Selasa-Jumat (08.00-15.30)');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tb_beli`
--
ALTER TABLE `tb_beli`
  ADD PRIMARY KEY (`id_beli`),
  ADD KEY `id_pemesan` (`id_pemesan`),
  ADD KEY `kategori_tiket` (`kategori_tiket`);

--
-- Indeks untuk tabel `tb_fasilitas`
--
ALTER TABLE `tb_fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indeks untuk tabel `tb_fosil`
--
ALTER TABLE `tb_fosil`
  ADD PRIMARY KEY (`id_fosil`);

--
-- Indeks untuk tabel `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD KEY `id_rek` (`jenis_rek`);

--
-- Indeks untuk tabel `tb_rekening`
--
ALTER TABLE `tb_rekening`
  ADD PRIMARY KEY (`id_rek`);

--
-- Indeks untuk tabel `tb_tiket`
--
ALTER TABLE `tb_tiket`
  ADD PRIMARY KEY (`id_tiket`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `tb_beli`
--
ALTER TABLE `tb_beli`
  MODIFY `id_beli` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tb_fasilitas`
--
ALTER TABLE `tb_fasilitas`
  MODIFY `id_fasilitas` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `tb_fosil`
--
ALTER TABLE `tb_fosil`
  MODIFY `id_fosil` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  MODIFY `id_pemesanan` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tb_rekening`
--
ALTER TABLE `tb_rekening`
  MODIFY `id_rek` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_tiket`
--
ALTER TABLE `tb_tiket`
  MODIFY `id_tiket` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_beli`
--
ALTER TABLE `tb_beli`
  ADD CONSTRAINT `tb_beli_ibfk_1` FOREIGN KEY (`id_pemesan`) REFERENCES `tb_pemesanan` (`id_pemesanan`),
  ADD CONSTRAINT `tb_beli_ibfk_2` FOREIGN KEY (`kategori_tiket`) REFERENCES `tb_tiket` (`id_tiket`);

--
-- Ketidakleluasaan untuk tabel `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  ADD CONSTRAINT `tb_pemesanan_ibfk_2` FOREIGN KEY (`jenis_rek`) REFERENCES `tb_rekening` (`id_rek`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
