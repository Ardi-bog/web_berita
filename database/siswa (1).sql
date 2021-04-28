-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2018 at 04:34 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(100) NOT NULL,
  `isi_berita` text NOT NULL,
  `gambar_berita` varchar(150) NOT NULL,
  `deskripsi` text NOT NULL,
  `kategori` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul_berita`, `isi_berita`, `gambar_berita`, `deskripsi`, `kategori`) VALUES
(9, 'Riko Simanjuntak Siap Tunjukkan Perfoma Terbaik di Timnas Indonesia', '\r\nRiko Simanjuntak akhirnya resmi masuk dalam skuat Timnas Indonesia untuk Piala AFF 2018. \r\n\r\nSebelumnya, sayap lincah Persija Jakarta itu sempat tak tahu dirinya dipanggil Timnas Indonesia. Pasalnya, belum ada surat pemanggilan dari PSSI ke manajemen Persija.\r\n\r\nKini, surat pemanggilan dari PSSI sudah diterima klub. Riko pun masuk dalam skema pelatih Bima Sakti untuk turnamen Piala AFF 2018.\r\n\r\n\"Pastinya saya senang dengan pemanggilan untuk timnas ini. Saya akan memberikan seluruh kemampuan yang terbaik,\" ujar Riko Simanjuntak, Rabu (31/10/2018).\r\n\r\nSelain Riko, Persija juga menyumbang Andritany Ardhiyasa ke Timnas Indonesia. Bagol (sapaan akrab Andritany) dalam beberapa tahun terakhir merupakan kiper utama dari Skuat Garuda.\r\n\r\nSebanyak 23 pemain yang terpilih masuk dalam Timnas Indonesia untuk Piala AFF akan berkumpul di Cikarang, Jawa Barat, pada 1 November besok.', 'asip.jpeg', '\r\nRiko Simanjuntak akhirnya resmi masuk dalam skuat Timnas Indonesia untuk Piala AFF 2018. \r\n\r\nSebelumnya, sayap lincah Persija Jakarta itu sempat tak tahu dirinya dipanggil Timnas Indonesia. Pasalnya, belum ada surat pemanggilan dari PSSI ke manajemen Persija.', 'Terbaru'),
(19, 'Diserang Netizen UEA, Todd Rivaldo Dapat Pembelaan Kocak dari Netizen Indonesia', '\r\nAkun Instagram Todd Rivaldo Ferre menjadi sasaran netizen Uni Emirat Arab usai Timnas Indonesia berhasil menang 1-0 atas tim asal Timur Tengah tersebut. Uniknya, Todd mendapat pembelaan yang lucu dari netizen Indonesia.', 'sap.jpeg', '\r\nAkun Instagram Todd Rivaldo Ferre menjadi sasaran netizen Uni Emirat Arab usai Timnas Indonesia berhasil menang 1-0 atas tim asal Timur Tengah tersebut. Uniknya, Todd mendapat pembelaan yang lucu dari netizen Indonesia.', 'Terbaru'),
(20, 'Laga Perpisahan, Falcao Cetak Gol ke-400 Dengan Cara Fantastis', 'Legenda futsal Falcao, sepertinya tak bisa berhenti untuk mencetak gol indah, bahkan di momen-momen terakhirnya bersama timnas futsal Brazil.\r\n\r\nLaga persahabatan melawan Paraguay merupakan pertandingan terakhirnya secara resmi bersama timnas futsal Brazil pada Minggu (28/10) waktu setempat di Jaragua do Sul.\r\n\r\nBaru tiga menit laga berlangsung, pemain yang ditunggu-tunggu untuk mencetak gol bagai menjawab permintaan para penggemarnya. Yang lebih fantastis, gol ke-400 Falcao tersebut dicetak lewat aksi Backheel. Bahkan Falcao berhasil mencetak gol keduanya yang membuatnya menyudahi karir di timnas di angka 401 gol dan 258 laga.\r\n\r\n', 'falcao.jpeg', 'Legenda futsal Falcao, sepertinya tak bisa berhenti untuk mencetak gol indah, bahkan di momen-momen terakhirnya bersama timnas futsal Brazil.\r\n\r\nLaga persahabatan melawan Paraguay merupakan pertandingan terakhirnya secara resmi bersama timnas futsal Brazil pada Minggu (28/10) waktu setempat di Jaragua do Sul.', 'Lainnya'),
(21, ' Apapun Alasannya, Bonus Asian Para Games Jangan Dipotong', 'Jakarta - Sekretaris Menpora, Gatot S. Dewa Broto, menegaskan tak ada aturan untuk memotong bonus atlet. NPC tak bisa berdalih menggunakan AD/ART.\r\n\r\nNPC memang tak memiliki sumber dana yang kontinyu untuk membiayai operasional. Kementerian Pemuda dan Olahraga (Kemenpora) mengakui hanya memberi anggaran pelatnas atlet National Olympic Committee (NPC) Indonesia sesuai dengan kompetisi yang diikuti. Untuk biaya administrasi dan operasional harian diserahkan bulat-bulat kepada NPC.\r\n\r\nSaat dipisahkan dengan KONI pada 2004, NPC memang kesulitan untuk mendapatkan dana. Jika sebelumnya menyusu APBN, NPC tak mendapatkannya lagi, kecuali menjelang multievenet. \r\n\r\nNah, untuk membiayai operasional, termasuk administrasi, NPC menetapkan dalam AD/ART untuk memotong bonus-bonus atlet, khususnya di multievent seperti Asian Games, ASEAN Para Games, serta Peparnas. Ketua NPC Indonesia, Senny Marbun, dalam konferensi pers di Arena GBK di sela-sela Asian Para Games 2018 menyebut setiap atlet diwajibkan berkontribusi sebesar 30 persen. Yakni, dengan rincian sebesar 15 persen pemotongan untuk NPC Indonesia, dan 10 persen diserahkan kepada NPC Provinsi. Sisanya, lima persen, unntuk NPC Kabupaten dan Kota.\r\n\r\nSetelah ditelisik, besaran kontribusi itu tak tertulis dalam Anggaran Dasar dan Anggaran Rumah Tangga NPC Indonesia secara detail. Menukil pasal 6 butir E Anggaran Dasar NPC Indonesia tentang Kewajiban Anggota tertulis \"Memberi kontribusi kepada organisasi khusus bagi anggota atau berkedudukan sama dengan anggota yang memperoleh penghargaan yang bersifat material melalui atau karena prakarsa NPC Indonesia dengan jumlah yang akan ditentukan oleh peraturan organisasi.\"\r\n\r\nGatot meminta agar NPC menghentikan pemotongan bonus itu. Apalagi, tak ada besaran pasti. \r\n\r\n\"AD/ART itu urusan tiap organisasi. Itu sebagai Non Goverment Organazation (NGO), itu hak mereka dan kami tidak boleh mencampuri. Tapi, jangan (juga) itu dijadikan landasan untuk memotong. Sangat lemah itu. Karena di pasal aturan AD/ART itu saya baca, tidak ada kata-kata 30 persen loh ya. Tidak ada,\" kata Gatot di Kantor Kemenpora, Senayan, Jumat (26/10/2018).\r\n\r\n\"(Jadi) Jangan sembarangan mengutip karena area ini kan sensitif. Jangan sembarang mengutip sesuatu yang masalah peraturan bukan haknya, kenapa? Karena saya berulang-ulang mengatakan kalau AD/ART itu lemah,\" dia menambahkan. \r\n\r\nGatot juga memastikan operasional NPC akan didanai Kemenpora. ', 'asian_para_games.jpeg', 'Jakarta - Sekretaris Menpora, Gatot S. Dewa Broto, menegaskan tak ada aturan untuk memotong bonus atlet. NPC tak bisa berdalih menggunakan AD/ART.\r\n\r\nNPC memang tak memiliki sumber dana yang kontinyu untuk membiayai operasional. Kementerian Pemuda dan Olahraga (Kemenpora) mengakui hanya memberi anggaran pelatnas atlet National Olympic Committee (NPC) Indonesia sesuai dengan kompetisi yang diikuti. Untuk biaya administrasi dan operasional harian diserahkan bulat-bulat kepada NPC.', 'Lama');

-- --------------------------------------------------------

--
-- Table structure for table `berita1`
--

CREATE TABLE `berita1` (
  `id_berita` int(5) NOT NULL,
  `judul_berita` varchar(100) NOT NULL,
  `isi_berita` text NOT NULL,
  `gambar_berita` varchar(150) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `kategori` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita1`
--

INSERT INTO `berita1` (`id_berita`, `judul_berita`, `isi_berita`, `gambar_berita`, `deskripsi`, `kategori`) VALUES
(10, ' OnePlus Bakal Rilis Smartphone 5G Pertama di Eropa', ' OnePlus merupakan salah satu vendor yang sedang menyiapkan smartphone 5G.\r\n\r\nCEO OnePlus, Pete Lau, juga sudah memastikan hal ini dan ingin menjadi salah satu yang pertama merilis smartphone tersebut.\r\n\r\nDilansir Phone Arena, Rabu (31/10/2018), Lau mengatakan, perusahaan melihat ada permintaan tinggi dari konsumennya terhadap smartphone tersebut, meski jaringan 5G belum tersedia secara komersil.\r\n\r\nKendati demikian, OnePlus sangat bersemangat mengadopsi teknologi itu sejak awal, agar bisa mengetahui lebih banyak hal.\r\n\r\nBACA JUGA\r\nOnePlus 6T Melenggang dengan Snapdragon 845 dan Fingerprint di Layar\r\nBocoran Terkuak, OnePlus 6T Bakal Usung Notch Mini?\r\nOnePlus 6 Warna Merah Resmi Dirilis, Berapa Harganya?\r\nIa menambahkan, OnePlus sudah bekerja sama dengan beberapa operator Eropa. Selain itu, Lau optimistis OnePlus akan menjadi yang pertama merilis smartphone 5G di Eropa.\r\n\r\nSayangnya, Lau tidak memberikan bocoran tentang spesifikasi smartphone atau desainnya.\r\n\r\nNamun, smartphone itu dipastikan akan tetap kompatibel dengan jaringan 4G LTE, mengingat ketersediaan jaringan 5G akan terbatas pada masa-masa awal.\r\n\r\nRencana peluncuran smartphone 5G ini juga belum diketahui. Jika merujuk pernyataan Lau, bahwa OnePlus akan menjadi vendor smartphone 5G pertama di Eropa, maka kemungkinan produknya itu akan dirilis pada tahun depan.\r\n\r\nSmartphone flagship baru Samsung yang disebut juga akan menjadi perangkat 5G, Galaxy S10, dijadwalkan akan diumumkan pada akhir Februari 2019 di Eropa.\r\n\r\nJika ingin menjadi yang pertama, maka OnePlus harus merilisnya lebih dahulu dari Galaxy S10.', 'hp.jpg', ' OnePlus merupakan salah satu vendor yang sedang menyiapkan smartphone 5G.\r\n\r\nCEO OnePlus, Pete Lau, juga sudah memastikan hal ini dan ingin menjadi salah satu yang pertama merilis smartphone tersebut.', 'Terbaru'),
(11, 'Mark Zuckerberg: Stories Adalah Masa Depan Media Sosial', '\r\nMark Zuckerberg, Founder sekaligus CEO Facebook, banyak disalahkan sebagian pihak karena membiarkan penggunanya membagikan tautan berita hoax di Facebook. (Doc: Wired)\r\nLiputan6.com, Jakarta - CEO Facebook Mark Zuckerberg, mengakui kalau Stories adalah produk terpenting yang dimiliki Facebook untuk saat ini.\r\n\r\nPernyataan itu disampaikan Zuck--begitu karib disapa, saat ia membawakan presentasi dalam sesi laporan pendapatan Facebook kuartal ketiga pada Selasa (30/10/2018).\r\n\r\nBahkan, Zuck menyebut kalau Stories kemungkinan bisa jadi salah satu fitur masa depan di media sosial.\r\n\r\n\r\n\"Orang-orang ingin berbagi momen mereka, tetapi tidak ingin menyimpannya secara permanen. Dan saya yakin kita benar-benar menginginkan ini,\" lanjutnya.\r\n\r\nZuck juga mengungkap tren penggunaan Stories di platform seperti Facebook, Instagram, dan WhatsApp berlangsung dengan cepat dan bisa lebih mendominasi daripada konsumsi media sosial pada News Feed di Facebook dan feed di Instagram.\r\n\r\n\"Ini benar-benar terjadi dengan cepat. Padahal, tren Stories sebetulnya lebih baru ketimbang News Feed dan feed,\" tandasnya.\r\n\r\nSekadar informasi, Stories memang merupakan salah satu fitur yang digandrungi banyak penggunannya. Fitur ini memperkenankan pengguna berbagi momen berupa video atau foto dalam waktu terbatas, yakni cuma 15 detik.\r\n\r\nFacebook sendiri juga mengungkap kalau layanan Instagram Stories kini mencapai 400 juta pengguna. Jumlah tersebut diklaim dua kali lipat lebih besar dari pengguna harian yang ada di Snapchat.\r\n\r\n2 dari 3 halaman\r\nTaklukkan Snapchat\r\nInstagram Stories\r\nFitur Sticker Music di Instagram Stories (Sumber: Tech Crunch)\r\nMenurut informasi yang dilansir Business Insider pada Jumat (29/6/2018), jumlah tersebut terbilang drastis mengingat Instagram Stories baru saja merangkul 300 juta pengguna di penghujung 2017.\r\n\r\nHanya butuh waktu sekitar enam bulan yang hingga pada akhirnya pengguna bisa mencapai 400 juta. \r\n\r\nPada Juli 2017, Instagram Stories sempat mengantongi 250 juta pengguna aktif harian, pada pekan ini jumlah penggunanya kembali meningkat hingga 300 juta.\r\n\r\nZuck kala itu mengungkap pertumbuhan pengguna Instagram Stories bahkan menyalip jumlah pengguna aktif Snapchat yang kini hanya berkisar di 173 juta.\r\n\r\n\"Meningkatnya jumlah pengguna membuktikan bahwa interaksi dengan teman dan keluarga lewat Stories kini lebih berarti, ini tandanya baik,\" ujar Zuck.', 'mark.jpg', 'Mark Zuckerberg, Founder sekaligus CEO Facebook, banyak disalahkan sebagian pihak karena membiarkan penggunanya membagikan tautan berita hoax di Facebook. (Doc: Wired)\r\nLiputan6.com, Jakarta - CEO Facebook Mark Zuckerberg, mengakui kalau Stories adalah produk terpenting yang dimiliki Facebook untuk saat ini.\r\n', 'Terbaru'),
(13, 'Google dan Facebook Diwajibkan Bayar Pajak Lebih Tinggi di Inggris', 'Pemerintah Inggris berencana untuk mengimplementasikan tarif pajak yang lebih besar untuk perusahaan-perusahaan teknologi Amerika Serikat yang beroperasi di negara itu. Rencananya, tarif pajak yang baru akan mulai diberlakukan per April 2020. Sebagaimana dikutip Tekno Liputan6.com dari Business Insider Singapore, Rabu (31/10/2018), tarif pajak baru Inggris ini akan berlaku untuk perusahaan seperti Google, Facebook, hingga Amazon. Menteri Philip Hammond mengatakan, tarif pajak yang berlaku untuk Facebook cs adalah 2 persen dari pendapatan perusahaan di Inggris. Dengan besaran tarif pajak ini diperkirakan, pendapatan pajak Inggris bisa meningkat hingga 400 juta poundsterling atau setara US$ 510 juta per tahun. Sekadar diketahui, ini merupakan pertama kalinya Inggris menarget perusahaan teknologi untuk membayar pajak lebih besar di negaranya. Pasalnya, para perusahaan teknologi ini diketahui hanya membayar sedikit pajak ke Inggris. Business Insider Singapore melaporkan, sebagian besar perusahaan teknologi AS memiliki pengaturan pajak yang rumit. Perusahaan teknologi AS bahkan dengan sengaja membuat anak perusahaan di negara tempat mereka beroperasi agar pajak yang dibayarkan lebih rendah. Misalnya saja Facebook yang membuat anak perusahaan di Irlandia. Anak perusahaannya di Inggris melaporkan pendapatannya berdasarkan layanan yang disediakan oleh perusahaan induk. Gara-gara ini, pendapatan yang dicatat lebih rendah dan pajak yang dibayarkan pun juga jauh lebih rendah. \"Platform digital yang memiliki produk berupa mesin pencari, media sosial, dan marketplace telah mengubah kehidupan kita, sebagian besar menjadi lebih baik,\" kata Hammond. 2 dari 3 halaman Hanya Berlaku buat Perusahaan Besar Google Kantor pusat Google di Mountain View. Liputan6.com/Jeko Iqbal Reza Meski membuat pengguna lebih baik, tapi hal ini menjadi tantangan tersendiri bagi otoritas pajak. Salah satunya, kata Hammond, terkait dengan sistem pajak yang diterapkan. \"Aturannya selama ini tidak sejalan dengan perubahan model bisnis dan jelas tidak berkelanjutan atau adil. Bahwa bisnis platform bisa menghasilkan nilai substansial di Inggris, tanpa (perusahaan teknologi) membayar pajak,\" katanya. Hammond menambahkan, tarif pajak baru ini diberlakukan bagi perusahaan-perusahaan teknologi AS. Selain Google dan Facebook, perusahaan seperti Uber atau Airbnb juga akan terdampak pajak ini. Meski begitu, menurutnya, startup yang lebih kecil tak akan terkena imbasnya. Hammond menyebut, hanya perusahaan dengan pendapatan di atas 500 juta poundsterling yang akan dikenai tarif pajak baru ini.', 'nigga.jpg', 'Pemerintah Inggris berencana untuk mengimplementasikan tarif pajak yang lebih besar untuk perusahaan-perusahaan teknologi Amerika Serikat yang beroperasi di negara itu. Rencananya, tarif pajak yang baru akan mulai diberlakukan per April 2020.', 'Lainnya'),
(14, 'Ingin Unduh Video dari Instagram? Coba Jajal 3 Aplikasi Ini', '\r\nIlustrasi Instagram (AP Photo/Marcio Jose Sanchez, File)\r\nLiputan6.com, Jakarta - Siapa di antara kamu yang ingin mengunduh video Instagram untuk di simpan ke galeri smartphone?\r\n\r\nPasti kamu merasa mengunduh video di media sosial milik Facebook ini cukup sulit. Ya, Instagram memang tidak menghadirkan fitur mengunduh video secara resmi.\r\n\r\nNah, sebetulnya ada beberapa trik di mana kamu bisa mengunduh video secara langsung dari Instagram.\r\n\r\nCaranya mudah, kamu hanya perlu mengunduh aplikasi third party atau pihak ketiga. Apa saja? Berikut deretan aplikasinya.\r\n\r\n1. Video Downloader for Instagram\r\n\r\nAplikasi unduh video ini terbilang cukup populer. Uniknya, tak cuma dipakai untuk mengunduh video, Video Downloader juga bisa mem-posting kembali video Instagram.\r\n\r\nSayangnya, aplikasi ini hanya tersedia pengguna Android yang bisa diunduh melalui Google Play Store. Video yang telah diunduh, akan otomatis tersimpan ke galeri Anda.\r\n\r\n \r\nBerikutnya\r\nInstagram\r\nIlustrasi Instagram (iStockPhoto)\r\n2. PostGraber\r\n\r\nBerbeda dengan aplikasi lainnya, PostGraber dapat mengunduh video Instagram melalui situs web.\r\n\r\nCaranya cukup mudah, kamu hanya memerlukan tautan dari konten video  yang ingin diunduh. Kemudian, pilih copy lalu paste tautan di situs web PostGraber, dan klik untuk membuka serta mengunduhnya.', 'ig.jpg', '', 'Lama');

-- --------------------------------------------------------

--
-- Table structure for table `berita2`
--

CREATE TABLE `berita2` (
  `id_berita` int(5) NOT NULL,
  `judul_berita` varchar(100) NOT NULL,
  `isi_berita` text NOT NULL,
  `gambar_berita` varchar(150) NOT NULL,
  `kategori` varchar(40) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `berita3`
--

CREATE TABLE `berita3` (
  `id_berita` int(5) NOT NULL,
  `judul_berita` varchar(100) NOT NULL,
  `isi_berita` text NOT NULL,
  `gambar_berita` varchar(150) NOT NULL,
  `deskripsi` text NOT NULL,
  `kategori` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita3`
--

INSERT INTO `berita3` (`id_berita`, `judul_berita`, `isi_berita`, `gambar_berita`, `deskripsi`, `kategori`) VALUES
(7, 'Jokowi akan Dilaporkan ke Polisi karena \"Ujaran Poltik Sontoloyo\"', 'Presiden Jokowi akan dilaporkan ke polisi oleh Waketum Gerindra karena ujaran \"politik sontoloyo\". Wakil Ketua Umum (Waketum) Partai Gerindra, Ferry Juliantono bakal melaporkan Presiden Joko Widodo (Jokowi) ke polisi lantaran mengucapkan politikus sontoloyo. \"Karena sudah ada yurisprudensinya, orang kayak Ahmad Dhani dijadikan tersangka,\" kata Ferry, di Kompleks DPR, Senayan, Jakarta Pusat, Senin (29/10/2018). Menurut Ferry, pernyataan politikus sontoloyo Jokowi bernilai sama dengan pernyataan tolol yang disampaikan Ahmad Dhani dalam vlognya beberapa waktu lalu. Sehingga, ia berkeyakinan laporannya bisa diproses kepolisian. Selain itu, Ferry juga bakal melaporkan Menteri Kelautan dan Perikanan, Susi Pudjiastuti yang menyebut goblok pada ide Sandiaga Uno yang bakal mempermudah izin nelayan menggunakan cantrang. \"Kata-kata itu, dua orang itu layak untuk diadukan,\" kata Ferry. Ucapan \"politikus sontoloyo\" dari Jokowi terlontar pada Selasa( 23/10/2018) lalu saat menyerahkan 5000 sertifikat tanah di Kebayoran Lama, Jakarta Selatan. Selain mengklarifikasi soal polemik dana kelurahan yang akan dikucurkannya, Jokowi menyayangkan sikap para politikus yang menarik program tersebut ke arah politis. Menurutnya, itu hanya akal-akalan politikus saja untuk memengaruhi masyarakat. Padahal, program tersebut dimaksudkannya untuk membantu masyarakat. \"Hati-hati, banyak politikus yang baik-baik, tapi juga banyak politikus yang sontoloyo!\" kata Jokowi.', 'jokowi.jpg', 'Presiden Jokowi akan dilaporkan ke polisi oleh Waketum Gerindra karena ujaran \"politik sontoloyo\". Wakil Ketua Umum (Waketum) Partai Gerindra, Ferry Juliantono bakal melaporkan Presiden Joko Widodo (Jokowi) ke polisi lantaran mengucapkan politikus sontoloyo. ', 'Terbaru'),
(8, 'Kemenlu Protes ke Saudi Soal Eksekusi Mati TKI Tanpa Pemberitahuan', 'Pemerintah Indonesia menyatakan kekecewaanya terhadap sikap Pemerintah Arab Saudi yang mengeksekusi Tuti tanpa pemberitahuan terlebih dahulu. Seorang TKI kembali dieksekusi mati oleh pengadilan Arab Saudi tanpa memberikan pemberitahuan terlebih dahulu kepada pemerintah Indonesia. TKI ini bernama Tuti Tursilawati yang telah dieksekusi pada Senin, 29 Oktober 2018 kemarin. \r\n\r\nDirektur Perlindungan WNI dan Badan Hukum Indonesia (PWNI-BHI) Kementerian Luar Negeri (Kemenlu), Lalu Muhammad Iqbal mengatakan, pemerintah dalam hal ini Menteri Luar Negeri RI sangat kecewa dengan sikap Pemerintah Arab Saudi yang mengeksekusi Tuti tanpa ada notifikasi resmi kekonsuleran dari otoritas Arab Saudi kepada KBRI Riyadh atau KJRI Jeddah. \r\n\r\n\"Menlu RI telah menelepon Menlu Arab Saudi pada 29 Oktober menyampaikan protesnya,\" ujar Iqbal di Kantor Kementerian Luar Negeri Jakarta pada Selasa (30/10/2018).\r\n\r\nDuta Besar Arab Saudi kemudian dipanggil ke Bali pada tanggal 30 Oktober 2018 agar Menlu RI dapat menyampaikan protes secara langsung pada saat sedang menjadi tuan rumah Our Ocean Conference (OOC). \r\n\r\nSementara itu, ucapan beserta dana bela sungkawa dikatakannya telah disampaikan pihak Kemenlu kepada keluarga Tuti di Majalengka. \r\n\r\n\"Pada pukul 12 malam saya sendiri tiba di Majalengka untuk bertemu langsung ibu dari Tuti. SOP-nya orang pertama yang harus tahu kematian ini adalah keluarga, yaitu ibunya yang selama ini berjuang bersama kami memperjuangkan untuk meringankan hukuman Tuti sejak 2011,\" ungkapnya. \r\n\r\n\"Saat bertemu langsung dengan ibu Tuti yang ada juga perangkat Pemda Majalengka, ibu Tuti mengatakan ikhlas menerima kenyataan Tuti telah dieksekusi,\" ujarnya. \r\n\r\nTuti Tursilawati, WNI terpidana kasus pembunuhan berencana terhadap ayah majikannya warga negara Arab Saudi, atas nama Suud Mulhak Al Utaibi pada 2010. Tuti menjalankan pengadilan Thaif. \r\n\r\nKasus Tuti telah inkracht atau ditetapkan pengadilan pada 2011. Namun, pemerintah telah melakukan upaya untuk meringankan hukuman yang bersangkutan.\r\n\r\n\"Upaya dilakukan pemerintah antara lain pendampingan kekonsuleran sejak 2011-2018, 3 kali penunjukan pengacara, 3 kali permohonan banding, 2 kali permohonan peninjauan kembali, 2 kali mengirimkan surat presiden kepada raja saudi, serta berbagai upaya non-litigasi,\" sebutnya. \r\n\r\nPemerintah melalui Kementerian Luar Negeri juga memberikan fasilitas untuk keluarga Tuti mengunjungi Tuti di Thaif, yaitu pada 2014, 2015, dan terakhir pada 4 April 2018. \r\n\r\n\"Pada 19 Oktober pertemuan terakhir Tuti dengan ibunya melalu video call. Tuti menyampaikan kondisinya sehat dan tidak ada indikasi akan ada eksekusi,\" ujarnya. \r\n', 'arab.jpg', 'Pemerintah Indonesia menyatakan kekecewaanya terhadap sikap Pemerintah Arab Saudi yang mengeksekusi Tuti tanpa pemberitahuan terlebih dahulu.', 'Terbaru'),
(9, 'Presiden Jokowi Sesalkan Eksekusi Mati Tuti Tanpa Notifikasi', 'â€œMemang itu patut kita sesalkan tanpa adanya notifikasi. Yang dulu juga sama,â€ kata Jokowi.\r\nPresiden Joko Widodo menyesalkan sikap pemerintah Arab Saudi yang menghukum mati seorang TKI bernama Tuti Tursilawati. Jokowi membenarkan bahwa hukuman mati tersebut dijatuhkan tanpa ada pemberitahuan sebelumnya kepada pemerintah Indonesia.\r\n\r\nâ€œMemang itu patut kita sesalkan tanpa adanya notifikasi. Yang dulu juga sama,â€ kata Jokowi saat ditemui di Jakarta International Expo pada Rabu (31/10/2018) pagi.\r\n\r\nJokowi mengklaim dirinya telah berulang kali menyinggung tentang vonis hukuman mati bagi TKI kepada pemerintah Arab Saudi. Ia menyebutkan dirinya sempat menyampaikan hal tersebut kepada Raja Salman selaku kepala negara dan Menteri Luar Negeri Arab Saudi Adel al-Jubeir.\r\n\r\nKendati demikian, Jokowi mengindikasikan bahwa pemerintah tidak bisa berbuat banyak selain lobi-lobi politik karena terkendala masalah kedaulatan. Ia menyebutkan hukuman mati bagi TKI itu merupakan otoritas hukum dari Kerajaan Arab Saudi.\r\n\r\nâ€œSaya sudah berkali-kali [menyampaikan] setiap bertemu, baik dengan Raja Salman maupun dengan Menteri Luar Negeri [Arab Saudi]. Saya ulang-ulang terus, jangan dipikir kita ini tidak melakukan upaya-upaya politik,â€ jelas Jokowi.\r\n\r\nSelain dirinya, Jokowi mengatakan bahwa Menteri Luar Negeri Retno Marsudi dan Kedutaan Besar Indonesia di Arab Saudi pun telah mengupayakan agar hukuman mati terhadap Tuti bisa dicegah.\r\n', 'jkw.jpg', 'â€œMemang itu patut kita sesalkan tanpa adanya notifikasi. Yang dulu juga sama,â€ kata Jokowi.\r\nPresiden Joko Widodo menyesalkan sikap pemerintah Arab Saudi yang menghukum mati seorang TKI bernama Tuti Tursilawati. Jokowi membenarkan bahwa hukuman mati tersebut dijatuhkan tanpa ada pemberitahuan sebelumnya kepada pemerintah Indonesia.\r\n', 'Lainnya'),
(10, ' Eksekusi Mati Tuti dan Sikap Muka Dua Jokowi Soal Hukuman Mati', 'Pemerintahan Jokowi dianggap bermuka dua. Satu sisi memprotes hukuman mati terhadap Tuti di Arab Saudi, namun di sisi lain menerapkan hukuman mati di negara sendiri.\r\nPresiden Joko Widodo (Jokowi) menyesalkan eksekusi mati yang dilakukan Pengadilan Arab Saudi kepada Tenaga Kerja Indonesia (TKI) bernama Tuti Tursilawati, Senin (29/10/2018). Sebab menurutnya hukuman mati itu dijatuhkan tanpa ada pemberitahuan kepada pemerintah Indonesia.\r\n\r\nâ€œMemang itu patut kita sesalkan tanpa adanya notifikasi. Yang dulu juga sama,â€ kata Jokowi saat ditemui di Jakarta International Expo pada Rabu (31/10/2018) pagi.\r\n\r\nJokowi mengklaim dirinya telah berulang kali menyinggung tentang vonis hukuman mati bagi TKI kepada pemerintah Arab Saudi. Ia menyebutkan dirinya telah melakukan berbagai lobi politik kepada Raja Salman selaku kepala negara dan Menteri Luar Negeri Arab Saudi Adel al-Jubeir.\r\n\r\nâ€œSaya sudah berkali-kali [menyampaikan] setiap bertemu, baik dengan Raja Salman maupun dengan Menteri Luar Negeri [Arab Saudi]. Saya ulang-ulang terus, jangan dipikir kita ini tidak melakukan upaya-upaya politik,â€ jelas Jokowi.\r\n\r\nNamun respons Jokowi soal eksekusi mati terhadap Tuti justru menuai kritik. Manager kampanye Amnesty International Indonesia Puri Kencana Putri menilai pernyataan Jokowi hanya sebatas retorika karena tidak berbanding lurus dengan kebijakan hukum yang dijalankan pemerintah.\r\n\r\n\"Retorika kecam Saudi menjadi melelahkan karena sepertinya kita tidak memegang prinsip teguh bahwa hak hidup sesuai standar universal,\" kata Puri kepada reporter Tirto, Rabu (31/10/2018).\r\n\r\nSejauh ini, sistem hukum pidana di Indonesia masih menjadikan hukuman mati sebagai ganjaran terberat yang bisa diberikan kepada seseorang terdakwa. Eksekusi mati juga masih dilakukan pemerintah setidaknya hingga 2016 lalu.\r\n\r\nVonis hukuman mati termaktub dalam Kitab Undang-Undang Hukum Pidana (KUHP). Pasal 10 KUHP mengatur jenis-jenis sanksi yang bisa diberikan kepada seseorang, termasuk hukuman mati. Kemudian sejumlah aturan juga menyebut adanya ancaman hukuman mati, salah satunya yakni UU Nomor 35/2009 tentang Narkotika.\r\n\r\nSelama Jokowi menjadi presiden sudah ada 18 terpidana mati yang dieksekusi. Mereka yang dieksekusi mati pada 2015-2016 itu adalah para terpidana kasus narkoba. Banyak dari mereka yang berkewarganegaraan asing seperti Nigeria, Brazil, Vietnam, dan Australia.\r\n\r\n', 'jkw1.jpg', 'Pemerintahan Jokowi dianggap bermuka dua. Satu sisi memprotes hukuman mati terhadap Tuti di Arab Saudi, namun di sisi lain menerapkan hukuman mati di negara sendiri.\r\nPresiden Joko Widodo (Jokowi) menyesalkan eksekusi mati yang dilakukan Pengadilan Arab Saudi kepada Tenaga Kerja Indonesia (TKI) bernama Tuti Tursilawati, Senin (29/10/2018). Sebab menurutnya hukuman mati itu dijatuhkan tanpa ada pemberitahuan kepada pemerintah Indonesia.\r\n', 'Lama');

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `id` int(15) NOT NULL,
  `nis` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(40) NOT NULL,
  `kelas` varchar(3) NOT NULL,
  `tempat` varchar(15) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `hobby` varchar(100) NOT NULL,
  `ekstra` varchar(100) NOT NULL,
  `foto` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`id`, `nis`, `nama`, `alamat`, `email`, `kelas`, `tempat`, `tanggal_lahir`, `jenis_kelamin`, `hobby`, `ekstra`, `foto`) VALUES
(39, '12333', 'mama', 'amamam', 'a@gmail.com', 'x', 'malang', '0000-00-00', 'P', 'Membaca', 'Basket', 'data/a.png'),
(40, '1222', 'asa', 'malang', 'ab@gmail.com', 'x', 'malang', '0000-00-00', 'L', 'Membaca', 'Pramuka', 'data/_Bearded_Man-17-512.png'),
(43, '1223', 'maal', 'smms', 'b@gmail.com', 'x', 'masuk', '0000-00-00', 'P', 'Membaca', 'Basket', 'data/21_MuhammadAzharul_X_RPL_A.jpg'),
(45, '123123', 'bfofo', 'Malang', 'ac@gmail.com', 'X', 'Malang', '0000-00-00', 'L', 'Membaca, Olahraga', 'Basket', 'data/42.jpg'),
(46, '29193', 'momo', 'malang', 'adi@gmail.com', 'X', 'Malang', '0000-00-00', 'L', 'Membaca', 'Pramuka', 'data/muffin.jpg'),
(47, '12092', 'sasa', 'sasa', 'das@gmail.com', 'xii', 'asaas', '0000-00-00', 'L', 'Membaca, Olahraga', 'Pramuka, Basket', 'data/42.jpg'),
(49, '123213', 'Adi', 'Jl.Melati', 'adi@gmail.com', 'x', 'Malang', '2018-10-31', 'L', 'Membaca, Olahraga', 'Basket', 'data/a.png'),
(50, '21312', 'mimi', 'malang', 'mimi@gmail.com', 'x', 'Malang', '2018-10-31', 'L', 'Membaca, Olahraga', 'Volly', 'data/42.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `huawei`
--

CREATE TABLE `huawei` (
  `id` int(11) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `harga_produk` int(50) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `deskripsi_produk` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `huawei`
--

INSERT INTO `huawei` (`id`, `nama_produk`, `harga_produk`, `foto`, `deskripsi_produk`) VALUES
(1, 'iphone X', 10000000, 'a10.jpeg', 'op'),
(2, 's5', 600000, 'a10.jpeg', 'weqeq'),
(3, 'asus', 3400000, 'a6.jpg', 'ddddd'),
(4, 'name', 210000, 'a8.jpeg', 'ewewewewe'),
(5, 's2', 1120000, 'a3.jpg', 'ewrqwqdqqdq'),
(6, 'huawei', 90909090, 'a7.jpg', 'bogle');

-- --------------------------------------------------------

--
-- Table structure for table `iphone`
--

CREATE TABLE `iphone` (
  `id` int(11) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `harga_produk` int(150) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `deskripsi_produk` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `komen`
--

CREATE TABLE `komen` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `komentar` varchar(2250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komen`
--

INSERT INTO `komen` (`id`, `nama`, `email`, `komentar`) VALUES
(1, 'o', 'danarahnaf@xmail.com', 'kjbkasbdjhvb'),
(2, 'wsda', 'adsad@asdl.ac', 'sdasdsad'),
(3, 'savc', 'hdsf@sff.vds', 'polaikd'),
(4, 'q', 'weqeq@wqs.ew', 'wqeds'),
(6, 'sdasad', 'adsad@asdl.acd', 'vrvdvg');

-- --------------------------------------------------------

--
-- Table structure for table `komentar1`
--

CREATE TABLE `komentar1` (
  `nama` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `komentar` text NOT NULL,
  `id_komentar` int(20) NOT NULL,
  `id_berita` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lg`
--

CREATE TABLE `lg` (
  `id` int(11) NOT NULL,
  `nama_produk` int(50) NOT NULL,
  `harga_produk` int(50) NOT NULL,
  `foto` int(50) NOT NULL,
  `deskripsi_produk` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lg`
--

INSERT INTO `lg` (`id`, `nama_produk`, `harga_produk`, `foto`, `deskripsi_produk`) VALUES
(2, 0, 600000, 0, 0),
(3, 0, 3400000, 0, 0),
(4, 0, 210000, 0, 0),
(5, 0, 1120000, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `oppo`
--

CREATE TABLE `oppo` (
  `id` int(11) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `harga_produk` int(150) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `deskripsi_produk` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `oppo`
--

INSERT INTO `oppo` (`id`, `nama_produk`, `harga_produk`, `foto`, `deskripsi_produk`) VALUES
(2, 'iphone X', 10000000, 'a10.jpeg', 'op'),
(3, 's5', 600000, 'a10.jpeg', 'weqeq'),
(4, 'asus', 3400000, 'a6.jpg', 'ddddd'),
(5, 'name', 210000, 'a8.jpeg', 'ewewewewe'),
(6, 's2', 1120000, 'a3.jpg', 'ewrqwqdqqdq');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `nama` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telpon` int(15) NOT NULL,
  `barang` varchar(550) NOT NULL,
  `total_harga` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `pname` varchar(225) NOT NULL,
  `image` varchar(225) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `pname`, `image`, `price`) VALUES
(1, 'Zenfone Go', 'a2.jpg', 100),
(2, 'HP ASUS', 'a2.jpg', 150),
(4, 'HP xiaomi', 'a2.jpg', 150),
(5, 'HP samsung', 'a2.jpg', 200);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `harga_produk` int(16) NOT NULL,
  `foto` varchar(150) NOT NULL,
  `deskripsi_produk` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama_produk`, `harga_produk`, `foto`, `deskripsi_produk`) VALUES
(9, 'setrika', 89000, 'a4.jpg', '						HP jelek					'),
(18, 'iphone X', 10000000, 'a10.jpeg', '						op		bagus gan\r\n'),
(21, 'sdad', 2000000, 'm11.jpg', 'BUBUBUUBU');

-- --------------------------------------------------------

--
-- Table structure for table `samsungg`
--

CREATE TABLE `samsungg` (
  `id` int(11) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `harga_produk` int(150) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `deskripsi_produk` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `samsungg`
--

INSERT INTO `samsungg` (`id`, `nama_produk`, `harga_produk`, `foto`, `deskripsi_produk`) VALUES
(1, 'samsung j2 prime', 1120000, 'm1.jpeg', 'ram 1.5 gb\r\ncamera 8/2 mp'),
(2, 'samsung s6', 6000000, 'a8.jpeg', 'apikk'),
(8, 's2', 1120000, 'a3.jpg', 'ewrqwqdqqdq');

-- --------------------------------------------------------

--
-- Table structure for table `sony`
--

CREATE TABLE `sony` (
  `id` int(11) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `harga_produk` int(50) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `deskripsi_produk` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sony`
--

INSERT INTO `sony` (`id`, `nama_produk`, `harga_produk`, `foto`, `deskripsi_produk`) VALUES
(7, 'xperia', 2000000, '', 'wqei');

-- --------------------------------------------------------

--
-- Table structure for table `tb_komentar`
--

CREATE TABLE `tb_komentar` (
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `komentar` text NOT NULL,
  `id_komentar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_komentar`
--

INSERT INTO `tb_komentar` (`nama`, `email`, `komentar`, `id_komentar`) VALUES
('Ardi', 'halo@gmail.com', 'Halo', 1),
('Ardi', 'halo@gmail.com', 'Aku ardi', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `username` varchar(40) NOT NULL,
  `email` varchar(42) NOT NULL,
  `password` varchar(32) NOT NULL,
  `level` enum('user','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `level` enum('user','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`username`, `password`, `email`, `no_hp`, `alamat`, `level`) VALUES
('admin', 'd65c81cf756151229c67d150eac28fd6', 'admin@gmail.com', '812222222', 'jl. tanimbar 22', 'admin'),
('danar123', 'eaa2f2d83bb54bd103126300a7f30366', 'LDSLFNSDL@LSDNF.VDS', '9090909', 'fvbjk', 'admin'),
('dandan', 'aebccbd61950e40a41d431e9d1b51925', 'alala@gmail.com', '22000101010', 'jl.Jalan', 'user'),
('dico', 'b365ecba2537ce6112786337dc9502c0', 'dico', '9090909', 'dico', 'user'),
('PA', 'b0adf8e264617958b4fe28b1cc3fc294', 'po@po.po', '909090', 'PAPEPO', 'user'),
('qwqw', '3f2464a60eea2ea2cc520c61c7403a60', 'qwqw@qwqw.qwqw', '2147483647', 'dico', 'user'),
('s', '89ee0b784b5304f06828898652b56159', 's@s.s', '123123123', 'dico', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `trending1`
--

CREATE TABLE `trending1` (
  `id_berita` int(40) NOT NULL,
  `judul_berita` varchar(50) NOT NULL,
  `isi_berita` text NOT NULL,
  `gambar_berita` varchar(150) NOT NULL,
  `deskripsi` text NOT NULL,
  `kategori` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trending1`
--

INSERT INTO `trending1` (`id_berita`, `judul_berita`, `isi_berita`, `gambar_berita`, `deskripsi`, `kategori`) VALUES
(2, 'dakmakdk', '', 'â€ª+62 823-3594-8499â€¬ 20180506_164456.jpg', 'ksnakakkkkkkk\r\nassaks k ask', ''),
(3, 'Alalalalal', '', 'icon ig.jpg', 'yoyoyoyo', ''),
(4, '', '', '', '', ''),
(5, '', '', 'a.png', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id_berita` int(20) NOT NULL,
  `judul_berita` varchar(40) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar_berita` varchar(150) NOT NULL,
  `isi_berita` text NOT NULL,
  `nama` varchar(40) NOT NULL,
  `kategori` varchar(40) NOT NULL,
  `tgl` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id_berita`, `judul_berita`, `deskripsi`, `gambar_berita`, `isi_berita`, `nama`, `kategori`, `tgl`) VALUES
(1, 'dududu', 'sdad', 'WIN_20180718_13_17_52_Pro.jpg', 'dududu', 'Ardi', 'Olahraga', ''),
(2, 'dudu', '', 'WIN_20180720_07_45_27_Pro.jpg', 'dsa', 'Ardi', 'Politik', ''),
(3, 'adass', '', 'lalal.png', 'sas', 'ade', 'Teknologi', ''),
(4, 'lalal', '', 'a.png', 'aslsl', 'ade', 'Olahraga', ''),
(5, 'asdd', '', 'a.png', 'asd', 'ardi', 'Olahraga', '  Wednesday,31-10-18');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_berita` int(20) NOT NULL,
  `judul_berita` varchar(40) NOT NULL,
  `isi_berita` text NOT NULL,
  `gambar_berita` varchar(150) NOT NULL,
  `deskripsi` text NOT NULL,
  `kategori` varchar(40) NOT NULL,
  `nama` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `username` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'pip', '1@mail.moe', 'c20ad4d76fe97759aa27a0c99bff6710'),
(4, 'lol', '1@mail.m', 'c4ca4238a0b923820dcc509a6f75849b'),
(5, 'mimi', 'mimi@mail.com', 'c20ad4d76fe97759aa27a0c99bff6710'),
(6, 'lolo', 'lolo@gmail.com', 'd6581d542c7eaf801284f084478b5fcc'),
(7, 'd', 'danarahnaf2@gmail.com', 'd5c4496f47e8f9714df12af4367019ac'),
(8, 'w', 'w2@mail.col', 'c4ca4238a0b923820dcc509a6f75849b'),
(9, 'danar', 'fewef@fds.ves', '5ca2aa845c8cd5ace6b016841f100d82'),
(10, 'po', 'po@po.po', 'f6122c971aeb03476bf01623b09ddfd4');

-- --------------------------------------------------------

--
-- Table structure for table `vivo`
--

CREATE TABLE `vivo` (
  `id` int(11) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `harga_produk` int(150) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `deskripsi_produk` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vivo`
--

INSERT INTO `vivo` (`id`, `nama_produk`, `harga_produk`, `foto`, `deskripsi_produk`) VALUES
(2, 'iphone X', 10000000, 'a10.jpeg', 'op'),
(3, 's5', 600000, 'a10.jpeg', 'weqeq'),
(4, 'asus', 3400000, 'a6.jpg', 'ddddd'),
(5, 'name', 210000, 'a8.jpeg', 'ewewewewe'),
(6, 's2', 1120000, 'a3.jpg', 'ewrqwqdqqdq'),
(7, 'vivo v9', 3700000, 'a10.jpeg', 'kipa lor'),
(8, 'vivo v7', 3700000, 'a10.jpeg', 'kipa lor');

-- --------------------------------------------------------

--
-- Table structure for table `xiaomi`
--

CREATE TABLE `xiaomi` (
  `id` int(11) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `harga_produk` int(50) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `deskripsi_produk` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `xiaomi`
--

INSERT INTO `xiaomi` (`id`, `nama_produk`, `harga_produk`, `foto`, `deskripsi_produk`) VALUES
(1, 'iphone X', 10000000, 'a10.jpeg', 'op'),
(2, 's5', 600000, 'a10.jpeg', 'weqeq'),
(3, 'asus', 3400000, 'a6.jpg', 'ddddd'),
(4, 'name', 210000, 'a8.jpeg', 'ewewewewe'),
(5, 's2', 1120000, 'a3.jpg', 'ewrqwqdqqdq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `berita1`
--
ALTER TABLE `berita1`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `berita2`
--
ALTER TABLE `berita2`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `berita3`
--
ALTER TABLE `berita3`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `huawei`
--
ALTER TABLE `huawei`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iphone`
--
ALTER TABLE `iphone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komen`
--
ALTER TABLE `komen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar1`
--
ALTER TABLE `komentar1`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `lg`
--
ALTER TABLE `lg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oppo`
--
ALTER TABLE `oppo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `samsungg`
--
ALTER TABLE `samsungg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sony`
--
ALTER TABLE `sony`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_komentar`
--
ALTER TABLE `tb_komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `trending1`
--
ALTER TABLE `trending1`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vivo`
--
ALTER TABLE `vivo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `xiaomi`
--
ALTER TABLE `xiaomi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `berita1`
--
ALTER TABLE `berita1`
  MODIFY `id_berita` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `berita2`
--
ALTER TABLE `berita2`
  MODIFY `id_berita` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `berita3`
--
ALTER TABLE `berita3`
  MODIFY `id_berita` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `huawei`
--
ALTER TABLE `huawei`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `iphone`
--
ALTER TABLE `iphone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `komen`
--
ALTER TABLE `komen`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `komentar1`
--
ALTER TABLE `komentar1`
  MODIFY `id_komentar` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lg`
--
ALTER TABLE `lg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `oppo`
--
ALTER TABLE `oppo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `samsungg`
--
ALTER TABLE `samsungg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sony`
--
ALTER TABLE `sony`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_komentar`
--
ALTER TABLE `tb_komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `trending1`
--
ALTER TABLE `trending1`
  MODIFY `id_berita` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id_berita` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_berita` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `vivo`
--
ALTER TABLE `vivo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `xiaomi`
--
ALTER TABLE `xiaomi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
