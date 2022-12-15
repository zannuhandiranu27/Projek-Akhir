-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2022 at 02:59 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `berita_bola`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(1, 'zannu', '123456'),
(6, 'iban', '654321'),
(8, 'zannu323sds', 'CIE123dsads');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(3) NOT NULL,
  `kategori_id` int(3) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `isi2` text NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `kategori_id`, `judul`, `isi`, `isi2`, `gambar`) VALUES
(37, 2, 'Maroko vs Spanyol', 'Sekalipun Maroko menumbangkan peringkat kedua dunia Belgia dalam fase grup, Spanyol lebih difavoritkan sebagai pemenang pertandingan babak 16 besar Piala Dunia yang berlangsung Selasa malam nanti itu.Namun pastinya pengalaman tim-tim yang bertanding dalam fase grup memberikan peringatan bahwa tidak ada yang pasti dalam turnamen sepak bola.', 'Spanyol, yang mengalahkan Kosta Rika 7-0 dalam pertandingan pembukanya menempati posisi kedua dalam Grup E di bawah Jepang.Akan halnya Maroko, mereka mencapai 16 besar setelah menjuarai Grup F dengan finis di atas runner up empat tahun silam Kroasia dan Belgia.', 'Spanyol-vs-Maroko.jpg.webp'),
(38, 2, 'France vs Poland', 'Prancis lolos ke fase sistem gugur dengan satu pertandingan tersisa setelah dua penampilan penuh gaya melawan Australia dan Denmark tetapi kalah dalam pertandingan grup terakhir dari Tunisia setelah mengistirahatkan beberapa pemain kunci.', 'Polandia lolos meski kalah 2-0 dari Argentina di pertandingan grup terakhir mereka, dibawa melalui fase pembukaan dengan pertahanan kokoh mereka dan sentuhan striker Robert Lewandowski.', 'prancis-vs-polandia.jpg'),
(39, 2, 'Inggris vs Senegal', ' Ada statistik yang bisa menjadi pemicu tapi juga kendala yang harus diperhatikan Senegal kala menghadapi Inggris bahwa tim-tim Afrika tak pernah menang dari total 21 pertemuan dengan Three Lions.', 'Apakah Senegal yang juara Afrika itu yang mengakhiri kutukan tersebut atau malah memperpanjang catatan kurang menyenangkan dari benua hitam itu. Itu semua bakal terjawab Senin dini hari nanti di Stadion Al Bayt dalam pertandingan keempat babak 16 besar Piala Dunia 2022.', 'inggris-vs-Senegal.jpg.webp'),
(40, 2, 'Brazil vs Korea Selatan', '   Pelatih Brazil Tite rupanya dipusingkan oleh masalah cedera pemain-pemainnya termasuk yang reguler menjadi starter.', '    Tite tak membolehkan media menghadiri sesi latihan Brazil dua hari lalu tetapi memastikan bahwa Neymar, Alex Sandro dan Danilo harus berada di lapangan untuk menguji kondisi tubuh mereka.', 'brazil-vs-korsel.jpg.webp'),
(41, 2, 'Portugal vs Swiss', 'Pelatih Portugal Fernando Santos mendapatkan dorongan semangat setelah gelandang Otavio siap bermain dalam pertandingan melawan Swiss dalam 16 besar Piala Dunia yang dilangsungkan Selasa malam nanti.', ' Setelah absen dalam dua pertandingan terakhir karena cedera paha, gelandang Porto itu akan bergabung bersama rekan-rekan satu timnya.Bek tengah Danilo Pereira yang mengalami tiga patah tulang rusuk pekan lalu juga sudah pulih sehingga bisa segera dimainkan.', 'portugal-vs-Swiss.jpg.webp'),
(42, 2, 'Jepang vs Kroasia', 'Jepang telah menuliskan salah satu kisah fenomenal dalam Piala Dunia setelah balik menaklukkan Jerman dan Spanyol yang keduanya pernah juara dunia, tetapi Takuma Asano menyatakan timnya belum mencapai apa pun.Pemain sayap Jepang ini mencetak gol kemenangan yang mengagumkan ketika Samurai Biru menumbangkan Jerman.', 'Langkah mengejutkan kedua Jepang saat menjungkalkan Spanyol dalam laga terakhir fase grup telah melontarkan Jepang ke babak 16 besar sebagai juara Grup E untuk menghadapi Kroasia yang finis sebagai runner up Grup F.\"Kini saya merasa ini adalah Piala Dunia yang hebat. Tapi kami belum mencapai apa pun, jadi jujur saja, menurut saya semuanya baru dimulai dari sekarang,\" kata Asano seperti dikutip Reuters.', 'Jepang-vs-Kroasia.jpg.webp'),
(43, 2, 'Belanda vs Australia', 'Belanda tidak akan meremehkan Amerika Serikat ketika keduanya bertemu dalam babak 16 besar Piala Dunia 2022 di Stadion Internasional Khalifa, Sabtu malam ini. \"AS sudah menunjukkan diri bahwa mereka memiliki tim yang luar biasa. Saya bahkan menyebutnya salah satu tim terbaik, tim yang dirancang dengan baik (tetapi) bukan hal yang tidak bisa kami atasi,\" kata manajer Louis van Gaal dalam konferensi pers Jumat seperti dikutip Reuters.', '\"Van Gaal melanjutkan, \"\"AS adalah skuad yang sangat energik, memiliki pemain yang kuat secara fisik dan tangguh menghadapi lawan mana pun, tetapi kami akan melakukan semua yang kami bisa untuk menang dan mengalahkan AS.\"\"  Belanda lolos setelah menjuarai Grup A di bawah Senegal yang sama-sama mewakili grup ini ke babak 16 besar.\"', 'belanda-vs-AS.jpg.webp'),
(44, 2, 'Argentina vs Australia', 'Argentina difavoritkan menang atas Australia dalam laga 16 besar Minggu dini hari esok, tetapi sejak dikalahkan Arab Saudi dalam partai pembuka, Tim Tango menarik pelajaran berharga bahwa mereka pantang meremehkan tim non unggulan, khususnya Socceroos yang pantang menyerah.', 'Australia yang berbeda 35 peringkat di bawah Argentina, sudah melampaui ekspektasi usai menang dua kali guna mendapatkan tempat 16 besar menghadapi Argentina di Stadion Ahmad bin Ali yang akan menjadi salah satu pertandingan terbesar dalam sejarah sepak bola Australia.', 'Argentina-vs-australia.jpg.webp'),
(64, 3, 'Kroasia vs Brazil', 'Bek Kroasia Dejan Lovren berusaha rendah hati tapi menyimpan rahasia maut kala melawan Brazil nanti dengan menyatakan Brazil memiliki tim inti dan lapis kedua yang sama kuatnya.  Sebaliknya penyerang Brazil Vinicius Jr menyatakan timnya akan tampil tetap sepercaya diri dalam laga-laga sebelumnya, termasuk tetap melakukan selebrasi gol yang dikritik sejumlah kalangan seperti legenda Manchester United Roy Keane yang menyebut mereka tidak menghormati lawan.', '\"Gol adalah momen terpenting dalam sepak bola, terlebih Piala Dunia bahkan lebih penting. Ini adalah momen kegembiraan bukan hanya untuk kami, para pemain, tapi juga untuk seluruh negara kami,\" kata Vinicius seperti dikutip Reuters. \"Kami masih akan terus melakukan selebrasi seperti itu.\"  Jika melihat statistik kedua tim, Brazil memang layak percaya diri karena dari kuantitas mendistribusikan bola dan penciptaan peluang serta jumlah gol memang di atas Kroasia.  Kedua tim terpaut 100 umpan, sedangkan dalam jumlah gol Brazil dua gol lebih banyak dibandingkan dengan Kroasia. Kuantitas menyerang gawang lawan juga lebih banyak ketimbang Kroasia.', 'brazil-vs-kroasia.jpg.webp'),
(65, 3, 'Belanda vs Argentina', 'Jakarta (ANTARA) - Virgil van Dijk menyatakan Belanda akan tampil hati-hati kala melawan Argentina dalam perempat final Piala Dunia 2022 dini hari esok di Stadion Lusail, Qatar.  \"Merekah tim yang fantastis dengan pemain-pemain yang fantastis, dan kami harus menghadapinya dengan baik dalam semua bagian pertandingan ini,\" kata van Dijk seperti dikutip Reuters.  Setelah tiga kali gagal dalam tiga final Piala Dunia sebelumnya, Belanda sangat ingin membuat terobosan dengan menjadi negara kesepuluh yang menjuarai Piala Dunia.  \"Ada rasa lapar, mimpi, dan hasrat bahwa kami sangat ingin merengkuh Piala Dunia,\" kata van Dijk.', 'Pelatih Louis van Gaal yang ahli merancang taktik efektif dalam sepak bola, sudah menyiapkan strategi menghentikan Argentina yang hanya menang dua kali dalam sembilan pertemuan terdahulu antara kedua tim.  Strategi ini juga meliputi langkah bagaimana melumpuhkan Lionel Messi yang menjadi kunci permainan Argentina yang tengah memburu trofi Piala Dunia pertamanya kala karir sudah di ujung senja.  Di samping memikul harapan bangsanya, Messi juga memikul bebannya sendiri untuk menyamai pencapaian Diego Maradona yang memenangkan semua hal termasuk Piala Dunia yang sampai detik ini tak bisa direngkuh Messi.', 'belanda-vs-argentina.jpg.webp'),
(66, 3, 'Maroko vs Portugal', 'Maroko berusaha membuat sejarah Piala Dunia ketika Sabtu malam nanti bertemu dengan Portugal dalam perempat final Piala Dunia 2022. Mereka mengaku tidak puas sekalipun telah membuka babak baru dalam sepak bola Arab.  Pelatih Walid Regragui menyatakan timnya mengawali turnamen ini dengan status underdog tetapi telah membuktikan diri justru telah menjadi penantang sejati yang lapar kemenangan.', 'Jika mereka menang dalam laga di Stadion Al Thumama ini, maka Maroko menjadi tim Afrika pertama yang mencapai empat besar dan sekaligus negara Arab pertama yang melaju ke delapan besar.  \"Kami telah mencapai hal-hal hebat tetapi kami merasa belum cukup, kami ingin melangkah lebih jauh,\" kata Regragui seperti dikutip Reuters. “Kami telah membuktikan bahwa semua analis data salah tentang peluang kami kala melawan Belgia dan juga Spanyol. Mereka semua beranggapan kami akan kalah melawan mereka.\"', 'portugal-vs-maroko.jpg.webp'),
(67, 3, 'Inggris vs France', ' Laga perempat final terakhir dalam Piala Dunia 2022 yang digelar Minggu dini hari esok di Stadion Al Bayt ini adalah pertemuan kelas berat antara dua tim raksasa dunia dan Eropa yang juga pemilik dua dari lima liga sepak bola profesional top di dunia.  Kedua tim dalam level percaya diri yang sama. Prancis karena juara bertahan dan memiliki predator maut pada diri Kylian Mbappe, sedangkan Inggris karena menjadi salah satu tim termaut yang sejauh ini sudah membukukan 12 gol dalam Piala Dunia 2022.  Inggris yang terhenti pada semifinal Piala Dunia di Rusia empat tahun lalu, kini yakin bisa menjuarai turnamen ini.', 'Empat tahun lalu Inggris yang menurunkan pemain-pemain muda nan tidak berpengalaman disingkirkan via perpanjangan waktu oleh Kroasia.  Kini skuad sama asuhan Gareth Southgate itu sudah berubah lebih matang, lebih padu dan lebih klinis yang membuat mereka yakin bisa mengulang sukses Piala Dunia 1966 yang mereka juarai itu.', 'prancis-vs-inggris.jpg.webp'),
(70, 4, 'Argentina vs Kroasia', ' Saling sanjung dan saling menaruh respek dilontarkan sebelum laga besar antara finalis empat tahun lalu Kroasia dengan juara dunia dua kali Argentina yang akan bertemu dalam semifinal pertama Piala Dunia 2022 yang berlangsung Rabu dini hari nanti di Stadion Lusail, Qatar.  ', 'Pelatih Lionel Scaloni tak kalah tingginya menaruh respek kepada Kroasia bahwa lawannya ini memiliki kualitas untuk mengalahkan siapa pun, termasuk Argentina.  \"Mereka sudah menciptakan masalah kepada banyak tim nasional. Saya tak mau menyebut pemain-pemain penting mereka atau kekuatan-kekuatan dan kelemahan-kelemahan mereka, tetapi kami sudah menganalisis di mana kami bisa melukai mereka. Kadang itu berhasil, kadang tidak,\" kata Scaloni kepada wartawan menjelang semifinal ini.', 'Argentina-vs-kroasia.jpg.webp');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(3) NOT NULL,
  `nm_kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nm_kategori`) VALUES
(2, '16 besar Piala dunia 2022'),
(3, '8 besar Piala dunia 2022'),
(4, '4 besar Piala dunia 2022'),
(5, 'Final');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `id_kategori` (`kategori_id`),
  ADD KEY `kategori_id` (`kategori_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
