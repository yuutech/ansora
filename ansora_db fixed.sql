-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 16, 2020 at 07:11 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ansora_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `penulis` varchar(64) NOT NULL,
  `judul_artikel` varchar(255) NOT NULL,
  `slug_artikel` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tanggal_publikasi` date DEFAULT NULL,
  `jam_publikasi` time DEFAULT NULL,
  `isi_artikel` text,
  `status` int(11) NOT NULL,
  `views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `kategori`, `penulis`, `judul_artikel`, `slug_artikel`, `gambar`, `tanggal_publikasi`, `jam_publikasi`, `isi_artikel`, `status`, `views`) VALUES
(1, 'berita', 'Admin', 'Menyambut Asian Animation Summit 2020 Kemenparekraf Gelar “MASSIVE: Master Class Creativepreneur” ', 'menyambut-asian-animation-summit-2020-kemenparekraf-gelar-massive-master-class-creativepreneur-', 'menyambut-asian-animation-summit-2020-kemenparekraf-gelar-massive-master-class-creativepreneur-.jpg', '2020-07-13', '06:37:18', '<blockquote>\r\n<p>Halo Sahabat ANSORA, kali ini ANSORA membawa kabar baik buat kalian yang ingin menambah wawasan mengenai industri animasi nih. Seperti yang kita tahu, Asian Animation Summit (AAS) 2020 akan dilaksanakan di Indonesia tahun ini. Dan dalam rangka menyambut AAS 2020 Kemenparekraf bekerja sama dengan berbagai pihak akan menggelar MASSIVE: Master Class Creativepreneur</p>\r\n</blockquote>\r\n\r\n<p><img alt=\"\" src=\"/assets/vendor/kcfinder-2.51/upload/files/3%20Kemenperin%20gelar%20MASSIVE.jpg\" style=\"height:100px; width:100px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n', 1, 900),
(2, 'edukasi', 'Admin', '12 Prinsip Animasi yang Kamu Wajib Tahu', '12-prinsip-animasi-yang-kamu-wajib-tahu', '12-prinsip-animasi-yang-kamu-wajib-tahu.jpg', '2020-07-12', '19:10:02', '<p>(Sumber artikel: <a href=\"https://animazione70.weebly.com/12-prinsip-animasi.html\">https://animazione70.weebly.com/12-prinsip-animasi.html</a>)</p>\r\n\r\n<p>Prinsip animasi sangat dibutuhkan oleh seorang animator sebagai bekalnya untuk berkarya menciptakan sebuah animasi. Karena dengan mengetahui prinsip animasi, seorang animator dapat menghasilkan karya yang menarik, dinamis, dan tidak membosankan.</p>\r\n\r\n<p>Adanya prinsip animasi diciptakan sebagai teori dasar yang bersifat wajib dimiliki dan dikuasai oleh animator agar dapat menghidupkan karakter animasinya. Kemampuan meng-<em>capture</em> momentum ke dalam runtutan gambar sehingga seolah-olah menjadi gambar yang bergerak atau hidup adalah modal utama seorang animator. Seorang animator harus mempunyai kepekaan gerak daripada hanya sekedar kemampuan menggambar.</p>\r\n\r\n<p>Dalam dunia animasi, gambar yang bagus tidak akan berguna jika tidak didukung dengan kemampuan menghidupkan objek tersebut. Sebagaimana definisi dasar animasi yaitu &ldquo;membuat seolah-olah menjadi hidup&rdquo;.</p>\r\n\r\n<p>Ada 12 prinsip animasi yang menjadi penentu bagaimana sebuah karya animasi yang dihasilkan. Perumus atau penemu dari 12 prinsip animasi adalah tokoh animator kawakan dari Walt Disney Studios yang bernama Ollie Johnston dan Frank Thomas. Mereka menulisnya dalam buku mereka yang diberi judul &ldquo;<em>The Illussion of Life: Disney Animation</em>&rdquo; pada tahun 1981.</p>\r\n\r\n<p>Prinsip ini muncul karena Ollie Johnston dan Frank Thomas memiliki semangat yang tinggi untuk meneliti dan mengembangkan sebuah karya seni baru ketika mereka masih muda. Prinsip dasar ini tidak hanya berasal dari <em>experiment</em> dan latihan mereka. Melainkan juga karena keinginan dari Walt Disney untuk memikirkan suatu cara bagaimana membuat animasi yang memiliki kemiripan dengan gerakan nyata. Kemiripan tersebut baik objek itu benda, hewan, maupun manusia. Serta untuk menunjukkan bagaimana ekspresi dan kepribadian sebuah karakter.</p>\r\n\r\n<p>Berikut adalah 12 prinsip animasi tersebut dan penjelasannya.</p>\r\n\r\n<ol>\r\n	<li><strong>Squash and Stretch</strong></li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Prinsip animasi yang pertama ini adalah prinsip yang berfungsi untuk membuat ilusi seberapa keras permukaan sebuah benda. <em>Squash and strecth</em> merupakan upaya penambahan efek lentur (plastis) pada objek atau figur sehingga seolah-olah &lsquo;memuai&rsquo; atau &lsquo;menyusut&rsquo; sehingga memberikan efek gerak yang lebih hidup.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Penerapan prinsip ini pada objek hidup (misalnya: makhluk, hewan, manusia) akan memberikan peningkatan sekaligus efek dinamis terhadap gerakan atau aksi tertentu. Sedangkan pada benda mati (misalnya: kursi, meja, botol, piring, gelas) akan membuatnya tampak seolah-olah benda hidup.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li><strong>Anticipation</strong></li>\r\n</ol>\r\n\r\n<p>Prinsip <em>anticipation</em> merupakan prinsip di mana kita sebagai animator memberikan tanda untuk penonton mengenai apa yang akan terjadi pada karakter. Prinsip ini biasa digunakan sebagai transisi dari 2 <em>major actions</em>. Contoh diantara posisi berdiri dan berlari.</p>\r\n\r\n<p>Gerakan <em>anticipation</em> yang dibuat selalu kebalikan dari gerakan berikutnya. Misalkan gerakan berikutnya mengarah ke atas, pasti gerakan <em>anticipation-</em>nya ke bawah. <em>Anticipation</em> bisa juga disebut sebagai gerakan ancang-ancang.</p>\r\n\r\n<p>Misalnya ada orang yang duduk dan akan berdiri. Maka untuk berdiri pastilah dia membungkukkan badan dulu sebelum benar-benar berdiri.</p>\r\n\r\n<ol>\r\n	<li><strong>Staging</strong></li>\r\n</ol>\r\n\r\n<p><em>Staging</em> adalah gerak keseluruhan dalam sebuah adegan yang harus tampak jelas dan detail untuk mendukung suasana yang ingin dicapai dalam sebagian atau keseluruhan <em>scene</em>.</p>\r\n\r\n<p>Meskipun tokoh-tokohnya berupa siluet, kita dapat mengetahui dengan jelas apa yang sedang mereka kerjakan. Bisa saja hanya dengan mengubah <em>angle</em> kamera untuk mendapatkan siluet yang tepat meskipun <em>actionnya</em> sama.</p>\r\n\r\n<ol>\r\n	<li><strong>Straight Ahead and Pose to Pose</strong></li>\r\n</ol>\r\n\r\n<p>Animator biasanya menggunakan 2 pendekatan umum dalam menganimasikan, yaitu:</p>\r\n\r\n<ol>\r\n	<li>&nbsp;<em>Straight Ahead</em></li>\r\n</ol>\r\n\r\n<p>Metode ini dengan cara menggambar secara berurutan mulai dari gambar pertama hingga seterusnya. Di mana gambar awal sampai akhir menunjukkan satu rangkaian gerakan yang sangat jelas maksud dan tujuannya.</p>\r\n\r\n<p>Prinsip <em>straight ahead</em> meliputi perubahan ukuran, volume, proporsi, bisa juga berupa gerakan yang spontan.</p>\r\n\r\n<ol>\r\n	<li><em>Pose to Pose</em></li>\r\n</ol>\r\n\r\n<p>Metode ini adalah cara animator membuat animasi dengan cara menggambar hanya pada <em>keyframe-keyframe</em> tertentu saja. Untuk selanjutnya <em>in-between</em> atau interval antar <em>keyframe</em> digambar atau dilanjutkan oleh asisten, bisa juga animator lain.</p>\r\n\r\n<p>Cara ini memiliki kelebihan dalam waktu pengerjaan yang relatif lebih cepat karena melibatkan lebih banyak sumber daya, sehingga cocok diterapkan dalam industri.</p>\r\n\r\n<p>Pada metode ini semua pergerakan sudah direncanakan terlebih dahulu. Jadi, gerakan utama (<em>key pose</em>) telah disiapkan oleh animator, selanjutnya baru dilanjutkan dengan detail gerakan diantara (<em>in-between</em>) di antara masing-masing <em>key pose</em> itu.</p>\r\n\r\n<ol>\r\n	<li><strong>Follow Through And Overlapping Action</strong></li>\r\n</ol>\r\n\r\n<ol>\r\n	<li><em>Follow Through</em></li>\r\n</ol>\r\n\r\n<p><em>Follow Through</em> adalah prinsip animasi tentang bagian tubuh tertentu yang tetap bergerak meskipun seseorang telah berhenti bergerak. Contohnya rambut yang tetap bergerak meskipun sudah tidak berlari.</p>\r\n\r\n<p>Konsep dari prinsip animasi <em>Follow Through</em> adalah benda-benda yang saling berhubungan tidak pernah bergerak bersamaan.</p>\r\n\r\n<p>Ketika ada satu benda yang berperan sebagai &ldquo;<em>lead</em>&rdquo; (benda utama yang bergerak), maka semua benda-benda yang tersambung dengan benda &ldquo;<em>lead</em>&rdquo; akan ikut bergerak, namun tidak secara bersamaan.</p>\r\n\r\n<ol>\r\n	<li><em>Overlapping Action</em></li>\r\n</ol>\r\n\r\n<p>Kita bisa menganggap <em>Overlapping Action</em> sebagai gerakan saling silang. Yaitu serangkaian gerakan saling mendahului. Misalnya gerakan tangan dan kaki ketika sedang berjalan.</p>\r\n\r\n<ol>\r\n	<li><strong><em>&nbsp;Slow In and Slow Out</em></strong></li>\r\n</ol>\r\n\r\n<p>Prinsip animasi ini menegaskan bahwa setiap gerakan memiliki percepatan dan perlambatan yang berbeda-beda. <em>Slow in</em> terjadi ketika sebuah gerakan diawali dari lambat kemudian semakin cepat. Sedangkan <em>slow out</em> terjadi ketika gerakan benda yang relatif cepat kemudian melambat.</p>\r\n\r\n<p>Gerakan tangan ketika mengambil gelas. Kecepatan tangan akan berbeda ketika akan menjamah gelas dan ketika sudah menyentuh gelas.</p>\r\n\r\n<p>Saat tangan masih jauh dari gelas, tangan bergerak relatif cepat. Sedangkan ketika sudah mulai mendekati gelas, secara refleks gerakan tangan akan melambat. Dalam hal ini kita menyebutnya <em>slow out</em>.</p>\r\n\r\n<ol>\r\n	<li><strong><em>Arch</em></strong></li>\r\n</ol>\r\n\r\n<p>Prinsip <em>arch</em> berperan untuk membuat gerakan animasi tampak lebih alami, khususnya untuk gerakan manusia dan hewan. Cara berpikir pada prinsip ini adalah seperti pendulum.</p>\r\n\r\n<p>Semua gerakan mengikuti sebuah kurva, seperti gerakan kaki, tangan, bola mata, kepala, dan lain-lain. Biasanya prinsip ini diaplikasikan ketika membuat <em>in-between</em>. Kita bisa membuat gerakan dimensi pada animasi dengan <em>arch</em>.</p>\r\n\r\n<p>Dalam dunia animasi, sistem pergerakan semua makhluk hidup bergerak mengikuti pola atau jalur yang disebut sebagai <em>Arch</em>. Inilah yang membuat animasi bergerak secara &lsquo;<em>smooth&rsquo;</em> dan lebih realistis. Pergerakan animasi mengikuti suatu pola yang berbentuk lengkung.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li><strong><em>Secondary Action</em></strong></li>\r\n</ol>\r\n\r\n<p>Prinsip ke delapan ini merupakan prinsip di mana ada gerakan sekunder yang terjadi akibat adanya gerakan utama. Prinsip ini sebagai pelengkap untuk memperkuat gerakan utama agar animasi tampak lebih realistis.</p>\r\n\r\n<p><em>Secondary action</em> bukan sebagai pusat perhatian, namun lebih berfungsi memberikan <em>emphasize</em> untuk memperkuat gerakan utama.</p>\r\n\r\n<ol>\r\n	<li><strong><em>Timing</em></strong></li>\r\n</ol>\r\n\r\n<p>Prinsip terpenting dalam animasi adalah <em>timing</em>. <em>Timing</em> merupakan penentu berapa gambar yang harus kita buat di antara 2 pose atau yang biasa disebut dengan istilah <em>in-between</em>.</p>\r\n\r\n<p><em>Timing</em> yang menentukan waktu kapan sebuah gerakan harus dilakukan. Sedangkan <em>spacing</em> yang menentukan percepatan dan perlambatan dari bermacam-macam jenis gerak.</p>\r\n\r\n<ol>\r\n	<li><strong>&nbsp;<em>Appeal</em></strong></li>\r\n</ol>\r\n\r\n<p>Keseluruhan <em>look</em> atau gaya visual dalam animasi mengarah pada prinsip <em>appeal</em>. <em>Appeal</em> ialah tentang bagaimana kita membuat karakter kita menjadi menarik dan tidak selalu harus yang lucu, seperti yang kebanyakan orang pikirkan.</p>\r\n\r\n<ol>\r\n	<li><strong><em>Exaggeration</em></strong></li>\r\n</ol>\r\n\r\n<p>Prinsip <em>exaggeration</em> merupakan upaya untuk mendramatisasi sebuah animasi dalam bentuk rekayasa gambar yang bersifat hiperbolis. Berfungsi untuk menampilkan ekstrimitas ekspresi tertentu, pada umumnya dibuat secara komedi.</p>\r\n\r\n<ol>\r\n	<li>&nbsp;<strong><em>Solid Drawing</em></strong></li>\r\n</ol>\r\n\r\n<p>Prinsip <em>solid drawing</em> adalah kemampuan untuk menggambar karakter dalam berbagai sudut pengambilan gambar sehingga karakter tersebut terlihat bervolume dan konsisten dalam setiap <em>frame</em> animasi.</p>\r\n\r\n<p>Semua atribut yang ada pada karakter tersebut tetap konsisten bentuk dan letaknya. Prinsip ini lebih menekankan pada bagaimana karakter tersebut bisa dengan baik dianimasikan dalam ruang 3D.</p>\r\n\r\n<p>Nah itu dia 12 prinsip dasar animasi yang wajib kalian pahami. Memahami prinsip animasi memang sangat penting. Prinsip animasi dimanfaatkan sebagai perantara komunikasi antar pembuat film animasi (studio) dengan penonton atau penikmat film.</p>\r\n\r\n<p>Seorang animator dapat menyisipkan ekspresi karakter dan menarik perhatian para penontonnya. Dengan memahami prinsipnya sebelum membuat animasi maka akan memaksimalkan hasil karya yang dihasilkan.</p>\r\n', 1, 582),
(3, 'resensi', 'Admin', 'Review Film Animasi “Frozen II”', 'review-film-animasi-frozen-ii-', 'review-film-animasi-frozen-ii-.jpg', '2020-07-13', '16:57:05', '<p>Sutradara&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Chris Buck &amp; Jennifer Lee</p>\r\n\r\n<p>Produser&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Peter Del Vecho</p>\r\n\r\n<p>Penulis Naskah&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Jennifer Lee &amp; Allison Schroeder</p>\r\n\r\n<p>Studio &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Walt Disney Animation Studios</p>\r\n\r\n<p>Durasi &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 103 Menit</p>\r\n\r\n<p>Negara &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Amerika Serikat</p>\r\n\r\n<p>Bahasa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Inggris</p>\r\n\r\n<p>Tanggal Liris &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 20 November 2019</p>\r\n\r\n<p>Pemeran &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Anna (Kristen Bell), Elsa (Idina Menzel), Olaf (Josh Gad), Kristof (Jonathan Groff)</p>\r\n\r\n<p>Setelah Frozen (2013) sukses menjadi film box office, kini Elsa dan Anna dalam film tersebut kembali hadir di Frozen II. Penonton menunggu selama 6 tahun kehadiran mereka kembali. Film ini memiliki korelasi dengan Frozen I. Kisah film ini diawali dengan flashback masa kecil Elsa dan Ana, pada saat ayah dan ibunya (Raja Agnar, penguasa kerajaan Arandelee) menceritakan tentang hutan ajaib yang menghilang. Pada akhirnya, suara misteri yang selalu Elsa dengar menjadi titik awal atas kerasahannya. Elsa selalu dihantui oleh suara tersebut, lalu ia mencoba untuk menelusurinya. Setelah ditelusuri, ternyata suara-suara aneh tersebut merupakan roh api, roh angin, roh tanah, dan roh air yang berasal dari hutan ajaib dan mengancam keamanan Arandelle. Ketika beranjak dewasa, Elsa bersama timnya berpetualang untuk mencari sebuah kebenaran yang membuat mereka harus menghadapi banyak hal demi menyelamatkan Arandelle.</p>\r\n\r\n<p>Konflik-konflik yang disajikan membuat alur cerita memiliki ketegangan dan menambah kejutan-kejutan dari film, sehingga film ini tampak menarik untuk ditonton. Frozen II mampu memberikan cerita kompleks dengan menampilkan karakter tokoh yang terlihat lebih dewasa dengan pakaiannya, seperti contoh: gaun warna merah maroon yang dikenakan Elsa tampak elegan dan dewasa.</p>\r\n\r\n<p>Jika dibandingkan dengan film sebelumnya, Frozen II memiliki cerita yang cukup rumit, dengan sajian konflik-konflik yang bertubi-tubi dan unik yang dialami pada setiap tokoh seperti, Elsa yang berjuang untuk mencari kebenaran, Ana menjaga Elsa, dan Olaf yang berjuang untuk menjadi dewasa, Kristof memiliki masalah asmara dengan Ana. Ada hal yang kurang dikembangkan dalam film ini yaitu kehidupan suku Northuldra yang terasa singkat penyajiannya.</p>\r\n\r\n<p>Ketegangan dalam film ini mampu dibangun dengan baik melalui iringan musik dan lagu yang bagus dan karakter setiap tokohnya. Hal itu memang tidak diragukan lagi. Di tengah cerita yang menegangkan, kehadiran Olaf, sang penghibur, dengan tingkah-tingkahnya yang lucu membawa suasana kembali mencair. Cerita film Frozen II ini membuat penonton anak-anak terlalu berfikir keras dan sulit untuk dimengerti karena ceritanya yang kompleks. Selain itu, film ini juga menampilkan beberapa adegan yang kurang pas untuk ditonton anak-anak, seperti adegan ciuman antara Ana dengan Kristof. Konflik dalam Frozen II disajikan banyak sekali dan setiap adegan selalu dipenuhi dengan konflik, sehingga dapat berdampak kurang baik bagi anak. Meskipun begitu, penonton dibuat takjub dengan visualisasi keindahan alam yang disuguhkan. Frozen II menyuguhkan visual yang lebih keren dibandingkan dengan film sebelumnya dan mampu memanjakan mata.</p>\r\n\r\n<p>Film Frozen II jelas memiliki penceritaan yang lebih kompleks daripada sebelumnya, namun kurang berani untuk mengeksplorasi cerita dengan konsekuensi tinggi. Aspek positif yang bisa dipetik adalah film ini mengandung pesan moral tentang bagiamana menjaga satu sama lain, bekerja tim, dan pantang menyerah ketika menghadapi tantangan.</p>\r\n\r\n<p>Reviewer&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</p>\r\n\r\n<p>&ndash; Intan Yulia Febbyu Fenda, S.Sn. (Mahasiswa Magister Seni ISI Surakarta)</p>\r\n\r\n<p>&ndash; Eka Puspita Sari, S,Sn. (Alumni S1 Film dan Televisi ISI Surakarta)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Editor&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Amin Wibawa</p>\r\n\r\n<p>Manajer&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Ranang Agung Sugihartono</p>\r\n', 1, 879),
(4, 'karier', 'Admin', '3D Animator – Brown Bag Films', '3d-animator-brown-bag-films', '3d-animator-brown-bag-films.jpg', '2020-07-13', '16:58:29', '<p><strong>Posisi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 3D Animator</strong></p>\r\n\r\n<p><strong>Level&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Medium &ndash; Senior</strong></p>\r\n\r\n<p><strong>Perusahaan&nbsp;&nbsp;&nbsp; : Brown Bag Films</strong></p>\r\n\r\n<p><strong>Lokasi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Denpasar, Bali</strong></p>\r\n\r\n<p><strong>Kualifikasi dan Persyaratan</strong></p>\r\n\r\n<ol>\r\n	<li>Pengalaman animasi 3D minimal 3 tahun <strong>&nbsp;</strong></li>\r\n	<li>Advance skill menggunakan Maya</li>\r\n	<li>Pengetahuan yang kuta terkait prinsip dasar animasi: timing, body mechanice, acting, lip sync, dll</li>\r\n	<li>Memiliki kerjasama dan komunikasi yang baik</li>\r\n	<li>Dapat menerima saran dan memiliki semangat yang gigih</li>\r\n</ol>\r\n\r\n<p><strong>Kirim CV &amp; Portfolio ke: </strong></p>\r\n\r\n<p><a href=\"mailto:diah.nirmala@brownbagfilms.com\">diah.nirmala@brownbagfilms.com</a></p>\r\n\r\n<p><strong>Narahubung</strong></p>\r\n\r\n<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>Diah Nimala Dewi (+62 811 3961 9998)</p>\r\n', 1, 200),
(6, 'edukasi', 'Manimonki', 'Lorem Ipsum', 'lorem-ipsum', 'default-arc.png', '2020-07-14', '14:09:41', '<p>Lorem Ipsum</p>\r\n', 1, 0),
(7, 'edukasi', 'Cindy Yuvia', 'Mencari Makna Tersirat Dari Kematian Kaori', 'mencari-makna-tersirat-dari-kematian-kaori', 'mencari-makna-tersirat-dari-kematian-kaori.jpg', '2020-07-14', '20:07:39', '<p>Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;</p>\r\n\r\n<p>Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;</p>\r\n\r\n<p>Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;Lorem Ipsum Lorem Ipsum&nbsp;</p>\r\n', 1, 856);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_cat` int(11) NOT NULL,
  `nama_cat` varchar(255) NOT NULL,
  `slug_cat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_cat`, `nama_cat`, `slug_cat`) VALUES
(1, 'Berita', 'berita'),
(2, 'Resensi', 'resensi'),
(4, 'Edukasi', 'edukasi'),
(5, 'Karier', 'karier');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id_level` int(11) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id_level`, `level`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `portofolio`
--

CREATE TABLE `portofolio` (
  `id_portofolio` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_portofolio` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portofolio`
--

INSERT INTO `portofolio` (`id_portofolio`, `id_user`, `nama_portofolio`, `file`) VALUES
(12, 1, '3D Dino', '3D_Dino.jpg'),
(13, 1, '3D Soldier', '3D_Soldier.jpg'),
(14, 10, '3D Dino', '3D_Dino.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id_level` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `narahubung` varchar(255) DEFAULT NULL,
  `kontak_narahubung` varchar(255) DEFAULT NULL,
  `foto` varchar(255) NOT NULL,
  `telepon` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `profesi` varchar(255) DEFAULT NULL,
  `info` text,
  `fb` varchar(255) DEFAULT NULL,
  `ig` varchar(255) DEFAULT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `username`, `password`, `id_level`, `email`, `kategori`, `narahubung`, `kontak_narahubung`, `foto`, `telepon`, `website`, `profesi`, `info`, `fb`, `ig`, `is_active`) VALUES
(1, 'Admin', 'admin', '$2y$10$gLrs97nMlrKiVeUsYdBjFeTM4LxjQvFenRoUOMlT0lhLnRjofmB5q', 1, 'admin@gmail.com', 'admin', NULL, NULL, 'profile_user.svg', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(2, 'Angelina Christy', 'kristii', '$2y$10$lGmf2PZPygen7sbEjvAjDuGpZu9hccNZUZd5.XaX1YhCSaMV5iqI6', 2, 'kristi@gmail.com', 'Anggota', 'Admin', '08123456789', 'kristii.jpg', '', NULL, 'Idol', NULL, '', 'jkt48.christy', 1),
(4, 'Manimonki', 'manimonki', '$2y$10$4jwzhKSyO4.D1E.3z6lxY.EZKXsfnHY1fUTZzJHV2wqDf2Zp3BjMm', 2, 'animation@manimonki.com', 'Studio', 'Admin', '0812345678', 'manimonki.jpg', '', NULL, '', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mihi enim erit isdem istis fortasse iam utendum. Cupit enim dícere nihil posse ad beatam vitam deesse sapienti. Nihil illinc huc pervenit. Duo Reges: constructio interrete. </p>\r\n\r\n<p><a href=\"http://loripsum.net/\" target=\"_blank\">Nemo nostrum istius generis asotos iucunde putat vivere.</a> Est enim effectrix multarum et magnarum voluptatum. <a href=\"http://loripsum.net/\" target=\"_blank\">Rhetorice igitur, inquam, nos mavis quam dialectice disputare?</a> <a href=\"http://loripsum.net/\" target=\"_blank\">Quorum sine causa fieri nihil putandum est.</a> Cum ageremus, inquit, vitae beatum et eundem supremum diem, scribebamus haec. Aliis esse maiora, illud dubium, ad id, quod summum bonum dicitis, ecquaenam possit fieri accessio. </p>\r\n\r\n<p><i>Vestri haec verecundius, illi fortasse constantius.</i> Age nunc isti doceant, vel tu potius quis enim ista melius? Perturbationes autem nulla naturae vi commoventur, omniaque ea sunt opiniones ac iudicia levitatis. <a href=\"http://loripsum.net/\" target=\"_blank\">Tanta vis admonitionis inest in locis;</a> Scaevola tribunus plebis ferret ad plebem vellentne de ea re quaeri. Inscite autem medicinae et gubernationis ultimum cum ultimo sapientiae comparatur. <a href=\"http://loripsum.net/\" target=\"_blank\">Verum hoc idem saepe faciamus.</a> Illum mallem levares, quo optimum atque humanissimum virum, Cn. Ista ipsa, quae tu breviter: regem, dictatorem, divitem solum esse sapientem, a te quidem apte ac rotunde; <a href=\"http://loripsum.net/\" target=\"_blank\">Sed ea mala virtuti magnitudine obruebantur.</a> </p>\r\n\r\n', 'Manimonki', 'manimonki', 1),
(5, '8Mata', '8mata', '$2y$10$zsvKfoMkiAz.wYSQ2PFlzuzRIJdC2Jvxm7qhFRWD57fU8X.yr6IRO', 2, 'matamata@gmail.com', 'Studio', 'Admin', '', '8mata.jpg', NULL, NULL, NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mihi enim erit isdem istis fortasse iam utendum. Cupit enim dícere nihil posse ad beatam vitam deesse sapienti. Nihil illinc huc pervenit. Duo Reges: constructio interrete. </p>\r\n\r\n<p><a href=\"http://loripsum.net/\" target=\"_blank\">Nemo nostrum istius generis asotos iucunde putat vivere.</a> Est enim effectrix multarum et magnarum voluptatum. <a href=\"http://loripsum.net/\" target=\"_blank\">Rhetorice igitur, inquam, nos mavis quam dialectice disputare?</a> <a href=\"http://loripsum.net/\" target=\"_blank\">Quorum sine causa fieri nihil putandum est.</a> Cum ageremus, inquit, vitae beatum et eundem supremum diem, scribebamus haec. Aliis esse maiora, illud dubium, ad id, quod summum bonum dicitis, ecquaenam possit fieri accessio. </p>\r\n\r\n<p><i>Vestri haec verecundius, illi fortasse constantius.</i> Age nunc isti doceant, vel tu potius quis enim ista melius? Perturbationes autem nulla naturae vi commoventur, omniaque ea sunt opiniones ac iudicia levitatis. <a href=\"http://loripsum.net/\" target=\"_blank\">Tanta vis admonitionis inest in locis;</a> Scaevola tribunus plebis ferret ad plebem vellentne de ea re quaeri. Inscite autem medicinae et gubernationis ultimum cum ultimo sapientiae comparatur. <a href=\"http://loripsum.net/\" target=\"_blank\">Verum hoc idem saepe faciamus.</a> Illum mallem levares, quo optimum atque humanissimum virum, Cn. Ista ipsa, quae tu breviter: regem, dictatorem, divitem solum esse sapientem, a te quidem apte ac rotunde; <a href=\"http://loripsum.net/\" target=\"_blank\">Sed ea mala virtuti magnitudine obruebantur.</a> </p>\r\n\r\n', NULL, NULL, 1),
(7, 'Cindy Yuvia', 'yupi', '$2y$10$w0LjbwFKAGbw/t0LbHhrreFfjWqOLg2RXrzL8dQWUZgeQcnR.mMPy', 2, 'yupi@gmail.com', 'Anggota', NULL, NULL, 'yupi.jpg', '', NULL, 'Idol', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tum mihi Piso: Quid ergo? Facillimum id quidem est, inquam. Sed ne, dum huic obsequor, vobis molestus sim. <i>Confecta res esset.</i> Proclivi currit oratio. Certe non potest. Bonum liberi: misera orbitas. </p>\r\n\r\n<p>Murenam te accusante defenderem. <i>Scrupulum, inquam, abeunti;</i> At coluit ipse amicitias. Faceres tu quidem, Torquate, haec omnia; Si enim ad populum me vocas, eum. Ut aliquid scire se gaudeant? </p>\r\n\r\n<p>Duo Reges: constructio interrete. Dat enim intervalla et relaxat. Quamquam tu hanc copiosiorem etiam soles dicere. Nihil opus est exemplis hoc facere longius. Pauca mutat vel plura sane; Sed haec nihil sane ad rem; </p>\r\n\r\n', 'jkt48yupi', 'cindyyuvia', 1),
(8, 'Elit Pixel', 'elit_pixel', '$2y$10$Xw/2Qa/isnTF255iyLBrru0vWHuNNG2jk363XsPPXaKcSM5XA0tSO', 2, 'elitpixel@gmail.com', 'Studio', '', '', 'elit_pixel.png', '', NULL, '', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mihi enim erit isdem istis fortasse iam utendum. Cupit enim dícere nihil posse ad beatam vitam deesse sapienti. Nihil illinc huc pervenit. Duo Reges: constructio interrete. </p>\r\n\r\n<p><a href=\"http://loripsum.net/\" target=\"_blank\">Nemo nostrum istius generis asotos iucunde putat vivere.</a> Est enim effectrix multarum et magnarum voluptatum. <a href=\"http://loripsum.net/\" target=\"_blank\">Rhetorice igitur, inquam, nos mavis quam dialectice disputare?</a> <a href=\"http://loripsum.net/\" target=\"_blank\">Quorum sine causa fieri nihil putandum est.</a> Cum ageremus, inquit, vitae beatum et eundem supremum diem, scribebamus haec. Aliis esse maiora, illud dubium, ad id, quod summum bonum dicitis, ecquaenam possit fieri accessio. </p>\r\n\r\n<p><i>Vestri haec verecundius, illi fortasse constantius.</i> Age nunc isti doceant, vel tu potius quis enim ista melius? Perturbationes autem nulla naturae vi commoventur, omniaque ea sunt opiniones ac iudicia levitatis. <a href=\"http://loripsum.net/\" target=\"_blank\">Tanta vis admonitionis inest in locis;</a> Scaevola tribunus plebis ferret ad plebem vellentne de ea re quaeri. Inscite autem medicinae et gubernationis ultimum cum ultimo sapientiae comparatur. <a href=\"http://loripsum.net/\" target=\"_blank\">Verum hoc idem saepe faciamus.</a> Illum mallem levares, quo optimum atque humanissimum virum, Cn. Ista ipsa, quae tu breviter: regem, dictatorem, divitem solum esse sapientem, a te quidem apte ac rotunde; <a href=\"http://loripsum.net/\" target=\"_blank\">Sed ea mala virtuti magnitudine obruebantur.</a> </p>\r\n\r\n', '', 'elit_pixel', 1),
(9, 'Kampoong Monstar', 'kampoong_monstar', '$2y$10$AtGW/Uph2zNIZvmEvyX7Xup4rpctt8BLO5ZQN2YMt8PtECw2wtYfK', 2, 'kampong@gmail.com', 'Studio', '', '', 'kampoong_monstar.png', '', NULL, '', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mihi enim erit isdem istis fortasse iam utendum. Cupit enim dícere nihil posse ad beatam vitam deesse sapienti. Nihil illinc huc pervenit. Duo Reges: constructio interrete. </p>\r\n\r\n<p><a href=\"http://loripsum.net/\" target=\"_blank\">Nemo nostrum istius generis asotos iucunde putat vivere.</a> Est enim effectrix multarum et magnarum voluptatum. <a href=\"http://loripsum.net/\" target=\"_blank\">Rhetorice igitur, inquam, nos mavis quam dialectice disputare?</a> <a href=\"http://loripsum.net/\" target=\"_blank\">Quorum sine causa fieri nihil putandum est.</a> Cum ageremus, inquit, vitae beatum et eundem supremum diem, scribebamus haec. Aliis esse maiora, illud dubium, ad id, quod summum bonum dicitis, ecquaenam possit fieri accessio. </p>\r\n\r\n<p><i>Vestri haec verecundius, illi fortasse constantius.</i> Age nunc isti doceant, vel tu potius quis enim ista melius? Perturbationes autem nulla naturae vi commoventur, omniaque ea sunt opiniones ac iudicia levitatis. <a href=\"http://loripsum.net/\" target=\"_blank\">Tanta vis admonitionis inest in locis;</a> Scaevola tribunus plebis ferret ad plebem vellentne de ea re quaeri. Inscite autem medicinae et gubernationis ultimum cum ultimo sapientiae comparatur. <a href=\"http://loripsum.net/\" target=\"_blank\">Verum hoc idem saepe faciamus.</a> Illum mallem levares, quo optimum atque humanissimum virum, Cn. Ista ipsa, quae tu breviter: regem, dictatorem, divitem solum esse sapientem, a te quidem apte ac rotunde; <a href=\"http://loripsum.net/\" target=\"_blank\">Sed ea mala virtuti magnitudine obruebantur.</a> </p>\r\n\r\n', '', '', 1),
(10, 'Gomonki', 'gomonki', '$2y$10$EHYtbl1Gft.87S7SPjX6buyhc.Ee377To5Ye8jzGUjuB6pO9AsLTq', 2, 'gomonki@gmail.com', 'Lembaga Pendidikan', '', '', 'gomonki.png', '', NULL, '', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mihi enim erit isdem istis fortasse iam utendum. Cupit enim dícere nihil posse ad beatam vitam deesse sapienti. Nihil illinc huc pervenit. Duo Reges: constructio interrete. </p>\r\n\r\n<p><a href=\"http://loripsum.net/\" target=\"_blank\">Nemo nostrum istius generis asotos iucunde putat vivere.</a> Est enim effectrix multarum et magnarum voluptatum. <a href=\"http://loripsum.net/\" target=\"_blank\">Rhetorice igitur, inquam, nos mavis quam dialectice disputare?</a> <a href=\"http://loripsum.net/\" target=\"_blank\">Quorum sine causa fieri nihil putandum est.</a> Cum ageremus, inquit, vitae beatum et eundem supremum diem, scribebamus haec. Aliis esse maiora, illud dubium, ad id, quod summum bonum dicitis, ecquaenam possit fieri accessio. </p>\r\n\r\n<p><i>Vestri haec verecundius, illi fortasse constantius.</i> Age nunc isti doceant, vel tu potius quis enim ista melius? Perturbationes autem nulla naturae vi commoventur, omniaque ea sunt opiniones ac iudicia levitatis. <a href=\"http://loripsum.net/\" target=\"_blank\">Tanta vis admonitionis inest in locis;</a> Scaevola tribunus plebis ferret ad plebem vellentne de ea re quaeri. Inscite autem medicinae et gubernationis ultimum cum ultimo sapientiae comparatur. <a href=\"http://loripsum.net/\" target=\"_blank\">Verum hoc idem saepe faciamus.</a> Illum mallem levares, quo optimum atque humanissimum virum, Cn. Ista ipsa, quae tu breviter: regem, dictatorem, divitem solum esse sapientem, a te quidem apte ac rotunde; <a href=\"http://loripsum.net/\" target=\"_blank\">Sed ea mala virtuti magnitudine obruebantur.</a> </p>\r\n\r\n', '', 'gomonki', 1),
(11, 'Anemon', 'anemon', '$2y$10$aXKu1fqxnwQS4AT46AwWnOhIgmr6VpqroHxtDHD8X.JWQNS5xW4y2', 2, 'anemon@gmail.com', 'Komunitas', '', '', 'anemon.png', '', NULL, '', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Re mihi non aeque satisfacit, et quidem locis pluribus. Hoc tu nunc in illo probas. </p>\r\n\r\n<ul>\r\n	<li>Ille vero, si insipiens-quo certe, quoniam tyrannus -, numquam beatus;</li>\r\n	<li>Aliam vero vim voluptatis esse, aliam nihil dolendi, nisi valde pertinax fueris, concedas necesse est.</li>\r\n	<li>Tamen aberramus a proposito, et, ne longius, prorsus, inquam, Piso, si ista mala sunt, placet.</li>\r\n	<li>Nam si amitti vita beata potest, beata esse non potest.</li>\r\n	<li>Tertium autem omnibus aut maximis rebus iis, quae secundum naturam sint, fruentem vivere.</li>\r\n	<li>Eadem nunc mea adversum te oratio est.</li>\r\n</ul>\r\n\r\n\r\n<p>Bonum incolumis acies: misera caecitas. Duo Reges: constructio interrete. Ostendit pedes et pectus. Disserendi artem nullam habuit. Quoniam, si dis placet, ab Epicuro loqui discimus. At iam decimum annum in spelunca iacet. Quid est, quod ab ea absolvi et perfici debeat? Poterat autem inpune; </p>\r\n\r\n<p><i>Non laboro, inquit, de nomine.</i> <i>Ille enim occurrentia nescio quae comminiscebatur;</i> Qualem igitur hominem natura inchoavit? At certe gravius. Scrupulum, inquam, abeunti; Cur post Tarentum ad Archytam? </p>\r\n\r\n<p>Tum ille: Ain tandem? Sin tantum modo ad indicia veteris memoriae cognoscenda, curiosorum. <i>Si enim ad populum me vocas, eum.</i> Bonum incolumis acies: misera caecitas. Torquatus, is qui consul cum Cn. Egone non intellego, quid sit don Graece, Latine voluptas? </p>\r\n\r\n', '', 'anemon', 1),
(12, 'Viona Fadrin', 'vivi', '$2y$10$knGrRtJysrprbyUDunZWFu5eXsNNQfnwPgqIbkwZpE7.GmbEr4cu.', 2, 'viona.fadrin@gmail.com', 'Anggota', '', '', 'vivi.png', '', NULL, 'Idol', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Re mihi non aeque satisfacit, et quidem locis pluribus. Hoc tu nunc in illo probas. </p>\r\n\r\n<ul>\r\n	<li>Ille vero, si insipiens-quo certe, quoniam tyrannus -, numquam beatus;</li>\r\n	<li>Aliam vero vim voluptatis esse, aliam nihil dolendi, nisi valde pertinax fueris, concedas necesse est.</li>\r\n	<li>Tamen aberramus a proposito, et, ne longius, prorsus, inquam, Piso, si ista mala sunt, placet.</li>\r\n	<li>Nam si amitti vita beata potest, beata esse non potest.</li>\r\n	<li>Tertium autem omnibus aut maximis rebus iis, quae secundum naturam sint, fruentem vivere.</li>\r\n	<li>Eadem nunc mea adversum te oratio est.</li>\r\n</ul>\r\n\r\n\r\n<p>Bonum incolumis acies: misera caecitas. Duo Reges: constructio interrete. Ostendit pedes et pectus. Disserendi artem nullam habuit. Quoniam, si dis placet, ab Epicuro loqui discimus. At iam decimum annum in spelunca iacet. Quid est, quod ab ea absolvi et perfici debeat? Poterat autem inpune; </p>\r\n\r\n<p><i>Non laboro, inquit, de nomine.</i> <i>Ille enim occurrentia nescio quae comminiscebatur;</i> Qualem igitur hominem natura inchoavit? At certe gravius. Scrupulum, inquam, abeunti; Cur post Tarentum ad Archytam? </p>\r\n\r\n<p>Tum ille: Ain tandem? Sin tantum modo ad indicia veteris memoriae cognoscenda, curiosorum. <i>Si enim ad populum me vocas, eum.</i> Bonum incolumis acies: misera caecitas. Torquatus, is qui consul cum Cn. Egone non intellego, quid sit don Graece, Latine voluptas? </p>\r\n\r\n', '', 'jkt48.vivi', 1),
(13, 'Azizi Asadel', 'azizi', '$2y$10$JQV.KD8K6wBV/FRnwzl.7OFsSuSn0WlWcsre2u33EspcRX5M8UCUq', 2, 'azizi@gmail.com', 'Anggota', '', '', 'azizi.png', '', NULL, 'Idol', NULL, '', 'jkt48.zee', 1),
(14, 'Anindhita Cahyadi', 'anin', '$2y$10$gXgY0jcuGvJxNoYdByErzOzy0FKnyIDfUjmMtyhUVle5giktdFRh.', 2, 'anin@gmail.com', 'Anggota', '', '', 'anin.png', '', NULL, 'Idol', NULL, '', 'jkt48anin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_cat`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `portofolio`
--
ALTER TABLE `portofolio`
  ADD PRIMARY KEY (`id_portofolio`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `portofolio`
--
ALTER TABLE `portofolio`
  MODIFY `id_portofolio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
