-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2018 at 06:47 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shah`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE IF NOT EXISTS `about` (
  `about_id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(1256) NOT NULL,
  `ceo_msg` varchar(1256) NOT NULL,
  `about_name` varchar(256) NOT NULL,
  `about_img` varchar(256) NOT NULL,
  `img` longblob NOT NULL,
  `about_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `heading` varchar(256) NOT NULL,
  PRIMARY KEY (`about_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`about_id`, `description`, `ceo_msg`, `about_name`, `about_img`, `img`, `about_date`, `heading`) VALUES
(1, '<h2><em><strong>Company Profile</strong></em></h2>\r\n\r\n<p>Candid Pharmaceuticals was established in 1998. We are manufacturing medicines and bringing forth a variety of pharmaceuticals products in the form of oral dosage and injectables. We, being a WHO cGMP compliant and ISO 9001-2008 certified company have our business set ups(distributional and promotional) all over Pakistan. Moreover, we are also exporting products to other countries and delivering uncompromising quality around the globe.&nbsp;<br />\r\n<br />\r\n<em><strong>VISION</strong></em><br />\r\nTo become global player in pharmaceuticals industry to facilitate the access of common person to excellent quality medicines at affordable price across the globe.&nbsp;<br />\r\n<br />\r\n<strong><em>MISSION</em></strong><br />\r\nTo achieve our goal by producing high tech pharmaceuticals products in accordance with cGMP (current Good Manufacturing Practices) recommended by the WHO and access to the global market, to make our products available at competitive price.</p>\r\n', '<h2><em><strong>CEO Message</strong></em></h2>\r\n\r\n<p>Candid Pharmaceuticals was established in 1998. We are manufacturing medicines and bringing forth a variety of pharmaceuticals products in the form of oral dosage and injectables. We, being a WHO cGMP compliant and ISO 9001-2008 certified company have our business set ups(distributional and promotional) all over Pakistan. Moreover, we are also exporting products to other countries and delivering uncompromising quality around the globe.&nbsp;<br />\r\n<br />\r\n<em><strong>VISION</strong></em><br />\r\nTo become global player in pharmaceuticals industry to facilitate the access of common person to excellent quality medicines at affordable price across the globe.&nbsp;<br />\r\n<br />\r\n<strong><em>MISSION</em></strong><br />\r\nTo achieve our goal by producing high tech pharmaceuticals products in accordance with cGMP (current Good Manufacturing Practices) recommended by the WHO and access to the global market, to make our products available at competitive price.</p>\r\n', 'Muhammad Ahsan', 'images/9597697488_4285626944_Winter-kids-down-jacket-for-boys-2015-new-fashion-fur-collar-coat-warm-cotton-coat-thick1-600x600.jpg', 0x696d616765732f323832313234303130345f616c6578616e6465722e6a7067, '2018-06-10 16:43:15', 'WELCOME TO tyche ecommerce store'),
(2, '<p>Why do we use it?</p>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Why do we use it?</h2>\r\n', '<p>Candid Pharmaceuticals was established in 1998. We are manufacturing medicines and bringing forth a variety of pharmaceuticals products in the form of oral dosage and injectables. We, being a WHO cGMP compliant and ISO 9001-2008 certified company have our business set ups(distributional and promotional) all over Pakistan. Moreover, we are also exporting products to other countries and delivering uncompromising quality around the globe.&nbsp;<br />\r\n<br />\r\nVISION<br />\r\nTo become global player in pharmaceuticals industry to facilitate the access of common person to excellent quality medicines at affordable price across the globe.&nbsp;<br />\r\n<br />\r\nMISSION<br />\r\nTo achieve our goal by producing high tech pharmaceuticals products in accordance with cGMP (current Good Manufacturing Practices) recommended by the WHO and access to the global market, to make our products available at competitive price.</p>\r\n', 'Muhammad Ahsan', 'images/7589490428_321127479_4143243921_1042fffd4808c6dae90ef972c4cb31d5 - Copy.jpg', '', '2018-06-10 16:43:46', 'WELCOME TO tyche ecommerce store');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_email` varchar(256) NOT NULL,
  `admin_password` varchar(256) NOT NULL,
  `photo` varchar(256) NOT NULL,
  `token` varchar(256) NOT NULL,
  `token_expire` varchar(256) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_email`, `admin_password`, `photo`, `token`, `token_expire`) VALUES
(1, 'admin@admin.com', '827ccb0eea8a706c4c34a16891f84e7b', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(256) NOT NULL,
  `cat_desc` varchar(1256) NOT NULL,
  `cat_image` varchar(1256) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_desc`, `cat_image`) VALUES
(2, 'Womens', '<p>Fashion is a popular style, especially in clothing, footwear, lifestyle products, accessories, makeup, hairstyle and body. Fashion is a distinctive and often constant trend in the style in which a person dresses. It is the prevailing styles in behaviour.</p>\r\n', 'cat_images/5426670823_4641772905_Yellow-Spring-Summer-Campaign-Dresses-2016-For-Boys-Girls-6.jpg'),
(3, 'Kids', '<p>Fashion is a popular style, especially in clothing, footwear, lifestyle products, accessories, makeup, hairstyle and body. Fashion is a distinctive and often constant trend in the style in which a person dresses. It is the prevailing styles in behaviour.</p>\r\n', 'cat_images/3785439470_06.jpg'),
(4, 'Shoes ', '<p>Fashion is a popular style, especially in clothing, footwear, lifestyle products, accessories, makeup, hairstyle and body. Fashion is a distinctive and often constant trend in the style in which a person dresses. It is the prevailing styles in behaviour.</p>\r\n', 'cat_images/3572049896_218980416_201710130947238653374.jpg'),
(5, 'Glasses', 'Fashion is a popular style, especially in clothing, footwear, lifestyle products, accessories, makeup, hairstyle and body. Fashion is a distinctive and often constant trend in the style in which a person dresses. It is the prevailing styles in behaviour an', 'cat_images/3541332358_4285626944_Winter-kids-down-jacket-for-boys-2015-new-fashion-fur-collar-coat-warm-cotton-coat-thick1-600x600.jpg'),
(6, 'Watches', 'Fashion is a popular style, especially in clothing, footwear, lifestyle products, accessories, makeup, hairstyle and body. Fashion is a distinctive and often constant trend in the style in which a person dresses. It is the prevailing styles in behaviour an', 'cat_images/416912388_Replica-Rolex-Watches-In-Pakistan-2012-4.jpeg'),
(7, 'Jeans', 'Fashion is a popular style, especially in clothing, footwear, lifestyle products, accessories, makeup, hairstyle and body. Fashion is a distinctive and often constant trend in the style in which a person dresses. It is the prevailing styles in behaviour an', 'cat_images/6215740216_5.jpg'),
(8, 'Casual_Shirts', 'Fashion is a popular style, especially in clothing, footwear, lifestyle products, accessories, makeup, hairstyle and body. Fashion is a distinctive and often constant trend in the style in which a person dresses. It is the prevailing styles in behaviour an', 'cat_images/6267745324_321127479_4143243921_1042fffd4808c6dae90ef972c4cb31d5 - Copy.jpg'),
(9, 'T_Shirts', 'Fashion is a popular style, especially in clothing, footwear, lifestyle products, accessories, makeup, hairstyle and body. Fashion is a distinctive and often constant trend in the style in which a person dresses. It is the prevailing styles in behaviour an', 'cat_images/624525887_3838329926_podroski-10 (1).jpg'),
(10, 'Purse', 'Fashion is a popular style, especially in clothing, footwear, lifestyle products, accessories, makeup, hairstyle and body. Fashion is a distinctive and often constant trend in the style in which a person dresses. It is the prevailing styles in behaviour an', 'cat_images/8999787146_SV003811-1-600x600.jpg'),
(11, 'Mens_Brands', 'Fashion is a popular style, especially in clothing, footwear, lifestyle products, accessories, makeup, hairstyle and body. Fashion is a distinctive and often constant trend in the style in which a person dresses. It is the prevailing styles in behaviour.', 'cat_images/6097929446_4143243921_1042fffd4808c6dae90ef972c4cb31d5 - Copy.jpg'),
(12, 'High_Heels', 'Fashion is a popular style, especially in clothing, footwear, lifestyle products, accessories, makeup, hairstyle and body. Fashion is a distinctive and often constant trend in the style in which a person dresses. It is the prevailing styles in behaviour.', 'cat_images/1248043492_49ceeb3fdd2a576817f24aaf8466c4bc.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `msg` varchar(256) NOT NULL,
  `timestamp` timestamp NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `full_name`, `email`, `msg`, `timestamp`) VALUES
(3, 'Ahmad Ali', 'ahsan@gmail.com', 'Hello ', '0000-00-00 00:00:00'),
(4, 'Hamad Ali', 'ali@gmailcom', 'Amazing Services', '0000-00-00 00:00:00'),
(5, 'Ahmad Ali', 'muhammadshahid.ms95@gmail.com', 'Helooooooo', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `g_id` int(11) NOT NULL AUTO_INCREMENT,
  `g_date` timestamp NOT NULL,
  `g_photo` varchar(256) NOT NULL,
  PRIMARY KEY (`g_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`g_id`, `g_date`, `g_photo`) VALUES
(1, '0000-00-00 00:00:00', 'images/8391734740_adrien.jpg'),
(3, '2018-06-02 08:23:45', 'images/2821240104_alexander.jpg'),
(4, '2018-06-02 09:46:04', 'images/279520926_user203428_pic51575_1346242413.jpg'),
(5, '2018-06-02 09:52:11', 'images/6211683391_alphacolor.jpg'),
(6, '2018-06-02 09:58:27', 'images/4416867904_1.jpg'),
(7, '2018-06-02 09:58:32', 'images/7837712412_6.jpg'),
(8, '2018-06-02 09:58:37', 'images/721310954_7.jpg'),
(9, '2018-06-02 09:58:41', 'images/7402703963_3.jpeg'),
(10, '2018-06-02 09:58:46', 'images/373080977_201710130947238653374.jpg'),
(11, '2018-06-02 09:58:51', 'images/9145143977_8.jpg'),
(12, '2018-06-02 09:58:58', 'images/6547569195_4.jpg'),
(13, '2018-06-02 09:59:06', 'images/5749441755_5.jpg'),
(14, '2018-06-09 05:12:33', 'images/3838329926_podroski-10 (1).jpg'),
(15, '2018-06-09 05:14:17', 'images/4641772905_Yellow-Spring-Summer-Campaign-Dresses-2016-For-Boys-Girls-6.jpg'),
(16, '2018-06-09 07:12:38', 'images/337419821_Winter-Color-Match.jpg'),
(17, '2018-06-09 07:36:54', 'images/2996055759_pakistani-modeljeans.jpg'),
(18, '2018-06-09 14:51:30', 'images/2815096818_bird.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_id` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `status` varchar(111) NOT NULL DEFAULT 'pending',
  `payment_method` varchar(111) NOT NULL,
  `timestamp` timestamp NOT NULL,
  `email` varchar(256) NOT NULL,
  `c_name` varchar(256) NOT NULL,
  `card_number` varchar(256) NOT NULL,
  `csc` varchar(256) NOT NULL,
  `month` varchar(256) NOT NULL,
  `year` varchar(256) NOT NULL,
  `user_id` varchar(256) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `u_id`, `total`, `status`, `payment_method`, `timestamp`, `email`, `c_name`, `card_number`, `csc`, `month`, `year`, `user_id`) VALUES
(12, 12, 4500, '2', '0', '2018-07-04 17:13:17', 'kashif@gmail.com', '', '', '', '', '', '17'),
(13, 12, 4500, '1', 'cod', '2018-07-04 17:14:01', 'kashif@gmail.com', '', '', '', '', '', '18'),
(14, 15, 25000, '1', 'cod', '2018-07-05 17:07:56', 'ahmad.shah@gmail.com', '', '', '', '', '', '19'),
(15, 11, 6000, '2', 'cc', '2018-07-08 11:23:55', 'ahsan@gmail.com', '', '', '', '', '', ''),
(16, 11, 6000, '1', 'cc', '2018-07-08 11:24:07', 'ahsan@gmail.com', '', '', '', '', '', ''),
(17, 11, 6000, '2', 'cc', '2018-07-08 11:27:30', 'ahsan@gmail.com', '', '', '', '', '', 'user_id'),
(18, 11, 6000, '1', 'cc', '2018-07-08 11:27:40', 'ahsan@gmail.com', '', '', '', '', '', 'user_id'),
(19, 11, 6000, '1', 'cc', '2018-07-08 11:28:18', 'ahsan@gmail.com', '', '', '', '', '', '20'),
(20, 11, 6000, '2', 'cc', '2018-07-08 11:29:53', 'ahsan@gmail.com', '', '', '', '', '', '20');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE IF NOT EXISTS `order_items` (
  `o_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` int(11) NOT NULL,
  `p_price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `order_id` varchar(256) NOT NULL,
  PRIMARY KEY (`o_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `order_tracking`
--

CREATE TABLE IF NOT EXISTS `order_tracking` (
  `track_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `message` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `privacy_policy`
--

CREATE TABLE IF NOT EXISTS `privacy_policy` (
  `privacy_id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(4556) NOT NULL,
  `timestamp` timestamp NOT NULL,
  PRIMARY KEY (`privacy_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `privacy_policy`
--

INSERT INTO `privacy_policy` (`privacy_id`, `description`, `timestamp`) VALUES
(1, '<h2>Privacy Policy</h2>\r\n\r\n<p>Elite Pharmaceuticals Inc. (Elite) knows that you care how information about you is used and shared, and we appreciate your trust that we will do so carefully and sensibly. This notice describes our privacy policy. By visiting www.elitepharma.com, you are accepting the practices described in this Privacy Policy. Please carefully read our Terms of Use and this Privacy Policy completely before using our website.&nbsp;<br />\r\nBecause we will continue to implement new technologies and improve the services and features we provide on our website, this statement is subject to change without prior notice. We reserve the right to update our Privacy Policy at any time. Any changes or updates will be effective immediately upon posting to this website. For that reason, we encourage you to review this statement periodically. By using our website, you agree to be bound by our Terms of Use and our Privacy Policy in effect at that time without modification. If you do not agree to these terms, please exit from this website immediately.&nbsp;<br />\r\n<strong>Information Sharing&nbsp;</strong><br />\r\nElite is the sole owner of any information collected on this website. We will not sell, share, or rent this information to others in ways different from what is disclosed in this policy. Elite may collect information from our users at several different points on our website.&nbsp;<br />\r\nWe intend to give you as much control as reasonably possible over your personal information. In general, you can visit www.elitepharma.com without telling us who you are or revealing any information about yourself. There are times when we may need information from you in order to service your needs. If you choose to give us personal information we may use that information to correspond with you or provide you with requested materials. If you tell us that you do not wish to have this information used as a basis for further contact, we will respect your wishes. We may analyze this data for trends and statistics, but we will not share the information with third parties unless necessary to provide services to you or as may be required by law.&nbsp;<br />\r\n<strong>Logging Site Traffic&nbsp;</strong><br />\r\nElite maintains log files of the site traffic on www.elitepharma.com. We do not link any information gathered in these log files to personal information. Log files are used to manage traffic loads, identify the content most commonly accessed, and information technology requirements for providing reliable service. Information collected includes IP addresses and browser types.&nbsp;<br />\r\n<strong>Cookies&nbsp;</strong><br />\r\nCookies&nbsp;can be used to provide you with tailored information from a website. This website may use&nbsp;cookies&nbsp;so that we can better serve you when you return to our site. A cookie is a text file that is placed on your hard disk by a Web server. Cookies are uniquely assigned to you, and can only be read by a Web server in the domain that issued the cookie to you. Cookies cannot be used to run programs or deliver viruses to your computer.&nbsp;<br />\r\nMost Web browsers automatically accept cookies, but you can usually modify your browser setting to decline cookies. If you choose to decline cookies, you may not be able to fully utilize all features of this website. You have the ability to delete cookie files from your hard drive at any time.</p>\r\n', '2018-07-06 19:47:35');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` varchar(11) NOT NULL,
  `p_name` varchar(256) NOT NULL,
  `p_desc` varchar(1256) NOT NULL,
  `p_price` varchar(256) NOT NULL,
  `p_image` varchar(256) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `cat_id`, `p_name`, `p_desc`, `p_price`, `p_image`) VALUES
(1, '11', 'Shoes', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '100', 'product_img/6546998163_7589490428_321127479_4143243921_1042fffd4808c6dae90ef972c4cb31d5 - Copy.jpg'),
(2, '2', 'Shoes', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '1500', 'product_img/626108854_218980416_201710130947238653374.jpg'),
(3, '2', 'Glass', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2500', 'product_img/4085980878_34e111f6bee3c4a4da388caf8fcb2fa6.jpg'),
(4, '3', 'Shirts', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '3500', 'product_img/3408576970_CH_FW16_Lookbook_Kids_74-700x1050.jpg'),
(5, '2', 'Dress', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '5000', 'product_img/18418959_161.jpg'),
(6, '11', 'Men''s Kurta', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '3000', 'product_img/2224530428_Chevin-Shirley-Eid-Collection-2016-2017-for-Mens-1.jpg'),
(7, '11', 'Men''s Casual Dress', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2500', 'product_img/1272360474_J.-Eid-Kurta-Shalwar-Kameez-Collection-for-Men-Boys-2015.jpg'),
(8, '10', 'Purse', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2000', 'product_img/8976985591_7.jpg'),
(9, '11', 'Mens Purse', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '1500', 'product_img/9176688261_6.jpg'),
(10, '11', 'Mens Watches', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '6000', 'product_img/8759480146_99a941ff25f1a5197d93b2d180db7da4.jpg'),
(11, '2', 'Ladies Wathes', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '10000', 'product_img/800987120_davidson-red-pu-analog-women-watch-da-w1.jpg'),
(12, '6', 'Watches', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '6500', 'product_img/4078894641_8d0943a49ec12771a7d463a2bb07a0d3.jpg'),
(13, '8', 'Shirts', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '5000', 'product_img/4948970584_20.jpg'),
(14, '9', 'T-Shirt', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2000', 'product_img/602872550_CH_FW16_Lookbook_Kids_74-700x1050.jpg'),
(15, '11', 'Mens Shirts', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '3200', 'product_img/5004261818_04831f8249e842bc40f9b00316bb5dce.jpg'),
(16, '2', 'LAdies Dress', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '5500', 'product_img/5438071600_6-different-al-karam-formal-pret-for-women-collection-2016-5.jpg'),
(17, '2', 'Ladies Fashion', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>\r\n', '5500', 'product_img/2259304791_3607-A_Latest-designs-of-salwar-kameez-long-dress-pattern-for-ladies-pink-satin-servani-type-different-cut-embroidered-salwar-kameez-with-pink-satin-patiala-bottom_1024x1024.jpg'),
(18, '12', 'Stylo Heels', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '1500', 'product_img/6679953218_Fancy-Eid-Flat-Shoes-Design-2015-for-Girls-1.jpg'),
(19, '12', 'New Style', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2500', 'product_img/1007164460_Stylo-Shoes-Collection-for-Eid-2015-6.jpg'),
(20, '12', 'Fashion Collection', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '3500', 'product_img/2384458513_Stylo-Shoes-Collection-for-Eid-2015-7.jpeg'),
(21, '12', 'High Heel Shoes', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '1000', 'product_img/6139733444_superthumb.jpg'),
(22, '12', 'Ladies Fashion ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '500', 'product_img/8308125302_s1.jpg'),
(23, '12', 'Shoes', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '3500', 'product_img/1858811992_s2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `return_product`
--

CREATE TABLE IF NOT EXISTS `return_product` (
  `return_id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(2222) NOT NULL,
  `timestamp` timestamp NOT NULL,
  PRIMARY KEY (`return_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `return_product`
--

INSERT INTO `return_product` (`return_id`, `description`, `timestamp`) VALUES
(1, '<h3>We only exchange if any product has manufacturing fault, broken or scratched, only at the time of purchase. You have to inform us if cannot bring back right away. email at arslan@shophive.com along with your invoice number and small description. Original box and all accessories should be returned aswell. If the item is dispatched to you in different city then we will provide the Exchange and the shipping cost which our customer will bear to send us back. Please consult shophive support for shipping back methods If you recieve a product that is not what we have described in our catalog (replica, specs and image)&nbsp; you are not bound to keep that product, we will return your money. Please inform us within 24 hours of recieveing the product. email us at arslan@shophive.com</h3>\r\n', '2018-07-09 18:03:41');

-- --------------------------------------------------------

--
-- Table structure for table `terms_of_use`
--

CREATE TABLE IF NOT EXISTS `terms_of_use` (
  `terms_id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(4556) NOT NULL,
  `timestamp` timestamp NOT NULL,
  PRIMARY KEY (`terms_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `terms_of_use`
--

INSERT INTO `terms_of_use` (`terms_id`, `description`, `timestamp`) VALUES
(1, '<h2>Terms Of Use</h2>\r\n\r\n<p>Please carefully read these Terms of Use and our Privacy Policy before using our website. By using the Elite Pharmaceuticals Inc. Elite website, you agree to follow and be bound by these Terms of Use and our Privacy Policy without modification. In the case of any violation of these Terms of Use, Elite reserves the right to seek all remedies available.&nbsp;<br />\r\nBecause we will continue to implement new technologies and improve the services and features we provide on our website, this statement is subject to change without prior notice. Elite reserves the right to update these Terms of Use statement at any time. Any changes or updates will be effective immediately upon posting to this website. For that reason, we encourage you to review this statement periodically. By using our website, you agree to be bound by the Terms of Use in effect at that time. If you do not agree to these terms, please exit from this website immediately.&nbsp;<br />\r\n<strong>Use of Website</strong>&nbsp;<br />\r\nElites website may contain other proprietary notices and copyright information, the terms of which must be observed and followed. Information on this website may contain technical inaccuracies or typographical errors. Information may be changed or updated without notice. Elite reserves the right to refuse service in its discretion, including, without limitation, if Elite believes that a website users conduct violates applicable law or is harmful to the interests of Elite.&nbsp;<br />\r\n<strong>Submitted Information&nbsp;</strong><br />\r\nNo information or material provided to Elite by you through our website may contain vulgar, obscene, threatening or otherwise unlawful language or material. Elite will not release your name or otherwise publicize the fact that you submitted materials or other information to us unless we obtain your permission to use your name or we are required to do so by law. Please review our Privacy Policy for a description of how we handle personal information submitted to us.&nbsp;<br />\r\n<strong>Elite Information&nbsp;</strong><br />\r\nElite has made a conscientious effort to display and describe information about Elite on the site accurately so that you can get a good idea of our business. Furthermore, Elite is constantly improving its information. The materials on this website are for your general educational information only. Elite does not practice medicine or provide medical services or advice, and the information on this website should not be considered medical advice. You should always rely on your health care professional for diagnosis and treatment.&nbsp;<br />\r\n<strong>Links to Other Websites</strong>&nbsp;<br />\r\nElites website may contain links to other websites. Elite is providing these links to you only as a convenience, and the inclusion of any link does not imply endorsement by Elite of the linked website or any association with its operators. Elite makes no representations whatsoever about any other site you may access through www.elitepharma.com. Any concerns regarding any product or service offered by a website to which the Elite website is linked or the link itself should be directed to the operator of that specific website and not to Elite. If you use these links, you are leaving this website. Elite has not reviewed all of these third-party sites and does not have control over, and is in no manner responsible or liable for, the availability and content of the websites to which Elites website is linked. Elite makes no representations whatsoever about any other website you may access through Elite and disclaims all liability with regard to your access to such linked websites. If you access any third-party site linked to this website, you do so at your own risk.&nbsp;<br />\r\nUnless otherwise set forth in a written agreement between you and Elite, you must adhere to Elites linking policy as follows: (i) any link to Elites website must be a text only link clearly marked Elite website,&nbsp;(ii) the appearance, position and other aspects of the link may not be such as to damage or dilute the goodwill associated with Elites name and trademarks, and (iii) the link must point to the following URL listed below: www.elitepharma.com and not to other pages within our website, (iv) the appearance, position and other attributes of the link may not create the false appearance that your organization or entity is sponsored by, affiliated with, or associated with Elite, and (v) Elite reserves the right to revoke its consent to the link at', '2018-07-07 18:21:09'),
(2, 'Elite Pharmaceuticals Inc.  knows that you care how information about you is used and shared, and we appreciate your trust that we will do so carefully and sensibly. This notice describes our privacy policy. By visiting www.elitepharma.com, you are accepting the practices described in this Privacy Policy. Please carefully read our Terms of Use and this Privacy Policy completely before using our website. ', '2018-07-06 18:57:14');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(256) NOT NULL,
  `last_name` varchar(256) NOT NULL,
  `u_name` varchar(256) NOT NULL,
  `gender` varchar(256) NOT NULL,
  `u_email` varchar(256) NOT NULL,
  `password` varchar(111) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip_address` varchar(122) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `first_name`, `last_name`, `u_name`, `gender`, `u_email`, `password`, `reg_date`, `ip_address`) VALUES
(1, 'Muhammad', 'Shahid', '', '', 'ms@gmail.com', '0', '0000-00-00 00:00:00', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36'),
(2, 'Ahsan', 'Ali', '', '', 'ahsan@gmail.com', '0', '0000-00-00 00:00:00', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36'),
(3, 'Ali', 'Hassan', '', '', 'ali@gmail.com', '0', '0000-00-00 00:00:00', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36'),
(4, 'Ahsan', 'Ali', '', '', 'ms@gmail.com', '0', '0000-00-00 00:00:00', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36'),
(5, 'Hamad', 'Ali', '', '', 'hamad@gmail.com', '0', '2018-05-31 07:55:56', ''),
(6, 'Kashif', 'Ahmad', '', '', 'kash@gmail.com', '0', '2018-05-31 07:57:09', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36'),
(7, 'Muhammad', 'Shahid', 'shah_12', '', 'ahsan@gmail.com', '0', '0000-00-00 00:00:00', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36'),
(8, 'Muhammad', 'Shahid', 'shah_12', '', 'ahsan@gmail.com', '230', '2018-05-31 10:55:57', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36'),
(9, 'Muhammad', 'Ali', '', '', '', '321', '2018-05-31 10:59:05', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36'),
(10, 'Muhammad', 'Ali', '', '', '', '321', '2018-05-31 10:59:33', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36'),
(11, 'Muhammad', 'Hassan', 'hassan', '', 'ahsan@gmail.com', '202cb962ac59075b964b07152d234b70', '2018-05-31 11:09:22', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36'),
(12, 'Kashif', 'Ali', 'kash', '', 'kashif@gmail.com', '202cb962ac59075b964b07152d234b70', '2018-05-31 12:15:13', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36'),
(13, 'Hamad', 'Shah', 'h_shah', 'Male', 'hamad@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2018-05-31 17:30:50', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36'),
(14, 'Ahmad', 'Ali', 'ahmad', 'Male', 'ahmad@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2018-06-01 06:46:57', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36'),
(15, 'Ahmad', 'Shahid', 'Ahmaad_Shahid', 'Male', 'ahmad.shah@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2018-07-05 17:02:02', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36'),
(16, 'Arslan', 'Ali', 'arslan_12', 'Male', 'arslan.ali@gmailcom', '827ccb0eea8a706c4c34a16891f84e7b', '2018-07-06 17:41:33', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE IF NOT EXISTS `user_details` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `country` varchar(256) NOT NULL,
  `f_name` varchar(256) NOT NULL,
  `l_name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `address` varchar(256) NOT NULL,
  `city` varchar(256) NOT NULL,
  `zip` varchar(226) NOT NULL,
  `mobile` varchar(22) NOT NULL,
  `u_id` varchar(122) NOT NULL,
  `payment` varchar(256) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`user_id`, `country`, `f_name`, `l_name`, `email`, `address`, `city`, `zip`, `mobile`, `u_id`, `payment`) VALUES
(1, 'Pakistan', 'Muhammad', 'Ali', '', 'ksaydygjhb slidsuvgbasmlyuaofgb', 'Karachi', '52365', '322582025206', '13', 'cod'),
(2, 'Pakistan', 'Muhammad', 'Ahmad', '', 'ksaydygjhb slidsuvgbasmlyuaofgb', 'Karachi', '52365', '322582025206', '13', 'on'),
(3, 'Pakistan', 'Muhammad', 'Ali', '', 'ksaydygjhb slidsuvgbasmlyuaofgb', 'Karachi', '52365', '322582025206', '13', 'cod'),
(4, 'Pakistan', 'Muhammad', 'Ali', '', 'ksaydygjhb slidsuvgbasmlyuaofgb', 'Karachi', '52365', '322582025206', '13', 'cod'),
(5, 'Pakistan', 'Ahsan', 'Ali', '', 'ksaydygjhb slidsuvgbasmlyuaofgb', 'Karachi', '52365', '322582025206', '13', 'cod'),
(6, 'Pakistan', 'Kashif', 'Ahmad', '', 'Karachi', 'lahore', '54598', '322582025206', '12', 'cod'),
(7, 'Pakistan', 'Kashif', 'Ali', 'ali@gmailcom', 'ksaydygjhb slidsuvgbasmlyuaofgb', 'Karachi', '52365', '322582025206', '12', 'cod'),
(8, 'Pakistan', 'Ahmad', 'Shahid', 'ali@gmailcom', 'Gulberg 3, Lahore', 'Lahore', '52365', '03367528443', '15', 'cod'),
(9, 'Pakistan', 'Ahmad', 'Shahid', 'ali@gmailcom', 'Gulberg 3, Lahore', 'Lahore', '52365', '03367528443', '15', 'cc'),
(10, 'Pakistan', 'Muhammad', 'Ali', 'ali@gmailcom', 'ksaydygjhb slidsuvgbasmlyuaofgb', 'Karachi', '52365', '322582025206', '15', 'cc'),
(11, 'Pakistan', 'Muhammad', 'Ali', 'ali@gmailcom', 'ksaydygjhb slidsuvgbasmlyuaofgb', 'Karachi', '52365', '322582025206', '15', 'cc'),
(12, 'Pakistan', 'Muhammad', 'Shahid', 'ahmad.shah@gmail.com', 'Gulberg 3, Lahore', 'Lahore', '52365', '322582025206', '15', 'easyPaisa'),
(13, 'Pakistan', 'Muhammad', 'Ali', 'ahmad.shah@gmail.com', 'ksaydygjhb slidsuvgbasmlyuaofgb', 'Karachi', '52365', '322582025206', '15', 'easyPaisa'),
(14, 'Pakistan', 'Muhammad', 'Ali', 'ahmad.shah@gmail.com', 'ksaydygjhb slidsuvgbasmlyuaofgb', 'Karachi', '52365', '322582025206', '15', 'cc'),
(15, 'Pakistan', 'Muhammad', 'Ali', 'ahmad.shah@gmail.com', 'ksaydygjhb slidsuvgbasmlyuaofgb', 'Karachi', '52365', '322582025206', '15', 'cc'),
(16, 'Pakistan', 'Muhammad', 'Ali', 'ahmad.shah@gmail.com', 'ksaydygjhb slidsuvgbasmlyuaofgb', 'Karachi', '52365', '322582025206', '15', 'cc'),
(17, 'Pakistan', 'Muhammad', 'Ali', 'ahmad.shah@gmail.com', 'ksaydygjhb slidsuvgbasmlyuaofgb', 'Karachi', '52365', '322582025206', '15', 'easyPaisa'),
(18, 'Pakistan', 'Muhammad', 'Ali', 'ahmad.shah@gmail.com', 'ksaydygjhb slidsuvgbasmlyuaofgb', 'Karachi', '52365', '322582025206', '15', 'cc'),
(19, 'Pakistan', 'Muhammad', 'Ali', 'ahmad.shah@gmail.com', 'ksaydygjhb slidsuvgbasmlyuaofgb', 'Karachi', '52365', '322582025206', '15', 'easyPaisa'),
(20, 'Pakistan', 'Muhammad', 'Ahsan', 'ahsan@gmail.com', 'Gulberg 3, Lahore', 'Lahore', '52632', '03038702112', '11', 'cc');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE IF NOT EXISTS `wishlist` (
  `w_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` varchar(256) NOT NULL,
  `u_id` varchar(256) NOT NULL,
  `timestamp` timestamp NOT NULL,
  PRIMARY KEY (`w_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`w_id`, `p_id`, `u_id`, `timestamp`) VALUES
(2, '13', '12', '2018-07-06 18:35:16');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
