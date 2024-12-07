-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 24, 2020 lúc 03:41 PM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `tv`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dulieu`
--

CREATE TABLE `dulieu` (
  `id` int(10) NOT NULL,
  `tennguoimuon` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `sdt` int(10) NOT NULL,
  `ngaymuon` date NOT NULL,
  `ngaytra` date NOT NULL,
  `id_sach` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sach`
--

CREATE TABLE `sach` (
  `id` int(10) NOT NULL,
  `hinh` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `tensach` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `tacgia` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `namxuatban` varchar(10) COLLATE utf8_vietnamese_ci NOT NULL,
  `id_theloai` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `sach`
--

INSERT INTO `sach` (`id`, `hinh`, `tensach`, `tacgia`, `namxuatban`, `id_theloai`) VALUES
(22, 'anh-cam-on-da-lang-nghe-cho-powerpoint_040623861.jpg', ' Dừa-dứa', 'kugjhk', '2020-12-10', 4),
(23, 'DUA.png', 'kẹo', 'adsa', '2020-12-01', 1),
(24, '--t.jpg', '123', '123', '2020-12-28', 1),
(25, 'anh-cam-on-da-lang-nghe-cho-powerpoint_040623861.jpg', '123123', '', '2020-11-30', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoang`
--

CREATE TABLE `taikhoang` (
  `id` int(10) NOT NULL,
  `tendangnhap` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `matkhau` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `hoten` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoang`
--

INSERT INTO `taikhoang` (`id`, `tendangnhap`, `matkhau`, `hoten`) VALUES
(1, 'lhgl', '1234', 'Le Huynh Gia Luat'),
(2, 'lqky', '123', 'Nhan Thanh Duoc');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai`
--

CREATE TABLE `theloai` (
  `id` int(10) NOT NULL,
  `theloai` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `theloai`
--

INSERT INTO `theloai` (`id`, `theloai`) VALUES
(1, 'Kinh Dị'),
(2, 'Ngôn tình'),
(3, 'Anime'),
(4, 'Hài hước'),
(5, 'vui nhộn'),
(6, 'cổ tích');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `dulieu`
--
ALTER TABLE `dulieu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sach`
--
ALTER TABLE `sach`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `taikhoang`
--
ALTER TABLE `taikhoang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `dulieu`
--
ALTER TABLE `dulieu`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `sach`
--
ALTER TABLE `sach`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `taikhoang`
--
ALTER TABLE `taikhoang`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `theloai`
--
ALTER TABLE `theloai`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
