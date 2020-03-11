-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 29, 2020 at 05:17 PM
-- Server version: 5.6.46-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `devoted`
--

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `initial` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`name`, `initial`, `created_at`, `updated_at`, `id`) VALUES
('Alabama', 'AL', '2019-12-23 18:25:24', '2019-12-23 18:25:24', 1),
('Alaska', 'AK', '2019-12-23 18:29:36', '2019-12-23 18:29:36', 2),
('American Samoa', 'AS', '2019-12-23 18:29:36', '2019-12-23 18:29:36', 3),
('Arizona', 'AZ', '2019-12-23 18:29:36', '2019-12-23 18:29:36', 4),
('Arkansas', 'AR', '2019-12-23 18:29:36', '2019-12-23 18:29:36', 5),
('California', 'CA', '2019-12-23 18:29:36', '2019-12-23 18:29:36', 6),
('Colorado', 'CO', '2019-12-23 18:29:36', '2019-12-23 18:29:36', 7),
('Connecticut', 'CT', '2019-12-23 18:29:36', '2019-12-23 18:29:36', 8),
('Delaware', 'DE', '2019-12-23 18:29:36', '2019-12-23 18:29:36', 9),
('District Of Columbia', 'DC', '2019-12-23 18:29:36', '2019-12-23 18:29:36', 10),
('Federated States Of Micronesia', 'FM', '2019-12-23 18:29:36', '2019-12-23 18:29:36', 11),
('Florida', 'FL', '2019-12-23 18:29:36', '2019-12-23 18:29:36', 12),
('Georgia', 'GA', '2019-12-23 18:29:36', '2019-12-23 18:29:36', 13),
('Guam', 'GU', '2019-12-23 18:29:36', '2019-12-23 18:29:36', 14),
('Hawaii', 'HI', '2019-12-23 18:29:36', '2019-12-23 18:29:36', 15),
('Idaho', 'ID', '2019-12-23 18:29:36', '2019-12-23 18:29:36', 16),
('Illinois', 'IL', '2019-12-23 18:29:36', '2019-12-23 18:29:36', 17),
('Indiana', 'IN', '2019-12-23 18:29:36', '2019-12-23 18:29:36', 18),
('Iowa', 'IA', '2019-12-23 18:29:36', '2019-12-23 18:29:36', 19),
('Kansas', 'KS', '2019-12-23 18:29:36', '2019-12-23 18:29:36', 20),
('Kentucky', 'KY', '2019-12-23 18:29:36', '2019-12-23 18:29:36', 21),
('Louisiana', 'LA', '2019-12-23 18:29:36', '2019-12-23 18:29:36', 22),
('Maine', 'ME', '2019-12-23 18:29:36', '2019-12-23 18:29:36', 23),
('Marshall Islands', 'MH', '2019-12-23 18:29:36', '2019-12-23 18:29:36', 24),
('Maryland', 'MD', '2019-12-23 18:29:36', '2019-12-23 18:29:36', 25),
('Massachusetts', 'MA', '2019-12-23 18:29:36', '2019-12-23 18:29:36', 26),
('Michigan', 'MI', '2019-12-23 18:29:36', '2019-12-23 18:29:36', 27),
('Minnesota', 'MN', '2019-12-23 18:29:36', '2019-12-23 18:29:36', 28),
('Mississippi', 'MS', '2019-12-23 18:29:36', '2019-12-23 18:29:36', 29),
('Missouri', 'MO', '2019-12-23 18:29:36', '2019-12-23 18:29:36', 30),
('Montana', 'MT', '2019-12-23 18:29:36', '2019-12-23 18:29:36', 31),
('Nebraska', 'NE', '2019-12-23 18:29:36', '2019-12-23 18:29:36', 32),
('Nevada', 'NV', '2019-12-23 18:29:36', '2019-12-23 18:29:36', 33),
('New Hampshire', 'NH', '2019-12-23 18:29:36', '2019-12-23 18:29:36', 34),
('New Jersey', 'NJ', '2019-12-23 18:29:36', '2019-12-23 18:29:36', 35),
('New Mexico', 'NM', '2019-12-23 18:29:36', '2019-12-23 18:29:36', 36),
('New York', 'NY', '2019-12-23 18:29:36', '2019-12-23 18:29:36', 37),
('North Carolina', 'NC', '2019-12-23 18:29:36', '2019-12-23 18:29:36', 38),
('North Dakota', 'ND', '2019-12-23 18:29:36', '2019-12-23 18:29:36', 39),
('Northern Mariana Islands', 'MP', '2019-12-23 18:29:36', '2019-12-23 18:29:36', 40),
('Ohio', 'OH', '2019-12-23 18:29:36', '2019-12-23 18:29:36', 41),
('Oklahoma', 'OK', '2019-12-23 18:29:36', '2019-12-23 18:29:36', 42),
('Oregon', 'OR', '2019-12-23 18:29:36', '2019-12-23 18:29:36', 43),
('Palau', 'PW', '2019-12-23 18:29:36', '2019-12-23 18:29:36', 44),
('Pennsylvania', 'PA', '2019-12-23 18:29:36', '2019-12-23 18:29:36', 45),
('Puerto Rico', 'PR', '2019-12-23 18:29:36', '2019-12-23 18:29:36', 46),
('Rhode Island', 'RI', '2019-12-23 18:29:36', '2019-12-23 18:29:36', 47),
('South Carolina', 'SC', '2019-12-23 18:29:36', '2019-12-23 18:29:36', 48),
('South Dakota', 'SD', '2019-12-23 18:29:36', '2019-12-23 18:29:36', 49),
('Tennessee', 'TN', '2019-12-23 18:29:36', '2019-12-23 18:29:36', 50),
('Texas', 'TX', '2019-12-23 18:29:36', '2019-12-23 18:29:36', 51),
('Utah', 'UT', '2019-12-23 18:29:36', '2019-12-23 18:29:36', 52),
('Vermont', 'VT', '2019-12-23 18:29:36', '2019-12-23 18:29:36', 53),
('Virgin Islands', 'VI', '2019-12-23 18:29:36', '2019-12-23 18:29:36', 54),
('Virginia', 'VA', '2019-12-23 18:29:36', '2019-12-23 18:29:36', 55),
('Washington', 'WA', '2019-12-23 18:29:36', '2019-12-23 18:29:36', 56),
('West Virginia', 'WV', '2019-12-23 18:29:36', '2019-12-23 18:29:36', 57),
('Wisconsin', 'WI', '2019-12-23 18:29:36', '2019-12-23 18:29:36', 58),
('Wyoming', 'WY', '2019-12-23 18:29:36', '2019-12-23 18:29:36', 59);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
