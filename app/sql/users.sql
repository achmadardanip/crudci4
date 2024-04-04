-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2024 at 12:28 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+07:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crudci4`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` smallint(6) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `name`, `email`, `phone`, `address`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'JohnDoe', 'john.doe@example.com', '1234567890', '123 Main St', '2024-04-04 17:18:35', NULL, NULL),
(2, 'JaneSmith', 'jane.smith@example.com', '2345678901', '456 Elm St', '2024-04-04 17:18:35', NULL, NULL),
(3, 'AliceWonder', 'alice.wonder@example.com', '3456789012', '789 Oak Spring St', '2024-04-04 17:18:35', '2024-04-04 17:26:53', NULL),
(4, 'BobBrown', 'bob.brown@example.com', '4567890123', '1011 Pine St', '2024-04-04 17:18:35', NULL, NULL),
(5, 'CharlieDavis', 'charlie.davis@example.com', '5678901234', '1213 Maple St', '2024-04-04 17:18:35', NULL, NULL),
(6, 'DavidClark', 'david.clark@example.com', '6789012345', '1415 Cedar St', '2024-04-04 17:18:35', NULL, NULL),
(7, 'EmmaEvans', 'emma.evans@example.com', '7890123456', '1617 Birch St', '2024-04-04 17:18:35', NULL, NULL),
(8, 'FrankFord', 'frank.ford@example.com', '8901234567', '1819 Walnut St', '2024-04-04 17:18:35', NULL, NULL),
(9, 'GraceGarcia', 'grace.garcia@example.com', '9012345678', '2021 Cherry St', '2024-04-04 17:18:35', NULL, NULL),
(10, 'HenryHill', 'henry.hill@example.com', '0123456789', '2223 Sycamore St', '2024-04-04 17:18:35', NULL, NULL),
(11, 'IsabelIrwin', 'isabel.irwin@example.com', '9876543210', '2425 Cedar St', '2024-04-04 17:18:35', NULL, NULL),
(12, 'JackJohnson', 'jack.johnson@example.com', '8765432109', '2627 Elm St', '2024-04-04 17:18:35', NULL, NULL),
(13, 'KarenKlein', 'karen.klein@example.com', '7654321098', '2829 Oak St', '2024-04-04 17:18:35', NULL, NULL),
(14, 'LindaLee', 'linda.lee@example.com', '6543210987', '3031 Pine St', '2024-04-04 17:18:35', NULL, NULL),
(15, 'MikeMiller', 'mike.miller@example.com', '5432109876', '3233 Maple St', '2024-04-04 17:18:35', NULL, NULL),
(16, 'NancyNelson', 'nancy.nelson@example.com', '4321098765', '3435 Cedar St', '2024-04-04 17:18:35', NULL, NULL),
(17, 'OliverOlsen', 'oliver.olsen@example.com', '3210987654', '3637 Birch St', '2024-04-04 17:18:35', NULL, NULL),
(18, 'PaulParker', 'paul.parker@example.com', '2109876543', '3839 Walnut St', '2024-04-04 17:18:35', NULL, NULL),
(19, 'QuincyQuinn', 'quincy.quinn@example.com', '1098765432', '4041 Cherry St', '2024-04-04 17:18:35', NULL, NULL),
(20, 'RachelRoss', 'rachel.ross@example.com', '0987654321', '4243 Sycamore St', '2024-04-04 17:18:35', NULL, NULL),
(21, 'SamSmith', 'sam.smith@example.com', '9876543210', '4445 Elm St', '2024-04-04 17:18:35', NULL, NULL),
(22, 'TinaTaylor', 'tina.taylor@example.com', '8765432109', '4647 Oak St', '2024-04-04 17:18:35', NULL, NULL),
(23, 'UmaUpton', 'uma.upton@example.com', '7654321098', '4849 Pine St', '2024-04-04 17:18:35', NULL, NULL),
(24, 'VictorVargas', 'victor.vargas@example.com', '6543210987', '5051 Maple St', '2024-04-04 17:18:35', NULL, NULL),
(25, 'WendyWard', 'wendy.ward@example.com', '5432109876', '5253 Cedar St', '2024-04-04 17:18:35', NULL, NULL),
(26, 'XavierXu', 'xavier.xu@example.com', '4321098765', '5455 Birch St', '2024-04-04 17:18:35', NULL, NULL),
(27, 'YvonneYuan', 'yvonne.yuan@example.com', '3210987654', '5657 Walnut St', '2024-04-04 17:18:35', NULL, NULL),
(28, 'ZackZhang', 'zack.zhang@example.com', '2109876543', '5859 Cherry St', '2024-04-04 17:18:35', NULL, NULL),
(29, 'AmyAdams', 'amy.adams@example.com', '1098765432', '6061 Sycamore St', '2024-04-04 17:18:35', NULL, NULL),
(30, 'BenBaker', 'ben.baker@example.com', '0987654321', '6263 Elm St', '2024-04-04 17:18:35', NULL, NULL),
(31, 'CathyCarter', 'cathy.carter@example.com', '9876543210', '6465 Oak St', '2024-04-04 17:18:35', NULL, NULL),
(32, 'DaveDaniels', 'dave.daniels@example.com', '8765432109', '6667 Pine St', '2024-04-04 17:18:35', NULL, NULL),
(33, 'EvaEdwards', 'eva.edwards@example.com', '7654321098', '6869 Maple St', '2024-04-04 17:18:35', NULL, NULL),
(34, 'FredFisher', 'fred.fisher@example.com', '6543210987', '7071 Cedar St', '2024-04-04 17:18:35', NULL, NULL),
(35, 'GinaGordon', 'gina.gordon@example.com', '5432109876', '7273 Birch St', '2024-04-04 17:18:35', NULL, NULL),
(36, 'HankHarris', 'hank.harris@example.com', '4321098765', '7475 Walnut St', '2024-04-04 17:18:35', NULL, NULL),
(37, 'IvyIngram', 'ivy.ingram@example.com', '3210987654', '7677 Cherry St', '2024-04-04 17:18:35', NULL, NULL),
(38, 'JakeJames', 'jake.james@example.com', '2109876543', '7879 Sycamore St', '2024-04-04 17:18:35', NULL, NULL),
(39, 'KateKim', 'kate.kim@example.com', '1098765432', '8081 Elm St', '2024-04-04 17:18:35', NULL, NULL),
(40, 'LilyLopez', 'lily.lopez@example.com', '0987654321', '8283 Oak St', '2024-04-04 17:18:35', NULL, NULL),
(41, 'MattMurray', 'matt.murray@example.com', '9876543210', '8485 Pine St', '2024-04-04 17:18:35', NULL, NULL),
(42, 'NinaNguyen', 'nina.nguyen@example.com', '8765432109', '8687 Maple St', '2024-04-04 17:18:35', NULL, NULL),
(43, 'OscarOlson', 'oscar.olson@example.com', '7654321098', '8889 Cedar St', '2024-04-04 17:18:35', NULL, NULL),
(44, 'PennyPerez', 'penny.perez@example.com', '6543210987', '9091 Birch St', '2024-04-04 17:18:35', NULL, NULL),
(45, 'QuinnQuintana', 'quinn.quintana@example.com', '5432109876', '9293 Walnut St', '2024-04-04 17:18:35', NULL, NULL),
(46, 'RobRoberts', 'rob.roberts@example.com', '4321098765', '9495 Cherry St', '2024-04-04 17:18:35', NULL, NULL),
(47, 'SallySanchez', 'sally.sanchez@example.com', '3210987654', '9697 Sycamore St', '2024-04-04 17:18:35', NULL, NULL),
(48, 'TomThompson', 'tom.thompson@example.com', '2109876543', '9899 Elm St', '2024-04-04 17:18:35', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
