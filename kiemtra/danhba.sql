-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 23, 2021 lúc 05:36 PM
-- Phiên bản máy phục vụ: 10.3.16-MariaDB
-- Phiên bản PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `danhba`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `pass_word` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `full_name`, `email`, `pass_word`) VALUES
(1, 'admin', 'admin@gmail.com', '123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_canbo`
--

CREATE TABLE `tbl_canbo` (
  `id` int(10) UNSIGNED NOT NULL,
  `HoTen` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `SDT` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `id_CQ` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_canbo`
--

INSERT INTO `tbl_canbo` (`id`, `HoTen`, `SDT`, `email`, `id_CQ`) VALUES
(1, 'Nguyễn Văn A', '1111111111', 'nvA@gmail.com', 19),
(2, 'Nguyễn Văn B', '2222222222', 'nvB@gmail.com', 20),
(3, 'Lưu Thị C', '333333333333', 'ltC@gmail.com', 21),
(4, 'Phạm Văn D', '444444444444', 'pvD@gmail.com', 22),
(5, 'Đỗ Thành E', '55555555555', 'dtE@gmail.com', 24),
(6, 'Hồ Ngọc G', '66666666666', 'hnG@gmail.com', 23),
(7, 'Doãn Chí B', '777777777777', 'dcB@gmail.com', 21),
(8, 'Mai Thị T', '8888888888888', 'mtT@gmail.com', 23),
(9, 'hồ chí thành', '563213', 'thanh@gmail.com', 20);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_coquan`
--

CREATE TABLE `tbl_coquan` (
  `id` int(10) UNSIGNED NOT NULL,
  `TenCQ` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `SDT` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `DiaChi` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_coquan`
--

INSERT INTO `tbl_coquan` (`id`, `TenCQ`, `SDT`, `DiaChi`, `Email`) VALUES
(19, 'Phòng Đào Tạo', '01111111', 'Toà A, P201, A1 DHTL', 'pdt@gmail.com'),
(20, 'Phòng Khảo Thí', '022222222', 'Toà Toà A, P203, A1 DHTL', 'pkt@gmail.com'),
(21, 'Khoa Công Nghê Thông Tin', '033333333', 'Toà Toà C, P101, C5 DHTL', 'cntt@gmail.com'),
(22, 'Bộ Môn Toán', '0444444444', 'Toà Toà C, P201, C5 DHTL', 'bmtoan@gmail.com'),
(23, 'Khoa Kinh Tế', '05555555', 'Toà Toà B, P201, B5 DHTL', 'kkt@gmail.com'),
(24, 'Bộ Môn Chính Trị', '07777777777', 'Toà Toà B, P301, B2 DHTL', 'bmct@gmail.com');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_canbo`
--
ALTER TABLE `tbl_canbo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_CQ` (`id_CQ`);

--
-- Chỉ mục cho bảng `tbl_coquan`
--
ALTER TABLE `tbl_coquan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_canbo`
--
ALTER TABLE `tbl_canbo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `tbl_coquan`
--
ALTER TABLE `tbl_coquan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_canbo`
--
ALTER TABLE `tbl_canbo`
  ADD CONSTRAINT `tbl_canbo_ibfk_1` FOREIGN KEY (`id_CQ`) REFERENCES `tbl_coquan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
