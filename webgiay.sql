-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 09, 2021 lúc 04:08 PM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webgiay`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `admins`
--

INSERT INTO `admins` (`id`, `name`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', '0192023a7bbd73250516f069df18b500');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `artisans`
--

CREATE TABLE `artisans` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(100) NOT NULL,
  `a_status` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `artisans`
--

INSERT INTO `artisans` (`a_id`, `a_name`, `a_status`, `created_at`) VALUES
(6, ' BỘ SƯU TẬP THỜI TRANG & STYLE GUIDE', 0, '2021-08-06 19:42:18'),
(7, 'Tin Tức Thời Trang', 0, '2021-08-06 19:43:02'),
(8, 'SAO & Styles', 0, '2021-08-06 19:43:17'),
(9, 'Xu hướng thời trang', 0, '2021-08-06 19:43:35');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `c_status` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`c_id`, `c_name`, `c_status`, `created_at`) VALUES
(1, 'Áo', 0, '2021-08-01 14:47:43'),
(2, 'Nón', 0, '2021-08-01 14:47:52'),
(3, 'Dép', 0, '2021-08-01 14:48:04'),
(4, 'Giày', 0, '2021-08-05 09:48:09'),
(5, 'Quần', 0, '2021-08-05 09:52:42');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `oder_detail`
--

CREATE TABLE `oder_detail` (
  `od_detail_id` int(11) NOT NULL,
  `od_detail_code` varchar(100) NOT NULL,
  `od_product_id` int(11) NOT NULL,
  `od_detail_quanty` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sodienthoai` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `ghichu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `oder_detail`
--

INSERT INTO `oder_detail` (`od_detail_id`, `od_detail_code`, `od_product_id`, `od_detail_quanty`, `name`, `sodienthoai`, `email`, `diachi`, `ghichu`) VALUES
(1, '4012', 23, 1, 'Tran van linh', '0971231231', '123@gmail.com', 'asdasdas', 'asdasdas'),
(2, '4211', 21, 1, 'Danh tran', '0981871123', '122@gmail.com', 'tphcm ', 'giao hang vao buoi toi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `od_id` int(11) NOT NULL,
  `od_code` varchar(100) NOT NULL,
  `od_date` varchar(100) NOT NULL,
  `od_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`od_id`, `od_code`, `od_date`, `od_status`) VALUES
(2, '4012', '05/08/2021 08:09:35pm', 1),
(3, '4211', '06/08/2021 10:28:20am', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `post_artisan_id` int(11) NOT NULL,
  `p_description` mediumtext NOT NULL,
  `p_title` varchar(9999) NOT NULL,
  `p_avatar` varchar(100) NOT NULL,
  `p_hot` int(11) NOT NULL,
  `p_status` tinyint(2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`p_id`, `p_name`, `post_artisan_id`, `p_description`, `p_title`, `p_avatar`, `p_hot`, `p_status`, `created_at`) VALUES
(17, 'Bật mí cách phối đồ đúng chuẩn cùng Tommy Hilfiger', 6, '<h3>Phối đồ theo phong c&aacute;ch thời trang sang trọng v&agrave; thanh lịch</h3>\n\n<p>Vậy đừng chần chừ m&agrave; h&atilde;y đến với Tommy Hilfiger &ndash; nơi m&agrave; bạn dễ d&agrave;ng sở hữu những thiết kế bất hủ được l&agrave;m mới trong vẻ hiện đại bắt mắt.</p>\n\n<p>&Aacute;o thun polo l&agrave; một m&oacute;n đồ m&agrave; d&acirc;n m&ecirc; thời trang ch&acirc;n ch&iacute;nh n&agrave;o cũng đều sở hữu trong tủ đồ. Vậy c&aacute;c qu&yacute; &ocirc;ng hiện đại đ&atilde; biết c&aacute;ch diện đ&uacute;ng mẫu &aacute;o n&agrave;y chưa?</p>\n\n<p>C&aacute;ch kết hợp m&agrave; nam giới ưa chuộng nhất khi diện l&ecirc;n m&igrave;nh mẫu polo ch&iacute;nh l&agrave; kho&aacute;c b&ecirc;n ngo&agrave;i một bộ suit đơn giản kh&ocirc;ng cầu kỳ. Đ&acirc;y l&agrave; c&aacute;ch kết đơn giản m&agrave; lại dễ d&agrave;ng ghi lại ấn tượng bởi n&eacute;t đẹp vừa nam t&iacute;nh ph&oacute;ng kho&aacute;ng vừa lịch l&atilde;m cuốn h&uacute;t. Đừng qu&ecirc;n lựa chọn tone m&agrave;u của bộ suit tương đồng với chiếc&nbsp;<a href=\"https://www.acfc.com.vn/nam/quan-ao/polo.html\" target=\"_blank\">&aacute;o polo nam</a>&nbsp;m&agrave; bạn c&oacute; nh&eacute;.</p>\n\n<p><img alt=\"\" src=\"https://www.acfc.com.vn/acfc_wp/wp-content/uploads/2021/08/bat-mi-cach-phoi-do-dung-chuan-cung-tommy-hilfiger-1-n.jpg\" style=\"height:534px; width:800px\" /></p>\n\n<p>Ngo&agrave;i ra, &aacute;o polo phối với&nbsp;<a href=\"https://www.acfc.com.vn/nam/quan-ao/quan-short.html\" target=\"_blank\">quần short nam</a>&nbsp;cũng l&agrave; lựa chọn ho&agrave;n hảo cho c&aacute;c ch&agrave;ng trai ghi điểm thời trang trong buổi dạo chơi cuối tuần. Với lối kết hợp n&agrave;y, bạn sẽ tr&ocirc;ng c&oacute; phần trẻ trung v&agrave; năng động hơn.</p>\n\n<p><img alt=\"\" src=\"https://www.acfc.com.vn/acfc_wp/wp-content/uploads/2021/08/bat-mi-cach-phoi-do-dung-chuan-cung-tommy-hilfiger-1.jpg\" style=\"height:534px; width:800px\" /></p>\n\n<p>C&ugrave;ng một kiểu d&aacute;ng &aacute;o thun polo cổ điển, thay v&igrave; lựa chọn chiếc &aacute;o thun cứng nhắc như c&aacute;c ch&agrave;ng trai, c&ocirc; n&agrave;ng thời thượng sẽ chuộng những thiết kế polo c&aacute;ch điệu. H&atilde;y l&agrave;m mới phong c&aacute;ch với mẫu v&aacute;y cổ Polo cổ điển pha vẻ hiện đại bởi d&aacute;ng v&aacute;y s&aacute;t n&aacute;ch m&agrave; vẫn lịch sự bởi chiều d&agrave;i v&aacute;y vừa vặn qua gối. V&agrave; h&atilde;y kết hợp c&ugrave;ng một chiếc t&uacute;i da nhỏ nhắn để nh&acirc;n đ&ocirc;i sự sang trọng thanh lịch nh&eacute;.</p>\n\n<p><img alt=\"\" src=\"https://www.acfc.com.vn/acfc_wp/wp-content/uploads/2021/08/bat-mi-cach-phoi-do-dung-chuan-cung-tommy-hilfiger-1-1.jpg\" style=\"height:534px; width:800px\" /></p>\n\n<p>Hoặc để t&ocirc; điểm cho m&ugrave;a h&egrave; nhiều sắc m&agrave;u, bạn c&oacute; thể tham khảo c&aacute;ch phối đồ layer như c&ocirc; n&agrave;ng Tommy b&ecirc;n dưới. Phối đồ layer m&ugrave;a h&egrave; đỏi hỏi nhiều sự kh&eacute;o l&eacute;o v&agrave; tinh tế từ việc lựa chọn m&agrave;u sắc, kiểu d&aacute;ng chất liệu. Bởi m&ugrave;a h&egrave; kh&ocirc;ng chỉ cần mặc đẹp m&agrave; c&ograve;n phải thật thoải m&aacute;i v&agrave; tho&aacute;ng m&aacute;i.&nbsp;<a href=\"https://www.acfc.com.vn/nu/quan-ao/ao-thun-nu.html\" target=\"_blank\">&Aacute;o ph&ocirc;ng</a>&nbsp;chất liệu t&aacute;i chế co gi&atilde;n,&nbsp;<a href=\"https://www.acfc.com.vn/nu/trang-phuc-nu/quan-short-nu.html\" target=\"_blank\">quần short</a>&nbsp;thun mềm mại m&aacute;t mẻ kho&aacute;c k&egrave;m một chiếc suit đơn giản mỏng nhẹ l&agrave; lựa chọn ho&agrave;n hảo đấy.</p>\n\n<p><img alt=\"\" src=\"https://www.acfc.com.vn/acfc_wp/wp-content/uploads/2021/08/bat-mi-cach-phoi-do-dung-chuan-cung-tommy-hilfiger-1-3.jpg\" style=\"height:534px; width:800px\" /></p>\n\n<p>Ngo&agrave;i ra việc sử dụng m&agrave;u sắc tươi s&aacute;ng với họa tiết gần gũi thi&ecirc;n nhi&ecirc;n từ quần short v&ocirc; c&ugrave;ng th&uacute; vị th&iacute;ch hợp với buổi d&atilde; ngoại.</p>\n\n<h3>Phối đồ theo phong c&aacute;ch s&aacute;ng tạo với &ldquo;chất&rdquo; đường phố</h3>\n\n<p>Tommy Jeans ch&iacute;nh l&agrave; s&acirc;n chơi cho c&aacute;c bạn trẻ thỏa sức s&aacute;ng tạo n&ecirc;n thời trang đường phố mang đậm t&iacute;nh c&aacute; nh&acirc;n.</p>\n\n<p>Nhắc đến thời trang trẻ trung kh&ocirc;ng thể kh&ocirc;ng n&oacute;i đến những mẫu &aacute;o thun T-shirt &ldquo;must-have&rdquo;. Đừng lo sợ những mẫu &aacute;o thun sẽ l&agrave;m bạn trở n&ecirc;n nh&agrave;m ch&aacute;n. &Aacute;o thun Tommy với gam m&agrave;u độc đ&aacute;o sẽ kh&ocirc;ng l&agrave;m bạn thất vọng.</p>\n\n<p>V&agrave; đừng bỏ lỡ m&oacute;n phụ kiện nhỏ như n&oacute;n hay t&uacute;i x&aacute;ch, tuy nhỏ nhưng lại c&oacute; thể mang đến dấu ấn đậm cho vẻ ngo&agrave;i c&aacute; t&iacute;nh của bạn. Hoặc dẫn đầu xu hướng hot hit khi kết hợp d&eacute;p sandal c&ugrave;ng tất cao cổ Tommy.</p>\n\n<p><img alt=\"\" src=\"https://www.acfc.com.vn/acfc_wp/wp-content/uploads/2021/08/bat-mi-cach-phoi-do-dung-chuan-cung-tommy-hilfiger-1-5-797x1024.jpg\" style=\"height:1024px; width:797px\" /></p>\n\n<p><img alt=\"\" src=\"https://www.acfc.com.vn/acfc_wp/wp-content/uploads/2021/08/bat-mi-cach-phoi-do-dung-chuan-cung-tommy-hilf-Copy.jpg\" style=\"height:992px; width:800px\" /></p>\n\n<p>Tommy Jeans lu&ocirc;n t&igrave;m c&aacute;ch để tạo n&ecirc;n sự hiện đại trong ch&iacute;nh vẻ đẹp vượt thời gian. C&aacute;c c&ocirc; g&aacute;i c&oacute; thể chọn những mẫu croptop để khoe d&aacute;ng khỏe khoắn v&agrave; cực chất. Một mẫu &aacute;o croptop mang đậm tinh thần vượt thời gian khi được biến tấu dựa tr&ecirc;n chi tiết c&aacute;c mẫu &aacute;o hoodie. V&agrave; kh&ocirc;ng cần đắn đo g&igrave; nhiều, chỉ diện c&ugrave;ng mẫu quần ton-sur-ton đ&atilde; đủ c&ocirc; g&aacute;i nổi bật cả một g&oacute;c phố.</p>\n\n<p><img alt=\"\" src=\"https://www.acfc.com.vn/acfc_wp/wp-content/uploads/2021/08/bat-mi-cach-phoi-do-dung-chuan-cung-tommy-hilfiger-7-823x1024.jpg\" style=\"height:1024px; width:823px\" /></p>\n\n<p>V&agrave; đương nhi&ecirc;n thời trang đường phố kh&ocirc;ng thể thiếu được những thiết kế denim. Chất liệu denim Tommy được ứng dụng trong nhiều thiết kế từ&nbsp;<a href=\"https://www.acfc.com.vn/nu/trang-phuc-nu/quan-jean.html\" target=\"_blank\">quần jeans</a>, quần short đến &aacute;o jacket, &aacute;o sơ mi. C&aacute;c m&agrave;u sắc đa dạng nhiều sắc th&aacute;i từ hiện đại đến vingtage cho c&aacute;c t&iacute;n đồ c&aacute; t&iacute;nh thỏa sức lựa chọn v&agrave; mix-match.</p>\n\n<p><img alt=\"\" src=\"https://www.acfc.com.vn/acfc_wp/wp-content/uploads/2021/08/bat-mi-cach-phoi-do-dung-chuan-cung-tommy-hilfiger-1-6.jpg\" style=\"height:1007px; width:800px\" /></p>\n\n<p>Tommy l&agrave; thương hiệu thời trang l&acirc;u đời với đa dạng d&ograve;ng sản phẩm sẽ l&agrave; lựa chọn ho&agrave;n hảo cho c&aacute;c t&iacute;n đồ thời trang s&aacute;ng tạo bất tận, biến tấu trong nhiều phong c&aacute;ch. D&ugrave; bạn y&ecirc;u th&iacute;ch phong c&aacute;ch thanh lịch hay c&aacute; t&iacute;nh, h&atilde;y để Tommy đồng h&agrave;nh với bạn tr&ecirc;n con đường chinh phục thời trang s&agrave;nh điệu.</p>\n', 'Bí quyết để thăng hạng phong cách không dừng lại ở việc sở hữu những món đồ cao cấp và chất lượng mà việc kết hợp chúng hài hòa nhất chính là yếu tố quyết định. Hãy lắng nghe Tommy Hilfiger chia sẻ những lối phối đồ dễ dàng chinh phục trọn vẹn điểm 10 phong cách ngày hè.', 'phoido1628279193.jpg', 1, 0, '2021-08-09 10:32:08'),
(18, 'Khám phá các loại áo lót “best-selling” của thương hiệu Calvin Klein', 7, '<h3>&Aacute;o l&oacute;t c&ocirc;ng nghệ Invisible</h3>\r\n\r\n<p>C&ocirc;ng nghệ Invisible mới nhất từ&nbsp;<a href=\"https://www.acfc.com.vn/calvinkleinunderwear.html\" target=\"_blank\">Calvin Klein Underwear</a>&nbsp;mang đến hiệu quả n&acirc;ng đỡ tuyệt đối cho n&agrave;ng. Thiết kế kh&ocirc;ng gọng ghi điểm với phần đệm &ocirc;m s&aacute;t đường ch&acirc;n l&oacute;t vừa mang lại cảm gi&aacute;c dễ chịu vừa n&acirc;ng đỡ ho&agrave;n hảo. Đặc biệt hơn, với c&ocirc;ng nghệ n&agrave;y CK cải tiến với phần d&acirc;y đai rộng 10cm, c&aacute;c c&ocirc; n&agrave;ng mũm mĩm vẫn c&oacute; thể v&ocirc; tư diện mẫu &aacute;o n&agrave;y m&agrave; vẫn chuẩn d&aacute;ng.</p>\r\n\r\n<p><img alt=\"Áo lót công nghệ Invisible của thương hiệu Calvin Klein\" src=\"https://www.acfc.com.vn/acfc_wp/wp-content/uploads/2021/08/cac-loai-ao-lot-calvin-klein-4.png\" style=\"height:816px; width:620px\" /></p>\r\n\r\n<p>&Aacute;o ngực nữ c&ocirc;ng nghệ Invisible của thương hiệu Calvin Klein</p>\r\n\r\n<h3>&Aacute;o l&oacute;t d&ograve;ng Reconsidered Comfort</h3>\r\n\r\n<p>Đ&acirc;y l&agrave; d&ograve;ng&nbsp;<a href=\"https://www.acfc.com.vn/nu/trang-phuc-nu/do-lot.html\" target=\"_blank\">đồ l&oacute;t</a>&nbsp;hội tụ 3 ti&ecirc;u ch&iacute; nhỏ - gọn &ndash; &ecirc;m &aacute;i. Điểm nhấn của những thiết kế nội y trong bộ sưu tập n&agrave;y ch&iacute;nh l&agrave; chất liệu t&aacute;i chế th&acirc;n thiện với m&ocirc;i trường m&agrave; vẫn giữ nguy&ecirc;n được chất lượng &ecirc;m &aacute;i m&agrave; sản phẩm mang đến. Phần m&uacute;t đệm được thiết kế c&oacute; thể th&aacute;o rời cho c&aacute;c c&ocirc; g&aacute;i linh động kết hợp với c&aacute;c trang phục. Với thiết kế c&uacute;p l&oacute;t chữ V, mẫu &aacute;o n&agrave;y hứa hẹn chinh phục c&aacute;c c&ocirc; g&aacute;i y&ecirc;u th&iacute;ch phong c&aacute;ch c&aacute; t&iacute;nh, năng động.</p>\r\n\r\n<p><img alt=\"Áo lót dòng Reconsidered Comfort của thương hiệu Calvin Klein\" src=\"https://www.acfc.com.vn/acfc_wp/wp-content/uploads/2021/08/cac-loai-ao-lot-calvin-klein-2.png\" style=\"height:816px; width:620px\" /></p>\r\n\r\n<p>&Aacute;o l&oacute;t d&ograve;ng Reconsidered Comfort của thương hiệu CK</p>\r\n\r\n<h3>&Aacute;o l&oacute;t d&ograve;ng Breathable Collection</h3>\r\n\r\n<p>Năm nay, Calvin Klein ra mắt d&ograve;ng nội y đặc biệt chỉ d&agrave;nh cho thị trường Ch&acirc;u &Aacute;. Với vẻ ngoại tối giản, ẩn sau b&ecirc;n trong mẫu nội y n&agrave;y những kỹ thuật sản xuất v&agrave; chất liệu mang nhiều t&iacute;nh năng. Phần đai v&agrave; phần c&uacute;p l&oacute;t được thiết kế dạng lưới tạo n&ecirc;n v&ocirc; số những lỗ kh&iacute; nhỏ. Lỗ kh&iacute; n&agrave;y cho ph&eacute;p lưu th&ocirc;ng kh&ocirc;ng kh&iacute; l&agrave;m giảm t&aacute;c động nhiệt v&agrave; độ ẩm cho c&ocirc; g&aacute;i lu&ocirc;n kh&ocirc; tho&aacute;ng suốt cả ng&agrave;y.</p>\r\n\r\n<p><img alt=\"Áo lót dòng Breathable Collection của thương hiệu Calvin Klein\" src=\"https://www.acfc.com.vn/acfc_wp/wp-content/uploads/2021/08/cac-loai-ao-lot-calvin-klein-7.jpg\" style=\"height:875px; width:700px\" /></p>\r\n\r\n<p>&Aacute;o ngực d&ograve;ng Breathable Collection của thương hiệu Calvin Klein</p>\r\n\r\n<h3>&Aacute;o l&oacute;t d&ograve;ng CK One</h3>\r\n\r\n<p>Nếu bạn l&agrave; c&ocirc; g&aacute;i ưu chuộng phong c&aacute;ch trẻ trung năng động, đừng chần chừ m&agrave; h&atilde;y thử ngay d&ograve;ng nội y CK One. Những mẫu &aacute;o l&oacute;t thuộc bộ sưu tập n&agrave;y đều sở hữu những họa tiết bắt mắt v&agrave; m&agrave;u sắc nổi bật. Chất liệu t&aacute;i chế ho&agrave;n to&agrave;n từ chai nhựa sẽ khiến bạn ho&agrave;n to&agrave;n bất ngờ bởi sự mềm mại v&agrave; co gi&atilde;n 4 chiều. Hơn nữa, Calvin Klein c&ograve;n sử dụng c&ocirc;ng nghệ chống ẩm kh&ocirc;ng h&oacute;a chất biến mẫu &aacute;o n&agrave;y thật sự xứng đ&aacute;ng l&agrave; một sản phẩm th&acirc;n thiện với m&ocirc;i trường.</p>\r\n\r\n<p><img alt=\"Áo lót dòng CK One của thương hiệu Calvin Klein\" src=\"https://www.acfc.com.vn/acfc_wp/wp-content/uploads/2021/08/cac-loai-ao-lot-calvin-klein-6.jpg\" style=\"height:875px; width:700px\" /></p>\r\n\r\n<p>&Aacute;o l&oacute;t d&ograve;ng CK One của thương hiệu Calvin Klein</p>\r\n\r\n<h3>&Aacute;o l&oacute;t d&ograve;ng CK Black Amarylis</h3>\r\n\r\n<p>Nếu đ&atilde; c&oacute; d&ograve;ng sản phẩm cho c&ocirc; n&agrave;ng c&aacute; t&iacute;nh th&igrave; Calvin Klein kh&ocirc;ng thể bỏ s&oacute;t c&aacute;c c&ocirc; g&aacute;i điệu đ&agrave;. Một chiếc &aacute;o l&oacute;t ho&agrave;n to&agrave;n ấn tượng bởi họa tiết hoa nữ t&iacute;nh trong chất liệu ren. &Aacute;o l&oacute;t ren c&oacute; thể n&oacute;i l&agrave; một m&oacute;n đồ c&oacute; mặt trong bộ sưu tập nội y của mỗi c&ocirc; g&aacute;i. Tuy nhi&ecirc;n, nếu bạn chọn lựa sai loại &aacute;o l&oacute;t chất liệu n&agrave;y th&igrave; c&oacute; thể sẽ xảy ra t&igrave;nh trạng th&ocirc; r&aacute;p vẫn đến kh&oacute; chịu. Đừng lo lắng v&igrave; đ&atilde; c&oacute; Calvin Klein lu&ocirc;n tập trung v&agrave;o chất lượng sản phẩm n&ecirc;n đ&atilde; mang đến chất liệu ren v&ocirc; c&ugrave;ng mềm mịn v&agrave; n&acirc;ng niu cơ thể n&agrave;ng.</p>\r\n\r\n<p><img alt=\"Áo lót dòng CK Black Amarylis của thương hiệu Calvin Klein\" src=\"https://www.acfc.com.vn/acfc_wp/wp-content/uploads/2021/08/cac-loai-ao-lot-calvin-klein-5-Copy.png\" style=\"height:816px; width:620px\" /></p>\r\n\r\n<p>&Aacute;o bra nữ CK Black Amarylis của thương hiệu Calvin Klein</p>\r\n\r\n<h3>&Aacute;o l&oacute;t c&ocirc;ng nghệ Liquid Touch</h3>\r\n\r\n<p>CK giới thiệu d&ograve;ng &aacute;o l&oacute;t được thiết kế đặc biệt, ẩn m&igrave;nh dưới bất kỳ loại trang phục n&agrave;o. Chiếc &aacute;o l&oacute;t n&agrave;y được tạo n&ecirc;n trong vẻ tối giản, những sợi vải mềm mảnh v&agrave; tương đối lỏng mang đến khả năng k&eacute;o gi&atilde;n dễ d&agrave;ng cho n&agrave;ng v&ocirc; tư vận động. Đừng bỏ lỡ mẫu &aacute;o l&oacute;t vạn năng n&agrave;y nh&eacute;.</p>\r\n\r\n<p><img alt=\"Áo lót công nghệ Liquid Touch của thương hiệu Calvin Klein\" src=\"https://www.acfc.com.vn/acfc_wp/wp-content/uploads/2021/08/cac-loai-ao-lot-calvin-klein-3-Copy.png\" style=\"height:816px; width:620px\" /></p>\r\n\r\n<p>&Aacute;o ngực c&ocirc;ng nghệ Liquid Touch của thương hiệu Calvin Klein</p>\r\n\r\n<h3>&Aacute;o l&oacute;t d&ograve;ng Icon Micro</h3>\r\n\r\n<p>Cuối c&ugrave;ng, Calvin Klein giới thiệu đến c&aacute;c c&ocirc; g&aacute;i d&ograve;ng &aacute;o l&oacute;t mang đậm đặc trưng của thương hiệu. Điểm nhấn của bộ sưu tập n&agrave;y l&agrave; v&ograve;ng d&acirc;y đai &eacute;p nhiệt với logo Calvin Klein được &eacute;p nhiệt to nổi bật. Nếu bạn l&agrave; t&iacute;n đồ thời trang s&agrave;nh điệu n&oacute;i chung v&agrave; CK n&oacute;i ri&ecirc;ng, kh&ocirc;ng c&oacute; l&yacute; do g&igrave; để kh&ocirc;ng bổ sung mẫu &aacute;o n&agrave;y cho tủ đồ nh&agrave; bạn.</p>\r\n\r\n<p><img alt=\"Áo lót dòng Icon Micro của thương hiệu Calvin Klein\" src=\"https://www.acfc.com.vn/acfc_wp/wp-content/uploads/2021/08/cac-loai-ao-lot-calvin-klein-1.jpg\" style=\"height:700px; width:700px\" /></p>\r\n\r\n<p>&Aacute;o l&oacute;t d&ograve;ng Icon Micro của thương hiệu Calvin Klein</p>\r\n\r\n<p>Nội y Calvin Klein vốn lu&ocirc;n được c&aacute;c c&ocirc; g&aacute;i ưu &aacute;i bởi điểm cộng từ thiết kế thời trang đến chất lượng sản phẩm cao cấp. Tr&ecirc;n đ&acirc;y l&agrave; một số gợi &yacute; từ Calvin Klein về những loại &aacute;o l&oacute;t để c&aacute;c c&ocirc; g&aacute;i c&oacute; thể lựa chọn sản phẩm ph&ugrave; hợp vừa vặn cho cơ thể v&agrave; thăng hạng phong c&aacute;ch.</p>\r\n', 'Để sở hữu một vẻ ngoài trông thật sành điệu và phong cách, các cô gái luôn chăm chút cho những bộ áo quần bên ngoài và quên mất rằng trang phục bên trong cũng quan trọng không kém. Cùng Calvin Klein khám phá và lựa chọn mẫu áo ngực phù hợp nhất cho mỗi cô gái ghi điểm 10 thời trang trọn vẹn nhé.', 'aolot1628279339.png', 1, 0, '2021-08-09 10:30:50'),
(19, 'Điểm danh 5 mẫu giày Nike Jordan 1 hot nhất mùa hè 2021', 8, '<h3>1.&nbsp;<a href=\"https://www.acfc.com.vn/nike-vendor-giay-bong-ro-nam-air-jordan-1-mid-nike-554724-122.html\" target=\"_blank\">Nike Jordan 1 Mid &#39;Metallic Red</a></h3>\r\n\r\n<p>G&acirc;y ấn tượng tuyệt đối về sự ph&aacute; c&aacute;ch khi kết hợp 3 t&ocirc;ng m&agrave;u nổi bật đen-trắng-đỏ. Với c&aacute;c điểm nhấn ho&agrave;n hảo từ phần đế được cấu tạo vững ch&atilde;i, phần th&acirc;n&nbsp;<a href=\"https://www.acfc.com.vn/nu/giay/giay-the-thao-nu.html\" target=\"_blank\">gi&agrave;y thể thao</a>&nbsp;với chất liệu da trắng đặc trưng đến lớp phủ m&agrave;u đen hiện diện ở phần mũi v&agrave; cổ gi&agrave;y. Ngo&agrave;i ra, lớp l&oacute;t satin m&agrave;u đỏ c&ugrave;ng logo b&oacute;ng rổ được chắp c&aacute;nh của Michael Jordan chạm khắc tinh tế ch&iacute;nh l&agrave; chi tiết đắt gi&aacute; tạo n&ecirc;n vẻ đẹp sang trọng cho tổng thể<a href=\"https://www.acfc.com.vn/nu/giay.html\" target=\"_blank\">&nbsp;đ&ocirc;i gi&agrave;y</a>.</p>\r\n\r\n<p><img alt=\"\" src=\"https://www.acfc.com.vn/acfc_wp/wp-content/uploads/2021/07/Nike-Jordan-1-Mid-Metallic-Red.jpg\" style=\"height:800px; width:800px\" /></p>\r\n\r\n<h3>2. Nike Jordan 1 Mid &lsquo;Hyper Royal&rsquo;</h3>\r\n\r\n<p>Với một v&agrave;i điểm được thay đổi tr&ecirc;n nguy&ecirc;n bản &ldquo;Royal&rdquo;, phi&ecirc;n bản &nbsp;&quot;Hyper Royal&rdquo; được th&ecirc;m nhiều n&eacute;t tinh tế hơn v&agrave;o cấu tr&uacute;c cũng như chi tiết phối m&agrave;u. Phần mũi gi&agrave;y tr&ecirc;n được l&agrave;m từ chất da lộn mịn, m&agrave;u xanh xuất hiện tương ứng với viền ngo&agrave;i lưỡi, dấu Swoosh v&agrave; g&oacute;t gi&agrave;y dưới. Logo Jumpman xuất hiện tr&ecirc;n lưỡi g&agrave; thay v&igrave; &ldquo;NIKE AIR&rdquo; như ở phi&ecirc;n bản gốc, tuy nhi&ecirc;n chi tiết đ&ocirc;i c&aacute;nh vẫn được giữ nguy&ecirc;n ở b&ecirc;n h&ocirc;ng cổ gi&agrave;y.</p>\r\n\r\n<p><img alt=\"\" src=\"https://www.acfc.com.vn/acfc_wp/wp-content/uploads/2021/07/Nike-Jordan-1-Mid-%E2%80%98Hyper-Royal.jpg\" style=\"height:800px; width:800px\" /></p>\r\n\r\n<h3>3.&nbsp;<a href=\"https://www.acfc.com.vn/nike-vendor-giay-bong-ro-nu-wmns-air-jordan-1-low-nike-dc0774-603.html\" target=\"_blank\">Nike Jordan 1 Low &#39;Chicago Flip&#39;</a></h3>\r\n\r\n<p>Nike Jordan 1 giờ đ&acirc;y đ&atilde; kh&ocirc;ng c&ograve;n l&agrave; s&acirc;n chơi d&agrave;nh ri&ecirc;ng cho đấng m&agrave;y r&acirc;u nữa khi m&agrave; c&agrave;ng nhiều c&aacute;c phi&ecirc;n bản Nữ được ra mắt. Kh&ocirc;ng chỉ l&agrave; những t&ocirc;ng m&agrave;u nhẹ nh&agrave;ng ngọt ng&agrave;o, m&agrave; c&ograve;n c&oacute; những bản phối m&agrave;u cực kỳ ấn tượng như &quot;Chicago Flip&quot;. Đ&ocirc;i Jordan cổ thấp n&agrave;y c&oacute; thể dễ d&agrave;ng mix với nhiều loại trang phục, từ v&aacute;y ngắn thời trang đến quần d&agrave;i c&aacute; t&iacute;nh.</p>\r\n\r\n<p><img alt=\"\" src=\"https://www.acfc.com.vn/acfc_wp/wp-content/uploads/2021/07/Nike-Jordan-1-Low-Chicago-Flip.jpg\" style=\"height:800px; width:800px\" /></p>\r\n\r\n<h3>4. Nike Jordan 1 Zoom CMFT &lsquo;Tropical Twist&rsquo;</h3>\r\n\r\n<p>Một phối m&agrave;u đẹp mắt v&agrave; kh&ocirc;ng k&eacute;m phần nổi bật tr&ecirc;n chất liệu th&acirc;n l&agrave;m từ da lộn v&agrave; vải canvas, tạo n&ecirc;n sự kh&aacute;c biệt ấn tượng cho đ&ocirc;i gi&agrave;y. B cạnh đ&oacute; c&ograve;n c&oacute; sự xuất hiện của lớp phủ m&agrave;u t&iacute;m v&agrave; sắc xanh ở cổ gi&agrave;y để l&agrave;m ho&agrave;n thiện hơn vẻ đẹp b&ecirc;n ngo&agrave;i. Được ho&agrave;n thiện với đế giữa trang bị c&ocirc;ng nghệ Zoom Air ti&ecirc;n tiến v&agrave; độc quyền của&nbsp;<a href=\"https://www.acfc.com.vn/the-thao-nike\" target=\"_blank\">Nike</a>.</p>\r\n\r\n<p><img alt=\"\" src=\"https://www.acfc.com.vn/acfc_wp/wp-content/uploads/2021/07/Nike-Jordan-1-Zoom-CMFT-%E2%80%98Tropical-Twist.jpg\" style=\"height:848px; width:800px\" /></p>\r\n\r\n<h3>5. Nike Jordan 1 Mid &lsquo;Island Green&rsquo;</h3>\r\n\r\n<p>Phối m&agrave;u đ&igrave;nh đ&aacute;m Retro High &lsquo;Igloo&rsquo; nay đ&atilde; xuất hiện tr&ecirc;n phi&ecirc;n bản cổ Mid. Với t&ocirc;ng m&agrave;u chủ đạo &quot;Island Green&quot; - như một l&agrave;n nước xanh m&aacute;t m&agrave;u ngọc b&iacute;ch bao phủ tr&ecirc;n th&acirc;n gi&agrave;y, t&ocirc; điểm bởi sắc đen ấn tượng ở phần mũi gi&agrave;y v&agrave; d&acirc;y cột, tạo th&agrave;nh một sự tương phản về m&agrave;u sắc nhưng lại v&ocirc; c&ugrave;ng h&agrave;i h&ograve;a. Đ&acirc;y l&agrave; một phối m&agrave;u cực kỳ đ&aacute;ng mua cho m&ugrave;a h&egrave; n&agrave;y.</p>\r\n\r\n<p><img alt=\"\" src=\"https://www.acfc.com.vn/acfc_wp/wp-content/uploads/2021/07/Nike-Jordan-1-Mid-%E2%80%98Island-Green.jpg\" style=\"height:800px; width:800px\" /></p>\r\n', 'Năm 2021 đánh dấu sự trở lại đầy thành công của giày Nike Jordan 1 với những bản collab đình đám và mùa Hè này cũng đã chào đón những bản phối cực kỳ ấn tượng', 'Nike-Jordan1628279428.jpg', 0, 0, '2021-08-09 10:32:37'),
(20, '5 phong cách thời trang nam cơ bản nam giới cần biết', 9, '<h3>Phong c&aacute;ch thời trang nam tối giản (Minimalism)</h3>\r\n\r\n<p>Trong thế giới thời trang, phong c&aacute;ch tối giản với những thiết kế đơn giản m&agrave; tinh tế, m&agrave;u sắc trung t&iacute;nh m&agrave; độc đ&aacute;o ng&agrave;y c&agrave;ng được nam giới ưa chuộng. Bảng m&agrave;u tối giản thường được tạo th&agrave;nh từ m&agrave;u đen, xanh navy, x&aacute;m, trắng, beige v&agrave; c&aacute;c m&agrave;u pastel nhạt thi&ecirc;n trắng. Kh&ocirc;ng chỉ mang đến cảm gi&aacute;c tự nhi&ecirc;n, dễ chịu, những t&ocirc;ng m&agrave;u trung t&iacute;nh c&ograve;n kh&ocirc;ng bao giờ lỗi mốt, dễ d&agrave;ng mix &amp; match v&agrave; ph&ugrave; hợp với tất cả mọi người. Đơn giản v&agrave; tinh tế, tất cả những g&igrave; m&agrave; phong c&aacute;ch Minimalism đem lại ch&iacute;nh l&agrave; sự kh&aacute;c biệt d&ugrave; chỉ l&agrave; sự kết hợp kh&eacute;o l&eacute;o những m&oacute;n đồ cơ bản nhất.</p>\r\n\r\n<p><img alt=\"\" src=\"https://www.acfc.com.vn/acfc_wp/wp-content/uploads/2021/07/phong-cach-thoi-trang-nam-1-Custom.jpeg\" style=\"height:899px; width:600px\" /></p>\r\n\r\n<p>&Aacute;o sơ mi c&ugrave;ng quần kaki với 2 t&ocirc;ng m&agrave;u xanh - trắng trung t&iacute;nh vừa đơn giản vừa tinh tế</p>\r\n\r\n<h3>Phong c&aacute;ch Street Style</h3>\r\n\r\n<p>Bắt nguồn từ thời trang ch&acirc;u Mỹ v&agrave; ch&acirc;u &Acirc;u, phong c&aacute;ch đường phố đ&atilde; mang đến một l&agrave;n gi&oacute; mới đậm chất chủ nghĩa c&aacute; nh&acirc;n ngay từ khi mới du nhập v&agrave;o Việt Nam. Nhắc đến phong c&aacute;ch street style, người ta thường nghĩ ngay đến những bộ outfit đậm chất đường phố, c&aacute; t&iacute;nh, ấn tượng v&agrave; đầy ph&oacute;ng kho&aacute;ng. Điểm thu h&uacute;t của phong c&aacute;ch n&agrave;y ch&iacute;nh từ sự ngẫu hứng tự do, việc kết hợp với m&agrave;u sắc, chất liệu hay kiểu d&aacute;ng kh&ocirc;ng hề tu&acirc;n theo bất kỳ quy chuẩn n&agrave;o v&agrave; l&agrave;m bật l&ecirc;n c&aacute;i t&ocirc;i ri&ecirc;ng biệt của mỗi c&aacute; nh&acirc;n.</p>\r\n\r\n<p><img alt=\"\" src=\"https://www.acfc.com.vn/acfc_wp/wp-content/uploads/2021/07/phong-cach-thoi-trang-nam-3-Custom.jpeg\" style=\"height:899px; width:600px\" /></p>\r\n\r\n<p>Phong c&aacute;ch street style ch&iacute;nh l&agrave; sự ngẫu hứng tự do trong việc kết hợp với m&agrave;u sắc, chất liệu hay kiểu d&aacute;ng v&agrave; l&agrave;m bật l&ecirc;n c&aacute;i t&ocirc;i ri&ecirc;ng biệt của mỗi c&aacute; nh&acirc;n</p>\r\n\r\n<h3>Phong c&aacute;ch phối đồ nhiều lớp (Layering)</h3>\r\n\r\n<p>Layering l&agrave; c&aacute;ch phối nhiều loại trang phục với nhau để tạo th&agrave;nh c&aacute;c lớp (layer). Một lưu &yacute; quan trọng khi chọn phong c&aacute;ch Layering ch&iacute;nh l&agrave; kết hợp những trang phục c&oacute; độ d&agrave;y vừa phải, mỏng nhẹ để c&oacute; thể mặc nhiều lớp m&agrave; kh&ocirc;ng tạo cảm gi&aacute;c qu&aacute; nặng nề hay b&iacute; b&aacute;ch. Đặc biệt, đối với m&ugrave;a h&egrave;, c&aacute;c ch&agrave;ng trai chỉ n&ecirc;n chọn một chiếc&nbsp;<a href=\"https://www.acfc.com.vn/nam/quan-ao/ao-thun.html\" target=\"_blank\">&aacute;o thun nam</a>&nbsp;hoặc &aacute;o tank đơn giản l&agrave;m lớp nền, sau đ&oacute; kết hợp với&nbsp;<a href=\"https://www.acfc.com.vn/nam/quan-ao/ao-so-mi.html\" target=\"_blank\">&aacute;o sơ mi nam</a>&nbsp;b&ecirc;n ngo&agrave;i l&agrave; đ&atilde; đủ c&oacute; một outfit ho&agrave;n hảo cho những ng&agrave;y thời tiết c&oacute; phần oi bức.</p>\r\n\r\n<p><img alt=\"\" src=\"https://www.acfc.com.vn/acfc_wp/wp-content/uploads/2021/07/phong-cach-thoi-trang-nam-2-Custom-1.jpeg\" style=\"height:899px; width:600px\" /></p>\r\n\r\n<p>M&ugrave;a h&egrave; oi bức chỉ cần phối &aacute;o sơ mi v&agrave; &aacute;o thun l&agrave; đ&atilde; c&oacute; ngay phong c&aacute;ch Layering c&aacute; t&iacute;nh</p>\r\n\r\n<h3>Phong c&aacute;ch thể thao (Sporty Chic)</h3>\r\n\r\n<p>Những năm gần đ&acirc;y trang phục thể thao kh&ocirc;ng chỉ được sử dụng khi tập luyện m&agrave; c&ograve;n được n&acirc;ng cấp th&agrave;nh một phong c&aacute;ch thời trang độc lập được nhiều người ưa chuộng, hay c&ograve;n biết đến với t&ecirc;n gọi Sporty Chic. Đ&acirc;y ch&iacute;nh l&agrave; sự kết hợp ho&agrave;n hảo giữa chất thể thao, khỏe khoắn v&agrave; sự linh hoạt, thời trang trong c&ugrave;ng một phong c&aacute;ch. Sporty Chic dễ d&agrave;ng ứng dụng khi bạn ho&agrave;n to&agrave;n c&oacute; thể kết hợp những m&oacute;n đồ thể thao cơ bản như &aacute;o tank,&nbsp;<a href=\"https://www.acfc.com.vn/nam/quan-ao/quan-dai.html\" target=\"_blank\">quần joggers</a>&nbsp;hoặc&nbsp;<a href=\"https://www.acfc.com.vn/nam/quan-ao/quan-jean.html\" target=\"_blank\">quần jeans nam</a>&nbsp;với những item sẵn c&oacute; trong tủ đồ để tạo n&ecirc;n vẻ ngo&agrave;i khỏe khoắn v&agrave; tr&agrave;n đầy năng lượng.</p>\r\n\r\n<p><img alt=\"\" src=\"https://www.acfc.com.vn/acfc_wp/wp-content/uploads/2021/07/phong-cach-thoi-trang-nam-5-Custom.jpeg\" style=\"height:780px; width:600px\" /></p>\r\n\r\n<p>Những m&oacute;n đồ thể thao basic cũng đủ để tạo n&ecirc;n vẻ ngo&agrave;i khỏe khoắn v&agrave; tr&agrave;n đầy năng lượng</p>\r\n\r\n<h3>Phong c&aacute;ch<a href=\"https://www.acfc.com.vn/nam.html\" target=\"_blank\">&nbsp;thời trang nam&nbsp;</a>c&ocirc;ng sở</h3>\r\n\r\n<p>Với m&ocirc;i trường c&ocirc;ng sở, sự chỉn chu, lịch sự trong c&aacute;ch ăn mặc sẽ gi&uacute;p bạn ghi điểm với cấp tr&ecirc;n v&agrave; tạo cảm gi&aacute;c h&ograve;a đồng với đồng nghiệp. Phong c&aacute;ch thời trang c&ocirc;ng sở hiện đại kh&ocirc;ng c&ograve;n b&oacute; buộc trong những bộ &acirc;u phục rườm r&agrave; v&agrave; c&oacute; phần cứng nhắc. Bạn ho&agrave;n to&agrave;n c&oacute; thể s&aacute;ng tạo với những chiếc &aacute;o sơ mi s&aacute;ng m&agrave;u hoặc<a href=\"https://www.acfc.com.vn/nam/quan-ao/polo.html\" target=\"_blank\">&nbsp;&aacute;o polo nam</a>&nbsp;kết hợp với quần kaki để c&oacute; một bộ trang phục thoải m&aacute;i, trẻ trung nhưng vẫn đủ ch&iacute;n chắn cho m&ocirc;i trường c&ocirc;ng sở.</p>\r\n\r\n<p><img alt=\"\" src=\"https://www.acfc.com.vn/acfc_wp/wp-content/uploads/2021/07/phong-cach-thoi-trang-nam-4-Custom.jpeg\" style=\"height:899px; width:600px\" /></p>\r\n\r\n<p>Sự kết hợp ho&agrave;n hảo giữ &aacute;o polo v&agrave; quần t&acirc;y ton-sur-ton sẽ gi&uacute;p bạn thoải m&aacute;i nhưng cũng kh&ocirc;ng k&eacute;m phần lịch l&atilde;m, cho một ng&agrave;y l&agrave;m việc năng động</p>\r\n\r\n<h3>Về&nbsp;<a href=\"https://www.acfc.com.vn/old-navy.html\" target=\"_blank\">Old Navy</a></h3>\r\n\r\n<p>L&agrave; thương hiệu thuộc sở hữu của Tập đo&agrave;n Gap Inc, thời trang Old Navy đậm chất Mỹ với m&agrave;u sắc trẻ trung c&ugrave;ng thiết kế ph&ugrave; hợp với mọi độ tuổi. C&oacute; trụ sở đặt tại San Francisco, thời trang Old Navy tạo n&ecirc;n kh&ocirc;ng gian mua sắm l&yacute; tưởng cho cả gia đ&igrave;nh. Th&ocirc;ng qua hệ thống hơn 1.000 cửa h&agrave;ng tr&ecirc;n to&agrave;n thế giới v&agrave; nhiều cửa h&agrave;ng tại H&agrave; Nội v&agrave; TP.HCM, Old Navy mang đến thế giới thời trang đa dạng cho mọi nh&agrave; với gi&aacute; th&agrave;nh hợp l&yacute;.</p>\r\n\r\n<p>Bạn đ&atilde; sẵn s&agrave;ng F5 phong c&aacute;ch thời trang thường ng&agrave;y chưa? Gh&eacute; thăm Old Navy để cập nhật ngay những mẫu thiết kế mới nhất trong bộ sưu tập d&agrave;nh ri&ecirc;ng cho m&ugrave;a h&egrave; năm nay nh&eacute;!</p>\r\n', 'Trong cuộc sống hiện đại ngày nay, thời trang không chỉ dành riêng cho phái đẹp. Việc lựa chọn phong cách ăn mặc phù hợp với tính cách và sở thích của bản thân sẽ giúp phái mạnh thêm tự tin và thể hiện cá tính của riêng mình. Hãy cùng Old Navy khám phá ngay 5 phong cách thời trang nam “chuẩn không cần chỉnh” dưới đây nhé!', 'Thumbnail1628279521.jpg', 1, 0, '2021-08-06 20:55:37');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `pro_name` varchar(100) NOT NULL,
  `pro_price` int(10) NOT NULL,
  `pro_sale` tinyint(2) NOT NULL,
  `pro_avatar` varchar(100) NOT NULL,
  `pro_category_id` int(10) NOT NULL,
  `pro_hot` tinyint(2) NOT NULL,
  `pro_qty` int(10) NOT NULL,
  `pro_number_rating` int(100) NOT NULL COMMENT 'Tổng số đánh giá',
  `pro_number_total` int(11) NOT NULL COMMENT 'Tổng số điểm đánh giá',
  `pro_content` mediumtext NOT NULL,
  `pro_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `pro_name`, `pro_price`, `pro_sale`, `pro_avatar`, `pro_category_id`, `pro_hot`, `pro_qty`, `pro_number_rating`, `pro_number_total`, `pro_content`, `pro_title`) VALUES
(18, 'DUNE LONDON - Giày Thể Thao Nữ Enzow', 2280000, 0, 'giay11628157530.jpg', 4, 0, 10, 0, 0, '<table>\r\n	<tbody>\r\n		<tr>\r\n			<th scope=\"row\">M&agrave;u Sắc</th>\r\n			<td>&nbsp; &nbsp; NUDE</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Chất liệu</th>\r\n			<td>&nbsp; &nbsp; LINING: 100% Polyester / UPPER: 45% Polyurethane, 55% Polyester / SOCK: 100% Polyester / OUTSOLE: 100% Rubber</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">HDSD &amp; BQ</th>\r\n			<td>&nbsp; &nbsp; Kh&ocirc;ng d&ugrave;ng chất tẩy rửa</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 'Dune London là thương hiệu thời trang danh tiếng đến từ Anh Quốc ra đời vào năm 1992, tập trung phân phối các sản phẩm giày, túi xách và phụ kiện cao cấp với mức giá phải chăng được sản xuất từ nguồn nguyên liệu được tuyển chọn kĩ càng và thiết kế tỉ mỉ t'),
(19, 'DUNE LONDON - Giày Thể Thao Nữ Eswyn', 1990000, 0, 'giay31628157618.jpg', 4, 1, 10, 0, 0, '<table>\r\n	<tbody>\r\n		<tr>\r\n			<th scope=\"row\">M&agrave;u Sắc</th>\r\n			<td>&nbsp; &nbsp;NUDE</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Chất liệu</th>\r\n			<td>&nbsp; &nbsp;LINING: 100% Polyester / UPPER: 45% Polyurethane, 55% Polyester / SOCK: 100% Polyester / OUTSOLE: 100% Rubber</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">HDSD &amp; BQ</th>\r\n			<td>&nbsp; &nbsp;Kh&ocirc;ng d&ugrave;ng chất tẩy rửa</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 'Dune London là thương hiệu thời trang danh tiếng đến từ Anh Quốc ra đời vào năm 1992, tập trung phân phối các sản phẩm giày, túi xách và phụ kiện cao cấp với mức giá phải chăng được sản xuất từ nguồn nguyên liệu được tuyển chọn kĩ càng và thiết kế tỉ mỉ t'),
(20, 'Áo Thun Nữ Boyfit Org Cot Jrsy Sslv Tee', 699000, 0, 'z2497377358309_48d73f96afe2e38cb91fc307f95c9861_4_11628157811.jpg', 1, 0, 10, 0, 0, '<table>\r\n	<tbody>\r\n		<tr>\r\n			<th scope=\"row\">M&agrave;u Sắc</th>\r\n			<td>&nbsp; &nbsp;NUDE</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Chất liệu</th>\r\n			<td>&nbsp; &nbsp;LINING: 100% Polyester / UPPER: 45% Polyurethane, 55% Polyester / SOCK: 100% Polyester / OUTSOLE: 100% Rubber</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">HDSD &amp; BQ</th>\r\n			<td>&nbsp; &nbsp;Kh&ocirc;ng d&ugrave;ng chất tẩy rửa</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 'Được Stephen Marks thành lập vào năm 1972, French Connection (FCUK) - thương hiệu với phong cách nổi loạn, phá cách và phóng khoáng đã tạo nên sự thu hút tới thị trường thời trang rộng lớn với chất lượng tốt và giá cả hợp lý.'),
(21, 'TOMMY HILFIGER - Quần Short Nữ', 2499000, 0, 'tu_quan1628157912.jpg', 5, 1, 10, 4, 13, '<table>\r\n	<tbody>\r\n		<tr>\r\n			<th scope=\"row\">M&agrave;u Sắc</th>\r\n			<td>&nbsp; NUDE</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Chất liệu</th>\r\n			<td>&nbsp; LINING: 100% Polyester / UPPER: 45% Polyurethane, 55% Polyester / SOCK: 100% Polyester / OUTSOLE: 100% Rubber</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">HDSD &amp; BQ</th>\r\n			<td>&nbsp; Kh&ocirc;ng d&ugrave;ng chất tẩy rửa</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 'TOMMY HILFIGER là thương hiệu thời trang hàng đầu thế giới, tôn vinh phong cách cổ điển kiểu Mỹ, đặc trưng với những thiết kế preppy phá cách.  Được thành lập vào năm 1985, Tommy Hilfiger mang đến những thiết kế thời thượng cao cấp cho người tiêu dùng trê'),
(22, 'PARFOIS - Giày Xăng Đan Sandal Croco', 799000, 0, 'imga1628158060.jpg', 3, 0, 10, 1, 3, '<table>\r\n	<tbody>\r\n		<tr>\r\n			<th scope=\"row\">M&agrave;u Sắc</th>\r\n			<td>&nbsp; NUDE</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Chất liệu</th>\r\n			<td>&nbsp; LINING: 100% Polyester / UPPER: 45% Polyurethane, 55% Polyester / SOCK: 100% Polyester / OUTSOLE: 100% Rubber</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">HDSD &amp; BQ</th>\r\n			<td>&nbsp; Kh&ocirc;ng d&ugrave;ng chất tẩy rửa</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 'Tựa như bài thơ dành tặng riêng phái đẹp, PARFOIS là thương hiệu thời trang và phụ kiện cao cấp đến từ Bồ Đào Nha. Ra đời vào năm 1994, hiện nay PARFOIS đã có hơn 1000 cửa hàng tại hơn 70 quốc gia trên thế giới.'),
(23, 'TOMMY HILFIGER - Nón Nam', 1199000, 10, 'non1628158193.jpg', 2, 1, 10, 3, 11, '<table>\r\n	<tbody>\r\n		<tr>\r\n			<th scope=\"row\">M&agrave;u Sắc</th>\r\n			<td>&nbsp; NUDE</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Chất liệu</th>\r\n			<td>&nbsp; LINING: 100% Polyester / UPPER: 45% Polyurethane, 55% Polyester / SOCK: 100% Polyester / OUTSOLE: 100% Rubber</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">HDSD &amp; BQ</th>\r\n			<td>&nbsp; Kh&ocirc;ng d&ugrave;ng chất tẩy rửa</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 'TOMMY HILFIGER là thương hiệu thời trang hàng đầu thế giới, tôn vinh phong cách cổ điển kiểu Mỹ, đặc trưng với những thiết kế preppy phá cách.  Được thành lập vào năm 1985, Tommy Hilfiger mang đến những thiết kế thời thượng cao cấp cho người tiêu dùng trê');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ratings`
--

CREATE TABLE `ratings` (
  `ra_id` int(11) NOT NULL,
  `ra_product_id` int(11) NOT NULL,
  `ra_number` int(11) NOT NULL,
  `ra_sdt` int(10) NOT NULL,
  `ra_content` varchar(255) NOT NULL,
  `ra_name_user` varchar(100) NOT NULL,
  `created_at` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `ratings`
--

INSERT INTO `ratings` (`ra_id`, `ra_product_id`, `ra_number`, `ra_sdt`, `ra_content`, `ra_name_user`, `created_at`) VALUES
(56, 20, 5, 1231231, 'asdasdas', '12312', '08/08/2021 10:01:38pm'),
(58, 20, 5, 123123123, 'asdasdasdas', '12312', '08/08/2021 10:02:01pm'),
(59, 21, 5, 0, 'asdasds', '12312', '08/08/2021 10:03:52pm'),
(60, 21, 5, 123123, 'asdasdasd', 'asdaasd', '08/08/2021 10:04:03pm'),
(63, 23, 3, 123123, 'asdasdasd', 'tran van linh', '09/08/2021 01:00:50pm'),
(64, 23, 3, 123123123, 'asdasd', 'Van Toan', '09/08/2021 01:01:14pm'),
(65, 23, 5, 123123, 'asdasdasd', 'asda', '09/08/2021 01:01:26pm'),
(66, 22, 3, 123123, '12312asd', 'asd', '09/08/2021 03:58:43pm');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slides`
--

CREATE TABLE `slides` (
  `s_id` int(11) NOT NULL,
  `s_name` varchar(100) NOT NULL,
  `s_link` varchar(100) NOT NULL,
  `s_avatar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `slides`
--

INSERT INTO `slides` (`s_id`, `s_name`, `s_link`, `s_avatar`) VALUES
(11, 'banner1', 'hos1', '1920x625_21628498798.png'),
(12, 'banner2', 'anh1', 'PG381628499746.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_phone` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_address` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_phone`, `user_email`, `user_address`, `user_password`) VALUES
(1, 'linh91123', '0981517187', '123@gmail.com', '123cao lo 123quan tphcm', '4297f44b13955235245b2497399d7a93');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `artisans`
--
ALTER TABLE `artisans`
  ADD PRIMARY KEY (`a_id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`c_id`);

--
-- Chỉ mục cho bảng `oder_detail`
--
ALTER TABLE `oder_detail`
  ADD PRIMARY KEY (`od_detail_id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`od_id`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`p_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`ra_id`);

--
-- Chỉ mục cho bảng `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`s_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `artisans`
--
ALTER TABLE `artisans`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `oder_detail`
--
ALTER TABLE `oder_detail`
  MODIFY `od_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `od_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `ratings`
--
ALTER TABLE `ratings`
  MODIFY `ra_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT cho bảng `slides`
--
ALTER TABLE `slides`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
