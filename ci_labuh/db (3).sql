-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 03 Jun 2020 pada 14.53
-- Versi server: 5.7.25-0ubuntu0.16.04.2
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `abk`
--

CREATE TABLE `abk` (
  `id` int(11) NOT NULL,
  `nama_abk` varchar(50) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `id_ijazah` int(10) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `id_kapal` int(10) NOT NULL,
  `status_aktif` enum('aktif','tidak') NOT NULL DEFAULT 'aktif'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `abk`
--

INSERT INTO `abk` (`id`, `nama_abk`, `alamat`, `no_hp`, `id_ijazah`, `jabatan`, `id_kapal`, `status_aktif`) VALUES
(1, 'YOYOK BUDI P.', '', '0', 3011, 'NAHKODA', 1, 'aktif'),
(2, 'MAJUDI', '', '0', 3012, 'NAHKODA', 1, 'aktif'),
(3, 'SUJONO', 'BANGOREJO', '0', 3013, 'MUALIM 1', 1, 'aktif'),
(4, 'M. ALFIAN R.', 'KETAPANG', '0', 3014, 'MUALIM 1', 1, 'aktif'),
(5, 'BUSANA', '', '0', 3015, 'MUALIM 2', 1, 'aktif'),
(6, 'I GUSTI SUPIARTA', 'GILIMANUK', '0', 3016, 'MUALIM 2', 1, 'aktif'),
(7, 'SUPRIYONO', '', '0', 3017, 'KKM', 1, 'aktif'),
(8, 'LUXY WIDYA SEPDINATA', '', '0', 3018, 'KKM', 1, 'aktif'),
(9, 'HENDRA WIJAYA', '', '0', 3019, 'MASINIS 1', 1, 'aktif'),
(10, 'I KADEK SUWIRYA', '', '0', 3021, 'MASINIS 2', 1, 'aktif'),
(11, 'MOCH. ARIEF ', '', '0', 3022, 'MASINIS 2', 1, 'aktif'),
(12, 'MOCH. RIFA\'I', 'KETAPANG', '081333634482', 3023, 'SERANG', 1, 'aktif'),
(13, 'ADIMAN H. ALI', '', '0', 3024, 'SERANG', 1, 'aktif'),
(14, 'SUHARYONO', 'SRONO', '', 3025, 'JURU MUDI', 1, 'aktif'),
(15, 'ARIF MUNANDAR', '', '', 3026, 'JURU MUDI', 1, 'aktif'),
(16, 'NAWAWI', 'KETAPANG', '', 3027, 'JURU MUDI', 1, 'aktif'),
(17, 'SLAMET RUBIANTORO', '', '', 3028, 'JURU MINYAK', 1, 'aktif'),
(18, 'SUHANDOKO', 'KETAPANG', '', 3029, 'JURU MINYAK', 1, 'aktif'),
(19, 'MOH. YUSUF', '', '', 3030, 'JURU MINYAK', 1, 'aktif'),
(20, 'HENDRO SETIONO', '', '', 3031, 'JURU MINYAK', 1, 'aktif'),
(21, 'YONO', 'BULUSAN', '', 3032, 'KELASI', 1, 'aktif'),
(22, 'PUJI SETIAWAN', '', '', 3033, 'KELASI', 1, 'aktif'),
(23, 'YUNUS', '', '', 3034, 'KELASI', 1, 'aktif'),
(24, 'IRAN SANDRA AS.', '', '', 3035, 'KELASI', 1, 'aktif'),
(25, 'BINTANG PANGESTU', '', '', 3036, 'KELASI', 1, 'aktif'),
(26, 'PRASTYO', '', '', 3037, 'KELASI', 1, 'aktif'),
(27, 'SUROSO', '', '', 3038, 'KELASI', 1, 'aktif'),
(28, 'HERI SUPRIYANTO', '', '', 3039, 'KELASI', 1, 'aktif'),
(29, 'SETIAWAN PRIO P.', '', '', 3111, 'NAHKODA', 2, 'aktif'),
(30, 'AHMAD ROMADLONI F. R.', '', '', 3112, 'NAHKODA', 2, 'aktif'),
(31, 'ICHSAN SETIAWAN W.', '', '', 3113, 'MUALIM 1', 2, 'aktif'),
(32, 'SUKIRNO', '', '', 3114, 'MUALIM 1', 2, 'aktif'),
(33, 'RUDI MULYONO', '', '', 3115, 'MUALIM 2', 2, 'aktif'),
(34, 'SUDARMAN', '', '', 3116, 'MUALIM 2', 2, 'aktif'),
(35, 'GUNTUR PRAYITNO', '', '', 3117, 'KKM', 2, 'aktif'),
(36, 'HADI PRIYANTO', '', '', 3118, 'KKM', 1012, 'aktif'),
(37, 'HASAN SAIFUL RIZAL', '', '', 3119, 'MASINIS 1', 2, 'aktif'),
(38, 'FREDI SUFI PRIANTO', '', '', 3120, 'MASINIS 1', 2, 'aktif'),
(39, 'JOKO SUDARYONO', '', '', 3121, 'MASINIS 2', 2, 'aktif'),
(40, 'BAHRUL ULUM', '', '', 3122, 'MASINIS 2', 2, 'aktif'),
(41, 'EDO SUDARMAJI', '', '', 3123, 'SERANG', 2, 'aktif'),
(42, 'AAN WIDI SUSANTO', '', '', 3124, 'SERANG', 2, 'aktif'),
(43, 'GEDE OKA SANTOSA', '', '', 3125, 'JURU MUDI', 2, 'aktif'),
(44, 'ACH MUZAKKY', '', '', 3126, 'JURU MUDI', 2, 'aktif'),
(45, 'RANDI AZMI', '', '', 3127, 'JURU MUDI', 2, 'aktif'),
(46, 'JOVAN VIGUS', '', '', 3128, 'JURU MINYAK', 2, 'aktif'),
(47, 'ABDUL LATIF', '', '', 3129, 'JURU MINYAK', 2, 'aktif'),
(48, 'NUR LUKMANUL H. ', 'KETAPANG', '', 3130, 'JURU MINYAK', 2, 'aktif'),
(49, 'ALDI RAHMAWAN', '', '', 3131, 'JURU MINYAK', 1012, 'aktif'),
(50, 'IMAM SANTOSA', '', '', 3132, 'KELASI', 2, 'aktif'),
(51, 'YOFI SUWEDONI', '', '', 3133, 'KELASI', 2, 'aktif'),
(52, 'LUKMAN NUL HAKIM', 'KETAPANG', '', 3134, 'KELASI', 2, 'aktif'),
(53, 'MAHALI', 'KETAPANG', '', 3135, 'KELASI', 2, 'aktif'),
(54, 'EDI PRASOJO', '', '', 3136, 'KELASI', 2, 'aktif'),
(55, 'AHMAD FARID', '', '', 3137, 'KELASI', 2, 'aktif'),
(56, 'FEBRI SUHARIADI', '', '', 3211, 'NAHKODA', 3, 'aktif'),
(57, 'ARIF RAHMAN S.', '', '', 3212, 'MUALIM 1', 3, 'aktif'),
(58, 'IMAM SUGIARTO', '', '', 3213, 'MUALIM 2', 3, 'aktif'),
(59, 'AGUS ARDI WIJAYA', '', '', 3214, 'MARCHONIST', 3, 'aktif'),
(60, 'LA ODE AHMAD J.', '', '', 3215, 'KKM', 3, 'aktif'),
(61, 'FAHOLEL M.', '', '', 3216, 'MASINIS 1', 3, 'aktif'),
(62, 'MEIKRONY DEDI S.', '', '', 3217, 'MASINIS 2', 3, 'aktif'),
(63, 'HERI ISWOYO', '', '', 3218, 'MASINIS 3', 3, 'aktif'),
(64, 'SUTRISNO', '', '', 3219, 'SERANG', 3, 'aktif'),
(65, 'HARIYADI', '', '', 3220, 'JURU MUDI', 3, 'aktif'),
(66, 'FAJAR DWI SANTOSO', '', '', 3221, 'JURU MUDI', 3, 'aktif'),
(67, 'ABD. KHOIRI', '', '', 3222, 'JURU MUDI', 3, 'aktif'),
(68, 'RIFKI YUDHA H.', '', '', 3223, 'JURU MINYAK', 3, 'aktif'),
(69, 'AANG FARHAN R.', '', '', 3224, 'JURU MINYAK', 3, 'aktif'),
(70, 'RISKY MULYANTO', '', '', 3225, 'JURU MINYAK', 3, 'aktif'),
(71, 'FREEDY JOKO P.', '', '', 3226, 'KELASI', 3, 'aktif'),
(72, 'ANAM', '', '', 3227, 'KELASI', 3, 'aktif'),
(73, 'ERIK SETIAWAN', '', '', 3228, 'KELASI', 3, 'aktif'),
(74, 'ANDI DWI PURNOMO', '', '', 3229, 'KELASI', 3, 'aktif'),
(75, 'PUTU ARDANA', '', '', 3230, 'KELASI', 3, 'aktif'),
(76, 'ADE MUHAMMAD ILHAM', '', '', 3311, 'NAHKODA', 4, 'aktif'),
(77, 'MOHAMMAD SOLEH', '', '', 3312, 'MUALIM 1', 4, 'aktif'),
(78, 'DIDIK SUCIPTO', 'KETAPANG', '', 3313, 'MUALIM 1', 4, 'aktif'),
(79, 'FEBRA DIMAS A.', '', '', 3314, 'MUALIM 2', 4, 'aktif'),
(80, 'BUDI ARI YANTO', '', '', 3315, 'MARCHONIST', 4, 'aktif'),
(81, 'HENDRO MURSENO', '', '', 3316, 'KKM', 4, 'aktif'),
(82, 'ARIF BIJAKSANA', '', '', 3317, 'KKM', 4, 'aktif'),
(83, 'DWI SUHERTANTO', '', '', 3318, 'MASINIS 1', 4, 'aktif'),
(84, 'YUDIANTO', '', '', 3319, 'MASINIS 2', 4, 'aktif'),
(85, 'IWAN SUGIANTO', '', '', 3320, 'SERANG', 4, 'aktif'),
(86, 'I PUTU ARI GUNARTA', '', '', 3321, 'JURU MUDI', 4, 'aktif'),
(87, 'MOH. IMAM NURHOLIS', '', '', 3322, 'JURU MUDI', 4, 'aktif'),
(88, 'AGUS JOKO PRAKOSO', '', '', 3323, 'JURU MUDI', 4, 'aktif'),
(89, 'LASMONO', '', '', 3324, 'JURU MUDI', 4, 'aktif'),
(90, 'SAHINA', '', '', 3325, 'JURU MINYAK', 4, 'aktif'),
(91, 'SUWANTONO', '', '', 3326, 'JURU MINYAK', 4, 'aktif'),
(92, 'MUH. FATHUR ROZAK', '', '', 3327, 'JURU MINYAK', 4, 'aktif'),
(93, 'FENDY DWI SANJAYA', '', '', 3328, 'JURU MINYAK', 4, 'aktif'),
(94, 'FREDDY JOKO P.', '', '', 3329, 'KELASI', 4, 'aktif'),
(95, 'VICKY DWI KURNIAWAN', '', '', 3330, 'KELASI', 4, 'aktif'),
(96, 'FIRMAN TAUFIQ SIDDIQ', '', '', 3331, 'KELASI', 4, 'aktif'),
(97, 'TRI OKTA ARIFIANTO', '', '', 3332, 'KELASI', 1014, 'aktif'),
(98, 'AGUS EKO P.', '', '', 3333, 'KELASI', 4, 'aktif'),
(99, 'ABD. KHOIRI', '', '', 3334, 'KELASI', 4, 'aktif'),
(100, 'RAHMAD HIDAYAT', '', '', 3411, 'NAHKODA', 5, 'aktif'),
(101, 'SINGGIH ARIYONO', '', '', 3412, 'NAHKODA', 5, 'aktif'),
(102, 'SANDI SANTOSO', '', '', 3413, 'MUALIM 1', 5, 'aktif'),
(103, 'AFRIAN ADI MIRNANDO', '', '', 3414, 'MUALIM 1', 5, 'aktif'),
(104, 'SLAMET BASUKI', '', '', 3415, 'MUALIM 2', 5, 'aktif'),
(105, 'YUYUT ISMANTO', '', '', 3416, 'MUALIM 2', 5, 'aktif'),
(106, 'SIAD DEOMA KARUNIA', '', '', 3417, 'KKM', 5, 'aktif'),
(107, 'ISWANTO', '', '', 3418, 'KKM', 5, 'aktif'),
(108, 'MAMET HARIYANTO', '', '', 3419, 'MASINIS 1', 5, 'aktif'),
(109, 'FAHRUR ROZI', '', '', 3420, 'MASINIS 1', 5, 'aktif'),
(110, 'LINGGA MARTA WIJAYA', '', '', 3421, 'MASINIS 2', 5, 'aktif'),
(111, 'RENDY WAHYU PRADANA', '', '', 3422, 'MASINIS 2', 5, 'aktif'),
(112, 'DEN BAGUS ABDUL L. ', '', '', 3423, 'SERANG', 5, 'aktif'),
(113, 'RIAN OKTA PURNAMA', '', '', 3424, 'JURU MUDI', 5, 'aktif'),
(114, 'WAHYU HASANI', '', '', 3425, 'JURU MUDI', 5, 'aktif'),
(115, 'ARIZONA LAZUARDI', '', '', 3426, 'JURU MUDI', 5, 'aktif'),
(116, 'ABDULLAH WASIAN', '', '', 3427, 'JURU MUDI', 5, 'aktif'),
(117, 'M. HARIYANTO', '', '', 3428, 'JURU MINYAK', 5, 'aktif'),
(118, 'ACHMAD ZIDNI  SANTOSO', '', '', 3429, 'JURU MINYAK', 5, 'aktif'),
(119, 'AGUS HARIYANTO', '', '', 3430, 'JURU MINYAK', 5, 'aktif'),
(120, 'JEMMY WICAKSONO', '', '', 3431, 'JURU MINYAK', 5, 'aktif'),
(121, 'PURWANTO', '', '', 3432, 'KELASI', 5, 'aktif'),
(122, 'MOCHAMMAD ZAKKI F.', '', '', 3433, 'KELASI', 5, 'aktif'),
(123, 'FERDI FAHRURROHMAN', '', '', 3434, 'KELASI', 5, 'aktif'),
(124, 'BENI PURNOMO', '', '', 3435, 'KELASI', 5, 'aktif'),
(125, 'SLAMET', '', '', 3436, 'KELASI', 5, 'aktif'),
(126, 'IMAM IRAWAN', '', '', 3437, 'KELASI', 5, 'aktif'),
(127, 'DIAN ANDRIYANTO', '', '', 3438, 'KELASI', 5, 'aktif'),
(128, 'YUDI KURNIAWAN', '', '', 3439, 'KELASI', 5, 'aktif'),
(129, 'SRIWIYONO', '', '', 3511, 'NAHKODA', 6, 'aktif'),
(130, 'INDO FRIDIANSYAH', '', '', 3512, 'NAHKODA', 6, 'aktif'),
(131, 'SUNARTO', '', '', 3513, 'MUALIM 1', 6, 'aktif'),
(132, 'MARSIH AINDI', '', '', 3514, 'MUALIM 1', 6, 'aktif'),
(133, 'ARIF AFRIDE BAHTIAR', '', '', 3515, 'MUALIM 2', 6, 'aktif'),
(134, 'RIGEL PUTRA PRAYOGI', 'BANYUWANGI', '', 3516, 'MUALIM 2', 6, 'aktif'),
(135, 'WAHYU WIDHIARTO', '', '', 3517, 'MARCHONIST', 6, 'aktif'),
(136, 'LUKMAN HADI S. ', '', '', 3518, 'KKM', 6, 'aktif'),
(137, 'GHOFUR KURNIAWAN', '', '', 3519, 'KKM', 6, 'aktif'),
(138, 'HADI PRIYANTO', '', '', 3520, 'MASINIS 1', 6, 'aktif'),
(139, 'M. ISHAK', '', '', 3521, 'MASINIS 1', 6, 'aktif'),
(140, 'RONI PAMUNGKAS', '', '', 3522, 'MASINIS 2', 6, 'aktif'),
(141, 'RIFA\'I ANDHIKA PUTRA', '', '', 3523, 'MASINIS 2', 6, 'aktif'),
(142, 'MUHAMMAD YOPI', '', '', 3524, 'JURU MUDI', 6, 'aktif'),
(143, 'ACH. AINUL YAQIN', '', '', 3525, 'JURU MUDI', 6, 'aktif'),
(144, 'BUSA\'IT', '', '', 3526, 'JURU MUDI', 6, 'aktif'),
(145, 'MUHAMMAD IMAM M.', '', '', 3527, 'JURU MUDI', 6, 'aktif'),
(146, 'ZANWAR RIZAL', '', '', 3528, 'KELASI', 6, 'aktif'),
(147, 'INDRA ARIF', '', '', 3529, 'KELASI', 6, 'aktif'),
(148, 'RAGIL PUTRA AGUSTIAN', '', '', 3530, 'KELASI', 6, 'aktif'),
(149, 'EDI SUSANTO', '', '', 3531, 'KELASI', 6, 'aktif'),
(150, 'ANAK AGUNG', '', '', 3532, 'KELASI', 6, 'aktif'),
(151, 'KIKY STYO PURNOMO', '', '', 3533, 'KELASI', 6, 'aktif'),
(152, 'DIDIN EDY PURNOMO', '', '', 3534, 'JURU MINYAK', 6, 'aktif'),
(153, 'M. ULLUL ADZMI', '', '', 3535, 'JURU MINYAK', 6, 'aktif'),
(154, 'SANDI FIRMANSYAH', '', '', 3536, 'JURU MINYAK', 6, 'aktif'),
(155, 'HADI SANTOSO', '', '', 3537, 'JURU MINYAK', 6, 'aktif'),
(156, 'Rio Febrian', 'Jln.Raya Galekan Bajulmati', '+6285335521042', 3011, 'Permesinan Kapal', 5, 'aktif'),
(157, 'okkkkk', 'jln bajulmati', '085335521041', 3011, 'Nahkoda', 1, 'aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ijazah`
--

CREATE TABLE `ijazah` (
  `id` int(10) NOT NULL,
  `nama_ijazah` varchar(50) NOT NULL,
  `no_ijazah` varchar(50) NOT NULL,
  `diterbitkan_oleh` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ijazah`
--

INSERT INTO `ijazah` (`id`, `nama_ijazah`, `no_ijazah`, `diterbitkan_oleh`) VALUES
(3011, 'ANT III MANAJEMEN', '6202078919M39217', 'DEPHUBLA'),
(3012, 'ANT III MANAJEMEN', '6201395380M30517', 'DEPHUBLA'),
(3013, 'ANT IV MANAJEMEN', '6200036067M40516', 'DEPHUBLA'),
(3014, 'ANT IV 1', '62000566990N40512', 'DEPHUBLA'),
(3015, 'ANT V MANAJEMEN', '6200097681M50517', 'DEPHUBLA'),
(3016, 'ANT V MANAJEMEN', '6200095494M50516', 'DEPHUBLA'),
(3017, 'ATT III MANAJEMEN', '6200572733T30516', 'DEPHUBLA'),
(3018, 'ATT III ', '6201321731T30316', 'DEPHUBLA'),
(3019, 'ATT IV MANAJEMEN', '6200035171S40517', 'DEPHUBLA'),
(3020, 'ATT IV MANAJEMEN', '6202079227T30515', 'DEPHUBLA'),
(3021, 'ATT V MANAJEMEN', '6200511201S50516', 'DEPHUBLA'),
(3022, 'ATT V MANAJEMEN', '6200508537S50516', 'DEPHUBLA'),
(3023, 'ABLE', '6200043803340517', 'DEPHUBLA'),
(3024, 'ABLE', '6200126174340717', 'DEPHUBLA'),
(3025, 'ANT V', '6200510115N60502', 'DEPHUBLA'),
(3026, 'ABLE', '6200351032340516', 'DEPHUBLA'),
(3027, 'ABLE', '6200043922340516', 'DEPHUBLA'),
(3028, 'ABLE', '6200116308420516', 'DEPHUBLA'),
(3029, 'ABLE', '6201020611420216', 'DEPHUBLA'),
(3030, 'ABLE', '6210131874420516', 'DEPHUBLA'),
(3031, 'ABLE', '6201592677420516', 'DEPHUBLA'),
(3032, 'RATING', '6200118178352414', 'DEPHUBLA'),
(3033, 'RATING', '6201349827330514', 'DEPHUBLA'),
(3034, 'ABLE', '6201099531340516', 'DEPHUBLA'),
(3035, 'ABLE', '6201498855N60512', 'DEPHUBLA'),
(3036, 'ABLE', '6202103516330715', 'DEPHUBLA'),
(3037, 'ANT IV ', '6211429942350716', 'DEPHUBLA'),
(3038, 'ABLE', '6200510113N60502', 'DEPHUBLA'),
(3039, 'ABLE', '6200522669N60507', 'DEPHUBLA'),
(3111, 'ANT III MANAJEMEN', '6201506534M30516', 'DEPHUBLA'),
(3112, 'ANT III MANAJEMEN', '6201461159M30515', 'DEPHUBLA'),
(3113, 'ANT IV MANAJEMEN', '', 'DEPHUBLA'),
(3114, 'ANT V MANAJEMEN', '6200118966M40517', 'DEPHUBLA'),
(3115, 'ANT V MANAJEMEN', '6200407376M50516', 'DEPHUBLA'),
(3116, 'ANT V MANAJEMEN', '6200504592M50117', 'DEPHUBLA'),
(3117, 'ATT IV MANAJEMEN', '6201026869S40315', 'DEPHUBLA'),
(3118, 'ATT IV MANAJEMEN', '6200148711S40517', 'DEPHUBLA'),
(3119, 'ATT IV', '6201016023T40516', 'DEPHUBLA'),
(3120, 'ATT V MANAJEMEN', '6200321445S60516', 'DEPHUBLA'),
(3121, 'ATT V MANAJEMEN', '6200088172S50516', 'DEPHUBLA'),
(3122, 'ATT V MANAJEMEN', '6200138751S50516', 'DEPHUBLA'),
(3123, 'RATING', '6200099473340517', 'DEPHUBLA'),
(3124, 'RATING', '6200508985340517', 'DEPHUBLA'),
(3125, 'ANT V', '6201038311N50514', 'DEPHUBLA'),
(3126, 'ANT V', '6201038315N50514', 'DEPHUBLA'),
(3127, 'RATING', '6211420469330715', 'DEPHUBLA'),
(3128, 'RATING', '', 'DEPHUBLA'),
(3129, 'RATING', '6201409566420516', 'DEPHUBLA'),
(3130, 'RATING', '6201472718420517', 'DEPHUBLA'),
(3131, 'RATING', '6201654654420517', 'DEPHUBLA'),
(3132, 'RATING', '6200470482340516', 'DEPHUBLA'),
(3133, 'RATING', '6200397107N60709', 'DEPHUBLA'),
(3134, 'RATING', '6201475797340717', 'DEPHUBLA'),
(3135, 'RATING', '6200508517420717', 'DEPHUBLA'),
(3136, 'RATING', '', 'DEPHUBLA'),
(3137, 'RATING', '6200099473340517', 'DEPHUBLA'),
(3211, 'ANT III MANAJEMEN', '6201654265M30317', 'DEPHUBLA'),
(3212, 'ANT IV MANAJEMEN', '6200601120M40317', 'DEPHUBLA'),
(3213, 'ANT IV', '6200424256N40518', 'DEPHUBLA'),
(3214, 'SOU', '47261/SOU/X/2015', 'DEPHUBLA'),
(3215, 'ATT III MANAJEMEN', '6200521309S30517', 'DEPHUBLA'),
(3216, 'ATT III MANAJEMEN', '6200567037S30318', 'DEPHUBLA'),
(3217, 'ATT IV MANAJEMEN', '6201507796S40516', 'DEPHUBLA'),
(3218, 'ATT IV', '6200360945T40518', 'DEPHUBLA'),
(3219, 'ANT V MANAJEMEN', '6201021227M50516', 'DEPHUBLA'),
(3220, 'ABLE', '6201699618340517', 'DEPHUBLA'),
(3221, 'ABLE', '6201392099340517', 'DEPHUBLA'),
(3222, 'ABLE', '6211431110340717', 'DEPHUBLA'),
(3223, 'ABLE', '6211605745350517', 'DEPHUBLA'),
(3224, 'ABLE', '6211545635350716', 'DEPHUBLA'),
(3225, 'ABLE', '6201343876420717', 'DEPHUBLA'),
(3226, 'ABLE', '6200125785340517', 'DEPHUBLA'),
(3227, 'RATING', '6211727881330517', 'DEPHUBLA'),
(3228, 'RATING', '6211736084330717', 'DEPHUBLA'),
(3229, 'RATING', '6211354707330217', 'DEPHUBLA'),
(3230, 'RATING', '6202090556330516', 'DEBHUBLA'),
(3411, 'ANT III ', '6200101818M3016', 'DEPHUBLA'),
(3412, 'ANT III', '6201654316N30316', 'DEPHUBLA'),
(3413, 'ANT IV', '6200102287M40516', 'DEPHUBLA'),
(3414, 'ANT IV ', '6200346578N40515', 'DEPHUBLA'),
(3415, 'ANT V', '6201575433N50216', 'DEPHUBLA'),
(3416, 'ANT V', '6200407114N50515', 'DEPHUBLA'),
(3417, 'ATT III', '6201039933S30516', 'DEPHUBLA'),
(3418, 'ATT III', '6200505695S30515', 'DEPHUBLA'),
(3419, 'ATT IV', '6201020628T40309', 'DEPHUBLA'),
(3420, 'ATT IV', '6200094443T40515', 'DEPHUBLA'),
(3421, 'ATT V', '6200192735T50513', 'DEPHUBLA'),
(3422, 'ATT V', '6201026172T40515', 'DEPHUBLA'),
(3423, 'ABLE', '6201349727330510', 'DEPHUBLA'),
(3424, 'ABLE', '62011585605N60512', 'DEPHUBLA'),
(3425, 'RATING', '6201332593N60712', 'DEPHUBLA'),
(3426, 'RATING', '6201354717330210', 'DEPHUBLA'),
(3427, 'ABLE', '6201590998N60711', 'DEPHUBLA'),
(3428, 'ABLE', '6200252295T60709', 'DEPHUBLA'),
(3429, 'RATING', '6211408729352410', 'DEPHUBLA'),
(3430, 'ABLE', '6201349693T60713', 'DEPHUBLA'),
(3431, 'RATING', '620213247135051', 'DEPHUBLA'),
(3432, 'RATING', '6201457699N60712', 'DEPHUBLA'),
(3433, 'ABLE', '6201578023340517', 'DEPHUBLA'),
(3434, 'RATING', '62101354719330200', 'DEPHUBLA'),
(3435, 'RATING', '6202079564332410', 'DEPHUBLA'),
(3436, 'RATING', '6202079690332410', 'DEPHUBLA'),
(3437, 'RATING', '6200407179N60304', 'DEPHUBLA'),
(3438, 'RATING', '6201463491N60711', 'DEPHUBLA'),
(3439, 'ABLE', '6201332593340517', 'DEPHUBLA'),
(3311, 'ANT III', '6202078900M30517', 'DEPHUBLA'),
(3312, 'ANT III', '6200044393M30517', 'DEPHUBLA'),
(3313, 'ANT IV', '6200073948M40517', 'DEPHUBLA'),
(3314, 'ANT IV', '6200353112M40517', 'DEPHUBLA'),
(3315, 'SOU', '65060/SOU/T/I/2018', 'DEPHUBLA'),
(3316, 'ATT III', '62000115962S30216', 'DEPHUBLA'),
(3317, 'ATT III', '6200155032S30418', 'DEPHUBLA'),
(3318, 'ATT IV', '6200404985S40516', 'DEPHUBLA'),
(3319, 'ATT IV', '6201505911S40517', 'DEPHUBLA'),
(3320, 'ANT V', '6201580489N50516', 'DEPHUBLA'),
(3321, 'ABLE', '6201660959340516', 'DEPHUBLA'),
(3322, 'ANT V', '6201097907N50516', 'DEPHUBLA'),
(3323, 'ANT V', '6201354355N50517', 'DEPHUBLA'),
(3324, 'ABLE', '6200320039340717', 'DEPHUBLA'),
(3325, 'ATT V', '6200543157S5O516', 'DEPHUBLA'),
(3326, 'ABLE', '6211415645420517', 'DEPHUBLA'),
(3327, 'ABLE', '6202007782420517', 'DEPHUBLA'),
(3328, 'ABLE', '6202092653420517', 'DEPHUBLA'),
(3329, 'RATING', '6200125785340517', 'DEPHUBLA'),
(3330, 'RATING', '6211446198330516', 'DEPHUBLA'),
(3331, 'RATING', '6211566500330516', 'DEPHUBLA'),
(3332, 'RATING', '6202193344330515', 'DEPHUBLA'),
(3333, 'ABLE', '6202011213340717', 'DEPHUBLA'),
(3334, 'RATING', '6211431110330716', 'DEPHUBLA'),
(3511, 'ANT III MANAJEMEN 2', '6200355263N30311', 'DEPHUBLA'),
(3512, 'ANT III MANAJEMEN', '6293298747M80817', 'DEPHUBLA'),
(3513, 'ANT IV', '6200036775M40316', 'DEPHUBLA'),
(3514, 'ANT III MANAJEMEN', '5200598872M3030', 'DEPHUBLA'),
(3515, 'ANT IV MANAJEMEN', '621141005G10217', 'DEPHUBLA'),
(3516, 'ANT III', '6211410054G10217', 'DEPHUBLA'),
(3517, 'SOU', '6200098606', 'DEPHUBLA'),
(3518, 'ATT III ', '6202005244T30316', 'DEPHUBLA'),
(3519, 'ATT III', '6202079227S30517', 'DEPHUBLA'),
(3520, 'ATT IV', '6200508520T40516', 'DEPHUBLA'),
(3521, 'ATT IV', '6200132961S40317', 'DEPHUBLA'),
(3522, 'ATT IV', '6200509697S40517', 'DEPHUBLA'),
(3523, 'ATT III', '6211409126T30517', 'DEPHUBLA'),
(3524, 'ABLE', '6201347929340517', 'DEPHUBLA'),
(3525, 'ABLE', '6202109278340717', 'DEPHUBLA'),
(3526, 'ANT V', '6200154387M50516', 'DEPHUBLA'),
(3527, 'ANT V', '6200073909M50516', 'DEPHUBLA'),
(3528, 'ABLE', '6202191025330215', 'DEPHUBLA'),
(3529, 'ABLE', '6211425450340517', 'DEPHUBLA'),
(3530, 'ABLE', '6202081323340517', 'DEPHUBLA'),
(3531, 'RATING', '6211554834330716', 'DEPHUBLA'),
(3532, 'RATING', '6303113066832418', 'DEPHUBLA'),
(3533, 'RATING', '6201403811332415', 'DEPHUBLA'),
(3534, 'RATING', '6200423818T00305', 'DEPHUBLA'),
(3535, 'ABLE', '6200364432420516', 'DEPHUBLA'),
(3536, 'RATING', '6202092581350715', 'DEPHUBLA'),
(3537, 'ATT V', '620147073150517', 'DEPHUBLA'),
(4611, 'ANT III MANAJEMEN', '6201041312M30215', 'DEPHUBLA'),
(4612, 'ANT III MANAJEMEN', '620001867M30517', 'DEPHUBLA'),
(4613, 'ANT IV ', '6201024584M40517', 'DEPHUBLA'),
(4614, 'ANT IV ', '6200095478N40517', 'DEPHUBLA'),
(4615, 'ATT III', '6200008589S30517', 'DEPHUBLA'),
(4616, 'ATT III', '6201007497530317', 'DEPHUBLA'),
(4617, 'ATT IV', '6200087281S40516', 'DEPHUBLA'),
(4618, 'ATT IV', '6200129387T40517', 'DEPHUBLA'),
(4619, 'ABLE', '6201333468340517', 'DEPHUBLA'),
(4620, 'ATT V', '6201459516N50515', 'DEPHUBLA'),
(4621, 'ATT V', '6201457680N50515', 'DEPHUBLA'),
(4622, 'ANT V', '6201491955N50216', 'DEPHUBLA'),
(4623, 'ABLE', '6201318777340517', 'DEPHUBLA'),
(4624, 'ATT V', '6201590050T50515', 'DEPHUBLA'),
(4625, 'ATT V', '6200118955S50516', 'DEPHUBLA'),
(4626, 'ABLE', '6202092654420517', 'DEPHUBLA'),
(4627, 'RATING', '6211745079350518', 'DEPHUBLA'),
(4628, 'RATING', '6200565636340516', 'DEPHUBLA'),
(4629, 'ABLE', '6200389459340517', 'DEPHUBLA'),
(4630, 'RATING', '6211438580330515', 'DEPHUBLA'),
(4631, 'RATING', '6202109299332414', 'DEPHUBLA'),
(4632, 'RATING', '6211614616330517', 'DEPHUBLA'),
(4633, 'RATING', '6200426242340517', 'DEPHUBLA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurumudi`
--

CREATE TABLE `jurumudi` (
  `id_jurumudi` int(10) NOT NULL,
  `nik` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `nomor_hp` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `id_kapal` int(10) NOT NULL,
  `id_nahkoda` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jurumudi`
--

INSERT INTO `jurumudi` (`id_jurumudi`, `nik`, `nama`, `alamat`, `nomor_hp`, `password`, `id_kapal`, `id_nahkoda`) VALUES
(13, 20015, 'suharyono', 'srono', '082338871081', 'yono123', 1, 2),
(14, 20017, 'nawawi', 'ketapang', '081336789087', 'nawawi123', 1, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kapal`
--

CREATE TABLE `kapal` (
  `id` int(10) NOT NULL,
  `nama_kapal` varchar(50) NOT NULL,
  `kebangsaan` varchar(30) NOT NULL,
  `imo` int(20) NOT NULL,
  `grosstons` varchar(30) NOT NULL,
  `tanda_panggilan` varchar(30) NOT NULL,
  `jumlah_abk` varchar(30) NOT NULL,
  `panjang` varchar(30) NOT NULL,
  `lebar` varchar(30) NOT NULL,
  `jenis_kapal` varchar(30) NOT NULL,
  `tahun_pembuatan` varchar(30) NOT NULL,
  `nama_agen` varchar(50) NOT NULL,
  `status` enum('operasi','tidak') NOT NULL DEFAULT 'operasi'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kapal`
--

INSERT INTO `kapal` (`id`, `nama_kapal`, `kebangsaan`, `imo`, `grosstons`, `tanda_panggilan`, `jumlah_abk`, `panjang`, `lebar`, `jenis_kapal`, `tahun_pembuatan`, `nama_agen`, `status`) VALUES
(1, 'KMP. TRISNA DWITYA', 'INDONESIA', 7397294, '942 TONS', 'PLUT', '29 ORANG', '52.92 METER', '14.40 METER', 'RO-RO', '1989', 'PT. LINTAS SARANA NUSANTARA', 'operasi'),
(2, 'KMP. SMS SWAKARYA', 'INDONESIA', 8981573, '785 TONS', 'YFTB', '27 ORANG', '47.33 METER', '13.72 METER', 'RO-RO', '1997', 'PT. LINTAS SARANA NUSANTARA', 'operasi'),
(3, 'KMP. JAMBO VI', 'INDONESIA', 8742800, '841 TONS', 'PNCB', '24 ORANG', '74 METER', '14 METER', 'RO-RO', '2008', 'PT. DUTA BAHARI MENARA LINE', 'operasi'),
(4, 'KMP. KARYA MARITIM II', 'INDONESIA', 8691013, '922 TONS', 'JZHT', '29 ORANG', '61.20 METER', '52.03 METER', 'RO-RO', '2013', 'PT. KARYA MARITIM INDONESIA', 'operasi'),
(5, 'KMP. AGUNG SAMUDRA IX', 'INDONESIA', 9772424, '1.171 TONS', 'PLMX', '27 ORANG', '81.05 METER', '14.05 METER', 'RO-RO', '2016', 'PT. PELAYARAN AGUNG SAMUDRA', 'operasi'),
(6, 'KMP. AGUNG SAMUDRA XVIII', 'INDONESIA', 9772424, '2.319 TONS ', 'PLMX', '27 ORANG', '69.50 METER', '15.20 METER', 'RO-RO', '2013', 'PT. PELAYARAN AGUNG SAMUDRA', 'operasi'),
(7, 'KMP. TRISAKTI ELFINA', 'INDONESIA', 9482328, '721 TONS', 'PMID', '27 ORANG', '61.10 METER', '13.50 METER', 'RO-RO', '2007', 'PT. TRI SAKTI LAUTAN MAS', 'operasi'),
(8, 'KMP. TRISAKTI ADINDA', 'INDONESIA', 8736899, '1008 TONS', 'YDKF', '28 ORANG', '59 METER', '13,50 METER', 'RO-RO', '2005', 'PT. TRI SAKTI LAUTAN MAS', 'operasi'),
(9, 'KMP. LIPUTAN XII', 'INDONESIA', 8524272, '1.221 TONS', 'YCBK2', '23 ORANG', '76.49 METER', '64.84 METER', 'RO-RO', '2005', 'PT. SEGARA LUAS SUKSES ABADI', 'operasi'),
(10, 'KMP. JAMBO X', 'INDONESIA', 9838979, '1346 TONS', 'YBXT2', '24 ORANG', '62.45 METER', '15 METER', 'RO-RO', '2017', 'PT. DUTA BAHARI MENARA LINE', 'operasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` int(11) NOT NULL,
  `id_manifest` varchar(11) NOT NULL,
  `id_pemenuhan_kewajiban` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `laporan`
--

INSERT INTO `laporan` (`id_laporan`, `id_manifest`, `id_pemenuhan_kewajiban`) VALUES
(2, '2', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_kapal_tiba_berangkat`
--

CREATE TABLE `laporan_kapal_tiba_berangkat` (
  `id_tiba_berangkat` int(10) NOT NULL,
  `id_nahkoda` int(10) NOT NULL,
  `trip_ke` int(11) NOT NULL,
  `id_kapal` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `jam_tiba` time NOT NULL,
  `jumlah_abkkapal` int(11) NOT NULL,
  `jumlah_perwirakapal` int(11) NOT NULL,
  `draft_kapal` varchar(30) NOT NULL,
  `lokasi_labuh` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `laporan_kapal_tiba_berangkat`
--

INSERT INTO `laporan_kapal_tiba_berangkat` (`id_tiba_berangkat`, `id_nahkoda`, `trip_ke`, `id_kapal`, `tanggal`, `jam_tiba`, `jumlah_abkkapal`, `jumlah_perwirakapal`, `draft_kapal`, `lokasi_labuh`) VALUES
(1, 2, 2, 1, '2019-08-22', '13:00:00', 6, 8, '2 meter', 'ketapang'),
(2, 1, 3, 1, '2019-07-22', '08:00:00', 5, 6, '2 meter', 'ketapang'),
(3, 1, 3, 1, '2019-06-22', '08:00:00', 5, 6, '2 meter', 'ketapang'),
(4, 1, 8, 1, '2019-05-22', '08:00:00', 5, 6, '2 meter', 'ketapang'),
(5, 1, 4, 1, '2019-04-22', '08:00:00', 5, 6, '2 meter', 'ketapang'),
(6, 1, 7, 1, '2019-03-22', '08:00:00', 5, 6, '2 meter', 'ketapang'),
(7, 1, 9, 1, '2019-02-22', '08:00:00', 5, 6, '2 meter', 'ketapang'),
(8, 1, 10, 1, '2019-01-22', '08:00:00', 5, 6, '2 meter', 'ketapang'),
(9, 1, 2, 1, '2019-09-22', '08:00:00', 5, 6, '2 meter', 'ketapang'),
(10, 1, 4, 1, '2019-10-22', '08:00:00', 5, 6, '2 meter', 'ketapang'),
(11, 1, 5, 1, '2019-11-22', '08:00:00', 5, 6, '2 meter', 'ketapang'),
(12, 1, 1, 1, '2019-12-22', '08:00:00', 5, 6, '2 meter', 'ketapang'),
(15, 2, 1, 1, '2019-09-06', '21:19:00', 15, 4, '2 metet', 'Ketapang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasi_labuh`
--

CREATE TABLE `lokasi_labuh` (
  `id_lokasi_labuh` int(10) NOT NULL,
  `longitude` varchar(100) NOT NULL,
  `latitude` varchar(100) NOT NULL,
  `gambar_labuh` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lokasi_labuh`
--

INSERT INTO `lokasi_labuh` (`id_lokasi_labuh`, `longitude`, `latitude`, `gambar_labuh`) VALUES
(1, '114.2831312', '-8.2990849', ''),
(9, '114.3073234', '-8.2941773', 'FB_IMG_1550355830486.jpg'),
(8, '114.3074295', '-8.2943751', 'Screenshot_20190519-184848_YouTube.jpg'),
(7, '114.3072242', '-8.2941908', 'TAPSCANNER_20190228_162821_84.jpg'),
(10, 'null', 'null', 'crop_image.jpg'),
(11, '114.3073234', '-8.2941773', 'crop_image.jpg'),
(12, '114.2908317', '-8.3193011', 'FB_IMG_1558183479080.jpg'),
(13, '114.2908317', '-8.3193011', 'FB_IMG_1558183479080.jpg'),
(14, '114.290564', '-8.3187223', 'FB_IMG_1558183479080.jpg'),
(15, '114.2908317', '-8.3193011', 'FB_IMG_1558183479080.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasi_pelabuhan`
--

CREATE TABLE `lokasi_pelabuhan` (
  `id` int(11) NOT NULL,
  `lokasi` enum('Ketapang','Gilimanuk') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lokasi_pelabuhan`
--

INSERT INTO `lokasi_pelabuhan` (`id`, `lokasi`) VALUES
(1, 'Ketapang'),
(2, 'Gilimanuk');

-- --------------------------------------------------------

--
-- Struktur dari tabel `manifest_penumpang`
--

CREATE TABLE `manifest_penumpang` (
  `id_manifest` int(11) NOT NULL,
  `id_kapal` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_penumpang` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `umur` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `manifest_penumpang`
--

INSERT INTO `manifest_penumpang` (`id_manifest`, `id_kapal`, `tanggal`, `nama_penumpang`, `alamat`, `umur`, `jenis_kelamin`) VALUES
(1, 1, '2019-08-14', 'Rizky', 'Kalibaru', '18 Tahun', 'L'),
(2, 1, '2019-09-06', 'tito', 'rgj', '17', 'Laki-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mjurumudi`
--

CREATE TABLE `mjurumudi` (
  `id` int(11) NOT NULL,
  `NIK` int(11) NOT NULL,
  `nama_jurumudi` varchar(100) NOT NULL,
  `id_kapal` int(11) NOT NULL,
  `id_nahkoda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mjurumudi`
--

INSERT INTO `mjurumudi` (`id`, `NIK`, `nama_jurumudi`, `id_kapal`, `id_nahkoda`) VALUES
(1, 20011, 'MUHAMMAD YOPI', 6, 1),
(2, 20012, 'ACH. AINUL YAQIN', 6, 7),
(3, 20013, 'BUSA\\\'IT', 6, 3),
(4, 20014, 'MUHAMMAD IMAM M.', 6, 4),
(5, 20015, 'SUHARYONO', 1, 5),
(6, 20016, 'ARIF MUNANDAR', 1, 6),
(7, 20017, 'NAWAWI', 1, 2),
(8, 20018, 'GEDE OKA SANTOSA', 2, 8),
(9, 20019, 'ACH MUZAKKY', 2, 9),
(10, 20020, 'RANDI AZMI', 2, 10),
(11, 20021, 'HARIYADI', 3, 11),
(12, 20022, 'FAJAR DWI SANTOSO', 3, 12),
(13, 20023, 'ABD. KHOIRI', 3, 13),
(14, 20024, 'LASMONO', 4, 14),
(15, 20025, 'RIAN OKTA PURNAMA', 5, 15),
(16, 20026, 'WAHYU HASANI', 5, 16),
(17, 20027, 'ARIZONA LAZUARDI', 5, 17),
(18, 20028, 'ABDULLAH WASIAN', 5, 18);

-- --------------------------------------------------------

--
-- Struktur dari tabel `muatan`
--

CREATE TABLE `muatan` (
  `id` int(11) NOT NULL,
  `id_kapal` int(11) NOT NULL,
  `id_nahkoda` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `truck_besar` int(11) NOT NULL,
  `truck_trailer` int(11) NOT NULL,
  `bus_besar` int(11) NOT NULL,
  `bus_mini` int(11) NOT NULL,
  `kendaraan_keluarga` int(11) NOT NULL,
  `sepeda_motor` int(11) NOT NULL,
  `jumlah_muatan` int(11) NOT NULL,
  `truck_sedang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `muatan`
--

INSERT INTO `muatan` (`id`, `id_kapal`, `id_nahkoda`, `tanggal`, `truck_besar`, `truck_trailer`, `bus_besar`, `bus_mini`, `kendaraan_keluarga`, `sepeda_motor`, `jumlah_muatan`, `truck_sedang`) VALUES
(1, 1, 2, '2019-07-23', 5, 5, 5, 5, 5, 5, 35, 5),
(2, 1, 2, '2018-07-22', 3, 3, 3, 3, 3, 3, 21, 3),
(4, 1, 2, '2019-08-22', 4, 3, 7, 6, 8, 5, 37, 4),
(5, 1, 2, '2019-09-18', 5, 5, 5, 5, 5, 5, 45, 5),
(6, 1, 2, '2019-10-16', 3, 3, 3, 3, 3, 3, 21, 3),
(7, 1, 2, '2019-11-22', 4, 3, 3, 6, 5, 5, 55, 3),
(8, 1, 2, '2019-12-22', 4, 3, 3, 6, 5, 5, 55, 3),
(9, 1, 2, '2019-01-22', 4, 3, 3, 6, 5, 5, 65, 3),
(10, 1, 2, '2019-02-22', 4, 3, 3, 6, 5, 5, 35, 3),
(11, 1, 2, '2019-03-22', 4, 3, 3, 6, 5, 5, 60, 3),
(12, 1, 2, '2019-04-22', 4, 3, 3, 6, 5, 5, 48, 3),
(13, 1, 2, '2019-05-22', 4, 3, 3, 6, 5, 5, 30, 3),
(14, 1, 2, '2019-06-22', 4, 3, 3, 6, 5, 5, 50, 3),
(15, 2, 2, '2019-07-23', 5, 5, 5, 5, 5, 5, 42, 5),
(16, 2, 2, '2018-07-22', 3, 3, 3, 3, 3, 3, 32, 3),
(17, 2, 2, '2019-07-26', 5, 5, 5, 5, 5, 5, 35, 5),
(18, 2, 2, '2019-08-22', 4, 3, 7, 6, 8, 5, 39, 4),
(19, 2, 2, '2019-09-18', 5, 5, 5, 5, 5, 5, 45, 5),
(20, 2, 2, '2019-10-16', 3, 3, 3, 3, 3, 3, 21, 3),
(21, 2, 2, '2019-11-22', 4, 3, 3, 6, 5, 5, 53, 3),
(22, 2, 2, '2019-12-22', 4, 3, 3, 6, 5, 5, 55, 3),
(23, 2, 2, '2019-01-22', 4, 3, 3, 6, 5, 5, 61, 3),
(24, 2, 2, '2019-02-22', 4, 3, 3, 6, 5, 5, 35, 3),
(25, 2, 2, '2019-03-22', 4, 3, 3, 6, 5, 5, 43, 3),
(26, 2, 2, '2019-04-22', 4, 3, 3, 6, 5, 5, 48, 3),
(27, 2, 2, '2019-05-22', 4, 3, 3, 6, 5, 5, 30, 3),
(28, 2, 2, '2019-06-22', 4, 3, 3, 6, 5, 5, 76, 3),
(29, 2, 1, '2019-08-23', 6, 7, 8, 8, 8, 8, 75, 5),
(30, 1, 2, '2019-09-06', 2, 4, 1, 3, 5, 10, 29, 4),
(31, 1, 2, '2019-08-01', 6, 6, 6, 6, 6, 6, 42, 6),
(32, 1, 2, '2019-08-31', 6, 6, 6, 6, 6, 6, 42, 6),
(33, 1, 2, '2019-08-02', 6, 7, 6, 6, 4, 6, 50, 6),
(34, 1, 2, '2019-08-03', 6, 6, 6, 8, 8, 6, 61, 6),
(35, 1, 2, '2019-08-04', 6, 6, 6, 3, 8, 6, 45, 6),
(36, 1, 2, '2019-08-05', 6, 6, 11, 6, 6, 6, 70, 6),
(37, 1, 2, '2019-08-06', 6, 6, 6, 7, 6, 6, 42, 6),
(38, 1, 2, '2019-08-07', 6, 6, 6, 4, 6, 6, 42, 6),
(39, 1, 2, '2019-08-08', 6, 6, 5, 6, 6, 6, 42, 6),
(40, 1, 2, '2019-08-09', 6, 6, 6, 12, 6, 6, 42, 6),
(41, 1, 2, '2019-08-10', 6, 6, 6, 13, 6, 6, 42, 6),
(42, 1, 2, '2019-08-11', 6, 6, 17, 6, 6, 6, 42, 6),
(43, 1, 2, '2019-08-12', 6, 6, 12, 8, 6, 6, 42, 6),
(44, 1, 2, '2019-08-13', 6, 6, 6, 10, 6, 6, 42, 6),
(45, 1, 2, '2019-08-14', 6, 7, 6, 12, 6, 10, 42, 6),
(46, 1, 2, '2019-08-15', 6, 6, 6, 8, 6, 6, 56, 6),
(47, 1, 2, '2019-08-16', 6, 6, 6, 7, 6, 6, 55, 6),
(48, 1, 2, '2019-08-17', 6, 6, 6, 3, 6, 6, 38, 6),
(49, 1, 2, '2019-08-18', 6, 6, 7, 6, 6, 6, 43, 6),
(50, 1, 2, '2019-08-19', 6, 6, 5, 6, 6, 6, 41, 6),
(51, 1, 2, '2019-08-20', 6, 6, 8, 6, 6, 6, 45, 6),
(52, 1, 2, '2019-08-21', 6, 6, 7, 6, 6, 6, 43, 6),
(53, 1, 2, '2019-08-23', 6, 6, 2, 6, 6, 6, 37, 6),
(54, 1, 2, '2019-08-24', 6, 6, 4, 6, 6, 6, 46, 6),
(55, 1, 2, '2019-08-25', 6, 6, 5, 6, 6, 6, 45, 6),
(56, 1, 2, '2019-08-26', 6, 6, 3, 6, 6, 6, 45, 6),
(57, 1, 2, '2019-08-27', 6, 6, 6, 18, 6, 6, 72, 6),
(58, 1, 2, '2019-08-28', 6, 6, 6, 11, 6, 6, 64, 6),
(59, 1, 2, '2019-08-29', 6, 6, 6, 20, 6, 6, 75, 6),
(60, 1, 2, '2019-08-30', 6, 6, 6, 15, 6, 6, 70, 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nahkoda`
--

CREATE TABLE `nahkoda` (
  `id` int(11) NOT NULL,
  `nama_nahkoda` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nohp` varchar(13) NOT NULL,
  `id_kapal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nahkoda`
--

INSERT INTO `nahkoda` (`id`, `nama_nahkoda`, `alamat`, `nohp`, `id_kapal`) VALUES
(1, 'YOYOK BUDI P.', 'Kalipuro', '0', 1),
(2, 'MAJUDI.', 'Klaten', '0', 1),
(3, 'SETIAWAN PRIO P..', 'Banyuwangi', '0', 2),
(4, 'AHMAD ROMADLONI F. R..', 'Pondok Indah', '0', 2),
(5, 'RAHMAD HIDAYAT.', 'Cluring', '0', 5),
(6, 'SINGGIH ARIYONO.', 'Giri', '0', 5),
(7, 'SRIWIYONO.', 'Kalipuro', '0', 6),
(8, 'INDO FRIDIANSYAH.', 'Kebalen', '0', 6),
(9, 'ANNA RIYANA', '-', '0', 10),
(10, 'MUHAMMAD FIRMANSYAH', '-', '0', 10),
(11, 'REZA ZULKIFLI', '-', '0', 10),
(12, 'ZULKARNAEN F.R', '-', '0', 9),
(13, 'RIYADI SAPUTRA', '-', '0', 9),
(14, 'TOMMY SUYOTO', '-', '0', 9),
(15, 'GEZHA B.R', '-', '0', 8),
(16, 'ROZI ABDILLAH', '-', '0', 8),
(17, 'DERANTO W.', '-', '0', 7),
(18, 'ZERRAFI JONATHAN', '-', '0', 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `notifikasi`
--

CREATE TABLE `notifikasi` (
  `id_pesan` int(11) NOT NULL,
  `id_jurumudi` int(11) NOT NULL,
  `pesan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `notifikasi`
--

INSERT INTO `notifikasi` (`id_pesan`, `id_jurumudi`, `pesan`) VALUES
(1, 7, ''),
(2, 8, ''),
(3, 7, ''),
(4, 9, ''),
(5, 7, ''),
(6, 7, 'coba-coba'),
(7, 7, 'coba-coba');

-- --------------------------------------------------------

--
-- Struktur dari tabel `periksa_dokumen_kapal`
--

CREATE TABLE `periksa_dokumen_kapal` (
  `id_periksa_dokumen` int(10) NOT NULL,
  `id_kapal` int(10) NOT NULL,
  `id_nahkoda` int(10) NOT NULL,
  `jumlah_abk` varchar(50) NOT NULL,
  `surat_ukur` enum('ada','tidak') NOT NULL DEFAULT 'ada',
  `diterbitkan_oleh_1` varchar(30) NOT NULL,
  `pada_tanggal_1` date NOT NULL,
  `masa_berlaku_1` date NOT NULL,
  `surat_laut` enum('ada','tidak') NOT NULL DEFAULT 'ada',
  `diterbitkan_oleh_2` varchar(30) NOT NULL,
  `pada_tanggal_2` date NOT NULL,
  `masa_berlaku_2` date NOT NULL,
  `sertifikat_keselamatan_radio` enum('ada','tidak') NOT NULL DEFAULT 'ada',
  `diterbitkan_oleh_3` varchar(30) NOT NULL,
  `pada_tanggal_3` date NOT NULL,
  `masa_berlaku_3` date NOT NULL,
  `sertifikat_keselamatan_penumpang` enum('ada','tidak') NOT NULL DEFAULT 'ada',
  `diterbitkan_oleh_4` varchar(30) NOT NULL,
  `pada_tanggal_4` date NOT NULL,
  `masa_berlaku_4` date NOT NULL,
  `sertifikat_garis_muat` enum('ada','tidak') NOT NULL DEFAULT 'ada',
  `diterbitkan_oleh_5` varchar(30) NOT NULL,
  `pada_tanggal_5` date NOT NULL,
  `masa_berlaku_5` date NOT NULL,
  `sertifikat_pengawakan_dan_keselamatan` enum('ada','tidak') NOT NULL DEFAULT 'ada',
  `diterbitkan_oleh_6` varchar(30) NOT NULL,
  `pada_tanggal_6` date NOT NULL,
  `masa_berlaku_6` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `periksa_dokumen_kapal`
--

INSERT INTO `periksa_dokumen_kapal` (`id_periksa_dokumen`, `id_kapal`, `id_nahkoda`, `jumlah_abk`, `surat_ukur`, `diterbitkan_oleh_1`, `pada_tanggal_1`, `masa_berlaku_1`, `surat_laut`, `diterbitkan_oleh_2`, `pada_tanggal_2`, `masa_berlaku_2`, `sertifikat_keselamatan_radio`, `diterbitkan_oleh_3`, `pada_tanggal_3`, `masa_berlaku_3`, `sertifikat_keselamatan_penumpang`, `diterbitkan_oleh_4`, `pada_tanggal_4`, `masa_berlaku_4`, `sertifikat_garis_muat`, `diterbitkan_oleh_5`, `pada_tanggal_5`, `masa_berlaku_5`, `sertifikat_pengawakan_dan_keselamatan`, `diterbitkan_oleh_6`, `pada_tanggal_6`, `masa_berlaku_6`) VALUES
(8, 2, 2, '14 Orang', 'ada', 'DIRJEND HUBLA', '2016-04-16', '2016-04-16', 'ada', 'DIRJEND HUBLA', '2016-04-27', '2016-04-16', 'ada', 'KEMEN KOMINFO', '2018-04-16', '2021-04-21', 'ada', 'DIRJEND HUBLA', '2016-12-18', '2019-04-03', 'ada', 'BKI', '2016-12-02', '2021-01-21', 'ada', 'DIRJEND HUBLA', '2018-07-07', '2019-01-26'),
(9, 1, 1, '12', 'ada', 'dephubla', '2019-08-12', '2019-08-12', 'ada', 'dephubla', '2019-08-12', '2019-08-12', 'ada', 'dephubla', '2019-08-12', '2019-08-12', 'ada', 'dephubla', '2019-08-12', '2019-08-12', 'ada', 'dephubla', '2019-08-12', '2019-08-12', 'ada', 'dephubla', '2019-08-12', '2019-08-12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `periksa_pemenuhan_kewajiban_kapal`
--

CREATE TABLE `periksa_pemenuhan_kewajiban_kapal` (
  `id_pemenuhan_kewajiban` int(10) NOT NULL,
  `id_kapal` int(10) NOT NULL,
  `id_nahkoda` int(10) NOT NULL,
  `jasa_labuh` enum('ada','tidak') NOT NULL DEFAULT 'ada',
  `jasa_tambat` enum('ada','tidak') NOT NULL DEFAULT 'ada',
  `jasa_kenavigasian` enum('ada','tidak') NOT NULL DEFAULT 'ada',
  `jasa_perkapalan` enum('ada','tidak') NOT NULL DEFAULT 'ada',
  `jasa_kebersihan_kapal` enum('ada','tidak') NOT NULL DEFAULT 'ada'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `periksa_pemenuhan_kewajiban_kapal`
--

INSERT INTO `periksa_pemenuhan_kewajiban_kapal` (`id_pemenuhan_kewajiban`, `id_kapal`, `id_nahkoda`, `jasa_labuh`, `jasa_tambat`, `jasa_kenavigasian`, `jasa_perkapalan`, `jasa_kebersihan_kapal`) VALUES
(1, 1, 1, 'ada', 'ada', 'ada', 'ada', 'ada'),
(2, 1, 2, 'ada', 'ada', 'ada', 'ada', 'ada');

-- --------------------------------------------------------

--
-- Struktur dari tabel `permohonan_spb`
--

CREATE TABLE `permohonan_spb` (
  `id_permohonan_spb` int(10) NOT NULL,
  `tempat_permohonan` varchar(20) NOT NULL,
  `id_kapal` int(10) NOT NULL,
  `id_nahkoda` int(10) NOT NULL,
  `tanggal_permohonan` date NOT NULL,
  `waktu_permohonan` time NOT NULL,
  `jumlah_awak` int(11) NOT NULL,
  `jumlah_muatan` int(11) NOT NULL,
  `pelabuhan_tujuan` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `permohonan_spb`
--

INSERT INTO `permohonan_spb` (`id_permohonan_spb`, `tempat_permohonan`, `id_kapal`, `id_nahkoda`, `tanggal_permohonan`, `waktu_permohonan`, `jumlah_awak`, `jumlah_muatan`, `pelabuhan_tujuan`) VALUES
(1, 'Ketapang', 1, 1, '2019-08-14', '13:12:00', 10, 7, 'Gilimanuk'),
(2, 'Ketapang', 1, 1, '2019-09-03', '10:00:00', 7, 35, 'Gilimanuk'),
(3, 'Ketapang', 1, 0, '2019-08-22', '07:30:00', 7, 10, 'Gilimanuk'),
(4, 'Ketapang', 1, 2, '2019-08-22', '07:30:00', 7, 10, 'Gilimanuk'),
(5, 'Ketapang', 1, 2, '2019-09-06', '20:39:00', 20, 20, 'Gilimanuk'),
(6, 'Gilimanuk', 1, 2, '2019-09-06', '21:49:00', 20, 24, 'Ketapang'),
(7, 'Ketapang', 1, 2, '2019-09-09', '13:46:00', 20, 24, 'Gilimanuk');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pernyataan_nahkoda`
--

CREATE TABLE `pernyataan_nahkoda` (
  `id_pernyataan_nahkoda` int(10) NOT NULL,
  `id_nahkoda` int(10) NOT NULL,
  `id_kapal` int(10) NOT NULL,
  `jumlah_muatan` varchar(30) NOT NULL,
  `jumlah_penumpang` varchar(30) NOT NULL,
  `draft_kapal` varchar(30) NOT NULL,
  `stabilitas_kapal` varchar(30) NOT NULL,
  `jumlah_perwiradek` varchar(30) NOT NULL,
  `jumlah_perwiramesin` varchar(30) NOT NULL,
  `jumlah_abk` varchar(30) NOT NULL,
  `jumlah_abklainnya` varchar(30) NOT NULL,
  `jumlah_alatnavigasi` int(11) NOT NULL,
  `jumlah_alatpenolong` int(11) NOT NULL,
  `jumlah_alatpemadam` int(11) NOT NULL,
  `jumlah_alatpencegahan` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `pernyataan_nahkoda`
--

INSERT INTO `pernyataan_nahkoda` (`id_pernyataan_nahkoda`, `id_nahkoda`, `id_kapal`, `jumlah_muatan`, `jumlah_penumpang`, `draft_kapal`, `stabilitas_kapal`, `jumlah_perwiradek`, `jumlah_perwiramesin`, `jumlah_abk`, `jumlah_abklainnya`, `jumlah_alatnavigasi`, `jumlah_alatpenolong`, `jumlah_alatpemadam`, `jumlah_alatpencegahan`) VALUES
(1, 2, 1, '7', '6', '2 meter', 'stabil', '5', '5', '5', '5', 5, 5, 5, 5),
(2, 2, 1, '21', '5', '2 meter', 'stabil', '2', '2', '14', '1', 10, 10, 10, 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pernyataan_pengikatan`
--

CREATE TABLE `pernyataan_pengikatan` (
  `id_pengikatan` int(10) NOT NULL,
  `id_nahkoda` int(10) NOT NULL,
  `id_kapal` int(10) NOT NULL,
  `truck_sedang` varchar(30) NOT NULL,
  `truck_besar` varchar(30) NOT NULL,
  `truck_trailer` varchar(30) NOT NULL,
  `bus_besar` varchar(30) NOT NULL,
  `bus_mini` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pernyataan_pengikatan`
--

INSERT INTO `pernyataan_pengikatan` (`id_pengikatan`, `id_nahkoda`, `id_kapal`, `truck_sedang`, `truck_besar`, `truck_trailer`, `bus_besar`, `bus_mini`) VALUES
(1, 2, 1, '5', '5', '5', '5', '5'),
(2, 2, 1, '5', '5', '5', '2', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sertifikat_garis_muat`
--

CREATE TABLE `sertifikat_garis_muat` (
  `id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `diterbitkan_oleh` varchar(50) NOT NULL,
  `pada_tanggal` date NOT NULL,
  `masa_berlaku` date NOT NULL,
  `id_kapal` int(11) NOT NULL,
  `id_nahkoda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sertifikat_garis_muat`
--

INSERT INTO `sertifikat_garis_muat` (`id`, `filename`, `diterbitkan_oleh`, `pada_tanggal`, `masa_berlaku`, `id_kapal`, `id_nahkoda`) VALUES
(0, '', '', '0000-00-00', '0000-00-00', 1, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sertifikat_keselamatan_pengawakan`
--

CREATE TABLE `sertifikat_keselamatan_pengawakan` (
  `id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `diterbitkan_oleh` varchar(50) NOT NULL,
  `pada_tanggal` date NOT NULL,
  `masa_berlaku` date NOT NULL,
  `id_kapal` int(11) NOT NULL,
  `id_nahkoda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sertifikat_keselamatan_pengawakan`
--

INSERT INTO `sertifikat_keselamatan_pengawakan` (`id`, `filename`, `diterbitkan_oleh`, `pada_tanggal`, `masa_berlaku`, `id_kapal`, `id_nahkoda`) VALUES
(0, '', 'DEPHUBLA', '0000-00-00', '0000-00-00', 1, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sertifikat_keselamatan_penumpang`
--

CREATE TABLE `sertifikat_keselamatan_penumpang` (
  `id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `diterbitkan_oleh` varchar(50) NOT NULL,
  `pada_tanggal` date NOT NULL,
  `masa_berlaku` date NOT NULL,
  `id_kapal` int(11) NOT NULL,
  `id_nahkoda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sertifikat_keselamatan_penumpang`
--

INSERT INTO `sertifikat_keselamatan_penumpang` (`id`, `filename`, `diterbitkan_oleh`, `pada_tanggal`, `masa_berlaku`, `id_kapal`, `id_nahkoda`) VALUES
(0, '', 'DEPHUBLA', '0000-00-00', '0000-00-00', 1, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sertifikat_keselamatan_radio`
--

CREATE TABLE `sertifikat_keselamatan_radio` (
  `id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `diterbitkan_oleh` varchar(50) NOT NULL,
  `pada_tanggal` date NOT NULL,
  `masa_berlaku` date NOT NULL,
  `id_kapal` int(11) NOT NULL,
  `id_nahkoda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sertifikat_keselamatan_radio`
--

INSERT INTO `sertifikat_keselamatan_radio` (`id`, `filename`, `diterbitkan_oleh`, `pada_tanggal`, `masa_berlaku`, `id_kapal`, `id_nahkoda`) VALUES
(0, '', '', '0000-00-00', '0000-00-00', 1, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_laut`
--

CREATE TABLE `surat_laut` (
  `id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `diterbitkan_oleh` varchar(50) NOT NULL,
  `pada_tanggal` date NOT NULL,
  `masa_berlaku` varchar(50) NOT NULL DEFAULT 'PERMANEN',
  `id_kapal` int(11) NOT NULL,
  `id_nahkoda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat_laut`
--

INSERT INTO `surat_laut` (`id`, `filename`, `diterbitkan_oleh`, `pada_tanggal`, `masa_berlaku`, `id_kapal`, `id_nahkoda`) VALUES
(1, '2__Buku%3B_Ilmu_Kalam.pdf', 'DEPHUBLA', '2019-08-22', 'PERMANEN', 1, 2),
(2, '2__Buku%3B_Ilmu_Kalam.pdf', 'DEPHUBLA', '2019-08-22', 'PERMANEN', 1, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_ukur`
--

CREATE TABLE `surat_ukur` (
  `id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `diterbitkan_oleh` varchar(50) NOT NULL,
  `pada_tanggal` date NOT NULL,
  `masa_berlaku` varchar(50) NOT NULL DEFAULT 'PERMANEN',
  `id_kapal` int(11) NOT NULL,
  `id_nahkoda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat_ukur`
--

INSERT INTO `surat_ukur` (`id`, `filename`, `diterbitkan_oleh`, `pada_tanggal`, `masa_berlaku`, `id_kapal`, `id_nahkoda`) VALUES
(0, '', 'DEPHUBLA', '0000-00-00', 'PERMANEN', 1, 2),
(0, '', 'DEPHUBLA', '0000-00-00', 'PERMANEN', 1, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_konfigurasi`
--

CREATE TABLE `tbl_konfigurasi` (
  `id_konfigurasi` int(11) NOT NULL,
  `nama_website` varchar(225) NOT NULL,
  `logo` varchar(225) NOT NULL,
  `favicon` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `facebook` varchar(225) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `keywords` varchar(225) NOT NULL,
  `metatext` varchar(225) NOT NULL,
  `about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_konfigurasi`
--

INSERT INTO `tbl_konfigurasi` (`id_konfigurasi`, `nama_website`, `logo`, `favicon`, `email`, `no_telp`, `alamat`, `facebook`, `instagram`, `keywords`, `metatext`, `about`) VALUES
(1, 'Labuh Sandar', 'member.png', 'admin.png', 'pelanggan@indonesiaferry.co.id', '(021) 191', 'Jalan Jend.. Gatot Subroto, Ketapang \r\nKab. Banyuwangi', 'https://facebook.com/asdpketapang', 'https://instagram.com/asdpketapang', 'ASDP Ketapang', 'ASDP Ketapang Indonesia Ferry', 'PT. ASDP Indonesia Ferry');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_role`
--

CREATE TABLE `tbl_role` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_role`
--

INSERT INTO `tbl_role` (`id`, `name`, `description`) VALUES
(1, 'Administrator', 'Administrator adalah'),
(2, 'Admin', 'Admin Petugas Syahbdandar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `id_role` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(254) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `activation_code` varchar(50) NOT NULL,
  `forgotten_password_code` varchar(50) NOT NULL,
  `forgotten_password_time` datetime NOT NULL,
  `remember_code` varchar(50) NOT NULL,
  `created_on` datetime NOT NULL,
  `last_login` datetime NOT NULL,
  `active` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `id_role`, `username`, `password`, `first_name`, `last_name`, `email`, `phone`, `photo`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`) VALUES
(1, 2, 'ninafani65', '$2y$05$.mSJ5UGZuW37wg49487Lv.BJU7hwiB4thJKNBLZn53tuD3tVzGOB6', 'Nina Fani', 'Sarafina', 'ninafanis21@gmail.com', '085335521042', '1562771460173.png', '', '', '0000-00-00 00:00:00', '', '2019-07-10 21:35:28', '0000-00-00 00:00:00', 1),
(2, 2, 'ninafani', '$2y$05$fcBQHGoS5BOo6ow5fzbkHe9VZjL0.9yQjyt7.2M1jgiyPGypZbZVK', 'Nina Fani', 'Sarafina', 'ninafanis21@gmail.com', '85335521042', '', '', '', '0000-00-00 00:00:00', '', '2019-08-12 07:35:18', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `unduh`
--

CREATE TABLE `unduh` (
  `id` int(11) NOT NULL,
  `id_jurumudi` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `unduh`
--

INSERT INTO `unduh` (`id`, `id_jurumudi`, `filename`) VALUES
(3, 14, '2__Buku%3B_Ilmu_Kalam.pdf'),
(4, 0, '591-1702-1-PB.pdf'),
(5, 13, '591-1702-1-PB.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `unggahspb`
--

CREATE TABLE `unggahspb` (
  `id_spb` int(11) NOT NULL,
  `no_registrasi` varchar(255) NOT NULL,
  `no_surat` varchar(255) NOT NULL,
  `no_spb` varchar(255) NOT NULL,
  `id_kapal` int(11) NOT NULL,
  `id_nahkoda` int(11) NOT NULL,
  `tanggal_permohonan` date NOT NULL,
  `waktu_permohonan` time NOT NULL,
  `tempat_permohonan` varchar(50) NOT NULL,
  `jumlah_awak` int(11) NOT NULL,
  `jumlah_muatan` int(11) NOT NULL,
  `pelabuhan_tujuan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `unggahspb`
--

INSERT INTO `unggahspb` (`id_spb`, `no_registrasi`, `no_surat`, `no_spb`, `id_kapal`, `id_nahkoda`, `tanggal_permohonan`, `waktu_permohonan`, `tempat_permohonan`, `jumlah_awak`, `jumlah_muatan`, `pelabuhan_tujuan`) VALUES
(5, 'x516', 'ppk 27 /7590/1/2019', 'ppl27/7591/9/2019', 1, 2, '2019-09-09', '13:46:00', 'Ketapang', 20, 24, 'Gilimanuk'),
(6, 'pp;l2834728', 'ppsd7891910', '517', 1, 2, '2019-09-04', '08:30:00', 'Ketapang', 20, 13, 'Gilimanuk'),
(7, 'contoh1', 'contoh', '12/kmb/7591/1/2019', 1, 2, '2019-09-19', '08:32:00', 'Ketapang', 4, 10, 'Gilimanuk');

-- --------------------------------------------------------

--
-- Struktur dari tabel `upload_dokumen`
--

CREATE TABLE `upload_dokumen` (
  `id_upload_dokumen` int(10) NOT NULL,
  `nama_dokumen` varchar(100) NOT NULL,
  `id_kapal` int(11) NOT NULL,
  `id_nahkoda` int(11) NOT NULL,
  `diterbitkan_pada` date NOT NULL,
  `diterbitkan_oleh` varchar(100) NOT NULL,
  `masa_berlaku` varchar(100) NOT NULL,
  `filename` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `upload_dokumen`
--

INSERT INTO `upload_dokumen` (`id_upload_dokumen`, `nama_dokumen`, `id_kapal`, `id_nahkoda`, `diterbitkan_pada`, `diterbitkan_oleh`, `masa_berlaku`, `filename`) VALUES
(7, 'Sertifikat Garis Muat', 1, 2, '2019-09-06', 'BKI', '2019-10-6', '20190304.pdf'),
(8, 'Surat Laut', 1, 2, '2019-08-22', 'DEPHUBLA', 'Permanen', '20190304.pdf\r\n'),
(9, 'Surat Ukur', 1, 2, '2019-09-17', 'DEPHUBLA', 'PERMANEN', '20190304.pdf\r\n');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `abk`
--
ALTER TABLE `abk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kapal` (`id_kapal`);

--
-- Indeks untuk tabel `ijazah`
--
ALTER TABLE `ijazah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jurumudi`
--
ALTER TABLE `jurumudi`
  ADD PRIMARY KEY (`id_jurumudi`),
  ADD KEY `id_kapal` (`id_kapal`),
  ADD KEY `id_nahkoda` (`id_nahkoda`);

--
-- Indeks untuk tabel `kapal`
--
ALTER TABLE `kapal`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indeks untuk tabel `laporan_kapal_tiba_berangkat`
--
ALTER TABLE `laporan_kapal_tiba_berangkat`
  ADD PRIMARY KEY (`id_tiba_berangkat`),
  ADD KEY `id_nahkoda` (`id_nahkoda`),
  ADD KEY `id_kapal` (`id_kapal`);

--
-- Indeks untuk tabel `lokasi_labuh`
--
ALTER TABLE `lokasi_labuh`
  ADD PRIMARY KEY (`id_lokasi_labuh`);

--
-- Indeks untuk tabel `lokasi_pelabuhan`
--
ALTER TABLE `lokasi_pelabuhan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `manifest_penumpang`
--
ALTER TABLE `manifest_penumpang`
  ADD PRIMARY KEY (`id_manifest`),
  ADD KEY `id_kapal` (`id_kapal`);

--
-- Indeks untuk tabel `mjurumudi`
--
ALTER TABLE `mjurumudi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kapal` (`id_kapal`),
  ADD KEY `id_nahkoda` (`id_nahkoda`);

--
-- Indeks untuk tabel `muatan`
--
ALTER TABLE `muatan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kapal` (`id_kapal`),
  ADD KEY `id_nahkoda` (`id_nahkoda`);

--
-- Indeks untuk tabel `nahkoda`
--
ALTER TABLE `nahkoda`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kapal` (`id_kapal`);

--
-- Indeks untuk tabel `notifikasi`
--
ALTER TABLE `notifikasi`
  ADD PRIMARY KEY (`id_pesan`),
  ADD KEY `id_jurumudi` (`id_jurumudi`);

--
-- Indeks untuk tabel `periksa_dokumen_kapal`
--
ALTER TABLE `periksa_dokumen_kapal`
  ADD PRIMARY KEY (`id_periksa_dokumen`),
  ADD KEY `id_kapal` (`id_kapal`),
  ADD KEY `id_nahkoda` (`id_nahkoda`);

--
-- Indeks untuk tabel `periksa_pemenuhan_kewajiban_kapal`
--
ALTER TABLE `periksa_pemenuhan_kewajiban_kapal`
  ADD PRIMARY KEY (`id_pemenuhan_kewajiban`),
  ADD KEY `id_kapal` (`id_kapal`),
  ADD KEY `id_nahkoda` (`id_nahkoda`);

--
-- Indeks untuk tabel `permohonan_spb`
--
ALTER TABLE `permohonan_spb`
  ADD PRIMARY KEY (`id_permohonan_spb`),
  ADD KEY `id_kapal` (`id_kapal`),
  ADD KEY `id_nahkoda` (`id_nahkoda`);

--
-- Indeks untuk tabel `pernyataan_nahkoda`
--
ALTER TABLE `pernyataan_nahkoda`
  ADD PRIMARY KEY (`id_pernyataan_nahkoda`),
  ADD KEY `id_nahkoda` (`id_nahkoda`),
  ADD KEY `id_kapal` (`id_kapal`);

--
-- Indeks untuk tabel `pernyataan_pengikatan`
--
ALTER TABLE `pernyataan_pengikatan`
  ADD PRIMARY KEY (`id_pengikatan`),
  ADD KEY `id_nahkoda` (`id_nahkoda`),
  ADD KEY `id_kapal` (`id_kapal`);

--
-- Indeks untuk tabel `surat_laut`
--
ALTER TABLE `surat_laut`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_konfigurasi`
--
ALTER TABLE `tbl_konfigurasi`
  ADD PRIMARY KEY (`id_konfigurasi`);

--
-- Indeks untuk tabel `tbl_role`
--
ALTER TABLE `tbl_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `unduh`
--
ALTER TABLE `unduh`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `unggahspb`
--
ALTER TABLE `unggahspb`
  ADD PRIMARY KEY (`id_spb`);

--
-- Indeks untuk tabel `upload_dokumen`
--
ALTER TABLE `upload_dokumen`
  ADD PRIMARY KEY (`id_upload_dokumen`),
  ADD KEY `id_kapal` (`id_kapal`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `abk`
--
ALTER TABLE `abk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

--
-- AUTO_INCREMENT untuk tabel `ijazah`
--
ALTER TABLE `ijazah`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4636;

--
-- AUTO_INCREMENT untuk tabel `jurumudi`
--
ALTER TABLE `jurumudi`
  MODIFY `id_jurumudi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `kapal`
--
ALTER TABLE `kapal`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `laporan_kapal_tiba_berangkat`
--
ALTER TABLE `laporan_kapal_tiba_berangkat`
  MODIFY `id_tiba_berangkat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `lokasi_labuh`
--
ALTER TABLE `lokasi_labuh`
  MODIFY `id_lokasi_labuh` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `lokasi_pelabuhan`
--
ALTER TABLE `lokasi_pelabuhan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `manifest_penumpang`
--
ALTER TABLE `manifest_penumpang`
  MODIFY `id_manifest` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `mjurumudi`
--
ALTER TABLE `mjurumudi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `muatan`
--
ALTER TABLE `muatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT untuk tabel `nahkoda`
--
ALTER TABLE `nahkoda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `notifikasi`
--
ALTER TABLE `notifikasi`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `periksa_dokumen_kapal`
--
ALTER TABLE `periksa_dokumen_kapal`
  MODIFY `id_periksa_dokumen` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `periksa_pemenuhan_kewajiban_kapal`
--
ALTER TABLE `periksa_pemenuhan_kewajiban_kapal`
  MODIFY `id_pemenuhan_kewajiban` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `permohonan_spb`
--
ALTER TABLE `permohonan_spb`
  MODIFY `id_permohonan_spb` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pernyataan_nahkoda`
--
ALTER TABLE `pernyataan_nahkoda`
  MODIFY `id_pernyataan_nahkoda` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pernyataan_pengikatan`
--
ALTER TABLE `pernyataan_pengikatan`
  MODIFY `id_pengikatan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `surat_laut`
--
ALTER TABLE `surat_laut`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_konfigurasi`
--
ALTER TABLE `tbl_konfigurasi`
  MODIFY `id_konfigurasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_role`
--
ALTER TABLE `tbl_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `unduh`
--
ALTER TABLE `unduh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `unggahspb`
--
ALTER TABLE `unggahspb`
  MODIFY `id_spb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `upload_dokumen`
--
ALTER TABLE `upload_dokumen`
  MODIFY `id_upload_dokumen` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
