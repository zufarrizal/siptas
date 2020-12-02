-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2020 at 04:21 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.3.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zufq9565_siptas`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `fullname` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `fullname`, `image`, `role_id`, `is_active`, `date_created`) VALUES
(4, 'admin', '$2y$10$s26uyZLlfvg3r4rgyeyleOWXhfmEQdvHzgjjSmymjF/KLGqN3A5ui', 'Admin', 'default.jpg', 1, 1, 1599704697);

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(11) NOT NULL,
  `class` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `class`) VALUES
(18, 'TEK - A3'),
(19, 'TEK - K31'),
(20, 'TEK - X31'),
(21, 'TOM - A3'),
(22, 'TOM - K31'),
(23, 'TEK - X31'),
(24, 'TERM - A3'),
(25, 'TERM - K31'),
(26, 'TERM - XK31'),
(27, 'AK - A3'),
(28, 'AKE - A3'),
(29, 'AKP - A3'),
(30, 'AK - K31');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `history` varchar(256) NOT NULL,
  `date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lecturers`
--

CREATE TABLE `lecturers` (
  `id` int(11) NOT NULL,
  `lecturers` varchar(128) NOT NULL,
  `study` varchar(128) NOT NULL,
  `phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lecturers`
--

INSERT INTO `lecturers` (`id`, `lecturers`, `study`, `phone`) VALUES
(4, 'Asni Tafrikhatin, M.Pd', 'Teknik Elektro', '081575487878'),
(5, 'Bahtiar Wilantara, M.Pd', 'Teknik Mesin Otomotif', '081317512668'),
(6, 'Dra. Sotya Partiwi Ediwidjojo, M.M', 'Akuntansi', '087737908799'),
(7, 'Eko Wardoyo, S.Sos., M.M', 'Akuntansi', '081802842901'),
(8, 'Fitriani Dwi Ratna Sari, S.T., M.M', 'Teknik Elektro', '08175478151'),
(9, 'H. Triyo Rachmadi, S.Kep., M.H.Kes', 'Teknik Elektro', '085228148645'),
(10, 'Hamid Nasrullah, S.Pd., M.Pd', 'Teknik Mesin Otomotif', '085643500965'),
(11, 'Kardianto Indra Purnomo, S.Mn., M.Pd', 'Akuntansi', '085880488150'),
(12, 'Nurhayatun, S.ST., M.M', 'Akuntansi', '081915041318'),
(13, 'Parikhin, S.T., M.Pd', 'Teknik Mesin Otomotif', '085267819337'),
(14, 'Sri Wahyuningsih, S.E., M.Si', 'Akuntansi', '081215444132'),
(15, 'Suratno, S.E., M.M', 'Akuntansi', '081391435383'),
(16, 'Uswatun Khasanah, S.Pd., M.M', 'Akuntansi', '087738831077'),
(17, 'Wakhid Yuliyanto, S.E., M.M', 'Akuntansi', '081391536263'),
(18, 'Wenny Marlini, S.E., M.M', 'Akuntansi', '087856415687'),
(19, 'Yusuf Mufti, M.Sc', 'Teknik Elektro', '089637319180');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `fullname` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `username`, `password`, `fullname`, `image`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'akademik', '$2y$10$4KbtxW7m.snrzcmE1ifGJOSy67eyyoXQEe7sdvIYo0tVQVYlxa.m2', 'Akademik', 'akademik1.jpg', 2, 1, 1599031789);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `username` int(11) NOT NULL,
  `password` varchar(256) NOT NULL,
  `fullname` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `gender` varchar(128) NOT NULL,
  `class` varchar(128) NOT NULL,
  `year` varchar(4) NOT NULL,
  `city` varchar(128) NOT NULL,
  `birthdate` date NOT NULL,
  `address` varchar(256) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `image` varchar(128) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `username`, `password`, `fullname`, `email`, `gender`, `class`, `year`, `city`, `birthdate`, `address`, `phone`, `image`, `role_id`, `is_active`, `date_created`) VALUES
(39, 17313036, '$2y$10$ei5BUtAewdrTLJ8NqQ/xe..9JpBmpjwCTWj2WxDBvRcZjge2yBrVe', 'MAARIFATUN AMANAH', 'MAARIFATUN@gmail.com', 'Female', 'TEK - A3', '2017', 'Kebumen', '1999-01-01', 'Kebumen', '081234567890', 'default.jpg', 3, 1, 1605064380),
(40, 17313016, '$2y$10$ngaTb5iUiF1zSkNXlMi1nODJ015aUt3N6mwxQEv2rjLHm.OGiAaXG', 'SUSI PUSPITA TARUNA', 'susi@gmail.com', 'Female', 'TEK - A3', '2017', 'Kebumen', '1999-01-01', 'Kebumen', '081234567890', 'default.jpg', 3, 1, 1605064457),
(41, 17313032, '$2y$10$wq6i5u9pGSsiTW2dMWBDuO7iyMMUyGCOSwaXR8VHqC3O1YFeU/79y', 'NUR FAIZAH BUDI MULYANI', 'nur@gmail.com', 'Female', 'TEK - A3', '2017', 'Kebumen', '1999-01-01', 'Kebumen', '081234567890', 'default.jpg', 3, 1, 1605064499),
(42, 17313047, '$2y$10$G6zxZqUjqihT61TpOFZtLO0MHdf4vZRc1qcod1.O7DY9AGTEZBKf6', 'CATUR DHARMA PUTRA', 'catur@gmail.com', 'Male', 'TEK - K31', '2017', 'Kebumen', '1999-01-01', 'Kebumen', '081234567890', 'default.jpg', 3, 1, 1605064554),
(43, 17313037, '$2y$10$QCW5Rqq3Up9ZbNxgyzrbqeaJ6CW4U2CyvDj/qnftosTP6zb4pCTfq', 'ASLI HUSAENI', 'asli@gmail.com', 'Male', 'TEK - A3', '2017', 'Kebumen', '1999-01-01', 'Kebumen', '081234567890', 'default.jpg', 3, 1, 1605064604),
(44, 17313028, '$2y$10$bWQbp128wYQTbDoZ82y9UOie4UniMaO8PLpdokzw9Zx6Y1/1w.486', 'FIKRIANTO', 'FIKRIANTO@gmail.com', 'Male', 'TEK - A3', '2017', 'Kebumen', '1999-01-01', 'Kebumen', '081234567890', 'default.jpg', 3, 1, 1605064658),
(45, 17313034, '$2y$10$wXDddtFfaxQ.fcHqEhNPeuE2FAITJzXTt2CLn6tdA//PffWwrSbzy', 'AGUS SALIM', 'agus@gmail.com', 'Male', 'TEK - K31', '2017', 'Kebumen', '1999-01-01', 'Kebumen', '081234567890', 'default.jpg', 3, 1, 1605064732),
(46, 17313001, '$2y$10$6Vp7gtlk57qg24sNUjhcU.FZFZG1/eai1hfREJDmGDb7V1FGFNEhe', 'DANANG KITANGGI', 'danang@gmail.com', 'Male', 'TEK - X31', '2017', 'Kebumen', '1999-01-01', 'Kebumen', '081234567890', 'default.jpg', 3, 1, 1605064771),
(47, 17313021, '$2y$10$SADndHiV7KpQo/jhjBpl6eDCtaWPwLJdnCP9rT6UVT7v5ntAVpznW', 'ANGGA ZAFRANANDA', 'angga@gmail.com', 'Male', 'TEK - K31', '2017', 'Kebumen', '1999-01-01', 'Kebumen', '081234567890', 'default.jpg', 3, 1, 1605064809),
(48, 17313027, '$2y$10$8JCD7ofr6wbJwEk8Ucxsw.EhGtYhcsIKtDYGkpGXUdl3TEWwbtHW6', 'MUHAMMAD NGABDUR ROJAK', 'NGABDUR@gmail.com', 'Male', 'TEK - A3', '2017', 'Kebumen', '1999-01-01', 'Kebumen', '081234567890', 'default.jpg', 3, 1, 1605064849),
(49, 17313049, '$2y$10$/xFu5lmoQIumqCmUlFwDie5YQGSfaAC5mdbtDCUwQ7GFKwp2z8OPO', 'DAVID GUFRON ALKARIM', 'DAVID@gmail.com', 'Male', 'TEK - K31', '2017', 'Kebumen', '1999-01-01', 'Kebumen', '081234567890', 'default.jpg', 3, 1, 1605064883),
(50, 17315019, '$2y$10$9oqxgemypZrkGcgmVodNC.ZkArO2wDalnXaMY89IO9VK6dXjhHPS6', 'AKHMAD NURWAKHID', 'AKHMAD@gmail.com', 'Male', 'TOM - A3', '2017', 'Kebumen', '1999-01-01', 'Kebumen', '081234567890', 'default.jpg', 3, 1, 1605064987),
(51, 17315014, '$2y$10$JU69lfcRwcugUz94k4Mo2eoxe8P8i0Ae3e1PHZlQugVuR/3ejFWxi', 'ADI NURUL HIDAYAT', 'adi@gmail.com', 'Male', 'TOM - K31', '2017', 'Kebumen', '1999-01-01', 'Kebumen', '081234567890', 'default.jpg', 3, 1, 1605065094),
(52, 17315009, '$2y$10$sHpin9mn/BOBvtpm8LbCpu.6rKE0fzDTKIInGHjbKYE8Rg6A5mkTi', 'DEDEN ADI P.M.', 'deden@gmail.com', 'Male', 'TOM - K31', '2017', 'Kebumen', '1996-01-01', 'Kebumen', '081234567890', 'default.jpg', 3, 1, 1605066326),
(53, 17315017, '$2y$10$aThVlT2DrOV1aYSQr3fdYu3oNDzFZMiMZbKFvWIHPHB3KrKt8I4rK', 'AKHMAD ROJALI', 'ROJALI@gmail.com', 'Male', 'TOM - K31', '2017', 'Kebumen', '1999-01-01', 'Kebumen', '081234567890', 'default.jpg', 3, 1, 1605066362),
(54, 17315006, '$2y$10$io6OU9aMJe1dSMCDGwFG.O0WmAPTq9KaBps2sbD5UkhcNBMC8Teq.', 'ARYA ARGO SASONGKO', 'SASONGKO@gmail.com', 'Male', 'TOM - A3', '2017', 'Kebumen', '1999-01-01', 'Kebumen', '081234567890', 'default.jpg', 3, 1, 1605066581),
(55, 17315013, '$2y$10$tgYQwo0ZgkO2CaB.j8dGl.YmoZLnc2pkMn2FTEsTGDTQq5lgWo12m', 'SLAMET RIDHO ILLAHI', 'slamet@gmail.com', 'Male', 'TOM - A3', '2017', 'Kebumen', '1999-01-01', 'Kebumen', '081234567890', 'default.jpg', 3, 1, 1605066622),
(56, 17315020, '$2y$10$3/zekTELRcT4pf56Xo6dLOenqyo2R5xn4ujFNogXYLv4rkGY1i1Z.', 'YANUAR PUGUH KURNIAWAN', 'YANUAR@gmail.com', 'Male', 'TOM - A3', '2017', 'Kebumen', '1999-01-01', 'Kebumen', '081234567890', 'default.jpg', 3, 1, 1605066726),
(57, 17315008, '$2y$10$fUCi4rfdIGnFRSL0oYN2leXWZJK67HO5MWlypPRaNu.yFksxBV3Fa', 'BARLIN PRASTAJI', 'BARLIN@gmail.com', 'Male', 'TOM - A3', '2017', 'Kebumen', '1999-01-01', 'Kebumen', '081234567890', 'default.jpg', 3, 1, 1605066770),
(58, 17315018, '$2y$10$ooTR0Oz8qLE/QBQq8WnZmOLo7/c4UpEKfUhNLdvw.n79gwXEq.nJW', 'TOHA HIDAYAT', 'toha@gmail.com', 'Male', 'TOM - K31', '2017', 'Kebumen', '1999-01-01', 'Kebumen', '081234567890', 'default.jpg', 3, 1, 1605066952),
(59, 17315007, '$2y$10$S29Nb5v4CJrxUsKOHd.6zuYAnaJEx/Lt1jYbZC2pnlxPdTyRUnJq2', 'SUTARNO', 'SUTARNO@gmail.com', 'Male', 'TOM - K31', '2017', 'Kebumen', '1999-01-01', 'Kebumen', '081234567890', 'default.jpg', 3, 1, 1605066986),
(60, 17315021, '$2y$10$njjFduIgMD6hO6OWHtlP1OQY/Wq3LnjnWeIZMAeV2uAi1ef.fnjKu', 'LUDIYONO', 'LUDIYONO@gmail.com', 'Male', 'TOM - K31', '2017', 'Kebumen', '1999-01-01', 'Kebumen', '081234567890', 'default.jpg', 3, 1, 1605067033),
(61, 18313001, '$2y$10$nmOQ1zazgzb6vP4W0Ew/4O/9vkQA6FsnxdiLQ3g7Pr5uXEuNRDNlK', 'WULIDA AHADI PAMUNGKAS', 'WULIDA@gmail.com', 'Male', 'TEK - X31', '2018', 'Kebumen', '1999-01-01', 'Kebumen', '081234567890', 'default.jpg', 3, 1, 1605067066),
(62, 18313006, '$2y$10$VOQ3Flbo.DwOZNyiEUn3x.7QW2tVW2abmgF8utDsD4Cpc6fesJXw2', 'DIMAS IQBAL CHOIRON', 'dimas@gmail.com', 'Male', 'TEK - X31', '2018', 'Kebumen', '1999-01-01', 'Kebumen', '081234567890', 'default.jpg', 3, 1, 1605067186),
(63, 18313002, '$2y$10$FRBEzi/khWWcwqo3JSt6Pe6fVNhOXTupw6UxGJNZCZF/J/NYwDRGC', 'DWI RISKYANTO', 'RISKYANTO@gmail.com', 'Male', 'TEK - X31', '2018', 'Kebumen', '1999-01-01', 'Kebumen', '081234567890', 'default.jpg', 3, 1, 1605067218),
(64, 17313042, '$2y$10$J0ztX442T7TuQz9WwHxTfe5.0lDVKUptYE2SVKkovedTi.3rHMvwO', 'RYAN IFNU AZIZ', 'ryan@gmail.com', 'Male', 'TEK - K31', '2017', 'Kebumen', '1999-01-01', 'Kebumen', '081234567890', 'default.jpg', 3, 1, 1605067262),
(65, 17313015, '$2y$10$UTnbBpQvM3Gjhhua1ls8Uegz/aYBPoAZgGAOeoyRExBHRoVd4R5aq', 'TOMI SISWORO', 'tomi@gmail.com', 'Male', 'TEK - K31', '2017', 'Kebumen', '1999-01-01', 'Kebumen', '081234567890', 'default.jpg', 3, 1, 1605067293),
(66, 17313040, '$2y$10$9mWVIqurZwdxLVEGqbZlvut0BQLtOCsNrmOvZXaJzYvC0jJ.igX1W', 'RISWONDO MAHARDIKO', 'RISWONDO@gmail.com', 'Male', 'TEK - K31', '2017', 'Kebumen', '1999-01-01', 'Kebumen', '081234567890', 'default.jpg', 3, 1, 1605067332),
(67, 17313035, '$2y$10$CuAeJ.ZRr.uVuSUrOmCJ8uPBh82l1BzqxxoKSM3tfGenNfPWq5Wl.', 'AJI PANGESTU', 'ajipangestu@gmail.com', 'Male', 'TEK - K31', '2017', 'Kebumen', '1999-01-01', 'Kebumen', '081234567890', 'default.jpg', 3, 1, 1605067369),
(68, 17313025, '$2y$10$rSd01FGoBC829zwQXoi1q.xkjVdRUi5twRnyOX0e6ZbdtEC9AuKlK', 'ZUFAR RIZAL', 'zufar@gmail.com', 'Male', 'TEK - K31', '2017', 'Kebumen', '1999-01-01', 'Kebumen', '081234567890', 'default.jpg', 3, 1, 1605067395),
(69, 17313009, '$2y$10$m9A1XjSaAOcMGyP7kmZJlOJR9KgIiVLiFZpOszphbHNIq/XfK/Bve', 'ALDI ZUBAIDI', 'aldi@gmail.com', 'Male', 'TEK - K31', '2017', 'Kebumen', '1999-01-01', 'Kebumen', '081234567890', 'default.jpg', 3, 1, 1605067418),
(70, 17313017, '$2y$10$CHtX7/WPWl.8.wrPQHqZSeeagRdWgx7AmAF85nLmUzV7udch4fQ02', 'SITI NURCHAYATI', 'SITINURCHAYATI@gmail.com', 'Male', 'TEK - A3', '2020', 'Kebumen', '1999-01-01', 'Kebumen', '081234567890', 'default.jpg', 3, 1, 1605067455),
(71, 17313038, '$2y$10$m2ax3i0AJgynVIj/LypFVu4HNZAZ7S90OPrO.hMPqjrtco5STQ9.W', 'DWI WAHYU SETIAJI', 'DWIWAHYUSETIAJI@gmail.com', 'Male', 'TEK - K31', '2017', 'Kebumen', '1999-01-01', 'Kebumen', '081234567890', 'default.jpg', 3, 1, 1605067489),
(72, 17313019, '$2y$10$LdyOovtPYMsumLBcKw7Ep.hhYu2YXsh8GIfBCDrewdKqq.dGJZQVS', 'DIAN ANDIKA', 'DIANANDIKA@gmail.com', 'Male', 'TEK - K31', '2017', 'Kebumen', '1999-01-01', 'Kebumen', '081234567890', 'default.jpg', 3, 1, 1605067558),
(73, 18313003, '$2y$10$sLYfcU9IIfDJ8LI5GdXBLOEAdUvrAbKb/GbRyBlnU7VEo3Xo.jsRS', 'SAFEI ARIF WIRANTO', 'SAFEIARIFWIRANTO@gmail.com', 'Male', 'TEK - X31', '2017', 'Kebumen', '1999-01-01', 'Kebumen', '081234567890', 'default.jpg', 3, 1, 1605067584),
(74, 17313026, '$2y$10$Ji2qHosF8AZaXUru.pBbcuicDdg5x6N5csTyklJ0eS6UKltoEwfRm', 'ELING TITI RAHAYU', 'ELINGTITIRAHAYU@gmail.com', 'Male', 'TEK - K31', '2017', 'Kebumen', '1999-01-01', 'Kebumen', '081234567890', 'default.jpg', 3, 1, 1605067659),
(75, 17314010, '$2y$10$XnBUP2gJUybDXJ/sLWjz5um5kD75RHFf0iu3iDP.6MU0Zwn6mvNk6', 'MUGI DWI HANDOYO', 'MUGIDWIHANDOYO@gmail.com', 'Male', 'TERM - A3', '2017', 'Kebumen', '1999-01-01', 'Kebumen', '081234567890', 'default.jpg', 3, 1, 1605067703),
(76, 17314008, '$2y$10$maWCjdBlmMCkO/9pM9Sn6..Z08klRCO6FzzVP2ghokNF6ivi6onpe', 'INDAH PURSIWIYANTI S', 'INDAHPURSIWIYANTI@gmail.com', 'Female', 'TERM - K31', '2017', 'Kebumen', '1999-01-01', 'Kebumen', '081234567890', 'default.jpg', 3, 1, 1605067805),
(77, 17314006, '$2y$10$ATPVS8P0joRy0ifufvQU8e9msajmuFhauiL7imWO3wrV0ur6FjvUS', 'RIRRI ANGGUN TRIPAMA', 'RIRRIANGGUNTRIPAMA@gmail.com', 'Female', 'TERM - A3', '2017', 'Kebumen', '1999-01-01', 'Kebumen', '081234567890', 'default.jpg', 3, 1, 1605067839),
(78, 17314007, '$2y$10$4oydUyjNTQYD2k89nnZ9XOOOup5bqut9zop41jxxU1C5IJ4ut.V2a', 'DWI SULISTINA ISWANTI', 'DWISULISTINAISWANTI@gmail.com', 'Female', 'TERM - K31', '2017', 'Kebumen', '1999-01-01', 'Kebumen', '081234567890', 'default.jpg', 3, 1, 1605067880),
(79, 18314003, '$2y$10$uMo9ZCW7a9qYaRmCATuga.elZXSQK0DmDlhRsyrhd0AhzWdDgAS/.', 'DEWANTI AMIRDA AULIYA', 'DEWANTIAMIRDAAULIYA@gmail.com', 'Female', 'TERM - XK31', '2018', 'Kebumen', '1999-01-01', 'Kebumen', '081234567890', 'default.jpg', 3, 1, 1605067965),
(80, 17314003, '$2y$10$QYP55pzs7FV2PLsPE4zCa.gmN37pHuFOGBDUUdnhXFwKP0RKaKhU6', 'PUJI LESTARI', 'PUJILESTARI@gmail.com', 'Female', 'TERM - A3', '2017', 'Kebumen', '1999-01-01', 'Kebumen', '081234567890', 'default.jpg', 3, 1, 1605067997),
(81, 17314004, '$2y$10$iRnek2vJ2DdmBv/bhmYoV.0xuUgUZ6TYn/tROrFkSd/EW4W2x6Hhm', 'KUKUH SAKSONO', 'KUKUHSAKSONO@gmail.com', 'Male', 'TERM - A3', '2017', 'Kebumen', '1999-01-01', 'Kebumen', '081234567890', 'default.jpg', 3, 1, 1605068071),
(82, 17311004, '$2y$10$9BttT5mdIv75KpFCX.9weeYBpx8.Lht7cRpBrnsYk0Hucl4X4M/w6', 'MAFTUH IKHSAN', 'MAFTUHIKHSAN@gmail.com', 'Male', 'AK - A3', '2017', 'Kebumen', '1999-01-01', 'Kebumen', '081234567890', 'default.jpg', 3, 1, 1605068108),
(83, 17323004, '$2y$10$1flqTXsO1/cHr2etXM6TVeQ3lavJfVEY33t3AIOCV/GRqB6X8xxNS', 'PUJI NURCHAENI', 'PUJINURCHAENI@gmail.com', 'Female', 'AKP - A3', '2017', 'Kebumen', '1999-01-01', 'Kebumen', '081234567890', 'default.jpg', 3, 1, 1605068205),
(84, 17311020, '$2y$10$x8wDl8cpJYPYKUbl32usVu7ULlkO0LyZHhfK64x3tUrbueErG2z7u', 'OTIM FATIMAH', 'OTIMFATIMAH@gmail.com', 'Female', 'AK - A3', '2017', 'Kebumen', '1999-01-01', 'Kebumen', '081234567890', 'default.jpg', 3, 1, 1605068233),
(85, 17311017, '$2y$10$/6x.JqHOGyVfHUdcY0QddOsQ.QJfMWfpkCVJEq7fPmHtlCYdh8.Ji', 'SITI NUR ROKHMAH', 'SITINURROKHMAH@gmail.com', 'Female', 'AK - A3', '2017', 'Kebumen', '1999-01-01', 'Kebumen', '081234567890', 'default.jpg', 3, 1, 1605068269),
(86, 17311011, '$2y$10$MhSXG52v9QHW32RjIuxcW.w5K80JEtLKeUnHeuiC1eGpRSSPdSlp.', 'YOLANDA RIZQI DWI ANDANI', 'YOLANDARIZQIDWIANDANI@gmail.com', 'Male', 'AKE - A3', '2017', 'Kebumen', '1999-01-01', 'Kebumen', '081234567890', 'default.jpg', 3, 1, 1605068311),
(87, 17311005, '$2y$10$PifLKsEuofB7Al/4ej4IdeDU2/atj/5Nrp1LEWgO0dZcY.dTjCHTK', 'MEISY WULANDARI', 'MEISYWULANDARI@gmail.com', 'Male', 'AK - A3', '2017', 'Kebumen', '1999-01-01', 'Kebumen', '081234567890', 'default.jpg', 3, 1, 1605068349),
(88, 17312009, '$2y$10$.K0qqHhq4hCK8Dd5kLi.2OeqJ73zRpNylldGt/UDDQSqm3KUkiHGC', 'WINDI FITRIANI', 'WINDIFITRIANI@gmail.com', 'Female', 'AKP - A3', '2017', 'Kebumen', '1999-01-01', 'Kebumen', '081234567890', 'default.jpg', 3, 1, 1605068385),
(89, 17311013, '$2y$10$Va/V.Y8vUPymB8jKNM6W7uGP.cfLcgAdNRC20suoPmyHEA9O6JU6y', 'FIRA AGUSTINI', 'FIRAAGUSTINI@gmail.com', 'Female', 'AK - K31', '2017', 'Kebumen', '1999-01-01', 'Kebumen', '081234567890', 'default.jpg', 3, 1, 1605068433),
(90, 17311009, '$2y$10$YKtWMlU3MPWcPzJRVgE.LeeE1Vm.N75GCV62MRlYcsausTfkdcGC6', 'LAILATURROHMAH', 'LAILATURROHMAH@gmail.com', 'Female', 'AK - A3', '2017', 'Kebumen', '1999-01-01', 'Kebumen', '081234567890', 'default.jpg', 3, 1, 1605068474),
(91, 17311024, '$2y$10$OSVdBgtb5JiGcY5p9sMXg.19AV9UKK/S8u/NvBLb8/.mQvzIYFCEq', 'MEI REFIYANI', 'MEIREFIYANI@gmail.com', 'Female', 'AK - K31', '2017', 'Kebumen', '1999-01-01', 'Kebumen', '081234567890', 'default.jpg', 3, 1, 1605068559),
(92, 17311023, '$2y$10$ESpoJxF5MRQ2U32O3SA7Wu/BHaYWQvm3DZRp.nzIaFJyjXaDseZTm', 'CONIE MEITA SARASWATI', 'CONIEMEITASARASWATI@gmail.com', 'Male', 'TEK - A3', '2020', 'Kebumen', '1999-01-01', 'Kebumen', '081234567890', 'default.jpg', 3, 1, 1605068594),
(93, 18311001, '$2y$10$mibsJLeFAiB.Mzm7qHn3uOrtDs8H.SSOHyBg8g8uVYjgsKpDMIvpu', 'AZHON BUDHY LEKSANTI', 'AZHONBUDHYLEKSANTI@gmail.com', 'Male', 'AK - K31', '2018', 'Kebumen', '1999-01-01', 'Kebumen', '081234567890', 'default.jpg', 3, 1, 1605068649),
(94, 17312008, '$2y$10$CQyoUiXNz.z1sMBdobDQDekO..Oi3YRiOzmadsV7drZ890.ei8EwS', 'YUNIARSIH', 'YUNIARSIH@gmail.com', 'Female', 'AKP - A3', '2017', 'Kebumen', '1999-01-01', 'Kebumen', '081234567890', 'default.jpg', 3, 1, 1605068678),
(96, 123456, '$2y$10$267UzdpPX53lPWWAsdrDCuAfHUn0l9ioUaqJ8Dx2AxAFIWyyem8im', 'USER', 'user@gmail.com', 'Male', 'TEK - K31', '2017', 'Kebumen', '2020-10-11', 'Kebumen', '089123456789', 'default.jpg', 3, 1, 1606703752);

-- --------------------------------------------------------

--
-- Table structure for table `study`
--

CREATE TABLE `study` (
  `id` int(11) NOT NULL,
  `study` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `study`
--

INSERT INTO `study` (`id`, `study`) VALUES
(1, 'Teknik Elektro'),
(2, 'Teknik Mesin Otomotif'),
(3, 'Akuntansi'),
(6, 'Komputerisasi Akuntansi Bisnis'),
(7, 'Sistem Informasi');

-- --------------------------------------------------------

--
-- Table structure for table `submission`
--

CREATE TABLE `submission` (
  `id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `fullname` varchar(128) NOT NULL,
  `class` varchar(128) NOT NULL,
  `year` varchar(128) NOT NULL,
  `title` varchar(256) NOT NULL,
  `study` varchar(128) NOT NULL,
  `lecturers` varchar(128) NOT NULL,
  `lect2` varchar(128) NOT NULL,
  `lect3` varchar(128) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `file` varchar(128) NOT NULL,
  `note` varchar(256) NOT NULL,
  `approval` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `submission`
--

INSERT INTO `submission` (`id`, `username`, `fullname`, `class`, `year`, `title`, `study`, `lecturers`, `lect2`, `lect3`, `phone`, `file`, `note`, `approval`, `date_created`) VALUES
(25, '17313036', 'MAARIFATUN AMANAH', 'TEK - A3', '2020', 'RANCANG BANGUN ALAT PENDETEKSI GEMPA BUMI UNTUK RUMAH DENGAN MENGGUNAKAN ARDUINO UNO', 'Teknik Elektro', 'Asni Tafrikhatin, M.Pd', 'Asni Tafrikhatin, M.Pd', 'Fitriani Dwi Ratna Sari, S.T., M.M', '081234567890', 'FILE1.pdf', '', 1, 1605073448),
(26, '17313016', 'SUSI PUSPITA TARUNA', 'TEK - A3', '2020', 'RANCANG BANGUN PENGERING GABAH MENGGUNAKAN SENSOR KELEMBABAN BERBASIS MICRO KONTROLER ATMEGA 328', 'Teknik Elektro', 'Asni Tafrikhatin, M.Pd', 'Asni Tafrikhatin, M.Pd', 'Fitriani Dwi Ratna Sari, S.T., M.M', '081234567890', 'FILE2.pdf', '', 1, 1605073482),
(27, '17313032', 'NUR FAIZAH BUDI MULYANI', 'TEK - A3', '2020', 'TEMPAT SAMPAH OTOMATIS BERIRAMA BERBASIS ATMEGA 328 SEBAGAI PEMBELAJARAN ANAK USIA DINI ( GARBAGE EDUCATION )', 'Teknik Elektro', 'Asni Tafrikhatin, M.Pd', 'Asni Tafrikhatin, M.Pd', 'Fitriani Dwi Ratna Sari, S.T., M.M', '081234567890', 'FILE3.pdf', '', 1, 1605073807),
(28, '17313047', 'CATUR DHARMA PUTRA', 'TEK - K31', '2020', 'ALAT ETCHING PCB BERBASIS ATMEGA 328', 'Teknik Elektro', 'Asni Tafrikhatin, M.Pd', 'Asni Tafrikhatin, M.Pd', 'Fitriani Dwi Ratna Sari, S.T., M.M', '081234567890', 'FILE4.pdf', '', 1, 1605073827),
(29, '17313037', 'ASLI HUSAENI', 'TEK - A3', '2020', 'RANCANG BANGUN PENGAMAN PINTU MASTER CONTROL ROOM MENGGUNAKAN E-KTP DI RATIH TV KEBUMEN', 'Teknik Elektro', 'Asni Tafrikhatin, M.Pd', 'Asni Tafrikhatin, M.Pd', 'Fitriani Dwi Ratna Sari, S.T., M.M', '081234567890', 'FILE5.pdf', '', 1, 1605073848),
(30, '17313028', 'FIKRIANTO', 'TEK - A3', '2020', 'RANCANG BANGUN ALAT PENGUKUR TINGGI BADAN BAYI MENGGUNAKAN SENSOR ULTRASONIK BERBASIS ATMEGA 328', 'Teknik Elektro', 'Asni Tafrikhatin, M.Pd', 'Asni Tafrikhatin, M.Pd', 'Fitriani Dwi Ratna Sari, S.T., M.M', '081234567890', 'FILE6.pdf', '', 1, 1605073869),
(31, '17313034', 'AGUS SALIM', 'TEK - K31', '2020', 'RANCANG BANGUN GIMBAL KONTROL WIRELES BERBASIS ATMEGA 328 UNTUK WEB KAMERA', 'Teknik Elektro', 'Asni Tafrikhatin, M.Pd', 'Asni Tafrikhatin, M.Pd', 'Fitriani Dwi Ratna Sari, S.T., M.M', '081234567890', 'FILE7.pdf', '', 1, 1605073892),
(32, '17313001', 'DANANG KITANGGI', 'TEK - X31', '2020', 'PERANCANGAN SISTEM INFORMASI ABSENSI KARYAWAN DENGAN SCAN KODE QR BERBASIS WEB DI SANG BARU SWALAYAN', 'Teknik Elektro', 'Asni Tafrikhatin, M.Pd', 'Asni Tafrikhatin, M.Pd', 'Yusuf Mufti, M.Sc', '081234567890', 'FILE8.pdf', '', 1, 1605073946),
(33, '17313021', 'ANGGA ZAFRANANDA', 'TEK - K31', '2020', 'RANCANG BANGUN PENGINGAT PEMBERSIH LIMBAH OTOMATIS BERBASIS ARDUINO', 'Teknik Elektro', 'Asni Tafrikhatin, M.Pd', 'Asni Tafrikhatin, M.Pd', 'Fitriani Dwi Ratna Sari, S.T., M.M', '081234567890', 'FILE9.pdf', '', 1, 1605073973),
(34, '17313027', 'MUHAMMAD NGABDUR ROJAK', 'TEK - A3', '2020', 'PENGUKUR SUHU BADAN OTOMATIS UNTUK MASUK RUANGAN BERBASIS ANDROID', 'Teknik Elektro', 'Asni Tafrikhatin, M.Pd', 'Asni Tafrikhatin, M.Pd', 'Fitriani Dwi Ratna Sari, S.T., M.M', '081234567890', 'FILE10.pdf', '', 1, 1605073996),
(35, '17313049', 'DAVID GUFRON ALKARIM', 'TEK - K31', '2020', 'IMPLEMENTASI SISTEM PERSINYALAN ELEKTRIK SIL-02 GUNA MEMPERMUDAH PERJALANAN KERETA API', 'Teknik Elektro', 'Asni Tafrikhatin, M.Pd', 'Asni Tafrikhatin, M.Pd', 'Fitriani Dwi Ratna Sari, S.T., M.M', '081234567890', 'FILE11.pdf', '', 1, 1605074016),
(36, '17315019', 'AKHMAD NURWAKHID', 'TOM - A3', '2020', 'MEDIA PEMBELAJARAN SISTEM AC MOBIL BERBASIS ANDROID', 'Teknik Mesin Otomotif', 'Bahtiar Wilantara, M.Pd', 'Bahtiar Wilantara, M.Pd', 'Hamid Nasrullah, S.Pd., M.Pd', '081234567890', 'FILE12.pdf', '', 1, 1605074050),
(37, '17315014', 'ADI NURUL HIDAYAT', 'TOM - K31', '2020', 'MODIFIKASI TRANSMISI SEPEDA MOTOR MENERAPKAN QUICK SHIFFTER BUTTON', 'Teknik Mesin Otomotif', 'Bahtiar Wilantara, M.Pd', 'Bahtiar Wilantara, M.Pd', 'Hamid Nasrullah, S.Pd., M.Pd', '081234567890', 'FILE13.pdf', '', 1, 1605075010),
(38, '17315009', 'DEDEN ADI P.M.', 'TOM - K31', '2020', 'RANCANG BANGUN ALAT BODY REPAIR PADA MOBIL', 'Teknik Mesin Otomotif', 'Bahtiar Wilantara, M.Pd', 'Bahtiar Wilantara, M.Pd', 'Hamid Nasrullah, S.Pd., M.Pd', '081234567890', 'FILE14.pdf', '', 1, 1605075938),
(39, '17315017', 'AKHMAD ROJALI', 'TOM - K31', '2020', 'RANCANG BANGUN STAND OFVER WOUL ENGINE MITSUBISHI COLT-T TYPE 4D41', 'Teknik Mesin Otomotif', 'Bahtiar Wilantara, M.Pd', 'Bahtiar Wilantara, M.Pd', 'Hamid Nasrullah, S.Pd., M.Pd', '081234567890', 'FILE15.pdf', '', 1, 1605075964),
(40, '17315006', 'ARYA ARGO SASONGKO', 'TOM - A3', '2020', 'RANCANG BANUN SILKUS KERJA AIR CONDITIONER PADA MOBIL', 'Teknik Mesin Otomotif', 'Hamid Nasrullah, S.Pd., M.Pd', 'Hamid Nasrullah, S.Pd., M.Pd', 'Bahtiar Wilantara, M.Pd', '081234567890', 'FILE16.pdf', '', 1, 1605075995),
(41, '17315013', 'SLAMET RIDHO ILLAHI', 'TOM - A3', '2020', 'RANCANG BANGUN SISTEM KELISTRIKAN AIR CONDITIONER PADA MOBIL', 'Teknik Mesin Otomotif', 'Hamid Nasrullah, S.Pd., M.Pd', 'Hamid Nasrullah, S.Pd., M.Pd', 'Bahtiar Wilantara, M.Pd', '081234567890', 'FILE17.pdf', '', 1, 1605076025),
(42, '17315020', 'YANUAR PUGUH KURNIAWAN', 'TOM - A3', '2020', 'RANCANG BANGUN SISTEM AC DOUBLE BLOWER', 'Teknik Mesin Otomotif', 'Hamid Nasrullah, S.Pd., M.Pd', 'Hamid Nasrullah, S.Pd., M.Pd', 'Bahtiar Wilantara, M.Pd', '081234567890', 'FILE18.pdf', '', 1, 1605076047),
(43, '17315008', 'BARLIN PRASTAJI', 'TOM - A3', '2020', 'RANCANG BANGUN ALAT UKUR DIGITAL PADA SISTEM AC', 'Teknik Mesin Otomotif', 'Hamid Nasrullah, S.Pd., M.Pd', 'Hamid Nasrullah, S.Pd., M.Pd', 'Bahtiar Wilantara, M.Pd', '081234567890', 'FILE19.pdf', '', 1, 1605076123),
(44, '17315018', 'TOHA HIDAYAT', 'TOM - K31', '2020', 'MODIFIKASI ALAT PENGECATAN DOUBLE NOZZLE', 'Teknik Mesin Otomotif', 'Hamid Nasrullah, S.Pd., M.Pd', 'Hamid Nasrullah, S.Pd., M.Pd', 'Bahtiar Wilantara, M.Pd', '081234567890', 'FILE20.pdf', '', 1, 1605076146),
(45, '17315007', 'SUTARNO', 'TOM - K31', '2020', 'MEDIA PEMBELAJARAN SISTEM PENGAPIAN SEMI TRANSISTOR', 'Teknik Mesin Otomotif', 'Hamid Nasrullah, S.Pd., M.Pd', 'Hamid Nasrullah, S.Pd., M.Pd', 'Bahtiar Wilantara, M.Pd', '081234567890', 'FILE21.pdf', '', 1, 1605076181),
(46, '18313001', 'WULIDA AHADI PAMUNGKAS', 'TEK - X31', '2020', 'PERANCANGAN SISTEM MANAJEMEN PELUNASAN ADMINISTRASI BERBASIS WEB DI MTS WI KARANGDUWUR PETANAHAN', 'Teknik Elektro', 'Fitriani Dwi Ratna Sari, S.T., M.M', 'Fitriani Dwi Ratna Sari, S.T., M.M', 'Yusuf Mufti, M.Sc', '081234567890', 'FILE22.pdf', '', 1, 1605076208),
(47, '18313006', 'DIMAS IQBAL CHOIRON', 'TEK - X31', '2020', 'PERANCANGAN SISTEM INFORMASI MANAJEMEN BARANG BERBASIS WEB DENGAN MENGGUNAKAN CODEIGNITER 3 DI PD. LTJ. GROUP', 'Teknik Elektro', 'Fitriani Dwi Ratna Sari, S.T., M.M', 'Fitriani Dwi Ratna Sari, S.T., M.M', 'Yusuf Mufti, M.Sc', '081234567890', 'FILE23.pdf', '', 1, 1605076264),
(48, '18313002', 'DWI RISKYANTO', 'TEK - X31', '2020', 'PERANCANGAN SISTEM INFORMASI BADAN PERMUSYAWARATAN DESA (BPD) BERBASIS WEB DI DESA BENER KULON', 'Teknik Elektro', 'Fitriani Dwi Ratna Sari, S.T., M.M', 'Fitriani Dwi Ratna Sari, S.T., M.M', 'Yusuf Mufti, M.Sc', '081234567890', 'FILE24.pdf', '', 1, 1605076293),
(49, '17313042', 'RYAN IFNU AZIZ', 'TEK - K31', '2020', 'PERANCANGAN SISTEM INFORMASI PENGAWASAN BERBASIS WEB DI BADAN USAHA MILIK DESA (BUMDES) KABUPATEN KEBUMEN', 'Teknik Elektro', 'Fitriani Dwi Ratna Sari, S.T., M.M', 'Fitriani Dwi Ratna Sari, S.T., M.M', 'Yusuf Mufti, M.Sc', '081234567890', 'FILE25.pdf', '', 1, 1605076315),
(50, '17313015', 'TOMI SISWORO', 'TEK - K31', '2020', 'PERANCANGAN SISTEM NO ANTRIAN PENDAFTARAN BERBASIS WEB DI RUMAH SAKIT', 'Teknik Elektro', 'Yusuf Mufti, M.Sc', 'Yusuf Mufti, M.Sc', 'Fitriani Dwi Ratna Sari, S.T., M.M', '081234567890', 'FILE26.pdf', '', 1, 1605076410),
(51, '17313040', 'RISWONDO MAHARDIKO', 'TEK - K31', '2020', 'RANCANG BANGUN SIMULATOR PERSINYALAN KERETA API BERBASIS PLC STUDI DOUBLE TRACK STASIUN KEBUMEN', 'Teknik Elektro', 'Yusuf Mufti, M.Sc', 'Yusuf Mufti, M.Sc', 'Asni Tafrikhatin, M.Pd', '081234567890', 'FILE27.pdf', '', 1, 1605076437),
(52, '17313035', 'AJI PANGESTU', 'TEK - K31', '2020', 'SISTEM PEMBAYARAN IKLAN LAYANAN MASYARAKAT BILL BOARD BALIHO BERBASIS WEB SATLANTAS POLRE KEBUMEN', 'Teknik Elektro', 'Yusuf Mufti, M.Sc', 'Yusuf Mufti, M.Sc', 'Fitriani Dwi Ratna Sari, S.T., M.M', '081234567890', 'FILE28.pdf', '', 1, 1605076459),
(53, '17313025', 'ZUFAR RIZAL', 'TEK - K31', '2020', 'PERANCANGAN SISTEM INFORMASI PENGAJUAN JUDUL TUGAS AKHIR DAN SKRIPSI BERBASIS WEB DI POLITEKNIK DHARMA PATRIA KEBUMEN', 'Teknik Elektro', 'Yusuf Mufti, M.Sc', 'Yusuf Mufti, M.Sc', 'Fitriani Dwi Ratna Sari, S.T., M.M', '081234567890', 'FILE29.pdf', '', 1, 1605076511),
(54, '17313009', 'ALDI ZUBAIDI', 'TEK - K31', '2020', 'PERANCANGAN SISTEM INFORMASI PENJUALAN BOX DAN TEMPAT SESERAHAN DI FPRODUCTION SRUWENG BERBASIS WEB DENGAN FRAMEWORK CODEIGNITER', 'Teknik Elektro', 'Yusuf Mufti, M.Sc', 'Yusuf Mufti, M.Sc', 'Fitriani Dwi Ratna Sari, S.T., M.M', '081234567890', 'FILE30.pdf', '', 1, 1605076531),
(55, '17313017', 'SITI NURCHAYATI', 'TEK - A3', '2020', 'PERANCANGAN SISTEM MANAJEMEN KEUANGAN BERBASIS WEB DI BIMBA AIUEO SELOKERTO', 'Teknik Elektro', 'Yusuf Mufti, M.Sc', 'Yusuf Mufti, M.Sc', 'Fitriani Dwi Ratna Sari, S.T., M.M', '081234567890', 'FILE31.pdf', '', 1, 1605076551),
(56, '17313038', 'DWI WAHYU SETIAJI', 'TEK - K31', '2020', 'PERANCANGAN SISTEM INFORMASI PEMADAM KEBAKARAN KABUPATEN KEBUMEN', 'Teknik Elektro', 'Yusuf Mufti, M.Sc', 'Yusuf Mufti, M.Sc', 'Fitriani Dwi Ratna Sari, S.T., M.M', '081234567890', 'FILE32.pdf', '', 1, 1605076650),
(57, '17313019', 'DIAN ANDIKA', 'TEK - K31', '2020', 'PERANCANGAN SISTEM JUAL BELI ONLINE BERBASIS WEB DI TOKO MEKAR MULIA KEBUMEN', 'Teknik Elektro', 'Yusuf Mufti, M.Sc', 'Yusuf Mufti, M.Sc', 'Fitriani Dwi Ratna Sari, S.T., M.M', '081234567890', 'FILE33.pdf', '', 1, 1605076669),
(58, '18313003', 'SAFEI ARIF WIRANTO', 'TEK - X31', '2020', 'PERANCANGAN SISTEM INFORMASI PENDAFTARAN PESERTA PELATIHAN KOMPUTER BERBASIS WEB', 'Teknik Elektro', 'Yusuf Mufti, M.Sc', 'Yusuf Mufti, M.Sc', 'Fitriani Dwi Ratna Sari, S.T., M.M', '081234567890', 'FILE34.pdf', '', 1, 1605076700),
(59, '17313026', 'ELING TITI RAHAYU', 'TEK - K31', '2020', 'PERANCANGAN SISTEM INFORMASI PENDAFTARAN TANAH SISTEMATIS LENGKAP BERBASIS WEB DI BPN KEBUMEN', 'Teknik Elektro', 'Yusuf Mufti, M.Sc', 'Yusuf Mufti, M.Sc', 'Fitriani Dwi Ratna Sari, S.T., M.M', '081234567890', 'FILE35.pdf', '', 1, 1605076719),
(60, '17314010', 'MUGI DWI HANDOYO', 'TERM - A3', '2020', 'PENGARUH KUALIFIKASI CODER TERHADAP KEAKURATAN CODE DIAGNOSIS PENYAKIT PADA PASIEN RAWAT JALAN DI POLI UMUM PUSKESMAS SE KABUPATEN KEBUMEN', 'Teknik Elektro', 'H. Triyo Rachmadi, S.Kep., M.H.Kes', 'H. Triyo Rachmadi, S.Kep., M.H.Kes', 'Asni Tafrikhatin, M.Pd', '081234567890', 'FILE36.pdf', '', 1, 1605076945),
(61, '17314008', 'INDAH PURSIWIYANTI S', 'TERM - K31', '2020', 'ANALISIS KELENGKAPAN PENGISIAN CATATAN PERKEMBANGAN PASIEN TERPADU, BERSALIN DENGAN MENGGUNAKAN JAMINAN PERSALINAN TERHADAP KULAITAS KODEFIKASI SINGLE SPONTANEOUS DELIVERY DI RSUD DR. SOEDIRMAN KEBUMEN', 'Teknik Elektro', 'H. Triyo Rachmadi, S.Kep., M.H.Kes', 'H. Triyo Rachmadi, S.Kep., M.H.Kes', 'Asni Tafrikhatin, M.Pd', '081234567890', 'FILE37.pdf', '', 1, 1605077233),
(62, '17314007', 'DWI SULISTINA ISWANTI', 'TERM - K31', '2020', 'ANALISIS KESESUAIAN PENGISIAN FORMULIR GHENERAL CONSENT PADA PASIEN BARU RAWAT JALAN TERHADAP STANDAR PENILAIAN AKREDITASI SNARS EDISI 1 PADA ELEMENT HPK 5 DI RSUD DR. SOEDIRMAN KEBUMEN', 'Akuntansi', 'Nurhayatun, S.ST., M.M', 'Nurhayatun, S.ST., M.M', 'Eko Wardoyo, S.Sos., M.M', '081234567890', 'FILE38.pdf', '', 1, 1605077257),
(63, '18314003', 'DEWANTI AMIRDA AULIYA', 'TERM - XK31', '2020', 'TINJAUAN TERHADAP FAKTOR FAKTOR YANG MEMPENGARUHI KETIDAKLENGKAPAN DAN KETERLAMBATAN PENGAMBILAN BERKAS REKAM MEDIS PASIEN  RAWAT JALAN DI PUSKESMAS BULUS PESANTREN II DENGAN MEMPERTIMBANGKAN ASPEK REKAM MEDIS', 'Akuntansi', 'Nurhayatun, S.ST., M.M', 'Nurhayatun, S.ST., M.M', 'Eko Wardoyo, S.Sos., M.M', '081234567890', 'FILE39.pdf', '', 1, 1605077283),
(64, '17314003', 'PUJI LESTARI', 'TERM - A3', '2020', 'PENGARUH KELENGKAPAN FORMULIR PASIEN IBU HAMIL TERHADAP PENYIMPAN FAMILY FILDER DI UPTD UNIT PUSKEMAS BULUSPESANTREN 2', 'Akuntansi', 'Nurhayatun, S.ST., M.M', 'Nurhayatun, S.ST., M.M', 'Eko Wardoyo, S.Sos., M.M', '081234567890', 'FILE40.pdf', '', 1, 1605077310),
(65, '17314004', 'KUKUH SAKSONO', 'TERM - A3', '2020', 'ANALISIS FUNGSI DAN PERAN INFORMED CONCENT TERHADAP TINDAKAN MEDIS POLI GIGI', 'Akuntansi', 'Nurhayatun, S.ST., M.M', 'Nurhayatun, S.ST., M.M', 'Eko Wardoyo, S.Sos., M.M', '081234567890', 'FILE41.pdf', '', 1, 1605077334),
(66, '17311004', 'MAFTUH IKHSAN', 'AK - A3', '2020', 'PENGARUH BIAYA PROMOSI TERHADAP PENJUALAN DI DEALER YAMAHA SUMBER BARU MOTOR GOMBONG', 'Akuntansi', 'Eko Wardoyo, S.Sos., M.M', 'Eko Wardoyo, S.Sos., M.M', 'Suratno, S.E., M.M', '081234567890', 'FILE42.pdf', '', 1, 1605077360),
(67, '17323004', 'PUJI NURCHAENI', 'AKP - A3', '2020', 'ANALISIS PERHITUNGAN BIAYA TRANSPORT DAN ITENSIF SALES TERHADAP PENINGKATAN DEALER AHM GOMBONG', 'Akuntansi', 'Eko Wardoyo, S.Sos., M.M', 'Eko Wardoyo, S.Sos., M.M', 'Nurhayatun, S.ST., M.M', '081234567890', 'FILE43.pdf', '', 1, 1605077381),
(68, '17311020', 'OTIM FATIMAH', 'AK - A3', '2020', 'PENYUSUNAN ANGGARAN PENERIMAAN KAS DAN PIUTANG USAHA TERHADAP ANGGARAN PENJUALAN PADA PABRIK TEMPE PAK NUN AMBAL RESMI', 'Akuntansi', 'Suratno, S.E., M.M', 'Suratno, S.E., M.M', 'Wakhid Yuliyanto, S.E., M.M', '081234567890', 'FILE44.pdf', '', 1, 1605077403),
(69, '17311017', 'SITI NUR ROKHMAH', 'AK - A3', '2020', 'ANALISIS PERHITUNGAN ECONOMIC ORDER QUANTITY (EOQ) DALAM PENGENDALIAN PERSEDIAAN OBAT UNTUK MENGHINDARI OUT OF STOCK DI RSU PKU MUHAMMADIYAH KUTOWINANGUN', 'Akuntansi', 'Suratno, S.E., M.M', 'Suratno, S.E., M.M', 'Wakhid Yuliyanto, S.E., M.M', '081234567890', 'FILE45.pdf', '', 1, 1605077427),
(70, '17311011', 'YOLANDA RIZQI DWI ANDANI', 'AKE - A3', '2020', 'PENGARUH PENENTUAN HARGA POKOK PENJUALAN TERHADAP PROFITIABILITAS OADA KUD SLAMET WONOYOSO', 'Akuntansi', 'Suratno, S.E., M.M', 'Suratno, S.E., M.M', 'Wakhid Yuliyanto, S.E., M.M', '081234567890', 'FILE46.pdf', '', 1, 1605077445),
(71, '17311005', 'MEISY WULANDARI', 'AK - A3', '2020', 'ALNALISIS PENGAKUAN PENDAPATAN DAN BEBAN OPRASIONAL TERHADAP INSENTIF DAN KINERJA KARYAWAN RSUD SOEDIRMAN', 'Akuntansi', 'Suratno, S.E., M.M', 'Suratno, S.E., M.M', 'Wakhid Yuliyanto, S.E., M.M', '081234567890', 'FILE47.pdf', '', 1, 1605077493),
(72, '17312009', 'WINDI FITRIANI', 'AKP - A3', '2020', 'PENGARUH PENGELOLAAN ARSIP TERHADAP EFISIENSI KERJA DI SUB BAGIAN KEPEGAWAIAN PADA DISARPUS', 'Akuntansi', 'Uswatun Khasanah, S.Pd., M.M', 'Uswatun Khasanah, S.Pd., M.M', 'Wakhid Yuliyanto, S.E., M.M', '081234567890', 'FILE48.pdf', '', 1, 1605077511),
(73, '17311013', 'FIRA AGUSTINI', 'AK - K31', '2020', 'PENGARUH ANALISSI RASIO LIKUIDITAS DAN RASIO SOLVABILITAS TERHADAP KEPUTUSAN PEMBERIAN KREDIT DI KSPPS NUKU KEBUMEN', 'Akuntansi', 'Wakhid Yuliyanto, S.E., M.M', 'Wakhid Yuliyanto, S.E., M.M', 'Suratno, S.E., M.M', '081234567890', 'FILE49.pdf', '', 1, 1605077531),
(74, '17311009', 'LAILATURROHMAH', 'AK - A3', '2020', 'ANALISIS PENERAPAN ACTIVITY BASED COSTING DAN PENGARUHNYA TERHADAP LABA PERUSAHAAN PADA PT UMEGARU', 'Akuntansi', 'Wakhid Yuliyanto, S.E., M.M', 'Wakhid Yuliyanto, S.E., M.M', 'Suratno, S.E., M.M', '081234567890', 'FILE50.pdf', '', 1, 1605077553),
(75, '17311024', 'MEI REFIYANI', 'AK - K31', '2020', 'PENGARUH HPP TERHADAP LABA SV. AKRYA LESTARI DI PAKURAN', 'Akuntansi', 'Wakhid Yuliyanto, S.E., M.M', 'Wakhid Yuliyanto, S.E., M.M', 'Suratno, S.E., M.M', '081234567890', 'FILE51.pdf', '', 1, 1605077571),
(76, '17311023', 'CONIE MEITA SARASWATI', 'TEK - A3', '2020', 'ANALISIS PENYUSUNAN ANGGARAN DAN REALISIASINYA SEBAGAI ALAT PENILAIAN KINERJA PERUSAHAAN PADA PT LEN RAILWAY SISTEM BUMN KANTOR CABANG KEBUMEN', 'Akuntansi', 'Wakhid Yuliyanto, S.E., M.M', 'Wakhid Yuliyanto, S.E., M.M', 'Suratno, S.E., M.M', '081234567890', 'FILE52.pdf', '', 1, 1605077587),
(77, '18311001', 'AZHON BUDHY LEKSANTI', 'AK - K31', '2020', 'ANALISIS HARGA POKOK PRODUKSI BATIK TULIS GEMEKSEKTI SEBAGAI DASAR PENENTUAN HARGA JUAL DI OTKOO FONZA BATIK KEBUMEN', 'Akuntansi', 'Wakhid Yuliyanto, S.E., M.M', 'Wakhid Yuliyanto, S.E., M.M', 'Eko Wardoyo, S.Sos., M.M', '081234567890', 'FILE53.pdf', '', 1, 1605077605),
(78, '17312008', 'YUNIARSIH', 'AKP - A3', '2020', 'PENGARUH PARTISIPASI ANGGARAN DAN AKUNTASI PERTANGGUNGJAWABAN TERHADAP KINERJA MANAGERIAL DINAS KEARSIPAN DAN PERPUSTAKAAN KEBUMEN', 'Akuntansi', 'Wakhid Yuliyanto, S.E., M.M', 'Wakhid Yuliyanto, S.E., M.M', 'Suratno, S.E., M.M', '081234567890', 'FILE54.pdf', '', 1, 1605077639);

-- --------------------------------------------------------

--
-- Table structure for table `titles`
--

CREATE TABLE `titles` (
  `id` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `study` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `titles`
--

INSERT INTO `titles` (`id`, `title`, `study`) VALUES
(2, 'ALAT PEMBERI PAKAN IKAN VIA APLIKASI ANDROID BERBASIS ATMEGA 328', 'Teknik Elektro'),
(3, 'DETEKTOR DETAK JANTUNG DAN SUHU TUBUH PORTABEL BERBASIS ATMEGA 328', 'Teknik Elektro'),
(4, 'DRONE MENGGUNAKAN KAMERA BERBASIS ATMEGA 328', 'Teknik Elektro'),
(5, 'PENGENDALIAN TATA CAHAYA STUDIO BERBASIS ARDUINO UNO DI RATIH TV KEBUMEN', 'Teknik Elektro'),
(6, 'PERANCANG SISTEM INFORMASI PEMBUATAN SURAT PENGANTAR KEPENDUDUKAN BERBASIS …..', 'Teknik Elektro'),
(7, 'PERANCANGAN JEMURAN OTOMATIS MENGGUNAKAN SENSOR …. DAN SENSOR …. BERBASIS ARDUINO', 'Teknik Elektro'),
(8, 'PERANCANGAN PAPAN INFORMASI KEHADIRAN PEGAWAI BERBASIS RFID', 'Teknik Elektro'),
(9, 'PERANCANGAN PENGENDALI PINTU GUDANG LOGISTIK MENGGUNAKAN SENSOR ….. BERBASIS ARDUINO UNO R3', 'Teknik Elektro'),
(10, 'PERANCANGAN SISTEM INFORMASI ADMINISTRASI PENYALURAN GAS ELPIJI 3 KG BERBASIS …..', 'Teknik Elektro'),
(11, 'PERANCANGAN SISTEM INFORMASI ADMINISTRASI SERVIS MOBIL BERBASIS …..', 'Teknik Elektro'),
(12, 'PERANCANGAN SISTEM INFORMASI MANAJEMEN JADWAL MATA KULIAH BERBASIS WEB', 'Teknik Elektro'),
(13, 'PERANCANGAN SISTEM INFORMASI MANAJEMEN SURAT PERINTAH PERJALANAN DINAS BERBASIS', 'Teknik Elektro'),
(14, 'PERANCANGAN SISTEM INFORMASI MANAJEN GAJI BERBASIS …..', 'Teknik Elektro'),
(15, 'PERANCANGAN SISTEM INFORMASI OPTICAL DISTRIBUTION POINT MENGGUNAKAN BOT APLIKASI TELEGRAM', 'Teknik Elektro'),
(16, 'PERANCANGAN SISTEM INFORMASI PARIWISATA BERBASIS WEB', 'Teknik Elektro'),
(17, 'PERANCANGAN SISTEM INFORMASI PELAYANAN ADMINISTRASI KEPENDUDUKAN BERBASIS …..', 'Teknik Elektro'),
(18, 'PERANCANGAN SISTEM INFORMASI PEMESANAN IKLAN RADIO BERBASIS …..', 'Teknik Elektro'),
(19, 'PERANCANGAN SISTEM INFORMASI PENDAFTARAN PESERTA PELATIHAN KOMPUTER BERBASIS …...', 'Teknik Elektro'),
(20, 'PERANCANGAN SISTEM INFORMASI PENDATAAN INVENTARIS BERBASIS WEB', 'Teknik Elektro'),
(21, 'PERANCANGAN SISTEM INFORMASI PENGAJUAN JUDUL TUGAS AKHIR DAN SKRIPSI BERBASIS WEB', 'Teknik Elektro'),
(22, 'PERANCANGAN SISTEM INFORMASI PENGOLAHAN DATA PENJUALAN BERBASIS …..', 'Teknik Elektro'),
(23, 'PERANCANGAN SISTEM INFORMASI PENJUALAN PULSA REGULER DAN PAKET DATA INTERNET BERBASIS …..', 'Teknik Elektro'),
(24, 'PERANCANGAN SISTEM INFORMASI PENJUALAN SPARE PART BERBASIS …..', 'Teknik Elektro'),
(25, 'PERANCANGAN SISTEM INFORMASI PERSEDIAAN PUPUK BERBASIS …..', 'Teknik Elektro'),
(26, 'PERANCANGAN SISTEM INFORMASI TRANSAKSI HARIAN MENGGUNAKAN PEMOGRAMAN WEB', 'Teknik Elektro'),
(27, 'PERANCANGAN SISTEM INFORMASI TRANSAKSI PENJUALAN PERALATAN OLAHRAGA BERBASIS DELPHI', 'Teknik Elektro'),
(28, 'PERANCANGAN SISTEM INFORMASI WEBSITE ALUMNI DENGAN MENGGUNAKAN PHP MY SQL', 'Teknik Elektro'),
(29, 'PERANCANGAN SISTEM PENDATAAN INVENTARIS BERBASIS BORLAND DELPHI 7.0', 'Teknik Elektro'),
(30, 'PERANCANGAN SISTEM PERINGATAN DINI BANJIR MENGGUNAKAN SMS BERBASIS ARDUINO UNO', 'Teknik Elektro'),
(31, 'PROTOTYPE SMART TRAFFIC LIGHT CONTROL SYSTEM BASED ON ARDUINO NANO ATMEGA328', 'Teknik Elektro'),
(32, 'PROTOTYPING DIGITAL THERMOMETER BERBASIS ARDUINO UNO R3 DAN SENSOR DHT II SEBAGAI INDIKATOR SUHU DAN KELEMBABAN', 'Teknik Elektro'),
(33, 'PROTOTYPING LINE FOLLOWER PEMINDAH BARANG BERBASIS ARDUINO UNO R3', 'Teknik Elektro'),
(34, 'RANCANG BANGUN ALAT PENDETEKSI BUTA WARNA DENGAN OUTPUT SUARA MENGGUNAKAN METODE ISHIHARA BEBASIS ARDUINO', 'Teknik Elektro'),
(35, 'RANCANG BANGUN ALAT PENYIRAM TANAMAN OTOMATIS MENGGUNAKAN MOISTURE SENSOR BERBASIS ATMEGA 328', 'Teknik Elektro'),
(36, 'RANCANG BANGUN BUKA KUNCI PINTU MENGGUNAKAN KETUKAN DENGAN LCD MONITOR BERBASIS ATMEGA 328', 'Teknik Elektro'),
(37, 'RANCANG BANGUN BUKA TUTUP GORDEN OTOMATIS', 'Teknik Elektro'),
(38, 'RANCANG BANGUN LENGAN ROBOTIK PEMBUAT KOPI BERBASIS ARDUINO', 'Teknik Elektro'),
(39, 'RANCANG BANGUN LOCK AND UNLOCK PINTU LEMARI ARSIP MENGGUNAKAN KEYPAD BERBASIS ATMEGA 328', 'Teknik Elektro'),
(40, 'RANCANG BANGUN MEDIA INTERAKTIF PENGENALAN HURUF DAN ANGKA BERBASIS ARDUINO', 'Teknik Elektro'),
(41, 'RANCANG BANGUN MINI CNC 2D PRINTER DENGAN MIKROKONTROLER ARDUINO UNO R3 SEBAGAI MEDIA PEMBELAJARAN D', 'Teknik Elektro'),
(42, 'RANCANG BANGUN PARKIR PINTAR BERBASIS ATMEGA 328', 'Teknik Elektro'),
(43, 'RANCANG BANGUN PENDETEKSI KEBAKARAN MENGGUNAKAN SMS BERBASIS ARDUINO 328', 'Teknik Elektro'),
(44, 'RANCANG BANGUN PENGHITUNG SURAT SUARA OTOMATIS MENGGUNAKAN SENSOR INFRAMERAH BERBASIS ARDUINO UNO', 'Teknik Elektro'),
(45, 'RANCANG BANGUN PENGONTROL KETEBALAN BATU BATA MENGGUNAKAN SENSOR ULTRASONIK BERBASIS ARDUINO UNO R3', 'Teknik Elektro'),
(46, 'RANCANG BANGUN ROBOT PENYORTIR WARNA BERBASIS ATMEGA 328', 'Teknik Elektro'),
(47, 'RANCANG BANGUN SISTEM KEAMANAN GEDUNG BERBASIS ARDUINO', 'Teknik Elektro'),
(48, 'RANCANG BANGUN SISTEM KEAMANAN MENGGUNAKAN SMS BERBASIS ATMEGA 328', 'Teknik Elektro'),
(49, 'RANCANG BANGUN SISTEM KEAMANAN PINTU MENGGUNAKAN RFID BERBASIS ATMEGA 328 DI DINAS PERINDUSTRIAN DAN PERDAGANGAN KABUPATEN KEBUMEN', 'Teknik Elektro'),
(50, 'RANCANG BANGUN SMART HOME UNTUK RUMAH SEDERHANA APLIKASI ANDROID BERBASIS ARDUINO', 'Teknik Elektro'),
(51, 'RANCANG BANGUN TRAFFIC FILTERING DAN LOAD BALANCING MENGGUNAKAN MIKROTIK RB750 DI TELKOM KEBUMEN', 'Teknik Elektro'),
(52, 'RANCANG BANGUN TRAINER KONVEYOR PEMILAH BARANG NON LOGAM BERBASIS ARDUINO UNO', 'Teknik Elektro'),
(53, 'REMOTE DAN MONITOR DRONE BERBASIS ATMEGA 328', 'Teknik Elektro'),
(54, 'ANALISIS KEGIATAN PENGELOLAAN REKAM MEDIS PASIEN IBU BERSALIN DENGAN PROGRAM BPJS PBI (PENERIMA BANTUAN IURAN) TERHADAP PENGELOLAAN PEMBIAYAAN KESEHATAN', 'Teknik Elektro'),
(55, 'ANALISIS KELENGKAPAN FORMULIR PEMERIKSAAN LABORATORIUM DAHAK DAN KUALITAS KODIFIKASI PENYAKIT TUBERCULOSIS OF LUNG, CONFIRMED BY SPUTUM MICROSCOPY WITH OR WITHOUT CULTURE', 'Teknik Elektro'),
(56, 'ANALISIS KELENGKAPAN PENULISAN FORMULIR KARTU PENGOBATAN PASIEN TB (TB.01) DAN STANDAR ETIK KODIFIKASI PENYAKIT HISTOLOGICALLY NEGATIVE (A16)', 'Teknik Elektro'),
(57, 'ANALISIS PERHITUNGAN BOR, LOS, TOI, DAN BTO TERHADAP PEMANFAATAN TEMPAT TIDUR', 'Teknik Elektro'),
(58, 'METODE ACTIVITY BASED COSTING PADA PENENTUAN UNIT COST EKSISI HERNIA', 'Teknik Elektro'),
(59, 'PENGARUH KELENGKAPAN PENULISAN ANAMNESA PASIEN TERHADAP KETEPATAN KODE DIAGNOSA SESUAI ICD-10', 'Teknik Elektro'),
(60, 'PENGARUH KETEPATAN PEMBERIAN KODE DIAGNOSA PADA KASUS PENYAKIT DALAM TERHADAP VERIFIKASI BADAN PENYELENGGARA JAMINAN SOSIAL (BPJS)', 'Teknik Elektro'),
(61, 'PENGARUH KUALITAS KODIFIKASI PENYAKIT CHRONIC SUPERFICIAL GASTRITIS (K29.3) TERHADAP KELENGKAPAN PENGISIAN LAPORAN PEMAKAIAN DAN LEMBAR PERMINTAAN OBAT (LPLPO)', 'Teknik Elektro'),
(62, 'PENGARUH KUALITAS SISTEM PENYIMPANAN ALPHABETIC TERHADAP KUALITAS KODIFIKASI RETAINED DENTAL ROOT (K08.3)', 'Teknik Elektro'),
(63, 'ANALISIS ALOKASI DANA PENERIMAAN NEGARA BUKAN PAJAK (PNBP) TERHADAP BIAYA OPERASIONAL PEMBUATAN SERTIFIKAT TANAH', 'Akuntansi'),
(64, 'ANALISIS DIMENSI KUALITAS PELAYANAN TERHADAP KEPUASAN PELANGGAN', 'Akuntansi'),
(65, 'ANALISIS EFEKTIVITAS ANGGARAN PENDAPATAN DESA TERHADAP REALISASI PENERIMAAN PENDAPATAN DESA', 'Akuntansi'),
(66, 'ANALISIS GROWTH AND COMMON SIZE PADA PENDAPATAN', 'Akuntansi'),
(67, 'ANALISIS KINERJA KEUANGAN SEBAGAI DASAR PENILAIAN KESEHATAN KOPERASI TERHADAP LAPORAN KEUANGAN', 'Akuntansi'),
(68, 'ANALISIS KONTRIBUSI PAJAK HOTEL DAN REKLAME TERHADAP PENINGKATAN PAD', 'Akuntansi'),
(69, 'ANALISIS PELAYANAN PUBLIC TERHADAP KEPUASAN MASYARAKAT BERDASARKAN INDEKS KEPUASAN MASYARAKAT', 'Akuntansi'),
(70, 'ANALISIS PENERAPA PAJAK PROGRESIF TERHADAP PAJAK KENDARAAN BERMOTOR', 'Akuntansi'),
(71, 'ANALISIS PENERIMAAN DAN PENGELUARAN KAS TERHADAP ANGGARAN DANA BELANJA', 'Akuntansi'),
(72, 'ANALISIS PENGELOLAAN PIUTANG DENGAN MENGGUNAKAN RECEIVABLE TURNOVER DAN AVERAGE COLLECTION', 'Akuntansi'),
(73, 'ANALISIS PERHITUNGAN DAN PEMOTONGAN PAJAK PENGHASILAN PASAL 23 ATAS JASA PEMELIHARAAN GEDUNG P', 'Akuntansi'),
(74, 'ANALISIS RASIO CAPITAL ADEQUACY RATIO (CAR) DAN BIAYA OPERASIONAL PENDAPATAN OPERASIONAL (BOPO) TERHADAP RETURN ON ASSET (ROA)', 'Akuntansi'),
(75, 'ANALISIS RASIO DAN ECONOMICVALUE ADDED (EVA) UNTUK MENGUKUR KINERJA KEUANGAN', 'Akuntansi'),
(76, 'ANALISIS RASIO KECUKUPAN MODAL DAN RESIKO KREDIT TERHADAP PENYALURAN KREDIT', 'Akuntansi'),
(77, 'ANALISIS RASIO KEUANGAN TERHADAP KINERJA KEUANGAN', 'Akuntansi'),
(78, 'ANALISIS RASIO LAPORAN KEUANGAN TERHADAP KINERJA KEUANGAN', 'Akuntansi'),
(79, 'ANALISIS STRUKTUR MODAL TERHADAP PENDAPATAN', 'Akuntansi'),
(80, 'ANALISIS TINGKAT PERPUTARAN MODAL KERJA, PERPUTARAN KAS, PERPUTARAN PIUTANG DAN PERPUTARAN PERSEDIAAN TERHADAP RETURN ON INVESTMENT', 'Akuntansi'),
(81, 'ANALISIS TINGKAT PERPUTARAN PIUTANG BERDASARKAN KOLEKTIBILITAS KREDIT', 'Akuntansi'),
(82, 'DAMPAK HARI BESAR KEAGAMAAN TERHADAP KENAIKAN HARGA KEBUTUHAN POKOK', 'Akuntansi'),
(83, 'EFEKTIVITAS PENGENDALIAN PERSEDIAAN TERHADAP PERSEDIAAN BARANG', 'Akuntansi'),
(84, 'PENGARUH DISIPLIN KERJA TERHADAP PRESTASI PEGAWAI', 'Akuntansi'),
(85, 'PENGARUH GAYA KEPEMIMPINAN TERHADAP KINERJA KARYAWAN', 'Akuntansi'),
(86, 'PENGARUH KINERJA PEGAWAI TERHADAP KEPUASAN PUBLIK', 'Akuntansi'),
(87, 'PENGARUH KUALITAS PELAYANAN TERHADAP MINAT PENGUNJUNG', 'Akuntansi'),
(88, 'PENGARUH MOTIVASI TERHADAP KEDISIPLINAN KERJA PEGAWAI N', 'Akuntansi'),
(89, 'PENGARUH NILAI BUKU AKTIVA TETAP TERHADAP TOTAL AKTIVA', 'Akuntansi'),
(90, 'PENGARUH PEATIHAN KETERAMPILAN TERHADAP KEMAMPUAN BERWIRAUSAHA TENAGA KERJA INDONESIA (TKI) PURNA', 'Akuntansi'),
(91, 'PENGARUH PELATIHAN PUSAT LAYANAN USAHA TERPADU TERHADAP PRODUKTIVITAS PELAKU KERAJINAN', 'Akuntansi'),
(92, 'PENGARUH PENERAPAN APLIKASI SIMPEG (SISTEM INFORMASI MANAJEMEN KEPEGAWAIAN) TERHADAP KINERJA PEGAWAI', 'Akuntansi'),
(93, 'PENGARUH PENGELOLAAN ARSIP TERHADAP EFEKTIVITAS KERJA', 'Akuntansi'),
(94, 'PENGARUH PENYALURAN KREDIT TERHADAP PRODUKTIVITAS USAHA NASABAH', 'Akuntansi'),
(95, 'PENGARUH PERHITUNGAN TUNJANGAN HARI TUA (THT) DAN PENSIUN TERHADAP PENERIMAAN PENGHASILAN (TAKE HOME PAY)', 'Akuntansi'),
(96, 'PENGARUH PROFESIONALISME PEGAWAI TERHADAP KUALITAS PELAYANAN PUBLIK', 'Akuntansi'),
(97, 'PENGARUH PROGRAM KESELAMATAN KERJA TERHADAP PRODUKTIVITAS KARYAWAN', 'Akuntansi'),
(98, 'PENGARUH PROMOSI MELALUI SOSIAL MEDIA TERHADAP KEPUTUSAN PEMBELIAN', 'Akuntansi'),
(99, 'PENGARUH PUSAT LAYANAN USAHA TERPADU DALAM MEMFASILITASI AKSES PROMOSI TERHADAP PRODUKTIVITAS', 'Akuntansi'),
(100, 'PENGARUH SISTEM INFORASI PERIZINAN ONLINE TERHADAP KEPUASAN PEMOHON', 'Akuntansi'),
(101, 'PENGARUH TINGKAT PENDIDIKAN TERHADAP KINERJA PERANGKAT DESA', 'Akuntansi'),
(102, 'PENGARUH TINGKAT SUKU BUNGA KREDIT TERHADAP VOLUME KREDIT P', 'Akuntansi'),
(103, 'PERHITUNGAN BREAK EVEN POINT UNTUK MENENTUKAN NILAI PENJUALAN MINIMUM', 'Akuntansi'),
(104, 'PERHITUNGAN EOQ DALAM UPAYA PENGENDALIAN', 'Akuntansi'),
(105, 'PERHITUNGAN FORECASTING PENJUALAN SEKTOR MAKANAN UNTUK PENGENDALIAN PERSEDIAAN BARANG', 'Akuntansi'),
(106, 'PERHITUNGAN PERENCANAAN PERSEDIAAN BERDASARKAN FORECASTING PENJUALAN', 'Akuntansi'),
(107, 'PERHITUNGAN PPH PASAL 21 DAN PENGISAN SPT 1721 TERHADAP PELAPORAN PAJAK', 'Akuntansi'),
(108, 'INSTALASI SISTEM REM PADA SEPEDA MOTOR RODA TIGA', 'Teknik Mesin Otomotif'),
(109, 'MEDIA PEMBELAJARAN SISTEM AUDIO PADA MOBIL', 'Teknik Mesin Otomotif'),
(110, 'MODIFIKASI DONGKRAK HIDROLIK MENGGUNAKAN SISTEM ELEKTRIK', 'Teknik Mesin Otomotif'),
(111, 'MODIFIKASI KOPLING PENGGERAK HIDROLIK PADA SEPEDA MOTOR VEGA ZR', 'Teknik Mesin Otomotif'),
(112, 'MODIFIKASI ROCHER ARM MENERAPKAN RTRA (ROLLER TYPO ROCKER ARM) SERTA DURASI CAMSHAFT', 'Teknik Mesin Otomotif'),
(113, 'PENGAMAN SEPEDA MOTOR MEMANFAATKAN  SISTEM KEMUDI', 'Teknik Mesin Otomotif'),
(114, 'PENGEMBANGAN SISTEM KEAMANAN KENDARAAN SEPEDA MOTOR PADA SMART HELM', 'Teknik Mesin Otomotif'),
(115, 'PROSEDUR OPERASI TRAINER SISTEM POWER WINDOW SEMI OTOMATIS PADA MOBIL', 'Teknik Mesin Otomotif'),
(116, 'RANCANG BANGUN ALAT BANTU PENEKAN PEGAS PADA CVT UNTUK MELEPAS DAN MEMASANG CLUTH CARRIER PADA SEPEDA MOTOR MATIC', 'Teknik Mesin Otomotif'),
(117, 'RANCANG BANGUN ALAT PENCEGAH OVERHEAT BERBASIS WATER TEMPERATURE SENSOR UNTUK MESIN DAIHATSU K3-DE', 'Teknik Mesin Otomotif'),
(118, 'RANCANG BANGUN ALAT PENDETEKSI TEGANGAN BATERAI PADA SEPEDA MOTOR EFI', 'Teknik Mesin Otomotif'),
(119, 'RANCANG BANGUN ALAT PENGECEK RELLAY DAN FLASHER ELEKTRIK', 'Teknik Mesin Otomotif'),
(120, 'RANCANG BANGUN ALAT UJI TEKAN SHOCK ABSORBER SEPEDA MOTOR', 'Teknik Mesin Otomotif'),
(121, 'RANCANG BANGUN ALAT UKUR HAMBATAN SENSOR WATER TEMPERATURE SENSOR DAN', 'Teknik Mesin Otomotif'),
(122, 'RANCANG BANGUN BUSI TESTER', 'Teknik Mesin Otomotif'),
(123, 'RANCANG BANGUN COMPRESSION TESTER DIGITAL', 'Teknik Mesin Otomotif'),
(124, 'RANCANG BANGUN FUEL PUMP PRESSURE TESTER PADA MOTOR INJEKSI', 'Teknik Mesin Otomotif'),
(125, 'RANCANG BANGUN INJECTOR CLEANER PADA MOBIL', 'Teknik Mesin Otomotif'),
(126, 'RANCANG BANGUN KERANGKA SEPEDA MOTOR RODA TIGA SEBAGAI ALAT ANGKUT SAMPAH', 'Teknik Mesin Otomotif'),
(127, 'RANCANG BANGUN KOMPRESOR UDARA MENGGUNAKAN KOMPRESOR REFRIGERANT', 'Teknik Mesin Otomotif'),
(128, 'RANCANG BANGUN MEDIA PEMBELAJARAN K3 (KESELAMATAN DA KESEHATAN KERJA)', 'Teknik Mesin Otomotif'),
(129, 'RANCANG BANGUN MEDIA PEMBELAJARAN SENSOR PARKIR', 'Teknik Mesin Otomotif'),
(130, 'RANCANG BANGUN MEDIA PEMBELAJARAN SYSTEM GPS', 'Teknik Mesin Otomotif'),
(131, 'RANCANG BANGUN OVERHAUL TRANSMISI MANUAL SEBAGAI MEDIA PEMBELAJARAN', 'Teknik Mesin Otomotif'),
(132, 'RANCANG BANGUN PEMIPAAN GAS BUANG', 'Teknik Mesin Otomotif'),
(133, 'RANCANG BANGUN PIPA ANGIN', 'Teknik Mesin Otomotif'),
(134, 'RANCANG BANGUN SEPEDA MOTOR MINI TENAGA LISTRIK', 'Teknik Mesin Otomotif'),
(135, 'RANCANG BANGUN SISTEM START ENGINE MENGGUNAKAN SMARTPHONE ANDROID', 'Teknik Mesin Otomotif'),
(136, 'TRAINER SISTEM CENTRAL DOOR LOCK PADA MOBIL', 'Teknik Mesin Otomotif'),
(137, 'TRAINER ALIRAN BAHAN BAKAR SYSTEM INJEKSI PADA SEPEDA MOTOR \'HONDA BEATEFI\'', 'Teknik Mesin Otomotif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lecturers`
--
ALTER TABLE `lecturers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `study`
--
ALTER TABLE `study`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submission`
--
ALTER TABLE `submission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `titles`
--
ALTER TABLE `titles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lecturers`
--
ALTER TABLE `lecturers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `study`
--
ALTER TABLE `study`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `submission`
--
ALTER TABLE `submission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `titles`
--
ALTER TABLE `titles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
