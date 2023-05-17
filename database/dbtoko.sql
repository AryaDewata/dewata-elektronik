-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2023 at 10:59 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbtoko`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `Id_barang` int(11) NOT NULL,
  `Nama_barang` varchar(50) NOT NULL,
  `Satuan` varchar(25) NOT NULL,
  `Harga_beli` decimal(10,0) NOT NULL,
  `Harga_jual` decimal(10,0) NOT NULL,
  `Jumlah_stok` int(11) NOT NULL,
  `User_name` varchar(25) NOT NULL,
  `Tgl_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`Id_barang`, `Nama_barang`, `Satuan`, `Harga_beli`, `Harga_jual`, `Jumlah_stok`, `User_name`, `Tgl_input`) VALUES
(123, 'Earphone Bluetooth 5.0', 'pcs', '22000', '26000', 7, 'adam', '2023-05-16'),
(132, 'Nintendo Switch', 'pcs', '5300000', '5569000', 1, 'admin', '2023-05-16'),
(213, 'Sony Playstation 3 Slim 500GB Full Game', 'pcs', '1899000', '2100000', 1, 'asep', '2023-05-16'),
(321, 'Printer Thermal EPPOS PLUS', 'pcs', '225000', '249000', 5, 'kentang', '2023-05-16'),
(456, 'Keyboard RGB', 'pcs', '84000', '92000', 3, 'irwan', '2023-05-16'),
(546, 'Sony Playstation 4 Slim 500GB Full Game', 'pcs', '4250000', '4499000', 1, 'rudi', '2023-05-16'),
(654, 'Mouse Optic USB', 'pcs', '24000', '30000', 4, 'gusta', '2023-05-16'),
(789, 'Printer EPSON T13', 'pcs', '400000', '459000', 2, 'Sofi', '2023-05-16'),
(879, 'Sony Playstation 5 Disc Edition 825GB', 'pcs', '8446000', '9359000', 1, 'bambang', '2023-05-16'),
(987, 'Sony Playstation 2 Fat 40GB Full Game', 'pcs', '846000', '1229000', 1, 'adi', '2023-05-16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`Id_barang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
