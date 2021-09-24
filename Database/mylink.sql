-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2019 at 12:54 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mylink`
--

-- --------------------------------------------------------

--
-- Table structure for table `redirectlink`
--

CREATE TABLE `redirectlink` (
  `id` int(11) NOT NULL,
  `asli` varchar(500) NOT NULL,
  `publish` varchar(500) NOT NULL,
  `idlink` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `redirectlink`
--

INSERT INTO `redirectlink` (`id`, `asli`, `publish`, `idlink`) VALUES
(26, 'https://meownime.com/gujo-magnel-sub-indo/#12', 'https://localhost/mylink/link/?id=68747470733a2f2f6d656f776e696d652e636f6d2f67756a6f2d6d61676e656c2d', '68747470733a2f2f6d656f776e696d652e636f6d2f67756a6f2d6d61676e656c2d'),
(27, 'https://stackoverflow.com/questions/2379224/how-can-i-use-a-javascript-variable-as-a-php-variable', 'https://localhost/mylink/link/?id=68747470733a2f2f737461636b6f766572666c6f772e636f6d2f7175657374696f', '68747470733a2f2f737461636b6f766572666c6f772e636f6d2f7175657374696f'),
(28, 'https://www.w3schools.com/cssref/css3_pr_text-overflow.asp', 'https://localhost/mylink/link/?id=68747470733a2f2f7777772e77337363686f6f6c732e636f6d2f6373737265662f', '68747470733a2f2f7777772e77337363686f6f6c732e636f6d2f6373737265662f'),
(30, 'https://developer.mozilla.org/en-US/docs/Web/CSS/text-overflow', 'https://localhost/mylink/link/?id=68747470733a2f2f646576656c6f7065722e6d6f7a696c6c612e6f72672f656e2d', '68747470733a2f2f646576656c6f7065722e6d6f7a696c6c612e6f72672f656e2d'),
(31, 'https://www.quora.com/How-do-I-add-a-link-to-button-in-HTML', 'https://localhost/mylink/link/?id=68747470733a2f2f7777772e71756f72612e636f6d2f486f772d646f2d492d6164', '68747470733a2f2f7777772e71756f72612e636f6d2f486f772d646f2d492d6164'),
(32, 'https://www.dicoding.com/academies/47/tutorials/1268?from=1475', 'https://localhost/mylink/link/?id=68747470733a2f2f7777772e6469636f64696e672e636f6d2f61636164656d6965', '68747470733a2f2f7777772e6469636f64696e672e636f6d2f61636164656d6965732f34372f7475746f7269616c732f3132'),
(33, 'http://localhost/mylink/index.php', 'https://localhost/mylink/link/?id=687474703a2f2f6c6f63616c686f73742f6d796c696e6b2f696e6465782e706870', '687474703a2f2f6c6f63616c686f73742f6d796c696e6b2f696e6465782e706870'),
(34, 'https://web.whatsapp.com/', 'https://localhost/mylink/link/?id=68747470733a2f2f7765622e77686174736170702e636f6d2f', '68747470733a2f2f7765622e77686174736170702e636f6d2f'),
(35, 'http://youtube.com/', 'https://localhost/mylink/link/?id=687474703a2f2f796f75747562652e636f6d2f', '687474703a2f2f796f75747562652e636f6d2f'),
(36, 'https://www.samehadaku.tv/', 'https://localhost/mylink/link/?id=68747470733a2f2f7777772e73616d65686164616b752e74762f', '68747470733a2f2f7777772e73616d65686164616b752e74762f'),
(37, 'https://www.oploverz.in/', 'https://localhost/mylink/link/?id=68747470733a2f2f7777772e6f706c6f7665727a2e696e2f', '68747470733a2f2f7777772e6f706c6f7665727a2e696e2f'),
(38, 'https://myanimelist.net/', 'https://localhost/mylink/link/?id=68747470733a2f2f6d79616e696d656c6973742e6e65742f', '68747470733a2f2f6d79616e696d656c6973742e6e65742f'),
(39, 'https://simak.unsil.ac.id/', 'https://localhost/mylink/link/?id=68747470733a2f2f73696d616b2e756e73696c2e61632e69642f', '68747470733a2f2f73696d616b2e756e73696c2e61632e69642f'),
(43, 'https://drive.google.com/file/d/1WrIMZbJJXHvWfvTisHwiDzTEUjSiDOv3/view', 'https://localhost/mylink/link/?id=68747470733a2f2f64726976652e676f6f676c652e636f6d2f66696c652f642f315772494d5a624a4a584876576676546973487769447a5445556a5369444f76332f76696577', '68747470733a2f2f64726976652e676f6f676c652e636f6d2f66696c652f642f315772494d5a624a4a584876576676546973487769447a5445556a5369444f76332f76696577');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'delp', '4534');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `redirectlink`
--
ALTER TABLE `redirectlink`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `short` (`publish`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `redirectlink`
--
ALTER TABLE `redirectlink`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
