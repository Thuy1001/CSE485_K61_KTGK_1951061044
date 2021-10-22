-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 22, 2021 lúc 05:48 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlythi`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_exams`
--

CREATE TABLE `db_exams` (
  `id` char(10) NOT NULL,
  `exam_title` varchar(50) NOT NULL,
  `exam_datetime` date NOT NULL,
  `duration` time NOT NULL,
  `total_question` tinyint(4) NOT NULL,
  `mark_per_right_anwser` float NOT NULL,
  `created_on` date NOT NULL,
  `status` varchar(50) NOT NULL,
  `exam_code` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `db_exams`
--

INSERT INTO `db_exams` (`id`, `exam_title`, `exam_datetime`, `duration`, `total_question`, `mark_per_right_anwser`, `created_on`, `status`, `exam_code`) VALUES
('01', 'Công nghệ Web', '2021-10-22', '10:29:22', 2, 7, '2021-10-22', 'Created', '001');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `db_exams`
--
ALTER TABLE `db_exams`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
