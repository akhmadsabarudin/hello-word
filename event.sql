-- phpMyAdmin SQL Dump
-- version 2.11.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 01. Mei 2013 jam 19:34
-- Versi Server: 5.0.67
-- Versi PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `event`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(20) NOT NULL default '',
  `password` varchar(20) NOT NULL default ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE IF NOT EXISTS `artikel` (
  `id_artikel` int(4) NOT NULL auto_increment,
  `keterangan` text NOT NULL,
  `gambar` varchar(200) NOT NULL default '',
  PRIMARY KEY  (`id_artikel`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `keterangan`, `gambar`) VALUES
(7, 'suara nya redup bngat yah ', 'IMG00064-20121127-1631.jpg'),
(8, 'ill stand up you forever', 'IMG00300-20121127-1245.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tamu`
--

CREATE TABLE IF NOT EXISTS `tamu` (
  `id` int(20) NOT NULL auto_increment,
  `nama` varchar(50) NOT NULL default '',
  `email` varchar(50) NOT NULL default '',
  `pesan` text NOT NULL,
  `company` varchar(50) NOT NULL default '',
  `tgl` date NOT NULL default '0000-00-00',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data untuk tabel `tamu`
--

INSERT INTO `tamu` (`id`, `nama`, `email`, `pesan`, `company`, `tgl`) VALUES
(15, 'adi', 'adi@yahoo.com', 'dengan ini', 'pt. Express', '2012-10-25'),
(7, 'asdsd', 'sabarudin.akhmad@gmail.com', 'jualan aja yuk mau ga ', 'Global Teleshop', '2012-11-22'),
(40, 'obbiex', 'obiex@ymail.com', 'tolong kirim proposal donk', 'PT. Xl axiata', '2012-11-22'),
(14, 'Desy', 'desy88@rocketmail.com', 'ok', 'PT mamun', '2012-10-24'),
(11, 'ade', 'ade@yahoo.com', 'kok web nya gtu ', 'Xl.AXIATA', '2012-10-15'),
(41, 'akhmad', 'aaaa@njjbj.com', 'jangan begitu`', 'aaaaaaaa', '2013-02-01'),
(16, 'saya', 'saya@yamil.com', 'dalam kurung waktu sepekan akan ada tulisan yang aneh.\r\ndimana tulisan itu .\r\n', '', '2012-10-27'),
(39, 'akhmad', 'akhmad@ymail.com', 'ini web siapa si', 'juan', '2012-11-19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(20) NOT NULL auto_increment,
  `username` varchar(50) NOT NULL default '',
  `tlp` varchar(20) NOT NULL default '',
  `email` varchar(50) NOT NULL default '',
  `company` text NOT NULL,
  `tgl` date NOT NULL default '0000-00-00',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=171 ;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `tlp`, `email`, `company`, `tgl`) VALUES
(169, 'ade', '980008989988', 'ade@yahoo.com', 'PT toya', '2013-02-01'),
(86, 'ade', '098007900', 'adi@yahoo.com', 'pt. Express', '2012-11-04'),
(72, 'adi', '098889898', 'adi@yahoo.com', 'Pt.Axa', '2012-11-08'),
(82, 'onie', '098787878', 'onie@yahoo.com', 'Kita production', '2012-11-08'),
(170, 'dfdfd', '098888998333', 'adi@yahoo.com', 'bvhghghgh', '2013-02-05'),
(168, 'kokoh', '081343517627', 'kokoh28@yahoo.com', 'PT. Tirta Multi Karya', '2012-11-22');
