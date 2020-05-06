-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Bulan Mei 2020 pada 07.42
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mhswebsite`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alocation`
--

CREATE TABLE `alocation` (
  `allocateID` int(11) NOT NULL,
  `duration` int(11) NOT NULL,
  `endDate` date NOT NULL,
  `fromDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `application`
--

CREATE TABLE `application` (
  `applicationID` int(11) NOT NULL,
  `applicationDate` date NOT NULL,
  `requested_date` date NOT NULL,
  `status` varchar(10) NOT NULL,
  `applicantID` int(11) NOT NULL,
  `residenceID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `application`
--

INSERT INTO `application` (`applicationID`, `applicationDate`, `requested_date`, `status`, `applicantID`, `residenceID`) VALUES
(1, '0000-00-00', '0000-00-00', 'waitList', 3, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `residences`
--

CREATE TABLE `residences` (
  `residenceID` int(11) NOT NULL,
  `bathroomNum` int(11) NOT NULL,
  `bedroomNum` int(11) NOT NULL,
  `kitchenNum` int(11) NOT NULL,
  `monthlyRental` int(11) NOT NULL,
  `residenceAddress` varchar(30) NOT NULL,
  `size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `residences`
--

INSERT INTO `residences` (`residenceID`, `bathroomNum`, `bedroomNum`, `kitchenNum`, `monthlyRental`, `residenceAddress`, `size`) VALUES
(1, 1, 1, 1, 7, 'Jl. Pulau Bali', 2),
(2, 1, 2, 1, 100, 'Jl. Bedugul', 4),
(3, 1, 2, 1, 350, 'Jl. Indah', 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_applicant`
--

CREATE TABLE `user_applicant` (
  `applicantID` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `fullName` text NOT NULL,
  `monthlyIncome` double NOT NULL,
  `password` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_applicant`
--

INSERT INTO `user_applicant` (`applicantID`, `email`, `fullName`, `monthlyIncome`, `password`, `username`) VALUES
(1, 'min@gmail.com', 'Min Gyu', 1500, '0000', 'gyu'),
(2, 'din@gmail.com', 'Dino Lee', 1300, '1212', 'dino12'),
(3, 'jo@gmail.com', 'Joshua Hong', 1450, '3030', 'joshua'),
(4, 'boo@gmail.com', 'Boo Kwan', 1400, '6666', 'boo'),
(5, 'han@gmail.com', 'Jihan Tan', 1500, '1111', 'jihan'),
(6, 'han@gmail.com', 'Jihan Tan', 1500, '1111', 'jihan'),
(7, 'ji@gmail.com', 'Jihoon Lee', 1600, '0000', 'hoon'),
(8, 'ji@gmail.com', 'Jihoon Lee', 1600, '0000', 'hoon');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_officer`
--

CREATE TABLE `user_officer` (
  `userID` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `fullName` text NOT NULL,
  `password` varchar(30) NOT NULL,
  `staff_ID` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alocation`
--
ALTER TABLE `alocation`
  ADD PRIMARY KEY (`allocateID`);

--
-- Indeks untuk tabel `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`applicationID`);

--
-- Indeks untuk tabel `residences`
--
ALTER TABLE `residences`
  ADD PRIMARY KEY (`residenceID`);

--
-- Indeks untuk tabel `user_applicant`
--
ALTER TABLE `user_applicant`
  ADD PRIMARY KEY (`applicantID`);

--
-- Indeks untuk tabel `user_officer`
--
ALTER TABLE `user_officer`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alocation`
--
ALTER TABLE `alocation`
  MODIFY `allocateID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `application`
--
ALTER TABLE `application`
  MODIFY `applicationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `residences`
--
ALTER TABLE `residences`
  MODIFY `residenceID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user_applicant`
--
ALTER TABLE `user_applicant`
  MODIFY `applicantID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `user_officer`
--
ALTER TABLE `user_officer`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
