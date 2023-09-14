-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 14, 2023 at 01:37 AM
-- Server version: 5.7.33
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simepki`
--

-- --------------------------------------------------------

--
-- Table structure for table `tindikator`
--

CREATE TABLE `tindikator` (
  `id` int(4) NOT NULL,
  `kdindikator` varchar(20) NOT NULL,
  `indikator` text NOT NULL,
  `kdlokasi` varchar(10) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tindikator`
--

INSERT INTO `tindikator` (`id`, `kdindikator`, `indikator`, `kdlokasi`, `date_created`) VALUES
(13, '20230215023033', 'S1.1 Usulan penggantian lantai dengan vinyl, renovasi dan perluasan lab mikro', 'B501', '2023-02-15 02:31:01'),
(14, '20230215023109', 'S1.2 Pembangunan Lab BSL 2+ oleh Kemenkes', 'B501', '2023-02-15 02:31:09'),
(15, '20230215023253', 'S2.1 Usulan perbaikan alat tekanan negatif yang saat ini di angka 0,9 sedangkan standarnya -5', 'B501', '2023-02-15 02:32:53'),
(16, '20230215023312', 'S2.2 Sarana prasarana pendukung untuk Lab BSL 2+', 'B501', '2023-02-15 02:33:12'),
(17, '20230215023330', 'S2.3 Pengoptimalan alat VITEK MS', 'B501', '2023-02-15 02:33:30'),
(18, '20230215023345', 'S3.1 Usulan pengembangan staf lab mikro', 'B501', '2023-02-15 02:33:45'),
(19, '20230215023416', 'S3.2 Penambahan analis kesehatan untuk menangani Lab BSL 2+, penambahan dokter Sp.MK dan Sp.Park', 'B501', '2023-02-15 02:34:16'),
(20, '20230215023430', 'S3.3 Masih berlakunya STR pegawai', 'B501', '2023-02-15 02:34:58'),
(21, '20230215023508', 'S3.4 Masih berlakunya kewenangan klinis pegawai', 'B501', '2023-02-15 02:35:08'),
(22, '20230215023523', 'S4.1 Pengadaan LIS untuk Lab mikrobiologi', 'B501', '2023-02-15 02:35:23'),
(23, '20230215023546', 'S4.2 Pengembangan layanan molekuler untuk kasus infeksi, kultur anaerob, kultur kuantitatif, kultur fastidious bacteria', 'B501', '2023-02-15 02:35:46'),
(24, '20230215023559', 'S4.3 Menjadi center layanan TB setelah lab BSL 2+ selesai dibangun', 'B501', '2023-02-15 02:35:59'),
(25, '20230215023612', 'S4.4 Pengembangan layanan konsultasi dan visit bersama pada kasus infeksi', 'B501', '2023-02-15 02:36:12'),
(26, '20230215023727', 'S1.1 Sudah terlaksana sebagian renovasi, masih perlu perbaikan lanjutan', 'B502', '2023-02-15 02:37:27'),
(27, '20230216014544', 'S1.1 Sudah terlaksana sebagian renovasi, masih perlu perbaikan lanjutan', 'B502', '2023-02-16 01:45:44'),
(28, '20230216014603', 'S1.2 Renovasi ruang BMP yang baru ( ex BDRS / IGD) dikarenakan ruang BMP lama digunakan untuk perluasan UTDRS', 'B502', '2023-02-16 01:46:03'),
(29, '20230216014618', 'S1.3 Perbaikan pintu pintu lemari ubin, perbaikan air', 'B502', '2023-02-16 01:46:18'),
(30, '20230216014633', 'S1.4 Perluasan gudang lab terpadu karena BHP reagen yang sangay banyak dan akan terus bertambah dengan pengembangan parameter pemeriksaan', 'B502', '2023-02-16 01:46:33'),
(31, '20230216014647', 'S1.5 Perbaikan ruang diskusi', 'B502', '2023-02-16 01:46:47'),
(32, '20230216014659', 'S1.6 Penambahan daya listrik untuk alat baru di ruang PCR Flu burung', 'B502', '2023-02-16 01:46:59'),
(33, '20230216014714', 'S1.7 AC sentral di lab utama tidak dingin, dan AC yang bukan sentral di area lab sering bermasalah (bocor.tidak dingin)', 'B502', '2023-02-16 01:47:14'),
(34, '20230216014749', 'S3.1 Pengusulan pelatihan phlebotomi perawat', 'B502', '2023-02-16 01:47:49'),
(35, '20230216014804', 'S3.2 Pengusulan penambahan tenaga administrasi untuk Ka Instalasi Lab Terpadu dan tenaga administrasi untuk gedung tulip', 'B502', '2023-02-16 01:48:04'),
(36, '20230216014819', 'S3.3 Pengusulan tenaga keperawatan', 'B502', '2023-02-16 01:48:19'),
(37, '20230216014837', 'S3.4 Pengusulan tenaga analis kesehatan mengganti yang akan pensiun tahun 2023 dan 2024', 'B502', '2023-02-16 01:48:37'),
(38, '20230216014852', 'S3.5 Masih berlakunya STR pegawai', 'B502', '2023-02-16 01:48:52'),
(39, '20230216014905', 'S3.6 Masih berlakunya kewenangan klinis pegawai', 'B502', '2023-02-16 01:49:05'),
(40, '20230216014924', 'S4.1 Penambahan parameter pemeriksaan baru yaitu yaitu HBsAg kuantitatif, CMV IgG & IgM, komplemen 3 dan 4 (C3 & C4), mikroalbumin, cystatin C, anti CCP, serum amyloid A (SA) ? rencana realisasi bulan Januari 2023', 'B502', '2023-02-16 01:49:24'),
(41, '20230216014937', 'S4.2 Dalam telaah penambahan pemeriksaan Tacrolimus dan HLA untuk menunjang rencana pengembangan transplan ginjal', 'B502', '2023-02-16 01:49:37'),
(42, '20230216014956', 'S1.1 Pengusulan AC dan penutupan akses pintu lab PA untuk pemeriksaan EGFR', 'B503', '2023-02-16 01:50:35'),
(43, '20230216015005', 'S1.2 Pengajuan pembelian tissue processor karena tisue prosecor yang lama sudah sering rusak', 'B503', '2023-02-16 01:50:05'),
(44, '20230216015047', 'S2.1 Pengajuan alat barcode slide dan blok untuk identifikasi sampel yang lebih baik', 'B503', '2023-02-16 01:50:47'),
(45, '20230216015059', 'S2.2 Pengajuan alat penetral bahan kimia', 'B503', '2023-02-16 01:50:59'),
(46, '20230216015110', 'S2.3 Pemindahan Alat RT PCR beserta kelengkapannya ke lab PA', 'B503', '2023-02-16 01:51:10'),
(47, '20230216015123', 'S2. 4 Pengusulan alat dan reagen yang dibutuhkan untuk melakukan pemeriksaan LBC dan Pemeriksaan mutasi EGFR', 'B503', '2023-02-16 01:51:23'),
(48, '20230216015136', 'S3.1 Pengusulan tenaga tambahan untuk  analis kesehatan yang mampu mengerjakan pemeriksaan molecular pathology dan pengecatan IHC', 'B503', '2023-02-16 01:51:36'),
(49, '20230216015152', 'S3.2 Masih berlakunya STR pegawai', 'B503', '2023-02-16 01:51:52'),
(50, '20230216015203', 'S3.3 Masih berlakunya kewenangan klinis pegawai', 'B503', '2023-02-16 01:52:03'),
(51, '20230216015215', 'S4. 1 Peningkatan promosi lab terintegrasi khususnya pelayanan PA', 'B503', '2023-02-16 01:52:15'),
(52, '20230216015227', 'S4.2 Pengembangan Pemeriksaan Molecular Pathology  (Pemeriksaan Mutasi EGFR,KRAS) untu Ca Paru dan kolon', 'B503', '2023-02-16 01:52:27'),
(53, '20230216015244', 'S4.3 Pengembangan Pemeriksaan Sitologi Non-Gynecology LBC (Liquid Based Cytology)', 'B503', '2023-02-16 01:52:44'),
(54, '20230216015255', 'S4.4 Pengembangan Pemeriksaan Imunohistokimia yaitu penambahan pemeriksaan dengan penambahan antibodi yang diperlukan untuk penegakan diagnosis.', 'B503', '2023-02-16 01:52:55'),
(55, '20230216015356', 'S1.1 Pengusulan perluasan standar bangunan dan sarana UTDRS kelas madya', 'B504', '2023-02-16 01:53:56'),
(56, '20230216015413', 'S2.1 Usulan APAR, emergency kit dan oxygen kecil (Alat-alat K3), Alat untuk pembuatan komponen darah (plasma blast, plasma thawing, incubator platetelet agitator, automatic blood separator, hemoscale, electric sealer, plasma extractor)', 'B504', '2023-02-16 01:55:04'),
(57, '20230216015445', 'S3.1 Usulan penambahan teknisi bank darah sejumlah 3 orang dan analis BDRS 2 orang', 'B504', '2023-02-16 01:54:45'),
(58, '20230216015527', 'S3.2 Pengusulan tenaga  administrasi', 'B504', '2023-02-16 01:55:27'),
(59, '20230216015542', 'S3.3 Masih berlakunya STR pegawai', 'B504', '2023-02-16 01:55:42'),
(60, '20230216015555', 'S3.4 Masih berlakunya kewenangan klinis pegawai', '0', '2023-02-16 01:55:55'),
(61, '20230216015606', 'S4.1 Pendisiplinan wajib menggunakan coolbox untuk setiap petugas dalam pengambilan darah dan komponennya sesuai SPO', 'B504', '2023-02-16 01:56:06'),
(62, '20230216015624', 'S4.2 Peningkatan promosi donor darah ke masyarakat serta kegiatan mobile donor dan pelestarian donor, Menambahkan fitur mobile unit pada web Donor Darah', 'B504', '2023-02-16 01:56:24'),
(63, '20230216015636', 'S4.3 Peningkatan pemantauan kualitas produk darah dan penjaminan distribusi darah', 'B504', '2023-02-16 01:56:36'),
(64, '20230216015702', 'S1.1 Pengusulan perluasan kantor sanitasi', 'B800', '2023-02-16 01:57:02'),
(65, '20230216015717', 'S1.2 Pengusulan perluasan IPAL', 'B800', '2023-02-16 01:57:17'),
(66, '20230216015727', 'S1.3 Pengusulan perbaikan saluran pembuangan air limbah gedung tulip', 'B800', '2023-02-16 01:57:27'),
(67, '20230216015738', 'S1.4 Pengusulan perluasan atau pemindahan tempat penyimpanan B3 yang dapat diakses oleh kendaraan pengangkut', 'B800', '2023-02-16 01:57:38'),
(68, '20230216015750', 'S1.5 Penambahan bak IPAL FBK 30', 'B800', '2023-02-16 01:57:50'),
(69, '20230216015803', 'S1.6 Keterbatasan Gudang BHP CS', 'B800', '2023-02-16 01:58:03'),
(70, '20230216015814', 'S1.7 Kerusakan pompa IPAL Flamboyan', 'B800', '2023-02-16 01:58:14'),
(71, '20230216015825', 'S1. 8 Banjir di Basement aster apabila terjadi hujan', 'B800', '2023-02-16 01:58:25'),
(72, '20230216015838', 'S1.9 Kebocoran atap gedung flamboyan dan depan wijaya kusuma', 'B800', '2023-02-16 01:58:38'),
(73, '20230216015851', 'S1.10 Eshaust Fan di kamar mandi flamboyan 6-9', 'B800', '2023-02-16 01:58:51'),
(74, '20230216015928', 'S2.1 Penghapusan aset incenerator', 'B800', '2023-02-16 01:59:28'),
(75, '20230216015938', 'S2.2 Usulan pengadaan flowmeter inlet', 'B800', '2023-02-16 01:59:38'),
(76, '20230216015948', 'S2.3 Pengusulan alat spectroquant Nova 60', 'B800', '2023-02-16 01:59:48'),
(77, '20230216015958', 'S2.4 Pengusulan alat Veloxycal', 'B800', '2023-02-16 01:59:58'),
(78, '20230216020009', 'S3.1 Pengusulan tenaga sanitarian', 'B800', '2023-02-16 02:00:09'),
(79, '20230216020018', 'S3.2 pengusulan pelatihan/sertifikasi operator IPAL', 'B800', '2023-02-16 02:00:18'),
(80, '20230216020030', 'S3.3 Keterbatasan janitor : Wijaya Kusuma lt 1, 2 Nusa Indah lt. 1, 2, 3 Anggrek 1, HCU Anggrek 2 Anggrek 3', 'B800', '2023-02-16 02:00:30'),
(81, '20230216020042', 'S3.4 Masih berlakunya STR pegawai', 'B800', '2023-02-16 02:00:42'),
(82, '20230216020053', 'S3.5 Masih berlakunya kewenangan klinis pegawai', 'B800', '2023-02-16 02:00:53'),
(83, '20230216020105', 'S4.1 Pengusulan pemasangan lampu tidur dengan tujuan kenyamanan pasien', 'B800', '2023-02-16 02:01:05'),
(84, '20230216030745', 'S1.1 Usulan perbaikan ruang tunggu pasien dan ruang tindakan dokter di poli', 'B700', '2023-02-16 03:07:45'),
(85, '20230216030800', 'S1.2 Usulan perbaikan ruang terapi wicara, okupasi terapi, ortotik prostetik dan bengkel ortotik prostetik di flamboyan 5', 'B700', '2023-02-16 03:08:00'),
(86, '20230216030835', 'S1.3 Usulan pembuatan wastafel untuk cetak gips pasien di ruang ortotik prostetik', 'B700', '2023-02-16 03:08:35'),
(87, '20230216030847', 'S1.4 Penggantian AC di ruang okupasi terapi', 'B700', '2023-02-16 03:08:47'),
(88, '20230216030902', 'S2.1 Penambahan exhaust fan di bengkel ortotik prostetik di Flamboyan 5', 'B700', '2023-02-16 03:09:02'),
(89, '20230216030913', 'S2.2 Usulan pemberian mic 2 arah pada ruang pendaftaran pasien di ruang tunggu', 'B700', '2023-02-16 03:09:13'),
(90, '20230216030924', 'S2.3 Mengajukan usulan untuk menambah fasilitas berupa peralatan medis, seperti High Intencity Laser Therapy, Arm Ergocycle, Parafin Bath,  Alat Continous Passive Movement, TENS, Cryotheraphy, ESWT, Snoozelen, Elektro, EMG, Treadmill, Tensimeter.', 'B700', '2023-02-16 03:09:24'),
(91, '20230216030936', 'S2.4 Penambahan sarana dan prasarana berupa penambahan komputer dan printer (ruang ka instalasi, ruang terapi okupasi, ruang periksa dokter, counter rehabilitasi medik), smart TV 42 inci di ruang gymnasium, perbaikan kloset jongkok, dan penambahan jaringan komputer ( counter, ruang PSM, ruang epriksa dokter).', 'B700', '2023-02-16 03:09:36'),
(92, '20230216030948', 'S3.1 Usulan Penambahan tenaga dokter Sp.KFR (2), terapi wicara (2), petugas sosial medik (1) dan tenaga administrasi (1), fisioterapis (1)', 'B700', '2023-02-16 03:09:48'),
(93, '20230216030959', 'S3.2 Usulan pelatihan peningkatan kemampuan di high care unit / ICU', 'B700', '2023-02-16 03:09:59'),
(94, '20230216031010', 'S3.3 Masih berlakunya STR pegawai', 'B700', '2023-02-16 03:10:10'),
(95, '20230216031019', 'S3.4 Masih berlakunya kewenangan klinis pegawai', 'B700', '2023-02-16 03:10:19'),
(96, '20230216031030', 'S3.5 pelatihan neuromuskuloskeletal pada dewasa dan anak untuk staf ato tenaga okupasi terapi', 'B700', '2023-02-16 03:10:30'),
(97, '20230216031041', 'S3.6 capasity building untuk semua staf Instalasi Rehabilitasi Medik', 'B700', '2023-02-16 03:10:41'),
(98, '20230216031053', 'S3.7 Pelatihan Clinical Educator untuk pembimbing  mahasiswa profesi Fisiotetapi', 'B700', '2023-02-16 03:10:53'),
(99, '20230216031103', 'S3.8 Pelatihan penatalaksanaan kompetensi pediatri untuk profesi Fisioterapi', 'B700', '2023-02-16 03:11:03'),
(100, '20230216031112', 'S3.9 Penatalaksanaan pasien stroke untuk profesi fisioterapi, okupasi terapi dan terapi wicara', 'B700', '2023-02-16 03:11:12'),
(101, '20230216031125', 'S3.10 Penatalaksanaan paliatif untuk pasien untuk profesi fisioterapi, okupasi terapi, terapi wicara dan orthotik prostetik', 'B700', '2023-02-16 03:11:25'),
(102, '20230216031136', 'S4.1 Peningkatan pelayanan e-rekam medis untuk pelayanan rehab medik', 'B700', '2023-02-16 03:11:36'),
(103, '20230216031146', 'S4.2 Pengenalan layanan rehab medik yang kurang dikenal', 'B700', '2023-02-16 03:11:46'),
(104, '20230216031205', 'S1.1 Permohonan tempat untuk gudang alat - alat yang baru', 'B600', '2023-02-16 03:12:05'),
(105, '20230216031217', 'S1.2 Pengecatan kembali seluruh dinding dan plafon', 'B600', '2023-02-16 03:12:17'),
(106, '20230216031229', 'S1.3 Penggantian AC di ruang pemeriksaan menjadi AC sentral', 'B600', '2023-02-16 03:12:29'),
(107, '20230216031238', 'S1.4 Renovasi Pendaftaran dijadikan satu dengan pengambilan hasil untuk optimasi SDM', 'B600', '2023-02-16 03:12:38'),
(108, '20230216031249', 'S1.5 Ruang pengambilan hasil direncanakan akan menjadi ruang pemeriksaan fluoroscopy', 'B600', '2023-02-16 03:12:49'),
(109, '20230216031259', 'S1. 6 Penambahan ruangan untuk TU dan ruang recovery pasien', 'B600', '2023-02-16 03:12:59'),
(110, '20230216031311', 'S2.1 Pengadaan baterai UPS untuk MRI', 'B600', '2023-02-16 03:13:11'),
(111, '20230216031320', 'S2.2 Penggantian DVD Publisher', 'B600', '2023-02-16 03:13:20'),
(112, '20230216031330', 'S2.3 Penggantian C arm GE Brivo di Instalasi IBS karena pesawat sudah tidak laik digunakan, keluaran x ray tidak sesuai', 'B600', '2023-02-16 03:13:30'),
(113, '20230216031340', 'S2.4 Penggantian pesawat radiografi stasioner hitachi ruang 6 yang sudah terinstal dari tahun 1990 dengan DR Ceiling', 'B600', '2023-02-16 03:13:40'),
(114, '20230216031349', 'S2. 5 Penambahan Fluoroscopy', 'B600', '2023-02-16 03:13:49'),
(115, '20230216031403', 'S2. 6 Penambahan Surveymeter radiasi dan multimeter X ray untuk alat QC pesawat sinar X', 'B600', '2023-02-16 03:14:03'),
(116, '20230216031836', 'S3.1 Peningkatan keramahan staf terhadap pasien', 'B600', '2023-02-16 03:18:36'),
(117, '20230216031846', 'S3.2 Penambahan SDM Radiografer (7), Fisikawan Medis, Perawat dan tenaga administrasi', 'B600', '2023-02-16 03:18:46'),
(118, '20230216031930', 'S3.3 In house training excellent service untuk staff dan sosialiasasi tentang proteksi radiasi ke unit yang menggunakan sumber radiasi pengion', 'B600', '2023-02-16 03:19:30'),
(119, '20230216031948', 'S3.4 Masih berlakunya STR pegawai', 'B600', '2023-02-16 03:19:48'),
(120, '20230216031957', 'S3.5 Masih berlakunya kewenangan klinis pegawai', 'B600', '2023-02-16 03:19:57'),
(121, '20230216032009', 'S4.1 Optimasi Webpacs dengan adanya akses VPN untuk teleradiologi', 'B600', '2023-02-16 03:20:09'),
(122, '20230216032020', 'S4.2 Mengoptimalkan penggunaan Webpacs sebagai database pasien dalam bentuk gambar bukan hanya menyimpan data radiologi tetapi dapat menyimpan gambar ECG, cathlab, ERCP, ESWL, dsb', 'B600', '2023-02-16 03:20:20'),
(123, '20230216032031', 'S4.3 Mengoptimalkan pelayanan MRI dan MSCT dengan tatalaksana anastesi sehingga disiapkan ruang observasi post sedasi', 'B600', '2023-02-16 03:20:31'),
(124, '20230216032043', 'S4.4 e order dan e pendaftaran', 'B600', '2023-02-16 03:20:43'),
(125, '20230216032056', 'S4.5 E-Hasil (hasil expertise beserta foto dapat diberikan ke pasien via whatsapp atau email atau scan barcode)', 'B600', '2023-02-16 03:20:56'),
(126, '20230216032821', 'S1.1 Perluasan  ruangan Cssd, renovasi laundry jahit,perluasan rg pencucian alat di IBS', 'B100', '2023-02-16 03:28:21'),
(127, '20230216032831', 'S1.2 Kontrak servis pemeliharaan mesin laundry, Kontrak servis pemeliharaan mesin sterilisasi, kontrak servis pemeliharaan treatmen air untuk proses sterilisasi di cssd', 'B100', '2023-02-16 03:28:31'),
(128, '20230216032842', 'S2.1 Permohonan alat sterilisasi  di cssd suhu rendah dan suhu tinggi dan penambahan treatment di ruang dekontamiasi alat cssd', 'B100', '2023-02-16 03:28:42'),
(129, '20230216032852', 'S2.2 Permohonan mesin cuci,mesin pengering,mesin seterika pres di laundry', 'B100', '2023-02-16 03:28:52'),
(130, '20230216032915', 'S3.1 Medical Check Up untuk staf', 'B100', '2023-02-16 03:29:15'),
(131, '20230216032926', 'S3.2 Penambahan tenaga Cssd, utk mengganti pensiun ,pindah unit kerja dan utk ruang alat steril di Ibs', 'B100', '2023-02-16 03:29:26'),
(132, '20230216033118', 'S3.3 Rencana pelatihan untuk menunjang kinerja', 'B100', '2023-02-16 03:31:18'),
(133, '20230216033127', 'S3.4 Masih berlakunya STR pegawai', 'B100', '2023-02-16 03:31:27'),
(134, '20230216033136', 'S3.5 Masih berlakunya kewenangan klinis pegawai', 'B100', '2023-02-16 03:31:36'),
(135, '20230216033145', 'S4.1 Peningkatan kebersihan linen dan sterilisasi alat', 'B100', '2023-02-16 03:31:45'),
(136, '20230216033154', 'S4.2 identifikasi linen tiap gedung', 'B100', '2023-02-16 03:31:54'),
(137, '20230216033205', 'S4.3 Merubah jadwal jaga untuk petugas laundry ( minggu off)', 'B100', '2023-02-16 03:32:05'),
(138, '20230216033215', 'S4.4 Aplikasi trilux untuk pengajuan pengadan alat-alat cssd,laundry dan jahit', 'B100', '2023-02-16 03:32:15'),
(139, '20230216033254', 'S1.1 Usulan perluasan gudang kering ke arah barat', 'B300', '2023-02-16 03:32:54'),
(140, '20230216033303', 'S1.2 Penambahan exhaust pada ruang masak untuk mengurangi panas', 'B300', '2023-02-16 03:33:03'),
(141, '20230216033311', 'S2.1 Penambahan komputer untuk pemenuhan e-order makan gizi', 'B300', '2023-02-16 03:33:11'),
(142, '20230216033320', 'S2.2 Pemeliharaan boiler', 'B300', '2023-02-16 03:33:20'),
(143, '20230216034033', 'S2.3 melanjutkan pengadaan alat masak yang  sebagian telah terlaksana pada tahun 2022', 'B300', '2023-02-16 03:40:33'),
(144, '20230216034056', 'S3.1 MCU Anal swab untuk pramuboga', 'B300', '2023-02-16 03:40:56'),
(145, '20230216034129', 'S3.2 Merukunkan dokter Sp.GK dengan Nutrisionist', 'B300', '2023-02-16 03:41:29'),
(146, '20230216034538', 'S3.3 Penambahan 5 ahli gizi dan 5 pramuboga, 5 orang pramusaji', 'B300', '2023-02-16 03:45:38'),
(147, '20230216034553', 'S3.4 Masih berlakunya STR pegawai', 'B300', '2023-02-16 03:45:53'),
(148, '20230216034602', 'S3.5 Masih berlakunya kewenangan klinis pegawai', 'B300', '2023-02-16 03:46:02'),
(149, '20230216034612', 'S4.1 Usulan pemesanan dan pembayaran kafe sehat melalui Grabfood/gofood/shopefood', 'B300', '2023-02-16 03:46:12'),
(150, '20230216034621', 'S4.2 Usulan pemenuhan snack untuk rapat dengan berkolaborasi dengan koperasi', 'B300', '2023-02-16 03:46:21'),
(151, '20230216034632', 'S4.3 Peningkatan ketepatan pelabelan makan pasien', 'B300', '2023-02-16 03:46:32'),
(152, '20230216034930', 'S1.1 Sentralisasi instalasi farmasi', 'B200', '2023-02-16 03:49:30'),
(153, '20230216034941', 'S1.2 pemeliharaan dan perluasan gudang farmasi', 'B200', '2023-02-16 03:49:41'),
(154, '20230216034950', 'S1.3 Ruang kuliah dan ruang rapat farmasi', 'B200', '2023-02-16 03:49:50'),
(155, '20230216035002', 'S1.4 permintaan loket di UDPF rawat inap cendana', 'B200', '2023-02-16 03:50:02'),
(156, '20230216035012', 'S1.5 Permohonan ruang diskusi untuk pejabat pengadaan farmasi', 'B200', '2023-02-16 03:50:12'),
(157, '20230217072627', 'S1.6 pemeliharaan UDSS meliputi kontrol panel suhu kelembaban dan tekanan ruang, exhaust dan passbox', 'B200', '2023-02-17 07:26:27'),
(158, '20230217072925', 'S2.1 Permohonan mesin fotokopi untuk pelayanan di rawat jalan cendana', 'B200', '2023-02-17 07:29:25'),
(159, '20230217072935', 'S2.2 Penggantian troli untuk distribusi obat alkes gudang farmasi', 'B200', '2023-02-17 07:29:35'),
(160, '20230217072946', 'S2.3 Permintaan mesin antrian untuk rawat jalan cendana', 'B200', '2023-02-17 07:29:46'),
(161, '20230217072957', 'S2.4 Permintaan monitor dan barcode untuk UDPF rawat jalan cendana', 'B200', '2023-02-17 07:29:57'),
(162, '20230217073008', 'S2.5 Permintaan alat untuk mengukur kepuasan pelanggan\'', 'B200', '2023-02-17 07:30:08'),
(163, '20230217073017', 'S2.6 Pemasangan fingerprint door lock dan door closer untuk semua akses pintu gudang farmasi', 'B200', '2023-02-17 07:30:17'),
(164, '20230217073032', 'S2.7 kalibrasi alat BSC, alat pemantauan suhu dan timbangan secara teratur', 'B200', '2023-02-17 07:30:32'),
(165, '20230217073047', 'S3.1 MCU untuk petugas UDSS dan UPOS 6 bulan sekali', 'B200', '2023-02-17 07:30:47'),
(166, '20230217080635', 'S3.2 Masih berlakunya STR pegawai', 'B200', '2023-02-17 08:06:35'),
(167, '20230217080648', 'S3.3 Masih berlakunya kewenangan klinis pegawai', 'B200', '2023-02-17 08:06:48'),
(168, '20230217080700', 'S4.1 Penggunaan sim perencanaan dan pengadaan', 'B200', '2023-02-17 08:07:00'),
(169, '20230217080713', 'S4.2 SEP untuk kebutuhan klain obat dicetak di pendaftaran', 'B200', '2023-02-17 08:07:13'),
(170, '20230217080725', 'S4.3 e resep rawat jalan dan rawat inap', 'B200', '2023-02-17 08:07:25'),
(171, '20230217080740', 'S4.4 e resep mencantumkan tanda tangan dokter', 'B200', '2023-02-17 08:07:40'),
(172, '20230217080759', 'S4.5 tersedianya software interaksi obat dan restriksi fornas yang terintegrasi di SIM RS', 'B200', '2023-02-17 08:07:59'),
(173, '20230217080815', 'S4.6 Tersedianya akses farmasi ke e rm', 'B200', '2023-02-17 08:08:15'),
(174, '20230217080829', 'S4.7 Peningkatan pelayanan farmasi klinik', 'B200', '2023-02-17 08:08:29'),
(175, '20230217080936', 'S1.1 Usulan pemindahan ruang IPSRS / workshop bengkel di Flamboyan Lt 1', 'B400', '2023-02-17 08:09:36'),
(176, '20230217080950', 'S1.2 Usulan gudang alat medis dan accessories', 'B400', '2023-02-17 08:09:50'),
(177, '20230217081002', 'aaaabbb', 'B400', '2023-02-20 08:36:29'),
(178, '20230217081013', 'S1.4 Usulan ruang diskusi untuk mahasiswa praktek', 'B400', '2023-02-17 08:10:13'),
(179, '20230217081039', 'S3.1 Kekurangan tenaga Teknisi Elektromedis apabila pelaksanaan kalibrasi mandiri dimulai', 'B400', '2023-02-17 08:10:39'),
(180, '20230217081051', 'S3.2 Penempatan PJ ATEM di titik-titik kritis utk pemeliharaan seperti di IBS, radiologi, cathlab', 'B400', '2023-02-17 08:10:51'),
(181, '20230217081108', 'S3.3 Masih berlakunya STR pegawai', 'B400', '2023-02-17 08:11:08'),
(182, '20230217081126', 'S3.4 Masih berlakunya kewenangan klinis pegawai', 'B400', '2023-02-17 08:11:26'),
(183, '20230217081138', 'S4.1 Pelaksanaan kalibrasi mandiri', 'B400', '2023-02-17 08:11:38'),
(184, '20230217081150', 'S4.2 Penerimaan kalibrasi dari instalasi lain', 'B400', '2023-02-17 08:11:50'),
(185, '20230217081201', 'S4.3 Pelaksanaan e-perencanaan tahun 2023 dengan sinkronisasi data alat medis', 'B400', '2023-02-17 08:12:01'),
(186, '20230217081214', 'S4.4 evaluasi kontrak service, mana yang untung dan rugi', 'B400', '2023-02-17 08:12:14'),
(187, '20230220032937', 'ggggg', 'B400', '2023-02-20 03:29:37'),
(189, '20230220032910', 'dawdaw', 'B400', '2023-02-20 03:29:10'),
(190, '20230220035539', 'kkk new', 'B400', '2023-02-20 04:41:51'),
(199, '20230220041216', 'aan', 'LOKASI', '2023-02-20 04:12:16'),
(200, '20230220035539', 'kkk new222', '', '2023-02-20 04:46:58');

-- --------------------------------------------------------

--
-- Table structure for table `tlaporan`
--

CREATE TABLE `tlaporan` (
  `id` int(11) NOT NULL,
  `kdindikator` varchar(20) NOT NULL,
  `target` varchar(10) NOT NULL,
  `januari1` text NOT NULL,
  `januari1a` text NOT NULL,
  `januari1b` text NOT NULL,
  `januari2` text NOT NULL,
  `januarib` text NOT NULL,
  `januaric` text NOT NULL,
  `februari1` text NOT NULL,
  `februari1a` text NOT NULL,
  `februari1b` text NOT NULL,
  `februari2` text NOT NULL,
  `februarib` text NOT NULL,
  `februaric` text NOT NULL,
  `maret1` text NOT NULL,
  `maret1a` text NOT NULL,
  `maret1b` text NOT NULL,
  `maret2` text NOT NULL,
  `maretb` text NOT NULL,
  `maretc` text NOT NULL,
  `april1` text NOT NULL,
  `april1a` text NOT NULL,
  `april1b` text NOT NULL,
  `april2` text NOT NULL,
  `aprilb` text NOT NULL,
  `aprilc` text NOT NULL,
  `mei1` text NOT NULL,
  `mei1a` text NOT NULL,
  `mei1b` text NOT NULL,
  `mei2` text NOT NULL,
  `meib` text NOT NULL,
  `meic` text NOT NULL,
  `juni1` text NOT NULL,
  `juni1a` text NOT NULL,
  `juni1b` text NOT NULL,
  `juni2` text NOT NULL,
  `junib` text NOT NULL,
  `junic` text NOT NULL,
  `juli1` text NOT NULL,
  `juli1a` text NOT NULL,
  `juli1b` text NOT NULL,
  `juli2` text NOT NULL,
  `julib` text NOT NULL,
  `julic` text NOT NULL,
  `agustus1` text NOT NULL,
  `agustus1a` text NOT NULL,
  `agustus1b` text NOT NULL,
  `agustus2` text NOT NULL,
  `agustusb` text NOT NULL,
  `agustusc` text NOT NULL,
  `september1` text NOT NULL,
  `september1a` text NOT NULL,
  `september1b` text NOT NULL,
  `september2` text NOT NULL,
  `septemberb` text NOT NULL,
  `septemberc` text NOT NULL,
  `oktober1` text NOT NULL,
  `oktober1a` text NOT NULL,
  `oktober1b` text NOT NULL,
  `oktober2` text NOT NULL,
  `oktoberb` text NOT NULL,
  `oktoberc` text NOT NULL,
  `november1` text NOT NULL,
  `november1a` text NOT NULL,
  `november1b` text NOT NULL,
  `november2` text NOT NULL,
  `novemberb` text NOT NULL,
  `novemberc` text NOT NULL,
  `desember1` text NOT NULL,
  `desember1a` text NOT NULL,
  `desember1b` text NOT NULL,
  `desember2` text NOT NULL,
  `desemberb` text NOT NULL,
  `desemberc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tlaporan`
--

INSERT INTO `tlaporan` (`id`, `kdindikator`, `target`, `januari1`, `januari1a`, `januari1b`, `januari2`, `januarib`, `januaric`, `februari1`, `februari1a`, `februari1b`, `februari2`, `februarib`, `februaric`, `maret1`, `maret1a`, `maret1b`, `maret2`, `maretb`, `maretc`, `april1`, `april1a`, `april1b`, `april2`, `aprilb`, `aprilc`, `mei1`, `mei1a`, `mei1b`, `mei2`, `meib`, `meic`, `juni1`, `juni1a`, `juni1b`, `juni2`, `junib`, `junic`, `juli1`, `juli1a`, `juli1b`, `juli2`, `julib`, `julic`, `agustus1`, `agustus1a`, `agustus1b`, `agustus2`, `agustusb`, `agustusc`, `september1`, `september1a`, `september1b`, `september2`, `septemberb`, `septemberc`, `oktober1`, `oktober1a`, `oktober1b`, `oktober2`, `oktoberb`, `oktoberc`, `november1`, `november1a`, `november1b`, `november2`, `novemberb`, `novemberc`, `desember1`, `desember1a`, `desember1b`, `desember2`, `desemberb`, `desemberc`) VALUES
(13, '20230215023033', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(14, '20230215023109', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(15, '20230215023253', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(16, '20230215023312', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(17, '20230215023330', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(18, '20230215023345', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(19, '20230215023416', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(20, '20230215023430', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(21, '20230215023508', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(22, '20230215023523', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(23, '20230215023546', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(24, '20230215023559', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(25, '20230215023612', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(26, '20230215023727', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(27, '20230216014544', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(28, '20230216014603', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(29, '20230216014618', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(30, '20230216014633', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(31, '20230216014647', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(32, '20230216014659', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(33, '20230216014714', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(34, '20230216014749', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(35, '20230216014804', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(36, '20230216014819', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(37, '20230216014837', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(38, '20230216014852', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(39, '20230216014905', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(40, '20230216014924', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(41, '20230216014937', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(42, '20230216014956', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(43, '20230216015005', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(44, '20230216015047', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(45, '20230216015059', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(46, '20230216015110', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(47, '20230216015123', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(48, '20230216015136', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(49, '20230216015152', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(50, '20230216015203', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(51, '20230216015215', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(52, '20230216015227', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(53, '20230216015244', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(54, '20230216015255', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(55, '20230216015356', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(56, '20230216015413', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(57, '20230216015445', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(58, '20230216015527', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(59, '20230216015542', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(60, '20230216015555', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(61, '20230216015606', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(62, '20230216015624', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(63, '20230216015636', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(64, '20230216015702', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(65, '20230216015717', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(66, '20230216015727', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(67, '20230216015738', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(68, '20230216015750', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(69, '20230216015803', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(70, '20230216015814', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(71, '20230216015825', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(72, '20230216015838', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(73, '20230216015851', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(74, '20230216015928', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(75, '20230216015938', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(76, '20230216015948', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(77, '20230216015958', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(78, '20230216020009', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(79, '20230216020018', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(80, '20230216020030', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(81, '20230216020042', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(82, '20230216020053', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(83, '20230216020105', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(84, '20230216030745', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(85, '20230216030800', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(86, '20230216030835', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(87, '20230216030847', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(88, '20230216030902', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(89, '20230216030913', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(90, '20230216030924', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(91, '20230216030936', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(92, '20230216030948', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(93, '20230216030959', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(94, '20230216031010', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(95, '20230216031019', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(96, '20230216031030', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(97, '20230216031041', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(98, '20230216031053', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(99, '20230216031103', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(100, '20230216031112', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(101, '20230216031125', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(102, '20230216031136', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(103, '20230216031146', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(104, '20230216031205', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(105, '20230216031217', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(106, '20230216031229', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(107, '20230216031238', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(108, '20230216031249', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(109, '20230216031259', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(110, '20230216031311', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(111, '20230216031320', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(112, '20230216031330', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(113, '20230216031340', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(114, '20230216031349', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(115, '20230216031403', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(116, '20230216031836', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(117, '20230216031846', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(118, '20230216031930', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(119, '20230216031948', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(120, '20230216031957', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(121, '20230216032009', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(122, '20230216032020', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(123, '20230216032031', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(124, '20230216032043', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(125, '20230216032056', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(126, '20230216032821', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(127, '20230216032831', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(128, '20230216032842', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(129, '20230216032852', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(130, '20230216032915', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(131, '20230216032926', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(132, '20230216033118', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(133, '20230216033127', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(134, '20230216033136', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(135, '20230216033145', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(136, '20230216033154', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(137, '20230216033205', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(138, '20230216033215', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(139, '20230216033254', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(140, '20230216033303', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(141, '20230216033311', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(142, '20230216033320', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(143, '20230216034033', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(144, '20230216034056', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(145, '20230216034129', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(146, '20230216034538', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(147, '20230216034553', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(148, '20230216034602', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(149, '20230216034612', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(150, '20230216034621', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(151, '20230216034632', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(152, '20230216034930', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(153, '20230216034941', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(154, '20230216034950', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(155, '20230216035002', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(156, '20230216035012', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(157, '20230217072627', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(158, '20230217072925', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(159, '20230217072935', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(160, '20230217072946', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(161, '20230217072957', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(162, '20230217073008', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(163, '20230217073017', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(164, '20230217073032', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(165, '20230217073047', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(166, '20230217080635', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(167, '20230217080648', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(168, '20230217080700', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `tlaporan` (`id`, `kdindikator`, `target`, `januari1`, `januari1a`, `januari1b`, `januari2`, `januarib`, `januaric`, `februari1`, `februari1a`, `februari1b`, `februari2`, `februarib`, `februaric`, `maret1`, `maret1a`, `maret1b`, `maret2`, `maretb`, `maretc`, `april1`, `april1a`, `april1b`, `april2`, `aprilb`, `aprilc`, `mei1`, `mei1a`, `mei1b`, `mei2`, `meib`, `meic`, `juni1`, `juni1a`, `juni1b`, `juni2`, `junib`, `junic`, `juli1`, `juli1a`, `juli1b`, `juli2`, `julib`, `julic`, `agustus1`, `agustus1a`, `agustus1b`, `agustus2`, `agustusb`, `agustusc`, `september1`, `september1a`, `september1b`, `september2`, `septemberb`, `septemberc`, `oktober1`, `oktober1a`, `oktober1b`, `oktober2`, `oktoberb`, `oktoberc`, `november1`, `november1a`, `november1b`, `november2`, `novemberb`, `novemberc`, `desember1`, `desember1a`, `desember1b`, `desember2`, `desemberb`, `desemberc`) VALUES
(169, '20230217080713', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(170, '20230217080725', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(171, '20230217080740', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(172, '20230217080759', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(173, '20230217080815', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(174, '20230217080829', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(175, '20230217080936', '', 'kuan jan', 'k jan', 'w jan', 'pro jan', 'https://docs.google.com/spreadsheets/d/1UTDAasyBw1ivauS5L5-3WP4mAPei95VE/edit?usp=share_link&ouid=102555114874138506423&rtpof=true&sd=true', 'catatan jan', 'kuan feb', 'k feb', 'w feb', 'p feb', 'bukti feb', '1', 'kuan mar', 'k mar', 'w mar ', 'kendala mar', 'buk mar', '', 'kua apr', 'kuan ap', 'waktu ap', 'kendala ap', 'bukti ap', '', 'kuan mei', 'kualitas mei', 'waktu mei', 'kendala mei', 'bukti mei', '', 'kuan juni', 'kual juni', 'waktu juni', 'kendala juni', 'bukti juni', '', 'kuan juli', 'kual juli', 'wakti juli', 'kendala juli', 'bukti juli', '', 'kuan agus', 'kual agus', 'waktu agus', 'kendala agus', 'bukti agus', '', 'kuanti sep', 'kuali sep', 'waktu sep', 'ken sep', 'bukti sep', '', 'kuan ok', 'kuali ok', 'waktu ok', 'kendala ok', 'bukti du okt', '', 'kuann nov', 'kualitas nov', 'waktu nov', 'kendala nov', 'bukti nov', '', 'kuan des', 'kual des', 'waktu des', 'kendala des', 'bukti des', ''),
(176, '20230217080950', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(177, '20230217081002', '', '1', '1', '1', '1', '11', '', '1', '1', '1', '1', '1', '', '1', '1', '1', '1', '1', '', '1', '11', '1', '1', '1', '', '1', '1', '1', '1', '1', '', '1', '1', '1', '1', '1', '', '1', '1', '1', '1', '11', '', '1', '1', '1', '1', '1', '', '1', '1', '1', '1', '1', '', '1', '1', '1', '1', '1', '', '1', '1', '1', '1', '1', '', '1', '1', '1', '1', '1', ''),
(178, '20230217081013', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(179, '20230217081039', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(180, '20230217081051', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(181, '20230217081108', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(182, '20230217081126', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(183, '20230217081138', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(184, '20230217081150', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(185, '20230217081201', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(186, '20230217081214', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(187, '20230220032937', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(189, '20230220032910', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(190, '20230220035539', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(197, '20230220041216', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tlokasi`
--

CREATE TABLE `tlokasi` (
  `id` int(5) NOT NULL,
  `kdlokasi` varchar(10) NOT NULL DEFAULT '',
  `nmlokasi` varchar(200) NOT NULL DEFAULT '',
  `singkatan_lokasi` varchar(60) NOT NULL DEFAULT '',
  `almt_kantor` varchar(50) NOT NULL DEFAULT '',
  `no_telp_kantor` varchar(30) NOT NULL DEFAULT '',
  `email_kantor` varchar(100) NOT NULL DEFAULT '',
  `website_kantor` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tlokasi`
--

INSERT INTO `tlokasi` (`id`, `kdlokasi`, `nmlokasi`, `singkatan_lokasi`, `almt_kantor`, `no_telp_kantor`, `email_kantor`, `website_kantor`) VALUES
(1, 'A100', 'BIDANG PELAYANAN PENUNJANG', 'YANJANGS', '-', '-', '-', '-'),
(2, 'B100', 'INSTALASI CSSD DAN LAUNDRY', 'CSSDLAUNDRY', '-', '-', '-', '-'),
(232, 'B200', 'INSTALASI FARMASI', 'FARMASI', '-', '-', '-', '-'),
(234, 'B400', 'IPSRS', 'IPSRS', '-', '-', '-', '-'),
(236, 'B300', 'INSTALASI GIZI', 'GIZI', '-', '-', '-', '-'),
(237, 'B500', 'INSTALASI LAB TERPADU', 'LABTERPADU', '-', '-', '-', '-'),
(238, 'B501', 'SUB LAB MIKROBIOLOGI KLINIK', 'LABMK', '-', '-', '-', '-'),
(239, 'B502', 'SUB LAB PATOLOGI KLINIK', 'LABPK', '-', '-', '-', '-'),
(240, 'B503', 'SUB LAB PATOLOGI ANATOMI', 'LABPA', '-', '-', '-', '-'),
(241, 'B600', 'INSTALASI RADIOLOGI', 'RADIOLOGI', '-', '-', '-', '-'),
(242, 'B700', 'INSTALASI REHABILITASI MEDIK', 'REHABMEDIK', '-', '-', '-', '-'),
(243, 'B504', 'SUB UTDRS', 'UTDRS', '-', '-', '-', '-'),
(244, 'B800', 'INSTALASI SANITASI', 'SANITASI', '-', '-', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `tsub`
--

CREATE TABLE `tsub` (
  `idsub` int(11) NOT NULL,
  `kdlokasi` varchar(10) NOT NULL,
  `kdlokasi_sub` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tsubindikator`
--

CREATE TABLE `tsubindikator` (
  `id` int(4) NOT NULL,
  `kdindikator` varchar(20) NOT NULL,
  `kdsubindikator` varchar(20) NOT NULL,
  `subindikator` text NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tsubindikator`
--

INSERT INTO `tsubindikator` (`id`, `kdindikator`, `kdsubindikator`, `subindikator`, `date_created`) VALUES
(24, '20230130044051', '20230131084642', 'Penghitungan analisis beban kerja', '2023-01-31 08:46:42'),
(25, '20230130044051', '20230131084651', 'Permintaan tenaga kerja sesuai perhitungan beban kerja', '2023-01-31 08:46:51');

-- --------------------------------------------------------

--
-- Table structure for table `tuser`
--

CREATE TABLE `tuser` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `username_dump` varchar(15) DEFAULT NULL,
  `pwd` varchar(64) NOT NULL,
  `role` enum('ADMINISTRATOR','INSTALASI','SUBINSTALASI') NOT NULL,
  `kdlokasi` varchar(6) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `gambar` varchar(255) NOT NULL DEFAULT 'logors.png',
  `created_by` varchar(30) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `last_updated_by` varchar(30) DEFAULT NULL,
  `last_updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tuser`
--

INSERT INTO `tuser` (`id`, `username`, `username_dump`, `pwd`, `role`, `kdlokasi`, `status`, `gambar`, `created_by`, `created_at`, `last_updated_by`, `last_updated_at`) VALUES
(237, 'admin', '-', '$2y$10$4nJEVF94nz2gNuk06mKUnepJqcZXLRmkwIfdSTZQxlrt82ZL1vkQC', 'ADMINISTRATOR', 'A100', 1, 'Foto_Aim_Keki.jpg', 'ADMINISTRATOR', '2023-02-21 12:58:54', 'ADMINISTRATOR', '2023-02-21 12:58:54'),
(238, 'CSSDLAUNDRY', '-', '$2y$10$hnH0G0tSpiRKhPXghcvopO7Vc/rmXDggXLkmUYM4f1NLSQBvw8L3W', 'INSTALASI', 'B100', 1, '', 'ADMINISTRATOR', '2023-02-15 02:24:23', 'ADMINISTRATOR', '2023-02-15 02:24:23'),
(239, 'FARMASI', '-', '$2y$10$hnH0G0tSpiRKhPXghcvopO7Vc/rmXDggXLkmUYM4f1NLSQBvw8L3W', 'INSTALASI', 'B200', 1, '', 'ADMINISTRATOR', '2023-02-15 02:24:54', 'ADMINISTRATOR', '2023-02-15 02:24:54'),
(240, 'GIZI', '-', '$2y$10$hnH0G0tSpiRKhPXghcvopO7Vc/rmXDggXLkmUYM4f1NLSQBvw8L3W', 'INSTALASI', 'B300', 1, '', 'ADMINISTRATOR', '2023-02-15 02:25:12', 'ADMINISTRATOR', '2023-02-15 02:25:12'),
(241, 'IPSRS', '-', '$2y$10$hnH0G0tSpiRKhPXghcvopO7Vc/rmXDggXLkmUYM4f1NLSQBvw8L3W', 'INSTALASI', 'B400', 1, '198502012009022002-FOTO.jpg', 'ADMINISTRATOR', '2023-02-15 02:25:35', 'ADMINISTRATOR', '2023-02-15 02:25:35'),
(242, 'LABMK', '-', '$2y$10$hnH0G0tSpiRKhPXghcvopO7Vc/rmXDggXLkmUYM4f1NLSQBvw8L3W', 'SUBINSTALASI', 'B501', 1, '', 'ADMINISTRATOR', '2023-02-15 02:25:53', 'ADMINISTRATOR', '2023-02-15 02:25:53'),
(243, 'LABPK', '-', '$2y$10$hnH0G0tSpiRKhPXghcvopO7Vc/rmXDggXLkmUYM4f1NLSQBvw8L3W', 'SUBINSTALASI', 'B502', 1, '', 'ADMINISTRATOR', '2023-02-15 02:26:21', 'ADMINISTRATOR', '2023-02-15 02:26:21'),
(244, 'LABPA', '-', '$2y$10$hnH0G0tSpiRKhPXghcvopO7Vc/rmXDggXLkmUYM4f1NLSQBvw8L3W', 'SUBINSTALASI', 'B503', 1, '', 'ADMINISTRATOR', '2023-02-15 02:26:31', 'ADMINISTRATOR', '2023-02-15 02:26:31'),
(245, 'RADIOLOGI', '-', '$2y$10$hnH0G0tSpiRKhPXghcvopO7Vc/rmXDggXLkmUYM4f1NLSQBvw8L3W', 'INSTALASI', 'B600', 1, '', 'ADMINISTRATOR', '2023-02-15 02:26:41', 'ADMINISTRATOR', '2023-02-15 02:26:41'),
(246, 'UTDRS', '-', '$2y$10$hnH0G0tSpiRKhPXghcvopO7Vc/rmXDggXLkmUYM4f1NLSQBvw8L3W', 'SUBINSTALASI', 'B504', 1, '', 'ADMINISTRATOR', '2023-02-15 02:26:56', 'ADMINISTRATOR', '2023-02-15 02:26:56'),
(247, 'SANITASI', '-', '$2y$10$hnH0G0tSpiRKhPXghcvopO7Vc/rmXDggXLkmUYM4f1NLSQBvw8L3W', 'INSTALASI', 'B800', 1, '', 'ADMINISTRATOR', '2023-02-15 02:27:08', 'ADMINISTRATOR', '2023-02-15 02:27:08'),
(248, 'REHABMEDIK', '-', '$2y$10$hnH0G0tSpiRKhPXghcvopO7Vc/rmXDggXLkmUYM4f1NLSQBvw8L3W', 'INSTALASI', 'B700', 1, '', 'ADMINISTRATOR', '2023-02-15 02:27:35', 'ADMINISTRATOR', '2023-02-15 02:27:35');

-- --------------------------------------------------------

--
-- Table structure for table `tuser_access_menu`
--

CREATE TABLE `tuser_access_menu` (
  `id` int(11) NOT NULL,
  `role` varchar(20) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tuser_access_menu`
--

INSERT INTO `tuser_access_menu` (`id`, `role`, `menu_id`) VALUES
(1, 'ADMINISTRATOR', 1),
(2, 'ADMINISTRATOR', 2),
(3, 'ADMINISTRATOR', 3),
(4, 'INSTALASI', 1),
(5, 'INSTALASI', 5),
(6, 'ADMINISTRATOR', 4),
(7, 'INSTALASI', 4),
(8, 'SUBINSTALASI', 1),
(9, 'SUBINSTALASI', 5),
(10, 'SUBINSTALASI', 4),
(11, 'ADMINISTRATOR', 6),
(12, 'ADMINISTRATOR', 7);

-- --------------------------------------------------------

--
-- Table structure for table `tuser_log`
--

CREATE TABLE `tuser_log` (
  `id` int(11) NOT NULL,
  `time` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `session_id` text,
  `ip` varchar(16) NOT NULL,
  `activity` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tuser_menu`
--

CREATE TABLE `tuser_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(50) NOT NULL,
  `menu_desc` varchar(50) NOT NULL,
  `menu_url` varchar(100) NOT NULL,
  `menu_icon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tuser_menu`
--

INSERT INTO `tuser_menu` (`id`, `menu`, `menu_desc`, `menu_url`, `menu_icon`) VALUES
(1, 'beranda', 'Beranda', 'beranda', 'home'),
(2, 'indikator', 'indikator', 'indikator', 'menu'),
(3, 'user', 'user', 'user', 'paperclip'),
(4, 'Profil', 'profil', 'profil', 'users'),
(5, 'Indikator Instalasi', 'Indikator Instalasi', 'inindikator', 'menu'),
(6, 'Instalasi', 'Instalasi', 'instalasi', 'menu'),
(7, 'Cetak Laporan', 'Cetak Laporan', 'cetaklaporan', 'paperclip');

-- --------------------------------------------------------

--
-- Table structure for table `tuser_resetpwd`
--

CREATE TABLE `tuser_resetpwd` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `token` varchar(64) NOT NULL,
  `time` timestamp NULL DEFAULT NULL,
  `is_used` tinyint(1) DEFAULT '0',
  `used_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tuser_sub_menu`
--

CREATE TABLE `tuser_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `submenu` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `submenu_icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tuser_sub_menu`
--

INSERT INTO `tuser_sub_menu` (`id`, `menu_id`, `submenu`, `url`, `submenu_icon`, `is_active`) VALUES
(1, 2, 'Indikator Ruang', 'indikator', 'globe', 1),
(2, 2, 'Sub Indikator Ruang', 'subindikator', 'edit', 0),
(6, 4, 'My Profile', 'profil', 'user', 1),
(7, 4, 'Edit Profile', 'user/edit', 'user-check', 1),
(8, 4, 'Change Password', 'user/changepassword', 'key', 1),
(9, 5, 'Indikator Ruang', 'inindikator', 'layers', 0),
(10, 5, 'Indikator Ruang', 'insubindikator', 'hard-drive', 1),
(11, 5, 'Cetak Laporan', 'cetak', 'printer', 1),
(12, 3, 'Add Lokasi', 'tlokasi', 'plus', 1),
(39, 3, 'Add User', 'tuser', 'user-plus', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tutama`
--

CREATE TABLE `tutama` (
  `id` int(11) NOT NULL,
  `kode_jabatan` varchar(10) NOT NULL,
  `nama_jabatan` varchar(255) NOT NULL,
  `jpt_utama` varchar(255) NOT NULL,
  `jpt_madya` varchar(255) NOT NULL,
  `jpt_pratama` varchar(255) NOT NULL,
  `administrator` varchar(255) NOT NULL,
  `pengawas` varchar(255) NOT NULL,
  `pelaksana` varchar(255) NOT NULL,
  `jabatan_fungsional` varchar(255) NOT NULL,
  `ikhtisar_jabatan` varchar(255) NOT NULL,
  `pend_formal` varchar(255) NOT NULL,
  `pend_pelatihan` varchar(255) NOT NULL,
  `pengalaman_kerja` varchar(255) NOT NULL,
  `prestasi` varchar(10) NOT NULL,
  `kelas_jabatan` int(3) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutama`
--

INSERT INTO `tutama` (`id`, `kode_jabatan`, `nama_jabatan`, `jpt_utama`, `jpt_madya`, `jpt_pratama`, `administrator`, `pengawas`, `pelaksana`, `jabatan_fungsional`, `ikhtisar_jabatan`, `pend_formal`, `pend_pelatihan`, `pengalaman_kerja`, `prestasi`, `kelas_jabatan`, `date_created`) VALUES
(32, '6666', '6666', '6', '6', '6', 'zzz', '6', '6', '6', '6', '6', '6', '6', '6', 6, '2023-01-24 00:00:00'),
(33, '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', 0, '2023-01-24 08:43:00'),
(34, '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', 0, '2023-01-24 09:09:00'),
(35, '2', '2', '', '', '', '', '', '', '', '', '', '', '', '', 0, '2023-01-24 09:09:00'),
(36, '3', '3', '', '', '', '', '', '', '', '', '', '', '', '', 0, '2023-01-24 09:09:00'),
(37, '4', '4', '', '', '', '', '', '', '', '', '', '', '', '', 0, '2023-01-24 09:09:00'),
(38, '5', '5', '', '', '', '', '', '', '', '', '', '', '', '', 0, '2023-01-24 09:09:00'),
(39, '6', '6', '', '', '', '', '', '', '', '', '', '', '', '', 0, '2023-01-24 09:09:00'),
(40, '10', '10', '', '', '', '', '', '', '', '', '', '', '', '', 0, '2023-01-24 09:09:00'),
(42, '77', '777', '', '', '', '', '', '', '', '', '', '', '', '', 0, '2023-01-24 09:23:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tindikator`
--
ALTER TABLE `tindikator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tlaporan`
--
ALTER TABLE `tlaporan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tlokasi`
--
ALTER TABLE `tlokasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tsub`
--
ALTER TABLE `tsub`
  ADD PRIMARY KEY (`idsub`);

--
-- Indexes for table `tsubindikator`
--
ALTER TABLE `tsubindikator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tuser`
--
ALTER TABLE `tuser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tuser_access_menu`
--
ALTER TABLE `tuser_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tuser_log`
--
ALTER TABLE `tuser_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tuser_menu`
--
ALTER TABLE `tuser_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tuser_resetpwd`
--
ALTER TABLE `tuser_resetpwd`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tuser_sub_menu`
--
ALTER TABLE `tuser_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutama`
--
ALTER TABLE `tutama`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tindikator`
--
ALTER TABLE `tindikator`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT for table `tlaporan`
--
ALTER TABLE `tlaporan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=198;

--
-- AUTO_INCREMENT for table `tlokasi`
--
ALTER TABLE `tlokasi`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=245;

--
-- AUTO_INCREMENT for table `tsub`
--
ALTER TABLE `tsub`
  MODIFY `idsub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tsubindikator`
--
ALTER TABLE `tsubindikator`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tuser`
--
ALTER TABLE `tuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=249;

--
-- AUTO_INCREMENT for table `tuser_access_menu`
--
ALTER TABLE `tuser_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tuser_log`
--
ALTER TABLE `tuser_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tuser_menu`
--
ALTER TABLE `tuser_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tuser_resetpwd`
--
ALTER TABLE `tuser_resetpwd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tuser_sub_menu`
--
ALTER TABLE `tuser_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tutama`
--
ALTER TABLE `tutama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tuser_log`
--
ALTER TABLE `tuser_log`
  ADD CONSTRAINT `tuser_log_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tuser` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tuser_resetpwd`
--
ALTER TABLE `tuser_resetpwd`
  ADD CONSTRAINT `tuser_resetpwd_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tuser` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
