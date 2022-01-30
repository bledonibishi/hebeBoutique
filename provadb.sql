-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2022 at 03:13 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `provadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(5) NOT NULL,
  `brand_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_name`) VALUES
(1, 'BETTY BASICS'),
(2, 'COMMONERS'),
(3, 'COOP'),
(4, 'FAT+BECKER'),
(5, 'GEORGE&EDI'),
(6, 'KETZ-KE'),
(7, 'MY BOYFRIENDS BACK'),
(8, 'NYNE '),
(9, 'PRIVE REVAUX'),
(10, 'ROESIFIELD WATCHES'),
(11, 'TUESDAY'),
(12, 'BLAK'),
(13, 'KOKO BODY'),
(14, 'MARLE'),
(15, 'REMAIN'),
(16, 'KAREN WALKER FRAGRANCES'),
(17, 'SOPHIE'),
(18, 'SABEN'),
(19, 'TWENTY SEVEN NAMES'),
(20, 'STOLEN GIRLFRIENDS CLUB'),
(21, 'ASSEMBLY LABEL'),
(22, 'REJUVENATED COLLAGEN'),
(23, 'CLIQUE FITNESS'),
(24, 'RUE STIIC'),
(25, 'GOOD&CO SCARVES'),
(26, 'CARLY PAIKER JEWELLERY'),
(27, 'AGE EYEWEAR'),
(28, 'WIDDESS'),
(29, 'ONETEASPOON'),
(30, 'THING THING '),
(31, 'MILLIE ASKEW'),
(32, 'RAILS'),
(33, 'CAITLING CRISP'),
(34, 'CAMILLA&MARC'),
(35, 'BLANCA'),
(36, 'partini');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(5) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_title`) VALUES
(1, 'CO&SCARVES'),
(2, '123'),
(3, 'JEWELLERY'),
(4, 'BOSS'),
(5, 'THING THING'),
(6, 'BLEDON'),
(7, 'BLEDON'),
(8, 'BLEDON'),
(9, 'BLEDON'),
(10, 'BLEDON'),
(11, 'BLEDON'),
(12, 'BLEDON'),
(13, 'BLEDON'),
(14, 'BLEDON'),
(15, 'BLEDON'),
(16, 'BLEDON'),
(17, 'BLEDON'),
(18, 'BLEDON'),
(19, 'BLEDON');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(5) NOT NULL,
  `post_category` int(3) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_price` int(5) NOT NULL,
  `post_size` varchar(255) NOT NULL,
  `post_color` varchar(255) NOT NULL,
  `post_image_hebe` text NOT NULL,
  `post_content` text NOT NULL,
  `post_date` date NOT NULL,
  `post_stock` int(50) NOT NULL,
  `post_brand` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_category`, `post_title`, `post_price`, `post_size`, `post_color`, `post_image_hebe`, `post_content`, `post_date`, `post_stock`, `post_brand`) VALUES
(24, 17, 'BAG', 255, 'XXL', 'Brown', 'b5.jpg', 'Bledob ibishi', '2021-09-09', 12, 4),
(27, 1, 'Bledon', 12, 'm', 'black', 'b1.jpg', 'asdaskjdn', '2021-09-09', 12, 0),
(28, 21, 'bledi', 0, 'M', 'BLUE', 'b4.jpg', 'adaskj', '2021-09-09', 50, 0),
(29, 74, 'Mantel', 0, 'XL', 'Brown', 'mantel.jpg', 'Mantel lekur', '2021-09-11', 12, 0),
(30, 72, 'Qante e dores', 0, 'XL', 'Black', 'b2.jpg', 'Qante dore kualitative taze', '2021-09-12', 12, 0),
(31, 80, 'Mantel', 0, 'L', 'Blue', 'boyback3.png', 'Mantel blue', '2021-09-12', 14, 0),
(32, 1, 'QANTA', 12, 'M', 'BLACK', 'b2.jpg', 'ahdasdadsn', '2021-09-16', 12, 4),
(33, 1, 'ASFsfASF', 12, 'M', 'ASDASD', 'b2.jpg ', 'asdasdasd', '2021-09-17', 11, 1),
(35, 5, '12', 125, 'M', 'BLACK', 'bag1.jpg\r\n', 'alsdjakjsd.asdajsdakdn', '2021-09-17', 15, 6);

-- --------------------------------------------------------

--
-- Table structure for table `prova`
--

CREATE TABLE `prova` (
  `prova_id` int(4) NOT NULL,
  `prova_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prova`
--

INSERT INTO `prova` (`prova_id`, `prova_title`) VALUES
(1, 'nishi'),
(2, 'dyshi'),
(3, 'treshi'),
(4, '4shi'),
(5, '5shi'),
(6, '6shi'),
(7, '7shi'),
(8, '8shi'),
(9, '9shi'),
(10, '10shi'),
(11, '11shi'),
(12, 'treshi'),
(13, '4shi'),
(14, '5shi'),
(15, '6shi'),
(16, '7shi'),
(17, '8shi'),
(18, '9shi'),
(19, '10shi'),
(20, '11shi'),
(21, '12shi'),
(22, '13shi'),
(23, '14shi'),
(24, '15shi');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(5) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_lastName` varchar(255) NOT NULL,
  `user_username` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_confPassword` varchar(255) NOT NULL,
  `user_role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_lastName`, `user_username`, `user_email`, `user_password`, `user_confPassword`, `user_role`) VALUES
(1, 'bledon', 'ibishi', 'bledonibhsi', 'bledn@hotmail.com', '123', '123', 'subscriber'),
(2, 'bledi', 'ibishi', '', 'bledi4shi@hotmail.com', '123', '', 'Subscriber'),
(10, 'Redon', 'Qorri', 'redonqorri', 'redonii@gmail.com', '3211', '3211', 'Subscriber'),
(11, 'Redon', 'ibishi', 'redonqorri', 'bledi4shi@hotmail.com', '321123', '321123', 'Subscriber'),
(12, 'Redon', 'ibishi', 'redonqorri', 'bledi4shi@hotmail.com', '321123', '321123', 'Subscriber'),
(13, 'bledon', 'ibishi', 'bledonibishi', 'bledigerrqi@hotmail.com', '123123', '123123', 'Subscriber'),
(14, '', '', '', '', '', '', 'Subscriber'),
(15, '', '', '', '', '', '', 'Subscriber'),
(16, 'bledon', 'ibishi', 'bledonibishi', 'bledonibishi1@gmail.com', '123123', '123123', 'Subscriber'),
(17, '', '', '', '', '', '', 'Subscriber'),
(18, 'bledon', 'ibishi', 'bledonibi', 'bledigerrqi@hotmail.com', '123123', '123123', 'Subscriber'),
(19, 'askdjn', 'a;sjda', ';jakda', 'ajsjda@hotmail.com', 'dasnd', 'asodonad', 'Subscriber'),
(20, 'bledon', '', '', '', 'bledon', '', 'Subscriber');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `prova`
--
ALTER TABLE `prova`
  ADD PRIMARY KEY (`prova_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `prova`
--
ALTER TABLE `prova`
  MODIFY `prova_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
