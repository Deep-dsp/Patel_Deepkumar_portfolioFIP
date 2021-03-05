-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 04, 2021 at 03:11 AM
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
-- Table structure for table `mediadb`
--

DROP TABLE IF EXISTS `mediadb`;
CREATE TABLE IF NOT EXISTS `mediadb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `thumbnail` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `about` varchar(5000) COLLATE utf8_unicode_ci NOT NULL,
  `tools` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(5000) COLLATE utf8_unicode_ci NOT NULL,
  `images` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mediadb`
--

INSERT INTO `mediadb` (`id`, `title`, `thumbnail`, `about`, `tools`, `link`, `images`) VALUES
(1, 'Bleach Tourism', 'G_bleach.png', 'This is social media advertising post I have created for a tourism company during my internship.', 'Adobe Photoshop,\r\nAdobe Illustrator', 'https://www.behance.net/gallery/110342257/Social-Media-Posts', 'bleach_thai.jpg'),
(2, 'Gymbore - Colletoral Design', 'G_gymboree.png', 'This is the collateral design of the Gymboree brand which I have recreated with some tweaks just for pushing myself to come with a new design. This design is a collection of a business card, print/banner advertisement, mockup to show how it can look in the real-world, and letterhead for a company. ', 'Adobe Photoshop,\r\nAdobe Illustrator', 'https://www.behance.net/gallery/110341025/Collateral-Design-Educational-Purpose', 'collatoral.png'),
(3, 'Beer Table - 3D', 'T_beertable.png', 'This is a personal project I have build to sharp my 3D skills. The goal was to make a realistic render image of this scene.', 'Adobe Photoshop,\r\nAdobe Illustrator,\r\nAutodesk Maya 3D,\r\nAutodesk Arnold Render engine\r\n', 'https://www.artstation.com/artwork/VdYRNP', 'Beertable.jpg'),
(4, 'Mike - 3D render image', 'T_mike.png', 'This is a project I have done for one of a client whose requirement was to create a realistic render image of a mike.', 'Adobe Photoshop,\r\nAdobe Illustrator,\r\nAutodesk Maya 3D,\r\nAutodesk Arnold Render engine', 'https://www.artstation.com/artwork/1naKQ2', 'Mike.jpg'),
(5, 'Kleenex Brand Mash up', 'T_kleenex.png', 'This was a school project where the challenge was to create a campaign for a beer where I had to use all the information of the kleenex and style it in the design or brand style of Coors beers. I have created a number of labels, mockups, 3D models of a beer bottle, packaging and labels. This project was really fun to do.', 'Adobe Photoshop,\r\nAdobe Illustrator,\r\nCinema4D', 'https://www.artstation.com/artwork/v1nz9d', 'kleenex.jpg'),
(6, 'Barrel - 3D render Image', 'T_barrel.png', 'Created this project using Autodesk Maya and I textured/shaded using Arnold ( ai stadandardsurface ). Here, I used aicurvature to change steel\'s edge color.so, it can look better. This project really took time to go back and fourth to bring realism.', 'Adobe Photoshop,\r\nAdobe Illustrator,\r\nAutodesk Maya,\r\nAutodesk Arnold Render', 'https://www.artstation.com/artwork/XBY4Dl', 'Barrel.jpg'),
(7, 'Brochure - Tim Hortons', 'G_timhortons.png', 'The main task for this project is to design a brochure in the style of great graphic designer \"Joseph Muller\" to advertise or promote the Tim Hortons products.', 'Adobe Photoshop,\r\nAdobe Illustrator', 'https://www.behance.net/gallery/110341163/Brochure-Design-Challenge', 'timhortons.png'),
(8, 'Bleach - Social Media Ad', 'G_dubai.png', 'This is the project I was assigned to design social media posts to promote and advertisement about a tourism company and its packages. I have done this design When I was an Intern at \"Eidolon Brand Design Studio\".', 'Adobe Photoshop,\r\nAdobe Illustrator', 'https://www.behance.net/gallery/110342257/Social-Media-Posts', 'bleach_dubai.jpg');

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
