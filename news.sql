-- phpMyAdmin SQL Dump
-- version 2.6.4-pl4
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Apr 17, 2012 at 04:05 PM
-- Server version: 4.0.26
-- PHP Version: 4.4.3-dev
-- 
-- Database: `elepant_cmsdb`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `news`
-- 

CREATE TABLE `news` (
  `id_news` int(4) NOT NULL auto_increment,
  `judul` varchar(100) NOT NULL default '',
  `berita` text NOT NULL,
  `pengirim` varchar(30) NOT NULL default '',
  `dibaca` int(6) NOT NULL default '0',
  `date` date NOT NULL default '0000-00-00',
  PRIMARY KEY  (`id_news`)
) TYPE=MyISAM AUTO_INCREMENT=17 ;

-- 
-- Dumping data for table `news`
-- 

INSERT INTO `news` VALUES (13, 'home', 'dimananannanana', 'botak', 4, '2012-04-16');
INSERT INTO `news` VALUES (8, 'Geng Motor Meraja lela', 'banyak tingkah yang aneh begitu pula dari masyarakat sekarang ', 'sueb', 2, '2012-04-16');
INSERT INTO `news` VALUES (9, 'Geng Motor Meraja lela', 'banyak tingkah yang aneh begitu pula dari masyarakat sekarang ', 'sueb', 2, '2012-04-16');
INSERT INTO `news` VALUES (15, 'dengan', 'fgfgfgfgffgg', 'sfgfgfgfg', 1, '2012-04-16');
INSERT INTO `news` VALUES (11, 'makanan bau amis', 'dimana mana terjadi penyalahgunaan makanan \r\nbaik di pasar maupun di hitel ', 'ian', 3, '2012-04-16');
