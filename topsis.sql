-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Jun 2022 pada 18.17
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `topsis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alternatif`
--

CREATE TABLE `alternatif` (
  `id` int(11) NOT NULL,
  `kode_alternatif` varchar(100) NOT NULL,
  `nama_alternatif` varchar(100) NOT NULL,
  `jns_kelamin` varchar(100) NOT NULL,
  `bidang` varchar(100) NOT NULL,
  `c1` int(100) NOT NULL,
  `c2` int(100) NOT NULL,
  `c3` int(100) NOT NULL,
  `c4` int(11) NOT NULL,
  `c5` int(11) NOT NULL,
  `c6` int(11) NOT NULL,
  `c7` int(11) NOT NULL,
  `c8` int(11) NOT NULL,
  `c9` int(11) NOT NULL,
  `c10` int(11) NOT NULL,
  `c11` int(11) NOT NULL,
  `c12` int(11) NOT NULL,
  `c13` int(11) NOT NULL,
  `c14` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `alternatif`
--

INSERT INTO `alternatif` (`id`, `kode_alternatif`, `nama_alternatif`, `jns_kelamin`, `bidang`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`, `c7`, `c8`, `c9`, `c10`, `c11`, `c12`, `c13`, `c14`) VALUES
(16, 'A1', 'Supriadi', 'LAKI-LAKI', 'sortasi', 80, 975, 288, 1050, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(17, 'A2', 'Wahyudi', 'LAKI-LAKI', 'sortasi', 75, 1025, 298, 1100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(18, 'A3', 'Aulia Saputra', 'LAKI-LAKI', 'sortasi', 70, 1025, 296, 1125, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(19, 'A4', 'Yendi Rahman', 'LAKI-LAKI', 'sortasi', 80, 1150, 295, 1125, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(20, 'A5', 'Khairul Anwar', 'LAKI-LAKI', 'sortasi', 80, 1150, 299, 1050, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(21, 'A6', 'M. Ridwan', 'LAKI-LAKI', 'sortasi', 95, 1025, 288, 1100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22, 'A7', 'Sunardi', 'LAKI-LAKI', 'sortasi', 75, 1025, 299, 1050, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(23, 'A8', 'Hendra Putra', 'LAKI-LAKI', 'sortasi', 90, 1150, 299, 1125, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(24, 'A9', 'Awaludin ', 'LAKI-LAKI', 'sortasi', 90, 1150, 298, 1100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(25, 'A10', 'Suryadi Agus P', 'LAKI-LAKI', 'sortasi', 85, 1125, 296, 1125, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(26, 'A11', 'M. Habibi', 'LAKI-LAKI', 'sortasi', 75, 1150, 298, 1050, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(27, 'A12', 'M. Ali', 'LAKI-LAKI', 'sortasi', 83, 1150, 295, 1100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(28, 'A13', 'Khaerul Sadikin', 'LAKI-LAKI', 'sortasi', 91, 1125, 294, 1050, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(29, 'A14', 'Wawan Hendrawan', 'LAKI-LAKI', 'sortasi', 88, 1150, 297, 1125, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(131, 'A15', 'Zaenudin', 'LAKI-LAKI', 'proses', 79, 1150, 293, 1100, 0, 0, 0, 1150, 0, 0, 0, 0, 0, 0),
(132, 'A16', 'Khaidir Ali', 'LAKI-LAKI', 'proses', 80, 1025, 296, 1050, 0, 0, 0, 1100, 0, 0, 0, 0, 0, 0),
(133, 'A17', 'Kariwian Danil', 'LAKI-LAKI', 'proses', 80, 1150, 299, 1050, 0, 0, 0, 1100, 0, 0, 0, 0, 0, 0),
(134, 'A19', 'M.Zainudin', 'LAKI-LAKI', 'proses', 82, 1150, 298, 1050, 0, 0, 0, 1150, 0, 0, 0, 0, 0, 0),
(135, 'A19', 'Chandra', 'LAKI-LAKI', 'proses', 89, 1025, 297, 1100, 0, 0, 0, 1100, 0, 0, 0, 0, 0, 0),
(136, 'A20', 'Iqbar', 'LAKI-LAKI', 'proses', 70, 1150, 292, 1050, 0, 0, 0, 1150, 0, 0, 0, 0, 0, 0),
(137, 'A21', 'Helmi Yahya', 'LAKI-LAKI', 'proses', 90, 1025, 297, 1125, 0, 0, 0, 1100, 0, 0, 0, 0, 0, 0),
(138, 'A22', 'Abdul Hamid', 'LAKI-LAKI', 'proses', 95, 1150, 299, 1050, 0, 0, 0, 1100, 0, 0, 0, 0, 0, 0),
(139, 'A23', 'M.Rizamdani', 'LAKI-LAKI', 'proses', 84, 1150, 298, 1100, 0, 0, 0, 1150, 0, 0, 0, 0, 0, 0),
(140, 'A25', 'Zulkifli', 'LAKI-LAKI', 'proses', 75, 1025, 295, 1100, 0, 0, 0, 1100, 0, 0, 0, 0, 0, 0),
(141, 'A25', 'Juliandi', 'LAKI-LAKI', 'proses', 80, 1075, 298, 1100, 0, 0, 0, 1150, 0, 0, 0, 0, 0, 0),
(142, 'A26', 'Noval Fachri', 'LAKI-LAKI', 'proses', 86, 1025, 297, 1050, 0, 0, 0, 1100, 0, 0, 0, 0, 0, 0),
(143, 'A27', 'Rahmat Jumaini. H', 'LAKI-LAKI', 'proses', 97, 1150, 296, 1100, 0, 0, 0, 1150, 0, 0, 0, 0, 0, 0),
(144, 'A28', 'Nur Husen Mi’ral', 'LAKI-LAKI', 'proses', 85, 1150, 297, 1100, 0, 0, 0, 1100, 0, 0, 0, 0, 0, 0),
(145, 'A29', 'Saparwadi', 'LAKI-LAKI', 'proses', 85, 1025, 296, 1050, 0, 0, 0, 1100, 0, 0, 0, 0, 0, 0),
(146, 'A30', 'Hamdani', 'LAKI-LAKI', 'proses', 83, 1075, 298, 1050, 0, 0, 0, 1150, 0, 0, 0, 0, 0, 0),
(147, 'A31', 'Muhamad Zikri', 'LAKI-LAKI', 'proses', 79, 1150, 298, 1100, 0, 0, 0, 1100, 0, 0, 0, 0, 0, 0),
(148, 'A32', 'M. Azir Ansori ', 'LAKI-LAKI', 'proses', 80, 1150, 295, 1125, 0, 0, 0, 1150, 0, 0, 0, 0, 0, 0),
(149, 'A33', 'M. Zainudin', 'LAKI-LAKI', 'proses', 90, 1150, 299, 1050, 0, 0, 0, 1100, 0, 0, 0, 0, 0, 0),
(150, 'A34', 'Fadhli Ahmad', 'LAKI-LAKI', 'proses', 96, 1075, 299, 1100, 0, 0, 0, 1100, 0, 0, 0, 0, 0, 0),
(151, 'A35', 'Husni Zonni ', 'LAKI-LAKI', 'proses', 86, 1025, 298, 1125, 0, 0, 0, 1100, 0, 0, 0, 0, 0, 0),
(152, 'A36', 'Muhamad Rodi', 'LAKI-LAKI', 'proses', 85, 1150, 297, 1100, 0, 0, 0, 1150, 0, 0, 0, 0, 0, 0),
(153, 'A37', 'Mashal ', 'LAKI-LAKI', 'proses', 80, 975, 295, 1125, 0, 0, 0, 1150, 0, 0, 0, 0, 0, 0),
(154, 'A38', 'Afhar', 'LAKI-LAKI', 'proses', 73, 1150, 296, 1125, 0, 0, 0, 1100, 0, 0, 0, 0, 0, 0),
(155, 'A39', 'Rohman', 'LAKI-LAKI', 'proses', 90, 1150, 296, 1050, 0, 0, 0, 1150, 0, 0, 0, 0, 0, 0),
(156, 'A40', 'Martani Ferdianto', 'LAKI-LAKI', 'proses', 91, 1150, 296, 1050, 0, 0, 0, 1150, 0, 0, 0, 0, 0, 0),
(157, 'A41', 'Sudi Hamdani', 'LAKI-LAKI', 'proses', 89, 1150, 296, 1125, 0, 0, 0, 1100, 0, 0, 0, 0, 0, 0),
(158, 'A42', 'Andrian Pratama ', 'LAKI-LAKI', 'proses', 85, 1025, 295, 1100, 0, 0, 0, 1150, 0, 0, 0, 0, 0, 0),
(159, 'A43', 'Ruhaiman. A ', 'LAKI-LAKI', 'proses', 87, 1025, 295, 1125, 0, 0, 0, 1100, 0, 0, 0, 0, 0, 0),
(160, 'A44', 'Ahmad Paozan ', 'LAKI-LAKI', 'proses', 75, 1150, 299, 1050, 0, 0, 0, 1100, 0, 0, 0, 0, 0, 0),
(161, 'A45', 'Muhamad Ilham', 'LAKI-LAKI', 'proses', 77, 1025, 294, 1050, 0, 0, 0, 1150, 0, 0, 0, 0, 0, 0),
(162, 'A46', 'Abdul Hamid ', 'LAKI-LAKI', 'proses', 89, 1150, 297, 1125, 0, 0, 0, 1150, 0, 0, 0, 0, 0, 0),
(163, 'A47', 'Ahmad Badani', 'LAKI-LAKI', 'proses', 85, 1150, 295, 1125, 0, 0, 0, 1100, 0, 0, 0, 0, 0, 0),
(164, 'A48', 'Junaidi ', 'LAKI-LAKI', 'proses', 89, 1075, 297, 1100, 0, 0, 0, 1150, 0, 0, 0, 0, 0, 0),
(165, 'A49', 'Ridwan ', 'LAKI-LAKI', 'proses', 78, 1150, 297, 1125, 0, 0, 0, 1100, 0, 0, 0, 0, 0, 0),
(166, 'A50', 'Husni Zonni ', 'LAKI-LAKI', 'proses', 95, 1075, 295, 1050, 0, 0, 0, 1150, 0, 0, 0, 0, 0, 0),
(167, 'A51', 'Suherman ', 'LAKI-LAKI', 'proses', 80, 1150, 294, 1125, 0, 0, 0, 1100, 0, 0, 0, 0, 0, 0),
(168, 'A52', 'Masliadi Ismail', 'LAKI-LAKI', 'proses', 80, 1150, 296, 1100, 0, 0, 0, 1150, 0, 0, 0, 0, 0, 0),
(169, 'A53', 'M. Zaenal Anshori', 'LAKI-LAKI', 'proses', 90, 1150, 296, 1050, 0, 0, 0, 1100, 0, 0, 0, 0, 0, 0),
(170, 'A54', 'Edi Prana Yasa', 'LAKI-LAKI', 'proses', 85, 1150, 296, 1050, 0, 0, 0, 1150, 0, 0, 0, 0, 0, 0),
(171, 'A55', 'Firman', 'LAKI-LAKI', 'proses', 87, 1150, 299, 1050, 0, 0, 0, 1150, 0, 0, 0, 0, 0, 0),
(172, 'A56', 'Suriadi', 'LAKI-LAKI', 'proses', 79, 1150, 297, 1050, 0, 0, 0, 1150, 0, 0, 0, 0, 0, 0),
(173, 'A57', 'Sulaeman', 'LAKI-LAKI', 'proses', 80, 1025, 299, 1100, 0, 0, 0, 1100, 0, 0, 0, 0, 0, 0),
(174, 'A58', 'Hendrawan', 'PEREMPUAN', 'proses', 90, 1150, 298, 1050, 0, 0, 0, 1100, 0, 0, 0, 0, 0, 0),
(175, 'A59', 'Ihsan Hafid ', 'LAKI-LAKI', 'proses', 90, 1075, 298, 1125, 0, 0, 0, 1150, 0, 0, 0, 0, 0, 0),
(176, 'A15', 'Zaenudin', 'LAKI-LAKI', 'proses', 79, 1150, 293, 1100, 0, 0, 0, 1150, 0, 0, 0, 0, 0, 0),
(177, 'A16', 'Khaidir Ali', 'LAKI-LAKI', 'proses', 80, 1025, 296, 1050, 0, 0, 0, 1100, 0, 0, 0, 0, 0, 0),
(178, 'A17', 'Kariwian Danil', 'LAKI-LAKI', 'proses', 80, 1150, 299, 1050, 0, 0, 0, 1100, 0, 0, 0, 0, 0, 0),
(179, 'A19', 'M.Zainudin', 'LAKI-LAKI', 'proses', 82, 1150, 298, 1050, 0, 0, 0, 1150, 0, 0, 0, 0, 0, 0),
(180, 'A19', 'Chandra', 'LAKI-LAKI', 'proses', 89, 1025, 297, 1100, 0, 0, 0, 1100, 0, 0, 0, 0, 0, 0),
(181, 'A20', 'Iqbar', 'LAKI-LAKI', 'proses', 70, 1150, 292, 1050, 0, 0, 0, 1150, 0, 0, 0, 0, 0, 0),
(182, 'A21', 'Helmi Yahya', 'LAKI-LAKI', 'proses', 90, 1025, 297, 1125, 0, 0, 0, 1100, 0, 0, 0, 0, 0, 0),
(183, 'A22', 'Abdul Hamid', 'LAKI-LAKI', 'proses', 95, 1150, 299, 1050, 0, 0, 0, 1100, 0, 0, 0, 0, 0, 0),
(184, 'A23', 'M.Rizamdani', 'LAKI-LAKI', 'proses', 84, 1150, 298, 1100, 0, 0, 0, 1150, 0, 0, 0, 0, 0, 0),
(185, 'A25', 'Zulkifli', 'LAKI-LAKI', 'proses', 75, 1025, 295, 1100, 0, 0, 0, 1100, 0, 0, 0, 0, 0, 0),
(186, 'A25', 'Juliandi', 'LAKI-LAKI', 'proses', 80, 1075, 298, 1100, 0, 0, 0, 1150, 0, 0, 0, 0, 0, 0),
(187, 'A26', 'Noval Fachri', 'LAKI-LAKI', 'proses', 86, 1025, 297, 1050, 0, 0, 0, 1100, 0, 0, 0, 0, 0, 0),
(188, 'A27', 'Rahmat Jumaini. H', 'LAKI-LAKI', 'proses', 97, 1150, 296, 1100, 0, 0, 0, 1150, 0, 0, 0, 0, 0, 0),
(189, 'A28', 'Nur Husen Mi’ral', 'LAKI-LAKI', 'proses', 85, 1150, 297, 1100, 0, 0, 0, 1100, 0, 0, 0, 0, 0, 0),
(190, 'A29', 'Saparwadi', 'LAKI-LAKI', 'proses', 85, 1025, 296, 1050, 0, 0, 0, 1100, 0, 0, 0, 0, 0, 0),
(191, 'A30', 'Hamdani', 'LAKI-LAKI', 'proses', 83, 1075, 298, 1050, 0, 0, 0, 1150, 0, 0, 0, 0, 0, 0),
(192, 'A31', 'Muhamad Zikri', 'LAKI-LAKI', 'proses', 79, 1150, 298, 1100, 0, 0, 0, 1100, 0, 0, 0, 0, 0, 0),
(193, 'A32', 'M. Azir Ansori ', 'LAKI-LAKI', 'proses', 80, 1150, 295, 1125, 0, 0, 0, 1150, 0, 0, 0, 0, 0, 0),
(194, 'A33', 'M. Zainudin', 'LAKI-LAKI', 'proses', 90, 1150, 299, 1050, 0, 0, 0, 1100, 0, 0, 0, 0, 0, 0),
(195, 'A34', 'Fadhli Ahmad', 'LAKI-LAKI', 'proses', 96, 1075, 299, 1100, 0, 0, 0, 1100, 0, 0, 0, 0, 0, 0),
(196, 'A35', 'Husni Zonni ', 'LAKI-LAKI', 'proses', 86, 1025, 298, 1125, 0, 0, 0, 1100, 0, 0, 0, 0, 0, 0),
(197, 'A36', 'Muhamad Rodi', 'LAKI-LAKI', 'proses', 85, 1150, 297, 1100, 0, 0, 0, 1150, 0, 0, 0, 0, 0, 0),
(198, 'A37', 'Mashal ', 'LAKI-LAKI', 'proses', 80, 975, 295, 1125, 0, 0, 0, 1150, 0, 0, 0, 0, 0, 0),
(199, 'A38', 'Afhar', 'LAKI-LAKI', 'proses', 73, 1150, 296, 1125, 0, 0, 0, 1100, 0, 0, 0, 0, 0, 0),
(200, 'A39', 'Rohman', 'LAKI-LAKI', 'proses', 90, 1150, 296, 1050, 0, 0, 0, 1150, 0, 0, 0, 0, 0, 0),
(201, 'A40', 'Martani Ferdianto', 'LAKI-LAKI', 'proses', 91, 1150, 296, 1050, 0, 0, 0, 1150, 0, 0, 0, 0, 0, 0),
(202, 'A41', 'Sudi Hamdani', 'LAKI-LAKI', 'proses', 89, 1150, 296, 1125, 0, 0, 0, 1100, 0, 0, 0, 0, 0, 0),
(203, 'A42', 'Andrian Pratama ', 'LAKI-LAKI', 'proses', 85, 1025, 295, 1100, 0, 0, 0, 1150, 0, 0, 0, 0, 0, 0),
(204, 'A43', 'Ruhaiman. A ', 'LAKI-LAKI', 'proses', 87, 1025, 295, 1125, 0, 0, 0, 1100, 0, 0, 0, 0, 0, 0),
(205, 'A44', 'Ahmad Paozan ', 'LAKI-LAKI', 'proses', 75, 1150, 299, 1050, 0, 0, 0, 1100, 0, 0, 0, 0, 0, 0),
(206, 'A45', 'Muhamad Ilham', 'LAKI-LAKI', 'proses', 77, 1025, 294, 1050, 0, 0, 0, 1150, 0, 0, 0, 0, 0, 0),
(207, 'A46', 'Abdul Hamid ', 'LAKI-LAKI', 'proses', 89, 1150, 297, 1125, 0, 0, 0, 1150, 0, 0, 0, 0, 0, 0),
(208, 'A47', 'Ahmad Badani', 'LAKI-LAKI', 'proses', 85, 1150, 295, 1125, 0, 0, 0, 1100, 0, 0, 0, 0, 0, 0),
(209, 'A48', 'Junaidi ', 'LAKI-LAKI', 'proses', 89, 1075, 297, 1100, 0, 0, 0, 1150, 0, 0, 0, 0, 0, 0),
(210, 'A49', 'Ridwan ', 'LAKI-LAKI', 'proses', 78, 1150, 297, 1125, 0, 0, 0, 1100, 0, 0, 0, 0, 0, 0),
(211, 'A50', 'Husni Zonni ', 'LAKI-LAKI', 'proses', 95, 1075, 295, 1050, 0, 0, 0, 1150, 0, 0, 0, 0, 0, 0),
(212, 'A51', 'Suherman ', 'LAKI-LAKI', 'proses', 80, 1150, 294, 1125, 0, 0, 0, 1100, 0, 0, 0, 0, 0, 0),
(213, 'A52', 'Masliadi Ismail', 'LAKI-LAKI', 'proses', 80, 1150, 296, 1100, 0, 0, 0, 1150, 0, 0, 0, 0, 0, 0),
(214, 'A53', 'M. Zaenal Anshori', 'LAKI-LAKI', 'proses', 90, 1150, 296, 1050, 0, 0, 0, 1100, 0, 0, 0, 0, 0, 0),
(215, 'A54', 'Edi Prana Yasa', 'LAKI-LAKI', 'proses', 85, 1150, 296, 1050, 0, 0, 0, 1150, 0, 0, 0, 0, 0, 0),
(216, 'A55', 'Firman', 'LAKI-LAKI', 'proses', 87, 1150, 299, 1050, 0, 0, 0, 1150, 0, 0, 0, 0, 0, 0),
(217, 'A56', 'Suriadi', 'LAKI-LAKI', 'proses', 79, 1150, 297, 1050, 0, 0, 0, 1150, 0, 0, 0, 0, 0, 0),
(218, 'A57', 'Sulaeman', 'LAKI-LAKI', 'proses', 80, 1025, 299, 1100, 0, 0, 0, 1100, 0, 0, 0, 0, 0, 0),
(219, 'A58', 'Hendrawan', 'PEREMPUAN', 'proses', 90, 1150, 298, 1050, 0, 0, 0, 1100, 0, 0, 0, 0, 0, 0),
(220, 'A59', 'Ihsan Hafid ', 'LAKI-LAKI', 'proses', 90, 1075, 298, 1125, 0, 0, 0, 1150, 0, 0, 0, 0, 0, 0),
(221, 'A60', 'Nurhayati', 'PEREMPUAN', 'kantor', 85, 1150, 297, 1125, 1150, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(222, 'A61', 'Ratna Dewi', 'PEREMPUAN', 'kantor', 80, 1150, 299, 1100, 1100, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(223, 'A62', 'Pernama sari', 'PEREMPUAN', 'kantor', 80, 975, 298, 1125, 1100, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(224, 'A63', 'Devi Safira', 'PEREMPUAN', 'kantor', 85, 1150, 299, 1125, 1050, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(225, 'A64', 'Junaidi', 'LAKI-LAKI', 'kantor', 90, 1150, 299, 1050, 1150, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(226, 'A65', 'Ismail', 'LAKI-LAKI', 'kantor', 91, 1025, 292, 1050, 1100, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(227, 'A66', 'Ihsan Hafid', 'LAKI-LAKI', 'kantor', 87, 1075, 297, 1100, 1100, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(228, 'A67', 'Abrar', 'LAKI-LAKI', 'kantor', 88, 1150, 291, 1125, 1050, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(229, 'A68', 'M. Zulfikri', 'LAKI-LAKI', 'kantor', 80, 1025, 295, 1125, 1100, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(230, 'A69', 'Bahagia', 'LAKI-LAKI', 'kantor', 80, 1150, 297, 1100, 1050, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(231, 'A70', 'Bahar', 'LAKI-LAKI', 'kantor', 85, 975, 298, 1125, 1100, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(232, 'A71', 'Riski Akbar', 'LAKI-LAKI', 'supir', 93, 1150, 295, 1125, 0, 0, 0, 0, 0, 0, 0, 825, 0, 0),
(233, 'A72', 'Samsul', 'LAKI-LAKI', 'supir', 85, 1150, 298, 1125, 0, 0, 0, 0, 0, 0, 0, 800, 0, 0),
(234, 'A73', 'Amrizal', 'LAKI-LAKI', 'supir', 93, 1150, 293, 1100, 0, 0, 0, 0, 0, 0, 0, 950, 0, 0),
(235, 'A74', 'Khadafi', 'LAKI-LAKI', 'supir', 85, 1075, 291, 1125, 0, 0, 0, 0, 0, 0, 0, 925, 0, 0),
(236, 'A75', 'Arianto', 'LAKI-LAKI', 'supir', 90, 975, 291, 1050, 0, 0, 0, 0, 0, 0, 0, 975, 0, 0),
(237, 'A76', 'Yahya Ismail', 'LAKI-LAKI', 'loader', 85, 1150, 299, 1050, 0, 0, 0, 0, 0, 0, 1150, 800, 0, 0),
(238, 'A77', 'Iqmal Ramadhan', 'LAKI-LAKI', 'loader', 89, 1025, 295, 1050, 0, 0, 0, 0, 0, 0, 1100, 775, 0, 0),
(239, 'A78', 'Martunis', 'LAKI-LAKI', 'loader', 85, 1150, 297, 1125, 0, 0, 0, 0, 0, 0, 1150, 825, 0, 0),
(240, 'A79', 'Muammar', 'LAKI-LAKI', 'excavator', 95, 975, 294, 1100, 0, 0, 0, 0, 0, 0, 0, 875, 0, 0),
(241, 'A80', 'Rijaluddin', 'LAKI-LAKI', 'excavator', 95, 1025, 298, 1125, 0, 0, 0, 0, 0, 0, 0, 850, 0, 0),
(242, 'A81', 'M.Raja', 'LAKI-LAKI', 'pengawas_pu', 78, 1150, 294, 0, 0, 1100, 1150, 0, 0, 0, 0, 0, 0, 0),
(243, 'A82', 'Jalaluddin', 'LAKI-LAKI', 'pengawas_pu', 80, 1150, 288, 0, 0, 1150, 1150, 0, 0, 0, 0, 0, 0, 0),
(244, 'A83', 'Ramli', 'LAKI-LAKI', 'pengawas_pu', 90, 1025, 293, 0, 0, 1150, 1150, 0, 0, 0, 0, 0, 0, 0),
(245, 'A84', 'Rahul', 'LAKI-LAKI', 'labor', 89, 1075, 296, 1125, 0, 0, 0, 1150, 0, 0, 0, 0, 0, 0),
(246, 'A85', 'Arifin Ilham', 'LAKI-LAKI', 'labor', 85, 1025, 295, 1050, 0, 0, 0, 1100, 0, 0, 0, 0, 0, 0),
(247, 'A86', 'Saiful', 'LAKI-LAKI', 'labor', 80, 1150, 299, 1125, 0, 0, 0, 1150, 0, 0, 0, 0, 0, 0),
(248, 'A87', 'M. Diah Wahyudi', 'LAKI-LAKI', 'labor', 90, 1150, 297, 1050, 0, 0, 0, 1100, 0, 0, 0, 0, 0, 0),
(249, 'A88', 'Saifuddin', 'LAKI-LAKI', 'labor', 90, 1025, 292, 1100, 0, 0, 0, 1100, 0, 0, 0, 0, 0, 0),
(250, 'A89', 'Yusuf Maulana', 'LAKI-LAKI', 'labor', 75, 1150, 295, 1125, 0, 0, 0, 1150, 0, 0, 0, 0, 0, 0),
(251, 'A90', 'Karimullah', 'LAKI-LAKI', 'labor', 89, 1150, 298, 1125, 0, 0, 0, 1100, 0, 0, 0, 0, 0, 0),
(252, 'A91', 'Mustafa Kamal', 'LAKI-LAKI', 'labor', 85, 1150, 299, 1050, 0, 0, 0, 1100, 0, 0, 0, 0, 0, 0),
(253, 'A92', 'Azhari', 'LAKI-LAKI', 'labor', 95, 1150, 298, 1050, 0, 0, 0, 1150, 0, 0, 0, 0, 0, 0),
(254, 'A93', 'Rajali', 'LAKI-LAKI', 'limbah', 86, 1025, 297, 1125, 0, 0, 0, 0, 0, 0, 0, 0, 95, 0),
(255, 'A94', 'Muktar', 'LAKI-LAKI', 'limbah', 90, 1150, 299, 1100, 0, 0, 0, 0, 0, 0, 0, 0, 92, 0),
(256, 'A95', 'Muhammad Talib', 'LAKI-LAKI', 'security', 0, 0, 297, 1125, 1050, 0, 0, 0, 1150, 1000, 0, 0, 0, 0),
(257, 'A96', 'Putra', 'LAKI-LAKI', 'security', 0, 0, 298, 1050, 1100, 0, 0, 0, 1100, 1125, 0, 0, 0, 0),
(258, 'A97', 'Syamsuddin', 'LAKI-LAKI', 'security', 0, 0, 295, 1125, 1050, 0, 0, 0, 1100, 1150, 0, 0, 0, 0),
(259, 'A98', 'Salehudin', 'LAKI-LAKI', 'security', 0, 0, 297, 1125, 1050, 0, 0, 0, 1150, 1150, 0, 0, 0, 0),
(260, 'A99', 'Umar', 'LAKI-LAKI', 'security', 0, 0, 297, 1100, 1050, 0, 0, 0, 1100, 1125, 0, 0, 0, 0),
(261, 'A100', 'Fauzan Azima', 'LAKI-LAKI', 'security', 0, 0, 294, 1125, 1100, 0, 0, 0, 1150, 975, 0, 0, 0, 0),
(262, 'A101', 'Boby', 'LAKI-LAKI', 'security', 0, 0, 298, 1050, 1050, 0, 0, 0, 1100, 1150, 0, 0, 0, 0),
(263, 'A102', 'Reza Rahardian', 'LAKI-LAKI', 'security', 0, 0, 299, 1125, 1100, 0, 0, 0, 1150, 975, 0, 0, 0, 0),
(264, 'A103', 'Riski', 'LAKI-LAKI', 'security', 0, 0, 299, 1050, 1050, 0, 0, 0, 1100, 1125, 0, 0, 0, 0),
(265, 'A104', 'Agus Salim', 'LAKI-LAKI', 'security', 0, 0, 298, 1100, 1050, 0, 0, 0, 1150, 1150, 0, 0, 0, 0),
(266, 'A105', 'Muhammad Ali', 'LAKI-LAKI', 'security', 0, 0, 299, 1125, 1050, 0, 0, 0, 1100, 975, 0, 0, 0, 0),
(267, 'A106', 'Aziz', 'LAKI-LAKI', 'security', 0, 0, 294, 1125, 1100, 0, 0, 0, 1150, 975, 0, 0, 0, 0),
(268, 'A107', 'RAHMAT SAPUTRA', 'LAKI-LAKI', 'maintenance', 85, 1150, 298, 1050, 0, 0, 0, 0, 0, 0, 0, 1150, 0, 1125),
(269, 'A108', 'SYUKURDI', 'LAKI-LAKI', 'maintenance', 85, 1075, 297, 1125, 0, 0, 0, 0, 0, 0, 0, 1125, 0, 1100),
(270, 'A109', 'MARTUNIS', 'LAKI-LAKI', 'maintenance', 88, 1150, 295, 1100, 0, 0, 0, 0, 0, 0, 0, 1150, 0, 1100),
(271, 'A110', 'WAHYU HAMZAH', 'LAKI-LAKI', 'maintenance', 85, 1025, 299, 1125, 0, 0, 0, 0, 0, 0, 0, 1100, 0, 1150),
(272, 'A111', 'IMRAN WAHYUDI', 'LAKI-LAKI', 'maintenance', 80, 1150, 297, 1050, 0, 0, 0, 0, 0, 0, 0, 1050, 0, 1125),
(273, 'A112', 'MUHAMMAD REZA', 'LAKI-LAKI', 'maintenance', 90, 1150, 296, 1125, 0, 0, 0, 0, 0, 0, 0, 1100, 0, 1150),
(274, 'A113', 'HUSNI ZONNI', 'LAKI-LAKI', 'maintenance', 94, 1075, 295, 1125, 0, 0, 0, 0, 0, 0, 0, 1100, 0, 1100),
(275, 'A114', 'SUHERMAN', 'LAKI-LAKI', 'maintenance', 89, 1150, 297, 1050, 0, 0, 0, 0, 0, 0, 0, 1150, 0, 1100),
(276, 'A115', 'MUHAMMAD AKMAL', 'LAKI-LAKI', 'maintenance', 85, 1150, 293, 1050, 0, 0, 0, 0, 0, 0, 0, 1125, 0, 1150),
(277, 'A116', 'ZIKRI AMRI', 'LAKI-LAKI', 'maintenance', 85, 1150, 295, 1125, 0, 0, 0, 0, 0, 0, 0, 1150, 0, 1150),
(278, 'A116', 'MASLIADI ISMAIL', 'LAKI-LAKI', 'maintenance', 89, 1150, 299, 1100, 0, 0, 0, 0, 0, 0, 0, 1125, 0, 1100),
(279, 'A117', 'EDI PRANA', 'LAKI-LAKI', 'maintenance', 90, 1025, 299, 1125, 0, 0, 0, 0, 0, 0, 0, 1125, 0, 1150),
(280, 'A117', 'FIRMAN', 'LAKI-LAKI', 'maintenance', 90, 1150, 296, 1050, 0, 0, 0, 0, 0, 0, 0, 1150, 0, 1100),
(281, 'A118', 'IHSAN HAFID', 'LAKI-LAKI', 'maintenance', 95, 1025, 298, 1125, 0, 0, 0, 0, 0, 0, 0, 1100, 0, 1100),
(282, 'A121', 'M.SAWALUDIN', 'LAKI-LAKI', 'maintenance', 80, 1150, 296, 1050, 0, 0, 0, 0, 0, 0, 0, 1150, 0, 1125),
(283, 'A122', 'RUSLAN ZAINI', 'LAKI-LAKI', 'maintenance', 85, 1025, 287, 1100, 0, 0, 0, 0, 0, 0, 0, 1150, 0, 1150),
(284, 'A123', 'AGUS PUTRA', 'LAKI-LAKI', 'maintenance', 87, 1150, 294, 1125, 0, 0, 0, 0, 0, 0, 0, 1125, 0, 1100),
(285, 'A124', 'MAKMUN', 'LAKI-LAKI', 'maintenance', 90, 1150, 295, 1100, 0, 0, 0, 0, 0, 0, 0, 1150, 0, 1125),
(286, 'A125', 'RAMDAN .P', 'LAKI-LAKI', 'maintenance', 83, 1025, 294, 1125, 0, 0, 0, 0, 0, 0, 0, 1100, 0, 1150);

-- --------------------------------------------------------

--
-- Struktur dari tabel `excavator`
--

CREATE TABLE `excavator` (
  `id` int(11) NOT NULL,
  `kode_alternatif` varchar(100) NOT NULL,
  `nama_alternatif` varchar(100) NOT NULL,
  `jns_kelamin` varchar(100) NOT NULL,
  `c1` int(100) NOT NULL,
  `c2` int(100) NOT NULL,
  `c3` int(100) NOT NULL,
  `c4` int(100) NOT NULL,
  `c5` int(100) NOT NULL,
  `c12` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `excavator`
--

INSERT INTO `excavator` (`id`, `kode_alternatif`, `nama_alternatif`, `jns_kelamin`, `c1`, `c2`, `c3`, `c4`, `c5`, `c12`) VALUES
(1, 'A79', 'Muammar', 'LAKI-LAKI', 95, 975, 294, 1100, 0, 875),
(2, 'A80', 'Rijaluddin', 'LAKI-LAKI', 95, 1025, 298, 1125, 0, 850);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kantor`
--

CREATE TABLE `kantor` (
  `id` int(11) NOT NULL,
  `kode_alternatif` varchar(100) NOT NULL,
  `nama_alternatif` varchar(100) NOT NULL,
  `jns_kelamin` varchar(100) NOT NULL,
  `c1` int(100) NOT NULL,
  `c2` int(100) NOT NULL,
  `c3` int(100) NOT NULL,
  `c4` int(100) NOT NULL,
  `c5` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kantor`
--

INSERT INTO `kantor` (`id`, `kode_alternatif`, `nama_alternatif`, `jns_kelamin`, `c1`, `c2`, `c3`, `c4`, `c5`) VALUES
(3, 'A60', 'Nurhayati', 'PEREMPUAN', 85, 1150, 297, 1125, 1150),
(4, 'A61', 'Ratna Dewi', 'PEREMPUAN', 80, 1150, 299, 1100, 1100),
(5, 'A62', 'Pernama sari', 'PEREMPUAN', 80, 975, 298, 1125, 1100),
(6, 'A63', 'Devi Safira', 'PEREMPUAN', 85, 1150, 299, 1125, 1050),
(7, 'A64', 'Junaidi', 'LAKI-LAKI', 90, 1150, 299, 1050, 1150),
(8, 'A65', 'Ismail', 'LAKI-LAKI', 91, 1025, 292, 1050, 1100),
(9, 'A66', 'Ihsan Hafid', 'LAKI-LAKI', 87, 1075, 297, 1100, 1100),
(10, 'A67', 'Abrar', 'LAKI-LAKI', 88, 1150, 291, 1125, 1050),
(11, 'A68', 'M. Zulfikri', 'LAKI-LAKI', 80, 1025, 295, 1125, 1100),
(12, 'A69', 'Bahagia', 'LAKI-LAKI', 80, 1150, 297, 1100, 1050),
(13, 'A70', 'Bahar', 'LAKI-LAKI', 85, 975, 298, 1125, 1100);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE `kriteria` (
  `id` int(11) NOT NULL,
  `bidang` varchar(255) NOT NULL,
  `c1` int(255) NOT NULL,
  `c2` int(255) NOT NULL,
  `c3` int(255) NOT NULL,
  `c4` int(11) NOT NULL,
  `c5` int(11) NOT NULL,
  `c6` int(11) NOT NULL,
  `c7` int(11) NOT NULL,
  `c8` int(11) NOT NULL,
  `c9` int(11) NOT NULL,
  `c10` int(11) NOT NULL,
  `c11` int(11) NOT NULL,
  `c12` int(11) NOT NULL,
  `c13` int(11) NOT NULL,
  `c14` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`id`, `bidang`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`, `c7`, `c8`, `c9`, `c10`, `c11`, `c12`, `c13`, `c14`) VALUES
(1, 'sortasi', 5, 4, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 'proses', 5, 4, 2, 2, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0),
(3, 'kantor', 2, 2, 2, 2, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 'supir', 3, 3, 2, 2, 0, 0, 0, 0, 0, 0, 0, 5, 0, 0),
(5, 'loader', 4, 4, 2, 2, 0, 0, 0, 0, 0, 0, 2, 2, 0, 0),
(6, 'excavator', 3, 3, 2, 2, 0, 0, 0, 0, 0, 0, 0, 5, 0, 0),
(7, 'pengawas_pu', 2, 2, 2, 0, 0, 5, 2, 0, 0, 0, 0, 0, 0, 0),
(8, 'labor', 5, 4, 2, 2, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0),
(9, 'limbah', 5, 4, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0),
(10, 'security', 0, 0, 2, 2, 2, 0, 0, 0, 2, 5, 0, 0, 0, 0),
(11, 'maintenance', 3, 3, 2, 2, 0, 0, 0, 0, 0, 0, 0, 3, 0, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `labor`
--

CREATE TABLE `labor` (
  `id` int(11) NOT NULL,
  `kode_alternatif` varchar(100) NOT NULL,
  `nama_alternatif` varchar(100) NOT NULL,
  `jns_kelamin` varchar(100) NOT NULL,
  `c1` int(11) NOT NULL,
  `c2` int(11) NOT NULL,
  `c3` int(11) NOT NULL,
  `c4` int(11) NOT NULL,
  `c8` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `labor`
--

INSERT INTO `labor` (`id`, `kode_alternatif`, `nama_alternatif`, `jns_kelamin`, `c1`, `c2`, `c3`, `c4`, `c8`) VALUES
(1, 'A84', 'Rahul', 'LAKI-LAKI', 89, 1075, 296, 1125, 1150),
(2, 'A85', 'Arifin Ilham', 'LAKI-LAKI', 85, 1025, 295, 1050, 1100),
(3, 'A86', 'Saiful', 'LAKI-LAKI', 80, 1150, 299, 1125, 1150),
(4, 'A87', 'M. Diah Wahyudi', 'LAKI-LAKI', 90, 1150, 297, 1050, 1100),
(5, 'A88', 'Saifuddin', 'LAKI-LAKI', 90, 1025, 292, 1100, 1100),
(6, 'A89', 'Yusuf Maulana', 'LAKI-LAKI', 75, 1150, 295, 1125, 1150),
(7, 'A90', 'Karimullah', 'LAKI-LAKI', 89, 1150, 298, 1125, 1100),
(8, 'A91', 'Mustafa Kamal', 'LAKI-LAKI', 85, 1150, 299, 1050, 1100),
(9, 'A92', 'Azhari', 'LAKI-LAKI', 95, 1150, 298, 1050, 1150);

-- --------------------------------------------------------

--
-- Struktur dari tabel `limbah`
--

CREATE TABLE `limbah` (
  `id` int(11) NOT NULL,
  `kode_alternatif` varchar(100) NOT NULL,
  `nama_alternatif` varchar(100) NOT NULL,
  `jns_kelamin` varchar(100) NOT NULL,
  `c1` int(100) NOT NULL,
  `c2` int(100) NOT NULL,
  `c3` int(100) NOT NULL,
  `c4` int(100) NOT NULL,
  `c13` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `limbah`
--

INSERT INTO `limbah` (`id`, `kode_alternatif`, `nama_alternatif`, `jns_kelamin`, `c1`, `c2`, `c3`, `c4`, `c13`) VALUES
(1, 'A93', 'Rajali', 'LAKI-LAKI', 86, 1025, 297, 1125, 95),
(2, 'A94', 'Muktar', 'LAKI-LAKI', 90, 1150, 299, 1100, 92);

-- --------------------------------------------------------

--
-- Struktur dari tabel `loader`
--

CREATE TABLE `loader` (
  `id` int(11) NOT NULL,
  `kode_alternatif` varchar(100) NOT NULL,
  `nama_alternatif` varchar(100) NOT NULL,
  `jns_kelamin` varchar(100) NOT NULL,
  `c1` int(100) NOT NULL,
  `c2` int(100) NOT NULL,
  `c3` int(100) NOT NULL,
  `c4` int(100) NOT NULL,
  `c11` int(100) NOT NULL,
  `c12` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `loader`
--

INSERT INTO `loader` (`id`, `kode_alternatif`, `nama_alternatif`, `jns_kelamin`, `c1`, `c2`, `c3`, `c4`, `c11`, `c12`) VALUES
(2, 'A76', 'Yahya Ismail', 'LAKI-LAKI', 85, 1150, 299, 1050, 1150, 800),
(3, 'A77', 'Iqmal Ramadhan', 'LAKI-LAKI', 89, 1025, 295, 1050, 1100, 775),
(4, 'A78', 'Martunis', 'LAKI-LAKI', 85, 1150, 297, 1125, 1150, 825);

-- --------------------------------------------------------

--
-- Struktur dari tabel `maintenance`
--

CREATE TABLE `maintenance` (
  `id` int(11) NOT NULL,
  `kode_alternatif` varchar(100) NOT NULL,
  `nama_alternatif` varchar(100) NOT NULL,
  `jns_kelamin` varchar(100) NOT NULL,
  `c1` int(100) NOT NULL,
  `c2` int(100) NOT NULL,
  `c3` int(100) NOT NULL,
  `c4` int(100) NOT NULL,
  `c12` int(100) NOT NULL,
  `c14` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `maintenance`
--

INSERT INTO `maintenance` (`id`, `kode_alternatif`, `nama_alternatif`, `jns_kelamin`, `c1`, `c2`, `c3`, `c4`, `c12`, `c14`) VALUES
(1, 'A107', 'RAHMAT SAPUTRA', 'LAKI-LAKI', 85, 1150, 298, 1050, 1150, 1125),
(2, 'A108', 'SYUKURDI', 'LAKI-LAKI', 85, 1075, 297, 1125, 1125, 1100),
(3, 'A109', 'MARTUNIS', 'LAKI-LAKI', 88, 1150, 295, 1100, 1150, 1100),
(4, 'A110', 'WAHYU HAMZAH', 'LAKI-LAKI', 85, 1025, 299, 1125, 1100, 1150),
(5, 'A111', 'IMRAN WAHYUDI', 'LAKI-LAKI', 80, 1150, 297, 1050, 1050, 1125),
(6, 'A112', 'MUHAMMAD REZA', 'LAKI-LAKI', 90, 1150, 296, 1125, 1100, 1150),
(7, 'A113', 'HUSNI ZONNI', 'LAKI-LAKI', 94, 1075, 295, 1125, 1100, 1100),
(8, 'A114', 'SUHERMAN', 'LAKI-LAKI', 89, 1150, 297, 1050, 1150, 1100),
(9, 'A115', 'MUHAMMAD AKMAL', 'LAKI-LAKI', 85, 1150, 293, 1050, 1125, 1150),
(10, 'A116', 'ZIKRI AMRI', 'LAKI-LAKI', 85, 1150, 295, 1125, 1150, 1150),
(11, 'A116', 'MASLIADI ISMAIL', 'LAKI-LAKI', 89, 1150, 299, 1100, 1125, 1100),
(12, 'A117', 'EDI PRANA', 'LAKI-LAKI', 90, 1025, 299, 1125, 1125, 1150),
(13, 'A117', 'FIRMAN', 'LAKI-LAKI', 90, 1150, 296, 1050, 1150, 1100),
(14, 'A118', 'IHSAN HAFID', 'LAKI-LAKI', 95, 1025, 298, 1125, 1100, 1100),
(15, 'A121', 'M.SAWALUDIN', 'LAKI-LAKI', 80, 1150, 296, 1050, 1150, 1125),
(16, 'A122', 'RUSLAN ZAINI', 'LAKI-LAKI', 85, 1025, 287, 1100, 1150, 1150),
(17, 'A123', 'AGUS PUTRA', 'LAKI-LAKI', 87, 1150, 294, 1125, 1125, 1100),
(18, 'A124', 'MAKMUN', 'LAKI-LAKI', 90, 1150, 295, 1100, 1150, 1125),
(19, 'A125', 'RAMDAN .P', 'LAKI-LAKI', 83, 1025, 294, 1125, 1100, 1150);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengawas_pu`
--

CREATE TABLE `pengawas_pu` (
  `id` int(11) NOT NULL,
  `kode_alternatif` varchar(100) NOT NULL,
  `nama_alternatif` varchar(100) NOT NULL,
  `jns_kelamin` varchar(100) NOT NULL,
  `c1` int(100) NOT NULL,
  `c2` int(100) NOT NULL,
  `c3` int(100) NOT NULL,
  `c6` int(100) NOT NULL,
  `c7` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengawas_pu`
--

INSERT INTO `pengawas_pu` (`id`, `kode_alternatif`, `nama_alternatif`, `jns_kelamin`, `c1`, `c2`, `c3`, `c6`, `c7`) VALUES
(1, 'A81', 'M.Raja', 'LAKI-LAKI', 78, 1150, 294, 1100, 1150),
(2, 'A82', 'Jalaluddin', 'LAKI-LAKI', 80, 1150, 288, 1150, 1150),
(3, 'A83', 'Ramli', 'LAKI-LAKI', 90, 1025, 293, 1150, 1150);

-- --------------------------------------------------------

--
-- Struktur dari tabel `proses`
--

CREATE TABLE `proses` (
  `id` int(11) NOT NULL,
  `kode_alternatif` varchar(100) NOT NULL,
  `nama_alternatif` varchar(100) NOT NULL,
  `jns_kelamin` varchar(100) NOT NULL,
  `c1` int(100) NOT NULL,
  `c2` int(100) NOT NULL,
  `c3` int(100) NOT NULL,
  `c4` int(100) NOT NULL,
  `c8` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `proses`
--

INSERT INTO `proses` (`id`, `kode_alternatif`, `nama_alternatif`, `jns_kelamin`, `c1`, `c2`, `c3`, `c4`, `c8`) VALUES
(6, 'A15', 'Zaenudin', 'LAKI-LAKI', 79, 1150, 293, 1100, 1150),
(7, 'A16', 'Khaidir Ali', 'LAKI-LAKI', 80, 1025, 296, 1050, 1100),
(8, 'A17', 'Kariwian Danil', 'LAKI-LAKI', 80, 1150, 299, 1050, 1100),
(9, 'A19', 'M.Zainudin', 'LAKI-LAKI', 82, 1150, 298, 1050, 1150),
(10, 'A19', 'Chandra', 'LAKI-LAKI', 89, 1025, 297, 1100, 1100),
(11, 'A20', 'Iqbar', 'LAKI-LAKI', 70, 1150, 292, 1050, 1150),
(12, 'A21', 'Helmi Yahya', 'LAKI-LAKI', 90, 1025, 297, 1125, 1100),
(13, 'A22', 'Abdul Hamid', 'LAKI-LAKI', 95, 1150, 299, 1050, 1100),
(14, 'A23', 'M.Rizamdani', 'LAKI-LAKI', 84, 1150, 298, 1100, 1150),
(15, 'A25', 'Zulkifli', 'LAKI-LAKI', 75, 1025, 295, 1100, 1100),
(16, 'A25', 'Juliandi', 'LAKI-LAKI', 80, 1075, 298, 1100, 1150),
(17, 'A26', 'Noval Fachri', 'LAKI-LAKI', 86, 1025, 297, 1050, 1100),
(18, 'A27', 'Rahmat Jumaini. H', 'LAKI-LAKI', 97, 1150, 296, 1100, 1150),
(19, 'A28', 'Nur Husen Mi’ral', 'LAKI-LAKI', 85, 1150, 297, 1100, 1100),
(20, 'A29', 'Saparwadi', 'LAKI-LAKI', 85, 1025, 296, 1050, 1100),
(21, 'A30', 'Hamdani', 'LAKI-LAKI', 83, 1075, 298, 1050, 1150),
(22, 'A31', 'Muhamad Zikri', 'LAKI-LAKI', 79, 1150, 298, 1100, 1100),
(23, 'A32', 'M. Azir Ansori ', 'LAKI-LAKI', 80, 1150, 295, 1125, 1150),
(24, 'A33', 'M. Zainudin', 'LAKI-LAKI', 90, 1150, 299, 1050, 1100),
(25, 'A34', 'Fadhli Ahmad', 'LAKI-LAKI', 96, 1075, 299, 1100, 1100),
(26, 'A35', 'Husni Zonni ', 'LAKI-LAKI', 86, 1025, 298, 1125, 1100),
(27, 'A36', 'Muhamad Rodi', 'LAKI-LAKI', 85, 1150, 297, 1100, 1150),
(28, 'A37', 'Mashal ', 'LAKI-LAKI', 80, 975, 295, 1125, 1150),
(29, 'A38', 'Afhar', 'LAKI-LAKI', 73, 1150, 296, 1125, 1100),
(30, 'A39', 'Rohman', 'LAKI-LAKI', 90, 1150, 296, 1050, 1150),
(31, 'A40', 'Martani Ferdianto', 'LAKI-LAKI', 91, 1150, 296, 1050, 1150),
(32, 'A41', 'Sudi Hamdani', 'LAKI-LAKI', 89, 1150, 296, 1125, 1100),
(33, 'A42', 'Andrian Pratama ', 'LAKI-LAKI', 85, 1025, 295, 1100, 1150),
(34, 'A43', 'Ruhaiman. A ', 'LAKI-LAKI', 87, 1025, 295, 1125, 1100),
(35, 'A44', 'Ahmad Paozan ', 'LAKI-LAKI', 75, 1150, 299, 1050, 1100),
(36, 'A45', 'Muhamad Ilham', 'LAKI-LAKI', 77, 1025, 294, 1050, 1150),
(37, 'A46', 'Abdul Hamid ', 'LAKI-LAKI', 89, 1150, 297, 1125, 1150),
(38, 'A47', 'Ahmad Badani', 'LAKI-LAKI', 85, 1150, 295, 1125, 1100),
(39, 'A48', 'Junaidi ', 'LAKI-LAKI', 89, 1075, 297, 1100, 1150),
(40, 'A49', 'Ridwan ', 'LAKI-LAKI', 78, 1150, 297, 1125, 1100),
(41, 'A50', 'Husni Zonni ', 'LAKI-LAKI', 95, 1075, 295, 1050, 1150),
(42, 'A51', 'Suherman ', 'LAKI-LAKI', 80, 1150, 294, 1125, 1100),
(43, 'A52', 'Masliadi Ismail', 'LAKI-LAKI', 80, 1150, 296, 1100, 1150),
(44, 'A53', 'M. Zaenal Anshori', 'LAKI-LAKI', 90, 1150, 296, 1050, 1100),
(45, 'A54', 'Edi Prana Yasa', 'LAKI-LAKI', 85, 1150, 296, 1050, 1150),
(46, 'A55', 'Firman', 'LAKI-LAKI', 87, 1150, 299, 1050, 1150),
(47, 'A56', 'Suriadi', 'LAKI-LAKI', 79, 1150, 297, 1050, 1150),
(48, 'A57', 'Sulaeman', 'LAKI-LAKI', 80, 1025, 299, 1100, 1100),
(49, 'A58', 'Hendrawan', 'PEREMPUAN', 90, 1150, 298, 1050, 1100),
(50, 'A59', 'Ihsan Hafid ', 'LAKI-LAKI', 90, 1075, 298, 1125, 1150);

-- --------------------------------------------------------

--
-- Struktur dari tabel `security`
--

CREATE TABLE `security` (
  `id` int(11) NOT NULL,
  `kode_alternatif` varchar(100) NOT NULL,
  `nama_alternatif` varchar(100) NOT NULL,
  `jns_kelamin` varchar(100) NOT NULL,
  `c3` int(100) NOT NULL,
  `c4` int(100) NOT NULL,
  `c5` int(100) NOT NULL,
  `c9` int(100) NOT NULL,
  `c10` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `security`
--

INSERT INTO `security` (`id`, `kode_alternatif`, `nama_alternatif`, `jns_kelamin`, `c3`, `c4`, `c5`, `c9`, `c10`) VALUES
(1, 'A95', 'Muhammad Talib', 'LAKI-LAKI', 297, 1125, 1050, 1150, 1000),
(2, 'A96', 'Putra', 'LAKI-LAKI', 298, 1050, 1100, 1100, 1125),
(3, 'A97', 'Syamsuddin', 'LAKI-LAKI', 295, 1125, 1050, 1100, 1150),
(4, 'A98', 'Salehudin', 'LAKI-LAKI', 297, 1125, 1050, 1150, 1150),
(5, 'A99', 'Umar', 'LAKI-LAKI', 297, 1100, 1050, 1100, 1125),
(6, 'A100', 'Fauzan Azima', 'LAKI-LAKI', 294, 1125, 1100, 1150, 975),
(7, 'A101', 'Boby', 'LAKI-LAKI', 298, 1050, 1050, 1100, 1150),
(8, 'A102', 'Reza Rahardian', 'LAKI-LAKI', 299, 1125, 1100, 1150, 975),
(9, 'A103', 'Riski', 'LAKI-LAKI', 299, 1050, 1050, 1100, 1125),
(10, 'A104', 'Agus Salim', 'LAKI-LAKI', 298, 1100, 1050, 1150, 1150),
(11, 'A105', 'Muhammad Ali', 'LAKI-LAKI', 299, 1125, 1050, 1100, 975),
(12, 'A106', 'Aziz', 'LAKI-LAKI', 294, 1125, 1100, 1150, 975);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sortasi`
--

CREATE TABLE `sortasi` (
  `id` int(11) NOT NULL,
  `kode_alternatif` varchar(100) NOT NULL,
  `nama_alternatif` varchar(100) NOT NULL,
  `jns_kelamin` varchar(100) NOT NULL,
  `c1` int(100) NOT NULL,
  `c2` int(100) NOT NULL,
  `c3` int(100) NOT NULL,
  `c4` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sortasi`
--

INSERT INTO `sortasi` (`id`, `kode_alternatif`, `nama_alternatif`, `jns_kelamin`, `c1`, `c2`, `c3`, `c4`) VALUES
(3, 'A1', 'Supriadi', 'LAKI-LAKI', 80, 975, 288, 1050),
(4, 'A2', 'Wahyudi', 'LAKI-LAKI', 75, 1025, 298, 1100),
(5, 'A3', 'Aulia Saputra', 'LAKI-LAKI', 70, 1025, 296, 1125),
(6, 'A4', 'Yendi Rahman', 'LAKI-LAKI', 80, 1150, 295, 1125),
(7, 'A5', 'Khairul Anwar', 'LAKI-LAKI', 80, 1150, 299, 1050),
(8, 'A6', 'M. Ridwan', 'LAKI-LAKI', 95, 1025, 288, 1100),
(9, 'A7', 'Sunardi', 'LAKI-LAKI', 75, 1025, 299, 1050),
(10, 'A8', 'Hendra Putra', 'LAKI-LAKI', 90, 1150, 299, 1125),
(11, 'A9', 'Awaludin ', 'LAKI-LAKI', 90, 1150, 298, 1100),
(12, 'A10', 'Suryadi Agus P', 'LAKI-LAKI', 85, 1125, 296, 1125),
(13, 'A11', 'M. Habibi', 'LAKI-LAKI', 75, 1150, 298, 1050),
(14, 'A12', 'M. Ali', 'LAKI-LAKI', 83, 1150, 295, 1100),
(15, 'A13', 'Khaerul Sadikin', 'LAKI-LAKI', 91, 1125, 294, 1050),
(16, 'A14', 'Wawan Hendrawan', 'LAKI-LAKI', 88, 1150, 297, 1125);

-- --------------------------------------------------------

--
-- Struktur dari tabel `supir`
--

CREATE TABLE `supir` (
  `id` int(11) NOT NULL,
  `kode_alternatif` varchar(100) NOT NULL,
  `nama_alternatif` varchar(100) NOT NULL,
  `jns_kelamin` varchar(100) NOT NULL,
  `c1` int(100) NOT NULL,
  `c2` int(100) NOT NULL,
  `c3` int(100) NOT NULL,
  `c4` int(100) NOT NULL,
  `c12` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `supir`
--

INSERT INTO `supir` (`id`, `kode_alternatif`, `nama_alternatif`, `jns_kelamin`, `c1`, `c2`, `c3`, `c4`, `c12`) VALUES
(1, 'A71', 'Riski Akbar', 'LAKI-LAKI', 93, 1150, 295, 1125, 825),
(2, 'A72', 'Samsul', 'LAKI-LAKI', 85, 1150, 298, 1125, 800),
(3, 'A73', 'Amrizal', 'LAKI-LAKI', 93, 1150, 293, 1100, 950),
(4, 'A74', 'Khadafi', 'LAKI-LAKI', 85, 1075, 291, 1125, 925),
(5, 'A75', 'Arianto', 'LAKI-LAKI', 90, 975, 291, 1050, 975);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama_user`, `username`, `password`) VALUES
(1, 'Naya', 'admin', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `excavator`
--
ALTER TABLE `excavator`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kantor`
--
ALTER TABLE `kantor`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `labor`
--
ALTER TABLE `labor`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `limbah`
--
ALTER TABLE `limbah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `loader`
--
ALTER TABLE `loader`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `maintenance`
--
ALTER TABLE `maintenance`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengawas_pu`
--
ALTER TABLE `pengawas_pu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `proses`
--
ALTER TABLE `proses`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `security`
--
ALTER TABLE `security`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sortasi`
--
ALTER TABLE `sortasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `supir`
--
ALTER TABLE `supir`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alternatif`
--
ALTER TABLE `alternatif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=287;

--
-- AUTO_INCREMENT untuk tabel `excavator`
--
ALTER TABLE `excavator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kantor`
--
ALTER TABLE `kantor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `labor`
--
ALTER TABLE `labor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `limbah`
--
ALTER TABLE `limbah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `loader`
--
ALTER TABLE `loader`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `maintenance`
--
ALTER TABLE `maintenance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `pengawas_pu`
--
ALTER TABLE `pengawas_pu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `proses`
--
ALTER TABLE `proses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `security`
--
ALTER TABLE `security`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `sortasi`
--
ALTER TABLE `sortasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `supir`
--
ALTER TABLE `supir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
