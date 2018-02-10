-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2018-02-10 04:12:07
-- 服务器版本： 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xmair`
--

-- --------------------------------------------------------

--
-- 表的结构 `info_table`
--

CREATE TABLE `info_table` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `gender` int(11) NOT NULL,
  `birthday` date NOT NULL,
  `school` varchar(128) NOT NULL,
  `workbase` varchar(128) NOT NULL DEFAULT '厦门',
  `payroad` tinyint(1) NOT NULL,
  `paytest` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `info_table`
--

INSERT INTO `info_table` (`id`, `name`, `gender`, `birthday`, `school`, `workbase`, `payroad`, `paytest`) VALUES
(1, '小张', 1, '1999-02-03', '南京航空航天大学', '厦门', 1, 1),
(2, '小张', 1, '1999-02-03', '南京航空航天大学', '厦门', 1, 1),
(3, '小黑', 2, '1990-02-06', '南航', '厦门', 0, 1),
(4, '张三', 1, '1994-01-03', '厦门大学', '厦门', 1, 1),
(5, '李四', 1, '1994-03-08', '厦门大学', '厦门', 1, 1);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `lastlogintime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `lastlogintime`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '2018-02-08 13:33:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info_table`
--
ALTER TABLE `info_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `info_table`
--
ALTER TABLE `info_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
