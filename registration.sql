-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2018 at 11:21 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `bankacc1` int(11) NOT NULL,
  `bankacc2` int(11) NOT NULL,
  `bankacc3` int(11) NOT NULL,
  `ActualBalance` int(11) NOT NULL,
  `TotalStockInv` int(11) NOT NULL,
  `TotalFD` int(11) NOT NULL,
  `InsurancePerMonth` int(11) NOT NULL,
  `TotalPL` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Stockone` varchar(255) NOT NULL,
  `QStockone` int(11) NOT NULL,
  `Stocktwo` varchar(255) NOT NULL,
  `QStocktwo` int(11) NOT NULL,
  `Stockthree` varchar(255) NOT NULL,
  `QStockthree` int(11) NOT NULL,
  `Loanone` int(11) NOT NULL,
  `Loantwo` int(11) NOT NULL,
  `Loanthree` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `bankacc1`, `bankacc2`, `bankacc3`, `ActualBalance`, `TotalStockInv`, `TotalFD`, `InsurancePerMonth`, `TotalPL`, `email`, `password`, `Stockone`, `QStockone`, `Stocktwo`, `QStocktwo`, `Stockthree`, `QStockthree`, `Loanone`, `Loantwo`, `Loanthree`) VALUES
(8, 'anuj_odedra', 10001, 10003, 10005, 600000, 375000, 315500, 5600, 287500, 'anuj@yahoo.in', '74e5d5a38edf9cbe9fbb7a5263b253ed', 'Reliance', 150, 'Tata Steel', 200, 'Infosys', 100, 25000, 10000, 20000),
(9, 'ayush_khanvilkar', 10002, 10004, 10006, 350000, 555000, 680000, 14700, 220000, 'ayush@yahoo.in', 'ayush123', 'MRF', 5, 'BNP', 100, 'SBI', 500, 12500, 50000, 50000);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
