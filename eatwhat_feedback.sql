-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2020-11-01 21:26:54
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
-- 表的结构 `eatwhat_feedback`
--

CREATE TABLE IF NOT EXISTS `eatwhat_feedback` (
  `feedbackid` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `phone` int(40) NOT NULL,
  `comment` varchar(200) NOT NULL,
  PRIMARY KEY (`feedbackid`),
  KEY `feedbackid` (`feedbackid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- 转存表中的数据 `eatwhat_feedback`
--

INSERT INTO `eatwhat_feedback` (`feedbackid`, `email`, `phone`, `comment`) VALUES
(1, '99@com', 99999999, '666'),
(2, 'EE4717@NTU.COM', 88888888, 'WELL DONE'),
(22, 'aaa@ntu.sg', 98765432, 'congrats');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
