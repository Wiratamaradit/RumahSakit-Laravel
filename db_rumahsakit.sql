-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 13 Des 2022 pada 12.43
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rumahsakit`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jeniskamar`
--

CREATE TABLE `jeniskamar` (
  `id_jenisk` varchar(10) NOT NULL,
  `kodekelas` int(11) NOT NULL,
  `kelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jeniskamar`
--

INSERT INTO `jeniskamar` (`id_jenisk`, `kodekelas`, `kelas`) VALUES
('1001', 1, 'VVIP'),
('2002', 2, 'VIP'),
('3003', 3, 'Kelas 1'),
('4004', 4, 'Kelas 2'),
('5005', 5, 'Umum');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamar`
--

CREATE TABLE `kamar` (
  `nokamar` int(11) NOT NULL,
  `namakamar` varchar(50) NOT NULL,
  `id_jenisk` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kamar`
--

INSERT INTO `kamar` (`nokamar`, `namakamar`, `id_jenisk`) VALUES
(100, 'Dahlia', '5005'),
(200, 'Teratai', '4004'),
(300, 'Mawar', '3003'),
(400, 'Edelweis', '2002'),
(500, 'Anggrek', '1001');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `nopasien` int(11) NOT NULL,
  `namapasien` varchar(50) NOT NULL,
  `umur` int(11) NOT NULL,
  `nokamar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`nopasien`, `namapasien`, `umur`, `nokamar`) VALUES
(2222, 'Feri Ship', 25, 400),
(3333, 'Viko Tropika', 20, 300),
(4444, 'Dinda Ndaru', 34, 200),
(5555, 'Puji Lahdia', 67, 100),
(6666, 'Sapi Dharman', 41, 200),
(7777, 'SUPRIHATIN', 12, 500);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Raditya', 'raditya123', '311722ce06241bb1ed80329722b1729f'),
(2, 'Dosen', 'dosen', 'd5bbfb47ac3160c31fa8c247827115aa'),
(3, 'Mahasiswa', 'mahasiswa', 'b398b8a18ef4f69811a32cf169946bac'),
(4, 'Admin', 'admin', '0192023a7bbd73250516f069df18b500');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jeniskamar`
--
ALTER TABLE `jeniskamar`
  ADD PRIMARY KEY (`id_jenisk`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`nokamar`),
  ADD KEY `kodekelas` (`id_jenisk`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`nopasien`),
  ADD KEY `nokamar` (`nokamar`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kamar`
--
ALTER TABLE `kamar`
  MODIFY `nokamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=501;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `nopasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7778;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kamar`
--
ALTER TABLE `kamar`
  ADD CONSTRAINT `kamar_ibfk_2` FOREIGN KEY (`id_jenisk`) REFERENCES `jeniskamar` (`id_jenisk`);

--
-- Ketidakleluasaan untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD CONSTRAINT `pasien_ibfk_1` FOREIGN KEY (`nokamar`) REFERENCES `kamar` (`nokamar`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
