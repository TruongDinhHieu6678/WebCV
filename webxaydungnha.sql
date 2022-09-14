-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 13, 2022 lúc 06:39 PM
-- Phiên bản máy phục vụ: 10.1.37-MariaDB
-- Phiên bản PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webxaydungnha`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `congti`
--

CREATE TABLE `congti` (
  `MaCongTy` int(11) NOT NULL,
  `TenCongTy` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `SoDT` varchar(10) COLLATE utf8_vietnamese_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `DiaChi` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ThoiGianLamViec` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `NgayLamViec` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `FANPAGE` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `GioiThieu` varchar(3000) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `congti`
--

INSERT INTO `congti` (`MaCongTy`, `TenCongTy`, `SoDT`, `email`, `DiaChi`, `ThoiGianLamViec`, `NgayLamViec`, `FANPAGE`, `GioiThieu`) VALUES
(1, 'Công Ty Xây Dựng', '0986704105', 'truongheiu667@gmail.com', 'Diginet Vietnam Corporation, Broadcast Office Building, 341-343 Điện Biên Phủ, St, Bình Thạnh, Thành', '07:00-16:00', 'Thứ 2- Thứ 6', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `congtrinh`
--

CREATE TABLE `congtrinh` (
  `MaCongTrinh` int(11) NOT NULL,
  `TenCongTrinh` varchar(4000) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `congtrinh`
--

INSERT INTO `congtrinh` (`MaCongTrinh`, `TenCongTrinh`) VALUES
(2, 'NHÀ ĐẸP TÂY NINH DIỆN TÍCH 5.5X22M'),
(37, 'anh5'),
(38, 'anh6'),
(39, 'anh7'),
(40, 'anh8'),
(41, 'anh9'),
(42, 'anh10'),
(43, 'anh11'),
(44, 'anh12'),
(45, 'anh13'),
(46, 'anh14'),
(47, 'anh15'),
(48, 'anh16'),
(49, 'anh17'),
(50, 'anh18'),
(51, 'anh19'),
(52, 'anh20'),
(53, 'anh21'),
(54, 'anh22'),
(55, 'anh23'),
(56, 'anh24'),
(57, 'anh25'),
(58, 'anh26'),
(59, 'anh27'),
(60, 'anh28'),
(61, 'anh29'),
(62, 'anh30'),
(63, 'anh4');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ctcongtrinh`
--

CREATE TABLE `ctcongtrinh` (
  `MaCTCongTrinh` int(11) NOT NULL,
  `TenLoaiCongTrinh` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `QuyMo` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `DienTich` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `NamXayDung` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `DiaDiem` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `MaCT` int(11) NOT NULL,
  `ChiTietCT` varchar(3000) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `ctcongtrinh`
--

INSERT INTO `ctcongtrinh` (`MaCTCongTrinh`, `TenLoaiCongTrinh`, `QuyMo`, `DienTich`, `NamXayDung`, `DiaDiem`, `MaCT`, `ChiTietCT`) VALUES
(1, 'Cam Mi', 'Trệt, gác lửng', '5,5x22m', '2020', 'Tây Ninh', 2, 'A 34-year-old NEET otaku, chased out from his house by his family, found that his life is reaching a dead end. He then recalled that his life could actually have been much better if he had made better choices in the past.'),
(39, 'Nhà Cấp 4', '', '', '', '', 37, ''),
(40, 'Nhà Cấp 4', '', '', '', '', 38, ''),
(41, 'Nhà Cấp 4', '', '', '', '', 39, ''),
(42, 'Nhà Cấp 4', '', '', '', '', 40, ''),
(43, 'Nhà Cấp 4', '', '', '', '', 41, ''),
(44, 'Nhà Cấp 4', '', '', '', '', 42, ''),
(45, 'Nhà Cấp 4', '', '', '', '', 43, ''),
(46, 'Nhà Cấp 4', '', '', '', '', 44, ''),
(47, 'Nhà Cấp 4', '', '', '', '', 45, ''),
(48, 'Nhà Cấp 4', '', '', '', '', 46, ''),
(49, 'Nhà Cấp 4', '', '', '', '', 47, ''),
(50, 'Nhà Cấp 4', '', '', '', '', 48, ''),
(51, 'Nhà Cấp 4', '', '', '', '', 49, ''),
(52, 'Nhà Cấp 4', '', '', '', '', 50, ''),
(53, 'Nhà Cấp 4', '', '', '', '', 51, ''),
(54, 'Nhà Cấp 4', '', '', '', '', 52, ''),
(55, 'Nhà Cấp 4', '', '', '', '', 53, ''),
(56, 'Cam Mi', '', '', '', '', 54, ''),
(57, 'Cam Mi', '', '', '', '', 55, ''),
(58, 'Cam Mi', '', '', '', '', 56, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `image`
--

CREATE TABLE `image` (
  `IDImage` int(11) NOT NULL,
  `TenAnh` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `MaCT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `image`
--

INSERT INTO `image` (`IDImage`, `TenAnh`, `MaCT`) VALUES
(1, 'nha2.jpg', 2),
(7, 'nha2.jpg', 37),
(8, 'nha2.jpg', 38),
(9, 'nha2.jpg', 39),
(14, 'nha2.jpg', 40),
(15, 'nha2.jpg', 41),
(16, 'nha2.jpg', 42),
(17, 'nha2.jpg', 43),
(18, 'nha2.jpg', 44),
(19, 'nha2.jpg', 45),
(20, 'nha2.jpg', 46),
(21, 'nha2.jpg', 47),
(22, 'nha2.jpg', 48),
(23, 'nha2.jpg', 49),
(24, 'nha2.jpg', 50),
(25, 'nha2.jpg', 51),
(26, 'nha2.jpg', 52),
(27, 'nha2.jpg', 53),
(28, 'nha2.jpg', 54),
(29, 'nha2.jpg', 55),
(30, 'nha2.jpg', 56);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `MaKhachHang` int(11) NOT NULL,
  `TenKhachHang` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `NgaySinh` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `SoDT` varchar(10) COLLATE utf8_vietnamese_ci NOT NULL,
  `DiaChi` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `MaCongTrinhChon` int(11) NOT NULL,
  `Mahopdong` int(11) NOT NULL,
  `MaTaiKhoan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MaNhanVien` int(11) NOT NULL,
  `MaTaiKhoan` int(11) NOT NULL,
  `HoTen` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `NgaySinh` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `SoDT` varchar(10) COLLATE utf8_vietnamese_ci NOT NULL,
  `DiaChi` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `MaCTDN` int(11) NOT NULL,
  `MaHDDN` int(11) NOT NULL,
  `MaCongTi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `MaTaiKhoan` int(11) NOT NULL,
  `TenTaiKhoan` varchar(20) COLLATE utf8_vietnamese_ci NOT NULL,
  `MatKhau` char(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `LoaiTaiKhoan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`MaTaiKhoan`, `TenTaiKhoan`, `MatKhau`, `LoaiTaiKhoan`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 1),
(2, 'hieuvuiz', '123456', 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `congti`
--
ALTER TABLE `congti`
  ADD PRIMARY KEY (`MaCongTy`);

--
-- Chỉ mục cho bảng `congtrinh`
--
ALTER TABLE `congtrinh`
  ADD PRIMARY KEY (`MaCongTrinh`);

--
-- Chỉ mục cho bảng `ctcongtrinh`
--
ALTER TABLE `ctcongtrinh`
  ADD PRIMARY KEY (`MaCTCongTrinh`),
  ADD KEY `ctcongtrinh_ibfk_1` (`MaCT`);

--
-- Chỉ mục cho bảng `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`IDImage`),
  ADD KEY `MaCT` (`MaCT`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MaKhachHang`),
  ADD KEY `MaTaiKhoan` (`MaTaiKhoan`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MaNhanVien`),
  ADD KEY `MaCTDN` (`MaCTDN`),
  ADD KEY `MaCongTi` (`MaCongTi`),
  ADD KEY `MaTaiKhoan` (`MaTaiKhoan`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`MaTaiKhoan`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `congti`
--
ALTER TABLE `congti`
  MODIFY `MaCongTy` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `congtrinh`
--
ALTER TABLE `congtrinh`
  MODIFY `MaCongTrinh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT cho bảng `ctcongtrinh`
--
ALTER TABLE `ctcongtrinh`
  MODIFY `MaCTCongTrinh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT cho bảng `image`
--
ALTER TABLE `image`
  MODIFY `IDImage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `MaKhachHang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `MaNhanVien` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `MaTaiKhoan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `ctcongtrinh`
--
ALTER TABLE `ctcongtrinh`
  ADD CONSTRAINT `ctcongtrinh_ibfk_1` FOREIGN KEY (`MaCT`) REFERENCES `congtrinh` (`MaCongTrinh`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `image_ibfk_1` FOREIGN KEY (`MaCT`) REFERENCES `congtrinh` (`MaCongTrinh`);

--
-- Các ràng buộc cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD CONSTRAINT `khachhang_ibfk_1` FOREIGN KEY (`MaTaiKhoan`) REFERENCES `taikhoan` (`MaTaiKhoan`);

--
-- Các ràng buộc cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `nhanvien_ibfk_2` FOREIGN KEY (`MaCongTi`) REFERENCES `congti` (`MaCongTy`),
  ADD CONSTRAINT `nhanvien_ibfk_3` FOREIGN KEY (`MaTaiKhoan`) REFERENCES `taikhoan` (`MaTaiKhoan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
