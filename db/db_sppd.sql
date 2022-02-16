-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2018 at 09:28 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_sppd`
--
CREATE DATABASE IF NOT EXISTS `db_sppd` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_sppd`;

-- --------------------------------------------------------

--
-- Table structure for table `tb_biaya`
--

CREATE TABLE IF NOT EXISTS `tb_biaya` (
  `kode_biaya` int(10) NOT NULL AUTO_INCREMENT,
  `kode_tujuan` int(10) DEFAULT NULL,
  `kode_golongan` int(10) DEFAULT NULL,
  `biaya` int(10) DEFAULT NULL,
  PRIMARY KEY (`kode_biaya`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=105 ;

--
-- Dumping data for table `tb_biaya`
--

INSERT INTO `tb_biaya` (`kode_biaya`, `kode_tujuan`, `kode_golongan`, `biaya`) VALUES
(4, 1, 1003, 500000),
(5, 1, 1004, 500000),
(6, 1, 1005, 450000),
(7, 1, 1006, 450000),
(8, 1, 1009, 450000),
(9, 1, 1012, 450000),
(10, 1, 1008, 350000),
(11, 1, 1010, 350000),
(12, 1, 1011, 350000),
(13, 1, 1015, 350000),
(14, 1, 1018, 300000),
(15, 1, 1019, 300000),
(16, 1, 1020, 300000),
(17, 1, 1021, 300000),
(18, 1, 1013, 300000),
(19, 2, 1003, 450000),
(20, 2, 1004, 450000),
(21, 2, 1005, 400000),
(22, 2, 1006, 400000),
(23, 2, 1009, 400000),
(24, 2, 1012, 400000),
(25, 2, 1008, 350000),
(26, 2, 1010, 350000),
(27, 2, 1011, 350000),
(28, 2, 1015, 350000),
(29, 2, 1018, 250000),
(30, 2, 1019, 250000),
(32, 2, 1020, 250000),
(33, 2, 1021, 250000),
(34, 2, 1013, 250000),
(35, 3, 1003, 500000),
(36, 3, 1004, 500000),
(37, 3, 1016, 500000),
(38, 1, 1016, 500000),
(39, 2, 1016, 450000),
(40, 3, 1005, 400000),
(41, 3, 1006, 400000),
(42, 3, 1009, 400000),
(43, 3, 1012, 400000),
(44, 3, 1008, 350000),
(45, 3, 1010, 350000),
(46, 3, 1011, 350000),
(47, 3, 1015, 350000),
(48, 3, 1018, 250000),
(49, 3, 1019, 250000),
(50, 3, 1020, 250000),
(51, 3, 1021, 250000),
(52, 3, 1013, 250000),
(54, 3, 1016, 500000),
(55, 4, 1003, 400000),
(56, 4, 1004, 400000),
(57, 4, 1016, 400000),
(58, 4, 1005, 350000),
(59, 4, 1006, 350000),
(60, 4, 1009, 350000),
(61, 4, 1012, 350000),
(62, 4, 1008, 300000),
(63, 4, 1010, 300000),
(64, 4, 1011, 300000),
(65, 4, 1015, 300000),
(66, 4, 1018, 200000),
(67, 4, 1019, 200000),
(68, 4, 1020, 200000),
(69, 4, 1021, 200000),
(70, 4, 1013, 200000),
(71, 5, 1003, 400000),
(72, 5, 1004, 400000),
(73, 5, 1016, 400000),
(75, 5, 1005, 350000),
(76, 5, 1006, 350000),
(77, 5, 1009, 350000),
(78, 5, 1012, 350000),
(79, 5, 1008, 300000),
(80, 5, 1010, 300000),
(81, 5, 1011, 300000),
(82, 5, 1015, 300000),
(84, 5, 1018, 200000),
(85, 5, 1019, 200000),
(86, 5, 1020, 200000),
(87, 5, 1021, 200000),
(88, 5, 1013, 200000),
(89, 6, 1003, 250000),
(90, 6, 1004, 250000),
(91, 6, 1016, 250000),
(92, 6, 1005, 200000),
(93, 6, 1006, 200000),
(94, 6, 1019, 200000),
(95, 6, 1012, 200000),
(96, 6, 1008, 175000),
(97, 6, 1010, 175000),
(98, 6, 1011, 175000),
(99, 6, 1015, 175000),
(100, 6, 1018, 125000),
(101, 6, 1019, 125000),
(102, 6, 1020, 125000),
(103, 6, 1021, 125000),
(104, 6, 1013, 125000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_golongan`
--

CREATE TABLE IF NOT EXISTS `tb_golongan` (
  `kode_golongan` int(10) NOT NULL AUTO_INCREMENT,
  `golongan` varchar(100) DEFAULT NULL,
  `eselon` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kode_golongan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1022 ;

--
-- Dumping data for table `tb_golongan`
--

INSERT INTO `tb_golongan` (`kode_golongan`, `golongan`, `eselon`) VALUES
(1003, 'Pembina Utama Madya', 'IV'),
(1004, 'Pembina Tk.I', 'IV'),
(1005, 'Penata Tk.I', 'III'),
(1006, 'Penata', 'III'),
(1008, 'Pengatur Tk.I', 'II'),
(1009, 'Penata Muda', 'III'),
(1010, 'Pengatur Muda Tk.I', 'II'),
(1011, 'Pengatur', 'II'),
(1012, 'Penata Muda Tk.I ', 'III'),
(1013, 'PTT', 'PPT'),
(1015, 'Pengatur Muda', 'II'),
(1016, 'Pembina Utama Muda', 'IV'),
(1017, '-', ''),
(1018, 'Juru Muda', 'I'),
(1019, 'Juru Muda Tk. I', 'I'),
(1020, 'Juru', 'I'),
(1021, 'Juru Tk.I', 'I');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jabatan`
--

CREATE TABLE IF NOT EXISTS `tb_jabatan` (
  `kode_jabatan` int(11) NOT NULL AUTO_INCREMENT,
  `jabatan` varchar(200) NOT NULL,
  PRIMARY KEY (`kode_jabatan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2025 ;

--
-- Dumping data for table `tb_jabatan`
--

INSERT INTO `tb_jabatan` (`kode_jabatan`, `jabatan`) VALUES
(2001, 'Bupati  Kabupaten Bondowoso'),
(2002, 'Sekretaris Daerah\r\nKabupaten Bondowoso\r\n'),
(2003, 'Asisten Pemerintahan\r\ndan Kesejahteraan Rakyat\r\n'),
(2007, 'Kepala Dinas Komunikasi Dan Informatika'),
(2008, 'Sekretaris Dinas Komunikasi dan Informatika '),
(2009, 'Kepala SubBagian Program, Evaluasidan Keuangan Dinas Komunikasi dan Informatika '),
(2010, 'Kepala SubBagian Umum dan Kepegawaian Dinas Komunikasi dan Informatika'),
(2011, 'Kepala Bidang Pengelolaan Informasi dan Pelayanan Publik Dinas Komunikasi dan Informatika'),
(2012, 'Kepala Seksi Peliputan dan Publikasi Dinas Komunikasi dan Informatika'),
(2013, 'Kepala Seksi Pengelolaan Informasi dan Sumber Daya Telekomunikasi Jaringan Dinas Komunikasi dan Informatika'),
(2014, 'Kepala Seksi Database dan Aplikasi Dinas Komunikasi dan Informatika'),
(2017, 'Kepala Bidang Persandian dan Statistik Dinas Komunikasi dan Informatik'),
(2018, 'Kepala Seksi Tata Kelola Persandian Dinas Komunikasi dan Informatika'),
(2019, 'Kepala Seksi Pengamanan dan Pengawasan Informasi Dinas Komunikasi dan Informatika'),
(2020, 'Kepala Seksi Statistik Dinas Komunikasi dan Informatika'),
(2021, 'Staf Dinas Komunikasi dan Informatika'),
(2022, 'Pengemudi'),
(2023, 'Staf Teknis PPID Dinas Komunikasi dan Informatika'),
(2024, 'Kepala Bidang Persandian dan Statistik Dinas Komunikasi dan Informatika');

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE IF NOT EXISTS `tb_login` (
  `kode_user` int(11) NOT NULL AUTO_INCREMENT,
  `level` varchar(20) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  PRIMARY KEY (`kode_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`kode_user`, `level`, `username`, `password`, `nama_lengkap`) VALUES
(8, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(9, 'sekda', 'sekda', '143853039dad575c9fe430499b8bf2a4', 'sekda'),
(10, 'kadis', 'kadis', 'f984fbd6a856851e26cb3109fba5411f', 'kadis');

-- --------------------------------------------------------

--
-- Table structure for table `tb_lpd`
--

CREATE TABLE IF NOT EXISTS `tb_lpd` (
  `dasar` text NOT NULL,
  `maksud` text NOT NULL,
  `waktu_pelaksanaan` date NOT NULL,
  `daerah` text NOT NULL,
  `nama_kegiatan` text NOT NULL,
  `arahan` text NOT NULL,
  `masalah` text NOT NULL,
  `saran` text NOT NULL,
  `lain_lain` text NOT NULL,
  `kode_lpd` int(11) NOT NULL AUTO_INCREMENT,
  `kode_pegawai` varchar(100) NOT NULL,
  PRIMARY KEY (`kode_lpd`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tb_lpd`
--

INSERT INTO `tb_lpd` (`dasar`, `maksud`, `waktu_pelaksanaan`, `daerah`, `nama_kegiatan`, `arahan`, `masalah`, `saran`, `lain_lain`, `kode_lpd`, `kode_pegawai`) VALUES
('15.05.5', 'Koordinasi dan Konsultasi mengenai Pengelolaan Website Desa', '2017-04-10', 'Surabaya', 'Koordinasi dan Konsultasi mengenai Pengelolaan Website Desa', 'Petunjuk', 'Masalah', 'Saran', 'Lain-lain', 5, '19'),
('12/54/2017', 'lomba', '0000-00-00', 'Surabaya', 'lomba', 'petunjuk', 'masalah', 'saran', '-', 6, '47');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pegawai`
--

CREATE TABLE IF NOT EXISTS `tb_pegawai` (
  `nama_pegawai` varchar(100) NOT NULL,
  `kode_pegawai` int(11) NOT NULL AUTO_INCREMENT,
  `nip` varchar(30) NOT NULL,
  `kode_golongan` varchar(100) NOT NULL,
  `kode_jabatan` varchar(100) NOT NULL,
  PRIMARY KEY (`kode_pegawai`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`nama_pegawai`, `kode_pegawai`, `nip`, `kode_golongan`, `kode_jabatan`) VALUES
('HAERIAH YULIATI, S.Sos., M.M.', 4, '19680910 198809 2 002', '1004', '2007'),
('Dra. HERLIN ISMARIANTINI', 6, '19600531 198909 2 001', '1004', '2008'),
('JUMINI LATIFAH, S.M.Hk.', 8, '19591002 198102 2 001', '1005', '2009'),
('TJATUR KARYA SOELISTYORINI, S.I.P.', 9, '19700423 199803 2 005', '1005', '2010'),
('Dra. ANIS ZAHERTI, M.M.', 10, '19660210 199203 2 009', '1004', '2011'),
('KOESMIATI', 11, '19620201 198503 2 013', '1005', '2012'),
('PROBO NUGROHO, S.H.', 12, '19840814 200212 1 003', '1006', '2013'),
('EKA KUSUMA ASTUTI, S.Kom.', 13, '19780517 200501 2 012', '1005', '2014'),
('ZAIFUL BAHRI, S.E., M.Si.', 14, '19690907 200312 1 006', '1005', '2017'),
('ARIK YULYANTO, S.T., M.M.', 15, '19720718 200212 1 004', '1005', '2018'),
('SYAHRIAL FARY, S.T., M.Si.', 16, '19740211 200212 1 002', '1005', '2019'),
('ASMANIATI', 17, '19610829 198203 2 007', '1005', '2020'),
('MUADZ FAEROZI, A.Md.', 18, '19800218 200902 1 003', '1009', '2021'),
('HARI UTOMO, A.Md.', 19, '19831110 200902 1 006', '1009', '2021'),
('EDY SUWITO', 20, '19660515 199009 1 001', '1008', '2021'),
('SUSANTI', 21, '19711223 200701 2 005', '1008', '2021'),
('HERMAN EFENDI, S.Kom.', 22, '19750923 201001 1 013', '1009', '2021'),
('WAGI AS TUTIK', 23, '19830218 201001 2 002', '1010', '2021'),
('MOH. SJAMSUDIN', 24, '19640407 201001 1 001', '1010', '2021'),
('SUSANTO', 25, '19720225 200801 1 009', '1011', '2021'),
('MEITA HANDAYANI', 26, '19760531 200801 2 008', '1011', '2021'),
('DHANY HERMAWAN C.R., S.Sos.', 27, '19761017 200312 1 004', '1009', '2021'),
('ANGGETONI', 28, '19701123 200901 1 001', '1012', '2022'),
('HANY WILLIAM LIPUTO, S.T.', 29, '19771112 200604 1 021', '1006', '2021'),
('HASANUDDIN', 30, '19760721 200801 1 011', '1011', '2021'),
('TAUFIK', 31, '19781011 200801 1 014', '1011', '2021'),
('SRI EMPIANI', 32, '19660220 199203 2 005', '1012', '2021'),
('ANANG PRIYANTO, S.E.', 33, '19731215 201001 1 001', '1012', '2021'),
('FITRI MARFINDRAWATI', 34, '19790328 200801 2 014', '1011', '2021'),
('JUHERMAN', 35, '19721121 200801 1 008', '1011', '2021'),
('SUKARIASIH', 36, '19790407 200901 2 001', '1011', '2021'),
('CHANDRA AWANG BUANA', 37, '19741227 200801 1 005', '1011', '2021'),
('MOH. AMRULLOH', 39, '-', '1017', '2021'),
('SELAMET KARYA WIJAYA', 40, '-', '1013', '2022'),
('NIKE RISDIAN', 41, '-', '1017', '2021'),
('YASIN', 42, '-', '1017', '2021'),
('NOVA', 43, '-', '1017', '2021'),
('SAKIMAN', 44, '-', '1017', '2021'),
('RIDHO', 45, '-', '1017', '2021'),
('ANNISA', 46, '-', '1017', '2023'),
('miftah', 47, '29218', '1005', '2021');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pejabat`
--

CREATE TABLE IF NOT EXISTS `tb_pejabat` (
  `kode_pejabat` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pejabat` varchar(100) NOT NULL,
  `nippj` varchar(30) NOT NULL,
  `kode_jabatan` varchar(100) NOT NULL,
  `kode_golongan` varchar(100) NOT NULL,
  PRIMARY KEY (`kode_pejabat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tb_pejabat`
--

INSERT INTO `tb_pejabat` (`kode_pejabat`, `nama_pejabat`, `nippj`, `kode_jabatan`, `kode_golongan`) VALUES
(7, 'Drs. H. HIDAYAT, M.Si. ', '19590309 198103 1 010', '2002', '1003'),
(9, 'HAERIAH YULIATI, S.Sos., M.M', '19680910 198809 2 002', '2007', '1004');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sppd`
--

CREATE TABLE IF NOT EXISTS `tb_sppd` (
  `kode_sppd` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal_surat` date NOT NULL,
  `kode_pejabat` int(11) NOT NULL,
  `kode_pegawai` int(11) NOT NULL,
  `maksud` varchar(100) NOT NULL,
  `alat_angkut` varchar(100) NOT NULL,
  `tempat_berangkat` varchar(100) NOT NULL,
  `tempat_tujuan` varchar(100) NOT NULL,
  `tingkat_perjalanan` varchar(100) NOT NULL,
  `lama_perjalanan` int(11) NOT NULL,
  `tgl_berangkat` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `instansi` varchar(100) NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `dasar` varchar(100) NOT NULL,
  `biaya` int(11) NOT NULL,
  `biaya_tran` int(11) NOT NULL,
  `kode_golongan` int(11) NOT NULL,
  `kode_jabatan` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `alasan` varchar(200) NOT NULL,
  PRIMARY KEY (`kode_sppd`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6077 ;

--
-- Dumping data for table `tb_sppd`
--

INSERT INTO `tb_sppd` (`kode_sppd`, `tanggal_surat`, `kode_pejabat`, `kode_pegawai`, `maksud`, `alat_angkut`, `tempat_berangkat`, `tempat_tujuan`, `tingkat_perjalanan`, `lama_perjalanan`, `tgl_berangkat`, `tgl_kembali`, `instansi`, `keterangan`, `dasar`, `biaya`, `biaya_tran`, `kode_golongan`, `kode_jabatan`, `status`, `alasan`) VALUES
(6073, '2017-04-10', 9, 13, 'Kordinasi dan Konsultasi mengenai Pengelolaan', 'Mobil', 'Bondowoso', 'Surabaya', '4', 1, '2017-04-10', '2017-04-10', '', '-', '15.05.5', 350000, 100000, 0, 0, 0, ''),
(6074, '2017-04-10', 9, 18, 'Koordinasi dan Konsultasi mengenai Pengelolaan Website Desa', 'Mobil', 'Bondowoso', 'Surabaya', '4', 1, '2017-04-10', '2017-04-10', '', '-', '15.05.6', 350000, 100000, 0, 0, 0, ''),
(6075, '2017-04-10', 9, 19, 'Koordinasi dan Konsultasi mengenai Pengelolaan Website Desa', 'Mobil', 'Bondowoso', 'Surabaya', '4', 1, '2017-04-10', '2017-04-10', '', '-', '15.05.10', 350000, 100000, 0, 0, 0, ''),
(6076, '2017-12-28', 9, 47, 'lomba', 'mobil', 'Bondowoso', 'Surabaya', '4', 2, '2017-12-29', '2017-12-31', '', 'keterangan', '12/54/2017', 350000, 200000, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tujuan`
--

CREATE TABLE IF NOT EXISTS `tb_tujuan` (
  `kode_tujuan` int(10) NOT NULL AUTO_INCREMENT,
  `nama_tujuan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kode_tujuan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tb_tujuan`
--

INSERT INTO `tb_tujuan` (`kode_tujuan`, `nama_tujuan`) VALUES
(1, 'Luar Jawa'),
(2, 'Luar Provinsi dalam jawa'),
(3, 'DKI dan Bali'),
(4, 'Luar Daerah dalam Provinsi'),
(5, 'Probolinggo/Banyuwangi/Lumajang'),
(6, 'Situbondo/Jember');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
