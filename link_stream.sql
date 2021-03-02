-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 02 Mar 2021 pada 04.51
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `radioo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `link_stream`
--

CREATE TABLE `link_stream` (
  `ID_STREAM` int(11) NOT NULL,
  `LINK` text NOT NULL,
  `TANGGAL_STREAM` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `link_stream`
--

INSERT INTO `link_stream` (`ID_STREAM`, `LINK`, `TANGGAL_STREAM`) VALUES
(1, 'WWW.PRONGHUB.COM', '2021-03-02');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `link_stream`
--
ALTER TABLE `link_stream`
  ADD PRIMARY KEY (`ID_STREAM`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `link_stream`
--
ALTER TABLE `link_stream`
  MODIFY `ID_STREAM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
