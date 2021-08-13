-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jul 2021 pada 19.12
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `soal_ghani`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pilihan_ganda`
--

CREATE TABLE `pilihan_ganda` (
  `nomer` int(11) NOT NULL,
  `pertanyaan` varchar(200) NOT NULL,
  `jawab_a` varchar(200) NOT NULL,
  `jawab_b` varchar(200) NOT NULL,
  `jawab_c` varchar(200) NOT NULL,
  `jawab_d` varchar(200) NOT NULL,
  `jawab_e` varchar(200) NOT NULL,
  `jawaban` enum('a','b','c','d','e') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pilihan_ganda`
--

INSERT INTO `pilihan_ganda` (`nomer`, `pertanyaan`, `jawab_a`, `jawab_b`, `jawab_c`, `jawab_d`, `jawab_e`, `jawaban`) VALUES
(1, 'Siapakah presiden ke-3 di Indonesia', 'habibie', 'soekarno', 'SBY', 'jokowi', 'megawati', 'a');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pilihan_ganda`
--
ALTER TABLE `pilihan_ganda`
  ADD PRIMARY KEY (`nomer`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pilihan_ganda`
--
ALTER TABLE `pilihan_ganda`
  MODIFY `nomer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
