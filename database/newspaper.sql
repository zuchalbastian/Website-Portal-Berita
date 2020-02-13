-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 08, 2016 at 10:02 
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `newspaper`
--

-- --------------------------------------------------------

--
-- Table structure for table `hak_akses`
--

CREATE TABLE IF NOT EXISTS `hak_akses` (
  `id_hak_akses` varchar(5) NOT NULL,
  `nama_hak_akses` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id_hak_akses`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hak_akses`
--

INSERT INTO `hak_akses` (`id_hak_akses`, `nama_hak_akses`) VALUES
('1', 'Administrator'),
('2', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `isi_berita`
--

CREATE TABLE IF NOT EXISTS `isi_berita` (
  `id_berita` int(11) NOT NULL AUTO_INCREMENT,
  `id_kategori` varchar(5) NOT NULL,
  `judul` varchar(40) DEFAULT NULL,
  `sumber` varchar(40) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `waktu` time DEFAULT NULL,
  `gambar` longtext,
  `isi` text,
  PRIMARY KEY (`id_berita`,`id_kategori`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=124 ;

--
-- Dumping data for table `isi_berita`
--

INSERT INTO `isi_berita` (`id_berita`, `id_kategori`, `judul`, `sumber`, `tanggal`, `waktu`, `gambar`, `isi`) VALUES
(1, '1', 'Dell XPS 12 ', 'www.techradar.com', '2016-02-22', '21:48:51', 'img/Dell_XPS_12_(2015)-1-1200-80.jpg', '<p>\r\nDell XPS 12 adalah perangkat indah yang canggih, dan sekaligus salah satu aneh laptop 2-in-1 yang pernah dibuat. Seperti banyak perangkat hybrid sebelum, XPS 12 terdiri dari dua bagian yang berbeda yang dibagi menjadi tablet 12-inci dan bagian keyboard yang disebut Basis Premier.</p>\r\n\r\n<p>\r\nNamun, perbedaan besar adalah bahwa ada tampaknya tidak memegang dua bagian perangkat bersama-sama ketika Anda memilikinya di pangkuan Anda. Anda tidak akan menemukan mekanisme menempel atau garpu untuk mengamankan layar untuk keyboard. Sebaliknya, layar hanya slot di tempat dengan alur dipotong menjadi dasar utama.</p>\r\n\r\n<p>\r\nIni sedikit mengerikan bahwa tidak ada yang kongkrit memegang dua bagian perangkat, tapi itu semua bekerja dengan sangat baik. Melalui kekuatan gravitasi, gesekan dan beberapa magnet tersetel, dasar memegang bagian atas perangkat snuggly di tempat sementara masih memungkinkan Anda untuk dengan mudah mengangkatnya off.</p>\r\n\r\n<p>\r\nSetelah Anda mendapatkan atas fakta tidak ada engsel, ia mulai merasa alami untuk membuka dan menutup layar. Bagian tablet hampir selalu sejalan - tanpa rewel - dengan bagian bawah perangkat ketika lipat ditutup.</p>\r\n\r\n<p>\r\nHal yang paling aneh tentang tablet 12 inci ini bezels besar, yang bertentangan dengan desain layar infinity terlihat pada seri XPS sisa Dell. Namun, itu masuk akal, karena ujung-ujungnya lebih besar memungkinkan Anda untuk memegang batu tulis tanpa sengaja memicu layar sentuh. Bezel atas juga sangat besar untuk membuat jalan bagi speaker tablet, yang saya akan menyentuh pada lagi nanti.</p>\r\n'),
(2, '1', 'Vaio S Laptop Skylake Premium Baru ', 'www.techradar.com', '2016-02-22', '21:50:40', 'img/VAIO_Z_Flip-970-80.jpg', '<p>Vaio S laptop Skylake premium baru membanggakan beberapa sentuhan desain yang benar-benar cerdas.</p>\r\n\r\n<p>\r\nVaio telah mengumumkan peluncuran kopling laptop baru, termasuk sepasang model flagship baru, Vaio Z, dan kurang premium (atau "standar" model) Vaio S.</p>\r\n\r\n<p>\r\nSemua ini ditujukan untuk pengguna bisnis, meskipun setiap pengguna mungkin tergoda oleh notebook ini ringan dan tahan lama yang membanggakan baterai yang mengesankan untuk umur panjang bergerak, dan beberapa sentuhan yang sangat bijaksana di depan desain.</p>\r\n\r\n<p>\r\nVaio Z hadir dalam dua varian, notebook clamshell tradisional dan convertible 2-in-1 dengan nama Vaio Z sandal.</p>\r\n\r\n<p>\r\nVaio Z menawarkan layar 13,3 inci dengan 2560 x 1440 resolusi (meskipun ada pilihan untuk melangkah yang turun ke layar full HD pada model clamshell). Mesin penggerak layar yang merupakan prosesor Skylake Core i7, dan sebagai untuk daya tahan baterai, Vaio mengklaim hingga 15 jam dan 30 menit dari umur panjang untuk clamshell, dan 11 jam dan 30 menit untuk flip.</p>\r\n\r\n<p>\r\nTingkat tinggi membangun kualitas yang dijanjikan, dengan chassis tahan lama yang mempekerjakan aluminium dan karbon, dan touchpad menggunakan mika untuk merasa memuaskan dan nyaman di bawah ujung jari.</p>\r\n'),
(3, '2', 'Honor 5X', 'www.techradar.com', '2016-02-22', '22:37:33', 'img/Honor_Screen-2-1200-80.jpg', '<p>Honor 5X telah memiliki peluncuran aneh untuk sedikitnya, sesuatu yang produsen Cina tidak terpakai untuk. Ini diumumkan kembali pada bulan Oktober 2015, dirilis di beberapa pasar Asia pada bulan berikutnya, dan kemudian ditampilkan off lagi di CES 2016 di Las Vegas untuk rilis di AS.</p>\r\n\r\n<p>\r\nHonor telah berhasil membuat ponsel tampak hebat, penyaluran elemen perusahaan induknya Huawei dan Mate 8 phablet nya. Ini memiliki bahasa desain yang sama, tapi dilengkapi dengan layar yang lebih kecil dalam bentuk 5,5 inci, panel 1080p.</p>\r\n\r\n<p>\r\nItu sama dengan 408 ppi - dan itu terlihat hanya sebagai baik sebagai tampilan Mate 8, membuktikan itu tidak semua tentang 2K.</p>\r\n\r\n<p>\r\nLayar hidup, dan membolak-balik Emotion berwarna-warni UI 3.1 membawa keluar apa layar yang bisa dilakukan.</p>\r\n\r\n<p>\r\nTapi yang paling Honor 5X mengambil dari Huawei Mate 8 adalah desain. nuansa aluminium disikat keluar dengan kekuatan penuh dan itu kasus dari jika tidak rusak, jangan memperbaikinya.</p>\r\n\r\n<p>\r\nSepertinya ponsel premium, kualitas segera setelah Anda mengambilnya. Rasanya seperti memiliki berat badan Anda harapkan ketika Anda mengambil sebuah ponsel high-end, dan meskipun beberapa mencari uang ponsel paling ringan dapat membeli, itu tidak mungkin menjadi phablet pecinta hak prerogatif.</p>\r\n'),
(4, '2', 'Sony Xperia Z5 Compact', 'www.techradar.com', '2016-02-22', '22:38:35', 'img/Xperia-Z5-Compact-650-80.jpg', '<p>Update: Sony Xperia Z5 Compact dirilis di Amerika Serikat saat ini, meskipun dengan sedikit perubahan. Semua ini tercermin dalam ulasan baru.</p>\r\n\r\n<p>\r\nXperia Z5 Compact berdiri sendiri: Sony adalah satu-satunya produsen Android membuat ponsel high-end kecil sekarang. Itu berarti bahwa hal itu bisa berdiri terakhir untuk compacts. Jika Z5 tidak memberikan, itu mungkin menjadi yang terakhir kalinya kita melihat spesifikasi atas dalam faktor bentuk skala-down, untuk sementara setidaknya.\r\nTapi itu memberikan. Seperti Xperia Z3 Compact sebelum, Xperia Z5 Compact menempatkan jajaran fitur nyaman ke telapak tangan Anda, dan membuat Anda bertanya-tanya mengapa tidak ada merek lain yang tertarik di ceruk ini.</p>\r\n\r\n<p>\r\nXperia Z5 Compact telah kehilangan banyak ruang bezel yang merasa begitu berlebihan pada Z5, dan merasa banyak lebih ringkas dari saudaranya yang lebih besar.</p>\r\n\r\n<p>\r\nAnda mungkin telah memperhatikan bahwa Z5 Compact sebenarnya lebih besar daripada Z5 di satu dimensi, itu sedikit lebih tebal. Itu untuk cocok semua spesifikasi high-end dan baterai yang lebih besar daripada ponsel yang lebih besar. Aku hampir tidak melihat perbedaan ketebalan sampai aku menempatkan mereka di samping satu sama lain, dan bahkan kemudian tidak semua yang mengejutkan.</p>\r\n'),
(5, '4', 'Rollei Actioncam 402 ', 'www.techradar.com', '2016-02-22', '22:40:05', 'img/Rollei_Actioncam_420-650-80.jpg', '<p>Rollei Actioncam 402 pada dasarnya sebuah GoPro besar dengan desain kotak akrab terbungkus dalam perumahan yang tahan air. Memastikan 420 menonjol dalam pasar yang ramai, Rollei menawarkan kamera dalam tiga warna: hitam, biru atau putih. Hal ini juga satu-satunya anggaran kamera untuk menawarkan lensa datar di perumahan tanpa sekrup atau indentasi, yang berarti bahwa itu mudah dibersihkan dan langsung menang kasih sayang.</p>\r\n\r\n<p>\r\n4K adalah fitur judul besar dan ini bergabung dengan banyak resolusi lain dan frame rate, termasuk full HD pada 60fps dan 720p pada 120fps; sempurna untuk menangkap rekaman gerakan lambat. Bagian depan kamera fitur kecil f / 2.5 lensa dengan bidang 170-derajat pandang.</p>\r\n\r\n<p>\r\n420 juga menawarkan berbagai mode bersama video. termasuk Foto, selang waktu, gerakan lambat, Mengemudi dan Motion deteksi, memberikan Anda banyak pilihan. Wi-Fi didukung oleh sebuah aplikasi untuk Android dan iOS dan ini sangat rapi dan sederhana, memungkinkan biasa live view dan pengaturan penyesuaian. Ukuran yang lebih besar dari 420 juga berarti bahwa ia memiliki LCD 2 inci berukuran layak di bagian belakang.</p>\r\n\r\n<p>\r\nPowering kamera adalah 3.7V 1180mAh baterai yang memasok cukup biaya selama hampir dua jam penggunaan terus-menerus, meskipun baterai ini disegel dan tidak saling dipertukarkan. dasar ini juga dilengkapi dengan tripod standar yang sangat berguna meningkat sehingga kamera dapat dengan mudah dihapus dari kasus ini dan dipasang pada tripod tanpa perlu aksesoris tambahan.</p>\r\n'),
(7, '3', 'Apple TV', 'www.techradar.com', '2016-02-23', '08:03:42', 'img/Apple_TV_Hero-1200-80.jpg', '<p>Update: App Store Apple TV ini adalah mendapatkan update kecil minggu ini. Pengembang sekarang dapat mencakup video saat mengirimkan aplikasi ke App Store, serupa dengan cara kerjanya di iOS.<p>\r\n\r\n<p>\r\nUlasan Asli</p>\r\n\r\n<p>\r\nJika ada di gelembung, baru 2015 Apple TV akan menjadi produk bintang. Ini menawarkan peningkatan yang stabil dari pendahulunya tiga tahun stagnan - perangkat dibangun untuk standar baru kemudian revolusioner 1080p - dan dilengkapi dengan salah satu yang paling remote premium di pasar.</p>\r\n\r\n<p>\r\nJika ada apa-apa untuk membandingkannya dengan, itu akan sulit untuk menunjukkan jumlah kekurangan sistem memiliki. Itu kurang dukungan Amazon Prime Video asli, misalnya, dan Siri mengakui kurang dari setengah perintah pada Apple TV baru daripada yang dilakukannya pada iOS, watchOS atau OSX.</p>\r\n\r\n<p>\r\nItu belum lagi fakta Siri adalah bersuara saat ini, mengandalkan teks dan grafis untuk menanggapi setiap pertanyaan yang mungkin Anda miliki.</p>\r\n\r\n<p>\r\nRemote itu sendiri Saya sangat suka, seperti yang dilakukan banyak pengembang saya sudah berbicara tentang hal itu. Tapi itu bukan obat mujarab Apel dipasarkan sebagai. Memasukkan teks satu huruf pada suatu waktu untuk password membosankan, dan pada saat ini tidak ada cara menghubungkan iPhone atau iPad untuk langkah ketika Anda bosan slogging melalui deretan panjang huruf.</p>\r\n\r\n<p>\r\nBaca: Lihat panduan kami untuk yang terbaik aksesoris Apple TV!\r\nTapi itulah halangan dengan Apple TV baru: itu hanya malu menjadi produk kami dijanjikan.</p>\r\n\r\n<p>\r\nIni mungkin sangat baik menjadi salah satu hari setelah sistem tumbuh, mendapat beberapa patch dan lebih pengembang melihat janji yang sama di ruang tamu mereka lihat di kantong dan tablet kami. Tapi, untuk saat ini, ada banyak pekerjaan yang perlu dilakukan dan kompetisi tidak menunjukkan tanda-tanda akan mudah.</p>'),
(6, '4', 'Fuji X-Pro2 ', 'www.techradar.com', '2016-02-23', '07:55:09', 'img/Body-3-1200-80.jpg', '<p>Dengan merek baru sensor, prosesor dan jendela bidik hybrid yang unik di kapal, X-Pro 2 bertujuan untuk menetapkan standar baru untuk pengguna enthusiast.</p>\r\n\r\n<p>\r\nBeberapa kamera mirrorless mengembangkan sekuat fanbase sebagai Fuji X-Pro1, dan bahkan lebih sedikit berhasil menarik selebar demografi seperti itu akhirnya tidak. Dengan gaya klasik dan kontrol manual, segera menarik fotografer berpengalaman yang mungkin sudah mulai keluar dengan pengukur jarak dengan gaya yang mirip, sedangkan kualitas gambar yang halus dan garis stabil optik dianggap baik perlahan dirilis bersama berarti bahwa itu cepat menjadi kamera orang lain ingin untuk memiliki juga.</p>\r\n\r\n<p>\r\nBenar, sebagai model interchangeable-lens pertama di X-series tiba dengan beberapa kebiasaan dan keistimewaan yang tidak untuk semua orang selera. sistem fokus, misalnya, tidak terlalu mahir menangkap subjek yang bergerak, sedangkan teknologi sensor X-Trans yang unik terbukti bermasalah ketika datang ke kualitas video. update firmware yang dikeluarkan untuk mengatasi beberapa masalah ini, tapi empat tahun adalah waktu yang lama dalam teknologi kamera dan nafsu untuk refresh sangat jelas.</p>\r\n\r\n<p>\r\nDan di sini adalah, X-Pro. Ini mempertahankan formula kemenangan pendahulunya sementara meremajakan set fitur inti. Dengan sensor baru dan prosesor pada papan, bersama-sama dengan sistem fokus segar dan hybrid viewfinder diperbarui, tampak baik sebagai upgrade yang signifikan dan berpotensi kamera untuk menang atas orang-orang tidak percaya dengan X-Pro1.</p>'),
(8, '3', 'Pioneer XDP Audio Visual', 'www.techradar.com', '2016-02-23', '08:14:19', 'img/Pioneer_XDP_100R-1200-80.jpg', '<p>Pioneer XDP-100R adalah pertama audio resolusi tinggi (HRA) pemain perusahaan, dan telah dipahami sebagai alternatif asli Riset Acoustic lebih mahal dan perangkat Astell & Kern.</p>\r\n\r\n<p>\r\nItu juga ditetapkan menjadi salah satu pemain pertama yang akan dapat mengambil keuntungan dari format file baru Guru Kualitas dikonfirmasi (MQA) yang ditetapkan untuk memulai tahun ini.</p>\r\n\r\n<p>\r\nBeli Pioneer XDP-100R S (Silver) 32GB Resolusi Tinggi Portabel Audio Player (Jepang Impor) di Amazon untuk $ 585,00</p>\r\n\r\n<p>\r\nItulah teknologi yang akan membawa bona fide audio resolusi tinggi untuk generasi Streaming - dan jika Anda tidak bersemangat tentang yang Anda butuhkan telinga Anda memeriksa.</p>\r\n\r\n<p>\r\nSementara sebagian orang masih senang untuk tetap dengan menjalankan Spotify dari ponsel mereka, lebih dan lebih dari kita benar-benar mulai peduli tentang suara kita membanjiri telinga kita dengan.</p>\r\n\r\n<p>\r\nItu tidak berarti kita menjadi audiophiles leher-mengenakan polo dengan kamar mendengarkan dipesan lebih dahulu - itu hanya berarti ada pengakuan yang berkembang bahwa ada yang lebih baik terdengar di luar sana dari YouTube, Spotify dan Apple telinga-tunas berekor putih.</p>\r\n\r\n<p>\r\nSebanyak yang kita bisa memfitnah rakasa pemasaran-over-kualitas gaya yang Dre Beats merek headphone, mereka telah terbukti menjadi obat gerbang ke headphone yang lebih tinggi-end, dan kemudian sumber audio berkualitas tinggi.</p>\r\n\r\n<p>\r\nDan itu berarti ada lebih dan lebih dari pasar untuk pemain portabel berkualitas tinggi juga.</p>\r\n\r\n<p>\r\nPerintis memasuki penonton yang sedang berkembang ini untuk meningkatkan kualitas dengan pemain XDP-100R, sebuah perangkat yang secara harfiah memakai kecenderungan audio resolusi tinggi pada lengan atas.</p>'),
(9, '4', 'Samsung Gear 360', 'www.techradar.com', '2016-02-27', '08:19:53', 'img/samsung-gear-360-hero-1200-80.jpg', '<p>Melihat Samsung Gear 360 secara pribadi segera mengingatkan saya webcam Logitech saya dari tahun 90-an, tapi itu sebenarnya paling mutakhir teknologi VR capture untuk konsumen suling menjadi bola kecil.</p>\r\n\r\n<p>Dengan menekan sebuah tombol, saya bisa membangun sendiri dunia virtual reality saya di MWC 2016, berkat lensa fisheye dual yang menjahit bersama 360 video dan menangkap 30MP masih foto. Ini adalah semudah itu.</p>\r\n \r\n<p>The Samsung Gear 360 bukan satu-satunya konsumen kelas kamera VR menangkap saya diuji di MWC. LG 360 Cam, juga mengumumkan sini di Barcelona, memiliki ambisi sudut lebar yang sama.</p>\r\n\r\n<p>Tapi Samsung punya keuntungan: memiliki headset virtual reality populer di kepala pengguna ponsel Galaxy nya sekarang, dan memiliki kemitraan Facebook penting untuk konten.</p>\r\n\r\n<p>Semua ini pergi ke bahan bakar headset Samsung Gear VR sebagai metode de facto mengalami realitas virtual tanpa harus menghabiskan banyak uang pada Oculus Rift dan HTC Vive.</p>\r\n\r\n<p>Design</p>\r\n\r\n<p>The bola Samsung Gear 360 dibangun untuk menjadi teraba dan ringan untuk on-the-go syuting, berarti Anda akan dapat tote itu di seluruh dunia dan menangkap perjalanan Anda di 360 derajat.</p>\r\n\r\n<p>Ini bukan tugas berat peralatan lagi, berukuran 66,7 x 56,2 x 60 mm - sedikit lebih kecil dari ukuran bisbol - dan memiliki berat 153g saat baterai disertakan.</p>\r\n\r\n<p>Baik adalah mini, tripod mudah-connect. Ia menggunakan standar kamera 1/4 benang inci, yang berarti dapat dilepas dan diganti dengan tripod berukuran penuh.</p>\r\n\r\n<p>Kontrol kamera yang dibangun langsung ke Gear 360, meskipun ada juga cara untuk merekam dalam aplikasi. Yang nyaman bagi refleks cepat merekam tanpa menyelam ke dalam ponsel Anda.</p>\r\n\r\n<p>Duduk tepat di atas adalah tombol rekam merah raksasa, dan itu berdekatan dengan layar kecil PMOLED 0,05 inci. Anda tidak perlu kopling telepon sepanjang waktu untuk mengetahui status rekaman Anda.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(3, 'more'),
(2, 'handphone'),
(1, 'laptop'),
(4, 'camera');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `hak_akses` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `hak_akses`) VALUES
(1, 'admin', 'destreds26', '1'),
(2, 'bastian', 'uzumaki', '1'),
(3, 'bastian26', 'uzumaki26', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
