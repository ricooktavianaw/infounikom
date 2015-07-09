-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2015 at 02:56 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `inpounikom`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE IF NOT EXISTS `administrator` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `namaLengkap` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `tlp` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`,`tlp`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`id`, `namaLengkap`, `username`, `email`, `password`, `tlp`, `alamat`) VALUES
(1, 'Rico Oktavian Adhi Wibowo', 'administrator', 'ricooktavianadhiwbw@gmail.com', 'e4700d828f986cb89a33af35071b49aa', '0997839790', 'Bandung'),
(2, 'Rico Oktavian Adhi Wibowo', 'ricooktavianaw', 'ricooktavianadhiwbw@gmail.com', '486f5b8b7caf41ee199b0e324a4e4d21', '08997839790', 'Bandung');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `id_event` int(11) NOT NULL AUTO_INCREMENT,
  `nama_event` varchar(100) NOT NULL,
  PRIMARY KEY (`id_event`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id_event`, `nama_event`) VALUES
(1, 'Event Unikom'),
(2, 'Event Kampus');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(100) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(3, 'Informasi Kasihan Banget');

-- --------------------------------------------------------

--
-- Table structure for table `komunitas`
--

CREATE TABLE IF NOT EXISTS `komunitas` (
  `id_komunitas` int(11) NOT NULL AUTO_INCREMENT,
  `nama_komunitas` varchar(100) NOT NULL,
  PRIMARY KEY (`id_komunitas`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `komunitas`
--

INSERT INTO `komunitas` (`id_komunitas`, `nama_komunitas`) VALUES
(1, 'Organisasi Kampus'),
(2, 'UKM Kampus'),
(3, 'Komunitas Kampus');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `nim` int(8) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `fakultas` varchar(150) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `angkatan` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `username`, `password`, `email`, `nama_lengkap`, `fakultas`, `jurusan`, `angkatan`, `photo`) VALUES
(10109390, 'ricooktavianaw', '486f5b8b7caf41ee199b0e324a4e4d21', 'ricooktavianadhiwbw@gmail.com', 'Rico Oktavian Adhi Wibowo', 'Fakultas Teknik dan Ilmu Komputer', 'Teknik Informatika', 2009, 'pict_2015_01_10_18_45_55.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `sub_event`
--

CREATE TABLE IF NOT EXISTS `sub_event` (
  `id_sub_event` int(11) NOT NULL AUTO_INCREMENT,
  `id_event` int(11) NOT NULL,
  `nama_sub_event` varchar(200) NOT NULL,
  `tanggal` date NOT NULL,
  `lokasi` varchar(200) NOT NULL,
  `jam` time NOT NULL,
  `deskripsi` text NOT NULL,
  `pict` varchar(100) NOT NULL,
  `waktu_post` datetime NOT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`id_sub_event`),
  KEY `id_event` (`id_event`,`id`),
  KEY `id_admin` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `sub_event`
--

INSERT INTO `sub_event` (`id_sub_event`, `id_event`, `nama_sub_event`, `tanggal`, `lokasi`, `jam`, `deskripsi`, `pict`, `waktu_post`, `id`) VALUES
(13, 1, 'Jakarta Deui', '2014-12-09', 'Bandung', '00:00:00', ' Harapan PERSIB untuk segera mendapatkan striker baru segera terjawab. Calon penyerang asal Brasil, Aron da Silva tiba di Bandung sejak Selasa (09/12) malam.\r\n\r\nRencananya, hari ini dirinya akan langsung ke Jakarta untuk bertemu dengan pelatih Djadjang Nurdjaman. Aron pun akan kembali lagi ke negaranya setelah bertemu dengan sang pelatih.\r\n\r\nPemain yang sebelumnya memperkuat Osotspa Saraburi di Liga Utama Thailand sukses mengoleksi 15 gol. Menurut manajer PERSIB, Umuh Muchtar pemain berusia 31 tahun itu adalah rekomendasi dari Direktur Utama PT Persib Bandung Bermartabat (PBB), Glenn Sugita.\r\n\r\n"Rencananya hari ini akan bertemu dengan pelatih. Saya percayakan sepenuhnya kepada pelatih apalagi pemain ini adalah rekomendasi dari Pak Glenn," kata Umuh sebelum bertolak ke Tanah Suci.\r\n\r\nSelain pemain asing asal Brasil tersebut, Umuh mengaku belum ada rencana lain untuk mendatangkan kandidat pemain asing lainnya. Aron merupakan pemain yang dibidik PERSIB usai melepas Djibril Coulbaly akhir musim lalu', 'pict_2014_12_10_07_18_21.jpg', '2014-12-10 13:17:33', 1),
(14, 2, 'Jakarta Deui', '2014-12-09', 'Bandung', '00:00:00', 'Ever since the first ‘The Hangover’ movie (which also had an equally amazing movie trailer), people across the country have been enamored by the magic of black-out drinking and the hilarity that typically ensues after a night of drinking.\r\nThe second “The Hangover” movie was a bit lackluster compared to the first (also scintillating audiences with a hilarious movie trailer), but the highly-anticipated next installment of The Hangover trilogy (The Hangover 3) seems to be gearing up to send the franchise off with a blast.\r\nThe Hangover 3 will be assembling the same cast as the first movie, and has already released a new teaser trailer which already seems to indicate the gang will be getting into some crazy antics. You can watch the new The Hangover 3 teaser trailer video below. You can also find leaked images and photos from the movie below.', 'pict_2014_12_11_16_42_43.JPG', '2014-12-11 22:42:13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sub_kategori`
--

CREATE TABLE IF NOT EXISTS `sub_kategori` (
  `id_sub_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `id_kategori` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `waktu_post` datetime NOT NULL,
  `pict` varchar(100) NOT NULL,
  `nama_sub_kategori` varchar(200) NOT NULL,
  `deskripsi` text NOT NULL,
  PRIMARY KEY (`id_sub_kategori`),
  KEY `id_kategori` (`id_kategori`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `sub_kategori`
--

INSERT INTO `sub_kategori` (`id_sub_kategori`, `id_kategori`, `id`, `waktu_post`, `pict`, `nama_sub_kategori`, `deskripsi`) VALUES
(1, 3, 1, '2014-12-14 11:39:00', 'pict_2014_12_14_05_40_21.JPG', 'PT. PBB Ingin Membeli Christiano Ronaldo dan Lionel Messi', 'PT Telkom divisi Sistem Informasi (IS Center) merupakan salah satu divisi pendukung di lingkungan PT Telkom yang memiliki ruang lingkup pekerjaan yaitu mengelola perangkat, fasilitas sistem informasi, network, dan divisi penunjang Telkom. Pengelolaan perangkat yang terdapat di PT Telkom, khususnya perangkat keras merupakan hal yang sangat penting untuk dilakukan, karena perangkat merupakan salah satu aset perusahaan yang bersumber dari sistem pengadaan PT Telkom dan perusahaan lain yang bekerja sama seperti perusahaan Dell, HP, dan lainnya, sehingga data inventaris atas aset tersebut harus selalu dijaga agar dapat memberikan informasi yang jelas dan memudahkan dalam melakukan perawatan.\r\n\r\nPengelolaan data perangkat yang terdapat di PT Telkom Cianjur memiliki banyak permasalahan seperti data pendistribusian perangkat kepada karyawan tidak terpantau karena data perangkat belum terorganisasi dengan data karyawan, sehingga apabila karyawan tersebut pindah jabatan atau tidak menggunakan kembali perangkat tersebut, informasinya menjadi tidak jelas dan datanya menjadi tidak akurat, kemungkinan adanya duplikasi data, serta menimbulkan ketidaksesuaian data dengan bukti fisik perangkat di lapangan.'),
(2, 3, 2, '2015-01-02 00:00:00', '', '5 Aktivitas yang Gak Akan Pernah Keliatan Keren', 'Tau kan Tablet kayak iPad itu ukurannya lebih gede dari talenan? Pernah mikir bahwa moto pake talenan itu ide yang bagus gak? Gak pernah kan? Sama halnya kalau kamu dateng ke konser, sengaja berdiri di barisan terdepan cuma untuk moto artisnya pake iPad. Sumpah kamu bakal keliatan kaya orang udik yang bego. Selain keliatan kampungan, udah bisa dipastikan juga kalau kamu bakal disebelin abis sama orang-orang yang berdiri di belakang kamu. Oh ya, kamera tablet biasanya lebih jelek daripada kamera HP, apalagi kalau dipakai di tempat dengan pencahayaan minim. jadi bisa dipastikan foto-foo kamu itu hasilnya jelek gak karuan');

-- --------------------------------------------------------

--
-- Table structure for table `sub_komunitas`
--

CREATE TABLE IF NOT EXISTS `sub_komunitas` (
  `id_sub_komunitas` int(11) NOT NULL AUTO_INCREMENT,
  `id_komunitas` int(11) NOT NULL,
  `nama_sub_komunitas` varchar(100) NOT NULL,
  `deskripsi_singkat` text NOT NULL,
  `kegiatan` text NOT NULL,
  `web` varchar(150) NOT NULL,
  `facebook` varchar(200) NOT NULL,
  `twitter` varchar(200) NOT NULL,
  `cp` text NOT NULL,
  `logo` varchar(100) NOT NULL,
  PRIMARY KEY (`id_sub_komunitas`),
  KEY `id_komunitas` (`id_komunitas`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `sub_komunitas`
--

INSERT INTO `sub_komunitas` (`id_sub_komunitas`, `id_komunitas`, `nama_sub_komunitas`, `deskripsi_singkat`, `kegiatan`, `web`, `facebook`, `twitter`, `cp`, `logo`) VALUES
(1, 3, 'MoB_UtdUNIKOM', 'nduk sepakbola dunia FIFA menyampaikan selamat kepada PERSIB atas prestasi yang diraihnya sebagai juara Indonesia Super League (ISL) 2014 lewat surat tertanggal 14 November 2014 yang dikirimkan kepada Ketua PSSI Pusat Djohar Arifin.\r\n\r\nSurat yang langsung ditandatangani oleh Presiden FIFA, Joseph S. Blatter itu berisi ucapan selamat kepada PERSIB yang sukses menjadi juara dari hasil kerja keras selama ini.\r\n\r\n“Mohon sampaikan ucapan selamat saya kepada PERSIB dan keluarga besar sepakbola di Kota Bandung atas pencapaiannya yang luar biasa. Menjadi juara di tingkat nasional merupakan sebuah kebanggaan dan buah manis dari sebuah kerja keras,” tulis Joseph dalam surat yang diterima PSSI, Rabu (03/12).\r\n\r\nKalimat selanjutnya dalam surat itu, Joseph menulis, “Saya tahu dibalik kesuksesan tentu ada sebuah keyakinan dan usaha keras dari semua elemen yang terlibat. Pencapaian luar biasa ini adalah kemenangan tim, pemain, pelatih, juga staf teknis dan medis serta dukungan dari suporter setia,” lanjutnya.\r\n\r\nDalam surat tersebut, pria kelahiran Swiss, 10 Maret 1936 tersebut juga mengulas sedikit tentang makna sepakbola, di mana kedinamisan dan komitmen dinilainya menjadikan PERSIB mampu menjuarai ISL 2014 atau yang kedua di Liga Indonesia sejak tahun 1994.\r\n\r\nKeberhasilan PERSIB ini membuktikan bahwa sepakbola bukan olahraga semata yang hanya mengasah kemampuan para atlet, menambah kecerdasan seorang pelatih, kekompakan dan semangat sebuah klub. Tapi dikatakannya, jika sepakbola merupakan sekolah kehidupan.\r\n\r\n“Itu yang saya coba yakinkan kepada masyarakat dunia. Khususnya kepada generasi muda saat ini, bahwa bermain sepakbola dapat meningkatkan kehidupan sosial maupun kepribadian,” ungkapnya.\r\n\r\nDi akhir suratnya, ia berharap jika PERSIB dapat terus menjaga keberhasilan yang saat ini telah dicapainya. Sebab, menurutnya sepakbola membantu mewujudkan masa depan yang lebih baik.\r\n\r\n“Sepakbola membantu mewujudkan masa depan yang lebih lebih baik dan saya ingin mengucapkan selamat kepada PERSIB telah menjadi bagian dari sepakbola yang sesungguhnya,” tutupnya.', '', 'http://www.persib.co.id/', 'http://www.persib.co.id/', 'http://www.persib.co.id/', 'Rico Oktavian Adhi Wibowo : +628997839790', 'pict-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sub_teraskampus`
--

CREATE TABLE IF NOT EXISTS `sub_teraskampus` (
  `id_sub_teraskampus` int(11) NOT NULL AUTO_INCREMENT,
  `id_teraskampus` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `waktu_post` datetime NOT NULL,
  `pict` varchar(100) NOT NULL,
  `nama_sub_teraskampus` varchar(200) NOT NULL,
  `deskripsi` text NOT NULL,
  PRIMARY KEY (`id_sub_teraskampus`),
  KEY `id_teraskampus` (`id_teraskampus`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `sub_teraskampus`
--

INSERT INTO `sub_teraskampus` (`id_sub_teraskampus`, `id_teraskampus`, `id`, `waktu_post`, `pict`, `nama_sub_teraskampus`, `deskripsi`) VALUES
(1, 1, 1, '2014-12-13 22:48:23', 'pict_2014_12_13_16_49_57.JPG', 'The Trilogy Finale ', 'Mapserver merupakan salah satu aplikasi open source yang dapat digunakan untuk\r\nmengembangkan web based GIS. Yaitu aplikasi web internet yang melibatkan data spasial\r\ndidalamnya. \r\nMemang banyak terdapat aplikasi GIS baik yang opensource maupun yang\r\nberbayar namun tidak semua fungsionalitas SIG (desktop) terimplementasikan di dalam\r\nwebbased GIS. MapServer dikembangkan untuk melakukan visualisasi data GIS (Vektor &\r\nRaster) pada media web.'),
(2, 1, 1, '2014-12-14 17:16:25', 'pict_2014_12_14_11_16_43.JPG', 'The Trilogy Finale ', 'PT Telkom divisi Sistem Informasi (IS Center) merupakan salah satu divisi pendukung di lingkungan PT Telkom yang memiliki ruang lingkup pekerjaan yaitu mengelola perangkat, fasilitas sistem informasi, network, dan divisi penunjang Telkom. Pengelolaan perangkat yang terdapat di PT Telkom, khususnya perangkat keras merupakan hal yang sangat penting untuk dilakukan, karena perangkat merupakan salah satu aset perusahaan yang bersumber dari sistem pengadaan PT Telkom dan perusahaan lain yang bekerja sama seperti perusahaan Dell, HP, dan lainnya, sehingga data inventaris atas aset tersebut harus selalu dijaga agar dapat memberikan informasi yang jelas dan memudahkan dalam melakukan perawatan.\r\n\r\nPengelolaan data perangkat yang terdapat di PT Telkom Cianjur memiliki banyak permasalahan seperti data pendistribusian perangkat kepada karyawan tidak terpantau karena data perangkat belum terorganisasi dengan data karyawan, sehingga apabila karyawan tersebut pindah jabatan atau tidak menggunakan kembali perangkat tersebut, informasinya menjadi tidak jelas dan datanya menjadi tidak akurat, kemungkinan adanya duplikasi data, serta menimbulkan ketidaksesuaian data dengan bukti fisik perangkat di lapangan.'),
(3, 2, 1, '2014-12-14 17:16:52', 'pict_2014_12_14_11_17_04.JPG', 'The Hangover 3', 'PT Telkom divisi Sistem Informasi (IS Center) merupakan salah satu divisi pendukung di lingkungan PT Telkom yang memiliki ruang lingkup pekerjaan yaitu mengelola perangkat, fasilitas sistem informasi, network, dan divisi penunjang Telkom. Pengelolaan perangkat yang terdapat di PT Telkom, khususnya perangkat keras merupakan hal yang sangat penting untuk dilakukan, karena perangkat merupakan salah satu aset perusahaan yang bersumber dari sistem pengadaan PT Telkom dan perusahaan lain yang bekerja sama seperti perusahaan Dell, HP, dan lainnya, sehingga data inventaris atas aset tersebut harus selalu dijaga agar dapat memberikan informasi yang jelas dan memudahkan dalam melakukan perawatan.\r\n\r\nPengelolaan data perangkat yang terdapat di PT Telkom Cianjur memiliki banyak permasalahan seperti data pendistribusian perangkat kepada karyawan tidak terpantau karena data perangkat belum terorganisasi dengan data karyawan, sehingga apabila karyawan tersebut pindah jabatan atau tidak menggunakan kembali perangkat tersebut, informasinya menjadi tidak jelas dan datanya menjadi tidak akurat, kemungkinan adanya duplikasi data, serta menimbulkan ketidaksesuaian data dengan bukti fisik perangkat di lapangan.'),
(4, 4, 1, '2014-12-14 17:17:10', 'pict_2014_12_14_11_17_23.JPG', 'The Trilogy Finale ', 'PT Telkom divisi Sistem Informasi (IS Center) merupakan salah satu divisi pendukung di lingkungan PT Telkom yang memiliki ruang lingkup pekerjaan yaitu mengelola perangkat, fasilitas sistem informasi, network, dan divisi penunjang Telkom. Pengelolaan perangkat yang terdapat di PT Telkom, khususnya perangkat keras merupakan hal yang sangat penting untuk dilakukan, karena perangkat merupakan salah satu aset perusahaan yang bersumber dari sistem pengadaan PT Telkom dan perusahaan lain yang bekerja sama seperti perusahaan Dell, HP, dan lainnya, sehingga data inventaris atas aset tersebut harus selalu dijaga agar dapat memberikan informasi yang jelas dan memudahkan dalam melakukan perawatan.\r\n\r\nPengelolaan data perangkat yang terdapat di PT Telkom Cianjur memiliki banyak permasalahan seperti data pendistribusian perangkat kepada karyawan tidak terpantau karena data perangkat belum terorganisasi dengan data karyawan, sehingga apabila karyawan tersebut pindah jabatan atau tidak menggunakan kembali perangkat tersebut, informasinya menjadi tidak jelas dan datanya menjadi tidak akurat, kemungkinan adanya duplikasi data, serta menimbulkan ketidaksesuaian data dengan bukti fisik perangkat di lapangan.'),
(5, 3, 1, '2014-12-14 17:17:33', 'pict_2014_12_14_11_17_45.JPG', 'The Trilogy Finale ', 'PT Telkom divisi Sistem Informasi (IS Center) merupakan salah satu divisi pendukung di lingkungan PT Telkom yang memiliki ruang lingkup pekerjaan yaitu mengelola perangkat, fasilitas sistem informasi, network, dan divisi penunjang Telkom. Pengelolaan perangkat yang terdapat di PT Telkom, khususnya perangkat keras merupakan hal yang sangat penting untuk dilakukan, karena perangkat merupakan salah satu aset perusahaan yang bersumber dari sistem pengadaan PT Telkom dan perusahaan lain yang bekerja sama seperti perusahaan Dell, HP, dan lainnya, sehingga data inventaris atas aset tersebut harus selalu dijaga agar dapat memberikan informasi yang jelas dan memudahkan dalam melakukan perawatan.\r\n\r\nPengelolaan data perangkat yang terdapat di PT Telkom Cianjur memiliki banyak permasalahan seperti data pendistribusian perangkat kepada karyawan tidak terpantau karena data perangkat belum terorganisasi dengan data karyawan, sehingga apabila karyawan tersebut pindah jabatan atau tidak menggunakan kembali perangkat tersebut, informasinya menjadi tidak jelas dan datanya menjadi tidak akurat, kemungkinan adanya duplikasi data, serta menimbulkan ketidaksesuaian data dengan bukti fisik perangkat di lapangan.'),
(6, 5, 1, '2014-12-14 17:17:51', 'pict_2014_12_14_11_18_03.JPG', 'The Trilogy Finale ', 'PT Telkom divisi Sistem Informasi (IS Center) merupakan salah satu divisi pendukung di lingkungan PT Telkom yang memiliki ruang lingkup pekerjaan yaitu mengelola perangkat, fasilitas sistem informasi, network, dan divisi penunjang Telkom. Pengelolaan perangkat yang terdapat di PT Telkom, khususnya perangkat keras merupakan hal yang sangat penting untuk dilakukan, karena perangkat merupakan salah satu aset perusahaan yang bersumber dari sistem pengadaan PT Telkom dan perusahaan lain yang bekerja sama seperti perusahaan Dell, HP, dan lainnya, sehingga data inventaris atas aset tersebut harus selalu dijaga agar dapat memberikan informasi yang jelas dan memudahkan dalam melakukan perawatan.\r\n\r\nPengelolaan data perangkat yang terdapat di PT Telkom Cianjur memiliki banyak permasalahan seperti data pendistribusian perangkat kepada karyawan tidak terpantau karena data perangkat belum terorganisasi dengan data karyawan, sehingga apabila karyawan tersebut pindah jabatan atau tidak menggunakan kembali perangkat tersebut, informasinya menjadi tidak jelas dan datanya menjadi tidak akurat, kemungkinan adanya duplikasi data, serta menimbulkan ketidaksesuaian data dengan bukti fisik perangkat di lapangan.');

-- --------------------------------------------------------

--
-- Table structure for table `teraskampus`
--

CREATE TABLE IF NOT EXISTS `teraskampus` (
  `id_teraskampus` int(11) NOT NULL AUTO_INCREMENT,
  `nama_teraskampus` varchar(100) NOT NULL,
  PRIMARY KEY (`id_teraskampus`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `teraskampus`
--

INSERT INTO `teraskampus` (`id_teraskampus`, `nama_teraskampus`) VALUES
(1, 'Taukah Baraya'),
(2, 'Travelista'),
(3, 'Scary Story'),
(4, 'Snap Shoot'),
(5, 'Pojok Hiburan');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sub_event`
--
ALTER TABLE `sub_event`
  ADD CONSTRAINT `sub_event_ibfk_1` FOREIGN KEY (`id_event`) REFERENCES `event` (`id_event`),
  ADD CONSTRAINT `sub_event_ibfk_2` FOREIGN KEY (`id`) REFERENCES `administrator` (`id`);

--
-- Constraints for table `sub_kategori`
--
ALTER TABLE `sub_kategori`
  ADD CONSTRAINT `sub_kategori_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`),
  ADD CONSTRAINT `sub_kategori_ibfk_2` FOREIGN KEY (`id`) REFERENCES `administrator` (`id`);

--
-- Constraints for table `sub_komunitas`
--
ALTER TABLE `sub_komunitas`
  ADD CONSTRAINT `sub_komunitas_ibfk_1` FOREIGN KEY (`id_komunitas`) REFERENCES `komunitas` (`id_komunitas`);

--
-- Constraints for table `sub_teraskampus`
--
ALTER TABLE `sub_teraskampus`
  ADD CONSTRAINT `sub_teraskampus_ibfk_1` FOREIGN KEY (`id_teraskampus`) REFERENCES `teraskampus` (`id_teraskampus`),
  ADD CONSTRAINT `sub_teraskampus_ibfk_2` FOREIGN KEY (`id`) REFERENCES `administrator` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
