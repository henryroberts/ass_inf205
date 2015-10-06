-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2015 at 12:36 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `product_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `chi_tiet_hoa_don`
--

CREATE TABLE IF NOT EXISTS `chi_tiet_hoa_don` (
  `id_chi_tiet_hoa_don` int(11) NOT NULL,
  `id_san_pham` int(11) NOT NULL,
  `id_hoa_don` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `thanh_tien` varchar(45) NOT NULL,
  `trang_thai_don_hang` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `hoa_don`
--

CREATE TABLE IF NOT EXISTS `hoa_don` (
  `id_hoa_don` int(11) NOT NULL,
  `id_khach_hang` int(11) NOT NULL,
  `ngay_mua` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `loai_sp`
--

CREATE TABLE IF NOT EXISTS `loai_sp` (
  `id_loai_sp` int(11) NOT NULL,
  `ten_loai` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loai_sp`
--

INSERT INTO `loai_sp` (`id_loai_sp`, `ten_loai`) VALUES
(1, 'Công nghệ thông tin'),
(2, 'kinh tế');

-- --------------------------------------------------------

--
-- Table structure for table `san_pham`
--

CREATE TABLE IF NOT EXISTS `san_pham` (
  `id_san_pham` int(11) NOT NULL,
  `id_loai_sp` int(11) NOT NULL COMMENT '1: công nghệ thông tin',
  `ten_sp` varchar(45) NOT NULL,
  `ga_sp` int(11) NOT NULL,
  `mo_ta` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `san_pham`
--

INSERT INTO `san_pham` (`id_san_pham`, `id_loai_sp`, `ten_sp`, `ga_sp`, `mo_ta`) VALUES
(1, 1, 'Lập trình PHP 1', 1200000, 'sách hay'),
(6, 1, 'Lập trình PHP 2', 1000000, 'sách tuyệt vời'),
(7, 1, 'Lập trình PHP 3', 1230000, 'sách cực kỳ hữu dụng'),
(10, 1, 'Lập trình PHP 5', 1000000, 'sách này sẽ dạy cho bạn kỹ năng sử dụng một php frameword rất mạnh hiện nay là laravel 5.1'),
(11, 1, 'Lập trình PHP 4', 2000000, 'sách này sẽ dạy cho bạn kỹ năng sử dụng một'),
(12, 2, 'Nguyên lý kế toán', 700000, 'sách tuyệt vời');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `contact_no` bigint(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `first_name`, `last_name`, `email_id`, `contact_no`) VALUES
(2, 'Äá»©c', 'Tráº§n', 'trananhduc2209@gmail.com', 977023438),
(3, 'CÆ°á»ng', 'Pháº¡m', 'cuongptph02914@fpt.edu.vn', 989852333),
(4, 'Ã‚n', 'Pháº¡m', 'anpdph03201@fpt.edu.vn', 985072664),
(5, 'HiÃªn', 'Nguyá»…n', 'hiennv23@gmail.com', 976571071),
(6, 'Linh', 'Nguyá»…n', 'linhnguyen@gmail.com', 981234567),
(7, 'Nam', 'Nguyá»…n', 'namnguyen@gmail.com', 982134567),
(8, 'Minh', 'DÆ°Æ¡ng', 'minhduong@gmail.com', 9831234567),
(9, 'Huy', 'ÄoÃ n', 'huydoan@gmail.com', 9841234567),
(10, 'Huy', 'Kháº¯c', 'huykhac@gmail.com', 985671234),
(11, 'Tá»©', 'PhÃ¹ng', 'tuphung@gmial.com', 986712345),
(12, 'HÃ ', 'Tráº§n', 'tranvietha2583@gmail.com', 983351222),
(13, 'Thá»', 'Tráº§n', 'thotran@gmail.com', 983113806),
(14, 'Cung', 'Nguyá»…n', 'cungnguyen@gmail.com', 912876525);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chi_tiet_hoa_don`
--
ALTER TABLE `chi_tiet_hoa_don`
  ADD PRIMARY KEY (`id_chi_tiet_hoa_don`),
  ADD KEY `fk_chi_tiet_hoa_don_hoa_don1_idx` (`id_hoa_don`),
  ADD KEY `fk_chi_tiet_hoa_don_san_pham1_idx` (`id_san_pham`);

--
-- Indexes for table `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`id_hoa_don`),
  ADD KEY `fk_hoa_don_khach_hang1_idx` (`id_khach_hang`);

--
-- Indexes for table `loai_sp`
--
ALTER TABLE `loai_sp`
  ADD PRIMARY KEY (`id_loai_sp`);

--
-- Indexes for table `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`id_san_pham`),
  ADD KEY `fk_san_pham_loai_sp_idx` (`id_loai_sp`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chi_tiet_hoa_don`
--
ALTER TABLE `chi_tiet_hoa_don`
  MODIFY `id_chi_tiet_hoa_don` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `id_hoa_don` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `loai_sp`
--
ALTER TABLE `loai_sp`
  MODIFY `id_loai_sp` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `id_san_pham` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `chi_tiet_hoa_don`
--
ALTER TABLE `chi_tiet_hoa_don`
  ADD CONSTRAINT `fk_chi_tiet_hoa_don_hoa_don1` FOREIGN KEY (`id_hoa_don`) REFERENCES `hoa_don` (`id_hoa_don`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_chi_tiet_hoa_don_san_pham1` FOREIGN KEY (`id_san_pham`) REFERENCES `san_pham` (`id_san_pham`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD CONSTRAINT `hoa_don_ibfk_1` FOREIGN KEY (`id_khach_hang`) REFERENCES `tbl_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `fk_san_pham_loai_sp` FOREIGN KEY (`id_loai_sp`) REFERENCES `loai_sp` (`id_loai_sp`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
