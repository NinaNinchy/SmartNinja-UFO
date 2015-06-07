-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2015 at 01:48 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ufo`
--

-- --------------------------------------------------------

--
-- Table structure for table `videnja`
--

CREATE TABLE IF NOT EXISTS `videnja` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `datum` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `kdaj` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lokacija` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'tukaj daš komentar, ki je viden samo v bazi',
  `izgled` text COLLATE utf8_unicode_ci NOT NULL,
  `dogajanje` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'kaj so vesoljci naredili',
  `ugrabitev` tinyint(1) NOT NULL,
  `kontakt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `videnja`
--

INSERT INTO `videnja` (`id`, `datum`, `kdaj`, `lokacija`, `izgled`, `dogajanje`, `ugrabitev`, `kontakt`) VALUES
(1, '2015-05-29 15:43:04', '16.2.2015', 'Ljubljana', 'zeleni, velike oči', 'vse motno', 1, '123 456 789'),
(2, '2015-05-29 15:59:53', 'čez poletje', 'koper', 'modri z velikimi ušesi', 'zelena svetloba', 1, '123 548 698');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
