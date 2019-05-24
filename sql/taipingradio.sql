-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2019 年 05 月 24 日 16:40
-- 服务器版本: 5.5.53
-- PHP 版本: 5.4.45

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `taipingradio`
--

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userName` varchar(32) NOT NULL,
  `passWord` varchar(255) NOT NULL,
  `realName` varchar(32) NOT NULL,
  `className` varchar(32) NOT NULL,
  PRIMARY KEY (`userName`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`userName`, `passWord`, `realName`, `className`) VALUES
('yoodi', 'f6ce608baa3934b20a0c68580acf0f5c6646d2bf40d3c3bbd4f1e2ce61519670', '王誉迪', '17计算机1');

-- --------------------------------------------------------

--
-- 表的结构 `voting_items`
--

CREATE TABLE IF NOT EXISTS `voting_items` (
  `vote_id` int(255) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `one` varchar(255) NOT NULL,
  `two` varchar(255) NOT NULL,
  `three` varchar(255) NOT NULL,
  `four` varchar(255) NOT NULL,
  `five` varchar(255) NOT NULL,
  `six` varchar(255) NOT NULL,
  `seven` varchar(255) NOT NULL,
  `eight` varchar(255) NOT NULL,
  `nine` varchar(255) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `overTime` date NOT NULL,
  PRIMARY KEY (`vote_id`),
  FULLTEXT KEY `six` (`six`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `voting_items`
--

INSERT INTO `voting_items` (`vote_id`, `title`, `one`, `two`, `three`, `four`, `five`, `six`, `seven`, `eight`, `nine`, `ten`, `overTime`) VALUES
(1, '第一期每周一歌', 'aaa', 'bbb', 'ccc', 'ddd', 'eee', 'fff', 'ggg', 'hhh', 'iii', 'jjj', '2018-05-20'),
(2, '第二期每周一歌', '测试1', '测试2', '测试3', '测试4', '测试5', '测试6', '测试7', '测试8', '测试9', '测试10', '2019-05-30');

-- --------------------------------------------------------

--
-- 表的结构 `voting_result`
--

CREATE TABLE IF NOT EXISTS `voting_result` (
  `vote_id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `one` varchar(5) NOT NULL,
  `two` varchar(5) NOT NULL,
  `three` varchar(5) NOT NULL,
  `four` varchar(5) NOT NULL,
  `five` varchar(5) NOT NULL,
  `six` varchar(5) NOT NULL,
  `seven` varchar(5) NOT NULL,
  `eight` varchar(5) NOT NULL,
  `nine` varchar(5) NOT NULL,
  `ten` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `voting_result`
--

INSERT INTO `voting_result` (`vote_id`, `username`, `one`, `two`, `three`, `four`, `five`, `six`, `seven`, `eight`, `nine`, `ten`) VALUES
(2, 'yoodi', 'true', 'false', 'false', 'false', 'false', 'false', 'true', 'false', 'false', 'false');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
