-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 21 Apr 2021 pada 06.12
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
  `PESAN` text DEFAULT NULL,
  `IS_READ` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku_tamu`
--

INSERT INTO `buku_tamu` (`ID_TAMU`, `NAMA_TAMU`, `EMAIL_TAMU`, `PESAN`, `IS_READ`) VALUES
(14, 'yusrizal', 'h06218021@uinsby.ac.id', 'cobs je', '0');

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

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`ID_GALERI`, `ID_KATEGORI`, `NAMA_FILE`, `KATEGORI`, `JUDUL`, `DESCK_GALERI`, `TANGGAL`, `GAMBAR_GALERI`) VALUES
(37, 1, 'Bella_Ciao_-_ORIGINALE.mp3', 'audio', 'lagu terkini', 'semangat', '2021-04-08', '0'),
(38, 1, 'https://www.youtube.com/watch?v=zBkm_sWf1F0', 'youtube', 'religi', 'religi', '2021-04-08', 'hand-painted-watercolor-background-with-sky-clouds-shape_24972-1095.jpg');

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

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`ID_JADWAL`, `ID_PENYIAR`, `JUDUL_JADWAL`, `TANGGAL_JADWAL`, `WAKTU`, `DESCK_JADWAL`, `GAMBAR_JADWAL`) VALUES
(41, 43, 'gas lah', '2021-04-08', '19:48:00', 'coba', '80jykz32log217.png');

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
(1, 'Music');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `ID_KOMENTAR` int(11) NOT NULL,
  `KOMENTAR` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`ID_KOMENTAR`, `KOMENTAR`) VALUES
(1, 'boleh juga'),
(2, 'boleh juga'),
(3, 'boleh juga'),
(4, 'dfasdf'),
(5, ''),
(6, ''),
(7, 'dfasdfasdf'),
(8, 'sdad'),
(9, 'fasdfasdf'),
(10, 'sdasd'),
(11, 'hjhjh'),
(12, 'dfjalksjdf'),
(13, 'coba'),
(14, 'sdasdfasdf'),
(15, ''),
(16, 's'),
(17, 'qwe');

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
(11, 'https://s7.alhastream.com/radio/8450/radio', '2021-03-20');

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

--
-- Dumping data untuk tabel `penyiar`
--

INSERT INTO `penyiar` (`ID_PENYIAR`, `NAMA_PENYIAR`, `NO_TLP_PENYIAR`, `DESCK`, `GAMBAR_PENYIAR`, `INSTAGRAM`, `FACEBOOK`, `TWITTER`) VALUES
(43, 'putri', '082334900069', 'coba je', '617b87929330da70d1777b4427cf8b952.jpg', '', '', '');

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
  `RATING` int(11) DEFAULT NULL,
  `KOMENTAR` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `ID_USER` int(11) NOT NULL,
  `ID_ROLE` smallint(6) DEFAULT NULL,
  `EMAIL` varchar(128) NOT NULL,
  `NAMA` varchar(128) DEFAULT NULL,
  `PASSWORD` varchar(128) DEFAULT NULL,
  `NO_TLP` varchar(15) DEFAULT NULL,
  `USER_ACTIVE` smallint(6) DEFAULT NULL,
  `GAMBAR` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`ID_USER`, `ID_ROLE`, `EMAIL`, `NAMA`, `PASSWORD`, `NO_TLP`, `USER_ACTIVE`, `GAMBAR`) VALUES
(22, 1, 'skfm@gmail.com', 'RADIO SUARA KOTA', '$2y$10$d2dO8FKHuGJme0VBtJvjs.xRcAoP.F0NqKfETZpQ4XwB/NRQWcIvm', '082334900069', 1, '80jykz32log21.png'),
(35, 3, 'user@gmail.com', 'user', '$2y$10$WcqbdEV.4A4Jmj5Tc/3to.CnwnHH3AE83R7YfqAFO12pMvprBsIwa', '082334900069', 1, '80jykz32log216.png');

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
(84, '::1', '2021-03-04'),
(85, '::1', '2021-03-05'),
(86, '::1', '2021-03-06'),
(87, '::1', '2021-03-06'),
(88, '::1', '2021-03-07'),
(89, '::1', '2021-03-07'),
(90, '::1', '2021-03-07'),
(91, '::1', '2021-03-08'),
(92, '::1', '2021-03-08'),
(93, '::1', '2021-03-08'),
(94, '::1', '2021-03-08'),
(95, '::1', '2021-03-09'),
(96, '::1', '2021-03-09'),
(97, '::1', '2021-03-09'),
(98, '::1', '2021-03-09'),
(99, '::1', '2021-03-09'),
(100, '::1', '2021-03-09'),
(101, '::1', '2021-03-09'),
(102, '::1', '2021-03-09'),
(103, '::1', '2021-03-09'),
(104, '::1', '2021-03-09'),
(105, '::1', '2021-03-09'),
(106, '::1', '2021-03-09'),
(107, '::1', '2021-03-09'),
(108, '::1', '2021-03-09'),
(109, '::1', '2021-03-09'),
(110, '::1', '2021-03-09'),
(111, '::1', '2021-03-09'),
(112, '::1', '2021-03-09'),
(113, '::1', '2021-03-09'),
(114, '::1', '2021-03-09'),
(115, '::1', '2021-03-09'),
(116, '::1', '2021-03-09'),
(117, '::1', '2021-03-09'),
(118, '::1', '2021-03-09'),
(119, '::1', '2021-03-12'),
(120, '::1', '2021-03-12'),
(121, '::1', '2021-03-12'),
(122, '::1', '2021-03-12'),
(123, '::1', '2021-03-12'),
(124, '::1', '2021-03-12'),
(125, '::1', '2021-03-12'),
(126, '::1', '2021-03-12'),
(127, '::1', '2021-03-12'),
(128, '::1', '2021-03-12'),
(129, '::1', '2021-03-12'),
(130, '::1', '2021-03-12'),
(131, '::1', '2021-03-12'),
(132, '::1', '2021-03-12'),
(133, '::1', '2021-03-12'),
(134, '::1', '2021-03-12'),
(135, '::1', '2021-03-12'),
(136, '::1', '2021-03-12'),
(137, '::1', '2021-03-12'),
(138, '::1', '2021-03-12'),
(139, '::1', '2021-03-12'),
(140, '::1', '2021-03-12'),
(141, '::1', '2021-03-12'),
(142, '::1', '2021-03-12'),
(143, '::1', '2021-03-12'),
(144, '::1', '2021-03-12'),
(145, '::1', '2021-03-12'),
(146, '::1', '2021-03-12'),
(147, '::1', '2021-03-14'),
(148, '::1', '2021-03-14'),
(149, '::1', '2021-03-14'),
(150, '::1', '2021-03-14'),
(151, '::1', '2021-03-14'),
(152, '::1', '2021-03-14'),
(153, '::1', '2021-03-14'),
(154, '::1', '2021-03-15'),
(155, '::1', '2021-03-15'),
(156, '::1', '2021-03-15'),
(157, '::1', '2021-03-15'),
(158, '::1', '2021-03-15'),
(159, '::1', '2021-03-15'),
(160, '::1', '2021-03-15'),
(161, '::1', '2021-03-15'),
(162, '::1', '2021-03-15'),
(163, '::1', '2021-03-15'),
(164, '::1', '2021-03-15'),
(165, '::1', '2021-03-15'),
(166, '::1', '2021-03-15'),
(167, '::1', '2021-03-15'),
(168, '::1', '2021-03-15'),
(169, '::1', '2021-03-15'),
(170, '::1', '2021-03-15'),
(171, '::1', '2021-03-15'),
(172, '::1', '2021-03-15'),
(173, '::1', '2021-03-15'),
(174, '::1', '2021-03-15'),
(175, '::1', '2021-03-15'),
(176, '::1', '2021-03-15'),
(177, '::1', '2021-03-15'),
(178, '::1', '2021-03-15'),
(179, '::1', '2021-03-15'),
(180, '::1', '2021-03-15'),
(181, '::1', '2021-03-15'),
(182, '::1', '2021-03-15'),
(183, '::1', '2021-03-15'),
(184, '::1', '2021-03-15'),
(185, '::1', '2021-03-15'),
(186, '::1', '2021-03-15'),
(187, '::1', '2021-03-15'),
(188, '::1', '2021-03-15'),
(189, '::1', '2021-03-15'),
(190, '::1', '2021-03-15'),
(191, '::1', '2021-03-15'),
(192, '::1', '2021-03-15'),
(193, '::1', '2021-03-15'),
(194, '::1', '2021-03-15'),
(195, '::1', '2021-03-15'),
(196, '::1', '2021-03-15'),
(197, '::1', '2021-03-15'),
(198, '::1', '2021-03-15'),
(199, '::1', '2021-03-15'),
(200, '::1', '2021-03-15'),
(201, '::1', '2021-03-15'),
(202, '::1', '2021-03-15'),
(203, '::1', '2021-03-15'),
(204, '::1', '2021-03-15'),
(205, '::1', '2021-03-15'),
(206, '::1', '2021-03-15'),
(207, '::1', '2021-03-15'),
(208, '::1', '2021-03-15'),
(209, '::1', '2021-03-15'),
(210, '::1', '2021-03-15'),
(211, '::1', '2021-03-16'),
(212, '::1', '2021-03-16'),
(213, '::1', '2021-03-16'),
(214, '::1', '2021-03-16'),
(215, '::1', '2021-03-16'),
(216, '::1', '2021-03-16'),
(217, '::1', '2021-03-16'),
(218, '::1', '2021-03-16'),
(219, '::1', '2021-03-16'),
(220, '::1', '2021-03-16'),
(221, '::1', '2021-03-16'),
(222, '::1', '2021-03-16'),
(223, '::1', '2021-03-16'),
(224, '::1', '2021-03-16'),
(225, '::1', '2021-03-16'),
(226, '::1', '2021-03-16'),
(227, '::1', '2021-03-16'),
(228, '::1', '2021-03-16'),
(229, '::1', '2021-03-16'),
(230, '::1', '2021-03-16'),
(231, '::1', '2021-03-16'),
(232, '::1', '2021-03-16'),
(233, '::1', '2021-03-16'),
(234, '::1', '2021-03-16'),
(235, '::1', '2021-03-16'),
(236, '::1', '2021-03-16'),
(237, '::1', '2021-03-16'),
(238, '::1', '2021-03-16'),
(239, '::1', '2021-03-16'),
(240, '::1', '2021-03-16'),
(241, '::1', '2021-03-16'),
(242, '::1', '2021-03-16'),
(243, '::1', '2021-03-16'),
(244, '::1', '2021-03-16'),
(245, '::1', '2021-03-16'),
(246, '::1', '2021-03-16'),
(247, '::1', '2021-03-16'),
(248, '::1', '2021-03-16'),
(249, '::1', '2021-03-16'),
(250, '::1', '2021-03-16'),
(251, '::1', '2021-03-16'),
(252, '::1', '2021-03-16'),
(253, '::1', '2021-03-16'),
(254, '::1', '2021-03-16'),
(255, '::1', '2021-03-16'),
(256, '::1', '2021-03-16'),
(257, '::1', '2021-03-16'),
(258, '::1', '2021-03-17'),
(259, '::1', '2021-03-17'),
(260, '::1', '2021-03-17'),
(261, '::1', '2021-03-17'),
(262, '::1', '2021-03-17'),
(263, '::1', '2021-03-17'),
(264, '::1', '2021-03-17'),
(265, '::1', '2021-03-17'),
(266, '::1', '2021-03-17'),
(267, '::1', '2021-03-17'),
(268, '::1', '2021-03-17'),
(269, '::1', '2021-03-17'),
(270, '::1', '2021-03-17'),
(271, '::1', '2021-03-17'),
(272, '::1', '2021-03-17'),
(273, '::1', '2021-03-17'),
(274, '::1', '2021-03-17'),
(275, '::1', '2021-03-17'),
(276, '::1', '2021-03-17'),
(277, '::1', '2021-03-17'),
(278, '::1', '2021-03-17'),
(279, '::1', '2021-03-17'),
(280, '::1', '2021-03-17'),
(281, '::1', '2021-03-17'),
(282, '::1', '2021-03-17'),
(283, '::1', '2021-03-17'),
(284, '::1', '2021-03-17'),
(285, '::1', '2021-03-17'),
(286, '::1', '2021-03-17'),
(287, '::1', '2021-03-17'),
(288, '::1', '2021-03-17'),
(289, '::1', '2021-03-17'),
(290, '::1', '2021-03-17'),
(291, '::1', '2021-03-18'),
(292, '::1', '2021-03-18'),
(293, '::1', '2021-03-18'),
(294, '::1', '2021-03-18'),
(295, '::1', '2021-03-18'),
(296, '::1', '2021-03-18'),
(297, '::1', '2021-03-19'),
(298, '::1', '2021-03-19'),
(299, '::1', '2021-03-19'),
(300, '::1', '2021-03-19'),
(301, '::1', '2021-03-19'),
(302, '::1', '2021-03-19'),
(303, '::1', '2021-03-19'),
(304, '::1', '2021-03-19'),
(305, '::1', '2021-03-19'),
(306, '::1', '2021-03-19'),
(307, '::1', '2021-03-19'),
(308, '::1', '2021-03-19'),
(309, '::1', '2021-03-19'),
(310, '::1', '2021-03-20'),
(311, '::1', '2021-03-20'),
(312, '::1', '2021-03-20'),
(313, '::1', '2021-03-20'),
(314, '::1', '2021-03-20'),
(315, '::1', '2021-03-20'),
(316, '::1', '2021-03-20'),
(317, '::1', '2021-03-20'),
(318, '::1', '2021-03-20'),
(319, '::1', '2021-03-20'),
(320, '::1', '2021-03-20'),
(321, '::1', '2021-03-20'),
(322, '::1', '2021-03-20'),
(323, '::1', '2021-03-20'),
(324, '::1', '2021-03-20'),
(325, '::1', '2021-03-20'),
(326, '::1', '2021-03-20'),
(327, '::1', '2021-03-20'),
(328, '::1', '2021-03-20'),
(329, '::1', '2021-03-20'),
(330, '::1', '2021-03-21'),
(331, '::1', '2021-03-21'),
(332, '::1', '2021-03-21'),
(333, '::1', '2021-03-21'),
(334, '::1', '2021-03-21'),
(335, '::1', '2021-03-24'),
(336, '::1', '2021-03-24'),
(337, '::1', '2021-03-24'),
(338, '::1', '2021-03-24'),
(339, '::1', '2021-03-24'),
(340, '::1', '2021-03-24'),
(341, '::1', '2021-03-24'),
(342, '::1', '2021-03-24'),
(343, '::1', '2021-03-24'),
(344, '::1', '2021-03-24'),
(345, '::1', '2021-03-24'),
(346, '::1', '2021-03-24'),
(347, '::1', '2021-03-24'),
(348, '::1', '2021-03-24'),
(349, '::1', '2021-03-24'),
(350, '::1', '2021-03-24'),
(351, '::1', '2021-03-24'),
(352, '::1', '2021-03-24'),
(353, '::1', '2021-03-24'),
(354, '::1', '2021-03-24'),
(355, '::1', '2021-03-24'),
(356, '::1', '2021-03-24'),
(357, '::1', '2021-03-24'),
(358, '::1', '2021-03-24'),
(359, '::1', '2021-03-24'),
(360, '::1', '2021-03-24'),
(361, '::1', '2021-03-24'),
(362, '::1', '2021-03-24'),
(363, '::1', '2021-03-24'),
(364, '::1', '2021-03-24'),
(365, '::1', '2021-03-24'),
(366, '::1', '2021-03-24'),
(367, '::1', '2021-03-24'),
(368, '::1', '2021-03-24'),
(369, '::1', '2021-03-24'),
(370, '::1', '2021-03-24'),
(371, '::1', '2021-03-24'),
(372, '::1', '2021-03-24'),
(373, '::1', '2021-03-24'),
(374, '::1', '2021-03-24'),
(375, '::1', '2021-03-24'),
(376, '::1', '2021-03-24'),
(377, '::1', '2021-03-24'),
(378, '::1', '2021-03-24'),
(379, '::1', '2021-03-24'),
(380, '::1', '2021-03-24'),
(381, '::1', '2021-03-24'),
(382, '::1', '2021-03-24'),
(383, '::1', '2021-03-24'),
(384, '::1', '2021-04-06'),
(385, '::1', '2021-04-06'),
(386, '::1', '2021-04-06'),
(387, '::1', '2021-04-07'),
(388, '::1', '2021-04-07'),
(389, '::1', '2021-04-08'),
(390, '::1', '2021-04-08'),
(391, '::1', '2021-04-10'),
(392, '::1', '2021-04-10');

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
  `TOKEN` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  MODIFY `ID_TAMU` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `ID_GALERI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `ID_JADWAL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT untuk tabel `kategori_galeri`
--
ALTER TABLE `kategori_galeri`
  MODIFY `ID_KATEGORI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `ID_KOMENTAR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `link_stream`
--
ALTER TABLE `link_stream`
  MODIFY `ID_STREAM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `penyiar`
--
ALTER TABLE `penyiar`
  MODIFY `ID_PENYIAR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT untuk tabel `rating`
--
ALTER TABLE `rating`
  MODIFY `ID_RATING` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `ID_USER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `ID_ACCES` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `user_ip`
--
ALTER TABLE `user_ip`
  MODIFY `ID_IP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=393;

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
  MODIFY `ID_TOKEN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

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
