-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 25, 2020 lúc 10:55 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sv`
--

CREATE TABLE `tbl_sv` (
  `id` int(100) NOT NULL,
  `masanpham` varchar(100) NOT NULL,
  `tensp` varchar(100) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `img` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `ngaynhap` date NOT NULL,
  `slnhap` int(255) NOT NULL,
  `slcon` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `tbl_sv`
--

INSERT INTO `tbl_sv` (`id`, `masanpham`, `tensp`, `img`, `ngaynhap`, `slnhap`, `slcon`) VALUES
(33, ' X509FA-EJ199T', ' Laptop ASUS 15', '2.jpg', '2013-02-13', 500, 500),
(34, 'UX581GV-H2029T', 'LAPTOP ASUS ZENBOOK PRO DUO ', '5.jpg', '2020-08-13', 100, 100),
(35, '3593-N3593A', 'LAPTOP DELL INSPIRON ', '9.jpg', '2020-08-14', 40, 39),
(36, 'A514-51-37ZD', 'LAPTOP ACER ASPIRE 5', '13.png', '2020-08-14', 167, 134),
(37, 'A515-53-50ZD', 'LAPTOP ACER ASPIRE', '41.jpg', '2020-08-14', 234, 123),
(38, '430 G7-9GP99PA', 'LAPTOP HP PROBOOK', 'p8.jpg', '2020-08-22', 123, 123),
(39, ' 450 G7-9LA52PA', 'LAPTOP HP PROBOOK', 'p7.jpg', '2020-08-14', 43, 23),
(40, 'G7-9GQ08PA', 'LAPTOP HP PROBOOK 430', 'p6.jpg', '2020-08-16', 123, 21),
(41, 'A515-53-330E', 'LAPTOP ACER ASPIRE 5', 'p3.jpg', '2020-08-03', 34, 12),
(42, '3480-70183778', 'LAPTOP DELL VOSTRO', 'p11.jpg', '0000-00-00', 34, 12),
(43, 'G531GT-AL007T', 'LAPTOP ASUS ROG STRIX G', '49.jpg', '2020-08-21', 45, 23),
(44, '10SCXR-248VN 4719072735210', 'LAPTOP MSI THIN GF75', '54.jpg', '2020-08-15', 4365, 12),
(45, '15-DK0000DX 7HR10PA', 'LAPTOP HP PAVILION GAMING', '57.jpg', '2020-08-07', 34, 12),
(46, 'AN515-54-779S', 'LAPTOP ACER NITRO 5', '779s.jpg', '2020-08-07', 3214, 12),
(48, '', 'Chuột bluetooth Mcf', '3.jpg', '2020-08-16', 12, 2),
(49, '', 'Miếng lót hình lập thể', '1.jpg', '2020-08-20', 12, 0),
(50, '', 'TAI NGHE BLUETOOTH APPLE AIRPODS PRO CHÍNH HÃNG', '7.jpg', '2020-08-10', 1000, 34);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_sv`
--
ALTER TABLE `tbl_sv`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_sv`
--
ALTER TABLE `tbl_sv`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
