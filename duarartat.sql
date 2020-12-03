-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2016 at 11:22 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duarartat`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `titulli` varchar(1000) NOT NULL,
  `location` varchar(100) NOT NULL,
  `pershkrimi` text NOT NULL,
  `autor` varchar(250) NOT NULL,
  `data` date NOT NULL,
  `link` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `titulli`, `location`, `pershkrimi`, `autor`, `data`, `link`) VALUES
(3, 'Cfare Jane kafshet', 'images/blog/DSCF5061.jpg', '4355', 'flori3443', '2016-08-05', 'dad4324'),
(4, 'flori', 'images/blog/am.jpg', 'flori', 'flori', '2016-08-24', 'flori'),
(5, 'apple', 'images/blog/Apple-Inc_staytuned.co_.in_.jpg', 'asdfslknfdklndfndfkvjfdnogfd', 'flori', '2016-08-14', 'foksdof');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `home_id` int(11) NOT NULL,
  `titulli` varchar(500) NOT NULL,
  `pershkrim` text NOT NULL,
  `location` varchar(250) NOT NULL,
  `numri` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`home_id`, `titulli`, `pershkrim`, `location`, `numri`) VALUES
(8, 'Punime Dore', '', 'images/home/banner.jpg', '5'),
(10, 'Ereza', '', 'images/home/banner3.jpg', '1'),
(12, 'Ushqime', '', 'images/home/banner4.jpg', '4'),
(13, 'Jemi NE', '', 'images/home/duarartat.jpg', '8');

-- --------------------------------------------------------

--
-- Table structure for table `kontakt`
--

CREATE TABLE `kontakt` (
  `kontakt_id` int(11) NOT NULL,
  `emer` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `mesazh` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontakt`
--

INSERT INTO `kontakt` (`kontakt_id`, `emer`, `email`, `mesazh`) VALUES
(11, 'flori', 'flori.kodra@outlook.com', 'csdfsdfsd'),
(15, 'Manuela', 'manuela@gmail.com', 'test'),
(16, 'flori kodra', 'flori.kodra@outlook.com', 'jam i interesuar per nr e cel');

-- --------------------------------------------------------

--
-- Table structure for table `porosi`
--

CREATE TABLE `porosi` (
  `porosi_id` int(11) NOT NULL,
  `kl_emr` varchar(250) NOT NULL,
  `kl_nr` varchar(250) NOT NULL,
  `kl_adr` varchar(1000) NOT NULL,
  `kl_sasi` varchar(250) NOT NULL,
  `data` varchar(250) NOT NULL,
  `produkt_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `produkt`
--

CREATE TABLE `produkt` (
  `produkt_id` int(11) NOT NULL,
  `emer` varchar(250) NOT NULL,
  `vendodhje` varchar(250) NOT NULL,
  `pershkrim` text NOT NULL,
  `cmim` varchar(250) NOT NULL,
  `kategori` varchar(250) NOT NULL,
  `location` varchar(250) NOT NULL,
  `data` date NOT NULL,
  `prodhuesi` varchar(250) NOT NULL,
  `gjendja` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produkt`
--

INSERT INTO `produkt` (`produkt_id`, `emer`, `vendodhje`, `pershkrim`, `cmim`, `kategori`, `location`, `data`, `prodhuesi`, `gjendja`) VALUES
(16, 'Qilim 1', 'Struge', 'Qilim', '600', 'Qilimi', 'images/produkte/1.JPG', '2016-08-14', 'Elena', 'Avaible'),
(18, '', 'erseke', '', '', '', 'images/produkte/1.JPG', '0000-00-00', '', ''),
(19, '', 'erseke', '', '', '', 'images/produkte/s1.png', '0000-00-00', '', ''),
(20, 'shall', 'erseke', 'shall Me perberje', '900', 'Kostume', 'images/produkte/s2.png', '2016-08-14', '', 'Avaible'),
(21, '', 'vithkuq', '', '', '', 'images/produkte/s3.png', '0000-00-00', '', ''),
(22, '', 'vithkuq', '', '', '', 'images/produkte/banner4.jpg', '0000-00-00', '', ''),
(23, '', 'vithkuq', '', '', '', 'images/produkte/duarartat.jpg', '0000-00-00', '', ''),
(24, '', 'vlore', '', '', '', 'images/produkte/2.jpg', '0000-00-00', '', ''),
(25, '', 'novosele', '', '', '', 'images/produkte/Apple-Inc_staytuned.co_.in_.jpg', '0000-00-00', '', ''),
(26, '', 'erseke', '', '', 'Rrugica', 'images/produkte/8PqTTRe.jpg', '0000-00-00', '', ''),
(27, '', 'erseke', '', '', 'Shporta', 'images/produkte/Sony-A7r-II.jpg', '0000-00-00', '', ''),
(28, '', 'erseke', '', '', 'Bime', 'images/produkte/sony-a7r-ii_tilt.jpg', '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `emer` varchar(250) NOT NULL,
  `mbiemer` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `role` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `emer`, `mbiemer`, `username`, `password`, `role`) VALUES
(1, 'flori', 'kodra', 'fkodra', 'admin', 'Administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`home_id`);

--
-- Indexes for table `kontakt`
--
ALTER TABLE `kontakt`
  ADD PRIMARY KEY (`kontakt_id`);

--
-- Indexes for table `porosi`
--
ALTER TABLE `porosi`
  ADD PRIMARY KEY (`porosi_id`);

--
-- Indexes for table `produkt`
--
ALTER TABLE `produkt`
  ADD PRIMARY KEY (`produkt_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `home_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `kontakt`
--
ALTER TABLE `kontakt`
  MODIFY `kontakt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `porosi`
--
ALTER TABLE `porosi`
  MODIFY `porosi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `produkt`
--
ALTER TABLE `produkt`
  MODIFY `produkt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
