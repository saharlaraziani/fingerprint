-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2016 at 02:53 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fingerprint`
--

-- --------------------------------------------------------

--
-- Table structure for table `device`
--

CREATE TABLE `device` (
  `ID_device` int(10) NOT NULL,
  `Nom` varchar(25) DEFAULT NULL,
  `date_creation` datetime DEFAULT NULL,
  `ID_user` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `device`
--

INSERT INTO `device` (`ID_device`, `Nom`, `date_creation`, `ID_user`) VALUES
(1, 'PC', '2016-12-01 00:00:00', 1),
(2, 'PC', '2016-12-01 00:00:00', 1),
(3, 'new', '2016-12-09 13:43:19', 1),
(4, 'new', '2016-12-09 14:04:53', 1),
(5, 'PC', '2016-12-09 14:14:20', 1),
(6, 'PC', '2016-12-09 14:26:49', 1),
(7, 'pc', '2016-12-09 14:56:30', 1),
(8, 'ordi', '2016-12-09 14:57:11', 1),
(9, 'ordi', '2016-12-09 14:59:33', 1),
(10, 'new-pc', '2016-12-09 15:37:44', 1),
(11, 'nom', '2016-12-09 15:38:28', 1),
(12, 'nom', '2016-12-09 15:39:32', 1),
(13, 'PC', '2016-12-09 15:43:03', 1),
(14, 'new-pc', '2016-12-09 15:44:57', 1),
(15, 'new-pc', '2016-12-09 15:45:44', 1);

-- --------------------------------------------------------

--
-- Table structure for table `fingerprint`
--

CREATE TABLE `fingerprint` (
  `ID_fingerprint` int(10) NOT NULL,
  `time_Stamp` varchar(100) DEFAULT NULL,
  `timeZone` varchar(100) DEFAULT NULL,
  `browser_plugins` varchar(1000) DEFAULT NULL,
  `nav_platform` varchar(255) DEFAULT NULL,
  `cookies_enabled` int(1) DEFAULT NULL,
  `do_not_track` int(1) DEFAULT NULL,
  `using_adblock` int(1) DEFAULT NULL,
  `webGL_vendor` varchar(255) DEFAULT NULL,
  `WebGL_renderer` varchar(255) DEFAULT NULL,
  `Canvas` varchar(255) DEFAULT NULL,
  `user_agent` varchar(255) DEFAULT NULL,
  `fonts` varchar(1000) DEFAULT NULL,
  `date_creation` datetime DEFAULT NULL,
  `ID_device` int(10) DEFAULT NULL,
  `ID_user` int(10) DEFAULT NULL,
  `localJS` varchar(25) DEFAULT NULL,
  `dntJS` varchar(25) DEFAULT NULL,
  `acceptHttp` varchar(255) DEFAULT NULL,
  `hostHttp` varchar(255) DEFAULT NULL,
  `connectionHttp` varchar(25) DEFAULT NULL,
  `encodingHttp` varchar(25) DEFAULT NULL,
  `languageHttp` varchar(25) DEFAULT NULL,
  `orderHttp` varchar(25) DEFAULT NULL,
  `resolutionJS` varchar(100) DEFAULT NULL,
  `sessionJS` varchar(25) DEFAULT NULL,
  `IEDataJS` varchar(25) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fingerprint`
--

INSERT INTO `fingerprint` (`ID_fingerprint`, `time_Stamp`, `timeZone`, `browser_plugins`, `nav_platform`, `cookies_enabled`, `do_not_track`, `using_adblock`, `webGL_vendor`, `WebGL_renderer`, `Canvas`, `user_agent`, `fonts`, `date_creation`, `ID_device`, `ID_user`, `localJS`, `dntJS`, `acceptHttp`, `hostHttp`, `connectionHttp`, `encodingHttp`, `languageHttp`, `orderHttp`, `resolutionJS`, `sessionJS`, `IEDataJS`) VALUES
(1, NULL, '"-60"', 'Plugin 0: Chrome PDF Viewer; ; mhjfbmdgcfjbbpaeojofohoefgiehjai; (; application/pdf; pdf). Plugin 1: Chrome PDF Viewer; Portable Document Format; internal-pdf-viewer; (Portable Document Format; application/x-google-chrome-pdf; pdf). Plugin 2: Native Client; ; internal-nacl-plugin; (Native Client Executable; application/x-nacl; ) (Portable Native Client Executable; application/x-pnacl; ). Plugin 3: Shockwave Flash; Shockwave Flash 23.0 r0; pepflashplayer.dll; (Shockwave Flash; application/x-shockwave-flash; swf) (Shockwave Flash; application/futuresplash; spl). Plugin 4: Widevine Content Decryption Module; Enables Widevine licenses for playback of HTML audio/video content. (version: 1.4.8.903); widevinecdmadapter.dll; (Widevine Content Decryption Module; application/x-ppapi-widevine-cdm; )', 'Win32', 1, 0, 1, '"Google Inc."', '"ANGLE (Intel(R) HD Graphics 5500 Direct3D11 vs_5_0 ps_5_0)"', NULL, 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.99 Safari/537.36', '"Abyssinica SIL_Adobe Arabic_Adobe Caslon Pro_Adobe Caslon Pro Bold_Adobe Devanagari_Adobe Fan Heiti Std B_Adobe Fangsong Std R_Adobe Garamond Pro_Adobe Garamond Pro Bold_Adobe Gothic Std B_Adobe Hebrew_Adobe Heiti Std R_Adobe Kaiti Std R_Adobe Ming Std L_Adobe Myungjo Std M_Adobe Naskh Medium_Adobe Song "', '2016-12-01 00:00:00', 1, 1, '"yes"', '"NC"', '"text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8"', NULL, NULL, '"gzip, deflate, sdch, br"', '"en-US,en;q=0.8,fr;q=0.6"', NULL, '1366x768x24', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `ID_log` int(10) NOT NULL,
  `date_creation` datetime DEFAULT NULL,
  `event_log` varchar(255) DEFAULT NULL,
  `ID_user` int(10) DEFAULT NULL,
  `ID_fingerprint` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `msg_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID_user` int(10) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `nom` varchar(25) DEFAULT NULL,
  `mot_de_passe` varchar(25) DEFAULT NULL,
  `date_creation` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID_user`, `email`, `nom`, `mot_de_passe`, `date_creation`) VALUES
(1, 'l@gmail.com', 'lara', 'lara', '2016-12-01 04:00:00'),
(2, 'pren@kom.com', 'nnn', 'hhhhh', '2016-12-01 04:00:00'),
(3, 'pren@kom.com', 'hhhh', 'jjjj', NULL),
(4, 'l@b.com', 'nom', 'hhhhh', '2016-12-09 12:25:06'),
(5, 'l@b.com', 'hhhh', 'new', '2016-12-09 12:55:50'),
(6, 'l@b.com', 'hhhh', 'new', '2016-12-09 12:56:16'),
(7, 'l@b.com', 'nom', 'hhhhh', '2016-12-09 12:58:40'),
(8, 'l@b.com', 'nom', 'hhhhh', '2016-12-09 13:21:24'),
(9, 'new@ggg.com', 'nom', 'new', '2016-12-09 13:33:44'),
(10, 'enock@gmail.com', 'nom', 'xxx', '2016-12-09 14:58:44'),
(11, 'pren@kom.com', 'nom', 'new', '2016-12-09 15:20:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `device`
--
ALTER TABLE `device`
  ADD PRIMARY KEY (`ID_device`),
  ADD UNIQUE KEY `ID_device` (`ID_device`),
  ADD KEY `FKDevice862349` (`ID_user`),
  ADD KEY `FKDevice862350` (`ID_user`);

--
-- Indexes for table `fingerprint`
--
ALTER TABLE `fingerprint`
  ADD PRIMARY KEY (`ID_fingerprint`),
  ADD UNIQUE KEY `ID_fingerprint` (`ID_fingerprint`),
  ADD KEY `FKFingerprin70343` (`ID_device`),
  ADD KEY `FKFingerprin364591` (`ID_user`),
  ADD KEY `FKFingerprin70344` (`ID_device`),
  ADD KEY `FKFingerprin364592` (`ID_user`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`ID_log`),
  ADD UNIQUE KEY `ID_log` (`ID_log`),
  ADD KEY `FKLog506475` (`ID_user`),
  ADD KEY `FKLog197318` (`ID_fingerprint`),
  ADD KEY `FKLog506476` (`ID_user`),
  ADD KEY `FKLog197319` (`ID_fingerprint`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_user`),
  ADD UNIQUE KEY `ID_user` (`ID_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `device`
--
ALTER TABLE `device`
  MODIFY `ID_device` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `fingerprint`
--
ALTER TABLE `fingerprint`
  MODIFY `ID_fingerprint` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `ID_log` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
