-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2018 at 03:20 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookingroom`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_bookingdetail`
--

CREATE TABLE `tb_bookingdetail` (
  `ticket_id` int(11) NOT NULL,
  `id_1` int(11) NOT NULL,
  `id_2` int(11) NOT NULL,
  `id_3` int(11) NOT NULL,
  `id_4` int(11) NOT NULL,
  `id_5` int(11) NOT NULL,
  `faculty` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `date_booking` date NOT NULL,
  `book_room` int(11) NOT NULL,
  `book_timeslot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_bookingdetail`
--

INSERT INTO `tb_bookingdetail` (`ticket_id`, `id_1`, `id_2`, `id_3`, `id_4`, `id_5`, `faculty`, `date_booking`, `book_room`, `book_timeslot`) VALUES
(1, 123456, 123457, 123458, 123459, 123469, 'ICT', '2018-10-02', 1, 4),
(875333603, 42465, 4645646, 13123134, 6461, 3123123, 'trst', '2018-10-02', 1, 6),
(1031742664, 4546, 46546546, 456554678, 97979, 456456, 'ra', '2018-10-02', 4, 7),
(1479293028, 124354, 456464, 46546, 4646, 546456, 'eg', '2018-10-02', 3, 2),
(1779131874, 445, 1213, 4546, 1231234, 45654, 'ict', '2018-10-02', 2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tb_room`
--

CREATE TABLE `tb_room` (
  `room_id` int(11) NOT NULL,
  `roomname` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_room`
--

INSERT INTO `tb_room` (`room_id`, `roomname`, `status`) VALUES
(1, '2A', 0),
(2, '2B', 0),
(3, '2C', 0),
(4, '2D', 0),
(5, '2E', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_room_time`
--

CREATE TABLE `tb_room_time` (
  `rt_id` int(11) NOT NULL,
  `rname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `start` time NOT NULL,
  `end` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_room_time`
--

INSERT INTO `tb_room_time` (`rt_id`, `rname`, `start`, `end`) VALUES
(1, '2A', '08:00:00', '09:00:00'),
(2, '2A', '09:00:00', '10:00:00'),
(3, '2A', '10:00:00', '11:00:00'),
(4, '2A', '11:00:00', '12:00:00'),
(5, '2A', '12:00:00', '13:00:00'),
(6, '2A', '13:00:00', '14:00:00'),
(7, '2A', '14:00:00', '15:00:00'),
(8, '2A', '15:00:00', '16:00:00'),
(9, '2A', '16:00:00', '17:00:00'),
(10, '2B', '08:00:00', '09:00:00'),
(11, '2B', '09:00:00', '10:00:00'),
(12, '2B', '10:00:00', '11:00:00'),
(13, '2B', '11:00:00', '12:00:00'),
(14, '2B', '12:00:00', '13:00:00'),
(15, '2B', '13:00:00', '14:00:00'),
(16, '2B', '14:00:00', '15:00:00'),
(17, '2B', '15:00:00', '16:00:00'),
(18, '2B', '16:00:00', '17:00:00'),
(19, '2C', '08:00:00', '09:00:00'),
(20, '2C', '09:00:00', '10:00:00'),
(21, '2C', '10:00:00', '11:00:00'),
(22, '2C', '11:00:00', '12:00:00'),
(23, '2C', '12:00:00', '13:00:00'),
(24, '2C', '13:00:00', '14:00:00'),
(25, '2C', '14:00:00', '15:00:00'),
(26, '2C', '15:00:00', '16:00:00'),
(27, '2C', '16:00:00', '17:00:00'),
(28, '2D', '08:00:00', '09:00:00'),
(29, '2D', '09:00:00', '10:00:00'),
(30, '2D', '10:00:00', '11:00:00'),
(31, '2D', '11:00:00', '12:00:00'),
(32, '2D', '12:00:00', '13:00:00'),
(33, '2D', '13:00:00', '14:00:00'),
(34, '2D', '14:00:00', '15:00:00'),
(35, '2D', '15:00:00', '16:00:00'),
(36, '2D', '16:00:00', '17:00:00'),
(37, '2E', '08:00:00', '09:00:00'),
(38, '2E', '09:00:00', '10:00:00'),
(39, '2E', '10:00:00', '11:00:00'),
(40, '2E', '11:00:00', '12:00:00'),
(41, '2E', '12:00:00', '13:00:00'),
(42, '2E', '13:00:00', '14:00:00'),
(43, '2E', '14:00:00', '15:00:00'),
(44, '2E', '15:00:00', '16:00:00'),
(45, '2E', '16:00:00', '17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_timeslot`
--

CREATE TABLE `tb_timeslot` (
  `slot_id` int(11) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_timeslot`
--

INSERT INTO `tb_timeslot` (`slot_id`, `start_time`, `end_time`) VALUES
(1, '08:00:00', '09:00:00'),
(2, '09:00:00', '10:00:00'),
(3, '10:00:00', '11:00:00'),
(4, '11:00:00', '12:00:00'),
(5, '12:00:00', '13:00:00'),
(6, '13:00:00', '14:00:00'),
(7, '14:00:00', '15:00:00'),
(8, '15:00:00', '16:00:00'),
(9, '16:00:00', '17:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_bookingdetail`
--
ALTER TABLE `tb_bookingdetail`
  ADD PRIMARY KEY (`ticket_id`),
  ADD KEY `book_room` (`book_room`),
  ADD KEY `book_timeslot` (`book_timeslot`);

--
-- Indexes for table `tb_room`
--
ALTER TABLE `tb_room`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `tb_room_time`
--
ALTER TABLE `tb_room_time`
  ADD PRIMARY KEY (`rt_id`);

--
-- Indexes for table `tb_timeslot`
--
ALTER TABLE `tb_timeslot`
  ADD PRIMARY KEY (`slot_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_bookingdetail`
--
ALTER TABLE `tb_bookingdetail`
  MODIFY `ticket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1779131875;

--
-- AUTO_INCREMENT for table `tb_room_time`
--
ALTER TABLE `tb_room_time`
  MODIFY `rt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `tb_timeslot`
--
ALTER TABLE `tb_timeslot`
  MODIFY `slot_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_bookingdetail`
--
ALTER TABLE `tb_bookingdetail`
  ADD CONSTRAINT `tb_bookingdetail_ibfk_1` FOREIGN KEY (`book_room`) REFERENCES `tb_room` (`room_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_bookingdetail_ibfk_2` FOREIGN KEY (`book_timeslot`) REFERENCES `tb_timeslot` (`slot_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
