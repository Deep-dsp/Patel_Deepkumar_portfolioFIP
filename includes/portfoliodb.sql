-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 29, 2020 at 09:49 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfoliodb`
--

-- --------------------------------------------------------

--
-- Table structure for table `mywork`
--

DROP TABLE IF EXISTS `mywork`;
CREATE TABLE IF NOT EXISTS `mywork` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `about` text COLLATE utf8_unicode_ci NOT NULL,
  `images` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mywork`
--

INSERT INTO `mywork` (`id`, `name`, `about`, `images`) VALUES
(1, 'Kleenex AD Poster', 'This is a school project where I have to use all the information of kleenex product and style it according to coors beers.\r\n\r\nHere, I have created label, 3D bottle and advertisement poster as you can see above.\r\n\r\nSoftware used: Adobe Photoshop, Adobe Illustrator, MAXON Cinema4D', 'imgL-1.jpg'),
(2, 'Brochure Design', 'Main task for this project is to design brochure in a style of great graphic designer \"Jseph Muller\" to advertise or promote the tim hortons products.\r\n\r\nSoftware Used: Adobe Photoshop, Adobe Illustrator', 'imgL-2.jpg'),
(3, 'Social Media Ad', 'This is the project I was assigned to design social media post to promote and advertisement about holiday company and their packages. I have done this design When I was Intern at \"Eidolon Brand Design Studio\".\r\n\r\nSoftware used: Adobe Illustrator', 'imgL-3.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
