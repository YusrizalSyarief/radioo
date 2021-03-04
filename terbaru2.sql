-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 04 Mar 2021 pada 15.24
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
-- Struktur dari tabel `buku_tamu`
--

CREATE TABLE `buku_tamu` (
  `ID_TAMU` int(11) NOT NULL,
  `NAMA_TAMU` varchar(128) DEFAULT NULL,
  `EMAIL_TAMU` varchar(128) DEFAULT NULL,
  `PESAN` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku_tamu`
--

INSERT INTO `buku_tamu` (`ID_TAMU`, `NAMA_TAMU`, `EMAIL_TAMU`, `PESAN`) VALUES
(1, 'rizal', 'y@gmail.com', 'asdfasdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `ID_GALERI` int(11) NOT NULL,
  `ID_KATEGORI` int(11) DEFAULT NULL,
  `NAMA_FILE` text DEFAULT NULL,
  `KATEGORI` varchar(30) DEFAULT NULL,
  `JUDUL` text DEFAULT NULL,
  `DESCK_GALERI` text DEFAULT NULL,
  `TANGGAL` date DEFAULT NULL,
  `GAMBAR_GALERI` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `ID_JADWAL` int(11) NOT NULL,
  `ID_PENYIAR` int(11) DEFAULT NULL,
  `JUDUL_JADWAL` text DEFAULT NULL,
  `TANGGAL_JADWAL` date DEFAULT NULL,
  `WAKTU` time DEFAULT NULL,
  `DESCK_JADWAL` text DEFAULT NULL,
  `GAMBAR_JADWAL` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_galeri`
--

CREATE TABLE `kategori_galeri` (
  `ID_KATEGORI` int(11) NOT NULL,
  `NAMA_KATEGORI` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori_galeri`
--

INSERT INTO `kategori_galeri` (`ID_KATEGORI`, `NAMA_KATEGORI`) VALUES
(1, 'Music'),
(2, 'Podcast'),
(3, 'politik'),
(4, 'coba'),
(5, 'cobs lagi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `ID_KOMENTAR` int(11) NOT NULL,
  `KOMENTAR` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyiar`
--

CREATE TABLE `penyiar` (
  `ID_PENYIAR` int(11) NOT NULL,
  `NAMA_PENYIAR` varchar(128) DEFAULT NULL,
  `NO_TLP_PENYIAR` varchar(15) DEFAULT NULL,
  `DESCK` text DEFAULT NULL,
  `GAMBAR_PENYIAR` text DEFAULT NULL,
  `INSTAGRAM` text DEFAULT NULL,
  `FACEBOOK` text DEFAULT NULL,
  `TWITTER` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rating`
--

CREATE TABLE `rating` (
  `ID_RATING` int(11) NOT NULL,
  `ID_JADWAL` int(11) DEFAULT NULL,
  `ID_PENYIAR` int(11) DEFAULT NULL,
  `ID_USER` int(11) DEFAULT NULL,
  `ID_KOMENTAR` int(11) DEFAULT NULL,
  `ID_GALERI` int(11) DEFAULT NULL,
  `KATEGORI_RATING` text DEFAULT NULL,
  `RATING` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rating`
--

INSERT INTO `rating` (`ID_RATING`, `ID_JADWAL`, `ID_PENYIAR`, `ID_USER`, `ID_KOMENTAR`, `ID_GALERI`, `KATEGORI_RATING`, `RATING`) VALUES
(1, NULL, NULL, 20, NULL, NULL, 'website', 1),
(2, NULL, NULL, 20, NULL, NULL, 'website', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `ID_USER` int(11) NOT NULL,
  `ID_ROLE` smallint(6) DEFAULT NULL,
  `EMAIL` varchar(128) NOT NULL,
  `NAMA` varchar(128) DEFAULT NULL,
  `PASSWORD` varchar(50) DEFAULT NULL,
  `NO_TLP` varchar(15) DEFAULT NULL,
  `USER_ACTIVE` smallint(6) DEFAULT NULL,
  `GAMBAR` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`ID_USER`, `ID_ROLE`, `EMAIL`, `NAMA`, `PASSWORD`, `NO_TLP`, `USER_ACTIVE`, `GAMBAR`) VALUES
(20, 1, 'syariefyusrizal@gmail.com', 'YUSRIZAL SYARIEF', '@082334900069', '082334900069', 1, 'H06218021_(1).jpg'),
(21, 2, 'syariefyusrizal3@gmail.com', 'rizal', '12345678', '082334900069', 1, 'H06218021_(1).jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `ID_ACCES` int(11) NOT NULL,
  `ID_ROLE` smallint(6) DEFAULT NULL,
  `ID_MENU` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`ID_ACCES`, `ID_ROLE`, `ID_MENU`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 2, 4),
(5, 2, 2),
(6, 2, 3),
(7, 3, 4),
(8, 1, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_ip`
--

CREATE TABLE `user_ip` (
  `ID_IP` int(11) NOT NULL,
  `IP` text NOT NULL,
  `TANGGAL_IP` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_ip`
--

INSERT INTO `user_ip` (`ID_IP`, `IP`, `TANGGAL_IP`) VALUES
(61, '::1', '2021-03-03'),
(62, '::1', '2021-03-03'),
(63, '::1', '2021-03-03'),
(64, '::1', '2021-03-03'),
(65, '::1', '2021-03-03'),
(66, '::1', '2021-03-03'),
(67, '::1', '2021-03-03'),
(68, '::1', '2021-03-03'),
(69, '::1', '2021-03-03'),
(70, '::1', '2021-03-03'),
(71, '::1', '2021-03-03'),
(72, '::1', '2021-03-03'),
(73, '::1', '2021-03-03'),
(74, '::1', '2021-03-04'),
(75, '::1', '2021-03-04'),
(76, '::1', '2021-03-04'),
(77, '::1', '2021-03-04'),
(78, '::1', '2021-03-04'),
(79, '::1', '2021-03-04'),
(80, '::1', '2021-03-04'),
(81, '::1', '2021-03-04'),
(82, '::1', '2021-03-04'),
(83, '::1', '2021-03-04'),
(84, '::1', '2021-03-04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `ID_MENU` smallint(6) NOT NULL,
  `NAMA_MENU` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`ID_MENU`, `NAMA_MENU`) VALUES
(1, 'Super Admin'),
(2, 'Administrasi'),
(3, 'Konfigurasi Konten'),
(4, 'Konten');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `ID_ROLE` smallint(6) NOT NULL,
  `ROLE` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`ID_ROLE`, `ROLE`) VALUES
(1, 'Super Admin'),
(2, 'Admin'),
(3, 'User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `ID_SUB` int(11) NOT NULL,
  `ID_MENU` smallint(6) DEFAULT NULL,
  `JUDUL_SUB` varchar(30) DEFAULT NULL,
  `URL` text DEFAULT NULL,
  `ICON` text DEFAULT NULL,
  `SUB_ACTIVE` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`ID_SUB`, `ID_MENU`, `JUDUL_SUB`, `URL`, `ICON`, `SUB_ACTIVE`) VALUES
(1, 2, 'Dashboard', 'admin', 'fas fa-fw fa-chart-line', 1),
(2, 1, 'Manajemen Akun', 'admin/user', 'fas fa-fw fa-users-cog', 1),
(3, 3, 'Manajemen Jadwal', 'admin/jadwal', 'fas fa-fw fa-calendar-alt', 1),
(4, 3, 'Manajemen Galeri', 'admin/galeri', 'fas fa-fw fa-photo-video', 1),
(5, 3, 'Manajemen Penyiar', 'admin/penyiar', 'far fa-fw fa-id-card', 1),
(6, 4, 'Beranda', 'user', NULL, 1),
(7, 4, 'Galeri', 'user/galeri', NULL, 1),
(9, 3, 'Buku Tamu', 'admin/buku_tamu', '	\r\nfar fa-fw fa-id-card', 1),
(10, 4, 'buku tamu', 'user/bukutamu', NULL, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_token`
--

CREATE TABLE `user_token` (
  `ID_TOKEN` int(11) NOT NULL,
  `EMAIL_TOKEN` varchar(128) NOT NULL,
  `TOKEN` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_token`
--

INSERT INTO `user_token` (`ID_TOKEN`, `EMAIL_TOKEN`, `TOKEN`) VALUES
(1, 'yamamotosora.ys@gmail.com', 'i0EmZub9IsZkNgEMnhsGtEcPxDV9XA/j');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku_tamu`
--
ALTER TABLE `buku_tamu`
  ADD PRIMARY KEY (`ID_TAMU`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`ID_GALERI`),
  ADD KEY `FK_KATEGORI_GALERI` (`ID_KATEGORI`);

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`ID_JADWAL`),
  ADD KEY `FK_PENYIAR_JADWAL` (`ID_PENYIAR`);

--
-- Indeks untuk tabel `kategori_galeri`
--
ALTER TABLE `kategori_galeri`
  ADD PRIMARY KEY (`ID_KATEGORI`);

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`ID_KOMENTAR`);

--
-- Indeks untuk tabel `link_stream`
--
ALTER TABLE `link_stream`
  ADD PRIMARY KEY (`ID_STREAM`);

--
-- Indeks untuk tabel `penyiar`
--
ALTER TABLE `penyiar`
  ADD PRIMARY KEY (`ID_PENYIAR`);

--
-- Indeks untuk tabel `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`ID_RATING`),
  ADD KEY `FK_GALERI_RATING` (`ID_GALERI`),
  ADD KEY `FK_JADWAL_RATING` (`ID_JADWAL`),
  ADD KEY `FK_KOMENTAR_RATING` (`ID_KOMENTAR`),
  ADD KEY `FK_PENYIAR_RATING` (`ID_PENYIAR`),
  ADD KEY `FK_USER_RATING` (`ID_USER`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_USER`),
  ADD KEY `FK_USER_ROLE_USER` (`ID_ROLE`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`ID_ACCES`),
  ADD KEY `FK_USER_MENU_USER_ACCES` (`ID_MENU`),
  ADD KEY `FK_USER_ROLE_USER_ACCES` (`ID_ROLE`);

--
-- Indeks untuk tabel `user_ip`
--
ALTER TABLE `user_ip`
  ADD PRIMARY KEY (`ID_IP`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`ID_MENU`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`ID_ROLE`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`ID_SUB`),
  ADD KEY `FK_USER_MENU_USER_SUB` (`ID_MENU`);

--
-- Indeks untuk tabel `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`ID_TOKEN`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku_tamu`
--
ALTER TABLE `buku_tamu`
  MODIFY `ID_TAMU` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `ID_GALERI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `ID_JADWAL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `kategori_galeri`
--
ALTER TABLE `kategori_galeri`
  MODIFY `ID_KATEGORI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `ID_KOMENTAR` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `link_stream`
--
ALTER TABLE `link_stream`
  MODIFY `ID_STREAM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `penyiar`
--
ALTER TABLE `penyiar`
  MODIFY `ID_PENYIAR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `rating`
--
ALTER TABLE `rating`
  MODIFY `ID_RATING` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `ID_USER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `ID_ACCES` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `user_ip`
--
ALTER TABLE `user_ip`
  MODIFY `ID_IP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `ID_MENU` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `ID_ROLE` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `ID_SUB` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `user_token`
--
ALTER TABLE `user_token`
  MODIFY `ID_TOKEN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD CONSTRAINT `FK_KATEGORI_GALERI` FOREIGN KEY (`ID_KATEGORI`) REFERENCES `kategori_galeri` (`ID_KATEGORI`);

--
-- Ketidakleluasaan untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `FK_PENYIAR_JADWAL` FOREIGN KEY (`ID_PENYIAR`) REFERENCES `penyiar` (`ID_PENYIAR`);

--
-- Ketidakleluasaan untuk tabel `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `FK_GALERI_RATING` FOREIGN KEY (`ID_GALERI`) REFERENCES `galeri` (`ID_GALERI`),
  ADD CONSTRAINT `FK_JADWAL_RATING` FOREIGN KEY (`ID_JADWAL`) REFERENCES `jadwal` (`ID_JADWAL`),
  ADD CONSTRAINT `FK_KOMENTAR_RATING` FOREIGN KEY (`ID_KOMENTAR`) REFERENCES `komentar` (`ID_KOMENTAR`),
  ADD CONSTRAINT `FK_PENYIAR_RATING` FOREIGN KEY (`ID_PENYIAR`) REFERENCES `penyiar` (`ID_PENYIAR`),
  ADD CONSTRAINT `FK_USER_RATING` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`);

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_USER_ROLE_USER` FOREIGN KEY (`ID_ROLE`) REFERENCES `user_role` (`ID_ROLE`);

--
-- Ketidakleluasaan untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD CONSTRAINT `FK_USER_MENU_USER_ACCES` FOREIGN KEY (`ID_MENU`) REFERENCES `user_menu` (`ID_MENU`),
  ADD CONSTRAINT `FK_USER_ROLE_USER_ACCES` FOREIGN KEY (`ID_ROLE`) REFERENCES `user_role` (`ID_ROLE`);

--
-- Ketidakleluasaan untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD CONSTRAINT `FK_USER_MENU_USER_SUB` FOREIGN KEY (`ID_MENU`) REFERENCES `user_menu` (`ID_MENU`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
