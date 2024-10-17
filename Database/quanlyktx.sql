-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3307
-- Thời gian đã tạo: Th10 17, 2024 lúc 05:20 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlyktx`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lop`
--

CREATE TABLE `lop` (
  `MaLop` varchar(10) NOT NULL,
  `TenLop` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `lop`
--

INSERT INTO `lop` (`MaLop`, `TenLop`) VALUES
('01', 'Sư phạm Toán học'),
('02', 'Sư phạm Vật lý'),
('08', 'Công nghệ thực phẩm'),
('09', 'Sư phạm Hóa học'),
('10', 'Sư phạm Sinh học'),
('13', 'Nuôi trồng thủy sản'),
('16', 'Sư phạm Địa lý'),
('17', 'Sư phạm Ngữ văn'),
('18', 'Sư phạm Lịch sử'),
('19', 'Nông học'),
('20', 'Kế toán'),
('21', 'Tài chính - Ngân hàng'),
('22', 'Quản trị kinh doanh'),
('22A', 'Quản trị kinh doanh - học tại Hòa An'),
('23', 'Kinh tế nông nghiệp'),
('23A', 'Kinh tế nông nghiệp - học tại Hòa An'),
('25', 'Quản lý đất đai'),
('32', 'Luật'),
('38', 'Khoa học môi trường'),
('45', 'Marketing'),
('48', 'Kỹ thuật cơ khí'),
('57', 'Kỹ thuật môi trường'),
('63', 'Luật - học tại Hòa An'),
('66', 'Công nghệ sinh học'),
('67', 'Thú y'),
('69', 'Hóa học'),
('72', 'Khoa học đất'),
('73', 'Bảo vệ thực vật'),
('76', 'Bệnh học thủy sản'),
('80', 'Thông tin - thư viện'),
('82', 'Công nghệ chế biến thủy sản'),
('83', 'Quản lý công nghiệp'),
('89', 'Toán ứng dụng'),
('90', 'Kinh tế tài nguyên thiên nhiên'),
('94', 'Sinh học'),
('95', 'Hệ thống thông tin'),
('96', 'Kỹ thuật phần mềm'),
('B1', 'Kỹ thuật ô tô'),
('B2', 'Kỹ thuật y sinh'),
('B3', 'Kỹ thuật máy tính'),
('D1', 'Truyền thông đa phương tiện'),
('D2', 'An toàn thông tin'),
('D3', 'Thống kê'),
('D4', 'Kỹ thuật cấp thoát nước'),
('D5', 'Logistics và Quản lý chuỗi cung ứng'),
('E1', 'Giáo dục mầm non'),
('E2', 'Sư phạm Khoa học tự nhiên'),
('N1', 'Báo chí'),
('N2', 'Du lịch'),
('N2A', 'Du lịch - học tại Hòa An'),
('S1', 'Chăn nuôi'),
('S2', 'Quản lý thủy sản'),
('S3', 'Kỹ thuật cơ điện tử'),
('S7', 'Kiến trúc'),
('S8', 'Quy hoạch vùng và đô thị'),
('S9', 'Luật kinh tế'),
('T1', 'Kỹ thuật xây dựng công trình giao thông'),
('T3', 'Hóa dược'),
('T4', 'Kỹ thuật vật liệu'),
('T5', 'Kỹ thuật điện'),
('T6', 'Kỹ thuật điện tử - viễn thông'),
('T7', 'Kỹ thuật xây dựng'),
('T8', 'Kỹ thuật xây dựng công trình thủy'),
('T9', 'Mạng máy tính và truyền thông dữ liệu'),
('U1', 'Vật lý kỹ thuật'),
('U3', 'Triết học'),
('U4', 'Xã hội học'),
('U5', 'Công nghệ sau thu hoạch'),
('U7A', 'Kinh doanh nông nghiệp - học tại Hòa An'),
('U8', 'Sư phạm Tin học'),
('V1', 'Ngôn ngữ Anh'),
('V1A', 'Ngôn ngữ Anh - học tại Hòa An'),
('V5', 'Kiểm toán'),
('V6', 'Công nghệ kỹ thuật hóa học'),
('V7', 'Công nghệ thông tin'),
('V7A', 'Công nghệ thông tin - học tại Hòa An'),
('V8', 'Sinh học ứng dụng'),
('V9', 'Chính trị học'),
('W1', 'Kinh tế'),
('W2', 'Quản trị dịch vụ du lịch và lữ hành'),
('W3', 'Kinh doanh thương mại'),
('W4', 'Kinh doanh quốc tế'),
('W7', 'Văn học'),
('X1', 'Sư phạm Tiếng Anh'),
('X2', 'Sư phạm Tiếng Pháp'),
('X3', 'Giáo dục Tiểu học'),
('X4', 'Giáo dục Công dân'),
('X6', 'Giáo dục Thể chất'),
('X7', 'Quản lý tài nguyên và môi trường'),
('X8', 'Khoa học cây trồng'),
('X9', 'Công nghệ rau hoa quả và cảnh quan'),
('Y8', 'Kỹ thuật điều khiển và tự động hóa'),
('Z6', 'Khoa học máy tính'),
('Z9', 'Ngôn ngữ Pháp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MaNhanVien` varchar(10) NOT NULL,
  `HoTen` varchar(100) NOT NULL,
  `SoDienThoai` varchar(15) NOT NULL,
  `GhiChu` text DEFAULT NULL,
  `Role` enum('quantri','vanphong') NOT NULL DEFAULT 'vanphong'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phong`
--

CREATE TABLE `phong` (
  `MaPhong` varchar(10) NOT NULL,
  `TenPhong` varchar(100) NOT NULL,
  `DienTich` float NOT NULL,
  `SoGiuong` int(11) NOT NULL,
  `GiaThue` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sinhvien`
--

CREATE TABLE `sinhvien` (
  `MaSinhVien` varchar(10) NOT NULL,
  `HoTen` varchar(100) NOT NULL,
  `SoDienThoai` varchar(15) NOT NULL,
  `MaLop` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thuephong`
--

CREATE TABLE `thuephong` (
  `MaHopDong` varchar(10) NOT NULL,
  `MaSinhVien` varchar(10) DEFAULT NULL,
  `MaPhong` varchar(10) DEFAULT NULL,
  `BatDau` date NOT NULL,
  `KetThuc` date NOT NULL,
  `TienDatCoc` decimal(10,2) NOT NULL,
  `GiaThueThucTe` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tt_thuephong`
--

CREATE TABLE `tt_thuephong` (
  `MaHopDong` varchar(10) NOT NULL,
  `ThangNam` date NOT NULL,
  `SoTien` decimal(10,2) NOT NULL,
  `NgayThanhToan` date NOT NULL,
  `MaNhanVien` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `UserID` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Type` enum('nhanvien','sinhvien') NOT NULL,
  `RefCode` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `lop`
--
ALTER TABLE `lop`
  ADD PRIMARY KEY (`MaLop`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MaNhanVien`);

--
-- Chỉ mục cho bảng `phong`
--
ALTER TABLE `phong`
  ADD PRIMARY KEY (`MaPhong`);

--
-- Chỉ mục cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`MaSinhVien`),
  ADD KEY `MaLop` (`MaLop`);

--
-- Chỉ mục cho bảng `thuephong`
--
ALTER TABLE `thuephong`
  ADD PRIMARY KEY (`MaHopDong`),
  ADD KEY `MaSinhVien` (`MaSinhVien`),
  ADD KEY `MaPhong` (`MaPhong`);

--
-- Chỉ mục cho bảng `tt_thuephong`
--
ALTER TABLE `tt_thuephong`
  ADD PRIMARY KEY (`MaHopDong`,`ThangNam`),
  ADD KEY `MaNhanVien` (`MaNhanVien`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD KEY `RefCode` (`RefCode`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD CONSTRAINT `sinhvien_ibfk_1` FOREIGN KEY (`MaLop`) REFERENCES `lop` (`MaLop`);

--
-- Các ràng buộc cho bảng `thuephong`
--
ALTER TABLE `thuephong`
  ADD CONSTRAINT `thuephong_ibfk_1` FOREIGN KEY (`MaSinhVien`) REFERENCES `sinhvien` (`MaSinhVien`),
  ADD CONSTRAINT `thuephong_ibfk_2` FOREIGN KEY (`MaPhong`) REFERENCES `phong` (`MaPhong`);

--
-- Các ràng buộc cho bảng `tt_thuephong`
--
ALTER TABLE `tt_thuephong`
  ADD CONSTRAINT `tt_thuephong_ibfk_1` FOREIGN KEY (`MaHopDong`) REFERENCES `thuephong` (`MaHopDong`),
  ADD CONSTRAINT `tt_thuephong_ibfk_2` FOREIGN KEY (`MaNhanVien`) REFERENCES `nhanvien` (`MaNhanVien`);

--
-- Các ràng buộc cho bảng `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`RefCode`) REFERENCES `nhanvien` (`MaNhanVien`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`RefCode`) REFERENCES `sinhvien` (`MaSinhVien`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
