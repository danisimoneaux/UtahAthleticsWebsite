-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jul 12, 2022 at 01:32 PM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `utahathletics`
--

-- --------------------------------------------------------

--
-- Table structure for table `Athletes`
--

CREATE TABLE `Athletes` (
  `AthleteID` int(11) NOT NULL,
  `FirstName` varchar(25) NOT NULL,
  `LastName` varchar(25) NOT NULL,
  `Team` varchar(25) NOT NULL,
  `Year` varchar(10) NOT NULL,
  `ContactEmail` varchar(100) NOT NULL,
  `Scholarship` varchar(20) DEFAULT NULL,
  `Height` varchar(5) DEFAULT NULL,
  `Weight` varchar(5) DEFAULT NULL,
  `Position` varchar(25) DEFAULT NULL,
  `Points` varchar(5) DEFAULT NULL,
  `Assists` varchar(5) DEFAULT NULL,
  `Blocks` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Athletes`
--

INSERT INTO `Athletes` (`AthleteID`, `FirstName`, `LastName`, `Team`, `Year`, `ContactEmail`, `Scholarship`, `Height`, `Weight`, `Position`, `Points`, `Assists`, `Blocks`) VALUES
(1, 'Both', 'Gach', 'Basketball', 'Senior', 'lankboy11@gmail.com', 'Y', '6-6', '189', 'Guard', '261', '64', '5'),
(2, 'Lazar', 'Stefanovic', 'Basketball', 'Sophomore', 'lazarstefanovic@gmail.com', 'N', '6-7', '185', 'Guard', '221', '40', '1'),
(3, 'Marco', 'Anthony', 'Basketball', 'Senior', 'marcojanthony@gmail.com', 'N', '6-6', '224', 'Guard', '254', '56', '13'),
(4, 'Britain', 'Covey', 'Football', 'Junior', 'Britcovey@gmail.com', 'Y', '5-8', '170', 'WR', '60', '', ''),
(5, 'Devin', 'Lloyd', 'Football', 'Junior', 'devinlloyd@gmail.com', 'Y', '6-3', '235', 'LB', '6', '45', '110'),
(6, 'Tavion', 'Thomas', 'Football', 'Junior', 'thiagoothomas@gmail.com', 'Y', '6-2', '238', 'RB', '21', '', ''),
(8, 'Danielle', 'Simoneaux', 'Volleyball', '2023', 'danielle.simoneaux@gmail.com', 'NO', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `messageid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`messageid`, `name`, `email`, `message`) VALUES
(1, 'd', 'd', 'd'),
(2, 'Danielle Simoneaux', 'danielle.simoneaux@gmail.com', 'dddsda'),
(3, 'marc', 'marclope0924@gmail.com', 'this project is too hard :('),
(5, 'poiuytrew', ';lkjhgfd@lkjhgfd.com', 'ok buddy :)'),
(6, 'Danielle Simoneaux', 'danielle.simoneaux@gmail.com', 'd'),
(7, 'Danielle Simoneaux', 'danielle.simoneaux@gmail.com', 'fsdjsjf'),
(8, 'Danielle Simoneaux', 'danielle.simoneaux@gmail.com', 'utes rock'),
(9, 'Joshua Fowles', 'danielle.simoneaux@gmail.com', 'FML');

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `costid` int(200) NOT NULL,
  `sportname` varchar(200) NOT NULL,
  `cost` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`costid`, `sportname`, `cost`) VALUES
(1, 'Football', '$170,930.22'),
(2, 'Basketball', '$40,595.48'),
(3, 'Volleyball', '$38,029.93');

-- --------------------------------------------------------

--
-- Table structure for table `nutritioninput`
--

CREATE TABLE `nutritioninput` (
  `playerid` varchar(20) NOT NULL,
  `playername` varchar(20) NOT NULL,
  `item` varchar(200) NOT NULL,
  `calories` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `personalrecord`
--

CREATE TABLE `personalrecord` (
  `prid` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `activity` varchar(200) NOT NULL,
  `prweight` varchar(30) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `personalrecord`
--

INSERT INTO `personalrecord` (`prid`, `name`, `activity`, `prweight`, `date`) VALUES
(1, 'Dani', 'F', 'F', '2022-09-22'),
(2, 'Danielle', 'Abs', '135 reps', '2022-09-22'),
(3, 'Danielle R Simoneaux', 'clown', '150', '2022-09-22'),
(4, 'Bob Kill \'em ded', 'Unspeakable acts to dirift wood', 'YOOOOOOOOOO', '2020-10-02');

-- --------------------------------------------------------

--
-- Table structure for table `teamportal`
--

CREATE TABLE `teamportal` (
  `id` int(11) NOT NULL,
  `event` varchar(200) NOT NULL,
  `info` varchar(2000) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(2000) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `sport` varchar(200) NOT NULL,
  `role` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `firstName`, `lastName`, `sport`, `role`) VALUES
(3, 'pjones', '$2y$10$MUzK6BkLHz/54bSkZRJ7Qe8Vz/hcWh5kBKa1k1CJPJpt4otJ7iFjW', 'Pauline', 'Jones', 'Basketball', 'A'),
(12, 'syanes', '$2y$10$hlqPvoB/yp0ZxgfuJ52wLuzeYGFA0HTIgVau2VAQpUp2AXkvaNrpC', 'Shannon', 'Yanes', 'Tennis', 'A'),
(13, 'rgundy', '$2y$10$49U/CEuVltScaHETHU.QS.9vKKE0GhAabeaDyiY6H7hLydA.yTOPq', 'Rachel', 'Gundersen', 'Skiing', 'A'),
(15, 'ryanhuntermcb', '$2y$10$YycdF0bwnuHBbihZIPU8ieFsP3.CP3Dm3gbRNGrvFzYUwp.5bAbqi', 'Ryan', 'McClown', 'Clownery', 'A'),
(16, 'okita', '$2y$10$1eCTlbxKWBlJyL4cVK1.fOhmYvyf.J3TIQObXR2nh.hT2dFukd846', 'okita', 'okita', 'football', 'A'),
(17, 'Tracy', '$2y$10$GMJZBEZ6qa6Te.n1zhAUYuWOG4lmsC2S2iKxYvIAiexC6BBjNic9e', 'Benjamin', 'Fowler', 'Cornhole', 'A'),
(20, 'danisimoneaux', '$2y$10$FJn.d0Gm.jK/4lvntw.bUuSjvNNcPiSrDM3g.b2q7WpoXhpbffJ7S', 'Dani', 'Simoneaux', 'Volleyball', 'A'),
(21, 'bsmith', '$2y$10$koWlgj/OKtnXes3kDsc0OeDSKpcHy1BNgvRApDuEYQ4V05DqdNsUu', 'Ben', 'Smith', 'Croquet', 'A'),
(25, 'bsmith1', '$2y$10$7DSOz7IVuc/9j3wvUptgiefq8bbIYlKnk2ucHcGT8hYnBOPrzMIs6', 'Ryan', 'McBride', 'Clownery', 'A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Athletes`
--
ALTER TABLE `Athletes`
  ADD PRIMARY KEY (`AthleteID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`messageid`);

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`costid`);

--
-- Indexes for table `nutritioninput`
--
ALTER TABLE `nutritioninput`
  ADD PRIMARY KEY (`playerid`);

--
-- Indexes for table `personalrecord`
--
ALTER TABLE `personalrecord`
  ADD PRIMARY KEY (`prid`);

--
-- Indexes for table `teamportal`
--
ALTER TABLE `teamportal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Athletes`
--
ALTER TABLE `Athletes`
  MODIFY `AthleteID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `messageid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `equipment`
--
ALTER TABLE `equipment`
  MODIFY `costid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personalrecord`
--
ALTER TABLE `personalrecord`
  MODIFY `prid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teamportal`
--
ALTER TABLE `teamportal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
