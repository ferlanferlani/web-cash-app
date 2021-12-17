-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Des 2021 pada 08.02
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.0.13

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
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(4, 'admin', '$2y$10$7kONJ8S92YyUX9Z8DBkopOXohF3tzwuXYemrMP0II0FVd.mcKqOUO');

-- --------------------------------------------------------

--
-- Struktur dari tabel `agustus`
--

CREATE TABLE `agustus` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tunai` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `agustus`
--

INSERT INTO `agustus` (`id`, `nama`, `tunai`) VALUES
(6, 'Berhasil', '5.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `april`
--

CREATE TABLE `april` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tunai` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `april`
--

INSERT INTO `april` (`id`, `nama`, `tunai`) VALUES
(6, 'Berhasil', '1.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `judul` text NOT NULL,
  `tanggal` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data`
--

INSERT INTO `data` (`id`, `nama`) VALUES
(62, 'test');

-- --------------------------------------------------------

--
-- Struktur dari tabel `desember`
--

CREATE TABLE `desember` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tunai` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `desember`
--

INSERT INTO `desember` (`id`, `nama`, `tunai`) VALUES
(4, 'Berhasil', '5.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `februari`
--

CREATE TABLE `februari` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tunai` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `februari`
--

INSERT INTO `februari` (`id`, `nama`, `tunai`) VALUES
(13, 'berhasil', '5.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `januari`
--

CREATE TABLE `januari` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tunai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `januari`
--

INSERT INTO `januari` (`id`, `nama`, `tunai`) VALUES
(145, 'test', '10.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jiwa`
--

CREATE TABLE `jiwa` (
  `id` int(11) NOT NULL,
  `jiwa` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jiwa`
--

INSERT INTO `jiwa` (`id`, `jiwa`) VALUES
(1, '50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `juli`
--

CREATE TABLE `juli` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tunai` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `juli`
--

INSERT INTO `juli` (`id`, `nama`, `tunai`) VALUES
(5, 'Berhasil', '5.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `juni`
--

CREATE TABLE `juni` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tunai` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `juni`
--

INSERT INTO `juni` (`id`, `nama`, `tunai`) VALUES
(5, 'Berhasil', '5.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
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
-- Struktur dari tabel `maret`
--

CREATE TABLE `maret` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tunai` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `maret`
--

INSERT INTO `maret` (`id`, `nama`, `tunai`) VALUES
(7, 'Berhasil', '5.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mei`
--

CREATE TABLE `mei` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tunai` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mei`
--

INSERT INTO `mei` (`id`, `nama`, `tunai`) VALUES
(5, 'Berhasil', '5.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `november`
--

CREATE TABLE `november` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tunai` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `november`
--

INSERT INTO `november` (`id`, `nama`, `tunai`) VALUES
(3, 'Berhasil', '5.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `oktober`
--

CREATE TABLE `oktober` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tunai` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `oktober`
--

INSERT INTO `oktober` (`id`, `nama`, `tunai`) VALUES
(3, 'Berhasil', '5.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemasukan`
--

CREATE TABLE `pemasukan` (
  `id` int(11) NOT NULL,
  `pemasukan` varchar(30) NOT NULL,
  `waktu` varchar(30) NOT NULL,
  `keterangan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemasukan`
--

INSERT INTO `pemasukan` (`id`, `pemasukan`, `waktu`, `keterangan`) VALUES
(2, '200.000', 'Minggu, 15 Januari2020', 'keterangan masuknya dana');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `id` int(11) NOT NULL,
  `pengeluaran` varchar(30) NOT NULL,
  `waktu` varchar(30) NOT NULL,
  `keterangan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengeluaran`
--

INSERT INTO `pengeluaran` (`id`, `pengeluaran`, `waktu`, `keterangan`) VALUES
(1, '60.000', 'Selasa, 21 Agustus 2020', 'Ini keterangan keluarnya dana');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengingat`
--

CREATE TABLE `pengingat` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `judul` text NOT NULL,
  `waktu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `september`
--

CREATE TABLE `september` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tunai` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `september`
--

INSERT INTO `september` (`id`, `nama`, `tunai`) VALUES
(3, 'Berhasil', '5.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `topik`
--

CREATE TABLE `topik` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `waktu` varchar(40) NOT NULL,
  `isi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama_panggilan` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `nama_panggilan`, `email`, `password`) VALUES
(4, 'user', 'kang user', 'user@gmail.com', '$2y$10$.uy0FD/6EX6jANVWKGllSeSRvl4gYC6NKSs5tjG5GrsBm.b03LoUC');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `agustus`
--
ALTER TABLE `agustus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `april`
--
ALTER TABLE `april`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `desember`
--
ALTER TABLE `desember`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `februari`
--
ALTER TABLE `februari`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `januari`
--
ALTER TABLE `januari`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jiwa`
--
ALTER TABLE `jiwa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `juli`
--
ALTER TABLE `juli`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `juni`
--
ALTER TABLE `juni`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `maret`
--
ALTER TABLE `maret`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mei`
--
ALTER TABLE `mei`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `november`
--
ALTER TABLE `november`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `oktober`
--
ALTER TABLE `oktober`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pemasukan`
--
ALTER TABLE `pemasukan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengingat`
--
ALTER TABLE `pengingat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `september`
--
ALTER TABLE `september`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `topik`
--
ALTER TABLE `topik`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `agustus`
--
ALTER TABLE `agustus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `april`
--
ALTER TABLE `april`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT untuk tabel `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT untuk tabel `desember`
--
ALTER TABLE `desember`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `februari`
--
ALTER TABLE `februari`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `januari`
--
ALTER TABLE `januari`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT untuk tabel `jiwa`
--
ALTER TABLE `jiwa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `juli`
--
ALTER TABLE `juli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `juni`
--
ALTER TABLE `juni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT untuk tabel `maret`
--
ALTER TABLE `maret`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `mei`
--
ALTER TABLE `mei`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `november`
--
ALTER TABLE `november`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `oktober`
--
ALTER TABLE `oktober`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pemasukan`
--
ALTER TABLE `pemasukan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pengingat`
--
ALTER TABLE `pengingat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `september`
--
ALTER TABLE `september`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `topik`
--
ALTER TABLE `topik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
