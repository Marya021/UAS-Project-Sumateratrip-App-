-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2019 at 06:39 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sumateratrip`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id_book` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `booking` varchar(255) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `price` int(20) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id_book`, `id_user`, `booking`, `detail`, `price`, `status`) VALUES
(1, 4, 'Hotels', '1 Hari', 450000, 'Waiting');

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `id_hotels` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `price` int(20) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id_hotels`, `name`, `address`, `rating`, `file`, `price`, `ket`) VALUES
(1, 'Hotel Indah', 'Jl. Riau', 4, '8202715_8b1975c2-7d32-47f6-9051-4a676fedfa71_1500_1500.jpg', 550000, 'Lengkap'),
(2, 'Hotel Parrona', 'Jl. Tugu', 3, '007872cd641b7aa52b0ee13316c299b682e099e3_0.jpg', 450000, 'Siap');

-- --------------------------------------------------------

--
-- Table structure for table `souvenir`
--

CREATE TABLE `souvenir` (
  `id_souv` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `info` text NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `souvenir`
--

INSERT INTO `souvenir` (`id_souv`, `name`, `location`, `address`, `info`, `file`) VALUES
(1, 'BTK Souv', 'Medan', 'Jl. Sisingamangaraja', '1', '8202715_8b1975c2-7d32-47f6-9051-4a676fedfa71_1500_1500.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tour`
--

CREATE TABLE `tour` (
  `id_tour` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(3) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `price` int(20) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tour`
--

INSERT INTO `tour` (`id_tour`, `name`, `age`, `phone`, `destination`, `address`, `price`, `file`) VALUES
(1, 'Andreas', 24, '0811111111', 'Jambi', 'Jl. Senopatix', 700000, '3.jpg'),
(2, 'Budi', 26, '08222222', 'Rumbai', 'Rowosari', 500000, '2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `transports`
--

CREATE TABLE `transports` (
  `id_trans` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `from` varchar(255) NOT NULL,
  `to` varchar(255) NOT NULL,
  `passengers` varchar(255) NOT NULL,
  `leave` varchar(255) NOT NULL,
  `arrived` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `price` int(20) NOT NULL,
  `ket` text NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transports`
--

INSERT INTO `transports` (`id_trans`, `name`, `category`, `from`, `to`, `passengers`, `leave`, `arrived`, `class`, `price`, `ket`, `file`) VALUES
(1, 'Wings', 'Flights', 'Pekanbaru', 'Medan', '1', '07:00:00', '08:00:00', 'Economy', 1500000, '', ''),
(2, 'Argo Wilis', 'Trains', 'Medan', 'Padang', '1', '2019-08-01', '2019-08-01', 'Economy', 150000, '', ''),
(3, 'Lion Air', 'Flights', 'Padang', 'Medan', '1', '01:00:00', '01:00:00', 'Economy', 500000, '', ''),
(5, 'Dagelan', 'Trains', 'Padang', 'Medan', '2', '00:20:19', '00:20:19', '', 60000, '', ''),
(6, 'Kocak', 'Trains', 'Medan', 'Padang', '2', '00:20:19', '00:20:19', '', 100000, '', ''),
(7, 'Bintang Utara', 'Bus', 'Medan', 'Pekanbaru', '3', '2019-08-09', '2019-08-10', '', 160000, '', ''),
(8, 'Toyota', 'Car', 'Padang', '', '', '2019-08-10', '2019-08-10', '', 500000, 'Paten', '1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` text NOT NULL,
  `level` int(2) NOT NULL COMMENT '1:admin, 2:customer'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `full_name`, `email`, `password`, `phone`, `address`, `level`) VALUES
(4, 'marya', 'marya@gmail.com', '123', '26161', 'cdc', 2),
(5, 'admin', 'admin@gmail.com', 'admin', '0822', 'Jl. Rowosari', 1);

-- --------------------------------------------------------

--
-- Table structure for table `vacation`
--

CREATE TABLE `vacation` (
  `id_vac` int(11) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `facilities` text NOT NULL,
  `price` int(20) NOT NULL,
  `credit` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vacation`
--

INSERT INTO `vacation` (`id_vac`, `destination`, `file`, `facilities`, `price`, `credit`) VALUES
(1, 'Danau Toba', '3.jpg', '1 Tiket\r\n2 Malam', 1500000, 150000),
(2, 'asda', '8202715_8b1975c2-7d32-47f6-9051-4a676fedfa71_1500_1500.jpg', 'sadsad', 500000, 100000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id_book`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id_hotels`);

--
-- Indexes for table `souvenir`
--
ALTER TABLE `souvenir`
  ADD PRIMARY KEY (`id_souv`);

--
-- Indexes for table `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`id_tour`);

--
-- Indexes for table `transports`
--
ALTER TABLE `transports`
  ADD PRIMARY KEY (`id_trans`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `vacation`
--
ALTER TABLE `vacation`
  ADD PRIMARY KEY (`id_vac`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id_book` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id_hotels` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `souvenir`
--
ALTER TABLE `souvenir`
  MODIFY `id_souv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tour`
--
ALTER TABLE `tour`
  MODIFY `id_tour` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transports`
--
ALTER TABLE `transports`
  MODIFY `id_trans` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `vacation`
--
ALTER TABLE `vacation`
  MODIFY `id_vac` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
