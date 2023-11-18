-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 18, 2023 lúc 12:02 PM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `testdb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `benhly`
--

CREATE TABLE `benhly` (
  `MaBN` int(11) NOT NULL,
  `benhlydikem` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `benhly`
--

INSERT INTO `benhly` (`MaBN`, `benhlydikem`) VALUES
(123456789, 'Nhức đầu');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `benhnhan`
--

CREATE TABLE `benhnhan` (
  `MaBN` int(11) NOT NULL,
  `Ho` varchar(255) DEFAULT NULL,
  `Ten` varchar(255) DEFAULT NULL,
  `SoCMND` varchar(255) NOT NULL,
  `SDT` varchar(255) DEFAULT NULL,
  `DiaChi` varchar(255) DEFAULT NULL,
  `Gioitinh` varchar(5) DEFAULT NULL,
  `chuyendentu` varchar(255) DEFAULT NULL,
  `MaXN` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `benhnhan`
--

INSERT INTO `benhnhan` (`MaBN`, `Ho`, `Ten`, `SoCMND`, `SDT`, `DiaChi`, `Gioitinh`, `chuyendentu`, `MaXN`) VALUES
(123456789, 'Nguyen', 'Van A', '1234567890', '0912345678', 'Quan 6', 'Nam', 'Khu cach ly so 1', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dieutri`
--

CREATE TABLE `dieutri` (
  `MaNV` int(11) NOT NULL,
  `MaThuoc` int(11) NOT NULL,
  `MaBN` int(11) NOT NULL,
  `lichsudieutri` datetime DEFAULT NULL,
  `ketqua` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `doctors`
--

CREATE TABLE `doctors` (
  `MaNV` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nurse`
--

CREATE TABLE `nurse` (
  `MaNV` int(11) NOT NULL,
  `MaBN` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pcrtest`
--

CREATE TABLE `pcrtest` (
  `MaXN` int(11) NOT NULL,
  `result` tinyint(1) DEFAULT NULL,
  `ct` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `people`
--

CREATE TABLE `people` (
  `MaNV` int(11) NOT NULL,
  `Chucvu` varchar(255) DEFAULT NULL,
  `Ngaybatdaulamviec` datetime DEFAULT NULL,
  `Ho` varchar(255) DEFAULT NULL,
  `Ten` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phong`
--

CREATE TABLE `phong` (
  `MaPhong` int(11) NOT NULL,
  `tang` int(11) DEFAULT NULL,
  `loaiphong` varchar(255) DEFAULT NULL,
  `toanha` varchar(255) DEFAULT NULL,
  `succhua` int(11) DEFAULT NULL,
  `MaBN` int(11) NOT NULL,
  `thoigianvao` datetime DEFAULT NULL,
  `thoigianra` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `phong`
--

INSERT INTO `phong` (`MaPhong`, `tang`, `loaiphong`, `toanha`, `succhua`, `MaBN`, `thoigianvao`, `thoigianra`) VALUES
(1, 1, 'VIP', 'Khu A', 100, 123456789, '2023-11-01 21:45:37', '2023-11-04 21:45:37');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quicktest`
--

CREATE TABLE `quicktest` (
  `MaXN` int(11) NOT NULL,
  `result` tinyint(1) DEFAULT NULL,
  `ct` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `respiratoryrate`
--

CREATE TABLE `respiratoryrate` (
  `MaXN` int(11) NOT NULL,
  `breaths` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `spo2`
--

CREATE TABLE `spo2` (
  `MaXN` int(11) NOT NULL,
  `percentage` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `staff`
--

CREATE TABLE `staff` (
  `MaNV` int(11) NOT NULL,
  `MaBN` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `test`
--

CREATE TABLE `test` (
  `MaXN` int(11) NOT NULL,
  `ThoigianXN` datetime DEFAULT NULL,
  `loaiXN` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongtinxnbandau`
--

CREATE TABLE `thongtinxnbandau` (
  `MaBN` int(11) NOT NULL,
  `ThongtinXNbandau` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thuoc`
--

CREATE TABLE `thuoc` (
  `MaThuoc` int(11) NOT NULL,
  `TenThuoc` varchar(255) DEFAULT NULL,
  `TacDung` varchar(255) DEFAULT NULL,
  `Gia` int(11) DEFAULT NULL,
  `HSD` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trieuchung`
--

CREATE TABLE `trieuchung` (
  `MaBN` int(11) NOT NULL,
  `trieuchung` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `trieuchung`
--

INSERT INTO `trieuchung` (`MaBN`, `trieuchung`) VALUES
(123456789, 'Sắp đi về nhà');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '1234');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `benhly`
--
ALTER TABLE `benhly`
  ADD PRIMARY KEY (`MaBN`);

--
-- Chỉ mục cho bảng `benhnhan`
--
ALTER TABLE `benhnhan`
  ADD PRIMARY KEY (`MaBN`,`SoCMND`),
  ADD KEY `MaXN` (`MaXN`);

--
-- Chỉ mục cho bảng `dieutri`
--
ALTER TABLE `dieutri`
  ADD PRIMARY KEY (`MaNV`,`MaThuoc`,`MaBN`),
  ADD KEY `MaBN` (`MaBN`),
  ADD KEY `MaThuoc` (`MaThuoc`);

--
-- Chỉ mục cho bảng `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`MaNV`);

--
-- Chỉ mục cho bảng `nurse`
--
ALTER TABLE `nurse`
  ADD PRIMARY KEY (`MaNV`),
  ADD KEY `MaBN` (`MaBN`);

--
-- Chỉ mục cho bảng `pcrtest`
--
ALTER TABLE `pcrtest`
  ADD PRIMARY KEY (`MaXN`);

--
-- Chỉ mục cho bảng `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`MaNV`);

--
-- Chỉ mục cho bảng `phong`
--
ALTER TABLE `phong`
  ADD PRIMARY KEY (`MaPhong`,`MaBN`),
  ADD KEY `MaBN` (`MaBN`);

--
-- Chỉ mục cho bảng `quicktest`
--
ALTER TABLE `quicktest`
  ADD PRIMARY KEY (`MaXN`);

--
-- Chỉ mục cho bảng `respiratoryrate`
--
ALTER TABLE `respiratoryrate`
  ADD PRIMARY KEY (`MaXN`);

--
-- Chỉ mục cho bảng `spo2`
--
ALTER TABLE `spo2`
  ADD PRIMARY KEY (`MaXN`);

--
-- Chỉ mục cho bảng `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`MaNV`),
  ADD KEY `MaBN` (`MaBN`);

--
-- Chỉ mục cho bảng `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`MaXN`);

--
-- Chỉ mục cho bảng `thongtinxnbandau`
--
ALTER TABLE `thongtinxnbandau`
  ADD PRIMARY KEY (`MaBN`);

--
-- Chỉ mục cho bảng `thuoc`
--
ALTER TABLE `thuoc`
  ADD PRIMARY KEY (`MaThuoc`);

--
-- Chỉ mục cho bảng `trieuchung`
--
ALTER TABLE `trieuchung`
  ADD PRIMARY KEY (`MaBN`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `benhly`
--
ALTER TABLE `benhly`
  ADD CONSTRAINT `benhly_ibfk_1` FOREIGN KEY (`MaBN`) REFERENCES `benhnhan` (`MaBN`);

--
-- Các ràng buộc cho bảng `benhnhan`
--
ALTER TABLE `benhnhan`
  ADD CONSTRAINT `benhnhan_ibfk_1` FOREIGN KEY (`MaXN`) REFERENCES `test` (`MaXN`);

--
-- Các ràng buộc cho bảng `dieutri`
--
ALTER TABLE `dieutri`
  ADD CONSTRAINT `dieutri_ibfk_1` FOREIGN KEY (`MaBN`) REFERENCES `benhnhan` (`MaBN`),
  ADD CONSTRAINT `dieutri_ibfk_2` FOREIGN KEY (`MaThuoc`) REFERENCES `thuoc` (`MaThuoc`),
  ADD CONSTRAINT `dieutri_ibfk_3` FOREIGN KEY (`MaNV`) REFERENCES `doctors` (`MaNV`);

--
-- Các ràng buộc cho bảng `nurse`
--
ALTER TABLE `nurse`
  ADD CONSTRAINT `nurse_ibfk_1` FOREIGN KEY (`MaBN`) REFERENCES `benhnhan` (`MaBN`);

--
-- Các ràng buộc cho bảng `pcrtest`
--
ALTER TABLE `pcrtest`
  ADD CONSTRAINT `pcrtest_ibfk_1` FOREIGN KEY (`MaXN`) REFERENCES `test` (`MaXN`);

--
-- Các ràng buộc cho bảng `people`
--
ALTER TABLE `people`
  ADD CONSTRAINT `people_ibfk_1` FOREIGN KEY (`MaNV`) REFERENCES `doctors` (`MaNV`),
  ADD CONSTRAINT `people_ibfk_2` FOREIGN KEY (`MaNV`) REFERENCES `nurse` (`MaNV`),
  ADD CONSTRAINT `people_ibfk_3` FOREIGN KEY (`MaNV`) REFERENCES `staff` (`MaNV`);

--
-- Các ràng buộc cho bảng `phong`
--
ALTER TABLE `phong`
  ADD CONSTRAINT `phong_ibfk_1` FOREIGN KEY (`MaBN`) REFERENCES `benhnhan` (`MaBN`);

--
-- Các ràng buộc cho bảng `quicktest`
--
ALTER TABLE `quicktest`
  ADD CONSTRAINT `quicktest_ibfk_1` FOREIGN KEY (`MaXN`) REFERENCES `test` (`MaXN`);

--
-- Các ràng buộc cho bảng `respiratoryrate`
--
ALTER TABLE `respiratoryrate`
  ADD CONSTRAINT `respiratoryrate_ibfk_1` FOREIGN KEY (`MaXN`) REFERENCES `test` (`MaXN`);

--
-- Các ràng buộc cho bảng `spo2`
--
ALTER TABLE `spo2`
  ADD CONSTRAINT `spo2_ibfk_1` FOREIGN KEY (`MaXN`) REFERENCES `test` (`MaXN`);

--
-- Các ràng buộc cho bảng `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`MaBN`) REFERENCES `benhnhan` (`MaBN`);

--
-- Các ràng buộc cho bảng `thongtinxnbandau`
--
ALTER TABLE `thongtinxnbandau`
  ADD CONSTRAINT `thongtinxnbandau_ibfk_1` FOREIGN KEY (`MaBN`) REFERENCES `benhnhan` (`MaBN`);

--
-- Các ràng buộc cho bảng `trieuchung`
--
ALTER TABLE `trieuchung`
  ADD CONSTRAINT `trieuchung_ibfk_1` FOREIGN KEY (`MaBN`) REFERENCES `benhnhan` (`MaBN`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
