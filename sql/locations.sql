-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 10, 2021 at 12:56 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mount_everest_travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `lat` float(10,6) DEFAULT NULL,
  `lng` float(10,6) DEFAULT NULL,
  `Price` float NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `destination`, `details`, `email`, `created_at`, `lat`, `lng`, `Price`) VALUES
(1, 'Myra Falls, Austria', 'Located in Lower Austria, one of the best places to visit during the weekend.', 'myrafalls@tours.at', '2021-05-07 14:03:55', 47.908665, 15.934496, 3043),
(3, 'Venice, Italy', 'Unique, ancient, full of culture, Venice is a preferred destination for a trip over the weekend.', 'visitvenice@tours.at', '2021-05-07 14:07:42', 45.440845, 12.315515, 600),
(4, 'Grossglockner, Austria\r\n', 'See the highest peak, visit the highest mountain range in Austria. Ranked 2nd in the Alps, the Grossglockner, is one of the best weekend trips during a pandemic.', 'visitaustria@email.at', '2021-05-07 14:10:08', 47.001221, 12.645120, 800),
(5, 'Salzburg, Austria', 'The \"Salt fortress\" is the capital city of the State of Salzburg. Visit the fortress of Hohensalzburg, one of the largest medieval fortresses in Europe.', 'visitsalzburg@visitaustria.at', '2021-05-07 14:12:52', 47.811195, 13.033229, 300),
(6, 'Prague, The Chech Republic ', 'The capital of the Chech Republic is one of the most beautiful places to visit in Europe. Enjoy a weekend tour full of history, good food and the best Beer in Europe.', 'visitprague@tours.at', '2021-05-07 14:14:36', 50.073658, 14.418540, 50),
(7, 'Camping Bled, Slovenia', 'Bled is an ideal base for exploring Slovenia’s rich natural and cultural heritage in the surrounding countryside where there is also a wealth of activities on offer. If you are feeling adventurous, you might like to try rafting, canyoning.', 'visitbled@gocamping.com', '2021-05-07 14:16:56', 46.361401, 14.081000, 380),
(8, 'Kamp Koren, Slovenia\r\n', 'A campsite surrounded by nature , a stone\'s throw from the emerald green Soča River, is the perfect choice for a well-deserved family vacation. Are you also looking for a wonderful campsite very close to beautiful waterfalls? ', 'gocamp@campsite.at', '2021-05-07 14:18:40', 46.150532, 1335.199951, 200),
(9, 'Campingplatz in Prutz, Austria', 'At the gate of Kaunertal Glacier. Our campsite is situated in the west of the Tyrol in the region where three countries meet (Austria – Italy – Swiss).', 'campingintirol@visitaustria.at', '2021-05-07 14:21:46', 47.079979, 10.659470, 249),
(10, 'Discover Krapets (A.K.A. Krapec), Bulgaria ', 'If you have been wanting to kiss the sun, and if you have been dreaming of having a grand vacation in a heavenly paradise without spending that much, Krapets is for you.', 'visitkrapets@bulgaria.bg', '2021-05-07 14:23:05', 43.596340, 28.533258, 900),
(11, 'Plovdiv', 'Currently, the second largest city in Bulgaria, is the cultural capital of Europe for several years straight. \r\n\"This Plovdiv is the biggest and loveliest of all cities. Its beauty shines from faraway...\"\r\nRoman writer Lucian.', 'visitbulgaria@visitplovdiv.bg', '2021-05-07 14:29:13', 42.135406, 24.745291, 200),
(19, 'Zakopane Poland', 'enjoying, the wonderful sun, sahsa', 'iwant2travel@abv.bg', '2021-05-07 16:00:56', 49.299030, 19.949047, 170),
(20, 'Zagreb', 'Skate, surf and try some local beer', 'Iwanttotravel@abv.bg', '2021-05-07 16:02:21', 45.815399, 15.966568, 479);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
