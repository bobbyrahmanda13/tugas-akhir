-- phpMyAdmin SQL Dump
-- version 3.1.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 05. Juni 2018 jam 14:59
-- Versi Server: 5.1.35
-- Versi PHP: 5.2.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bobby_tulang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(14) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `nama` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nama`) VALUES
(1, '65', '6', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `defuzifikasi`
--

CREATE TABLE IF NOT EXISTS `defuzifikasi` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `p1` decimal(10,3) NOT NULL,
  `p2` decimal(10,3) NOT NULL,
  `p3` decimal(10,3) NOT NULL,
  `nilai` decimal(10,3) NOT NULL,
  `jenis` varchar(15) NOT NULL,
  `diagnosa` varchar(43) NOT NULL,
  `obat` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data untuk tabel `defuzifikasi`
--

INSERT INTO `defuzifikasi` (`id`, `username`, `p1`, `p2`, `p3`, `nilai`, `jenis`, `diagnosa`, `obat`) VALUES
(1, '2', 51.133, 0.000, 0.000, 51.133, 'Berat', 'Skoliosis', 'obat/1.php'),
(2, '2', 0.000, 0.000, 0.000, 0.000, 'Ringan', 'Tidak Terdiagnosa Penyakit Tulang', 'obat/a.php'),
(3, '2', 0.000, 0.000, 0.000, 0.000, 'Ringan', 'Tidak Terdiagnosa Penyakit Tulang', 'obat/a.php'),
(4, '2', 0.000, 0.000, 0.000, 0.000, 'Ringan', 'Tidak Terdiagnosa Penyakit Tulang', 'obat/a.php'),
(5, '2', 51.133, 0.000, 0.000, 51.133, 'Berat', 'Skoliosis', 'obat/1.php'),
(6, '2', 0.000, 0.000, 0.000, 0.000, 'Ringan', 'Tidak Terdiagnosa Penyakit Tulang', 'obat/a.php'),
(7, '2', 0.000, 0.000, 0.000, 0.000, 'Ringan', 'Tidak Terdiagnosa Penyakit Tulang', 'obat/a.php'),
(8, '2', 0.000, 0.000, 0.000, 0.000, 'Ringan', 'Tidak Terdiagnosa Penyakit Tulang', 'obat/a.php'),
(9, '2', 0.000, 0.000, 0.000, 0.000, 'Ringan', 'Tidak Terdiagnosa Penyakit Tulang', 'obat/a.php'),
(10, '2', 0.000, 0.000, 0.000, 0.000, 'Ringan', 'Tidak Terdiagnosa Penyakit Tulang', 'obat/a.php'),
(11, '2', 0.000, 0.000, 0.000, 0.000, 'Ringan', 'Tidak Terdiagnosa Penyakit Tulang', 'obat/a.php'),
(12, '2', 0.000, 0.000, 0.000, 0.000, 'Ringan', 'Tidak Terdiagnosa Penyakit Tulang', 'obat/a.php'),
(13, '2', 0.000, 98.000, 0.000, 98.000, 'Berat', 'Osteomyelitis', 'obat/2.php'),
(14, '2', 51.133, 0.000, 0.000, 51.133, 'Berat', 'Skoliosis', 'obat/1.php'),
(15, '2', 0.000, 0.000, 98.000, 98.000, 'Berat', 'Osteoporosis', 'obat/3.php'),
(16, '2', 98.000, 0.000, 0.000, 98.000, 'Berat', 'Skoliosis', 'obat/1.php'),
(17, '2', 0.000, 0.000, 0.000, 0.000, 'Ringan', 'Tidak Terdiagnosa Penyakit Tulang', 'obat/a.php'),
(18, '2', 98.000, 0.000, 0.000, 98.000, 'Berat', 'Skoliosis', 'obat/1.php'),
(19, 'rahman', 36.200, 0.000, 0.000, 36.200, 'Ringan', 'Skoliosis', 'obat/1.php'),
(20, '1', 51.133, 0.000, 0.000, 51.133, 'Berat', 'Skoliosis', 'obat/1.php'),
(21, '1', 51.133, 0.000, 0.000, 51.133, 'Berat', 'Skoliosis', 'obat/1.php');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE IF NOT EXISTS `kriteria` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `username` int(15) NOT NULL,
  `g1` int(4) NOT NULL,
  `g2` int(4) NOT NULL,
  `g3` int(4) NOT NULL,
  `g4` int(4) NOT NULL,
  `g5` int(4) NOT NULL,
  `g6` int(4) NOT NULL,
  `g7` int(4) NOT NULL,
  `g8` int(4) NOT NULL,
  `g9` int(4) NOT NULL,
  `g10` int(4) NOT NULL,
  `g11` int(4) NOT NULL,
  `g12` int(4) NOT NULL,
  `tanggal` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`id`, `username`, `g1`, `g2`, `g3`, `g4`, `g5`, `g6`, `g7`, `g8`, `g9`, `g10`, `g11`, `g12`, `tanggal`) VALUES
(1, 2, 5, 34, 6, 13, 2, 4, 36, 1, 2, 16, 160, 2, '2018/06/04 03:39:45'),
(2, 2, 1, 16, 1, 20, 7, 7, 38, 6, 5, 19, 160, 3, '2018/06/04 04:33:26'),
(3, 2, 1, 15, 1, 10, 7, 7, 38, 5, 5, 15, 145, 1, '2018/06/04 04:43:39'),
(4, 2, 1, 15, 1, 10, 7, 7, 38, 5, 5, 15, 145, 1, '2018/06/04 04:48:49'),
(5, 2, 5, 34, 6, 13, 1, 1, 30, 1, 1, 15, 145, 1, '2018/06/04 04:51:08'),
(6, 2, 1, 15, 1, 10, 9, 7, 39, 6, 6, 15, 145, 1, '2018/06/04 04:53:04'),
(7, 2, 1, 15, 1, 10, 9, 7, 39, 6, 6, 15, 145, 1, '2018/06/04 04:55:08'),
(8, 2, 1, 15, 1, 10, 9, 7, 39, 6, 6, 15, 145, 1, '2018/06/04 05:05:06'),
(9, 2, 1, 15, 1, 10, 9, 7, 39, 6, 6, 15, 145, 1, '2018/06/04 05:09:52'),
(10, 2, 1, 15, 1, 10, 9, 7, 39, 6, 6, 15, 145, 1, '2018/06/04 05:12:05'),
(11, 2, 1, 15, 1, 10, 9, 7, 39, 6, 6, 15, 145, 1, '2018/06/04 05:24:15'),
(12, 2, 1, 15, 1, 10, 9, 7, 39, 6, 6, 15, 145, 1, '2018/06/04 05:24:36'),
(13, 2, 1, 15, 1, 10, 9, 7, 39, 6, 6, 15, 145, 1, '2018/06/04 05:28:54'),
(14, 2, 5, 34, 6, 13, 2, 4, 36, 1, 2, 16, 160, 2, '2018/06/04 05:31:31'),
(15, 2, 1, 15, 1, 10, 1, 8, 31, 1, 1, 41, 146, 14, '2018/06/04 05:40:34'),
(16, 2, 7, 41, 7, 20, 2, 5, 37, 7, 6, 34, 146, 15, '2018/06/04 05:50:32'),
(17, 2, 5, 34, 1, 13, 5, 4, 36, 5, 5, 16, 160, 7, '2018/06/04 05:54:19'),
(18, 2, 6, 44, 7, 13, 2, 4, 36, 1, 2, 16, 160, 2, '2018/06/04 06:04:02'),
(19, 0, 5, 34, 4, 59, 6, 6, 35, 4, 6, 38, 167, 13, '2018/06/04 06:08:14'),
(20, 1, 5, 34, 6, 13, 2, 7, 36, 5, 2, 16, 160, 2, '2018/06/05 12:42:09'),
(21, 1, 5, 34, 6, 13, 7, 7, 36, 5, 2, 16, 160, 2, '2018/06/05 01:17:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE IF NOT EXISTS `pasien` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `jk` varchar(11) NOT NULL,
  `usia` int(3) NOT NULL,
  `telp` int(12) NOT NULL,
  `email` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `tanggal` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`id`, `username`, `password`, `nama`, `jk`, `usia`, `telp`, `email`, `alamat`, `tanggal`) VALUES
(1, '2', '2', '1', 'Laki-Laki', 1, 1, '1', '1', '2018-05-18 11:12:58'),
(2, '1', '1', '1', 'Laki-Laki', 1, 1, '1', '1', '2018-06-02 06:56:18'),
(3, 'rahman', 'bobby', 'bobby rahmanda', 'Laki-Laki', 21, 1273812738, 'test@ymail.com', 'gunung pangilun', '2018-06-04 06:06:12');
