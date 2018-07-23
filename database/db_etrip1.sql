-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2018 at 08:09 AM
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
-- Database: `db_etrip1`
--

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `Level_ID` int(11) NOT NULL,
  `LevelName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`Level_ID`, `LevelName`) VALUES
(1, 'Administrator'),
(2, 'Customer'),
(3, 'Guide');

-- --------------------------------------------------------

--
-- Table structure for table `paket_tour`
--

CREATE TABLE `paket_tour` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `duration` varchar(5) NOT NULL,
  `UserID` int(11) NOT NULL,
  `loc` varchar(300) NOT NULL,
  `jadwal` text NOT NULL,
  `harga` double NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket_tour`
--

INSERT INTO `paket_tour` (`id`, `judul`, `duration`, `UserID`, `loc`, `jadwal`, `harga`, `image`) VALUES
(5, 'TOUR KOMPLIT #1', '4', 3, 'Pantai Selatan, Air Terjun Sendang Gile, Gili Nanggu & City Tour.Start/Finish: Bandara  Internasional Lombok ( BIL)', 'HARI 01: LOMBOK AIRPORT – PANTAI KUTA LOMBOK/PANTAI MANDALIKA09.10-09.40 : Tiba di Lombok dan Langsung Kunjungi Desa Sade untuk melihat rumah adat orang sasak09.40-10.30 : Tiba Desa Sade dan explore rumah adat dengan dibimbing oleh  pemandu lokal desa sade10.30-11.00 : Habis dari Desa Sade dan langsung Menuju  Pantai Kuta Lombok /Pantai Mandalika Lombok11.00-12.00 : Poto di pantai kuta Lombok/mandalika dan nikmati pasir putih serta pemandangan laut biru Samudra Hindia12.00 -13.30 : Makan siang di Melati Resort13.30 -14.00 : Menuju Pantai Tanjung Aan14.00-16.00  : Tiba pantai Tanjung Aan poto-poto dan menikmati pemandangan samudra hindia dan Indian Ocean view16.00-18.00  : Tinggal kan Tanjung Aan dan menuju hotel18.30-20.00  : Tiba hotel dan check in dan program bebasNOTE : Untuk Jadual hari pertama dengan kedatangan di Lombok Jam 10.00 Pagi/11.00 Pagi/ 11.45 /12.00 Pagi Masih bisa nyambung sama program hari pertama.HARI 02: SENDANG GILE & TIU KELEP TOUR07.30-08.00 : Sarapan pagi di Hotel08.00-08.30 : Di Jemput Oleh staff Lombok Traveling Tours dan langsung menuju baun pusuk atau Hutan pusuk08.30-09.00 : Tiba Baun Pusuk/Hutan Pusuk dan kasih Monyet Makan serat melihat ke indahan pemandangan nan hijau sera pemandangan 3 Gili09.00-11.00 : Tinggal kan baun pusuk dan menuju Desa Senaru11.00-13.00 : Tiba Desa Senaru dan disambut oleh pemadu wisata Air Tejun Sendang Gile & Tiu Kelep dan Langsung diajak utuk menikmati dan explore Air Terjun Sendang Gile  dan Tiu Kelep13.00-14.30 : Makan siang14.30-15.00 : Tinggalkan Desa Senaru dan menuju Masjib Bayan Kuno Desa Bayan15.00-15.30 : Tiba di Majid Bayan Kuno dan Melihat Masjid tertua di Lombok serta sejarah penyebaran agama islam15.30-18.00 : Tinggalkan Masjid Bayan Kuno langsung menuju hotel dan istirahatHARI 03: GILI NANGGU TOUR ( Gili Kedis, Gili Tangkong, Gili Sudak, & Gili Nanggu )07.30-08.00:Sarapan pagi dihotel08.00-09.30:Tinggalkan hotel dan menuju Pelabuhan Tawun dimana dipelabuhan ini anda sudah ditungggu oleh boat untuk tour & snorkleing gili09.30-09.45:Naik Boat dan menuju Gili Kedis09.45-10.20:Tiba Gili Kedis dan Snorkeling melihat ke indahan bawa laut serta poto-poto di Pulau Gili Kedis10.20-10.35:Habis dari Gili Kedis dan Kunjungi Gili Tangkong10.35-11.00:Tiba Gili Tangkong Poto-poto dan snorkeling melihat ke indahan bawah laut11.00-11.10:Tinggal kan Gili Tangkong dan menuju Gili Sudak11.10-11.40:Tiba Gili Sudak Poto-poto dan snorkeling menikmati keindahan bawah laut11.40-11.50:Tinggalkan Gili Sudak dan menuju Gili Nanggu11.50-12.45:Tiba Gili Nanggu Snorkeling menikmati pemandangan bawah laut dan poto-poto12.45-14.30:Makan siang di Gili Nanggu di Resto Nirwana / Resto Sumarni Gili Sudak dengan Menu14.30-15.00:Habis makan siang dan menikmati Gili Nanggu dan anda akan diantar balik menuju Pelabuhan Tawun dan disini Supir dan mobil sudah menunggu15.00-18.00:Tinggalkan Pelabuhan Tawun dan Menuju Mataram dan dalam perjalan sekiranya masih ada waktu bisa mapir ke Desa Banyumulek tempat pembutan gerabah Lombok serta bisa mampir di Toko Baju Oleh -oleh Lombok di Sasakku/Rian oleh-oleh18.00-19.30: transfer menuju hotel dan program selsaiHARI 04: CITY TOUR – AIRPORT07.00-08.00 : Sarapan pagi dihotel08.00-08.30 : Check out dan Menuju Toko Sasakku08.30-09.30 : Tiba sasaku dan belanja oleh2 baju khas design /tulisan Lombok09.30-10.00 : Kujungi Toko Mutiara untuk membeli oleh2 Mutiara asli Lombok10.00-10.30 : Kunjungi Toko Amelia untuk jajan oleh2 khas Lombok10.00-14.00 : Makan siang14.00-14.30 : Habis Makan siang menuju Desa Banyumulek14.30-15.30 : Tiba desa Banyumulek dan melihat kerajinan pembuatan gerabah15.30-16.20 : Menuju Desa Sukerare16.20-17.00 : Tiba Desa Sukerare dan melihat proses pembutan kain tenun Lombok17.00-17.35 : Transfer menuju airport dan program selsai', 2600000, '4-Hal-Yang-Harus-Anda-Ketahui-Tentang-Lombok-wisata-lombok.jpg'),
(6, 'TOUR KOMPLIT #2', '4', 4, 'Pantai Selatan, Gili Nanggu, Gili T. & City Tour', 'HARI 01: LOMBOK AIRPORT – PANTAI KUTA LOMBOK/PANTAI MANDALIKA\\r\\n\\r\\n09.10-09.40 : Tiba di Lombok dan Langsung Kunjungi Desa Sade untuk melihat rumah adat orang sasak\\r\\n09.40-10.30 : Tiba Desa Sade dan explore rumah adat dengan dibimbing oleh  pemandu lokal desa sade\\r\\n10.30-11.00 : Habis dari Desa Sade dan langsung Menuju  Pantai Kuta Lombok /Pantai Mandalika Lombok\\r\\n11.00-12.00 : Poto di pantai kuta Lombok/mandalika dan nikmati pasir putih serta pemandangan laut biru Samudra Hindia\\r\\n12.00 -13.30 : Makan siang di Pipe Dream Resto Kuta\\r\\n13.30 -14.00 : Menuju Pantai Tanjung Aan dan Batu Payung\\r\\n14.00-16.00  : Tiba pantai Tanjung Aan poto-poto dan menikmati pemandangan samudra hindia dan Indian Ocean view serta naik perahu menuju Batu Payung\\r\\n16.00-18.00  : Tinggal kan Tanjung Aan dan menuju hotel\\r\\n18.30-20.00  : Tiba hotel dan check in dan program bebas\\r\\nNOTE : Untuk Jadual hari pertama dengan kedatangan di Lombok Jam 10.00 Pagi/11.00 Pagi/ 11.45 /12.00 Pagi Masih bisa nyambung sama program hari pertama.\\r\\n\\r\\nHARI 02: GILI NANGGU TOUR ( Gili Kedis, Gili Tangkong, Gili Sudak, & Gili Nanggu )\\r\\n\\r\\n07.00-08.00:Sarapan pagi dihotel\\r\\n08.30-09.30:Tinggalkan hotel dan menuju Pelabuhan Tawun dimana dipelabuhan ini anda sudah ditungggu oleh boat untuk tour & snorkleing gili\\r\\n09.30-09.45:Naik Boat dan menuju Gili Kedis\\r\\n09.45-10.20:Tiba Gili Kedis dan Snorkeling melihat ke indahan bawa laut serta poto-poto di Pulau Gili Kedis\\r\\n10.20-10.35:Habis dari Gili Kedis dan Kunjungi Gili Tangkong\\r\\n10.35-11.00:Tiba Gili Tangkong Poto-poto dan snorkeling melihat ke indahan bawah laut\\r\\n11.00-11.10:Tinggal kan Gili Tangkong dan menuju Gili Sudak\\r\\n11.10-11.40:Tiba Gili Sudak Poto-poto dan snorkeling menikmati keindahan bawah laut\\r\\n11.40-11.50:Tinggalkan Gili Sudak dan menuju Gili Nanggu\\r\\n11.50-12.45:Tiba Gili Nanggu Snorkeling menikmati pemandangan bawah laut dan poto-poto\\r\\n12.45-14.30:Makan siang di Gili Nanggu di Resto Nirwana / Resto Sumarni Gili Sudak dengan Menu\\r\\n14.30-15.00:Habis makan siang dan menikmati Gili Nanggu dan anda akan diantar balik menuju Pelabuhan Tawun dan disini Supir dan mobil sudah menunggu\\r\\n15.00-18.00:Tinggalkan Pelabuhan Tawun dan Menuju Mataram dan dalam perjalan sekiranya masih ada waktu bisa mapir ke Desa Banyumulek tempat pembutan gerabah Lombok serta bisa mampir di Toko Baju Oleh -oleh Lombok di Sasakku/Rian oleh-oleh\\r\\n18.00-19.30: transfer menuju hotel dan program selsai\\r\\nHARI  03 : GILI EXPLORE & SNORKELING ( GILI AIR, GILI MENO , & GILI TRAWANGAN )\\r\\n\\r\\n07.00-08.00 : Sarapan Pagi di Hotel\\r\\n08.30-09.10 : Dijemput dan Perjalanan menuju pelabuhan Kancinan/Teluk Nara\\r\\n09.10-09.30 : Tiba Pelabuhan dan langsung menuju Gili Air\\r\\n09.30-10.30 : Tiba Gili Air dan Aktivitas snorkeling menikmati biota pemandanga bawah laut\\r\\n10.30-10.40 : Habis dari Gili Air menuju Gili Meno\\r\\n10.40-11.30 : Aktivitas di Gili Meno snorkeling dan berenang bersama kura-kura dan menikamati pemndang biota lautnya\\r\\n11.30-11.40 : Menuju Gili Trawangan\\r\\n11.40-12.30 : Aktivitas di Gili Trawangan snorkeling dan menikamati pemandang biota lautnya dengan karang biru\\r\\n12.30-14.00 : Makan siang dan istirahat di Gili Trawangan\\r\\n14.00-15.00 : Habis makan siang aktivitas keliling pulau Gili Trawangan menggunakan Delman/Cidomo dengan biaya Sendiri, Menuju Ayunan Ombak Sunset untuk poto-poto dan melihat penangkaran Kura-Kura\\r\\n15.30-16.20 : Balik dari gili Trawangan  menuju pelabuhan kancinan/teluk nare\\r\\n16.30-18.00 : Melihat Matahari tenggelam /Sunset di Bukit Malimbu sambil menikmati kelapa muda dan jagung bakar\\r\\n18.30-20.00 : Acara bebas dan Istirahat di hotel\\r\\nHARI 04: CITY TOUR – AIRPORT\\r\\n\\r\\n07.30-08.00 : Sarapan pagi dihotel\\r\\n08.00-08.30 : Check out dan Menuju Toko Sasakku\\r\\n08.30-09.30 : Tiba sasaku dan belanja oleh2 baju khas design /tulisan Lombok\\r\\n09.30-10.00 : Kujungi Toko Mutiara untuk membeli oleh2 Mutiara asli Lombok\\r\\n10.00-10.30 : Kunjungi Toko Amelia untuk jajan oleh2 khas Lombok\\r\\n10.00-14.00 : Makan siang\\r\\n14.00-14.30 : Habis Makan siang menuju Desa Banyumulek\\r\\n14.30-15.30 : Tiba desa Banyumulek dan melihat kerajinan pembuatan gerabah\\r\\n15.30-16.20 : Menuju Desa Sukerare\\r\\n16.20-17.00 : Tiba Desa Sukerare dan melihat proses pembutan kain tenun Lombok\\r\\n17.00-17.35 : Transfer menuju airport dan program selsai', 2700000, '8.jpg'),
(7, 'Lombok Tour Scannery', '3', 4, 'Taman Pusuk Sembalun, Air terjun Sendang Gile dan Tiu Kelep, pantai yang berpasir putih di selatang', 'HARI 01: LOMBOK AIRPORT – PANTAI KUTA LOMBOK/PANTAI MANDALIKA – TANJUNG AN & BUKIT MERESE\\r\\n\\r\\n09.10-09.40 : Tiba diLombok dan Langsngu Kunjungi Desa Sade untuk melihat rumah Orang sasak\\r\\n09.40-10.30 : Tiba Desa Sade dan explore rumah adat dengan dibimbing oleh local guide\\r\\n10.30-11.30 : Lanjutkan perjalanan menuju Pantai Kuta Lombok /Pantai Mandalika Lombok\\r\\n11.30-12.00 : Tiba di Pantai Kuta Lombok/Mandalika dan nikmati pasir putih serta pemandangan laut biru\\r\\n12.00-13.30 : Makan siang di Resto Segara anak\\r\\n13.30-14.00 : Habis makan siang dan perjalan dilanjutkan menuju Pantai Tanjung aan\\r\\n14.00-16.00 : Tiba pantai tanjung aan poto2 dan menikmati pemandangan samudra hindia dan Indian Ocean view\\r\\n16.00-16.07 : Tinggal kan Tanjung aan dan menuju Bukit Merese Untuk menikmati Sunset dan Pemandangan Laut samudra Hindia\\r\\n16.07-17.00 : Tiba Bukit Merese dan langsung menikmati pemandang laut lepas yang sangat menakjubkan\\r\\n17.00-18.30 : Habis dari Bukit Merese dan Langsung menuju hotel dan check in dan program bebas\\r\\nHARI 02: LOMBOK LAND CRUISE TOUR\\r\\n\\r\\n07.30-08.00 : Sarapan pagi di Hotel\\r\\n08.00-10.30 : dari hotel dan langsung menuju Taman Nasional Sembalun Lawang\\r\\n10.30-11.15 : Tiba diSembalun Taman Nasional Sembalun Lawang yang berada dibawah kaki Gunung Rinjani dan nikmati pemandangan Gunung Rinjani serta pemandangan landskip perbukitan sembalun\\r\\n11.15-11.45 : Tinggalkan Taman Sembalun dan lanjutkan perjalanan menuju Masjid Bayan Kuno\\r\\n11.45-12.30 : Tiba Masjid Bayan Kuno dan Kunjungi keliling masjid dengan di dampingi oleh local guide yang akan menceriktak tetang sejara dari pada Masjid bayan kuno dan masjid ini dalah masjid paling tertua di Pulau Lombok dan merupakan tempat awal pertama kali penyebaran agama islam di Pulau Lombok\\r\\n12.30-13.00 : Tinggalkan Masjid Bayan Kuno dan Menuju Desa Senaru\\r\\n13.00-14.00 : Setalah tiba di Desa Senaru dan langsung makan siang di Resto Rinjani Lodge \\r\\n14.00-16.00 : Habis makan siang dan langsu kunjungi dan menikmati pemandangan air terjun Sendang Gile & Air Terjun Tiu Kekep\\r\\n16.00-18.00 : Habis dari Air Terjun dan Langsung menuju bukit Malimbu untuk menikmati Matahari Tenggelam/Sunset\\r\\n18.00-19.30 : setelah selaesai langsung menuju ke Hotel dan istirahat\\r\\nHARI 03: CITY TOUR – AIRPORT\\r\\n\\r\\n07.30-08.00 : Sarapan pagi dihotel\\r\\n08.00-08.30 : Check out dan Menuju Toko Sasakku\\r\\n08.30-09.30 : Tiba sasaku dan belanja oleh2 baju khas design /tulisan Lombok\\r\\n09.30-10.00 : Kujungi Toko Mutiara\\r\\n10.00-10.30 : Kunjungi Toko Amelia untuk jajan oleh2 Lombok\\r\\n10.00-14.00 : Makan siang di Resto Mimi Asri / LCC Resto\\r\\n14.00-14.30 : Habis Makan siang menuju Desa Banyumulek\\r\\n14.30-15.30 : Tiba desa banyumulke dan melihat kerajinan pembuatan gerabah\\r\\n15.30-16.20 : Menuju Desa Sukerare\\r\\n16.20-17.00 : Tiba Desa Sukerare dan melihat proses pembutan kain tenun Lombok\\r\\n17.00-17.35 : Transfer menuju airport program selesai', 2200000, '88.jpg'),
(8, 'Air Terjun Sendang Gile, Pantai Selatan & City Tour', '3', 5, 'Air Terjun Sendang Gile, Pantai Selatan & City Tour', 'HARI 01: LOMBOK AIRPORT – PANTAI KUTA LOMBOK/PANTAI MANDALIKA & BUKIT MERESE\\r\\n\\r\\n09.10-09.40 : Tiba diLombok dan Langsngu Kunjungi Desa Sade untuk melihat rumah ada Orang sasak\\r\\n09.40-10.30 : Tiba Desa Sade dan explore rumah adat dengan dibimbing oleh local guide\\r\\n10.30-11.30 : Lanjutkan perjalanan menuju Pantai Kuta Lombok /Pantai Manda Lika Lombok\\r\\n11.30-12.00 : Tiba di Pantai Kuta Lombok/Mandalika dan nikmati pasir putih serta pemandangan laut biru\\r\\n12.00-13.30 : Makan siang di Melati Resort\\r\\n13.30-14.00 : Habis makan siang dan perjalan dilanjutkan menuju Pantai Tanjung aan\\r\\n14.00-16.00 : Tiba pantai tanjung aan poto2 dan menikmati pemandangan samudra hindia\\r\\n16.00-16.07 : Tinggal kan Tanjung aan dan menuju Bukit\\r\\n16.07-17.00 : Tiba Bukit Merese dan langsung menikmati pemandang laut lepas yang sangat menakjubkan\\r\\n17.00-18.30 : Habis dari Bukit Merese dan Langsung menuju hotel dan check in dan program bebas\\r\\nHARI 02: SENDANG GILE & TIE KELEP TOUR\\r\\n\\r\\n07.30-08.00 : Sarapan pagi di Hotel\\r\\n08.00-08.30 : Di Jemput Oleh staff  langsung menuju baun pusuk atau Hutan pusuk\\r\\n08.30-09.00 : Tiba Baun Pusuk/Hutan Pusuk dan kasih Monyet Makan serat melihat ke indahan pemandangan nan hijau serta pemandangan 3 Gili\\r\\n09.00-11.00 : Tinggal kan baun pusuk dan menuju Desa Senaru\\r\\n11.00-13.00 : Tiba Desa Senaru dan disambut oleh pemadu wisata Air Tejun Sendang Gile & Tiu Kelep dan Langsung diajak utuk menikmati dan explore Air Terjun Sendang Gile dan Tiu Kelep\\r\\n13.00-14.30 : Makan siang di Resto Pondok senaru samabil melihat pemandangan pegunungan Rinjani\\r\\n14.30-15.00 : Tinggalkan Desa Senaru dan menuju Masjib Bayan Kuno Desa Bayan\\r\\n15.00-15.30 : Tiba di Majid Bayan Kuno dan Melihat Masjid tertua di Lombok serta sejarah penyebaran agama islam\\r\\n15.30-18.00 : Tinggalkan Masjid Bayan Kuno dan langsung menuju hotel dan istirahat\\r\\nHARI 03: CITY TOUR – AIRPORT\\r\\n\\r\\n07.30-08.00 : Sarapan pagi dihotel\\r\\n08.00-08.30 : Check out dan Menuju Toko Sasakku\\r\\n08.30-09.30 : Tiba sasaku dan belanja oleh2 baju khas design /tulisan Lombok\\r\\n09.30-10.00 : Kujungi Toko Mutiara\\r\\n10.00-10.30 : Kunjungi Toko Amelia untuk jajan oleh2 Lombok\\r\\n10.00-14.00 : Makan siang di Resto Tanjung Karang /D Kota Resto\\r\\n14.00-14.30 : Habis Makan siang menuju Desa Banyumulek\\r\\n14.30-15.30 : Tiba desa banyumulke dan melihat kerajinan pembuatan gerabah\\r\\n15.30-16.20 : Menuju Desa Sukerare\\r\\n16.20-17.00 : Tiba Desa Sukerare dan melihat proses pembutan kain tenun Lombok\\r\\n17.00-17.35 : Transfer menuju airport', 2000000, '88773fcecca61e152cf37338906d27f5.jpg'),
(9, 'Snorkeling di Gili Nanggu & Explore Lombok', '3', 6, 'Gili Nanggu, Pantai Kuta, Bukit Meresek & City Tour', 'HARI 01: LOMBOK AIRPORT – PANTAI KUTA LOMBOK/PANTAI MANDALIKA-PANTAI TANJUNG AAN & BUKIT MERESE\\r\\n\\r\\n09.10-09.40 : Tiba diLombok dan Langsngu Kunjungi Desa Sade untuk melihat rumah ada Orang sasak\\r\\n09.40-10.30 : Tiba Desa Sade dan explore rumah adat sade dengan dibimbing oleh local guide setempat\\r\\n10.30-11.30 : Lanjutkan perjalanan menuju Pantai Kuta Lombok /Pantai Manda Lika Lombok\\r\\n11.30-12.00 : Tiba di Pantai Kuta Lombok/Mandalika dan nikmati pasir putih serta pemandangan laut biru samudar Hindia\\r\\n12.00-13.30 : Makan siang di Melati Resort\\r\\n13.30-14.00 : Habis makan siang dan perjalan dilanjutkan menuju Pantai Tanjung aan\\r\\n14.00-16.00 : Tiba pantai tanjung aan poto2 dan menikmati pemandangan samudra hindia dan Indian Ocean view\\r\\n16.00-16.07 : Tinggal kan Tanjung aan dan menuju Bukit Merese Untuk menikmati Sunset dan Pemandangan Laut samudra Hindia\\r\\n16.07-17.00 : Tiba Bukit Merese dan langsung menikmati pemandang laut lepas yang sangat menakjubkan\\r\\n17.00-18.30 : Habis dari Bukit Merese dan Langsung menuju hotel untuk istirahat\\r\\nHARI 02: GILI NANGGU TOUR (Gili Kedis, Gili Tangkong, Gili Sudak, & Gili Nanggu)\\r\\n\\r\\n07.30-08.00 : Sarapan pagi dihotel\\r\\n08.30-09.30 : Tinggalkan hotel dan menuju Pelabuhan Tawun dimana dipelabuhan ini anda sudah ditungggu oleh boat untuk tour & snorkleing gili\\r\\n09.30-09.45 : Naik Boat dan menuju Gili Kedis\\r\\n09.45-10.20 : Tiba Gili Kedis dan Snorkeling melihat ke indahan bawa laut serta poto-poto di Pulau Gili Kedis\\r\\n10.20-10.35 : Habis dari Gili Kedis dan Kunjungi Gili Tangkong\\r\\n10.35-11.00 : Gili Tangkong Poto-poto dan snorkeling melihat ke indahan bawah laut\\r\\n11.00-11.10 : Tinggal kan Gili Tangkong dan menuju Gili Sudak\\r\\n11.10-11.40 : Tiba Gili Sudak Poto-poto dan snorkeling menikmati keindahan bawah laut\\r\\n11.40-11.50 : Tinggalkan Gili Sudak dan menuju Gili Nanggu\\r\\n11.50-12.45 : Tiba Gili Nanggu Snorkeling menikmati pemandangan bawah laut\\r\\n12.45-14.30 : Makan siang di Gili Nanggu\\r\\n14.30-15.00 : Habis makan siang dan menikmati Gili Nanggu dan anda akan diantar balik menuju Pelabuhan Tawun dan disini Supir dan mobil sudah menunggu\\r\\n15.00-18.00 : Tinggalkan Pelabuhan Tawun dan Menuju Mataram dan dalam perjalan sekiranya masih ada waktu bisa mapir ke Desa Banyumulek tempat pembutan gerabah Lombok serta bisa mampir di Toko Baju Oleh -oleh Lombok di Sasakku/Rian oleh-oleh dan transfer menuju hotel untuk istirahat\\r\\nHARI 03: CITY TOUR – AIRPORT\\r\\n\\r\\n07.30-08.00 : Sarapan pagi dihotel\\r\\n08.00-08.30 : Check out dan Menuju Toko Sasakku\\r\\n08.30-09.30 : Tiba sasaku dan belanja oleh2 baju khas design /tulisan Lombok\\r\\n09.30-10.00 : Kujungi Toko Mutiara untuk melihat Mutiara asli Lombok serta bisa membelinya untuk oleh-oleh\\r\\n10.00-10.30 : Kunjungi Toko Amelia untuk jajan oleh2 Lombok\\r\\n10.00-14.00 : Makan siang di Mimi Asri Resto / LCC Resto\\r\\n14.00-14.30 : Habis Makan siang menuju Desa Banyumulek\\r\\n14.30-15.30 : Tiba desa banyumulke dan melihat kerajinan pembuatan gerabah\\r\\n15.30-16.20 : Menuju Desa Sukerare\\r\\n16.20-17.00 : Tiba Desa Sukerare dan melihat proses pembutan kain tenun Lombok\\r\\n17.00-17.30 : Transfer menuju airport program selesai', 1800000, 'be3b5c71d858b86a441f1a29bbb75b21.jpg'),
(10, 'Sasak Tour, Pantai Kuta & Pantai Tanjung Aan', '1', 3, 'Sasak Tour, Pantai Kuta & Pantai Tanjung Aan', '08.30-09.00  : di Jepmut di hotel tempat menginap dan menuju Desa Sukerare\\r\\n09.00-10.00  : Tiba Desa Sukerare dan melihat proses pembutan kain tenun Lombok,poto-poto dan bijuga membeli oleh-oleh kain tenun untuk dibawah pulang\\r\\n10.00-10.30  : Habis dari Desa sukerare menuju Sade untuk melihat rumah adat Suku sasak\\r\\n10.30-11.00  : Tiba Desa Sade dan keliling melihat rumah adat dengan dibimbing oleh pemaduwisata di Desa tersebut\\r\\n11.00-12.00  : Tinggalkan Desa Sade dan menuju Pantai Kuta Lombok /Pantai Mandalika Lombok\\r\\n12.00-12.30  : Tiba di Pantai Kuta Lombok/Mandalika dan nikmati pasir putih serta pemandangan laut biru samudra Hindia\\r\\n12.30-14.00  : Makan siang di slah satu restoran\\r\\n14.30-14.00  : Habis makan siang dan perjalan dilanjutkan menuju Pantai Tanjung aan\\r\\n14.00-16.00  : Tiba pantai tanjung aan poto2 dan menikmati pemandangan\\r\\n16.00-16.07  : menuju Bukit Merese Untuk menikmati Sunset\\r\\n16.07-17.00  : menikmati pemandang laut lepas yang sangat menakjubkan di bukit merese\\r\\n17.00-18.00  : Habis dari Bukit Merese dan Langsung menuju hotel\\r\\n18.00-18.00  : Check in hotel dan program selsai', 550000, 'bukit1.jpg'),
(12, 'Explore & Snorkeling Gili Nanggu, Gili Tangkong, Gili Sudak & Gili Kedis', '1', 5, 'Explore & Snorkeling Gili Nanggu, Gili Tangkong, Gili Sudak & Gili Kedis', '08.30-09.30   :  Tinggalkan hotel dan menuju Pelabuhan\\r\\n09.30-09.45  :  Naik Boat danmenujuGiliKedis\\r\\n09.45-10.20  :  Snorkeling melihat ke indahan bawa laut serta poto-poto di Pulau Gili Kedis\\r\\n10.20-10.35  :  Habis dari Gili Kedis dan Kunjungi Gili Tangkong\\r\\n10.35-11.00   :  Tiba Gili Tangkong Poto-poto dan snorkeling melihat ke indahan bawah laut\\r\\n11.00-11.10   :  Tinggalkan Gili Tangkong dan menuju Gili Sudak\\r\\n11.10-11.40   :  Tiba Gili Sudak Poto-poto dan snorkeling menikmati keindahan bawah laut\\r\\n11.40-11.50   :  Tinggalkan Gili Sudak dan menuju Gili Nanggu\\r\\n11.50-13.45   :  Gili Nanggu Snorkeling menikmati pemandangan bawah laut dan poto-poto\\r\\n13.45-15.00   :  Istirahat atau menikmati makan siang (tidak termasuk)\\r\\n15.00-15.30   :  balik menuju Pelabuhan Tawun dan disini Supir danmobil sudah menunggu\\r\\n15.30-18.00   :  Tinggalkan Pelabuhan Tawun dan Menuju hotel (program selesai)', 850000, '8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tour`
--

CREATE TABLE `tour` (
  `TourID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `Packages` int(11) NOT NULL,
  `StartDate` date NOT NULL,
  `EndDate` date NOT NULL,
  `TotalPrice` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tour`
--

INSERT INTO `tour` (`TourID`, `UserID`, `Packages`, `StartDate`, `EndDate`, `TotalPrice`) VALUES
(22, 1, 7, '2018-07-05', '2018-07-08', 2200000),
(23, 2, 6, '2018-07-28', '2018-08-01', 2700000),
(24, 2, 6, '2018-07-12', '2018-07-16', 2700000),
(25, 3, 12, '2018-07-28', '2018-07-29', 850000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` int(11) NOT NULL,
  `Level_ID` int(11) NOT NULL,
  `FullName` varchar(200) NOT NULL,
  `Gender` enum('M','F') NOT NULL,
  `Phone` int(13) NOT NULL,
  `Address` text NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `Level_ID`, `FullName`, `Gender`, `Phone`, `Address`, `Email`, `Password`) VALUES
(1, 1, 'Phadma Phitaloka', 'F', 978678567, 'Madiun', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3'),
(2, 2, 'Shizuka', 'F', 988688, 'Jepang', 'customer@gmail.com', '91ec1f9324753048c0096d036a694f86'),
(3, 3, 'Nobi Nobita', 'M', 868576565, 'Tokyo', 'guide@gmail.com', 'a0c391dc49c440fc9962168353cedde3'),
(4, 3, 'Ryanto', 'M', 98978686, 'Malang', 'ryanto@gmail.com', 'a0c391dc49c440fc9962168353cedde3'),
(5, 3, 'Adinda', 'F', 878867576, 'Surabaya', 'adinda@gmail.com', 'a0c391dc49c440fc9962168353cedde3'),
(6, 3, 'Yurianto', 'M', 998687765, 'Malang', 'yurianto@gmail.com', 'guide');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`Level_ID`);

--
-- Indexes for table `paket_tour`
--
ALTER TABLE `paket_tour`
  ADD PRIMARY KEY (`id`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`TourID`),
  ADD KEY `Packages` (`Packages`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`),
  ADD KEY `LevelID` (`Level_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `Level_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `paket_tour`
--
ALTER TABLE `paket_tour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tour`
--
ALTER TABLE `tour`
  MODIFY `TourID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `paket_tour`
--
ALTER TABLE `paket_tour`
  ADD CONSTRAINT `paket_tour_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`);

--
-- Constraints for table `tour`
--
ALTER TABLE `tour`
  ADD CONSTRAINT `tour_ibfk_1` FOREIGN KEY (`Packages`) REFERENCES `paket_tour` (`id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`Level_ID`) REFERENCES `level` (`Level_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
