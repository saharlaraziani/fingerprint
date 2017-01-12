-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2017 at 12:15 AM
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
-- Table structure for table `fingerprint`
--

CREATE TABLE `fingerprint` (


  `ID_fingerprint` int(10) NOT NULL,
  `time_Stamp` varchar(100) DEFAULT NULL,
  `timeZone` varchar(100) DEFAULT NULL,  x
  `browser_plugins` varchar(1000) DEFAULT NULL, x
  `nav_platform` varchar(255) DEFAULT NULL, x
  `cookies_enabled` int(1) DEFAULT NULL, x
  `do_not_track` int(1) DEFAULT NULL,x
  `using_adblock` int(1) DEFAULT NULL,
  `webGL_vendor` varchar(255) DEFAULT NULL,
  `WebGL_renderer` varchar(255) DEFAULT NULL,
  `Canvas` varchar(255) DEFAULT NULL,
  `user_agent` varchar(255) DEFAULT NULL,x $userAgent
  `fonts` varchar(1000) DEFAULT NULL,
  `date_creation` datetime DEFAULT NULL,x
  `ID_device` int(10) DEFAULT NULL,
  `ID_user` int(10) DEFAULT NULL,
  `localJS` varchar(25) DEFAULT NULL,x
  `dntJS` varchar(25) DEFAULT NULL,x
  `acceptHttp` varchar(255) DEFAULT NULL,x
  `hostHttp` varchar(255) DEFAULT NULL,x
  `connectionHttp` varchar(25) DEFAULT NULL,x
  `encodingHttp` varchar(25) DEFAULT NULL,x
  `languageHttp` varchar(25) DEFAULT NULL,x
  `orderHttp` varchar(25) DEFAULT NULL,
  `resolutionJS` varchar(100) DEFAULT NULL,x
  `sessionJS` varchar(25) DEFAULT NULL,x
  `IEDataJS` varchar(25) DEFAULT NULL
  'useragentJS'
  'userIPCountry'
  'userIP'
  'refererHttp'
  'appnameJS'
  'appcodenameJS'
  'versionflashJS'
  'javaenabledJS'
  'vendorJS'
  'productJS'
  'dntJS'
  ALTER TABLE `fingerprint` ADD  `userIPCountry`   VARCHAR(255) NULL  ,
  ALTER TABLE `fingerprint` ADD  `userIP`          VARCHAR(255) NULL   ,
  ALTER TABLE `fingerprint` ADD  'refererHttp'     VARCHAR(255) NULL    ,
  ALTER TABLE `fingerprint` ADD  'appnameJS'       VARCHAR(255) NULL     ,
  ALTER TABLE `fingerprint` ADD  'appcodenameJS'   VARCHAR(255) NULL      ,
  ALTER TABLE `fingerprint` ADD  'versionflashJS'  VARCHAR(255) NULL       ,
  ALTER TABLE `fingerprint` ADD  'javaenabledJS'   VARCHAR(255) NULL        ,
  ALTER TABLE `fingerprint` ADD  'vendorJS'        VARCHAR(255) NULL         ,
  ALTER TABLE `fingerprint` ADD  'productJS'       VARCHAR(255) NULL          ,
  ALTER TABLE `fingerprint` ADD  'dntJS'           VARCHAR(255) NULL

) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fingerprint`
--

INSERT INTO `fingerprint` (`ID_fingerprint`, `time_Stamp`, `timeZone`, `browser_plugins`, `nav_platform`, `cookies_enabled`, `do_not_track`, `using_adblock`, `webGL_vendor`, `WebGL_renderer`, `Canvas`, `user_agent`, `fonts`, `date_creation`, `ID_device`, `ID_user`, `localJS`, `dntJS`, `acceptHttp`, `hostHttp`, `connectionHttp`, `encodingHttp`, `languageHttp`, `orderHttp`, `resolutionJS`, `sessionJS`, `IEDataJS`) VALUES
(1, NULL, '"-60"', 'Plugin 0: Chrome PDF Viewer; ; mhjfbmdgcfjbbpaeojofohoefgiehjai; (; application/pdf; pdf). Plugin 1: Chrome PDF Viewer; Portable Document Format; internal-pdf-viewer; (Portable Document Format; application/x-google-chrome-pdf; pdf). Plugin 2: Native Client; ; internal-nacl-plugin; (Native Client Executable; application/x-nacl; ) (Portable Native Client Executable; application/x-pnacl; ). Plugin 3: Shockwave Flash; Shockwave Flash 23.0 r0; pepflashplayer.dll; (Shockwave Flash; application/x-shockwave-flash; swf) (Shockwave Flash; application/futuresplash; spl). Plugin 4: Widevine Content Decryption Module; Enables Widevine licenses for playback of HTML audio/video content. (version: 1.4.8.903); widevinecdmadapter.dll; (Widevine Content Decryption Module; application/x-ppapi-widevine-cdm; )', 'Win32', 1, 0, 1, '"Google Inc."', '"ANGLE (Intel(R) HD Graphics 5500 Direct3D11 vs_5_0 ps_5_0)"', NULL, 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.99 Safari/537.36', '"Abyssinica SIL_Adobe Arabic_Adobe Caslon Pro_Adobe Caslon Pro Bold_Adobe Devanagari_Adobe Fan Heiti Std B_Adobe Fangsong Std R_Adobe Garamond Pro_Adobe Garamond Pro Bold_Adobe Gothic Std B_Adobe Hebrew_Adobe Heiti Std R_Adobe Kaiti Std R_Adobe Ming Std L_Adobe Myungjo Std M_Adobe Naskh Medium_Adobe Song "', '2016-12-01 00:00:00', 1, 1, '"yes"', '"NC"', '"text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8"', NULL, NULL, '"gzip, deflate, sdch, br"', '"en-US,en;q=0.8,fr;q=0.6"', NULL, '1366x768x24', NULL, NULL);

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fingerprint`
--
ALTER TABLE `fingerprint`
  MODIFY `ID_fingerprint` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;






















<?php
                            include 'includes/config.php';
                            $email= $_POST['email'];
                            $qy=  "SELECT Nom FROM device , user where u.email=$email and u.ID_user=d.ID_user  ";
                            $log = $conn->query($qy);
                            $num = $log->num_rows;
                            $row = $log->fetch_assoc();
                            echo "<select name='device'>";
                            echo "<option value='' >".htmlspecialchars($row["Nom"])."</option>";

                            echo "</select>";?>



        $num = $result->num_rows;
                                   $row = $result->fetch_assoc();
                                   $id_user = $row['ID_user'];
                                   $qry1 = "INSERT INTO device (Nom,ID_user,date_creation)
       							VALUES('$device',$id_user,NOW())";

                                  $result1 = $conn->query($qry1);


         include 'includes/config.php';
                                         $email=$_SESSION['email'];
                                         $sel = "SELECT * FROM user WHERE email = $email";
                                         $rs = $conn->query($sel);
                                         $rws = $rs->fetch_assoc();
                                         $idu= $rws['ID_user'];


                                        <?php
                                        						include 'includes/config.php';
                                        						$sel = "SELECT * FROM fingerprint , user u , device d  WHERE u.email = '$_SESSION[email]'and u.ID_user=d.ID_user and d.ID_device=f.ID_device ";
                                        						$rs = $conn->query($sel);
                                        						$rws = $rs->fetch_assoc();
                                        			?>