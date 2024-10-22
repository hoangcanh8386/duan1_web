-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 24, 2023 lúc 08:46 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `age`
--

CREATE TABLE `age` (
  `id` int(10) NOT NULL,
  `size` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(10) NOT NULL,
  `bill_name` varchar(255) NOT NULL,
  `bill_address` varchar(255) NOT NULL,
  `bill_tel` varchar(50) NOT NULL,
  `bill_email` varchar(100) NOT NULL,
  `bill_pttt` tinyint(1) NOT NULL COMMENT '1.thanh toán trực tiếp 2. chuyển khoản 3. thanh toán online',
  `ngaydathang` varchar(50) DEFAULT NULL,
  `total` int(10) NOT NULL DEFAULT 0,
  `bill_status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0.Đơn hàng mới 1.Đang xử lý 2.Đang giao hàng 3.Đã giao hàng',
  `receive_name` varchar(250) DEFAULT NULL,
  `receive_address` varchar(250) DEFAULT NULL,
  `receive_tel` varchar(250) DEFAULT NULL,
  `id_kh` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id`, `bill_name`, `bill_address`, `bill_tel`, `bill_email`, `bill_pttt`, `ngaydathang`, `total`, `bill_status`, `receive_name`, `receive_address`, `receive_tel`, `id_kh`) VALUES
(1, '', 'Tổ 1 ngõ 8 phường Phú Đô', '0789257816', 'phamquyet3377@gmail.com', 0, '05:01:23pm 09/02/23', 0, 0, NULL, NULL, NULL, 0),
(2, '', 'Tổ 1 ngõ 8 phường Phú Đô', '0789257816', 'phamquyet3377@gmail.com', 0, '05:01:31pm 09/02/23', 0, 0, NULL, NULL, NULL, 0),
(3, '', 'Tổ 1 ngõ 8 phường Phú Đô', '0789257816', 'phamquyet3377@gmail.com', 0, '10:37:24am 10/02/23', 0, 0, NULL, NULL, NULL, 0),
(14, 'admin1', '82 Miếu Đầm,Mễ Trì,Từ Liêm,Hà Nội', '0789257816', 'adminne123@gmail.com', 1, '2023-11-24', 0, 0, NULL, NULL, NULL, 2),
(15, 'admin1', '82 Miếu Đầm,Mễ Trì,Từ Liêm,Hà Nội', '0789257816', 'adminne123@gmail.com', 1, '2023-11-24', 0, 0, NULL, NULL, NULL, 2),
(16, 'admin1', '82 Miếu Đầm,Mễ Trì,Từ Liêm,Hà Nội', '0789257816', 'adminne123@gmail.com', 1, '2023-11-24', 0, 0, NULL, NULL, NULL, 2),
(17, 'admin1', '82 Miếu Đầm,Mễ Trì,Từ Liêm,Hà Nội', '0789257816', 'adminne123@gmail.com', 1, '2023-11-24', 0, 0, NULL, NULL, NULL, 2),
(18, 'admin1', '82 Miếu Đầm,Mễ Trì,Từ Liêm,Hà Nội', '0789257816', 'adminne123@gmail.com', 1, '2023-11-24', 0, 0, NULL, NULL, NULL, 2),
(19, 'admin1', '82 Miếu Đầm,Mễ Trì,Từ Liêm,Hà Nội', '0789257816', 'adminne123@gmail.com', 1, '2023-11-24', 0, 0, NULL, NULL, NULL, 2),
(20, 'admin1', '82 Miếu Đầm,Mễ Trì,Từ Liêm,Hà Nội', '0789257816', 'adminne123@gmail.com', 1, '2023-11-24', 0, 0, NULL, NULL, NULL, 2),
(21, 'admin1', '82 Miếu Đầm,Mễ Trì,Từ Liêm,Hà Nội', '0789257816', 'adminne123@gmail.com', 1, '2023-11-24', 264282, 0, NULL, NULL, NULL, 2),
(22, 'admin1', '82 Miếu Đầm,Mễ Trì,Từ Liêm,Hà Nội', '0789257816', 'adminne123@gmail.com', 1, '2023-11-24', 264282, 0, NULL, NULL, NULL, 2),
(23, 'admin1', '82 Miếu Đầm,Mễ Trì,Từ Liêm,Hà Nội', '0789257816', 'adminne123@gmail.com', 1, '2023-11-24', 132000, 0, NULL, NULL, NULL, 2),
(24, 'admin1', '82 Miếu Đầm,Mễ Trì,Từ Liêm,Hà Nội', '0789257816', 'adminne123@gmail.com', 1, '2023-11-24', 0, 0, NULL, NULL, NULL, 2),
(25, 'admin1', '82 Miếu Đầm,Mễ Trì,Từ Liêm,Hà Nội', '0789257816', 'adminne123@gmail.com', 1, '2023-11-24', 0, 0, NULL, NULL, NULL, 2),
(26, 'admin1', '82 Miếu Đầm,Mễ Trì,Từ Liêm,Hà Nội', '0789257816', 'adminne123@gmail.com', 1, '2023-11-24', 0, 0, NULL, NULL, NULL, 2),
(27, 'admin1', '82 Miếu Đầm,Mễ Trì,Từ Liêm,Hà Nội', '0789257816', 'adminne123@gmail.com', 1, '2023-11-24', 0, 0, NULL, NULL, NULL, 2),
(28, 'admin1', '82 Miếu Đầm,Mễ Trì,Từ Liêm,Hà Nội', '0789257816', 'adminne123@gmail.com', 1, '2023-11-24', 0, 0, NULL, NULL, NULL, 2),
(29, 'admin1', '82 Miếu Đầm,Mễ Trì,Từ Liêm,Hà Nội', '0789257816', 'adminne123@gmail.com', 1, '2023-11-24', 132000, 0, NULL, NULL, NULL, 2),
(30, 'admin1', '82 Miếu Đầm,Mễ Trì,Từ Liêm,Hà Nội', '0789257816', 'adminne123@gmail.com', 1, '2023-11-24', 264141, 0, NULL, NULL, NULL, 2),
(31, 'admin1', '82 Miếu Đầm,Mễ Trì,Từ Liêm,Hà Nội', '0789257816', 'adminne123@gmail.com', 1, '2023-11-24', 0, 0, NULL, NULL, NULL, 2),
(32, 'admin1', '82 Miếu Đầm,Mễ Trì,Từ Liêm,Hà Nội', '0789257816', 'adminne123@gmail.com', 1, '2023-11-24', 132000, 0, NULL, NULL, NULL, 2),
(33, 'admin1', '82 Miếu Đầm,Mễ Trì,Từ Liêm,Hà Nội', '0789257816', 'adminne123@gmail.com', 1, '2023-11-24', 396000, 0, NULL, NULL, NULL, 2),
(34, 'admin1', '82 Miếu Đầm,Mễ Trì,Từ Liêm,Hà Nội', '0789257816', 'adminne123@gmail.com', 1, '2023-11-24', 0, 0, NULL, NULL, NULL, 2),
(35, 'admin1', '82 Miếu Đầm,Mễ Trì,Từ Liêm,Hà Nội', '0789257816', 'adminne123@gmail.com', 1, '2023-11-24', 0, 0, NULL, NULL, NULL, 2),
(36, 'admin1', '82 Miếu Đầm,Mễ Trì,Từ Liêm,Hà Nội', '0789257816', 'adminne123@gmail.com', 1, '2023-11-24', 132000, 0, NULL, NULL, NULL, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(10) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idpro` int(10) NOT NULL,
  `ngaybinhluan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id`, `noidung`, `iduser`, `idpro`, `ngaybinhluan`) VALUES
(1, 'ddd', 0, 11, '11:46:06pm 06/02/2023'),
(2, 'ddd', 0, 11, '11:46:45pm 06/02/23');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idpro` int(10) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` int(255) NOT NULL DEFAULT 0,
  `soluong` int(3) NOT NULL,
  `thanhtien` int(10) NOT NULL,
  `idbill` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `iduser`, `idpro`, `img`, `name`, `price`, `soluong`, `thanhtien`, `idbill`) VALUES
(1, 1, 2, NULL, 'Quyết', 234444, 2, 20000, 1234),
(2, 0, 14, 'he1.jpg', 'Áo len bông gile cài giữa BaByMaMaHN23D (Hồng)', 132000, 1, 0, 14),
(3, 0, 14, 'he1.jpg', 'Áo len bông gile cài giữa BaByMaMaHN23D (Hồng)', 132000, 1, 0, 14),
(4, 0, 15, 'xuan1.jpg', 'Body dài tay sơ sinh BaByMaMa kẻ tăm ND23T (Hồng)', 141, 2, 0, 14),
(5, 2, 14, 'he1.jpg', 'Áo len bông gile cài giữa BaByMaMaHN23D (Hồng)', 132000, 1, 0, 18),
(6, 2, 15, 'xuan1.jpg', 'Body dài tay sơ sinh BaByMaMa kẻ tăm ND23T (Hồng)', 141, 2, 0, 18),
(7, 2, 14, 'he1.jpg', 'Áo len bông gile cài giữa BaByMaMaHN23D (Hồng)', 132000, 1, 0, 19),
(8, 2, 15, 'xuan1.jpg', 'Body dài tay sơ sinh BaByMaMa kẻ tăm ND23T (Hồng)', 141, 1, 0, 19),
(9, 2, 14, 'he1.jpg', 'Áo len bông gile cài giữa BaByMaMaHN23D (Hồng)', 132000, 2, 0, 22),
(10, 2, 15, 'xuan1.jpg', 'Body dài tay sơ sinh BaByMaMa kẻ tăm ND23T (Hồng)', 141, 2, 264000, 22),
(11, 2, 14, 'he1.jpg', 'Áo len bông gile cài giữa BaByMaMaHN23D (Hồng)', 132000, 1, 0, 23),
(12, 2, 14, 'he1.jpg', 'Áo len bông gile cài giữa BaByMaMaHN23D (Hồng)', 132000, 1, 0, 29),
(13, 2, 14, 'he1.jpg', 'Áo len bông gile cài giữa BaByMaMaHN23D (Hồng)', 132000, 2, 0, 30),
(14, 2, 15, 'xuan1.jpg', 'Body dài tay sơ sinh BaByMaMa kẻ tăm ND23T (Hồng)', 141, 1, 264000, 30),
(15, 2, 14, 'he1.jpg', 'Áo len bông gile cài giữa BaByMaMaHN23D (Hồng)', 132000, 1, 0, 32),
(16, 2, 14, 'he1.jpg', 'Áo len bông gile cài giữa BaByMaMaHN23D (Hồng)', 132000, 3, 0, 33),
(17, 2, 14, 'he1.jpg', 'Áo len bông gile cài giữa BaByMaMaHN23D (Hồng)', 132000, 1, 0, 36);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`, `img`) VALUES
(31, 'Quần áo mùa đông', 'dong-removebg-preview.png'),
(35, 'Quần áo mùa hè', 'he-removebg-preview.png'),
(36, 'Quần áo mùa thu', 'thu-removebg-preview.png'),
(37, 'Quần áo mùa xuân', 'xuan-removebg-preview.png'),
(38, 'Hàng Mới ', 'logodm-removebg-preview.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `mota` text DEFAULT NULL,
  `luotxem` int(11) DEFAULT 0,
  `iddm` int(11) NOT NULL,
  `giam_gia` int(10) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `price`, `img`, `mota`, `luotxem`, `iddm`, `giam_gia`) VALUES
(14, 'Áo len bông gile cài giữa BaByMaMaHN23D (Hồng)', 132000, 'he1.jpg', '', 0, 37, 0),
(15, 'Body dài tay sơ sinh BaByMaMa kẻ tăm ND23T (Hồng)', 141, 'xuan1.jpg', '', 0, 38, 0),
(16, 'Body dài tay sơ sinh BaByMaMa kẻ tăm ND23T (Hồng)', 141, 'xuan1.jpg', '', 0, 38, 0),
(17, 'Bộ quần áo dài tay cổ 3 phân kẻ tăm BaBy MaMa ND23T (Hồng nhạt)', 179, 'thu1.jpg', 'sản phẩm ưu đãi', 0, 36, 0),
(18, 'Áo len dài tay bé trai BaByMaMa thêu sư tử HN23D (Xanh)', 147, 'dong1.jpg', 'lựa chọn số 1 của mọi người', 0, 31, 0),
(19, 'Áo len bông gile cài giữa BaByMaMa HN23D (Trắng)', 156, 'he2.jpg', 'giá ưu đãi', 0, 38, 0),
(20, 'Bộ sơ sinh dài cài lệch Yukata BaByMaMa kẻ tăm ND23T (Trắng)', 178, 'hangmoi1.jpg', 'giá chất lượng', 0, 38, 0),
(22, 'ttesst', 1431, 'thu1.jpg', '', 0, 38, 0),
(23, 'Body dài tay sơ sinh BaByMaMa kẻ tăm ND23T (Xanh kẻ)', 187, 'body-dai-tay-so-sinh-kidsplaza-ke-tam-nd23t-xanh-1.jpg', 'giá ưu đãi', 0, 35, 0),
(26, 'lon', 20000, 'GA.jpg', 'rgdfgdfg', 0, 38, 20);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(10) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `pass`, `email`, `address`, `tel`, `role`) VALUES
(1, 'user1', '1234', 'user1@gmail.com', NULL, NULL, 0),
(2, 'admin1', '12345', 'adminne123@gmail.com', '82 Miếu Đầm,Mễ Trì,Từ Liêm,Hà Nội', '0789257816', 1),
(6, 'admin', '123', 'huy@gmail.com', NULL, NULL, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `age`
--
ALTER TABLE `age`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_bill` (`idbill`) USING BTREE,
  ADD KEY `cart_sanpham` (`idpro`) USING BTREE,
  ADD KEY `cart_user` (`iduser`) USING BTREE;

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_sanpham_danhmuc` (`iddm`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `age`
--
ALTER TABLE `age`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `lk_sanpham_danhmuc` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
