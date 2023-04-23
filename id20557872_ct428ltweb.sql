-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 23, 2023 at 09:52 AM
-- Server version: 10.5.16-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id20557872_ct428ltweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `IDTaikhoan` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `IDUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`IDTaikhoan`, `Username`, `Password`, `IDUser`) VALUES
(36, 'b21345678', '8442cdeed612af7d4f80dc1d2d71bdda', 29),
(37, 'B12345678', '25d55ad283aa400af464c76d713c07ad', 30),
(38, 'DuongHongDoan', '25f9e794323b453885f5181f1b624d0b', 31),
(39, 'DuongHongDoan1', '25f9e794323b453885f5181f1b624d0b', 32),
(40, 'sdsaas', '25d55ad283aa400af464c76d713c07ad', 33),
(41, 'DuongHongDoan3', '25f9e794323b453885f5181f1b624d0b', 33),
(42, 'HongDoan', '53c352cff737bbe5a95b9c4980e54524', 34),
(46, 'ngockhanhhhh', '25f9e794323b453885f5181f1b624d0b', 39);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `username`, `password`, `admin_status`) VALUES
(1, 'test', '81dc9bdb52d04dc20036dbd8313ed055', 1),
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id_danhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id_danhmuc`, `tendanhmuc`) VALUES
(1, 'Khuyến mãi'),
(2, 'Deco'),
(4, 'Album'),
(10, 'Lightstick'),
(11, 'Card bo góc'),
(12, 'Goods Kpop');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_donhang`
--

CREATE TABLE `tbl_donhang` (
  `id_donhang` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `trangthai_donhang` varchar(50) NOT NULL,
  `ngaylap_donhang` varchar(50) NOT NULL,
  `pt_thanhtoan` varchar(11) NOT NULL,
  `vanchuyen_donhang` int(11) NOT NULL,
  `ma_donhang` int(11) NOT NULL,
  `tongtien` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_donhang`
--

INSERT INTO `tbl_donhang` (`id_donhang`, `id_khachhang`, `trangthai_donhang`, `ngaylap_donhang`, `pt_thanhtoan`, `vanchuyen_donhang`, `ma_donhang`, `tongtien`) VALUES
(80, 26, 'Đang vận chuyển', 'Saturday 22/4/2023 13:28:46 PM', 'chuyenkhoan', 64, 5985, '1598000'),
(81, 26, 'Đang chờ xác nhận', 'Saturday 22/4/2023 13:54:52 PM', 'tienmat', 64, 1826, '1598000'),
(82, -1, 'Đang chờ xác nhận', 'Saturday 22/4/2023 16:49:37 PM', 'tienmat', 65, 6140, '718000'),
(83, -1, 'Đang chờ xác nhận', 'Saturday 22/4/2023 17:16:32 PM', 'tienmat', 65, 1800, '718000'),
(84, -1, 'Đang chờ xác nhận', 'Saturday 22/4/2023 17:25:48 PM', 'tienmat', 65, 272, '718000'),
(85, 30, 'Đang chờ xác nhận', 'Saturday 22/4/2023 17:44:35 PM', 'tienmat', 66, 5129, '718000'),
(86, 30, 'Đang chờ xác nhận', 'Saturday 22/4/2023 17:47:02 PM', 'tienmat', 66, 2765, '718000'),
(87, 30, 'Đang chờ xác nhận', 'Saturday 22/4/2023 18:20:32 PM', 'tienmat', 66, 1656, '718000'),
(88, 30, 'Đang chờ xác nhận', 'Saturday 22/4/2023 18:22:16 PM', 'tienmat', 66, 8778, '718000'),
(89, 30, 'Đang chờ xác nhận', 'Saturday 22/4/2023 18:31:51 PM', 'tienmat', 66, 7266, '718000'),
(90, 30, 'Đang chờ xác nhận', 'Saturday 22/4/2023 19:34:25 PM', 'tienmat', 66, 5308, '718000'),
(91, -1, 'Đang chờ xác nhận', 'Saturday 22/4/2023 20:23:04 PM', 'tienmat', 65, 5162, '279000'),
(92, -1, 'Đang chờ xác nhận', 'Saturday 22/4/2023 20:28:29 PM', 'tienmat', 65, 4534, '279000'),
(93, -1, 'Đang chờ xác nhận', 'Saturday 22/4/2023 20:30:46 PM', 'tienmat', 65, 9291, '279000'),
(94, 30, 'Đang chờ xác nhận', 'Saturday 22/4/2023 20:32:57 PM', 'tienmat', 66, 3437, '279000'),
(95, 30, 'Đang chờ xác nhận', 'Saturday 22/4/2023 21:22:34 PM', 'tienmat', 66, 3544, '279000'),
(96, 31, 'Đang chờ xác nhận', 'Saturday 22/4/2023 21:43:13 PM', 'tienmat', 67, 8527, '279000'),
(97, 32, 'Đang chờ xác nhận', 'Sunday 23/4/2023 10:11:50 AM', 'tienmat', 68, 9073, '408000'),
(98, 32, 'Đang chờ xác nhận', 'Sunday 23/4/2023 10:14:20 AM', 'tienmat', 68, 2543, '408000'),
(99, 30, 'Đang chờ xác nhận', 'Sunday 23/4/2023 10:15:00 AM', 'tienmat', 66, 8783, '408000'),
(100, 30, 'Đang chờ xác nhận', 'Sunday 23/4/2023 10:15:16 AM', 'chuyenkhoan', 66, 235, '408000'),
(101, 30, 'Đang chờ xác nhận', 'Sunday 23/4/2023 10:22:27 AM', 'tienmat', 66, 8967, '558000'),
(102, 32, 'Đang chờ xác nhận', 'Sunday 23/4/2023 10:24:33 AM', 'tienmat', 68, 1790, '917000'),
(103, 32, 'Đang chờ xác nhận', 'Sunday 23/4/2023 10:26:58 AM', 'tienmat', 68, 655, '1416000'),
(104, 32, 'Đang chờ xác nhận', 'Sunday 23/4/2023 10:28:50 AM', 'chuyenkhoan', 68, 2772, '1497000'),
(105, 33, 'Đang chờ xác nhận', 'Sunday 23/4/2023 13:28:18 PM', 'tienmat', 74, 839, '258000'),
(106, 34, 'Đang chờ xác nhận', 'Sunday 23/4/2023 15:07:09 PM', 'tienmat', 75, 290, '279000'),
(107, 34, 'Đang chờ xác nhận', 'Sunday 23/4/2023 15:09:28 PM', 'tienmat', 75, 7422, '279000'),
(108, 39, 'Đang chờ xác nhận', 'Sunday 23/4/2023 15:24:59 PM', 'tienmat', 76, 9875, '799000'),
(109, 34, 'Đang chờ xác nhận', 'Sunday 23/4/2023 15:42:59 PM', 'tienmat', 75, 806, '838000'),
(110, 34, 'Đang chờ xác nhận', 'Sunday 23/4/2023 16:23:32 PM', 'tienmat', 77, 1518, '799000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_donhang_chitiet`
--

CREATE TABLE `tbl_donhang_chitiet` (
  `id_donhang_chitiet` int(11) NOT NULL,
  `ma_donhang` varchar(10) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_donhang_chitiet`
--

INSERT INTO `tbl_donhang_chitiet` (`id_donhang_chitiet`, `ma_donhang`, `id_sanpham`, `soluongmua`) VALUES
(169, '5985', 82, 2),
(170, '1826', 82, 2),
(171, '6140', 83, 2),
(172, '1800', 83, 2),
(173, '272', 83, 2),
(174, '5129', 83, 2),
(175, '2765', 83, 2),
(176, '1656', 83, 2),
(177, '8778', 83, 2),
(178, '7266', 83, 2),
(179, '5308', 83, 2),
(180, '5162', 104, 1),
(181, '4534', 104, 1),
(182, '9291', 104, 1),
(183, '3437', 104, 1),
(184, '3544', 104, 1),
(185, '8527', 104, 1),
(186, '9073', 104, 1),
(187, '9073', 80, 1),
(188, '2543', 104, 1),
(189, '2543', 80, 1),
(190, '8783', 104, 1),
(191, '8783', 80, 1),
(192, '235', 104, 1),
(193, '235', 80, 1),
(194, '8967', 104, 2),
(195, '1790', 104, 2),
(196, '1790', 83, 1),
(197, '655', 104, 2),
(198, '655', 83, 1),
(199, '655', 105, 1),
(200, '2772', 105, 3),
(201, '839', 80, 2),
(202, '290', 104, 1),
(203, '7422', 104, 1),
(204, '9875', 82, 1),
(205, '806', 104, 1),
(206, '806', 75, 1),
(207, '1518', 82, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `id_sanpham` int(11) NOT NULL,
  `id_danhmuc` int(11) NOT NULL,
  `tensp` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `masp` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `giasp` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soluong` int(11) NOT NULL,
  `hinhanh` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `trangthai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`id_sanpham`, `id_danhmuc`, `tensp`, `masp`, `giasp`, `soluong`, `hinhanh`, `mota`, `trangthai`) VALUES
(50, 12, 'Goods Kkambbobborkk - CuteThing', 'SP000051', '250000', 50, '1682181643_1682081585_SP2_slide (2).jpg', '     Thời gian giao hàng dự kiến cho sản phẩm này là từ 7-9 ngày\r\n\r\n*. 100% hàng mới, chất lượng cao\r\n\r\n*. Dây đeo thiết kế dễ thương, nhỏ gọn với kích thước 7cm\r\n\r\n*. Sản phẩm đồng thời có thể sử dụng cho điện thoại, móc khóa\r\n\r\n*. Phụ kiện điện thoại di động dễ thương', 1),
(51, 12, 'Goods TAEMARI_GGUNG ', 'SP000052', '430000', 25, '1682182092_Goods(TAEMARI_GGUNG)_430.png', '  Thành phần: Puffy TAEMARI, AR Voice Card 1 cái. Chất liệu:Polyester. Kích thước: Búp bê 12.5, Thẻ thoại AR 5.5*8.5 (cm)', 1),
(52, 12, 'Goods BADDIES_NCT127 SetCouple', 'SP000053', '1000000', 8, '1682181715_Goods(BADDIES)_NCT127_1tr.png', ' BỘ HỘP SANG TRỌNG BAO GỒM:\r\n\r\nVÍ CD\r\nDÂY BUỘC + 3 NÚT\r\nÁP PHÍCH GẤP\r\nTHẺ ẢNH – 1EA (NGẪU NHIÊN TRONG SỐ 18)\r\nBƯU THIẾP - 1EA (NGẪU NHIÊN TRONG SỐ 9)\r\nTÚI NHỎ - 1EA\r\nKÍCH THƯỚC HỘP:  7,5\" X 7,5\" X 3,25\"', 1),
(55, 4, 'Album(Life To Short) AESPA', 'SP000081', '480000', 12, '1682180427_Album(Life To Short)_aespa_480.png', ' Những bức tường trống thật tệ, vì vậy hãy mang lại sức sống cho ký túc xá, phòng ngủ, văn phòng, studio của bạn, ở bất cứ đâu. \r\nIn trên giấy áp phích bán bóng 185gsm. \r\nCắt tùy chỉnh - tham khảo biểu đồ kích thước để biết các phép đo đã hoàn thành. \r\nBao gồm viền trắng 3/16 inch (5 mm) để hỗ trợ tạo khung', 1),
(56, 4, 'Album (Stamp On It)  GOT', 'SP000082', '475000', 27, '1682180453_album(Stamp On It)_GOT_475.png', ' Bìa: 2 phiên bản. Tập sách: 1 phiên bản (mỗi phiên bản là 104p). Bộ bưu thiếp: Random 1 trên 7 (cho từng phiên bản). Ảnh thẻ: Random 1 trên 14 (cho mỗi phiên bản)', 1),
(57, 4, 'Album I Love I Love ActVer', 'SP000083', '552000', 13, '1682180537_1682080713_SP5_slide.jpg', '  (G)I-DLE đã trở lại và sẵn sàng cho khán giả toàn cầu thấy rằng họ mạnh mẽ và cuồng nhiệt hơn bao giờ hết với mini album thứ 5 hoàn toàn mới, I love. Bản phát hành mới này có ba phiên bản: Act, Born và X-File. Nội dung của gói bao gồm CD, Sách ảnh, Giấy viết lời bài hát, Thẻ chụp ảnh tự sướng (ngẫu nhiên 2 trên 30), Dấu trang (ngẫu nhiên 1 trên 5), Nhãn dán, Áp phích nhỏ (ngẫu nhiên 1 trên 5) và Nhãn dán tem bưu chính. Kích thước hộp: 190 x 258 x 11 (mm). Đơn đặt hàng trực tuyến vận chuyển thông qua lựa chọn ngẫu nhiên.', 1),
(58, 4, 'Album BornPink BlackPink', 'SP000084', '1599000', 6, '1682180563_bornpink.jpg', '  ALBUM BLACKPINK BORN PINK off hộp quà văn phòng phẩm.\r\n\r\nTình trạng: alb có thể df nhẹ. Có thể lấy nguyên seal, unseal, unseal không photocard hoặc lấy riêng Cd+ptb.\r\n\r\nKhi nhận hàng mng cố gắng có clip unboxing để bên m hỗ trợ nha', 1),
(64, 4, 'Album Feel My Rhythm', 'SP000085', '300000', 10, '1682180645_ALbumFeelMyRhythm(Orchestra Ver).jpg', '   Red Velvet', 1),
(67, 10, 'Lightstick DecalsTEEZ ', 'SP000111', '1099000', 5, '1682181094_LightstickTEEZDecals_1tr375 .png', '   Tất cả các miếng dán Vinyl đều có một lớp dính để giúp dán! Chỉ cần tháo mặt sau màu trắng để lộ bề mặt dính của decal sau đó dán xuống bằng mặt sau trong suốt! Sau khi dán bong bóng mịn ra khỏi giữa bằng thẻ tín dụng hoặc công cụ dán decal (khuyên dùng công cụ này để tránh trầy xước hoặc rách) Đây là một quá trình chậm và nếu giấy còn sót lại, tôi khuyên bạn nên sử dụng nhíp để loại bỏ cẩn thận!', 1),
(73, 11, 'Card (EXCLUSIVE)_NCT Offical', 'SP000201', '300000', 18, '1682181479_card(EXCLUSIVE)_NCT_300.png', ' Chi tiết: 1 Set 23 card. Size: 8.5 * 5.5', 1),
(74, 11, 'Card (Savage) AESPA Officals', 'SP000202', '389000', 14, '1682181518_Card(Savage)_aespa_380.png', '   Chất liệu giấy nghệ thuật kích thước 55x85mm. Doubleside In bóng và cán màng. ', 1),
(75, 10, 'LightStick SKZ(crochet cover)', 'SP000203', '559000', 7, '1682181119_LightStick_SKZ(crochet cover) (1).png', '      Tất cả các miếng dán Vinyl đều có một lớp dính để giúp dán! Chỉ cần tháo mặt sau màu trắng để lộ bề mặt dính của decal sau đó dán xuống bằng mặt sau trong suốt!', 1),
(78, 11, 'Card BornPinkBlackPink', 'SP000203', '526000', 8, '1682181538_1682081504_bornPink2.jpeg', '  Thành phần sản phẩm: Sách bưu thiếp (10 tấm bưu thiếp, 4 ảnh cắt (Ngẫu nhiên) 1 cái 1 bộ). Chất liệu: GIẤY. Kích thước : Postcard 127X178, 4 Ảnh Cắt 50X150 (MM)', 1),
(79, 2, 'Deco Sticker Wonwoo', 'SP000221', '299000', 34, '1682180124_1682080678_SP8_Slide.jpg', '  Chi tiết sản phẩm: \r\n Bao gồm: 52 nhãn dán không trùng lặp.\r\nTất cả đều được cắt sẵn, dễ dàng sử dụng. Khi bóc hầu như không để lại keo dính, nếu để lại một ít cũng dễ dàng lau sạch.\r\n- Chất liệu: PVC\r\n- Kích thước: 4-10cm\r\n- Sticker (decal, tem, hình dán) dùng để trang trí lên tất cả bề mặt cứng như mũ bảo hiểm, laptop, vali du lịch, xe đạp, xe máy, ô tô, ván trượt, hộp bút, điện thoại, máy tính, tủ lạnh, tủ quần áo, tường, cửa, đàn guitar...\r\nChống nắng và chống thấm nước, trang trí xe hơi, trang trí thời trang thủ công', 1),
(80, 2, 'Deco Bộ Sticker Idol', 'SP000222', '129000', 40, '1682180195_DecoKitBP (2).jpg', '  Chi tiết sản phẩm: Bao gồm: 52 nhãn dán không trùng lặp. Tất cả đều được cắt sẵn, dễ dàng sử dụng. Khi bóc hầu như không để lại keo dính, nếu để lại một ít cũng dễ dàng lau sạch. - Chất liệu: PVC - Kích thước: 4-10cm - Sticker (decal, tem, hình dán) dùng để trang trí lên tất cả bề mặt cứng như mũ bảo hiểm, laptop, vali du lịch, xe đạp, xe máy, ô tô, ván trượt, hộp bút, điện thoại, máy tính, tủ lạnh, tủ quần áo, tường, cửa, đàn guitar... Chống nắng và chống thấm nước, trang trí xe hơi, trang trí thời trang thủ công', 1),
(82, 1, 'KM LikeWater', 'SP000305', '799000', 5, '1682179843_likeWater (2).jpg', '   Photobook Version: 500K/ Ver ( dự kiến 500g): Sách ảnh (128 trang), Postcard, Bookmark, Photocard, Poster (chỉ dành cho đợt pre-order)', 1),
(83, 1, 'KM Wonwoo', 'SP000306', '359000', 5, '1682179852_1682080596_SP3_Slide.jpg', '     Chúng tôi cung cấp các mặt hàng và dịch vụ chất lượng hàng đầu với tất cả các sản phẩm chính hãng mới.\r\n\r\nChúng tôi cẩn thận đóng gói và gửi tất cả các đơn đặt hàng của bạn sau khi kiểm tra lại.\r\n\r\nChúng tôi không chỉ vận chuyển hàng hóa mà còn phục vụ những dịch vụ tốt nhất để làm hài lòng khách hàng.\r\n\r\nSự hài lòng của bạn là ưu tiên hàng đầu của chúng tôi.', 1),
(86, 4, 'Album Face The Sun', 'SP000086', '659000', 10, '1682180947_faceTheSun.jpg', ' ', 1),
(88, 10, 'Lightstick EXO ', 'SP000113', '1099000', 7, '1682179319_EXO Lightstick (2).jpg', '  Item Package Dimensions L x W x H: 12.05 x 5.12 x 2.72 inches.\r\nPackage Weight: 0.4 Kilograms\r\nItem Weight: 0.4 Pounds\r\nBrand Name: SM Entertainment\r\nColor: White\r\nMaterial: 	Paper, Polycarbonate', 1),
(90, 10, 'LightStick Kpop SunFlowers', 'SP000114', '1399000', 6, '1682181160_Lightstick KPOP.jpg', '   Tất cả các miếng dán Vinyl đều có một lớp dính để giúp dán! Chỉ cần tháo mặt sau màu trắng để lộ bề mặt dính của decal sau đó dán xuống bằng mặt sau trong suốt!', 1),
(93, 10, 'LightStick AESPA KPOPOffic', 'SP000114', '899000', 12, '1682181259_lightstickKONBAT.jpg', '  AESPA - OFFICIAL LIGHT STICK. Tất cả các miếng dán Vinyl đều có một lớp dính để giúp dán! Chỉ cần tháo mặt sau màu trắng để lộ bề mặt dính của decal sau đó dán xuống bằng mặt sau trong suốt!', 1),
(94, 10, 'LightStick ATEEZ CROWNZZZ', 'SP000115', '1099000', 10, '1682181320_lightstickATEEZ (2).jpg', '  Tất cả các miếng dán Vinyl đều có một lớp dính để giúp dán! Chỉ cần tháo mặt sau màu trắng để lộ bề mặt dính của decal sau đó dán xuống bằng mặt sau trong suốt!', 1),
(95, 10, 'LightStick GFRIEND BLUESSSSS', 'SP000117', '950000', 10, '1682181360_lightstickGFRIEND.jpg', ' Tất cả các miếng dán Vinyl đều có một lớp dính để giúp dán! Chỉ cần tháo mặt sau màu trắng để lộ bề mặt dính của decal sau đó dán xuống bằng mặt sau trong suốt!', 1),
(96, 10, 'LightStick NUEST ThreeColorsssss', 'SP000118', '999000', 5, '1682181402_lightStickNUEST.png', '  Tất cả các miếng dán Vinyl đều có một lớp dính để giúp dán! Chỉ cần tháo mặt sau màu trắng để lộ bề mặt dính của decal sau đó dán xuống bằng mặt sau trong suốt!', 1),
(97, 10, 'LightStick Army BombVersion3', 'SP000119', '1099000', 7, '1682181440_lightstickARMYBOMB (2).jpg', '  Tất cả các miếng dán Vinyl đều có một lớp dính để giúp dán! Chỉ cần tháo mặt sau màu trắng để lộ bề mặt dính của decal sau đó dán xuống bằng mặt sau trong suốt!', 1),
(98, 12, 'Goods Flag Taehyung Offical', 'SP000054', '300000', 16, '1682181749_GoodsTaehyung (2).jpg', ' Sản phẩm này dành cho các nhà sưu tập và người hâm mộ lớn của BTS', 1),
(99, 12, 'Goods BTS Dalmajung PTB', 'SP000055', '699000', 12, '1682181776_GoodsDalmajung.jpg', '  ', 1),
(100, 12, 'Goods Flag Namjoon Offical', 'SP000056', '399000', 18, '1682181821_GoodsNamjoon.jpg', ' \r\nSản phẩm này dành cho các nhà sưu tập và người hâm mộ lớn của BTS', 1),
(101, 12, 'Goods Brother Bottle 1000ml', 'SP000057', '439000', 30, '1682181835_GoodsBottle (2).jpg', '  \r\nSản phẩm này dành cho các nhà sưu tập và người hâm mộ lớn của BTS', 1),
(102, 12, 'Goods Sys-Phone Case BTS', 'SP000058', '799000', 25, '1682181856_GoodsPhoneCase.jpg', ' \r\nSản phẩm này dành cho các nhà sưu tập và người hâm mộ lớn của BTS', 1),
(103, 12, 'Goods SPS - Photo Wall', 'SP000059', '539000', 32, '1682181868_GoodsWall.jpg', ' \r\nSản phẩm này dành cho các nhà sưu tập và người hâm mộ lớn của BTS', 1),
(104, 1, 'KM Goods BTS Dalmajung PTC', 'SP000037', '279000', 4, '1682179890_GoodsDalmajung.jpg', '  \r\nSản phẩm này dành cho các nhà sưu tập và người hâm mộ lớn của BTS', 1),
(105, 1, 'KM LightStick IkonKonbat', 'SP000038', '499000', 8, '1682179911_lightstickKONBAT.jpg', '  ', 1),
(106, 11, 'Card bo góc NTC PinkCard', 'SP000204', '459000', 14, '1682181561_CardNCT.jpg', '  \r\nChi tiết: 1 Set 23 card. Size: 8.5 * 5.5', 1),
(107, 11, 'Card Ảnh TempestOffical', 'SP000205', '539000', 13, '1682181609_CardTempest.jpg', ' \r\nChi tiết: 1 Set 23 card. Size: 8.5 * 5.5', 1),
(108, 1, 'KM Card SSG Photopack', 'SP000309', '259000', 6, '1682179951_CartSSGPhotopack (2).jpg', '  \r\nChi tiết: 1 Set 23 card. Size: 8.5 * 5.5', 1),
(109, 1, 'KM Album FaceWeverse', 'SP0000310', '199000', 10, '1682180014_AlbumJiminFace.jpeg', ' 1 VERSION. OUT BOX (1ea) / W132 x H92 (mm). WRAPPING PAPER (1ea) / W124 x H172 (mm)', 1),
(110, 1, 'KM Deco ABC Bullet', 'SP000311', '99000', 15, '1682180048_DecoSetBullet.jpg', ' Kích thước gần đúng: 16 * 6cm ', 1),
(111, 2, 'Deco Enhypen GGUPackage', 'SP000223', '879000', 10, '1682180227_DecoGGUEnhygen.jpg', ' 1 OUTBOX. \r\nSize: 200x247x76mm', 1),
(112, 2, 'Deco Kitt BlackPink Offical', 'SP000224', '439000', 20, '1682181985_DecoKitBP (2).jpg', '  Size: 200x247x76mm', 1),
(113, 2, 'Deco Kittt BTS 2022 Offical', 'SP000225', '1050000', 8, '1682182029_DecoKitBTS2022 (2).jpg', '  Size: 200x247x76mm', 1),
(114, 2, 'Deco Card PromQueens', 'SP000226', '369000', 14, '1682180302_DecoPromQueens.jpeg', ' Size: 200x247x76mm', 1),
(115, 2, 'Deco Kit TXT 2023', 'SP000227', '879000', 15, '1682180323_DecoKitTXT2022.jpg', ' Size: 200x247x76mm', 1),
(116, 2, 'Deco Pocket/Card Holder', 'SP000228', '299000', 18, '1682180358_DecoPocketCard (2).jpg', ' Size: 200x247x76mm', 1),
(117, 2, 'Deco Set Card KitTreasure', 'SP000229', '439000', 13, '1682180398_DecoKitTreasure (2).jpg', ' Size: 200x247x76mm', 1),
(118, 4, 'Album KEP1ER - LoveStruck', 'SP000087', '359000', 20, '1682180965_AlbumLoveStruck.jpeg', ' ALBUM được off hộp quà văn phòng phẩm. Tình trạng: alb có thể df nhẹ. Có thể lấy nguyên seal, unseal, unseal không photocard hoặc lấy riêng Cd+ptb. Khi nhận hàng mng cố gắng có clip unboxing để bên m hỗ trợ nha', 1),
(119, 4, 'Album BSS   SecondWind', 'SP000088', '399000', 15, '1682180985_AlbumBSS (2).jpeg', ' ALBUM được off hộp quà văn phòng phẩm. Tình trạng: alb có thể df nhẹ. Có thể lấy nguyên seal, unseal, unseal không photocard hoặc lấy riêng Cd+ptb. Khi nhận hàng mng cố gắng có clip unboxing để bên m hỗ trợ nha', 1),
(120, 4, 'Album Stayc TeddyBear Digipack', 'SP000089', '249000', 18, '1682181026_AlbumStaycTeddy.jpeg', ' ALBUM được off hộp quà văn phòng phẩm. Tình trạng: alb có thể df nhẹ. Có thể lấy nguyên seal, unseal, unseal không photocard hoặc lấy riêng Cd+ptb. Khi nhận hàng mng cố gắng có clip unboxing để bên m hỗ trợ nha', 1),
(121, 1, 'KM Album TXT Temptation', 'SP000312', '199000', 7, '1682180091_AlbumTemptation (2).jpg', ' ALBUM được off hộp quà văn phòng phẩm. Tình trạng: alb có thể df nhẹ. Có thể lấy nguyên seal, unseal, unseal không photocard hoặc lấy riêng Cd+ptb. Khi nhận hàng mng cố gắng có clip unboxing để bên m hỗ trợ nha', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vanchuyen`
--

CREATE TABLE `tbl_vanchuyen` (
  `id_vanchuyen` int(11) NOT NULL,
  `ten` varchar(100) NOT NULL,
  `sodienthoai` varchar(100) NOT NULL,
  `diachi` varchar(100) NOT NULL,
  `chuthich` varchar(100) NOT NULL,
  `id_khachhang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_vanchuyen`
--

INSERT INTO `tbl_vanchuyen` (`id_vanchuyen`, `ten`, `sodienthoai`, `diachi`, `chuthich`, `id_khachhang`) VALUES
(74, 'Duong Doan', '0123745856', 'Duong 3/2, P.Xuan Khanh, Q.Ninh Kieu, TP.Can Tho', '', 33),
(76, 'Ngoc Khanh', '0899329822', 'CAN THO', 'hehehe', 39),
(77, 'hongdoan', '1922193921093', 'íoadoiashdas', '', 34);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `IDUser` int(11) NOT NULL,
  `Tennguoidung` varchar(255) DEFAULT NULL,
  `Gioitinh` tinyint(1) NOT NULL,
  `Ngaysinh` date DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Sdt` varchar(255) DEFAULT NULL,
  `Diachi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`IDUser`, `Tennguoidung`, `Gioitinh`, `Ngaysinh`, `Email`, `Sdt`, `Diachi`) VALUES
(3, 'ggggg', 0, '2023-03-16', 'ididit898@gmail.com', '0094hfhf', '0'),
(4, 'fhffhhfh', 1, '2023-03-02', 'ididit898@gmail.com', '0094hfhf', '0'),
(6, 'ggggg', 1, '2023-03-15', 'ididit898@gmail.com', '0094hfhf', '0'),
(7, 'ggggg', 1, '2023-03-16', 'ididit898@gmail.com', '0094hfhf', '0'),
(11, 'Maitanvo', 1, '2002-06-04', 'ckynetvp@gmail.com', '0921939084', '0'),
(12, 'sadsaas', 1, '2002-06-04', 'ckynetvp@gmail.com', '0921939084', '0'),
(21, 'Mai Tan Vo', 1, '2003-06-21', 'mtv@gmail.com', '123456789', 'Thanh Pho Vinh Long'),
(22, 'Mai Tan Vo', 1, '2003-06-21', 'mtv@gmail.com', '123456789', 'Thanh Pho Vinh Long'),
(23, 'Mai Tan Vo', 1, '2003-06-21', 'mtv@gmail.com', '123456789', 'Thanh Pho Vinh Long'),
(24, 'Mai Tan Vo', 1, '2003-06-21', 'mtv@gmail.com', '123456789', 'Thanh Pho Vinh Long'),
(25, 'Mai Tan Vo', 1, '2003-06-21', 'mtv@gmail.com', '123456789', 'Thanh Pho Vinh Long'),
(26, 'Mai Tan Vo', 1, '2003-06-21', 'mtv@gmail.com', '0123456789', 'Thanh Pho Vinh Long'),
(27, 'maitanvo', 1, '2002-06-04', 'ckynetvp@gmail.com', '0921939084', 'tổ 15 khóm 4'),
(28, 'btmne', 1, '2003-04-10', 'ididit898@gmail.com', '0123456789', 'NVL'),
(29, 'VHNK', 1, '2001-02-22', 'ididit898@gmail.com', '0123456789', 'DHDHDHDH'),
(30, 'MTV', 1, '2001-06-22', 'ididit898@gmail.com', '0123456789', 'gggggggggggggggggg'),
(31, 'Dương Hồng Đoan', 0, '2003-01-28', 'duonghongdoan@gmail.com', '0123745856', 'Duong 3/2, P.Xuan Khanh, Q.Ninh Kieu, TP.Can Tho'),
(32, 'Dương Hồng Đoan', 0, '2003-03-03', 'duonghong@gmail.com', '0123745856', 'Duong 3/2, P.Xuan Khanh, Q.Ninh Kieu, TP.Can Tho'),
(33, 'Dương Hồng Đoan', 0, '2001-01-02', 'duonghongdoan@gmail.com', '0123745856', 'Duong 3/2, P.Xuan Khanh, Q.Ninh Kieu, TP.Can Tho'),
(34, 'Hồng Đoan', 0, '2002-03-31', 'duonghongdoan@gmail.com', '0123745856', 'Duong 3/2, P.Xuan Khanh, Q.Ninh Kieu, TP.Can Tho'),
(39, 'Ngoc Khanh', 0, '2002-11-23', 'khanhb2013538@student.ctu.edu.vn', '0899329822', 'CAN THO'),
(40, 'Mai Tấn Võ', 1, '2002-06-04', 'maitanvo462@gmail.com', '0921939084', 'tổ 15 khóm 4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`IDTaikhoan`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Indexes for table `tbl_donhang`
--
ALTER TABLE `tbl_donhang`
  ADD PRIMARY KEY (`id_donhang`);

--
-- Indexes for table `tbl_donhang_chitiet`
--
ALTER TABLE `tbl_donhang_chitiet`
  ADD PRIMARY KEY (`id_donhang_chitiet`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`id_sanpham`),
  ADD KEY `id_danhmuc` (`id_danhmuc`);

--
-- Indexes for table `tbl_vanchuyen`
--
ALTER TABLE `tbl_vanchuyen`
  ADD PRIMARY KEY (`id_vanchuyen`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`IDUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `IDTaikhoan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_donhang`
--
ALTER TABLE `tbl_donhang`
  MODIFY `id_donhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `tbl_donhang_chitiet`
--
ALTER TABLE `tbl_donhang_chitiet`
  MODIFY `id_donhang_chitiet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=208;

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `tbl_vanchuyen`
--
ALTER TABLE `tbl_vanchuyen`
  MODIFY `id_vanchuyen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `IDUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
