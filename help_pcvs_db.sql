-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Des 2021 pada 09.25
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `help_pcvs_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `batch`
--

CREATE TABLE `batch` (
  `batchNo` int(11) NOT NULL,
  `vaccineID` int(11) NOT NULL,
  `centreName` varchar(50) NOT NULL,
  `expiryDate` date NOT NULL,
  `quantityAvailable` int(11) NOT NULL,
  `quantityAdministered` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `batch`
--

INSERT INTO `batch` (`batchNo`, `vaccineID`, `centreName`, `expiryDate`, `quantityAvailable`, `quantityAdministered`) VALUES
(1, 2, 'Bali Med', '2021-12-03', 50, 0),
(12, 2, 'Bali Med', '2021-12-03', 20, 0),
(100, 1, 'Bali Med', '2021-12-27', 10, 0),
(1001, 1, 'Bali Med', '2022-12-03', 10, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `healthcarecentre`
--

CREATE TABLE `healthcarecentre` (
  `id` int(11) NOT NULL,
  `centreName` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `staffID` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `ICPassport` varchar(30) DEFAULT NULL,
  `centreName` varchar(30) DEFAULT NULL,
  `level` enum('administrator','patient') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`staffID`, `username`, `password`, `fullname`, `email`, `ICPassport`, `centreName`, `level`) VALUES
(3, 'admin', 'admin', 'admin', 'admin@gmail.com', NULL, 'Bali Med', 'administrator'),
(4, 'patient', 'patient', 'patient', 'patient@gmail.com', 'A123', NULL, 'patient'),
(5, 'dede', 'dede', 'dede', 'dewaayu16091999@gmail.com', NULL, '', 'administrator'),
(6, 'lala', 'lala', 'lala', 'dewaayu16091999@gmail.com', NULL, 'Bali Med', 'administrator'),
(7, 'indah', 'patient', 'indahni', 'dewaayu16091999@gmail.com', '12345', NULL, 'patient'),
(8, 'lana', 'lana', 'lana', 'dewaayu16091999@gmail.com', NULL, 'Bali Med', 'administrator');

-- --------------------------------------------------------

--
-- Struktur dari tabel `vaccination`
--

CREATE TABLE `vaccination` (
  `vaccinationID` int(11) NOT NULL,
  `batchNo` int(11) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `appointmentDate` date NOT NULL,
  `status` varchar(30) NOT NULL,
  `remaks` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `vaccine`
--

CREATE TABLE `vaccine` (
  `vaccineID` int(11) NOT NULL,
  `manufacturer` varchar(50) NOT NULL,
  `vaccineName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `vaccine`
--

INSERT INTO `vaccine` (`vaccineID`, `manufacturer`, `vaccineName`) VALUES
(1, 'sinovac biotech Ltd', 'sinovac Vaccine'),
(2, 'Oxford University, vaccitech', 'AstraZenaca Vaccine'),
(3, 'sinopharm pharmaceutical Group', 'Sinopharm Vaccine'),
(4, 'Moderna TX., Inc USA', 'Moderna Vaccine');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `batch`
--
ALTER TABLE `batch`
  ADD PRIMARY KEY (`batchNo`);

--
-- Indeks untuk tabel `healthcarecentre`
--
ALTER TABLE `healthcarecentre`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`staffID`);

--
-- Indeks untuk tabel `vaccination`
--
ALTER TABLE `vaccination`
  ADD PRIMARY KEY (`vaccinationID`);

--
-- Indeks untuk tabel `vaccine`
--
ALTER TABLE `vaccine`
  ADD PRIMARY KEY (`vaccineID`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `batch`
--
ALTER TABLE `batch`
  MODIFY `batchNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1002;

--
-- AUTO_INCREMENT untuk tabel `healthcarecentre`
--
ALTER TABLE `healthcarecentre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `staffID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `vaccination`
--
ALTER TABLE `vaccination`
  MODIFY `vaccinationID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `vaccine`
--
ALTER TABLE `vaccine`
  MODIFY `vaccineID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
