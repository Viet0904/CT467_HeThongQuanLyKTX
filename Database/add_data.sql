--Thêm phòng
INSERT INTO Phong (TenPhong, DienTich, SoGiuong, GiaThue)
VALUES 
('C1', 25.0, 8, 1200000);

-- Thêm lớp
INSERT INTO Lop (TenLop)
VALUES 
('Công nghệ thông tin');

-- Thêm sinh viên
INSERT INTO SinhVien (HoTen, SoDienThoai, MaLop)
VALUES 
('Nguyễn Hồng Tuấn Phát', '0783727637', 1);

-- Thêm nhân viên
INSERT INTO NhanVien (HoTen, SoDienThoai, GhiChu)
VALUES 
('Nguyễn Hồng Tuấn Phát', '0783727637', 'Quản lý khu C');

-- Thêm thuê phòng
INSERT INTO ThuePhong (MaSinhVien, MaPhong, BatDau, KetThuc, TienDatCoc, GiaThueThucTe)
VALUES 
(1, 1, '2024-01-01', '2024-12-31', 500000, 1200000);

-- Thêm thông tin thuê phòng
INSERT INTO TT_ThuePhong (MaHopDong, ThangNam, SoTien, NgayThanhToan, MaNhanVien)
VALUES 
(1, '2024-02', 1200000, '2024-02-10', 1);