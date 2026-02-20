-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 20, 2026 at 09:06 PM
-- Server version: 8.0.40
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `music_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `product_catalog`
--

CREATE TABLE `product_catalog` (
  `sku` int UNSIGNED NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `price` decimal(10,2) UNSIGNED NOT NULL,
  `family` varchar(15) DEFAULT NULL,
  `product_type` varchar(25) DEFAULT NULL,
  `brand` varchar(25) DEFAULT NULL,
  `color` varchar(25) DEFAULT NULL,
  `product_image` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product_catalog`
--

INSERT INTO `product_catalog` (`sku`, `product_name`, `price`, `family`, `product_type`, `brand`, `color`, `product_image`) VALUES
(111223, 'John Packer JP173 MKII Baritone Horn', 1227.00, 'Brass', 'Baritone', 'John Packer', 'Silver', 'Databases_Info/Images/jp_jp173_bari.jpg'),
(161275, 'John Packer Marching Baritone JP2053', 2201.00, 'Brass', 'Baritone', 'John Packer', 'Silver', 'Databases_Info/Images/jp_marching_bari.jpg'),
(170101, 'O\'Malley Student 3/4 Baritone', 739.00, 'Brass', 'Baritone', 'O\'Malley', 'Yellow Brass', 'Databases_Info/Images/om_student_bari.jpg'),
(210387, 'O\'Malley Bb Contrabass Trombone Bb/F', 3729.00, 'Brass', 'Trombone', 'O\'Malley', 'Laquer', 'Databases_Info/Images/om_Bb_trom.jpg'),
(241366, 'John Packer Rath Trombone JP231R', 1329.00, 'Brass', 'Trombone', 'John Packer', 'Laquer', 'Databases_Info/Images/jp_jp231r_trom.jpg'),
(320167, 'The O\'Malley Bb Rotary Trumpet', 1329.00, 'Brass', 'Trumpet', 'O\'Malley', 'Yellow Gold', 'Databases_Info/Images/om_rotary_trum.jpg'),
(321122, 'John Packer JP051 Bb Trumpet', 426.00, 'Brass', 'Trumpet', 'John Packer', 'Yellow Brass', 'Databases_Info/Images/jp_jp051_trum.jpg'),
(370288, 'The O\'Malley \"Strad Buster\" Trumpet', 1895.00, 'Brass', 'Trumpet', 'O\'Malley', 'Silver', 'Databases_Info/Images/om_strad_trum.jpg'),
(393182, 'Jupiter 1600i Bb Trumpet', 3109.00, 'Brass', 'Trumpet', 'Jupiter', 'Yellow Gold', 'Databases_Info/Images/ju_1600i_trum.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_catalog`
--
ALTER TABLE `product_catalog`
  ADD PRIMARY KEY (`sku`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
