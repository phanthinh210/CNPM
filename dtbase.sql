-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th10 27, 2021 lúc 03:40 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `btlcnp`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `mahang` int(20) NOT NULL,
  `tenhang` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `giatien` int(20) NOT NULL,
  `slogan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `maloai` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sogr1sp` int(5) NOT NULL,
  `chitiet` text COLLATE utf8_unicode_ci NOT NULL,
  `hinhanh` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`mahang`, `tenhang`, `alias`, `giatien`, `slogan`, `maloai`, `sogr1sp`, `chitiet`, `hinhanh`) VALUES
(143, 'Ná»“i cÆ¡m Ä‘iá»‡n Subeer', '', 59000, ' Tinh chất trái cây và dưỡng chất giúp đôi môi trở nên mềm mại, đàn hồi hơn. ', '5', 5, 'Lï¿½ng n?i b?ng h?p kim ch?ng dï¿½nh mï¿½u vï¿½ng ??ng dï¿½y 1.5mm ph? l?p ch?ng dï¿½nh cao c?p, giï¿½p d?n nhi?t hi?u qu? vï¿½ gi? nhi?t t?t, ?em l?i cho ng??i dï¿½ng h??ng v? c?m n?u th?m ngon, m?m d?o, khï¿½ng b? chï¿½y c?m nh? lï¿½ng n?i m?ng thï¿½ng th??ng vï¿½ d? dï¿½ng v? sinh sau khi s? d?ng.', 'anh1.jfif'),
(144, 'Đồng hồ điện tử ANENG A830L', '', 99000, ' Đồng hồ với chất liệu siêu bền, siêu nhẹ, sẵn sàng bên bạn mọi lúc mọi nơi  ', '1', 2, 'Model: A830L của hãng : ANENG', 'donghododien.jpg'),
(145, 'Công tắc cảm ứng đèn LED 12VDC', '', 120000, ' Cảm ứng đèn LED thật đơn giản   ', '6', 5, '– Điện áp hoạt động: 12VDC – Dòng điện đầu ra: 4A – Dòng điện tĩnh: < 3mA – Tuổi thọ: > 10000h – Lỗ lắp đặt: 17mm – Chiều dài dây: 20cm – Jack kết nối: 5.5 x 2.1mm', 'congtaccamung.jpg'),
(146, 'Nồi chiên không dầu Joyoung KL', '', 1795000, ' Nói không với dầu mỡ   ', '5', 5, 'Nồi:1300W3.5 lít', 'noichienkhongdau.jpg'),
(147, 'Nồi cơm niêu điện Mishio 1.8 l', '', 649000, ' Nồi cơm điện – nấu cơm ngon nhât thế giới', '5', 5, 'Lòng nồi bằng hợp kim chống dính màu vàng đồng dày 1.5mm phủ lớp chống dính cao cấp, giúp dẫn nhiệt hiệu quả và giữ nhiệt tốt, đem lại cho người dùng hương vị cơm nấu thơm ngon, mềm dẻo, không bị cháy cơm như lòng nồi mỏng thông thường và dễ dàng vệ sinh sau khi sử dụng.', 'noicomdien.jpg'),
(148, 'Quạt điện AC DC inverter ', '', 2450000, ' Quạt điện – Quạt mát nhất thế giới', '3', 5, 'Quạt công suất power:18w Voltage:12v frequecy: 50-60 hz Tấm pin năng lượng  35x63cm ( P=30w) Voltage:18v Dung lương pin của quạt 12.000mah 3 mức điều chỉnh tốc độ  1Bộ dây Sạc điện 220v 1quạt rời + kèm pin tích trữ', 'quatdung.jpg'),
(149, 'QLED Tivi 4K Samsung 65Q70A 65', '', 23700000, 'Độ phân giải cao sẵn sàng đưa bạn đến những trải nghiệm tuyệt vời. ', '2', 30, 'Thông số kỹ thuật:  - Độ Phân Giải: Ultra HD 4K - Tần Số Quét: 60 Hz - Kích Thước (Khoảng Cách Xem): 44 - 55\" (3 - 4 mét) - Tổng Công Suất Loa: 20W - Số Lượng Loa: 	2 - Hệ Điều Hành: Tizen OS - Trình Duyệt Web: Có - Screen Mirroring: Có - Kết nối bàn phím, chuột: Có - Tính Năng Nổi Bật: One Remote, Tìm Kiếm Giọng Nói - Ngôn Ngữ Hiển Thị: Đa Ngôn Ngữ - Model bộ điều khiển từ xa: TM2180E', 'anh2.jfif'),
(150, 'T? l?nh Family Hub Samsung', '', 22000000, 'Bảo quản thức ăn – Giữ gìn sức khỏe người tiêu dùng. ', '4', 400, 'Model:	RM-522VBW Mï¿½u s?c:	?en m? Nhï¿½ s?n xu?t:	Casper Xu?t x?:	Thï¿½i Lan N?m ra m?t :	2021 Th?i gian b?o hï¿½nh:	24 thï¿½ng', 'anh4.jfif'),
(151, 'Tủ lạnh Casper Inverter', '', 4000000, ' Gìn giữ hương vị tuyệt vời của nguyên liệu, bảo quản sức khỏe gia đình bạn', '4', 10, 'Model:	RM-522VBW Màu sắc:	Đen mờ Nhà sản xuất:	Casper Xuất xứ:	Thái Lan Năm ra mắt :	2021 Thời gian bảo hành:	24 tháng', 'anh4.jfif'),
(152, 'Quạt tản nhiệt Memo', '', 400000, ' Làm nóng nhanh 5 giây - Không khô da - Không đốt oxy', '3', 5, '– Mẫu sản phẩm: DL01  – Điện áp/cường độ dòng điện đầu vào: 5V  – Cường độ dòng điện đầu vào: 1.5A-2A  – Tốc độ: 7500', 'anh5.jfif'),
(153, 'Đồng Hồ Nam PAGINI', '', 150000, ' Nắm giữ thời gian – trải nghiệm cuộc số ', '1', 10, '◈ Thông Tin Đồng Hồ Nam PAGINI PA9966  ✔ Kiểu dáng doanh nhân , mạnh mẽ, năng động, lịch lãm.  ✔ Kính tráng sapphire chống trầy xước cực tốt  ✔ Vỏ máy bằng thép 316L sáng bóng,', 'anh7.jfif'),
(154, 'Đồng hồ nam Geneva cao cấp', '', 120000, 'Bền đẹp với thời gian – luôn luôn bên bạn. ', '1', 12, '- Thương hiệu: GENEVA - Kiểu máy: Quartz( máy Nhật) - Dành cho: Nam - Kích thước bề mặt: Đường kính 40.5 mm - Độ dày mặt: 8mm - Xuất xứ: Japan - Độ dày dây đeo: 2mm', 'anh6.jfif'),
(156, 'Đồng hồ nhựa', '', 100000, ' Đồng hồ với chất liệu siêu bền, siêu nhẹ, sẵn sàng bên bạn mọi lúc mọi nơi  ', '1', 2, 'Model: A830L của hãng : ANENG', 'anh8.jfif'),
(157, 'Tủ lạnh Suboi', '', 1100000, ' Chất liệu siêu bền, siêu nhẹ, sẵn sàng bên bạn mọi lúc mọi nơi  ', '4', 2, 'Model: A830L của hãng : ANENG', 'anh9.jfif'),
(158, 'Quạt điện cực mạnh', '', 240000, ' Cchất liệu siêu bền, siêu nhẹ, sẵn sàng bên bạn mọi lúc mọi nơi  ', '3', 2, 'Model: A830L của hãng : ANENG', 'anh10.jfif'),
(159, 'Đồng hồ điện tử Momen', '', 960000, ' Đồng hồ với chất liệu siêu bền, siêu nhẹ, sẵn sàng bên bạn mọi lúc mọi nơi  ', '1', 2, 'Model: A830L của hãng : ANENG', 'anh11.jfif'),
(160, 'Tivi samsung', '', 1440000, ' Đồng hồ với chất liệu siêu bền, siêu nhẹ, sẵn sàng bên bạn mọi lúc mọi nơi  ', '2', 2, 'Model: A830L của hãng : ANENG', 'anh12.jfif'),
(161, 'Đèn led siêu sáng', '', 630000, ' Đồng hồ với chất liệu siêu bền, siêu nhẹ, sẵn sàng bên bạn mọi lúc mọi nơi  ', '6', 2, 'Model: A830L của hãng : ANENG', 'anh13.jfif'),
(162, 'Nồi cơm mini', '', 510000, ' Đồng hồ với chất liệu siêu bền, siêu nhẹ, sẵn sàng bên bạn mọi lúc mọi nơi  ', '5', 2, 'Model: A830L của hãng : ANENG', 'anh14.jfif'),
(163, 'Đồng hồ Cúc cu', '', 700000, ' Đồng hồ với chất liệu siêu bền, siêu nhẹ, sẵn sàng bên bạn mọi lúc mọi nơi  ', '1', 2, 'Model: A830L của hãng : ANENG', 'anh15.jfif'),
(164, 'Tủ lạnh nokia', '', 140000, ' Chất liệu siêu bền, siêu nhẹ, sẵn sàng bên bạn mọi lúc mọi nơi  ', '4', 2, 'Model: A830L của hãng : ANENG', 'anh16.jfif'),
(165, 'Quạt điện siêu bền', '', 860000, ' Cchất liệu siêu bền, siêu nhẹ, sẵn sàng bên bạn mọi lúc mọi nơi  ', '3', 2, 'Model: A830L của hãng : ANENG', 'anh17.jfif'),
(166, 'Đồng hồ chống gỉ', '', 530000, ' Đồng hồ với chất liệu siêu bền, siêu nhẹ, sẵn sàng bên bạn mọi lúc mọi nơi  ', '1', 2, 'Model: A830L của hãng : ANENG', 'anh18.jfif'),
(167, 'Tivi sony 3D', '', 150000, ' Đồng hồ với chất liệu siêu bền, siêu nhẹ, sẵn sàng bên bạn mọi lúc mọi nơi  ', '2', 2, 'Model: A830L của hãng : ANENG', 'anh19.jfif'),
(168, 'Đèn dầu mini', '', 880000, ' Đồng hồ với chất liệu siêu bền, siêu nhẹ, sẵn sàng bên bạn mọi lúc mọi nơi  ', '6', 2, 'Model: A830L của hãng : ANENG', 'anh20.jfif'),
(169, 'Nồi cơm nhập khẩu', '', 4900000, ' Đồng hồ với chất liệu siêu bền, siêu nhẹ, sẵn sàng bên bạn mọi lúc mọi nơi  ', '5', 2, 'Model: A830L của hãng : ANENG', 'anh21.jfif');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`mahang`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `mahang` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
