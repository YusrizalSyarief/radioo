-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 15 Feb 2021 pada 10.18
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `ID_GALERI` int(11) NOT NULL,
  `ID_KATEGORI` int(11) DEFAULT NULL,
  `NAMA_FILE` text DEFAULT NULL,
  `JUDUL` text DEFAULT NULL,
  `DESC_GALERI` text DEFAULT NULL,
  `TANGGAL` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`ID_GALERI`, `ID_KATEGORI`, `NAMA_FILE`, `JUDUL`, `DESC_GALERI`, `TANGGAL`) VALUES
(14, 1, 'Surfaces_-_Sunday_Best_(Official_Music_Video).mp3', 'dfasdfas', 'asdfasdf', '2021-02-15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `ID_JADWAL` int(11) NOT NULL,
  `JUDUL_JADWAL` text DEFAULT NULL,
  `WAKTU` datetime DEFAULT NULL,
  `DESCK_JADWAL` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_galeri`
--

CREATE TABLE `kategori_galeri` (
  `ID_KATEGORI` int(11) NOT NULL,
  `NAMA_KATEGORI` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori_galeri`
--

INSERT INTO `kategori_galeri` (`ID_KATEGORI`, `NAMA_KATEGORI`) VALUES
(1, 'Podcast'),
(2, 'Music');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `ID_KOMENTAR` int(11) NOT NULL,
  `KOMENTAR` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(4, 2, 1),
(5, 2, 2),
(6, 2, 3),
(7, 3, 3);

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
(1, 'Administrasi'),
(2, 'Konfigurasi Konten'),
(3, 'Konten');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `ID_ROLE` smallint(6) NOT NULL,
  `ROLE` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-chart-line', 1),
(2, 1, 'Manajemen Akun', 'admin/user', 'fas fa-fw fa-users-cog', 1),
(3, 2, 'Manajemen Jadwal', 'admin/jadwal', 'fas fa-fw fa-calendar-alt', 1),
(4, 2, 'Manajemen Galeri', 'admin/galeri', 'fas fa-fw fa-photo-video', 1),
(5, 2, 'Manajemen Penyiar', 'admin/penyiar', 'far fa-fw fa-id-card', 1),
(6, 3, 'Beranda', 'user', NULL, 1),
(7, 3, 'Galeri', 'user/galeri', NULL, 1);

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
  ADD PRIMARY KEY (`ID_JADWAL`);

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
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku_tamu`
--
ALTER TABLE `buku_tamu`
  MODIFY `ID_TAMU` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `ID_GALERI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `ID_JADWAL` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kategori_galeri`
--
ALTER TABLE `kategori_galeri`
  MODIFY `ID_KATEGORI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `ID_KOMENTAR` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `penyiar`
--
ALTER TABLE `penyiar`
  MODIFY `ID_PENYIAR` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `rating`
--
ALTER TABLE `rating`
  MODIFY `ID_RATING` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `ID_USER` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `ID_ACCES` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `ID_MENU` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `ID_ROLE` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `ID_SUB` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD CONSTRAINT `FK_KATEGORI_GALERI` FOREIGN KEY (`ID_KATEGORI`) REFERENCES `kategori_galeri` (`ID_KATEGORI`);

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
-- Ketidakleluasaan untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD CONSTRAINT `FK_USER_MENU_USER_SUB` FOREIGN KEY (`ID_MENU`) REFERENCES `user_menu` (`ID_MENU`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
