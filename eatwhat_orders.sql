-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2020-10-30 22:58:18
-- 服务器版本: 5.5.44-0ubuntu0.14.04.1
-- PHP 版本: 5.5.9-1ubuntu4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `f31ee`
--

-- --------------------------------------------------------

--
-- 表的结构 `eatwhat_orders`
--

CREATE TABLE IF NOT EXISTS `eatwhat_orders` (
  `orderid` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `phone` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `item` varchar(200) NOT NULL,
  `amount` varchar(10) NOT NULL,
  `dining_method` varchar(10) NOT NULL,
  `delivery_time` varchar(10) NOT NULL,
  `delivery_address` varchar(200) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`orderid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- 转存表中的数据 `eatwhat_orders`
--

INSERT INTO `eatwhat_orders` (`orderid`, `name`, `phone`, `email`, `comment`, `item`, `amount`, `dining_method`, `delivery_time`, `delivery_address`, `timestamp`) VALUES
(1, 'test', '12345678', '123@f31ee.com', '', '', '1.23', 'dine', '12:34', 'at eatwhat', '2020-10-30 02:55:04'),
(2, 'test2', '12345678', '123@f31ee.com', '', '', '1.23', 'dine', '12:34', 'at eatwhat', '2020-10-30 02:56:40'),
(3, 'test2', '12345678', '123@f31ee.com', '', '', '1.23', 'dine', '12:34', 'at eatwhat', '2020-10-30 03:01:59'),
(4, 'test2', '12345678', '123@f31ee.com', '', '', '1.23', 'dine', '12:34', 'at eatwhat', '2020-10-30 03:02:57'),
(5, 'test2', '12345678', '123@f31ee.com', '', '', '1.23', 'dine', '12:34', 'at eatwhat', '2020-10-30 03:09:12'),
(6, 'test2', '12345678', '123@f31ee.com', '', '', '1.23', 'dine', '12:34', 'at eatwhat', '2020-10-30 04:13:58'),
(7, 'TNaomi98', '03108251681', 'f31ee@ee4717.com', '', 'Boiled Fish Fillet * 1<br>', '2.5', 'Dine-in', '', 'At EatWhat', '2020-10-30 11:42:42'),
(8, 'TNaomi98', '03108251681', 'f31ee@ee4717.com', '', 'Boiled Fish Fillet * 1<br>', '2.5', 'Dine-in', '', 'At EatWhat', '2020-10-30 11:56:19'),
(9, 'f31ee', '98765432', 'f31ee@localhost', '', 'Garlic Scallops * 1<br>', '2.5', 'Dine-in', '12:56', 'At EatWhat', '2020-10-30 11:57:35'),
(10, 'f31ee', '98765432', 'f31ee@localhost', 'thanks', 'Garlic Scallops * 1<br>', '2.5', 'Dine-in', '12:56', 'At EatWhat', '2020-10-30 11:59:23'),
(11, 'f31ee', '98765432', 'f31ee@localhost', 'thanks', 'Garlic Scallops * 1<br>', '2.5', 'Dine-in', '12:56', 'At EatWhat', '2020-10-30 12:00:37'),
(12, 'f31ee', '98765432', 'f31ee@localhost', 'thanks', 'Garlic Scallops * 1<br>', '2.5', 'Dine-in', '12:56', 'At EatWhat', '2020-10-30 12:03:03'),
(13, 'f31ee', '98765432', 'f31ee@localhost', 'thanks', 'Garlic Scallops * 1<br>', '2.5', 'Dine-in', '12:56', 'At EatWhat', '2020-10-30 12:04:29'),
(14, 'f31ee', '98765432', 'f31ee@localhost', 'thanks', 'Garlic Scallops * 1<br>', '2.5', 'Dine-in', '12:56', 'At EatWhat', '2020-10-30 12:04:45'),
(15, 'tangyuan', '03108251681', 'f31ee@localhost', '', '', '0', 'Dine-in', '', 'At EatWhat', '2020-10-30 14:30:17'),
(16, 'ytang016', '03108251681', 'f31ee@localhost', 'thnks', 'Fried Chicken Wings * 1<br>Stir Fried Prawn * 1<br>Steamed Pumpkin * 1<br>', '5', 'Self-Picku', '14:56', 'At EatWhat', '2020-10-30 14:39:42');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
