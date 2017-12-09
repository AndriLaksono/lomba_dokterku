-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2017 at 02:09 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbdokterku`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `email`, `username`, `password`, `nama`) VALUES
(1, 'thomas@gmail.com', 'andrilaksono', 'eb0a191797624dd3a48fa681d3061212', 'Andri Laksono');

-- --------------------------------------------------------

--
-- Table structure for table `diagnosa`
--

CREATE TABLE `diagnosa` (
  `id_diagnosa` int(11) NOT NULL,
  `penyakit` varchar(50) NOT NULL,
  `ket` text NOT NULL,
  `id_spesialis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diagnosa`
--

INSERT INTO `diagnosa` (`id_diagnosa`, `penyakit`, `ket`, `id_spesialis`) VALUES
(5, 'Flu', 'Flu, atau influenza, adalah infeksi virus pada pernafasan. Influenza datang secara tiba-tiba, berlangsung selama 7 sampai 10 hari, dan biasanya hilang begitu saja. Kebanyakan orang sembuh sepenuhnya. Namun, bagi orang tua, balita, dan orang dengan imunitas yang lemah, flu bisa memicu kondisi yang lebih parah dan bahkan mengakibatkan kematian akibat komplikasi. Tipe lain dari flu adalah flu babi (HIN1), flu burung (H5N1, H7N9), dan lain-lain.', 4),
(6, 'Anemia', 'Anemia adalah suatu kondisi tubuh yang terjadi ketika sel-sel darah merah (eritrosit) dan/atau Hemoglobin (Hb) yang sehat dalam darah berada dibawah nilai normal (kurang darah).\r\nSumber: Penyakit Anemia – Pengertian, Penyebab, dan Gejala - Mediskus', 1),
(7, 'cacar air', 'Cacar sangat menular terhadap orang-orang yang belum pernah menderita cacar atau belum divaksinasi cacar.', 5),
(9, 'Vertigo', 'Vertigo merupakan suatu gejala dengan sensasi diri sendiri atau sekeliling terasa berputar yang terjadi secara tiba-tiba. Ada kondisi vertigo yang ringan serta tidak terlalu terasa dan ada yang parah sehingga menghambat rutinitas.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nohp` varchar(12) NOT NULL,
  `id_spesialis` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `nama`, `username`, `password`, `alamat`, `nohp`, `id_spesialis`, `status`) VALUES
(1, 'Hasirun', 'hasdokter', 'a9e7f6f825559124eba3a0b3fe9f790b', 'dsa', '321', 5, 1),
(2, 'Andri thomas', 'thomas', 'ef6e65efc188e7dffd7335b646a85a21', 'Purwokerto jawa tengah', '087848212221', 1, 1),
(3, 'Hanif', 'handokter', 'f1ee7fc080a83c729c060eced7e20d94', 'Purwokerto', '123456', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `id_gejala` int(11) NOT NULL,
  `gejala` varchar(100) NOT NULL,
  `ket` text NOT NULL,
  `id_spesialis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`id_gejala`, `gejala`, `ket`, `id_spesialis`) VALUES
(6, 'panas tinggi (mencapai 40° C)', 'Suhu badan mencapai 40° C', 4),
(7, 'panas dingin', 'Badan terasa dingin walaupun jika disentuh panas', 4),
(8, 'nyeri otot', 'otot terasa sakit dan nyeri', 4),
(9, 'merasa sangat lemah ', 'badan terasa lelah setiap saat', 4),
(10, 'sakit kepala', 'kepala akan terasa sakit', 4),
(11, 'sakit mata', 'Mata akan terasa sakit', 4),
(12, 'batuk', 'mengalami batuk', 4),
(13, 'kelelahan', 'kelelahan', 4),
(14, 'Detak jantung bertambah cepat', 'Detak jantung bertambah cepat', 1),
(15, 'Kulit yang mudah memar', 'kulit yang mudah memar', 1),
(16, 'Pendarahan yang tidak terkendali setelah tergores atau cedera', 'pendarahan yang tidak terkendali akibat luka ', 1),
(17, 'Peningkatan ketebalan darah', 'Peningkatan ketebalan darah', 1),
(18, 'Bintik merah menyebar ke salah satu mata atau kedua mata Anda', 'Bintik merah menyebar ke salah satu mata atau kedua mata Anda', 5),
(19, 'Bintik menjadi lebih sensitif dan panas. Ini dapat menjadi tanda infeksi', 'Bintik menjadi lebih sensitif dan panas. Ini dapat menjadi tanda infeksi\r\n', 5),
(20, 'Riwayat keluarga memiliki sistem imun yang rendah atau memiliki anak berusia kurang dari 6 bulan', 'Riwayat keluarga memiliki sistem imun yang rendah atau memiliki anak berusia kurang dari 6 bulan\r\n', 5),
(21, 'Kehilangan keseimbangan', 'Kehilangan keseimbangan', 1),
(22, 'mual', 'merasa mual', 1),
(23, 'muntah', 'muntah akibat merasa mual', 1),
(24, 'nistagmus', 'gerakan mata yang tidak normal', 1);

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id_log` int(11) NOT NULL,
  `id_diagnosa` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nohp` varchar(12) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama`, `alamat`, `nohp`, `username`, `password`, `email`, `status`) VALUES
(1, 'Hasirun', 'Purbalingga', '081234567', 'hasirun', 'edd98255f0569275d59decf388d15046', 'has@irun.com', 1),
(3, 'asd', 'asd', '123', 'asd', '5f039b4ef0058a1d652f13d612375a5b', 'asd', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pengobatan`
--

CREATE TABLE `pengobatan` (
  `id_pengobatan` int(11) NOT NULL,
  `id_diagnosa` int(11) NOT NULL,
  `cara_pengobatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengobatan`
--

INSERT INTO `pengobatan` (`id_pengobatan`, `id_diagnosa`, `cara_pengobatan`) VALUES
(9, 5, 'Pengobatan yang paling baik adalah istirahat. '),
(10, 5, 'Pengobatan yang paling baik adalah istirahat. Flu tidak bisa  disembuhkan dengan antibiotik, tetapi pengobatan lainnya bisa mengendalikan gejalanya, dan obat-obatan lain (antivirus) bisa memperpendek durasinya. Untuk mengatasi ketidaknyamanan, obat non-aspirin, seperti acetaminophen dan ibuprofen, sirup batuk, dan dekongestan bisa digunakan. Jangan memberikan aspirin kepada anak-anak berusia kurang dari 16 tahun karena akan sangat meningkatkan risiko terkena Reye’s Syndrome.  Menghirup uap hangat dapat melegakan hidung yang tersumbat dan membantu mengencerkan sekret hidung (ingus). Tuangkan air panas ke dalam baskom lalu hirup uap hangat yang dihasilkan oleh air panas tersebut. Minyak esensial yang beraroma dapat ditambahkan. Anda dapat menggunakan selimut untuk membuat ruang tertutup bagi kepala Anda dan baskom agar uap air dapat terfokus ke hidung Anda. Tundukkan kepala Anda agar dapat mengarahkan uap air dengan lebih baik. Perbanyak minum air putih untuk mengencerkan sekret hidung (ingus)'),
(11, 6, 'Daun Katuk : Obat herbal ini merupakan salah satu jenis sayur yang bisa dijadikan lalapan. Jika digunakan secara normal, daun katuk cukup ampuh untuk mengatasi anemia. Kandungan didalamnya terdapat senyawa berupa Protein, Vitamin K, Pro-Vitamin A, Serat Kasar, Kalsium, Zat Besi, Kalium, Magnesium, Fosfor, Vitamin B, Vitamin C. Dan dari kandungan tersebut juga terdapat zat besi yang baik untuk melancarkan sirkulasi darah dan tentunya pencegahan serta mengobati anemia.'),
(12, 6, 'Bawang Putih : Mungkin sobat tidak sadar bahwa bumbu dapur yang satu ini juga bisa mengobati kurang darah. Padahal dengan hanya mengguakannya sebagai rempah saja '),
(13, 6, 'Bunga Asoka : Kandungan senyawa kimia pada bunga ini diantaranya : Hematoksilin, Zat Organik, Tanin, Z at Besi, saponin, , Flavonoid, dan catachin. Fungsi dari bunga ini sangat membantu dalam mengontrol tekanan darah dan juga membantu dalam pembentukan sel darah merah yang rusak dan menggantinya dengan yang baru.'),
(14, 7, ' Cara Minghilangkan Cacar Air Dengan Mengkudu'),
(15, 7, 'Kacang hijau bisa membuat cacar air menjadi cepat kering hingga sembuh. Sebab kacang hijau memiliki kandungan gizi yang sangat baik untuk menghilangkan bekas cacar air. '),
(16, 7, 'Daun jarak merupakan bahan alami yang mampu mengobati cacar air. Penyajiannya dilakukan dengan cara merebus 5-7 lembar daun jarak selama 10 hingga 15 menit. Setelah itu campurkan dengan air agar lebih hangat dan gunakan untuk mandi. Hal ini dilakukan sebanyak dua kali sehari hingga cacar air sembuh.'),
(20, 9, 'Menghindari gerakan secara tiba-tiba agar tidak terjatuh'),
(21, 9, 'Segera duduk jika vertigo menyerang'),
(22, 9, 'Gunakan beberapa bantal agar posisi kepala saat tidur menjadi lebih tinggi'),
(23, 9, 'Gerakkan kepala secara perlahan-lahan'),
(24, 9, 'Hindari gerakan kepala mendongak, berjongkok, atau tubuh membungkuk'),
(25, 9, 'Kenalilah pemicu vertigo Anda dan lakukan latihan yang dapat memicu vertigo Anda. Otak Anda akan menjadi terbiasa dan malah menurunkan frekuensi kambuhnya vertigo. Lakukan latihan ini dengan meminta bantuan orang lain'),
(26, 9, 'Bagi Anda yang juga menderita penyakit Meniere, batasi konsumsi garam dalam menu sehari-hari');

-- --------------------------------------------------------

--
-- Table structure for table `relasi`
--

CREATE TABLE `relasi` (
  `id_diagnosa` int(11) NOT NULL,
  `id_gejala` int(11) NOT NULL,
  `id_spesialis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `relasi`
--

INSERT INTO `relasi` (`id_diagnosa`, `id_gejala`, `id_spesialis`) VALUES
(6, 14, 1),
(6, 15, 1),
(6, 16, 1),
(6, 17, 1),
(7, 18, 5),
(7, 19, 5),
(7, 20, 5),
(5, 6, 4),
(5, 7, 4),
(5, 8, 4),
(5, 9, 4),
(9, 21, 1),
(9, 22, 1),
(9, 23, 1),
(9, 24, 1);

-- --------------------------------------------------------

--
-- Table structure for table `spesialis`
--

CREATE TABLE `spesialis` (
  `id_spesialis` int(11) NOT NULL,
  `spesialis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spesialis`
--

INSERT INTO `spesialis` (`id_spesialis`, `spesialis`) VALUES
(1, 'Penyakit Dalam'),
(2, 'Anak'),
(3, 'Gigi'),
(4, 'THT'),
(5, 'Kulit'),
(6, 'Mata'),
(7, 'Syaraf'),
(8, 'Gizi');

-- --------------------------------------------------------

--
-- Table structure for table `tmp_no`
--

CREATE TABLE `tmp_no` (
  `ip` text NOT NULL,
  `id_diagnosa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tmp_no`
--

INSERT INTO `tmp_no` (`ip`, `id_diagnosa`) VALUES
('::1', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `diagnosa`
--
ALTER TABLE `diagnosa`
  ADD PRIMARY KEY (`id_diagnosa`),
  ADD KEY `id_spesialis` (`id_spesialis`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`),
  ADD KEY `id_spesialis` (`id_spesialis`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id_gejala`),
  ADD UNIQUE KEY `id_gejala` (`id_gejala`),
  ADD KEY `id_spesialis` (`id_spesialis`),
  ADD KEY `id_spesialis_2` (`id_spesialis`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id_log`),
  ADD KEY `id_diagnosa` (`id_diagnosa`),
  ADD KEY `id_pasien` (`id_pasien`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `pengobatan`
--
ALTER TABLE `pengobatan`
  ADD PRIMARY KEY (`id_pengobatan`),
  ADD KEY `id_diagnosa` (`id_diagnosa`);

--
-- Indexes for table `relasi`
--
ALTER TABLE `relasi`
  ADD KEY `id_diagnosa` (`id_diagnosa`),
  ADD KEY `id_gejala` (`id_gejala`),
  ADD KEY `id_spesialis` (`id_spesialis`);

--
-- Indexes for table `spesialis`
--
ALTER TABLE `spesialis`
  ADD PRIMARY KEY (`id_spesialis`);

--
-- Indexes for table `tmp_no`
--
ALTER TABLE `tmp_no`
  ADD UNIQUE KEY `id_diagnosa` (`id_diagnosa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `diagnosa`
--
ALTER TABLE `diagnosa`
  MODIFY `id_diagnosa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `gejala`
--
ALTER TABLE `gejala`
  MODIFY `id_gejala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pengobatan`
--
ALTER TABLE `pengobatan`
  MODIFY `id_pengobatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `diagnosa`
--
ALTER TABLE `diagnosa`
  ADD CONSTRAINT `diagnosa_ibfk_1` FOREIGN KEY (`id_spesialis`) REFERENCES `spesialis` (`id_spesialis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dokter`
--
ALTER TABLE `dokter`
  ADD CONSTRAINT `dokter_ibfk_1` FOREIGN KEY (`id_spesialis`) REFERENCES `spesialis` (`id_spesialis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `gejala`
--
ALTER TABLE `gejala`
  ADD CONSTRAINT `gejala_ibfk_1` FOREIGN KEY (`id_spesialis`) REFERENCES `spesialis` (`id_spesialis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `log`
--
ALTER TABLE `log`
  ADD CONSTRAINT `log_ibfk_2` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `log_ibfk_3` FOREIGN KEY (`id_diagnosa`) REFERENCES `diagnosa` (`id_diagnosa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengobatan`
--
ALTER TABLE `pengobatan`
  ADD CONSTRAINT `pengobatan_ibfk_1` FOREIGN KEY (`id_diagnosa`) REFERENCES `diagnosa` (`id_diagnosa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `relasi`
--
ALTER TABLE `relasi`
  ADD CONSTRAINT `relasi_ibfk_3` FOREIGN KEY (`id_spesialis`) REFERENCES `spesialis` (`id_spesialis`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `relasi_ibfk_4` FOREIGN KEY (`id_diagnosa`) REFERENCES `diagnosa` (`id_diagnosa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `relasi_ibfk_5` FOREIGN KEY (`id_gejala`) REFERENCES `gejala` (`id_gejala`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
