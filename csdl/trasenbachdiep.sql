-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2023 at 04:59 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trasenbachdiep`
--

-- --------------------------------------------------------

--
-- Table structure for table `giohang`
--

CREATE TABLE `giohang` (
  `id_user` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `dongia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `giohang`
--

INSERT INTO `giohang` (`id_user`, `id_sp`, `soluong`, `dongia`) VALUES
(2, 3, 1, 100000),
(1, 3, 1, 100000),
(3, 5, 1, 150000);

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `id_user` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `ten_sp` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `dongia` int(11) NOT NULL,
  `thanhtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `STT` int(11) NOT NULL,
  `ten_trang` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`STT`, `ten_trang`, `link`) VALUES
(1, 'TRANG CHỦ', 'index1.php'),
(2, 'GIỚI THIỆU ', 'introduce.php'),
(4, 'SẢN PHẨM ', 'list_products.php'),
(5, 'TIN TỨC', 'news.php'),
(6, '<i class=\"fa-solid fa-cart-shopping\"></i>', 'cart.php');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_sp` int(11) NOT NULL,
  `ten_sp` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gia` decimal(10,0) NOT NULL,
  `thong_tin` text COLLATE utf8_unicode_ci NOT NULL,
  `huong_dan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nuoc` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nhiet_do` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `thoi_gian` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `anh_main` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `anh1` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `anh2` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `anh3` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `trang_thai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_sp`, `ten_sp`, `gia`, `thong_tin`, `huong_dan`, `nuoc`, `nhiet_do`, `thoi_gian`, `anh_main`, `anh1`, `anh2`, `anh3`, `trang_thai`) VALUES
(1, 'Trà Shan Tuyết', '120', 'Trà Shan tuyết (Chè Shan Tuyết) hay còn gọi là trà tuyết. Đây là loại trà đặc sản của các đồng bào dân tộc người Tày, Giao, Mông và là đặc sản của các tỉnh như Hà Giang Điện Biên, Lào Cai.\r\nĐặc điểm của trà Shan Tuyết là búp trà (cánh trà) rất to và có màu trắng, dưới cahnhs trà có phủ một lớp lông tơ mịn màu trắng.\r\nCây trà Shan tuyết cổ thụ rất lớn, có khi bằng vòng tay ôm của vài người lớn, mọc trên núi với độ cao 1200m, quanh năm mây mù bao phủ. Nhiệt độ giữa ngày và đêm chênh lệch lớn', 'Hướng dẫn pha trà Shan Tuyết', 'Đổ vào ấm từ 150ml - 200ml, nước sôi ở nhiệt độ 85', '1 - 2 nắm trà, khoảng 20 - 30g', 'Để trà 4 - 6 phút', 'product-1.png', 'shan1.jpg', 'shan2.jpg', 'shan3.jpg', 0),
(2, 'Trà ướp nhụy sen', '120000', 'Trà ướp nhụy sen, Từ những cây trà nhất là Trà vùng Tân Cương Thái Nguyên, thông qua bàn tay các nghệ nhân đã tạo thành những cánh trà cao cấp như búp tôm, trà móc câu cao cấp... Bằng những cánh trà mạn đó, dân ta đã nghĩ ra cách thức sao ướp với những bông sen vùng Hồ Tây để tạo nên một thượng phẩm đặc biệt là Trà ướp Sen Tây Hồ.\r\nTrà Sen Tây Hồ chính là sự kết hợp hoàn hảo cả về mặt nhân sinh cũng như về mặt y lý. Bằng đôi bàn tay tài hoa và bí kíp sao ướp gia truyền của người Hà thành kinh kì đã tạo ra thức uống tinh túy, kết tinh của miền núi non Thái Nguyên với văn hóa ngàn năm Thăng Long – Hà Nội.', 'Hướng dẫn pha trà ướp nhụy sen', 'Đổ vào ấm từ 150ml - 200ml, nước sôi ở nhiệt độ 70', '1 - 2 nắm trà, khoảng 20 - 30g', 'Để trà 3 - 5 phút', 'product-2.png', 'sen3.jpg', 'sen1.jpg', 'sen2.jpg', 0),
(3, 'Trà Shan Tuyết ướp hoa Nhài', '100000', '100% búp chè Shan Tuyết được tuyển chọn, được ướp với hoa Nhài tự nhiên. Nguyên liệu tự nhiên, không hương liệu, không phụ gia, không chất bảo quản.\r\n Chè được diệt men theo công nghệ chế biến Trà Xanh và kỹ thuật ướp hương hiện đại.\r\n Uống 3 cốc trà mỗi ngày giúp bạn nâng cao sức đề kháng, tăng cường sức khỏe, thanh nhiệt, giải độc, giảm stress, tốt cho tim mạch.\r\n Bã trà có thể dùng để chế biến món ăn như xào thịt, kho cá; hoặc dùng để đắp mặt.', 'Hướng dẫn pha trà Shan Tuyết ướp hoa Nhài', 'Cho túi trà vào 150 – 200ml nước sôi (85 độ)', 'dùng 1 - 2 túi trà', 'Đợi 2 – 3 phút, nhúng túi trà 5 lần rồi lấy ra.', 'product-3.png', 'nhai1.jpg', 'nhai2.jpg', 'nhai3.jpg', 0),
(5, 'Trà Ô Long', '150000', 'Tiêu chuẩn thu hái nguyên liệu để chế biến trà Ô Long là hái búp non, hai đến ba lá kế liền kề và một phần của thân mà mọi người hay gọi là ”cọng trà”. Ba thành phần này kết hợp với nhau để tạo ra loại trà Ô Long ngon, dày vị, béo ngậy và chát nhẹ.\r\nTrà được ủ lên men khoảng 30% đồng nghĩa với việc độ chát trong trà sẽ giảm xuống, không còn vị chát đượm như những loại trà Thái Nguyên, Cổ thụ hay Trà Tuyết… Khi nhấp ngụm trà đầu tiên, vị thanh mát sẽ tràn trong khoang miệng, kéo theo đó là vị chát nhẹ, hơi béo ngậy.\r\n\r\nSau đó là hậu vị, hương vị trà lưu lâu dài trong khoang miệng, bám khắp vòm họng và một vị ngọt hậu kéo dài. Đây chính là những yếu tố khiến cho bạn cảm thấy thích thú khi thưởng thức loại trà này.', 'Hướng dẫn pha trà Ô Long', 'Đổ vào ấm từ 150ml - 200ml, nước sôi ở nhiệt độ 70', '1 - 2 nắm trà, khoảng 20 - 30g', 'Để trà 4 - 6 phút', 'product-4.png', 'o1.png', 'o2.png', 'o3.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `hoten` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `quyen` varchar(2) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `hoten`, `email`, `username`, `password`, `quyen`) VALUES
(1, 'qlinh', '', 'qlinh', '123', '0'),
(2, 'phuoc', '', 'phuoc', '123', '2'),
(3, 'thang', '', 'ngocthang', '123', ''),
(4, '$hoten', '$email', '$username', '$password', ''),
(5, 'abc', 'nql5501@gmail.com', 'abc', '123', '2'),
(6, 'abc1', 'huuphuoc@gmail.com', 'abc1', '123', '2'),
(7, 'admin', 'admin@gamil.com', 'admin', '111', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`STT`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_sp`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `STT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
