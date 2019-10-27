-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 25, 2018 at 11:01 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hacker`
--

-- --------------------------------------------------------

--
-- Table structure for table `vehiclereg`
--

CREATE TABLE IF NOT EXISTS `vehiclereg` (
  `vehicleno` varchar(10) NOT NULL,
  `Chassisno` varchar(5) NOT NULL,
  `number` varchar(12) NOT NULL,
  `ph1` varchar(12) NOT NULL,
  `ph2` varchar(12) NOT NULL,
  PRIMARY KEY (`vehicleno`),
  UNIQUE KEY `Name` (`Chassisno`,`number`,`ph1`,`ph2`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehiclereg`
--

INSERT INTO `vehiclereg` (`vehicleno`, `Chassisno`, `number`, `ph1`, `ph2`) VALUES
('ts12kj1456', '12055', '919676964912', '919398484573', '919989138790'),
('ts21ap5252', '12365', '918897220356', '919550065325', '918465812532'),
('ts07aj5108', '14325', '917097956200', '919550065325', '9618890311'),
('ts65io4521', '74125', '919550065325', '917093451805', '918897220356'),
('ts32lk5698', '78541', '917989180746', '917013241651', '918897220356'),
('ts25ax5412', '78965', '919874563210', '918897220356', '919550065325'),
('ts54op3214', '96325', '918897220356', '919550792443', '917989180746');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
