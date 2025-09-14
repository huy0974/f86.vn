-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 05, 2024 lúc 07:53 PM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `f86`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `number_phone` varchar(20) NOT NULL,
  `address` varchar(500) NOT NULL,
  `proof_document` varchar(200) NOT NULL,
  `number_loan` varchar(100) NOT NULL,
  `list_exhibit` varchar(500) NOT NULL,
  `time_reg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_customer`
--

INSERT INTO `tbl_customer` (`id`, `fullname`, `number_phone`, `address`, `proof_document`, `number_loan`, `list_exhibit`, `time_reg`) VALUES
(0, 'Hồ Duy Hưng', '0564646466', 'Thanh Xuân, Hà Nội', 'Địa chỉ đang ở trùng hộ khẩu', '10 triệu', 'CCCD Chip, Giấy khai sinh con, Đăng ký xe máy, Đăng ký xe ô tô, ', '05-02-2023 23:31:15'),
(0, 'duy', '0458495845', 'hà nội', 'Địa chỉ đang ở trùng hộ khẩu', '5 triệu', 'CCCD Chip, Sổ hộ khẩu, Giấy khai sinh con, ', '05-08-2024 23:29:33'),
(0, 'Đào Anh Tú', '0382752110', '26', 'Địa chỉ đang ở trùng hộ khẩu', '10 triệu', 'CCCD Chip, Sổ hộ khẩu, ', '05-08-2024 23:32:16'),
(0, 'Đào Anh Tú', '0382752110', '26', 'Địa chỉ đang ở trùng hộ khẩu', '5 triệu', 'CCCD Chip, Giấy khai sinh con, ', '05-08-2024 23:48:07'),
(0, 'Đào Anh Tú', '0382752110', '26', 'Địa chỉ đang ở trùng hộ khẩu', '9 triệu', 'CCCD Chip, Blx Ô tô, ', '05-08-2024 23:49:04'),
(0, 'Đào Anh Tú', '0382752110', '26', 'Địa chỉ đang ở trùng hộ khẩu', '5 triệu', 'CCCD Chip, Giấy khai sinh con, ', '05-08-2024 23:49:50'),
(0, 'Đào Anh Tú', '0382752110', 'Ngõ 111, Triều Khúc, Thanh Xuân, Hà Nội', 'Địa chỉ đang ở trùng hộ khẩu', '6 triệu', 'CCCD Chip, Giấy khai sinh con, ', '05-08-2024 23:53:38'),
(0, 'Đào Anh Tú', '0382752110', 'Ngõ 111, Triều Khúc, Thanh Xuân, Hà Nội', 'Địa chỉ đang ở trùng hộ khẩu', '10 triệu', 'CCCD Chip, Giấy khai sinh con, Blx Ô tô, ', '06-08-2024 00:00:24'),
(0, 'Đào Anh Tú', '0382752110', 'Ngõ 111, Triều Khúc, Thanh Xuân, Hà Nội', 'Địa chỉ đang ở trùng hộ khẩu', '10 triệu', 'CCCD Chip, Giấy khai sinh con, ', '06-08-2024 00:01:29'),
(0, 'nguyễn hữu khánh duy', '0123456789', 'Hà Đông, Hà Nội', 'Địa chỉ đang ở trùng hộ khẩu', '15 triệu', 'CCCD Chip, Sổ hộ khẩu, Giấy khai sinh con, Blx Máy, sổ đỏ', '06-08-2024 00:03:10'),
(0, 'nguyễn hữu khánh duy', '0123456789', 'Hà Đông, Hà Nội', 'Địa chỉ đang ở trùng hộ khẩu', '20 triệu', 'CCCD Chip, Sổ hộ khẩu, Giấy khai sinh con, Blx Máy, sổ đỏ', '06-08-2024 00:05:17');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_home_img`
--

CREATE TABLE `tbl_home_img` (
  `id` int(11) NOT NULL,
  `path_client` varchar(500) NOT NULL,
  `path_admin` varchar(500) NOT NULL,
  `creator` varchar(500) NOT NULL,
  `created_date` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_home_img`
--

INSERT INTO `tbl_home_img` (`id`, `path_client`, `path_admin`, `creator`, `created_date`) VALUES
(0, './public/uploads/home_img/anh 6 final.png', '../public/uploads/home_img/anh 6 final.png', 'admin23k', '06-08-2024 00:45:03');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_slider_desktop`
--

CREATE TABLE `tbl_slider_desktop` (
  `id` int(11) NOT NULL,
  `path_client` varchar(500) NOT NULL,
  `path_admin` varchar(500) NOT NULL,
  `creator` varchar(500) NOT NULL,
  `created_date` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_slider_desktop`
--

INSERT INTO `tbl_slider_desktop` (`id`, `path_client`, `path_admin`, `creator`, `created_date`) VALUES
(13, './public/uploads/slider_desktop/anh 5 final.png', '../public/uploads/slider_desktop/anh 5 final.png', 'admin23k', '06-08-2024 00:42:37'),
(15, './public/uploads/slider_desktop/Anh 1 Final.png', '../public/uploads/slider_desktop/Anh 1 Final.png', 'admin23k', '06-08-2024 00:43:49'),
(16, './public/uploads/slider_desktop/anh 5 final - Copy.png', '../public/uploads/slider_desktop/anh 5 final - Copy.png', 'admin23k', '06-08-2024 00:43:58'),
(17, './public/uploads/slider_desktop/Anh 1 Final - Copy.png', '../public/uploads/slider_desktop/Anh 1 Final - Copy.png', 'admin23k', '06-08-2024 00:44:02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_slider_mobile`
--

CREATE TABLE `tbl_slider_mobile` (
  `id` int(11) NOT NULL,
  `path_client` varchar(500) NOT NULL,
  `path_admin` varchar(500) NOT NULL,
  `creator` varchar(500) NOT NULL,
  `created_date` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_slider_mobile`
--

INSERT INTO `tbl_slider_mobile` (`id`, `path_client`, `path_admin`, `creator`, `created_date`) VALUES
(3, './public/uploads/slider_mobile/anh dt 1 final.png', '../public/uploads/slider_mobile/anh dt 1 final.png', 'admin23k', '06-08-2024 00:46:09'),
(4, './public/uploads/slider_mobile/anh dt2 final.png', '../public/uploads/slider_mobile/anh dt2 final.png', 'admin23k', '06-08-2024 00:46:12'),
(5, './public/uploads/slider_mobile/anh dt3 .png', '../public/uploads/slider_mobile/anh dt3 .png', 'admin23k', '06-08-2024 00:46:16');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `address` varchar(300) DEFAULT NULL,
  `gender` enum('male','female') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `fullname`, `username`, `password`, `email`, `phone_number`, `address`, `gender`) VALUES
(1, 'Đào Anh Tú', 'daoanhtu2110', '3b7b9c3cedff4154a48d12aec088a89e', 'daotu2110@gmail.com', NULL, NULL, 'male'),
(2, 'F86', 'adminf86', '8af5ebb581599962aa35ef35cede5494', '', NULL, NULL, 'male');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_video`
--

CREATE TABLE `tbl_video` (
  `id` int(11) NOT NULL,
  `path_client` varchar(500) NOT NULL,
  `path_admin` varchar(500) NOT NULL,
  `creator` varchar(500) NOT NULL,
  `created_date` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_video`
--

INSERT INTO `tbl_video` (`id`, `path_client`, `path_admin`, `creator`, `created_date`) VALUES
(0, './public/uploads/video/mov_bbb.mp4', '../public/uploads/video/mov_bbb.mp4', 'daoanhtu2110', '14-01-2023 09:44:18');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_home_img`
--
ALTER TABLE `tbl_home_img`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_slider_desktop`
--
ALTER TABLE `tbl_slider_desktop`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_slider_mobile`
--
ALTER TABLE `tbl_slider_mobile`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_video`
--
ALTER TABLE `tbl_video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_home_img`
--
ALTER TABLE `tbl_home_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_slider_desktop`
--
ALTER TABLE `tbl_slider_desktop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `tbl_slider_mobile`
--
ALTER TABLE `tbl_slider_mobile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_video`
--
ALTER TABLE `tbl_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
