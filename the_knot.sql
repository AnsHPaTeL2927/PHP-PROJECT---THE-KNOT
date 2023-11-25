-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2023 at 03:24 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `the_knot`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `event_id` varchar(100) NOT NULL,
  `transaction_id` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `event` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `food` varchar(100) NOT NULL,
  `entertainment` varchar(100) NOT NULL,
  `photography` varchar(100) NOT NULL,
  `theme` varchar(100) NOT NULL,
  `sub_total` varchar(100) NOT NULL,
  `total` varchar(100) NOT NULL,
  `grand_total` varchar(100) NOT NULL,
  `DT` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `decoration`
--

CREATE TABLE `decoration` (
  `id` int(11) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `event_type` varchar(100) NOT NULL,
  `_packages_name` varchar(100) NOT NULL,
  `_packages_price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `decoration`
--

INSERT INTO `decoration` (`id`, `product_id`, `event_type`, `_packages_name`, `_packages_price`) VALUES
(1, 'PIDD01', 'engagement', 'Floral', '25000'),
(2, 'PIDD02', 'engagement', 'Fairy Tale', '35000'),
(3, 'PIDD03', 'engagement', 'Rustic', '30000'),
(4, 'PIDD04', 'garba', 'Bollywood', '30000'),
(5, 'PIDD05', 'garba', 'Indian', '25000'),
(6, 'PIDD06', 'garba', 'Dancing For decades', '30000'),
(7, 'PIDD07', 'wedding', 'Bohemian', '30000'),
(8, 'PIDD08', 'wedding', 'Garden', '35000'),
(9, 'PIDD09', 'wedding', 'Modern', '40000'),
(10, 'PIDD010', 'wedding', 'Traditional', '25000'),
(11, 'PIDD011', 'wedding', 'Tropical', '30000'),
(12, 'PIDD012', 'wedding', 'Royal', '40000'),
(13, 'PIDD013', 'reception', 'Classy', '30000'),
(14, 'PIDD014', 'reception', 'Filmy', '35000'),
(15, 'PIDD015', 'reception', 'Nawabi', '40000');

-- --------------------------------------------------------

--
-- Table structure for table `entertainment`
--

CREATE TABLE `entertainment` (
  `id` int(11) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `event_type` varchar(100) NOT NULL,
  `_packages_name` varchar(100) NOT NULL,
  `_packages_price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `entertainment`
--

INSERT INTO `entertainment` (`id`, `product_id`, `event_type`, `_packages_name`, `_packages_price`) VALUES
(1, 'PIDE01', 'all_events', 'Entertainment_1', '10000'),
(2, 'PID02', 'all_events', 'Entertainment_2', '25000'),
(3, 'PIDE03', 'all_events', 'Entertainment_3', '40000'),
(4, 'PIDE04', 'all_events', 'Entertainment_4', '50000');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(100) NOT NULL,
  `event_id` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `_bride_fname` varchar(200) NOT NULL,
  `_bride_mname` varchar(200) NOT NULL,
  `_bride_lname` varchar(200) NOT NULL,
  `_bride_email` varchar(200) NOT NULL,
  `_bride_phone` int(100) NOT NULL,
  `_groom_fname` varchar(200) NOT NULL,
  `_groom_mname` varchar(200) NOT NULL,
  `_groom_lname` varchar(200) NOT NULL,
  `_groom_email` varchar(200) NOT NULL,
  `_groom_phone` int(100) NOT NULL,
  `_event` varchar(100) NOT NULL,
  `_event_date` date NOT NULL,
  `_event_start_time` varchar(200) NOT NULL,
  `_event_finish_time` varchar(200) NOT NULL,
  `_event_guest` int(200) NOT NULL,
  `_event_food` varchar(200) NOT NULL,
  `_event_entertainment` varchar(200) NOT NULL,
  `_event_photography` varchar(200) NOT NULL,
  `_event_theme` varchar(200) NOT NULL,
  `_event_layout` varchar(200) NOT NULL,
  `DT` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(11) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `event_type` varchar(100) NOT NULL,
  `_packages_name` varchar(100) NOT NULL,
  `_packages_price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `product_id`, `event_type`, `_packages_name`, `_packages_price`) VALUES
(1, 'PIDF01', 'allevent', 'Food_package_1', '300'),
(2, 'PIDF02', 'allevent', 'Food_package_2', '500'),
(3, 'PIDF03', 'allevent', 'Food_package_3', '800'),
(4, 'PIDF04', 'allevent', 'Food_package_4', '1000'),
(5, 'PIDF05', 'allevent', 'Food_package_5', '1200'),
(6, 'PIDF06', 'allevent', 'Food_package_6', '2000');

-- --------------------------------------------------------

--
-- Table structure for table `inqury`
--

CREATE TABLE `inqury` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(150) NOT NULL,
  `message` text NOT NULL,
  `DT` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inqury`
--

INSERT INTO `inqury` (`id`, `username`, `name`, `email`, `subject`, `message`, `DT`) VALUES
(1, 'ansh29', 'jeet', 'patelansh2918@gmail.com', 'kdhkflkfjhfljk', 'sgsggeg', '2023-06-10 10:35:32'),
(2, '', 'ansh', 'patelansh2918@gmail.com', 'kdhkflkfjhfljk', 'gwgwe', '2023-06-24 18:08:05');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `user_id` varchar(128) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `role` int(11) NOT NULL,
  `DT` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `user_id`, `name`, `username`, `password`, `contact`, `role`, `DT`) VALUES
(1, 'LID014', 'admin', 'admin', '$2y$10$S0PikAVfS8u3AtfgJWzsRu9BfZdgdVMIpM1uaZ/tvmpiErBHD.McC', '8980389544', 1, '2023-06-25 13:20:02');

-- --------------------------------------------------------

--
-- Table structure for table `payment_details`
--

CREATE TABLE `payment_details` (
  `id` int(11) NOT NULL,
  `event_id` varchar(100) NOT NULL,
  `transaction_id` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `cardname` varchar(100) NOT NULL,
  `cardnumber` varchar(100) NOT NULL,
  `expmonth` varchar(100) NOT NULL,
  `expyear` varchar(100) NOT NULL,
  `cvv` varchar(255) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photgraphy`
--

CREATE TABLE `photgraphy` (
  `id` int(11) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `event_type` varchar(100) NOT NULL,
  `_packages_name` varchar(100) NOT NULL,
  `_packages_price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `photgraphy`
--

INSERT INTO `photgraphy` (`id`, `product_id`, `event_type`, `_packages_name`, `_packages_price`) VALUES
(1, 'PIDP01', 'allevent', 'Photography_1', '30000'),
(2, 'PIDP02', 'allevent', 'Photography_2', '35000'),
(3, 'PIDP03', 'allevent', 'Photography_3', '40000'),
(4, 'PIDP04', 'allevent', 'Photography_4', '50000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `transaction_id` (`transaction_id`),
  ADD KEY `event_id` (`event_id`);

--
-- Indexes for table `decoration`
--
ALTER TABLE `decoration`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_id` (`product_id`);

--
-- Indexes for table `entertainment`
--
ALTER TABLE `entertainment`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_id` (`product_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `event_id` (`event_id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_id` (`product_id`);

--
-- Indexes for table `inqury`
--
ALTER TABLE `inqury`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `login_id` (`user_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `payment_details`
--
ALTER TABLE `payment_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `event_id` (`event_id`),
  ADD UNIQUE KEY `transaction_id` (`transaction_id`);

--
-- Indexes for table `photgraphy`
--
ALTER TABLE `photgraphy`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_id` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `decoration`
--
ALTER TABLE `decoration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `entertainment`
--
ALTER TABLE `entertainment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `inqury`
--
ALTER TABLE `inqury`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payment_details`
--
ALTER TABLE `payment_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photgraphy`
--
ALTER TABLE `photgraphy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
