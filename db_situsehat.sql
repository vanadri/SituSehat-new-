-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2020 at 12:07 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_situsehat`
--

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `id` int(3) NOT NULL,
  `gejala` text NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`id`, `gejala`, `ket`) VALUES
(1, 'Detak jantung tidak teratur', 'jika jantung sering berdegup kencang pada saat-saat tidak terduga dan tidak diketahui penyebabnya, perlu waspada. Meski begitu, beberapa hal lain seperti terlalu banyak mengonsumsi kafein dan kurang tidur juga dapat menyebabkan jantung berdetak tidak beraturan.'),
(2, 'Kaki kram saat berjalan atau menaiki tangga', 'Sebagian besar orang sering mengalami kram pada kaki dan akan hilang dalam beberapa saat jika ia beristirahat. Namun kaki kram yang tidak kunjung sembuh walaupun sudah beristirahat bisa jadi merupakan tanda adanya masalah pada pembuluh darah arteri kaki akibat penyumbatan pembuluh darah. Jika kram ini tidak diperiksa lebih lanjut, maka bukan tidak mungkin seseorang akan kehilangan kakinya akibat jaringan pada kaki mati karena tidak mendapatkan makanan dari aliran darah.'),
(3, 'Penurunan berat badan yang signifikan', 'Jika Anda mengalami penurunan berat badan sebesar 5% dari total berat badan sebelumnya selama 6 bulan padahal tidak sedang program atau merencanakannya merupakan tanda bahwa terjadi gangguan pada metabolisme tubuh. Salah satu penyebab yang mungkin membuat berat badan Anda berkurang adalah penyakit kanker, diabetes mellitus, gangguan hormon, masalah pada kelenjar tiroid, serta mengalami depresi berat.'),
(4, 'Batuk kronis, Suara mengi (suara seperti siulan ketika Anda bernapas), Sesak napas dan desak dada yang dapat menyebabkan rasa nyeri', 'Anda dianjurkan untuk periksa ke dokter sesegera mungkin setelah mengalami tanda-tanda tersebut karena gejala tersebut adalah gejala pada penderita asma. Asma adalah suatu kondisi di mana aliran udara yang masuk dan keluar paru-paru menjadi terbatas karena peradangan saluran pernapasan.'),
(5, 'Memiliki kulit yang sangat kering', 'Beberapa ahli mengatakan bahwa apabila seseorang mempunyai kulit yang sangat kering, dapat diakibatkan karena ia mengalami kekurangan zat gizi seperti zink atau gangguan terhadap kelenjar tiroidnya. Hal ini harus dikonsultasikan pada dokter ahli kulit. Biasanya, pengobatan yang diberikan adalah suplemen dan lotion.'),
(6, 'Nyeri dada', 'Apabila Anda mengalami nyeri dada, terasa sesak, dan tertekan walaupun hanya sebentar saja, jangan diremehkan, karena bisa saja hal tersebut merupakan tanda-tanda penyakit jantung. Kemungkinan lain adalah adanya gangguan pada sistem pencernaan seperti, kembalinya makanan ke tenggorokan dari lambung. Gangguan ini memang tidak mengancam jiwa tetapi termasuk penyakit kronis yang bisa dialami dalam waktu yang lama.'),
(7, 'Salah satu bagian tubuh bengkak', 'Jika Anda merasa salah satu tubuh Anda membengkak, entah itu di kaki, tangan, atau tempat lain maka segerakan untuk memeriksa diri ke dokter. Pembengkakan atau adanya penambahan massa di salah satu organ tubuh dapat disebabkan berbagai kondisi medis ringan hingga berat, seperti tumor dan kanker. sedangkan bengkak di bagian kaki juga bisa diakibatkan karena adanya penumpukan cairan yang disebut dengan edema. Edema merupakan tanda dan gejala penyakit degeneratif, seperti gagal jantung dan gagal ginjal.'),
(8, 'Adanya perubahan pada payudara wanita', 'Apabila Anda sedang tidak menyusui namun payudara Anda terlihat tidak normal, seperti warna permukaan kulit payudara berubah, ada benjolan, timbul rasa tidak nyaman, serta keluar cairan dari puting, maka Anda perlu curiga. Segera periksakan diri ke dokter yang ahli jika mengalami hal ini. Karena kondisi ini termasuk sebagian dari gejala penyakit kanker payudara.'),
(9, 'Selalu merasa lelah', 'Banyak sekali faktor yang dapat menyebabkan tubuh anda menjadi mudah lelah. Beberapa contoh di antaranya adalah gangguan kelenjar tiroid, gangguan kelenjar adrenal, atau karena tubuh anda bekerja dengan sangat keras untuk membuang zat – zat toksin yang ada di dalam tubuh seperti makanan yang tidak menyehatkan, rokok, alkohol, ataupun polusi di sekitar anda. Lebih buruk lagi, kondisi tubuh anda dapat menurun dengan sangat drastis karena sedang melakukan proteksi dari infeksi kronis, kanker, dan berbagai penyakit serius lainnya. Jadi, jangan sampai anda mengabaikan rasa lelah karena memperhatikan rasa lelah pada tubuh bisa jadi dapat membantu keselamatan hidup anda.'),
(10, 'Urin berwarna kuning keruh', 'Jika anda jarang berpergian, tinggal di daerah dengan iklim panas, termasuk orang yang sangat aktif, dan urin anda berwarna kuning keruh/gelap, sebaiknya anda mengonsumsi air dengan jumlah yang lebih banyak agar tubuh tetap terhidrasi dengan baik. Hal lain yang perlu anda perhatikan adalah mengurangi konsumsi minuman berkafein dan alkohol karena minuman tersebut tidak menghidrasi, membuat anda menjadi sering buang air kecil dan dapat mengakibatkan dehidrasi. Namun, anda juga tidak disarankan mengonsumsi air dengan sangat berlebihan karena hal tersebut bisa menyebabkan tubuh mengalami keracunan air, hiponatremia, bahkan yang terburuk bisa mengancam keselamatan hidup anda.'),
(11, 'Sulit buang air besar', 'Saat anda mengonsumsi makanan atau minuman, maka tubuh anda akan menyerap zat nutrisi dan mengeliminasi zat-zat beracun. Jika anda mengalami kesulitan saat buang air besar, racun pun menjadi terlambat dibuang oleh tubuh, berpotensi ikut terserap oleh lapisan usus, masuk ke aliran darah, dan akan menyebabkan peradangan. Pola makan yang tidak sehat merupakan penyebab utama sulitnya buang air besar. Namun, jika pola makan bukanlah penyebab anda sulit buang air besar, sebaiknya segera berkonsultasi pada dokter.'),
(12, 'Sering sakit pilek atau flu', 'Fakta bahwa virus dan bakteri ada di sekeliling kita memang tidak bisa dipungkiri, namun tubuh yang sehat mampu melakukan perlawanan dan menghindarkan kita dari penyakit. Sistem imunitas anda bisa dikatakan tidak berfungsi dengan optimal jika anda seringkali bahkan selalu tertular penyakit flu dari orang-orang sekitar anda. Sebaiknya anda selalu menjaga daya tahan tubuh dan tidak lupa untuk melakukan vaksinasi flu setiap tahun.'),
(13, 'Mendengkur', 'Sleep apnea merupakan gangguan tidur yang diakibatkan oleh obstruksi pada saluran pernapasan yang mampu meningkatkan risiko hipertensi paru dan gagal jantung. Tidak main-main, gangguan ini bahkan bisa menyebabkan kematian pada saat tidur. Salah satu faktor penyebab gangguan ini adalah kegemukan, sedangkan mendengkur mungkin merupakan satu-satunya gejala awal gangguan mematikan tersebut. Jadi, pastikan anda melakukan konsultasi pada dokter jika ada orang-orang tersayang di sekitar anda yang mendengkur.'),
(14, 'Tinggi tubuh berkurang', 'Hal tersebut paling sering terjadi karena anda mengalami proses degeneratif yang disebut osteoporosis. Osteoporosis sendiri tidak selalu disebabkan oleh penuaan bila anda rajin menjaga postur tubuh. Akan tetapi, osteoporosis dapat menyebabkan badan bungkuk bahkan patah tulang jika anda tidak memperhatikan kondisi tulang anda. Cara untuk mencegah terjadinya hal tersebut adalah memperkuat tulang anda dengan mengonsumsi makanan dan minuman yang mengandung cukup kalsium, serta rajin berolahraga di bawah sinar matahari pagi.'),
(15, 'Tidur terganggu', 'Hormon kortisol merupakan salah satu hormon stres yang akan turun kadarnya pada malam hari disaat tubuh tengah beristirahat. Tubuh kita akan memanfaatkan waktu ini untuk proses regenerasi. Meningkatnya hormon kortisol pada malam hari akibat respon stres atau yang lebih dikenal dengan istilah respon fight – or flight  di dalam tubuh merupakan penyebab utama anda menjadi sulit tidur. Hal ini dapat menyebabkan tubuh menjadi rentan gerhadap penyakit karena mengganggu mekanisme proses regenerasi dalam tubuh.');

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `id` int(3) NOT NULL,
  `penyakit` varchar(50) NOT NULL,
  `ket` text NOT NULL,
  `penyembuhan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`id`, `penyakit`, `ket`, `penyembuhan`) VALUES
(1, 'Tifus', 'Tifus atau demam tifoid adalah penyakit yang disebabkan oleh infeksi bakteri Salmonella typhii. Tifus dapat menular dengan cepat, umumnya melalui konsumsi makanan atau minuman yang sudah terkontaminasi tinja yang mengandung bakteri Salmonella typhii.', 'Vaksin tifoid diberikan kepada anak-anak berusia lebih dari 2 tahun, dan diulang tiap tiga tahun. Seperti vaksin lainnya, vaksin tifoid tidak menjamin perlindungan 100 persen terhadap infeksi tifus. Anak yang sudah diimunisasi tifoid pun tetap dapat terinfeksi, namun tingkat infeksinya tidak seberat pada pasien yang belum mendapat vaksin tifoid.'),
(2, 'Muntaber', 'Muntaber adalah penyakit peradangan usus yang disebabkan oleh virus, bakteri, ataupun parasit lain seperti jamur, protozoa dan cacing. Selain karena itu, muntaber juga dapat disebabkan oleh keracunan makanan atau minuman yang mengandung bakteri atau zat kimia.  Bakteri yang biasanya merupakan penyebab dari muntaber adalah bakteri Escherichia Coli.', 'Pertolongan pertama ketika muntaber terjadi adalah meningkatkan asupan cairan tubuh, contohnya perbanyak minum air putih, Perbanyak makan makanan yang mengandung karbohidrat, Minum oralit, dan Istirahat yang cukup.'),
(3, 'Cacar Air', 'Cacar air adalah penyakit yang disebabkan oleh infeksi virus varicella zosteryang menimbulkan bintik kemerahan di kulit yang menggelembung maupun tidak, melepuh, dan terasa gatal. Masa inkubasi virus penyebab cacar ini sekitar 2-3 minggu. Biasanya awal gejala ditandai dengan naiknya suhu tubuh.', 'Melakukan vaksinasi atau imunisasi dengan vaksin Varicella, Menjaga kebersihan diri sendiri, pakaian, dan lingkungan, Mengkonsumsi makanan bergizi, Menghindari sumber penularan cacar air.'),
(4, 'Polio', 'Polio adalah penyakit yang menyerang tubuh terutama pada bagian otot dan syaraf yang dapat mengakibatkan pelemahan otot yang bersifat permanen. Akhirnya tubuh dapat mengalami kelumpuhan bahkan hingga kematian. Penyakit ini disebabkan oleh virus polio yang sangat menular.', 'Vaksin polio adalah vaksin yang diberikan bagi bayi (paling cepat diberikan pada usia 6 minggu), anak-anak, dan orang dewasa untuk mencegah penyakit poliomyelitis yang disebabkan oleh virus polio tipe 1, 2, dan 3.'),
(5, 'Demam Berdarah Dengue', 'Demam Berdarah Dengue atau DBD adalah penyakit menular yang disebabkan oleh virus dengue yang dibawa oleh nyamuk Aedes aegeypti Betina. Gejala yang umum terjadi adalah demam tinggi pada beberapa hari, sakit pada persendian, munculnya bintik-bintik merah, turunnya trombosit secara drastis, dan bisa terjadi pendarahan.', 'Banyak beristirahat, Minum banyak cairan untuk menghindari adanya dehidrasi (terutama untuk mengganti cairan tubuh yang terbuang karena gejala demam tinggi dan muntah-muntah), Berikan asupan makanan yang bernutrisi, Meminum parasetamol atau acetaminophen untuk meredakan demam dan nyeri, dan menghentikan segala aktivitas untuk sementara waktu hingga tubuh benar-benar sembuh.'),
(6, 'Kolera', 'Kolera adalah penyakit infeksi saluran usus yang akut yang disebabkan oleh infeksi bakteri Vibrio cholerae. Bakteri  dapat masuk ke saluran pencernaan melalui makanan dan minuman yang telah tercemar bakteri ini. Pada saluran usus, bakteri ini mengeluarkan racunnya sehingga tubuh mengalami diare disertai muntah yang hebat. Sebagai akibatnya, tubuh akan masuk pada tahap dehidrasi dalam waktu yang sangat cepat.', 'Penanganan utama untuk penderita kolera adalah mencegah dehidrasi Dengan cara meminum larutan oralit untuk mengganti cairan serta ion mineral di dalam tubuh, Meminum obat antibiotik untuk mengurangi jumlah bakteri sekaligus mempercepat penyembuhan diare, dan Suplemen zinc juga sering diberikan untuk mempercepat penyembuhan diare pada anak-anak.'),
(7, 'Malaria', 'Malaria adalah penyakit yang disebabkan oleh infeksi parasit plasmodium. Parasit ini dibawa dan disebarkan oleh nyamuk anopheles. Penderita akan mengalami demam tinggi, menggigil, nyeri bagian tubuh serta mual hingga muntah-muntah.', 'Malaria harus segera ditangani untuk mencegah risiko komplikasi yang berbahaya. Penanganan malaria dapat dilakukan dengan pemberian obat antimalaria. Obat-obatan ini perlu disesuaikan dengan jenis parasit penyebab malaria, tingkat keparahan, atau riwayat area geografis yang pernah ditinggali penderita.'),
(8, 'Konjungtivitis (Penyakit Mata Merah)', 'Konjungtivitis adalah penyakit yang menyebabkan mata memerah karena infeksi bakteri. Biasanya menyebabkan mata menjadi bengkak, terasa sakit, dan mengeluarkan kotoran dalam jumlah banyak yang biasanya berwarna kuning atau kehijauan.', 'Berhenti menggunakan lensa kontak dan rutin membersihkan lensa kontak saat akan digunakan kembali, Mengompres mata menggunakan air hangat atau air dingin, dan menggunakan kain bersih atau tisu untuk menyentuh mata. Guna mencegah penularan ke orang lain, hindari menyentuh mata menggunakan tangan langsung. Jika terkena tangan, segera cuci tangan.'),
(9, 'Campak', 'Campak adalah penyakit menular yang disebabkan oleh virus yang termasuk ke dalam golongan paramixovirus. Campak sangat menular. Biasanya gejalanya berupa naiknya suhu tubuh, batuk, nyeri tenggorokan, nyeri otot, hingga ruam pada kulit. Gejala ini muncul sekitar 7-14 hari setelah terinfeksi virus.', 'Mengonsumsi paracetamol atau ibuprofen untuk meredakan nyeri dan demam, Membersihkan mata dengan kapas basah, Mengatur cahaya dalam ruangan agar tidak terlalu menyilaukan, Minum banyak air putih untuk mencegah dehidrasi dan mengurangi rasa tidak nyaman di tenggorokan akibat batuk, Minum air hangat yang dicampur lemon atau madu, untuk meredakan batuk dan mengencerkan lendir di tenggorokan. Namun, jangan berikan madu pada anak berusia di bawah 1 tahun.'),
(10, 'Toksoplasmosis', 'Penyakit Toksoplasmosis ini disebabkan oleh parasit jenis protozoa dari kelas Toxoplasmea. Infeksi parasit ini menyebabkan peradangan bada beberapa oran tubuh seperti kulit, kelenjar getah bening, jantung, paru-paru, bahkan otak dan selaput otak. Biasanya ditularkan melalui hewan seperti kucing, anjing dan hewan lainnya.', 'Sebagian besar kasus toksoplasmosis hanya digolongkan sebagai sakit ringan, dan tidak memerlukan perawatan medis. Penderita bisa pulih sepenuhnya dalam waktu 6 minggu. Penangan medis berupa pemberian obat dibutuhkan untuk mengobati penderita toksoplasmosis akut.'),
(11, 'Anemia', 'Anemia adalah penyakit gangguan darah yang ditandai dengan kurangnya jumlah sel darah merah dari batas semestinya. Kondisi ini juga biasa disebut dengan penyakit kurang darah (tidak disamakan dengan darah rendah).', 'Contoh pengobatan dasar yang akan dianjurkan dokter adalah Transfusi darah, Kortikosteroid atau obat lain yang menekan sistem kekebalan tubuh\r\nErythropoietin, obat yang membantu sumsum tulang Anda membuat lebih banyak sel darah dan Suplemen zat besi, vitamin B12, asam folat, atau vitamin dan mineral lainnya'),
(12, 'Depresi', 'Depresi adalah kondisi yang meliputi depresi berat atau depresi klinis. Kondisi ini juga bisa digambarkan sebagai suatu kelainan mood yang menyebabkan perasaan sedih dan hilang minat yang terus-terusan menghantui. Jika Anda telah merasa sedih selama beberapa hari atau minggu, mengganggu pekerjaan atau kegiatan lain dengan keluarga atau teman, atau berpikir untuk melukai diri sendiri sampai ingin bunuh diri, kemungkinan ini adalah depresi. ', 'Obat-obatan antidepresan, Psikoterapi, Terapi elektrokonvulsif, dan jangan menyendiri.'),
(13, 'Pneumonia', 'Pneumonia atau radang paru-paru adalah suatu peradangan yang disebabkan oleh bakteri, virus, maupun parasit lainnya. Peradangan terjadi pada pulmonary alveolus (alveoli) yang seharusnya bertugas untuk menyerap oksigen dari atmosfer. Akan tetapi karena terjadinya peradangan, organ ini menjadi terisi cairan sehinggapenyerapan oksigen terganggu dan menyebabkan sulit bernapas. Gejalanya dmulai dari demam, batuk, hingga mengalami kesulitan bernapas.', 'Obat pereda nyeri, Obat batuk. Obat ini dapat meredakan batuk sehingga penderita bisa beristirahat. Pemberian obat ini sebaiknya dilakukan dalam dosis yang rendah, Antibiotik, Banyak beristirahat, Mengonsumsi banyak cairan, dan tidak melakukan kegiatan yang berlebihan.'),
(14, 'Tetanus', 'Tetanus disebabkan oleh kuman Clostridium tetani yang menginfeksi luka yang terbuka. Biasanya menimbulkan kejang-kejang yang dapat berulang.', 'Perawatan luka, untuk membersihkan luka dan mengangkat jaringan yang sudah mati, Suntikan antitetanus, Antibiotik, Obat penenang, Obat magnesium sulfat dan beta blocker, dan Vaksin tetanus. Vaksin tetanus tetap diberikan walaupun seseorang sudah mengalami tetanus.');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`user_id`, `username`, `password`) VALUES
(1, 'arta', '123'),
(2, 'mira', '456'),
(3, 'irfanad', '555');

-- --------------------------------------------------------

--
-- Table structure for table `sehat`
--

CREATE TABLE `sehat` (
  `id` int(3) NOT NULL,
  `sehat` text NOT NULL,
  `dampak` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sehat`
--

INSERT INTO `sehat` (`id`, `sehat`, `dampak`) VALUES
(1, 'Manfaat Olahraga', 'Olahraga dapat membuat memberi dampak pada tubuh menjadi lebih sehat dan bahagia. Manfaat dari berolahaga diantaranya ialah, menurunkan tekanan darah tinggi, menangkal obesitas, menunda keterbatasan fisik saat usia tua, mengatasi stres, dan membuat tidur menjadi lebih nyenyak.\r\n\r\n'),
(2, 'Mengkonsumsi Buah-buahan', 'Dengan mengkonsumi buah-buahan, kita dapat merawat tubuh serta melindungi diri dari penyakit. Selain menjadi sumber nutrisi yang baik untuk tubuh, buah juga memiliki kadar lemak serta gula yang rendah. Manfaat dari mengkonsumsi buah antara lain, menyehatkan pencernaan, meningkatkan asupan gizi tubuh, dan  mengurangi resiko obesitas.'),
(3, 'Mengkonsumsi Vitamin C', 'Dengan mengonsumsi vitamin C secara tepat, tubuh dapat menerima manfaat dari vitamin C yang berdampak pada kesehatan tubuh serta kecantikan kulit. Manfaat lainnya antara lain, meningkatkan daya tahan tubuh, sebagai antioksidan, menjaga kesehatan kulit, meningkatkan penyerapan zat besi, dan membantu merawat kesehatan tulang.'),
(4, 'Mengkonsumsi Suplemen', 'Suplemen berperan untuk melengkapi asupan makanan yang sudah tersedia. Manfaat dari mengkonsumsi suplemen ialah, mengurangi resiko kardiovaskular, meningkatkan kinerja olah raga, meredakan kelelahan fisik, mengobati hiperkolesterolemia, mennghindari kondisi gangguan pencernaan, dan meredakan kondisi mual atau mabuk.'),
(5, 'Manfaat Tidur Berkualitas', 'Tidur merupakan aktifitas penting dalam hidup untuk kesehatan. Dengan menjaga waktu tidur yang berkualitas, tidur dapat menjadi manfaat untuk mencegah terjadinya penyakit kronis seperti diabetes dan penyakit jantung. Manfaat lainnya dari tidur yang berkualitas antara lain, menyehatkan tubuh, meredakan rasa nyeri, memperbaiki suasana hati, meningkatkan daya pikir dan ingat, serta meningkatkan sistem kekebalan tubuh.'),
(6, 'Mengatur Pola Makan', 'Dengan menjaga pola makan, tubuh dapat menjadi lebih sehat dan terhindar dari penyakit. Manfaat lainnya dari mengatur pola makan ialah, meningkatkan energi, meningkatkan kecerdasa, mendapatkan kualitas tidur yang baik, dan menjaga kesehatan kulit.'),
(7, 'Manfaat Minum Air Putih yang Cukup', 'Meminum air putih merupakan pilihan paling sehat demi menjaga tubuh untuk tetap memiliki cairan yang cukup. Manfaat minum air putih terhadap tubuh ialah, menjaga kadar cairan tubuh, memberikan energi, mengendalikan asupan kalori, mencegah peningkatan berat badan, menjaga kesehatan kulit, melindungi saraf pada tubuh, dan melancarkan proses pencernaan.'),
(8, 'Manfaat Behenti Merokok', 'Berhenti merokok dapat membuat perubahan yang besar pada kesehatan dan gaya hidup. Dengan berhenti, tubuh dapat menghindari resiko terkena penyakit serius seperti kanker, jantung, dan paru-paru. Manfaat lainnya setelah berhenti merokok ialah, mengurangi stres, meningkatkan daya pernafasan, meningkatkan kesehatan kulit, memberikan energi, dan melindungi orang sekitar.'),
(9, 'Manfaat Mandi Air Dingin', 'Mandi menggunakan air dingin ternyata memiliki efek yang baik terhadap tubuh. Berbagai manfaat nya ialah, menguatkan sistem imun, mengurangi stres, meningkatkan pemulihan otot, mengurangi rasa sakit, meningkatkan sirkulasi pada tubuh, dan meningkatkan ketahanan emosional.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `sehat`
--
ALTER TABLE `sehat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gejala`
--
ALTER TABLE `gejala`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sehat`
--
ALTER TABLE `sehat`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
