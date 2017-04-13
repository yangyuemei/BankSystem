-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-05-15 07:32:20
-- 服务器版本： 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_bank`
--

-- --------------------------------------------------------

--
-- 表的结构 `tb_message`
--

CREATE TABLE IF NOT EXISTS `tb_message` (
  `id` int(4) NOT NULL,
  `content` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `time` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='留言信息表';

--
-- 转存表中的数据 `tb_message`
--

INSERT INTO `tb_message` (`id`, `content`, `time`) VALUES
(0, '444444444444\r\n', '2016-04-24 13:54:06');

-- --------------------------------------------------------

--
-- 表的结构 `tb_super`
--

CREATE TABLE IF NOT EXISTS `tb_super` (
  `suname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `spwd` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='管理员信息表';

--
-- 转存表中的数据 `tb_super`
--

INSERT INTO `tb_super` (`suname`, `spwd`) VALUES
('1', '1'),
('2', '2');

-- --------------------------------------------------------

--
-- 表的结构 `tb_trans`
--

CREATE TABLE IF NOT EXISTS `tb_trans` (
  `uname` varchar(20) NOT NULL,
  `ycredit` varchar(20) NOT NULL,
  `tranmoney` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `trankind` tinytext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `trantime` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=gbk COMMENT='交易记录表';

--
-- 转存表中的数据 `tb_trans`
--

INSERT INTO `tb_trans` (`uname`, `ycredit`, `tranmoney`, `trankind`, `trantime`) VALUES
('yym', '无', '100', '存款', '2016-04-24 12:50:26'),
('yym', '无', '100', '存款', '2016-04-24 13:38:34'),
('yym', '无', '10', '取款', '2016-04-24 13:40:23'),
('yym', '无', '200', '存款', '2016-04-30 14:06:14'),
('yym', '无', '100', '存款', '2016-04-30 14:10:39'),
('yym', '无', '100', '存款', '2016-04-30 14:10:42'),
('yym', '无', '100', '存款', '2016-04-30 14:10:49'),
('yym', '无', '100', '存款', '2016-04-30 14:10:51'),
('yym', '无', '100', '存款', '2016-04-30 14:10:53'),
('yym', '无', '100', '存款', '2016-04-30 14:10:55'),
('yym', '无', '100', '存款', '2016-04-30 14:11:02'),
('yym', '无', '100', '取款', '2016-04-30 14:11:17'),
('yym', '无', '100', '取款', '2016-04-30 14:11:22');

-- --------------------------------------------------------

--
-- 表的结构 `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `uname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `upwd` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ucredit` int(20) NOT NULL,
  `numcard` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `uemail` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `utel` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `udata` datetime NOT NULL,
  `amount` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ustate` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='用户信息表';

--
-- 转存表中的数据 `tb_user`
--

INSERT INTO `tb_user` (`uname`, `upwd`, `ucredit`, `numcard`, `uemail`, `utel`, `udata`, `amount`, `ustate`) VALUES
('yym', '4444', 1873138, '452625199404083081', '787@qq.com', '18842629942', '2016-04-24 12:49:10', '890', '冻结'),
('hzq', '2222', 2390869, '452625199404083084', '222@qq.com', '22898989889', '2016-04-24 13:05:14', '0', '正常'),
('yym2', '3333', 6836486, '452625199404083065', '434@qq.com', '18897654327', '2016-04-24 13:58:30', '0', '正常');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_message`
--
ALTER TABLE `tb_message`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`numcard`), ADD UNIQUE KEY `uname` (`uname`), ADD UNIQUE KEY `utel` (`utel`), ADD UNIQUE KEY `uemail` (`uemail`), ADD KEY `ucredit` (`ucredit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_message`
--
ALTER TABLE `tb_message`
AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
