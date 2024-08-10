-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Des 2021 pada 21.21
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_inventori`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `kode_barang` varchar(20) DEFAULT NULL,
  `nama_ruangan` varchar(80) DEFAULT NULL,
  `nama_barang` varchar(80) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `satuan` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `image`, `kode_barang`, `nama_ruangan`, `nama_barang`, `stok`, `satuan`) VALUES
(12, 'item-211220-c5cbb8878f.jpg', 'KB23467611', 'Musholla Sementara', 'Kotak P3K', 1, 'unit'),
(13, 'item-211220-767fb3e4ec.jpg', 'KB70567155', 'Musholla Sementara', 'Mukenah', 1, 'pasang'),
(14, 'item-211220-9e163b09b8.jpg', 'KB12278719', 'Musholla Sementara', 'Sajadah', 1, 'unit'),
(15, 'item-211220-a424b1a4d2.jpg', 'KB45378759', 'Musholla Sementara', 'Kain', 2, 'unit'),
(16, 'item-211220-6b8a66cb14.jpg', 'KB40580462', 'Ruangan Security', 'Jam', 1, 'unit'),
(17, 'item-211220-67a444e29b.jpg', 'KB11457133', 'Ruangan Security', 'Kursi Merah', 1, 'unit'),
(18, 'item-211220-bac83074da.jpg', 'KB71328481', 'Ruangan Security', 'Meja', 1, 'unit'),
(19, 'item-211220-b99e006358.jpg', 'KB34774224', 'Ruangan Security', 'Kursi Merah Kecil', 2, 'unit'),
(20, 'item-211220-9c5f296957.jpg', 'KB32159636', 'Ruangan Security', 'Dispenser', 1, 'unit'),
(21, 'item-211220-1ad9a19e71.jpg', 'KB97998666', 'Ruangan Security', 'Layar CCTV', 1, 'unit'),
(22, 'item-211220-fcbb68a4ec.jpg', 'KB24583704', 'Ruangan Security', 'Gantungan Baju', 1, 'unit'),
(23, 'item-211220-9aea1163de.jpg', 'KB75067858', 'Ruangan Security', 'Sapu', 1, 'unit'),
(24, 'item-211220-858f712993.jpg', 'KB49420867', 'Ruangan Security', 'Sapu Lidi', 1, 'unit'),
(25, 'item-211220-4fc70da879.jpg', 'KB93859482', 'Ruangan Security', 'Serokan Air', 1, 'unit'),
(26, 'item-211220-63c3d1a430.jpg', 'KB96490727', 'Ruangan Security', 'Serokan Sampah', 1, 'unit'),
(27, 'item-211220-47e789f1ad.jpg', 'KB96156551', 'Ruangan Security', 'Senter Merk Power', 3, 'unit'),
(28, 'item-211221-663fcbd52a.jpg', 'KB25597450', 'Parking Area', 'Tempat Sampah 3 Warna', 1, 'unit'),
(29, 'item-211221-09a40d1a6a.jpg', 'KB61597142', 'Parking Area', 'Tempat Sampah Abu - Abu Kecil', 1, 'unit'),
(30, 'item-211221-400f04efa4.jpg', 'KB61461271', 'Parking Area', 'Kursi Pendek Abu Abu', 1, 'unit'),
(31, 'item-211221-b8f8a36ed9.jpg', 'KB54386688', 'Parking Area', 'Wastafel', 1, 'unit'),
(32, 'item-211221-ebe4c3d35a.jpg', 'KB61899581', 'Parking Area', 'Sabun Cuci Tangan', 1, 'unit'),
(33, 'item-211221-be349a7688.jpg', 'KB76429450', 'Toilet Luar', 'Wastafel', 1, 'unit'),
(34, 'item-211221-2854cfa258.jpg', 'KB69516257', 'Toilet Luar', 'Cermin', 1, 'unit'),
(35, 'item-211221-3256cac610.jpg', 'KB62416296', 'Playground Preschool dan Pre Kindly', 'Mainan Ayunan', 1, 'unit'),
(36, 'item-211221-5cfca09430.jpg', 'KB36585049', 'Playground Preschool dan Pre Kindly', 'Mainan Prosotan', 1, 'unit'),
(37, 'item-211221-033258c1e6.jpg', 'KB93174729', 'Playground Preschool dan Pre Kindly', 'Mainan Rel Kereta', 1, 'unit'),
(38, 'item-211221-2804283eb1.jpg', 'KB41773242', 'Playground Preschool dan Pre Kindly', 'Mainan Mobil Mobilan', 1, 'unit'),
(39, 'item-211221-3e268bef5d.jpg', 'KB48737178', 'Playground Preschool dan Pre Kindly', 'Mainan Kuda Kudaan', 1, 'unit'),
(40, 'item-211221-d915aaea32.jpg', 'KB35610032', 'Playground Preschool dan Pre Kindly', 'Trampolin', 1, 'unit'),
(41, 'item-211221-d38ff64953.jpg', 'KB79966309', 'Playground Preschool dan Pre Kindly', 'Mainan Basket', 1, 'unit'),
(42, 'item-211221-1b23bbeccc.jpg', 'KB98389882', 'Playground Preschool dan Pre Kindly', 'Mainan Bola Bola Litle Tikes', 1, 'unit'),
(43, 'item-211221-0d67684fb9.jpg', 'KB95596741', 'Playground Preschool dan Pre Kindly', 'Mainan Bola Bola', 1, 'unit'),
(44, 'item-211221-a4b16ee406.jpg', 'KB76600876', 'Entrance', 'Meja ', 1, 'unit'),
(45, 'item-211221-99b95332a7.jpg', 'KB42696848', 'Entrance', 'Kursi', 1, 'unit'),
(46, 'item-211221-50aa2eec36.jpg', 'KB43027554', 'Entrance', 'Handsanitizer', 1, 'unit'),
(47, 'item-211221-0a36974a95.jpg', 'KB40341840', 'Entrance', 'Tempat Tisu', 1, 'unit'),
(48, 'item-211221-1ba0d681af.jpg', 'KB39580726', 'Entrance', 'Thermogun', 1, 'unit'),
(49, 'item-211221-8c4ac62dfd.jpg', 'KB21672169', 'Entrance', 'Standing Thermogun', 1, 'unit'),
(50, 'item-211222-d1b68720e9.jpg', 'KB81786779', 'Admission', 'Kursi Putih', 12, 'unit'),
(51, 'item-211222-95ab173725.jpg', 'KB11864286', 'Admission', 'Meja Putih', 2, 'unit'),
(52, 'item-211222-57007b63c9.jpg', 'KB48390145', 'Admission', 'Akrilik Berita', 6, 'unit'),
(53, 'item-211222-47a33761f9.jpg', 'KB63812796', 'Admission', 'Dispenser Hitam', 1, 'unit'),
(54, 'item-211222-bf9f84a59b.jpg', 'KB72328076', 'Admission', 'Fingerprint', 1, 'unit'),
(55, 'item-211222-5689c76990.jpg', 'KB39161846', 'Admission', 'LCD TV', 1, 'unit'),
(56, 'item-211222-5e401693ee.jpg', 'KB47622402', 'Admission', 'Jam', 1, 'unit'),
(57, 'item-211222-11c71bab52.jpg', 'KB66210075', 'Admission', 'Tempat Tisu', 1, 'unit'),
(58, 'item-211222-48a39eea6c.jpg', 'KB50910008', 'Admission', 'Toples', 3, 'unit'),
(59, 'item-211222-223c9026b8.jpg', 'KB46085824', 'Admission', 'Remote Tv', 1, 'unit'),
(60, 'item-211222-1419c3994f.jpg', 'KB82901651', 'Admission', 'Gelas', 4, 'unit'),
(61, 'item-211222-585816ca2d.jpg', 'KB20926990', 'Admission', 'Piring Kecil', 4, 'unit'),
(62, 'item-211222-d223ca79b9.jpg', 'KB76309292', 'Admission', 'Rak Sekat Coklat Putih', 1, 'unit'),
(63, 'item-211222-87ca3cd4c7.jpg', 'KB45858382', 'Admission', 'Kotak Sampah Hitam', 1, 'unit'),
(64, 'item-211222-f4803bac53.jpg', 'KB74599592', 'Admission', 'Air Purifier Putih', 1, 'unit'),
(65, 'item-211222-18e70a413c.jpg', 'KB48443144', 'Admission', 'AC', 1, 'unit'),
(66, 'item-211222-eafca7796c.jpg', 'KB19901039', 'Admission', 'Rak Putih', 2, 'unit'),
(67, 'item-211222-d81641beba.jpg', 'KB90955767', 'Admission', 'Meja Staff', 2, 'unit'),
(68, 'item-211222-ea427af3fb.jpg', 'KB66813999', 'Admission', 'Komputer', 2, 'unit'),
(69, 'item-211222-12e14f0601.jpg', 'KB28714315', 'Admission', 'Printer', 2, 'unit'),
(70, 'item-211222-5d504fe5a9.jpg', 'KB17334718', 'Admission', 'Kursi Staff', 6, 'unit'),
(71, 'item-211222-4d1961f9bc.jpg', 'KB74943606', 'Admission', 'Rak Hitam', 1, 'unit'),
(72, 'item-211222-08c520f114.jpg', 'KB80620690', 'Admission', 'Audio System', 1, 'unit'),
(73, 'item-211222-0d95e5a486.jpg', 'KB54630203', 'Admission', 'CCTV', 1, 'unit'),
(74, 'item-211222-0db5d8c481.jpg', 'KB36090597', 'Admission', 'Handsanitizer', 1, 'unit'),
(75, 'item-211222-7d952f209e.jpg', 'KB57302081', 'Admission', 'HT', 3, 'unit'),
(76, 'item-211222-170f12af1c.jpg', 'KB41801242', 'Admission', 'Thermogun', 1, 'unit'),
(77, 'item-211222-8f2720d25f.jpg', 'KB34503542', 'Admission', 'Remote AC', 1, 'unit'),
(78, 'item-211222-5fc3f7c187.jpg', 'KB30339439', 'Koridor lantai 1', 'Kipas Hitam', 1, 'unit'),
(79, 'item-211222-e5ee78fff9.jpg', 'KB28181470', 'Koridor lantai 1', 'Rak 4X3', 4, 'unit'),
(80, 'item-211222-c5a811f765.jpg', 'KB51226354', 'Koridor lantai 1', 'Kursi Kuning Kecil', 6, 'unit'),
(81, 'item-211222-bf857a625e.jpg', 'KB85116197', 'Koridor lantai 1', 'Rak Sepatu 5 Tingkat', 3, 'unit'),
(82, 'item-211222-aa4134254d.jpg', 'KB26517996', 'Koridor lantai 1', 'CCTV', 1, 'unit'),
(83, 'item-211222-102b54d7c6.jpg', 'KB70596493', 'Koridor lantai 1', 'Kipas Hitam Turbo', 1, 'unit'),
(84, 'item-211222-db62de8a77.jpg', 'KB48034499', 'Koridor Ruang Agama', 'Rak 4x3 Tutup Putih', 1, 'unit'),
(85, 'item-211222-8e4d4fe148.jpg', 'KB97613840', 'Koridor lantai 1', 'Kotak Sampah Abu Abu Kecil', 1, 'unit'),
(86, 'item-211222-dc021785a1.jpg', 'KB57010123', 'Koridor lantai 1', 'Rak 3x4 Tutup Putih', 2, 'unit'),
(87, 'item-211222-0ee09a965d.jpg', 'KB19596314', 'Koridor lantai 1', 'Dispenser Hitam', 1, 'unit'),
(88, 'item-211222-05c01c0e88.jpg', 'KB21479914', 'Koridor lantai 1', 'Set Komputer', 1, 'unit'),
(89, 'item-211222-06c1412b42.jpg', 'KB32681470', 'Koridor lantai 1', 'Printer', 1, 'unit'),
(90, 'item-211222-2b237e1545.jpg', 'KB63796611', 'Koridor lantai 1', 'Mesin Laminating', 1, 'unit'),
(91, 'item-211222-de971e8d79.jpg', 'KB19351657', 'Koridor lantai 1', 'Kursi Staff', 1, 'unit'),
(92, 'item-211222-aeb12e7c1e.jpg', 'KB15923266', 'Koridor lantai 1', 'Playground ', 1, 'unit'),
(93, 'item-211222-5290315f33.jpg', 'KB70583623', 'Koridor lantai 1', 'APAR', 1, 'unit'),
(94, 'item-211222-35cfcf249d.jpg', 'KB52216070', 'Koridor lantai 1', 'Hiasan Bunga ', 1, 'unit'),
(95, 'item-211222-42bb883a85.jpg', 'KB91888925', 'Koridor lantai 1', 'Lemari', 4, 'unit'),
(96, 'item-211222-1e17815f16.jpg', 'KB40154706', 'Toliet Lantai 1 Laki Laki', 'Kursi Merah Kecil', 1, 'unit'),
(97, 'item-211222-e02565c120.jpg', 'KB46687409', 'Toliet Lantai 1 Laki Laki', 'Tempat Sampah ', 1, 'unit'),
(98, 'item-211222-62e9c9c245.jpg', 'KB80754058', 'Toliet Lantai 1 Laki Laki', 'Sabun', 1, 'unit'),
(99, 'item-211222-299c6ec8bc.jpg', 'KB53432876', 'Toliet Lantai 1 Laki Laki', 'Tempat Tisu', 1, 'unit'),
(100, 'item-211222-d570d78777.jpg', 'KB38368990', 'Toliet Lantai 1 Perempuan', 'Sabun', 2, 'unit'),
(101, 'item-211222-95c4fa2131.jpg', 'KB47028064', 'Toliet Lantai 1 Perempuan', 'Kursi Merah Kecil', 1, 'unit'),
(102, 'item-211222-fd7bbd4ae8.jpg', 'KB18237429', 'Toliet Lantai 1 Perempuan', 'Tempat Tisu', 1, 'unit'),
(103, 'item-211222-cfa7448aaf.jpg', 'KB85864540', 'Toliet Lantai 1 Perempuan', 'Tempat Sampah', 1, 'unit'),
(104, 'item-211222-cbd81040c6.jpg', 'KB40306117', 'Library', 'Meja Staff', 1, 'unit'),
(105, 'item-211222-0a21b74cce.jpg', 'KB94204821', 'Library', 'Komputer', 2, 'unit'),
(106, 'item-211222-f2dda18b97.jpg', 'KB61831243', 'Library', 'Kursi Staff', 2, 'unit'),
(107, 'item-211222-b3763d50e2.jpg', 'KB57906212', 'Library', 'Printer', 1, 'unit'),
(108, 'item-211222-f3ea113977.jpg', 'KB43131195', 'Library', 'Meja Putih', 3, 'unit'),
(109, 'item-211222-eb2e164b73.jpg', 'KB12785569', 'Library', 'Kursi Pink ', 4, 'unit'),
(110, 'item-211222-ceaa88ede3.jpg', 'KB34295981', 'Library', 'Kursi Hijau', 3, 'unit'),
(111, 'item-211222-3894b1d529.jpg', 'KB35411899', 'Library', 'Tempat Tisu', 1, 'unit'),
(112, 'item-211222-fa8575fde1.jpg', 'KB86583939', 'Library', 'AC', 1, 'unit'),
(113, 'item-211222-8fd0a3df7e.jpg', 'KB23658618', 'Library', 'Jam', 1, 'unit'),
(114, 'item-211222-e9d3fec9c6.jpg', 'KB47182238', 'Library', 'CCTV', 1, 'unit'),
(115, 'item-211222-43b9682864.jpg', 'KB62780179', 'Library', 'Kursi Merah', 1, 'unit'),
(116, 'item-211222-54cd5d01a1.jpg', 'KB75102470', 'Library', 'Bantal', 4, 'unit'),
(117, 'item-211222-753e126675.jpg', 'KB17395074', 'Library', 'Kursi Pendek', 2, 'unit'),
(118, 'item-211222-45a062591a.jpg', 'KB90715666', 'Library', 'Rak Buku Putih', 6, 'unit'),
(119, 'item-211222-a92e2203b5.jpg', 'KB11048788', 'Library', 'Tempat Sampah', 1, 'unit'),
(120, 'item-211222-7e57cc9890.jpg', 'KB63548442', 'Library', 'Keranjang', 1, 'unit'),
(121, 'item-211222-0e1f40b899.jpg', 'KB80568284', 'Library', 'Kursi Putih', 1, 'unit'),
(122, 'item-211222-7b98feb3a5.jpg', 'KB62768699', 'Ruang CCTV', 'LCD TV', 1, 'unit'),
(123, 'item-211222-f00174ab28.jpg', 'KB86355806', 'Ruang CCTV', 'Lemari', 1, 'unit'),
(124, 'item-211222-abe4b44558.jpg', 'KB65578834', 'Ruang CCTV', 'CCTV', 1, 'unit'),
(125, 'item-211222-386b68b7c9.jpg', 'KB92087116', 'Ruang CCTV', 'Router', 1, 'unit'),
(126, 'item-211222-ceed5ffe10.jpg', 'KB28808273', 'Koridor Ruang Agama', 'Rak Sepatu Bawah', 3, 'unit'),
(127, 'item-211222-50a369b516.jpg', 'KB32352776', 'Koridor Ruang Agama', 'Rak Sepatu Atas', 2, 'unit'),
(128, 'item-211222-415149b95c.jpg', 'KB96389558', 'Koridor Ruang Agama', 'Rak Buku', 1, 'unit'),
(129, 'item-211222-5293f6099f.jpg', 'KB76099050', 'Koridor Ruang Agama', 'Laci Panjang Tempat Duduk', 2, 'unit'),
(130, 'item-211222-b5c0d7b2f8.jpg', 'KB70112659', 'Pantry', 'Meja Panjang ', 2, 'unit'),
(131, 'item-211222-3a1b885374.jpg', 'KB78148486', 'Pantry', 'Kursi Coklat', 4, 'unit'),
(132, 'item-211222-feb07c9c31.jpg', 'KB65327015', 'Pantry', 'Kursi Merah', 2, 'unit'),
(133, 'item-211222-4c386c5642.jpg', 'KB40984509', 'Pantry', 'Kitchen Set', 1, 'unit'),
(134, 'item-211222-e525af9589.jpg', 'KB44019177', 'Pantry', 'Piring Bening', 3, 'unit'),
(135, 'item-211222-d0212917d6.jpg', 'KB22237832', 'Pantry', 'Piring Hitam', 1, 'unit'),
(136, 'item-211222-d8f4bfc095.jpg', 'KB18790687', 'Pantry', 'Bowl', 4, 'unit'),
(137, 'item-211222-f7100ef70d.jpg', 'KB95549451', 'Pantry', 'Gelas', 4, 'unit'),
(138, 'item-211222-ef3b02d6a2.jpg', 'KB12243299', 'Pantry', 'Tempat Sendok', 1, 'unit'),
(139, 'item-211222-819035c054.jpg', 'KB31887963', 'Pantry', 'Galon', 5, 'unit'),
(140, 'item-211222-64f0feb8cd.jpg', 'KB65366610', 'Pantry', 'Tempat Sampah', 1, 'unit'),
(141, 'item-211222-1e1335a9bb.jpg', 'KB28395179', 'Pantry', 'Kompor', 1, 'unit'),
(142, 'item-211222-d017aed344.jpg', 'KB68917955', 'Pantry', 'Gas', 1, 'unit'),
(143, 'item-211222-08b2c9248d.jpg', 'KB27627018', 'Pantry', 'Kemoceng', 1, 'unit'),
(144, 'item-211222-dd18193d6c.jpg', 'KB55203594', 'Pantry', 'Troli', 1, 'unit');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_ruangan`
--

CREATE TABLE `data_ruangan` (
  `id` int(11) NOT NULL,
  `kode_ruangan` varchar(20) DEFAULT NULL,
  `nama_ruangan` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_ruangan`
--

INSERT INTO `data_ruangan` (`id`, `kode_ruangan`, `nama_ruangan`) VALUES
(5, 'RAK775', 'Musholla Sementara'),
(6, 'RAK318', 'Ruangan Security'),
(7, 'RAK605', 'Parking Area'),
(8, 'RAK336', 'Toilet Luar'),
(9, 'RAK535', 'Playground Preschool dan Pre Kindly'),
(10, 'RAK480', 'Entrance'),
(11, 'RAK124', 'Admission'),
(13, 'RAK321', 'Koridor lantai 1'),
(14, 'RAK434', 'Toliet Lantai 1 Laki Laki'),
(15, 'RAK733', 'Toliet Lantai 1 Perempuan'),
(16, 'RAK582', 'Library'),
(17, 'RAK339', 'Ruang CCTV'),
(18, 'RAK691', 'Pantry'),
(19, 'RAK203', 'Koridor Ruang Agama'),
(20, 'RAK801', 'Ruang Agama Islam'),
(21, 'RAK665', 'Ruang Agama Khatolik'),
(22, 'RAK620', 'Ruang Agama Hindu Budha'),
(23, 'RAK922', 'Ruang Agama Kristen Protestan'),
(24, 'RAK164', 'Pre Kindly 2'),
(25, 'RAK819', 'Ruang Kelas K1-B'),
(26, 'RAK926', 'Ruang Kelas 2-3 A'),
(27, 'RAK540', 'Ruang Seni dan Musik'),
(28, 'RAK930', 'Koridor Lantai 2'),
(29, 'RAK851', 'WC Lantai 2'),
(30, 'RAK680', 'Mini Library Lantai 2'),
(31, 'RAK568', 'Ruang Kelas 4-5 B'),
(32, 'RAK270', 'Ruang Kelas 4-5 A'),
(33, 'RAK811', 'Swiming Pool'),
(34, 'RAK717', 'WC Swiming Pool Wanita'),
(35, 'RAK955', 'WC Swiming Pool Laki Laki'),
(36, 'RAK254', 'Basketball Field'),
(37, 'RAK501', 'Pre School'),
(38, 'RAK171', 'Pre Kindly'),
(39, 'RAK545', 'Pre Kindly Pink'),
(40, 'RAK816', 'Ruang Kelas K1-A'),
(41, 'RAK843', 'Ruang Dewan Pengurus & Ekskutif'),
(42, 'RAK741', 'WC Wanita Lantai 2'),
(43, 'RAK696', 'Ruang Terapi Wicara'),
(44, 'RAK112', 'Ruangan Komputer'),
(45, 'RAK172', 'Ruang Integrasi Sensorik'),
(46, 'RAK495', 'Finanance Directur'),
(47, 'RAK371', 'WC Lantai 2 Dalam'),
(48, 'RAK507', 'Multifunction Rom'),
(49, 'RAK296', 'WC Multifunction Room'),
(50, 'RAK122', 'Rooftop');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_sekolah`
--

CREATE TABLE `data_sekolah` (
  `id` int(11) NOT NULL,
  `nama_sekolah` varchar(80) DEFAULT NULL,
  `nama_kepsek` varchar(80) DEFAULT NULL,
  `no_telepon` varchar(15) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_sekolah`
--

INSERT INTO `data_sekolah` (`id`, `nama_sekolah`, `nama_kepsek`, `no_telepon`, `alamat`) VALUES
(1, 'HIGHSCOPE BENGKULU', '-', '000000', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_keluar`
--

CREATE TABLE `detail_keluar` (
  `no_keluar` varchar(25) DEFAULT NULL,
  `nama_barang` varchar(80) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `satuan` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail_keluar`
--

INSERT INTO `detail_keluar` (`no_keluar`, `nama_barang`, `jumlah`, `satuan`) VALUES
('BP1634323758', 'Pena', 1, 'pcs');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_terima`
--

CREATE TABLE `detail_terima` (
  `no_terima` varchar(25) DEFAULT NULL,
  `nama_barang` varchar(80) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `satuan` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail_terima`
--

INSERT INTO `detail_terima` (`no_terima`, `nama_barang`, `jumlah`, `satuan`) VALUES
('BP1634323723', 'Buku', 2, 'pcs'),
('BP1634323723', 'Pensil', 2, 'pcs'),
('BP1634323723', 'Pena', 3, 'pcs'),
('BP1634323723', 'Meja', 2, 'pcs'),
('BP1634323723', 'Kursi', 2, 'pcs'),
('BP1634323768', 'Laptop', 2, 'pcs'),
('BP1634323768', 'Komputer', 2, 'pcs'),
('BP1634323768', 'Printer', 2, 'pcs');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penerimaan`
--

CREATE TABLE `penerimaan` (
  `id` int(11) NOT NULL,
  `no_terima` varchar(25) DEFAULT NULL,
  `tgl_terima` varchar(25) DEFAULT NULL,
  `jam_terima` varchar(10) DEFAULT NULL,
  `nama_petugas` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penerimaan`
--

INSERT INTO `penerimaan` (`id`, `no_terima`, `tgl_terima`, `jam_terima`, `nama_petugas`) VALUES
(1, 'BP1634323723', '16/10/2021', '01:48:43', 'Aul'),
(2, 'BP1634323768', '16/10/2021', '01:49:28', 'Aul');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `id` int(11) NOT NULL,
  `no_keluar` varchar(25) DEFAULT NULL,
  `tgl_keluar` varchar(25) DEFAULT NULL,
  `jam_keluar` varchar(10) DEFAULT NULL,
  `nama_petugas` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengeluaran`
--

INSERT INTO `pengeluaran` (`id`, `no_keluar`, `tgl_keluar`, `jam_keluar`, `nama_petugas`) VALUES
(1, 'BP1634323758', '16/10/2021', '01:49:18', 'Aul');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `kode` varchar(20) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id`, `kode`, `nama`, `username`, `password`) VALUES
(1, 'PGN-01', 'Aul', 'admin', 'admin'),
(2, 'PGN- 54', 'demo', 'demo', 'demo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id` int(11) NOT NULL,
  `kode` varchar(20) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id`, `kode`, `nama`, `username`, `password`) VALUES
(1, 'Ptg - 01', 'Petugas', 'Petugas', 'Petugas');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_ruangan`
--
ALTER TABLE `data_ruangan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_sekolah`
--
ALTER TABLE `data_sekolah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penerimaan`
--
ALTER TABLE `penerimaan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `no_terima` (`no_terima`);

--
-- Indeks untuk tabel `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `no_keluar` (`no_keluar`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT untuk tabel `data_ruangan`
--
ALTER TABLE `data_ruangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `data_sekolah`
--
ALTER TABLE `data_sekolah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `penerimaan`
--
ALTER TABLE `penerimaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
