-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2024 at 09:35 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `material-processing`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_factory`
--

CREATE TABLE `tbl_factory` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `timestamp` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_factory`
--

INSERT INTO `tbl_factory` (`id`, `email`, `password`, `timestamp`) VALUES
(1, 'sahasenjuti796@gmail.com', 'senjutisaha', '2024-03-17 10:24:24.425764');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_factory_tender`
--

CREATE TABLE `tbl_factory_tender` (
  `id` int(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `count` int(255) NOT NULL,
  `accepted_status` tinyint(1) NOT NULL DEFAULT 0,
  `accepted_by` int(255) NOT NULL DEFAULT -1,
  `release_date` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `acceptance_date` timestamp(6) NULL DEFAULT NULL,
  `delivered` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_factory_tender`
--

INSERT INTO `tbl_factory_tender` (`id`, `type`, `count`, `accepted_status`, `accepted_by`, `release_date`, `acceptance_date`, `delivered`) VALUES
(6, 'nails', 30, 1, 1, '2024-03-18 18:04:59.949927', '2024-03-18 19:29:31.000000', 1),
(7, 'wood', 90, 0, -1, '2024-03-18 18:04:59.950777', NULL, 0),
(8, 'metal', 12, 0, -1, '2024-03-18 18:04:59.951587', NULL, 0),
(9, 'paint', 12, 0, -1, '2024-03-18 18:04:59.952255', NULL, 0),
(10, 'clamps', 18, 0, -1, '2024-03-18 18:04:59.952998', NULL, 0),
(11, 'nails', 35, 1, 1, '2024-03-18 19:42:13.963621', '2024-03-18 19:42:45.000000', 0),
(12, 'wood', 105, 0, -1, '2024-03-18 19:42:13.964383', NULL, 0),
(13, 'metal', 14, 0, -1, '2024-03-18 19:42:13.965161', NULL, 0),
(14, 'paint', 14, 0, -1, '2024-03-18 19:42:13.966013', NULL, 0),
(15, 'clamps', 21, 0, -1, '2024-03-18 19:42:13.966750', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_material`
--

CREATE TABLE `tbl_material` (
  `id` int(255) NOT NULL,
  `product` varchar(255) NOT NULL,
  `product_id` int(255) NOT NULL,
  `wood` int(255) NOT NULL,
  `metal` int(255) NOT NULL,
  `nails` int(255) NOT NULL,
  `paint` int(255) NOT NULL,
  `clamps` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_material`
--

INSERT INTO `tbl_material` (`id`, `product`, `product_id`, `wood`, `metal`, `nails`, `paint`, `clamps`) VALUES
(1, 'chair', 1, 15, 2, 5, 2, 3),
(2, 'table', 2, 20, 5, 5, 4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `offer` int(255) NOT NULL DEFAULT 0,
  `image` varchar(255) NOT NULL,
  `short_desc` varchar(255) NOT NULL,
  `ordered` int(255) NOT NULL DEFAULT 0,
  `requirements` varchar(255) NOT NULL,
  `timestamp` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `price`, `offer`, `image`, `short_desc`, `ordered`, `requirements`, `timestamp`) VALUES
(1, 'chair', 1200, 10, 'image/chair.png', 'Wooden Chair, carefully crafted and sturdy', 0, '', '2024-03-18 19:56:06.626855'),
(2, 'table', 3500, 0, 'image/table.png', 'Wooden four-legged table, beautiful finish and sturdy', 0, '', '2024-03-18 19:56:06.628141');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `timestamp` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `email`, `password`, `username`, `timestamp`) VALUES
(1, 'user1@gmail.com', 'userone', 'user_one', '2024-03-17 10:32:20.353643'),
(2, 'sayakraha12@gmail.com', 'ilovecherry', 'sayak12', '2024-03-17 10:56:52.215228');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_orders`
--

CREATE TABLE `tbl_user_orders` (
  `id` int(255) NOT NULL,
  `ordered_by` int(255) NOT NULL,
  `table_count` int(255) NOT NULL,
  `chair_count` int(255) NOT NULL,
  `ordered_on` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `payment_status` tinyint(1) NOT NULL DEFAULT 0,
  `delivery_status` tinyint(1) NOT NULL DEFAULT 0,
  `workflow_added` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user_orders`
--

INSERT INTO `tbl_user_orders` (`id`, `ordered_by`, `table_count`, `chair_count`, `ordered_on`, `payment_status`, `delivery_status`, `workflow_added`) VALUES
(1, 2, 3, 4, '2024-03-17 16:05:32.705338', 0, 0, 0),
(2, 1, 5, 1, '2024-03-17 16:40:09.866144', 1, 0, 1),
(3, 2, 3, 4, '2024-03-18 18:35:37.747814', 0, 0, 0),
(6, 1, 3, 4, '2024-03-18 18:44:04.622282', 1, 0, 1),
(7, 1, 2, 3, '2024-03-18 18:46:55.656436', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vendors`
--

CREATE TABLE `tbl_vendors` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `sells` varchar(255) NOT NULL,
  `timestamp` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_vendors`
--

INSERT INTO `tbl_vendors` (`id`, `username`, `email`, `password`, `sells`, `timestamp`) VALUES
(1, 'tata steel', 'tatasteel@gmail.com', 'tatasteel', 'nails', '2024-03-17 11:26:10.758832'),
(2, 'abcxyz', 'abcxyz@gmail.com', 'abcxyz', 'wood', '2024-03-17 11:35:21.677039');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_workflow`
--

CREATE TABLE `tbl_workflow` (
  `id` int(255) NOT NULL,
  `chair_count` int(255) NOT NULL,
  `table_count` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_workflow`
--

INSERT INTO `tbl_workflow` (`id`, `chair_count`, `table_count`) VALUES
(1, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_factory`
--
ALTER TABLE `tbl_factory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_factory_tender`
--
ALTER TABLE `tbl_factory_tender`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_material`
--
ALTER TABLE `tbl_material`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user_orders`
--
ALTER TABLE `tbl_user_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_vendors`
--
ALTER TABLE `tbl_vendors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_workflow`
--
ALTER TABLE `tbl_workflow`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_factory`
--
ALTER TABLE `tbl_factory`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_factory_tender`
--
ALTER TABLE `tbl_factory_tender`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_material`
--
ALTER TABLE `tbl_material`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_user_orders`
--
ALTER TABLE `tbl_user_orders`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_vendors`
--
ALTER TABLE `tbl_vendors`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_workflow`
--
ALTER TABLE `tbl_workflow`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
