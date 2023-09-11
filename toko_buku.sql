-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2023 at 04:44 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_buku`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(25) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(3, 'admin1', '$2y$10$mPBcYimvTDzum.DT0o52C.nZNkLz8f/sFoqnls0tO27whr5yBUUpO'),
(4, 'admin2', '$2y$10$5hlEVhpTAfmoH7EbMULevO56LU3dKwDIpiIdhgLFFaycupl/UD7Ze'),
(6, 'admin3', '$2y$10$j5mgJ0WRhf.6MZkDXVzlXOJ3UMUnC8Fpq8Y6sMQJRwuFiGC2lrNr6'),
(7, 'admin5', '$2y$10$qvuX5qnbdpZGWpX4Von0fuPwDQmV68KbVgQVdxC.4BiEmOyqNQX2O'),
(14, 'admin6', '$2y$10$6g2ZnE/Z7A59B.ELBjRfsu30DejH7e3hjU3c5ya47QE.oQZMY9lEO'),
(15, 'admin7', '$2y$10$IJpE33PXNagUA1zPwqeDAe5qsc7SYuUEvqV9OgluTRM7zNJlS2kMm'),
(16, 'admin8', '$2y$10$PC9fxBioVOQ9smkf.C2FAukctm1H0/YkLz0ew9g1B38A96O68N/8G'),
(17, 'admin9', '$2y$10$47wQGiiOLOSH.UVUGHEvFuN5N/QK2OSUtsWllOFCHS2kUVcpV76Ny');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `kode_buku` varchar(200) NOT NULL,
  `judul` varchar(400) NOT NULL,
  `penulis` varchar(400) NOT NULL,
  `tahun` varchar(20) NOT NULL,
  `harga` double NOT NULL,
  `stok` double NOT NULL,
  `image` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`kode_buku`, `judul`, `penulis`, `tahun`, `harga`, `stok`, `image`) VALUES
('001', 'Membuat Aplikasi Penggajian Dengan Laravel Dan Postgree SQL', 'Nuris Akbar M.KOM', '2019', 140000, 9, '001-464.jpg'),
('002', 'Buku Data Mining Untuk Klasifikasi dan Klasterisasi Data', 'Dr. Suyanto', '2018', 100000, 8, '002-533.png'),
('003', 'Mastering VMware vSphere 6.5', 'Andrea Mauro', '2015', 120000, 3, '003-93.jpeg'),
('005', 'Data Mining dan Big Data Analytics', 'Budi Santosa & Ardian Umam', '2017', 120000, 1, '005-729.jpg'),
('006', 'Buku Pemrograman Semua Bisa Menjadi Programmer Laravel Basic Original', 'Andre Pratama', '2017', 94750, 5, '006-56.png'),
('007', 'Buku Belajar Otodidak Framework Codeigniter - Budi Raharjo', 'Budi Raharjo', '2019', 80000, 3, '007-757.jpg'),
('008', 'Buku Analisis Dan Perancangan Sistem Basis Data', 'Wahyuni Reksoatmojo', '2018', 80450, 6, '008-510.png'),
('009', 'Buku MySQL Uncover - Panduan Belajar MySQL/MariaDB untuk Pemula - Buku Cetak', 'Andre Pratama / Duniailkom', '2015', 225000, 16, '009-24.png'),
('010', 'Artificial Intelligence', 'Bashir Hanafi', '2017', 100000, 3, '010-133.jpg'),
('011', 'Organisasi Komputer', 'Tasyalia Fajrina', '2018', 210000, 2, '011-834.jpg'),
('012', 'Jaringan Komputer', 'Bashir gilang', '2009', 90000, 2, '012-264.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `counterdb`
--

CREATE TABLE `counterdb` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `ip_address` varchar(20) CHARACTER SET latin1 NOT NULL,
  `counter` varchar(20) CHARACTER SET latin1 NOT NULL,
  `browser` varchar(20) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `counterdb`
--

INSERT INTO `counterdb` (`id`, `tanggal`, `ip_address`, `counter`, `browser`) VALUES
(1, '2020-03-30', '192.168.64.1', '1', 'chrome'),
(2, '2020-03-30', '192.168.64.1', '1', ''),
(3, '2020-03-30', '192.168.64.1', '1', ''),
(4, '2020-03-30', '192.168.64.1', '1', '0'),
(5, '2020-03-30', '192.168.64.1', '1', '0'),
(6, '2020-03-30', '192.168.64.1', '1', '0'),
(7, '2023-06-08', '::1', '1', 'Chrome/Opera'),
(8, '2023-06-09', '::1', '1', 'Chrome/Opera'),
(9, '2023-06-09', '::1', '1', 'Chrome/Opera'),
(10, '2023-06-09', '::1', '1', 'Chrome/Opera'),
(11, '2023-06-09', '::1', '1', 'Chrome/Opera'),
(12, '2023-06-09', '::1', '1', 'Chrome/Opera'),
(13, '2023-06-09', '::1', '1', 'Chrome/Opera'),
(14, '2023-06-09', '::1', '1', 'Chrome/Opera'),
(15, '2023-06-09', '::1', '1', 'Chrome/Opera'),
(16, '2023-06-09', '::1', '1', 'Chrome/Opera'),
(17, '2023-06-09', '::1', '1', 'Chrome/Opera'),
(18, '2023-06-09', '::1', '1', 'Chrome/Opera'),
(19, '2023-06-09', '::1', '1', 'Chrome/Opera'),
(20, '2023-06-09', '::1', '1', 'Chrome/Opera'),
(21, '2023-06-10', '::1', '1', 'Chrome/Opera'),
(22, '2023-06-10', '::1', '1', 'Chrome/Opera'),
(23, '2023-06-10', '::1', '1', 'Chrome/Opera'),
(24, '2023-06-11', '::1', '1', 'Chrome/Opera'),
(25, '2023-06-12', '::1', '1', 'Chrome/Opera'),
(26, '2023-06-12', '::1', '1', 'Chrome/Opera'),
(27, '2023-06-12', '::1', '1', 'Chrome/Opera'),
(28, '2023-06-12', '::1', '1', 'Chrome/Opera'),
(29, '2023-06-12', '::1', '1', 'Chrome/Opera'),
(30, '2023-06-12', '::1', '1', 'Chrome/Opera'),
(31, '2023-06-12', '::1', '1', 'Chrome/Opera'),
(32, '2023-06-12', '::1', '1', 'Chrome/Opera'),
(33, '2023-06-13', '::1', '1', 'Chrome/Opera'),
(34, '2023-06-13', '::1', '1', 'Chrome/Opera'),
(35, '2023-06-13', '::1', '1', 'Chrome/Opera'),
(36, '2023-06-13', '::1', '1', 'Chrome/Opera'),
(37, '2023-06-13', '::1', '1', 'Chrome/Opera'),
(38, '2023-06-13', '::1', '1', 'Chrome/Opera'),
(39, '2023-06-13', '::1', '1', 'Chrome/Opera'),
(40, '2023-06-13', '::1', '1', 'Chrome/Opera');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` varchar(30) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `alamat` text NOT NULL,
  `kontak` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nama`, `alamat`, `kontak`) VALUES
('1291', 'Tasyalia', 'Kotabaru', '0857289583'),
('2003', 'Nadin', 'BJB', '08134272821'),
('2387', 'Bashir', 'Kotabaru', '0852332828'),
('3311', 'Vera', 'Banjarbaru', '08539173226'),
('4282', 'Dianty', 'Banjarbaru', '0821848272'),
('4332', 'Bina', 'Bjb', '085218838223'),
('5328', 'Pita', 'Banjarbaru', '0852848284'),
('6372', 'Haris', 'Martapura', '0852577733'),
('8291', 'Dara', 'Banjarbaru', '08233992205'),
('8874', 'Arkan', 'Banjar', '09328732727');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `no_induk` varchar(25) NOT NULL,
  `id_admin` int(25) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `kontak` varchar(20) NOT NULL,
  `jenis_kelamin` enum('Perempuan','Laki-laki') NOT NULL,
  `ttl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`no_induk`, `id_admin`, `nama`, `alamat`, `kontak`, `jenis_kelamin`, `ttl`) VALUES
('B001', 3, 'Hanan', 'Martapura', '08153992205', 'Perempuan', '2000-01-18'),
('B002', 4, 'Fadhel', 'Banjarbaru', '0813737471', 'Laki-laki', '1998-06-19'),
('B003', 6, 'caca', 'Banjarbaru', '0837171718', 'Perempuan', '1999-06-17'),
('B004', 7, 'Fara', 'Banjarbaru', '0852848282', 'Perempuan', '2003-05-21'),
('B005', 14, 'Mala', 'Bandung', '09537928282', 'Perempuan', '2000-04-03'),
('B006', 15, 'Galang', 'Banjarbaru', '0852647382', 'Laki-laki', '2000-02-12'),
('B007', 16, 'Rini', 'Martapura', '0852484819', 'Perempuan', '2000-04-21'),
('B008', 17, 'Yasmin', 'Martapura', '08525251221', 'Perempuan', '2000-04-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`kode_buku`);

--
-- Indexes for table `counterdb`
--
ALTER TABLE `counterdb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`no_induk`),
  ADD KEY `profil_ibfk_1` (`id_admin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `counterdb`
--
ALTER TABLE `counterdb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `profil`
--
ALTER TABLE `profil`
  ADD CONSTRAINT `profil_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
