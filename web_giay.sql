-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 05, 2020 lúc 08:34 PM
-- Phiên bản máy phục vụ: 10.4.8-MariaDB
-- Phiên bản PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web_giay`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id_danhmuc` int(10) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `anhdaidien` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id_danhmuc`, `ten`, `mota`, `anhdaidien`) VALUES
(1, 'Classic', 'Giày classic', 'https://via.placeholder.com/70'),
(2, 'Sunbaked', 'Giày Sunbaked', 'https://via.placeholder.com/70'),
(3, 'One star', 'Giày One star', 'https://via.placeholder.com/70');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `id_hoadon` int(10) NOT NULL,
  `listidsanpham` varchar(255) NOT NULL,
  `listsoluongsanpham` varchar(500) NOT NULL,
  `tongtien` varchar(255) NOT NULL,
  `idthanhvien` int(10) NOT NULL,
  `ngaygiaohang` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tinhtrang` tinyint(1) NOT NULL DEFAULT 0,
  `hoten` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sodienthoai` varchar(15) NOT NULL,
  `diachi` text NOT NULL,
  `listmausac` varchar(255) NOT NULL,
  `phuongthuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`id_hoadon`, `listidsanpham`, `listsoluongsanpham`, `tongtien`, `idthanhvien`, `ngaygiaohang`, `tinhtrang`, `hoten`, `email`, `sodienthoai`, `diachi`, `listmausac`, `phuongthuc`) VALUES
(3, '8|4', '2|1', '100', 1, '2019-10-18 07:29:35', 1, 'Nguyễn Tuấn Duy', 'ntduy.ttcb@gmail.com', '114', 'Tĩnh Túc - Cao Bằng ', 'trong suốt|trắng', 0),
(5, '37|4', '1|1', '503', 1, '2019-10-23 07:31:23', 1, 'Nguyễn Tuấn Duy', 'ntduy.ttcb@gmail.com', '113', 'Tĩnh Túc - Cao Bằng', 'đen|trắng', 0),
(8, '12', '1', '100', 6, '2019-10-29 14:04:05', 1, 'Lô Khánh Hòa', 'kiara96.shippo@gmail.com', '01642629725', 'Trường đại học công nghệ thông tin & truyền thông thái nguyên, Đề Thám - Cao Bằng', 'đen / trắng', 0),
(9, '12', '1', '100', 6, '2019-10-29 14:04:03', 1, 'Lô Khánh Hòa', 'kiara96.shippo@gmail.com', '01642629725', 'Trường đại học công nghệ thông tin & truyền thông thái nguyên, Đề Thám - Cao Bằng', 'đen / trắng', 0),
(10, '12', '1', '100', 6, '2020-03-04 06:36:26', 1, 'Lô Khánh Hòa', 'kiara96.shippo@gmail.com', '01642629725', 'Trường đại học công nghệ thông tin & truyền thông thái nguyên, Đề Thám - Cao Bằng', 'đen / trắng', 0),
(11, '12|4', '1|1', '149', 6, '2019-10-28 17:00:00', 0, 'Lô Khánh Hòa', 'kiara96.shippo@gmail.com', '01642629725', 'Trường đại học công nghệ thông tin & truyền thông thái nguyên, Đề Thám - Cao Bằng', 'đen / trắng|trắng', 0),
(12, '12|4', '1|1', '149', 6, '2019-10-28 17:00:00', 0, 'Lô Khánh Hòa', 'kiara96.shippo@gmail.com', '01642629725', 'Trường đại học công nghệ thông tin & truyền thông thái nguyên, Đề Thám - Cao Bằng', 'đen / trắng|trắng', 0),
(13, '12|4', '1|1', '149', 6, '2019-10-28 17:00:00', 0, 'Lô Khánh Hòa', 'kiara96.shippo@gmail.com', '01642629725', 'Trường đại học công nghệ thông tin & truyền thông thái nguyên, Đề Thám - Cao Bằng', 'đen / trắng|trắng', 0),
(14, '12|4|11', '1|1|1', '269', 6, '2019-10-28 17:00:00', 0, 'Lô Khánh Hòa', 'kiara96.shippo@gmail.com', '01642629725', 'Trường đại học công nghệ thông tin & truyền thông thái nguyên, Đề Thám - Cao Bằng', 'đen / trắng|trắng|trắng', 0),
(16, '6', '1', '49.000', 6, '2019-10-28 17:00:00', 0, 'Lô Khánh Hòa', 'kiara96.shippo@gmail.com', '01642629725', 'Trường đại học công nghệ thông tin & truyền thông thái nguyên, Đề Thám - Cao Bằng', 'trong suốt', 0),
(21, '2', '1', '119.000', 1, '2019-10-28 17:00:00', 0, 'Nguyễn Tuấn Duy', 'ntduy.ttcb@gmail.com', '113', 'Tĩnh Túc - Cao Bằng', 'đỏ|đen|trắng', 0),
(22, '4|12', '1|1', '149', 1, '2020-03-02 17:00:00', 0, 'Lăng Thị Thảo', 'thaonguyen@gmail.com', '113', 'Tĩnh Túc - Cao Bằng', 'trắng|xanh', 0),
(32, '20|4', '1|2', '223', 1, '2020-03-05 16:30:40', 1, 'Lăng Thị Thảo3', 'thaonguyen@gmail.com', '113', 'Tĩnh Túc - Cao Bằng', 'đen|trắng', 0),
(33, '20|4', '1|2', '223', 1, '2020-03-04 17:00:00', 0, 'Lăng Thị Thảo', 'thaonguyen@gmail.com', '113', 'Tĩnh Túc - Cao Bằng', 'đen|trắng', 0),
(34, '20|4', '1|2', '223', 1, '2020-03-04 17:00:00', 0, 'Lăng Thị Thảo', 'thaonguyen@gmail.com', '113', 'Tĩnh Túc - Cao Bằng', 'đen|trắng', 0),
(35, '20', '1', '125.000', 1, '2020-03-04 17:00:00', 0, 'Lăng Thị Thảo', 'thaonguyen@gmail.com', '113', 'Tĩnh Túc - Cao Bằng', 'đen', 0),
(36, '4', '1', '49.000', 1, '2020-03-04 17:00:00', 0, 'Lăng Hoàng Linh', 'thaonguyen@gmail.com', '113', 'Tĩnh Túc - Cao Bằng', 'trắng', 0),
(37, '22', '1', '50.000', 1, '2020-03-04 17:00:00', 0, 'Lăng Thị Thảo', 'thaonguyen@gmail.com', '113', 'Tĩnh Túc - Cao Bằng', 'xanh', 0),
(38, '6', '1', '49.000', 1, '2020-03-05 19:17:59', 1, 'Lăng Thị Thảo', 'thaonguyen@gmail.com', '113', 'Tĩnh Túc - Cao Bằng', 'trong suốt', 0),
(39, '11', '6', '720', 1, '2020-03-05 19:33:02', 1, 'Lăng Thị Thảo', 'thaonguyen@gmail.com', '113', 'Tĩnh Túc - Cao Bằng', 'trắng', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sanpham` int(10) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `gia` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `anhdaidien` varchar(255) NOT NULL,
  `mausac` varchar(255) NOT NULL,
  `soluong` varchar(255) NOT NULL,
  `iddanhmuc` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id_sanpham`, `ten`, `gia`, `mota`, `anhdaidien`, `mausac`, `soluong`, `iddanhmuc`) VALUES
(1, 'Chuck Taylor Classic full đen cổ thấp', '119000', 'Giày full màu đen', 'http://mauweb.monamedia.net/converse/wp-content/uploads/2019/05/women-classic-1-600x384.jpg', 'đen', '10', 1),
(2, 'Chuck Taylor Classic đỏ cổ thấp', '119.000', 'Chuck Taylor Classic đỏ cổ thấp', 'http://mauweb.monamedia.net/converse/wp-content/uploads/2019/05/women-classic-2-600x384.jpg', 'đỏ', '8', 1),
(3, 'Chuck Taylor Classic xanh cổ thấp', '99.00', 'Chuck Taylor Classic xanh cổ thấp', 'http://mauweb.monamedia.net/converse/wp-content/uploads/2019/05/women-classic-3-600x384.jpg', 'xanh', '50', 1),
(4, 'Chuck Taylor Classic đen cổ thấp', '49.000', 'Chuck Taylor Classic đen cổ thấp', 'http://mauweb.monamedia.net/converse/wp-content/uploads/2019/05/women-classic-4-600x384.jpg', 'trắng', '5', 1),
(5, 'One Star Sunbaked trắng', '79.000', 'One Star Sunbaked trắng', 'http://mauweb.monamedia.net/converse/wp-content/uploads/2019/05/women-sunbaked-1-600x384.jpg', 'trắng', '20', 2),
(6, 'One Star Sunbaked cam', '49.000', 'One Star Sunbaked cam', 'http://mauweb.monamedia.net/converse/wp-content/uploads/2019/05/women-sunbaked-2-600x384.jpg', 'trong suốt', '10', 2),
(7, 'One Star Sunbaked vàng', '149', 'One Star Sunbaked vàng', 'http://mauweb.monamedia.net/converse/wp-content/uploads/2019/05/women-sunbaked-4-600x384.jpg', 'vàng', '3', 2),
(8, 'One Star Sunbaked đen', '50.000', 'One Star Sunbaked đen', 'http://mauweb.monamedia.net/converse/wp-content/uploads/2019/05/women-sunbaked-3-600x384.jpg', 'trong suốt', '5', 2),
(10, 'One Star Love the Progress đen', '69.000', 'One Star Love the Progress đen', 'http://mauweb.monamedia.net/converse/wp-content/uploads/2019/05/women-onestar-1-600x384.jpg', 'đen', '30', 3),
(11, 'One Star Love the Progress đỏ', '120.000', 'One Star Love the Progress đỏ', 'http://mauweb.monamedia.net/converse/wp-content/uploads/2019/05/women-onestar-2-600x384.jpg', 'trắng', '50', 3),
(12, 'One Star Love the Progress xanh', '100.000', 'One Star Love the Progress xanh', 'http://mauweb.monamedia.net/converse/wp-content/uploads/2019/05/women-onestar-3-600x384.jpg', 'xanh', '11', 3),
(13, 'One Star Love the Progress trắng', '90.000', 'One Star Love the Progress trắng', 'http://mauweb.monamedia.net/converse/wp-content/uploads/2019/05/women-onestar-4-600x384.jpg', 'trắng', '90', 3),
(20, 'Chuck Taylor Classic đen cổ cao', '125.000', 'Chuck Taylor Classic đen cổ cao', 'http://mauweb.monamedia.net/converse/wp-content/uploads/2019/05/women-classic-8-600x384.jpg', 'đen', '90', 1),
(21, 'Chuck Taylor Classic đỏ cổ cao', '300.000', 'Chuck Taylor Classic đỏ cổ cao', 'http://mauweb.monamedia.net/converse/wp-content/uploads/2019/05/women-classic-6-600x384.jpg', 'lính', '1000', 1),
(22, 'Chuck Taylor Classic xanh cổ cao', '50.000', 'Chuck Taylor Classic xanh cổ cao', 'http://mauweb.monamedia.net/converse/wp-content/uploads/2019/05/women-classic-7-600x384.jpg', 'xanh', '3', 1),
(23, 'Chuck Taylor Classic full đen cổ cao', '110.000', 'Chuck Taylor Classic full đen cổ cao.', 'http://mauweb.monamedia.net/converse/wp-content/uploads/2019/05/women-classic-5-600x384.jpg', 'đen', '123', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhvien`
--

CREATE TABLE `thanhvien` (
  `id_thanhvien` int(10) NOT NULL,
  `tendangnhap` varchar(255) NOT NULL,
  `matkhau` varchar(255) NOT NULL,
  `hoten` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sodienthoai` varchar(15) NOT NULL,
  `diachi` text NOT NULL,
  `level` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `thanhvien`
--

INSERT INTO `thanhvien` (`id_thanhvien`, `tendangnhap`, `matkhau`, `hoten`, `email`, `sodienthoai`, `diachi`, `level`) VALUES
(1, 'admin', '123456', 'Lăng Thị Thảo', 'thaonguyen@gmail.com', '113', 'Tĩnh Túc - Cao Bằng', 1),
(2, 'tuananh', '123456', 'Trần Bình Minh', 'hoanghon@gmail.com', '0987192222', 'Cà Mau', 0),
(4, '1', '', 'Ngô Bá Khá', 'khabanh@gmail.com', '115', 'Berlin', 0),
(5, '15', '', 'Trần Thanh Tâm', 'tamtran@gmail.com', '22508883', 'Thái Nguyên', 0),
(6, 'smile', '123456', 'Lô Duyên', 'kiara96@gmail.com', '01642629333', 'ictu', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id_hoadon`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sanpham`);

--
-- Chỉ mục cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD PRIMARY KEY (`id_thanhvien`),
  ADD UNIQUE KEY `tendangnhap` (`tendangnhap`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id_danhmuc` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id_hoadon` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sanpham` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  MODIFY `id_thanhvien` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
