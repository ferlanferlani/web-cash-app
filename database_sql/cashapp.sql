-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2021 at 03:53 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cashapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` int(255) NOT NULL,
  `level` enum('admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', 0, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `agustus`
--

CREATE TABLE `agustus` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tunai` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agustus`
--

INSERT INTO `agustus` (`id`, `nama`, `tunai`) VALUES
(6, 'Berhasil', '5.000');

-- --------------------------------------------------------

--
-- Table structure for table `april`
--

CREATE TABLE `april` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tunai` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `april`
--

INSERT INTO `april` (`id`, `nama`, `tunai`) VALUES
(6, 'Berhasil', '1.000');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `judul` text NOT NULL,
  `tanggal` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `desember`
--

CREATE TABLE `desember` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tunai` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `desember`
--

INSERT INTO `desember` (`id`, `nama`, `tunai`) VALUES
(4, 'Berhasil', '5.000');

-- --------------------------------------------------------

--
-- Table structure for table `februari`
--

CREATE TABLE `februari` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tunai` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `februari`
--

INSERT INTO `februari` (`id`, `nama`, `tunai`) VALUES
(13, 'berhasil', '5.000');

-- --------------------------------------------------------

--
-- Table structure for table `januari`
--

CREATE TABLE `januari` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tunai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `januari`
--

INSERT INTO `januari` (`id`, `nama`, `tunai`) VALUES
(145, 'test', '10.000');

-- --------------------------------------------------------

--
-- Table structure for table `jiwa`
--

CREATE TABLE `jiwa` (
  `id` int(11) NOT NULL,
  `jiwa` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jiwa`
--

INSERT INTO `jiwa` (`id`, `jiwa`) VALUES
(1, '50');

-- --------------------------------------------------------

--
-- Table structure for table `juli`
--

CREATE TABLE `juli` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tunai` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `juli`
--

INSERT INTO `juli` (`id`, `nama`, `tunai`) VALUES
(5, 'Berhasil', '5.000');

-- --------------------------------------------------------

--
-- Table structure for table `juni`
--

CREATE TABLE `juni` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tunai` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `juni`
--

INSERT INTO `juni` (`id`, `nama`, `tunai`) VALUES
(5, 'Berhasil', '5.000');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` int(20) NOT NULL,
  `id_art` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `isi_komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `maret`
--

CREATE TABLE `maret` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tunai` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `maret`
--

INSERT INTO `maret` (`id`, `nama`, `tunai`) VALUES
(7, 'Berhasil', '5.000');

-- --------------------------------------------------------

--
-- Table structure for table `mei`
--

CREATE TABLE `mei` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tunai` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mei`
--

INSERT INTO `mei` (`id`, `nama`, `tunai`) VALUES
(5, 'Berhasil', '5.000');

-- --------------------------------------------------------

--
-- Table structure for table `multi_user`
--

CREATE TABLE `multi_user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `multi_user`
--

INSERT INTO `multi_user` (`id`, `username`, `password`, `level`) VALUES
(5, 'user', '$2y$10$Ti8bDztLkL1xHb4NqXiT4u1jABq.G4JYSQi57PsKfDJy.X4HGnq2.', 'user'),
(10, 'admin', '$2y$10$LvmUkD7L8aAriISbdWyqfO2jdA8b05.nqbq9LWYNAwsIgTzh6XvVi', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `november`
--

CREATE TABLE `november` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tunai` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `november`
--

INSERT INTO `november` (`id`, `nama`, `tunai`) VALUES
(3, 'Berhasil', '5.000');

-- --------------------------------------------------------

--
-- Table structure for table `oktober`
--

CREATE TABLE `oktober` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tunai` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `oktober`
--

INSERT INTO `oktober` (`id`, `nama`, `tunai`) VALUES
(3, 'Berhasil', '5.000');

-- --------------------------------------------------------

--
-- Table structure for table `pemasukan`
--

CREATE TABLE `pemasukan` (
  `id` int(11) NOT NULL,
  `pemasukan` varchar(30) NOT NULL,
  `waktu` varchar(30) NOT NULL,
  `keterangan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemasukan`
--

INSERT INTO `pemasukan` (`id`, `pemasukan`, `waktu`, `keterangan`) VALUES
(2, '200.000', 'Minggu, 15 Januari2020', 'keterangan masuknya dana');

-- --------------------------------------------------------

--
-- Table structure for table `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `id` int(11) NOT NULL,
  `pengeluaran` varchar(30) NOT NULL,
  `waktu` varchar(30) NOT NULL,
  `keterangan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengeluaran`
--

INSERT INTO `pengeluaran` (`id`, `pengeluaran`, `waktu`, `keterangan`) VALUES
(1, '60.000', 'Selasa, 21 Agustus 2020', 'Ini keterangan keluarnya dana');

-- --------------------------------------------------------

--
-- Table structure for table `pengingat`
--

CREATE TABLE `pengingat` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `judul` text NOT NULL,
  `waktu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `september`
--

CREATE TABLE `september` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tunai` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `september`
--

INSERT INTO `september` (`id`, `nama`, `tunai`) VALUES
(3, 'Berhasil', '5.000');

-- --------------------------------------------------------

--
-- Table structure for table `topik`
--

CREATE TABLE `topik` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `waktu` varchar(40) NOT NULL,
  `isi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agustus`
--
ALTER TABLE `agustus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `april`
--
ALTER TABLE `april`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `desember`
--
ALTER TABLE `desember`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `februari`
--
ALTER TABLE `februari`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `januari`
--
ALTER TABLE `januari`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jiwa`
--
ALTER TABLE `jiwa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `juli`
--
ALTER TABLE `juli`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `juni`
--
ALTER TABLE `juni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maret`
--
ALTER TABLE `maret`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mei`
--
ALTER TABLE `mei`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `multi_user`
--
ALTER TABLE `multi_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `november`
--
ALTER TABLE `november`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oktober`
--
ALTER TABLE `oktober`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemasukan`
--
ALTER TABLE `pemasukan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengingat`
--
ALTER TABLE `pengingat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `september`
--
ALTER TABLE `september`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topik`
--
ALTER TABLE `topik`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `agustus`
--
ALTER TABLE `agustus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `april`
--
ALTER TABLE `april`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `desember`
--
ALTER TABLE `desember`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `februari`
--
ALTER TABLE `februari`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `januari`
--
ALTER TABLE `januari`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT for table `jiwa`
--
ALTER TABLE `jiwa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `juli`
--
ALTER TABLE `juli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `juni`
--
ALTER TABLE `juni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `maret`
--
ALTER TABLE `maret`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mei`
--
ALTER TABLE `mei`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `multi_user`
--
ALTER TABLE `multi_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `november`
--
ALTER TABLE `november`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `oktober`
--
ALTER TABLE `oktober`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pemasukan`
--
ALTER TABLE `pemasukan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pengingat`
--
ALTER TABLE `pengingat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `september`
--
ALTER TABLE `september`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `topik`
--
ALTER TABLE `topik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
