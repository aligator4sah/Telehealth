-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 04, 2017 at 09:37 PM
-- Server version: 5.7.19
-- PHP Version: 7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `telemed`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

DROP TABLE IF EXISTS `adminlogin`;
CREATE TABLE IF NOT EXISTS `adminlogin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`username`, `password`) VALUES
('leming', '123');

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

DROP TABLE IF EXISTS `answers`;
CREATE TABLE IF NOT EXISTS `answers` (
  `AnswerID` int(11) NOT NULL AUTO_INCREMENT,
  `Answer` varchar(50) DEFAULT NULL,
  `UserID` int(11) DEFAULT NULL,
  `QuestionID` int(11) DEFAULT NULL,
  `curtime` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`AnswerID`)
) ENGINE=InnoDB AUTO_INCREMENT=427 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`AnswerID`, `Answer`, `UserID`, `QuestionID`, `curtime`) VALUES
(1, 'Yes', 17, 1, NULL),
(2, 'No', 17, 2, NULL),
(3, 'No', 17, 3, NULL),
(4, 'Yes', 17, 4, NULL),
(5, 'No', 17, 5, NULL),
(6, 'No', 17, 6, NULL),
(7, 'Dont Know', 17, 7, NULL),
(8, 'Yes', 17, 8, NULL),
(9, 'Yes', 17, 9, NULL),
(10, 'Yes', 17, 10, NULL),
(11, 'No', 17, 11, NULL),
(12, 'Dont Know', 17, 12, NULL),
(13, 'Yes', 17, 13, NULL),
(14, 'No', 17, 14, NULL),
(15, 'Yes', 17, 15, NULL),
(16, 'Yes', 17, 16, NULL),
(17, 'No', 17, 17, NULL),
(18, 'Yes', 17, 18, NULL),
(19, 'Yes', 17, 19, NULL),
(20, 'Yes', 17, 20, NULL),
(21, 'Yes', 17, 21, NULL),
(22, 'No', 17, 22, NULL),
(23, 'Yes', 17, 23, NULL),
(24, 'No', 17, 24, NULL),
(25, 'No', 17, 25, NULL),
(26, 'No', 17, 26, NULL),
(27, 'Yes', 17, 27, NULL),
(28, 'No', 17, 28, NULL),
(29, 'Yes', 17, 29, NULL),
(30, 'No', 17, 30, NULL),
(31, 'Yes', 17, 31, NULL),
(32, 'Yes', 17, 32, NULL),
(33, 'Yes', 17, 33, NULL),
(34, 'Yes', 17, 34, NULL),
(35, 'Yes', 17, 35, NULL),
(36, 'No', 17, 36, NULL),
(37, 'No', 17, 37, NULL),
(38, 'Yes', 17, 38, NULL),
(39, 'No', 17, 39, NULL),
(40, 'No', 17, 40, NULL),
(41, 'Yes', 17, 41, NULL),
(42, 'No', 17, 42, NULL),
(43, 'Dont Know', 17, 43, NULL),
(44, 'No', 17, 44, NULL),
(45, 'No', 17, 45, NULL),
(46, 'Dont Know', 17, 46, NULL),
(47, 'Yes', 17, 47, NULL),
(48, 'Yes', 17, 48, NULL),
(49, 'No', 17, 49, NULL),
(50, 'No', 17, 50, NULL),
(51, 'No', 17, 51, NULL),
(52, 'No', 17, 52, NULL),
(53, 'No', 17, 53, NULL),
(54, 'No', 17, 54, NULL),
(55, 'Yes', 17, 55, NULL),
(56, 'No', 17, 56, NULL),
(57, 'No', 17, 57, NULL),
(58, 'No', 17, 58, NULL),
(59, 'No', 17, 59, NULL),
(60, 'No', 17, 60, NULL),
(61, 'No', 17, 61, NULL),
(62, 'Yes', 17, 62, NULL),
(63, 'Yes', 17, 63, NULL),
(64, 'No', 17, 64, NULL),
(65, 'Yes', 17, 65, NULL),
(66, 'No', 17, 66, NULL),
(67, 'No', 17, 67, NULL),
(68, 'Dont Know', 17, 68, NULL),
(69, 'No', 17, 69, NULL),
(70, 'No', 17, 70, NULL),
(71, 'No', 17, 71, NULL),
(72, 'Dont Know', 17, 72, NULL),
(73, 'No', 17, 73, NULL),
(74, 'No', 17, 74, NULL),
(75, 'No', 17, 75, NULL),
(76, 'No', 17, 76, NULL),
(77, 'No', 17, 77, NULL),
(78, 'No', 17, 78, NULL),
(79, 'No', 17, 79, NULL),
(80, 'Yes', 17, 80, NULL),
(81, 'Dont Know', 17, 81, NULL),
(82, 'Yes', 17, 82, NULL),
(83, 'No', 17, 83, NULL),
(84, 'Yes', 17, 84, NULL),
(85, 'No', 17, 85, NULL),
(86, 'No', 17, 1, NULL),
(87, 'No', 17, 2, NULL),
(88, 'No', 17, 3, NULL),
(89, 'No', 17, 4, NULL),
(90, 'No', 17, 5, NULL),
(91, 'Dont Know', 17, 6, NULL),
(92, 'No', 17, 7, NULL),
(93, 'No', 17, 8, NULL),
(94, 'No', 17, 9, NULL),
(95, 'No', 17, 10, NULL),
(96, 'No', 17, 11, NULL),
(97, 'Yes', 17, 12, NULL),
(98, 'Dont Know', 17, 13, NULL),
(99, 'No', 17, 14, NULL),
(100, 'No', 17, 15, NULL),
(101, 'No', 17, 16, NULL),
(102, 'No', 17, 17, NULL),
(103, 'No', 17, 18, NULL),
(104, 'No', 17, 19, NULL),
(105, 'No', 17, 20, NULL),
(106, 'Dont Know', 17, 21, NULL),
(107, 'No', 22, 42, NULL),
(108, 'Dont Know', 22, 43, NULL),
(109, 'Yes', 22, 44, NULL),
(110, 'No', 22, 45, NULL),
(111, 'No', 22, 46, NULL),
(112, 'Yes', 22, 47, NULL),
(113, 'No', 22, 48, NULL),
(114, 'Yes', 22, 49, NULL),
(115, 'Dont Know', 22, 50, NULL),
(116, 'No', 22, 51, NULL),
(117, 'Yes', 22, 52, NULL),
(118, 'Dont Know', 22, 53, NULL),
(119, 'No', 22, 54, NULL),
(120, 'No', 22, 55, NULL),
(121, 'Dont Know', 22, 56, NULL),
(122, 'Yes', 22, 57, NULL),
(123, 'No', 22, 58, NULL),
(124, 'Dont Know', 22, 59, NULL),
(125, 'Dont Know', 22, 60, NULL),
(126, 'Dont Know', 22, 61, NULL),
(127, 'Yes', 22, 62, NULL),
(128, 'No', 22, 63, NULL),
(129, 'No', 21, 1, NULL),
(130, 'Yes', 21, 2, NULL),
(131, 'No', 21, 3, NULL),
(132, 'No', 21, 4, NULL),
(133, 'No', 21, 5, NULL),
(134, 'No', 21, 6, NULL),
(135, 'Dont Know', 21, 7, NULL),
(136, 'Yes', 21, 8, NULL),
(137, 'No', 21, 9, NULL),
(138, 'Yes', 21, 10, NULL),
(139, 'Dont Know', 21, 11, NULL),
(140, 'No', 21, 12, NULL),
(141, 'Yes', 21, 13, NULL),
(142, 'No', 21, 14, NULL),
(143, 'Dont Know', 21, 15, NULL),
(144, 'Yes', 21, 16, NULL),
(145, 'Dont Know', 21, 17, NULL),
(146, 'Yes', 21, 18, NULL),
(147, 'No', 21, 19, NULL),
(148, 'Dont Know', 21, 20, NULL),
(149, 'Dont Know', 21, 21, NULL),
(150, 'Dont Know', 21, 22, NULL),
(151, 'No', 21, 23, NULL),
(152, 'Yes', 21, 24, NULL),
(153, 'Dont Know', 21, 25, NULL),
(154, 'No', 21, 26, NULL),
(155, 'Yes', 21, 27, NULL),
(156, 'No', 21, 28, NULL),
(157, 'Yes', 21, 29, NULL),
(158, 'No', 21, 1, NULL),
(159, 'Dont Know', 21, 2, NULL),
(160, 'Yes', 21, 3, NULL),
(161, 'No', 21, 4, NULL),
(162, 'Dont Know', 21, 5, NULL),
(163, 'Yes', 21, 6, NULL),
(164, 'Dont Know', 21, 7, NULL),
(165, 'Yes', 21, 8, NULL),
(166, 'Dont Know', 21, 9, NULL),
(167, 'No', 21, 10, NULL),
(168, 'Yes', 21, 11, NULL),
(169, 'Dont Know', 21, 12, NULL),
(170, 'No', 21, 13, NULL),
(171, 'No', 21, 14, NULL),
(172, 'No', 21, 15, NULL),
(173, 'No', 21, 17, NULL),
(174, 'Yes', 21, 18, NULL),
(175, 'Dont Know', 21, 19, NULL),
(176, 'No', 21, 20, NULL),
(177, 'No', 21, 21, NULL),
(178, 'Yes', 21, 22, NULL),
(179, 'No', 21, 23, NULL),
(180, 'No', 21, 24, NULL),
(181, 'Dont Know', 21, 25, NULL),
(182, 'Dont Know', 21, 26, NULL),
(183, 'Dont Know', 21, 27, NULL),
(184, 'Dont Know', 21, 28, NULL),
(185, 'No', 21, 29, NULL),
(186, 'Yes', 21, 30, NULL),
(187, 'No', 21, 31, NULL),
(188, 'Yes', 21, 32, NULL),
(189, 'Dont Know', 21, 33, NULL),
(190, 'Dont Know', 21, 34, NULL),
(191, 'Yes', 21, 35, NULL),
(192, 'Yes', 21, 36, NULL),
(193, 'No', 21, 37, NULL),
(194, 'No', 21, 38, NULL),
(195, 'Yes', 21, 39, NULL),
(196, 'Dont Know', 21, 40, NULL),
(197, 'No', 21, 41, NULL),
(198, 'No', 21, 42, NULL),
(199, 'No', 21, 43, NULL),
(200, 'Yes', 21, 44, NULL),
(201, 'No', 21, 48, NULL),
(202, 'Dont Know', 21, 49, NULL),
(203, 'Dont Know', 21, 51, NULL),
(204, 'Dont Know', 22, 1, NULL),
(205, 'Yes', 22, 2, NULL),
(206, 'No', 22, 3, NULL),
(207, 'Dont Know', 22, 4, NULL),
(208, 'No', 22, 5, NULL),
(209, 'No', 22, 6, NULL),
(210, 'No', 22, 7, NULL),
(211, 'Dont Know', 22, 8, NULL),
(212, 'Yes', 22, 9, NULL),
(213, 'No', 22, 10, NULL),
(214, 'Dont Know', 22, 11, NULL),
(215, 'Dont Know', 22, 12, NULL),
(216, 'No', 22, 13, NULL),
(217, 'Dont Know', 22, 14, NULL),
(218, 'No', 22, 15, NULL),
(219, 'Yes', 22, 16, NULL),
(220, 'No', 22, 17, NULL),
(221, 'Yes', 22, 18, NULL),
(222, 'Dont Know', 22, 19, NULL),
(223, 'No', 22, 20, NULL),
(224, 'Yes', 22, 21, NULL),
(225, 'No', 22, 22, NULL),
(226, 'No', 22, 23, NULL),
(227, 'Dont Know', 22, 24, NULL),
(228, 'No', 22, 25, NULL),
(229, 'Yes', 22, 26, NULL),
(230, 'Yes', 22, 27, NULL),
(231, 'Dont Know', 22, 28, NULL),
(232, 'No', 22, 29, NULL),
(233, 'Yes', 22, 30, NULL),
(234, 'Yes', 22, 31, NULL),
(235, 'No', 22, 32, NULL),
(236, 'Dont Know', 22, 33, NULL),
(237, 'Dont Know', 22, 34, NULL),
(238, 'No', 22, 35, NULL),
(239, 'Yes', 22, 36, NULL),
(240, 'No', 22, 37, NULL),
(241, 'No', 22, 38, NULL),
(242, 'Yes', 22, 39, NULL),
(243, 'No', 22, 40, NULL),
(244, 'No', 22, 41, NULL),
(245, 'No', 22, 42, NULL),
(246, 'No', 22, 43, NULL),
(247, 'Yes', 22, 44, NULL),
(248, 'Yes', 22, 45, NULL),
(249, 'Yes', 22, 46, NULL),
(250, 'Dont Know', 22, 47, NULL),
(251, 'No', 22, 48, NULL),
(252, 'Yes', 22, 49, NULL),
(253, 'No', 22, 50, NULL),
(254, 'Dont Know', 22, 51, NULL),
(255, 'Yes', 22, 52, NULL),
(256, 'Yes', 22, 53, NULL),
(257, 'No', 22, 54, NULL),
(258, 'Yes', 22, 55, NULL),
(259, 'No', 22, 56, NULL),
(260, 'Dont Know', 22, 57, NULL),
(261, 'No', 22, 58, NULL),
(262, 'Dont Know', 22, 59, NULL),
(263, 'No', 22, 60, NULL),
(264, 'No', 22, 61, NULL),
(265, 'Dont Know', 22, 62, NULL),
(266, 'No', 22, 63, NULL),
(267, 'No', 22, 64, NULL),
(268, 'No', 22, 65, NULL),
(269, 'Yes', 22, 66, NULL),
(270, 'Dont Know', 22, 67, NULL),
(271, 'No', 22, 68, NULL),
(272, 'Yes', 22, 69, NULL),
(273, 'Dont Know', 22, 70, NULL),
(274, 'No', 22, 71, NULL),
(275, 'No', 22, 72, NULL),
(276, 'Yes', 22, 73, NULL),
(277, 'Yes', 22, 74, NULL),
(278, 'No', 22, 75, NULL),
(279, 'No', 22, 76, NULL),
(280, 'Yes', 22, 77, NULL),
(281, 'Dont Know', 22, 78, NULL),
(282, 'Yes', 22, 79, NULL),
(283, 'No', 22, 80, NULL),
(284, 'Yes', 22, 81, NULL),
(285, 'No', 22, 82, NULL),
(286, 'Yes', 22, 83, NULL),
(287, 'Dont Know', 22, 84, NULL),
(288, 'Yes', 22, 85, NULL),
(289, 'Yes', 21, 1, NULL),
(290, 'No', 21, 2, NULL),
(291, 'Dont Know', 21, 3, NULL),
(292, 'No', 21, 62, NULL),
(293, 'Yes', 21, 63, NULL),
(294, 'Dont Know', 21, 40, NULL),
(295, 'Yes', 21, 41, NULL),
(296, 'No', 21, 62, NULL),
(297, 'Yes', 21, 63, NULL),
(298, 'Yes', 21, 64, NULL),
(299, 'No', 21, 65, NULL),
(300, 'Yes', 21, 66, NULL),
(301, 'Dont Know', 21, 69, NULL),
(302, 'No', 21, 70, NULL),
(303, 'Yes', 21, 71, NULL),
(304, 'No', 21, 72, NULL),
(305, 'Dont Know', 21, 73, NULL),
(306, 'No', 21, 74, NULL),
(307, 'Yes', 21, 75, NULL),
(308, 'Dont Know', 21, 76, NULL),
(309, 'No', 21, 77, NULL),
(310, 'Dont Know', 21, 78, NULL),
(311, 'No', 21, 79, NULL),
(312, 'Yes', 21, 80, NULL),
(313, 'Dont Know', 21, 81, NULL),
(314, 'Dont Know', 21, 82, NULL),
(315, 'Yes', 22, 1, NULL),
(316, 'No', 22, 2, NULL),
(317, 'Dont Know', 22, 3, NULL),
(318, 'Yes', 22, 4, NULL),
(319, 'No', 22, 5, NULL),
(320, 'No', 22, 6, NULL),
(321, 'Yes', 22, 7, NULL),
(322, 'Dont Know', 22, 8, NULL),
(323, 'Yes', 22, 9, NULL),
(324, 'No', 22, 10, NULL),
(325, 'Yes', 22, 11, NULL),
(326, 'No', 22, 12, NULL),
(327, 'No', 22, 13, NULL),
(328, 'Dont Know', 22, 14, NULL),
(329, 'No', 22, 15, NULL),
(330, 'No', 22, 16, NULL),
(331, 'Yes', 22, 17, NULL),
(332, 'Dont Know', 22, 18, NULL),
(333, 'Yes', 22, 19, NULL),
(334, 'Yes', 22, 20, NULL),
(335, 'Dont Know', 22, 21, NULL),
(336, 'No', 22, 22, NULL),
(337, 'Yes', 22, 23, NULL),
(338, 'Dont Know', 22, 24, NULL),
(339, 'Yes', 22, 25, NULL),
(340, 'No', 22, 26, NULL),
(341, 'No', 22, 27, NULL),
(342, 'No', 22, 28, NULL),
(343, 'No', 22, 29, NULL),
(344, 'Yes', 22, 30, NULL),
(345, 'No', 22, 31, NULL),
(346, 'Yes', 22, 39, NULL),
(347, 'No', 22, 40, NULL),
(348, 'No', 22, 42, NULL),
(349, 'Yes', 22, 43, NULL),
(350, 'Yes', 22, 44, NULL),
(351, 'Yes', 22, 45, NULL),
(352, 'Yes', 22, 46, NULL),
(353, 'No', 22, 47, NULL),
(354, 'No', 22, 48, NULL),
(355, 'Dont Know', 22, 49, NULL),
(356, 'Yes', 22, 50, NULL),
(357, 'No', 22, 51, NULL),
(358, 'No', 22, 52, NULL),
(359, 'No', 22, 53, NULL),
(360, 'Yes', 22, 54, NULL),
(361, 'Dont Know', 22, 55, NULL),
(362, 'Yes', 22, 56, NULL),
(363, 'No', 22, 57, NULL),
(364, 'Yes', 22, 58, NULL),
(365, 'No', 22, 59, NULL),
(366, 'Yes', 22, 60, NULL),
(367, 'Yes', 22, 61, NULL),
(368, 'No', 22, 62, NULL),
(369, 'No', 22, 64, NULL),
(370, 'Yes', 22, 65, NULL),
(371, 'Yes', 22, 66, NULL),
(372, 'No', 22, 67, NULL),
(373, 'No', 22, 68, NULL),
(374, 'No', 22, 69, NULL),
(375, 'No', 22, 70, NULL),
(376, 'Dont Know', 22, 71, NULL),
(377, 'Yes', 22, 72, NULL),
(378, 'No', 22, 73, NULL),
(379, 'Yes', 22, 74, NULL),
(380, 'No', 22, 75, NULL),
(381, 'No', 22, 76, NULL),
(382, 'No', 22, 81, NULL),
(383, 'No', 22, 82, NULL),
(384, 'Dont Know', 22, 83, NULL),
(385, 'Yes', 22, 84, NULL),
(386, 'No', 22, 85, NULL),
(396, 'Yes', 21, 40, '2017-12-04'),
(397, 'Yes', 21, 41, '2017-12-04'),
(398, 'Yes', 21, 1, '2017-12-04'),
(399, 'No', 21, 2, '2017-12-04'),
(400, 'Yes', 21, 7, '2017-12-04'),
(401, 'No', 21, 11, '2017-12-04'),
(402, 'No', 21, 14, '2017-12-04'),
(403, 'Yes', 21, 18, '2017-12-04'),
(404, 'Yes', 21, 21, '2017-12-04'),
(405, 'No', 21, 24, '2017-12-04'),
(406, 'No', 21, 28, '2017-12-04'),
(407, 'Dont Know', 21, 32, '2017-12-04'),
(408, 'Yes', 21, 36, '2017-12-04'),
(409, 'Dont Know', 21, 39, '2017-12-04'),
(410, 'No', 21, 42, '2017-12-04'),
(411, 'Yes', 21, 47, '2017-12-04'),
(412, 'Yes', 21, 50, '2017-12-04'),
(413, 'No', 21, 53, '2017-12-04'),
(414, 'Dont Know', 21, 57, '2017-12-04'),
(415, 'Yes', 21, 62, '2017-12-04'),
(416, 'No', 21, 63, '2017-12-04'),
(417, 'No', 21, 64, '2017-12-04'),
(418, 'No', 21, 67, '2017-12-04'),
(419, 'Yes', 21, 68, '2017-12-04'),
(420, 'No', 21, 71, '2017-12-04'),
(421, 'Dont Know', 21, 73, '2017-12-04'),
(422, 'Dont Know', 21, 76, '2017-12-04'),
(423, 'Yes', 21, 80, '2017-12-04'),
(424, 'Dont Know', 21, 82, '2017-12-04'),
(425, 'No', 21, 84, '2017-12-04'),
(426, 'No', 21, 85, '2017-12-04');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

DROP TABLE IF EXISTS `data`;
CREATE TABLE IF NOT EXISTS `data` (
  `QuestionID` int(11) NOT NULL,
  `CategoryID` int(11) NOT NULL,
  `SubCategoryID` int(11) NOT NULL,
  `SubSubCategoryID` int(11) NOT NULL,
  `Description` varchar(2000) NOT NULL,
  `Reference` varchar(200) NOT NULL,
  PRIMARY KEY (`QuestionID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`QuestionID`, `CategoryID`, `SubCategoryID`, `SubSubCategoryID`, `Description`, `Reference`) VALUES
(64, 1, 1, 1, 'Do you prevent <a href=\"keyterms.html#anchor1\" target=\"_blank\">unauthorized</a> viewing of patient information by applying <a href=\"keyterms.html#anchor1\" target=\"_blank\">access controls</a>? \r\n<a href=\"newhtml.html#anchor18\" target=\"_blank\">164.402</a>,\r\n<a href=\"newhtml.html#anchor34\" target=\"_blank\">164.310(a)(1)</a>,\r\n<a href=\"newhtml.html#anchor35\" target=\"_blank\">164.310(a)(2)(ii)</a>,\r\n<a href=\"newhtml.html#anchor19\" target=\"_blank\">164.310(a)(2)(iii)</a>', ''),
(65, 1, 1, 1, 'Do you avoid the transfer of <a href=\"keyterms.html#anchor22\" target=\"_blank\">PHI</a> to a third party outside the United States? \r\n<a href=\"newhtml.html#anchor36\" target=\"_blank\">164.512(k)(5)</a>', ''),
(66, 1, 1, 1, 'If you do transfer <a href=\"keyterms.html#anchor22\" target=\"_blank\">PHI</a> outside the United States, is there a <a href=\"keyterms.html#anchor31\" target=\"_blank\">business associate agreement (BAA)</a> between you and the third party? \r\n<a href=\"newhtml.html#anchor4\" target=\"_blank\">164.504(e)</a>', ''),
(67, 1, 1, 1, 'Do you have a <a href=\"keyterms.html#anchor31\" target=\"_blank\">business associate agreement (BAA)</a> with all <a href=\"keyterms.html#anchor14\" target=\"_blank\">entities</a> that manage the <a href=\"keyterms.html#anchor22\" target=\"_blank\">PHI</a>?\r\n<a href=\"newhtml.html#anchor37\" target=\"_blank\">164.308(b)(1)</a>,\r\n<a href=\"references.html#anchor1\" target=\"_blank\">Gerard 2013</a>   ', '1'),
(68, 1, 1, 1, 'Do you have the name of the <a href=\"keyterms.html#anchor13\" target=\"_blank\">encryption algorithm</a> and the length of the key (<a href=\"keyterms.html#anchor2\" target=\"_blank\">AES</a>-256) in the telehealth company\'s <a href=\"keyterms.html#anchor21\" target=\"_blank\">privacy</a> and <a href=\"keyterms.html#anchor25\" target=\"_blank\">security</a> policy or in some type of software documentation? \r\n<a href=\"http://telerehab.pitt.edu/ojs/index.php/Telerehab/article/view/6161/6536\" target=\"_blank\">Telerehab Pitt</a>', ''),
(69, 1, 1, 1, 'Do you prevent the sharing of <a href=\"keyterms.html#anchor12\" target=\"_blank\">encryption keys</a> with <a href=\"keyterms.html#anchor1\" target=\"_blank\">unauthorized</a> personnel?\r\n<a href=\"http://www.hhs.gov/sites/default/files/ocr/privacy/hipaa/administrative/securityrule/nist800111.pdf\" target=\"_blank\">HHS.GOV</a>  ', ''),
(70, 1, 1, 1, 'Do you periodically update <a href=\"keyterms.html#anchor12\" target=\"_blank\">encryption keys</a> as noted in the <a href=\"keyterms.html#anchor21\" target=\"_blank\">privacy</a> and <a href=\"keyterms.html#anchor25\" target=\"_blank\">security</a> policy?\r\n<a href=\"newhtml.html#anchor15\" target=\"_blank\">164.312(a)(2)(iv)</a>,\r\n<a href=\"newhtml.html#anchor21\" target=\"_blank\">164.312(e)(2)(ii)</a>,\r\n<a href=\"references.html#anchor8\" target=\"_blank\">Mendelson 2014</a> ', '9'),
(71, 1, 1, 1, 'Do you work to ensure that HIPAA policies and procedures are updated? \n<a href=\"http://www.hhs.gov/sites/default/files/ocr/privacy/hipaa/administrative/securityrule/nist800111.pdf\" target=\"_blank\">HHS.GOV</a> ', ''),
(72, 1, 1, 1, 'Do you work to ensure that IT <a href=\"keyterms.html#anchor25\" target=\"_blank\">security</a> policies are updated? \r\n<a href=\"newhtml.html#anchor38\" target=\"_blank\">164.308(a)</a>,\r\n<a href=\"references.html#anchor13\" target=\"_blank\">Scarfone 2007</a>,\r\n<a href=\"references.html#anchor9\" target=\"_blank\">Brinson 2012</a>    ', '10,14'),
(73, 1, 1, 1, 'Do you work to ensure that annual HIPAA training for all staff is conducted? \n<a href=\"https://www.medsafe.com/blog/compliance-topics/7-common-questions-regarding-osha-and-hipaa-training-requirements-for-dental-and-medical-offices\" target=\"_blank\">MEDSAFE</a>', ''),
(74, 1, 1, 1, 'Do you work to ensure that <a href=\"keyterms.html#anchor20\" target=\"_blank\">password</a> protected and encrypted smart devices are updated?  <a href=\"references.html#anchor13\" target=\"_blank\">Scarfone 2007</a>,\r\n<a href=\"references.html#anchor9\" target=\"_blank\">Brinson 2012</a>    ', '10,14'),
(75, 1, 1, 1, 'Do you keep <a href=\"keyterms.html#anchor25\" target=\"_blank\">security</a> software up to date (ie. <a href=\"keyterms.html#anchor15\" target=\"_blank\">firewalls</a>, <a href=\"keyterms.html#anchor3\" target=\"_blank\">anti-virus/spyware</a>, intrusion detection)? \r\n<a href=\"references.html#anchor11\" target=\"_blank\">ATA 2011</a>  ', '12'),
(76, 1, 1, 1, 'Do you carefully research <a href=\"keyterms.html#anchor18\" target=\"_blank\">mobile</a> applications before downloading? <a href=\"references.html#anchor11\" target=\"_blank\">ATA 2011</a>  ', '12'),
(77, 1, 1, 1, 'Do you consider not using public Wi-Fi when transferring <a href=\"keyterms.html#anchor22\" target=\"_blank\">PHI</a>? \r\n<a href=\"references.html#anchor11\" target=\"_blank\">ATA 2011</a>  ', '12'),
(78, 1, 1, 1, 'Do you have an <a href=\"keyterms.html#anchor17\" target=\"_blank\">Incident Response Plan</a> in place? \r\n<a href=\"newhtml.html#anchor39\" target=\"_blank\">164.308(a)(6)(i)</a>,\r\n<a href=\"newhtml.html#anchor40\" target=\"_blank\">164.308(a)(6)(ii)</a>,\r\n<a href=\"references.html#anchor1\" target=\"_blank\">Gerard 2013</a> ', '1'),
(79, 1, 1, 1, 'Do you use <a href=\"keyterms.html#anchor1\" target=\"_blank\">access controls</a> for all users handling <a href=\"keyterms.html#anchor22\" target=\"_blank\">PHI</a>? \r\n<a href=\"newhtml.html#anchor34\" target=\"_blank\">164.310(a)(1)</a>,\r\n<a href=\"references.html#anchor1\" target=\"_blank\">Gerard 2013</a> ', '1'),
(80, 1, 1, 1, 'Do you have an independent party conduct a <a href=\"keyterms.html#anchor25\" target=\"_blank\">security</a> evaluation on the telehealth <a href=\"keyterms.html#anchor27\" target=\"_blank\">system</a> to verify features such as <a href=\"keyterms.html#anchor4\" target=\"_blank\">authentication</a>, <a href=\"keyterms.html#anchor20\" target=\"_blank\">password</a> and data management, and that the system implements all proper <a href=\"keyterms.html#anchor21\" target=\"_blank\">privacy</a> and security measures?  \r\n<a href=\"newhtml.html#anchor41\" target=\"_blank\">164.308(a)(1)(ii)(D)</a>,\r\n<a href=\"newhtml.html#anchor42\" target=\"_blank\">164.308(a)(2)</a>', ''),
(81, 1, 1, 1, 'Do you have a <a href=\"keyterms.html#anchor10\" target=\"_blank\">disaster recovery plan</a> established as well as <a href=\"keyterms.html#anchor6\" target=\"_blank\">backup</a> and access to data? \r\n<a href=\"newhtml.html#anchor43\" target=\"_blank\">164.308(a)(7)(ii)(B)</a>,\r\n<a href=\"newhtml.html#anchor44\" target=\"_blank\">164.308(a)(7)(ii)(A)</a>,\r\n<a href=\"newhtml.html#anchor1\" target=\"_blank\">164.310(d)(2)(iv)</a>,\r\n<a href=\"references.html#anchor8\" target=\"_blank\">Mendelson 2014</a> ', '9'),
(82, 3, 1, 1, 'Do you attach <a href=\"keyterms.html#anchor9\" target=\"_blank\">digital signatures</a> with the data during data <a href=\"keyterms.html#anchor28\" target=\"_blank\">transmission</a>? <a href=\"references.html#anchor11\" target=\"_blank\">ATA 2011</a>  ', '12'),
(83, 3, 1, 1, 'Do you use <a href=\"keyterms.html#anchor23\" target=\"_blank\">remote</a> wiping on <a href=\"keyterms.html#anchor18\" target=\"_blank\">mobile</a> devices? <a href=\"newhtml.html#anchor46\" target=\"_blank\">164.310(d)(2)(i)</a>', '164.310(d)(2)(i)'),
(84, 3, 1, 1, 'Do you use audit trails to track who had access to the <a href=\"keyterms.html#anchor22\" target=\"_blank\">PHI</a>? \r\n<a href=\"newhtml.html#anchor45\" target=\"_blank\">164.312(b)</a>', ''),
(85, 3, 1, 1, 'Do you install <a href=\"keyterms.html#anchor15\" target=\"_blank\">firewalls</a>? <a href=\"newhtml.html#anchor47\" target=\"_blank\">164.310(d)(1)</a>', '164.310(d)(1)');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `QuestionID` int(11) NOT NULL,
  `CategoryID` int(11) NOT NULL,
  `SubCategoryID` int(11) NOT NULL,
  `SubSubCategoryID` int(11) NOT NULL,
  `Description` varchar(2000) NOT NULL,
  `Reference` varchar(200) NOT NULL,
  PRIMARY KEY (`QuestionID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`QuestionID`, `CategoryID`, `SubCategoryID`, `SubSubCategoryID`, `Description`, `Reference`) VALUES
(42, 1, 1, 1, 'Is verbal or written consent from the patient or their representative obtained before the telehealth session begins? <a href=\"newhtml.html#anchor24\" target=\"_blank\">164.508(b)(6) and 164.508(c)(1-­4)</a>, <a href=\"newhtml.html#anchor25\" target=\"_blank\">164.502(g)</a> ', ''),
(43, 1, 1, 1, 'Have you established <a href=\"keyterms.html#anchor21\" target=\"_blank\">privacy</a> and <a href=\"keyterms.html#anchor25\" target=\"_blank\">security</a> policies and procedures regarding the use of telehealth and how it is practiced? <a href=\"newhtml.html#anchor8\" target=\"_blank\">164.530(i)(1)</a>,\r\n<a href=\"references.html#anchor5\" target=\"_blank\">Cason 2012</a> ', '6'),
(44, 1, 1, 1, 'Will written patient <a href=\"keyterms.html#anchor5\" target=\"_blank\">authorization</a> be required before any <a href=\"keyterms.html#anchor22\" target=\"_blank\">PHI</a> content is shared with other requrestors?  <a href=\"newhtml.html#anchor26\" target=\"_blank\">164.506(a)</a>, <a href=\"newhtml.html#anchor27\" target=\"_blank\">164.508(a)(1-3) and 164.508(b)(1-2)</a>,\r\n<a href=\"references.html#anchor7\" target=\"_blank\">Naam 2015</a> ', '8'),
(45, 1, 1, 1, 'Will qualified individuals with backgrounds in <a href=\"keyterms.html#anchor21\" target=\"_blank\">privacy</a>, <a href=\"keyterms.html#anchor25\" target=\"_blank\">security</a>, and HIPAA evaluate all requests for <a href=\"keyterms.html#anchor22\" target=\"_blank\">PHI</a>? <a href=\"newhtml.html#anchor24\" target=\"_blank\">164.508(b)(6) and 164.508(c)(1-­4)</a> ', ''),
(46, 1, 1, 1, 'Will patients receive an accounting of disclosures upon written request?\r\n<a href=\"newhtml.html#anchor9\" target=\"_blank\">164.526</a>,\r\n<a href=\"newhtml.html#anchor28\" target=\"_blank\">164.528(a)</a> ', ''),
(47, 1, 1, 1, 'Will patients be able to request for a restriction of uses and disclosures of <a href=\"keyterms.html#anchor22\" target=\"_blank\">PHI</a>? <a href=\"newhtml.html#anchor4\" target=\"_blank\">164.504(e)</a>', ''),
(48, 1, 1, 1, 'Do you have policies and procedures in place to prevent or detect the <a href=\"keyterms.html#anchor1\" target=\"_blank\">unauthorized</a> altering or destruction of any data pertaining to the patient? <a href=\"newhtml.html#anchor29\" target=\"_blank\">164.312(c)(1)</a>, <a href=\"references.html#anchor11\" target=\"_blank\">ATA 2011</a>  ', '12'),
(49, 1, 1, 1, 'Will patients have the right to consent to any transfer of <a href=\"keyterms.html#anchor22\" target=\"_blank\">PHI</a> outside of the United States? <a href=\"http://www.himss.org/news/legal-corner-use-protected-health-information-outside-united-states-can-raise-regulatory-and-other\" target=\"_blank\">HIMSS</a> ', ''),
(50, 1, 1, 1, 'If this transfer is authorized, will you provide patients with a list of countries where <a href=\"keyterms.html#anchor22\" target=\"_blank\">PHI</a> is transferred? <a href=\"newhtml.html#anchor4\" target=\"_blank\">164.504(e)</a>', ''),
(51, 1, 1, 1, 'Do you or another member of your telehealth team explain the <a href=\"keyterms.html#anchor25\" target=\"_blank\">security</a> and <a href=\"keyterms.html#anchor21\" target=\"_blank\">privacy</a> features to patients before a telehealth session? \r\n<a href=\"references.html#anchor12\" target=\"_blank\">ATA 2009</a> ', ''),
(52, 1, 1, 1, 'If telehealth sessions are recorded and pictures are taken and stored, will you inform the patients before this action? \r\n<a href=\"newhtml.html#anchor30\" target=\"_blank\">164.306(a)</a>', '3'),
(53, 1, 1, 1, 'Do you install and regularly update <a href=\"keyterms.html#anchor3\" target=\"_blank\">anti-spyware programs</a> on your devices? \r\n<a href=\"https://www.unc.edu/hipaa/Annual%20HIPAA%20Training%20current.pdf\" target=\"_blank\">UNC HIPPA (Slide 37)</a>', ''),
(54, 1, 1, 1, 'Will you inform patients of the potential <a href=\"keyterms.html#anchor25\" target=\"_blank\">security</a> <a href=\"keyterms.html#anchor24\" target=\"_blank\">risks</a> when <a href=\"keyterms.html#anchor22\" target=\"_blank\">PHI</a> is transferred between the healthcare provider and telehealth companies? \r\n<a href=\"references.html#anchor7\" target=\"_blank\">Naam 2015</a> ', '8'),
(55, 2, 1, 1, 'Will physical and audio surroundings be kept private (includes audio/video muting, public/private mode)? \r\n<a href=\"newhtml.html#anchor31\" target=\"_blank\">164.310(c)</a>\r\n<a href=\"newhtml.html#anchor32\" target=\"_blank\">164.310(b)</a>,\r\n<a href=\"references.html#anchor12\" target=\"_blank\">ATA 2009</a> ', '13'),
(56, 2, 1, 1, 'Do you discuss these secure surroundings with the patient? \r\n<a href=\"newhtml.html#anchor31\" target=\"_blank\">164.310(c)</a>\r\n<a href=\"newhtml.html#anchor32\" target=\"_blank\">164.310(b)</a>,\r\n<a href=\"references.html#anchor12\" target=\"_blank\">ATA 2009</a> ', '13'),
(57, 3, 1, 1, 'Do you use only secure websites (HTTPS)?  \n<a href=\"http://www.integration.samhsa.gov/hit/telehealthguide_final_0.pdf\" target=\"_blank\">SAMHSA.GOV</a>,\n<a href=\"references.html#anchor1\" target=\"_blank\">Gerard 2013</a> ', '1'),
(58, 3, 1, 1, 'Do you avoid connecting to unsecure networks (ie. public wifi)?\r\n<a href=\"newhtml.html#anchor16\" target=\"_blank\">164.312(e)(1)</a>,\r\n<a href=\"references.html#anchor1\" target=\"_blank\">Gerard 2013</a> ', '1'),
(59, 3, 1, 1, 'Do you use a <a href=\"keyterms.html#anchor29\" target=\"_blank\">virtual private network (VPN)</a> to access important websites? \r\n<a href=\"http://www.asha.org/PRPPrintTemplate.aspx?folderid=8589934956\" target=\"_blank\">ASHA.ORG</a>,\r\n<a href=\"references.html#anchor1\" target=\"_blank\">Gerard 2013</a> ', '1'),
(60, 3, 1, 1, 'Do you use <a href=\"keyterms.html#anchor30\" target=\"_blank\">WPA2</a> <a href=\"keyterms.html#anchor8\" target=\"_blank\">certification</a> with <a href=\"keyterms.html#anchor2\" target=\"_blank\">AES</a>-256 <a href=\"keyterms.html#anchor11\" target=\"_blank\">encryption</a> for wi-fi? \r\n<a href=\"http://www.cbhda.org/wp-content/uploads/2014/12/Telehealth_White_Paper_5-28-15.pdf\" target=\"_blank\">CBHDA.ORG</a>,\r\n<a href=\"references.html#anchor1\" target=\"_blank\">Gerard 2013</a> ', '1'),
(61, 3, 1, 1, 'Do you use <a href=\"keyterms.html#anchor19\" target=\"_blank\">multi-factor authentication</a> (<a href=\"keyterms.html#anchor20\" target=\"_blank\">password</a>, fingerprint, one-time pin) to login to the telehealth sessions? \r\n<a href=\"newhtml.html#anchor33\" target=\"_blank\">164.312(d)</a>,\r\n<a href=\"https://www.thinkmind.org/download.php?articleid=etelemed_2013_6_40_40318\" target=\"_blank\">THINKMIND.ORG</a>,\r\n<a href=\"references.html#anchor2\" target=\"_blank\">Watzlaf 2012</a>', '1,3'),
(62, 3, 1, 1, 'Do you change your default <a href=\"keyterms.html#anchor20\" target=\"_blank\">password</a>, computer names, and workgroups? \r\n<a href=\"newhtml.html#anchor22\" target=\"_blank\">164.308(a)(5)(ii)(D)</a>,\r\n<a href=\"references.html#anchor1\" target=\"_blank\">Gerard 2013</a> ', '1'),
(63, 3, 1, 1, 'Do you use strong <a href=\"keyterms.html#anchor20\" target=\"_blank\">passwords</a> (ie. uppercase, lowercase, minimum length, special symbols, digits)? \r\n<a href=\"newhtml.html#anchor22\" target=\"_blank\">164.308(a)(5)(ii)(D)</a>,\r\n<a href=\"references.html#anchor1\" target=\"_blank\">Gerard 2013</a> ', '1');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `QuestionID` int(11) NOT NULL,
  `CategoryID` int(11) NOT NULL,
  `SubCategoryID` int(11) NOT NULL,
  `SubSubCategoryID` int(11) NOT NULL,
  `Description` varchar(2000) NOT NULL,
  `Link` varchar(500) NOT NULL,
  `Link1` varchar(50) NOT NULL,
  `Link2` varchar(50) NOT NULL,
  PRIMARY KEY (`QuestionID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`QuestionID`, `CategoryID`, `SubCategoryID`, `SubSubCategoryID`, `Description`, `Link`, `Link1`, `Link2`) VALUES
(1, 1, 1, 1, 'When considering <a href=\"keyterms.html#anchor32\" target=\"_blank\">cloud</a> service for data storage, is the vendor compliant in keeping <a href=\"keyterms.html#anchor22\" target=\"_blank\">PHI</a> highly secure? <a href=\"newhtml.html#anchor1\" target=\"_blank\">164.310(d)(2)(iv)</a>, <a  href=\"newhtml.html#anchor2\" target=\"_blank\"> 164.308(a)(7)(ii)(A)</a>,\r\n<a href=\"references.html#anchor1\" target=\"_blank\">Gerard 2013</a> ', '164.310(d)(2)(iv)', '164.308(a)(7)(ii)(A)', '1'),
(2, 1, 1, 1, 'Will data generated during therapy sessions not be sold to other interested parties? <a href=\"newhtml.html#anchor3\" target=\"_blank\">164.520(d)</a>', '164.520(d)', '', ''),
(3, 1, 1, 1, 'Will data generated during therapy sessions be accessible to other people outside of the vendor (such as BAAs, law enforcement, government officials)? <a href=\"newhtml.html#anchor4\" target=\"_blank\">164.504(e)</a>                  ', '164.504(e)    ', '', ''),
(4, 1, 1, 1, 'Will data be shared to protect the vendor\'s interests? <a href=\"newhtml.html#anchor5\" target=\"_blank\">164.510(b)(1)</a> , <a href=\"newhtml.html#anchor6\" target=\"_blank\">164.510(b)(2)</a> ', '164.510(b) (1)', '164.510(b) (2)', ''),
(5, 1, 1, 1, 'Did you read the <a href=\"keyterms.html#anchor21\" target=\"_blank\">privacy</a> and <a href=\"keyterms.html#anchor25\" target=\"_blank\">security</a> policies of the vendors?<a href=\"newhtml.html#anchor7\" target=\"_blank\">164.530(c)</a>', '164.530(c)', '', ''),
(6, 1, 1, 1, 'Will the telehealth vendor allow the users sufficient time to comply with <a href=\"keyterms.html#anchor21\" target=\"_blank\">privacy</a> policies if they have changed? <a href=\"newhtml.html#anchor8\" target=\"_blank\">164.530(i)</a>', '164.530(i)   ', '', ''),
(7, 1, 1, 1, 'Will users be able to change any personal information within a resonable period of time? <a href=\"newhtml.html#anchor9\" target=\"_blank\">164.526(a)(1)</a>', '164.526(a)(1)      ', '', ''),
(8, 1, 1, 1, 'Will data generated between the provider and patient be retained by the vendor? <a href=\"newhtml.html#anchor10\" target=\"_blank\">164.520(e)</a>', '164.520?', '', ''),
(9, 1, 1, 1, 'Will data be made available to other <a href=\"keyterms.html#anchor14\" target=\"_blank\">entities</a> when requested without patient <a href=\"keyterms.html#anchor5\" target=\"_blank\">authorization</a>? <a href=\"newhtml.html#anchor13\" target=\"_blank\" >164.520(d)</a>     ', '(164.520(d))      ', '', ''),
(10, 1, 1, 1, 'Will the telehealth vendor\'s software contain links to other websites? <a href=\"newhtml.html#anchor11\" target=\"_blank\">164.502(j)(1)</a>', '(164.502(j) (1))     ', '', ''),
(11, 1, 1, 1, 'If so, are those websites\' <a href=\"keyterms.html#anchor21\" target=\"_blank\">privacy</a> and <a href=\"keyterms.html#anchor25\" target=\"_blank\">security</a> policies checked before sharing protected health information? <a href=\"newhtml.html#anchor12\"target=\"_blank\">164.502(h)</a>, <a href=\"newhtml.html#anchor13\"target=\"_blank\">164.520(d)</a>', '(164.502(h)), (164.520(d))         ', '', ''),
(12, 1, 1, 1, 'Does the telehealth vendor have <a href=\"keyterms.html#anchor31\" target=\"_blank\">business associate agreements (BAAs)</a> with other <a href=\"keyterms.html#anchor14\" target=\"_blank\">entities</a>? <a href=\"http://healthitsecurity.com/news/hipaa-requires-providers-using-skype-to-have-baas \"target=\"_blank\">http://healthitsecurity.com/news/hipaa-requires-providers-using-skype-to-have-baas </a>         ', '', '', ''),
(13, 1, 1, 1, 'Does the telehealth vendor\'s software program have sufficient <a href=\"keyterms.html#anchor25\" target=\"_blank\">security</a> and <a href=\"keyterms.html#anchor21\" target=\"_blank\">privacy</a> regulated by federal and state laws? <a href=\"newhtml.html#anchor14\" target=\"_blank\">164.308(a)(1)(ii)(B)</a>,\r\n<a href=\"references.html#anchor1\" target=\"_blank\">Daniel 2015</a>      ', '164.308(a)(1)(ii)(B)     ', '', '2'),
(14, 1, 1, 1, 'Will clients (providers and patients) be informed of the potential <a href=\"keyterms.html#anchor25\" target=\"_blank\">security</a> <a href=\"keyterms.html#anchor24\" target=\"_blank\">risks</a> when video and data content are transferred between the clients and the telehealth vendor and vice versa? <a href=\"https://higherlogicdownload.s3.amazonaws.com/AMERICANTELEMED/618da447-dee1-4ee1-b941-c5bf3db5669a/UploadedImages/NEW%20Practice%20Guidelines/NEW_ATA%20Primary%20Urgent%20Care%20Guidelines.pdf\" target=\"_blank\">ATA 2014</a>     ', '', '', ''),
(15, 1, 1, 1, 'Do the telehealth  vendors share their data with other websites and countries?\r\n<a href=\"http://www.techhealthperspectives.com/2013/09/19/privacy-security-concerns-in-telehealth-ensuring-legal-compliance-in-hospital-based-practices\" target=\"_blank\">http://www.techhealthperspectives.com/2013/09/19/privacy-security-concerns-in-telehealth-ensuring-legal-compliance-in-hospital-based-practices</a>,\r\n<a href=\"references.html#anchor6\" target=\"_blank\">Watzlaf 2011</a> ', '', '', '3,7'),
(16, 1, 1, 1, 'In the telehealth vendor\'s <a href=\"keyterms.html#anchor21\" target=\"_blank\">privacy</a> and <a href=\"keyterms.html#anchor25\" target=\"_blank\">security</a> policies document, will the telehealth vendor include details about the <a href=\"keyterms.html#anchor13\" target=\"_blank\">encryption algorithms</a>, the length of the key (eg. <a href=\"keyterms.html#anchor2\" target=\"_blank\">AES</a>-256), the key management approach, and what specific data are encrypted? <a href=\"newhtml.html#anchor15\" target=\"_blank\">164.312(a)(2)(iv)</a>, <a href=\"newhtml.html#anchor16\" target=\"_blank\">164.312(e)(1)</a>', '(164.312(a) (2)(iv)) (164.312(e) (1))', '', '3'),
(17, 1, 1, 1, 'In the event of a technology breakdown, does the telehealth vendor have a <a href=\"keyterms.html#anchor6\" target=\"_blank\">backup</a> plan in place? <a href=\"newhtml.html#anchor17\" target=\"_blank\">164.308(a)(7)(i)</a>', ' 164.308(a)(7)(i)', '', ''),
(18, 1, 1, 1, 'If so, will the telehealth vendor review the technology <a href=\"keyterms.html#anchor7\" target=\"_blank\">backup</a> plan on a routine basis? <a href=\"newhtml.html#anchor17\" target=\"_blank\">164.308(a)(7)(1)</a>', '164.308(a)(7)(i)', '', ''),
(19, 1, 1, 1, 'Does the telehealth vendor provide employee training on computer and <a href=\"keyterms.html#anchor19\" target=\"_blank\">mobile</a> device <a href=\"keyterms.html#anchor26\" target=\"_blank\">security</a>? <a href=\"https://www.ftc.gov/tips-advice/business-center/guidance/mobile-health-app-developers-ftc-best-practices\" target=\"_blank\">https://www.ftc.gov/tips-advice/business-center/guidance/mobile-health-app-developers-ftc-best-practices</a>', '', '', ''),
(20, 1, 1, 1, 'Does the telehealth vendor monitor whether any of the <a href=\"keyterms.html#anchor28\" target=\"_blank\">transmission</a> data is intentionally or inadvertently stored on the client\'s computer hard drive?\r\n<a href=\"references.html#anchor3\" target=\"_blank\">ATA 2015</a> ', '', '', '4'),
(21, 1, 1, 1, 'Does the telehealth  vendor discuss in their policies the potential for inadvertently storing data and patient information as well as providing guidance about how best to protect <a href=\"keyterms.html#anchor21\" target=\"_blank\">privacy</a>? <a href=\"newhtml.html#anchor18\" target=\"_blank\">164.402</a>', '(164.402)', '', ''),
(22, 1, 1, 1, 'Does the telehealth  vendor provide guidance and information to the clients on how best to protect <a href=\"keyterms.html#anchor21\" target=\"_blank\">privacy</a> and <a href=\"keyterms.html#anchor25\" target=\"_blank\">security</a> on the storing of <a href=\"keyterms.html#anchor22\" target=\"_blank\">PHI</a> as well as recording and storage of the telehealth session? \r\n<a href=\"references.html#anchor3\" target=\"_blank\">ATA 2015</a> ', 'ATA 2015', '', '4'),
(23, 2, 1, 1, 'Will the telehealth vendor work to ensure that equipment sufficient to support diagnostic needs is available and functioning properly at the time of clinical encounters? \r\n<a href=\"references.html#anchor3\" target=\"_blank\">ATA 2015</a> ', 'ATA 2015', '', '4'),
(24, 2, 1, 1, 'Does the telehealth vendor have strategies in place to address environmental elements of care necessary for safe use of telemedicine equipment? \r\n<a href=\"references.html#anchor3\" target=\"_blank\">ATA 2015</a> ', 'ATA 2015', '', '4'),
(25, 2, 1, 1, 'Does the telehealth  vendor use high quality cameras/video, audio, and related data capture and <a href=\"keyterms.html#anchor28\" target=\"_blank\">transmission</a> equipment that is appropriate for the telehealth clinical encounter, and which meet any existing practice-specific guidelines? <a href=\"http://dev.americantelemed.org/docs/default-source/standards/a-blueprint-for-telerehabilitation-guidelines.pdf?sfvrsn=4\" target=\"_blank\">Blueprint for Telerehabilitation Guidelines</a>', '', '', ''),
(26, 3, 1, 1, 'Is the telehealth vendor unable to gain access to patient <a href=\"keyterms.html#anchor16\" target=\"_blank\">identifiable</a> data? <a href=\"newhtml.html#anchor19\" target=\"_blank\">164.310(a)(2)(iii)</a>, <a href=\"newhtml.html#anchor20\" target=\"_blank\">164.308(a)(3)(ii)(B)</a>', '164.310(a)(2)(iii), 164.308(a)(3)(ii)(B)', '', ''),
(27, 3, 1, 1, 'If so, is this stated in the <a href=\"keyterms.html#anchor31\" target=\"_blank\">business associate agreement (BAA)</a>? ', '', '', ''),
(28, 3, 1, 1, 'Do clients get the option of archiving their records offline on storage devices? <a href=\"http://telerehab.pitt.edu/ojs/index.php/Telerehab/article/view/6161/6536\" target=\"_blank\">Telerehab Pitt</a>', '', '', ''),
(29, 3, 1, 1, 'Does the telehealth vendor\'s software program have up-to-date <a href=\"keyterms.html#anchor3\" target=\"_blank\">antivirus software</a> and a personal <a href=\"keyterms.html#anchor15\" target=\"_blank\">firewall</a> installed with the latest <a href=\"keyterms.html#anchor25\" target=\"_blank\">security</a> patches and updates applied to the operating <a href=\"keyterms.html#anchor27\" target=\"_blank\">system</a> and third party applications?\r\n<a href=\"references.html#anchor12\" target=\"_blank\">ATA 2009</a> ', 'ATA', '', '13'),
(30, 3, 1, 1, 'Does the telehealth vendor use device management software (eg. cameras) to provide consistent oversight of applications, device and data configuration and <a href=\"keyterms.html#anchor25\" target=\"_blank\">security</a>? \r\n<a href=\"references.html#anchor3\" target=\"_blank\">ATA 2015</a> ', 'ATA', '', '4'),
(31, 3, 1, 1, 'Will the telehealth vendor\'s video-based healthcare services be delivered through devices that use internet-based video conferencing software programs that meets the minimum resolution requirements for their particular clinical specialty? <a href=\"references.html#anchor3\" target=\"_blank\">ATA 2015</a> ', 'ATA', '', '4'),
(32, 3, 1, 1, 'Will the telehealth vendor\'s video conference software be able to adapt to changing bandwidth environments without losing the connection? <a href=\"references.html#anchor10\" target=\"_blank\">Paing 2009</a>  ', 'ATA', '', '11'),
(33, 3, 1, 1, 'Does the telehealth vendor have appropriate redundant <a href=\"keyterms.html#anchor26\" target=\"_blank\">systems</a> in place that ensure availability of the data <a href=\"keyterms.html#anchor28\" target=\"_blank\">transmission</a> infrastructure for critical connectivity? <a href=\"references.html#anchor3\" target=\"_blank\">ATA 2015</a> ', 'ATA', '', '4'),
(34, 3, 1, 1, 'Are all audio, video, and other data <a href=\"keyterms.html#anchor28\" target=\"_blank\">transmission</a> secure through the use of <a href=\"keyterms.html#anchor11\" target=\"_blank\">encryption</a> that meets recognized standards such as HIPAA, HITECH, and ISO and all federal and state regulations?  \r\n<a href=\"https://www.ftc.gov/tips-advice/business-center/guidance/mobile-health-app-developers-ftc-best-practices\" target=\"_blank\">Federal Trade Commission</a>, <a href=\"newhtml.html#anchor21\" target=\"_blank\">164.312(e) (2)(ii)</a>', ' 164.312(e) (2)(ii), 164.312(a)(2)(iv)', '', ''),
(35, 3, 1, 1, 'Does the telehealth vendor ensure access to any protected health information (<a href=\"keyterms.html#anchor22\" target=\"_blank\">PHI</a>) stored on any device is adequately restricted by requiring a <a href=\"keyterms.html#anchor20\" target=\"_blank\">password</a> or equivalent <a href=\"keyterms.html#anchor25\" target=\"_blank\">security</a> feature (eg. fingerprinting, security questions) before the device can be accessed? <a href=\"newhtml.html#anchor22\" target=\"_blank\">164.308(a)(5)(ii)(D)</a>', '164.308(a)(5)(ii)(D)', '', ''),
(36, 3, 1, 1, 'Will the telehealth vendor\'s devices be configured to utilize an inactivity timeout function that requires a <a href=\"keyterms.html#anchor20\" target=\"_blank\">password</a> or re-<a href=\"keyterms.html#anchor4\" target=\"_blank\">authentication</a> to access the device after the timeout threshold has been exceeded (eg. 5 min.)? <a href=\"newhtml.html#anchor23\" target=\"_blank\">164.312(a)(2)(iii)</a>', '164.312(a)(2)(iii)', '', ''),
(37, 3, 1, 1, 'Are all <a href=\"keyterms.html#anchor1\" target=\"_blank\">unauthorized</a> persons denied access to protected health information (<a href=\"keyterms.html#anchor22\" target=\"_blank\">PHI</a>) generated during a telehealth session? <a href=\"https://www.ftc.gov/tips-advice/business-center/guidance/mobile-health-app-developers-ftc-best-practices\" target=\"_blank\">Federal Trade Commission</a>', '', '', ''),
(38, 3, 1, 1, 'Will the telehealth vendor be able to <a href=\"keyterms.html#anchor23\" target=\"_blank\">remotely</a> disable or wipe a <a href=\"keyterms.html#anchor18\" target=\"_blank\">mobile</a> device in the event it is lost or stolen?\r\n<a href=\"references.html#anchor4\" target=\"_blank\"> ATA 2014</a> ', 'ATA', '', '5'),
(39, 3, 1, 1, 'Does the telehealth vendor\'s video conferencing software allow only one session to be opened by a single user? <a href=\"references.html#anchor12\" target=\"_blank\">ATA 2009</a> ', 'ATA', '', '13'),
(40, 3, 1, 1, 'If so, does the hard drive use whole disk <a href=\"keyterms.html#anchor11\" target=\"_blank\">encryption</a> (FIPS 140-2, known as the Federal Information Processing Standard, and it is the US Government security standard used to accredit encryption standards of software and lists encryption such as <a href=\"keyterms.html#anchor2\" target=\"_blank\">AES</a> (Advanced Encryption Standard) to provide acceptable levels of <a href=\"keyterms.html#anchor25\" target=\"_blank\">security</a>?\r\n<a href=\"references.html#anchor3\" target=\"_blank\">ATA 2015</a> ', 'ATA', '', '4'),
(41, 3, 1, 1, 'Does the telehealth vendor\'s software platforms include social media functions that notify users when anyone on a contact list logs on? <a href=\"references.html#anchor4\" target=\"_blank\"> ATA 2014</a> ', 'ATA 2014', '', '5');

-- --------------------------------------------------------

--
-- Table structure for table `questionterm`
--

DROP TABLE IF EXISTS `questionterm`;
CREATE TABLE IF NOT EXISTS `questionterm` (
  `QuestionID` int(11) NOT NULL,
  `TermID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

DROP TABLE IF EXISTS `terms`;
CREATE TABLE IF NOT EXISTS `terms` (
  `TermID` int(11) NOT NULL AUTO_INCREMENT,
  `Term` varchar(50) NOT NULL,
  `TermDescription` varchar(500) NOT NULL,
  PRIMARY KEY (`TermID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

DROP TABLE IF EXISTS `userinfo`;
CREATE TABLE IF NOT EXISTS `userinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL,
  `Age` int(3) DEFAULT NULL,
  `Gender` text,
  `Education` varchar(100) DEFAULT NULL,
  `Major` varchar(100) DEFAULT NULL,
  `Job_Title` varchar(100) DEFAULT NULL,
  `Work_Experience` varchar(100) DEFAULT NULL,
  `Organization_Name` varchar(100) DEFAULT NULL,
  `Organization_Type` varchar(100) DEFAULT NULL,
  `Organization_Size` varchar(100) DEFAULT NULL,
  `Telehealth_Use_Years` varchar(100) DEFAULT NULL,
  `IT_Team_Number` varchar(100) DEFAULT NULL,
  `IT_Persons_Number` varchar(100) DEFAULT NULL,
  `articleid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `username`, `password`, `Age`, `Gender`, `Education`, `Major`, `Job_Title`, `Work_Experience`, `Organization_Name`, `Organization_Type`, `Organization_Size`, `Telehealth_Use_Years`, `IT_Team_Number`, `IT_Persons_Number`, `articleid`) VALUES
(1, 'bwm19@pitt.edu', 'helloworld', 22, 'Male', 'Bachelor', 'Public Health', 'Consultant', '5 years', 'Pitt', 'Other', '1-100', '1', '0', '0', 0),
(11, 'brian.man306@gmail.com', 'helloworld', 3, 'female', '0', '5', '5', 'asdf', 'asdf', '3', '1', '2', '2', '3', 0),
(12, 'watzlaf@gmail.com', 'iiiiiii', 4, 'female', '0', '6', '9', '1', 'pitt', '9', '', '1', '1', '1', 0),
(17, 'test@a.com', 'test123', 0, 'male', '3', '7', '4', '1', 'UPMC', '1', '0', '2', '2', '1', 0),
(21, 'hsx', '123', 0, 'female', '1', '5', '9', '0', '', '9', '0', '1', '2', '3', 1),
(22, 'sabrina@out.com', '12345678', 20, 'female', 'Associate', 'Business Administration', 'Chief Medical Information Officer', '7', NULL, 'Managed Care Organization (MCO)', '350', '3', '25', '7', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
