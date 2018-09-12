-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `daily_journal`;
CREATE TABLE `daily_journal` (
  `journal_id` int(11) NOT NULL AUTO_INCREMENT,
  `nomor_induk` varchar(20) NOT NULL,
  `journal_date` date NOT NULL,
  `journal_detail` text NOT NULL,
  `entry_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `entry_last_updated_time` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`journal_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `daily_journal` (`journal_id`, `nomor_induk`, `journal_date`, `journal_detail`, `entry_time`, `entry_last_updated_time`) VALUES
(1,	'1413605',	'2017-11-22',	'<ul>\r\n	<li>Penyelesaian halaman Master Distribution ERP Jurnal Penilaian.</li>\r\n	<li>Penyelesaian halaman Master Unit Group (verifikasi fitur Edit) ERP Jurnal Penilaian.</li>\r\n	<li>Penyelesaian halaman Jurnal aplikasi Prakerin.</li>\r\n	<li>Cek aplikasi Presence Management.</li>\r\n</ul>\r\n',	'2017-11-22 09:07:23',	'2017-11-22 03:07:44'),
(2,	'F2214',	'2017-11-22',	'<p><strong>helo worldhelo worldhelo worldhelo worldhelo worldhelo worldhelo worldhelo worldhelo worldhelo worldhelo worldhelo worldhelo worldhelo worldhelo worldhelo worldhelo worldhelo worldhelo worldhelo worldhelo worldhelo worldhelo worldhelo worldhelo worldhelo worldhelo worldhelo worldhelo worldhelo worldhelo worldhelo worldhelo worldhelo worldhelo worldhelo worldhelo worldhelo worldhelo worldhelo worldhelo worldhelo worldhelo worldhelo worldhelo worldhelo worldhelo worldhelo worldhelo worldhelo worldhelo worldhelo worldhelo worldhelo worldhelo worldhelo worldhelo worldhelo worldhelo worldhelo worldhelo worldhelo worldhelo worldhelo worldhelo worldhelo world</strong></p>\r\n',	'2017-11-23 08:01:23',	'2017-11-23 02:01:45'),
(4,	'1413599',	'2017-11-22',	'<p>Modifikasi report pembatalan po</p>\r\n\r\n<ul>\r\n	<li>edit template lewat paper design repopt builder</li>\r\n	<li>penggantian parameter</li>\r\n</ul>\r\n',	'2017-11-23 01:08:42',	'2017-11-22 19:09:04'),
(5,	'1413599',	'2017-11-21',	'<p>Modifikasi repeort pembatalan PO #688485</p>\r\n',	'2017-11-23 01:08:13',	NULL),
(7,	'1413605',	'2017-11-23',	'<ul>\r\n	<li>Perbaikan selector untuk daterangepicker serta upgrade DataTables dan Bootstrap&nbsp;di ERP Manajemen Kendaraan dan ERP Document Controller.</li>\r\n	<li>Pembuatan halaman Evaluator Seksi dan perbaikan halaman distribusi pekerja Master Distribution ERP Jurnal Penilaian.</li>\r\n	<li>Penyusunan kembali struktur tabel schema &#39;pk&#39; untuk Jurnal Penilaian untuk antisipasi aspek penilaian yang dinamis.</li>\r\n</ul>\r\n',	'2017-11-23 08:17:58',	'2017-11-23 02:18:20'),
(8,	'1413605',	'2017-11-21',	'<ul>\r\n	<li>Penyelesaian halaman Master Unit Group ERP Jurnal Penilaian.</li>\r\n</ul>\r\n',	'2017-11-23 01:41:52',	NULL),
(9,	'F2214',	'2017-11-23',	'<ul>\r\n	<li>edit eksport excel untuk hasil kuesionnaire</li>\r\n	<li>bikin menu report by questionnaire</li>\r\n	<li>bikin view report by questionnaire</li>\r\n</ul>\r\n',	'2017-11-23 08:20:59',	NULL),
(10,	'1413605',	'2017-11-24',	'<ul>\r\n	<li>Perbaikan halaman Evaluasi Seksi dan DataTable Master Data sesuai perubahan struktur tabel di ERP Jurnal Penilaian.</li>\r\n</ul>\r\n',	'2017-11-24 06:08:14',	'2017-11-24 00:08:36'),
(11,	'F2214',	'2017-11-24',	'<blockquote>\r\n<p>nelpon bu vero :D</p>\r\n</blockquote>\r\n\r\n<ul>\r\n	<li>edit excel</li>\r\n	<li>penjadwalan by package dibuat not required</li>\r\n	<li>bikin kolom comment di dev</li>\r\n	<li>yang confirm ditambahi kolom soalnya</li>\r\n</ul>\r\n',	'2017-11-24 07:04:38',	NULL),
(12,	'1413605',	'2017-11-25',	'<ul>\r\n	<li>Pengecekan bug di aplikasi ERP Presence Management (<a href=\\\"\\\\\\\">Order #400321</a>)\r\n	<ul>\r\n		<li>Ketika pendaftaran finger di salah satu titik presensi, data finger tiap jari terhitung ganda masing-masing karena masalah dari tabel sumber sudah record ganda.</li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n',	'2017-11-25 00:49:43',	'2017-11-24 18:50:06'),
(13,	'1413605',	'2017-11-26',	'<ul>\r\n	<li>Perubahan struktur tabel untuk Evaluasi karena Periode Evaluasi dibuat date range, bukan tahun.</li>\r\n	<li>Pembuatan form PDF untuk daftar nilai seksi dan export excel untuk rekap data penilaian di ERP Jurnal Penilaian.</li>\r\n	<li>Perbaikan bug database untuk Monitoring Presensi di ERP Presence Management.</li>\r\n</ul>\r\n',	'2017-11-26 08:17:49',	'2017-11-26 02:18:17')
ON DUPLICATE KEY UPDATE `journal_id` = VALUES(`journal_id`), `nomor_induk` = VALUES(`nomor_induk`), `journal_date` = VALUES(`journal_date`), `journal_detail` = VALUES(`journal_detail`), `entry_time` = VALUES(`entry_time`), `entry_last_updated_time` = VALUES(`entry_last_updated_time`);

DROP TABLE IF EXISTS `laporan_page_setting`;
CREATE TABLE `laporan_page_setting` (
  `setting_id` int(11) NOT NULL,
  `setting_name` varchar(100) NOT NULL,
  `head_margin` float NOT NULL,
  `foot_margin` float NOT NULL,
  `left_margin` float NOT NULL,
  `right_margin` float NOT NULL,
  `title_font_size` float NOT NULL,
  `content_font_size` float NOT NULL,
  `page_width` float NOT NULL,
  `page_height` float NOT NULL,
  `jurnal_cetak_font_size` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `nomor_induk` varchar(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `setting_id` int(11) NOT NULL DEFAULT '1',
  `time_creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `time_updated` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `user` (`user_id`, `nomor_induk`, `username`, `password`, `fullname`, `setting_id`, `time_creation`, `time_updated`) VALUES
(1,	'1413605',	'msandyka',	'aea7fdf2b9dc4f2765f70431fff5a095',	'MILTON SANDYKA',	1,	'2017-11-20 09:39:20',	NULL),
(2,	'F2214',	'MENTARI',	'25d55ad283aa400af464c76d713c07ad',	'MENTARI ENGGAR RIZKI',	1,	'2017-11-22 08:00:15',	NULL),
(3,	'1413593',	'ayurkhmdn',	'25f9e794323b453885f5181f1b624d0b',	'AYU RAKHMADANI',	1,	'2017-11-22 08:03:11',	NULL),
(4,	'1413599',	'faqihfauzi98@gmail.com',	'9b2782eeeb469bf8e1a96804f7f9f0b0',	'FAQIH FAUZIA SEPTIANA',	1,	'2017-11-23 01:02:11',	NULL),
(5,	'F2209',	'BRIAN M',	'25f9e794323b453885f5181f1b624d0b',	'BRIAN MARCIUS EGA WIJAYA',	1,	'2017-11-23 01:59:33',	NULL)
ON DUPLICATE KEY UPDATE `user_id` = VALUES(`user_id`), `nomor_induk` = VALUES(`nomor_induk`), `username` = VALUES(`username`), `password` = VALUES(`password`), `fullname` = VALUES(`fullname`), `setting_id` = VALUES(`setting_id`), `time_creation` = VALUES(`time_creation`), `time_updated` = VALUES(`time_updated`);

-- 2017-11-26 08:47:34
