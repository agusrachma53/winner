-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2017 at 12:34 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `winner`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_tbl`
--

CREATE TABLE `blog_tbl` (
  `id` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `image` varchar(256) NOT NULL,
  `synopsis` text NOT NULL,
  `detail` text NOT NULL,
  `createdate` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gallery_tbl`
--

CREATE TABLE `gallery_tbl` (
  `id` int(11) NOT NULL,
  `image` varchar(256) NOT NULL,
  `title` varchar(256) NOT NULL,
  `desc` text NOT NULL,
  `createdate` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery_tbl`
--

INSERT INTO `gallery_tbl` (`id`, `image`, `title`, `desc`, `createdate`) VALUES
(1, '1.jpg', 'wanita anggun1', 'kosong', '2012-06-12 15:43:45'),
(2, '2.jpg', 'wanita anggun2', 'kosong lagi', '2012-06-12 15:44:03'),
(3, '3.jpg', 'wanita anggun3', 'wanita anggun1wanita anggun1', '2012-06-12 15:44:56'),
(4, '4.jpg', 'wanita anggun4', 'wanita anggun1wanita anggun1wanita anggun1wanita anggun1', '2012-06-12 15:45:08'),
(5, '5.jpg', 'wanita anggun5', 'wanita oh wanita', '2012-06-12 15:53:33');

-- --------------------------------------------------------

--
-- Table structure for table `member_tbl`
--

CREATE TABLE `member_tbl` (
  `id` int(11) NOT NULL,
  `membername` varchar(256) NOT NULL,
  `memberpassword` varchar(256) NOT NULL,
  `memberdesc` text NOT NULL,
  `createdate` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member_tbl`
--

INSERT INTO `member_tbl` (`id`, `membername`, `memberpassword`, `memberdesc`, `createdate`) VALUES
(1, 'made@gmail.com', '29d589b6fc2055c559e9835b8ff75e57', 'Halo', '2012-06-18 11:31:29'),
(2, 'joko@gmail.com', 'dcf582f9c065d7e32344eb4697ae5354', '', '2012-06-18 13:50:04'),
(3, 'nyoman@gmail.com', 'c5b9e3510050df2bd3e55c5266a620e6', '', '2012-06-18 13:51:08'),
(4, 'ganteng@ganteng.com', 'c5752ceb32e5107f5cd9df31a453241f', '', '2012-06-18 14:10:14'),
(5, 'halo@gmail.com', '57f842286171094855e51fc3a541c1e2', '', '2012-06-18 15:21:34'),
(6, 'agus@gmail.com', '202cb962ac59075b964b07152d234b70', '', '2017-05-23 00:14:58');

-- --------------------------------------------------------

--
-- Table structure for table `newscomment_tbl`
--

CREATE TABLE `newscomment_tbl` (
  `id` int(11) NOT NULL,
  `newsid` int(11) NOT NULL,
  `comment` text NOT NULL,
  `createdate` datetime NOT NULL,
  `sender` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newscomment_tbl`
--

INSERT INTO `newscomment_tbl` (`id`, `newsid`, `comment`, `createdate`, `sender`) VALUES
(1, 1, 'Ah lebih tipis doang', '2012-06-18 10:33:23', 'made@gmail.com'),
(2, 1, 'Witzz pasti lebih canggih juga lah!!', '2012-06-18 10:49:35', 'nyoman@gmail.com'),
(8, 3, 'Jualan buah aja kok ribut', '2012-06-18 12:14:42', 'Joko@gamil.com'),
(7, 1, 'Laptop itu apa?', '2012-06-18 12:09:03', 'Joko@gamil.com'),
(9, 1, 'ciamik', '2012-06-18 13:39:07', ''),
(10, 1, 'hallo', '2012-06-18 13:41:01', 'made@gmail.com'),
(11, 1, 'apean hallo2', '2012-06-18 13:50:39', 'joko@gmail.com'),
(12, 1, 'orang ganteng disini', '2012-06-18 14:10:42', 'ganteng@ganteng.com'),
(13, 3, 'yah tukang ketoprak comment', '2012-06-18 14:21:07', 'made@gmail.com'),
(14, 6, 'mahalllllllllll', '2012-06-18 14:23:18', 'made@gmail.com'),
(15, 7, 'chip chip chip cuit chip chip cuit burung bernyanyi', '2012-06-18 14:45:04', 'made@gmail.com'),
(16, 1, 'asdadad', '2012-06-18 15:19:51', 'made@gmail.com'),
(17, 1, 'test', '2012-06-18 15:22:10', 'halo@gmail.com'),
(18, 1, 'hallo2', '2012-06-18 15:25:17', 'halo@gmail.com'),
(19, 1, 'test', '2012-06-18 15:25:29', 'halo@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `news_tbl`
--

CREATE TABLE `news_tbl` (
  `id` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `image` varchar(256) NOT NULL,
  `synopsis` text NOT NULL,
  `detail` text NOT NULL,
  `createdate` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_tbl`
--

INSERT INTO `news_tbl` (`id`, `title`, `image`, `synopsis`, `detail`, `createdate`) VALUES
(1, ' MacBook Pro Baru, Lebih Tipis dan Makin Canggih', '1102467620X310.jpg', 'KOMPAS.com - Ajang WorldWide Developer Conference (WWDC) 2012 di San Francisco, Amerika Serikat, dimanfaatkan Apple untuk me-refresh sejumlah lini produknya, termasuk MacBook Pro. Seri laptop high-end baru dari Apple ini datang dengan hardware terkini dan memiliki bentuk fisik yang lebih tipis dari pendahulunya.', 'KOMPAS.com - Ajang WorldWide Developer Conference (WWDC) 2012 di San Francisco, Amerika Serikat, dimanfaatkan Apple untuk me-refresh sejumlah lini produknya, termasuk MacBook Pro. Seri laptop high-end baru dari Apple ini datang dengan hardware terkini dan memiliki bentuk fisik yang lebih tipis dari pendahulunya.\n\nLaptop yang disebut Apple sebagai MacBook Pro "Next-Generation" ini memiliki layar Retina Display berukuran 15.4 inci dengan resolusi 2880x1800 (220 pixel per inci).\n\nUntuk mengecilkan ukuran fisik, Apple membuang optical drive sehingga MacBook Pro baru tebalnya hanya 1.8 cm. Beratnya dsebut-sebut kurang dari 2 kg.\n\nDi dalamnya, MacBook Pro baru didukung sederet hardware canggih, termasuk prosesor quad-core Intel Core i7 Generasi Ketiga ("Ivy Bridge"), RAM hingga 16GB, dan unit pemroses grafis NVIDIA GeForce GT 650M.\n\nApple memilih menggunakan solid state drive (SSD) ketimbang hard disk drive konvensional sebagai media storage di MacBook Pro "Next-Generation". Pilihan kapasitasnya disediakan sampai 768 GB.\n\nPilihan konektivitas yang tersedia mencakup slot SD memory card reader, port display HDMI, USB 3.0, dua buah port Thunderbolt, wireless-LAN 802.11n, dan BlueTooth versi 4.0. Sayangnya Apple tidak menyebutkan soal dukungan jaringan 4G di MacBook Pro baru ini.\n\nMacBook Pro terbaru sudah mulai dijual hari ini dengan harga permulaan sebesar 2.199 dollar AS atau sekitar 20 juta rupiah untuk versi dengan prosesor Core i7 2.3 GHz, RAM 8 GB, dan SSD 256 GB. Masih belum ada informasi kapan laptop premium dari Apple ini akan masuk pasar Indonesia.', '2012-06-12 13:42:05'),
(2, ' Developer Indonesia Raup Ratusan Juta dari Google Play', '0956472620X310.jpg', 'Beberapa waktu lalu saya tidak sengaja menemukan sebuah aplikasi buatan pengembang aplikasi Android asal Indonesia di Google Play, Hi-Q MP3 Recorder.\r\n\r\nUniknya, aplikasi buatan pengembang aplikasi asal Indonesia ini jenisnya aplikasi berbayar dan sudah diunduh puluhan ribu kali berdasarkan statistik yang ditampilkan di Google Play.\r\n', 'Beberapa waktu lalu saya tidak sengaja menemukan sebuah aplikasi buatan pengembang aplikasi Android asal Indonesia di Google Play, Hi-Q MP3 Recorder.\r\n\r\nUniknya, aplikasi buatan pengembang aplikasi asal Indonesia ini jenisnya aplikasi berbayar dan sudah diunduh puluhan ribu kali berdasarkan statistik yang ditampilkan di Google Play.\r\n\r\nSaya tertarik untuk menggali lebih dalam tentang aplikasi ini dan berhasil mengontak pengembang aplikasinya, yaitu Yuku Sugianto. Yuku lahir dan menjajaki sekolah hingga SMA di Bandung sebelum pindah ke Singapura untuk perkuliahannya di Nanyang Technological University.\r\n\r\nIa membuat sendiri aplikasi Hi-Q MP3 Recorder sekitar 2 tahun lalu dan kini telah diunduh sebanyak lebih dari 30.000 kali. Aplikasinya sendiri saat ini dijual seharga 3,99 USD.\r\n\r\nAwalnya, aplikasi itu sempat dijual seharga 2.99 USD, Yuku kemudian menaikkan harga aplikasi ini karena melihat peminatnya yang cukup banyak.\r\n\r\nJika dikalkulasikan, maka Hi-Q MP3 Recorder telah menghasilkan antara Rp. 807.300.000 – Rp. 1.077.300.000 atau rata-rata menghasilkan puluhan juta rupiah tiap bulannya (belum termasuk pemotongan 30% dari Google), angka yang cukup besar menurut saya.\r\n\r\n\r\nBagaimana Agar Berbayar?\r\n\r\nPengembang aplikasi Android di Indonesia tentu tahu bahwa mereka saat ini tidak dapat merilis aplikasi berbayar di Google Play. Hal yang sama juga dialami Yuku ketika merilis aplikasi 2 tahun lalu, walaupun dia saat itu sedang di Singapura.\r\n\r\nYuku mengatakan untuk menyiasati hal ini cara yang ia lakukan adalah dengan meminta tolong kepada teman yang tinggal atau setidaknya punya akun bank di Amerika Serikat.\r\n\r\nNah, hasil penjualannya di Google Play kemudian akan dimasukkan ke rekening sang teman. Kemudian temannya mengirimkan hasil penjualan aplikasinya lewat PayPal, dengan biaya (hanya) 5 USD sekali kirim.\r\n\r\nMenjual aplikasi berbayar tentu lebih sulit dibandingkan merilis aplikasi secara gratis di Google Play.\r\n\r\nMenurut Yuku, kebanyakan orang tidak berani membeli aplikasi berbayar di Google Play. Kecuali, ada versi demonya atau aplikasi dan pengembangnya sudah terkenal lewat media lain.\r\n\r\n\r\nTips Memasarkan Aplikasi\r\n\r\nUntuk pemasaran aplikasinya, ia bahkan tidak memakai media apa pun selain Google Play. Tidak ada Fan Page Facebook, Twitter, dan sebagainya.\r\n\r\nTips dari Yuku ternyata cukup sederhana. ia mengusahakan untuk membuat aplikasi serapih mungkin dengan sedikit fitur dulu.\r\n\r\nTujuannya, pengguna puas dan memberi rating tinggi sekaligus menyarankannya kepada pengguna-pengguna lain. Nah, Google Play akan secara otomatis meletakkan aplikasi dengan rating tinggi di atas.\r\n\r\nSetelah rilis dengan fitur yang sederhana tapi memuaskan, baru diikuti dengan rilis kecil-kecil. Ia mengaku tak mau pengguna kaget dengan banyak fitur baru yang belum tentu bekerja dengan baik.\r\n\r\n\r\nFungsional\r\n\r\nTujuan aplikasi Hi-Q MP3 Recorder menurut Yuku sebetulnya sederhana saja, yaitu memaksimalkan pemanfaatan mikrofon.\r\n\r\nSejak bertahun-tahun lalu ia tidak pernah puas dengan kualitas file rekaman pada ponsel Nokia S60 maupun yang berbasis Android. Padahal kalau ia cek mikrofonnya, dan rekam dalam format WAV, kualitasnya ternyata bagus sekali.\r\n\r\nMemang hasil rekaman WAV itu ukurannya sangat besar, karena itu ia pikir perlu dikompresi menjadi MP3. Sayang pemrograman Symbian S60 saat itu dirasakannya sulit sekali, jadi baru ia wujudkan pada Android.\r\n\r\nKe depan, rencananya Yuku akan terus memperbaharui aplikasi ini dengan menambah fitur-fitur seperti widget di home screen Android, encode ke format OGG, Dropbox sync dan sebagainya.\r\n\r\nHi-Q MP3 Recorder tersedia di Google Play, baik versi Full (berbayar)  maupun versi Lite (gratis)\r\n\r\n*Firman Nugraha adalah co-founder, lead editor, dan writer di situs teknologi Tekno Jurnal.', '2012-06-12 13:43:14'),
(3, 'Apple Berusaha Halangi Penjualan Galaxy S III', '0144315620X310.jpg', 'KOMPAS.com - Belum lagi resmi diluncurkan di AS, smartphone Galaxy S III dari Samsung sudah menghadapi kemungkinan pencekalan di negeri Paman Sam tersebut.\r\n\r\nMelalui kuasa hukum Josh Krevitt, Kamis lalu di pengadilan federal di San Jose, California, Apple menyatakan pihaknya kemungkinan bakal mengajukan pemintaan pencekalan sementara untuk menghentikan peluncuran perdana Samsung Galaxy S III di Amerika Serikat yang dijadwalkan pada tanggal 21 Juni.', 'KOMPAS.com - Belum lagi resmi diluncurkan di AS, smartphone Galaxy S III dari Samsung sudah menghadapi kemungkinan pencekalan di negeri Paman Sam tersebut.\r\n\r\nMelalui kuasa hukum Josh Krevitt, Kamis lalu di pengadilan federal di San Jose, California, Apple menyatakan pihaknya kemungkinan bakal mengajukan pemintaan pencekalan sementara untuk menghentikan peluncuran perdana Samsung Galaxy S III di Amerika Serikat yang dijadwalkan pada tanggal 21 Juni.\r\n\r\nAlasannya, Apple menuduh Samsung melanggar paten nomer 8086604 tentang teknologi pencarian terpadu (unified search) dan paten nomer 5946647 tentang metode eksekusi action pada struktur  data. Kedua paten Apple ini berkaitan dengan cara kerja perangkat lunak.\r\n\r\n"Karena pelanggaran paten Galaxy S III tersebut bisa menyebabkan kerugian dan kerusakan yang tidak bisa diperbaiki pada Apple, pengadilan sebaiknya mempertimbangkan permintaan Apple untuk memberlakukan pencegahan awal sebelum Galaxy S III diluncurkan di Amerika Serikat," tulis Apple dalam  aduannya.\r\n\r\nTahun lalu Apple menuduh Samsung meniru sejumlah elemen kunci dari iPhone dan iPad pada produk smartphone dan tablet Galaxy bikinan perusahaan Korea tersebut.\r\n\r\nDi sisi lain, Samsung mengatakan bahwa permintaan pencekalan dari Apple "tidak berdasar". "Kami menentang permintaan tersebut dan akan mendemonstrasikan inovasi dan keunikan Galaxy S III pada pengadilan," ujar seorang juru bicara Samsung, seperti dilansir oleh Cnet.\r\n\r\nMenurut pihak Samsung, Apple tidak bisa mengajukan pencekalan secara tiba-tiba atas Galaxy S III.\r\n\r\nMengenai pelanggaran paten, kuasa hukum Samsung William Price menjelaskan bahwa teknologi yang tercakup dalam paten Apple -seperti koreksi teks otomatis- tidak dijadikan motor penjualan seri smartphone Galaxy. "Fitur-fitur ini tidak diiklankan atau dipasarkan," ujar Price.\r\n\r\nPrice menambahkan, Apple sebenarnya hanya berusaha "mencegah publik mendapatkan smartphone yang jauh lebih baik dalam banyak hal daripada produk Apple."\r\n\r\nSamsung bukan produsen pertama yang produknya coba dicekal Apple. Bulan lalu Apple berhasil menghentikan impor smartphone One X dan Evo 4G LTE milik HTC lewat U.S. International Trade Commission.  ', '2012-06-12 13:44:09'),
(4, 'Ponsel Yang Jadi "Bintang" di ICS 2012', '2059459p.jpg', 'JAKARTA, KOMPAS.com - Indonesia Cellular Show (ICS) bekerjasama dengan Tabloid Sinyal memberikan penghargaan kepada vendor ponsel yang telah berpartisipasi di ajang ICS 2012. Ajang ini merupakan apresiasi terhadap vendor di tanah air.\r\n\r\nJuri Indonesia Cellular Award (ICA) FX Bambang Irawan menjelaskan penilaian juri ini dilakukan sejak tanggal 1 April 2012 hingga 23 Mei 2012. Seleksi diikuti oleh 32 prinsipal ponsel yang menominasikan 65 seri ponsel serta 10 operator.', 'JAKARTA, KOMPAS.com - Indonesia Cellular Show (ICS) bekerjasama dengan Tabloid Sinyal memberikan penghargaan kepada vendor ponsel yang telah berpartisipasi di ajang ICS 2012. Ajang ini merupakan apresiasi terhadap vendor di tanah air.\r\n\r\nJuri Indonesia Cellular Award (ICA) FX Bambang Irawan menjelaskan penilaian juri ini dilakukan sejak tanggal 1 April 2012 hingga 23 Mei 2012. Seleksi diikuti oleh 32 prinsipal ponsel yang menominasikan 65 seri ponsel serta 10 operator.\r\n\r\n"Merek ponsel yang tahun sebelumnya dominan bisa saja tergantikan dengan merek lain yang memiliki kiat baru memenangkan persaingan di tahun ini. Sebaliknya ada juga yang sanggup mempertahankan kinerja bisnisnya dalam kondisi yang tak begitu kondusif bagi perkembangan bisnis," kata Bambang dalam konferensi pers ICA saat penutupan ICS di Jakarta Convention Center (JCC), Minggu (10/6/2012).\r\n\r\nICA merupakan penghargaan seluler yang paling independen di tanah air, tidak disponsori oleh vendor manapun. Dewan juri dipilih dari pihak independen, seperti mantan wartawan Kompas serta staf ahli redaksi Tabloid Sinyal Moch S Hendrowijono, Editor in Chief Tabloid Sinyal FX Bambang Irawan, Editor in Chief Majalah Forsel Vaksiandra Nuryadi, praktisi pasar seluler Djatmiko Wardoyo dan pengamat telekomunikasi Herry Setiadi Wibowo.\r\n', '2012-06-12 13:44:57'),
(5, ' Samsung Bantah Rencana Beli Nokia', '0911418620X310.jpg', 'KOMPAS.com - Kabar yang beredar minggu lalu tentang rencana Samsung membeli Nokia segera mendapat bantahan dari salah satu perusahaan terkait. Seperti dilansir oleh The Next Web, pihak Samsung mengatakan bahwa kabar tersebut "tidak benar" dan "hanya spekulasi".', 'KOMPAS.com - Kabar yang beredar minggu lalu tentang rencana Samsung membeli Nokia segera mendapat bantahan dari salah satu perusahaan terkait. Seperti dilansir oleh The Next Web, pihak Samsung mengatakan bahwa kabar tersebut "tidak benar" dan "hanya spekulasi".\r\n\r\nSebelumnya, pemberitaaan tentang rencana akuisisi oleh Samsung telah mengakibatkan harga saham Nokia melonjak sebesar 6 persen pada penutupan perdagangan hari Jumat, 8 Juni 2012. Bantahan Samsung yang dinyatakan kemarin (11/6/2012) mengakibatkan harga saham Nokia turun 2 persen.\r\n\r\nPada 2011, Samsung juga sempat dikabarkan bakal membeli Nokia.\r\n\r\nSamsung adalah vendor ponsel pintar Android terbesar di dunia yang pada perempat pertama 2012 melewati posisi Nokia sebagai produsen ponsel nomer satu dengan menjual 45 juta unit smartphone.\r\n\r\nDi sisi lain, Nokia memilih sistem operasi Windows Phone dari Microsoft untuk ponsel pintarnya. Perusahaan asal Finlandia ini sedang berusaha bangkit kembali dengan merilis model-model produk baru, termasuk seri ponsel terjangkau Asha.', '2012-06-12 14:09:49'),
(6, 'Berburu Hard Disk Eksternal di FKI 2012', '1143156620X310.jpg', 'JAKARTA, KOMPAS.com - Pertumbuhan jumlah pengguna komputer pribadi dan kebutuhan tempat penyimpanan data yang mobile membuat permintaan terhadap hard disk eksternal naik.\r\n\r\nBerdasarkan pantauan KompasTekno di area Festival Komputer Indonesia 2012 di Jakarta Convention Center, perangkat hard disk eksternal sudah mulai diminati pengunjung pameran. ', 'JAKARTA, KOMPAS.com - Pertumbuhan jumlah pengguna komputer pribadi dan kebutuhan tempat penyimpanan data yang mobile membuat permintaan terhadap hard disk eksternal naik.\r\n\r\nBerdasarkan pantauan KompasTekno di area Festival Komputer Indonesia 2012 di Jakarta Convention Center, perangkat hard disk eksternal sudah mulai diminati pengunjung pameran.\r\n\r\nApalagi harga yang ditawarkan sudah sedikit lebih murah bila dibandingkan selepas terjadi banjir di Thailand akhir tahun lalu, yang turut menyebabkan pabrik hard disk di sana terendam air.\r\n\r\nNamun, tidak banyak vendor hard disk yang ikut berpartisipasi dalam pameran tersebut. Mereka di antaranya adalah vendor hard disk besar seperti Western Digital, Buffalo dan Toshiba.\r\n', '2012-06-12 14:10:28'),
(13, 'Ponsel Yang Jadi "Bintang" di ICS 2012', '2059459p.jpg', 'JAKARTA, KOMPAS.com - Indonesia Cellular Show (ICS) bekerjasama dengan Tabloid Sinyal memberikan penghargaan kepada vendor ponsel yang telah berpartisipasi di ajang ICS 2012. Ajang ini merupakan apresiasi terhadap vendor di tanah air.\r\n\r\nJuri Indonesia Cellular Award (ICA) FX Bambang Irawan menjelaskan penilaian juri ini dilakukan sejak tanggal 1 April 2012 hingga 23 Mei 2012. Seleksi diikuti oleh 32 prinsipal ponsel yang menominasikan 65 seri ponsel serta 10 operator.', 'JAKARTA, KOMPAS.com - Indonesia Cellular Show (ICS) bekerjasama dengan Tabloid Sinyal memberikan penghargaan kepada vendor ponsel yang telah berpartisipasi di ajang ICS 2012. Ajang ini merupakan apresiasi terhadap vendor di tanah air.\r\n\r\nJuri Indonesia Cellular Award (ICA) FX Bambang Irawan menjelaskan penilaian juri ini dilakukan sejak tanggal 1 April 2012 hingga 23 Mei 2012. Seleksi diikuti oleh 32 prinsipal ponsel yang menominasikan 65 seri ponsel serta 10 operator.\r\n\r\n"Merek ponsel yang tahun sebelumnya dominan bisa saja tergantikan dengan merek lain yang memiliki kiat baru memenangkan persaingan di tahun ini. Sebaliknya ada juga yang sanggup mempertahankan kinerja bisnisnya dalam kondisi yang tak begitu kondusif bagi perkembangan bisnis," kata Bambang dalam konferensi pers ICA saat penutupan ICS di Jakarta Convention Center (JCC), Minggu (10/6/2012).\r\n\r\nICA merupakan penghargaan seluler yang paling independen di tanah air, tidak disponsori oleh vendor manapun. Dewan juri dipilih dari pihak independen, seperti mantan wartawan Kompas serta staf ahli redaksi Tabloid Sinyal Moch S Hendrowijono, Editor in Chief Tabloid Sinyal FX Bambang Irawan, Editor in Chief Majalah Forsel Vaksiandra Nuryadi, praktisi pasar seluler Djatmiko Wardoyo dan pengamat telekomunikasi Herry Setiadi Wibowo.\r\n', '2012-06-12 13:44:57'),
(14, 'Berburu Hard Disk Eksternal di FKI 2012', '1143156620X310.jpg', 'JAKARTA, KOMPAS.com - Pertumbuhan jumlah pengguna komputer pribadi dan kebutuhan tempat penyimpanan data yang mobile membuat permintaan terhadap hard disk eksternal naik.\r\n\r\nBerdasarkan pantauan KompasTekno di area Festival Komputer Indonesia 2012 di Jakarta Convention Center, perangkat hard disk eksternal sudah mulai diminati pengunjung pameran. ', 'JAKARTA, KOMPAS.com - Pertumbuhan jumlah pengguna komputer pribadi dan kebutuhan tempat penyimpanan data yang mobile membuat permintaan terhadap hard disk eksternal naik.\r\n\r\nBerdasarkan pantauan KompasTekno di area Festival Komputer Indonesia 2012 di Jakarta Convention Center, perangkat hard disk eksternal sudah mulai diminati pengunjung pameran.\r\n\r\nApalagi harga yang ditawarkan sudah sedikit lebih murah bila dibandingkan selepas terjadi banjir di Thailand akhir tahun lalu, yang turut menyebabkan pabrik hard disk di sana terendam air.\r\n\r\nNamun, tidak banyak vendor hard disk yang ikut berpartisipasi dalam pameran tersebut. Mereka di antaranya adalah vendor hard disk besar seperti Western Digital, Buffalo dan Toshiba.\r\n', '2012-06-12 14:10:28'),
(15, 'Berburu Hard Disk Eksternal di FKI 2012', '1143156620X310.jpg', 'JAKARTA, KOMPAS.com - Pertumbuhan jumlah pengguna komputer pribadi dan kebutuhan tempat penyimpanan data yang mobile membuat permintaan terhadap hard disk eksternal naik.\r\n\r\nBerdasarkan pantauan KompasTekno di area Festival Komputer Indonesia 2012 di Jakarta Convention Center, perangkat hard disk eksternal sudah mulai diminati pengunjung pameran. ', 'JAKARTA, KOMPAS.com - Pertumbuhan jumlah pengguna komputer pribadi dan kebutuhan tempat penyimpanan data yang mobile membuat permintaan terhadap hard disk eksternal naik.\r\n\r\nBerdasarkan pantauan KompasTekno di area Festival Komputer Indonesia 2012 di Jakarta Convention Center, perangkat hard disk eksternal sudah mulai diminati pengunjung pameran.\r\n\r\nApalagi harga yang ditawarkan sudah sedikit lebih murah bila dibandingkan selepas terjadi banjir di Thailand akhir tahun lalu, yang turut menyebabkan pabrik hard disk di sana terendam air.\r\n\r\nNamun, tidak banyak vendor hard disk yang ikut berpartisipasi dalam pameran tersebut. Mereka di antaranya adalah vendor hard disk besar seperti Western Digital, Buffalo dan Toshiba.\r\n', '2012-06-12 14:10:28'),
(11, 'Chip Baru Bikin Laptop Sanggup "Lahap Game Berat"', '2227464620X310.jpg', 'KOMPAS.com - Berita bagus untuk gamer yang gemar main game-game "berat", alias memiliki kualitas grafis tinggi, dengan memakai laptop.\r\n\r\nNvidia telah merilis GeForce GTX 680M, chip pengolah grafis (GPU) mobile yang diklaim perusahaan tersebut sebagai yang terkencang yang pernah dibuat.', '\r\nChip Baru Bikin Laptop Sanggup "Lahap Game Berat"\r\nOik Yusuf | Wicaksono Surya Hidayat | Rabu, 6 Juni 2012 | 19:07 WIB\r\nDibaca: 8068\r\nKomentar: -\r\n|\r\nShare:\r\nNVIDIA\r\n\r\nKOMPAS.com - Berita bagus untuk gamer yang gemar main game-game "berat", alias memiliki kualitas grafis tinggi, dengan memakai laptop.\r\n\r\nNvidia telah merilis GeForce GTX 680M, chip pengolah grafis (GPU) mobile yang diklaim perusahaan tersebut sebagai yang terkencang yang pernah dibuat.\r\n\r\nGeForce GTX 680M yang memiliki arsitektur "Kepler" tersebut dibuat dengan proses fabrikasi 28 nm. Di dalamnya terdapat 1.344 inti prosesor (core) yang bekerja pada frekuensi 720 MHz.\r\n\r\nUntuk menyalurkan data grafis, Nvidia memadukan GTX 680M dengan RAM GDDR5 256-bit berkecepatan 3,6 GHz hingga sejumlah 4 GB.\r\n\r\nSebagai perbandingan, GeForce GTX 660M yang berada di bawah GTX 680M  memiliki 684 inti prosesor yang berjalan pada frekuensi 835 MHz. Adapun GTX 675M menggunakan arsitektur berbeda (dengan kode nama "Fermi") meskipun menggunakan nama yang mirip.', '2012-06-12 14:11:18'),
(23, 'ghjghjghjghj', '013.jpg', 'ddddddddddsssssssssssssssssssssssss', '1111111111111111111111111111111111111111', '2009-05-05 04:57:05'),
(24, 'Berburu Hard Disk Eksternal di FKI 2012', '019.jpg', 'KOMPAS.com - Berita bagus untuk gamer yang gemar main game-game "berat", alias memiliki kualitas grafis tinggi, dengan memakai laptop.\r\n\r\nNvidia telah merilis GeForce GTX 680M, chip pengolah grafis (GPU) mobile yang diklaim perusahaan tersebut sebagai yang terkencang yang pernah dibuat.', 'KOMPAS.com - Berita bagus untuk gamer yang gemar main game-game "berat", alias memiliki kualitas grafis tinggi, dengan memakai laptop.\r\n\r\nNvidia telah merilis GeForce GTX 680M, chip pengolah grafis (GPU) mobile yang diklaim perusahaan tersebut sebagai yang terkencang yang pernah dibuat.', '2017-05-24 04:33:05'),
(25, 'Chip Baru Bikin Laptop Sanggup ', '021.jpg', 'KOMPAS.com - Berita bagus untuk gamer yang gemar main game-game "berat", alias memiliki kualitas grafis tinggi, dengan memakai laptop.\r\n\r\nNvidia telah merilis GeForce GTX 680M, chip pengolah grafis (GPU) mobile yang diklaim perusahaan tersebut sebagai yang terkencang yang pernah dibuat.', 'KOMPAS.com - Berita bagus untuk gamer yang gemar main game-game "berat", alias memiliki kualitas grafis tinggi, dengan memakai laptop.\r\n\r\nNvidia telah merilis GeForce GTX 680M, chip pengolah grafis (GPU) mobile yang diklaim perusahaan tersebut sebagai yang terkencang yang pernah dibuat.', '2017-04-24 04:35:05'),
(21, 'sdfsdfsdfdsfdsf', '020.jpg', 'ttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt', 'fffffffffffffffffffffffffffffffff', '2009-05-05 04:57:05');

-- --------------------------------------------------------

--
-- Table structure for table `slider_tbl`
--

CREATE TABLE `slider_tbl` (
  `id` int(11) NOT NULL,
  `image` varchar(256) NOT NULL,
  `title` varchar(256) NOT NULL,
  `desc` text NOT NULL,
  `createdate` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider_tbl`
--

INSERT INTO `slider_tbl` (`id`, `image`, `title`, `desc`, `createdate`) VALUES
(1, 'slider1.jpg', 'slider 1', 'slider nomer 1', '2012-06-18 13:56:40'),
(2, 'slider2.jpg', 'slider 2', 'slider nomer 2', '2012-06-18 13:56:52'),
(3, 'slider3.jpg', 'slider 3', 'slider noemr 3', '2012-06-18 13:57:33');

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `id` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `userpassword` varchar(256) NOT NULL,
  `createdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`id`, `username`, `userpassword`, `createdate`) VALUES
(1, 'baba', 'd90dd48e646b973e67e7e69569b0d53f', '2012-01-30 16:50:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_tbl`
--
ALTER TABLE `blog_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_tbl`
--
ALTER TABLE `gallery_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member_tbl`
--
ALTER TABLE `member_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newscomment_tbl`
--
ALTER TABLE `newscomment_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_tbl`
--
ALTER TABLE `news_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_tbl`
--
ALTER TABLE `slider_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_tbl`
--
ALTER TABLE `blog_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gallery_tbl`
--
ALTER TABLE `gallery_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `member_tbl`
--
ALTER TABLE `member_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `newscomment_tbl`
--
ALTER TABLE `newscomment_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `news_tbl`
--
ALTER TABLE `news_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `slider_tbl`
--
ALTER TABLE `slider_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
