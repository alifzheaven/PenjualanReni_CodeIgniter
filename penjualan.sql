-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2018 at 09:42 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penjualan`
--

-- --------------------------------------------------------

--
-- Table structure for table `wg_address`
--

CREATE TABLE `wg_address` (
  `address_id` int(10) NOT NULL,
  `order_id` int(10) NOT NULL,
  `address1` varchar(100) NOT NULL,
  `address2` varchar(100) NOT NULL,
  `city` varchar(20) NOT NULL,
  `county` varchar(20) NOT NULL,
  `post_code` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wg_admin`
--

CREATE TABLE `wg_admin` (
  `admin_id` int(4) NOT NULL,
  `username` varchar(15) NOT NULL DEFAULT '',
  `password` varchar(15) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wg_admin`
--

INSERT INTO `wg_admin` (`admin_id`, `username`, `password`) VALUES
(4, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `wg_cart`
--

CREATE TABLE `wg_cart` (
  `cart_id` int(10) NOT NULL,
  `cart_session` varchar(100) NOT NULL DEFAULT '',
  `item_id` int(10) NOT NULL DEFAULT '0',
  `item_price` float NOT NULL DEFAULT '0',
  `item_name` varchar(100) NOT NULL DEFAULT '',
  `item_quantity` int(2) NOT NULL DEFAULT '1',
  `item_total_price` float NOT NULL DEFAULT '0',
  `item_image` varchar(100) NOT NULL,
  `cart_status` varchar(10) NOT NULL,
  `order_id` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wg_categories`
--

CREATE TABLE `wg_categories` (
  `cat_id` int(10) UNSIGNED NOT NULL,
  `cat_name` varchar(30) NOT NULL DEFAULT '',
  `status` varchar(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wg_categories`
--

INSERT INTO `wg_categories` (`cat_id`, `cat_name`, `status`) VALUES
(55, 'Rumah Idaman', '1'),
(56, 'Hotel', '1'),
(57, 'Villa', '1'),
(58, 'Kostan', '1'),
(59, 'Rumah Susun', '1');

-- --------------------------------------------------------

--
-- Table structure for table `wg_cities`
--

CREATE TABLE `wg_cities` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(255) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wg_items`
--

CREATE TABLE `wg_items` (
  `cat_id` int(10) NOT NULL DEFAULT '0',
  `item_id` bigint(20) NOT NULL,
  `item_name` varchar(250) NOT NULL DEFAULT '',
  `item_price` float NOT NULL DEFAULT '0',
  `item_desc` text NOT NULL,
  `item_status` tinyint(1) NOT NULL DEFAULT '0',
  `thumbnail` varchar(100) NOT NULL DEFAULT '',
  `big_image` varchar(100) NOT NULL DEFAULT '',
  `medium_image` varchar(100) NOT NULL,
  `item_stock` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wg_items`
--

INSERT INTO `wg_items` (`cat_id`, `item_id`, `item_name`, `item_price`, `item_desc`, `item_status`, `thumbnail`, `big_image`, `medium_image`, `item_stock`) VALUES
(55, 1, 'permata indah', 13000000, '2 lantai, 7 kamar tidur, 3 kamar mandi', 0, 'images/uploads/permata_indah_1_small..jpg', 'images/uploads/permata_indah_1..jpg', 'images/uploads/permata_indah_1_med..jpg', 5),
(57, 2, 'permata indah', 5000000, '10 kamar tidur, 10 kamar mandi', 0, 'images/uploads/permata_indah_2_small.jpeg', 'images/uploads/permata_indah_2.jpeg', 'images/uploads/permata_indah_2_med.jpeg', 1),
(58, 3, 'dua putri', 1000000, '1 kamar tidur, 1 kamar mandi, dapur', 0, 'images/uploads/dua_putri_3_small.jpeg', 'images/uploads/dua_putri_3.jpeg', 'images/uploads/dua_putri_3_med.jpeg', 10),
(56, 4, 'lotus', 2000000, '1 kamar, 1 kamar mandi, AC', 0, 'images/uploads/lotus_4_small.jpeg', 'images/uploads/lotus_4.jpeg', 'images/uploads/lotus_4_med.jpeg', 6),
(59, 5, 'diamond', 5000000, '1 kamar tidur, 1 kamar mandi', 0, 'images/uploads/diamond_5_small.jpeg', 'images/uploads/diamond_5.jpeg', 'images/uploads/diamond_5_med.jpeg', 20);

-- --------------------------------------------------------

--
-- Table structure for table `wg_orders`
--

CREATE TABLE `wg_orders` (
  `order_id` int(10) NOT NULL,
  `cart_session` varchar(100) NOT NULL,
  `user_id` varchar(20) NOT NULL DEFAULT '0',
  `sub_total` varchar(10) NOT NULL,
  `vat` varchar(10) NOT NULL,
  `total_price` double NOT NULL DEFAULT '0',
  `order_date` varchar(50) NOT NULL DEFAULT '',
  `shipment_date` varchar(50) NOT NULL DEFAULT '',
  `order_status` varchar(15) NOT NULL DEFAULT 'New',
  `ipaddress` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wg_order_messages`
--

CREATE TABLE `wg_order_messages` (
  `id` int(10) NOT NULL,
  `order_id` int(10) NOT NULL,
  `message` text NOT NULL,
  `sender` varchar(10) NOT NULL,
  `sentdate` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wg_testimonials`
--

CREATE TABLE `wg_testimonials` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `totalorders` varchar(10) NOT NULL,
  `ratings` varchar(1) NOT NULL,
  `testimonial` text NOT NULL,
  `date` varchar(30) NOT NULL,
  `approved` varchar(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `wg_users`
--

CREATE TABLE `wg_users` (
  `user_id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL DEFAULT '',
  `user_pass` varchar(10) NOT NULL DEFAULT '',
  `email` varchar(100) NOT NULL DEFAULT '',
  `date_joined` varchar(50) NOT NULL DEFAULT '',
  `company_name` char(20) NOT NULL DEFAULT '1',
  `account_type` varchar(20) NOT NULL DEFAULT 'None'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wg_address`
--
ALTER TABLE `wg_address`
  ADD PRIMARY KEY (`address_id`);

--
-- Indexes for table `wg_admin`
--
ALTER TABLE `wg_admin`
  ADD UNIQUE KEY `admin_id` (`admin_id`);

--
-- Indexes for table `wg_cart`
--
ALTER TABLE `wg_cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `wg_categories`
--
ALTER TABLE `wg_categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `wg_cities`
--
ALTER TABLE `wg_cities`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `wg_items`
--
ALTER TABLE `wg_items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `wg_orders`
--
ALTER TABLE `wg_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `wg_order_messages`
--
ALTER TABLE `wg_order_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wg_testimonials`
--
ALTER TABLE `wg_testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wg_users`
--
ALTER TABLE `wg_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wg_address`
--
ALTER TABLE `wg_address`
  MODIFY `address_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wg_admin`
--
ALTER TABLE `wg_admin`
  MODIFY `admin_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `wg_cart`
--
ALTER TABLE `wg_cart`
  MODIFY `cart_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;
--
-- AUTO_INCREMENT for table `wg_categories`
--
ALTER TABLE `wg_categories`
  MODIFY `cat_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `wg_cities`
--
ALTER TABLE `wg_cities`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=357;
--
-- AUTO_INCREMENT for table `wg_items`
--
ALTER TABLE `wg_items`
  MODIFY `item_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `wg_orders`
--
ALTER TABLE `wg_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wg_order_messages`
--
ALTER TABLE `wg_order_messages`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1709;
--
-- AUTO_INCREMENT for table `wg_testimonials`
--
ALTER TABLE `wg_testimonials`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `wg_users`
--
ALTER TABLE `wg_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
