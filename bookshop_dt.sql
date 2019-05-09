-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 19, 2016 at 11:53 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bookshop_dt`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `title` varchar(255) character set utf8 NOT NULL,
  `author` varchar(50) character set utf8 NOT NULL,
  `publisher` varchar(20) character set utf8 NOT NULL,
  `publishingdate` varchar(20) NOT NULL,
  `subcategoryid` smallint(5) unsigned NOT NULL,
  `picture` varchar(4) NOT NULL,
  `epubext` varchar(5) NOT NULL,
  `mobiext` varchar(5) NOT NULL,
  `pdfext` varchar(5) NOT NULL,
  `datetime` datetime NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `subcategoryid` (`subcategoryid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=62 ;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `publisher`, `publishingdate`, `subcategoryid`, `picture`, `epubext`, `mobiext`, `pdfext`, `datetime`) VALUES
(32, 'কৈলাশে কেলেঙ্কারি', 'সত্যজিৎ রায়', 'আনন্দ পাব্লিকেশন্স', '11/09/2016', 22, 'jpg', '', '', '', '2016-11-09 18:39:58'),
(33, 'ফেলুদার বাক্স-রহস্য', 'সত্যজিৎ রায়', 'আনন্দ পাব্লিকেশন্স', '11/09/1972', 22, 'jpg', '', '', '', '2016-11-26 00:46:56'),
(34, 'প্রোফেসর শঙ্কু', 'সত্যজিৎ রায়', 'আনন্দ পাব্লিকেশন্স', '11/09/2016', 22, 'jpg', '', '', '', '2016-11-09 18:45:08'),
(36, 'ফেলুদার গোয়েন্দাগিরি', 'সত্যজিৎ রায়', 'আনন্দ পাব্লিকেশন্স', '11/09/2016', 3, 'png', '', '', '', '2016-11-20 13:30:12'),
(37, 'প্রোফেসর শঙ্কু ও একশৃঙ্গ অভিযান', 'সত্যজিৎ রায়', 'আনন্দ পাব্লিকেশন্স', '11/09/2016', 3, 'png', '', '', '', '2016-11-21 17:51:53'),
(38, 'কঙ্কাল দ্বীপ', 'রকিব হাসান', 'কিশোর থ্রিলার', '09/13/2006', 26, 'jpg', '', '', '', '2016-11-20 11:39:01'),
(39, 'কিশোর রচনাসমগ্র', 'রবীন্দ্রনাথ ঠাকুর ', 'হিজিবিজি', '11/20/2014', 22, 'jpg', '', '', '', '2016-11-20 11:50:27'),
(40, 'হারাধনের দ্বীপ', 'হেমেন্দ্রকুমার রায়', 'কিশোর থ্রিলার', '11/20/2016', 22, 'jpg', '', '', '', '2016-11-20 11:53:01'),
(41, 'চারের সংকেত', 'স্যার আর্থার কোনান ডয়েল', 'কিশোর রহস্য উপন্যাস', '11/20/2013', 19, 'jpg', '', '', '', '2016-11-20 11:55:48'),
(42, 'রয়েল বেঙ্গল রহস্য', 'সত্যজিৎ রায়', 'আনন্দ পাব্লিকেশন্স', '11/26/1972', 22, 'jpg', '', '', '', '2016-11-26 15:17:36'),
(43, 'সমাদ্দারের চাবি', 'সত্যজিৎ রায়', 'আনন্দ পাব্লিকেশান', '11/26/1972', 22, 'jpg', '', '', '', '2016-11-26 15:22:44'),
(44, 'সোনার কেল্লা', 'সত্যজিৎ রায়', 'আনন্দ পাব্লিকেশান', '11/26/1972', 22, 'jpg', '', '', '', '2016-11-26 15:25:38'),
(45, 'বাদশাহী আংটি', 'সত্যজিৎ রায়', 'আনন্দ পাব্লিকেশান', '11/26/1978', 22, 'jpg', '', '', '', '2016-11-26 15:27:23'),
(46, 'গ্যাংটকে গণ্ডগোল', 'সত্যজিৎ রায়', 'আনন্দ পাব্লিকেশান', '11/26/1972', 22, 'jpg', '', '', '', '2016-11-26 15:29:12'),
(47, 'প্রোফেসর শঙ্কু', 'সত্যজিৎ রায়', 'আনন্দ পাব্লিকেশান', '11/26/1972', 22, 'jpg', '', '', '', '2016-11-26 15:41:20'),
(48, 'পাঁচ প্রোফেসর শঙ্কু', 'সত্যজিৎ রায়', 'আনন্দ পাব্লিকেশান', '11/26/2016', 23, 'jpg', '', '', '', '2016-11-26 15:43:46'),
(49, 'ব্যোমযাত্রীর ডায়রী', 'সত্যজিৎ রায়', 'আনন্দ পাব্লিকেশান', '11/26/1972', 22, 'jpg', '', '', '', '2016-11-26 16:46:59'),
(50, 'দ্য মেমোয়্যার্স অফ শার্লক হোমস', 'স্যার আর্থার কোনান ডয়েল', 'হিজিবিজি	', '11/26/2016', 3, 'jpg', '', '', '', '2016-11-26 16:50:12'),
(51, 'এ স্টাডি ইন স্কারলেট', 'স্যার আর্থার কোনান ডয়েল', 'হিজিবিজি	', '11/26/2016', 19, 'jpg', '', '', '', '2016-11-26 16:51:02'),
(52, 'শার্লক হোমসের অভিযান', 'স্যার আর্থার কোনান ডয়েল (অনুবাদ: অদ্রীশ বর্ধন)', 'হিজিবিজি	', '11/26/2016', 16, 'jpg', '', '', '', '2016-11-26 16:52:17'),
(54, 'কিশোর আলো', 'হাসান মাহ্মুদ', 'হিজিবিজি', '11/26/2016', 19, 'jpg', '', '', '', '2016-11-26 16:58:23'),
(55, 'কিশোর আলো - অক্টোবর ২০১৬', 'হাসান মাহ্মুদ', 'হিজিবিজি', '11/26/2016', 20, 'jpg', '', '', '', '2016-11-26 16:59:22'),
(56, 'কিশোর আলো - আগষ্ট ২০১৬', 'হাসান মাহ্মুদ', 'হিজিবিজি', '11/26/2016', 29, 'jpg', '', '', '', '2016-11-26 17:00:29'),
(59, 'অজ্ঞাতবাস', 'সঞ্জীব চট্টোপাধ্যায়', 'হিজিবিজি', '12/07/2016', 20, 'jpg', '', '', '', '2016-12-07 13:15:39');

-- --------------------------------------------------------

--
-- Table structure for table `book_tags`
--

CREATE TABLE `book_tags` (
  `bookid` int(10) unsigned NOT NULL,
  `tagsid` smallint(5) unsigned NOT NULL,
  KEY `bookid` (`bookid`),
  KEY `tagsid` (`tagsid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_tags`
--

INSERT INTO `book_tags` (`bookid`, `tagsid`) VALUES
(32, 3),
(34, 3),
(38, 5),
(39, 5),
(40, 5),
(41, 5),
(42, 3),
(43, 3),
(44, 3),
(45, 3),
(46, 3),
(47, 2),
(48, 2),
(49, 2),
(50, 1),
(51, 1),
(52, 5),
(52, 3),
(52, 2),
(54, 6),
(54, 5),
(55, 6),
(55, 5),
(56, 6),
(56, 5);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` tinyint(3) unsigned NOT NULL auto_increment,
  `name` varchar(40) character set utf8 NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(3, 'কিশোরদের বই'),
(4, 'ছোটদের বই'),
(2, 'বড়দের বই');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `userid` smallint(5) unsigned NOT NULL,
  `booksid` int(10) unsigned NOT NULL,
  `description` varchar(200) character set utf8 NOT NULL,
  `datetime` datetime NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `userid` (`userid`),
  KEY `booksid` (`booksid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `userid`, `booksid`, `description`, `datetime`) VALUES
(5, 1, 59, 'Hello world', '2016-12-09 15:12:15'),
(9, 3, 56, 'hello', '2016-12-09 16:08:36'),
(13, 1, 59, 'beparta ami dekchi', '2016-12-09 20:07:08'),
(21, 3, 59, 'ei boiti ami khujchilam', '2016-12-12 02:18:12');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `time`) VALUES
(2, 'Hasan Mamun', 'mamun@gmail.com', 'Novel', '01:43 am'),
(3, 'Hasan Mahmud', 'hasan@gmail.com', 'Bangla Novel', '01:44 am'),
(4, 'Saif Ahmad', 'saif@gmail.com', 'English Novel', '01:45 am');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` smallint(5) unsigned NOT NULL auto_increment,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `name`) VALUES
(1, 'Bangladesh'),
(4, 'Bhutan'),
(2, 'India'),
(7, 'Japan'),
(6, 'UK'),
(5, 'USA');

-- --------------------------------------------------------

--
-- Table structure for table `duration`
--

CREATE TABLE `duration` (
  `id` tinyint(3) unsigned NOT NULL,
  `months` varchar(15) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `duration`
--

INSERT INTO `duration` (`id`, `months`) VALUES
(6, '6 months'),
(12, '12 months'),
(24, '24 months');

-- --------------------------------------------------------

--
-- Table structure for table `pay4mem`
--

CREATE TABLE `pay4mem` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `transferid` varchar(50) NOT NULL,
  `taka` int(10) unsigned NOT NULL,
  `paymentdate` datetime NOT NULL,
  `userid` smallint(5) unsigned NOT NULL,
  `bankid` tinyint(3) unsigned NOT NULL,
  `duration` int(10) unsigned NOT NULL,
  `activation` smallint(1) unsigned NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `userid` (`userid`),
  KEY `bankid` (`bankid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `pay4mem`
--


-- --------------------------------------------------------

--
-- Table structure for table `paymentmethod`
--

CREATE TABLE `paymentmethod` (
  `id` tinyint(3) unsigned NOT NULL auto_increment,
  `bank_name` varchar(50) character set utf8 NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `paymentmethod`
--

INSERT INTO `paymentmethod` (`id`, `bank_name`) VALUES
(2, 'DBBL'),
(4, 'bKash'),
(7, 'Bank of india');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `bookid` int(10) unsigned NOT NULL,
  `userid` smallint(5) unsigned NOT NULL,
  `rating_point` smallint(1) unsigned NOT NULL,
  `person` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `bookid` (`bookid`),
  KEY `userid` (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id`, `bookid`, `userid`, `rating_point`, `person`) VALUES
(10, 59, 1, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` smallint(5) unsigned NOT NULL auto_increment,
  `name` varchar(40) character set utf8 NOT NULL,
  `categoryid` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `name` (`name`,`categoryid`),
  KEY `categoryid` (`categoryid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `name`, `categoryid`) VALUES
(1, 'অনুবাদ', 2),
(2, 'অভিধান', 2),
(3, 'অভিযান', 2),
(4, 'আইন বিষয়ক/আইন', 2),
(5, 'আত্মউন্নয়ন', 2),
(7, 'ইতিহাস', 2),
(18, 'উপদেশমূলক গল্প', 4),
(8, 'উপন্যাস', 2),
(9, 'কাব্যগ্রন্থ', 2),
(32, 'কিশোর অনুবাদ', 3),
(26, 'কিশোর অভিযান', 3),
(22, 'কিশোর উপন্যাস', 3),
(29, 'কিশোর কবিতা', 3),
(23, 'কিশোর গল্পসংগ্রহ', 3),
(25, 'কিশোর গোয়েন্দা', 3),
(34, 'কিশোর পৌরাণিক গল্প', 3),
(31, 'কিশোর বিজ্ঞান', 3),
(24, 'কিশোর ভৌতিক', 3),
(33, 'কিশোর রম্যরচনা', 3),
(10, 'খেলাধুলা', 2),
(12, 'গবেষণা', 2),
(13, 'গল্পগ্রন্থ', 2),
(19, 'গোলক ধাঁধা', 4),
(20, 'ছবিতে রং করো', 4),
(16, 'ছবির বই', 4),
(28, 'ছোটদের জীবনী', 3),
(30, 'ছড়া', 3),
(17, 'ছড়া', 4),
(6, 'জীবনী', 2),
(14, 'ডায়েরী', 2),
(15, 'দর্শন', 2),
(21, 'নিজে নিজে ছবি আঁক', 4),
(27, 'রূপকথা ও লোককথা', 3),
(11, 'সাহিত্য আলোচনা', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` smallint(5) unsigned NOT NULL auto_increment,
  `name` varchar(40) character set utf8 NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`) VALUES
(7, 'অদ্ভুতুড়ে সিরিজ'),
(6, 'আলোর পাঠশালা'),
(5, 'কিশোর পত্রিকা'),
(4, 'পান্ডব গোয়েন্দা'),
(3, 'ফেলুদা'),
(2, 'শঙ্কু সিরিজ'),
(1, 'শার্লক হোমস');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` smallint(5) unsigned NOT NULL auto_increment,
  `name` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `type` varchar(1) NOT NULL,
  `status` varchar(40) NOT NULL,
  `countryid` smallint(5) unsigned NOT NULL,
  `picture` varchar(4) NOT NULL,
  `datetime` datetime NOT NULL,
  `transfer_id` varchar(100) NOT NULL,
  `activation` tinyint(1) unsigned NOT NULL,
  `visibility` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `countryid` (`countryid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `type`, `status`, `countryid`, `picture`, `datetime`, `transfer_id`, `activation`, `visibility`) VALUES
(1, 'Saif ahmed', 'saifad303@gmail.com', '321289', 'a', '', 1, 'jpg', '2016-11-16 18:23:30', '', 1, 1),
(2, 'Hassan mahmud', 'hasan@gmail.com', '12345', 'u', '', 2, 'png', '2016-11-16 18:25:13', '', 0, 0),
(3, 'Hasan mamun', 'mamun@gmail.com', '12345', 'u', '', 4, 'jpg', '2016-11-16 18:27:41', '', 1, 0),
(6, 'joe', 'joe@gmail.com', '12345', 'u', '', 5, 'jpg', '2016-12-04 20:15:15', '', 0, 0),
(7, 'hamida', 'hamida@gmail.com', '123456', 'u', '', 7, 'jpg', '2016-12-06 22:14:20', '', 1, 0),
(8, 'hamid', 'hamid@gmail.com', '12345', 'u', '', 5, 'jpg', '2016-12-06 23:25:37', '', 0, 0),
(9, 'ahmad', 'hamidah@gmail.com', '123456', 'u', '', 1, 'jpeg', '2016-12-07 11:22:49', '', 1, 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`subcategoryid`) REFERENCES `subcategory` (`id`);

--
-- Constraints for table `book_tags`
--
ALTER TABLE `book_tags`
  ADD CONSTRAINT `book_tags_ibfk_1` FOREIGN KEY (`bookid`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `book_tags_ibfk_2` FOREIGN KEY (`tagsid`) REFERENCES `tags` (`id`);

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`booksid`) REFERENCES `books` (`id`);

--
-- Constraints for table `pay4mem`
--
ALTER TABLE `pay4mem`
  ADD CONSTRAINT `pay4mem_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `pay4mem_ibfk_2` FOREIGN KEY (`bankid`) REFERENCES `paymentmethod` (`id`);

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_ibfk_1` FOREIGN KEY (`bookid`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `rating_ibfk_2` FOREIGN KEY (`userid`) REFERENCES `user` (`id`);

--
-- Constraints for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD CONSTRAINT `subcategory_ibfk_1` FOREIGN KEY (`categoryid`) REFERENCES `category` (`id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`countryid`) REFERENCES `country` (`id`);
