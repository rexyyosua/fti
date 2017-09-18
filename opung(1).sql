-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02 Mar 2017 pada 08.07
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `opung`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(10) NOT NULL,
  `judul_berita` varchar(30) NOT NULL,
  `deskripsi_berita` text NOT NULL,
  `gambar_berita` text NOT NULL,
  `tanggal_berita` date NOT NULL,
  `id_user` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `judul_berita`, `deskripsi_berita`, `gambar_berita`, `tanggal_berita`, `id_user`, `status`) VALUES
(1, 'Warriors Blow By Boston', 'The Warriors winning streak now stands at a season-best six games after they earned a 104-88 road victory over the Celtics on Friday night. Klay Thompson led all scorers with 28 points, while Kevin Durant stuffed the stat sheet with 23 points, 10 rebounds and seven assists. With the win, Golden State improves to 10-2 on the season and 2-0 on their current four-game road trip.\r\n\r\nThe last four meetings between these two teams had all been decided by five points or less, but when all was said and done, Friday’s game followed a considerably different tune. Golden State took their first lead of the game midway through the opening quarter, and as it turned out, they wouldn’t trail for the rest of the contest. After Marcus Smart evened the score at 12 just under five minutes into the game, the Warriors took their largest lead of the first half with a 9-0 run, capped by Kevin Durant’s only three-pointer of the night. That stretch included three rebounds by Zaza Pachulia, whose total of eight in the frame were the most by any Warriors player in a quarter this season. Isaiah Thomas would bring the drought to an end with his first four points of the game, which Andre Iguodala matched in immediate response.', '1.jpg', '2016-11-19', '', ''),
(2, 'Test Kamar', 'Kamar Sewa enak', 'i.jpg', '2016-11-23', '2', 'Available'),
(3, 'berita baru', 'Waww baru banget', 'back1.jpg', '2016-11-27', '2', 'Available'),
(4, 'ganteng', 'baru', 'pascal.png', '0000-00-00', '', 'Available'),
(5, 'rexy ganteng', 'hhh', 'boston1.png', '0000-00-00', '', 'Not Available'),
(6, 'cakep', '', '3.jpg', '0000-00-00', '', ''),
(7, 'baru', 'baru', '11.jpg', '2017-01-18', '', ''),
(8, 'aaa', 'aaaa', '21.jpg', '2017-01-18', '', ''),
(9, 'coba', 'coba dongg', '22.jpg', '2017-01-18', '2', ''),
(10, 'sepatu', 'bolong', 'lal.png', '2017-01-18', '5', 'Available'),
(11, 'tes', 'bagus', 'back2.jpg', '2017-01-19', '2', 'Available'),
(12, 'Kamar Baru', 'Bagus banget ', '111.jpg', '2017-01-19', '3', 'Available'),
(13, 'rumah baru', 'enak', '131.jpg', '2017-01-20', '6', 'Available'),
(14, 'kosan opung', 'Kamar kosong', '133.jpg', '2017-03-02', '2', 'Available'),
(15, 'Kostan ganteng', 'ganteng', 'i11.jpg', '2017-03-02', '8', 'Available');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamar`
--

CREATE TABLE `kamar` (
  `id` int(30) NOT NULL,
  `id_user` int(30) NOT NULL,
  `id_berita` int(30) NOT NULL,
  `kamar` varchar(30) NOT NULL,
  `deskripsi` text NOT NULL,
  `status` varchar(30) NOT NULL,
  `gambar` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kamar`
--

INSERT INTO `kamar` (`id`, `id_user`, `id_berita`, `kamar`, `deskripsi`, `status`, `gambar`, `tanggal`) VALUES
(2, 2, 2, 'kamar 202', 'baru', 'Available', '312.jpg', '2017-03-02'),
(3, 2, 14, 'kamar 201', 'kosong', 'Available', '134.jpg', '2017-03-02'),
(4, 8, 15, 'kamar 80', 'ganteng', 'Available', '135.jpg', '2017-03-02'),
(5, 8, 15, 'kamar5', 'bagus', 'Available', '313.jpg', '2017-03-02'),
(6, 8, 15, 'kamar 212', 'bagus', 'Available', '32.jpg', '2017-03-02'),
(7, 8, 15, 'kamar 9', 'bagus bgt', 'Available', '211.jpg', '2017-03-02'),
(8, 8, 15, 'kamar 54', 'parah', 'Available', '12.jpg', '2017-03-02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
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
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id`, `id_user`, `nama_user`, `komen`, `tanggal`, `berita_id`) VALUES
(9, 2, 'rexy', '', '2016-11-20', 1),
(22, 2, 'rexy', '', '2016-11-20', 1),
(23, 2, 'rexy', 'rexy ganteng', '2016-11-20', 1),
(36, 2, 'rexy', 'hjh', '2016-11-23', 2),
(37, 2, 'rexy', 'tes', '2016-11-23', 2),
(38, 1, 'admin', 'haha', '2016-11-27', 3),
(39, 1, 'admin', 'gan beli dong', '2017-01-18', 10),
(40, 2, 'rexy', 'udah abis', '2017-01-18', 10),
(41, 6, 'atuy', 'buruan', '2017-01-20', 13),
(42, 2, 'rexy', 'berapaan', '2017-01-20', 13),
(43, 2, 'rexy', 'coba\r\n', '2017-01-20', 13),
(44, 7, 'hai cantik', 'leh uga', '2017-01-20', 14),
(45, 1, 'admin', 'berapan om', '2017-02-13', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `groups` int(3) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `foto` varchar(30) NOT NULL,
  `no_tlp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `groups`, `nama`, `email`, `username`, `password`, `foto`, `no_tlp`) VALUES
(1, 1, 'admin', 'rexyyosua@gmail.com', 'admin', 'admin', '', ''),
(2, 2, 'rexy', 'rexyyosua@gmail.com', 'rexy', '1234', '72.jpg', '0808080808'),
(3, 2, 'adi', 'adi@gmail.com', 'adi', 'adi', '', ''),
(4, 2, 'amel', 'ame@gmail.com', 'amel', 'amel', '', ''),
(5, 2, 'Irda', 'f@g.com', 'Fandy', 'pangestu', '', ''),
(6, 2, 'atuy', 'atuy@gmail.com', 'atuy', 'atuy', '181.jpg', '0813131'),
(7, 2, 'hai cantik', 'cantikngets@gmail.com', 'rnabillacantik', 'cantik', '', ''),
(8, 2, 'rexy', 'reno_yesaya@yahoo.com', 'rexyganteng', '1111', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
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
  MODIFY `id_berita` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
