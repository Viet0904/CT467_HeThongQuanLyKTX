-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Oct 14, 2024 at 09:47 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanlyktx`
--

--
-- Dumping data for table `lop`
--

INSERT INTO `lop` (`MaLop`, `TenLop`) VALUES
(1, 'Công nghệ thông tin'),
(2, 'Ngôn ngữ anh'),
(3, 'Bảo vệ thực vật');

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`MaNhanVien`, `HoTen`, `SoDienThoai`, `GhiChu`) VALUES
(1, 'Nguyễn Hồng Tuấn Phát', '0783727637', 'Quản lý khu C');

--
-- Dumping data for table `phong`
--

INSERT INTO `phong` (`MaPhong`, `TenPhong`, `DienTich`, `SoGiuong`, `GiaThue`) VALUES
(1, 'C1', 25, 8, 1200000.00),
(2, 'B1\r\n', 20, 6, 1000000.00);

--
-- Dumping data for table `sinhvien`
--

INSERT INTO `sinhvien` (`MaSinhVien`, `HoTen`, `SoDienThoai`, `MaLop`) VALUES
(1, 'Nguyễn Hồng Tuấn Phát', '0783727637', 1);

--
-- Dumping data for table `thuephong`
--

INSERT INTO `thuephong` (`MaHopDong`, `MaSinhVien`, `MaPhong`, `BatDau`, `KetThuc`, `TienDatCoc`, `GiaThueThucTe`) VALUES
(1, 1, 1, '2024-01-01', '2024-12-31', 500000.00, 1200000.00);

--
-- Dumping data for table `tt_thuephong`
--

INSERT INTO `tt_thuephong` (`MaHopDong`, `ThangNam`, `SoTien`, `NgayThanhToan`, `MaNhanVien`) VALUES
(1, '0000-00-00', 1200000.00, '2024-02-10', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
