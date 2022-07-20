-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 20, 2022 at 02:57 PM
-- Server version: 10.3.35-MariaDB-cll-lve
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `slbnsawa_tiang`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_keluhan`
--

CREATE TABLE `tb_keluhan` (
  `id_keluhan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_tiang` int(11) NOT NULL,
  `id_teknisi` int(11) NOT NULL,
  `tgl_keluhan` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `isi_keluhan` varchar(255) NOT NULL,
  `status_keluhan` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_keluhan`
--

INSERT INTO `tb_keluhan` (`id_keluhan`, `id_user`, `id_tiang`, `id_teknisi`, `tgl_keluhan`, `isi_keluhan`, `status_keluhan`) VALUES
(1, 1, 1, 1, '2022-06-22 14:32:15', 'Tiang rubuh The requested URL was not found on this server. The requested URL was not found on this server. The requested URL was not found on this server. The requested URL was not found on this server. The requested URL was not found on this server.', 'Selesai'),
(2, 1, 1, 3, '2022-04-07 07:29:54', 'Tiang rubuh The requested URL was not found on this server. The requested URL was not found on this server. The requested URL was not found on this server. The requested URL was not found on this server. The requested URL was not found on this server.', 'Selesai'),
(3, 1, 1, 2, '2022-04-07 07:49:57', 'aduh baa ko tang ny kk hubungi kami la di kantor dan berjalan-jalan di mal taman anggrek di kantor dan berjalan-jalan di mal taman anggrek di kantor dan berjalan-jalan di mal taman anggrek di ', 'Di Tolak'),
(4, 1, 1, 1, '2022-06-22 14:29:39', 'tiang ny kok di kirim ke email vermez di kirim undangan pernikahan murah 😅 ekonomi di Indonesia dan barat di jam segiko di jam ', 'Selesai'),
(5, 1, 1, 3, '2022-04-05 04:06:32', 'tiang ny kok di kirim ke email vermez di kirim undangan pernikahan murah 😅 ekonomi di Indonesia dan barat di jam segiko di jam ', 'Selesai'),
(6, 1, 1, 1, '2022-04-07 07:34:09', 'a', 'Selesai'),
(7, 1, 5, 3, '2022-04-05 04:06:20', 'tiang ny kok di kirim ke email vermez di kirim undangan pernikahan murah 😅 ekonomi di Indonesia dan barat di jam segiko di jam ', 'Selesai'),
(8, 2, 5, 3, '2022-04-08 01:55:17', 'tiang tidak sesuai harapan bisa di bilang dekat dengan pusat perbelanjaan di situ ada yang method post delivered to di kantor dan rumah 🏡 bisa menjadi pilihan bagi Anda para penggemar gaya ngecek nio balik ka gerak ka hosting untuk ', 'Selesai'),
(9, 2, 6, 0, '2022-04-08 01:57:00', 'jaringan komputer diutamakan yg di adakan di kantor kk hosting yang di kantor kk hosting an kitacek bisa di gunakan untuk membuat suatu saat nanti di akhirat kelak di akhirat nanti di ', 'Di Ajukan'),
(10, 3, 1, 0, '2022-06-03 02:25:51', 'h', 'Di Ajukan'),
(11, 2, 1, 2, '2022-06-03 02:38:49', 'srfdgvvvfggv', 'Selesai'),
(12, 5, 8, 4, '2022-06-23 10:48:32', 'sambungan wifi tidak tersedia', 'Selesai'),
(13, 7, 11, 5, '2022-06-23 11:37:20', 'wifi tidak terhubung', 'Selesai'),
(14, 8, 10, 6, '2022-06-23 12:04:46', 'wifi tidak tersambung', 'Selesai'),
(15, 9, 12, 5, '2022-06-29 06:53:30', 'bang kabel tiang wifi putus', 'Selesai'),
(16, 10, 13, 6, '2022-06-29 08:51:54', 'bang jaringan wifinya tidak tersedia', 'Selesai'),
(17, 11, 14, 5, '2022-06-29 12:37:11', 'bang wifinya mati, wifi tidak tersambung bg', 'Selesai'),
(18, 12, 15, 6, '2022-07-02 04:50:16', 'bg kok jaringan wifinya tidak terhubungbg,dari tdi lai, alh 1 jam lebih', 'Selesai'),
(19, 13, 16, 6, '2022-07-03 09:38:28', 'bg wifi nya kok dari tadi mati ya bg, ngak terhubung bg', 'Selesai'),
(20, 14, 17, 5, '2022-07-08 16:31:09', 'wifi tidak terhubung', 'Selesai'),
(21, 4, 18, 6, '2022-07-14 08:08:22', 'tali kabel wifi putus', 'Selesai'),
(22, 6, 19, 5, '2022-07-14 07:48:03', 'bg wifi nya ngak nyambung dari tdi', 'Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `tb_konsumen`
--

CREATE TABLE `tb_konsumen` (
  `id_konsumen` int(11) NOT NULL,
  `nama_konsumen` varchar(255) NOT NULL,
  `alamat_konsumen` varchar(255) NOT NULL,
  `nohp_konsumen` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_konsumen`
--

INSERT INTO `tb_konsumen` (`id_konsumen`, `nama_konsumen`, `alamat_konsumen`, `nohp_konsumen`, `username`, `password`) VALUES
(1, 'gg', 'Jl. Ulak Karang Utara', '082124968578', 'gita', 'gita123'),
(2, 'Rendhika Aditya', 'Jl. Ulak Karang', '6282178554483', 'adit', '123'),
(3, 'test', 'Jl. Siteba', '087245336677', 'tesa talia', '123'),
(4, 'sania', 'Jl. Ulak Karang Selatan', '082392455512', 'sania', 'sania'),
(5, 'gia', 'Jl. Ulak Karang', '085244317770', 'gia', 'gia'),
(6, 'jeni', 'Jl. Kampung Lapai Padang', '08673738921', 'jeni', 'jeje'),
(7, 'fuji astuti', 'kampung lapai padang', '082151776221', 'fuji', 'fuji123'),
(8, 'nadia amira', 'ulak karang', '083185443301', 'nadia', 'nadia123'),
(9, 'Dwi Rahayu', 'Ulak Karang', '082392214440', 'dwi ', 'dwi123'),
(10, 'Arundina Ditalystia', 'Jl. Siteba', '085224111193', 'dina', 'dina123'),
(11, 'Yuni', 'Cimpago Putih Padang', '082388517040', 'Yuni', 'yuni123'),
(12, 'Sukma annisa', 'Jl. Ulak Karang', '085241117630', 'sukma', 'sukma123'),
(13, 'Fajar ramadhan', 'Jl. Ulak Karang Utara', '082169521311', 'fajar', 'fajar123'),
(14, 'wirna lestari', 'Jl. Ulak Karang', '083134533566', 'wirna', 'wirna123');

-- --------------------------------------------------------

--
-- Table structure for table `tb_korlap`
--

CREATE TABLE `tb_korlap` (
  `id_korlap` int(11) NOT NULL,
  `nama_korlap` varchar(255) NOT NULL,
  `alamat_korlap` varchar(255) NOT NULL,
  `nohp_korlap` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_korlap`
--

INSERT INTO `tb_korlap` (`id_korlap`, `nama_korlap`, `alamat_korlap`, `nohp_korlap`, `username`, `password`) VALUES
(3, 'dediwandi', 'padang', '082142335674', 'dedi', 'dediw1'),
(4, 'irwando ramadhan', 'cendana', '085276666013', 'irwan', 'ir123');

-- --------------------------------------------------------

--
-- Table structure for table `tb_teknisi`
--

CREATE TABLE `tb_teknisi` (
  `id_teknisi` int(11) NOT NULL,
  `nama_teknisi` varchar(255) NOT NULL,
  `alamat_teknisi` varchar(255) NOT NULL,
  `nohp_teknisi` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_teknisi`
--

INSERT INTO `tb_teknisi` (`id_teknisi`, `nama_teknisi`, `alamat_teknisi`, `nohp_teknisi`, `username`, `password`) VALUES
(5, 'diki ridwansyah', 'padang', '082354664222', 'diki', 'diki123'),
(6, 'renaldy', 'bandar buat', '082142222103', 'renal', 'renal123');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tiang`
--

CREATE TABLE `tb_tiang` (
  `id_tiang` int(11) NOT NULL,
  `nama_tiang` varchar(255) NOT NULL,
  `lat` varchar(255) NOT NULL,
  `lng` varchar(255) NOT NULL,
  `status_tiang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_tiang`
--

INSERT INTO `tb_tiang` (`id_tiang`, `nama_tiang`, `lat`, `lng`, `status_tiang`) VALUES
(10, 'nadiaamira', '-0.906910', '100.348180', ''),
(11, 'fuji astuti', '-0.903687', '100.357782', 'tidak terhubung'),
(12, 'Dwi Rahayu', '-0.907829', '100.347263', ''),
(13, 'Arundina Ditalystia', '-0.897543', '100.374404', ''),
(14, 'Yuni', '-0.933229', '100.375568', ''),
(15, 'Sukma annisa', '-0.911194', '100.354215', 'Baik'),
(16, 'Fajar ramadhan', '-0.907172', '100.346329', 'Baik'),
(18, 'sania', '-0.913474', '100.351125', 'baik'),
(19, 'jeni', '-0.907931', '100.357548', 'Baik');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_keluhan`
--
ALTER TABLE `tb_keluhan`
  ADD PRIMARY KEY (`id_keluhan`);

--
-- Indexes for table `tb_konsumen`
--
ALTER TABLE `tb_konsumen`
  ADD PRIMARY KEY (`id_konsumen`);

--
-- Indexes for table `tb_korlap`
--
ALTER TABLE `tb_korlap`
  ADD PRIMARY KEY (`id_korlap`);

--
-- Indexes for table `tb_teknisi`
--
ALTER TABLE `tb_teknisi`
  ADD PRIMARY KEY (`id_teknisi`);

--
-- Indexes for table `tb_tiang`
--
ALTER TABLE `tb_tiang`
  ADD PRIMARY KEY (`id_tiang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_keluhan`
--
ALTER TABLE `tb_keluhan`
  MODIFY `id_keluhan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tb_konsumen`
--
ALTER TABLE `tb_konsumen`
  MODIFY `id_konsumen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_korlap`
--
ALTER TABLE `tb_korlap`
  MODIFY `id_korlap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_teknisi`
--
ALTER TABLE `tb_teknisi`
  MODIFY `id_teknisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_tiang`
--
ALTER TABLE `tb_tiang`
  MODIFY `id_tiang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
