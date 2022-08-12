-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2022 at 02:41 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ekspedisi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `level`) VALUES
(1, 'nadya', 'nadya', 'superadmin'),
(2, 'putri2', 'putri', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `luar_negeri`
--

CREATE TABLE `luar_negeri` (
  `id_luarnegeri` int(64) NOT NULL,
  `nama_negara` varchar(256) NOT NULL,
  `harga_jne` int(124) NOT NULL,
  `harga_tiki` int(124) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `luar_negeri`
--

INSERT INTO `luar_negeri` (`id_luarnegeri`, `nama_negara`, `harga_jne`, `harga_tiki`) VALUES
(1, 'Australia', 400000, 604800),
(2, 'Brunei Darussalam', 350000, 518400),
(3, 'Brazil', 1320000, 2116800),
(4, 'Canada', 802000, 820800),
(5, 'China (tidak termasuk China Selatan)', 319000, 604800),
(6, 'Jerman', 610000, 849600),
(7, 'Denmark', 721000, 849600),
(8, 'Mesir', 333000, 0),
(9, 'Perancis', 610000, 849600),
(10, 'Inggris', 610000, 0),
(11, 'Yunani', 595000, 0),
(12, 'Hong Kong', 274000, 518400),
(13, 'Irlandia', 802000, 0),
(14, 'India', 305000, 604800),
(15, 'Irak', 713000, 0),
(16, 'Italia', 610000, 0),
(17, 'Jepang (tidak termasuk Okinawa)', 607000, 604800),
(18, 'Korea Selatan', 260000, 518400),
(19, 'Sri Lanka', 333000, 792000),
(20, 'Malaysia', 400000, 388800),
(21, 'Belanda', 610000, 849600),
(22, 'Filipina', 1320000, 518400),
(23, 'Saudi Arabia', 342000, 1324800),
(24, 'Singapura', 319000, 0),
(25, 'Thailand', 610000, 518400),
(26, 'Sri Lanka', 279000, 0),
(27, 'Saudi Arabia', 802000, 1324800),
(28, 'Amerika Serikat', 721000, 820800),
(29, 'Vietnam', 0, 518400),
(30, 'New Zealand', 0, 604800),
(31, 'Myanmar', 0, 792000),
(32, 'Tuvalu', 0, 792000),
(33, 'Canada', 0, 820800),
(34, 'Mexico', 0, 820800),
(35, 'Puerto Rico', 0, 2116800),
(36, 'Austria', 0, 849600),
(37, 'Belgium', 0, 849600),
(38, 'Denmark', 0, 849600),
(39, 'East Timor', 0, 792000),
(40, 'Finland', 0, 849600),
(41, 'Guam', 0, 2116800),
(42, 'Hungary', 0, 849600),
(43, 'Monaco', 0, 849600),
(44, 'Norway', 0, 849600),
(45, 'Papua New Guinea', 0, 792000),
(46, 'Poland', 0, 849600),
(47, 'Portugal', 0, 849600),
(48, 'Spain', 0, 849600),
(49, 'Sweden', 0, 849600),
(50, 'Switzerland', 0, 849600),
(51, 'United Kingdom', 0, 849600),
(52, 'Bangladesh', 0, 792000),
(53, 'Bhutan', 0, 792000),
(54, 'Cambodia', 0, 792000),
(55, 'Greece', 0, 849600),
(56, 'Iran', 0, 2116800),
(57, 'Israel', 0, 1324800),
(58, 'Laos', 0, 792000),
(59, 'Nepal', 0, 792000),
(60, 'Pakistan', 0, 792000),
(61, 'Syria', 0, 2116800),
(62, 'Albania', 0, 1324800),
(63, 'Argentina', 0, 2116800),
(64, 'Bahrain', 0, 1324800),
(65, 'Chile', 0, 2116800),
(66, 'Cuba', 0, 2116800),
(67, 'Iceland', 0, 1324800),
(68, 'Jordan', 0, 1324800),
(69, 'Kuwait', 0, 1324800),
(70, 'Lebanon', 0, 2116800),
(71, 'Morocco', 0, 2116800),
(72, 'South Africa', 0, 1324800),
(73, 'Turkey', 0, 1324800),
(74, 'Uzbekistan', 0, 2116800),
(75, 'Yemen Arab Rep', 0, 2116800),
(76, 'Zimbabwe', 0, 2116800);

-- --------------------------------------------------------

--
-- Table structure for table `sebaran`
--

CREATE TABLE `sebaran` (
  `id` int(11) NOT NULL,
  `nama` varchar(99) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `telp` varchar(20) DEFAULT NULL,
  `lat` varchar(99) DEFAULT NULL,
  `lng` varchar(99) DEFAULT NULL,
  `id_ekspedisi` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sebaran`
--

INSERT INTO `sebaran` (`id`, `nama`, `alamat`, `telp`, `lat`, `lng`, `id_ekspedisi`) VALUES
(1, 'TIKI Cabang Pekanbaru', 'Jl. Rambutan II No.17, Sidomulyo Tim., Kec. Marpoyan Damai, Kota Pekanbaru, Riau 28292', '(0761) 565656', '0.47601276190923', '101.42580103841436', 'tiki'),
(2, 'Tiki Meranti Pandak', 'Jl. Kota Baru No. 26 Pasar Bawah, Meranti Pandak, Kec. Rumbai Pesisir, Kota Pekanbaru, Riau 28153', '(021) 4704979', '0.5503164943641929', '101.4481876010098\r', 'tiki'),
(3, 'Tiki Rejosari', '?Jl. Hangtuah I No. 36 Blkg Telkom, Rejosari, Kec. Tenayan Raya, Kota Pekanbaru, Riau 28111', '?(0761) 7700700', '0.5237852917972898', '101.44957092758041\r', 'tiki'),
(4, 'Tiki Rejosari 2', 'Jl. Gn. Papandayan No.27, Rejosari, Kec. Tenayan Raya, Kota Pekanbaru, Riau 28289', '(021) 4704979', '0.5247475455192456', '101.46986329202828\r', 'tiki'),
(5, 'Tiki Rintis', 'Jl. Teuku Umar No.11, Rintis, Kec. Lima Puluh, Kota Pekanbaru, Riau 28155', '(0761) 36975', '0.5329614336053845', '101.44986244530696\r', 'tiki'),
(6, 'Tiki Sail', 'Jl. Kopan No. No.12 A, Sail, Kec. Tenayan Raya, Kota Pekanbaru, Riau 28131', '(021) 4704979', '0.5033938952867814', '101.49691200651225\r', 'tiki'),
(7, 'Tiki tampan', 'Jl. Pemuda, Tampan, Pekanbaru, Kota Pekanbaru, Riau 28292', '(021) 4704979', '0.5147227385062236', '101.4339464920894\r', 'tiki'),
(8, 'Tiki Tanjung datuk', 'Jl. Tanjung Datuk No.76, Pesisir, Kec. Lima Puluh, Kota Pekanbaru, Riau 28155', '0812-6802-649', '0.5381515432812407', '101.45124656190211\r', 'tiki'),
(9, 'Tiki Umban Sari', 'Jl. Umban Sari No.27, Umban Sari, Kec. Rumbai, Kota Pekanbaru, Riau 28265', ' (0761) 53145', '0.570855028194039', '101.42599973502277\r', 'tiki'),
(10, 'Gerai Tiki Pekanbaru 100', 'l. KH. Ahmad Dahlan, Kp. Melayu, Kec. Pekanbaru Kota, Kota Pekanbaru, Riau 28124', '(021) 4704979', '0.5163256772637553', '101.4378449998887\r', 'tiki'),
(11, 'Tiki sudirman agen 030', 'alan Jenderal Sudirman No.370, Sukaramai, Pekanbaru Kota, Sumahilang, Kec. Pekanbaru Kota, Kota Pekanbaru, Riau 28156', '', '0.5255092813735028', '101.44737604110603\r', 'tiki'),
(12, 'Tiki 32 pekanbaru ', 'Jl. Pangeran Hidayat, Tanah Datar, Pekanbaru, Kota Pekanbaru, Riau 28115', '(0761) 23883', '0.5252518001382154', '101.44392314776732\r', 'tiki'),
(13, 'Gerai tiki pekanbaru 022', 'oko Nabila (Pangkas, Jl. Bundo Kanduang, Sukaramai, Kec. Pekanbaru Kota, Kota Pekanbaru, Riau 28113', '(021) 4704979', '0.5307447308484983', '101.44548214561459\r', 'tiki'),
(14, 'Tiki pepaya agen 065', 'Jl. Pepaya No.64a, Jadirejo, Kec. Sukajadi, Kota Pekanbaru, Riau 28121', '0811-6644-141', '0.5138221945209479', '101.44656976867336\r', 'tiki'),
(15, 'Gerai tiki pekanbaru', 'Jl. Harapan Raya No.388e, Tengkerang Tim., Kec. Tenayan Raya, Kota Pekanbaru, Riau 28131', '?(0761) 38211', '0.5002824929446182', '101.482175167974\r', 'tiki'),
(16, 'Gerai tiki pekanbaru 043', 'Jl. Rajawali, Kp. Melayu, Kec. Pekanbaru Kota, Kota Pekanbaru, Riau 28124', '(021) 4704979', '0.5141219479145572', '101.43351733865723\r', 'tiki'),
(17, 'Gerai tiki pekanbaru 028', 'Jl. Gambir, Sukaramai, Kec. Pekanbaru Kota, Kota Pekanbaru, Riau 28113', '(021) 4704979', '0.5306712747688054', '101.44536099743218\r', 'tiki'),
(18, 'agen tiki 137', 'alan Merpati Sakti No.22 Ujung, Simpang Baru, Kec. Tampan, Kota Pekanbaru, Riau 28293', '1 500 125', '0.47696917108410536', '101.3722420915017\r', 'tiki'),
(19, 'gerai tiki pekanbaru', 'Jl. Dahlia No.71, Kedungsari, Kec. Sukajadi, Kota Pekanbaru, Riau 28156', '(0761) 854175', '0.5250386591401527', '101.50726132927556\r', 'tiki'),
(20, 'gerai tiki pekanbaru 063', 'l. Harapan Raya No. 282 ( Spbu Harapan Raya ), Tengkerang Tim., Kec. Tenayan Raya, Kota Pekanbaru, Riau 28282', '(021) 4704979', '0.48860981162785266', '101.50726132927556\r', 'tiki'),
(21, 'gerai tiki pekanbaru 025', 'Jl. Wonorejo No.3, Wonorejo, Kec. Marpoyan Damai, Kota Pekanbaru, Riau 28128', '(0761) 45657', '0.5083213815336233', '101.44907907553761\r', 'tiki'),
(22, 'agen tiki 25 sudirman', 'Jl. Wonorejo No.mor 3, RT.02/RW.01, Wonorejo, Kec. Marpoyan Damai, Kota Pekanbaru, Riau 28125', '0853-6467-3535', '0.5077205903430202', '101.44945646416471\r', 'tiki'),
(23, 'tiki kantor cabang pembantu sembilang', 'Jl. Sembilang No.135, Limbungan Baru, Kec. Rumbai Pesisir, Kota Pekanbaru, Riau 28261', '(0761) 54256', '0.5624660950506946', '101.44898125397232\r', 'tiki'),
(24, 'gerai tiki pekanbaru 003', 'Jl. Sekolah No.61, Meranti Pandak, Kec. Rumbai Pesisir, Kota Pekanbaru, Riau 28261', '(0761) 51994', '0.5607730410913989', '101.43855284433529\r', 'tiki'),
(25, 'tiki 174', 'Jl. Melur No.28, Kedungsari, Kec. Sukajadi, Kota Pekanbaru, Riau 28123', '', '0.5269613532557342', '101.43431170332447\r', 'tiki'),
(26, 'tiki arjuna agen 006', 'Jl. Arjuna No.27, Labuh Baru Tim., Kec. Payung Sekaki, Kota Pekanbaru, Riau 28123', '?0852-6494-9640', '0.5143194645801088', '101.42589061247935\r', 'tiki'),
(27, 'tiki gerai 156', 'Jl. Pembangunan No.10B, Kp. Melayu, Kec. Sukajadi, Kota Pekanbaru, Riau 28124', '(0761) 564092', '0.5076635943632068', '101.43269364208928\r', 'tiki'),
(28, 'Gerai tiki pekanbaru', 'Jl. Garuda Sakti No.34, Labuh Baru Tim., Kec. Payung Sekaki, Kota Pekanbaru, Riau 28123', '0812-7524-914', '0.513480031499642', '101.42712627600493\r', 'tiki'),
(29, 'Gerai tiki pekanbaru 055', 'Jl. Siak 2, Palas, Kec. Rumbai, Kota Pekanbaru, Riau 28266', '(021) 4704979', '0.5674941474213857', '101.39748566556041\r', 'tiki'),
(30, 'Gerai tiki pekanbaru', 'Jl. Karya I No.8, Tengkerang Bar., Kec. Marpoyan Damai, Kota Pekanbaru, Riau 28125', '0821-7480-1631', '0.48616940254057966', '101.43520973603573\r', 'tiki'),
(31, 'Gerai tiki pekanbaru 059', 'Pt Inti Angkasa Dewa, Jl. A Yani No.125, Suka Maju, Kec. Sail, Kota Pekanbaru, Riau 28115', '(021) 4704979', '0.5155783998488022', '101.46696688646779\r', 'tiki'),
(32, 'Gerai Tiki Pekanbaru 010', 'Jl. Geso Ii Umban Sari Atas, Umban Sari, Pekanbaru, Kota Pekanbaru, Riau 28265', '(021) 4704979', '0.5920213897113834', '101.41844754779122\r', 'tiki'),
(33, 'Gerai tiki pekanbaru 054', 'Jl. Soekarno - Hatta, Sidomulyo Tim., Kec. Marpoyan Damai, Kota Pekanbaru, Riau 28282', '(021) 4704979', '0.48249990649675123', '101.41914777465306\r', 'tiki'),
(34, 'Gerai tiki pekanbaru 177', 'Jl. Klp. Sawit, Simpang Tiga, Pekanbaru, Kota Pekanbaru, Riau 28284', '(021) 4704979', '0.45699009023152537', '101.45518600992156\r', 'tiki'),
(35, 'Tiki kavlink 077', 'Jl. Samarinda No.26GF, Tengkerang Utara, Kec. Bukit Raya, Kota Pekanbaru, Riau 28126', '0852-2832-8808', '0.5029322033165994', '101.46267370123718\r', 'tiki'),
(36, 'Gerai tiki pekanbaru 089', 'Jl. Bakti Vi Perum Maton House, Tengkerang Bar., Kec. Marpoyan Damai, Kota Pekanbaru, Riau 28282', '(021) 4704979', '0.4828772847504655', '101.4262833451179\r', 'tiki'),
(37, 'Tiki paus ujung  071', 'Jl. Paus Ujung No.87, Sidomulyo Tim., Kec. Marpoyan Damai, Kota Pekanbaru, Riau 28289', '0853-6485-8731', '0.48267156178139614', '101.43694744512499\r', 'tiki'),
(38, 'Gerai tiki pekanbaru', 'Jl. Serayu No.14, Labuh Baru Tim., Kec. Payung Sekaki, Kota Pekanbaru, Riau 28156', '(0761) 32859', '0.5213603071474905', '101.427068533036\r', 'tiki'),
(39, 'Tiki lobak agen 008', 'Jl. Lobak No.101, Delima, Kec. Tampan, Kota Pekanbaru, Riau 28292', '0812-2355-054', '0.4826082972520987', '101.41217715192572\r', 'tiki'),
(40, 'Gerai tiki pekanbaru 069', 'Jl. Soekarno Hatta (Spbu), Sidomulyo Bar., Kec. Tampan, Kota Pekanbaru, Riau 28294', '(021) 4704979', '0.44813507663785895', '101.41958945874185\r', 'tiki'),
(41, 'Tiki', 'Jl. Sungai Kampar No.92, Sekip, Kec. Lima Puluh, Kota Pekanbaru, Riau 28151', '', '0.5340434829842374', '101.4622149744466\r', 'tiki'),
(42, 'Kantor cabang jne', 'Jl. Sisingamangaraja No.65, Kota Tinggi, Kec. Pekanbaru Kota, Kota Pekanbaru, Riau 28112', '(0761) 853993', '0.5292085364458287', '101.45055358410002\r', 'jne'),
(43, 'JNE juanda', 'Jl. Ir. H. Juanda No.136, Kp. Dalam, Kec. Senapelan, Kota Pekanbaru, Riau 28167', '(021) 29278888', '0.5364160059102526', '101.44349476162847\r', 'jne'),
(44, 'JNE Warehouse Pekanbaru', 'Jl. Rw. Indah No.7, Sidomulyo Tim., Kec. Marpoyan Damai, Kota Pekanbaru, Riau 28288', '(021) 29278888', '0.47733175166615105', '101.4483627314867\r', 'jne'),
(45, 'JNE Sukajadi', 'Depan SDN 6 pepaya, Jl. Pepaya No.24, Jadirejo, Kec. Sukajadi, Kota Pekanbaru, Riau 28000', '(021) 29278888', '0.5153016533266812', '101.44558271486427\r', 'jne'),
(46, 'JNE inhil jaya', 'Jl. Tulip No.22, Sukajadi, Kec. Sukajadi, Kota Pekanbaru, Riau 28125', '0853-7431-7830', '0.5226355003515856', '101.43732343920496\r', 'jne'),
(47, 'JNE Exp Sudirman', 'Sukaramai, Pekanbaru Kota, Pekanbaru City, Riau 28155', '0823-1367-1155', '0.5327616651218889', '101.4472771471667\r', 'jne'),
(48, 'JNE Benggala Surya', 'Jl. Tanjung Datuk No.57/59, Pesisir, Kec. Lima Puluh, Kota Pekanbaru, Riau 28144', '(021) 29278888', '0.537656400197502', '101.44989082867593\r', 'jne'),
(49, 'JNE Ladies Style', 'Jl. Dr. Setia Budhi No.59, Rintis, Kec. Lima Puluh, Kota Pekanbaru, Riau 28144', '', '0.5365219091225634', '101.44936074941312\r', 'jne'),
(50, 'Agen JNE Pemuda', 'Jl. Pemuda No.15, Tampan, Kec. Payung Sekaki, Kota Pekanbaru, Riau 28291', '?0813-7117-8817', '0.5431509393055727', '101.41896582621354\r', 'jne'),
(51, 'Kp. JNE Tuanku Tambusai', 'Jl. Tuanku Tambusai No.122C, Kp. Tengah, Kec. Sukajadi, Kota Pekanbaru, Riau 28122', '?(0761) 571060', '0.5092084858968419', '101.4407607375918\r', 'jne'),
(52, 'JNE Exp W.OKE', 'Jl. Mutiara No.16b, Padang Terubuk, Kec. Senapelan, Kota Pekanbaru, Riau 28291', '', '0.5347613797567291', '101.42874387442798\r', 'jne'),
(53, 'JNE Mewah Jaya Motor', 'Jl. Cempaka No. 21C, Padang Bulan, Pekanbaru, Pekanbaru City, Riau 28121', '(021) 29278888', '0.5292670077492255', '101.43849225738784\r', 'jne'),
(54, 'JNE Era Sentosa', 'Jl. Riau No.69E, Padang Terubuk, Kec. Senapelan, Kota Pekanbaru, Riau 28115', '(021) 29278888', '0.5141380031958287', '101.46635567282956\r', 'jne'),
(55, 'JNE', 'Jl. Limbungan No.8B, Limbungan, Kec. Rumbai Pesisir, Kota Pekanbaru, Riau 28266', '', '0.5676188378686198', '101.44914708269465\r', 'jne'),
(56, 'JNE Panam', 'Jl. HR. Soebrantas Panam, Sidomulyo Barat, Tampan, Sidomulyo Bar., Kec. Tampan, Kota Pekanbaru, Riau 28294', '0812-6767-6789', '0.46573704937271443', '101.41078105646599\r', 'jne'),
(57, 'JNE Bonanza warnet', 'Jl. Melur No. 17 Panam, Padang Terubuk, Senapelan, Pekanbaru City, Riau 28155', '?(021) 29278888', '0.5333895387536829', '101.43452722897649\r', 'jne'),
(58, 'JNE Adijaya Media', 'Jl. Taman Sari, Tengkerang Sel., Pekanbaru, Kota Pekanbaru, Riau 28288', '(021) 29278888', '0.4925676263406211', '101.46181638003178\r', 'jne'),
(59, 'JNE EXP Agen Mutiara Rangsang', 'Jl. Rangsang No.27, Simpang Empat, Kec. Pekanbaru Kota, Kota Pekanbaru, Riau 28116', '', '0.5128102692439896', '101.45163405350415\r', 'jne'),
(60, 'JNE', 'Jl. Tiung Ujung, Labuh Baru Tim., Kec. Payung Sekaki, Kota Pekanbaru, Riau 28123', '', '0.511281208148076', '101.4306832319007\r', 'jne'),
(61, 'JNE Ring Road', 'Jl. Ring Road No.105, Sri Meranti, Rumbai, Pekanbaru City, Riau 28154', '(021) 29278888', '0.5518519308246647', '101.43246350113652\r', 'jne'),
(62, 'JNE Dota Ponsel', 'Jl. Kartika Sari No.2, Umban Sari, Kec. Rumbai, Kota Pekanbaru, Riau 28154', '(021) 29278888', '0.5711983338907953', '101.42114409098734\r', 'jne'),
(63, 'JNE', 'Jl. Kartama, RT.01/RW.15, Maharatu, Kec. Marpoyan Damai, Kota Pekanbaru, Riau 28284', '', '0.4500774660691415', '101.4379293907212\r', 'jne'),
(64, 'JNE ALFatih ', 'Jl. SM Amin No.01, Delima, Kec. Payung Sekaki, Kota Pekanbaru, Riau 28292', '?0823-8143-4188', '0.5381299920722279', '101.40400266783371\r', 'jne'),
(65, 'JNE Simpang Tiga', 'Simpang Tiga, Bukit Raya, Pekanbaru City, Riau 28288', '', '0.46405657569005776', '101.45351257240047\r', 'jne'),
(66, 'Agen JNE Srikandi', 'Jl. Srikandi, Delima, Kec. Tampan, Kota Pekanbaru, Riau 28292', '0812-7711-800', '0.4856711278683509', '101.40638356506311\r', 'jne'),
(67, 'JNE Exp Across Nation', 'Jl. Lintas Sumatra No.177-163, Tengkerang Utara, Kec. Bukit Raya, Kota Pekanbaru, Riau 28126', '', '0.5012156554872466', '101.46192517510008\r', 'jne'),
(68, 'JNE Tulip 22', 'Jl. Tulip No.22, Sukajadi, Kec. Sukajadi, Kota Pekanbaru, Riau 28125', '0853-7431-7830', '0.5224209325578251', '101.43710886250021\r', 'jne'),
(69, 'Sicepat exp pekanbaru nangka', 'Jl. Nangka No.128, Tengkerang Bar., Kec. Marpoyan Damai, Kota Pekanbaru, Riau 28122', '', '0.5073202850833394', '101.43552506599572\r', 'sicepat'),
(70, 'Sicepat exp pku transit', 'Jl. Soekarno-Hatta, Kawasan ECO Green Industrial Estate No, Blok G17, Marpoyan Damai, Riau 28283', '(021) 50200050', '0.4505937612541235', '101.43984547712238\r', 'sicepat'),
(71, 'Sicepat exp pku ', 'Kawasan Eco Green Industrial Estate, Jl. Soekarno - Hatta No.24, Sei-Kelulut, Kec, Riau 28125', '(021) 50200050', '0.5013673788597021', '101.41859702962259\r', 'sicepat'),
(72, 'Sicepat exp pku Senapelan', 'Jl. Jati No.15, Kp. Baru, Kec. Senapelan, Kota Pekanbaru, Riau 28155', '(021) 50200050', '0.5379798894770804', '101.43496437897649\r', 'sicepat'),
(73, 'Sicepat exp pku ', 'Jl. Soekarno - Hatta No.28, Sidomulyo Tim., Kec. Marpoyan Damai, Kota Pekanbaru, Riau 28294', '0812-6827-5454', '0.47506727955161593', '101.41970175874444\r', 'sicepat'),
(74, 'Sicepat exp pku 50', 'Jl. Kuantan Raya No.2C, Sekip, Kec. Lima Puluh, Kota Pekanbaru, Riau 28155', '(021) 50200050', '0.5327159649870995', '101.45720671933044\r', 'sicepat'),
(75, 'Sicepat exp rumbai', 'Jl. Yos Sudarso No.171 B, Sri Meranti, Kec. Rumbai, Kota Pekanbaru, Riau 28261', '(021) 50200050', '0.5563586593206187', '101.43434552329651\r', 'sicepat'),
(76, 'Sicepat exp payung sekaki', 'Jl. Angkasa No.17, Air Hitam, Kec. Payung Sekaki, Kota Pekanbaru, Riau 28291', '(021) 50200050', '0.5326652796895907', '101.42525190008\r', 'sicepat'),
(77, 'Sicepat exp pku tampan', 'Jl. HR. Soebrantas, Simpang Baru, Kec. Tampan, Kota Pekanbaru, Riau 28293', '(021) 50200050', '0.46943059702814743', '101.37197427347024\r', 'sicepat'),
(78, 'Sicepat exp tenayan raya', 'Jl. Hangtuah Ujung, Sail, Kec. Tenayan Raya, Kota Pekanbaru, Riau 28131', '(021) 50200050', '0.5140425279428127', '101.49254535878745\r', 'sicepat'),
(79, 'Sicepat exp 50', 'Jl. Kuantan Raya No.2, Sekip, Kec. Lima Puluh, Kota Pekanbaru, Riau 28155', '0822-1460-9845', '0.5326064379863272', '101.45707797330759\r', 'sicepat'),
(80, 'Gerai tiki pekanbaru', 'Jl. Paus No.5a, Wonorejo, Kec. Marpoyan Damai, Kota Pekanbaru, Riau 28122', '0813-7173-5707', '0.5083103627659408', '101.43803921486045\r', 'tiki'),
(81, 'Gerai tiki 045', 'Jl. Ikhlas No.1F, Labuh Baru Tim., Kec. Payung Sekaki, Kota Pekanbaru, Riau 28124', '', '0.5060395189821941', '101.43040492622055\r', 'tiki'),
(82, 'Gerai Tiki 107', 'Jl. Gunung Raya Gg. Darussalam No. 4, Hangtuah, Sail, Pekanbaru, Kota Pekanbaru, Riau 28281', '(021) 4704979', '0.513520685169332', '101.51930224970872\r', 'tiki'),
(83, 'Tiki panam', 'Jl. HR. Soebrantas No.Km. 10 No. 11, Tuah Karya, Kec. Tampan, Kota Pekanbaru, Riau 28293', '0852-7445-8500', '0.467094794774809', '101.39454616100706\r', 'tiki'),
(84, 'Tiki tengkubey agen', 'Jl. Tengku Bey, Simpang Tiga, Kec. Bukit Raya, Kota Pekanbaru, Riau 28288', '0812-8088-8098', '0.4656617179903493', '101.45847751104043\r', 'tiki'),
(85, 'Gerai tiki 105', 'Jl. Garuda Raya No.48, Maharatu, Kec. Marpoyan Damai, Kota Pekanbaru, Riau 28294', '(0761) 565506', '0.43821667090092975', '101.42806988417568\r', 'tiki'),
(86, 'Tiki suka karya 060', 'JL SUKAKARYA, Tuah Karya, Kec. Tampan, Kota Pekanbaru, Riau 28293', '0852-6549-7760', '0.44908690025855635', '101.38593385512475\r', 'tiki'),
(87, 'Tiki 020', 'Jl. HR. Soebrantas, Simpang Baru, Kec. Tampan, Kota Pekanbaru, Riau 28292', '(021) 4704979', '0.4673752510230501', '101.39375018827947\r', 'tiki'),
(88, 'Tiki 009', 'Jl. Mendut No.9,Blkg Samsat, Sail, Kec. Tenayan Raya, Kota Pekanbaru, Riau 28116', '(0761) 25196', '0.5102017536130301', '101.47615859897039\r', 'tiki'),
(89, 'Tiki 096', 'Jl. Kaharuddin Nst, Maharatu, Kec. Bukit Raya, Kota Pekanbaru, Riau 28284', '', '0.44929888475597163', '101.44718140569805\r', 'tiki'),
(90, 'Gerai tiki', 'Jl. Melati No.199, Sidomulyo Tim., Kec. Marpoyan Damai, Kota Pekanbaru, Riau 28289', '0813-6572-2122', '0.479066799896365', '101.43883572012686\r', 'tiki'),
(91, 'Gerai 199 tiki', 'Jl. Kartama No.59, Maharatu, Kec. Marpoyan Damai, Kota Pekanbaru, Riau 28125', '0878-0879-0711', '0.448030213183707', '101.43616545971595\r', 'tiki'),
(92, 'Tiki 007', 'Jl. Tuanku Tambusai No.65, Labuh Baru Bar., Kec. Payung Sekaki, Kota Pekanbaru, Riau 28282', '(021) 4704979', '0.5015827956909195', '101.40635983765351\r', 'tiki'),
(93, 'Tiki geso 10', 'Umban Sari, Rumbai, Pekanbaru City, Riau 28265', '0813-6553-0648', '0.5947297081186163', '101.41705244939608\r', 'tiki'),
(94, 'Tiki 031', 'Jl. Fajar, Umban Sari, Kec. Rumbai, Kota Pekanbaru, Riau 28294', '(0761) 62210', '0.5943325977375883', '101.42067752794583\r', 'tiki'),
(95, 'Gerai tiki', 'Jl. Delima No.1, Delima, Kec. Tampan, Kota Pekanbaru, Riau 28292', '(0761) 7771518', '0.47503379329455847', '101.40657823146832\r', 'tiki'),
(96, 'gerai tiki 066', 'Jl. Durian No.29, Kp. Tengah, Kec. Sukajadi, Kota Pekanbaru, Riau 28121', '0813-7137-501', '0.5181652251838331', '101.43884907528353\r', 'tiki'),
(97, 'gerai tiki', 'Jl. Gunung Raya No.57, Rejosari, Kec. Tenayan Raya, Kota Pekanbaru, Riau 28111', '0852-6531-9084', '0.5204561896954716', '101.47079240919544\r', 'tiki'),
(98, 'agen 091 jne', 'Jl. Semen, Tuah Karya, Kec. Tampan, Kota Pekanbaru, Riau 28293', '0852-5552-9992', '0.46440691872288975', '101.43338859212922', 'jne'),
(99, 'Tiki 051', '(Londry Bunda, Jl. Rajawali No.47, Kp. Melayu, Kec. Sukajadi, Kota Pekanbaru, Riau 28122', '', '0.514184553496383', '101.43338859212922', 'tiki'),
(100, 'Gerai 009', 'Jl. Taman Karya, Tuah Karya, Kec. Tampan, Kota Pekanbaru, Riau 28293', '0812-6611-6846', '0.4677645977788628', '101.37724506647444\r', 'tiki');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `luar_negeri`
--
ALTER TABLE `luar_negeri`
  ADD PRIMARY KEY (`id_luarnegeri`);

--
-- Indexes for table `sebaran`
--
ALTER TABLE `sebaran`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `luar_negeri`
--
ALTER TABLE `luar_negeri`
  MODIFY `id_luarnegeri` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `sebaran`
--
ALTER TABLE `sebaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
