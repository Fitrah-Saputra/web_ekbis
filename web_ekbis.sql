-- phpMyAdmin SQL Dump
-- version 5.2.1-dev+20220625.eb939d71e5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2022 at 03:41 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_ekbis`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` int(11) NOT NULL,
  `id_prodi` int(11) NOT NULL,
  `nama_dosen` varchar(255) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `golongan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `id_prodi`, `nama_dosen`, `nip`, `golongan`) VALUES
(1, 1, 'Fadila Marga Saty, S.Si., M.Si', '197507122003122001', 'IIIc'),
(2, 1, 'Dr. Fitriani, S.P., M.E.P.', '197409102001122002', 'IVa'),
(3, 1, 'Marlinda Apriyani, S.P., M.P.', '198304092006042003', 'IIIc'),
(4, 1, 'Ir. Teguh Budi Trisnanto, M.Si.', '196705081992031002', 'IIId'),
(5, 1, 'Sutarni, S.P., M.E.P.', '197402212000122002', 'IVa'),
(6, 1, 'Dayang Berliana, S.P., M.Si', '198907222015042004', 'IIIb'),
(7, 1, 'Rini Desfaryani, S.P., M.Si', '199012012019032026', 'IIIb'),
(8, 1, 'Annisa Fitri, S.P., M.Si', '199211082019032019', 'IIIb'),
(9, 1, 'Intan Andya Bellapama, S.P.,M.P', '-', '-'),
(10, 1, 'Tunjung Andarwangi, S.P., M.P', '199310222022032006', 'IIIb'),
(11, 1, 'Dita Pratiwi, S.P., M.Si', '199306302022032009', 'IIIb'),
(12, 2, 'Ir. Bina Unteawati, M.P.', '196309121989032001	', 'IVa'),
(13, 2, 'Muhammad Zaini, S.P., M.Si.', '197607072002121003	', 'IIIc'),
(14, 2, 'Luluk Irawati, S.P., MTA.', '197904122009122001	', 'IIIb'),
(15, 2, 'Sri Handayani, S.P., M.E.P.', '198403312010122006	', 'IIIc'),
(16, 2, 'Nuni Anggraini, S.P., M.Si', '199107312018032001	', 'IIIb'),
(17, 2, 'Sudiyo, S..S.I., M.A.', '197703132015041001', 'IIIb'),
(18, 2, 'Kusmaria, S.P., M.Si', '198907072019032023', 'IIIb'),
(19, 2, 'Edy Humaidi, S.P., M.Si.', '199307122019031014', 'IIIb'),
(20, 2, 'I Putu Ajie Windu Kertayoga, S.E., M.S.M', '199302182019031008	', 'IIIb'),
(21, 2, 'Shinta Tantriaditi, S.P., M.Si', '-', '-'),
(22, 2, 'Maria Ulfah, S.P., M.Si', '198903302022032005', 'IIIb'),
(23, 3, 'Evi Yuniarti, S.E., M.Si.', '197306102003122004	', 'IVa'),
(24, 3, 'Artie Arditha, R., S.E., M.Sc. Akt.', '197902282002122002	', 'IIId'),
(25, 3, 'Endang Asliana, S.E., M.Sc.', '197809202003122001', 'IIIc'),
(26, 3, 'Lihan Rini Puspo Wijaya, S.E., M.Si.', '198410092010122003', 'IIIc'),
(27, 3, 'Irawan, S.E., M.Si', '197706012005011001	', 'IIIb'),
(28, 3, 'Dian Nirmala Dewi, S.E., M.S.Ak', '198108292005012002', 'IIIc'),
(29, 3, 'Arif Makhsun, S.E., M.S.Ak', '197503102006041002	', 'IIIb'),
(30, 3, 'Sri Astuti, S.E., M.M', '197211132000032001	', 'IIId'),
(31, 3, 'M. Muhayin A  Sidik, S.E., M.S.Ak.', '198808062019031013	', 'IIIb'),
(32, 3, 'Endah Yuni Puspita Sari, S.E., M. Acc.', '199106022019032018	', 'IIIb'),
(33, 3, 'Sahilly Dzulhasni, S.E., M.Sc', '199208192022032011', 'IIIb'),
(34, 3, 'Dewi Zakia, S.E., M.S,ak', '198911132022032003', 'IIIb'),
(35, 3, 'Surya Prasetya Trihatmaja, S.E., M.Acc', '199210132022031007', 'IIIb'),
(36, 3, 'Muhammad Riyadhi Saputra, S.E M.Ak', '-', '-'),
(37, 4, 'Ir. Bina Unteawati, M.P.', '196309121989032001	', 'IVa'),
(38, 4, 'Muhammad Zaini, S.P., M.Si.', '197607072002121003	', 'IIIc'),
(39, 4, 'Luluk Irawati, S.P., MTA.', '197904122009122001	', 'IIIb'),
(40, 4, 'Sri Handayani, S.P., M.E.P.', '198403312010122006	', 'IIIc'),
(41, 4, 'Nuni Anggraini, S.P., M.Si', '199107312018032001', 'IIIb'),
(42, 4, 'Sudiyo, S..S.I., M.A.', '197703132015041001	', 'IIIb'),
(43, 4, 'Kusmaria, S.P., M.Si', '198907072019032023', 'IIIb'),
(44, 4, 'Edy Humaidi, S.P., M.Si.', '199307122019031014', 'IIIb'),
(45, 4, 'I Putu Ajie Windu Kertayoga, S.E., M.S.M', '199302182019031008', 'IIIb'),
(46, 5, 'Damayanti, S.E., M.M., Akt.', '197507072005012001', 'IIId'),
(47, 5, 'Anita Kusuma D., S.E., M.Com., Acc', '198102242009122002', 'IIIb'),
(48, 5, 'Rusmianto, S.E., M.Si', '198110042005011001', 'IIIc'),
(49, 5, 'Nurmala, S.E., M.M., Akt.', '197206102005012001', 'IIId'),
(50, 5, 'Destia Pentiana, S.E., M.Si.', '198512132008122004', 'IIIc'),
(51, 5, 'Maryani,S.E.,M.M.,Akt.', '197401142002122001', 'IIIc'),
(52, 5, 'Umarudin Kurniawan, S.E., M.S.Ak.', '199011032019031017', 'IIIb'),
(53, 5, 'Depita Anggraini, S.E., M.S.Ak.', '198909192019032017', 'IIIb'),
(54, 5, 'Muhammad Syahrial, S.E., M.Ak', '-', '-'),
(55, 5, 'Wahyu Setyawan, SE.,M.Ak.', '-', '-'),
(56, 5, 'Fitri Mareta, S.Pd., M.Sc', '-', '-'),
(57, 5, 'Reza Juang Riansyah, S.Pd., S.Ak., M.Ak.,Ak.,BKP', '-', '-'),
(58, 5, 'Gita Hilmi Prakoso,', '-', '-'),
(59, 5, 'Ani Novitasari,', '-', '-'),
(60, 6, 'Evi Yuniarti, S.E., M.Si.', '197306102003122004', 'IVa'),
(61, 6, 'Artie Arditha, R., S.E., M.Sc. Akt.', '197902282002122002', 'IIId'),
(62, 6, 'Endang Asliana, S.E., M.Sc.', '197809202003122001', 'IIIc'),
(63, 6, 'Lihan Rini Puspo Wijaya, S.E., M.Si.', '198410092010122003', 'IIIc'),
(64, 6, 'Irawan, S.E., M.Si', '197706012005011001', 'IIIb'),
(65, 6, 'Dian Nirmala Dewi, S.E., M.S.Ak', '198108292005012002', 'IIIc'),
(66, 6, 'Arif Makhsun, S.E., M.S.Ak', '197503102006041002', 'IIIb'),
(67, 6, 'Sri Astuti, S.E., M.M', '197211132000032001', 'IIId'),
(68, 6, 'M. Muhayin A  Sidik, S.E., M.S.Ak.', '198808062019031013', 'IIIb'),
(69, 6, 'Endah Yuni Puspita Sari, S.E., M. Acc.', '199106022019032018', 'IIIb'),
(70, 6, 'Sahilly Dzulhasni, S.E., M.Sc', '-', '-'),
(71, 6, 'Dewi Zakia, S.E., M.S,ak', '-', '-'),
(72, 6, 'Surya Prasetya Trihatmaja, S.E., M.Acc', '-', '-'),
(73, 7, 'Agiska Ria Supriyatna, S.Si., M.T.I', '198708142015042002', 'IIIb'),
(74, 7, 'Imam Asrowardi, S.Kom., M.Kom.', '198002062005011002', 'IIIc'),
(75, 7, 'Tri Sandhika Jaya, S.Kom., M.Kom', '198601182008121005', 'IIIb'),
(76, 7, 'Halim Fathoni, S.T., M.Sc.', '198408162009121004', 'IIIb'),
(77, 7, 'Eko Subyantoro, S.Kom., M.Kom.', '198005302008121002', 'IIIb'),
(78, 7, 'Eko Win Kenali, S.Kom., M.Cs.', '197609192005011002', 'IIIb'),
(79, 7, 'Zuriati, S.Kom., M.Kom.', '197006032005012001', 'IIIc'),
(80, 7, 'Dwirgo Sahlinal. S.T., M. Eng', '197209202002121001', 'IIIb'),
(81, 7, 'Kurniawan Saputra, S.Kom., M.Kom.', '197311242005011001', 'IIIc'),
(82, 7, 'Rima Maulini, S.Kom., M.Kom', '197802192005012001', 'IIIc'),
(83, 7, 'Dr. Septafiansyah Dwi Putra, S.T., M.T.', '198809112009121001', 'IIIb'),
(84, 7, 'Dewi Kania Widyawati., S.Kom., M.Kom.', '197206242005012002', 'IIId'),
(85, 7, 'Agus Ambarwari, S.Pd., M.Kom.', '199208082019031020', 'IIIb'),
(86, 7, 'Oki Arifin, S.Kom., M.Cs.	\r\n', '198910232019031011', 'IIIb'),
(87, 7, 'Nurul Qomariyah, S.Kom., M.Kom.', '198902212022032005', 'IIIb'),
(88, 7, 'Fathurrahman Kurniawan Ikhsan, S.Kom., M.T.I.', '199208182022031007', 'IIIb'),
(89, 7, 'Khusnatul Amaliah, S.Kom., M.Kom.', '199411272022032013', 'IIIb'),
(90, 7, 'Panji Andhika Pratomo, S. Kom., M.T.I', '199010082022031005', 'IIIb'),
(91, 7, 'Jaka Fitra, S.Kom., M.T.I.', '198706012022031002', 'IIIb'),
(92, 7, 'Dani Rofianto, S.Mat., M.Kom', '199311262022031005	', 'IIIb'),
(93, 8, 'Eksa Ridwansyah, S.E., M.Buss., Akt., CA.', '197906162005011002	', 'IIIc'),
(94, 8, 'Refdi Akmal, S.Pd., M.Pd.', '197412032003121002	', 'IIIc'),
(95, 8, 'Anwar Rahman, S.Pd., M.Pd.', '197503072001121001	', 'IIIb'),
(96, 8, 'Meyliana Astriyantika, S.Hut., M.Si', '199305122020122004	', 'IIIb'),
(97, 8, 'Damara Saputra Siregar, S.ST., M.Par', '199211062020121003	', 'IIIb'),
(98, 8, 'Enggar Dwi Cahyo, S.Par., M. Arch', '-', '-'),
(99, 8, 'Friedman Carlyo Manalu, S.Tr. Par., M.Par', '-', '-'),
(100, 8, 'Budi Rahman, S.E., M.M', '-', '-'),
(101, 8, 'Helidatasa Utami, S.Pd., M.Pd', '-', '-'),
(102, 8, 'Deris Astriawan', '-', '-'),
(103, 9, 'Yusep Windhu Ari Wibowo, S.Pd., M.Pd.', '197503152001121001', 'IIIC	'),
(104, 9, 'Dian Puspita Sari, S.Pd., M.Pd.', '197812242005012003', 'IIIC'),
(105, 9, 'Ali Murtopo, S.Pd., M.A.', '198010072005011004', 'IIIC'),
(106, 9, 'Yunita Fitri Yanti, S.Pd., M.Pd.', '199403142022032008', 'IIIB'),
(107, 9, 'Yudha Sakti Pratama, S.Tr.Par., MM.Par', '-', '-'),
(108, 9, 'Pandita Nandana, S.Tr.Par., MM.Par', '-', '-'),
(109, 9, 'Budi Rahman, S.E., M.M.', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `edom`
--

CREATE TABLE `edom` (
  `id_edom` int(11) NOT NULL,
  `kegiatan` varchar(50) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `edom`
--

INSERT INTO `edom` (`id_edom`, `kegiatan`, `link`) VALUES
(1, 'Genap 2019/2020', 'https://jeb.polinela.ac.id/?p=2261&preview=true'),
(2, 'Ganjil 2020/2021', 'https://jeb.polinela.ac.id/?p=2258&preview=true');

-- --------------------------------------------------------

--
-- Table structure for table `evaluasi`
--

CREATE TABLE `evaluasi` (
  `id_evaluasi` int(11) NOT NULL,
  `kegiatan` varchar(50) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `evaluasi`
--

INSERT INTO `evaluasi` (`id_evaluasi`, `kegiatan`, `link`) VALUES
(1, 'Ganjil 2017/2018', 'https://docs.google.com/forms/d/e/1FAIpQLSdD7pBpoXSIX-u6D9kbcLhYwl7KOVIaEE7bFHNio4Nn9obCXw/viewanalytics'),
(2, 'Genap  2017/2018', 'https://docs.google.com/forms/d/e/1FAIpQLScI-yu1viLk0a58Jv4IazwzFoLikaKD7paCq18k3D0cDZddZw/viewanalytics'),
(3, 'Ganjil 2018/2019', 'https://docs.google.com/forms/d/e/1FAIpQLSem4rJllLKez_UjG5wuajLxnKVEabDxfNP-a6G_BxUV8a9LMg/viewanalytics'),
(4, 'Genap 2018/2019', 'https://docs.google.com/forms/d/e/1FAIpQLSc8IWn09-sP-cdPdTVcXV7ZOFNh7YVSp-lrf1Y15aLDI9S1Vg/viewanalytics'),
(5, 'Ganjil 2019/2020', 'https://docs.google.com/forms/d/e/1FAIpQLSeIY77K_xqMITPjdz8azMnDFugOTPR6-GoB3QFJ3fxQNAuYAw/viewanalytics'),
(6, 'Genap 2019/2020', 'https://docs.google.com/forms/d/1apKCsHe8dXWRF0Iq0UiIWie1e2XrSVwNA_S135aAeY4/viewanalytics'),
(7, 'Ganjil 2020/2021', 'https://docs.google.com/forms/d/e/1FAIpQLScJTURZjFebkdFOR0kttPYxL4l2Yu4xBq7Uzno7Z94x5MmcjQ/viewanalytics');

-- --------------------------------------------------------

--
-- Table structure for table `info_jurusan`
--

CREATE TABLE `info_jurusan` (
  `id_info jurusan` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `visi` text NOT NULL,
  `motto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info_jurusan`
--

INSERT INTO `info_jurusan` (`id_info jurusan`, `deskripsi`, `visi`, `motto`) VALUES
(1, 'Ekonomi dan Bisnis adalah jurusan yang menyelenggarakan pendidikan vokasi, penelitian dan pengabdian pada masyarakat di bidang Agribisnis, akuntansi, perpajakan, informatika dan pariwisata.', 'Penghasil tenaga profesional dan berkompeten di bidang agribisnis, akuntansi, perpajakan, informatika dan pariwisata yang dapat bersaing di era globalisasi.', 'Berkarakter dan berdaya saing');

-- --------------------------------------------------------

--
-- Table structure for table `matkul`
--

CREATE TABLE `matkul` (
  `id_matkul` int(11) NOT NULL,
  `id_prodi` int(11) NOT NULL,
  `kode_matkul` varchar(30) NOT NULL,
  `mata_kuliah` varchar(255) NOT NULL,
  `sks` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matkul`
--

INSERT INTO `matkul` (`id_matkul`, `id_prodi`, `kode_matkul`, `mata_kuliah`, `sks`) VALUES
(1, 1, 'PDU0112', 'Pendidikan Kewarganegaraan', '2 ( 2 – 0 )'),
(2, 1, 'PDU0113', 'Bahasa Indonesia', '2 ( 2 – 0 )'),
(3, 1, 'PKD1103', 'Bahasa Inggris', '2 ( 2 – 0 )	'),
(4, 1, 'PKD1111', 'Matematika', '2 ( 2 – 0 )	'),
(5, 1, 'PKD1121', 'Dasar-Dasar Ilmu Manajemen', '2 ( 2 – 0 )'),
(6, 1, 'PKD1122', 'Pengantar Ilmu Ekonomi', '2 ( 1 – 1 )	'),
(7, 1, 'PEB1111', 'Pengantar Bisnis', '2 ( 2 – 0 )'),
(8, 1, 'PKD1151', 'Apresiasi Komputer', '2 ( 1 – 1 )	'),
(9, 1, 'PKD1163', 'Pengantar Ilmu Pertanian', '2 ( 2 – 0 )'),
(10, 1, 'PKD1242', 'Dasar Ilmu Komunikasi', '2 ( 2 – 0 )	'),
(11, 1, 'PDU0111', 'Pendidikan Agama', '2 ( 2 – 0 )'),
(12, 1, 'PDU0114', 'Pendidikan Pancasila', '2 ( 2 – 0 )	'),
(13, 1, 'PKD1216', 'Dasar-Dasar Ilmu Tanah', '3 ( 2 – 1 )	'),
(14, 1, 'PKD1232', 'Klimatologi Pertanian', '2 ( 1 – 1 )	'),
(15, 1, 'PAP1211', 'Manajemen Agribisnis', '2 ( 1 – 1 )	'),
(16, 1, 'PAP1212', 'Ekonomi Mikro', '3 ( 2 – 1 )	'),
(17, 1, 'PAP1213', 'Dasar-Dasar Akuntansi', '2 ( 1 – 1 )	'),
(18, 1, 'PBP1211', 'Dasar-Dasar Agronomi', '3 ( 2 – 1 )	'),
(19, 1, 'PKD1251', 'Statistika', '2 ( 1 – 1 )	'),
(20, 1, 'PAP1311', 'Manajemen Produksi dan Operasi', '3 ( 1 – 2 )	'),
(21, 1, 'PAP1312', 'Tataniaga Pertanian', '3 ( 2 – 1 )	'),
(22, 1, 'PAP1313', 'Perkoperasian', '2 ( 1 – 1 )	'),
(23, 1, 'PAP1314', 'Ekonomi Makro', '3 ( 2 – 1 )	'),
(24, 1, 'PAP1315', 'Ekonomi Pertanian', '2 ( 1 – 1 )	'),
(25, 1, 'PTP1211', 'Dasar Perlindungan Tanaman', '3 ( 2 – 1 )	'),
(26, 1, 'PTP1315', 'Produksi Serelia', '2 ( 1 – 1 )	'),
(27, 1, 'PKU1411', 'Teknik Penulisan Karya Ilmiah	', '2 ( 1 – 1 )	'),
(28, 1, 'PKD1133', 'Kewirausahaan', '2 ( 1 – 1 )	'),
(29, 1, 'PKD1245', 'Komunikasi Bisnis', '3 ( 1 – 2 )	'),
(30, 1, 'PAP1411', 'Teknologi Pengolahan Tanaman Pangan', '2 ( 1 – 1 )	'),
(31, 1, 'PAP1412', 'Pembangunan Pertanian Berkelanjutan	', '2 ( 1 – 1 )	'),
(32, 1, 'PAP1413', 'Akuntansi Biaya', '2 ( 1 – 1 )	'),
(33, 1, 'PAP1415', 'Perdagangan Internasional', '2 ( 1 – 1 )	'),
(34, 1, 'PTP1415', 'Produksi Kacang-kacangan dan Umbi-umbian', '3 ( 1– 2 )	'),
(35, 1, 'PKU1511', 'Proyek Mandiri', '3 ( 0 -  3 )'),
(36, 1, 'PAP1511', 'Manajemen Logistik Agribisnis', '3 ( 2 – 1 )	'),
(37, 1, 'PAP1512', 'Ekonomi Produksi', '3 ( 2 – 1 )	'),
(38, 1, 'PAP1513', 'Studi Kelayakan Agribisnis', '3 ( 1 – 2 )	'),
(39, 1, 'PAP1514', 'Manajemen Pemasaran', '3 ( 1– 2 )	'),
(40, 1, 'PEB1511', 'E-Bisnis', '2 ( 1 – 1 )	'),
(41, 1, 'PTB1513', 'Manajemen Alat Mesin Pertanian', '3 ( 2– 1 )	'),
(42, 1, 'PAP1611', 'Metode Penelitian Sosial dan Ekonomi', '2 ( 1 – 1 )	'),
(43, 1, 'PAP1612', 'Ekonomi dan Sumberdaya Pertanian', '3 ( 2 - 1 )'),
(44, 1, 'PAP1613', 'Riset Operasi', '3 (1 - 2 )'),
(45, 1, 'PAP1614', 'Sistem Manajemen Mutu', '2 ( 1 - 1 )'),
(46, 1, 'PAP1615', 'Ekonometrika', '3 ( 1 - 2 )'),
(47, 1, 'PAP1616', 'Pembiayaan Agribisnis dan K-UKM', '2 ( 1 – 1 )'),
(48, 1, 'PAP1617', 'Manajemen Sumberdaya Manusia	', '3 ( 1 – 2 )'),
(49, 1, 'PTP1515', 'Pertanian Organik	', '2 ( 1 – 1 )'),
(50, 1, 'PKU1711', 'Seminar Proposal Penelitian', '1 ( 0 – 1 )'),
(51, 1, 'PKU1814', 'Praktik Kerja Nyata', '2 ( 0 – 2 )'),
(52, 1, 'PKD1503', 'Penyuluhan Pertanian', '3 ( 1 – 2 )'),
(53, 1, 'PAP1711', 'Bahasa Inggris Profesi', '1 ( 0 – 1 )'),
(54, 1, 'PAP1712', 'Manajemen Resiko', '3 ( 1– 2 )	'),
(55, 1, 'PAP1713', 'Ekonomi Manajerial', '3 ( 1 – 2 )	'),
(56, 1, 'PAP1714', 'Gizi Pangan', '2 ( 1 – 1 )'),
(57, 1, 'PAP1715', 'Perilaku Konsumen', '2 ( 1 – 1 )'),
(58, 1, 'PEB1313', 'Etika Bisnis', '2 ( 2 – 0 )'),
(59, 1, 'PKU1611', 'Praktik Kerja Lapang(PKL)', '6 ( 0 – 6 )'),
(60, 1, 'PKU1612', 'Tugas Akhir', '6 ( 0 – 6 )'),
(61, 2, 'PDU1113', 'Kewarganegaraan', '2 ( 2 - 0 )'),
(62, 2, 'PDU1114', 'Bahasa Indonesia', '2 ( 2 - 0 )'),
(63, 2, 'PKD1111', 'Matematika', '2 ( 2 - 0 )'),
(64, 2, 'PKD1121', 'Dasar-Dasar Ilmu Manajemen', '2 ( 2 - 0 )'),
(65, 2, 'PKD1151', 'Apresiasi Komputer', '2 ( 1 - 1 )'),
(66, 2, 'PKD1122', 'Pengantar Ilmu Ekonomi', '2 ( 1 - 1 )'),
(67, 2, 'PAM1111', 'Sistem Pertanian Berkelanjutan', '2 ( 1 - 1 )'),
(68, 2, 'PAM1112', 'Pengantar Kewirausahaan Agribisnis', '2 ( 1 - 1 )'),
(69, 2, 'PAM1113	', 'Komunikasi Agribisnis', '2 ( 1 - 1 )'),
(70, 2, 'PDU1111', 'Agama', '2 ( 2 - 0 )'),
(71, 2, 'PDU1112', 'Pancasila', '2 ( 2 - 0 )'),
(72, 2, 'PKD1104', 'Bahasa Inggris', '2 ( 1 - 1 )'),
(73, 2, 'PAM1211', 'Ekonomi Mikro', '3 ( 2 - 1)'),
(74, 2, 'PAM1212', 'Ekonomi Makro', '3 ( 2 - 1 )'),
(75, 2, 'PAM 213', 'Dasar-Dasar Akuntansi', '3 ( 2 - 1 )'),
(76, 2, 'PAM1214', 'Manajemen Agribisnis', '3 ( 1-1 )'),
(77, 2, 'PAM1112', 'Pengantar Kewirausahaan Agribisnis', '2 ( 1 - 1 )'),
(78, 2, 'PAM1215', 'Manajemen Usaha Peternakan', '2 ( 1 - 1 )'),
(79, 2, 'PAM1311', 'Ekonomi Pertanian', '2 ( 1 - 1 )'),
(80, 2, 'PAM1312', 'Akuntansi Biaya', '2 ( 1 - 1 )'),
(81, 2, 'PAM1313', 'Manajemen Produksi', '3 ( 1 - 2 )'),
(82, 2, 'PAM1314', 'Manajemen Pemasaran', '3 ( 1 - 2 )'),
(83, 2, 'PAM1315', 'Tataniaga dan Rantai Nilai Agribisnis', '2 ( 1 - 1 )'),
(84, 2, 'PAM1316', 'Manajemen Usaha Tanaman Pangan dan Hortikultura', '3 ( 1 - 2 )'),
(85, 2, 'PAM1317', 'Manajemen Usaha Perikanan', '2 ( 1 - 1 )'),
(86, 2, 'PAM1318', 'Koperasi dan Kelembagaan Agribisnis', '2 ( 1 - 1 )'),
(87, 2, 'PAM1319', 'Manajemen Sarana Prasarana Pertanian', '2 ( 1 - 1 )'),
(88, 2, 'PKD1306', 'Bahasa Inggris Bisnis', '1 ( 0 - 1 )'),
(89, 2, 'PKU1411', 'Teknik Penulisan Karya Ilmiah', '2 ( 1 - 1 )'),
(90, 2, 'PAM1411', 'Statistika Terapan Ekonomi dan Bisnis', '2 ( 1 - 1 )'),
(91, 2, 'PAM1412', 'Manajemen Sumberdaya Manusia', '3 ( 1 - 2 )'),
(92, 2, 'PAM1413', 'Perilaku Konsumen', '2 ( 1 - 1 )'),
(93, 2, 'PAM1414', 'Studi Kelayakan Agribisnis', '3 ( 1 - 2 )'),
(94, 2, 'PAM1415', 'Manajemen Ritel dan Digital Marketing', '2 ( 1 - 1 )'),
(95, 2, 'PAM1416', 'Manajemen Risiko', '2 ( 1 - 1 )'),
(96, 2, 'PAM 1417', 'Manajemen Usaha Tanaman Perkebunan', '2 ( 1 - 1 )'),
(97, 2, 'PAM1415', 'Manajemen Ritel dan Digital Marketing', '2 ( 1 - 1 )'),
(98, 2, 'PAM1416', 'Manajemen Risiko', '2 ( 1 - 1 )'),
(99, 2, 'PAM 1417', 'Manajemen Usaha Tanaman Perkebunan', '2 ( 1 - 1 )'),
(100, 2, 'PAM1511', 'Metodologi Penelitian Sosial Ekonomi', '3 ( 1 - 2 )'),
(101, 2, 'PAM1512', 'Metode Kuantitatif Agribisnis', '2 ( 1 - 1 )'),
(102, 2, 'PAM1513', 'Etika Profesi dan Hukum Bisnis', '2 ( 2 - 0 )'),
(103, 2, 'PAM1514', 'Penyuluhan Pertanian', '3 ( 1 - 2 )'),
(104, 2, 'PAM1515', 'Perdagangan Internasional dan Ekonomi Global', '2 ( 1 - 1 )'),
(105, 2, 'PAM1516', 'Manajemen Mutu Hasil Pertanian', '2 ( 1 - 1 )'),
(106, 2, 'PAM1517', 'Manajemen Logistik', '2 ( 1 - 1 )'),
(107, 2, 'PAM1518', 'Manajemen Strategi', '2 ( 1 - 1 )'),
(108, 2, 'PAM1519', 'Kewirausahaan Tingkat Lanjut', '2 ( 1 - 1 )'),
(109, 2, 'PAM1511', 'Metodologi Penelitian Sosial Ekonomi', '3 ( 1 - 2 )'),
(110, 2, 'PAM1512', 'Metode Kuantitatif Agribisnis', '2 ( 1 - 1 )'),
(111, 2, 'PAM1513', 'Etika Profesi dan Hukum Bisnis', '2 ( 2 - 0 )'),
(112, 2, 'PAM1514', 'Penyuluhan Pertanian', '3 ( 1 - 2 )'),
(113, 2, 'PAM1515', 'Perdagangan Internasional dan Ekonomi Global', '2 ( 1 - 1 )'),
(114, 2, 'PAM1516', 'Manajemen Mutu Hasil Pertanian', '2 ( 1 - 1 )'),
(115, 2, 'PAM1517', 'Manajemen Logistik', '2 ( 1 - 1 )'),
(116, 2, 'PAM1518', 'Manajemen Strategi', '2 ( 1 - 1 )'),
(117, 2, 'PAM1519', 'Kewirausahaan Tingkat Lanjut', '2 ( 1 - 1 )'),
(118, 2, 'PKU 1615', 'Praktik Kerja Nyata', '3 ( 0 - 3 )'),
(119, 2, 'PKU 1617', 'Kegiatan Pembelajaran di Luar Kampus', '17 ( 0 - 17 )'),
(120, 2, 'PKU 1615', 'Praktik Kerja Nyata', '3 ( 0 - 3 )'),
(121, 2, 'PKU 1617', 'Kegiatan Pembelajaran di Luar Kampus', '17 ( 0 - 17 )'),
(122, 2, 'PKU 1618', 'Praktik Kerja Lapang', '20 ( 0 - 20 )'),
(123, 2, 'PKU 1718', 'Seminar Proposal Tugas Akhir', '1 ( 0 - 1 )'),
(124, 2, 'PKU 1719', 'Seminar Hasil Tugas akhir', '1 ( 0 - 1 )'),
(125, 2, 'PKU 1612', 'Tugas Akhir', '4 ( 0 - 4 )'),
(126, 2, 'PKU 1618', 'Praktik Kerja Lapang', '20 ( 0 - 20 )'),
(127, 2, 'PKU 1718', 'Seminar Proposal Tugas Akhir', '1 ( 0 - 1 )'),
(128, 2, 'PKU 1719', 'Seminar Hasil Tugas akhir', '1 ( 0 - 1 )'),
(129, 2, 'PKU 1612', 'Tugas Akhir', '4 ( 0 - 4 )'),
(130, 4, 'PDU0112', 'Pendidikan Kewarganegaraan', '2 ( 2 – 0 )'),
(131, 4, 'PDU0113	', 'Bahasa Indonesia', '2 ( 2 – 0 )	'),
(132, 4, 'PKD1103	', 'Bahasa Inggris', '2 ( 2 – 0 )	'),
(133, 4, 'PKD1111', 'Matematika', '2 ( 2 – 0 )	'),
(134, 4, 'PKD1121', 'Dasar-Dasar Ilmu Manajemen', '2 ( 2 – 0 )	'),
(135, 4, 'PKD1122	', 'Pengantar Ilmu Ekonomi', '2 ( 1 – 1 )	'),
(136, 4, 'PKD1133', 'Kewirausahaan', '2 ( 1 – 1 )	'),
(137, 4, 'PKD1151', 'Apresiasi Komputer', '2 ( 1 – 1 )	'),
(138, 4, 'PKD1161', 'Pengantar Ilmu Pertanian', '2 ( 1 – 1 )	'),
(139, 4, 'PKD1242', 'Dasar Ilmu Komunikasi', '2 ( 2 – 0 )	'),
(140, 4, 'PDU0111', 'Pendidikan Agama', '2 ( 2 – 0 )	'),
(141, 4, 'PDU0114', 'Pendidikan Pancasila', '2 ( 2 – 0 )	'),
(142, 4, 'PKD1251', 'Statistika', '2 ( 1 – 1 )	'),
(143, 4, 'PAG1211', 'Manajemen Agribisnis', '3 ( 2 – 1 )	'),
(144, 4, 'PAG1212', 'Ekonomi Mikro', '3 ( 2 – 1 )	'),
(145, 4, 'PAG1213', 'Ekonomi Makro', '3 ( 2- 1 )'),
(146, 4, 'PAG1214', 'Bisnis Tanaman Pangan dan Hortokultura', '3 ( 1 – 2 )	'),
(147, 4, 'PAG1215', 'Dasar-Dasar Akuntansi', '2 ( 1 – 1 )	'),
(148, 4, 'PKD1241', 'Komunikasi Bisnis', '2 ( 1 – 1 )	'),
(149, 4, 'PKD1305', 'Bahasa Inggris Bisnis 1', '1 ( 0 – 1 )	'),
(150, 4, 'PAG1311', 'Manajemen Produksi', '3 ( 1 – 2 )	'),
(151, 4, 'PAG1312	', 'Tataniaga Pertanian', '2 ( 1 – 1 )	'),
(152, 4, 'PAG1313', 'Bisnis Peternakan', '2 ( 1 – 1 )	'),
(153, 4, 'PAG1314', 'Bisnis Perikanan', '2 ( 1 – 1 )	'),
(154, 4, 'PAG1315	', 'Bisnis Input Pertanian', '2 ( 1 – 1 )	'),
(155, 4, 'PAG1316', 'Ekonomi Pertanian', '2 ( 1 – 1 )	'),
(156, 4, 'PAG1317', 'Perkoperasian dan UMKM', '2 ( 1 – 1 )	'),
(157, 4, 'PAG1318', 'Akuntansi Biaya', '2 ( 1 – 1 )	'),
(158, 4, 'PKU1411', 'Teknik Penulisan Karya Ilmiah', '2 ( 1 – 1 )	'),
(159, 4, 'PAG1411', 'Manajemen Sumberdaya Manusia', '3 ( 2 – 1 )	'),
(160, 4, 'PAG1412', 'Manajemen Pemasaran', '3 ( 1 – 2 )	'),
(161, 4, 'PAG1413', 'Studi Kelayakan Agribisnis', '3 ( 1 – 2 )	'),
(162, 4, 'PAG1414', 'Bisnis Tanaman Perkebunan', '2 ( 1 – 1 )	'),
(163, 4, 'PAG1415', 'Manajemen Logistik', '2 ( 1 – 1 )	'),
(164, 4, 'PAG1416', 'Sistem Manajemen Mutu', '2 ( 2 – 0 )	'),
(165, 4, 'PAG1417', 'Perdagangan Ritel Agribisnis', '1 ( 0 – 1 )	'),
(166, 4, 'PAG1418', 'Pembiayaan KUMKM', '2 ( 1 – 1 )	'),
(167, 4, 'PKU1511', 'Proyek Mandiri', '3 ( 0 – 3 )	'),
(168, 4, 'PKD1504', 'Bahasa Inggris Bisnis II', '1 ( 0 – 1 )	'),
(169, 4, 'PKD1501', 'Penyuluhan Pertanian', '2 ( 1 – 1 )	'),
(170, 4, 'PAG1511', 'Perdagangan Internasional', '2 ( 1 – 1 )	'),
(171, 4, 'PAG1512', 'Metode Kuantitatif dalam Agribisnis', '3 ( 1 – 2 )	'),
(172, 4, 'PAG1513', 'Manajemen Jasa Alsintan', '2 ( 1 – 1 )	'),
(173, 4, 'PAG1514', 'Perilaku Konsumen', '2 ( 1 – 1 )	'),
(174, 4, 'PAG1515', 'Ekonomi Sumber Daya', '2 ( 1 – 1 )	'),
(175, 4, 'PEB1312', 'Etika Profesi dan Bisnis', '2 ( 2 – 0 )	'),
(176, 4, 'PKU1611', 'Praktik Kerja Lapang (PKL)', '6 ( 0 – 6 )	'),
(177, 4, 'PKU1612', 'Tugas Akhir', '4 ( 0 – 4 )	'),
(178, 5, 'PDU0112', 'Pendidikan Kewarganegaraan', '2 ( 2 - 0 )'),
(179, 5, 'PDU0113	', 'Bahasa Indonesia', '2 ( 2 - 0 )'),
(180, 5, 'PKD1103', 'Bahasa Inggris', '2 ( 2 - 0 )'),
(181, 5, 'PKD1133', 'Kewirausahaan Pengantar', '2 ( 2 - 0 )'),
(182, 5, 'PAT1111	', 'Akuntansi Pengantar I', '3  (2 - 1 )'),
(183, 5, 'PAT1112	', 'Hukum Pajak', '2  (2 - 0 )'),
(184, 5, 'PAT1113', 'Manajemen Pengantar', '2  (2 - 0 )'),
(185, 5, 'PAT1114	', 'Matematika Keuangan dan Bisnis', '2 ( 1 - 1 )'),
(186, 5, 'PAT1115	', 'Pengantar Ilmu Ekonomi', '2 ( 1 - 1 )'),
(187, 5, 'PDU0112', 'Pendidikan Kewarganegaraan', '2 ( 2 - 0 )'),
(188, 5, 'PDU0113	', 'Bahasa Indonesia', '2 ( 2 - 0 )'),
(189, 5, 'PKD1103', 'Bahasa Inggris', '2 ( 2 - 0 )'),
(190, 5, 'PKD1133', 'Kewirausahaan Pengantar', '2 ( 2 - 0 )'),
(191, 5, 'PAT1111	', 'Akuntansi Pengantar I', '3  (2 - 1 )'),
(192, 5, 'PAT1112	', 'Hukum Pajak', '2  (2 - 0 )'),
(193, 5, 'PAT1113', 'Manajemen Pengantar', '2  (2 - 0 )'),
(194, 5, 'PAT1114	', 'Matematika Keuangan dan Bisnis', '2 ( 1 - 1 )'),
(195, 5, 'PAT1115	', 'Pengantar Ilmu Ekonomi', '2 ( 1 - 1 )'),
(196, 5, 'PDU0111', 'Pendidikan Agama', '2  (2 - 0 )'),
(197, 5, 'PDU0114', 'Pendidikan Pancasila', '2 ( 2 - 0 )'),
(198, 5, 'PAT1211', 'Akuntansi Pengantar II', '3 ( 2 - 1 )'),
(199, 5, 'PAT1212	', 'Ketentuan Umum Perpajakan (KUP)', '3 ( 2 - 1 )'),
(200, 5, 'PAT1213', 'Kepabeanan', '2 ( 1 - 1 )'),
(201, 5, 'PAT1214', 'Statistika 1', '2 ( 1 - 1 )'),
(202, 5, 'PAT1215', 'Hukum Bisnis dan Perdata', '2 ( 2 - 0 )'),
(203, 5, 'PAT1216	', 'Komunikasi Bisnis', '2 ( 1 - 1 )'),
(204, 5, 'PAT1217', 'Bahasa Inggris Bisnis', '2 ( 1 - 1 )'),
(205, 5, 'PDU0111', 'Pendidikan Agama', '2  (2 - 0 )'),
(206, 5, 'PDU0114', 'Pendidikan Pancasila', '2 ( 2 - 0 )'),
(207, 5, 'PAT1211', 'Akuntansi Pengantar II', '3 ( 2 - 1 )'),
(208, 5, 'PAT1212', 'Ketentuan Umum Perpajakan (KUP)', '3 ( 2 - 1 )'),
(209, 5, 'PAT1213', 'Kepabeanan', '2 ( 1 - 1 )'),
(210, 5, 'PAT1214', 'Statistika 1', '2 ( 1 - 1 )'),
(211, 5, 'PAT1215', 'Hukum Bisnis dan Perdata', '2 ( 2 - 0 )'),
(212, 5, 'PAT1216', 'Komunikasi Bisnis', '2 ( 1 - 1 )'),
(213, 5, 'PAT1217', 'Bahasa Inggris Bisnis', '2 ( 1 - 1 )'),
(214, 5, 'PAT1311', 'Praktikum Akuntansi Pengantar', '2 ( 0 - 2 )'),
(215, 5, 'PAT1312', 'Akuntansi Biaya', '3 ( 2 - 1 )'),
(216, 5, 'PAT1313', 'Akuntansi Keuangan Menengah I', '3 ( 2 - 1 )'),
(217, 5, 'PAT1314', 'Manajemen Keuangan', '2 ( 1 - 1 )'),
(218, 5, 'PAT1315', 'Pajak Penghasilan Pemotongan dan Pemungutan', '3 ( 2 - 1 )'),
(219, 5, 'PAT1316', 'Pajak Pertambahan Nilai', '2 ( 1 - 1 )'),
(220, 5, 'PAT1317	', 'Bea Materai, PDRD, PBB Non Pedesaan & Perkotaan', '2 ( 1 - 1 )'),
(221, 5, 'PAT1318	', 'Statistika 2', '2 ( 1 - 1 )'),
(222, 5, 'PAT1311	', 'Praktikum Akuntansi Pengantar', '2 ( 0 - 2 )'),
(223, 5, 'PAT1312', 'Akuntansi Biaya', '3 ( 2 - 1 )'),
(224, 5, 'PAT1313	', 'Akuntansi Keuangan Menengah I', '3 ( 2 - 1 )'),
(225, 5, 'PAT1314', 'Manajemen Keuangan', '2 ( 1 - 1 )'),
(226, 5, '	PAT1315', 'Pajak Penghasilan Pemotongan dan Pemungutan', '3 ( 2 - 1 )'),
(227, 5, 'PAT1316	', 'Pajak Pertambahan Nilai', '2 ( 1 - 1 )'),
(228, 5, 'PAT1317	', 'Bea Materai, PDRD, PBB Non Pedesaan & Perkotaan', '2 ( 1 - 1 )'),
(229, 5, 'PAT1318	', 'Statistika 2', '2 ( 1 - 1 )'),
(230, 5, 'PAT1411', 'Praktikum Akuntansi Biaya', '2 ( 0 - 2 )'),
(231, 5, 'PAT1412	', 'Akuntansi Keuangan Menengah II', '3 ( 2 - 1 )'),
(232, 5, 'PAT1413	', 'Akuntansi Manajemen', '3 ( 2 - 1 )'),
(233, 5, 'PAT1414	', 'Etika Bisnis dan Tata Kelola Entitas', '3 ( 2 - 1 )'),
(234, 5, 'PAT1415	', 'Akuntansi Sektor Publik', '3 ( 2 - 1 )'),
(235, 5, 'PAT1416	', 'Praktikum Pajak Penghasilan Pemotongan dan Pemungutan', '1 ( 0 - 1 )'),
(236, 5, 'PAT1417	', 'Praktikum Pajak Pertambahan Nilai', '1 ( 0 - 1 )'),
(237, 5, 'PAT1418', 'Praktikum Komputer Aplikasi Pengolah Angka', '2 ( 0 - 2 )'),
(238, 5, 'PAT1419	', 'Praktikum Komputer Aplikasi Akuntansi', '2 ( 0 - 2 )'),
(239, 5, 'PAT1411', 'Praktikum Akuntansi Biaya', '2 ( 0 - 2 )'),
(240, 5, 'PAT1412	', 'Akuntansi Keuangan Menengah II', '3 ( 2 - 1 )'),
(241, 5, 'PAT1413	', 'Akuntansi Manajemen', '3 ( 2 - 1 )'),
(242, 5, 'PAT1414	', 'Etika Bisnis dan Tata Kelola Entitas', '3 ( 2 - 1 )'),
(243, 5, 'PAT1415	', 'Akuntansi Sektor Publik', '3 ( 2 - 1 )'),
(244, 5, 'PAT1416	', 'Praktikum Pajak Penghasilan Pemotongan dan Pemungutan', '1 ( 0 - 1 )'),
(245, 5, 'PAT1417	', 'Praktikum Pajak Pertambahan Nilai', '1 ( 0 - 1 )'),
(246, 5, 'PAT1418', 'Praktikum Komputer Aplikasi Pengolah Angka', '2 ( 0 - 2 )'),
(247, 5, 'PAT1419	', 'Praktikum Komputer Aplikasi Akuntansi', '2 ( 0 - 2 )'),
(248, 5, 'PKU1411', 'Teknik Penulisan Karya Ilmiah', '2 ( 1 - 1 )'),
(249, 5, 'PAT1511', 'Praktikum Akuntansi Keuangan Menengah', '2 ( 0 - 2)'),
(250, 5, 'PAT1512', 'Akuntansi Keuangan Lanjutan I', '3 ( 2 - 1 )'),
(251, 5, 'PAT1513', 'Audit 1', '2 ( 1 - 1 )'),
(252, 5, 'PAT1514', 'Penganggaran Bisnis', '2 (1-1)'),
(253, 5, 'PAT1515', 'Akuntansi Pertanian', '3 ( 2 - 1 )'),
(254, 5, 'PAT1516	', 'PPh Wajib Pajak Orang Pribadi', '2 ( 1 - 1 )'),
(255, 5, 'PAT1517	', 'PPh Wajib Pajak Badan', '2 (1-1)'),
(256, 5, 'PKU1411', 'Teknik Penulisan Karya Ilmiah', '2 ( 1 - 1 )'),
(257, 5, 'PAT1511', 'Praktikum Akuntansi Keuangan Menengah', '2 ( 0 - 2)'),
(258, 5, 'PAT1512', 'Akuntansi Keuangan Lanjutan I', '3 ( 2 - 1 )'),
(259, 5, 'PAT1513', 'Audit 1', '2 ( 1 - 1 )'),
(260, 5, 'PAT1514', 'Penganggaran Bisnis', '2 (1-1)'),
(261, 5, 'PAT1515', 'Akuntansi Pertanian', '3 ( 2 - 1 )'),
(262, 5, 'PAT1516	', 'PPh Wajib Pajak Orang Pribadi', '2 ( 1 - 1 )'),
(263, 5, 'PAT1517	', 'PPh Wajib Pajak Badan', '2 (1-1)'),
(264, 5, 'PAT1611	', 'Sistem Informasi Akuntansi dan Pajak', '2 ( 1 - 1 )'),
(265, 5, 'PAT1612', 'Akuntansi Keuangan Lanjutan II', '3 ( 2 - 1 )'),
(266, 5, 'PAT1613', 'Audit 2', '2 ( 1 - 1 )'),
(267, 5, 'PAT1614', 'Praktikum PPh Wajib Pajak Orang Pribadi', '1 ( 0 - 1 )'),
(268, 5, 'PAT1615', 'Praktikum PPh Wajib Pajak Badan', '2 ( 0 - 2 )'),
(269, 5, 'PAT1616', 'Manajemen Pajak', '2 ( 1 - 1 )'),
(270, 5, 'PAT1617', 'Pemeriksaan Pajak', '2 ( 1 - 1 )'),
(271, 5, 'PAT1618	', 'Akuntansi Perpajakan', '3 ( 2 - 1 )'),
(272, 5, 'PAT1619	', 'Perpajakan Internasional', '2 ( 1 - 1 )'),
(273, 5, 'PAT1611	', 'Sistem Informasi Akuntansi dan Pajak', '2 ( 1 - 1 )'),
(274, 5, 'PAT1612', 'Akuntansi Keuangan Lanjutan II', '3 ( 2 - 1 )'),
(275, 5, 'PAT1613', 'Audit 2', '2 ( 1 - 1 )'),
(276, 5, 'PAT1614', 'Praktikum PPh Wajib Pajak Orang Pribadi', '1 ( 0 - 1 )'),
(277, 5, 'PAT1615', 'Praktikum PPh Wajib Pajak Badan', '2 ( 0 - 2 )'),
(278, 5, 'PAT1616', 'Manajemen Pajak', '2 ( 1 - 1 )'),
(279, 5, 'PAT1617', 'Pemeriksaan Pajak', '2 ( 1 - 1 )'),
(280, 5, 'PAT1618', 'Akuntansi Perpajakan', '3 ( 2 - 1 )'),
(281, 5, 'PAT1619', 'Perpajakan Internasional', '2 ( 1 - 1 )'),
(282, 5, 'PKU1511', 'Proyek Mandiri', '3 ( 0 - 3 )'),
(283, 5, 'PKD1601', 'Metodologi Penelitian', '3 ( 2 - 1 )'),
(284, 5, 'PAT1711	', 'Praktikum Akuntansi Keuangan Lanjutan', '1 ( 0 - 1 )'),
(285, 5, 'PAT1712', 'Analisis Laporan Keuangan', '2 ( 1 - 1 )'),
(286, 5, 'PAT1713', 'Teori Akuntansi', '2 ( 2 - 0 )'),
(287, 5, 'PAT1714', 'Praktikum Audit', '1 ( 0 - 1 )'),
(288, 5, 'PAT1715', 'Sistem Pengendalian Manajemen', '2 ( 1 - 1 )'),
(289, 5, 'PAT1716', 'Sengketa dan Peradilan Pajak', '3 ( 2 - 1 )'),
(290, 5, 'PAT1717', 'Seminar Akuntansi dan perpajakan', '1 (0-1)'),
(291, 5, 'PKU1511', 'Proyek Mandiri', '3 ( 0 - 3 )'),
(292, 5, 'PKD1601', 'Metodologi Penelitian', '3 ( 2 - 1 )'),
(293, 5, 'PAT1711', 'Praktikum Akuntansi Keuangan Lanjutan', '1 ( 0 - 1 )'),
(294, 5, 'PAT1712', 'Analisis Laporan Keuangan', '2 ( 1 - 1 )'),
(295, 5, 'PAT1713', 'Teori Akuntansi', '2 ( 2 - 0 )'),
(296, 5, 'PAT1714', 'Praktikum Audit', '1 ( 0 - 1 )'),
(297, 5, 'PAT1715', 'Sistem Pengendalian Manajemen', '2 ( 1 - 1 )'),
(298, 5, 'PAT1716', 'Sengketa dan Peradilan Pajak', '3 ( 2 - 1 )'),
(299, 5, 'PAT1717', 'Seminar Akuntansi dan perpajakan', '1 (0-1)'),
(300, 5, 'PKU1611', 'Praktik Kerja Lapang (PKL)', '6 ( 0  –  6 )'),
(301, 5, 'PKU1812', 'Praktik Kerja Nyata (PKN)', '2 ( 0  –  2 )'),
(302, 5, 'PKU1813', 'Skripsi', '6 ( 0 – 6 )'),
(303, 5, 'PKU1611', 'Praktik Kerja Lapang (PKL)', '6 ( 0  –  6 )'),
(304, 5, 'PKU1812', 'Praktik Kerja Nyata (PKN)', '2 ( 0  –  2 )'),
(305, 5, 'PKU1813', 'Skripsi', '6 ( 0 – 6 )'),
(306, 6, 'PDU0112', 'Pendidikan Kewarganegaraan', '2 ( 2 – 0 )	'),
(307, 6, 'PDU0113', 'Bahasa Indonesia', '2 ( 2 – 0 )	'),
(308, 6, 'PKD1104	', 'Bahasa Inggris', '2 ( 2 – 0 )	'),
(309, 6, 'PAK1111', 'Akuntansi Pengantar I', '4 ( 2 – 2 )	'),
(310, 6, 'PAK1112', 'Bisnis Pengantar', '2 ( 1 – 1 )	'),
(311, 6, 'PAK1113', 'Manajemen Pengantar', '2 ( 2 – 0 )	'),
(312, 6, 'PAK1114', 'Ekonomika Pengantar', '2 ( 1 – 1 )	'),
(313, 6, 'PAK1115', 'Manajemen Sumberdaya Manusia Pengantar', '2 ( 1 – 1 )	'),
(314, 6, 'PDU0111', 'Pendidikan Agama', '2 ( 2 – 0 )	'),
(315, 6, 'PDU0114', 'Pendidikan Pancasila', '2 ( 2 – 0 )	'),
(316, 6, 'PKD1206', 'Conversation I', '1 ( 0 – 1 )	'),
(317, 6, 'PKD1241', 'Komunikasi Bisnis', '2 ( 1 – 1 )	'),
(318, 6, 'PAK1211', 'Akuntansi Pengantar II', '4 ( 2 – 2 )	'),
(319, 6, 'PAK1213', 'Manajemen Keuangan', '2 ( 1 – 1 )	'),
(320, 6, ' PAK1214', 'Statistik Deskriptif', '2 ( 1 – 1 )	'),
(321, 6, 'PAK1318', 'Praktikum Komputer Aplikasi Pengolah Angka', '2 ( 0 – 2 )'),
(322, 6, 'PEB1311', 'Etika Profesi dan Bisnis', '2 ( 1 – 1 )	'),
(323, 6, 'PKD1304', 'Conversation II', '1 ( 0 – 1 )	'),
(324, 6, 'PAK1311', 'Perpajakan I', '2 ( 1 – 1 )	'),
(325, 6, 'PAK1312', 'Praktikum Akuntansi Pengantar', '2 ( 0 – 2 )	'),
(326, 6, 'PAK1313', 'Akuntansi Keuangan Menengah I', '3 ( 2 – 1 )	'),
(327, 6, 'PAK1314', 'Akuntansi Biaya', '3 ( 2 – 1 )	'),
(328, 6, 'PAK1315', 'Praktikum Komputer Aplikasi Akuntansi I', ' 2 ( 0 – 2 )	'),
(329, 6, 'PAK1316', 'Akuntansi Sektor Publik', ' 2 ( 1 – 1 )'),
(330, 6, 'PAK1317', 'Akuntansi Perbankan', '2 ( 1 – 1 )	'),
(331, 6, 'PAK1319', 'Analisis Laporan Keuangan', '2 ( 1 – 1 )	'),
(332, 6, 'PKU1411', 'Teknik Penulisan Karya Ilmiah', '2 ( 1 – 1 )	'),
(333, 6, 'PAK1411', 'Perpajakan II', '2 ( 1 – 1 )	'),
(334, 6, 'PAK1412', 'Auditing', '3 ( 2 – 1 )	'),
(335, 6, 'PAK1413', 'Akuntansi Keuangan Menengah II', '3 ( 2 – 1 )	'),
(336, 6, 'PAK1414', 'Akuntansi Keuangan Lanjutan', '3 ( 2 – 1 )	'),
(337, 6, 'PAK1415', 'Praktikum Akuntansi Biaya', '2 ( 0 – 2 )'),
(338, 6, 'PAK1416', 'Akuntansi Manajemen', '3 ( 2 – 1 )'),
(339, 6, 'PAK1417', 'Penganggaran', '2 ( 2 – 0 )'),
(340, 6, ' PAK1418', 'English for Business Presentation', ' 1 ( 0 – 1 )'),
(341, 6, 'PAK1518', 'Praktikum Komputer Aplikasi Pengolah Data', '2 ( 0 – 2 )'),
(342, 6, 'PKU1511', 'Proyek Mandiri', '3 ( 0 – 3 )'),
(343, 6, 'PAK1511', 'Akuntansi Perbankan Syariah', ' 2 ( 1 – 1 )'),
(344, 6, 'PAK1512', 'Praktikum Akuntansi Keuangan Menengah', '2 ( 0 – 2 )'),
(345, 6, 'PAK1513', 'Praktikum Akuntansi Keuangan Lanjutan', '2 ( 0 – 2 )'),
(346, 6, 'PAK1514', 'Praktikum Perpajakan', '2 ( 0 – 2 )'),
(347, 6, 'PAK1514', 'Praktikum Auditing', '2 ( 0 – 2 )'),
(348, 6, 'PAK1516', 'Praktikum Komputer Aplikasi Akuntansi II', '2 ( 0 – 2 )'),
(349, 6, 'PAK1517', 'Praktikum Penganggaran', '2 ( 0 – 2 )'),
(350, 6, 'PAK1212', 'Sistem Informasi Akuntansi', '2 ( 0 – 2 )'),
(351, 6, 'PKU1611', 'Praktik Kerja Lapang (PKL)', '6 ( 0 – 6 )'),
(352, 6, 'PKU1612', 'Tugas Akhir', '4 ( 0 – 4 )'),
(353, 7, 'PDU0112', 'Pendidikan Kewarganegaraan', '2 ( 2 – 0 )'),
(354, 7, 'PDU0113', 'Bahasa Indonesia', '2 ( 2 – 0 )'),
(355, 7, 'PKD1121', 'Dasar-Dasar Ilmu Manajemen', '2 ( 2 – 0 )'),
(356, 7, 'PMI1111', 'Logika Informatika', '2 ( 2 – 0 )'),
(357, 7, 'PMI1112', 'Paket Program Niaga', '3 ( 1 – 2 )'),
(358, 7, 'PMI1113', 'Pengantar Teknologi Informasi', '2 ( 2 – 0 )'),
(359, 7, 'PMI1114', 'Komputer Grafis	', '3 ( 1 – 2 )	'),
(360, 7, 'PMI1115', 'Algoritma dan Pemrograman', '4 ( 2 – 2 )'),
(361, 7, 'PKD1101', 'Bahasa Inggris I', '2 ( 2 – 0 )'),
(362, 7, 'PDU0111', 'Pendidikan Agama', '2 ( 2 – 0 )	'),
(363, 7, 'PDU0114', 'Pendidikan Pancasila', '2 ( 2 – 0 )'),
(364, 7, 'PMI1211', 'Pemrograman Dasar', '4 ( 2 – 2 )'),
(365, 7, 'PMI1212', 'Sistem Basis Data', '3 ( 1 – 2 )'),
(366, 7, 'PMI1213', 'Sistem Operasi', '4 ( 2 – 2 )'),
(367, 7, 'PMI1214', 'Pemrograman Web', '3 ( 1 – 2 )'),
(368, 7, 'PMI1215', 'Sistem Informasi Manajemen', '2 ( 2 – 0 )'),
(369, 7, 'PKD1201', 'Bahasa Inggris II', '2 ( 1 – 1 )'),
(370, 7, 'PMI1311', 'Pemrograman SQL', '4 ( 2 – 2 )'),
(371, 7, 'PMI1312', 'Pemrograman Web Dinamis', '4 ( 2 – 2 )'),
(372, 7, 'PMI1313', 'Jaringan dan Komunikasi Data', '4 ( 2 – 2 )'),
(373, 7, 'PMI1314', 'Pemrograman Lanjut', '3 ( 1 – 2 )'),
(374, 7, 'PMI1315', 'Analisis dan Perancangan Sistem Informasi', '4 ( 2 – 2 )'),
(375, 7, 'PKU1411', 'Teknik Penulisan Karya Ilmiah', '2 ( 1 – 1 )'),
(376, 7, 'PMI1411', 'Rancang Bangun Jaringan Komputer', '4 ( 2 – 2 )'),
(377, 7, 'PMI1412', 'Pemrograman Web Framework', '4 ( 2 – 2 )'),
(378, 7, 'PMI1413', 'Pemrograman SQL Lanjut', '4 ( 2 – 2 )'),
(379, 7, 'PMI1414', 'Pemrograman Basis Data', '4 ( 2 – 2 )'),
(380, 7, 'PMI1415', 'Kecakapan Antar Personal', '2 ( 2 – 0 )'),
(381, 7, 'PKU1511', 'Proyek Mandiri', '3 ( 0 – 3 )'),
(382, 7, 'PMI1511', 'Keamanan Sistem Informasi', '4 ( 2 – 2 )'),
(383, 7, 'PMI1512', 'Kewirausahaan Informatika', '4 ( 2 – 2 )'),
(384, 7, 'PMI1513', 'Proyek Sistem Informasi', '3 ( 2 – 1 )'),
(385, 7, 'PMI1514', 'Etika dan Hukum Teknologi Informasi', '2 ( 2 – 0 )'),
(386, 7, 'PMI1515', 'Infrastruktur Sistem Informasi', '4 ( 2 – 2 )'),
(387, 7, 'PKU1611', 'Praktik Kerja Lapang (PKL)', '6 ( 0 – 6 )'),
(388, 7, 'PKU1612', 'Tugas Akhir', '4 ( 0 – 4 )'),
(389, 8, 'PDU 0111', 'Agama', '2 ( 2 - 0 )'),
(390, 8, 'PKD 1101', 'Bahasa Inggris', '2 ( 2 - 0 )'),
(391, 8, 'PPW 1111', 'Pengantar Pariwisata', '2 ( 2 - 0 )'),
(392, 8, 'PPW 1112', 'Destinasi Pariwisata', '2 ( 1 - 1 )'),
(393, 8, 'PPW 1113', 'Pengantar Akomodasi dan Restoran', '2 ( 2 - 0 )'),
(394, 8, 'PPW 1114', 'Tarif dan Dokumen Pasasi', '3 ( 2 - 1 )'),
(395, 8, 'PPW 1115', 'Tata Operasi Darat	', '2 ( 1 - 1 )'),
(396, 8, 'PPW 1116', 'Studi Lintas Budaya', '2 ( 1 - 1 )'),
(397, 8, 'PPW 1117', 'Pengembangan Karakter', '2 ( 1 - 1 )'),
(398, 8, 'PPW 1118', 'Komunikasi Bisnis Pariwisata', '2 ( 1 - 1 )'),
(399, 8, 'PDU 0112', 'Kewarganegaraan', '2 ( 2 - 0 )'),
(400, 8, 'PKD 1111', 'Matematika', '2 ( 2 - 0 )'),
(401, 8, 'PKD 1151', 'Apresiasi Komputer', '2 ( 1 - 1 )'),
(402, 8, 'PPW 1211', 'Pengelolaan Objek Wisata', '2 ( 1 – 1 )'),
(403, 8, 'PPW 1212', 'Kepemanduan dan Kepemimpinan Perjalanan Wisata', '3 ( 1 – 2 )'),
(404, 8, 'PPW 1213', 'Pengelolaan Bisnis Event dan MICE	', '3 ( 1 – 2 )'),
(405, 8, 'PPW 1214', 'Geografi Pariwisata', '2 ( 2 – 0 )'),
(406, 8, 'PPW 1215', 'Bahasa Inggris Profesi I', '2 ( 1 – 1 )'),
(407, 8, 'PPW 1216', 'Bahasa Arab I', '2 ( 1 – 1 )'),
(408, 8, 'PPW 1217', 'Kewirausahaan Pariwisata', '2 ( 1 – 1 )'),
(409, 8, 'PDU 0114', 'Pancasila', '2 ( 2 – 0 )'),
(410, 8, 'PDU 0113', 'Bahasa Indonesia', '2 ( 2 – 0 )'),
(411, 8, 'PPW 1311', 'Bahasa Inggris Profesi II', '2 ( 1 – 1 )'),
(412, 8, 'PPW 1312', 'Bahasa Arab II', '2 ( 1 – 1 )'),
(413, 8, 'PPW 1313', 'Psikologi Pelayanan Periwisata', '2 ( 1 – 1 )'),
(414, 8, 'PPW 1314', 'Akuntansi Pariwisata', '2 ( 1 – 1 )'),
(415, 8, 'PPW 1315', 'Manajemen Paket Wisata', '3 ( 1 – 2 )'),
(416, 8, 'PPW 1316', 'PPW 1316', '3 ( 2 – 1 )'),
(417, 8, 'PPW 1317', 'Pemasaran Pariwisata', '3 ( 2 – 1 )'),
(418, 8, 'PKU 1411', 'Teknik Penulisan Karya Ilmiah', '2 ( 1 – 1 )'),
(419, 8, 'PPW 1411', 'Bahasa Inggris Profesi III', '2 ( 1 – 1 )'),
(420, 8, 'PPW 1412', 'Bahasa Mandarin II', '2 ( 1 – 1 )'),
(421, 8, 'PPW 1413', 'Hukum Bisnis Pariwisata', '2 ( 2 – 0 )'),
(422, 8, 'PPW 1414', 'Etika Profesi Pariwisata', '2 ( 1 – 1 )'),
(423, 8, 'PPW 1415', 'Keselamatan, Kesehatan Kerja, dan Lingkungan', '2 ( 1 – 1 )'),
(424, 8, 'PPW 1416', 'Manajemen Sumber Daya Manusia', '2 ( 2 - 0 )'),
(425, 8, 'PPW 1417', 'Manajemen Usaha Perjalanan Wisata	', '3 ( 1 – 2 )'),
(426, 8, 'PPW 1418', 'Manajemen Komplain dan Kualitas Layanan', '3 ( 2 - 1 )'),
(427, 8, 'PPW 1419', 'Studi Kelayakan Bisnis Perjalanan Wisata', '3 ( 2 – 1 )'),
(428, 8, 'PKU 1613', 'PKL', '14 ( 0 – 14 )'),
(429, 8, 'PKU 1511', 'Proyek Mandiri', '3 ( 0 – 3 )'),
(430, 8, 'PKU1612', 'Tugas Akhir', '4 ( 0 – 4 )'),
(431, 9, 'PDU 0111', 'Agama', '2 ( 2 - 0 )'),
(432, 9, 'PDU 0113', 'Bahasa Indonesia', '2 ( 2 – 0 )'),
(433, 9, 'PPH 0113', 'Pengantar Pariwisata', '2 ( 2 – 0 )'),
(434, 9, 'PPH 0101', 'Pengantar Akomodasi Dan Restoran	', '2 ( 1 – 1 )'),
(435, 9, 'PPH 0102', 'Pengantar Kantor Depan', '2 ( 1 – 1 )'),
(436, 9, 'PPH 0103', 'Pengantar Tata Graha', '2 ( 1 – 1 )'),
(437, 9, 'PKD 1103', 'Bahasa Inggris', '2 ( 1 – 1 )'),
(438, 9, 'PDU 0114', 'Pancasila', '2 ( 2 – 0 )'),
(439, 9, 'PDU 1113', 'Kewarganegaraan', '2 ( 2 – 0 )'),
(440, 9, 'PPH 0105', 'Pengembangan Karakter Dan Sikap Profesi', '2 ( 1 – 1 )'),
(441, 9, 'PPH 0201', 'Pengantar Akuntansi', '2 ( 1 - 1 )'),
(442, 9, 'PPH 0202', 'Pengantar Pelayanan Makanan dan Minuman	', '2 ( 1 – 1 )'),
(443, 9, 'PPH 0203', 'Bahasa Inggris Perhotelan I', '2 ( 1 - 1 )'),
(444, 9, 'PKD 1111', 'Matematika', '2 ( 2 – 0 )'),
(445, 9, 'PPH 0204', 'Pengetahuan Linen dan Binatu', '2 ( 1 – 1 )'),
(446, 9, 'PPH 0205', 'Higiene, Sanitasi, dan Keselamatan Kerja', '2 ( 1 – 1 )'),
(447, 9, 'PPH 0206', 'Operasional Tata Graha	', '3 ( 1 – 2 )'),
(448, 9, 'PPH 0207', 'Operasional Kantor Depan', '1 ( 1 – 2 )'),
(449, 9, 'PKD 1151', 'Apresiasi Komputer	', '2 ( 1 - 1 )'),
(450, 9, 'PPH 0301', 'Bahasa Inggris Perhotelan II', '2 ( 1 - 1 )'),
(451, 9, 'PPH 0302', 'Pengantar Manajemen', '2 ( 2 - 0 )'),
(452, 9, 'PPH 0303', 'Sistem Informasi dan Komunikasi Hotel', '2 ( 1 - 1 )'),
(453, 9, 'PPH 0304', 'Akuntansi Perhotelan', '2 ( 1 - 1 )'),
(454, 9, 'PPH 0305', 'Operasional Pelayanan Makanan Dan Minuman', '3 ( 1 - 2 )'),
(455, 9, 'PPH 0306', 'Operasional Tata Boga', '3 ( 1 - 2 )'),
(456, 9, 'PPH 0307', 'Operasional Patiseri', '3 ( 1 - 2 )'),
(457, 9, 'PPH 0308', 'Psikologi Pelayanan', '2 ( 1 - 1 )'),
(458, 9, 'PPH 0401', 'Bahasa Inggris Perhotelan III', '2 ( 1 - 1 )'),
(459, 9, 'PPH 0402', 'Pengelolaan Tata Graha', '3 ( 1 - 2 )'),
(460, 9, 'PPH 0403', 'Pengelolaan Kantor Depan', '3 ( 1 - 2 )'),
(461, 9, 'PPH 0208', 'Pengetahuan Lintas Budaya', '2 ( 1 - 1 )'),
(462, 9, 'PPH 0405', 'Pengelolaan Tata Boga', '3 ( 1 - 2 )'),
(463, 9, 'PPH 0406', 'Manajemen Perencanaan Biaya', '2 ( 1 - 1 )'),
(464, 9, 'PPH 0407', 'Pengelolaan Pelayanan Makanan Dan Minuman', '3 ( 1 - 2 )'),
(465, 9, 'PPH 0408', 'Kewirausahaan Akomodasi', '2 ( 1 - 1 )'),
(466, 9, 'PPH 0501', 'Manajemen Sumber Daya Manusia', '2 ( 2 - 0 )'),
(467, 9, 'PPH 0502', 'Pengelolaan Pendapatan Hotel', '3 ( 1 - 2 )'),
(468, 9, 'PPH 0503', 'Manajemen Pemasaran Hotel	', '2 ( 1 - 1 )'),
(469, 9, 'PPH 0504', 'Manajemen Kepemimpinan Hotel', '2 ( 1 - 1 )'),
(470, 9, 'PPH 0505', 'Sistem Manajemen Lingkungan', '2 ( 2 - 0 )'),
(471, 9, 'PPH 0506', 'Manajemen Mutu', '2 ( 1 - 1 )'),
(472, 9, 'PPH 0404', 'Pengelolaan Konvensi & Acara', '3 ( 1 - 2 )'),
(473, 9, 'PPH 0507', 'Teknik Penulisan Karya Ilmiah', '2 ( 1 - 1 )'),
(474, 9, 'PKU 1511', 'PKN', '3 ( 0 - 3 )'),
(475, 9, 'PKU 1613', 'MBKM 8 Pilihan', '17 ( 0 - 17 )'),
(476, 9, 'PKU 1613', 'Magang', '20 ( 0 - 20 )'),
(477, 9, 'PKU 1613', 'Proyek Mandiri', '3 ( 0 - 3 )'),
(478, 9, 'PKU 1612', 'Seminar Proposal Tugas Akhir', '1 ( 0 - 1 )'),
(479, 9, 'PKU 1612', 'Seminar Hasil Tugas Akhir', '1 ( 0 - 1 )'),
(480, 9, 'PKU 1612', 'Tugas Akhir', '4 ( 0 - 4 )');

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id_prodi` int(11) NOT NULL,
  `nama_prodi` varchar(255) NOT NULL,
  `tingkat` enum('D2','D3','D4') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id_prodi`, `nama_prodi`, `tingkat`) VALUES
(2, 'Agribisnis Pangan', 'D4'),
(3, 'Pengelolaan Agribisnis', 'D4'),
(4, 'Akutansi Bisnis Digital', 'D4'),
(5, 'Agribisnis', 'D3'),
(6, 'Akutansi Perpajakan', 'D4'),
(7, 'Akutansi', 'D3'),
(8, 'Manajemen Informatika', 'D3'),
(9, 'Perjalanan Wisata', 'D3'),
(10, 'Pengelolaan Perhotelan', 'D4'),
(17, 'Administrasi Perpajakan', 'D2');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(11) NOT NULL,
  `sambutan` text NOT NULL,
  `penutup` text NOT NULL,
  `struktur_organisasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id_profil`, `sambutan`, `penutup`, `struktur_organisasi`) VALUES
(2, 'Kami mengucapkan selamat datang di portal Jurusan Ekonomi dan Bisnis Polinela. Kami berharap media ini mampu menjadi sumber data dan informasi bagi semua pihak yang membutuhkan.\r\nMenyadari pentingnya arti sebuah pelayanan, sejak pertengahan 2017 sampai dengan saat ini, Jurusan Ekonomi dan Bisnis tidak pernah berhenti berinovasi mengembangkan dan mengimplementasikan aplikasi-aplikasi berbasis teknologi informasi. Proses perubahan sistem manual ke sistem digital akan dilakukan secara bertahap dan masif. Sampai dengan saat ini, beberapa aplikasi yang telah dikembangkan dan digunakan di Jurusan Ekonomi dan Bisnis adalah :', 'Layanan-layanan berbasis teknologi informasi tersebut akan terus dikembangkan sesuai dengan kebutuhan organisasi sehingga Jurusan Ekonomi dan Bisnis dapat bersaing dan terdepan pada era digital saat ini. Dengan semangat memberikan pelayanan yang terbaik semoga Allah Pemilik Langit dan Bumi memberkati usaha kita semua. Aaminn.', 'Struktur organisasi Politeknik Negeri Lampung berdasarkan SK Mendiknas No: 142/O/2002, menempatkan jurusan sebagai salah satu unsur yang berada langsung di bawah Direktur melalui jalur Pembantu Direktur. Jurusan bertanggung jawab dalam menjalankan tugas dan fungsinya sebagai unsur pelaksana akademik di bidang studi tertentu. Ketua Jurusan Ekonomi dan Bisnis memiliki wewenang langsung dalam garis komando kepada Ketua Program Studi, Kepala Laboratorium, sekretaris jurusan, tenaga administrasi, serta kepada dosen di lingkungan Jurusan Ekonomi dan Bisnis. Jurusan Ekonomi dan Bisnis bertanggung jawab dalam menjalankan tugas dan fungsinya sebagai unsur pelaksana akademik dalam bidang studi Agribisnis, Akuntansi, Manajemen Informatika, Agribisnis Pangan dan Akuntansi Perpajakan.');

-- --------------------------------------------------------

--
-- Table structure for table `sasaran_mutu`
--

CREATE TABLE `sasaran_mutu` (
  `id_sasaran_mutu` int(11) NOT NULL,
  `kegiatan` varchar(50) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sasaran_mutu`
--

INSERT INTO `sasaran_mutu` (`id_sasaran_mutu`, `kegiatan`, `link`) VALUES
(1, 'Tahun 2018', 'https://drive.google.com/file/d/1T9OG9gMQ03PvbJJG_FeuPBFhHkWirLL2/view?usp=sharing'),
(2, 'Tahun 2019', 'https://drive.google.com/file/d/10iue87MMiPkcAJEt0cQYK3mLsxA-MZ2N/view?usp=sharing'),
(3, 'Tahun 2020', 'https://drive.google.com/file/d/1wMav7WcXIOmXOq-cV3oA18c1O-sv9AaT/view?usp=sharing');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`),
  ADD KEY `idprodi` (`id_prodi`);

--
-- Indexes for table `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`id_matkul`),
  ADD KEY `idprodi` (`id_prodi`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id_prodi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `matkul`
--
ALTER TABLE `matkul`
  MODIFY `id_matkul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=482;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id_prodi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
