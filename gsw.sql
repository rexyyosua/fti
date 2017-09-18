-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2016 at 06:42 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gsw`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(10) NOT NULL,
  `judul_berita` varchar(30) NOT NULL,
  `deskripsi_berita` text NOT NULL,
  `gambar_berita` text NOT NULL,
  `tanggal_berita` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul_berita`, `deskripsi_berita`, `gambar_berita`, `tanggal_berita`) VALUES
(1, 'Warriors Blow By Boston', 'The Warriors winning streak now stands at a season-best six games after they earned a 104-88 road victory over the Celtics on Friday night. Klay Thompson led all scorers with 28 points, while Kevin Durant stuffed the stat sheet with 23 points, 10 rebounds and seven assists. With the win, Golden State improves to 10-2 on the season and 2-0 on their current four-game road trip.\r\n\r\nThe last four meetings between these two teams had all been decided by five points or less, but when all was said and done, Friday’s game followed a considerably different tune. Golden State took their first lead of the game midway through the opening quarter, and as it turned out, they wouldn’t trail for the rest of the contest. After Marcus Smart evened the score at 12 just under five minutes into the game, the Warriors took their largest lead of the first half with a 9-0 run, capped by Kevin Durant’s only three-pointer of the night. That stretch included three rebounds by Zaza Pachulia, whose total of eight in the frame were the most by any Warriors player in a quarter this season. Isaiah Thomas would bring the drought to an end with his first four points of the game, which Andre Iguodala matched in immediate response.', '1.jpg', '2016-11-19'),
(2, 'Coming This Friday', 'This Thanksgiving, the Warriors are saying thanks by giving you four days of deals, starting at 10 a.m. on Black Friday (November 25). Enjoy no ticket fees* for all games, and get special offers and free shipping on all orders over $75 at the', '4DaysofGivingPre-Promotional_2016_1280x720.jpg', '2016-11-23'),
(3, 'berita baru', 'Waww baru banget', 'Untitled.png', '2016-11-27');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(50) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` text NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id`, `judul`, `deskripsi`, `gambar`, `tgl`) VALUES
(2, 'Boston Celtics', 'AWAY\r\nFRI NOV 18\r\n5:00 PM', 'boston.png', '0000-00-00'),
(3, 'milwaukee bucks', 'AWAY\r\nSAT NOV 19\r\n5:30 PM', 'mil.png', '0000-00-00'),
(4, 'Indiana Pacers', 'AWAY\r\nMON NOV 21\r\n4:00 PM', 'Indiana_Pacers.svg.png', '0000-00-00'),
(5, 'Los Angeles Lakers', 'HOME\r\nWED NOV 23\r\n7:30 PM', 'lal.png', '0000-00-00'),
(6, 'Los Angeles Lakers', 'AWAY\r\nFRI NOV 25\r\n7:30 PM', 'lal.png', '0000-00-00'),
(7, 'Minnesota Timberwolves', 'HOME\r\nSAT NOV 26\r\n7:30 PM', 'Minnesota_Timberwolves.svg.png', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `nama_user` varchar(30) NOT NULL,
  `komen` text NOT NULL,
  `tanggal` date NOT NULL,
  `berita_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id`, `id_user`, `nama_user`, `komen`, `tanggal`, `berita_id`) VALUES
(9, 2, 'rexy', '', '2016-11-20', 1),
(22, 2, 'rexy', '', '2016-11-20', 1),
(23, 2, 'rexy', 'rexy ganteng', '2016-11-20', 1),
(36, 2, 'rexy', 'hjh', '2016-11-23', 2),
(37, 2, 'rexy', 'tes', '2016-11-23', 2),
(38, 1, 'admin', 'haha', '2016-11-27', 3);

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(10) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` text NOT NULL,
  `ppg` int(3) NOT NULL,
  `rpg` int(3) NOT NULL,
  `apg` int(3) NOT NULL,
  `spg` int(3) NOT NULL,
  `bpg` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `judul`, `deskripsi`, `gambar`, `ppg`, `rpg`, `apg`, `spg`, `bpg`) VALUES
(1, 'Stephent Curry', 'PG', 'sc.jpg', 99, 99, 99, 99, 0),
(2, 'Kevin Durant', 'SG', 'kd.png', 0, 0, 0, 0, 0),
(3, 'zaza', 'C', 'pachulia.jpg', 0, 0, 0, 0, 0),
(4, 'klay ', 'sg', 'Klay-Thompson-11.jpg', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `groups` int(3) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `groups`, `nama`, `email`, `username`, `password`) VALUES
(1, 1, 'admin', 'rexyyosua@gmail.com', 'admin', 'admin'),
(2, 2, 'rexy', 'rexyyosua@gmail.com', 'rexy', '1234'),
(3, 2, 'adi', 'adi@gmail.com', 'adi', 'adi'),
(4, 2, 'amel', 'ame@gmail.com', 'amel', 'amel');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
