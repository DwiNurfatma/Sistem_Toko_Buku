-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2020 at 07:07 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

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
  `id_admin` varchar(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `email`, `password`, `alamat`) VALUES
('Admin-1', 'Gracea', 'grace@gmail.com', '38ab93488e52710515c3095a83a92bcf', 'Temanggung');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` varchar(200) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `pengarang` varchar(200) NOT NULL,
  `harga` varchar(200) NOT NULL,
  `stok` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `id_sup` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul`, `pengarang`, `harga`, `stok`, `image`, `id_sup`) VALUES
('EK-3', 'Jingga dan Senja dan matahari', 'Esti Kinasih', 'Rp 50.000,00', '5', 'jingga dan senja.jpg', 'SUP-2'),
('FB-1', 'Garis Waktu', 'Fiersa Besari', 'Rp 80.000,00', '6', 'garis waktu.jpg', 'SUP-4'),
('GB-1', 'Jingga dan Matahari', 'Esti Kinasih', 'Rp 97.000,00', '1', 'jingga dan matahari.jpg', 'SUP-4'),
('JG-1', 'Dunia Anna', 'Jostein Gaarder', 'Rp 104.000,00', '9', 'dunia anna.jpg', 'SUP-3'),
('JG-2', 'Dunia Cecilia', 'Jostein Gaarder', 'Rp 100.000,00', '9', 'dunia cecilia.jpg', 'SUP-3'),
('JG-3', 'Dunia Sophie', 'Josten Gaarder', 'Rp 110.000,00', '1', 'dunia sophie.jpg\r\n', 'SUP-3'),
('KN-1', 'Flow in You', 'Kania', 'Rp 56.000,00', '5', 'flow in you.png', 'SUP-2'),
('TL-1', 'Bulan', 'Tere Liye', 'Rp 76.000,00', '20', 'bulan.jpg', 'SUP-1'),
('TL-2', 'Hujan', 'Tere Liye', 'Rp 90.000,00', '10', 'hujan.jpg', 'SUP-1'),
('TL-3', 'Selene', 'Tere Liye', 'Rp 135.000,00', '6', 'selene.jpg', 'SUP-1'),
('TL-4', 'Pulang', 'Tere Liye', 'Rp 75.000,00', '6', 'pulang.jpg', 'SUP-1'),
('TL-5', 'Komet', 'Tere Liye', 'Rp 95.000,00', '70', 'komet.jpg', 'SUP-1'),
('TL-6', 'Harga Sebuah Percaya', 'Tere Liye', 'Rp 71.000,00', '10', 'harga sebuah percaya.jpg', 'SUP-1'),
('WA-1', 'Senyum Sahabat', 'Edelweis Almira', 'Rp 95.000,00', '4', 'senyum sahabat.png', 'SUP-5');

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE `pembeli` (
  `id_user` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembeli`
--

INSERT INTO `pembeli` (`id_user`, `email`, `password`, `nama`, `alamat`) VALUES
('Dwi', 'dwi@gmail.com', '38ab93488e52710515c3095a83a92bcf', 'Dwi nurfatma', 'semarang'),
('fatma', 'fatmaguuzel@gmail.com', '38ab93488e52710515c3095a83a92bcf', 'Dwi nurfatma', 'hh'),
('nur', 'fatma@gmail.com', '38ab93488e52710515c3095a83a92bcf', 'nur', 'temanggung');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id_belanja` varchar(200) NOT NULL,
  `id_buku` varchar(200) NOT NULL,
  `jumlah` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id_belanja`, `id_buku`, `jumlah`) VALUES
('a1', 'FB-1', '2');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id_sup` varchar(200) NOT NULL,
  `nama_sup` varchar(200) NOT NULL,
  `no_hp` varchar(200) NOT NULL,
  `alamat_sup` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_sup`, `nama_sup`, `no_hp`, `alamat_sup`) VALUES
('SUP-1', 'MizanStore', '081736283782', 'Jalan Merpati 2, Jakarta Utara'),
('SUP-2', 'Periplus', '082617291826', 'Jalan Melati, Jakarta Selatan'),
('SUP-3', 'ShiraMedia', '082628192816', 'Jalan Mawar, Jakarta Selatan'),
('SUP-4', 'MojokStore', '081826102917', 'Jalan Anggrek Raya, Jakarta Utara'),
('SUP-5', 'NiaOnlineStore', '08932932932', 'Jalan Raflesia Arnoldi, Jakarta Pusat');

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
  ADD PRIMARY KEY (`id_buku`),
  ADD KEY `fk_sup` (`id_sup`);

--
-- Indexes for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_belanja`),
  ADD KEY `fk_buku` (`id_buku`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_sup`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `buku`
--
ALTER TABLE `buku`
  ADD CONSTRAINT `fk_sup` FOREIGN KEY (`id_sup`) REFERENCES `supplier` (`id_sup`);

--
-- Constraints for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `fk_buku` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
