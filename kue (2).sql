-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Apr 2020 pada 15.59
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kue`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `gambar` varchar(60) DEFAULT NULL,
  `hpp` decimal(22,2) DEFAULT NULL,
  `harga` decimal(22,2) DEFAULT NULL,
  `waktu_masuk` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `nama`, `deskripsi`, `gambar`, `hpp`, `harga`, `waktu_masuk`) VALUES
(1, 'blackforest', 'wertyujmszdgfvhbggyjhyyi', NULL, '11000.00', '12000.00', '2020-04-13 17:47:50'),
(2, 'crepes', 'oke', NULL, '14000.00', '20000.00', '2020-04-13 17:48:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(3) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'safrina', 'safrina8');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembeli`
--

CREATE TABLE `pembeli` (
  `id_pembeli` int(4) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembeli`
--

INSERT INTO `pembeli` (`id_pembeli`, `username`, `password`, `email`) VALUES
(2, 'safrinauriya', 'safrina8', 'safrinananta@gmail.com'),
(3, 'safrina', 'safrina1', 'safrina_auriya_28rpl@student.smktelkom-mlg.sch.id'),
(4, 'sfrntsy', 'safrinnn', 'safrinauriya@gmail.com'),
(5, 'safrinahm', 'safrin', 'kowos19805@smlmail.com'),
(6, 'safrin', 'safrin1', 'nafis4c@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `harga` double NOT NULL,
  `photo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `nama`, `harga`, `photo`) VALUES
(1, 'blackforest', 250000, 'image/breads.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `stok`
--

CREATE TABLE `stok` (
  `id` int(4) NOT NULL,
  `nama_kue` varchar(50) NOT NULL,
  `stok` int(10) NOT NULL,
  `harga` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `stok`
--

INSERT INTO `stok` (`id`, `nama_kue`, `stok`, `harga`) VALUES
(8, 'cheese cake', 4, 80000),
(9, 'crepes', 16, 100000),
(10, 'crepes', 20, 50000),
(12, 'opera cake', 8, 450000),
(13, 'sacher cake', 30, 140000),
(14, 'blackforest', 6, 150000),
(15, 'blackforest', 6, 150000),
(16, 'blackforest', 0, 0),
(17, 'blackforest', 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kue`
--

CREATE TABLE `tb_kue` (
  `id` int(11) NOT NULL,
  `kode` varchar(32) NOT NULL,
  `nama` varchar(300) NOT NULL,
  `lokasi` varchar(16) NOT NULL,
  `harga` int(30) NOT NULL,
  `stok` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kue`
--

INSERT INTO `tb_kue` (`id`, `kode`, `nama`, `lokasi`, `harga`, `stok`) VALUES
(4, '4gt6k', 'blackforest', 'gudang 1', 250000, 67),
(5, '5yu89b', 'cheese cake', 'gudang 1', 180000, 74),
(6, '6iol90', 'sacher cake', 'gudang 2', 85000, 120),
(7, '7yu89phj', 'opera cake', 'gudang 3', 350000, 50),
(8, '8thyk79', 'matcha cake', 'gudang 2', 200000, 54),
(9, '9hr3kl76', 'crepes', 'gudang 2', 40000, 80),
(10, '1086fh', 'donut', 'gudang 2', 15000, 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_out`
--

CREATE TABLE `tb_out` (
  `id_out` int(11) NOT NULL,
  `id_kue` int(11) NOT NULL,
  `nomor` varchar(32) NOT NULL,
  `jumlah` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_out`
--

INSERT INTO `tb_out` (`id_out`, `id_kue`, `nomor`, `jumlah`) VALUES
(12, 4, '1444', 2),
(13, 5, '234442', 3),
(14, 4, '257', 10),
(15, 5, '5', 3),
(16, 8, '7', 6),
(17, 4, '7', 3);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id_pembeli`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `stok`
--
ALTER TABLE `stok`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_kue`
--
ALTER TABLE `tb_kue`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_out`
--
ALTER TABLE `tb_out`
  ADD PRIMARY KEY (`id_out`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `pembeli`
--
ALTER TABLE `pembeli`
  MODIFY `id_pembeli` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `stok`
--
ALTER TABLE `stok`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tb_kue`
--
ALTER TABLE `tb_kue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tb_out`
--
ALTER TABLE `tb_out`
  MODIFY `id_out` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
